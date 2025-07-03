 @props([
     'customer' => $customer,
 ])

 @php
     $navItems = [
         [
             'label' => 'Account Details',
             'icon' => 'ri-user-line',
             'route' => 'customer-detail',
             'active' => request('page') == 'customer-detail' ? true : false,
         ],
         [
             'label' => 'Your Orders',
             'icon' => 'ri-shopping-cart-line',
             'route' => 'orders',
             'active' => request('page') == 'orders' ? true : false,
         ],
         [
             'label' => 'My Address',
             'icon' => 'ri-map-pin-line',
             'route' => 'page?address',
             'active' => request('page') == 'address' ? true : false,
         ],
         [
             'label' => 'Logout',
             'icon' => 'ri-logout-box-r-line',
             'route' => 'login.html',
             'active' => false,
         ],
     ];
 @endphp

 {{-- @dd($customer->first_name); --}}

 {{--
 "id" => 1
    "first_name" => "fahath"
    "last_name" => "mohamed"
    "name" => "fahath"
    "email" => "torujo@mailinator.com"
    "city" => "Choose Emirate"
    "postal_code" => null
    "mobile" => "0502848071"
    "password" => "$2y$12$wfT.JxrFos6oqnHmWysRJe12aYoAhtCM.qlBOzZp/zFlfN7ugz59S"
    "address" => "dubai"
    "country" => "United Arab Emirates"
    "is_default" => 1
    "created_at" => "2025-06-08 16:50:24"
    "updated_at" => "2025-06-14 12:08:18"
    "description" => null --}}


 <div class="my-account-wrap">
     <div class="wrap-sidebar-account">
         <div class="sidebar-account">
             <div class="account-avatar">
                 <div class="image">
                     <img src="https://themesflat.co/html/modave/images/avatar/user-account.jpg" alt="">
                 </div>
                 <h6 class="mb_4">{{ $customer?->first_name . ' ' . $customer?->last_name }}</h6>
                 <div class="body-text-1">{{ $customer?->email }}</div>
             </div>
             <ul class="my-account-nav">
                 @foreach ($navItems as $item)
                     <li>
                         <a href="{{ url('customer/account', ['page' => $item['route']]) }}"
                             class="my-account-nav-item {{ $item['active'] ? 'active' : '' }}">
                             <i class="{{ $item['icon'] }}"></i>
                             {{ $item['label'] }}
                         </a>
                     </li>
                 @endforeach
             </ul>
         </div>
     </div>


     {{ $slot }}

 </div>
