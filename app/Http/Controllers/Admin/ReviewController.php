<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Product;
use App\Models\User;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with('user', 'product')->get();
        return view('admin.reviews.index', compact('reviews'));
    }


}
