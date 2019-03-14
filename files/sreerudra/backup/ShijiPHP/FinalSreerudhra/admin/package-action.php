	<?php
	$count=0;
	if($_POST['imgval']=='1'){
		require_once("connect.php");
		session_start();
		$heading=$_POST['heading'];	
		$price=$_POST['price'];	
		$specification=$_POST['specification'];
		$images_arr = array();
		if(isset($_FILES['images']['name']) && $_FILES['images']['name']!=''){
			$type =$_FILES['images']['type'];
			$f_type=$type;
			if ($f_type== "image/gif" || $f_type== "image/png" || $f_type== "image/jpeg" || $f_type== "image/JPEG" || $f_type== "image/PNG" || $f_type== "image/GIF")
			{
				$target_dir = "upload/package/";
				$fileName=rand().$_FILES['images']['name'];
				$target_file = $target_dir.$fileName;
				if(move_uploaded_file($_FILES['images']['tmp_name'],$target_file)){
					$images_arr[] = $target_file;
					$imageName=$fileName;
					mysqli_query($con,"INSERT INTO package(heading,price,specification,image) VALUES ('".$heading."', '".$price."', '".$specification."', '".$imageName."')");
				}else{
					$count++;	
				}
			}else{
				$count++;	
			}
			if($count=='0'){
				?>
                <script>
				window.location="package.php?msg=success";
				</script>
                <?php
			}else{
				?>
                <script>
				window.location="package.php?image=<?php echo $count; ?>";
				</script>
                <?php
			}
		}else{
			mysqli_query($con,"INSERT INTO package(heading,price,specification,image) VALUES ('".$heading."', '".$price."', '".$specification."', '')");
				?>
                <script>
				window.location="package.php?msg=success";
				</script>
                <?php
		}
	}else{
		if($_POST['image_form_submit'] == 1){
			$images_arr = array();
			
				$image_name = $_FILES['images']['name'];
				$tmp_name 	= $_FILES['images']['tmp_name'];
				$size 		= $_FILES['images']['size'];
				$type 		= $_FILES['images']['type'];
				$error 		= $_FILES['images']['error'];
		
				$extra_info = getimagesize($_FILES['images']['tmp_name']);
    			$images_arr = "data:" . $extra_info["mime"] . ";base64," . base64_encode(file_get_contents($_FILES['images']['tmp_name']));
			
			//Generate images view
			if(!empty($images_arr)){ $count=1;
			$image_src=$images_arr;
				?>
					<ul class="reorder_ul reorder-photos-list">
						<li id="image_li_<?php echo $count; ?>" class="ui-sortable-handle">
							<a href="javascript:void(0);" style="float:none;" class="image_link"><img src="<?php echo $image_src; ?>" alt=""></a>
						</li>
					</ul>
				<?php 
			}
		}
	}


?>