@component('mail::message')
    <p> Hello, {{$userRecord->fullname}} <br />  Thank you for registering with {{ Config('app.name'); }}</p>
    <p>We are honoured to have you. We hope to provide you an experience that is second to none in this industry.</p>

<h1>Hello, {{ $fullname }}</h1>
<p>Your OTP to complete your registration is <strong>{{ $otp }}</strong>. Please do not share it with anyone.</p>

<p>Thanks</p>
<p>{{ Config('app.name'); }} Team. </p>
@endcomponent