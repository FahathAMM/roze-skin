@props([
    'products' => [],
])

@php
    $skins = [
        ['label' => 'Face', 'image' => 'face-cls.jpg'],
        ['label' => 'Hand', 'image' => 'hand-cls.jpg'],
        ['label' => 'Body', 'image' => 'body-cls.jpg'],
        ['label' => 'Eyes', 'image' => 'eye-cls.jpg'],
        ['label' => 'Foot', 'image' => 'foot-cls.jpg'],
        ['label' => 'Lip', 'image' => 'lip-cls.jpg'],
    ];
@endphp

<section class="flat-spacing">
    <div class="container">
        <div class="heading-section text-center wow fadeInUp">
            <h3 class="heading">Shop by Skin Concern</h3>
            <p class="subheading text-secondary">Fresh styles just in! Elevate your look.</p>
        </div>
        <div class="tf-grid-layout tf-col-2 md-col-3">

            @foreach ($skins as $skin)
                <div class="collection-position-2 style-6 hover-img wow fadeInUp" data-wow-delay="0s">
                    <a class="img-style">
                        @php $imagePath = asset("site/images/skin/{$skin['image']}"); @endphp
                        <img class="ls-is-cached lazyloaded" data-src="{{ $imagePath }}" src="{{ $imagePath }}"
                            alt="banner-cls">
                    </a>
                    <div class="content">
                        <a href="shop-categories-top.html" class="cls-btn">
                            <h6 class="text">{{ $skin['label'] }}</h6>
                        </a>
                    </div>
                </div>
            @endforeach



            {{-- <div class="collection-position-2 style-6 hover-img wow fadeInUp" data-wow-delay="0.1s">
                <a class="img-style">
                    <img class=" ls-is-cached lazyloaded" data-src="images/collections/grid-cls/hand-cls.jpg"
                        src="images/collections/grid-cls/hand-cls.jpg" alt="banner-cls">
                </a>
                <div class="content">
                    <a href="shop-categories-top.html" class="cls-btn">
                        <h6 class="text">Hand</h6>
                    </a>
                </div>
            </div>
            <div class="collection-position-2 style-6 hover-img wow fadeInUp" data-wow-delay="0.2s">
                <a class="img-style">
                    <img class=" ls-is-cached lazyloaded" data-src="images/collections/grid-cls/body-cls.jpg"
                        src="images/collections/grid-cls/body-cls.jpg" alt="banner-cls">
                </a>
                <div class="content">
                    <a href="shop-categories-top.html" class="cls-btn">
                        <h6 class="text">Body</h6>
                    </a>
                </div>
            </div>
            <div class="collection-position-2 style-6 hover-img wow fadeInUp" data-wow-delay="0s">
                <a class="img-style">
                    <img class=" ls-is-cached lazyloaded" data-src="images/collections/grid-cls/foot-cls.jpg"
                        src="images/collections/grid-cls/foot-cls.jpg" alt="banner-cls">
                </a>
                <div class="content">
                    <a href="shop-categories-top.html" class="cls-btn">
                        <h6 class="text">Foot</h6>
                    </a>
                </div>
            </div>
            <div class="collection-position-2 style-6 hover-img wow fadeInUp" data-wow-delay="0.1s">
                <a class="img-style">
                    <img class=" ls-is-cached lazyloaded" data-src="images/collections/grid-cls/eye-cls.jpg"
                        src="images/collections/grid-cls/eye-cls.jpg" alt="banner-cls">
                </a>
                <div class="content">
                    <a href="shop-categories-top.html" class="cls-btn">
                        <h6 class="text">Eye</h6>
                    </a>
                </div>
            </div>
            <div class="collection-position-2 style-6 hover-img wow fadeInUp" data-wow-delay="0.2s">
                <a class="img-style">
                    <img class=" ls-is-cached lazyloaded" data-src="images/collections/grid-cls/lip-cls.jpg"
                        src="images/collections/grid-cls/lip-cls.jpg" alt="banner-cls">
                </a>
                <div class="content">
                    <a href="shop-categories-top.html" class="cls-btn">
                        <h6 class="text">Lip</h6>
                    </a>
                </div>
            </div> --}}

        </div>
    </div>
</section>
