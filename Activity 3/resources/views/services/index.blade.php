<!DOCTYPE html>
<html>
<head>

    <title>Mechanic Service System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#111;
            color:white;
            font-family:Arial;
        }

        .service-card{
            background:#1f1f1f;
            border:1px solid #ffc107;
            border-radius:20px;
            overflow:hidden;
            transition:0.3s;
        }

        .service-card:hover{
            transform:translateY(-8px);
            box-shadow:0 0 25px rgba(255,193,7,0.3);
        }

        .service-image{
            width:100%;
            height:230px;
            object-fit:cover;
        }

    </style>

</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>🔧 Mechanic Service System</h1>

        <a href="{{ route('services.create') }}"
           class="btn btn-warning">

            + Add Service

        </a>

    </div>

    <form method="GET"
          action="{{ route('services.index') }}"
          class="mb-4">

        <input type="text"
               name="search"
               class="form-control"
               placeholder="Search services...">

    </form>

    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    <div class="row">

        @foreach($services as $service)

        <div class="col-md-4 mb-4">

            <div class="service-card">

                @if($service->vehicle_image)

                    <img src="/uploads/{{ $service->vehicle_image }}"
                         class="service-image">

                @endif

                <div class="p-3">

                    <h4>{{ $service->customer_name }}</h4>

                    <p>🚗 {{ $service->vehicle_model }}</p>

                    <p>🔩 {{ $service->service_type }}</p>

                    <p>💰 ₱{{ $service->service_cost }}</p>

                    <p>📅 {{ $service->service_date }}</p>

                    <a href="{{ route('services.show', $service->id) }}"
                       class="btn btn-info btn-sm">

                        View

                    </a>

                    <a href="{{ route('services.edit', $service->id) }}"
                       class="btn btn-primary btn-sm">

                        Edit

                    </a>

                    <form action="{{ route('services.destroy', $service->id) }}"
                          method="POST"
                          class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">

                            Delete

                        </button>

                    </form>

                </div>

            </div>

        </div>

        @endforeach

    </div>

    <div class="mt-4">

        {{ $services->links() }}

    </div>

</div>

</body>
</html>