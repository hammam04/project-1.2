@extends('layouts.app')

@section('title', 'viewss')

@section('content')

    <!-- Search and Filter Section -->
    <div class="flex-1 p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Invoice</h1>
        </div>

        <div class="flex justify-between items-center mb-4">
            <div class="flex space-x-2">
                <input type="text" class="w-72 px-4 py-2 border rounded-l outline-none" placeholder="Search">
                <button class="px-4 py-2 bg-gray-200 border rounded-r">Search</button>
            </div>
            <div class="flex items-center space-x-2">
                <button class="px-4 py-2 bg-blue-600 text-white rounded" onclick="loadContent('all')">All</button>
                <button class="px-4 py-2 bg-purple-200 text-purple-600 rounded" onclick="loadContent('fcl-export')">FCL Export</button>
                <button class="px-4 py-2 bg-teal-200 text-teal-600 rounded" onclick="loadContent('fcl-import')">FCL Import</button>
                <button class="px-4 py-2 bg-green-200 text-green-600 rounded" onclick="loadContent('lcl-export')">LCL Export</button>
                <button class="px-4 py-2 bg-yellow-200 text-yellow-600 rounded" onclick="loadContent('lcl-local')">LCL Local</button>
            </div>
        </div>

        <!-- Table Header with Export and Show Order -->
        <div class="flex justify-between items-center mb-4">
            <div class="flex items-center space-x-8">
                <span class="flex items-center text-gray-500">
                    Show last order
                    <i class="fas fa-chevron-down ml-1"></i>
                </span>
                <span class="flex items-center text-gray-500">
                    Export
                    <i class="fas fa-chevron-down ml-1"></i>
                </span>
            </div>
            <div class="flex gap-4">
                <!-- Grid View Icon -->
                <a href="box" class="icon-link text-gray-600 hover:text-gray-800" data-type="box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">
                        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
                    </svg>
                </a>
                <!-- List View Icon -->
                <a href="list" class="icon-link text-gray-600 hover:text-gray-800" data-type="list">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Tempat Konten Akan Ditampilkan -->
        <main id="contentArea">
            <!-- Konten akan dimuat disini -->
        </main>

    </div>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Fungsi untuk memuat konten berdasarkan tipe
        function loadContent(type) {
            let contentArea = document.getElementById('contentArea');

            fetch(`/load-content/${type}`)
                .then(response => response.text())
                .then(data => {
                    contentArea.innerHTML = data;
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        // Menambahkan event listener ke ikon yang memiliki class 'icon-link'
        document.querySelectorAll('.icon-link').forEach(icon => {
            icon.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah aksi default jika ada (misal, navigasi)
                const type = this.getAttribute('data-type'); // Ambil tipe dari atribut
                loadContent(type); // Panggil fungsi untuk memuat konten
            });
        });
    });
</script>
@endsection
