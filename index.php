<!DOCTYPE html>
<?php include('config/constantes.php'); ?>
<html>
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>UCBL - App</title>
    <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/style_notes.css" />
  <!--<link rel="stylesheet" type="text/css" href="css/animate.css" />-->
</head>
<body>
    <main>
		<section class="screen">
				<?php
				$nomPage = 'includes/contenu.php'; // page par défaut
				if(isset($_GET['page'])) {
					if(file_exists(addslashes($_GET['page'])) && 
					addslashes($_GET['page']) != 'index.php')
						$nomPage = addslashes($_GET['page']);
				}
				include($nomPage); 
			?>
		</section>

    </main>
</body>
</html>
