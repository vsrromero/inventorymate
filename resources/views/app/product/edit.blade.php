@extends('app._layouts.default')

@section('body')
    <main class="page-content">
        <div class="page-title">
            <h1>Edit Product</h1>
        </div>

        @include('app._layouts._partials.crudmenu')

        <div class="page-info">
            <div class="form-search">

                @component('app.product._components.form_edit_create', [
                    'product' => $product,
                    'units' => $units
                ])
                @endcomponent

                <div class="space">
                    <a href="{{ url()->previous() }}" class="btn btn-light-blue">
                        <i class="fa-solid fa-chevron-left"></i>
                        Back
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection
