@extends('web.layouts.default')

@section('title', $styles['title'])

@section('body')

    <main class="page-content">
        <div class="page-title">
            <h1>Get in touch</h1>
        </div>

        <div class="page-info form-area">
            <div class="main-contact">
                @component('web.layouts._components.contact_form', [
                    'class_board' => $styles['class_board'],
                    'class_text_area' => $styles['class_text_area'],
                    'options' => $options,
                ])
                @endcomponent
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


            </div>
        </div>
    </main>

    @include('web.layouts._partials.footer')

@endsection
