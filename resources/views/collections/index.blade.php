@extends('layout', ['page' => 'View all Collections'])
@section('content')
<table class="table is-striped is-hoverable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($collections as $collection)
        <tr>
            <th>{{ $collection->id }}</th>
            <td>{{ $collection->name }}</td>
            <td>
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
@endsection
