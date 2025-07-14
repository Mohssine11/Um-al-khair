<!-- filepath: resources/views/show.blade.php -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تفاصيل المنتج</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body {
            background: #f7f7f7;
            font-family: 'Cairo', Tahoma, Arial, sans-serif;
        }
        .product-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            padding: 32px;
            margin: 40px auto;
            max-width: 500px;
            text-align: center;
        }
        .product-img {
            width: 100%;
            max-width: 350px;
            height: 220px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        .product-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 12px;
        }
        .product-category {
            color: #ff7e5f;
            font-size: 1.1rem;
            margin-bottom: 8px;
        }
        .product-desc {
            color: #555;
            font-size: 1.1rem;
            margin-bottom: 16px;
        }
        .product-price {
            font-size: 1.3rem;
            color: #cc800e;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .btn-back {
            background: linear-gradient(to left, #ff7e5f, #feb47b);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 8px 32px;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.2s;
        }
        .btn-back:hover {
            background: linear-gradient(to left, #feb47b, #ff7e5f);
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="product-card">
        <img src="{{ asset('storage/'.$product->image) }}" class="product-img" alt="صورة المنتج">
        <div class="product-title">{{ $product->name }}</div>
        <div class="product-category">{{ $product->category }}</div>
        <div class="product-desc">{{ $product->description }}</div>
        <div class="product-price">{{ $product->price }} د.ج</div>
        <a href="{{ route('products.index') }}" class="btn-back">رجوع</a>
    </div>
</body>
</html>