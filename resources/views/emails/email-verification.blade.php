<!DOCTYPE html>
<html>
<head>
    <title>{{ $details["subject"] }}</title>
</head>
<body>
<h1>Dear {{ $details['name'] }}, Your Email Verification Address:</h1>
<p>{{ $details['token'] }}</p>
<p>Thank you</p>
</body>
</html>
