<!DOCTYPE html>
<html>
<head>
    <title>{{ $details["subject"] }}</title>
</head>
<body>
<h1>Dear {{ $details['name'] }}, Your Reset Password Token:</h1>
<p>{{ $details['token'] }}</p>
<p>Thank you</p>
</body>
</html>
