<?php
    $id=$_GET['id'];
    include("conexion.php");

    //delete from alumnos where id=$id
    $sql="DELETE FROM alumnos WHERE id='".$id."'";
    $resp=mysqli_query($conexion,$sql);

    if($resp){
        echo "  <script language='JavaScript'>
                    alert('Se elimino correctamente');
                    location.href='index.php';
                </script>
        ";

    }else{
        echo "  <script language='JavaScript'>
                    alert('No se elimino correctamente');
                    location.href='index.php';
                </script>";
    }
?>