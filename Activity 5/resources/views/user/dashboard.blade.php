<!DOCTYPE html>
<html>
<head>

    <title>User Dashboard</title>

    <style>

        body{
            font-family:Arial;
            background:#0f172a;
            color:white;
            margin:0;
            padding:0;
        }

        .navbar{
            background:#1e293b;
            padding:20px;
        }

        .container{
            padding:30px;
        }

        .card{
            background:#1e293b;
            padding:20px;
            border-radius:10px;
            margin-bottom:20px;
        }

        a{
            color:#38bdf8;
            text-decoration:none;
        }

    </style>

</head>

<body>

<div class="navbar">

    <h2>🚘 CarHub User Dashboard</h2>

</div>

<div class="container">

    <div class="card">

        <h3>User Profile</h3>

        <p>Name: {{ auth()->user()->name }}</p>

        <p>Email: {{ auth()->user()->email }}</p>

        <p>Role: {{ auth()->user()->role }}</p>

    </div>

    <div class="card">

        <h3>CarHub Features</h3>

        <a href="/cars-api">Cars API</a>

        <br><br>

        <a href="/posts">Car News</a>

    </div>

</div>

</body>
</html>