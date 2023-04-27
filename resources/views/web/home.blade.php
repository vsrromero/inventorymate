@extends('web.layouts.default')

@section('title', $styles['title'])

@section('body')

    <main class="featured-content">
        <div class="left">
            <div class="information">
                <h1>Inventory Mate</h1>
                <p>Not only inventory! Not only goods.
                <p>
                <div class="call">
                    <img src="{{ asset('/img/check.png') }}">
                    <span class="white-text">Manage your suppliers, costumers and more.</span>
                </div>
                <div class="call">
                    <img src="{{ asset('/img/check.png') }}">
                    <span class="white-text">Your company everywhere</span>
                </div>
            </div>

            <div class="video">
                <img src="{{ asset('img/player_video.jpg') }}">
            </div>
        </div>

        <div class="right">
            <div class="contact">
                <h1>Contact</h1>
                <p>You have doubts, we have answers.</p>
                @component('web.layouts._components.contact_form', [
                    'class_board' => $styles['class_board'],
                    'class_text_area' => $styles['class_text_area'],
                    'options' => $options,
                ])
                @endcomponent
                    
            </div>
        </div>
    </main>
@endsection
