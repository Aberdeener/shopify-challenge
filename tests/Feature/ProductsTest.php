<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductsTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_user_can_view_all_products()
    {
        $this->seed();

        $response = $this->get(route('products.index'));

        Product::all()->pluck('name')->each(function ($name) use ($response) {
            $response->assertSee($name);
        });
    }
}
