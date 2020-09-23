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

                    $sql = "delete from administration WHERE sn=:id";
                    $query = $dbh->prepare($sql);
                    $query -> bindParam(':id',$id, PDO::PARAM_STR);
                    $query -> execute();               

                    $msg="Data Deleted successfully";
                    header('location:administrationlist.php');
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
            <div class="row  dashboard-header">
                <div class="panel-heading" style='padding:0;'>
                    <h2 class="page-title">Manage Administration</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">

                    <!-- button style Start -->
                    <div class="navbar">
                    <div class="container-fluid" style='padding-left:0;'>
                    <h1 class="nav navbar-nav">
                        <a class="btn btn-md btn-primary" href="#add" data-target="#add" data-toggle="modal"
                            style="color:#fff;" class="small-box-footer"><i
                                class="glyphicon glyphicon-plus text-blue"></i> Add Category</a>           
                    </h1>

                    <h1 class="nav navbar-nav navbar-right">
                        <a class="btn btn-md btn-primary" href="#add2" data-target="#add2" data-toggle="modal"
                            style="color:#fff;" class="small-box-footer"><i
                                class="glyphicon glyphicon-plus text-blue"></i> Add Items</a>
                    </h1>
                    </div>
                    </div>
                    <!-- button style End -->
                    <!-- Zero Configuration Table -->
                    <div class="panel panel-default">
                        <div class="panel-heading">List Items</div>
                        <div class="panel-body">
                            <?php if($error){?><div class="errorWrap" id="msgshow"><?php echo htmlentities($error); ?>
                            </div><?php } 
								else if($msg){?><div class="succWrap" id="msgshow"><?php echo htmlentities($msg); ?> </div><?php }?>
                            <table id="zctb" class="display table table-dark table-striped table-bordered table-hover"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Manufacturer</th>
                                        <th>Location</th>
                                        <th>Place</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php $sql = "SELECT * from `administration` WHERE org_id=:org_id";
                                        $query = $dbh -> prepare($sql);
                                        $query->bindParam(':org_id', $_SESSION['org_id'], PDO::PARAM_STR);
										$query->execute();
										$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0)
										{
										foreach($results as $result)
										{				?>
                                    <tr>
                                        <td><?php echo htmlentities($cnt);?></td>
                                        <td><?php echo htmlentities($result->category);?></td>
                                        <td><?php echo htmlentities($result->name);?></td>
                                        <td><?php echo htmlentities($result->description);?></td>
                                        <td><?php echo htmlentities($result->quantity);?></td>
                                        <td><?php echo htmlentities($result->manufacturer);?></td>
                                        <td><?php echo htmlentities($result->location);?></td>
                                        <td><?php echo htmlentities($result->place);?></td>
                                        <td><?php echo htmlentities($result->status);?></td>
                                        <td><?php echo htmlentities($result->date);?></td>
                                        <!-- Action Button Start -->
                                        <td>
                                            <a data-toggle="modal" href="administrationedit.php?s=<?php echo $result->sn;?>" data-target="#MyModal" data-backdrop="static">&nbsp;
                                            <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;
                                            <div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog model-sm">
                                                        <div class="modal-content"> </div>
                                                    </div>
                                            </div>

                                            <a href="administrationlist.php?del=<?php echo $result->sn;?>"
                                                onclick="return confirm('Do you want to Delete');"><i
                                                    class="fa fa-trash" style="color:red"></i></a>&nbsp;&nbsp;
                                        </td>

                                        <!-- Action Button End -->
                                    </tr>
                                    <?php $cnt=$cnt+1; }} ?>

                                </tbody>
                            </table>
                        </div>

                        <div id="add" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                            aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content" style="height:auto">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title">Add New Product</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="administrationform.php" method="POST" class="forma">
                                            
                                        <p>
                                                <select name="category" id="">
                                                    <option selected disabled>Select</option>
                                                    <?php 
                                        $sql = "SELECT * FROM `asset` WHERE item LIKE 'administration'";
                                        $query = $dbh -> prepare($sql);
										$query->execute();
										$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0)
										{
										foreach($results as $result)
										{				?>
                                                    <option value="<?php echo htmlentities($result->category);?>">
                                                        <?php echo htmlentities($result->category);?></option>
                                                    <?php $cnt=$cnt+1; 
                                        }} ?>
                                                </select>
                                            </p>

                                            <p>
                                                <label for="name">Name</label>
                                                <input type="text" name="name" value="">
                                            </p>


                                            <p>
                                                <label for="description">Description</label>
                                                <input type="text" name="description" value="">
                                            </p>

                                            <p>
                                                <label for="size">Quantity</label>
                                                <input type="text" name="quantity" value="">
                                            </p>

                                            <p>
                                                <label for="manufacturer">Manufacturer</label>
                                                <input type="text" name="manufacturer" value="">
                                            </p>

                                            <p>
                                                <label for="location">Storage Location</label>
                                                <input type="text" name="location" value="">
                                            </p>

                                            <p>
                                                <label for="place">Place of procurement</label>
                                                <input type="text" name="place" value="">
                                            </p>

                                            <p>
                                                <label for="status">Status</label>
                                                <select name="status">
                                                    <option value="in stock">in stock</option>
                                                    <option value="out stock">out stock</option>
                                                </select>
                                            </p>

                                            <p>
                                                <button type="submit" name="submit">
                                                    Submit
                                                </button>
                                            </p>

                                        </form>
                                    </div>
                                    <div class="modal-footer">

                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                                <!--end of modal-dialog-->
                            </div>

                            <!---
                <div class="col-lg-4">
                        <?php
            //    require_once "public/config/right-sidebar.php";
                ?>

                            </div>
                                                    -->
                        </div>


                        <div id="add2" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                            aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content" style="height:auto">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title">Add New Product</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="assetcat.php" method="POST" class="forma">
                                            <p>
                                                <label for="full_name">Item</label>
                                                <input type="text" name="item" value="administration">
                                            </p>

                                            <p>
                                                <label for="amount">Category</label>
                                                <input type="text" name="category" value="">
                                            </p>

                                            <p>
                                                <button type="submit" name="submit">
                                                    Submit
                                                </button>
                                            </p>

                                        </form>
                                    </div>
                                    <div class="modal-footer">

                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                                <!--end of modal-dialog-->
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