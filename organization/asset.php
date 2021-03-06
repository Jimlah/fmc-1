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
                <div class="row dashboard-header">
                <div class="panel-heading"><h2 class="page-title">TANGIBLE ASSETS</h2></div>
				</div>
            <div class="row">
                       
                <div class="col-lg-12">

                    <h2 class="page-title"></h2>

                  <!-- Zero Configuration Table -->
						<div class="panel panel-default panel-outer" >
							<div class="panel-heading">View Panel</div>
							<div class="panel-body">
								<?php if($error){?><div class="errorWrap" id="msgshow"><?php echo htmlentities($error); ?> </div><?php } 
								else if($msg){?><div class="succWrap" id="msgshow"><?php echo htmlentities($msg); ?> </div><?php }?>
                                                                    
                                <div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
                                                    <?xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="giftbox" x="0px" y="0px" viewBox="0 0 1010 1010" xml:space="preserve"><g id="giftbox-giftbox"><path id="giftbox-label" fill="#FFB933" d="M1010 505c0 278.894-226.096 505-505 505S0 783.894 0 505C0 226.086 226.096 0 505 0s505 226.086 505 505z"/><g id="giftbox-giftbox_1_"><path fill="#3BAFDA" d="M554.612 351.192h208.382v99.224H554.612z"/><path fill="#FC6E51" d="M455.388 351.192h99.224v99.224h-99.224z"/><path fill="#FC6E51" d="M455.388 450.416h99.224V787.8h-99.224z"/><path fill="#3BAFDA" d="M247.006 351.192h208.382v99.224H247.006z"/><path fill="#FFF" d="M267.068 450.416h188.32V787.8h-188.32z"/><path fill="#FFF" d="M554.612 450.416h189.563V787.8H554.612z"/><g><path fill="#454545" d="M465.488 787.8h-20.2V351.192h20.2V787.8z"/><path fill="#454545" d="M564.712 787.8h-20.2V351.192h20.2V787.8z"/><path fill="#454545" d="M744.175 797.9H267.068c-5.578 0-10.1-4.517-10.1-10.1V450.416h20.2V777.7h456.906V450.416h20.201V787.8c0 5.583-4.517 10.1-10.1 10.1z"/><path fill="#454545" d="M762.994 460.517H247.006c-5.577 0-10.1-4.518-10.1-10.101v-99.224c0-5.583 4.523-10.1 10.1-10.1h515.988c5.582 0 10.1 4.517 10.1 10.1v99.224c0 5.583-4.518 10.1-10.1 10.1zm-505.888-20.2h495.788v-79.025H257.106v79.024z"/><path fill="#454545" d="M505 351.37c-.33 0-.666-.02-1.001-.05-3.28-.325-80.643-8.344-110.918-38.595-22.971-22.981-22.971-60.383-.005-83.365 11.146-11.135 25.95-17.26 41.693-17.26 15.742 0 30.546 6.125 41.677 17.26 30.275 30.251 38.28 107.629 38.605 110.913A10.102 10.102 0 0 1 505 351.37h-.001zM434.769 232.3c-10.352 0-20.082 4.024-27.406 11.343-15.1 15.11-15.1 39.69.005 54.8 17.458 17.448 60.408 27.203 85.93 31.128-3.921-25.526-13.671-68.48-31.134-85.928-7.319-7.319-17.049-11.343-27.395-11.343z"/><path fill="#454545" d="M505 351.37a10.1 10.1 0 0 1-7.14-2.96 10.093 10.093 0 0 1-2.91-8.137c.325-3.284 8.34-80.662 38.604-110.913 11.131-11.135 25.936-17.26 41.677-17.26 15.743 0 30.547 6.125 41.688 17.26 22.972 22.982 22.972 60.384.005 83.365-30.28 30.25-107.643 38.27-110.923 38.595-.335.03-.67.05-1.001.05zm70.231-119.07c-10.346 0-20.076 4.024-27.395 11.343-17.453 17.448-27.212 60.402-31.133 85.928 25.521-3.925 68.47-13.68 85.934-31.128 15.1-15.11 15.1-39.69-.005-54.8-7.318-7.319-17.049-11.343-27.4-11.343z"/><g><path fill="#FFF" d="M515.1 767.955h-20.2v-15.15h20.2v15.15zm0-35.35h-20.2v-20.2h20.2v20.2zm0-40.4h-20.2v-20.2h20.2v20.2zm0-40.4h-20.2v-20.2h20.2v20.2zm0-40.4h-20.2v-20.2h20.2v20.2zm0-40.4h-20.2v-20.2h20.2v20.2zm0-40.4h-20.2v-20.2h20.2v20.2zm0-40.4h-20.2v-20.2h20.2v20.2z"/></g></g></g></g><metadata><rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xmlns:dc="http://purl.org/dc/elements/1.1/"><rdf:Description about="https://iconscout.com/legal#licenses" dc:title="giftbox" dc:description="giftbox" dc:publisher="Iconscout" dc:date="2017-09-22" dc:format="image/svg+xml" dc:language="en"><dc:creator><rdf:Bag><rdf:li>EcommDesign</rdf:li></rdf:Bag></dc:creator></rdf:Description></rdf:RDF></metadata></svg>
													<div class="stat-panel-number h1 "></div>
													<div class="stat-panel-title text-uppercase">Asset</div>
												</div>
											</div>
											<a href="assetlist.php" class="block-anchor panel-footer text-center">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									
								</div>
			
                            </div>
						</div>

                </div>
                   
                <!---
                <div class="col-lg-4">
                        <?php
               // require_once "public/config/right-sidebar.php";
                ?>
					 </div>
		-->
            </div>
                 
                </div>

                
            </div>
            
        </div>
       <style>
		
		   #page-wrapper > div:nth-child(3) > div > div > div.panel-body > div > div > div > a:hover{
			   color:#fff;
		   }
	   </style>
        <?php
                require_once "public/config/footer.php";
                ?>

    </body>
    
    <!-- Mirrored from webapplayers.com/inspinia_admin-v2.6.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Sep 2016 02:26:53 GMT -->
    </html>
    
    <?php } ?>