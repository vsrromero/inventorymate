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
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Stock</th>
                            <th>Unit ID</th>
                            <th>Details</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="td-left">{{ $product->name }}</td>
                                <td class="td-left">{{ $product->description }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->measurement_unit_id }}</td>
                                <td>
                                    <a href="{{ route('product.show', $product->id) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                <td>
                                    <a href="{{ route('product.edit', $product->id) }}">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form method="post" action="{{ route('product.destroy',  $product->id) }}">
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
            <div>
                <span>Page: {{ $products->currentPage() }} of {{ $products->lastPage() }}</span>
                {{ $products->appends($request)->links('pagination::simple-bootstrap-4') }}
                
            </div>

        </div>

    </main>
@endsection
