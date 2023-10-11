@component('mail::message')
    Hello {{$user['name']}}
    <p>We understant it happens.</p>
    @component('mail::button',['url'=> url('password-reset',$user->remember_token)])
        Reset Your Password
    @endcomponent
    <p>In case you have any issues recobering you password, please contact us.</p>
    Thanks,<br>
    {{config('app.name')}}
@endcomponent
