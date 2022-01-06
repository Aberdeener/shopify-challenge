<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollectionRequest;
use App\Models\Collection;

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
    public function store(CollectionRequest $request)
    {
        Collection::create($request->all());

        session()->flash('success', 'Collection created successfully');

        return redirect()->route('collections.index');
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
    public function update(CollectionRequest $request, Collection $collection)
    {
        $collection->update($request->all());

        session()->flash('success', 'Collection updated successfully');

        return redirect()->route('collections.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        $collection->delete();

        session()->flash('success', 'Collection deleted successfully');

        return redirect()->route('collections.index');
    }
}
