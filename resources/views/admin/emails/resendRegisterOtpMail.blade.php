<!DOCTYPE html>
<html>
<head>
    <title>Resend registration OTP</title>
</head>
<body>
    <h1>Hello, {{ $fullname }}</h1>
    <p>Your OTP to complete your registration process is: <strong>{{ $otp }}</strong></p>
    <p>Please do not share this OTP with anyone.</p>

    <p>Thanks</p>
<p>{{ Config('app.name'); }} Team. </p>
</body>
</html>