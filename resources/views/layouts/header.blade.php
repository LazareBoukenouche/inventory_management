<header>
        
        @auth
        <a href="/">Back</a>
        <h1>Inventory Management</h1>
        <a href="/users/view/{{ Auth::user()->id }}">{{ Auth::user()->first_name }}</a>
        <a href="{{ route('logout') }}">Log out</a>
        @endauth
        @guest
        
        <h1>Inventory Management</h1>
        @endguest
        
        
</header>