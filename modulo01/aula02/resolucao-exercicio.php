<style>body {background: #333;}</style>

<form action="" method="post">
	<input name="n1" type="text" placeholder="Numero 1">
	<input name="n2" type="text" placeholder="Numero 2">
	
	<button name="soma">Somar</button>
	<button name="subtracao">Subtrair</button>
	<button name="multiplicacao">Multiplicar</button>
	<button name="divisao">Dividir</button>
</form>

<?php 
	if($_POST) {
		if(isset($_POST['soma'])) {
			echo $_POST['n1'] + $_POST['n2'];
		}
		if(isset($_POST['subtracao'])) {
			echo $_POST['n1'] - $_POST['n2'];
		}
		if(isset($_POST['multiplicacao'])) {
			echo $_POST['n1'] * $_POST['n2'];
		}
		if(isset($_POST['divisao'])) {
			echo $_POST['n1'] / $_POST['n2'];
		}
		echo "<br>";
		// var_dump($_POST);
	}
?>

//rodar no server local php:
//bash: $ php -S localhost:8080