@include('layouts.app')
<h2>View User Infos</h2>
<main class="view-user">
    <form class="view-user-infos">
        @csrf

        <!-- First Name -->
        <div>
            <label for="first_name" :value="__('First Name')">First Name</label>

            <input disabled id="first_name" class="block mt-1 w-full" type="string" name="first_name" required autofocus value="{{ $user->first_name }}"/>
        </div>

        <!-- Last Name -->
        <div>
            <label for="last_name" :value="__('Last Name')">Last Name</label>

            <input disabled id="last_name" class="block mt-1 w-full" type="string" name="last_name" required autofocus value="{{ $user->last_name }}" />
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" :value="__('Email')">Email</label>

            <input disabled id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus value="{{ $user->email }}" />
        </div>


        <!-- Role -->
        <div>
                <label for="role_id" :value="__('Role')">Role</label>
                @if ($user->role_id == 0)
                    <input disabled id="role_id" class="block mt-1 w-full"
                                    type="string" min="0" max="2"
                                    name="role_id" required
                                    value="Admin" />
                @elseif ($user->role_id == 1)
                    <input disabled id="role_id" class="block mt-1 w-full"
                                    type="string" min="0" max="2"
                                    name="role_id" required
                                    value="Responsable" />
                @else
                    <input disabled id="role_id" class="block mt-1 w-full"
                                    type="string" min="0" max="2"
                                    name="role_id" required
                                    value="Executant" />
                @endif
            </div>
        </div>

        <div class="buttons">
            <a href="{{ url('/users') }}">Close</a>
            <a href="/users/edit/{{ $user->id}}">Edit</a>
            <a href="/users/delete/{{ $user->id}}">Delete</a>
        </div>
    </form>

    <div class="comments-list">
        <a href="/users/view/{{ $user->id}}/add_comment">Add Comment</a>
        @if (count(array($comments)) > 0)
            @foreach ($comments as $comment)
                @if ($user->id === $comment->item_id)
                    <div class="comment">
                        <span class="comment-date">{{$comment->date}}</span>
                        @foreach ($comment_writers as $writer )
                            @if ($writer->id === $comment->user_id)
                                <span class="user-comment">{{$writer->first_name}}</span>
                            @endif
                        @endforeach
                        <p class="comment-text">{{$comment->message}}</p>
                    </div>
                @endif
            @endforeach
        @endif
        
    </div>
</main>