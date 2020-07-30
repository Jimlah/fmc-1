<?php
session_start();

error_reporting(0);
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
            
            <div id="page-wrapper" class=" dashbard-1">
                <div class="row">
                    
                    <?php
                    require_once "public/config/topbar.php";
                    ?>
                    
                </div>
                <div class="row  white-bg dashboard-header">
                    
                    <div class="col-sm-12 col-lg-12">
                        <h2 class="FMS-title">Farm Management Services</h2>
                        
                        
                        <div class="holder">
                            
                            <div class="risk_management-fm">
                                <div class="title-fm">Risk Management</div>
                                <div class="svg-holder">
                                    <?xml version="1.0"?>
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512.046 512.046" height="512px" viewBox="0 0 512.046 512.046" width="512px" class="hovered-paths"><g><g><path d="m395.32 181.387-108.619 23.753 53.109-185.98c4.614-16.164-16.999-26.519-26.69-12.752l-211.861 301c-7.966 11.318 2.418 26.507 15.852 23.199l96.784-23.826-52.936 186.158c-4.561 16.04 16.673 26.263 26.478 13.036l223.139-301c8.234-11.11-1.749-26.54-15.256-23.588zm-183.016 240.666 37.509-131.909c3.137-11.029-6.813-21.425-18.013-18.668l-82.937 20.417 137.752-195.708-35.653 124.852c-3.103 10.866 6.521 21.205 17.628 18.772l94.064-20.57z" data-original="#000000" class="hovered-path active-path" data-old_color="#000000" fill="#1AB394"/><path d="m385.636 422.043-35.999-.6 19.12-37.603c3.755-7.385.813-16.415-6.572-20.169-7.386-3.756-16.415-.813-20.17 6.572l-30 59c-6.103 11.965 1.884 19.807 13.387 21.801l35.914.599-19.345 38.691c-3.705 7.41-.702 16.419 6.708 20.125 7.424 3.712 16.426.687 20.124-6.708l30-60c4.927-9.858-2.203-21.546-13.167-21.708z" data-original="#000000" class="hovered-path active-path" data-old_color="#000000" fill="#1AB394"/><path d="m152.094 1.625c-7.41-3.704-16.42-.701-20.125 6.708l-30 60c-4.879 9.759 2.079 21.708 13.504 21.708h35.642l-19.146 38.292c-3.705 7.41-.701 16.419 6.708 20.125 7.424 3.712 16.427.687 20.125-6.708l30-60c4.991-9.983-2.35-21.708-13.417-21.708h-35.729l19.146-38.292c3.705-7.41.701-16.42-6.708-20.125z" data-original="#000000" class="hovered-path active-path" data-old_color="#000000" fill="#1AB394"/></g></g> </svg>
                                </div>
                                <a href="#" id="proceed">View</a>
                            </div>
                            
                            <div class="supply-chn-mgt-fm">
                                <div class="title-fm">Supply-chain Management</div>
                                <div class="svg-holder">
                                    <?xml version="1.0"?> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve" width="512px" height="512px" class="hovered-paths"><g><g> <path style="fill:#44C868;" d="M511.879,475.685l-40.224-221.611c-0.401-2.212-1.773-4.128-3.739-5.221l-101.242-56.31   c-1.314-0.732-2.787-1.023-4.234-0.911l18.419,237.608l-0.617,0.276l121.164,54.357c0.986,0.441,2.034,0.659,3.077,0.659   c1.651,0,3.287-0.543,4.632-1.596C511.313,481.22,512.376,478.428,511.879,475.685z" data-original="#44C868" class=""/> <path style="fill:#44C868;" d="M256,246.375l-103.545-53.931c-1.241-0.647-2.617-0.911-3.972-0.82   c0.359-0.022,0.72-0.02,1.078,0.008l-18.419,237.608l121.781,54.634c0.983,0.44,2.032,0.659,3.077,0.659l0,0V246.375z" data-original="#44C868" class=""/> </g><g> <path style="fill:#4CE166;" d="M149.56,191.633c-1.447-0.112-2.92,0.179-4.234,0.91l-101.243,56.31   c-1.966,1.093-3.338,3.008-3.739,5.221L0.121,475.685c-0.498,2.742,0.566,5.534,2.763,7.252c1.347,1.053,2.982,1.596,4.632,1.596   c1.043,0,2.092-0.217,3.077-0.659l120.504-54.061L149.56,191.633z" data-original="#4CE166" class=""/> <path style="fill:#4CE166;" d="M362.439,191.628c-0.996,0.077-1.981,0.342-2.894,0.818L256,246.376v238.158c0,0,0,0,0.001,0   c1.045,0,2.095-0.218,3.077-0.659l121.781-54.634L362.439,191.628z" data-original="#4CE166" class=""/> </g><polygon style="fill:#FFDB56;" points="28.154,321.233 19.983,366.252 140.977,302.346 143.786,266.107 144.252,260.097 " data-original="#FFDB56" class=""/><path style="fill:#A8EEFC;" d="M142.066,288.294l-1.089,14.052L19.983,366.252L0.121,475.685c-0.498,2.742,0.566,5.534,2.763,7.252  c1.347,1.053,2.982,1.596,4.632,1.596c1.043,0,2.092-0.217,3.077-0.659l120.504-54.061L142.066,288.294L142.066,288.294z" data-original="#A8EEFC"/><g> <polygon style="fill:#FFBB24;" points="256.03,276.08 144.252,260.097 140.977,302.346 256,477.025 256,413.507 187.363,305.429    256.03,313.642  " data-original="#FFBB24" class=""/> <polygon style="fill:#FFBB24;" points="459.946,244.421 411.311,217.37 365.269,228.128 365.845,235.564 368.119,264.898  " data-original="#FFBB24" class=""/> </g><polygon style="fill:#FFDB56;" points="372.202,317.576 367.842,261.327 367.842,261.327 365.269,228.128 256.03,276.08   256.03,313.642 327.386,282.612 " data-original="#FFDB56" class=""/><path style="fill:#FFBB24;" d="M511.879,475.685l-10.103-55.666L368.119,264.898l4.084,52.678l137.07,165.221  C511.357,481.07,512.364,478.358,511.879,475.685z" data-original="#FFBB24" class=""/><path style="fill:#FF4A4A" d="M256.481,27.465c-57.963,0-105.12,47.118-105.12,105.034c0,35.826,17.009,74.29,50.556,114.322  c24.639,29.403,48.943,48.314,49.966,49.105c1.354,1.047,2.976,1.57,4.599,1.57c1.622,0,3.245-0.523,4.599-1.57  c1.022-0.791,25.327-19.702,49.966-49.105c33.547-40.032,50.556-78.495,50.556-114.322  C361.601,74.583,314.444,27.465,256.481,27.465z M295.411,132.498c0,21.482-17.43,38.898-38.93,38.898  c-21.5,0-38.93-17.415-38.93-38.898s17.43-38.898,38.93-38.898C277.981,93.6,295.411,111.016,295.411,132.498z" data-original="#FF4A4A" class="hovered-path active-path"/><path style="fill:#E7343F;" d="M256.481,27.465c-4.594,0-9.119,0.298-13.559,0.872c51.583,6.667,91.562,50.836,91.562,104.162  c0,35.826-17.009,74.29-50.556,114.322c-15.845,18.908-31.54,33.467-41.005,41.669c5.254,4.552,8.596,7.154,8.96,7.436  c1.354,1.047,2.976,1.57,4.599,1.57c1.622,0,3.245-0.523,4.599-1.57c1.022-0.791,25.327-19.702,49.966-49.105  c33.547-40.032,50.556-78.495,50.556-114.322C361.601,74.583,314.444,27.465,256.481,27.465z" data-original="#E7343F" class=""/><path style="fill:#FFDB56;" d="M259.078,483.874l45.285-20.316L256,413.507v71.026c0,0,0,0,0.001,0  C257.046,484.533,258.095,484.316,259.078,483.874z" data-original="#FFDB56" class=""/><g> <path style="fill:#1EA4E9" d="M471.654,254.074c-0.401-2.212-1.773-4.128-3.739-5.221l-7.97-4.433l-91.827,20.477l0,0   l133.656,155.121L471.654,254.074z" data-original="#1EA4E9" class=""/> <path style="fill:#1EA4E9" d="M255.999,484.533C256,484.533,256,484.533,255.999,484.533v-7.508L140.977,302.346l-9.837,126.895   l121.781,54.634C253.904,484.316,254.953,484.533,255.999,484.533z" data-original="#1EA4E9" class=""/> </g></g> </svg>
                                    
                                </div>
                                <a href="farmlocation.php" id="proceed">View Map</a>
                            </div>
                            
                            <div class="inventory-mgt-fm">
                                <div class="title-fm">Inventory</div>
                                <div class="svg-holder">
                                    <svg id="Layer_5" enable-background="new 0 0 64 64" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><g><path d="m29 10h-24c0-4.42 3.58-8 8-8h8c4.42 0 8 3.58 8 8z" fill="#ff826e"/></g><g><path d="m31 12v1c0 .55-.45 1-1 1h-3-14-8-1c-.55 0-1-.45-1-1v-2c0-.55.45-1 1-1h1 24 1c.55 0 1 .45 1 1z" fill="#fc6e51"/></g><g><path d="m13 26v4l-1.51-.57c-3.9-1.46-6.49-5.19-6.49-9.36v-6.07h8v4h-.67c-.92 0-1.75.37-2.35.98-.61.6-.98 1.43-.98 2.35 0 1.05.49 2.04 1.33 2.67z" fill="#b27946"/></g><g><path d="m18 52v6h-6.4c-5.3 0-9.6-4.3-9.6-9.6 0-3.36 1.13-6.52 3.07-9.06 1.56-2.05 3.66-3.7 6.11-4.72l.82 7.38 4-4 4 4 .86-7.75.19.02c5.65.76 10.22 4.62 12.07 9.73h-9.12c-1.1 0-2 .9-2 2v4h-.76c-.79 0-1.56.32-2.12.88z" fill="#b4dd7f"/></g><g><path d="m19 34 1.86.25-.86 7.75-4-4z" fill="#a0d468"/></g><g><path d="m13 34 3 4-4 4-.82-7.38c.59-.24 1.19-.45 1.82-.62z" fill="#a0d468"/></g><g><path d="m38 52v8c0 1.1-.9 2-2 2h-12c-1.1 0-2-.9-2-2v-2h1c1.66 0 3-1.34 3-3v-2c0-1.66-1.34-3-3-3h-1v-4c0-1.1.9-2 2-2h9.12 2.88c1.1 0 2 .9 2 2z" fill="#e6e9ed"/></g><g><path d="m28.65 19.48c.23.34.35.74.35 1.14 0 .85-.48 1.62-1.23 2l-.77.38v3c0 2.21-1.79 4-4 4h-4v3 1l-3 4-3-4v-4-4l-2.67-2c-.84-.63-1.33-1.62-1.33-2.67 0-.92.37-1.75.98-2.35.6-.61 1.43-.98 2.35-.98h.67v-4h14v3z" fill="#f0d0b4"/></g><g><path d="m26 53v2c0 1.66-1.34 3-3 3h-1-4v-6l1.12-1.12c.56-.56 1.33-.88 2.12-.88h.76 1c1.66 0 3 1.34 3 3z" fill="#f0d0b4"/></g><g><path d="m62 4v16c0 1.1-.9 2-2 2h-8-8c-1.1 0-2-.9-2-2v-8-8c0-1.1.9-2 2-2h4v6h8v-6h4c1.1 0 2 .9 2 2z" fill="#d3a06c"/></g><g><circle cx="52" cy="52" fill="#fcd770" r="10"/></g><g><path d="m48 2h8v6h-8z" fill="#b27946"/></g><g><circle cx="52" cy="32" fill="#ff826e" r="2"/></g></g><g><path d="m51 45v2.145c-1.155.366-2 1.435-2 2.709 0 1.087.604 2.065 1.578 2.553l1.95.975c.291.145.472.438.472.764 0 .47-.383.854-.854.854h-.292c-.471 0-.854-.384-.854-.854v-1.146h-2v1.146c0 1.275.845 2.344 2 2.709v2.145h2v-2.145c1.155-.366 2-1.435 2-2.709 0-1.087-.604-2.065-1.578-2.553l-1.95-.975c-.291-.145-.472-.438-.472-.764 0-.47.383-.854.854-.854h.292c.471 0 .854.384.854.854v1.146h2v-1.146c0-1.275-.845-2.344-2-2.709v-2.145z"/><path d="m60 23c1.654 0 3-1.346 3-3v-16c0-1.654-1.346-3-3-3h-16c-1.654 0-3 1.346-3 3v7h-9c0-1.103-.897-2-2-2h-.059c-.5-4.493-4.317-8-8.941-8h-8c-4.624 0-8.442 3.507-8.941 8h-.059c-1.103 0-2 .897-2 2v2c0 1.103.897 2 2 2v5.07c0 4.56 2.868 8.698 7.138 10.3l.862.323v2.563c-6.514 2.12-11 8.24-11 15.146 0 5.843 4.754 10.598 10.598 10.598h9.402v1c0 1.654 1.346 3 3 3h12c1.654 0 3-1.346 3-3v-7h2.051c.507 5.598 5.221 10 10.949 10 6.065 0 11-4.935 11-11 0-5.728-4.402-10.442-10-10.949v-6.235c1.161-.414 2-1.514 2-2.816s-.839-2.402-2-2.816v-6.184zm-11-20h6v4h-6zm-6 1c0-.552.449-1 1-1h3v6h10v-6h3c.551 0 1 .448 1 1v16c0 .552-.449 1-1 1h-16c-.551 0-1-.448-1-1zm-30-1h8c3.519 0 6.432 2.614 6.92 6h-21.84c.488-3.386 3.401-6 6.92-6zm-9 8h26v2l-26 .001zm23.823 9.036c.115.174.177.377.177.587 0 .468-.26.889-.679 1.099l-1.321.66v3.618c0 1.654-1.346 3-3 3h-5v4.667l-2 2.666-2-2.666v-8.167l-3.066-2.3c-.585-.438-.934-1.137-.934-1.867 0-1.286 1.047-2.333 2.333-2.333h1.667v-4h12v2.303zm-8.375 15.033.312.041-.524 4.711-1.916-1.915zm-6.822.099 2.054 2.739-1.916 1.915-.504-4.537c.12-.044.244-.078.366-.117zm-.786-6.671c-3.493-1.309-5.84-4.696-5.84-8.427v-5.07h6v2.013c-2.234.171-4 2.043-4 4.32 0 1.356.648 2.652 1.733 3.467l2.267 1.7v2.057zm-8.84 19.904c0-5.193 2.907-9.871 7.343-12.26l.893 8.038 4.764-4.765 4.764 4.765.975-8.776c4.327.841 7.958 3.653 9.863 7.597h-7.602c-1.654 0-3 1.346-3 3v3.024c-.975.059-1.888.451-2.586 1.148l-.828.828h-4.465c-1.084 0-2.146-.44-2.914-1.207-.778-.778-1.207-1.813-1.207-2.914v-2.879h-2v2.879c0 1.636.637 3.173 1.793 4.328 1.157 1.156 2.694 1.793 4.328 1.793h3.879v4h-5.402c-4.741 0-8.598-3.857-8.598-8.599zm16 4.013.828-.828c.379-.378.881-.586 1.415-.586h1.757c1.103 0 2 .897 2 2v2c0 1.103-.897 2-2 2h-4zm18 7.586c0 .552-.449 1-1 1h-12c-.551 0-1-.448-1-1v-1c2.206 0 4-1.794 4-4v-2c0-2.206-1.794-4-4-4v-3c0-.552.449-1 1-1h12c.551 0 1 .448 1 1zm24-8c0 4.963-4.038 9-9 9s-9-4.037-9-9 4.038-9 9-9 9 4.037 9 9zm-9-19c-.551 0-1-.448-1-1s.449-1 1-1 1 .448 1 1-.449 1-1 1zm-1-3.816c-1.161.414-2 1.514-2 2.816s.839 2.402 2 2.816v6.235c-5.268.478-9.472 4.681-9.949 9.949h-2.051v-5c0-1.654-1.346-3-3-3h-2.209c-2.166-5.26-6.934-8.961-12.614-9.719l-1.177-.157v-2.124h3c2.757 0 5-2.243 5-5v-2.382l.216-.107c1.1-.552 1.784-1.657 1.784-2.888 0-.605-.177-1.192-.513-1.696l-1.487-2.23v-1.697h2c1.103 0 2-.897 2-2h9v7c0 1.654 1.346 3 3 3h7z"/><path d="m27 47h6v2h-6z"/></g></g></svg>
                                    <a href="#" id="proceed">Check Inventory</a>
                                </div>
                            </div>
                            
                            
                            <div class="fin-mgt-fm">
                                <div class="title-fm">Financial Management</div>
                                <div class="pie">
                                    <canvas id="myChart">
                                    </canvas>
                                </div>
                                <h2>Savings: 45,000 UIC</h2>
                                <h2 class="losses">Losses: 25,000 UIC</h2>
                            </div>
                            
                            <div class="grouped">
                                <div class="monitoring-mgt-fm">
                                    <div class="title-fm-spec"><b>Monitoring Management</b></div>
                                    <p>quis facere veritatis consequatur unde tempora quae ipsam fugit nam odit.</p>
                                    
                                </div>
                                <div class="investments">
                                    <div class="title-fm-spec">Investment Management</div>
                                    <div class="svg-holder line-up">
                                        <div class="trans">
                                            <div class="green"><i class="fa fa-arrow-up fa-2x"></i></div>
                                            <span><h3>500UIC</h3></span>
                                        </div>
                                        <div class="trans">
                                            <div class="red"><i class="fa fa-arrow-down fa-2x"></i></div>
                                            <span><h3>50UIC</h3></span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                        
                    </div>
                    
                    
                </div>
                
            </div>
            <?php
            require_once "public/config/footer.php";
            ?>
            
        </body>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'doughnut',
                
                // The data for our dataset
                data: {
                    labels: ['Losses','Savings'],
                    datasets: [{
                        label: 'Financial Management',
                        backgroundColor: ['rgb(195, 34, 69)','#2ff5dc'],
                        borderColor: ['rgb(228, 29, 72)','#1b6859'],
                        data: [25000, 45000]
                    }]
                },
                
                // Configuration options go here
                options: {
                    animation:{animateScale:false,duration:3000,easing:'linear'},
                    
                }
            });
            
        </script>
        <!-- Mirrored from webapplayers.com/inspinia_admin-v2.6.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Sep 2016 02:26:53 GMT -->
        </html>
        
        <?php } ?>