@extends('app._layouts.default')

@section('body')

<main class="page-content">
        <div class="page-title">
            <h1>Add Supplier</h1>
        </div>

        @include('app._layouts._partials.crudmenu')

        <div class="page-info">
            <div class="form-search">
                <form action="{{ route('app.supplier.new')}}" method="post">
                    <input type="hidden" name="id" value="{{ $supplier->id ?? '' }}">
                    @csrf
                    <input type="text" placeholder="Name" value="{{ $supplier->name ?? old('name') }}" name="name" class="black-border"> {{ $errors->first('name') }}
                    <input type="text" placeholder="Phone" value="{{ $supplier->phone ?? old('phone') }}" name="phone" class="black-border"> {{ $errors->first('phone') }}
                    <input type="text" placeholder="Email" value="{{ $supplier->email ?? old('email') }}" name="email" class="black-border"> {{ $errors->first('email') }}
                    <input type="text" placeholder="Website" value="{{ $supplier->site ?? old('site') }}" name="site" class="black-border">
                    <input type="text" placeholder="Address" value="{{ $supplier->address ?? old('address') }}" name="address" class="black-border"> {{ $errors->first('address') }}
                    <input type="text" placeholder="Postcode" value="{{ $supplier->postcode ?? old('postcode') }}" name="postcode" class="black-border"> {{ $errors->first('postcode') }}
                    <input type="text" placeholder="City" value="{{ $supplier->city ?? old('city') }}" name="city" class="black-border"> {{ $errors->first('city') }}
                    <input type="text" placeholder="County" value="{{ $supplier->county ?? old('county') }}" name="county" class="black-border"> {{ $errors->first('county') }}
                    <input type="text" placeholder="Contact Name" value="{{ $supplier->contact_name ?? old('contact_name') }}" name="contact_name" class="black-border"> 
                    <button type="submit" class="black-border">Save</button>
                </form>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    </main>

@endsection
