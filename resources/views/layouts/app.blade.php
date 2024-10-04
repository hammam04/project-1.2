<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <style>
        /* CSS untuk membuat sidebar tetap di tempat saat scroll */
        .sidebar {
            position: sticky; /* Atau bisa menggunakan 'fixed' */
            top: 0; /* Untuk posisi vertikal */
            height: 100vh; /* Membuat sidebar mengambil tinggi penuh layar */
            overflow-y: auto; /* Menambahkan scrollbar jika isi melebihi tinggi */
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body class="bg-gray-100 font-sans antialiased">

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg sidebar">
            <div class="p-4 flex justify-center items-center mt-6">
                <img src="img/logo.png" alt="Logo" class="h-16 w-24">
            </div>
            <nav class="flex-1 mt-4">
                <!-- Menu utama -->
                <ul class="space-y-1">
                    <li>
                        <a href="/dashboard"
                            class="flex items-center py-2.5 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <!-- Ikon Dashboard -->
                                <path d="M3 3h18v18H3V3z" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"></path>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                </ul>

                <ul class="space-y-1">
                    <li class="relative">
                        <!-- Tombol Booking dengan event onclick -->
                        <button onclick="toggleMegaMenu()" class="flex items-center w-full py-2.5 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <!-- Ikon Booking -->
                                <path d="M3 3h18v18H3V3z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            Booking
                            <svg class="ml-auto h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <!-- Panah bawah -->
                                <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                        </button>
                
                        <!-- Megamenu yang turun ke bawah -->
                        <div id="megamenu" class="hidden flex-col relative bg-white shadow-md">
                            <a href="/fcl-booking" class="block p-2 hover:bg-blue-50 text-gray-700">
                                <svg class="h-5 w-5 mr-2 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <!-- Ikon FCL Booking -->
                                    <path d="M4 6h16M4 12h16m-7 6h7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                                FCL Booking
                            </a>
                            <a href="lcl-booking" class="block p-2 hover:bg-blue-50 text-gray-700">
                                <svg class="h-5 w-5 mr-2 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <!-- Ikon LCL Booking -->
                                    <path d="M4 6h16M4 12h16m-7 6h7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                                LCL Booking
                            </a>
                            <a href="/update" class="block p-2 hover:bg-blue-50 text-gray-700">
                                <svg class="h-5 w-5 mr-2 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <!-- Ikon Update Booking -->
                                    <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                                Update Booking
                            </a>
                            <a href="/request-booking" class="block p-2 hover:bg-blue-50 text-gray-700">
                                <svg class="h-5 w-5 mr-2 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <!-- Ikon Request Booking -->
                                    <path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                                Request Booking
                            </a>
                            <a href="/canceled-booking" class="block p-2 hover:bg-blue-50 text-gray-700">
                                <svg class="h-5 w-5 mr-2 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <!-- Ikon Canceled Booking -->
                                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 11-12.728 0m12.728 0L5.636 18.364"></path>
                                </svg>
                                Canceled Booking
                            </a>
                            
                        </div>
                    </li>
                </ul>
                
                <!-- Menu Attachment dan Invoice di atas Admin dan Logout -->
                <ul class="space-y-1 mt-8">
                    <li>
                        <a href="#"
                            class="flex items-center py-2.5 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <!-- Ikon Attachment -->
                                <path d="M5 12l7-7 7 7M5 12v7h14v-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            Attachment
                        </a>
                    </li>
                </ul>

                <ul class="space-y-1 mb-8">
                    <li>
                        <a href="/invoice"
                            class="flex items-center py-2.5 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <!-- Ikon Invoice -->
                                <path d="M9 12h6M9 16h6M9 8h6M4 6h16m-1 14H5V6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            Invoice
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Menu Admin dan Logout di paling bawah -->
            <nav class="mt-auto">
                <ul class="space-y-1">
                    <li>
                        <a href="#"
                            class="flex items-center py-2.5 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <!-- Ikon Admin -->
                                <path d="M12 14v7M9 11l3-3 3 3m0 3H9v4h6v-4H9z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            Admin
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center py-2.5 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <!-- Ikon Logout -->
                                <path d="M17 16l4-4m0 0l-4-4m4 4H7m0-7v14" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            Logout
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-50">
            <header class="flex items-center justify-between mb-8 pb-4">
                <div class="flex items-center space-x-20 ml-10">
                    <a href="#" class="text-gray-600">G-Zee.com</a>
                    <a href="#" class="text-gray-600">Tracking</a>
                    <a href="#" class="text-gray-600">Create New Shipment</a>
                </div>
                <img src="/path-to-profile-icon.png" alt="Profile" class="h-8 w-8 rounded-full bg-gray-300">
            </header>

            @yield('content')
        </main>
    </div>

<script>
    function toggleMegaMenu() {
        const menu = document.getElementById('megamenu');
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
    }
</script>

</body>

</html>
