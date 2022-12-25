<!doctype html>
<html lang="en">

<?php
session_start();
include 'koneksi.php';
if(!isset($_SESSION['username'])){
    header('location:login.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Barang</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">Data Barang</a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>

                    <a onclick="return confirm('Apakah Anda Ingin Keluar')"class="nav-link active" aria-current="page" href="logout.php">Logout</a>

                </form>
            </div>
        </nav>
    </div>

    <figure class="text-center mt-5">
        <blockquote class="blockquote">
            <p> Barang</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Nama-nama <cite title="Source Title">Barang </cite>
        </figcaption>
    </figure>



    <div class="container mt-5">

        <table class="table">
            <div class="container">
                <a href="tambah.php" type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah</a>
            </div>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no=1;
                $query="SELECT * FROM tbl_barang";
                $sql=mysqli_query($conn,$query);
                while ($data=mysqli_fetch_array($sql)){
                ?>
                <tr>

                    <td><?php echo $no ?></td>
                    <td><?php echo $data['nama']?></td>
                    <td><?php echo $data['harga']?></td>
                    <td><?php echo $data ['keterangan']?></td>
                    <td>
                        <a href="ubah.php?id_barang=<?php echo $data['id_barang'];?>" type="button"
                            class="btn btn-success"> Ubah</a>
                        <a onclick="return confirm('AFAAAH IYAHH?')"
                            href="aksihapus.php?id_barang=<?php echo $data['id_barang'];?>" type="button"
                            class="btn btn-danger"> Hapus</a>
                    </td>


                </tr>
                <?php
                $no++;
                    }
                    ?>
            </tbody>
        </table>

    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>