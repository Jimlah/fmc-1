<?php
        session_start();
     
        error_reporting(0);
        $error="";
        $msg="";
        include('includes/config.php');
        if(strlen($_SESSION['alogin'])==0)
            {	
        header('location:index.php');
        }
        else{
            if(isset($_GET['del']))
                {
                    $id=$_GET['del'];

                    $sql = "delete from testimonial WHERE id=:id";
                    $query = $dbh->prepare($sql);
                    $query -> bindParam(':id',$id, PDO::PARAM_STR);
                    $query -> execute();                

                    $msg="Data Deleted successfully";
                }

                    

?>

        <!DOCTYPE html>
        <html>


        <?php
        require_once "public/config/header.php";
        ?>

<body>

    <div id="wrapper">
        <?php
        require_once "public/config/left-sidebar.php";
        ?>
            
            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="row border-bottom">
            
                <?php
                require_once "public/config/topbar.php";
                ?>
                            
                </div>
                <div class="row  border-bottom white-bg dashboard-header">
                <div class="panel-heading"><h2 class="page-title">Manage Testimonials</h2></div>
				</div>
            <div class="row">
                       
                <div class="col-lg-12">

                    <h2 class="page-title">Configure Testimonials</h2>

                  <!-- Zero Configuration Table -->
				<div class="panel panel-default">
                <div class="panel-heading">List Users</div>
							<div class="panel-body">
											<?php if($error){?><div class="errorWrap" id="msgshow"><?php echo htmlentities($error); ?> </div><?php } 
								else if($msg){?><div class="succWrap" id="msgshow"><?php echo htmlentities($msg); ?> </div><?php }?>
								<table id="zctb tablePreview" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
                                                <th>Transaction</th>
                                                <th>Sales Name</th>
												<th>Date</th>										
                                                <th>Product Name</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Discount</th>
                                                <th>Total Amount</th>
                                                <th>Total Quantity</th>
                                                <th>Method</th>
                                                <th>Customer Name</th>
                                                <th>Phone</th>
                                                <th>Type</th>
                                                <th>Add Parameter</th>
                                                <th>Action</th>	
										</tr>
									</thead>
									
									<tbody>

										<?php $sql = "SELECT * from productsale";
										$query = $dbh -> prepare($sql);
										$query->execute();
										$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0)
										{
										foreach($results as $result)
										{				?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
										    <td><?php echo htmlentities($result->transaction);?></td>
                                            <td><?php echo htmlentities($result->salename);?></td>
                                            <td><?php echo htmlentities($result->date);?></td>
                                            <td><?php echo htmlentities($result->productname);?></td>
                                            <td><?php echo htmlentities($result->description);?></td>
                                            <td><?php echo htmlentities($result->price);?></td>
                                            <td><?php echo htmlentities($result->quantity);?></td>
                                            <td><?php echo htmlentities($result->discount);?></td>
                                            <td><?php echo htmlentities($result->amount);?></td>
                                            <td><?php echo htmlentities($result->totalquantity);?></td>
                                            <td><?php echo htmlentities($result->method);?></td>
                                            <td><?php echo htmlentities($result->customername);?></td>
                                            <td><?php echo htmlentities($result->phone);?></td>
                                            <td><?php echo htmlentities($result->type);?></td>
                                            <td><?php echo htmlentities($result->add_parameter);?></td>

																						
											<td>
											<a href="edit-testimo.php?edit=<?php echo $result->id;?>" onclick="return confirm('Do you want to Edit');">&nbsp; <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;
											<a href="testimolist.php?del=<?php echo $result->id;?>;?>" onclick="return confirm('Do you want to Delete');"><i class="fa fa-trash" style="color:red"></i></a>&nbsp;&nbsp;
											</td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
								</table>
							</div>
						</div>	

                </div>
                   
                <!---
                <div class="col-lg-4">
                        <?php
            //    require_once "public/config/right-sidebar.php";
                ?>

                            </div>
                                                    -->
            </div>

         
                        



                        
                    
                </div>

                
            </div>
            
        </div>
       
        <?php
                require_once "public/config/footer.php";
                ?>

    </body>
    
    <!-- Mirrored from webapplayers.com/inspinia_admin-v2.6.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Sep 2016 02:26:53 GMT -->
    </html>
    
    <?php } ?>