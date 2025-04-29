<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
{
    $orders = auth()->user()->orders; 
    return view('frontend.profile.index', compact('orders'));
}



}
