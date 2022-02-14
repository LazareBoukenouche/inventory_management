@include('layouts.app')
<main>
    <h2>Add User</h2>
    <form class="add-user-form" method="POST" action="/users/add">
        @csrf

        <!-- First Name -->
        <div>
            <label for="first_name" :value="__('First Name')">First Name</label>

            <input id="first_name" class="block mt-1 w-full" type="string" name="first_name" required autofocus />
        </div>

        <!-- Last Name -->
        <div>
            <label for="last_name" :value="__('Last Name')">Last Name</label>

            <input id="last_name" class="block mt-1 w-full" type="string" name="last_name" required autofocus />
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" :value="__('Email')">Email</label>

            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </div>


        <!-- Role -->
        <div>
                <label for="role_id" :value="__('Role')">Role</label>


                <select name="role_id" id="role_id">
                    <option value="">--Select a role--</option>
                    <option value="0" >Admin</option>
                    <option value="1">Responsable</option>
                    <option value="3">Executant</option>
                </select>

            </div>
        </div>
        <!-- Password -->
        <div>
                <label for="password" :value="__('Password')">Password</label>

                <input id="password" class="block mt-1 w-full"
                        type="string" name="password" required />
            </div>
        </div>
       

        <div class="buttons">
            <a href="{{ url('/users') }}">Close</a>
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



