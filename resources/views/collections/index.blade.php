@extends('layout', ['page' => 'View all Collections'])
@section('content')
    <h2 class="title has-text-weight-bold">Collections</h2>
    <div class="box">
        <table class="table is-fullwidth is-striped is-hoverable">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Product Count</th>
                <th>Updated At</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($collections as $collection)
                <tr>
                    <th>{{ $collection->id }}</th>
                    <td>{{ $collection->name }}</td>
                    <td>{{ $collection->product_count() }}</td>
                    <td>{{ $collection->updated_at->format('M jS Y h:ia') }}</td>
                    <td class="has-text-right">
                        <a class="button is-secondary" href="{{ route('collections.edit', $collection) }}" title="Edit">
                            <span class="icon is-small">
                              <i class="fas fa-pencil"></i>
                            </span>
                        </a>

                        <button class="button is-danger" title="Delete">
                            <span class="icon is-small">
                              <i class="fas fa-trash"></i>
                            </span>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
