@php
    $cart = $cart ?? ['items' => [], 'count' => 0, 'total' => 0];
    $waNumber = '6281234567890';
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Vanguitar' }}</title>

    <style>
        :root {
            --navy: #0B1F3A;
            --navy-2: #13345D;
            --navy-3: #163E70;
            --cream: #F7F3EA;
            --gold: #C9A44C;
            --gold-soft: #E9DDC2;
            --wood: #8B5E3C;
            --text: #10243E;
            --muted: #64748B;
            --line: rgba(16, 36, 62, 0.12);
            --white: #FFFFFF;
            --shadow: 0 18px 40px rgba(11, 31, 58, 0.10);
            --shadow-hover: 0 26px 55px rgba(11, 31, 58, 0.18);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: var(--cream);
            color: var(--text);
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button, input, select, textarea {
            font-family: inherit;
        }

        .container {
            width: min(1280px, calc(100% - 32px));
            margin: 0 auto;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(247, 243, 234, 0.95);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--line);
        }

        .nav-inner {
            min-height: 96px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            flex-shrink: 0;
        }

        .brand-logo-wrap {
            display: flex;
            align-items: center;
            min-width: 230px;
        }

        .brand-logo {
            height: 76px;
            width: auto;
            max-width: 240px;
            object-fit: contain;
            display: block;
        }

        .brand-fallback {
            display: none;
            align-items: center;
            gap: 12px;
        }

        .brand-fallback-icon {
            width: 56px;
            height: 56px;
            border-radius: 16px;
            display: grid;
            place-items: center;
            background: var(--navy);
            color: var(--gold);
            font-family: Georgia, serif;
            font-size: 30px;
            font-weight: 800;
        }

        .brand-fallback-text strong {
            display: block;
            font-size: 24px;
            font-family: Georgia, serif;
            color: var(--navy);
        }

        .brand-fallback-text span {
            display: block;
            margin-top: 4px;
            font-size: 11px;
            letter-spacing: 2px;
            color: var(--gold);
            font-weight: 800;
            text-transform: uppercase;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 18px;
            font-size: 15px;
            color: rgba(16, 36, 62, 0.78);
            flex-wrap: wrap;
            justify-content: center;
        }

        .nav-menu a {
            position: relative;
            padding: 8px 0;
        }

        .nav-menu a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 2px;
            width: 0;
            height: 2px;
            background: var(--gold);
            transition: 0.25s ease;
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-shrink: 0;
        }

        .btn {
            border: none;
            min-height: 44px;
            padding: 0 18px;
            border-radius: 999px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-weight: 800;
            cursor: pointer;
            transition: 0.22s ease;
            white-space: nowrap;
            text-align: center;
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .btn-primary {
            background: var(--navy);
            color: var(--white);
        }

        .btn-primary:hover {
            background: var(--navy-2);
        }

        .btn-gold {
            background: var(--gold);
            color: var(--navy);
        }

        .btn-gold:hover {
            filter: brightness(0.97);
        }

        .btn-outline {
            background: transparent;
            color: var(--navy);
            border: 1px solid var(--line);
        }

        .btn-outline:hover {
            border-color: var(--gold);
            color: var(--gold);
        }

        .btn-block {
            width: 100%;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(201, 164, 76, 0.14);
            color: var(--wood);
            font-size: 12px;
            font-weight: 900;
        }

        .hero {
            padding: 54px 0 34px;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 0.82fr 1.18fr;
            gap: 38px;
            align-items: center;
        }

        .hero-copy {
            padding-right: 10px;
        }

        .hero-copy h1 {
            margin: 16px 0 16px;
            font-family: Georgia, serif;
            font-size: clamp(42px, 6vw, 72px);
            line-height: 0.98;
            letter-spacing: -1.5px;
            color: var(--navy);
        }

        .hero-copy p {
            margin: 0;
            font-size: 18px;
            line-height: 1.8;
            color: rgba(16, 36, 62, 0.75);
            max-width: 590px;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 28px;
        }

        .slider {
            position: relative;
            min-height: 540px;
            width: 100%;
            border-radius: 34px;
            overflow: hidden;
            box-shadow: var(--shadow);
            background: linear-gradient(135deg, var(--navy), var(--navy-3));
        }

        .slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.7s ease;
        }

        .slide.active {
            opacity: 1;
            pointer-events: auto;
        }

        .slide-media {
            position: absolute;
            inset: 0;
        }

        .slide-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .slide-media.is-fallback {
            background: linear-gradient(135deg, var(--navy), var(--navy-3));
        }

        .slide-media .media-fallback {
            position: absolute;
            inset: 0;
            display: none;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 24px;
            color: rgba(255,255,255,0.88);
            font-weight: 800;
            font-size: 22px;
        }

        .slide-media.is-fallback .media-fallback {
            display: flex;
        }

        .slide-overlay {
            position: absolute;
            inset: 0;
            background:
                linear-gradient(to top, rgba(6, 18, 34, 0.76), rgba(6, 18, 34, 0.18)),
                linear-gradient(to right, rgba(6, 18, 34, 0.30), transparent);
        }

        .slide-caption {
            position: absolute;
            left: 26px;
            right: 26px;
            bottom: 26px;
            max-width: 650px;
            padding: 24px 26px;
            border-radius: 24px;
            background: rgba(255,255,255,0.14);
            border: 1px solid rgba(255,255,255,0.22);
            backdrop-filter: blur(12px);
            color: white;
        }

        .slide-caption h3 {
            margin: 0 0 10px;
            font-size: 42px;
            line-height: 1.1;
            font-family: Georgia, serif;
        }

        .slide-caption p {
            margin: 0;
            font-size: 18px;
            line-height: 1.7;
            color: rgba(255,255,255,0.88);
        }

        .slider-controls {
            position: absolute;
            right: 24px;
            bottom: 20px;
            display: flex;
            justify-content: flex-end;
            gap: 8px;
            z-index: 3;
        }

        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
            background: rgba(255,255,255,0.35);
            transition: 0.2s ease;
        }

        .slider-dot.active {
            background: var(--gold);
            transform: scale(1.15);
        }

        .section {
            padding: 42px 0 54px;
        }

        .section-head {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 24px;
        }

        .section-title {
            margin: 0;
            font-family: Georgia, serif;
            font-size: clamp(34px, 4vw, 56px);
            color: var(--navy);
            letter-spacing: -1px;
        }

        .subtitle {
            margin: 10px 0 0;
            font-size: 17px;
            line-height: 1.8;
            color: rgba(16, 36, 62, 0.70);
            max-width: 760px;
        }

        .grid {
            display: grid;
            gap: 20px;
        }

        .grid-2 {
            grid-template-columns: repeat(2, 1fr);
        }

        .grid-3 {
            grid-template-columns: repeat(3, 1fr);
        }

        .grid-4 {
            grid-template-columns: repeat(4, 1fr);
        }

        .card {
            background: rgba(255,255,255,0.86);
            border: 1px solid var(--line);
            border-radius: 26px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .card-pad {
            padding: 24px;
        }

        .category {
            min-height: 175px;
            padding: 24px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: 0.22s ease;
        }

        .category:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-hover);
        }

        .category span {
            color: var(--gold);
            font-weight: 900;
            font-size: 16px;
        }

        .category h3 {
            margin: 0;
            font-family: Georgia, serif;
            font-size: 24px;
            color: var(--navy);
        }

        .category p {
            margin: 0;
            color: rgba(16, 36, 62, 0.78);
            line-height: 1.7;
            font-size: 16px;
        }

        .product-card {
            display: flex;
            flex-direction: column;
            height: 100%;
            transition: 0.25s ease;
        }

        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-hover);
        }

        .product-media,
        .gallery-main {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #102C4F, #071527);
        }

        .product-media {
            height: 250px;
        }

        .gallery-main {
            height: 520px;
            border-radius: 30px;
            box-shadow: var(--shadow);
        }

        .product-media img,
        .gallery-main img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.35s ease, opacity 0.25s ease;
        }

        .product-card:hover .product-cover {
            transform: scale(1.06);
        }

        .product-media.is-fallback,
        .gallery-main.is-fallback {
            background: linear-gradient(135deg, var(--navy), var(--navy-3));
        }

        .media-fallback {
            position: absolute;
            inset: 0;
            display: none;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            color: rgba(255,255,255,0.86);
            font-size: 18px;
            font-weight: 800;
            z-index: 1;
        }

        .product-media.is-fallback .media-fallback,
        .gallery-main.is-fallback .media-fallback {
            display: flex;
        }

        .product-overlay {
            position: absolute;
            inset: auto 16px 16px 16px;
            height: 48px;
            border-radius: 999px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(11, 31, 58, 0.72);
            color: white;
            font-weight: 800;
            opacity: 0;
            transform: translateY(10px);
            transition: 0.25s ease;
            z-index: 2;
        }

        .product-card:hover .product-overlay {
            opacity: 1;
            transform: translateY(0);
        }

        .product-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            flex: 1;
        }

        .product-title-wrap h3 {
            margin: 0;
            font-family: Georgia, serif;
            color: var(--navy);
            font-size: 21px;
            line-height: 1.25;
            min-height: 54px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .meta {
            margin-top: 6px;
            color: var(--muted);
            font-size: 14px;
            line-height: 1.5;
        }

        .price {
            color: var(--wood);
            font-weight: 900;
            font-size: 15px;
            line-height: 1.6;
        }

        .product-desc {
            margin: 0;
            font-size: 15px;
            line-height: 1.7;
            color: rgba(16, 36, 62, 0.74);
            min-height: 78px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tag {
            padding: 7px 10px;
            border-radius: 999px;
            background: rgba(16, 36, 62, 0.06);
            color: rgba(16, 36, 62, 0.76);
            font-size: 12px;
            font-weight: 800;
        }

        .product-actions {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-top: auto;
        }

        .product-actions form {
            display: block;
        }

        .product-actions .btn,
        .product-actions form .btn {
            width: 100%;
        }

        .product-actions .full {
            grid-column: 1 / -1;
        }

        .form-box {
            padding: 22px;
            border-radius: 28px;
            border: 1px solid var(--line);
            background: var(--white);
            margin-bottom: 24px;
            box-shadow: var(--shadow);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
            align-items: end;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .field label {
            font-size: 13px;
            font-weight: 900;
            color: var(--navy);
        }

        .field input,
        .field select,
        .field textarea {
            width: 100%;
            min-height: 48px;
            border-radius: 16px;
            border: 1px solid var(--line);
            padding: 0 14px;
            outline: none;
            background: #fff;
            color: var(--navy);
            font-size: 15px;
        }

        .field textarea {
            padding-top: 14px;
            min-height: 120px;
            resize: vertical;
        }

        .field input:focus,
        .field select:focus,
        .field textarea:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 4px rgba(201, 164, 76, 0.12);
        }

        .detail-grid {
            display: grid;
            grid-template-columns: 0.92fr 1.08fr;
            gap: 30px;
            align-items: start;
        }

        .thumb-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin-top: 14px;
        }

        .thumb-btn {
            padding: 0;
            border: 2px solid transparent;
            border-radius: 18px;
            overflow: hidden;
            background: #fff;
            cursor: pointer;
            height: 94px;
            transition: 0.22s ease;
            box-shadow: 0 6px 18px rgba(11, 31, 58, 0.08);
        }

        .thumb-btn img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .thumb-btn.active {
            border-color: var(--gold);
            transform: translateY(-2px);
        }

        .thumb-fallback {
            width: 100%;
            height: 100%;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, var(--navy), var(--navy-3));
            color: white;
            font-size: 12px;
            font-weight: 800;
        }

        .detail-content h1 {
            margin: 14px 0;
            font-family: Georgia, serif;
            font-size: clamp(36px, 5vw, 64px);
            line-height: 1;
            letter-spacing: -1px;
            color: var(--navy);
        }

        .detail-content p {
            color: rgba(16, 36, 62, 0.78);
            line-height: 1.8;
            font-size: 17px;
        }

        .spec-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin: 22px 0;
        }

        .spec {
            padding: 16px;
            border-radius: 18px;
            border: 1px solid var(--line);
            background: rgba(255,255,255,0.86);
        }

        .spec small {
            display: block;
            margin-bottom: 6px;
            color: var(--muted);
            font-size: 13px;
        }

        .spec strong {
            color: var(--navy);
            font-size: 17px;
        }

        .cart-row {
            display: grid;
            grid-template-columns: 1fr 100px 150px 110px;
            gap: 16px;
            align-items: center;
            padding: 18px;
            border-bottom: 1px solid var(--line);
        }

        .cart-row:last-child {
            border-bottom: none;
        }

        .summary {
            padding: 24px;
            border-radius: 28px;
            background: var(--navy);
            color: white;
            box-shadow: var(--shadow);
        }

        .summary .price {
            color: var(--gold);
            font-size: 26px;
        }

        .alert {
            margin-top: 18px;
            padding: 14px 18px;
            border-radius: 16px;
            background: rgba(201, 164, 76, 0.18);
            color: var(--wood);
            font-weight: 800;
        }

        .error {
            margin-top: 18px;
            padding: 14px 18px;
            border-radius: 16px;
            background: rgba(180, 30, 30, 0.10);
            color: #9f1d1d;
            font-weight: 800;
        }

        .footer {
            margin-top: 60px;
            padding: 36px 0;
            background: var(--navy);
            color: rgba(255,255,255,0.82);
        }

        .footer h3 {
            margin: 0 0 10px;
            font-size: 24px;
            font-family: Georgia, serif;
            color: white;
        }

        .footer p {
            margin: 0;
            font-size: 16px;
            line-height: 1.8;
            max-width: 760px;
        }

        .wa {
            position: fixed;
            right: 20px;
            bottom: 20px;
            z-index: 80;
            background: #25D366;
            color: white;
            padding: 14px 18px;
            border-radius: 999px;
            font-weight: 900;
            box-shadow: 0 14px 34px rgba(0,0,0,.22);
        }

        @media (max-width: 1100px) {
            .hero-grid,
            .detail-grid,
            .grid-2 {
                grid-template-columns: 1fr;
            }

            .grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }

            .grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }

            .form-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 860px) {
            .nav-menu {
                display: none;
            }

            .nav-inner {
                flex-wrap: wrap;
                padding: 12px 0;
            }

            .product-actions {
                grid-template-columns: 1fr;
            }

            .product-actions .full {
                grid-column: auto;
            }

            .spec-grid {
                grid-template-columns: 1fr;
            }

            .cart-row {
                grid-template-columns: 1fr;
            }

            .thumb-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .brand-logo {
                height: 64px;
            }
        }

        @media (max-width: 640px) {
            .grid-4,
            .grid-3 {
                grid-template-columns: 1fr;
            }

            .hero-copy h1 {
                font-size: 44px;
            }

            .slider {
                min-height: 360px;
            }

            .slide-caption {
                left: 16px;
                right: 16px;
                bottom: 16px;
                padding: 18px;
            }

            .slide-caption h3 {
                font-size: 28px;
            }

            .gallery-main {
                height: 340px;
            }

            .brand-logo {
                height: 54px;
                max-width: 200px;
            }
        }
    </style>
</head>
<body>
    <header class="navbar">
        <div class="container nav-inner">
            <a href="{{ route('home') }}" class="brand">
                <div class="brand-logo-wrap">
                    <img
                        src="{{ asset($logo) }}"
                        alt="Logo Vanguitar"
                        class="brand-logo"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    >
                    <div class="brand-fallback">
                        <div class="brand-fallback-icon">V</div>
                        <div class="brand-fallback-text">
                            <strong>Vanguitar</strong>
                            <span>Find Your Sound</span>
                        </div>
                    </div>
                </div>
            </a>

            <nav class="nav-menu">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('catalog') }}">Katalog</a>
                <a href="{{ route('helper') }}">Bantu Pilih</a>
                <a href="{{ route('compare') }}">Bandingkan</a>
                <a href="{{ route('about') }}">Tentang</a>
                <a href="{{ route('contact') }}">Kontak</a>
            </nav>

            <div class="nav-actions">
                <a class="btn btn-outline" href="{{ route('cart') }}">
                    Keranjang {{ $cart['count'] > 0 ? '(' . $cart['count'] . ')' : '' }}
                </a>

                @if(session('is_admin'))
                    <a class="btn btn-gold" href="{{ route('admin.dashboard') }}">Dashboard</a>
                @else
                    <a class="btn btn-primary" href="{{ route('login') }}">Masuk</a>
                @endif
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            @if(session('success'))
                <div class="alert">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="error">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
        </div>

        @if($page === 'home')
            <section class="hero">
                <div class="container hero-grid">
                    <div class="hero-copy">
                        <span class="badge">Premium Guitar Store</span>
                        <h1>Temukan gitar yang sesuai dengan gaya bermainmu.</h1>
                        <p>
                            Vanguitar hadir sebagai website toko gitar yang rapi, elegan, dan mudah dipahami.
                            Pengunjung bisa melihat katalog, membandingkan produk, melihat beberapa foto gitar,
                            lalu konsultasi dulu sebelum checkout.
                        </p>

                        <div class="hero-actions">
                            <a class="btn btn-primary" href="{{ route('catalog') }}">Lihat Katalog</a>
                            <a class="btn btn-gold" href="{{ route('helper') }}">Bantu Pilih Gitar</a>
                            <a class="btn btn-outline" target="_blank" href="https://wa.me/{{ $waNumber }}?text=Halo%20Vanguitar%2C%20saya%20ingin%20konsultasi%20gitar.">
                                Konsultasi WA
                            </a>
                        </div>
                    </div>

                    <div class="slider" id="heroSlider">
                        @foreach($banners as $index => $banner)
                            <div class="slide {{ $index === 0 ? 'active' : '' }}">
                                <div class="slide-media">
                                    <div class="media-fallback">Upload Banner Iklan {{ $index + 1 }}</div>
                                    <img
                                        src="{{ asset($banner['image']) }}"
                                        alt="{{ $banner['title'] }}"
                                        onerror="this.style.display='none'; this.parentElement.classList.add('is-fallback');"
                                    >
                                </div>

                                <div class="slide-overlay"></div>

                                <div class="slide-caption">
                                    <h3>{{ $banner['title'] }}</h3>
                                    <p>{{ $banner['text'] }}</p>
                                </div>
                            </div>
                        @endforeach

                        <div class="slider-controls">
                            @foreach($banners as $index => $banner)
                                <button class="slider-dot {{ $index === 0 ? 'active' : '' }}" type="button" data-slide="{{ $index }}"></button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <div class="section-head">
                        <div>
                            <h2 class="section-title">Kategori Cepat</h2>
                            <p class="subtitle">Biar customer langsung masuk ke kebutuhan yang paling relevan tanpa bingung.</p>
                        </div>
                    </div>

                    <div class="grid grid-3">
                        <a class="card category" href="{{ route('catalog', ['budget' => 'under-18']) }}">
                            <span>01</span>
                            <h3>Budget Friendly</h3>
                            <p>Untuk pembeli yang mencari gitar metal dengan harga yang lebih aman.</p>
                        </a>

                        <a class="card category" href="{{ route('catalog', ['search' => '7-string']) }}">
                            <span>02</span>
                            <h3>7-String</h3>
                            <p>Untuk metalcore, djent, dan drop tuning modern dengan karakter low-end yang kuat.</p>
                        </a>

                        <a class="card category" href="{{ route('catalog', ['budget' => 'above-30']) }}">
                            <span>03</span>
                            <h3>Premium</h3>
                            <p>Untuk gitaris yang ingin kualitas tinggi, finishing premium, dan pengalaman bermain lebih maksimal.</p>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <div class="section-head">
                        <div>
                            <h2 class="section-title">Rekomendasi Pilihan</h2>
                            <p class="subtitle">Sekarang kartu produk lebih rapi, foto bisa hover, dan penulisan sudah tidak nabrak.</p>
                        </div>

                        <a class="btn btn-outline" href="{{ route('catalog') }}">Lihat Semua</a>
                    </div>

                    <div class="grid grid-4">
                        @foreach($featured as $product)
                            @include('product-card', ['product' => $product])
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        @if($page === 'catalog')
            <section class="section">
                <div class="container">
                    <div class="section-head">
                        <div>
                            <h1 class="section-title">Katalog Gitar</h1>
                            <p class="subtitle">Gunakan filter agar pengunjung lebih cepat menemukan gitar yang sesuai.</p>
                        </div>
                    </div>

                    <form class="form-box" method="GET" action="{{ route('catalog') }}">
                        <div class="form-grid">
                            <div class="field">
                                <label>Cari gitar</label>
                                <input type="text" name="search" value="{{ request('search') }}" placeholder="Contoh: Ibanez, Gibson, 7-string">
                            </div>

                            <div class="field">
                                <label>Brand</label>
                                <select name="brand">
                                    <option value="">Semua brand</option>
                                    @foreach(collect($allProducts)->pluck('brand')->unique()->values() as $brand)
                                        <option value="{{ $brand }}" @selected(request('brand') === $brand)>{{ $brand }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="field">
                                <label>Budget</label>
                                <select name="budget">
                                    <option value="">Semua budget</option>
                                    <option value="under-18" @selected(request('budget') === 'under-18')>Di bawah 18 juta</option>
                                    <option value="18-30" @selected(request('budget') === '18-30')>18 - 30 juta</option>
                                    <option value="above-30" @selected(request('budget') === 'above-30')>Di atas 30 juta</option>
                                </select>
                            </div>

                            <button class="btn btn-primary" type="submit">Filter</button>
                        </div>
                    </form>

                    <div class="grid grid-4">
                        @forelse($products as $product)
                            @include('product-card', ['product' => $product])
                        @empty
                            <div class="card card-pad">
                                <h3>Produk tidak ditemukan</h3>
                                <p>Coba ubah filter atau kata kunci pencarian.</p>
                                <a class="btn btn-primary" href="{{ route('catalog') }}">Reset Filter</a>
                            </div>
                        @endforelse
                    </div>
                </div>
            </section>
        @endif

        @if($page === 'detail')
            <section class="section">
                <div class="container detail-grid">
                    <div>
                        <div class="gallery-main" id="mainGalleryBox">
                            <div class="media-fallback">Upload Foto Produk Utama</div>
                            <img
                                id="mainGalleryImage"
                                src="{{ asset($product['cover']) }}"
                                alt="{{ $product['name'] }}"
                                onerror="this.style.display='none'; this.parentElement.classList.add('is-fallback');"
                            >
                        </div>

                        <div class="thumb-grid">
                            @foreach($product['gallery'] as $index => $photo)
                                <button
                                    type="button"
                                    class="thumb-btn {{ $index === 0 ? 'active' : '' }}"
                                    data-image="{{ asset($photo) }}"
                                >
                                    <img
                                        src="{{ asset($photo) }}"
                                        alt="{{ $product['name'] }} {{ $index + 1 }}"
                                        onerror="this.style.display='none'; this.nextElementSibling.style.display='grid';"
                                    >
                                    <div class="thumb-fallback" style="display:none;">Foto {{ $index + 1 }}</div>
                                </button>
                            @endforeach
                        </div>
                    </div>

                    <div class="detail-content">
                        <span class="badge">{{ $product['label'] }}</span>
                        <h1>{{ $product['name'] }}</h1>

                        <div class="price">
                            {{ rupiah($product['price_min']) }} - {{ rupiah($product['price_max']) }}
                        </div>

                        <p>{{ $product['description'] }}</p>

                        <div class="spec-grid">
                            <div class="spec">
                                <small>Brand</small>
                                <strong>{{ $product['brand'] }}</strong>
                            </div>

                            <div class="spec">
                                <small>Tipe</small>
                                <strong>{{ $product['type'] }}</strong>
                            </div>

                            <div class="spec">
                                <small>Level</small>
                                <strong>{{ $product['level'] }}</strong>
                            </div>

                            <div class="spec">
                                <small>Karakter</small>
                                <strong>{{ $product['tone'] }}</strong>
                            </div>
                        </div>

                        <h3 style="font-size:32px;font-family:Georgia,serif;margin:0 0 10px;color:var(--navy);">Cocok untuk siapa?</h3>
                        <p>{{ $product['suitable_for'] }}</p>

                        <div class="tags">
                            @foreach($product['tags'] as $tag)
                                <span class="tag">{{ $tag }}</span>
                            @endforeach
                        </div>

                        <div class="hero-actions">
                            <form method="POST" action="{{ route('cart.add', $product['slug']) }}">
                                @csrf
                                <button class="btn btn-primary" type="submit">Tambah ke Keranjang</button>
                            </form>

                            <a class="btn btn-gold" target="_blank" href="https://wa.me/{{ $waNumber }}?text=Halo%20Vanguitar%2C%20saya%20tertarik%20dengan%20{{ urlencode($product['brand'] . ' ' . $product['name']) }}.">
                                Tanya via WhatsApp
                            </a>

                            <a class="btn btn-outline" href="{{ route('compare') }}">Bandingkan</a>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if($page === 'cart')
            <section class="section">
                <div class="container">
                    <div class="section-head">
                        <div>
                            <h1 class="section-title">Keranjang</h1>
                            <p class="subtitle">Keranjang masih pakai session, tapi tampilan sudah rapi dan enak dibaca.</p>
                        </div>
                    </div>

                    @if($cart['count'] === 0)
                        <div class="card card-pad">
                            <h3>Keranjang masih kosong</h3>
                            <p>Silakan pilih produk dari katalog dulu.</p>
                            <a class="btn btn-primary" href="{{ route('catalog') }}">Lihat Katalog</a>
                        </div>
                    @else
                        <div class="grid grid-2">
                            <div class="card">
                                @foreach($cart['items'] as $item)
                                    <div class="cart-row">
                                        <div>
                                            <strong>{{ $item['product']['brand'] }} {{ $item['product']['name'] }}</strong>
                                            <div class="meta">{{ $item['product']['type'] }}</div>
                                        </div>

                                        <div>Qty: {{ $item['qty'] }}</div>

                                        <div class="price">{{ rupiah($item['subtotal']) }}</div>

                                        <form method="POST" action="{{ route('cart.remove', $item['product']['slug']) }}">
                                            @csrf
                                            <button class="btn btn-outline" type="submit">Hapus</button>
                                        </form>
                                    </div>
                                @endforeach
                            </div>

                            <div class="summary">
                                <h3>Ringkasan</h3>
                                <p>Total estimasi pesanan</p>
                                <div class="price">{{ rupiah($cart['total']) }}</div>

                                <div class="hero-actions">
                                    <a class="btn btn-gold btn-block" href="{{ route('checkout') }}">Checkout</a>

                                    <form method="POST" action="{{ route('cart.clear') }}" style="width:100%;">
                                        @csrf
                                        <button class="btn btn-outline btn-block" type="submit" style="color:white;border-color:rgba(255,255,255,.28);">
                                            Kosongkan Keranjang
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </section>
        @endif

        @if($page === 'checkout')
            <section class="section">
                <div class="container">
                    <div class="section-head">
                        <div>
                            <h1 class="section-title">Checkout</h1>
                            <p class="subtitle">Tahap awal tetap simpel: isi data, pilih pembayaran, lalu lanjut konfirmasi.</p>
                        </div>
                    </div>

                    @if($cart['count'] === 0)
                        <div class="card card-pad">
                            <h3>Belum ada produk</h3>
                            <p>Keranjang masih kosong.</p>
                            <a class="btn btn-primary" href="{{ route('catalog') }}">Pilih Gitar</a>
                        </div>
                    @else
                        <div class="grid grid-2">
                            <form class="form-box" method="POST" action="{{ route('checkout.process') }}">
                                @csrf

                                <div class="field">
                                    <label>Nama pembeli</label>
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Nama lengkap">
                                </div>

                                <br>

                                <div class="field">
                                    <label>Nomor WhatsApp</label>
                                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="08xxxxxxxxxx">
                                </div>

                                <br>

                                <div class="field">
                                    <label>Alamat</label>
                                    <textarea name="address" placeholder="Alamat pengiriman">{{ old('address') }}</textarea>
                                </div>

                                <br>

                                <div class="field">
                                    <label>Metode pembayaran</label>
                                    <select name="payment">
                                        <option value="">Pilih pembayaran</option>
                                        <option value="Transfer Bank">Transfer Bank</option>
                                        <option value="QRIS Manual">QRIS Manual</option>
                                        <option value="Konfirmasi WhatsApp">Konfirmasi WhatsApp</option>
                                    </select>
                                </div>

                                <br>

                                <button class="btn btn-primary btn-block" type="submit">Buat Pesanan</button>
                            </form>

                            <div class="summary">
                                <h3>Total Checkout</h3>
                                <p>{{ $cart['count'] }} item</p>
                                <div class="price">{{ rupiah($cart['total']) }}</div>
                            </div>
                        </div>
                    @endif
                </div>
            </section>
        @endif

        @if($page === 'success')
            <section class="section">
                <div class="container">
                    <div class="card card-pad">
                        <span class="badge">Pesanan Berhasil</span>
                        <h1 class="section-title">Pesanan berhasil dibuat</h1>
                        <p>Nomor pesanan: <strong>{{ $orderNumber }}</strong></p>
                        <p>Nama: {{ $buyer['name'] }}</p>
                        <p>WhatsApp: {{ $buyer['phone'] }}</p>
                        <p>Pembayaran: {{ $buyer['payment'] }}</p>

                        <div class="hero-actions">
                            <a class="btn btn-primary" href="{{ route('catalog') }}">Belanja Lagi</a>
                            <a class="btn btn-gold" target="_blank" href="https://wa.me/{{ $waNumber }}?text=Halo%20Vanguitar%2C%20saya%20sudah%20membuat%20pesanan%20{{ urlencode($orderNumber) }}.">
                                Konfirmasi WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if($page === 'helper')
            <section class="section">
                <div class="container">
                    <div class="section-head">
                        <div>
                            <h1 class="section-title">Bantu Pilih Gitar</h1>
                            <p class="subtitle">Buat customer yang masih bingung, fitur ini membantu memilih gitar sesuai kebutuhan.</p>
                        </div>
                    </div>

                    <form class="form-box" method="POST" action="{{ route('helper.process') }}">
                        @csrf

                        <div class="form-grid">
                            <div class="field">
                                <label>Budget</label>
                                <select name="budget">
                                    <option value="">Semua budget</option>
                                    <option value="under-18">Di bawah 18 juta</option>
                                    <option value="18-30">18 - 30 juta</option>
                                    <option value="above-30">Di atas 30 juta</option>
                                </select>
                            </div>

                            <div class="field">
                                <label>Kebutuhan</label>
                                <select name="purpose">
                                    <option value="">Semua kebutuhan</option>
                                    <option value="metal">Metal</option>
                                    <option value="stage">Panggung</option>
                                    <option value="drop tuning">Drop tuning</option>
                                    <option value="djent">Djent</option>
                                    <option value="recording">Recording</option>
                                </select>
                            </div>

                            <button class="btn btn-primary" type="submit">Cari Rekomendasi</button>
                        </div>
                    </form>

                    @if(count($results) > 0)
                        <div class="section-head">
                            <div>
                                <h2 class="section-title">Rekomendasi</h2>
                                <p class="subtitle">Hasil rekomendasi berdasarkan pilihan customer.</p>
                            </div>
                        </div>

                        <div class="grid grid-4">
                            @foreach($results as $product)
                                @include('product-card', ['product' => $product])
                            @endforeach
                        </div>
                    @endif
                </div>
            </section>
        @endif

        @if($page === 'compare')
            <section class="section">
                <div class="container">
                    <div class="section-head">
                        <div>
                            <h1 class="section-title">Bandingkan Gitar</h1>
                            <p class="subtitle">Halaman ini sekarang lebih clean dan rapi untuk dibaca.</p>
                        </div>
                    </div>

                    <div class="grid grid-3">
                        @foreach($products as $product)
                            <div class="card">
                                <div class="product-media" style="height:220px;">
                                    <div class="media-fallback">Foto Perbandingan</div>
                                    <img
                                        src="{{ asset($product['cover']) }}"
                                        alt="{{ $product['name'] }}"
                                        onerror="this.style.display='none'; this.parentElement.classList.add('is-fallback');"
                                    >
                                </div>

                                <div class="card-pad">
                                    <span class="badge">{{ $product['brand'] }}</span>
                                    <h3 style="font-family:Georgia,serif;font-size:28px;color:var(--navy);margin:14px 0 8px;">{{ $product['name'] }}</h3>
                                    <p class="price">{{ rupiah($product['price_min']) }} - {{ rupiah($product['price_max']) }}</p>

                                    <div class="spec-grid">
                                        <div class="spec">
                                            <small>Tipe</small>
                                            <strong>{{ $product['type'] }}</strong>
                                        </div>
                                        <div class="spec">
                                            <small>Level</small>
                                            <strong>{{ $product['level'] }}</strong>
                                        </div>
                                        <div class="spec">
                                            <small>Tone</small>
                                            <strong>{{ $product['tone'] }}</strong>
                                        </div>
                                        <div class="spec">
                                            <small>Tujuan</small>
                                            <strong>{{ $product['purpose'] }}</strong>
                                        </div>
                                    </div>

                                    <a class="btn btn-primary btn-block" href="{{ route('product.detail', $product['slug']) }}">Lihat Detail</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        @if($page === 'about')
            <section class="section">
                <div class="container">
                    <div class="card card-pad">
                        <span class="badge">Tentang Vanguitar</span>
                        <h1 class="section-title">Website toko gitar yang elegan, rapi, dan membantu customer memilih dengan lebih yakin.</h1>
                        <p class="subtitle">
                            Fokus utama Vanguitar adalah pengalaman belanja yang jelas:
                            lihat dulu katalog, cek beberapa foto produk, bandingkan pilihan,
                            lalu konsultasi dulu sebelum melakukan pembelian.
                        </p>
                    </div>
                </div>
            </section>
        @endif

        @if($page === 'contact')
            <section class="section">
                <div class="container grid grid-2">
                    <div class="card card-pad">
                        <span class="badge">Kontak</span>
                        <h1 class="section-title">Konsultasi gitar dulu sebelum beli.</h1>
                        <p class="subtitle">
                            Customer bisa bertanya soal budget, kebutuhan panggung, recording,
                            hadiah, atau gitar yang paling cocok untuk level bermainnya.
                        </p>

                        <a class="btn btn-gold" target="_blank" href="https://wa.me/{{ $waNumber }}?text=Halo%20Vanguitar%2C%20saya%20ingin%20konsultasi%20gitar.">
                            Chat WhatsApp
                        </a>
                    </div>

                    <form class="form-box">
                        <div class="field">
                            <label>Nama</label>
                            <input type="text" placeholder="Nama kamu">
                        </div>

                        <br>

                        <div class="field">
                            <label>Pertanyaan</label>
                            <textarea placeholder="Tulis pertanyaan kamu"></textarea>
                        </div>

                        <br>

                        <a class="btn btn-primary btn-block" target="_blank" href="https://wa.me/{{ $waNumber }}?text=Halo%20Vanguitar%2C%20saya%20ingin%20bertanya%20tentang%20gitar.">
                            Kirim ke WhatsApp
                        </a>
                    </form>
                </div>
            </section>
        @endif

        @if($page === 'login')
            <section class="section">
                <div class="container" style="max-width: 520px;">
                    <form class="form-box" method="POST" action="{{ route('login.process') }}">
                        @csrf

                        <span class="badge">Admin Demo</span>
                        <h1 class="section-title">Masuk Admin</h1>
                        <p class="subtitle">Login ini masih simulasi, belum database.</p>

                        <div class="field">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ old('email', 'admin@vanguitar.test') }}">
                        </div>

                        <br>

                        <div class="field">
                            <label>Password</label>
                            <input type="password" name="password" value="Vanguitar2026!">
                        </div>

                        <br>

                        <button class="btn btn-primary btn-block" type="submit">Masuk Dashboard</button>

                        <p class="subtitle" style="font-size: 14px;">
                            Email: admin@vanguitar.test<br>
                            Password: Vanguitar2026!
                        </p>
                    </form>
                </div>
            </section>
        @endif

        @if($page === 'admin')
            <section class="section">
                <div class="container">
                    <div class="section-head">
                        <div>
                            <h1 class="section-title">Dashboard Admin</h1>
                            <p class="subtitle">Frontend sudah lebih siap. Database dan CRUD bisa dibuat setelah tampilan disetujui customer.</p>
                        </div>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-outline" type="submit">Keluar</button>
                        </form>
                    </div>

                    <div class="grid grid-3">
                        <div class="card card-pad">
                            <span class="badge">Produk</span>
                            <h2 style="font-size:34px;color:var(--navy);">{{ count($products) }}</h2>
                            <p>Total katalog sementara.</p>
                        </div>

                        <div class="card card-pad">
                            <span class="badge">Banner</span>
                            <h2 style="font-size:34px;color:var(--navy);">{{ count($banners) }}</h2>
                            <p>Slideshow iklan aktif.</p>
                        </div>

                        <div class="card card-pad">
                            <span class="badge">Status</span>
                            <h2 style="font-size:34px;color:var(--navy);">Ready</h2>
                            <p>Tampilan sudah lebih rapi dan asset-based.</p>
                        </div>
                    </div>

                    <div class="section-head" style="margin-top: 34px;">
                        <div>
                            <h2 class="section-title">Preview Produk</h2>
                        </div>
                    </div>

                    <div class="grid grid-4">
                        @foreach(array_slice($products, 0, 8) as $product)
                            @include('product-card', ['product' => $product])
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </main>

    <footer class="footer">
        <div class="container">
            <h3>Vanguitar</h3>
            <p>
                Temukan gitar yang paling sesuai dengan karakter bermainmu.
                Jelajahi katalog, bandingkan pilihan, lihat detail foto produk,
                lalu konsultasi sebelum checkout agar pembelian terasa lebih meyakinkan.
            </p>
        </div>
    </footer>

    <a class="wa" target="_blank" href="https://wa.me/{{ $waNumber }}?text=Halo%20Vanguitar%2C%20saya%20ingin%20konsultasi%20gitar.">
        WhatsApp
    </a>

    <script>
        (function () {
            const slider = document.getElementById('heroSlider');
            if (!slider) return;

            const slides = slider.querySelectorAll('.slide');
            const dots = slider.querySelectorAll('.slider-dot');
            let current = 0;
            let interval = null;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('active', i === index);
                });

                dots.forEach((dot, i) => {
                    dot.classList.toggle('active', i === index);
                });

                current = index;
            }

            function nextSlide() {
                let next = current + 1;
                if (next >= slides.length) next = 0;
                showSlide(next);
            }

            dots.forEach((dot, index) => {
                dot.addEventListener('click', function () {
                    showSlide(index);
                    restartInterval();
                });
            });

            function startInterval() {
                interval = setInterval(nextSlide, 5000);
            }

            function restartInterval() {
                clearInterval(interval);
                startInterval();
            }

            slider.addEventListener('mouseenter', function () {
                clearInterval(interval);
            });

            slider.addEventListener('mouseleave', function () {
                startInterval();
            });

            startInterval();
        })();

        (function () {
            const mainImage = document.getElementById('mainGalleryImage');
            const mainBox = document.getElementById('mainGalleryBox');
            const thumbs = document.querySelectorAll('.thumb-btn');

            if (!mainImage || !mainBox || thumbs.length === 0) return;

            thumbs.forEach((thumb) => {
                thumb.addEventListener('click', function () {
                    const newSrc = this.dataset.image;

                    thumbs.forEach((item) => item.classList.remove('active'));
                    this.classList.add('active');

                    mainBox.classList.remove('is-fallback');
                    mainImage.style.opacity = '0';

                    const temp = new Image();
                    temp.onload = function () {
                        mainImage.src = newSrc;
                        mainImage.style.display = 'block';
                        setTimeout(() => {
                            mainImage.style.opacity = '1';
                        }, 50);
                    };

                    temp.onerror = function () {
                        mainImage.style.display = 'none';
                        mainBox.classList.add('is-fallback');
                    };

                    temp.src = newSrc;
                });
            });
        })();
    </script>
</body>
</html>