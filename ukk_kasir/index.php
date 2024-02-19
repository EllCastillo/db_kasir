<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>UKK Kasir</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="card mt-5">
                <div class="row">
                    <div class="col-6">
                        <div class="card-body">
                            <p class="text-center mt-5">Silahkan Masukkan Username dan Password</p>
                            <?php
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan']=="gagal"){
                                    echo "<div class='alert'>Username dan Password Tidak Seusai !</div>";
                                }
                            }
                            ?>
                            <form method="post" action="cek_login.php">
                                <div class="form-group mb-3">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group mt-3">
                                    <button class="btn btn-primary form-control" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card_body">
                            <img src="assets/logo.png" alt="logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>