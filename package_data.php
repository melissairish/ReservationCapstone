<div class="row">
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
															<div class="widget-head">
															<div class="pull-left"><?php echo $name;?> - P<?php echo $price;?></div>
															<div class="widget-icons pull-right">
															</div>  
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