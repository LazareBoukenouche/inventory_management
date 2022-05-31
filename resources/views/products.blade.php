@include('layouts.app')
<div class="main_product_page_container">
    <a id="add_product_button" href="/products/add">Add Product</a>
    <form action="/products/list/" class="search_products">
        @csrf

        <label for="products" :value="__('Enter product name or ID')">Enter product name or ID</label>
        
        <input type="text" id="products" name="products" required autofocus>

        <button type="submit">Chercher</button>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

</div>