<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Login</title>
</head>
<body>
    <div>
        <form method="POST" action="{{ route('login.store') }}">
            @csrf
            <input type="text" placeholder="Email" name="email">
            @session('email')
                <p class="text-red">{{ $email }}</p>
            @endsession
            <input type="password" placeholder="Password" name="password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>