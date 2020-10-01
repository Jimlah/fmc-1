<?php
session_start();
error_reporting(0);
$error = "";
$msg = "";
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {

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
                    <div class="panel-heading">
                        <h2 class="page-title">Field/Pen Management</h2>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12">

                        <h2 class="page-title"></h2>

                        <!-- Zero Configuration Table -->
                        <div class="panel panel-default" style="background:#b3f3e677;border-radius:5px;box-shadow:1px 1px 4px 2px rgba(110, 104, 104, 0.335);">
                            <div class="panel-heading">View Panel</div>
                            <div class="panel-body">
                                <?php if ($error) { ?><div class="errorWrap" id="msgshow"><?php echo htmlentities($error); ?>
                                    </div><?php } else if ($msg) { ?><div class="succWrap" id="msgshow"><?php echo htmlentities($msg); ?> </div><?php } ?>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-primary text-light">
                                                <div class="stat-panel text-center">
                                                  <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><g><path d="m417.178 216.325c-4.143 0-7.5-3.357-7.5-7.5v-19.15c0-4.143 3.357-7.5 7.5-7.5s7.5 3.357 7.5 7.5v19.15c0 4.143-3.358 7.5-7.5 7.5z" fill="#2b4d66"/></g><g><path d="m94.823 216.325c-4.143 0-7.5-3.357-7.5-7.5v-19.15c0-4.143 3.357-7.5 7.5-7.5s7.5 3.357 7.5 7.5v19.15c0 4.143-3.357 7.5-7.5 7.5z" fill="#2b4d66"/></g></g><path d="m461.243 500.057h-410.485v-280.359c0-11.528 9.345-20.873 20.873-20.873h368.74c11.528 0 20.873 9.345 20.873 20.873v280.359z" fill="#80b4fb"/><path d="m440.37 198.825h-19.561c11.528 0 20.873 9.345 20.873 20.873v280.359h19.561v-280.359c0-11.528-9.345-20.873-20.873-20.873z" fill="#61a2f9"/><path d="m271.278 140.995-28.441 28.441-83.074-47.252c-.399-.227-.711-.582-.885-1.007l-40.946-99.857c-.314-.767-.138-1.647.448-2.233l14.042-14.042c.802-.802 2.104-.802 2.906 0z" fill="#e7ecf6"/><path d="m122.27 15.197 137.403 137.403 11.605-11.605-135.95-135.95c-.802-.802-2.104-.802-2.906 0z" fill="#d8e2f1"/><path d="m413.128 415.874h-85.633c-5.435 0-9.84-4.406-9.84-9.84v-42.605c0-5.435 4.406-9.84 9.84-9.84h85.633c5.435 0 9.84 4.406 9.84 9.84v42.605c.001 5.434-4.405 9.84-9.84 9.84z" fill="#e7ecf6"/><path d="m413.128 353.588h-16.23c5.435 0 9.84 4.406 9.84 9.84v42.605c0 5.435-4.406 9.84-9.84 9.84h16.23c5.435 0 9.84-4.405 9.84-9.84v-42.605c.001-5.434-4.405-9.84-9.84-9.84z" fill="#d8e2f1"/><path d="m238.439 163.142h35.122v306.207h-35.122z" fill="#c3d5ef"/><path d="m238.439 221.577c5.602 1.503 11.485 2.317 17.561 2.317s11.959-.814 17.561-2.317v-58.435h-35.122z" fill="#b7c8ea"/><path d="m271.278 171.55-28.441-28.441 47.252-83.074c.227-.399.582-.711 1.007-.885l99.858-40.946c.767-.314 1.647-.138 2.233.448l14.042 14.042c.802.802.802 2.104 0 2.906z" fill="#e7ecf6"/><path d="m397.076 22.543-137.403 137.402 11.605 11.605 135.95-135.95c.802-.802.802-2.104 0-2.906z" fill="#d8e2f1"/><path d="m240.722 171.55 28.441-28.441 83.074 47.252c.399.227.711.581.885 1.007l40.946 99.858c.314.767.138 1.647-.448 2.233l-14.042 14.041c-.802.802-2.104.802-2.906 0z" fill="#e7ecf6"/><path d="m389.73 297.348-137.403-137.403-11.605 11.605 135.95 135.95c.802.802 2.104.802 2.906 0z" fill="#d8e2f1"/><path d="m240.722 140.995 28.441 28.441-47.252 83.074c-.227.399-.582.711-1.007.885l-99.858 40.946c-.767.314-1.647.138-2.233-.448l-14.042-14.042c-.802-.802-.802-2.104 0-2.906z" fill="#e7ecf6"/><path d="m114.925 290.003 137.402-137.403-11.605-11.605-135.95 135.95c-.802.802-.802 2.104 0 2.906z" fill="#d8e2f1"/><path d="m354.082 500.057h-196.163v-19.819c0-6.014 4.875-10.889 10.889-10.889h174.386c6.014 0 10.889 4.875 10.889 10.889v19.819z" fill="#365e7d"/><path d="m343.194 469.349h-19.905c6.013 0 10.888 4.875 10.888 10.889v19.819h19.905v-19.819c0-6.014-4.875-10.889-10.888-10.889z" fill="#2b4d66"/><g><path d="m222.599 417.77h-93.613c-13.3 0-24.119-10.819-24.119-24.119v-22.721c0-4.143 3.357-7.5 7.5-7.5s7.5 3.357 7.5 7.5v22.721c0 5.028 4.091 9.119 9.119 9.119h93.613c4.143 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#2b4d66"/></g><circle cx="256" cy="156.273" fill="#df6b57" r="43.402"/><path d="m256 112.871c-4.5 0-8.839.685-12.92 1.956 17.66 5.5 30.481 21.975 30.481 41.446s-12.821 35.946-30.481 41.446c4.081 1.271 8.421 1.956 12.92 1.956 23.97 0 43.402-19.432 43.402-43.402s-19.432-43.402-43.402-43.402z" fill="#dd544f"/><path d="m238.439 432.009h-17.991c-4.335 0-7.849-3.514-7.849-7.849v-27.778c0-4.335 3.514-7.849 7.849-7.849h17.991z" fill="#e7ecf6"/><path d="m131.549 380.93h-38.366c-4.506 0-8.159-3.653-8.159-8.159v-38.367c0-4.506 3.653-8.159 8.159-8.159h38.367c4.506 0 8.159 3.653 8.159 8.159v38.367c-.001 4.506-3.654 8.159-8.16 8.159z" fill="#df6b57"/><path d="m131.549 326.246h-19.737c4.506 0 8.159 3.653 8.159 8.159v38.367c0 4.506-3.653 8.159-8.159 8.159h19.737c4.506 0 8.159-3.653 8.159-8.159v-38.367c0-4.506-3.653-8.159-8.159-8.159z" fill="#dd544f"/><g><path d="m504.5 507.557h-497c-4.143 0-7.5-3.357-7.5-7.5s3.357-7.5 7.5-7.5h497c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5z" fill="#95d6a4"/></g><g><path d="m117.525 361.088h-10.319c-4.143 0-7.5-3.357-7.5-7.5s3.357-7.5 7.5-7.5h10.319c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5z" fill="#2b4d66"/></g><g><path d="m392.771 392.231h-44.917c-4.143 0-7.5-3.357-7.5-7.5s3.357-7.5 7.5-7.5h44.917c4.143 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#df6b57"/></g></g></svg>
                                                    <div class="stat-panel-number h1 "></div>
                                                    <div class="stat-panel-title text-uppercase">Field</div>
                                                </div>
                                            </div>
                                            <a href="fplist.php" class="block-anchor panel-footer text-center">Full
                                                Detail <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-primary text-light">
                                                <div class="stat-panel text-center">
                                                  <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m132.298 437.531h-39.66c-21.706 0-39.366-17.66-39.366-39.366v-75.218c0-4.268 3.459-7.726 7.726-7.726s7.726 3.459 7.726 7.726v75.218c0 13.186 10.727 23.913 23.913 23.913h39.66c4.268 0 7.726 3.459 7.726 7.726s-3.457 7.727-7.725 7.727z" fill="#365e7d"/></g><path d="m507.439 486.466h-380.882c-2.519 0-4.561-2.042-4.561-4.56v-451.812c0-2.519 2.042-4.561 4.561-4.561h380.882c2.519 0 4.56 2.042 4.56 4.561v451.812c.001 2.519-2.041 4.56-4.56 4.56z" fill="#80b4fb"/><path d="m507.439 25.534h-22.393c2.519 0 4.56 2.042 4.56 4.561v451.811c0 2.519-2.042 4.561-4.56 4.561h22.393c2.519 0 4.561-2.042 4.561-4.561v-451.812c0-2.519-2.042-4.56-4.561-4.56z" fill="#61a2f9"/><path d="m121.997 307.387h-112.487c-5.252 0-9.51-4.258-9.51-9.51v-151.491c0-5.252 4.258-9.51 9.51-9.51h112.487z" fill="#365e7d"/><path d="m104.167 136.877h17.83v170.511h-17.83z" fill="#2b4d66"/><path d="m81.048 333.248h-40.1c-4.601 0-8.33-3.73-8.33-8.33v-17.531h56.761v17.531c0 4.601-3.73 8.33-8.331 8.33z" fill="#c3d5ef"/><path d="m401.046 247.526h-168.096c-3.619 0-6.552-2.933-6.552-6.552v-147.17c0-3.619 2.933-6.552 6.552-6.552h168.096c3.619 0 6.552 2.933 6.552 6.552v147.17c0 3.619-2.933 6.552-6.552 6.552z" fill="#d3effb"/><path d="m401.046 87.252h-22.393c3.618 0 6.552 2.933 6.552 6.552v147.17c0 3.618-2.934 6.552-6.552 6.552h22.393c3.618 0 6.552-2.934 6.552-6.552v-147.17c0-3.618-2.933-6.552-6.552-6.552z" fill="#b1e4f9"/><circle cx="172.851" cy="126.04" fill="#df6b57" r="20.226"/><circle cx="461.146" cy="126.04" fill="#df6b57" r="20.226"/><path d="m172.851 105.814c-2.498 0-4.88.474-7.089 1.302 7.669 2.875 13.137 10.251 13.137 18.924s-5.469 16.049-13.137 18.924c2.209.828 4.591 1.303 7.089 1.303 11.171 0 20.226-9.056 20.226-20.226 0-11.172-9.056-20.227-20.226-20.227z" fill="#dd544f"/><path d="m461.146 105.814c-2.498 0-4.88.474-7.089 1.302 7.669 2.875 13.138 10.251 13.138 18.924s-5.469 16.049-13.138 18.924c2.209.828 4.591 1.303 7.089 1.303 11.171 0 20.226-9.056 20.226-20.226 0-11.172-9.055-20.227-20.226-20.227z" fill="#dd544f"/><g><path d="m181.563 204.468h-17.426c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h17.426c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.726 7.726z" fill="#e7ecf6"/></g><g><path d="m181.563 234.34h-17.426c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h17.426c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.726 7.726z" fill="#e7ecf6"/></g><g><path d="m469.859 204.468h-17.426c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h17.426c4.268 0 7.726 3.459 7.726 7.726s-3.459 7.726-7.726 7.726z" fill="#e7ecf6"/></g><g><path d="m469.859 234.34h-17.426c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h17.426c4.268 0 7.726 3.459 7.726 7.726s-3.459 7.726-7.726 7.726z" fill="#e7ecf6"/></g><path d="m451.36 424.748h-268.723c-5.405 0-9.787-4.382-9.787-9.787v-117.382c0-5.405 4.382-9.787 9.787-9.787h268.723c5.405 0 9.787 4.382 9.787 9.787v117.382c-.001 5.405-4.382 9.787-9.787 9.787z" fill="#c3d5ef"/><path d="m451.36 287.792h-21.363c5.405 0 9.787 4.382 9.787 9.787v117.383c0 5.405-4.382 9.786-9.787 9.786h21.363c5.405 0 9.786-4.382 9.786-9.786v-117.383c0-5.405-4.381-9.787-9.786-9.787z" fill="#b7c8ea"/><g><g><path d="m230.895 332.501h-18.924c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h18.924c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.726 7.726z" fill="#365e7d"/></g><g><path d="m294.605 332.501h-18.924c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h18.924c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.726 7.726z" fill="#365e7d"/></g><g><path d="m358.315 332.501h-18.924c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h18.924c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.726 7.726z" fill="#365e7d"/></g><g><path d="m422.025 332.501h-18.924c-4.268 0-7.726-3.459-7.726-7.726s3.459-7.726 7.726-7.726h18.924c4.268 0 7.726 3.459 7.726 7.726s-3.459 7.726-7.726 7.726z" fill="#365e7d"/></g></g><g><g><path d="m230.895 363.996h-18.924c-4.268 0-7.726-3.459-7.726-7.726 0-4.268 3.459-7.726 7.726-7.726h18.924c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.726 7.726z" fill="#365e7d"/></g><g><path d="m294.605 363.996h-18.924c-4.268 0-7.726-3.459-7.726-7.726 0-4.268 3.459-7.726 7.726-7.726h18.924c4.268 0 7.726 3.459 7.726 7.726.001 4.267-3.458 7.726-7.726 7.726z" fill="#365e7d"/></g><g><path d="m358.315 363.996h-18.924c-4.268 0-7.726-3.459-7.726-7.726 0-4.268 3.459-7.726 7.726-7.726h18.924c4.268 0 7.726 3.459 7.726 7.726.001 4.267-3.458 7.726-7.726 7.726z" fill="#365e7d"/></g><g><path d="m422.025 363.996h-18.924c-4.268 0-7.726-3.459-7.726-7.726 0-4.268 3.459-7.726 7.726-7.726h18.924c4.268 0 7.726 3.459 7.726 7.726s-3.459 7.726-7.726 7.726z" fill="#365e7d"/></g></g><g><g><path d="m230.895 395.491h-18.924c-4.268 0-7.726-3.459-7.726-7.726 0-4.268 3.459-7.726 7.726-7.726h18.924c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.726 7.726z" fill="#365e7d"/></g><g><path d="m294.605 395.491h-18.924c-4.268 0-7.726-3.459-7.726-7.726 0-4.268 3.459-7.726 7.726-7.726h18.924c4.268 0 7.726 3.459 7.726 7.726.001 4.267-3.458 7.726-7.726 7.726z" fill="#365e7d"/></g><g><path d="m358.315 395.491h-18.924c-4.268 0-7.726-3.459-7.726-7.726 0-4.268 3.459-7.726 7.726-7.726h18.924c4.268 0 7.726 3.459 7.726 7.726.001 4.267-3.458 7.726-7.726 7.726z" fill="#365e7d"/></g><g><path d="m422.025 395.491h-18.924c-4.268 0-7.726-3.459-7.726-7.726 0-4.268 3.459-7.726 7.726-7.726h18.924c4.268 0 7.726 3.459 7.726 7.726s-3.459 7.726-7.726 7.726z" fill="#365e7d"/></g></g><g><path d="m279.185 146.127c-1.977 0-3.955-.755-5.464-2.263-3.017-3.018-3.017-7.909 0-10.928l12.361-12.361c3.018-3.016 7.909-3.016 10.928 0 3.017 3.018 3.017 7.909 0 10.928l-12.361 12.361c-1.51 1.509-3.487 2.263-5.464 2.263z" fill="#b1e4f9"/></g><g><path d="m275.018 194.099c-1.977 0-3.955-.755-5.464-2.263-3.017-3.018-3.017-7.909 0-10.928l60.333-60.333c3.018-3.016 7.909-3.016 10.928 0 3.017 3.018 3.017 7.909 0 10.928l-60.333 60.333c-1.51 1.508-3.487 2.263-5.464 2.263z" fill="#b1e4f9"/></g><path d="m91.227 197.878h-60.457c-1.781 0-3.224-1.444-3.224-3.224v-27.685c0-1.781 1.444-3.224 3.224-3.224h60.457c1.781 0 3.224 1.444 3.224 3.224v27.685c0 1.781-1.443 3.224-3.224 3.224z" fill="#d3effb"/><path d="m91.227 163.744h-17.983c1.781 0 3.224 1.443 3.224 3.224v27.685c0 1.781-1.444 3.224-3.224 3.224h17.983c1.781 0 3.224-1.443 3.224-3.224v-27.685c0-1.78-1.443-3.224-3.224-3.224z" fill="#b1e4f9"/><g><g><path d="m44.046 235.102h-11.288c-4.268 0-7.726-3.459-7.726-7.726 0-4.268 3.459-7.726 7.726-7.726h11.288c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.726 7.726z" fill="#c3d5ef"/></g><g><path d="m89.239 235.102h-11.288c-4.268 0-7.726-3.459-7.726-7.726 0-4.268 3.459-7.726 7.726-7.726h11.288c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.726 7.726z" fill="#c3d5ef"/></g></g><g><g><path d="m44.046 260.636h-11.288c-4.268 0-7.726-3.459-7.726-7.726 0-4.268 3.459-7.726 7.726-7.726h11.288c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.726 7.726z" fill="#c3d5ef"/></g><g><path d="m89.239 260.636h-11.288c-4.268 0-7.726-3.459-7.726-7.726 0-4.268 3.459-7.726 7.726-7.726h11.288c4.268 0 7.726 3.459 7.726 7.726s-3.458 7.726-7.726 7.726z" fill="#c3d5ef"/></g></g><g><g><path d="m44.046 286.169h-11.288c-4.268 0-7.726-3.459-7.726-7.726 0-4.268 3.459-7.726 7.726-7.726h11.288c4.268 0 7.726 3.459 7.726 7.726 0 4.268-3.458 7.726-7.726 7.726z" fill="#c3d5ef"/></g><g><path d="m89.239 286.169h-11.288c-4.268 0-7.726-3.459-7.726-7.726 0-4.268 3.459-7.726 7.726-7.726h11.288c4.268 0 7.726 3.459 7.726 7.726 0 4.268-3.458 7.726-7.726 7.726z" fill="#c3d5ef"/></g></g><g><g><g><path d="m149.377 61.278c-1.977 0-3.955-.755-5.464-2.263l-.596-.596c-3.017-3.018-3.017-7.909 0-10.928 3.018-3.016 7.909-3.016 10.928 0l.596.596c3.017 3.018 3.017 7.909 0 10.928-1.509 1.508-3.487 2.263-5.464 2.263z" fill="#2b4d66"/></g><g><path d="m484.62 61.278c-1.977 0-3.955-.755-5.464-2.263-3.017-3.018-3.017-7.909 0-10.928l.596-.596c3.018-3.016 7.909-3.016 10.928 0 3.017 3.018 3.017 7.909 0 10.928l-.596.596c-1.509 1.508-3.487 2.263-5.464 2.263z" fill="#2b4d66"/></g></g><g><g><path d="m148.781 466.771c-1.977 0-3.955-.755-5.464-2.263-3.017-3.018-3.017-7.909 0-10.928l.596-.596c3.018-3.016 7.909-3.016 10.928 0 3.017 3.018 3.017 7.909 0 10.928l-.596.596c-1.509 1.508-3.487 2.263-5.464 2.263z" fill="#2b4d66"/></g><g><path d="m485.216 466.771c-1.977 0-3.955-.755-5.464-2.263l-.596-.596c-3.017-3.018-3.017-7.909 0-10.928 3.018-3.016 7.909-3.016 10.928 0l.596.596c3.017 3.018 3.017 7.909 0 10.928-1.509 1.508-3.487 2.263-5.464 2.263z" fill="#2b4d66"/></g></g></g></g></svg>
                                                    <div class="stat-panel-number h1 "></div>
                                                    <div class="stat-panel-title text-uppercase">Pen</div>
                                                </div>
                                            </div>
                                            <a href="plist.php" class="block-anchor panel-footer text-center">Full
                                                Detail <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-success text-light">
                                                <div class="stat-panel text-center">
                                                  <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m347.83 455.532h-169.786v-356.578c0-23.183 18.793-41.976 41.976-41.976h85.833c23.183 0 41.976 18.793 41.976 41.976v356.578z" fill="#e7ecf6"/><path d="m305.853 56.978h-20.036c23.183 0 41.976 18.793 41.976 41.976v356.578h20.036v-356.578c.001-23.182-18.793-41.976-41.976-41.976z" fill="#d8e2f1"/><path d="m303.205 56.978h-80.537v-25.702c0-4.513 3.659-8.172 8.172-8.172h64.192c4.513 0 8.172 3.659 8.172 8.172v25.702z" fill="#365e7d"/><path d="m295.033 23.104h-20.356c4.514 0 8.172 3.659 8.172 8.172v25.702h20.356v-25.702c0-4.513-3.659-8.172-8.172-8.172z" fill="#2b4d66"/><path d="m500.782 488.896h-489.564c-2.053 0-3.718-1.665-3.718-3.718v-16.716c0-7.141 5.789-12.93 12.93-12.93h471.141c7.141 0 12.93 5.789 12.93 12.93v16.716c-.001 2.054-1.665 3.718-3.719 3.718z" fill="#365e7d"/><path d="m491.571 455.532h-24.1c7.141 0 12.93 5.789 12.93 12.93v20.435h20.382c2.053 0 3.718-1.665 3.718-3.718v-16.717c-.001-7.141-5.789-12.93-12.93-12.93z" fill="#2b4d66"/><path d="m347.83 201.477h75.803v29.489h-75.803z" fill="#365e7d"/><path d="m405.967 201.477h17.666v29.49h-17.666z" fill="#2b4d66"/><path d="m347.83 272.106h75.803v29.489h-75.803z" fill="#365e7d"/><path d="m405.967 272.106h17.666v29.49h-17.666z" fill="#2b4d66"/><g><path d="m452.017 165.159c-4.143 0-7.5-3.357-7.5-7.5v-26.322c0-17.088 13.901-30.989 30.988-30.989h28.995c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5h-28.995c-8.816 0-15.988 7.173-15.988 15.989v26.322c0 4.142-3.358 7.5-7.5 7.5z" fill="#b7c8ea"/></g><g><path d="m259.563 353.702c-4.143 0-7.5-3.357-7.5-7.5v-194.96c0-8.816-7.172-15.988-15.988-15.988h-107.075c-8.816 0-15.988 7.172-15.988 15.988v65.629c0 4.143-3.357 7.5-7.5 7.5s-7.5-3.357-7.5-7.5v-65.629c0-17.087 13.901-30.988 30.988-30.988h107.075c17.087 0 30.988 13.901 30.988 30.988v194.96c0 4.142-3.357 7.5-7.5 7.5z" fill="#b7c8ea"/></g><g><path d="m78.606 224.371c-4.143 0-7.5-3.357-7.5-7.5v-65.629c0-8.816-7.173-15.988-15.989-15.988h-47.617c-4.143 0-7.5-3.357-7.5-7.5s3.357-7.5 7.5-7.5h47.617c17.088 0 30.989 13.901 30.989 30.988v65.629c0 4.142-3.357 7.5-7.5 7.5z" fill="#b7c8ea"/></g><path d="m311.038 455.532h-102.949v-105.633c0-13.088 10.61-23.698 23.698-23.698h55.554c13.088 0 23.698 10.61 23.698 23.698v105.633z" fill="#80b4fb"/><path d="m287.34 326.201h-20.552c13.088 0 23.698 10.61 23.698 23.698v105.633h20.552v-105.633c0-13.088-10.61-23.698-23.698-23.698z" fill="#61a2f9"/><path d="m143.972 455.532h-106.386v-227.615c0-17.147 13.9-31.047 31.047-31.047h44.292c17.147 0 31.047 13.9 31.047 31.047z" fill="#80b4fb"/><path d="m112.925 196.87h-20.25c17.147 0 31.047 13.9 31.047 31.047v227.615h20.249v-227.615c.001-17.146-13.9-31.047-31.046-31.047z" fill="#61a2f9"/><path d="m480.4 455.532h-56.767v-293.106c0-8.156 6.612-14.768 14.768-14.768h27.232c8.156 0 14.768 6.612 14.768 14.768v293.106z" fill="#eab14d"/><path d="m465.633 147.659h-20.564c8.156 0 14.768 6.612 14.768 14.768v293.106h20.563v-293.107c0-8.156-6.611-14.767-14.767-14.767z" fill="#e49542"/></g></svg>
                                                    <div class="stat-panel-number h1 "><?php echo htmlentities($regbd); ?>
                                                    </div>
                                                    <div class="stat-panel-title text-uppercase">Facilities</div>
                                                </div>
                                            </div>
                                            <a href="ftlist.php" class="block-anchor panel-footer text-center">Full
                                                Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-success text-light">
                                                <div class="stat-panel text-center">
                                                   <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m412.447 157.627c-1.229 0-2.474-.302-3.625-.938l-152.822-84.578-152.823 84.578c-3.624 2.007-8.188.693-10.194-2.931-2.005-3.624-.693-8.188 2.931-10.194l156.455-86.588c2.26-1.25 5.004-1.25 7.264 0l156.454 86.588c3.624 2.006 4.936 6.57 2.931 10.194-1.371 2.473-3.931 3.869-6.571 3.869z" fill="#c3d5ef"/></g><path d="m434.975 500.75h-357.95v-28.075l18.861-18.53h315.622l23.467 18.53z" fill="#365e7d"/><path d="m411.508 454.145h-21.574l23.467 18.53v28.075h21.574v-28.075z" fill="#2b4d66"/><path d="m434.975 472.675h-357.95v-131.317c0-1.677 1.36-3.037 3.037-3.037h351.877c1.677 0 3.037 1.36 3.037 3.037v131.317z" fill="#df6b57"/><path d="m413.401 338.322v134.353h21.574v-131.317c0-1.677-1.36-3.037-3.037-3.037h-18.537z" fill="#dd544f"/><g><g><path d="m130.837 454.079h-8.646c-4.143 0-7.5-3.357-7.5-7.5v-81.394c0-4.143 3.357-7.5 7.5-7.5h8.646c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5h-1.146v66.394h1.146c4.143 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#365e7d"/></g><g><path d="m182.631 454.079h-8.646c-4.143 0-7.5-3.357-7.5-7.5v-81.394c0-4.143 3.357-7.5 7.5-7.5h8.646c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5h-1.146v66.394h1.146c4.143 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#365e7d"/></g><g><path d="m234.426 454.079h-8.646c-4.143 0-7.5-3.357-7.5-7.5v-81.394c0-4.143 3.357-7.5 7.5-7.5h8.646c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5h-1.146v66.394h1.146c4.143 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#365e7d"/></g><g><path d="m286.22 454.079h-8.646c-4.143 0-7.5-3.357-7.5-7.5v-81.394c0-4.143 3.357-7.5 7.5-7.5h8.646c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5h-1.146v66.394h1.146c4.143 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#365e7d"/></g><g><path d="m338.015 454.079h-8.646c-4.143 0-7.5-3.357-7.5-7.5v-81.394c0-4.143 3.357-7.5 7.5-7.5h8.646c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5h-1.146v66.394h1.146c4.143 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#365e7d"/></g><g><path d="m389.809 454.079h-8.646c-4.143 0-7.5-3.357-7.5-7.5v-81.394c0-4.143 3.357-7.5 7.5-7.5h8.646c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5h-1.146v66.394h1.146c4.143 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#365e7d"/></g></g><path d="m431.938 297.633h-351.877c-1.677 0-3.037-1.36-3.037-3.037v-25.038l18.862-18.53h315.622l23.467 18.53v25.038c0 1.677-1.36 3.037-3.037 3.037z" fill="#365e7d"/><path d="m411.508 251.028h-21.574l23.467 18.53v28.074h18.537c1.677 0 3.037-1.36 3.037-3.037v-25.038z" fill="#2b4d66"/><path d="m434.975 269.559h-357.95v-131.318c0-1.677 1.36-3.037 3.037-3.037h351.877c1.677 0 3.037 1.36 3.037 3.037v131.318z" fill="#b3e59f"/><path d="m413.401 135.205v134.354h21.574v-131.317c0-1.677-1.36-3.037-3.037-3.037z" fill="#95d6a4"/><g><g><path d="m130.837 250.962h-8.646c-4.143 0-7.5-3.357-7.5-7.5v-81.394c0-4.143 3.357-7.5 7.5-7.5h8.646c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5h-1.146v66.394h1.146c4.143 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#365e7d"/></g><g><path d="m182.631 250.962h-8.646c-4.143 0-7.5-3.357-7.5-7.5v-81.394c0-4.143 3.357-7.5 7.5-7.5h8.646c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5h-1.146v66.394h1.146c4.143 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#365e7d"/></g><g><path d="m234.426 250.962h-8.646c-4.143 0-7.5-3.357-7.5-7.5v-81.394c0-4.143 3.357-7.5 7.5-7.5h8.646c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5h-1.146v66.394h1.146c4.143 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#365e7d"/></g><g><path d="m286.22 250.962h-8.646c-4.143 0-7.5-3.357-7.5-7.5v-81.394c0-4.143 3.357-7.5 7.5-7.5h8.646c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5h-1.146v66.394h1.146c4.143 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#365e7d"/></g><g><path d="m338.015 250.962h-8.646c-4.143 0-7.5-3.357-7.5-7.5v-81.394c0-4.143 3.357-7.5 7.5-7.5h8.646c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5h-1.146v66.394h1.146c4.143 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#365e7d"/></g><g><path d="m389.809 250.962h-8.646c-4.143 0-7.5-3.357-7.5-7.5v-81.394c0-4.143 3.357-7.5 7.5-7.5h8.646c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5h-1.146v66.394h1.146c4.143 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#365e7d"/></g></g><path d="m285.939 26.92h-59.879c-2.354 0-4.262-1.908-4.262-4.262v-14.646c0-2.354 1.908-4.262 4.262-4.262h59.878c2.354 0 4.262 1.908 4.262 4.262v14.646c.001 2.354-1.907 4.262-4.261 4.262z" fill="#365e7d"/><g><path d="m255.577 83.082c-12.464 0-22.604-10.141-22.604-22.605 0-9.837 6.315-18.226 15.104-21.325v-12.232c0-4.143 3.357-7.5 7.5-7.5s7.5 3.357 7.5 7.5v18.452c0 4.143-3.357 7.5-7.5 7.5-4.193 0-7.604 3.411-7.604 7.604s3.411 7.605 7.604 7.605 7.605-3.412 7.605-7.605c0-4.143 3.357-7.5 7.5-7.5s7.5 3.357 7.5 7.5c.001 12.466-10.14 22.606-22.605 22.606z" fill="#365e7d"/></g><g><path d="m504.5 508.25h-497c-4.143 0-7.5-3.357-7.5-7.5s3.357-7.5 7.5-7.5h497c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5z" fill="#95d6a4"/></g></g></svg>
                                                    <div class="stat-panel-number h1 "><?php echo htmlentities($regbd); ?>
                                                    </div>
                                                    <div class="stat-panel-title text-uppercase">Mapping/Tagging</div>
                                                </div>
                                            </div>
                                            <a href="maptag.php" class="block-anchor panel-footer text-center">Full
                                                Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-info text-light">
                                                <div class="stat-panel text-center">
<svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m471.545 411.475c22.341 0 40.451 18.111 40.451 40.451v-335.458c0-17.766-14.402-32.168-32.168-32.168h-448.923l22.733 327.175h356.852 20.603z" fill="#e7ecf6"/></g><path d="m479.828 84.3h-25.337c17.766 0 32.168 14.402 32.168 32.168v297.937c14.851 5.988 25.337 20.526 25.337 37.521v-335.458c0-17.766-14.402-32.168-32.168-32.168z" fill="#d8e2f1"/><path d="m0 368.652v-291.839c0-31.586 25.605-57.191 57.191-57.191h10.286c2.59 0 4.69 2.1 4.69 4.69v310.269l-14.5 76.894h-14.844c-23.651 0-42.823-19.172-42.823-42.823z" fill="#c3d5ef"/><path d="m57.191 19.622c-2.059 0-4.092.114-6.095.327v391.526h10.535l10.535-76.894v-310.269c0-2.59-2.1-4.69-4.69-4.69z" fill="#b7c8ea"/><path d="m410.491 485.177v-73.702h61.055c22.341 0 40.451 18.111 40.451 40.451 0 22.341-18.111 40.451-40.451 40.451h-53.854c-3.978.001-7.201-3.223-7.201-7.2z" fill="#c3d5ef"/><path d="m471.545 411.475h-61.055v20.904h61.055.14c8.779.03 16.014 6.923 16.849 15.662.122 1.278.185 2.574.185 3.885 0 22.341-18.111 40.451-40.451 40.451h23.277c20.453 0 37.35-15.182 40.061-34.889 3.392-24.372-15.572-46.013-40.061-46.013z" fill="#b7c8ea"/><path d="m72.167 411.475h-33.72c-21.234 0-38.447-17.213-38.447-38.447 0-21.234 17.213-38.447 38.447-38.447h33.72z" fill="#e7ecf6"/><g><path d="m300.848 321.257-6.232 14.252c-.486 1.111-1.583 1.828-2.795 1.828h-20.137c-1.212 0-2.309-.718-2.795-1.828l-6.232-14.252c-.286-.654-.814-1.172-1.474-1.445l-21.111-8.744c-.66-.273-1.399-.28-2.064-.02l-14.485 5.671c-1.129.442-2.412.174-3.269-.683l-14.239-14.239c-.857-.857-1.125-2.14-.683-3.269l5.671-14.485c.26-.665.253-1.404-.02-2.064l-8.744-21.111c-.273-.66-.791-1.188-1.445-1.474l-14.252-6.232c-1.111-.486-1.828-1.583-1.828-2.795v-20.137c0-1.212.718-2.309 1.828-2.795l14.252-6.232c.654-.286 1.172-.814 1.445-1.474l8.744-21.111c.273-.66.28-1.399.02-2.064l-5.671-14.485c-.442-1.129-.174-2.412.683-3.269l14.239-14.239c.857-.857 2.14-1.125 3.269-.683l14.485 5.671c.665.26 1.404.253 2.064-.02l21.111-8.744c.66-.273 1.188-.791 1.474-1.445l6.232-14.252c.486-1.111 1.583-1.828 2.795-1.828h20.137c1.212 0 2.309.718 2.795 1.828l6.232 14.252c.286.654.814 1.172 1.474 1.445l21.111 8.744c.66.273 1.399.28 2.064.02l14.485-5.671c1.129-.442 2.412-.174 3.269.683l14.239 14.239c.857.857 1.125 2.14.683 3.269l-5.672 14.485c-.26.665-.253 1.404.02 2.064l8.745 21.111c.273.66.791 1.188 1.445 1.474l14.252 6.232c1.111.486 1.828 1.583 1.828 2.795v20.137c0 1.212-.718 2.309-1.828 2.795l-14.252 6.232c-.654.286-1.172.814-1.445 1.474l-8.745 21.111c-.273.66-.28 1.399-.02 2.064l5.672 14.485c.442 1.129.174 2.412-.683 3.269l-14.239 14.239c-.857.857-2.14 1.125-3.269.683l-14.485-5.671c-.665-.26-1.404-.253-2.064.02l-21.111 8.744c-.66.273-1.188.791-1.474 1.445zm21.789-80.958c0-22.58-18.304-40.884-40.884-40.884s-40.884 18.304-40.884 40.884 18.304 40.884 40.884 40.884c22.579 0 40.884-18.305 40.884-40.884z" fill="#80b4fb"/><g><path d="m361.266 219.73-8.744-21.111c-.273-.66-.28-1.399-.02-2.064l5.671-14.484c.442-1.129.174-2.412-.683-3.269l-14.239-14.239c-.857-.857-2.14-1.125-3.269-.683l-12.703 4.974 6.764 6.764c2.791 2.792 3.665 6.971 2.226 10.647l-2.976 7.601c-.936 2.391-.91 5.052.072 7.424l6.533 15.772c.983 2.372 2.846 4.272 5.198 5.301l7.479 3.27c3.617 1.582 5.955 5.155 5.955 9.103v11.13c0 3.948-2.337 7.521-5.955 9.102l-7.479 3.27c-2.353 1.029-4.216 2.928-5.198 5.301l-6.533 15.772c-.983 2.372-1.009 5.033-.072 7.424l2.976 7.601c1.439 3.676.566 7.855-2.226 10.647l-6.764 6.764 12.703 4.974c1.129.442 2.412.174 3.269-.683l14.239-14.239c.857-.857 1.125-2.14.683-3.269l-5.671-14.484c-.26-.665-.253-1.404.02-2.064l8.744-21.111c.273-.66.791-1.188 1.445-1.474l14.253-6.232c1.111-.486 1.828-1.583 1.828-2.795v-20.14c0-1.212-.718-2.309-1.828-2.795l-14.253-6.232c-.654-.286-1.172-.814-1.445-1.473z" fill="#61a2f9"/></g></g></g></svg>
                                                   

                                                    <div class="stat-panel-number h1 "><?php echo htmlentities($query); ?>
                                                    </div>
                                                    <div class="stat-panel-title text-uppercase">Scheduling and Designation</div>
                                                </div>
                                            </div>
                                            <a href="scheduling.php" class="block-anchor panel-footer text-center">Alarm
                                                 &nbsp; <i class="fa fa-arrow-right"></i></a>
											<a href="documents.php" class="block-anchor panel-footer text-center">Documents &nbsp; <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-info text-light">
                                                <div class="stat-panel text-center">
                                                   <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m471.545 411.475c22.341 0 40.451 18.111 40.451 40.451v-335.458c0-17.766-14.402-32.168-32.168-32.168h-448.923l22.733 327.175h356.852 20.603z" fill="#e7ecf6"/></g><path d="m479.828 84.3h-25.337c17.766 0 32.168 14.402 32.168 32.168v297.937c14.851 5.988 25.337 20.526 25.337 37.521v-335.458c0-17.766-14.402-32.168-32.168-32.168z" fill="#d8e2f1"/><path d="m0 368.652v-291.839c0-31.586 25.605-57.191 57.191-57.191h10.286c2.59 0 4.69 2.1 4.69 4.69v310.269l-14.5 76.894h-14.844c-23.651 0-42.823-19.172-42.823-42.823z" fill="#c3d5ef"/><path d="m57.191 19.622c-2.059 0-4.092.114-6.095.327v391.526h10.535l10.535-76.894v-310.269c0-2.59-2.1-4.69-4.69-4.69z" fill="#b7c8ea"/><path d="m410.491 485.177v-73.702h61.055c22.341 0 40.451 18.111 40.451 40.451 0 22.341-18.111 40.451-40.451 40.451h-53.854c-3.978.001-7.201-3.223-7.201-7.2z" fill="#c3d5ef"/><path d="m471.545 411.475h-61.055v20.904h61.055.14c8.779.03 16.014 6.923 16.849 15.662.122 1.278.185 2.574.185 3.885 0 22.341-18.111 40.451-40.451 40.451h23.277c20.453 0 37.35-15.182 40.061-34.889 3.392-24.372-15.572-46.013-40.061-46.013z" fill="#b7c8ea"/><path d="m72.167 411.475h-33.72c-21.234 0-38.447-17.213-38.447-38.447 0-21.234 17.213-38.447 38.447-38.447h33.72z" fill="#e7ecf6"/><g><path d="m300.848 321.257-6.232 14.252c-.486 1.111-1.583 1.828-2.795 1.828h-20.137c-1.212 0-2.309-.718-2.795-1.828l-6.232-14.252c-.286-.654-.814-1.172-1.474-1.445l-21.111-8.744c-.66-.273-1.399-.28-2.064-.02l-14.485 5.671c-1.129.442-2.412.174-3.269-.683l-14.239-14.239c-.857-.857-1.125-2.14-.683-3.269l5.671-14.485c.26-.665.253-1.404-.02-2.064l-8.744-21.111c-.273-.66-.791-1.188-1.445-1.474l-14.252-6.232c-1.111-.486-1.828-1.583-1.828-2.795v-20.137c0-1.212.718-2.309 1.828-2.795l14.252-6.232c.654-.286 1.172-.814 1.445-1.474l8.744-21.111c.273-.66.28-1.399.02-2.064l-5.671-14.485c-.442-1.129-.174-2.412.683-3.269l14.239-14.239c.857-.857 2.14-1.125 3.269-.683l14.485 5.671c.665.26 1.404.253 2.064-.02l21.111-8.744c.66-.273 1.188-.791 1.474-1.445l6.232-14.252c.486-1.111 1.583-1.828 2.795-1.828h20.137c1.212 0 2.309.718 2.795 1.828l6.232 14.252c.286.654.814 1.172 1.474 1.445l21.111 8.744c.66.273 1.399.28 2.064.02l14.485-5.671c1.129-.442 2.412-.174 3.269.683l14.239 14.239c.857.857 1.125 2.14.683 3.269l-5.672 14.485c-.26.665-.253 1.404.02 2.064l8.745 21.111c.273.66.791 1.188 1.445 1.474l14.252 6.232c1.111.486 1.828 1.583 1.828 2.795v20.137c0 1.212-.718 2.309-1.828 2.795l-14.252 6.232c-.654.286-1.172.814-1.445 1.474l-8.745 21.111c-.273.66-.28 1.399-.02 2.064l5.672 14.485c.442 1.129.174 2.412-.683 3.269l-14.239 14.239c-.857.857-2.14 1.125-3.269.683l-14.485-5.671c-.665-.26-1.404-.253-2.064.02l-21.111 8.744c-.66.273-1.188.791-1.474 1.445zm21.789-80.958c0-22.58-18.304-40.884-40.884-40.884s-40.884 18.304-40.884 40.884 18.304 40.884 40.884 40.884c22.579 0 40.884-18.305 40.884-40.884z" fill="#80b4fb"/><g><path d="m361.266 219.73-8.744-21.111c-.273-.66-.28-1.399-.02-2.064l5.671-14.484c.442-1.129.174-2.412-.683-3.269l-14.239-14.239c-.857-.857-2.14-1.125-3.269-.683l-12.703 4.974 6.764 6.764c2.791 2.792 3.665 6.971 2.226 10.647l-2.976 7.601c-.936 2.391-.91 5.052.072 7.424l6.533 15.772c.983 2.372 2.846 4.272 5.198 5.301l7.479 3.27c3.617 1.582 5.955 5.155 5.955 9.103v11.13c0 3.948-2.337 7.521-5.955 9.102l-7.479 3.27c-2.353 1.029-4.216 2.928-5.198 5.301l-6.533 15.772c-.983 2.372-1.009 5.033-.072 7.424l2.976 7.601c1.439 3.676.566 7.855-2.226 10.647l-6.764 6.764 12.703 4.974c1.129.442 2.412.174 3.269-.683l14.239-14.239c.857-.857 1.125-2.14.683-3.269l-5.671-14.484c-.26-.665-.253-1.404.02-2.064l8.744-21.111c.273-.66.791-1.188 1.445-1.474l14.253-6.232c1.111-.486 1.828-1.583 1.828-2.795v-20.14c0-1.212-.718-2.309-1.828-2.795l-14.253-6.232c-.654-.286-1.172-.814-1.445-1.473z" fill="#61a2f9"/></g></g></g></svg>
                                                    <div class="stat-panel-number h1 "><?php echo htmlentities($query); ?>
                                                    </div>
                                                    <div class="stat-panel-title text-uppercase">Activity Log</div>
                                                </div>
                                            </div>
                                            <a href="activitylog.php" class="block-anchor panel-footer text-center">Full Detail
                                                &nbsp; <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>


        </div>

        </div>
        <style>
            #page-wrapper>div:nth-child(3)>div>div>div.panel-body>div>div>div>a:hover {
                color: #fff;
            }
            .panel svg{
                height:120px;
                width:120px;
            }
            .panel a,.panel a:hover{
                color:rgb(11, 89, 109) !important;
            }
        </style>
        <?php
        require_once "public/config/footer.php";
        ?>

    </body>

    <!-- Mirrored from webapplayers.com/inspinia_admin-v2.6.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Sep 2016 02:26:53 GMT -->

    </html>

<?php } ?>