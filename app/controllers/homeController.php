<?php
class homeController extends Controller {
    public function index() {
        // Bạn có thể lấy dữ liệu từ Model ở đây nếu cần
        // Ví dụ: $games = $this->model('GameModel')->getTopGames();
        
        $data = [
            'title' => 'TopSpeedRunGIVN - Trang Chủ'
        ];

        // Gọi view và truyền dữ liệu qua
        $this->view('home/index', $data);
    }
}
