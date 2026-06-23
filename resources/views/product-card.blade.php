<div class="card product-card">
    <a href="{{ route('product.detail', $product['slug']) }}" class="product-media">
        <div class="media-fallback">Upload Foto Produk</div>
        <img
            src="{{ asset($product['cover']) }}"
            alt="{{ $product['name'] }}"
            class="product-cover"
            loading="lazy"
            onerror="this.style.display='none'; this.parentElement.classList.add('is-fallback');"
        >
        <div class="product-overlay">
            <span>Lihat Detail</span>
        </div>
    </a>

    <div class="product-body">
        <span class="badge">{{ $product['label'] }}</span>

        <div class="product-title-wrap">
            <h3>{{ $product['name'] }}</h3>
            <div class="meta">{{ $product['brand'] }} • {{ $product['type'] }}</div>
        </div>

        <div class="price">
            {{ rupiah($product['price_min']) }} - {{ rupiah($product['price_max']) }}
        </div>

        <p class="product-desc">
            {{ $product['description'] }}
        </p>

        <div class="tags">
            @foreach(array_slice($product['tags'], 0, 3) as $tag)
                <span class="tag">{{ $tag }}</span>
            @endforeach
        </div>

        <div class="product-actions">
            <a class="btn btn-primary" href="{{ route('product.detail', $product['slug']) }}">Detail</a>

            <form method="POST" action="{{ route('cart.add', $product['slug']) }}">
                @csrf
                <button class="btn btn-gold" type="submit">Keranjang</button>
            </form>

            <a class="btn btn-outline full" href="{{ route('compare') }}">Bandingkan</a>
        </div>
    </div>
</div>