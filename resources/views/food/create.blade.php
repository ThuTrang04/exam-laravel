<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .form-title {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 30px;
            text-align: center;
        }
        .btn-custom {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }
        .btn-custom:hover {
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 5px 15px rgba(110, 142, 251, 0.4);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h2 class="form-title">THÊM SẢN PHẨM MỚI</h2>

                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <strong>Có lỗi xảy ra:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('foods.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Tên sản phẩm *</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nhập tên sản phẩm">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Danh mục *</label>
                        <select name="category" class="form-select @error('category') is-invalid @enderror">
                            <option value="">-- Chọn danh mục --</option>
                            <option value="Hoa quả" {{ old('category') == 'Hoa quả' ? 'selected' : '' }}>Hoa quả</option>
                            <option value="Thực phẩm hữu cơ" {{ old('category') == 'Thực phẩm hữu cơ' ? 'selected' : '' }}>Thực phẩm hữu cơ</option>
                            <option value="Thực phẩm khô" {{ old('category') == 'Thực phẩm khô' ? 'selected' : '' }}>Thực phẩm khô</option>
                            <option value="Sản phẩm nổi bật" {{ old('category') == 'Sản phẩm nổi bật' ? 'selected' : '' }}>Sản phẩm nổi bật</option>
                        </select>
                        @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Giá khuyến mãi (VNĐ) *</label>
                            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Giá cũ (VNĐ)</label>
                            <input type="number" name="old_price" class="form-control @error('old_price') is-invalid @enderror" value="{{ old('old_price') }}">
                            @error('old_price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Hình ảnh sản phẩm</label>
                        <input type="file" name="image_file" class="form-control @error('image_file') is-invalid @enderror">
                        @error('image_file')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-bold">Sodium</label>
                            <input type="text" name="sodium" class="form-control @error('sodium') is-invalid @enderror" value="{{ old('sodium') }}" placeholder="VD: 10mg">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-bold">Fiber</label>
                            <input type="text" name="fiber" class="form-control @error('fiber') is-invalid @enderror" value="{{ old('fiber') }}" placeholder="VD: 2g">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-bold">Vitamin C</label>
                            <input type="text" name="vitamin_c" class="form-control @error('vitamin_c') is-invalid @enderror" value="{{ old('vitamin_c') }}" placeholder="VD: 17mg">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Mô tả chi tiết</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4">{{ old('description') }}</textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-custom w-100 py-2 fs-5">Lưu Thông Tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
