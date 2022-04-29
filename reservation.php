
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="./images/logo2.png" type="">
  <link rel="stylesheet" type="text/css" href="css/reservation.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <title> Piggy Wings </title>

  </head>

<body>

<div id="booking" class="section">
	<div> 
		<div class="container text-center">
				<div class="row ">
					<!-- <div class="col-md-4">
						<div class="booking-cta">
							<a href="">
							<img src="./images/logo2.png" alt="">
							</a>
						</div>
					</div> -->
					<div class="col mt-5 ">
						<div class="booking-form">
							<form action="reservation_save.php" method="POST">
								<a href="./index.php"><h1 style="text-align: center;">Reserve Table</h1></a>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">First Name</span>
											<input type="text" class="form-control" placeholder="Enter First Name" name="first" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Last Name</span>
											<input type="text" class="form-control" placeholder="Enter Last Name" name="last" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Address</span>
											<textarea class="form-control" rows="5" placeholder="Complete Address" name="address" required></textarea>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Contact #</span>
											<input type="text" class="form-control" placeholder="Contact #" name="contact" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Email</span>
											<input type="email" class="form-control" placeholder="Email Address" name="email">
										</div>
									</div>
								</div>
								<h1>Event Details</h1>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Name of Event</span>
											<input type="text" class="form-control" placeholder="Event Name" name="r_eventname">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Date of event</span>
											<input type="date" id="datepicker" class="form-control" name="date" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Time of Event</span>
											<input data-format="hh:mm A" class="form-control" type="time" name="time" id="datepicker" required="true">
					 					</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">

									<div class="form-group">
    									<label class="col-lg-2 control-label"></label>
        									<div class="col-lg-5">
										<?php
											include('includes/dbcon.php');
    										$query=mysqli_query($con,"select * from combo order by combo_name")or die(mysqli_error($con));
      										$count=mysqli_num_rows($query);
    										while ($row=mysqli_fetch_array($query)){
        									$id=$row['combo_id'];
        									$name=$row['combo_name'];
        									$price=$row['combo_price'];  
										?>     
         							<div class="col-md-6">
              							<div class="widget">
                							<!-- Widget title -->
											<!-- PRICE -->
               								<div class="widget-head">
												<div class="pull-left"><?php echo $name;?> - P<?php echo $price;?></div>
													<div class="widget-icons pull-right"></div>  
												<div class="clearfix"></div>
                							</div>
                					<div class="widget-content referrer">
                  							<!-- Widget content -->
                 						<table class="table table-striped table-bordered table-hover">
                    				<tbody>
										<?php
											$query1=mysqli_query($con,"select * from combo_details natural join menu where combo_id='$id'")or die(mysqli_error($con));
											while ($row1=mysqli_fetch_array($query1)){
											$cid=$row1['combo_details_id'];
											$menu_id=$row1['menu_id'];
											$menu_name=$row1['menu_name'];
										?>                        
											<tr>
												<td><?php echo $menu_name;?></td>
											</tr>     
										<?php }?>                    
                 		 			</tbody>
										</table>
										<div class="widget-foot text-center">
											<input type="radio" id="inlineCheckbox1" value="<?php echo $id;?>" name="combo_id">
										</div>
                					</div>
             	 						</div>
            						</div>
              						<!--end widget-->
            					<?php }?>  
         </div>
      </div> 
									</div>
								</div>

								<!-- data -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-btn return">
											<a href="./index.php">Return</a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-btn">
											<button class="submit-btn btn btn-success" type="submit">Add Reservation</button>
										</div>
									</div>
								</div>
								
								</div>
								<!-- <div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Adults (18+)</span>
											<select class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Children (0-17)</span>
											<select class="form-control">
												<option>0</option>
												<option>1</option>
												<option>2</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Travel class</span>
											<select class="form-control">
												<option>Economy class</option>
												<option>Business class</option>
												<option>First class</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div> -->
							</form>
						</div>
					</div>
				</div>
		</div>
		
	</div>
</div>




<!-- <form action="reservation_save.php" method="POST">
    <label for="Firstname">Fname</label>
    <input type="text" placeholder="Enter First Name" name="first" required>

    <label for="Firstname">Lname</label>
    <input type="text" placeholder="Enter First Name" name="last" required>

    <label for="">Address</label>
    <textarea class="form-control" rows="5" placeholder="Complete Address" name="address" required></textarea>

    <label for="">Contact</label>
    <input type="text" class="form-control" placeholder="Contact #" name="contact" required>

    <label for="">email</label>
    <input type="email" class="form-control" placeholder="Email Address" name="email">

    <label class="checkbox-inline">
                                      <input type="checkbox" id="inlineCheckbox1" value="option1" required> I agree to the <a href="#facilities" data-toggle="modal">terms and condtion</a> of the Chimney's Catering
                                    </label>

                                    <button type="submit" class="btn btn-sm btn-primary">Next</button>

</form>  -->


</body>
</html>