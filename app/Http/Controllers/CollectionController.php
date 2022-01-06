<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('collections.index', [
            'collections' => Collection::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('collections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Collection::create($request->all());

        session()->put('success', 'Collection created successfully');

        return view('collections.index', [
            'collections' => Collection::all(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        return view('collections.show', [
            'collection' => $collection,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collection $collection)
    {
        return view('collections.edit', [
            'collection' => $collection,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Collection $collection)
    {
        $collection->update($request->all());

        session()->put('success', 'Collection updated successfully');

        return view('collections.index', [
            'collections' => Collection::all(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        $collection->delete();

        session()->put('success', 'Collection deleted successfully');

        return view('collections.index', [
            'collections' => Collection::all(),
        ]);
    }
}
