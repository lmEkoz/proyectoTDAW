<?php
    $id=$_GET['id'];
    include("conexion.php");

    //delete from alumnos where id=$id
    $sql="DELETE FROM profesores WHERE id='".$id."'";
    $resp=mysqli_query($conexion,$sql);

    if($resp){
        echo "  <script language='JavaScript'>
                    alert('Se elimino correctamente');
                    location.href='';
                </script>
        ";

    }else{
        echo "  <script language='JavaScript'>
                    alert('No se elimino correctamente');
                    location.href='';
                </script>";
    }
?>