
                                          
                                       
                                        
<label class="col-md-4 control-label" for="selectbasic">Select Doctor</label>
   <div class="col-lg-4" id="resultname">
  <select name="doctor" id="doctor" class="form-control" onChange="return getBook();">
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
 </div><br />
<br />

 <div class="col-lg-12" style="margin-top: 26px;">
<div class="table-responsive">      
<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Qualification</th>
        <th>Gender</th>
        <th>Consulting Time</th>
        <th>Fee</th>
      </tr>
    </thead>
    <tbody>
      <?php
      require_once("connect.php");
	  $query=mysqli_query($con,"select * from doctor where status='0' and specialist='".$specialist_id."'");
	  if(mysqli_fetch_row($query)>0){
		  $i=0;
		  $query=mysqli_query($con,"select * from doctor where status='0' and specialist='".$specialist_id."'");
		  while($row=mysqli_fetch_array($query)){
			  $i++;
	  ?>
      <tr onclick="getName('<?php echo $row['doctor_id']; ?>');">
        <td><?php echo $i; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['qualification']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['consult_from']; ?><?php echo "-&nbsp;"; echo $row['consult_to']; ?></td>
        <td><?php echo $row['fee']; ?></td>
      </tr>
      <?php
		  }
	  }
	  ?>
    </tbody>
  </table>

</div>

</div>