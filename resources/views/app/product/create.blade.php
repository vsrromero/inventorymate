@extends('app._layouts.default')

@section('body')

<main class="page-content">
        <div class="page-title">
            <h1>Add Product</h1>
        </div>

        @include('app._layouts._partials.crudmenu')

        <div class="page-info">
            <div class="form-search">
                <form action="" method="post">
                    @csrf
                    <input type="text" placeholder="Product Name" value="{{ $product->name ?? old('name') }}" name="name" class="black-border"> 
                    <input type="text" placeholder="Description" value="{{ $product->description ?? old('description') }}" name="description" class="black-border"> 
                    <input type="text" placeholder="Stock" value="{{ $product->stock ?? old('stock') }}" name="stock" class="black-border"> 
                    <select name="supplier_id" class="black-border">
                        <option value="">Select Type</option>
                        @foreach ($units as $unit)
                        <option value="{{ $unit['unit_symbol'] }}" {{ old('subject') == $unit['unit_symbol'] ? 'selected' : '' }}>{{ $unit['unit_name'] }}</option>
                        @endforeach
                    </select>
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