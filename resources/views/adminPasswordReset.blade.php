<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Reset Password</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        .container {
            max-width: 500px;
            margin-top: 100px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
        }

        .text-center a {
            text-decoration: none;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="form-container">
            <h1>Admin | Reset Password</h1>
            <form action="{{ route('adminPassword.reset') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                </div>

                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter new password" required>
                </div>

                <button type="submit" class="btn btn-primary">Reset Password</button>

                <div class="text-center mt-3">
                    <p>Already have an account? <a href="{{ route('adminLogin') }}">Login Now</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-P2Qh+54erwbs8vqDdREt9G6rqm4O4itfgTSQ5G5Y0vT45ms7FiA0r5XyRj9m2XyxF"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-KyZXEJx3W8C8f7iDkFHFzGkszmxW6yMKEMOTyJbbU5HfF9GRFhxw1caFVhQbjeV1"
        crossorigin="anonymous"></script>

</body>

</html>