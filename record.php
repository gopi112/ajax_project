<?php

include_once('config.php');
$user_fun = new Userfunction();
$counter = 1;

if(isset($_POST['keyword']) && !empty(trim($_POST['keyword']))){

	$keyword = $user_fun->htmlvalidation($_POST['keyword']);

	$match_field['u_name'] = $keyword;
	$match_field['u_email'] = $keyword;
	$select = $user_fun->search("user", $match_field, "OR");

}
else{

	$select = $user_fun->select("user");

}


?>

				<table class="table" style="vertical-align: middle; text-align: center;">
				  <thead class="thead-dark">
					<tr>
					  	<th scope="col">#</th>
					  	<th scope="col">F.Name</th>
							<th scope="col">l.Name</th>
					  	<th scope="col">Email</th>
							<th scope="col">Mobile.No</th>
							<th scope="col">Address1</th>
							<th scope="col">Address2</th>
							<th scope="col">City</th>
							<th scope="col">State</th>
							<th scope="col">Country</th>
							<th scope="col">Pincode</th>
							<th scope="col">Action</th>
					</tr>
				  </thead>
				  <tbody>
				  	<?php if($select){ foreach($select as $se_data){ ?>
					<tr>
					  <th scope="row"><?php echo $counter; $counter++; ?></th>
					  	<td><?php echo $se_data['u_name']; ?></td>
							<td><?php echo $se_data['u_lname']; ?></td>
					  	<td><?php echo $se_data['u_email']; ?></td>
							<td><?php echo $se_data['u_mobile']; ?></td>
							<td><?php echo $se_data['u_address1']; ?></td>
							<td><?php echo $se_data['u_address2']; ?></td>
							<td><?php echo $se_data['u_city']; ?></td>
							<td><?php echo $se_data['u_state']; ?></td>
					  	<td><?php echo $se_data['u_country']; ?></td>
							<td><?php echo $se_data['u_pin']; ?></td>

						<td>
							<button type="button" class="btn btn-danger editdata" data-dataid="<?php echo $se_data['u_id']; ?>" data-toggle="modal" data-target="#updateModalCenter">Update</button>
							<button type="button" class="btn btn-danger deletedata" data-dataid="<?php echo $se_data['u_id']; ?>" data-toggle="modal" data-target="#deleteModalCenter">Delete</button>
						</td>
					</tr>
					<?php }}else{ echo "<tr><td colspan='7'><h2>No Result Found</h2></td></tr>"; } ?>
				  </tbody>
				</table>
