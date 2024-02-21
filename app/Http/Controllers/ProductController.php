<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'The Lord of the Rings',
                'description' => 'A classic fantasy adventure',
                'price' => 12.99,
            ],
            [
                'id' => 2,
                'name' => 'Pride and Prejudice',
                'description' => 'A timeless romance novel',
                'price' => 9.99,
            ],
            [
                'id' => 3,
                'name' => 'A Song of Ice and Fire',
                'description' => 'A Song of Ice and Fire takes place in a fictional world in which seasons last for years and end unpredictably',
                'price' => 69.99,
            ],
            [
                'id' => 4,
                'name' => 'The Great Gatsby',
                'description' => 'A story of Jay Gatsby, a self-made millionaire, and his pursuit of Daisy Buchanan, a wealthy young woman whom he loved in his youth',
                'price' => 9.99,
            ],
        ];

        return view('welcome', compact('products'));
    }
}