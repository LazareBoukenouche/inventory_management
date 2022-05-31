@include('layouts.app')
<main>
    <h2>Edit Supplier</h2>
    <form class="edit-supplier-form" method="POST" action="/suppliers/edit/{{$supplier->id}}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" :value="__('Name')">Name</label>

            <input id="name" class="block mt-1 w-full" type="string" name="name" required autofocus value="{{ $supplier->name }}"/>
        </div>

        <!-- Adress -->
        <div>
            <label for="adress" :value="__('Adress')">Adress</label>

            <input id="adress" class="block mt-1 w-full" type="string" name="adress" required autofocus value="{{ $supplier->adress }}"/>
        </div>

        <!-- Zipcode -->
        <div>
            <label for="zipcode" :value="__('zipcode')">Zipcode</label>

            <input id="zipcode" class="block mt-1 w-full" type="string" name="zipcode" required autofocus value="{{ $supplier->zipcode }}"/>
        </div>


        <!-- City -->
        <div>
            <label for="city" :value="__('City')">City</label>

            <input id="city" class="block mt-1 w-full" type="string" name="city" required autofocus value="{{ $supplier->city }}" />
        </div>

        <!-- Country -->
        <div>
            <label for="country" :value="__('Country')">Country</label>

            <input id="country" class="block mt-1 w-full"
                        type="string" name="country" required value="{{ $supplier->country }}"/>
        </div>

        <!-- Email -->
        <div>
            <label for="email" :value="__('Email')">Email</label>

            <input id="email" class="block mt-1 w-full" type="email" name="email" required autofocus value="{{ $supplier->email }}"/>
        </div>

        <!-- Phone Number -->
        <div>
            <label for="phone_number" :value="__('Phone Number')">Phone Number</label>

            <input id="phone_number" class="block mt-1 w-full" type="string" name="phone_number" required autofocus value="{{ $supplier->phone_number }}" />
        </div>
        <div class="buttons">
            <a href="/suppliers/view/{{ $supplier->id}}">Close</a>
            <button type="submit" name="submit">Save</button>
        </div>
        

    </form>
  
</main>



