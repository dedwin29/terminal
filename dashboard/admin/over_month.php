﻿
<?php
require '../../include/db_conn.php';
page_protect();

if (isset($_POST['from'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Platea21's Gym</title>
    <link rel="stylesheet" href="../../neon/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
    <link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
    <link rel="stylesheet" href="../../neon/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
    <link rel="stylesheet" href="../../neon/css/neon.css"  id="style-resource-5">
    <link rel="stylesheet" href="../../neon/css/custom.css"  id="style-resource-6">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="../../css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="../../css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="../../css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- dataTables -->
	<link rel="stylesheet" href="../../css/plugins/datatable/TableTools.css">
	<!-- chosen -->
	<link rel="stylesheet" href="../../css/plugins/chosen/chosen.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="../../css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="../../css/themes.css">

	<!-- jQuery -->
	<script src="../../js/jquery.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<!-- slimScroll -->
	<script src="../../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="../../js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="../../js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- dataTables -->
	<script src="../../js/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="../../js/plugins/datatable/TableTools.min.js"></script>
	<script src="../../js/plugins/datatable/ColReorder.min.js"></script>
	<script src="../../js/plugins/datatable/ColVis.min.js"></script>
	<!-- Chosen -->
	<script src="../../js/plugins/chosen/chosen.jquery.min.js"></script>

	<!-- Theme framework -->
	<script src="../../js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="../../js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="../../js/demonstration.min.js"></script>
</head>
    <body class="page-body  page-fade">

    	<div class="page-container">

		<div class="sidebar-menu">

			<header class="logo-env">

			<!-- logo -->
			<div class="logo">
				<a href="main.php">
					<img src="../../img/logo.png" alt="" width="192" height="80" />
				</a>
			</div>

					<!-- logo collapse icon -->
					<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>


			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>

			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">

				<div class="row">

					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">

					</div>


					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">

						<ul class="list-inline links-list pull-right">

							<li>Bienvenido <?php echo $_SESSION['full_name']; ?>
							</li>

							<li>
								<a href="logout.php">
									Cerrar Sesión<i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>

					</div>

				</div>

		<h3>Miembros</h3>

		<hr / >

		<?php
		    $from = $_POST['from'];
		    $to   = $_POST['to'];
		?>

		Miembros de :

		<?php
		    echo $from;
		?>   A : <?php
		    echo $to;
		?>

		<table class="table table-bordered datatable" id="table-1">
				<thead>
					<tr>
						<th>S.No</th>
						<th>ID Membresia</th>
						<th>Nombre</th>
						<th>Edad / Sexo</th>
						<th>Inscripcion</th>
					</tr>
				</thead>
				<tbody>
				<?php
				    $query  = "select * from user_data WHERE joining BETWEEN '$from' AND '$to'";
				    //echo $query;
				    $result = mysqli_query($con, $query);
				    $sno    = 1;

				    if (mysqli_affected_rows($con) != 0) {
				        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {



				            echo "<tr><td>" . $sno . "</td>";
				            echo "<td>" . $row['newid'] . "</td>";
				            echo "<td>" . $row['name'] . "</td>";
				            echo "<td>" . $row['age'] . " / " . $row['sex'] . "</td>";
				            echo "<td>" . $row['joining'] . "</td>";

				            $sno++;

				        }


				    }

				?>
				</tbody>
			</table>

			<h4>Total Members in This Date Range :<?php echo $sno - 1; ?></h4>

			<?php
				    $from = $_POST['from'];
				    $to   = $_POST['to'];
			?>

			Pagos de Miembros de:<?php
				    echo $from;
				?>   A : <?php
				    echo $to;
			?>

			<table class="table table-bordered datatable" id="table-1">
				<thead>
					<tr>
						<th>S.No</th>
						<th>ID Membresia</th>
						<th>Nombre</th>
						<th>Edad / Sexo</th>
						<th>Inscripcion</th>
					</tr>
				</thead>
				<tbody>
					<?php


					    $query  = "select * from subsciption WHERE paid_date BETWEEN '$from' AND '$to'";
					    //echo $query;
					    $result = mysqli_query($con, $query);
					    $sno    = 1;
					    $total  = 0;
					    if (mysqli_affected_rows($con) != 0) {
					        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {



					            echo "<tr><td>" . $sno . "</td>";
					            echo "<td>" . $row['mem_id'] . "</td>";
					            echo "<td>" . $row['name'] . "</td>";
					            echo "<td>" . $row['total'] . " / " . $row['paid'] . "</td>";
					            echo "<td>" . $row['expiry'] . "</td>";
					            echo "<td>" . $row['paid_date'] . "</td>";
					            echo "<td>" . $row['invoice'] . "</td>";
					            $total = $total + $row['total'];
					            $sno++;

					        }


					    }

					?>
				</tbody>
			</table>


				<h4>Total Payments in This Date Range :<?php echo $sno - 1; ?></h4>
				<h4>Total Income in This Date Range :<?php echo $total;?></h4>

				<?php include('footer.php'); ?>
    	</div>

    <script src="../../neon/js/gsap/main-gsap.js" id="script-resource-1"></script>
    <script src="../../neon/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
    <script src="../../neon/js/bootstrap.min.js" id="script-resource-3"></script>
    <script src="../../neon/js/joinable.js" id="script-resource-4"></script>
    <script src="../../neon/js/resizeable.js" id="script-resource-5"></script>
    <script src="../../neon/js/neon-api.js" id="script-resource-6"></script>
    <script src="../../neon/js/jquery.validate.min.js" id="script-resource-7"></script>
    <script src="../../neon/js/neon-login.js" id="script-resource-8"></script>
    <script src="../../neon/js/neon-custom.js" id="script-resource-9"></script>
    <script src="../../neon/js/neon-demo.js" id="script-resource-10"></script>

	<link rel="stylesheet" href="../../neon/js/select2/select2-bootstrap.css"  id="style-resource-1">
	<link rel="stylesheet" href="../../neon/js/select2/select2.css"  id="style-resource-2">

	<script src="../../neon/js/jquery.dataTables.min.js" id="script-resource-7"></script>
	<script src="../../neon/js/dataTables.bootstrap.js" id="script-resource-8"></script>
	<script src="../../neon/js/select2/select2.min.js" id="script-resource-9"></script>

	<script src="../../neon/js/bootstrap-datepicker.js" id="script-resource-11"></script>



        <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
    </script>
    </body>
</html>

<?php
}

?>
