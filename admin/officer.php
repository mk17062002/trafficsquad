<!DOCTYPE html>
<?php
	require_once 'session.php';
	require_once '../connect.php';
?>

<!--------------------HEAD---------------------->
<?php include'head.php'?>
<!--------------------HEAD---------------------->

<!-------------------SIDEBAR------------------>
<?php include 'sidebar.php'?>
<!-------------------SIDEBAR------------------>

		<div id = "sidecontent" class = "well pull-right">
				<div class = "alert alert-info">Accounts/ officer Administrator</div>
				<button type = "button" id = "add_admin" class = "btn btn-success"><span class = "glyphicon glyphicon-plus"></span> Add Officer</button>
				<button style = "display:none;" type = "button" id = "cancel_admin" class = "btn btn-warning"><span class = "glyphicon glyphicon-hand-right"></span> Cancel</button>
				<br />
				<br />
				<div id = "a_table" class = "panel panel-default">
					<div  class = " panel-heading">	
						<table id = "table" class = "table table-bordered">
							<thead>
								<tr>
									<th>P_ID</th>
									<th>UNAME</th>
									<th>PNAME</th>
									<th>POSTING</th>
									<th>POST_ID</th>
									<th>PHONE NUMBER</th>
									<th>Email</th>
									<th>PASSWORD</th>
									</tr>
							</thead>
							<tbody>
								<?php 
									$a_query = $conn->query("SELECT * FROM `p_info`") or die(mysqli_error());
									while($a_fetch = $a_query->fetch_array()){
										
								?>
								<tr>
								    <td><?php echo $a_fetch['p_id']?></td>
									<td><?php echo $a_fetch['uname']?></td>
									<td><?php echo $a_fetch['pname']?></td>
									<td><?php echo $a_fetch['posting']?></td>
									<td><?php echo $a_fetch['post_id']?></td>
									<td><?php echo $a_fetch['pno']?></td>
									<td><?php echo $a_fetch['email']?></td>
									<td><?php echo $a_fetch['psw']?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>	
				</div>
				<div class = "modal fade" id = "delete_officer" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
					<div class = "modal-dialog" role = "document">
						<div class = "modal-content ">
							<div class = "modal-body">
								<center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
								<br />
								<center><a class = "btn btn-danger delete_admin" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
							</div>
						</div>
					</div>
				</div>
				<div id = "a_form" style = "display:none;" class = "panel panel-default">
					<div  class = " panel-heading" >	
							<div class = "alert alert-success">Accounts/ Officer Administrator/Add new</div>
							<div style = "width:40%; margin-left:32%;">	
								<form method = "POST" action = "add_officer.php">	
									<div class = "form-group">
										<label>P_ID</label>
										<input type = "number" class = "form-control"  name = "p_id"/>
									</div>
									<div class = "form-group">
										<label>Username</label>
										<input type = "text" class = "form-control"  name = "uname"/>
									</div>
									<div class = "form-group">
										<label>Pname</label>
										<input type = "text" class = "form-control"  name = "pname"/>
									</div>
									<div class = "form-group">
										<label>Posting</label>
										<input type = "text" class = "form-control"  name = "posting"/>
									</div>
									<div class = "form-group">
										<label>Post_ID</label>
										<input type = "number" class = "form-control"  name = "post_id"/>
									</div>
									<div class = "form-group">
										<label>Phone Number</label>
										<input type = "number" class = "form-control"  name = "pno"/>
									</div>
									<div class = "form-group">
										<label>Email</label>
										<input type = "text" class = "form-control"  name = "email"/>
									</div>
									<div class = "form-group">
										<label>Password</label>
										<input type = "password" class = "form-control"  name = "psw"/>
									</div>
									<div class = "form-group">
										<button class = "btn btn-primary form-control" name = "save_officer"><span class = "glyphicon glyphicon-save"></span> Save</button>
									</div>
								</form>	
							</div>	
					</div>
				</div>
		</div>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<?php include'chicredit.php';?>
</body>	
<script src = "../js/jquery-3.1.1.js"></script>
<script src = "../js/sidebar.js"></script>
<script src = "../js/jquery.dataTables.min.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/script.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	});
</script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('.officer_id').on('click', function(){
			$officer_id = $(this).attr('name');
			$('.delete_officer').on('click', function(){
				window.location = 'delete_officer.php?officer_id=' + $officer_id;
			});
		});
	});
</script>
</html>