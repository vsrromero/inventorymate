@extends('app._layouts.default')

@section('body')
    <main class="page-content">
        <div class="page-title">
            <h1>Products List</h1>
        </div>

        @include('app._layouts._partials.crudmenu')

        <div class="page-info">
            <div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="half-width">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Weight</th>
                            <th>Height</th>
                            <th>Width</th>
                            <th>Depth</th>
                            <th>Unit ID</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product_detail as $detail)
                            <tr>
                                <td>{{ $detail->product_id }}</td>
                                <td>{{ $detail->weight }}</td>
                                <td>{{ $detail->height }}</td>
                                <td>{{ $detail->width }}</td>
                                <td>{{ $detail->depth }}</td>
                                <td>{{ $detail->measurement_unit_id }}</td>
                                <td>
                                    <a href="{{ route('product-detail.show', $detail->id) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                <td>
                                    <a href="{{ route('product-detail.edit', $detail->id) }}">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form method="post" action="{{ route('product-detail.destroy',  $detail->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-link-custom">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </td>


                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>

    </main>
@endsection
