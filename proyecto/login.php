<!DOCTYPE html>
<html lang=es>
<head>
  <title>contador</title>
  <meta "UTF-8">
</head>
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Arial";
  }
  body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url("https://th.bing.com/th/id/R.6a2d5fd937f7e2eb4d296135aee97a01?rik=D9tnYXf2pw7alA&riu=http%3a%2f%2fwww.electronicsandyou.com%2fblog%2fwp-content%2fuploads%2f2013%2f11%2felectronic-circuit-1.jpg&ehk=LEC%2fSJ9jn5XuHEigekA5SannPlH8lYQop9MzIXM0%2fvI%3d&risl=&pid=ImgRaw&r=0") no-repeat; 
    background-size: cover;
    background-position: center;
  }
  .wrapper{
    width: 420px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(3rem);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: #fff;
    border-radius: 10px;
    padding: 30px 40px;
  }
  .wrapper h1{
    font-size: 36px;
    text-align: center;
  }
  .wrapper .input-box{
    width: 100%;
  }
  .input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255,255,255,.2);
    border-radius: 40px;
    font-size: 16px;
    color: #fff;
    padding: 20px 45px 20px 20px;
  }
  .input-box input::placeholder{
    color: #fff;
  }
  .input-box i{
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
  }
  .input-box #user{
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
  }
  .input-box #pass{
    position: relative;
    width: 60%;
    height: 50px;
    margin: 30px 0;
  }
  .input-box #type{
    width: 30%;
    height: 50px;
    margin: 30px 0;
  }
  .wrapper .remember-forgot{
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
  }
  .remember-forgot label input{
    accent-color: #fff;
    margin-right: 3px;
  }
  .remember-forgot a{
    color: #fff;
    text-decoration: none;
  }
  .remember-forgot a:hover{
    text-decoration: underline;
  }
  .wrapper .btn{
    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color:#333;
    font-weigth:600;
  }

  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
      /* display: none; <- Crashes Chrome on hover */
      -webkit-appearance: none;
      margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
  }

  input[type=number] {
      -moz-appearance:textfield; /* Firefox */
  }
  
</style>
<body>

  <?php
    if(isset($_POST['enviar'])){  
      
      if(empty($_POST['boleta'])||empty($_POST['password'])){
        echo "  <script language='JavaScript'>
                    alert('No se inserto correctamente');
                    location.href='login.php';
                </script>";
      }else{
        include("conexion.php");

        $boleta=$_POST['boleta'];
        $pass=$_POST['password'];
        $tipo=$_POST['tipo'];

        if($tipo==0){
          $sql="SELECT * FROM administrador WHERE boleta='".$boleta."' AND pass='".$pass."'";
          $resp=mysqli_query($conexion,$sql);

          if($row=mysqli_fetch_assoc($resp)){
            echo "  <script language='JavaScript'>
                        alert('Se inserto correctamente');
                        location.href='principal.php';
                    </script>";
          }else{
            echo "  <script language='JavaScript'>
                        alert('No se inserto correctamente');
                        location.href='login.php';
                    </script>";
          }
        }else if($tipo==1){
          $sql="SELECT * FROM profesores WHERE boleta='".$boleta."' AND pass='".$pass."'";
          $resp=mysqli_query($conexion,$sql);

          if($row=mysqli_fetch_assoc($resp)){
            echo "  <script language='JavaScript'>
                        alert('Se inserto correctamente');
                        location.href='index.php';
                    </script>";
          }else{
            echo "  <script language='JavaScript'>
                        alert('No se inserto correctamente');
                        location.href='login.php';
                    </script>";
          }
        }else if($tipo==2){
          $sql="SELECT * FROM alumnos WHERE boleta='".$boleta."' AND pass='".$pass."'";
          $resp=mysqli_query($conexion,$sql);

          if($row=mysqli_fetch_assoc($resp)){
            echo "  <script language='JavaScript'>
                        alert('Se inserto correctamente');
                        location.href='contenido.php';
                    </script>";
          }else{
            echo "  <script language='JavaScript'>
                        alert('No se inserto correctamente');
                        location.href='login.php';
                    </script>";
          }
        }
      }
    }
    else{
  ?>

  <div class="wrapper">
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <h1>Login</h1>
      <div class="input-box">
          <input type="text" name="boleta" placeholder="Boleta" id="user" required>
          <i class='bx bxs-user'></i>
      </div>
      <div class="input-box pass">
          <input type="password" name="password" placeholder="Password" id="pass" required>
          <input type="number" name="tipo" min=0 max=2  placeholder="Tipo" title="Tipo de usuario 0-2" id="type" required>
          <i class='bx bx-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
          <label><input type="checkbox" Remember me></label>
          <a href="#">Forgot password</a>
      </div>
      <button type="submit" name="enviar" class="btn">Acceder</button>
    </form>
  </div>
<?php
  }
?>
</body>
</html>