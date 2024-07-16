<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit;
}

// Display user information or any other content
echo "Welcome, " . $_SESSION['username'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- <h2 class="text-center my-2">Welcome, <?php echo $_SESSION['username']; ?>!</h2> -->

    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container p-2">
            <a class="navbar-brand fw-bold fs-3" href="#">E Checker</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 gap-md-4 p-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="d-inline-block btn btn-danger w-60" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="welcome-text text-center my-4">
        <h2>Selamat datang, Admin</h2>
        <span>Silahkan pilih menu</span>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 my-2">
                <div class="card shadow p-2" style="min-height: 30rem;">
                    <img src="./assets/img/logo-kcj.png" class="card-img-top" style="min-height: 20rem; object-fit:contain;" alt="Logo KRL">
                    <div class="card-body">
                        <h5 class="card-title">KRL</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Detail <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-2">
                <div class="card shadow p-2" style="min-height: 30rem;">
                    <img src="./assets/img/logo-lrt.jpeg" class="card-img-top" style="min-height: 20rem; object-fit: cover;" alt="Logo LRT">
                    <div class="card-body">
                        <h5 class="card-title">LRT</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Detail <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-2">
                <div class="card shadow p-2" style="min-height: 30rem;">
                    <img src="./assets/img/logo-mrt.webp" class="card-img-top" style="min-height: 20rem; object-fit: cover;" alt="Logo MRT">
                    <div class="card-body">
                        <h5 class="card-title">MRT</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Detail <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-2">
                <div class="card shadow p-2" style="min-height: 30rem;">
                    <img src="./assets/img/logo-transjakarta.png" class="card-img-top" style="min-height: 20rem; object-fit: cover;" alt="Logo Transjakarta">
                    <div class="card-body">
                        <h5 class="card-title">Bus Transjakarta</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Detail <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
