<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Dashboard') }}</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <main >
            <div class="w-full h-full dashboard-body">
                <div id="removeClass" class="z-50 sidebar activeClass">
                    <div class="logo_content">
                        <div class="logo">
                            <a href="{{route('admin.home')}}">
                                <div class="logo_name">G. Ezizow</div>
                            </a>
                        </div>
                        <i class="cursor-pointer bx bx-menu" id="btn" onclick="myFunction()"></i>
                    </div>
                    <ul class="nav_list">
                        <li>
                            <a href="{{route('admin.poem')}}">
                                <i class="bx bxs-dashboard"></i>
                                <span class="links_name">{{__('nav.poems')}}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.song')}}">
                                <i class="bx bxs-food-menu"></i>
                                <span class="links_name">{{__('nav.songs')}}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.gallery')}}">
                                <i class="bx bxs-food-menu"></i>
                                <span class="links_name">{{__('nav.galleries')}}</span>
                            </a>
                        </li>
                    </ul>
                    <div class="profile_content">
                        <div class="profile">
                            <div class="profile_details">
                                    <img src="/menu-icons/owner2.webp" alt="" />
                                <div class="name_job">
                                        <div class="name">{{ Auth::user()->name }}</div>
                                        @if (Auth::user()->is_admin == 1)
                                            <div class="job">Super admin</div>
                                        @else
                                            <div class="job">Admin</div>
                                        @endif
                                        
                                </div>
                            </div>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="cursor-pointer bx bx-log-out" id="log_out"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <div class="home_content">
                    @yield('content')            
                </div>
            </div>
        </main>
    </div>
</body>
</html>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
    .nav_list{
        color:white;
    }
    ul>li{
        margin:0 2px;
        cursor: pointer;
    }
    .router-link-active {
        background: #fff;
    }
    
    .router-link-active > .links_name,
    .router-link-active > i {
        color: #11101d;
    }
    
    .dashboard-body {
        position: relative;
        min-height: 100vh;
        width: 100%;
        overflow: hidden;
    }
    
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 78px;
        background: #11101d;
        padding: 6px 14px;
        transition: all 0.5s ease;
    }
    .sidebar.activeClass {
        width: 260px;
    }
    .sidebar > .logo_content > .logo {
        color: #fff;
        display: flex;
        height: 50px;
        width: 100%;
        align-items: center;
        opacity: 0;
        pointer-events: none;
        transition: all 0.5s ease;
    }
    
    .sidebar.activeClass .logo_content > .logo {
        opacity: 1;
        pointer-events: none;
    }
    
    .logo_content .logo i {
        font-size: 28px;
        margin-right: 5px;
    }
    
    .logo_name {
        font-size: 20px;
        font-weight: 400;
        white-space: nowrap;
    }
    
    .sidebar #btn {
        position: absolute;
        color: #fff;
        left: 50%;
        top: 6px;
        font-size: 20px;
        height: 50px;
        width: 50px;
        text-align: center;
        line-height: 50px;
        transform: translateX(-50%);
        transition: all 0.5s ease;
    }
    .sidebar.activeClass #btn {
        left: 90%;
    }
    
    .sidebar ul {
        margin-top: 20px;
    }
    .sidebar ul li {
        position: relative;
        height: 50px;
        width: 100%;
        margin: 0 5px;
        list-style: none;
        line-height: 50px;
        margin-top: 4px;
    }

    .sidebar ul li:hover .arrowToolTip {
        transition: all 0.5s ease;
        opacity: 1;
        top: 0;
    }
    .sidebar ul li input {
        position: absolute;
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
        border-radius: 12px;
        outline: none;
        border: none;
        background: #1d1b31;
        padding-left: 50px;
        font-size: 18px;
        color: #fff;
    }
    .sidebar ul li a {
        color: #fff;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.4s ease;
        border-radius: 12px;
        overflow: hidden;
    }
    .sidebar ul li a:hover {
        color: #11101d;
        background: #fff;
    }
    .sidebar ul li i {
        height: 50px;
        min-width: 50px;
        border-radius: 12px;
        line-height: 50px;
        text-align: center;
    }
    .sidebar .links_name {
        opacity: 0;
        pointer-events: none;
        white-space: nowrap;
        transition: all 0.5s ease;
    }
    .sidebar.activeClass .links_name {
        opacity: 1;
        pointer-events: none;
    }
    
    .sidebar .profile_content {
        position: absolute;
        color: #fff;
        bottom: 0;
        left: 0;
        width: 100%;
    }
    
    .sidebar .profile_content .profile {
        position: relative;
        padding: 10px 6px;
        height: 60px;
        background: none;
    }
    
    .sidebar.sidebar.activeClass .profile_content .profile {
        background: #1d1b31;
    }
    .profile_content .profile .profile_details {
        display: flex;
        align-items: center;
        opacity: 0;
        pointer-events: none; /* i can not understand*/
        white-space: nowrap;
        transition: all 0.5s ease;
    }
    
    .sidebar.activeClass .profile .profile_details {
        opacity: 1;
        pointer-events: auto;
    }
    
    .profile .profile_details img {
        width: 45px;
        height: 45px;
        object-fit: cover;
        border-radius: 12px;
    }
    
    .profile .profile_details .name_job {
        margin-left: 10px;
    }
    
    .profile .profile_details .name {
        font-size: 15px;
        font-weight: 400;
    }
    
    .profile .profile_details .job {
        font-size: 12px;
    }
    
    .profile #log_out {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 10px;
        min-width: 50px;
        line-height: 50px;
        font-size: 20px;
        border-radius: 12px;
        text-align: center;
        transition: all 0.5s ease;
        background: #1a1b31;
    }
    
    .sidebar.activeClass .profile #log_out {
        left: 88%;
        background: none;
    }
    
    .home_content {
        position: absolute;
        height: 100%;
        width: calc(100% - 78px);
        left: 78px;
        transition: all 0.5s ease;
    }
    .home_content .text {
        font-size: 25px;
        font-weight: 500;
        color: #1d1b31;
        margin: 14px;
    }
    
    .sidebar.activeClass ~ .home_content {
        width: calc(100% - 260px);
        left: 260px;
    }
    </style>
    <script>
        function myFunction() {
        const element = document.getElementById("removeClass");  // Get the DIV element
        element.classList.remove("activeClass"); // Remove mystyle class from DIV
        // element.classList.add("newone"); // Add newone class to DIV
        }
    </script>
