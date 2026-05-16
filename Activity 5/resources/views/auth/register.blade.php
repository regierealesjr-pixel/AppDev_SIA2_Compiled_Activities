<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h1>CarHub Register</h1>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label>Name</label><br>
        <input type="text" name="name" required>
    </div>

    <br>

    <div>
        <label>Role</label><br>

        <select name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
    </div>

    <br>

    <div>
        <label>Email</label><br>
        <input type="email" name="email" required>
    </div>

    <br>

    <div>
        <label>Password</label><br>
        <input type="password" name="password" required>
    </div>

    <br>

    <div>
        <label>Confirm Password</label><br>
        <input type="password" name="password_confirmation" required>
    </div>

    <br>

    <button type="submit">
        Register
    </button>

</form>

<br>

<a href="/login">Already registered?</a>

</body>
</html>