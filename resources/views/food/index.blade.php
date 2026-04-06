<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm AT10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff;
        }

        /* HEADER */
        .header-top {
            background-color: #000;
            color: #fff;
            padding: 15px 0;
        }
        .logo-text {
            color: white;
            font-weight: 800;
            font-size: 24px;
            letter-spacing: 1px;
            margin: 0;
            display: flex;
            align-items: center;
        }
        .logo-text i {
            color: #8cc63f;
            font-size: 28px;
            margin-right: 8px;
        }
        .header-nav {
            display: flex;
            gap: 25px;
            align-items: center;
        }
        .nav-link {
            color: #fff !important;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            padding: 0;
            transition: color 0.3s;
        }
        .nav-link:hover, .nav-link.active-nav {
            color: #8cc63f !important;
        }
        .search-icon {
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        /* TABS */
        .category-tabs {
            margin-top: 40px;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: center;
            gap: 40px;
        }
        .category-tabs .nav-link-tab {
            color: #666;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            border: none;
            padding: 10px 0;
            background: transparent;
            position: relative;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .category-tabs .nav-link-tab.active {
            color: #8cc63f;
        }
        .category-tabs .nav-link-tab.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #8cc63f;
        }

        /* PRODUCT CARDS */
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: flex-start;
            margin-top: 40px;
            margin-bottom: 60px;
        }
        .product-card {
            width: calc(25% - 15px);
            border: 1px solid #eee;
            background: #fff;
            text-align: center;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        .product-img-wrapper {
            padding: 30px 20px;
            height: 260px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
        }
        .product-img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        
        .product-info {
            padding: 15px 10px 25px;
            background: #fafafa;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            min-height: 110px;
        }
        
        .product-card:hover .product-info {
            background-color: #8cc63f;
        }
        
        .product-name {
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 8px;
            color: #333;
            transition: color 0.3s;
        }
        .product-card:hover .product-name {
            color: #fff;
        }

        .price-wrapper {
            font-size: 14px;
            display: flex;
            gap: 8px;
            justify-content: center;
            transition: color 0.3s;
        }
        .current-price {
            color: #8cc63f;
            font-weight: 700;
        }
        .old-price {
            color: #999;
            text-decoration: line-through;
            font-size: 13px;
        }
        
        .product-card:hover .current-price,
        .product-card:hover .old-price {
            color: rgba(255, 255, 255, 0.9);
        }

        .btn-detail {
            margin-top: 10px;
            padding: 4px 25px;
            border: 1px solid #fff;
            border-radius: 20px;
            color: #fff;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            background: transparent;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            position: absolute;
            bottom: -20px;
        }
        .product-card:hover .btn-detail {
            opacity: 1;
            visibility: visible;
            bottom: 15px; /* Slide up effect */
        }
        .btn-detail:hover {
            background: #fff;
            color: #8cc63f;
        }

        /* Hover states space adjustment */
        .product-card:hover .price-wrapper {
            transform: translateY(-8px);
        }
        .product-card:hover .product-name {
            transform: translateY(-8px);
        }
        
        .product-name, .price-wrapper {
            transition: transform 0.3s ease;
        }

        /* Scroll top button */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 45px;
            height: 45px;
            border: 2px solid #8cc63f;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #8cc63f;
            background: #fff;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        @media (max-width: 991px) {
            .product-card {
                width: calc(50% - 10px);
            }
        }
        @media (max-width: 576px) {
            .product-card {
                width: 100%;
            }
            .header-nav {
                display: none;
            }
        }
    </style>
</head>
<body>

<header class="header-top">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <h2 class="logo-text"><i class="fa-solid fa-leaf"></i> AT10</h2>
        </div>
        <nav class="header-nav">
            <a href="#" class="nav-link">TRANG CHỦ</a>
            <a href="#" class="nav-link">GIỚI THIỆU</a>
            <a href="{{ route('foods.index') }}" class="nav-link active-nav">SẢN PHẨM</a>
            <a href="#" class="nav-link">LIÊN HỆ</a>
            <a href="#" class="nav-link">HƯỚNG DẪN</a>
            <a href="{{ route('foods.create') }}" class="nav-link" style="color:#aaa !important"><i class="fas fa-plus"></i></a>
            <i class="fa-solid fa-magnifying-glass search-icon"></i>
        </nav>
    </div>
</header>

<div class="container">
    
    <!-- We merge all items for demonstration, simulating the mockup's view that shows these 4 specific items side-by-side -->
    @php
        $categories = ['HOA QUẢ', 'THỰC PHẨM KHÔ', 'RAU HỮU CƠ'];
    @endphp

    <div class="category-tabs">
        @foreach($categories as $index => $category)
            <span class="nav-link-tab {{ $index === 2 ? 'active' : '' }}">{{ $category }}</span>
        @endforeach
    </div>

    <div class="product-grid">
        @php
            // Lấy tất cả items ra view cho giống layout (layout gộp các món)
            $allFoods = \App\Models\Food::all();
        @endphp
        
        @foreach($allFoods as $food)
            <div class="product-card">
                <div class="product-img-wrapper">
                    <img src="{{ $food->image ? asset($food->image) : 'https://via.placeholder.com/300?text=No+Image' }}" alt="{{ $food->name }}" class="product-img">
                </div>
                <div class="product-info">
                    <div class="product-name">{{ $food->name }}</div>
                    <div class="price-wrapper">
                        <span class="current-price">{{ number_format($food->price, 0, ',', '.') }}đ</span>
                        @if($food->old_price)
                            <span class="old-price">{{ number_format($food->old_price, 0, ',', '.') }}đ</span>
                        @endif
                    </div>
                    <a href="{{ route('foods.show', $food->id) }}" class="btn-detail">CHI TIẾT</a>
                </div>
            </div>
        @endforeach
    </div>

</div>

<div class="scroll-top">
    <i class="fa-solid fa-angles-up"></i>
</div>

</body>
</html>
