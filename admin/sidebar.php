<div id = "sidebar">
	<ul id = "menu" class = "nav menu">
		<li>
			<a>
				<?php 
					require_once '../connect.php';
					$q_admin_side = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
					$f_admin_side = $q_admin_side->fetch_array();
					echo "<center>".$f_admin_side['name']."</center>";
				?>
			</a>
		</li>
		<li><a href = "home.php"><i class = "glyphicon glyphicon-home"></i> Home</a></li>
		<li><a href = "admin.php"><i class = "glyphicon glyphicon-user"></i> Administrator</a></li>
		<li><a href = "offenders.php"><i class = "glyphicon glyphicon-user"></i> Offender</a></li>
		<li><a href = "vehicle.php"><i class = "glyphicon glyphicon-user"></i> Vehicle</a></li>
		<li><a href = "officer.php"><i class = "glyphicon glyphicon-user"></i> Officer users</a></li>
		<li><a href = "locations_list.php"><i class = "glyphicon glyphicon-list"></i>Add locations</a></li>
		<li><a href = ""><i class = "glyphicon glyphicon-cog"></i> Options</a>
			<ul>
				<li><a href = "logout.php"><i class = "glyphicon glyphicon-log-out"></i> Logout</a></li>
			</ul>
		</li>
	</ul>
</div>