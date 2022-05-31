@include('layouts.app')
<main>
    <h2>Add Product</h2>
    <form class="add-product-form" method="POST" action="/products/add">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" :value="__('Name')">Name</label>

            <input id="name" class="block mt-1 w-full" type="string" name="name" required autofocus />
        </div>

        <!-- Supplier -->
        <div>
            <label for="supplier_id" :value="__('Supplier')">Supplier</label>

            <input id="supplier_id" class="block mt-1 w-full" type="number" name="supplier_id" required autofocus />
        </div>

        <!-- price -->
        <div>
            <label for="price" :value="__('Prix')">Prix</label>

            <input id="prix" class="block mt-1 w-full" type="number" name="price" required autofocus />
        </div>

        <div class="buttons">
            <a href="{{ url('/products') }}">Close</a>
            <button type="submit" name="submit">Save</button>
        </div>
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
  
</main>



