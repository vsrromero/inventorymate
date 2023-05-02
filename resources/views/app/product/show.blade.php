@extends('app._layouts.default')

@section('body')
    <main class="page-content">
        <div class="page-title">
            <h1>{{ $product->name }}</h1>
        </div>

        @include('app._layouts._partials.crudmenu')

        <div class="page-info">
            <div>
                <table class="two-columns">
                    <tr>
                        <td>ID:</td>
                        <td> {{ $product->id }} </td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td> {{ $product->name }} </td>
                    </tr>
                    <tr>
                        <td>Description:</td>
                        <td> {{ $product->description }} </td>
                    </tr>
                    <tr>
                        <td>Stock:</td>
                        <td> {{ $product->stock }} </td>
                    </tr>
                    <tr>
                        <td>Unit:</td>
                        <td> {{ $product->measurement_unit_id }} </td>
                    </tr>
                </table>

                <a href="{{ url()->previous() }}" class="btn btn-default">
                    <i class="fa-solid fa-chevron-left"></i>
                    Back
                </a>
            </div>
        </div>
    </main>
@endsection
