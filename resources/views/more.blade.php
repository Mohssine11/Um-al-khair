<!-- filepath: c:\xampp\htdocs\Ecomerce\resources\views\more.blade.php -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تفاصيل المنتج</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body { background: #f7f7f7; font-family: 'Cairo', Tahoma, Arial, sans-serif; }
        .more-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            padding: 32px;
            margin: 40px auto;
            max-width: 90%;
            text-align: center;
        }
        .more-img {
            width: 100%;
            max-width: 70%;
            height: 220px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        .more-title {
            font-size: 45px;
            font-weight: bold;
            margin-bottom: 12px;
        }
        .more-category {
            color: #ff7e5f;
            font-size: 30px;
            margin-bottom: 8px;
        }
        .more-desc {
            color: #555;
            font-size: 20px;
            margin-bottom: 16px;
        }
        .more-price {
            font-size: 32px;
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
            display: inline-block;
            text-align: center;
            width: 200px;
            font-size: 30px;
        }
        .btn-back:hover {
            background: linear-gradient(to left, #feb47b, #ff7e5f);
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="more-card">
        <img src="{{ asset('storage/'.$product->image) }}" class="more-img" alt="صورة المنتج">
        <div class="more-title">{{ $product->name }}</div>
        <div class="more-category">{{ $product->category }}</div>
        <div class="more-desc">{{ $product->description }}</div>
        <div class="more-price">{{ $product->price }} د.ج</div>
        <a href="{{ url()->previous() }}" class="btn-back mt-3">رجوع</a>
    </div>
</body>
</html>
