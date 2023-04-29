@extends('app.layouts.default')

@section('title', $title)

@section('body')

<main class="page-content">
        <div class="page-title">
            <h1>Suppliers</h1>
        </div>

        <div class="menu ul">
            <li><a href="">New</a></li>
            <li><a href="">Search</a></li>
        </div>


        <div class="page-info">
            <div class="form-search">
                <form action="" method="post">
                    <input type="text" placeholder="Supplier Name" name="name" class="black-border">
                    <input type="text" placeholder="Supplier Email" name="email" class="black-border">
                </form>
            </div>
        </div>

    </main>

@endsection
