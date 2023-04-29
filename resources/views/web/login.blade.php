@extends('web.layouts.default')

@section('title', $title)

@section('body')

    <main class="page-content">
        <div class="page-title">
            <h1>Sign In</h1>
        </div>

        <div class="page-info form-area">
            <div class="form-login">
                <form action={{ route('web.login') }} method="post">
                    @csrf
                    <input name="user" type="text" value="{{ old('user') }}" placeholder="User (Email)" class="black-border">
                    <input name="password" type="password" placeholder="Password" class="black-border">
                    <button type="submit" class="black-border">Sign In</button>
                </form>
            </div>
        </div>
    </div>

    @if ($errors->has('user'))
        <div class="alert alert-denied">
            {{ $errors->first('user') }}
        </div>
    @endif

    @if ($errors->has('password'))
        <div class="alert alert-denied">
            {{ $errors->first('password') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-denied">
            {{ session('error') }}
        </div>
    @endif

    @include('web.layouts._partials.footer')

@endsection
