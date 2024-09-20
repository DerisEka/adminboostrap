<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
</head>
<style>
    body {
    background-image: url('img/bg2.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    height: 100%;
}

.form-container {
    width: 30%;
    margin: auto;
    padding-top: 100px;
}

.form-box {
    background-color: rgba(246, 246, 246, 0.471);
    padding: 50px;
    border-radius: 20px;
}

.form-switch {
    margin-top: 10px;
    text-align: center;
}
</style>
<body>
    <div class="container form-container">
        <div class="form-box">
            <ul class="nav nav-tabs" id="loginRegisterTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="register-tab" data-bs-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                </li>
            </ul>

            <div class="tab-content mt-4">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <h3 class="text-center">Login</h3>
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">Email address</label>
                            <input type="email" name="loginEmail" class="form-control" id="loginEmail" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Password</label>
                            <input type="password" name="loginPassword" class="form-control" id="loginPassword" placeholder="Enter your password" required>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>

                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                    <h3 class="text-center">Register</h3>
                    <form action="register.php" method="post">
                        <div class="mb-3">
                            <label for="registerName" class="form-label">Name</label>
                            <input type="text" name="registerName" class="form-control" id="registerName" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="registerEmail" class="form-label">Email address</label>
                            <input type="email" name="registerEmail" class="form-control" id="registerEmail" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="registerPassword" class="form-label">Password</label>
                            <input type="password" name="registerPassword" class="form-control" id="registerPassword" placeholder="Create a password" required>
                        </div>
                        <div class="mb-3">
                            <label for="registerConfirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" name="registerConfirmPassword" class="form-control" id="registerConfirmPassword" placeholder="Confirm your password" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Register</button>
                    </form>
                </div>
            </div>

            <div class="form-switch">
                <p>No Have Account? <a href="#register" class="nav-link d-inline" data-bs-toggle="tab">Register here</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
