<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sistem Peminjaman Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .register-container h2 {
            margin-bottom: 20px;
            color: #343a40;
        }
        .form-control:focus {
            border-color: #5a5a5a;
            box-shadow: none;
        }
        .btn-custom {
            background-color: #4e73df;
            color: #ffffff;
            border: none;
        }
        .btn-custom:hover {
            background-color: #3751a4;
        }
        .form-text {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2 class="text-center">Register</h2>
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Choose a username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Create a password" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" rows="3" placeholder="Enter your address" required></textarea>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-custom btn-block">Register</button>
            </div>
            <p class="form-text text-center mt-3">Sudah punya akun? <a href="login">Login di sini</a></p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
