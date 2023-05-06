@if (isset($product_detail->id))
    <form action="{{ route('product.update', $product_detail->id) }}" method="post">
        @csrf
        @method('PUT')
@else
    <form action="{{ route('product-detail.store') }}" method="post">
        @csrf
@endif

<input type="text" placeholder="Product Id" value="{{ $product_detail->product_id ?? old('product_id') }}" name="product_id"
    class="black-border"> {{ $errors->first('product_id') }}
<input type="text" placeholder="Weight" value="{{ $product_detail->weight ?? old('weight') }}" name="weight"
    class="black-border"> {{ $errors->first('weight') }}
<input type="text" placeholder="Height" value="{{ $product_detail->height ?? old('height') }}" name="height"
    class="black-border"> {{ $errors->first('height') }}
<input type="text" placeholder="Width" value="{{ $product_detail->width ?? old('width') }}" name="width"
    class="black-border"> {{ $errors->first('width') }}
<input type="text" placeholder="Depth" value="{{ $product_detail->depth ?? old('depth') }}" name="depth"
    class="black-border"> {{ $errors->first('depth') }}

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
