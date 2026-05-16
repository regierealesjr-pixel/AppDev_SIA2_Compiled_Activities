<!DOCTYPE html>
<html>
<head>

    <title>CarHub News</title>

    <style>

        body{
            font-family: Arial;
            background:#111827;
            color:white;
            padding:30px;
        }

        h1{
            text-align:center;
            margin-bottom:40px;
        }

        .card{
            background:#1f2937;
            padding:20px;
            margin-bottom:20px;
            border-radius:10px;
            box-shadow:0px 0px 10px rgba(0,0,0,0.5);
        }

        .card h2{
            color:#60a5fa;
        }

    </style>

</head>

<body>

<h1>🚗 CarHub Car News</h1>

@foreach($posts as $post)

<div class="card">

    <h2>{{ $post['title'] }}</h2>

    <p>{{ $post['body'] }}</p>

</div>

@endforeach

</body>
</html>