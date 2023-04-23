@extends('web.layouts.default')

@section('title', $title)

@section('body')

    <main class="page-content">
        <div class="page-title">
            <h1>Get in touch</h1>
        </div>

        <div class="page-info form-area">
            <div class="main-contact">
                @component('web.layouts._components.contact_form', [
                    'class_board' => $class_board,
                    'class_text_area' => $class_text_area,
                ])
                @endcomponent

            </div>
        </div>  
    </main>

    @include('web.layouts._partials.footer')

@endsection