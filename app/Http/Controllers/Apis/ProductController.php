<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): JsonResponse
    {
        $counter = 1;
        return new JsonResponse(
            [
                [
                    'id' => $counter,
                    'name' => 'Product name 0' . $counter++,
                    'category' => 'Accesories',
                    'pricing' => [
                        'amount' => 980,
                        'currency' => '€',
                        'discount' => 100,
                        'discount_type' => 'fixed'
                    ],
                    'image' => 'product0' . $counter . '.png'
                ],
                [
                    'id' => $counter,
                    'name' => 'Product name 0' . $counter++,
                    'category' => 'Laptops',
                    'pricing' => [
                        'amount' => 980,
                        'currency' => '€',
                        'discount' => 100,
                        'discount_type' => 'fixed'
                    ],
                    'image' => 'product0' . $counter . '.png'
                ],
                [
                    'id' => $counter,
                    'name' => 'Product name 0' . $counter++,
                    'category' => 'Laptop',
                    'pricing' => [
                        'amount' => 980,
                        'currency' => '€',
                        'discount' => 100,
                        'discount_type' => 'fixed'
                    ],
                    'image' => 'product0' . $counter . '.png'
                ],
                [
                    'id' => $counter,
                    'name' => 'Product name 0' . $counter++,
                    'category' => 'Accesories',
                    'pricing' => [
                        'amount' => 980,
                        'currency' => '€',
                        'discount' => 100,
                        'discount_type' => 'fixed'
                    ],
                    'image' => 'product0' . $counter . '.png'
                ],
                [
                    'id' => $counter,
                    'name' => 'Product name 0' . $counter++,
                    'category' => 'Laptop',
                    'pricing' => [
                        'amount' => 980,
                        'currency' => '€',
                        'discount' => 100,
                        'discount_type' => 'fixed'
                    ],
                    'image' => 'product0' . $counter . '.png'
                ],
                [
                    'id' => $counter,
                    'name' => 'Product name 0' . $counter++,
                    'category' => 'Smartphones',
                    'pricing' => [
                        'amount' => 980,
                        'currency' => '€',
                        'discount' => 100,
                        'discount_type' => 'fixed'
                    ],
                    'image' => 'product0' . $counter . '.png'
                ],
                [
                    'id' => $counter,
                    'name' => 'Product name 0' . $counter++,
                    'category' => 'Laptop',
                    'pricing' => [
                        'amount' => 980,
                        'currency' => '€',
                        'discount' => 100,
                        'discount_type' => 'fixed'
                    ],
                    'image' => 'product0' . $counter . '.png'
                ],
            ]
        );
    }
}