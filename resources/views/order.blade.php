<!-- filepath: c:\xampp\htdocs\Ecomerce\resources\views\order.blade.php -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الطلبيات</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body {
            background: #f7f7f7;
            font-family: 'Cairo', Tahoma, Arial, sans-serif;
        }

        .order-header {
            background: linear-gradient(to left, #ff7e5f, #feb47b);
            color: #fff;
            padding: 30px 40px;
            border-radius: 0 0 20px 20px;
            margin-bottom: 40px;
            text-align: center;
        }

        .order-table {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            padding: 24px;
            margin: 0 auto 40px auto;
            max-width: 1100px;
        }

        .order-table th {
            background: #ff7e5f;
            color: #fff;
            font-weight: bold;
            text-align: center;
        }

        .order-table td,
        .order-table th {
            vertical-align: middle;
            text-align: center;
        }

        .order-img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .btn-danger {
            border-radius: 6px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="order-header">
        <h2>قائمة الطلبيات</h2>
    </div>
    <div class="order-table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>صورة المنتج</th>
                    <th>اسم المنتج</th>
                    <th>اسم المشتري</th>
                    <th>رقم الهاتف</th>
                    <th>المدينة</th>
                    <th>مكان السكن</th>
                    <th>إجراء</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>
                            @if($order->product && $order->product->image)
                                <img src="{{ asset('storage/' . $order->product->image) }}" class="order-img" alt="صورة المنتج">
                            @else
                                <span>لا يوجد صورة</span>
                            @endif
                        </td>
                        <td>{{ $order->product->name ?? '-' }}</td>
                        <td>{{ $order->Nom }}</td>
                        <td>{{ $order->telephone }}</td>
                        <td>{{ $order->city }}</td>
                        <td>{{ $order->adresse }}</td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="{{ route('products.more', $order->product->id ?? 0) }}" class="btn btn-info"
                                    style="color:#fff;">تفاصيل</a>
                                <form action="{{ route('products.delete', $order->id) }}" method="post"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>