<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function login()
    {
        // Mengembalikan tampilan Login
        return view ('login');
    }

    public function register()
    {
        //Mengembalikan tampilan Register
        return view ('register');
    }

    public function dashboard()
    {
        // Mengembalikan tampilan Dashboard
        return view ('dashboard');
    }

    public function fclBooking()
    {
        // Mengembalikan tampilan FCL Booking
        return view ('fcl_booking');
    }

    public function lclBooking()
    {
        // Mengembalikan tampilan LCL Booking
        return view ('lcl_booking');
    }

    public function update()
    {
        // Menghubungkan dengan tampilan Update
        return view ('update'); 
    }

    public function requestBooking()
    {
        // Menghubungkan dengan tampilan Request Booking
        return view ('request_booking'); 
    }

    public function canceledBooking()
    {
        // Menghubungkan dengan tampilan Canceled Booking
        return view ('canceled_booking'); 
    }

    public function invoice()
    {
        // Menghubungkan dengan tampilan Invoice
        return view('invoice');
    }
}
