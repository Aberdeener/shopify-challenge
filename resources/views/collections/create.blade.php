@extends('layout', ['page' => 'Create Collection'])
@section('content')
    <h2 class="title has-text-weight-bold">Create Collection</h2>
    <div class="box">
        <form action="{{ route('collections.store')  }}" method="POST">
            @csrf
            <div class="field">
                <label class="label">Name<sup style="color: red">*</sup></label>
                <div class="control">
                    <input type="text" name="name" class="input" placeholder="Name" required value="{{ old('name') }}">
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
