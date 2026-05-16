<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Add Service</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        body{
            margin:0;
            padding:0;
            min-height:100vh;
            background: linear-gradient(135deg, #0d0d0d, #1e1e1e);
            font-family: Arial, sans-serif;
            color:white;
        }

        .main-container{
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
            padding:40px;
        }

        .form-box{
            width:100%;
            max-width:700px;
            background:#1b1b1b;
            border:2px solid #ffc107;
            border-radius:25px;
            padding:45px;
            box-shadow:0 0 30px rgba(255,193,7,0.3);
        }

        .title{
            text-align:center;
            color:#ffc107;
            font-size:42px;
            font-weight:bold;
            margin-bottom:10px;
        }

        .subtitle{
            text-align:center;
            color:#cfcfcf;
            margin-bottom:40px;
        }

        label{
            color:#ffc107;
            font-weight:bold;
            margin-bottom:10px;
        }

        .form-control{
            background:#2c2c2c;
            border:none;
            color:white;
            border-radius:12px;
            padding:14px;
        }

        .form-control:focus{
            background:#2c2c2c;
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
            background:#ffca2c;
            transform:scale(1.05);
        }

        .btn-back{
            padding:14px 30px;
            border-radius:12px;
            font-weight:bold;
        }

        .icon{
            text-align:center;
            font-size:70px;
            margin-bottom:15px;
        }

    </style>

</head>

<body>

<div class="main-container">

    <div class="form-box">

        <div class="icon">
            🔧
        </div>

        <div class="title">
            Add Mechanic Service
        </div>

        <div class="subtitle">
            Vehicle Repair & Maintenance Management
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
                       placeholder="Toyota, Honda, Ford"
                       required>

            </div>

            <div class="mb-4">

                <label>Service Type</label>

                <input type="text"
                       name="service_type"
                       class="form-control"
                       placeholder="Oil Change, Tire Repair"
                       required>

            </div>

            <div class="mb-4">

                <label>Service Cost</label>

                <input type="number"
                       name="service_cost"
                       class="form-control"
                       placeholder="Enter amount"
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

</body>
</html>