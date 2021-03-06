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
         	
if(isset($_POST['submit']))
{

    $type = $_POST['type'];
    $sn = $_POST['sn'];
    $name = $_POST['name'];
    $description = $_POST['description'];
	$amount = $_POST['amount'];
    $date = $_POST['date'];
	$add_parameters =$_POST['add_parameters'];
	
    $sql="INSERT INTO advert (type, sn, name, description, amount, date, add_parameters) VALUES (:type, :sn, :name, :description, :amount, :date, :add_parameters)";
    $query = $dbh->prepare($sql);
    $query-> bindParam(':type', $type, PDO::PARAM_STR);
    $query-> bindParam(':sn', $sn, PDO::PARAM_STR);
    $query-> bindParam(':name', $name, PDO::PARAM_STR);
    $query-> bindParam(':description', $description, PDO::PARAM_STR);
	$query-> bindParam(':amount', $amount, PDO::PARAM_STR);
    $query-> bindParam(':date', $date, PDO::PARAM_STR);
    $query-> bindParam(':add_parameters', $add_parameters, PDO::PARAM_STR);
    $query->execute(); 
    $msg="Advert Updated Successfully"; 
  
}    
?>

        <!DOCTYPE html>
        <html>


        <?php
        require_once ('public/config/header.php');
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
                <div class="panel-heading"><h4>Advert</h4></div>
				<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

				</div>
            <div class="row">
            <div class="col-lg-8">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                           
                 <form action="advert.php" method="POST" class="forma">
                    <p>
                        <select name="type">
                        <option disabled selected>Advert Category</option>
						<option >TV</option>
						<option >Radio</option>
						<option >Social Media</option>
						<option >Print</option>
						<option >Others</option>  
                        </select>
                    </p>
					<p>
                        <label for="sn">Serial Number</label>
                        <input type="text" name="sn">
                    </p>
					<p>
                        <label for="full_name">Name</label>
                        <input type="text" name="name">
                    </p>
                    <p>
                        <label for="full_name">Description of Advert</label>
                        <input type="text" name="description" value="">
                    </p>

                    <p>
                        <label for="amount">Amount of Advert</label>
                        <input type="text" name="amount" value="">
                    </p>
					<p>
                        <label for="date">Date of Expiry</label>
                        <input type="date" name="date" value="2017-06-01">
                    </p>
					
                        <label for="add_parameters">Add Parameter</label>
                        <input type="textarea" name="add_parameters" value="">
                    </p>
                    
                    <p>
                        <button type="submit" name="submit">
                            Submit
                        </button>
                    </p>

                </form>
                        </div>
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