<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

if (! function_exists('productItem')) {
    function productItem(array $item): array
    {
        $slug = $item['slug'];

        return array_merge([
            'cover' => "images/products/{$slug}/cover.jpg",
            'gallery' => [
                "images/products/{$slug}/1.jpg",
                "images/products/{$slug}/2.jpg",
                "images/products/{$slug}/3.jpg",
                "images/products/{$slug}/4.jpg",
            ],
        ], $item);
    }
}

if (! function_exists('vanguitarProducts')) {
    function vanguitarProducts(): array
    {
        return [
            productItem([
                'slug' => 'gibson-les-paul-modern',
                'brand' => 'Gibson',
                'name' => 'Les Paul Modern',
                'type' => 'Electric Guitar',
                'level' => 'Premium',
                'tone' => 'Warm',
                'purpose' => 'Stage',
                'price_min' => 48000000,
                'price_max' => 55000000,
                'label' => 'Premium Sustain',
                'description' => 'Mahoni dengan maple top, Burstbucker Pro, sustain panjang dan mid tebal.',
                'suitable_for' => 'Cocok untuk gitaris rock dan metal yang mencari sustain panjang, karakter tebal, dan tampilan premium.',
                'tags' => ['Mahogany', 'Burstbucker Pro', 'Sustain Panjang'],
                'featured' => true,
            ]),
            productItem([
                'slug' => 'gibson-explorer',
                'brand' => 'Gibson',
                'name' => 'Explorer',
                'type' => 'Electric Guitar',
                'level' => 'Premium',
                'tone' => 'Heavy',
                'purpose' => 'Stage',
                'price_min' => 46000000,
                'price_max' => 52000000,
                'label' => 'Aggressive Shape',
                'description' => 'Body mahoni dengan low-end besar dan attack kuat untuk riff metal.',
                'suitable_for' => 'Cocok untuk pemain metal yang ingin karakter panggung kuat dan bentuk gitar ikonik.',
                'tags' => ['Low-end Besar', 'Attack Kuat', 'Stage Guitar'],
                'featured' => true,
            ]),
            productItem([
                'slug' => 'gibson-flying-v-70s',
                'brand' => 'Gibson',
                'name' => "Flying V '70s",
                'type' => 'Electric Guitar',
                'level' => 'Premium',
                'tone' => 'Aggressive',
                'purpose' => 'Stage',
                'price_min' => 42000000,
                'price_max' => 48000000,
                'label' => 'Iconic Metal',
                'description' => 'Desain ikonik dengan akses fret tinggi dan karakter agresif.',
                'suitable_for' => 'Cocok untuk performer yang ingin gitar dengan visual tajam dan karakter suara agresif.',
                'tags' => ['Flying V', 'High Fret Access', 'Aggressive'],
                'featured' => false,
            ]),
            productItem([
                'slug' => 'gibson-sg-modern',
                'brand' => 'Gibson',
                'name' => 'SG Modern',
                'type' => 'Electric Guitar',
                'level' => 'Premium',
                'tone' => 'Fast',
                'purpose' => 'Drop Tuning',
                'price_min' => 32000000,
                'price_max' => 38000000,
                'label' => 'Lightweight',
                'description' => 'Bobot ringan, neck cepat, cocok untuk tuning rendah.',
                'suitable_for' => 'Cocok untuk pemain yang butuh gitar ringan, cepat, dan nyaman untuk riff tuning rendah.',
                'tags' => ['Lightweight', 'Fast Neck', 'Drop Tuning'],
                'featured' => false,
            ]),
            productItem([
                'slug' => 'fender-jim-root-jazzmaster',
                'brand' => 'Fender',
                'name' => 'Jim Root Jazzmaster',
                'type' => 'Electric Guitar',
                'level' => 'Premium',
                'tone' => 'Heavy',
                'purpose' => 'Metal',
                'price_min' => 40000000,
                'price_max' => 45000000,
                'label' => 'Heavy Signature',
                'description' => 'EMG aktif dan kontrol minimalis khusus musik berat.',
                'suitable_for' => 'Cocok untuk pemain modern metal yang ingin tone padat, simpel, dan siap panggung.',
                'tags' => ['EMG Active', 'Signature', 'Heavy Music'],
                'featured' => true,
            ]),
            productItem([
                'slug' => 'fender-player-ii-telecaster-hh',
                'brand' => 'Fender',
                'name' => 'Player II Telecaster HH',
                'type' => 'Electric Guitar',
                'level' => 'Intermediate',
                'tone' => 'Balanced',
                'purpose' => 'Rock Metal',
                'price_min' => 15000000,
                'price_max' => 18000000,
                'label' => 'Budget Friendly',
                'description' => 'Dual humbucker serbaguna untuk rock dan metal.',
                'suitable_for' => 'Cocok untuk pemain yang ingin gitar fleksibel untuk rock, alternatif, dan metal ringan.',
                'tags' => ['Dual Humbucker', 'Versatile', 'Rock Metal'],
                'featured' => true,
            ]),
            productItem([
                'slug' => 'fender-player-stratocaster-hss',
                'brand' => 'Fender',
                'name' => 'Player Stratocaster HSS',
                'type' => 'Electric Guitar',
                'level' => 'Intermediate',
                'tone' => 'Bright',
                'purpose' => 'Versatile',
                'price_min' => 15000000,
                'price_max' => 18000000,
                'label' => 'Versatile HSS',
                'description' => 'Strat dengan humbucker bridge untuk gain tinggi.',
                'suitable_for' => 'Cocok untuk pemain yang ingin satu gitar untuk clean, blues, rock, sampai high gain.',
                'tags' => ['HSS Pickup', 'Bright Tone', 'Flexible'],
                'featured' => false,
            ]),
            productItem([
                'slug' => 'schecter-keith-merrow-km7-mkiii',
                'brand' => 'Schecter',
                'name' => 'Keith Merrow KM-7 MK-III',
                'type' => '7-String Guitar',
                'level' => 'Advanced',
                'tone' => 'Tight',
                'purpose' => 'Drop Tuning',
                'price_min' => 22000000,
                'price_max' => 28000000,
                'label' => '7-String Beast',
                'description' => '7-string multiscale untuk drop tuning ekstrem.',
                'suitable_for' => 'Cocok untuk pemain metalcore, djent, dan modern metal yang butuh tuning rendah tetap jelas.',
                'tags' => ['7 String', 'Multiscale', 'Djent'],
                'featured' => true,
            ]),
            productItem([
                'slug' => 'schecter-c1-sls-elite',
                'brand' => 'Schecter',
                'name' => 'C-1 SLS Elite',
                'type' => 'Electric Guitar',
                'level' => 'Advanced',
                'tone' => 'Modern',
                'purpose' => 'Metal',
                'price_min' => 18000000,
                'price_max' => 24000000,
                'label' => 'Fishman Modern',
                'description' => 'Fishman Fluence Modern dan neck ultra tipis.',
                'suitable_for' => 'Cocok untuk gitaris metal yang butuh pickup modern, neck cepat, dan tampilan mewah.',
                'tags' => ['Fishman Fluence', 'Thin Neck', 'Modern Metal'],
                'featured' => true,
            ]),
            productItem([
                'slug' => 'esp-ltd-ec-1000',
                'brand' => 'ESP LTD',
                'name' => 'EC-1000',
                'type' => 'Electric Guitar',
                'level' => 'Advanced',
                'tone' => 'Heavy',
                'purpose' => 'Metal',
                'price_min' => 22000000,
                'price_max' => 27000000,
                'label' => 'Metal Favorite',
                'description' => 'Salah satu gitar metal paling populer dengan EMG/Fishman.',
                'suitable_for' => 'Cocok untuk gitaris metal yang ingin gitar siap rekaman dan siap panggung.',
                'tags' => ['EMG/Fishman', 'Metal Favorite', 'Stage Ready'],
                'featured' => true,
            ]),
            productItem([
                'slug' => 'epiphone-prophecy-les-paul-custom',
                'brand' => 'Epiphone',
                'name' => 'Prophecy Les Paul Custom',
                'type' => 'Electric Guitar',
                'level' => 'Intermediate',
                'tone' => 'Modern',
                'purpose' => 'Metal',
                'price_min' => 14000000,
                'price_max' => 18000000,
                'label' => 'Modern Value',
                'description' => 'Fishman Fluence dengan fitur modern.',
                'suitable_for' => 'Cocok untuk pemain yang ingin karakter Les Paul modern dengan harga lebih terjangkau.',
                'tags' => ['Fishman Fluence', 'Les Paul', 'Value'],
                'featured' => true,
            ]),
            productItem([
                'slug' => 'ibanez-rgd71alms',
                'brand' => 'Ibanez',
                'name' => 'RGD71ALMS',
                'type' => '7-String Guitar',
                'level' => 'Advanced',
                'tone' => 'Tight',
                'purpose' => 'Djent',
                'price_min' => 21000000,
                'price_max' => 26000000,
                'label' => 'Djent Ready',
                'description' => '7-string multiscale dengan Fishman Fluence.',
                'suitable_for' => 'Cocok untuk djent, metalcore modern, dan tuning rendah yang butuh clarity.',
                'tags' => ['7 String', 'Multiscale', 'Fishman Fluence'],
                'featured' => true,
            ]),
            productItem([
                'slug' => 'ibanez-rg5121',
                'brand' => 'Ibanez',
                'name' => 'RG5121',
                'type' => 'Electric Guitar',
                'level' => 'Premium',
                'tone' => 'Precise',
                'purpose' => 'Recording',
                'price_min' => 32000000,
                'price_max' => 38000000,
                'label' => 'Prestige Japan',
                'description' => 'Seri Prestige Jepang dengan kualitas premium.',
                'suitable_for' => 'Cocok untuk gitaris serius yang butuh presisi, finishing premium, dan kualitas Jepang.',
                'tags' => ['Prestige', 'Japan', 'Premium'],
                'featured' => true,
            ]),
        ];
    }
}

if (! function_exists('vanguitarBanners')) {
    function vanguitarBanners(): array
    {
        return [
            [
                'image' => 'images/banners/banner-1.jpg',
                'title' => 'Premium Collection',
                'text' => 'Tampilan hero kanan sekarang pakai foto iklan dari file kamu.',
            ],
            [
                'image' => 'images/banners/banner-2.jpg',
                'title' => 'Modern Metal Guitars',
                'text' => 'Slideshow otomatis berganti setiap 5 detik.',
            ],
            [
                'image' => 'images/banners/banner-3.jpg',
                'title' => 'Stage Ready',
                'text' => 'Cocok untuk promo produk unggulan atau diskon.',
            ],
            [
                'image' => 'images/banners/banner-4.jpg',
                'title' => 'Find Your Sound',
                'text' => 'Bisa diganti dengan foto katalog atau poster promo.',
            ],
            [
                'image' => 'images/banners/banner-5.jpg',
                'title' => 'Special Offer',
                'text' => 'Silakan isi dengan foto iklan terbaik dari customer kamu.',
            ],
        ];
    }
}

if (! function_exists('vanguitarProduct')) {
    function vanguitarProduct(string $slug): ?array
    {
        foreach (vanguitarProducts() as $product) {
            if ($product['slug'] === $slug) {
                return $product;
            }
        }

        return null;
    }
}

if (! function_exists('rupiah')) {
    function rupiah(int $number): string
    {
        return 'Rp' . number_format($number, 0, ',', '.');
    }
}

if (! function_exists('cartData')) {
    function cartData(): array
    {
        $cart = session('cart', []);
        $items = [];
        $total = 0;

        foreach ($cart as $slug => $qty) {
            $product = vanguitarProduct($slug);

            if (! $product) {
                continue;
            }

            $subtotal = $product['price_min'] * $qty;
            $total += $subtotal;

            $items[] = [
                'product' => $product,
                'qty' => $qty,
                'subtotal' => $subtotal,
            ];
        }

        return [
            'items' => $items,
            'count' => array_sum($cart),
            'total' => $total,
        ];
    }
}

if (! function_exists('viewPayload')) {
    function viewPayload(array $extra = []): array
    {
        return array_merge([
            'logo' => 'images/logo/logo-vanguitar.png',
            'banners' => vanguitarBanners(),
            'cart' => cartData(),
        ], $extra);
    }
}

Route::get('/', function () {
    $products = vanguitarProducts();

    return view('vanguitar', viewPayload([
        'page' => 'home',
        'title' => 'Vanguitar - Find Your Sound',
        'products' => $products,
        'featured' => array_values(array_filter($products, fn ($item) => $item['featured'])),
    ]));
})->name('home');

Route::get('/katalog', function (Request $request) {
    $products = vanguitarProducts();

    $search = strtolower($request->query('search', ''));
    $brand = $request->query('brand', '');
    $budget = $request->query('budget', '');

    $filtered = array_values(array_filter($products, function ($product) use ($search, $brand, $budget) {
        $matchSearch = $search === ''
            || str_contains(strtolower($product['name']), $search)
            || str_contains(strtolower($product['brand']), $search)
            || str_contains(strtolower($product['description']), $search)
            || str_contains(strtolower($product['type']), $search);

        $matchBrand = $brand === '' || $product['brand'] === $brand;

        $matchBudget = true;

        if ($budget === 'under-18') {
            $matchBudget = $product['price_min'] <= 18000000;
        }

        if ($budget === '18-30') {
            $matchBudget = $product['price_min'] >= 18000000 && $product['price_min'] <= 30000000;
        }

        if ($budget === 'above-30') {
            $matchBudget = $product['price_min'] >= 30000000;
        }

        return $matchSearch && $matchBrand && $matchBudget;
    }));

    return view('vanguitar', viewPayload([
        'page' => 'catalog',
        'title' => 'Katalog - Vanguitar',
        'products' => $filtered,
        'allProducts' => $products,
    ]));
})->name('catalog');

Route::get('/produk/{slug}', function (string $slug) {
    $product = vanguitarProduct($slug);

    abort_if(! $product, 404);

    return view('vanguitar', viewPayload([
        'page' => 'detail',
        'title' => $product['name'] . ' - Vanguitar',
        'product' => $product,
    ]));
})->name('product.detail');

Route::post('/keranjang/tambah/{slug}', function (string $slug) {
    $product = vanguitarProduct($slug);

    abort_if(! $product, 404);

    $cart = session('cart', []);
    $cart[$slug] = ($cart[$slug] ?? 0) + 1;

    session(['cart' => $cart]);

    return redirect()->route('cart')->with('success', $product['name'] . ' berhasil masuk keranjang.');
})->name('cart.add');

Route::get('/keranjang', function () {
    return view('vanguitar', viewPayload([
        'page' => 'cart',
        'title' => 'Keranjang - Vanguitar',
    ]));
})->name('cart');

Route::post('/keranjang/hapus/{slug}', function (string $slug) {
    $cart = session('cart', []);
    unset($cart[$slug]);
    session(['cart' => $cart]);

    return redirect()->route('cart')->with('success', 'Produk berhasil dihapus dari keranjang.');
})->name('cart.remove');

Route::post('/keranjang/kosongkan', function () {
    session()->forget('cart');

    return redirect()->route('cart')->with('success', 'Keranjang berhasil dikosongkan.');
})->name('cart.clear');

Route::get('/checkout', function () {
    return view('vanguitar', viewPayload([
        'page' => 'checkout',
        'title' => 'Checkout - Vanguitar',
    ]));
})->name('checkout');

Route::post('/checkout', function (Request $request) {
    if (cartData()['count'] === 0) {
        return redirect()->route('catalog')->with('success', 'Pilih gitar dulu sebelum checkout.');
    }

    $validated = $request->validate([
        'name' => ['required', 'string', 'max:100'],
        'phone' => ['required', 'string', 'max:30'],
        'address' => ['required', 'string', 'max:500'],
        'payment' => ['required', 'string', 'max:100'],
    ]);

    $orderNumber = 'VAN-' . now()->format('ymdHis');
    session()->forget('cart');

    return view('vanguitar', viewPayload([
        'page' => 'success',
        'title' => 'Pesanan Berhasil - Vanguitar',
        'orderNumber' => $orderNumber,
        'buyer' => $validated,
    ]));
})->name('checkout.process');

Route::get('/bantu-pilih-gitar', function () {
    return view('vanguitar', viewPayload([
        'page' => 'helper',
        'title' => 'Bantu Pilih Gitar - Vanguitar',
        'results' => [],
    ]));
})->name('helper');

Route::post('/bantu-pilih-gitar', function (Request $request) {
    $budget = $request->input('budget', '');
    $purpose = strtolower($request->input('purpose', ''));

    $results = array_values(array_filter(vanguitarProducts(), function ($product) use ($budget, $purpose) {
        $matchBudget = true;

        if ($budget === 'under-18') {
            $matchBudget = $product['price_min'] <= 18000000;
        }

        if ($budget === '18-30') {
            $matchBudget = $product['price_min'] >= 18000000 && $product['price_min'] <= 30000000;
        }

        if ($budget === 'above-30') {
            $matchBudget = $product['price_min'] >= 30000000;
        }

        $matchPurpose = $purpose === ''
            || str_contains(strtolower($product['purpose']), $purpose)
            || str_contains(strtolower($product['description']), $purpose)
            || str_contains(strtolower($product['suitable_for']), $purpose);

        return $matchBudget && $matchPurpose;
    }));

    if (count($results) === 0) {
        $results = array_slice(vanguitarProducts(), 0, 4);
    }

    return view('vanguitar', viewPayload([
        'page' => 'helper',
        'title' => 'Rekomendasi Gitar - Vanguitar',
        'results' => $results,
    ]));
})->name('helper.process');

Route::get('/bandingkan', function () {
    return view('vanguitar', viewPayload([
        'page' => 'compare',
        'title' => 'Bandingkan Gitar - Vanguitar',
        'products' => array_slice(vanguitarProducts(), 0, 3),
    ]));
})->name('compare');

Route::get('/tentang', function () {
    return view('vanguitar', viewPayload([
        'page' => 'about',
        'title' => 'Tentang - Vanguitar',
    ]));
})->name('about');

Route::get('/kontak', function () {
    return view('vanguitar', viewPayload([
        'page' => 'contact',
        'title' => 'Kontak - Vanguitar',
    ]));
})->name('contact');

Route::get('/login', function () {
    return view('vanguitar', viewPayload([
        'page' => 'login',
        'title' => 'Login Admin - Vanguitar',
    ]));
})->name('login');

Route::post('/login', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    if ($email === 'admin@vanguitar.test' && $password === 'Vanguitar2026!') {
        session(['is_admin' => true]);

        return redirect()->route('admin.dashboard');
    }

    return back()->withErrors([
        'login' => 'Email atau password salah.',
    ])->withInput();
})->name('login.process');

Route::post('/logout', function () {
    session()->forget('is_admin');

    return redirect()->route('home')->with('success', 'Berhasil keluar dari dashboard.');
})->name('logout');

Route::get('/admin/dashboard', function () {
    if (! session('is_admin')) {
        return redirect()->route('login')->with('success', 'Silakan login dulu.');
    }

    return view('vanguitar', viewPayload([
        'page' => 'admin',
        'title' => 'Dashboard Admin - Vanguitar',
        'products' => vanguitarProducts(),
    ]));
})->name('admin.dashboard');