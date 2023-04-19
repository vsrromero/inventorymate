<h1>Index view for supplier</h1>

{{-- comentário do blade --}}

@for($i = 0; $i < 10; $i++)
    <p>Supplier: {{ $supplierNames[$i] }}  </p>
@endfor
<h2>DD Blade</h2>
@dd($supplierNames)
<h2>var_dump PHP</h2>
