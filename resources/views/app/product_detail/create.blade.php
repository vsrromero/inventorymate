@extends('app._layouts.default')

@section('body')
    <main class="page-content">
        <div class="page-title">
            <h1>Add Product Detail</h1>
        </div>

        <div class="page-info">
            <div class="form-search">

                @component('app.product_detail._components.form_edit_create', ['units' => $units])
                @endcomponent

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    </main>
@endsection