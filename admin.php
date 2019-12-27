<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Sofia Perez Y Santia</title>

	<script src="https://kit.fontawesome.com/2b43fbad9f.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:100|Poiret+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Limelight&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">

</head>
<body>
    <div class="form-style-8">
        <h2>Panel Admin</h2>
        <div id="formulario">
            <?php
                if(isset($_GET['success'])){
                    $success = $_GET["success"];

                    if($success == 0){
                        ?> 
                        <div class="alert alert-danger" style="margin-top:40px" role="alert">
                            <p>Ha ocurrido un error, vuelva a intentarlo</p>
                        </div>
                        <?php
                    }else{
                        ?> 
                        <div class="alert alert-success" style="margin-top:40px" role="alert">
                            <p>Carta de presentacion actualizada con exito</p>
                        </div>
                        <?php
                    }
                }

                include('./inc/conexion.php');
                $conexion=mysqli_connect($server,$userMySQL,$passMySQL,$db) or die("Error de conexion :(");
                
                $query1="SELECT * FROM presentaciones";
                $consulta1= mysqli_query($conexion,$query1);
                $resultado=mysqli_num_rows($consulta1);

                if($resultado == 0){
                    echo "Problema en la base de datos >:C";
                }else{
                    while ($row = $consulta1 -> fetch_row()) { // Si no hay mas filas, la asignacion falla entonces el login da false
                        echo '<form method="POST" action="./admin-presentation.php" style="margin-top: 40px">
                            <h5>Presentación '.$row[0].'</h5>
                            <input type="hidden" name="id" value="'.$row[0].'">
                            <input type="text" placeholder="Titulo" name="titulo" value="'.$row[1].'" required/>
                            <input type="text" placeholder="Parrafo" name="parrafo" value="'.$row[2].'" required/>
                            <input type="submit" value="Actualizar" />
                            </form>';
                    }
                    $consulta1 -> free_result();
                }
            ?>
    </div>
    
</body>
</html>
