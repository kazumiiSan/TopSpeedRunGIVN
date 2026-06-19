<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #0b0c10;
            color: #c5c6c7;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar-dark-custom {
            background: rgba(31, 40, 51, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(102, 252, 241, 0.2);
        }
        .text-cyan {
            color: #66fcf1;
        }
        .btn-cyan {
            background-color: #66fcf1;
            color: #0b0c10;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-cyan:hover {
            background-color: #45a29e;
            color: #fff;
            box-shadow: 0 0 15px rgba(102, 252, 241, 0.5);
        }
        .hero-section {
            background: linear-gradient(135deg, rgba(11,12,16,0.9) 30%, rgba(31,40,51,0.6) 100%), url('https://images.unsplash.com/photo-1511512578047-dfb367046420?auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
            padding: 100px 0;
            border-bottom: 1px solid rgba(102, 252, 241, 0.1);
        }
        .feature-card {
            background: rgba(31, 40, 51, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            transition: transform 0.3s ease, border-color 0.3s ease;
            backdrop-filter: blur(5px);
        }
        .feature-card:hover {
            transform: translateY(-5px);
            border-color: #66fcf1;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-dark-custom sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-cyan" href="#"><i class="fa-solid fa-gauge-high me-2"></i>TopSpeedRunGIVN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-span"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active text-cyan" href="#">Trang Chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Bảng Xếp Hạng</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Trò Chơi</a></li>
                    <li class="nav-item"><a class="btn btn-cyan btn-sm ms-2 px-3 mt-1 mt-lg-0" href="#">Đăng Nhập</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section text-center text-lg-start d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold text-white mb-3">Vượt Qua <span class="text-cyan">Mọi Giới Hạn</span> Tốc Độ</h1>
                    <p class="lead text-muted mb-4">Nơi tổng hợp, ghi nhận và vinh danh những kỷ lục speedrun đỉnh cao từ các game thủ Việt Nam. Bạn có đủ nhanh để làm chủ bảng xếp hạng?</p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                        <a href="#" class="btn btn-cyan btn-lg px-4"><i class="fa-solid fa-trophy me-2"></i>Xem Kỷ Lục</a>
                        <a href="#" class="btn btn-outline-secondary btn-lg px-4 text-white">Tìm Hiểu Thêm</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 text-center">
                    <i class="fa-solid fa-flag-checkered text-cyan" style="font-size: 12rem; opacity: 0.15; filter: drop-shadow(0 0 20px #66fcf1);"></i>
                </div>
            </div>
        </div>
    </header>

    <main class="container my-5 py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-white">Tính Năng <span class="text-cyan">Nổi Bật</span></h2>
            <p class="text-muted">Khám phá hệ thống quản lý và tối ưu hóa trải nghiệm đua top</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card feature-card p-4 h-100 text-center text-md-start">
                    <div class="text-cyan mb-3"><i class="fa-solid fa-bolt fa-2x"></i></div>
                    <h4 class="text-white mb-2">Cập Nhật Real-time</h4>
                    <p class="text-muted mb-0">Hệ thống xử lý và cập nhật thành tích ngay lập tức khi record được duyệt.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card p-4 h-100 text-center text-md-start">
                    <div class="text-cyan mb-3"><i class="fa-solid fa-chart-line fa-2x"></i></div>
                    <h4 class="text-white mb-2">Thống Kê Chi Tiết</h4>
                    <p class="text-muted mb-0">Phân tích sâu thông số xe, cấu hình bộ phận (LSD, phuộc nhún) hỗ trợ tối ưu góc cua.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card p-4 h-100 text-center text-md-start">
                    <div class="text-cyan mb-3"><i class="fa-solid fa-shield-halved fa-2x"></i></div>
                    <h4 class="text-white mb-2">Xác Thực Uy Tín</h4>
                    <p class="text-muted mb-0">Đội ngũ kiểm duyệt nghiêm ngặt chống gian lận, đảm bảo tính công bằng.</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-4 text-center border-top border-secondary style="background-color: #1f2833; border-color: rgba(255,255,255,0.05) !important;">
        <div class="container">
            <p class="mb-0 text-muted">&copy; 2026 <span class="text-cyan">TopSpeedRunGIVN</span>. Xây dựng bằng mô hình MVC thuần PHP.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
