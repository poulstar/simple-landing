<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label>
            Username
            <br/>
            <input type="text" name="username"/>
        </label>
        <br/>
        <label>
            Password
            <br/>
            <input type="password" name="password"/>
        </label>
        <br/><br/>
        <button type="submit">Login</button>
    </form>
</body>
</html>
