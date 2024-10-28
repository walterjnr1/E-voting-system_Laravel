<h1>Login Successful</h1>

<p>Hello, {{ $fullname }}</p>
<p>You successfully logged in to your account at {{NOW()}}.</p>

<p>Thanks</p>
<p>{{ Config('app.name'); }} Team. </p>

<!DOCTYPE html>
<html>
<head>
    <title>Your Login OTP</title>
</head>
<body>
    <h1>Hello, {{ $fullname }}</h1>
    <p>Your OTP for login is: <strong>{{ $otp }}</strong></p>
    <p>Please do not share this OTP with anyone.</p>

    <p>Thanks</p>
<p>{{ Config('app.name'); }} Team. </p>
</body>
</html>