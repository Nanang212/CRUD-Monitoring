<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ config('app.name') }} - @yield('title')</title>
    <!--DataTable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <!--css-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--flowbite-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  
</head>
<body>
    <div class="wrapper">
        <main class="">
            @yield('content')
            @include('partials.footer')
        </main> 
    </div>
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.4.slim.js" 
    integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" 
    crossorigin="anonymous"></script>
    <!--DataTable-->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <!--iconify-->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!--flowbite-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    
    @yield('script')
</body>
</html>