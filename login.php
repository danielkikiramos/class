<?php
$conn = mysqli_connect("localhost", "root", "", "basicclassroom");
if(isset($_POST['btnVerificar']))
{
 $txtnombreU = $_POST['txtemail'];
 $txtPass = $_POST['txtpassword'];

 $query = "select * from docentes where email='{$txtnombreU}' and password='{$txtPass}'";
$result= mysqli_query($conn,$query);

if ($res= mysqli_fetch_array($result)) 
{
    echo "<script>alert(\"Ingreso correcto\");</script>";

    
}else
    {
        echo "<script>alert(\"Ingreso incorrecto\");</script>";
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>

<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img class="mb-4" src="img/Logo1A.jpg" alt width="150" height="150">
                    <form action="login.php" method="post">
                        <form class="col-12">
                            <div class="form-group" id="email-group">
                                <input type="text" class="form-control" name="txtemail"
                                    placeholder="Correo electronico" />
                            </div>
                            <div class="form-group" id="password-group">
                                <input type="password" class="form-control" name="txtpassword"
                                    placeholder="Contraseña" />
                            </div>
                            <button type="submit" name="btnVerificar" class="btn btn-primary"><i
                                    class="fas fa-sign-in-alt"></i> Ingresar</button>
                        </form>
                    </form>
                    <div class="col-12 forgot">
                        <a href="registry.html">Crear cuenta</a>
                    </div>


                </div>

            </div>

        </div>

</body>

</html>