<h1>Index view for supplier</h1>

{{-- comentário do blade --}}

@foreach($supplierNames as $supplier)
    <div>
        Supplier: {{ $supplier['name'] }}<br />  
        Email: {{ $supplier['email'] }}<br /> 
        Phone: {{ $supplier['phone'] }}<br /> 
    </div>
    <br />
@endforeach

