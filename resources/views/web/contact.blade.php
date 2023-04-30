@extends('web._layouts.default')

@section('title', $title)

@section('body')

    <main class="page-content">
        <div class="page-title">
            <h1>Get in touch</h1>
        </div>

        <div class="page-info form-area">
            <div class="main-contact">
                @component('web._layouts._components.contact_form', [
                    'class_border' => $styles['class_border'],
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

    @include('web._layouts._partials.footer')

@endsection
