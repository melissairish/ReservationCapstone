




<section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2 id="menu">
          Piggy Wings Combo Package
        </h2>
      </div>
      

      <!-- data from db -->
      <?php
	        include('includes/dbcon.php');
        	$query=mysqli_query($con,"select * from subcategory")or die(mysqli_error($con));
		      while ($row=mysqli_fetch_array($query)){
			    $subcat_id=$row['subcat_id'];
			    // $subcat_name=$row['subcat_name'];
      ?>   

        <?php
						$querym=mysqli_query($con,"select * from menu natural join subcategory where subcat_id='$subcat_id' order by menu_name")or die(mysqli_error($con));
						while ($rowm=mysqli_fetch_array($querym)){
							$mid=$rowm['menu_id'];
							$menu=$rowm['menu_name'];
							/* $cat=$rowm['cat_name']; */
							// $subcat=$rowm['subcat_name'];
							$desc=$rowm['menu_desc'];
							$price=$rowm['menu_price'];
							$pic=$rowm['menu_pic'];
            }
        ?>  
 
<?php }?>  

     <!--end of data from db -->

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".pizza">Barkada Package</li>
        <li data-filter=".pasta">Family Package</li>
        <li data-filter=".fries">Couple Package</li>
        <li data-filter=".event">Event Package</li>
      </ul>
  
      <div class="filters-content">


      <?php

            $queryp=mysqli_query($con,"select * from pmenu")or die(mysqli_error($con));
            while ($rowp=mysqli_fetch_array($queryp)){

              $pname=$rowp['pname'];
							$pprice=$rowp['pprice'];
							$pdesc=$rowp['pdesc'];      
      ?>
      


        <div class="row grid">
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/menu/<?php echo $pname;?>.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                   <?php echo $pname; ?>
                  </h5>
                  <p>
                  <?php echo $pdesc; ?>
                  </p>
                  <div class="options">
                    <h6>
                    <?php echo "₱".$pprice; ?>
                    </h6>
                    <a href="">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>

          <?php } ?>
              




      
  </section>

