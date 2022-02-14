

@include('layouts.app')
        <div id="users_tables_container">
            <a id="add_user_button" href="/users/add">Add User</a>
            <table>
                <tr>
                    <th>User Name</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                    <td><a href="/users/view/{{ $user->id }}">{{ $user->first_name }}</a></td>
                </tr>
                @endforeach
            </table>

            
        </div>
    
</body>
</html>