<?php

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Ajax Insert || Update || Delete</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		.box-title{
			border-radius: 5px;
			box-shadow: 0px 0px 3px 1px gray;
			padding: 10px 0px;
		}
		.error-msg{
			color: #dc3545;
			font-weight: 600;
		}
		.success-msg{
			color: green;
			font-weight: 600;
		}
	</style>
</head>

<body>

	<div class="container-fluid">
		<div class="container">
			<div class="row m-3 text-center">
				<div class="col-lg-12">
					<h1 class="box-title">Ajax Insert || Update || Delete</h1>
				</div>
			</div>
			<div  class="row justify-content-center">
				<div class="col-lg-6">
				<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >Add Record</button>
				</div>
				<div class="col-lg-6">
					<input type="text" id="search" class="form-control" placeholder="Search Now">
				</div>
			</div>
			<div class="row mt-5" id="tbl_rec">

			</div>
		</div>
	</div>

<!-- Insert Design Modal -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="ins_rec">
	      <div class="modal-body">

			  	<div class="form-group">
					<label><b>First Name</b></label>
					<input type="text" name="firstname" class="form-control" placeholder="firstname">
					<span class="error-msg" id="msg_1"></span>
			  	</div>

					<div class="form-group">
					<label><b>Last Name</b></label>
					<input type="text" name="lastname" class="form-control" placeholder="lastname">
					<span class="error-msg" id="msg_11"></span>
			  	</div>

					<div class="form-group">
					<label><b>Email</b></label>
					<input type="text" name="email" class="form-control" placeholder="YourEmail@email.com">
					<span class="error-msg" id="msg_2"></span>
			  	</div>

					<div class="form-group">
					<label><b>Mobile</b></label>
					<input type="text" name="mobile" class="form-control" placeholder="mobile">
					<span class="error-msg" id="msg_12"></span>
					</div>

					<div class="form-group">
					<label><b>Address 1</b></label>
					<input type="text" name="address1" class="form-control" placeholder="address1">
					<span class="error-msg" id="msg_13"></span>
					</div>

					<div class="form-group">
					<label><b>Address 2</b></label>
					<input type="text" name="address2" class="form-control" placeholder="address2">
					<span class="error-msg" id="msg_14"></span>
					</div>

					<div class="form-group">
					<label><b>City</b></label>
					<input type="text" name="city" class="form-control" placeholder="city">
					<span class="error-msg" id="msg_15"></span>
					</div>

					<div class="form-group">
					<label><b>State</b></label>
					<input type="text" name="state" class="form-control" placeholder="State">
					<span class="error-msg" id="msg_16"></span>
					</div>

					<div class="form-group">
					<label><b>Pincode</b></label>
					<input type="text" name="pincode" class="form-control" placeholder="Pincode">
					<span class="error-msg" id="msg_17"></span>
					</div>


				<div class="form-group">
					<label><b>Country</b></label>
					<select class="custom-select" name="country" id="country">
						<option value="" selected>Choose...</option>
						<option value="USA">USA</option>
						<option value="Germany">Germany</option>
						<option value="UK">UK</option>
					</select>
					<span class="error-msg" id="msg_3"></span>
			  	</div>

				<div class="form-group">
					<span class="success-msg" id="sc_msg"></span>
				</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" id="close_click" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary" >Add Record</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- End Insert Modal -->

<!-- Update Design Modal -->

<div class="modal fade" id="updateModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalCenterTitle">Update Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="updata">
      <div class="modal-body">

		  	<div class="form-group">
				<label><b>First Name</b></label>
				<input type="text" class="form-control" name="firstname" id="upd_1" placeholder="firstname">
				<span class="error-msg" id="umsg_1"></span>
		  	</div>

				<div class="form-group">
				<label><b>First Name</b></label>
				<input type="text" class="form-control" name="lastname" id="upd_11" placeholder="lastname">
				<span class="error-msg" id="umsg_11"></span>
		  	</div>

				<div class="form-group">
				<label><b>Email</b></label>
				<input type="text" class="form-control" name="email" id="upd_2" placeholder="YourEmail@email.com">
				<span class="error-msg" id="umsg_2"></span>
				</div>

				<div class="form-group">
				<label><b>Mobile</b></label>
				<input type="text" class="form-control" name="mobile" id="upd_12" placeholder="mobile">
				<span class="error-msg" id="umsg_12"></span>
				</div>

				<div class="form-group">
				<label><b>Address 1</b></label>
				<input type="text" class="form-control" name="address1" id="upd_13" placeholder="address2">
				<span class="error-msg" id="umsg_13"></span>
				</div>

				<div class="form-group">
				<label><b>Address 2</b></label>
				<input type="text" class="form-control" name="address2" id="upd_14" placeholder="address2">
				<span class="error-msg" id="umsg_14"></span>
				</div>

				<div class="form-group">
				<label><b>City</b></label>
				<input type="text" class="form-control" name="city" id="upd_15" placeholder="City">
				<span class="error-msg" id="umsg_15"></span>
				</div>

				<div class="form-group">
				<label><b>State</b></label>
				<input type="text" class="form-control" name="state" id="upd_16" placeholder="State">
				<span class="error-msg" id="umsg_16"></span>
				</div>

				<div class="form-group">
				<label><b>Pincode</b></label>
				<input type="text" class="form-control" name="pincode" id="upd_17" placeholder="Pincode">
				<span class="error-msg" id="umsg_17"></span>
				</div>





			<div class="form-group">
				<label><b>Country</b></label>
				<select class="custom-select" id="upd_3" name="country">
					<option value="" selected>Choose...</option>
					<option value="USA">USA</option>
					<option value="Germany">Germany</option>
					<option value="UK">UK</option>
				</select>
				<span class="error-msg" id="umsg_3"></span>
		  	</div>


			<div class="form-group">
				<input type="hidden" name="dataval" id="upd_7">
				<span class="success-msg" id="umsg_6"></span>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="up_cancle">Cancle</button>
        <button type="submit" class="btn btn-primary">Update Record</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- End Update Design Modal -->

<!-- Delete Design Modal -->

<div class="modal fade" id="deleteModalCenter" tabindex="-1" role="dialog" aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalCenterTitle">Are You Sure Delete This Record ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <p>If You Click On Delete Button Record Will Be Deleted. We Don't have Backup So Be Carefull.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="de_cancle" data-dismiss="modal">Cancle</button>
        <button type="button" class="btn btn-primary" id="deleterec">Delete Now</button>
      </div>
    </div>
  </div>
</div>

<!-- End Delete Design Modal -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" type="text/javascript"></script>


<script type="text/javascript">

$(document).ready(function (){
	$('#tbl_rec').load('record.php');

	$('#search').keyup(function (){
		var search_data = $(this).val();
		$('#tbl_rec').load('record.php', {keyword:search_data});
	});

	//insert Record

	$('#ins_rec').on("submit", function(e){
		e.preventDefault();
		$.ajax({

			type:'POST',
			url:'insprocess.php',
			data:$(this).serialize(),
			success:function(vardata){

				var json = JSON.parse(vardata);

				if(json.status == 101){
					console.log(json.msg);
					$('#tbl_rec').load('record.php');
					$('#ins_rec').trigger('reset');
					$('#close_click').trigger('click');
				}
				else if(json.status == 102){
					$('#sc_msg').text(json.msg);
					console.log(json.msg);
				}

				//firstname
				else if(json.status == 103){
					$('#msg_1').text(json.msg);
					console.log(json.msg);
				}

				//email
				else if(json.status == 104){
					$('#msg_2').text(json.msg);
					console.log(json.msg);
				}

				//country
				else if(json.status == 105){
					$('#msg_3').text(json.msg);
					console.log(json.msg);
				}
				//lastname
				else if(json.status == 110){
					$('#msg_11').text(json.msg);
					console.log(json.msg);
				}
				//mobile
				else if(json.status == 111){
					$('#msg_12').text(json.msg);
					console.log(json.msg);
				}
				//address1

				else if(json.status == 112){
					$('#msg_13').text(json.msg);
					console.log(json.msg);
				}

				//address2
				  else if(json.status == 113){
					$('#msg_14').text(json.msg);
					console.log(json.msg);
				}
				//city
				else if(json.status == 114){
					$('#msg_15').text(json.msg);
					console.log(json.msg);
				}
				//state
				else if(json.status == 115){
					$('#msg_16').text(json.msg);
					console.log(json.msg);
				}

				//pincode
				else if(json.status == 116){
					$('#msg_17').text(json.msg);
					console.log(json.msg);
				}








				else{
					console.log(json.msg);
				}

			}

		});

	});

	//select data

	$(document).on("click", "button.editdata", function(){
		$('#umsg_1').text("");
		$('#umsg_2').text("");
		$('#umsg_3').text("");//firstname
	  $('#umsg_7').text("");
		$('#umsg_8').text("");
		$('#umsg_9').text("");
		$('#umsg_10').text("");
		$('#umsg_11').text("");//lastname
		$('#umsg_12').text("");//mobile
		$('#umsg_13').text("");//address1
		$('#umsg_14').text("");//address2
		$('#umsg_15').text("");//city
		$('#umsg_16').text("");//state
		$('#umsg_17').text("");//pincode

		var check_id = $(this).data('dataid');
		$.getJSON("updateprocess.php", {checkid : check_id}, function(json){
			if(json.status == 0){
				$('#upd_1').val(json.firstname);
				$('#upd_11').val(json.lastname);
				$('#upd_2').val(json.email);
				$('#upd_12').val(json.mobile);
				$('#upd_13').val(json.address1);
				$('#upd_14').val(json.address2);
				$('#upd_15').val(json.city);
				$('#upd_16').val(json.state);
				$('#upd_17').val(json.pin);
				$('#upd_3').val(json.country);
				$('#upd_7').val(check_id);

			}
			else{
				console.log(json.msg);
			}
		});
	});

	//Update Record

	$('#updata').on("submit", function(e){
		e.preventDefault();

		$.ajax({

			type:'POST',
			url:'updateprocess2.php',
			data:$(this).serialize(),
			success:function(vardata){

				var json = JSON.parse(vardata);

				if(json.status == 101){
					console.log(json.msg);
					$('#tbl_rec').load('record.php');
					$('#ins_rec').trigger('reset');
					$('#up_cancle').trigger('click');
				}
				//firstname
				else if(json.status == 103){
					$('#umsg_1').text(json.msg);
					console.log(json.msg);
				}
				//lastname
				else if(json.status == 110){
					$('#umsg_11').text(json.msg);
					console.log(json.msg);
				}
				//email
				else if(json.status == 104){
					$('#umsg_2').text(json.msg);
					console.log(json.msg);
				}

				//country
				else if(json.status == 105){
					$('#umsg_3').text(json.msg);
					console.log(json.msg);
				}

				//mobile
				else if(json.status == 111){
					$('#umsg_12').text(json.msg);
					console.log(json.msg);
				}
				//address1
				else if(json.status == 112){
					$('#umsg_13').text(json.msg);
					console.log(json.msg);
				}
				//address2
				else if(json.status == 113){
					$('#umsg_14').text(json.msg);
					console.log(json.msg);
				}
				//city
				else if(json.status == 114){
					$('#umsg_15').text(json.msg);
					console.log(json.msg);
				}
				//state
				else if(json.status == 115){
					$('#umsg_16').text(json.msg);
					console.log(json.msg);
				}
				//pin
				else if(json.status == 116)
				{
					$('#umsg_17').text(json.msg);
					console.log(json.msg);
				}
				else
				{
					console.log(json.msg);
				}

			}

		});

	});

	//delete record

	var deleteid;

	$(document).on("click", "button.deletedata", function(){
		deleteid = $(this).data("dataid");
	});

	$('#deleterec').click(function (){
		$.ajax({
			type:'POST',
			url:'deleteprocess.php',
			data:{delete_id : deleteid},
			success:function(data){
				var json = JSON.parse(data);
				if(json.status == 0){
					$('#tbl_rec').load('record.php');
					$('#de_cancle').trigger("click");
					console.log(json.msg);
				}
				else{
					console.log(json.msg);
				}
			}
		});
	});


});

</script>

</body>
</html>
