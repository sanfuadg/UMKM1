<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Keripik Pisang Coklat Lumer',
                'flavor' => 'Coklat',
                'badge' => 'Best Seller',
                'image' => 'https://images.unsplash.com/photo-1528751014936-863e6e4a319c?auto=format&fit=crop&w=600&q=80',
                'description' => 'Keripik pisang renyah dibaluri cokelat lumer manis gurih yang tebal dan melimpah.',
                'pricePer100g' => 15000,
            ],
            [
                'id' => 2,
                'name' => 'Keripik Pisang Strawberry Lumer',
                'flavor' => 'Strawberry',
                'badge' => 'Favorit',
                'image' => 'https://images.unsplash.com/photo-1563805042-7684c019e1cb?auto=format&fit=crop&w=600&q=80',
                'description' => 'Sensasi rasa manis asam segar dari cokelat glaze stroberi berwarna pink yang manis.',
                'pricePer100g' => 15000,
            ],
            [
                'id' => 3,
                'name' => 'Keripik Pisang Matcha Lumer',
                'flavor' => 'Matcha',
                'badge' => 'Top Choice',
                'image' => 'https://images.unsplash.com/photo-1536256263959-770b48d82b0a?auto=format&fit=crop&w=600&q=80',
                'description' => 'Aroma hijau teh hijau khas Jepang berpadu dengan gurihnya keripik pisang pilihan.',
                'pricePer100g' => 16000,
            ],
            [
                'id' => 4,
                'name' => 'Keripik Pisang Tiramisu Lumer',
                'flavor' => 'Tiramisu',
                'badge' => 'New Flavor',
                'image' => 'https://images.unsplash.com/photo-1571115177098-24ec42ed204d?auto=format&fit=crop&w=600&q=80',
                'description' => 'Perpaduan rasa kopi, krim, dan keju tiramisu yang lezat dan bikin ketagihan.',
                'pricePer100g' => 16000,
            ],
        ];

        return view('welcome', compact('products'));
    }
}