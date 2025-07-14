<!-- filepath: c:\xampp\htdocs\Ecomerce\resources\views\about.blade.php -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>حول الموقع</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body { background: #f7f7f7; font-family: 'Cairo', Tahoma, Arial, sans-serif; }
        .about-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            padding: 32px;
            margin: 40px auto;
            max-width: 600px;
            text-align: center;
        }
        .about-title {
            color: #ff7e5f;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .about-text {
            color: #444;
            font-size: 1.2rem;
            margin-bottom: 20px;
            text-align: right;
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
        }
        .btn-back:hover {
            background: linear-gradient(to left, #feb47b, #ff7e5f);
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="about-card">
        <div class="about-title">حول الموقع</div>
        <div class="about-text">
            هذا الموقع مخصص لعرض وبيع المنتجات الغذائية.<br>
            يمكنك تصفح المنتجات بسهولة وطلبها مباشرة من الموقع.<br>
            نحن نضمن جودة المنتجات وسرعة التوصيل.<br>
            هدفنا هو رضا العملاء وتقديم أفضل خدمة ممكنة.<br>
            إذا كان لديك أي استفسار، لا تتردد في التواصل معنا عبر صفحة التواصل.
        </div>
        <a href="{{ url()->previous() }}" class="btn-back mt-3">رجوع</a>
    </div>
</body>
</html>