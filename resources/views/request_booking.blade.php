@extends('layouts.app')

@section('title', 'Request Booking')

@section('content')
    
        <!-- Search and Filter Section -->
        <div class="flex-1 p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold">Request Booking</h1>
            </div>
    
            <div class="flex justify-between items-center mb-4">
                <div class="flex space-x-2">
                    <input type="text" class="w-72 px-4 py-2 border rounded-l outline-none" placeholder="Search">
                    <button class="px-4 py-2 bg-gray-200 border rounded-r">Search</button>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="px-4 py-2 bg-blue-600 text-white rounded">All</button>
                    <button class="px-4 py-2 bg-purple-200 text-purple-600 rounded">FCL Export</button>
                    <button class="px-4 py-2 bg-teal-200 text-teal-600 rounded">FCL Import</button>
                    <button class="px-4 py-2 bg-green-200 text-green-600 rounded">LCL Export</button>
                    <button class="px-4 py-2 bg-yellow-200 text-yellow-600 rounded">LCL Local</button>
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
    </div>

    <!-- Tabel untuk data Request Booking -->
    <table class="w-full table-auto bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="p-4">No</th>
                <th class="p-4">ID Shipment</th>
                <th class="p-4">Date Booking</th>
                <th class="p-4">Status</th>
                <th class="p-4">Type</th>
                <th class="p-4">Destination</th>
                <th class="p-4">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-t">
                <td class="p-4">1</td>
                <td class="p-4">EXSEA123460</td>
                <td class="p-4">20/08/2024</td>
                <td class="p-4 text-yellow-500">Pending</td>
                <td class="p-4">Import FCL</td>
                <td class="p-4">Tokyo, Japan</td>
                <td class="p-4"><button class="text-blue-500">Input</button></td>
            </tr>
            <!-- Tambah baris lain sesuai data booking -->
        </tbody>
    </table>
@endsection
