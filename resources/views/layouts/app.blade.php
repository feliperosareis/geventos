<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

        <!--start::Global javascript (used in all pages)-->
        <script src="vendors/alpinejs/dist/cdn.min.js"></script><!-- core js -->
        <script src="vendors/flatpickr/dist/flatpickr.min.js"></script><!-- input date -->
        <script src="vendors/flatpickr/dist/plugins/rangePlugin.js"></script><!-- input range date -->
        <script src="vendors/@yaireo/tagify/dist/tagify.js"></script><!-- input tags -->
        <script src="vendors/pristinejs/dist/pristine.min.js"></script><!-- form validation -->
        <script src="vendors/simple-datatables/dist/umd/simple-datatables.js"></script><!--sort table-->
        <!--end::Global javascript (used in all pages)-->

        <!--start::Vendor javascript (only on this page)-->
        <script src="vendors/jsvectormap/dist/js/jsvectormap.min.js"></script><!-- vector map -->
        <script src="vendors/jsvectormap/dist/maps/world.js"></script><!-- world vector map -->
        <!--end::Vendor javascript (only on this page)-->
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-200">
            {{-- <livewire:layout.navigation /> --}}

            <div x-data="{ sidebar: false }" class="wrapper overflow-x-hidden flex">
                <livewire:layout.sidebar/>
                <livewire:layout.topbar/>

                <main class="pt-20 -mt-2 w-full">
                    <div class="mx-auto py-5 sm:px-8">
                        {{ $slot }}
                    </div>
                <main>
            </div>
        </div>
    </body>
</html>
