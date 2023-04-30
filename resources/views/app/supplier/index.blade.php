@extends('app._layouts.default')

@section('title', $title)

@section('body')

<main class="page-content">
        <div class="page-title">
            <h1>Suppliers</h1>
        </div>

        @include('app._layouts._partials.crudmenu')

        <div class="page-info">
            <div class="form-search">
                <form action="{{ route('app.supplier.list')}}" method="get">
                    <input type="text" placeholder="Supplier Name" name="name" class="black-border">
                    <input type="text" placeholder="Supplier Email" name="email" class="black-border">
                    <input type="text" placeholder="Supplier Address" name="address" class="black-border">
                    <button type="submit" class="black-border">Search</button>
                </form>
            </div>
        </div>

    </main>

@endsection
