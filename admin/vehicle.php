<!DOCTYPE html>
<?php
	require_once 'session.php';
	require_once '../connect.php';
?>
<!--------------------HEAD---------------------->
<?php include'head.php'?>
<!--------------------HEAD---------------------->

<!-------------------SIDEBAR0------------------>
<?php include 'sidebar.php'?>
<!-------------------SIDEBAR0------------------>

		<div id = "sidecontent" class = "well pull-right">
				<br />
				<br />
				<div id = "s_table" class = "panel panel-default">
					<div  class = " panel-heading">	
						<table id = "table" class = "table table-bordered">
							<thead>
								<tr>
									<th>vid</th>
									<th>uid</th>
									<th>vname</th>
									<th>vhno</th>
									<th>vtype</th>
									<th>vmoel</th>
									<th>pid</th>
									<th>ccost</th>
									<th>date</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$s_query = $conn->query("SELECT * FROM `vehicle_detail`") or die(mysqli_error($conn));
									while($s_fetch = $s_query->fetch_array()){	
								?>
								<tr>
									<td><?php echo $s_fetch['vid']?></td>
									<td><?php echo $s_fetch['uid']?></td>
									<td><?php echo $s_fetch['vname']?></td>
									<td><?php echo $s_fetch['vhno']?></td>
									<td><?php echo $s_fetch['vtype']?></td>
									<td><?php echo $s_fetch['vmodel']?></td>
									<td><?php echo $s_fetch['pid']?></td>
									<td><?php echo $s_fetch['ccost']?></td>
									<td><?php echo $s_fetch['date']?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>	
				</div>
				<div class = "modal fade" id = "delete_student" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
					<div class = "modal-dialog" role = "document">
						<div class = "modal-content ">
							<div class = "modal-body">
								<center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
								<br />
								<center><a class = "btn btn-danger delete_student" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
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
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.min.js"></script>
<script src = "../js/script.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	});
</script>
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#pic')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200)
						.css('display', 'block');
					$('.pic_hide').hide();
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        // valid!
        function character1Only(input){
	var regex = /[^a-z']/gi;
	input.value = input.value.replace(regex,"");
}
</script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('.id').on('click', function(){
			$id = $(this).attr('name');
			$('.delete_student').on('click', function(){
				window.location = 'delete_student.php?id=' + $id;
			});
		});
	});
</script>
</html>