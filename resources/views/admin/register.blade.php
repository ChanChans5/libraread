<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Register</title>
</head>
<body>
    <form action="{{ route('register.store') }}" method="POST">
        <input type="text" placeholder="Firstname">
    </form>
</body>
</html>