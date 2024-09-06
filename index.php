<html>
<head>
    <title>Lista de Alumnos</title>
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Estas seguro?, se eliminarán los datos');
        }
    </script>
    <link rel="stylesheet" type="text/css" href="stilos.css">    
</head>
<body>

<?php
    include("conexion.php");
    //select * from alumnos
    $sql="select * from alumnos";
    $resultado=mysqli_query($conexion,$sql);
?>

    <h1>Lista de Alumnos</h1>
    <a href="agregar.php">Nuevo Alumno</a><br><br>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nombre</th>
                <th>No. Control</th>
                <th>Aciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($filas=mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
                <td> <?php echo $filas['Id'] ?> </td>
                <td> <?php echo $filas['nombre'] ?> </td>
                <td> <?php echo $filas['nocontrol'] ?> </td>
                <td>
<?php echo "<a href='editar.php?id=".$filas['Id']."'>EDITAR</a>"; ?> 
                     -
<?php echo "<a href='eliminar.php?id=".$filas['Id']."'onclick='return confirmar()'>ELIMINAR</a>" ?> 
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <?php
        mysqli_close($conexion);
    ?>
</body>
</html>