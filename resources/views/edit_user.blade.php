@include('layouts.app')
<main>
    <h2>Edit User</h2>
    <form class="edit-user-form" method="POST" action="/users/edit/{{ $user->id}}">
        @csrf

        <!-- First Name -->
        <div>
            <label for="first_name" :value="__('First Name')">First Name</label>

            <input id="first_name" class="block mt-1 w-full" type="string" name="first_name" required autofocus value="{{ $user->first_name }}" />
        </div>

        <!-- Last Name -->
        <div>
            <label for="last_name" :value="__('Last Name')">Last Name</label>

            <input id="last_name" class="block mt-1 w-full" type="string" name="last_name" required autofocus value="{{ $user->last_name }}" />
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" :value="__('Email')">Email</label>

            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus value="{{ $user->email }}" />
        </div>


        <!-- Role -->
        <div>
                <label for="role_id" :value="__('Role')">Role</label>

                <input 
                    id="role_id" class="block mt-1 w-full"
                    type="string" min="0" max="2"
                    name="role_id" required
                    value=" {{ $user->role_id }}" />
                
        </div>
        <!-- Role -->
        <div>
            <a href="/users/edit/{{ $user->id}}/edit_password">Edit Password</a>
        </div>

        <div class="buttons">
            <a href="/users/view/{{ $user->id}}">Close</a>
            <button type="submit" name="submit">Save</button>
        </div>
        

    </form>
  
</main>



