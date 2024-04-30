
@component('mail::message')
    <p> Hello, {{$user->fullname}} <br />  We understand it happens</p>

@component('mail::button',['url'=>url('ResetPassword/'.$user->remember_token)])
    Reset Your Password
@endcomponent
<p> Incase you have issues recovering your Password, contact the Super Admin for Assistance</p>

<p>Thanks</p>
{{ Config('app.name'); }}
@endcomponent