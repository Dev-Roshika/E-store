<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="">
        <label for="email">Email:</label>
        <input type="email" name="email" id = "email">
        <label for="pass">Password:</label>
        <input type="password" name="password" id = "pass">
        <input type="submit" value="Login">
    </form>
    <a href="{{url('register')}}">Register</a>
</body>
</html>