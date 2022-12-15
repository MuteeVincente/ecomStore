<?php

    include("includes/db.php");
    if (!isset($_SESSION['admin_email'])) {
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{

?>
<div class="row"><!-- row Begin -->

	<div class="col-lg-12"><!-- col-lg-12 begin -->
		
		<ol class="breadcrumb"><!-- breadcrumb begin -->
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard / View Products
			</li>
		</ol><!-- breadcrumb finish -->

	</div><!-- col-lg-12 finish -->

</div><!-- row Finish -->

<div class="row"><!-- row Begin -->
	
	<div class="col-lg-12"><!-- col-lg-12 begin -->
		
		<div class="panel panel-default"><!-- panel panel-default begin -->
			
			<div class="panel-heading"><!-- panel-heading begin -->
				
				<h3 class="panel-title">
					<i class="fa fa-tags"></i> View Products
				</h3>

			</div><!-- panel-heading finish -->

			<div class="panel-body"><!-- panel-body begin -->
				
				<div class="table-responsive"><!-- table-responsive begin -->
					
					<table class="table table-striped table-bordered table-hover"><!-- table begin -->
						
						<thead>
							<tr>
								<th>Product ID:</th>
								<th>Product Title:</th>
								<th>Product Image:</th>
								<th>Product Price:</th>
								<th>Product Keywords:</th>
								<th>Product Date:</th>
								<th>Product Delete:</th>
								<th>Product Edit:</th>
							</tr>
						</thead>

						<tbody>
							<?php
								$i=0;
								$get_pro = "select * from products";
								$run_pro = mysqli_query($con,$get_pro);
								while ($row_pro = mysqli_fetch_array($run_pro)) {
									$pro_id = $row_pro['product_id'];
									$pro_title = $row_pro['product_title'];
									$pro_img1 = $row_pro['product_img1'];
									$pro_price = $row_pro['product_price'];
									$pro_keywords = $row_pro['product_keywords'];
									$pro_date = $row_pro['date'];
									$i++;
							 ?>
							 <tr>
							 	<td><?php echo $pro_id; ?></td>
							 	<td><?php echo $pro_title; ?></td>
							 	<td><img src="product_images/<?php echo $pro_img1; ?>" width="60" height="60"></td>
							 	<td>KES<?php echo $pro_price; ?></td>
							 	<td><?php echo $pro_keywords; ?></td>
							 	<td><?php echo $pro_date; ?></td>
							 	<td>
							 		<a href="index.php?delete_product=<?php echo $pro_id; ?>">
							 			<i class="fa fa-trash-o"></i> Delete
							 		</a>
							 	</td>
							 	<td>
							 		<a href="index.php?edit_product=<?php echo $pro_id; ?>">
							 			<i class="fa fa-pencil"></i> Edit
							 		</a>
							 	</td>
							 </tr>
							 <?php
								}
							 ?>
						</tbody>

					</table><!-- table finish -->

				</div><!-- table-responsive finish -->
			
			</div><!-- panel-body finish -->


		</div><!-- panel panel-default finish -->

	</div><!-- col-lg-12 finish -->

</div><!-- row Finish -->

<?php } ?>