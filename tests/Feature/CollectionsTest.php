<?php

namespace Tests\Feature;

use App\Models\Collection;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CollectionsTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_view_all_collections()
    {
        $this->seed();

        $response = $this->get(route('collections.index'));

        Collection::each(function (Collection $collection) use ($response) {
            $response->assertSee([
                $collection->name,
                $collection->product_count(),
            ]);
        });
    }

    public function test_can_view_a_specific_collection()
    {
        $this->seed();

        $collection = Collection::first();

        $response = $this->get(route('collections.show', $collection));

        $response->assertSee([
            $collection->name,
            $collection->product_count(),
        ]);
    }

    public function test_can_create_a_new_collection()
    {
        $this->seed();

        $collection = Collection::factory()->make();

        $response = $this->post(route('collections.store'), $collection->toArray());

        $this->assertDatabaseHas('collections', $collection->toArray());
        $response->assertSessionHas('success', 'Collection created successfully');
    }

    public function test_can_update_an_existing_product()
    {
        $this->seed();

        $collection = Collection::all()->random();

        $collection->name = 'updated name';

        $response = $this->put(route('collections.update', $collection), $collection->toArray());

        $this->assertDatabaseHas('collections', $collection->toArray());
        $response->assertSessionHas('success', 'Collection updated successfully');
    }

    public function test_cannot_delete_a_collection_with_products()
    {
        $this->seed();

        $collection = Collection::all()->filter(function (Collection $collection) {
            return $collection->product_count() > 0;
        })->random();

        $response = $this->delete(route('collections.destroy', $collection));

        $response->assertStatus(403);
        $this->assertModelExists($collection);
    }

    public function test_can_delete_a_collection()
    {
        $this->seed();

        $collection = Collection::factory()->create();

        $response = $this->delete(route('collections.destroy', $collection));

        $this->assertDeleted($collection);
        $response->assertSessionHas('success', 'Collection deleted successfully');
    }
}

