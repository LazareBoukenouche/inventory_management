@include('layouts.app')
<main>
    <h2>Edit User</h2>
    <form class="edit-user-form" method="POST" action="/users/edit/{{ $user->id}}/edit_password">
        @csrf

        <!-- Old Password -->
        <div>
            <label for="old_password" :value="__('Old Password')">Old Password</label>

            <input id="old_password" class="block mt-1 w-full" type="string" name="old_password" required autofocus />
        </div>


        <!-- New Password -->
        <div>
            <label for="new_password" :value="__('New Password')">New Password</label>

            <input id="new_password" class="block mt-1 w-full" type="string" name="new_password" required autofocus />
        </div>

        <!-- Confirm New Password -->
        <div>
            <label for="confirm_password" :value="__('Confirm New Password')">Confirm New Password</label>

            <input id="confirm_password" class="block mt-1 w-full" type="string" name="confirm_password" required autofocus />
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



