<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BINUS - TFI Event</title>
    <link rel="icon" href="/images/TFI-Favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    @stack('styles')
</head>
<body>


<nav class="navbar bg-body-tertiary fixed-top d-flex justify-content-between align-items-center">
    <div class="container-fluid">
        <h2 class="tfibanh mb-0">TEACH FOR INDONESIA</h2>

        <a id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="inline-flex items-center">Hello, {{ Auth::user()->nim }}<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        </a>
    
    <!-- Dropdown menu -->
        <div id="dropdownInformation" class="name-backdrop z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                <div>{{ Auth::user()->name }}</div>
                <!-- {{ Auth::user()->name }} -->
                <div class="font-medium truncate">{{ Auth::user()->email }}</div>
            </div>
            <div class="py-2">
                <form action="#" method="post">
                    @csrf
                    <button class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 width:350 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>


    <div class="sidebar " tabindex="-1">
        <div style="width: 100%; display: flex; justify-content: center; padding: 20px;">
            <img src="{{ asset('images\LOGO-TFI-PUTIH-FIXED.png') }}" alt="" style="width: 80%;">
        </div>


        <div class="containerLAY">
            <h6 class="user-name">Hello, {{ Auth::user()->name }}</h6>
            <h5 class="role-name">Super Admin</h5>
        </div>
        <div class="nav-section px-3">
            <ul>
                <li><a href="{{ route('admDashboard') }}" class="{{ Route::is('admDashboard') ? 'active' : '' }}">Dashboard</a></li>
                <li>
                    <ul>
                        <!-- <li><a class="mt-2" href="{{ route('social-event') }}" class="">Social Event</a></li> -->
                        <li><a href="{{ route('admCb_course') }}" class="{{ Route::is('admCb_course', 'admCreate', 'admCreate2', 'admEdit', 'admEdit2') ? 'active' : '' }}">Character Building Course</a></li>
                        <li><a href="{{ route('admProject') }}" class="{{ Route::is('admProject') ? 'active' : '' }}">Character Building Project</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
       
        <div class="content">
            <div class="container">
                @yield('content')
            </div>
        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    @stack('scripts')
</body>
</html>