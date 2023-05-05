@if (isset($product->id))
    <form action="{{ route('product.update', $product->id) }}" method="post">
        @csrf
        @method('PUT')
@else
    <form action="{{ route('product.store') }}" method="post">
        @csrf
@endif

<input type="text" placeholder="Product Name" value="{{ $product->name ?? old('name') }}" name="name"
    class="black-border"> {{ $errors->first('name') }}
<input type="text" placeholder="Description" value="{{ $product->description ?? old('description') }}"
    name="description" class="black-border"> {{ $errors->first('description') }}
<input type="text" placeholder="Stock" value="{{ $product->stock ?? old('stock') }}" name="stock"
    class="black-border"> {{ $errors->first('stock') }}
<select name="measurement_unit_id" class="black-border">
    <option value="">Select Type</option>
    @foreach ($units as $unit)
        <option value="{{ $unit['id'] }}" {{ old('measurement_unit_id') == $unit['id'] ? 'selected' : '' }}>
            {{ $unit['unit_name'] }}
        </option>
    @endforeach
</select>
{{ $errors->first('measurement_unit_id') }}
<button type="submit" class="black-border">Save</button>
</form>
