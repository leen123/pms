<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

       <!-- Dropdown -->
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Format
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-format')}}">add foramt</a>
          <a class="dropdown-item" href="{{route('all-formats')}}">all formats</a>

        </div>
      </li>

       <!-- Dropdown -->
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          User
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-user')}}">add user</a>
          <a class="dropdown-item" href="{{route('all-users')}}">all users</a>

        </div>
      </li>

         <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Caliber
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-caliber')}}">add caliber</a>
          <a class="dropdown-item" href="{{route('all-calibers')}}">all calibers</a>

        </div>
      </li>




         <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Chemical names
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-chemicalname')}}">add chemical name</a>
          <a class="dropdown-item" href="{{route('all-chemicalnames')}}">all chemical names</a>

        </div>
      </li>

        <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Factory
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-factory')}}">add factory</a>
          <a class="dropdown-item" href="{{route('all-factories')}}">all factories</a>

        </div>
      </li>


        <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Role
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-role')}}">add role</a>
          <a class="dropdown-item" href="{{route('all-roles')}}">all roles</a>

        </div>
        </li>

           <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Shelf
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-shelf')}}">add shelf</a>
          <a class="dropdown-item" href="{{route('all-shelves')}}">all shelves</a>

        </div>
        </li>

             <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          orderdetail
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-orderdetail')}}">add orderdetail</a>
          <a class="dropdown-item" href="{{route('all-orderdetails')}}">all orderdetails</a>

        </div>
        </li>

              <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          order
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-order')}}">add order</a>
          <a class="dropdown-item" href="{{route('all-orders')}}">all orders</a>

        </div>
        </li>

                <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          state
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-state')}}">add state</a>
          <a class="dropdown-item" href="{{route('all-states')}}">all states</a>

        </div>
        </li>

                <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          permission
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-permission')}}">add permission</a>
          <a class="dropdown-item" href="{{route('all-permissions')}}">all permissions</a>

        </div>
        </li>

             <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Type
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-type')}}">add type</a>
          <a class="dropdown-item" href="{{route('all-types')}}">all types</a>

        </div>
        </li>

                 <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Warehouse
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-warehouse')}}">add warehouse</a>
          <a class="dropdown-item" href="{{route('all-warehouses')}}">all warehouses</a>

        </div>
        </li>

                   <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
         Bill
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-bill')}}">add bill</a>
          <a class="dropdown-item" href="{{route('all-bills')}}">all bills</a>

        </div>
        </li>



          <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
         Billdetail
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-billdetail')}}">add billdetail</a>
          <a class="dropdown-item" href="{{route('all-billdetails')}}">all billdetails</a>

        </div>
        </li>

         <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
         Location
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-location')}}">add location</a>
          <a class="dropdown-item" href="{{route('all-locations')}}">all locations</a>

        </div>
        </li>


         <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
         Product
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-product')}}">add product</a>
          <a class="dropdown-item" href="{{route('all-products')}}">all products</a>

        </div>
        </li>

        <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
         Pharmacy
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('add-pharmacy')}}">add pharmacy</a>
          <a class="dropdown-item" href="{{route('all-pharmacies')}}">all pharmacies</a>

        </div>
        </li>


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
