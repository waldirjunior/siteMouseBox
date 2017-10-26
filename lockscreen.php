<?php
	ob_start();
	session_start();
	
	// it will never let you open index(login) page if session is set
	if (isset($_GET['logout'])) {
		unset($_SESSION['site']);
		session_unset();
		session_destroy();
	}
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: index.php");
		exit;
	}
	$error = false;

	if( isset($_POST['btn-login']) ) {

		$senha = trim($_POST['senha']);
		$senha = strip_tags($senha);
		$senha = htmlspecialchars($senha);

		if(empty($senha)){
			$error = true;
			$passError = "Digite alguma senha!.";
		}


		if (!$error) {


			if( $senha == "121094") {
				$_SESSION['site'] = "Foi";
				header("Location: index.php");
			} else {
				$errMSG = "Senha Incorreta!...";
			}

		}

	}
?>




<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="utf-8" />
	<title>MouseBox - LockScreen</title>
	<?php include $_SERVER['DOCUMENT_ROOT']."/topo/metatopo.php"; ?>
	<!-- BEGIN CORE CSS FRAMEWORK -->
	<link href="comuns/lockscreen/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="comuns/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="comuns/lockscreen/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
	<link href="comuns/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="comuns/lockscreen/css/animate.min.css" rel="stylesheet" type="text/css"/>
	<!-- END CORE CSS FRAMEWORK -->
	<!-- BEGIN CSS TEMPLATE -->
	<link href="comuns/lockscreen/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="comuns/lockscreen/css/responsive.css" rel="stylesheet" type="text/css"/>
	<link href="comuns/lockscreen/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
	<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="error-body no-top">
<div class="container">
  <div class="lockscreen-wrapper animated  flipInX">
  <div class="row ">
    <div class="col-md-8 col-md-offset-4 col-sm-6 col-sm-offset-4 col-xs-offset-2">
		<div class="profile-wrapper"> 
			<img width="69" height="69" data-src-retina="comuns/img/logo-caixa.png" data-src="comuns/img/logo-caixa.png" src="comuns/img/logo-caixa.png" alt=""> 
		</div>
		<form class="user-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<h2 class="user">Mouse<span class="semi-bold">Box</span></h2>
			<input type="password" name="senha" placeholder="Senha" >
			<button type="submit" name="btn-login" class="btn btn-primary "><i class="fa fa-unlock"></i></button>
		</form>
				<?php
			if ( isset($passError) ) {
				
		?>
		<span class="text-danger"><?php echo $passError; ?></span>
		 <?php
			}
		?>
		<?php
			if ( isset($errMSG) ) {
				
		?>
		<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>

	     <?php
			}
		?>
    </div>
   </div>
  </div>
  <div id="push"></div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
	<script src="comuns/lockscreen/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="comuns/lockscreen/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="comuns/lockscreen/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
	<script src="comuns/lockscreen/plugins/pace/pace.min.js" type="text/javascript"></script>

	<script type="text/javascript">
		$(document).ready(function() {	
			$("img").unveil();
		});	
	</script>
<!-- BEGIN CORE TEMPLATE JS -->
<!-- END CORE TEMPLATE JS -->
</body>
</html>
<?php ob_end_flush(); ?>