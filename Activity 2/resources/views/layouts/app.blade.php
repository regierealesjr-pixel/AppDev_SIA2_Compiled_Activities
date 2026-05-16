<!DOCTYPE html>
<html>
<head>
    <title>AutoMatch Car Comparison System</title>

    <style>

        body{
            margin:0;
            font-family:Arial, sans-serif;
            background:#f4f4f4;
        }

        header{
            background:#111827;
            color:white;
            padding:20px;
            text-align:center;
        }

        footer{
            background:#111827;
            color:white;
            text-align:center;
            padding:15px;
            margin-top:40px;
        }

        .container{
            width:90%;
            margin:auto;
            padding:20px;
        }

        .card{
            background:white;
            padding:20px;
            margin-bottom:25px;
            border-radius:10px;
            box-shadow:0 2px 5px rgba(0,0,0,0.1);
        }

        .btn{
            display:inline-block;
            padding:10px 15px;
            background:#2563eb;
            color:white;
            text-decoration:none;
            border-radius:5px;
        }

        .btn:hover{
            background:#1d4ed8;
        }

        img{
            border-radius:10px;
        }

        h1,h2,h3{
            color:#111827;
        }

    </style>

</head>

<body>

<header>
    <h1>AutoMatch Car Comparison System</h1>
    <p>Laravel Mini System Project</p>
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    <p>© 2026 AutoMatch System | Developed by Student</p>
</footer>

</body>
</html>