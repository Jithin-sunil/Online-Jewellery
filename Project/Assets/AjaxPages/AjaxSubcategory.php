 <option>
--select--</option>
 <?php
 include('../Connection/Connection.php');
	  $sel="select * from tbl_subcategory where category_id='".$_GET['did']."'";
	  $row=$con->query($sel);
	  while($data=$row->fetch_assoc())
	  {
		  ?>
          <option value="<?php echo $data['subcategory_id']
		  ?>">
         <?php echo $data['subcategory_name']
		  ?></option>
          <?php
	  }
	  ?>