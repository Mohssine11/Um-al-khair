<!-- filepath: c:\xampp\htdocs\Ecomerce\resources\views\add_Product.blade.php -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>إضافة منتج جديد</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body {
            background: #f7f7f7;
            font-family: 'Cairo', Tahoma, Arial, sans-serif;
        }

        .add-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            padding: 32px;
            margin: 40px auto;
            max-width: 500px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control,
        .form-select {
            margin-bottom: 16px;
        }

        .btn-save {
            background: linear-gradient(to left, #ff7e5f, #feb47b);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 8px 32px;
            font-weight: bold;
            transition: background 0.2s;
        }

        .btn-save:hover {
            background: linear-gradient(to left, #feb47b, #ff7e5f);
        }
    </style>
</head>

<body>
    <div class="add-card">
        <h2 class="mb-4 text-center">إضافة منتج جديد</h2>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label class="form-label">اسم المنتج</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>

            <label class="form-label">الصنف</label>
            <input type="text" name="category" class="form-control" value="{{ old('category') }}" required>

            <label class="form-label">السعر</label>
            <input type="number" name="price" class="form-control" value="{{ old('price') }}" required>

            <label class="form-label">الوصف</label>
            <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>

            <label class="form-label">صورة المنتج</label>
            <input type="file" name="image" class="form-control">

            <button type="submit" class="btn-save mt-3 w-100">إضافة المنتج</button>
        </form>
        <a href="{{ route('products.dashboard') }}" class="btn btn-secondary w-100 mt-2">رجوع</a>

    </div>
</body>

</html>