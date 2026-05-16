<!DOCTYPE html>
<html>
<head>

    <title>Admin Dashboard</title>

    <style>

        body{
            font-family:Arial;
            background:#111827;
            color:white;
            margin:0;
            padding:0;
        }

        .navbar{
            background:#1f2937;
            padding:20px;
        }

        .container{
            padding:30px;
        }

        .card{
            background:#1f2937;
            padding:20px;
            border-radius:10px;
            margin-bottom:20px;
        }

        a{
            color:#60a5fa;
            text-decoration:none;
        }

    </style>

</head>

<body>

<div class="navbar">

    <h2>🚗 CarHub Admin Dashboard</h2>

</div>

<div class="container">

    <div class="card">

        <h3>Admin Information</h3>

        <p>Name: {{ auth()->user()->name }}</p>

        <p>Email: {{ auth()->user()->email }}</p>

        <p>Role: {{ auth()->user()->role }}</p>

    </div>

    <div class="card">

        <h3>System Integration</h3>

        <a href="/cars-api">View Cars API</a>

        <br><br>

        <a href="/posts">View Car News</a>

    </div>

</div>

</body>
</html>