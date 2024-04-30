
@component('mail::message')
    <p> Hello, {{$user->fullname}} <br />  We understand it happens.</p>

<p> Your new password is : <strong>{{$randomPassword}}</strong></p>
<p> Please change this password as soon as possible.</p>
<p> Incase you have issues recovering your Password, contact the Super Admin for Assistance.</p>

<p>Thanks</p>
<p><strong>{{ Config('app.name'); }} Team.</strong></p>
@endcomponent