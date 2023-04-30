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
                    @csrf
                    <input type="text" placeholder="Name" value="{{ old('name') }}" name="name" class="black-border"> {{ $errors->first('name') }}
                    <input type="text" placeholder="Phone" value="{{ old('phone') }}" name="phone" class="black-border"> {{ $errors->first('phone') }}
                    <input type="text" placeholder="Email" value="{{ old('email') }}" name="email" class="black-border"> {{ $errors->first('email') }}
                    <input type="text" placeholder="Website" value="{{ old('site') }}" name="site" class="black-border">
                    <input type="text" placeholder="Address" value="{{ old('address') }}" name="address" class="black-border"> {{ $errors->first('address') }}
                    <input type="text" placeholder="Postcode" value="{{ old('postcode') }}" name="postcode" class="black-border"> {{ $errors->first('postcode') }}
                    <input type="text" placeholder="City" value="{{ old('city') }}" name="city" class="black-border"> {{ $errors->first('city') }}
                    <input type="text" placeholder="County" value="{{ old('county') }}" name="county" class="black-border"> {{ $errors->first('county') }}
                    <input type="text" placeholder="Contact Name" value="{{ old('contact_name') }}" name="contact_name" class="black-border"> 
                    <button type="submit" class="black-border">Save</button>
                </form>
            </div>
        </div>

    </main>

@endsection
