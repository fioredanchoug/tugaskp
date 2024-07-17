<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../../index.php");
    exit();
}

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
                    <lii class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../welcome.php">Home</a>
                    </lii>
                    <lii class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </lii>
                    <lii class="nav-item">
                        <a class="d-inline-block btn btn-danger w-60" href="logout.php">Logout</a>
                    </lii>
                </ul>
            </div>
        </div>
    </nav>

    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Aplikasi E Checker</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        
        h1 {
            text-align: center;
            color: #007BFF;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #8c969b;
            color: #000000;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
        }
    </style>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container">
        <h1>Users Aplikasi E Checker</h1>
                    <lii class="nav-item">
            
                        <a class="btn btn-primary" href="create.php">Create</a>
                    </lii>
                    <lii class="nav-item">
                        <a class="d-inline-block btn btn-danger w-60" href="dl.php">Delete</a>
                    </lii>

        <ul id="usersList"></ul>
    </div>

    <script>
        // Fetch the list of admin users from the back-end
        fetch('db.php')
            .then(response => response.json())
            .then(data => {
                const usersList = document.getElementById('usersList');
                usersList.innerHTML = '';

                if (data.error) {
                    const li = document.createElement('li');
                    li.textContent = data.error;
                    li.style.backgroundColor = '#FF0000';
                    usersList.appendChild(li);
                } else {
                    data.forEach(users => {
                        const li = document.createElement('li');
                        li.textContent = `Username: ${users.username}, Email: ${users.email}`;
                        usersList.appendChild(li);
                    });
                }
            })
            .catch(error => {
                console.error('Error fetching users users:', error);
            });
    </script>
</body>



</html>
