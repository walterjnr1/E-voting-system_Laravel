<h1>Hello, {{ $fullname }}</h1>
<p>Your OTP to complete your registration is <strong>{{ $otp }}</strong>. Please do not share it with anyone.</p>
<p>Thank you for registering with {{ Config('app.name') }}.</p>

<!-- Include the message component -->
<x-message :content="'Your registration is almost complete!'" />

<p>Thanks</p>
<p>{{ Config('app.name') }} Team.</p>