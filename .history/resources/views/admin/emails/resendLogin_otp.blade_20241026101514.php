<!DOCTYPE html>
<html>
<head>
    <title>Resen Login OTP</title>
</head>
<body>
    <h1>Hello, {{ $fullname }}</h1>
    <p>Your OTP for login is: <strong>{{ $otp }}</strong></p>
    <p>Please do not share this OTP with anyone.</p>

    <p>Thanks</p>
<p>{{ Config('app.name'); }} Team. </p>
</body>
</html>