<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SMK 1 Cisarua</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Login SMK 1 Cisarua</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-link active" aria-current="page" href="index-siswa.php">Home</a>
        <a class="nav-link" href="kelola-siswa.php">Pendaftaran</a>
        <a class="nav-link" href="index-guru.php">Data Guru</a>
        <a class="nav-link" href="data_upload.php">Data Upload</a>
        <a class="nav-link" href="logout.php">logout</a>
            </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
    <div class="container mt-4">
        <h2>Login</h2><br>
        <form action="proses_login.php" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-4 col-4">
                <label class="form-label" for="form2Example1">Username</label>
                <input type="text" id="username" name="username" class="form-control"/>
 </div>

                <!-- passoword input -->
                <div class="form-outline mb-4 col-4">
                    <label class="form-label" for="form2Example2">Password</label>
                    <input type="password" id="password" name="password" class="form-control"/>
</div>

        <!-- submit butto -->
        <div class="form-outline mb-4 col-4">
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
</div>
</div>
</form>
</div>
</body>
</html>