@extends('layouts.app')

@section('title', 'Update Booking')

@section('content')
    <!-- Search and Filter Section -->
    <div class="flex-1 p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Booking</h1>
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


        <!-- Booking Table -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left">
                            <input type="checkbox">
                        </th>
                        <th class="px-4 py-3 text-left">No</th>
                        <th class="px-4 py-3 text-left">ID Shipment</th>
                        <th class="px-4 py-3 text-left">Date Booking</th>
                        <th class="px-4 py-3 text-left">Status</th>
                        <th class="px-4 py-3 text-left">Type</th>
                        <th class="px-4 py-3 text-left">Destination</th>
                        <th class="px-4 py-3 text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Example Row Data -->
                    @foreach(range(1, 10) as $i)
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2">
                            <input type="checkbox">
                        </td>
                        <td class="px-4 py-2">{{ $i }}</td>
                        <td class="px-4 py-2">EXSEA{{ str_pad($i * 12345, 8, '0', STR_PAD_LEFT) }}</td>
                        <td class="px-4 py-2">{{ date('d/m/Y', strtotime("+{$i} days", strtotime('2024-08-20'))) }}</td>
                        <td class="px-4 py-2">
                            <span class="px-2 inline-flex text-xs font-semibold rounded-full {{ $i % 2 == 0 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $i % 2 == 0 ? 'Delivered' : 'Pending' }}
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <span class="px-2 inline-flex text-xs font-semibold rounded-full {{ $i % 3 == 0 ? 'bg-purple-100 text-purple-800' : 'bg-teal-100 text-teal-800' }}">
                                {{ $i % 3 == 0 ? 'FCL Export' : 'LCL Import' }}
                            </span>
                        </td>
                        <td class="px-4 py-2">City {{ $i }}, Country</td>
                        <td class="px-4 py-2">
                            <button class="px-4 py-2 bg-blue-600 text-white rounded">Input</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
