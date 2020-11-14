<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/midone.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
    </head>
    <!-- END: Head -->
    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Shons" class="w-6" src="{{asset('images/shons.png')}}">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="/dashboard" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li> 
                <li>
                    <a href="/loans" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> My Loans </div>
                    </a>
                </li> 
                <li>
                    <a href="payments" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> My Payments </div>
                    </a>
                </li> 
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        <div class="border-b border-theme-24 -mt-10 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 pt-3 md:pt-0 mb-10">
            <div class="top-bar-boxed flex items-center">
                <!-- BEGIN: Logo -->
                <a href="" class="-intro-x hidden md:flex">
                    <img alt="Shons" class="w-6" src="{{asset('images/shons.png')}}">
                    <span class="text-white text-lg ml-3"> Shons Finance </span>
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb breadcrumb--light mr-auto"> <a href="" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
                <!-- END: Breadcrumb -->            
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110">
                        <img alt="Shons User" src="{{asset('images/user.svg')}}">
                    </div>
                    <div class="dropdown-box w-56">
                        <div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">
                            <div class="p-4 border-b border-theme-40 dark:border-dark-3">
                                <div class="font-medium">{{Auth::user()->client->firstname}} {{Auth::user()->client->surname}}</div>
                                <div class="text-xs text-theme-41 dark:text-gray-600">{{Auth::user()->email}}</div>
                            </div>                            
                            <div class="p-2 border-t border-theme-40 dark:border-dark-3">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                <a 
                                href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                this.closest('form').submit();" 
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"
                                 > <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i>
                                     Logout   
                                </a>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
        <!-- BEGIN: Top Menu -->
        <nav class="top-nav">
            <ul>
                <li>
                    <a href="/dashboard" class="top-menu top-menu--active">
                        <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                        <div class="top-menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="/loans" class="top-menu top-menu--active">
                        <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                        <div class="top-menu__title"> My Loans </div>
                    </a>
                </li>
                <li>
                    <a href="/payments" class="top-menu top-menu--active">
                        <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                        <div class="top-menu__title"> My Payments </div>
                    </a>
                </li>
                <li>
                    <a href="/banks" class="top-menu top-menu--active">
                        <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                        <div class="top-menu__title"> Payment Methods </div>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- END: Top Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
                    <!-- BEGIN: General Report -->
                    <div class="col-span-12 mt-8">
                            <main>
                                {{ $slot }}
                            </main>
                    </div>
                    <!-- END: General Report -->                    
                </div>               
            </div>
        </div>
        <!-- END: Content -->    

        <!-- BEGIN: JS Assets-->       
        <script src="{{ asset('js/midone.js') }}" defer></script>
        <!-- END: JS Assets-->
    </body>
</html>
