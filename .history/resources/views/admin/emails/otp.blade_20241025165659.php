
<h1>Hello, {{ $fullname }}</h1>
<p>Your OTP to complete your registration is <strong>{{ $otp }}</strong>. Please do not share it with anyone.</p>
<p>Thank you for registering with {{ Config('app.name'); }}</p>

<p>Thanks</p>
<p>{{ Config('app.name'); }} Team. </p>
php artisan config:cache