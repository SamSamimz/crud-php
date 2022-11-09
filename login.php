<?php
// include 'login_only.php';
if (isset($_SESSION['username'])) {
    header("Location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <div id="wrapper">
        <div id="header">
            <h1>Crud</h1>
        </div>

        <div class="container bg-light">
            <div class="col-6 mx-auto p-4">
                <form action="">
                    <h2 class="text-center">Login</h2>
                    <div class="mb-3">
                        <label for="username" class="form-label">username :</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password :</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <input type="submit" value="Login" name="login" class="btn btn-success float-end">
                </form>
                <div class="col mb-5">
                </div>
            </div>
        </div>


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>