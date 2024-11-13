<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="utilities/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="d-flex justify-content-center container">
        <div class="box border border-white w-25 mx-auto">
            <div class="container d-flex justify-content-center">
                <?php
                if (isset($_SESSION['status'])) {
                ?>
                    <div class="text-center">
                        <div class="alert alert-danger alert-dismissible fade show mx-auto" role="alert" style="width: 300px; border-radius: 20px;">
                            <strong> Hey! </strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>
                    </div>
                <?php

                    unset($_SESSION['status']);
                }

                if (isset($_SESSION['status1'])) {
                ?>
                    <div class="text-center">
                        <div class="alert alert-success alert-dismissible fade show mx-auto" role="alert" style="width: 300px; border-radius: 20px;">
                            <strong> Hey! </strong> <?php echo $_SESSION['status1']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>
                    </div>
                <?php

                    unset($_SESSION['status1']);
                }
                ?>
            </div>

            <h1>LOGIN HERE </h1>
            <form action="db/login.php" method="post">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Username</label>
                    <input type="text" class="form-control" name="user" id="formGroupExampleInput" placeholder="Username">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass" id="formGroupExampleInput2" placeholder="password">
                </div>
                <div class="mb-3">
                    <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                </div>
            </form>
            <div class="mb-3">
                <p>Don't have an account? <a href="signup.php">Register Here</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>


logout.php
<?php
session_start();
session_destroy();
header(location":
index2.php");
?>

signup.php
<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="utilities/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="d-flex justify-content-center container">
        <div class="box border border-white w-75 mx-auto">
            <div class="container d-flex justify-content-center">
                <?php
                if (isset($_SESSION['status'])) {
                ?>
                    <div class="text-center">
                        <div class="alert alert-danger alert-dismissible fade show mx-auto" role="alert" style="width: 300px; border-radius: 20px;">
                            <strong> Hey! </strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>
                    </div>
                <?php

                    unset($_SESSION['status']);
                }

                if (isset($_SESSION['status1'])) {
                ?>
                    <div class="text-center">
                        <div class="alert alert-success alert-dismissible fade show mx-auto" role="alert" style="width: 300px; border-radius: 20px;">
                            <strong> Hey! </strong> <?php echo $_SESSION['status1']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>
                    </div>
                <?php

                    unset($_SESSION['status1']);
                }
                ?>
            </div>

            <h1>REGISTER HERE </h1>
            <form action="db/crud.php" method="post">
                <div class="row">
                    <div class="col-6">
                        <label for="formGroupExampleInput" class="form-label">Username</label>
                        <input type="text" class="form-control" name="user" id="formGroupExampleInput" placeholder="Username">
                    </div>
                    <div class="col-6">
                        <label for="formGroupExampleInput" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pass" id="formGroupExampleInput" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <label for="formGroupExampleInput" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="formGroupExampleInput" placeholder="Address">
                    </div>
                    <div class="col-6">
                        <label for="formGroupExampleInput" class="form-label">Birthdate</label>
                        <input type="date" class="form-control" name="date" id="formGroupExampleInput" placeholder="Birhtdate">
                    </div>
                    <div class="col-6">
                        <label for="formGroupExampleInput" class="form-label">Gender</label>
                        <select class="form-select" name="gender" aria-label="Default select example">
                            <option selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="mt-3">
                            <button type="submit" name="register" class="btn btn-primary w-100">Register</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="mt-3">
                <p>Already have an accoiunt? <a href="index2.php">Login Here</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
