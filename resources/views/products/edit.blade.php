@extends('layout', ['page' => 'Edit Product'])
@section('content')
    <h2 class="title has-text-weight-bold">Edit Product</h2>
    <h4 class="subtitle"><strong>Product:</strong> {{ $product->name }} <a href="{{ route('products.show', $product) }}">(View)</a></h4>
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
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label">Name<sup style="color: red">*</sup></label>
                <div class="control">
                    <input type="text" name="name" class="input" placeholder="Name" required value="{{ $product->name }}">
                </div>
            </div>

            <div class="field">
                <label class="label">Stock<sup style="color: red">*</sup></label>
                <div class="control">
                    <input type="number" name="stock" class="input" value="{{ $product->stock }}" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Collection<sup style="color: red">*</sup></label>
                <div class="control">
                    <div class="select">
                        <select name="collection_id" required>
                            @foreach($collections as $collection)
                                <option value="{{ $collection->id }}" @if($collection->id == $product->collection->id) selected @endif>
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
