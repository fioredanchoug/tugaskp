<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-primary">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-10 col-md-8 col-lg-6 mx-auto border rounded shadow-lg p-5 bg-white">
                <div class="login-title text-center">
                    <h2>Halaman Login</h2>
                    <span>Silahkan login terlebih dahulu !</span>
                </div>
                <form action="" method="POST" class="d-flex flex-column gap-4">
                    <div class="username-input">
                        <label>Username:</label><br>
                        <input type="text" name="username" class="form-control mt-2" aria-describedby="usernameInput" required>
                    </div>
                    <div class="password-input">
                        <label for="inputPassword5" class="form-label">Password</label>
                        <input type="password" name="password" id="inputPassword5" class="form-control mt-2" aria-describedby="passwordInput">
                        <div id="passwordHelpBlock" class="form-text text-danger mt-2">
                            Password harus terdiri dari 8-20 karakter, terdiri dari huruf dan angka, dan tidak boleh mengandung spasi, karakter khusus, atau emoji.
                        </div>
                    </div>
                    <button class="btn btn-primary p-2" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>