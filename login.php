<?php
include "komponen/navbar.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Contoh validasi login tanpa database
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = 'Administrator';
        header("Location: ../web-hotel/admin/index.php");
        exit;
    } else if($username === 'adewahyu' && $password === 'adew2950'){
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = 'Ade Wahyu Warpudin';
        header("Location: index.php");
    }
    else {
        $error_message = 'Username atau Password salah';
    }
}
?>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Login</h4>
                </div>
                <div class="card-body mb-3">
                    <form method="POST" action="">
                        <div class="form-group mb-3">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Enter username" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
                        </div>
                        <div class="row mt-3 mb-5">
                            <div class="col-sm-8 offset-sm-4">
                                <button type="submit" class="btn btn-primary btn-sm">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include "komponen/footer.php";
?>


