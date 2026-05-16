<!DOCTYPE html>
<html>
<head>

    <title>Service Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background:#111; color:white;">

<div class="container mt-5">

    <div class="card bg-dark p-4 border-warning">

        <h1>🔧 Service Details</h1>

        @if($service->vehicle_image)

            <img src="/uploads/{{ $service->vehicle_image }}"
                 width="300"
                 class="rounded mb-3">

        @endif

        <h3>{{ $service->customer_name }}</h3>

        <p>🚗 {{ $service->vehicle_model }}</p>

        <p>🔩 {{ $service->service_type }}</p>

        <p>💰 ₱{{ $service->service_cost }}</p>

        <p>📅 {{ $service->service_date }}</p>

    </div>

</div>

</body>
</html>