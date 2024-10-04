@extends('layouts.app')

@section('title', 'dashboard')

@section('content')
    <div class="container mx-auto py-6">
        <!-- Bagian Statistik Booking -->
        <div class="grid grid-cols-3 gap-6 mb-6">
            <!-- All Booking Card -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-blue-200 rounded-full flex justify-center items-center">
                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.39 8.56c-.86-.98-2.02-1.71-3.32-1.95l-.61-.12-.36-.5C14.68 4.92 13.02 4 11 4s-3.68.92-5.1 2.49l-.36.5-.61.12c-1.31.24-2.47.97-3.32 1.95C.61 10.42.25 12.4.25 14.29c0 1.88.36 3.87 1.36 5.38C2.93 21.81 4.92 23 7.08 23h9.84c2.16 0 4.15-1.19 5.47-3.33 1-1.51 1.36-3.5 1.36-5.38 0-1.88-.36-3.87-1.36-5.38z"/></svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-lg font-semibold">All Booking</p>
                        <p class="text-3xl font-bold">220</p>
                        <p class="text-sm text-green-600 mt-1">+3.46% since last month</p>
                    </div>
                </div>
            </div>
            <!-- Request Booking Card -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-blue-200 rounded-full flex justify-center items-center">
                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.39 8.56c-.86-.98-2.02-1.71-3.32-1.95l-.61-.12-.36-.5C14.68 4.92 13.02 4 11 4s-3.68.92-5.1 2.49l-.36.5-.61.12c-1.31.24-2.47.97-3.32 1.95C.61 10.42.25 12.4.25 14.29c0 1.88.36 3.87 1.36 5.38C2.93 21.81 4.92 23 7.08 23h9.84c2.16 0 4.15-1.19 5.47-3.33 1-1.51 1.36-3.5 1.36-5.38 0-1.88-.36-3.87-1.36-5.38z"/></svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-lg font-semibold">Request Booking</p>
                        <p class="text-3xl font-bold">80</p>
                        <p class="text-sm text-green-600 mt-1">+3.46% since last month</p>
                    </div>
                </div>
            </div>
            <!-- Canceled Booking Card -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-red-200 rounded-full flex justify-center items-center">
                        <svg class="w-6 h-6 text-red-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.39 8.56c-.86-.98-2.02-1.71-3.32-1.95l-.61-.12-.36-.5C14.68 4.92 13.02 4 11 4s-3.68.92-5.1 2.49l-.36.5-.61.12c-1.31.24-2.47.97-3.32 1.95C.61 10.42.25 12.4.25 14.29c0 1.88.36 3.87 1.36 5.38C2.93 21.81 4.92 23 7.08 23h9.84c2.16 0 4.15-1.19 5.47-3.33 1-1.51 1.36-3.5 1.36-5.38 0-1.88-.36-3.87-1.36-5.38z"/></svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-lg font-semibold">Canceled Booking</p>
                        <p class="text-3xl font-bold">80</p>
                        <p class="text-sm text-red-600 mt-1">+3.46% since last month</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Grafik Total Revenue -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-lg font-semibold mb-4">Total Revenue</h2>
            <div class="flex justify-between items-center mb-4">
                <p class="text-4xl font-bold">€102.5M</p>
                <p class="text-gray-500">6 months</p>
            </div>
            <canvas id="revenueChart"></canvas>
        </div>
    </div>

    <script>
        // Inisialisasi chart.js untuk bagian grafik revenue
        const ctx = document.getElementById('revenueChart').getContext('2d');
        const revenueChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Total Booking',
                    data: [60, 55, 70, 45, 75, 50],
                    borderColor: 'rgba(54, 162, 235, 1)',
                    fill: false,
                }, {
                    label: 'Total Invoice',
                    data: [50, 65, 60, 55, 65, 60],
                    borderColor: 'rgba(255, 99, 132, 1)',
                    fill: false,
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                    }
                }
            }
        });
    </script>
@endsection
