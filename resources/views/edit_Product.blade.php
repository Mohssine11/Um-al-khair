<!-- filepath: c:\xampp\htdocs\Ecomerce\resources\views\edit_Product.blade.php -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تعديل المنتج</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body { background: #f7f7f7; font-family: 'Cairo', Tahoma, Arial, sans-serif; }
        .edit-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            padding: 32px;
            margin: 40px auto;
            max-width: 500px;
        }
        .form-label { font-weight: bold; }
        .form-control, .form-select { margin-bottom: 16px; }
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
        .product-img {
            width: 100%;
            max-width: 200px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <div class="edit-card">
        <h2 class="mb-4 text-center">تعديل المنتج</h2>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label class="form-label">اسم المنتج</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>

            <label class="form-label">الصنف</label>
            <input type="text" name="category" class="form-control" value="{{ old('category', $product->category) }}" required>

            <label class="form-label">السعر</label>
            <input type="number" name="price" class="form-control" value="{{ old('price', $product->price) }}" required>

            <label class="form-label">الوصف</label>
            <textarea name="description" class="form-control" rows="3">{{ old('description', $product->description) }}</textarea>

            <label class="form-label">صورة المنتج</label>
            @if($product->image)
                <img src="{{ asset('storage/'.$product->image) }}" class="product-img" alt="صورة المنتج">
            @endif
            <input type="file" name="image" class="form-control">

            <button type="submit" class="btn-save mt-3 w-100">حفظ التعديلات</button>
        </form>
        <a href="{{ route('products.dashboard') }}" class="btn btn-secondary mt-3 w-100">رجوع إلى لوحة التحكم</a>
    </div>