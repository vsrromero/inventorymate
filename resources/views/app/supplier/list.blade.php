@extends('app._layouts.default')

@section('body')
    <main class="page-content">
        <div class="page-title">
            <h1>Suppliers List</h1>
        </div>

        @include('app._layouts._partials.crudmenu')

        <div class="page-info">
            <div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Postcode</th>
                            <th>City</th>
                            <th>County</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Site</th>
                            <th>Contact Name</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td>{{ $supplier->name }}</td>
                                <td>{{ $supplier->address }}</td>
                                <td>{{ $supplier->postcode }}</td>
                                <td>{{ $supplier->city }}</td>
                                <td>{{ $supplier->county }}</td>
                                <td>{{ $supplier->phone }}</td>
                                <td>{{ $supplier->email }}</td>
                                <td>{{ $supplier->site }}</td>
                                <td>{{ $supplier->contact_name }}</td>
                                <td>
                                    <form method="POST" action="{{ route('app.supplier.update', $supplier->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit"
                                            style="background:none; border:none; padding:0; font-size:1.2em; color:#000030"><i
                                                class="fa-solid fa-edit"></i></button>
                                    </form>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('app.supplier.delete', $supplier->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            style="background:none; border:none; padding:0; font-size:1.2em; color:#000030"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <form action="{{ route('app.supplier') }}" method="GET">
                <button type="submit" class="black-border list">New search</button>
            </form>
        </div>

    </main>
@endsection
