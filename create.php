<?php

$emailValue = "";
$lnameValue = "";
$fnameValue = "";
$passwordValue = "";
$errorMesage = "";
$successMesage = "";
if(isset($_POST["submit"])){

    $emailValue = $_POST["email"];
    $lnameValue = $_POST["lastName"];
    $fnameValue = $_POST["firstName"];
    $passwordValue = $_POST["password"];

    if(empty($emailValue) || empty($fnameValue) || empty($lnameValue) || empty($passwordValue)){

            $errorMesage = "all fileds must be filed out!";

    }else if(strlen($passwordValue) < 8 ){
        $errorMesage = "password must contains at least 8 char";
    }else if(preg_match("/[A-Z]+/", $passwordValue)==0){
        $errorMesage = "password must contains  at least one capital letter!";
    }else{

        include("database.php");

        // hachage du mot de passe
$password = password_hash($passwordValue, PASSWORD_DEFAULT);
$sql = "INSERT INTO signup1.Clients (firstname, lastname, email,password)
VALUES ('$fnameValue', '$lnameValue', '$emailValue','$password')";
if (mysqli_query($conn, $sql)) {
$successMesage= "New record created successfully";
$emailValue = "";
$lnameValue = "";
$fnameValue = "";
} else {
  $errorMesage ="Error: " . $sql . "<br>" . mysqli_error($conn);
}

       
      
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
   

</head>
<body>
    <div class="container my-5 ">

        <h2>SIGN UP</h2>

    <?php

    if(!empty($errorMesage)){
  echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>$errorMesage</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
  </button>
  </div>";
    }
       ?>

        <br>
        <form method="post">
            <div class="row mb-3">
                    <label class="col-form-label col-sm-1" for="fname">First Name:</label>
                    <div class="col-sm-6">
                        <input value="<?php echo $fnameValue ?>" class="form-control" type="text" id="fname" name="firstName">
                    </div>
            </div>
            <div class="row mb-3">
                    <label class="col-form-label col-sm-1" for="lname">Last Name:</label>
                    <div class="col-sm-6">
                        <input  value="<?php echo $lnameValue ?>" class="form-control" type="text" id="lname" name="lastName">
                    </div>
            </div>
            <div class="row mb-3 ">
                    <label class="col-form-label col-sm-1" for="email">Email:</label>
                    <div class="col-sm-6">
                        <input value=" <?php echo $emailValue ?>" class="form-control" type="email" id="email" name="email">
                    </div>
            </div>
            <div class="row mb-3 ">
                    <label class="col-form-label col-sm-1" for="password">Password:</label>
                    <div class="col-sm-6">
                        <input  class="form-control" type="password" id="password" name="password" >
                    </div>
            </div>

            <?php
            if(!empty($successMesage)){
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>$successMesage</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
</button>
</div>";
            }
  ?>  
      

            <div class="row mb-3">
                    <div class="offset-sm-1 col-sm-3 d-grid">
                        <button name="submit" type="submit" class=" btn btn-primary">Signup</button>
                    </div>
                    <div class="col-sm-1 col-sm-3 d-grid">
                        <a class="btn btn-outline-primary" >Login</a>
                        <link rel="" href="C:\xampp\htdocs\php\login.php">

                    </div>
            </div>
        </form>

    </div>

</body>
</html>
