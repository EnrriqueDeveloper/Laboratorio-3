<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Resultados de la calculadora</h2>
        <?php
// Verificar si se envió el formulario
if(isset($_POST['num1']) && isset($_POST['num2'])){
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];

	// Verificar que el segundo número no sea cero
	if($num2 != 0){
		// Verificar si el primer número es mayor que el segundo
		if($num1 > $num2){
			$suma = $num1 + $num2;
			$diferencia = $num1 - $num2;
			echo '<div class="mt-4">';
			echo '<div class="alert alert-success">';
			echo '<p>La suma de los dos números es: '.$suma.'</p>';
			echo '<p>La diferencia de los dos números es: '.$diferencia.'</p>';
			echo '</div>';
		}else{
			$producto = $num1 * $num2;
			$division = $num1 / $num2;
			echo '<div class="mt-4">';
			echo '<div class="alert alert-success">';
			echo '<p>El producto de los dos números es: '.$producto.'</p>';
			echo '<p>La división del primer número respecto al segundo es: '.$division.'</p>';
			echo '</div>';
		}
	}else{
		echo '<div class="alert alert-danger mt-4" role="alert">El segundo número no puede ser cero</div>';
	}
}
?>

    </div>


    <!-- Importar jQuery y Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>