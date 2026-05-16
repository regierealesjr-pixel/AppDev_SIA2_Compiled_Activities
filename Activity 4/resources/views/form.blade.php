<!DOCTYPE html>
<html>
<head>
    <title>Car Show Registry Form System</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body style="background-color: #f5f5f5;">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h2 class="text-center mb-4">
            Car Show Registry Form
        </h2>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Display All Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form action="/form" method="POST">

            @csrf

            <!-- Participant Name -->
            <div class="mb-3">

                <label class="form-label">
                    Participant Name
                </label>

                <input
                    type="text"
                    name="participant_name"
                    class="form-control"
                    value="{{ old('participant_name') }}"
                >

                @error('participant_name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror

            </div>

            <!-- Contact Email -->
            <div class="mb-3">

                <label class="form-label">
                    Contact Email
                </label>

                <input
                    type="email"
                    name="contact_email"
                    class="form-control"
                    value="{{ old('contact_email') }}"
                >

                @error('contact_email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror

            </div>

            <!-- Vehicle Brand -->
            <div class="mb-3">

                <label class="form-label">
                    Vehicle Brand
                </label>

                <select
                    name="vehicle_brand"
                    class="form-select"
                >

                    <option value="">
                        Select Brand
                    </option>

                    <option value="Toyota">Toyota</option>
                    <option value="Honda">Honda</option>
                    <option value="BMW">BMW</option>
                    <option value="Ford">Ford</option>
                    <option value="Nissan">Nissan</option>

                </select>

                @error('vehicle_brand')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror

            </div>

            <!-- Vehicle Year -->
            <div class="mb-3">

                <label class="form-label">
                    Vehicle Year
                </label>

                <input
                    type="number"
                    name="vehicle_year"
                    class="form-control"
                    value="{{ old('vehicle_year') }}"
                >

                @error('vehicle_year')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror

            </div>

            <!-- Car Modifications -->
            <div class="mb-3">

                <label class="form-label">
                    Car Modifications
                </label>

                <textarea
                    name="car_modifications"
                    class="form-control"
                    rows="4"
                >{{ old('car_modifications') }}</textarea>

                @error('car_modifications')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror

            </div>

            <!-- Submit Button -->
            <button
                type="submit"
                class="btn btn-primary"
            >
                Register Vehicle
            </button>

        </form>

    </div>

</div>

</body>
</html>