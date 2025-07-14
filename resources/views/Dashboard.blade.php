<!-- filepath: resources/views/Dashboard.blade.php -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>لوحة التحكم</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body {
            background: #f7f7f7;
            font-family: 'Cairo', Tahoma, Arial, sans-serif;
        }
        .dashboard-header {
            background: linear-gradient(to left, #ff7e5f, #feb47b);
            color: #fff;
            padding: 30px 40px;
            border-radius: 0 0 20px 20px;
            margin-bottom: 40px;
            text-align: center;
        }
        .dashboard-table {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            padding: 24px;
            margin: 0 auto;
            max-width: 1000px;
        }
        .dashboard-table th {
            background: #ff7e5f;
            color: #fff;
            font-weight: bold;
        }
        .dashboard-table td, .dashboard-table th {
            vertical-align: middle;
            text-align: center;
        }
        .dashboard-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        .btn-edit, .btn-delete {
            border: none;
            padding: 6px 16px;
            border-radius: 6px;
            color: #fff;
            font-weight: bold;
            margin: 0 2px;
        }
        .btn-edit {
            background: #feb47b;
        }
        .btn-delete {
            background: #ff7e5f;
        }
        .btn-edit:hover {
            background: #ffb47b;
        }
        .btn-delete:hover {
            background: #ff4e5f;
        }
    </style>
</head>
<body>
    <div class="dashboard-header">
        <h1>لوحة تحكم المنتجات</h1>
        <a href="{{ route('products.add') }}" class="btn btn-success" style="font-weight:bold; margin-top:15px;">
            + إضافة منتج جديد
        </a>
        <a href="{{route('order.order')}}">الطلبيات</a>
    </div>
    <div class="dashboard-table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>الصورة</th>
                    <th>الاسم</th>
                    <th>الصنف</th>
                    <th>السعر</th>
                    <th>الوصف</th>
                    <th>إجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>
                        <img src="{{ asset('storage/'.$product->image) }}" class="dashboard-img" alt="الصورة">
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->price }} د.ج</td>
                    <td>{{ $product->description }}</td>
                    <td style="display: flex; justify-content: center; align-items: center;">
                        <a href="{{route('products.edit',$product->id)}}" style="margin-left: 5%">تعديل</a>
                         <a href="{{route('products.show',$product->id)}}" style="margin-left: 5%">show</a>
                         <form action="{{route('products.delete_',$product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
