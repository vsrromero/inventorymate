@extends('app._layouts.default')

@section('body')

<main class="page-content">
        <div class="page-title">
            <h1>Add Product</h1>
        </div>

        @include('app._layouts._partials.crudmenu')

        <div class="page-info">
            <div class="form-search">
                <form action="{{ route('product.store') }}" method="post">
                    @csrf
                    <input type="text" placeholder="Product Name" value="{{ $product->name ?? old('name') }}" name="name" class="black-border">  {{ $errors->first('name') }}
                    <input type="text" placeholder="Description" value="{{ $product->description ?? old('description') }}" name="description" class="black-border"> {{ $errors->first('description') }} 
                    <input type="text" placeholder="Stock" value="{{ $product->stock ?? old('stock') }}" name="stock" class="black-border">  {{ $errors->first('stock') }}
                    <select name="measurement_unit_id" class="black-border"> 
                        <option value="">Select Type</option>
                        @foreach ($units as $unit)
                        <option value="{{ $unit['id'] }}" {{ old('measurement_unit_id') == $unit['id'] ? 'selected' : '' }}>{{ $unit['unit_name'] }}</option>
                        @endforeach
                    </select>
                    {{$errors->first('measurement_unit_id')}}
                    <button type="submit" class="black-border">Save</button>
                </form>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    </main>

@endsection