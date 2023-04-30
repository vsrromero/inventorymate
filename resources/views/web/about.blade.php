@extends('web._layouts.default')

@section('title', $title)

@section('body')

    <main class="page-content">
        <div class="page-title">
            <h1>Inventory Mate, your business mate.</h1>
        </div>

        <div class="page-info about-info">
            <p>Inventory Mate is a leading technology company that offers innovative solutions for inventory management, customer and supplier management, and secure cloud storage. Our mission is to provide our clients with the peace of mind that their data is safe and accessible from anywhere in the world.</p>
            <p>At Inventory Mate, we understand the importance of managing your business data effectively. That's why we offer a suite of user-friendly software tools that can help you streamline your inventory, customer and supplier management, and data storage. With our cloud-based solutions, you can securely store, access, and manage your data from anywhere, at any time.</p>
            <p>Our team of experts is dedicated to delivering high-quality products and exceptional customer service. We work closely with our clients to understand their unique needs and provide tailored solutions that help them achieve their goals. Whether you're a small business owner or a large enterprise, Inventory Mate has the tools and expertise you need to take your business to the next level.</p>
            <p>Contact us today to learn more about our products and services, and discover how Inventory Mate can help you manage your data more effectively.</p>
        </div>  
    </main>

    @include('web._layouts._partials.footer')
@endsection