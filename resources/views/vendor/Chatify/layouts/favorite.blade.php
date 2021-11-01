<div class="favorite-list-item">
    <img data-id="{{ $user->id }}" data-action="0" class="avatar av-m" 
        src="{{ (env('S3_URL').config('chatify.user_avatar.folder').'/'.$user->avatar) }}">
    <br>
    <p>{{ strlen($user->name) > 5 ? substr($user->name,0,6).'..' : $user->name }}</p>
</div>