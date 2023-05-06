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
                    <tr>
                        <td>Weight:</td>
                        <td> {{ $product->productDetail ? $product->productDetail->weight . 'Kg' : '' }}</td>
                    </tr>
                    <tr>
                        <td>Height:</td>
                        <td> {{ $product->productDetail ? $product->productDetail->height . 'cm' : '' }}</td>
                    </tr>
                    <tr>
                        <td>Width:</td>
                        <td> {{ $product->productDetail ? $product->productDetail->width . 'cm' : '' }}</td>
                    </tr>
                    <tr>
                        <td>Depth:</td>
                        <td> {{ $product->productDetail ? $product->productDetail->depth . 'cm' : '' }}</td>
                    </tr>
                    





                </table>
                <div class="space">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                    <a href="{{ url()->previous() }}" class="btn btn-light-blue">
                        <i class="fa-solid fa-chevron-left"></i>
                        Back
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection
