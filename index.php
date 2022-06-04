<?php
    include 'login/validaLogin.php';
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Páginal Inicial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<?php
						echo "Usuario: ", $_SESSION['usuario'].PHP_EOL;
						echo "Perfil: ", $_SESSION['perfil'].PHP_EOL;
					?>
				</div>
			</div>
		      	</div>
		      		<div class="form-group" id="butao">
		      			<?php
						  include 'view/menu.php';
						  ?>
		      		</div>
	            <div class="form-group">
				<a href="controller/logoffControler.php" class="btn btn-primary rounded submit p-3 px-5">Logout</a>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

