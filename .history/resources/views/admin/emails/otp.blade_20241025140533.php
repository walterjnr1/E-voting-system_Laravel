<h1>Hello, {{ $fullname }}</h1>
<p>Your OTP to complete your registration is <strong>{{ $otp }}</strong>. Please do not share it with anyone.</p>

<p>Thanks</p>
<p>{{ Config('app.name'); }} Team. </p>
@endcomponent