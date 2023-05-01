@extends('app._layouts.default')

@section('title', $title)

@section('body')

<main class="page-content">
        <div class="page-title">
            <h1>Products Search</h1>
        </div>

        @include('app._layouts._partials.crudmenu')

        <div class="page-info">
            <div class="form-search">
                <form action="{{ route('product.index')}}" method="get">
                    <input type="text" placeholder="Product Name" name="name" class="black-border">
                    <input type="text" placeholder="Product Description" name="description" class="black-border">
                    <button type="submit" class="black-border">Search</button>
                </form>
            </div>
        </div>

    </main>

@endsection