<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductsTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_view_all_products()
    {
        $this->seed();

        $response = $this->get(route('products.index'));

        Product::each(function (Product $product) use ($response) {
            $response->assertSee([
                $product->name,
                $product->collection->name,
            ]);
        });
    }

    public function test_can_view_a_specific_product()
    {
        $this->seed();

        $product = Product::first();

        $response = $this->get(route('products.show', $product));

        $response->assertSee([
            $product->name,
            $product->collection->name,
        ]);
    }

    public function test_can_create_a_new_product()
    {
        $this->seed();

        $product = Product::factory()->make();

        $response = $this->post(route('products.store'), $product->toArray());

        $this->assertDatabaseHas('products', $product->toArray());
        $response->assertSessionHas('success', 'Product created successfully');
    }

    public function test_can_update_an_existing_product()
    {
        $this->seed();

        $product = Product::all()->random();

        $product->name = 'updated name';

        $response = $this->put(route('products.update', $product), $product->toArray());

        $this->assertDatabaseHas('products', $product->toArray());
        $response->assertSessionHas('success', 'Product updated successfully');
    }

    public function test_can_delete_a_product()
    {
        $this->seed();

        $product = Product::all()->random();

        $response = $this->delete(route('products.destroy', $product));

        $this->assertDeleted($product);
        $response->assertSessionHas('success', 'Product deleted successfully');
    }
}
