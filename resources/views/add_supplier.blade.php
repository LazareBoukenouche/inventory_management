@include('layouts.app')
<main>
    <h2>Add Supplier</h2>

    <form class="add-supplier-form" method="POST" action="/suppliers/add">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" :value="__('Name')">Name</label>

            <input id="name" class="block mt-1 w-full" type="string" name="name" required autofocus />
        </div>

        <!-- Adress -->
        <div>
            <label for="adress" :value="__('Adress')">Adress</label>

            <input id="adress" class="block mt-1 w-full" type="string" name="adress" required autofocus />
        </div>

        <!-- Zipcode -->
        <div>
            <label for="zipcode" :value="__('zipcode')">Zipcode</label>

            <input id="zipcode" class="block mt-1 w-full" type="string" name="zipcode" required autofocus />
        </div>


        <!-- City -->
        <div>
            <label for="city" :value="__('City')">City</label>

            <input id="city" class="block mt-1 w-full" type="string" name="city" required autofocus />
        </div>

        <!-- Country -->
        <div>
            <label for="country" :value="__('Country')">Country</label>

            <input id="country" class="block mt-1 w-full"
                        type="string" name="country" required />
        </div>

        <!-- Email -->
        <div>
            <label for="email" :value="__('Email')">Email</label>

            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </div>
       
        <!-- Phone Number -->
        <div>
            <label for="phone_number" :value="__('Phone Number')">Phone Number</label>

            <input id="phone_number" class="block mt-1 w-full" type="string" name="phone_number" required autofocus />
        </div>

        <div class="buttons">
            <a href="{{ url('/suppliers') }}">Close</a>
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



