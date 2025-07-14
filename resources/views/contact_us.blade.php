<!-- filepath: c:\xampp\htdocs\Ecomerce\resources\views\contact_us.blade.php -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تواصل معنا</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body { background: #f7f7f7; font-family: 'Cairo', Tahoma, Arial, sans-serif; }
        .contact-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            padding: 32px 16px;
            margin: 40px auto;
            max-width: 600px;
            width: 95%;
            text-align: center;
        }
        .contact-title {
            color: #ff7e5f;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .contact-info {
            color: #444;
            font-size: 1.1rem;
            margin-bottom: 20px;
            text-align: right;
            direction: rtl;
        }
        .contact-info a {
            color: #0d6efd;
            text-decoration: none;
            word-break: break-all;
        }
        .contact-icon {
            font-size: 1.5rem;
            vertical-align: middle;
            margin-left: 8px;
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
        @media (max-width: 576px) {
            .contact-card {
                padding: 16px 4px;
                font-size: 1rem;
            }
            .contact-title {
                font-size: 1.3rem;
            }
            .contact-info {
                font-size: 1rem;
            }
            .btn-back {
                padding: 8px 12px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="contact-card">
        <div class="contact-title">تواصل معنا</div>
        <div class="contact-info">
            <p>
                <a href="https://wa.me/212638571593" target="_blank">
                    <i class="bi bi-whatsapp contact-icon" style="color:#25d366"></i>
                </a>
                واتساب: +212638571593
            </p>
            <p>
                <a href="mailto:helloyassine46@gmail.com">
                    <i class="bi bi-envelope-fill contact-icon" style="color:#ff7e5f"></i>
                </a>
                البريد الإلكتروني: helloyassine46@gmail.com
            </p>
            <p>
                <a href="tel:0638571593">
                    <i class="bi bi-telephone-fill contact-icon" style="color:#0d6efd"></i>
                </a>
                الهاتف: 0638571593
            </p>
            <p>
                <a href="https://www.instagram.com/mohssine_enajar/profilecard/?igsh=MXcxb2l5MGJnYjVrMw==" target="_blank">
                    <i class="bi bi-instagram contact-icon" style="color:#e1306c"></i>
                </a>
                انستغرام: mohssine_enajar
            </p>
        </div>
        <a href="{{ url()->previous() }}" class="btn-back mt-3">رجوع</a>
    </div>
</body>
</html>