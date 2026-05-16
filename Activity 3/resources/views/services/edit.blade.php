<!DOCTYPE html>
<html>
<head>

    <title>Add Mechanic Service</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background: linear-gradient(135deg, #0a0a0a, #1c1c1c);
            min-height:100vh;
            color:white;
            font-family: Arial, sans-serif;
        }

        .main-box{
            background: rgba(25,25,25,0.95);
            border:2px solid #ffc107;
            border-radius:25px;
            padding:45px;
            box-shadow:0 0 35px rgba(255,193,7,0.25);
        }

        .title{
            color:#ffc107;
            font-size:42px;
            font-weight:bold;
        }

        .subtitle{
            color:#cfcfcf;
            margin-bottom:35px;
        }

        label{
            color:#ffc107;
            font-weight:bold;
            margin-bottom:10px;
        }

        .form-control{
            background:#2a2a2a;
            border:none;
            color:white;
            padding:14px;
            border-radius:12px;
        }

        .form-control:focus{
            background:#2a2a2a;
            color:white;
            box-shadow:0 0 15px #ffc107;
        }

        .btn-save{
            background:#ffc107;
            color:black;
            border:none;
            padding:14px 30px;
            border-radius:12px;
            font-weight:bold;
            transition:0.3s;
        }

        .btn-save:hover{
            transform:scale(1.05);
            background:#ffca2c;
        }

        .btn-back{
            padding:14px 30px;
            border-radius:12px;
            font-weight:bold;
        }

        .icon-box{
            font-size:70px;
            margin-bottom:20px;
        }

    </style>

</head>

<body>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="main-box">

                <div class="text-center">

                    <div class="icon-box">
                        🔧
                    </div>

                    <div class="title">
                        Add Mechanic Service
                    </div>

                    <div class="subtitle">
                        Manage vehicle repairs, maintenance, and mechanic records
                    </div>

                </div>

                <form action="{{ route('services.store') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="mb-4">

                        <label>Customer Name</label>

                        <input type="text"
                               name="customer_name"
                               class="form-control"
                               placeholder="Enter customer name"
                               required>

                    </div>

                    <div class="mb-4">

                        <label>Vehicle Model</label>

                        <input type="text"
                               name="vehicle_model"
                               class="form-control"
                               placeholder="Toyota, Honda, Ford..."
                               required>

                    </div>

                    <div class="mb-4">

                        <label>Service Type</label>

                        <input type="text"
                               name="service_type"
                               class="form-control"
                               placeholder="Oil Change, Tire Repair..."
                               required>

                    </div>

                    <div class="mb-4">

                        <label>Service Cost</label>

                        <input type="number"
                               name="service_cost"
                               class="form-control"
                               placeholder="Enter service cost"
                               required>

                    </div>

                    <div class="mb-4">

                        <label>Service Date</label>

                        <input type="date"
                               name="service_date"
                               class="form-control"
                               required>

                    </div>

                    <div class="mb-4">

                        <label>Vehicle Image</label>

                        <input type="file"
                               name="vehicle_image"
                               class="form-control">

                    </div>

                    <div class="d-flex gap-3">

                        <button type="submit"
                                class="btn-save">

                            Save Service

                        </button>

                        <a href="{{ route('services.index') }}"
                           class="btn btn-secondary btn-back">

                            Back

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>