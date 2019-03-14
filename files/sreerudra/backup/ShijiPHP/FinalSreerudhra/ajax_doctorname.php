  
  
  
  <select name="doctor" id="doctor" class="form-control">
<option>Select Doctor</option>
<?php
$specialist_id=$_GET['specialist_id'];
$id=$_GET['id'];
require_once("connect.php");
$query_doctor=mysqli_query($con,"select * from doctor where status='0' and specialist='".$specialist_id."'");
if(mysqli_fetch_row($query_doctor)>0){
	$query_doctor=mysqli_query($con,"select * from doctor where status='0' and specialist='".$specialist_id."'");
	while($row_doctor=mysqli_fetch_array($query_doctor)){
		$doctor_id=$row_doctor['doctor_id'];
		if($id==$doctor_id){
		?>
        <option value="<?php echo $row_doctor['doctor_id']; ?>" selected><?php echo $row_doctor['name']; ?></option>
        <?php
		}else{
		?>
        <option value="<?php echo $row_doctor['doctor_id']; ?>"><?php echo $row_doctor['name']; ?></option>
        <?php	
		}
	}
}
?>
</select>

