@extends('layouts.app')

@section('title', 'fcl-booking')

@section('content')
<div class="container mx-auto px-4">
    <!-- Page Title -->
    <div class="flex justify-between items-center py-6">
        <h1 class="text-2xl font-bold">FCL Booking</h1>
    </div>

    <!-- Filters Section -->
    
    <div class="flex flex-col space-y-4 mb-6">
        <!-- Search Bar and Filter Options -->
        <div class="flex space-x-4 items-center">
            <div class="relative flex-1">
                <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 shadow-sm">
                <i class="absolute left-3 top-2.5 text-gray-500 fas fa-search"></i>
            </div>
            <button class="bg-blue-100 text-blue-500 px-4 py-2 rounded-md hover:bg-blue-200">All</button>
            <button class="bg-blue-100 text-blue-500 px-4 py-2 rounded-md hover:bg-blue-200">FCL Export</button>
            <button class="bg-purple-100 text-purple-500 px-4 py-2 rounded-md hover:bg-purple-200">FCL Import</button>
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
    </div>

    <!-- Table -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full bg-white">
            <thead>
                <tr class="w-full bg-gray-200 text-left text-gray-600 font-medium">
                    <th class="py-3 px-4">No</th>
                    <th class="py-3 px-4">ID Shipment</th>
                    <th class="py-3 px-4">Date Booking</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4">Type</th>
                    <th class="py-3 px-4">Destination</th>
                    <th class="py-3 px-4">Edit</th>
                    <th class="py-3 px-4">Attach</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 10; $i++)
                <tr class="hover:bg-gray-100 transition duration-200">
                    <td class="py-3 px-4">{{ $i }}</td>
                    <td class="py-3 px-4">EXSEA12345{{ $i }}</td>
                    <td class="py-3 px-4">20/08/2024</td>
                    <td class="py-3 px-4">
                        <span class="bg-green-500 text-white px-3 py-1 rounded-full">Delivered</span>
                    </td>
                    <td class="py-3 px-4">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full">Export FCL</span>
                    </td>
                    <td class="py-3 px-4">Jakarta, Indonesia</td>
                    <td class="py-3 px-4">
                        <button class="text-blue-500 hover:underline flex items-center">
                            <i class="fas fa-edit mr-2"></i> Edit
                        </button>
                    </td>
                    <td class="py-3 px-4">
                        <button class="text-green-500 hover:underline flex items-center">
                            <i class="fas fa-paperclip mr-2"></i> Attach
                        </button>
                    </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection
