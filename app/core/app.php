<?php
class App {
    // 1. Khai báo các thuộc tính mặc định ở đây
    protected $controller = 'homeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        // Hàm này tự động chạy khi ứng dụng được khởi tạo
        $url = $this->parseUrl();

        // 2. Xử lý Controller
        if (isset($url[0])) {
            // Kiểm tra xem file controller tương ứng có tồn tại không
            if (file_exists('../app/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
                $this->controller = ucfirst($url[0]) . 'Controller';
                unset($url[0]);
            }
        }

        // Nhúng file controller vào hệ thống
        require_once '../app/controllers/' . $this->controller . '.php';

        // Khởi tạo đối tượng từ controller
        $this->controller = new $this->controller;

        // 3. Xử lý Method (Action)
        if (isset($url[1])) {
            // Kiểm tra xem method đó có tồn tại trong class controller vừa gọi không
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // 4. Xử lý Tham số (Parameters) còn lại trên URL
        $this->params = $url ? array_values($url) : [];

        // Gọi controller, method và truyền tham số vào
        call_user_call_array([$this->controller, $this->method], $this->params);
    }

    // Hàm cắt nhỏ và lọc sạch URL
    public function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
