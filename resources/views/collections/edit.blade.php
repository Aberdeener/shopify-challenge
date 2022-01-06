@extends('layout', ['page' => 'Create Collection'])
@section('content')
    <h2 class="title has-text-weight-bold">Create Collection</h2>
    <h4 class="subtitle"><strong>Collection:</strong> {{ $collection->name }} <a href="{{ route('collections.show', $collection) }}">(View)</a></h4>
    <div class="box">
        <form action="{{ route('collections.update', $collection)  }}" method="POST">
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label">Name<sup style="color: red">*</sup></label>
                <div class="control">
                    <input type="text" name="name" class="input" placeholder="Name" value="{{ $collection->name }}" required>
                </div>
            </div>

            <div class="control">
                <button class="button is-success" type="submit">
                <span class="icon is-small">
                    <i class="fas fa-check"></i>
                </span>
                    <span>Submit</span>
                </button>
            </div>
        </form>
    </div>
@endsection
