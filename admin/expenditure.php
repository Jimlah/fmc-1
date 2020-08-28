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
                <div class="row  border-bottom white-bg dashboard-header">
                <div class="panel-heading"><h2 class="page-title">TANGIBLE ASSETS</h2></div>
				</div>
            <div class="row">
                       
                <div class="col-lg-12">

                    <h2 class="page-title"></h2>

                  <!-- Zero Configuration Table -->
						<div class="panel panel-default" style="background:#b3f3e677;border-radius:5px;box-shadow:1px 1px 4px 2px rgba(110, 104, 104, 0.335);">
							<div class="panel-heading">View Panel</div>
							<div class="panel-body">
								<?php if($error){?><div class="errorWrap" id="msgshow"><?php echo htmlentities($error); ?> </div><?php } 
								else if($msg){?><div class="succWrap" id="msgshow"><?php echo htmlentities($msg); ?> </div><?php }?>
                                                                    
                                <div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
                                                <svg id="Layer_2" height="128" viewBox="0 0 128 128" width="128" xmlns="http://www.w3.org/2000/svg" data-name="Layer 2"><path d="m59.2 100.6h-36.318a7.332 7.332 0 1 0 0 3.5h36.318a7.332 7.332 0 1 0 0-3.5zm-43.43 5.582a3.832 3.832 0 1 1 3.831-3.832 3.836 3.836 0 0 1 -3.83 3.837zm50.542-7.663a3.832 3.832 0 1 1 -3.832 3.832 3.836 3.836 0 0 1 3.832-3.828z"/><path d="m126.25 9.88h-58.56a1.813 1.813 0 0 0 -1.26.52l-14.41 14.41a1.8 1.8 0 0 0 -.52 1.26v11.55h-10.46a1.752 1.752 0 0 0 -1.4.7l-10.02 13.28h-21.54a1.746 1.746 0 0 0 -1.75 1.75v22.42a1.752 1.752 0 0 0 1.75 1.75h15.69v9.06h-8a15.77 15.77 0 1 0 0 31.54h50.54a15.77 15.77 0 1 0 0-31.54h-7.99v-9.06h15.68a1.752 1.752 0 0 0 1.75-1.75v-36.39a1.754 1.754 0 0 0 -1.75-1.76h-9v-6.7l7.55-7.54h41.95v57.66h-15.92v-.79a7.757 7.757 0 0 0 -7.75-7.75h-.33a1.746 1.746 0 0 0 -1.75 1.75v8.54a1.854 1.854 0 0 0 .24.89l10 17a1.767 1.767 0 0 0 1.51.86h25.75a1.746 1.746 0 0 0 1.75-1.75v-88.17a1.743 1.743 0 0 0 -1.75-1.74zm-71.25 18.79 6.5 2.7v6.25h-6.5zm11.31 61.41a12.27 12.27 0 1 1 0 24.54h-6.8v-4.45a1.75 1.75 0 0 0 -3.5 0v4.45h-4.86v-4.45a1.75 1.75 0 0 0 -3.5 0v4.45h-4.86v-4.45a1.75 1.75 0 0 0 -3.5 0v4.45h-4.86v-4.45a1.75 1.75 0 0 0 -3.5 0v4.45h-4.86v-4.45a1.75 1.75 0 1 0 -3.5 0v4.45h-6.8a12.27 12.27 0 1 1 0-24.54h8v4.01a1.75 1.75 0 0 0 3.5 0v-4.01h4.26v4.01a1.75 1.75 0 1 0 3.5 0v-4.01h4.26v4.01a1.75 1.75 0 0 0 3.5 0v-4.01h4.26v4.01a1.75 1.75 0 0 0 3.5 0v-4.01h4.27v4.01a1.75 1.75 0 0 0 3.5 0v-4.01zm-39.04-3.5v-9.06h27.55v9.06zm44.98-22.94h-24.89v-12.14h24.89zm0-22.52v6.88h-26.64a1.752 1.752 0 0 0 -1.75 1.75v15.64a1.752 1.752 0 0 0 1.75 1.75h26.64v6.88h-62.42v-7.32h22.6a1.75 1.75 0 0 0 0-3.5h-22.6v-8.1h20.66a1.772 1.772 0 0 0 1.4-.69l10.02-13.29zm-9.41-12.99-6.5-2.69 10.72-10.73 2.7 6.5zm10.15-8.25-2.69-6.5h44.2v6.5zm19.26 56.36a4.259 4.259 0 0 1 2.83 4.01v.79h-2.83zm32.25 21.8h-23l-2.94-5h11.27a1.75 1.75 0 0 0 0-3.5h-13.33l-2.94-5h30.94zm0-17h-6.5v-57.66h6.5zm0-61.16h-6.5v-6.5h6.5z"/></svg>
													<div class="stat-panel-number h1 "></div>
													<div class="stat-panel-title text-uppercase">Overhead Cost</div>
												</div>
											</div>
											<a href="#" class="block-anchor panel-footer text-center">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
															<svg id="Capa_1" enable-background="new 0 0 512 512" height="128" viewBox="0 0 512 512" width="128" xmlns="http://www.w3.org/2000/svg"><g><path d="m364.786 262.584v-66.292l22.935 12.147 14.034-26.499-61.579-32.614v-42.613h-29.985v26.732l-52.155-27.623-22.671 12.702v-56.281c0-34.026-27.681-61.707-61.706-61.707s-61.706 27.682-61.706 61.707v39.367c-9.644-6.246-21.123-9.89-33.443-9.89-34.025 0-61.706 27.682-61.706 61.706v101.139c0 23.122 12.791 43.303 31.661 53.87-15.181 9.996-48.465 37.816-48.465 37.816l.003 165.749h511.993l.004-164.916-4.984-4.469c-41.378-37.1-89.964-64.219-142.23-80.031zm117.227 136.234c-.336-.339-.668-.683-1.005-1.021-60.222-60.223-140.291-93.388-225.458-93.388-57.99 0-113.609 15.39-162.216 44.215v-31.972c49.578-26.245 105.161-40.229 162.216-40.229 83.375 0 163.525 29.826 226.464 84.134zm-223.572-258.85 76.36 40.443v74.441c-19.322-4.147-39.035-6.781-58.978-7.85v-35.906h-29.985v35.477c-19.35.496-38.518 2.475-57.353 5.873v-29.171c26.886-6.657 46.881-30.98 46.881-59.894v-10.485zm-116.503-77.725c0-17.492 14.23-31.722 31.721-31.722s31.721 14.23 31.721 31.722v101.138c0 17.49-14.23 31.721-31.721 31.721s-31.721-14.23-31.721-31.721zm-95.149 91.184c0-17.49 14.23-31.721 31.721-31.721s31.721 14.23 31.721 31.721v101.139c0 17.491-14.23 31.721-31.721 31.721-17.491 0-31.721-14.23-31.721-31.721zm93.427 101.14v-39.368c5.55 3.594 11.703 6.331 18.282 8v35.942c-6.433 1.712-12.817 3.587-19.142 5.636.556-3.324.86-6.732.86-10.21zm-76.866 79.974v34.267c-11.633 8.825-22.753 18.486-33.257 28.99-.036.036-.071.073-.107.109l-.001-38.123c10.651-9.127 21.802-17.538 33.365-25.243zm335.675 145.241c-38.324-38.323-89.278-59.429-143.474-59.429-53.961 0-104.701 20.928-142.967 58.936l-.506-.506c-1.06 1.06-2.112 2.142-3.156 3.232h-36.05c5.986-7.708 12.467-15.072 19.416-22.021 43.609-43.61 101.59-67.626 163.262-67.626s119.654 24.017 163.263 67.625c6.95 6.95 13.431 14.314 19.418 22.022h-37.027c-.725-.748-1.446-1.499-2.179-2.233zm-43.653 2.233h-199.64c28.987-20.579 63.549-31.676 99.819-31.676s70.833 11.096 99.821 31.676zm119.599 0c-10.032-15.516-21.759-30.029-34.955-43.225-49.273-49.273-114.785-76.408-184.466-76.408-69.682 0-135.193 27.136-184.465 76.409-13.196 13.196-24.926 27.709-34.958 43.224h-6.14l-.001-39.25c6.641-8.262 13.782-16.237 21.309-23.764 54.559-54.558 127.098-84.605 204.255-84.605s149.697 30.047 204.255 84.605c7.864 7.865 15.321 16.23 22.206 24.884l-.001 38.13z"/><path d="m457.9 108.2c29.83 0 54.1-24.27 54.1-54.101 0-29.83-24.27-54.099-54.1-54.099-29.831 0-54.1 24.269-54.1 54.1s24.269 54.1 54.1 54.1zm0-78.215c13.296 0 24.114 10.818 24.114 24.114 0 13.297-10.818 24.115-24.114 24.115-13.297 0-24.115-10.818-24.115-24.115 0-13.296 10.818-24.114 24.115-24.114z"/></g></svg>
													<div class="stat-panel-number h1 "><?php echo htmlentities($regbd);?></div>
													<div class="stat-panel-title text-uppercase">Insurance & Security</div>
												</div>
											</div>
											<a href="#" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>

									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
												
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="128" height="128"><g id="_13-car" data-name="13-car"><g id="glyph"><path d="M120,236a52,52,0,1,0,52,52A52.059,52.059,0,0,0,120,236Zm0,76a24,24,0,1,1,24-24A24,24,0,0,1,120,312Z"/><path d="M408,236a52,52,0,1,0,52,52A52.059,52.059,0,0,0,408,236Zm0,76a24,24,0,1,1,24-24A24,24,0,0,1,408,312Z"/><path d="M477.4,193.04,384,176l-79.515-65.975A44.109,44.109,0,0,0,276.526,100H159.38a43.785,43.785,0,0,0-34.359,16.514L74.232,176H40A36.04,36.04,0,0,0,4,212v44a44.049,44.049,0,0,0,44,44h9.145a64,64,0,1,1,125.71,0h162.29a64,64,0,1,1,125.71,0H472a36.04,36.04,0,0,0,36-36V228.632A35.791,35.791,0,0,0,477.4,193.04ZM180,164a12,12,0,0,1-12,12H115.245a6,6,0,0,1-4.563-9.9l34.916-40.9A12,12,0,0,1,154.724,121H168a12,12,0,0,1,12,12Zm60,56H224a12,12,0,0,1,0-24h16a12,12,0,0,1,0,24Zm94.479-43.706-114.507-.266a12,12,0,0,1-11.972-12V133a12,12,0,0,1,12-12h57.548a12,12,0,0,1,7.433,2.58l53.228,42A6,6,0,0,1,334.479,176.294Z"/></g></g></svg>

													<div class="stat-panel-number h1 "><?php echo htmlentities($query);?></div>
													<div class="stat-panel-title text-uppercase">Raw Materials</div>
												</div>
											</div>
											<a href="#" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
                                    <div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  width="128" height="128"
	 viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve"><g><g><path d="M80,304H48l64,64v-32C112,318.354,97.644,304,80,304z"/></g>
    </g><g><g><path d="M320,0H64C46.326,0,32,14.326,32,32v256h48c26.51,0,48,21.49,48,48v48h192c17.674,0,32-14.326,32-32V32
            C352,14.326,337.674,0,320,0z M192,256H96v-32h96V256z M288,192H96v-32h192V192z M288,128H96V96h192V128z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
													<div class="stat-panel-number h1 "><?php echo htmlentities($query);?></div>
													<div class="stat-panel-title text-uppercase">Depreciation Cost</div>
												</div>
											</div>
											<a href="#" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
                                    <div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
                                                <svg id="Layer_2" height="128" viewBox="0 0 128 128" width="128" xmlns="http://www.w3.org/2000/svg" data-name="Layer 2"><path d="m59.2 100.6h-36.318a7.332 7.332 0 1 0 0 3.5h36.318a7.332 7.332 0 1 0 0-3.5zm-43.43 5.582a3.832 3.832 0 1 1 3.831-3.832 3.836 3.836 0 0 1 -3.83 3.837zm50.542-7.663a3.832 3.832 0 1 1 -3.832 3.832 3.836 3.836 0 0 1 3.832-3.828z"/><path d="m126.25 9.88h-58.56a1.813 1.813 0 0 0 -1.26.52l-14.41 14.41a1.8 1.8 0 0 0 -.52 1.26v11.55h-10.46a1.752 1.752 0 0 0 -1.4.7l-10.02 13.28h-21.54a1.746 1.746 0 0 0 -1.75 1.75v22.42a1.752 1.752 0 0 0 1.75 1.75h15.69v9.06h-8a15.77 15.77 0 1 0 0 31.54h50.54a15.77 15.77 0 1 0 0-31.54h-7.99v-9.06h15.68a1.752 1.752 0 0 0 1.75-1.75v-36.39a1.754 1.754 0 0 0 -1.75-1.76h-9v-6.7l7.55-7.54h41.95v57.66h-15.92v-.79a7.757 7.757 0 0 0 -7.75-7.75h-.33a1.746 1.746 0 0 0 -1.75 1.75v8.54a1.854 1.854 0 0 0 .24.89l10 17a1.767 1.767 0 0 0 1.51.86h25.75a1.746 1.746 0 0 0 1.75-1.75v-88.17a1.743 1.743 0 0 0 -1.75-1.74zm-71.25 18.79 6.5 2.7v6.25h-6.5zm11.31 61.41a12.27 12.27 0 1 1 0 24.54h-6.8v-4.45a1.75 1.75 0 0 0 -3.5 0v4.45h-4.86v-4.45a1.75 1.75 0 0 0 -3.5 0v4.45h-4.86v-4.45a1.75 1.75 0 0 0 -3.5 0v4.45h-4.86v-4.45a1.75 1.75 0 0 0 -3.5 0v4.45h-4.86v-4.45a1.75 1.75 0 1 0 -3.5 0v4.45h-6.8a12.27 12.27 0 1 1 0-24.54h8v4.01a1.75 1.75 0 0 0 3.5 0v-4.01h4.26v4.01a1.75 1.75 0 1 0 3.5 0v-4.01h4.26v4.01a1.75 1.75 0 0 0 3.5 0v-4.01h4.26v4.01a1.75 1.75 0 0 0 3.5 0v-4.01h4.27v4.01a1.75 1.75 0 0 0 3.5 0v-4.01zm-39.04-3.5v-9.06h27.55v9.06zm44.98-22.94h-24.89v-12.14h24.89zm0-22.52v6.88h-26.64a1.752 1.752 0 0 0 -1.75 1.75v15.64a1.752 1.752 0 0 0 1.75 1.75h26.64v6.88h-62.42v-7.32h22.6a1.75 1.75 0 0 0 0-3.5h-22.6v-8.1h20.66a1.772 1.772 0 0 0 1.4-.69l10.02-13.29zm-9.41-12.99-6.5-2.69 10.72-10.73 2.7 6.5zm10.15-8.25-2.69-6.5h44.2v6.5zm19.26 56.36a4.259 4.259 0 0 1 2.83 4.01v.79h-2.83zm32.25 21.8h-23l-2.94-5h11.27a1.75 1.75 0 0 0 0-3.5h-13.33l-2.94-5h30.94zm0-17h-6.5v-57.66h6.5zm0-61.16h-6.5v-6.5h6.5z"/></svg>
													<div class="stat-panel-number h1 "></div>
													<div class="stat-panel-title text-uppercase">Project Expenses</div>
												</div>
											</div>
											<a href="expenditurelist.php" class="block-anchor panel-footer text-center">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
                                    <div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
                                                <svg id="Layer_2" height="128" viewBox="0 0 128 128" width="128" xmlns="http://www.w3.org/2000/svg" data-name="Layer 2"><path d="m59.2 100.6h-36.318a7.332 7.332 0 1 0 0 3.5h36.318a7.332 7.332 0 1 0 0-3.5zm-43.43 5.582a3.832 3.832 0 1 1 3.831-3.832 3.836 3.836 0 0 1 -3.83 3.837zm50.542-7.663a3.832 3.832 0 1 1 -3.832 3.832 3.836 3.836 0 0 1 3.832-3.828z"/><path d="m126.25 9.88h-58.56a1.813 1.813 0 0 0 -1.26.52l-14.41 14.41a1.8 1.8 0 0 0 -.52 1.26v11.55h-10.46a1.752 1.752 0 0 0 -1.4.7l-10.02 13.28h-21.54a1.746 1.746 0 0 0 -1.75 1.75v22.42a1.752 1.752 0 0 0 1.75 1.75h15.69v9.06h-8a15.77 15.77 0 1 0 0 31.54h50.54a15.77 15.77 0 1 0 0-31.54h-7.99v-9.06h15.68a1.752 1.752 0 0 0 1.75-1.75v-36.39a1.754 1.754 0 0 0 -1.75-1.76h-9v-6.7l7.55-7.54h41.95v57.66h-15.92v-.79a7.757 7.757 0 0 0 -7.75-7.75h-.33a1.746 1.746 0 0 0 -1.75 1.75v8.54a1.854 1.854 0 0 0 .24.89l10 17a1.767 1.767 0 0 0 1.51.86h25.75a1.746 1.746 0 0 0 1.75-1.75v-88.17a1.743 1.743 0 0 0 -1.75-1.74zm-71.25 18.79 6.5 2.7v6.25h-6.5zm11.31 61.41a12.27 12.27 0 1 1 0 24.54h-6.8v-4.45a1.75 1.75 0 0 0 -3.5 0v4.45h-4.86v-4.45a1.75 1.75 0 0 0 -3.5 0v4.45h-4.86v-4.45a1.75 1.75 0 0 0 -3.5 0v4.45h-4.86v-4.45a1.75 1.75 0 0 0 -3.5 0v4.45h-4.86v-4.45a1.75 1.75 0 1 0 -3.5 0v4.45h-6.8a12.27 12.27 0 1 1 0-24.54h8v4.01a1.75 1.75 0 0 0 3.5 0v-4.01h4.26v4.01a1.75 1.75 0 1 0 3.5 0v-4.01h4.26v4.01a1.75 1.75 0 0 0 3.5 0v-4.01h4.26v4.01a1.75 1.75 0 0 0 3.5 0v-4.01h4.27v4.01a1.75 1.75 0 0 0 3.5 0v-4.01zm-39.04-3.5v-9.06h27.55v9.06zm44.98-22.94h-24.89v-12.14h24.89zm0-22.52v6.88h-26.64a1.752 1.752 0 0 0 -1.75 1.75v15.64a1.752 1.752 0 0 0 1.75 1.75h26.64v6.88h-62.42v-7.32h22.6a1.75 1.75 0 0 0 0-3.5h-22.6v-8.1h20.66a1.772 1.772 0 0 0 1.4-.69l10.02-13.29zm-9.41-12.99-6.5-2.69 10.72-10.73 2.7 6.5zm10.15-8.25-2.69-6.5h44.2v6.5zm19.26 56.36a4.259 4.259 0 0 1 2.83 4.01v.79h-2.83zm32.25 21.8h-23l-2.94-5h11.27a1.75 1.75 0 0 0 0-3.5h-13.33l-2.94-5h30.94zm0-17h-6.5v-57.66h6.5zm0-61.16h-6.5v-6.5h6.5z"/></svg>
													<div class="stat-panel-number h1 "></div>
													<div class="stat-panel-title text-uppercase">Maintenance</div>
												</div>
											</div>
											<a href="Maintenancelist.php" class="block-anchor panel-footer text-center">Full Detail <i class="fa fa-arrow-right"></i></a>
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