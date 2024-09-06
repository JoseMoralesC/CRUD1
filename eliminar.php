<?php 
    $id=$_GET['id'];
    include("conexion.php");
    
    //delete from alumnos where id=$id
    $sql="delete from alumnos where id='".$id."'";
    $resultado=mysqli_query($conexion,$sql);

    if($resultado){
        echo "<script language='JavaScript'>
                alert('Los datos se eliminaron correctamente de la BD');
                location.assign('index.php');
                </script>";    
    }else{
        echo "<script language='JavaScript'>
                alert('Los datos NO se eliminaron de la BD');
                location.assign('index.php');
                </script>"; 

    }


?>
