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

                    $sql = "delete from building WHERE sn=:id";
                    $query = $dbh->prepare($sql);
                    $query -> bindParam(':id',$id, PDO::PARAM_STR);
                    $query -> execute();                

                    $msg="Data Deleted successfully";
                    header('location:buildinglist.php');
            }else{
                
            }
            

                    

?>

<!DOCTYPE html>

 <html>
                        <link rel="stylesheet" href="public/css/buildinglist.css">
                        <link rel="stylesheet" href="public/new_styles.css">
                        <link rel="stylesheet" href="./public/css/buildinglist.css">
               

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
            <div class="row dashboard-header">
                <div class="panel-heading" style='padding:0;'>
                    <h2 class="page-title" >Manage Buildings</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">


                    <!-- button style Start -->
                    <div class="navbar">
                    <div class="container-fluid" style="padding-left:7px;">
                    <h1 class="nav navbar-nav">
                        <a class="btn btn-md btn-primary" href="#add" data-target="#add" data-toggle="modal"
                            style="color:#fff; " class="small-box-footer"><i
                                class="glyphicon glyphicon-plus text-blue" ></i></a>           
                    </h1>

                    <h1 class="nav navbar-nav navbar-right">
                        <a class="btn btn-md btn-primary" href="#add2" data-target="#add2" data-toggle="modal"
                            style="color:#fff;" class="small-box-footer"><i
                                class="glyphicon glyphicon-plus text-blue"></i> Add category</a>
                    </h1>
                    </div>
                    </div>
                    <!-- button style End -->

                    <!-- Zero Configuration Table -->
                    <div class="panel panel-default">
                        <div class="panel-heading" style= "font-weight: bold">Building list</div>
                        <div class="panel-body">
                            <?php if($error){?><div class="errorWrap" id="msgshow"><?php echo htmlentities($error); ?>
                            </div><?php } 
								else if($msg){?><div class="succWrap" id="msgshow"><?php echo htmlentities($msg); ?> </div><?php }?>
                            <table id="zctb tablePreview" class="display table table-dark table-striped table-bordered table-hover"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr 
                                    style="background: #098d73;
                                        color:white;
                                        border: none;
                                        padding:0px;
                                        margin:0px;
                                        ">
                                        <th style="padding:0 5px 0 8px; background: #098d73; color: #098d73; border: none">#</th>
                                        <th style="border:none">Name</th>
                                        <th style="border:none">Description</th>
                                        <th style="border:none">Size/capacity</th>
                                        <th style="border:none">Location</th>
                                        <th style="border:none">Category</th>
                                        <th style="border:none">Date</th>
                                        <th style="border:none">Action</th>
                                    </tr>
                                </thead>
						

                                <tbody>

                                    <?php $sql = "SELECT * from `building`";
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
                                        <td><?php echo htmlentities($result->name);?></td>
                                        <td><?php echo htmlentities($result->description);?></td>
                                        <td><?php echo htmlentities($result->size);?></td>
                                        <td><?php echo htmlentities($result->location);?></td>
                                        <td><?php echo htmlentities($result->category);?></td>
                                        <td><?php echo htmlentities($result->date);?></td>

                                        <!-- Action Button Start -->
                                        <td>
                                            <a data-toggle="modal" href="buildingedit.php?s=<?php echo $result->sn;?>" data-target="#MyModal" data-backdrop="static">&nbsp;
                                            <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;
                                            <div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog model-sm">
                                                        <div class="modal-content"> </div>
                                                    </div>
                                            </div>

                                            <a href="buildinglist.php?del=<?php echo $result->sn;?>"
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
                                        <h4 id='edit' class="modal-title">Add New Product</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="buildingform.php" method="POST" class="forma" id="f_edit">
                                            
                                            <p>
                                                <label for="name">Name</label>
                                                <input type="text" name="name" value="">
                                            </p>


                                            <p>
                                                <label for="description">Description</label>
                                                <input type="text" name="description" value="">
                                            </p>

                                            <p>
                                                <label for="size">Size</label>
                                                <input type="text" name="size" value="">
                                            </p>

                                            <p>
                                                <label for="location">Location</label>
                                                <input type="text" name="location" value="">
                                            </p>

                                            <p>
                                                <select name="category" id="">
                                                    <option selected disabled>Select</option>
                                                    <?php 
                                        $sql = "SELECT * FROM `asset` WHERE item LIKE 'building'";
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
                                                <button type="submit" name="submit" id="submit">
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
                                
                            </div>

                        </div>
<!--end of modal-dialog-->

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
                                                <input type="text" name="item" value="Building">
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