<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sản Phẩm - {{ $food->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fcfcfc;
        }
        
        .header-top {
            background-color: #000;
            color: #fff;
            padding: 10px 0;
            margin-bottom: 50px;
        }
        .nav-link {
            color: #fff !important;
            font-weight: bold;
        }

        .product-detail-container {
            background: #fff;
            padding: 50px;
            border-radius: 12px;
            box-shadow: 0 5px 30px rgba(0,0,0,0.03);
            display: flex;
            align-items: center;
            gap: 50px;
            position: relative;
        }

        .product-image-area {
            flex: 1;
            position: relative;
            text-align: center;
        }

        .main-image {
            max-width: 100%;
            height: auto;
            max-height: 400px;
            border-radius: 10px;
            z-index: 2;
            position: relative;
        }

        /* Nutrient badges */
        .nutrient-badge {
            position: absolute;
            background: #fff;
            padding: 5px 15px;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            font-weight: 600;
            color: #666;
            display: flex;
            align-items: center;
            gap: 8px;
            z-index: 3;
            transition: all 0.3s;
        }
        
        .nutrient-badge::before {
            content: '';
            width: 12px;
            height: 12px;
            background-color: #8cc63f;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 0 3px rgba(140, 198, 63, 0.2);
        }

        .nutrient-badge:hover {
            transform: scale(1.05);
            color: #333;
        }

        .badge-1 { top: 10%; right: 5%; }
        .badge-2 { top: 50%; right: -5%; }
        .badge-3 { bottom: 10%; right: 5%; }

        .product-info-area {
            flex: 1;
        }

        .product-title {
            font-size: 32px;
            font-weight: 700;
            color: #333;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .price-section {
            display: flex;
            align-items: baseline;
            gap: 15px;
            margin-bottom: 30px;
        }

        .current-price {
            font-size: 28px;
            font-weight: 700;
            color: #8cc63f;
        }

        .old-price {
            font-size: 18px;
            color: #999;
            text-decoration: line-through;
        }

        .product-desc {
            font-size: 15px;
            color: #666;
            line-height: 1.8;
            margin-bottom: 40px;
            text-align: justify;
        }

        .btn-green {
            background-color: #8cc63f;
            color: #fff;
            border: none;
            padding: 12px 35px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s;
            text-transform: uppercase;
        }

        .btn-green:hover {
            background-color: #7ab232;
            color: #fff;
            box-shadow: 0 5px 15px rgba(140,198,63,0.4);
        }

        @media (max-width: 991px) {
            .product-detail-container {
                flex-direction: column;
            }
            .nutrient-badge {
                position: static;
                display: inline-flex;
                margin: 10px;
            }
        }
    </style>
</head>
<body>

<header class="header-top">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <h2 class="m-0" style="color:white;"><span style="color:#8cc63f;">🌱</span> AT10</h2>
        </div>
        <nav class="d-flex gap-4">
            <a href="#" class="nav-link text-decoration-none text-white">TRANG CHỦ</a>
            <a href="#" class="nav-link text-decoration-none text-white">GIỚI THIỆU</a>
            <a href="{{ route('foods.index') }}" class="nav-link text-decoration-none" style="color:#8cc63f !important;">SẢN PHẨM</a>
            <a href="#" class="nav-link text-decoration-none text-white">LIÊN HỆ</a>
            <a href="{{ route('foods.create') }}" class="nav-link text-decoration-none text-white">THÊM MỚI</a>
        </nav>
    </div>
</header>

<div class="container mb-5">
    
    <a href="{{ route('foods.index') }}" class="text-decoration-none text-success fw-bold mb-4 d-inline-block">&larr; Quay lại danh sách</a>

    <div class="product-detail-container">
        
        <!-- Left Side: Image with badges -->
        <div class="product-image-area">
            <img src="{{ $food->image ? asset($food->image) : 'https://via.placeholder.com/600?text=' . urlencode($food->name) }}" alt="{{ $food->name }}" class="main-image">
            
            @if($food->sodium)
                <div class="nutrient-badge badge-1"><span>{{ $food->sodium }}</span> Sodium</div>
            @endif
            @if($food->fiber)
                <div class="nutrient-badge badge-2"><span>{{ $food->fiber }}</span> Fiber</div>
            @endif
            @if($food->vitamin_c)
                <div class="nutrient-badge badge-3"><span>{{ $food->vitamin_c }}</span> Vitamin C</div>
            @endif
        </div>

        <!-- Right Side: Info -->
        <div class="product-info-area">
            <h1 class="product-title">{{ $food->name }}</h1>
            
            <div class="price-section">
                <span class="current-price">{{ number_format($food->price, 0, ',', '.') }}đ</span>
                @if($food->old_price)
                    <span class="old-price">{{ number_format($food->old_price, 0, ',', '.') }}đ</span>
                @endif
            </div>

            <div class="product-desc">
                {{ $food->description ?? 'Đang cập nhật mô tả cho sản phẩm này.' }}
            </div>

            <button class="btn btn-green">CHI TIẾT</button>
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
