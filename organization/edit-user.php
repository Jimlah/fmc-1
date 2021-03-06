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
                    
                    
                if(isset($_GET['edit']))
                {
                    $editid=$_GET['edit'];
                }



                if(isset($_POST['submit']))
                {
                $file = $_FILES['image']['name'];
                $file_loc = $_FILES['image']['tmp_name'];
                $folder="../images/";
                $new_file_name = strtolower($file);
                $final_file=str_replace(' ','-',$new_file_name);

                $name=$_POST['name'];
                $email=$_POST['email'];
                $gender=$_POST['gender'];
                $mobileno=$_POST['mobileno'];
                $idedit=$_POST['editid'];
                $image=$_POST['image'];

                if(move_uploaded_file($file_loc,$folder.$final_file))
                    {
                        $image=$final_file;
                    }

                $sql="UPDATE member SET fullname=(:name), email=(:email), phone=(:mobileno), images=(:image) WHERE id=(:idedit)";
                $query = $dbh->prepare($sql);
                $query-> bindParam(':name', $name, PDO::PARAM_STR);
                $query-> bindParam(':email', $email, PDO::PARAM_STR);
                $query-> bindParam(':gender', $gender, PDO::PARAM_STR);
                $query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
                $query-> bindParam(':image', $image, PDO::PARAM_STR);
                $query-> bindParam(':idedit', $idedit, PDO::PARAM_STR);
                $query->execute();
                $msg="Information Updated Successfully";
                }    

?>

        <!DOCTYPE html>
        <html>


        <?php
        require_once "public/config/header.php";
        ?>

<body>
<?php
		$sql = "SELECT * from member where id = :editid";
		$query = $dbh -> prepare($sql);
		$query->bindParam(':editid',$editid,PDO::PARAM_INT);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	
?>
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
                <div class="panel-heading">	<h2 class="page-title">Edit User : <?php echo htmlentities($result->fullname); ?></h2></div>
				</div>
            <div class="row">
                       
                <div class="col-lg-8">
                       <div class="panel panel-default">
                               <div class="panel-heading">Edit User Info</div>
                            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                            else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

                            <div class="panel-body">
                               <form method="post" class="form-horizontal" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Profile Photo<span style="color:red">*</span></label>	
                                        <div class="col-sm-4 text-center">
                                            <img src="../images/<?php echo htmlentities($result->images);?>" style="width:200px; border-radius:50%; margin:10px;">
                                            <input type="file" name="image" class="form-control">
                                            <input type="hidden" name="image" class="form-control" value="<?php echo htmlentities($result->images);?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name<span style="color:red">*</span></label>
                                        <div class="col-sm-4">
                                        <input type="text" name="name" class="form-control" required value="<?php echo htmlentities($result->fullname);?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email<span style="color:red">*</span></label>
                                        <div class="col-sm-4">
                                        <input type="email" name="email" class="form-control" required value="<?php echo htmlentities($result->email);?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Mobile<span style="color:red">*</span></label>
                                        <div class="col-sm-4">
                                        <input type="text" name="mobile" class="form-control" required value="<?php echo htmlentities($result->phone);?>">
                                        </div>	
                                    </div>
                                    <input type="hidden" name="editid" class="form-control" required value="<?php echo htmlentities($result->id);?>">

                                    <div class="form-group">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button class="btn btn-primary" name="submit" type="submit">Save Changes</button>
                                        </div>
                                    </div>

                               </form>
                            </div>
                     </div>
                </div>
                   
                
                <div class="col-lg-4">
                        <?php
                require_once "public/config/right-sidebar.php";
                ?>

                            </div>
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