@include('layouts.app')

<main>
    <h2>Add Commment </h2>
  
    <form class="add_comment-form" method="POST" action="{{$form_action_url}}" >
        @csrf

        <!-- Message -->
        <div>
            <label for="message" :value="__('Message')">Message</label>

            <textarea id="message" class="block mt-1 w-full" name="message" required autofocus></textarea>
        </div>

        <div class="buttons">
            <a href={{$precedent_url}}>Close</a>
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



