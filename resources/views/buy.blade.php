<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>نموذج إدخال المستخدم</title>
  <!-- ربط Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5 w-50">
  <h2 class="mb-4 text-center">نموذج إدخال المستخدم</h2>
  <form method="post" action="{{ route('products.buy_post', $product->id) }}">
    @csrf
    
    <!-- الاسم -->
    <div class="mb-3">
      <label for="name" class="form-label">الاسم</label>
      <input type="text" class="form-control" name="Nom" id="name" placeholder="ادخل اسمك">
    </div>

    <!-- الرقم -->
    <div class="mb-3">
      <label for="phone" class="form-label">رقم الهاتف</label>
      <input type="tel" class="form-control" name="telephone" id="phone" placeholder="ادخل رقمك">
    </div>

    <!-- المدينة -->
    <div class="mb-3">
      <label for="city" class="form-label">المدينة</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="ادخل المدينة">
    </div>

    <!-- مكان السكن -->
    <div class="mb-3">
      <label for="address" class="form-label">مكان السكن</label>
      <input type="text" class="form-control" name="adresse" id="address" placeholder="ادخل مكان السكن">
    </div>

    <!-- زر الإرسال -->
    <button type="submit" class="btn btn-primary">إرسال</button>
  </form>
</div>

<!-- Bootstrap JS (اختياري للتفاعلات) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>