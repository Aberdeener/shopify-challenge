@extends('layout', ['page' => 'Create Product'])
@section('content')
<h2 class="title has-text-weight-bold">Create Product</h2>
<style>
    select:required:invalid {
        color: gray;
    }

    option[value=""][disabled] {
        display: none;
    }

    option {
        color: black;
    }
</style>
<div class="box">
    <form action="{{ route('products.store')  }}" method="POST">
        @csrf
        <div class="field">
            <label class="label">Name<sup style="color: red">*</sup></label>
            <div class="control">
                <input type="text" name="name" class="input" placeholder="Name" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Stock<sup style="color: red">*</sup></label>
            <div class="control">
                <input type="number" name="stock" class="input" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Category<sup style="color: red">*</sup></label>
            <div class="control">
                <div class="select">
                    <select name="collection_id" required>
                        <option value="" disabled selected>Select Collection...</option>
                        @foreach($collections as $collection)
                            <option value="{{ $collection->id }}">
                                {{ $collection->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
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
