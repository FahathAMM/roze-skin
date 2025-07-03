@extends('layout.app-site')
@section('title', 'Product')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icons5.min.css') }}">

    <x-site.component.page-title title="My Account" :breadcrumbs="[['label' => 'Shop', 'url' => route('product.index')], ['label' => 'My Account']]" />

    @php
        $currency = currency();
    @endphp

    <section class="flat-spacing">
        <div class="container">
            <x-site.account.main :customer="$customer">

                @if (request('page') == 'account-detail')
                    <x-site.account.account-detail :customer="$customer" />
                @elseif(request('page') == 'orders')
                    <x-site.account.order-detail :orders="$orders" />
                @else
                    <x-site.account.account-detail :customer="$customer" />
                @endif

            </x-site.account.main>
        </div>
    </section>


    @push('scripts')
        <script></script>
    @endpush

    <style>
        .text-button {
            font-size: 14px;
        }
    </style>

@endsection
