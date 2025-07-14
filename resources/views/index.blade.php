<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Um al-khair</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{ asset('img/icon.png') }}" style="width: auto;font-size: 20px;">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            padding: 5px 20px;
            height: 80px;
        }

        header img {
            border-radius: 50%;
            border: 0px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s;
            width: 70px;
            object-fit: cover;
        }

        header ul {
            list-style: none;
            display: flex;
            gap: 90px;
            margin: 0;
            padding: 0;
        }

        header ul li a {
            color: #000000;
            text-decoration: none;
            font-weight: 900;
            font-size: 23px;
            transition: color 0.2s;
        }

        header ul li a:hover {
            color: #cc800e;
        }

        .card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            padding: 24px;
            margin: 20px auto;
            max-width: 320px;
            text-align: center;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 10px;
            transition: transform 0.4s ease;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            font-family: 'Courier New', Courier, monospace;
            margin-bottom: 8px;
        }

        .card-desc {
            color: #555;
            font-size: 1rem;
            margin-bottom: 12px;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            max-height: 6em;
            transition: all 0.3s ease;
        }

        .card.expanded .card-desc {
            -webkit-line-clamp: unset;
            max-height: none;
        }

        .toggle {
            color: #d9534f;
            cursor: pointer;
            font-weight: bold;
            display: inline-block;
            margin-top: 5px;
        }

        .card-btn {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            border: none;
            border-radius: 8px;
            padding: 8px 24px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }

        .card-btn a {
            color: #fff;
            text-decoration: none;
        }

        .card-btn:hover {
            background: linear-gradient(to right, #feb47b, #ff7e5f);
        }

        .card-price {
            color: #cc800e;
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        @media (max-width: 991px) {
            header ul {
                gap: 30px;
            }

            .card {
                max-width: 90%;
            }
        }

        @media (max-width: 767px) {
            header {
                flex-direction: column;
                height: auto;
                padding: 10px;
                display: flex;
            }

            header img {
                margin-bottom: 10px;
            }

            header ul {
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                gap: 22px;
            }

            .card {
                max-width: 98%;
            }
        }

        @media (max-width: 576px) {
            header {
                flex-direction: column;
                height: auto;
                display: flex;
            }

            .card {
                padding: 10px;
                max-width: 100%;
            }

            .card-title {
                font-size: 1rem;
            }

            .card-desc {
                font-size: 0.95rem;
            }

            .card img {
                height: 120px;
            }

            #product-image {
                height: 160px !important;
            }
        }
    </style>
</head>

<body>
    <header>
        <img src="{{ asset('img/logo.png') }}" alt="">
        <ul>
            <li><a href="{{ route('products.index') }}">الصفحة الرئيسية</a></li>
            <li><a href="{{ route('products.about') }}">من نحن</a></li>
            <li><a href="{{ route('products.contact') }}" style="margin-right: 30px">تواصل معنا</a></li>
        </ul>
    </header>

    <div style="margin-top: 10px;">
        @if(isset($products) && count($products) > 0)
            @php
                $images = [];
                foreach ($products as $product) {
                    $images[] = asset('storage/' . $product->image);
                }
            @endphp

            <div>
                <img id="product-image" src="{{ $images[0] }}" alt="Logo"
                    style="width: 95%; height: 380px;margin: 0 auto; display: block; border-radius: 20px; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);">
            </div>

            <script>
                let images = @json($images);
                let cpt = 0;

                setInterval(() => {
                    cpt = (cpt + 1) % images.length;
                    document.getElementById('product-image').src = images[cpt];
                }, 2000);
            </script>
        @else
            <p class="text-center mt-4">لا توجد منتجات لعرضها.</p>
        @endif
    </div>

    <main>
        <div class="container mt-5">
            <div class="row">
                @forelse ($products as $product)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="product">
                            <div class="card-title">{{ $product->name }}</div>
                            <div class="card-desc">{{ $product->description }}</div>
                            <div class="card-price">{{ $product->price }} د.ج</div>
                            <div>
                                <button class="card-btn"><a href="{{ route('products.buy', $product->id) }}">اطلب
                                        الآن</a></button>
                                <button class="card-btn"><a
                                        href="{{ route('products.more', $product->id) }}">المزيد</a></button>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">لا توجد منتجات حالياً.</p>
                @endforelse
            </div>
        </div>
    </main>

    <footer style="            background: linear-gradient(to right, #ff7e5f, #feb47b);
 padding: 20px 0; text-align: center; direction: rtl;">
        <p style="margin-bottom: 10px; font-weight: bold;">جميع الحقوق محفوظة © 2025 - Umm al-Khair</p>

        <div style="font-size: 40px;">
            <a href="https://www.facebook.com/mohssine.enajar" target="_blank" style="margin: 0 20px; color: #3b5998;">
                <i class="fab fa-facebook" ></i>
            </a>
            <a href="https://www.instagram.com/mohssine_enajar/profilecard/?igsh=MXcxb2l5MGJnYjVrMw==" target="_blank"
                style="margin: 0 20px; color: #e4405f;">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://wa.me/212638571593" target="_blank" style="margin: 0 20px; color: #25D366;">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </footer>
</body>

</html>
