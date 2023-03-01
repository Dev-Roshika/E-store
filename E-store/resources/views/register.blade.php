<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body>
    <h1>Customer Registration</h1>
    <form action="{{route('register')}}" method="post">
        {{ csrf_field() }}
        <label for="name">Name: </label>
        <input type="text" name="name" id="name">
        <label for="email">Email: </label>
        <input type="text" name="email" id="email">
        <label for="gender">Gender: </label>
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <label for="address">Address: </label>
        <input type="text" name="address" id="address">
        <label for="mobile">Mobile No: </label>
        <input type="tel" name="mobile" id="mobile">
        <label for="pass">Password: </label>
        <input type="password" name="password" id="pass">
        <input type="hidden" name="role" id="role" value="customer">
        <input type="submit" value="Sign Up">
    </form>
</body>

</html>