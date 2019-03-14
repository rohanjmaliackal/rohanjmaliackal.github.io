<select name="doctor" class="form-control">
<option>Select Doctor</option>
<?php
$specialist_id=$_GET['specialist_id'];
require_once("connect.php");
$query_doctor=mysqli_query($con,"select * from doctor where status='0' and specialist='".$specialist_id."'");
if(mysqli_fetch_row($query_doctor)>0){
	$query_doctor=mysqli_query($con,"select * from doctor where status='0' and specialist='".$specialist_id."'");
	while($row_doctor=mysqli_fetch_array($query_doctor)){
		?>
        <option value="<?php echo $row_doctor['doctor_id']; ?>"><?php echo $row_doctor['name']; ?></option>
        <?php
	}
}
?>
</select>