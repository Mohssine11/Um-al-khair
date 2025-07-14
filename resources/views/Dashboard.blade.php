<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>لوحة التحكم</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: 'Cairo', sans-serif;
        }
        .dashboard-header {
            background: linear-gradient(to left, #ff7e5f, #feb47b);
            color: white;
            padding: 30px 20px;
            border-radius: 0 0 20px 20px;
            text-align: center;
            margin-bottom: 40px;
        }
        .dashboard-header h1 {
            font-weight: bold;
        }
        .dashboard-header .btn {
            margin-top: 15px;
            font-weight: bold;
        }
        .dashboard-table {
            background-color: #ffffff;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            overflow-x: auto;
        }
        table {
            width: 100%;
        }
        th {
            background-color: #ff7e5f;
            color: rgb(0, 0, 0);
            font-weight: bold;
            text-align: center;
        }
        td {
            vertical-align: middle;
            text-align: center;
            
        }
        .dashboard-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        .btn-action {
            display: inline-block;
            padding: 6px 12px;
            margin: 2px;
            border-radius: 6px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }
        .btn-edit {
            background-color: #feb47b;
        }
        .btn-show {
            background-color: #6c757d;
        }
        .btn-delete {
            background-color: #dc3545;
            border: none;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
        @media (max-width: 768px) {
            .dashboard-header h1 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-header">
        <h1>لوحة تحكم المنتجات</h1>
        <a href="{{ route('products.add') }}" class="btn btn-success">+ إضافة منتج جديد</a>
        <a href="{{route('order.order')}}" class="btn btn-light">الطلبيات</a>
    </div>

    <div class="container dashboard-table">
        <table class="table table-bordered table-hover">
            <thead style="text-align: center;background-color: #ff7e5f; color: #fff;">
                <tr>
                    <th>الصورة</th>
                    <th>الاسم</th>
                    <th>الصنف</th>
                    <th>السعر</th>
                    <th>الوصف</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td><img src="{{ asset('storage/'.$product->image) }}" class="dashboard-img" alt="صورة المنتج"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->price }} د.ج</td>
                    <td>{{ $product->description }}</td>
                    <td style="display: flex; justify-content: center; gap: 10px;">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn-action btn-edit">تعديل</a>
                        <a href="{{ route('products.show', $product->id) }}" class="btn-action btn-show">عرض</a>
                        <form action="{{ route('products.delete_', $product->id) }}" method="post" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-action btn-delete">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
