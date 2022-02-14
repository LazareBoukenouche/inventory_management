@include('layouts.app')

<main>
    <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf
        <!-- Last Name -->
        <div>
            <label for="last_name" :value="__('Name')">Name</label>

            <input id="last_name" class="block mt-1 w-full" type="string" name="last_name" required autofocus />
        </div>

        <!-- Password -->
        <div>
            <label for="password" :value="__('Password')" >Password</label>

            <input id="password" 
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
        </div>
       
        <div>

            <button>
                {{ __('Log in') }}
            </button>
        </div>
    </form>
</main>
    

        