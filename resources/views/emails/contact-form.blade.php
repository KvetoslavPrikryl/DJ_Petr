<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h1>Nová zpráva od DJ_petr</h1>
    <p><strong>Jméno:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Zpráva:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>