<!doctype html>
<html lang="en">

<?php
session_start();
include 'koneksi.php';
if(isset($_SESSION['username'])){
    header('location:index.php');
    exit;
    
}
?>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Halaman Login</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                     if(isset($_GET['pesan'])){
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><?php echo $_GET['pesan']?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <?php
                 }
            
                ?>
                <div class="card">

                    <div class="card-header text-center">HALAMAN LOGIN</div>
                    <form action="aksilogin.php" method="POST">

                        <div class="card-body">
                            <label for="Username" class="form-label">Username</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-person-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    </svg></span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 "
                                    name="username" required placeholder="Masukkan Username" >
                            </div>



                            <label for="Password" class="form-label">Password</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-unlock-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z" />
                                    </svg></span>
                                <input type="password" class="form-control" id="basic-url"
                                    aria-describedby="basic-addon3 " name="password" placeholder="Masukkan Password"
                                    required>
                            </div>

                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>

                        <div class="text-center mt-3">
                            <h6>belum punya akun? <a href="daftar.php">Daftar</a></h6>
                        </div>



                    </form>



                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>