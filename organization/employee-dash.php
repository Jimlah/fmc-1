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
                <div class="row  border-bottom white-bg dashboard-header">
                    <div class="panel-heading">
                        <h2 class="page-title">Weather</h2>
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
                                                  <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m342.287 118.5-21.624 20h-128.02l-22.932-20v-10.056c0-47.655 38.632-86.287 86.287-86.287 47.655 0 86.287 38.632 86.287 86.287v10.056z" fill="#eab14d"/><path d="m256 22.157c-4.136 0-8.199.309-12.18.872 41.885 5.92 74.108 41.896 74.108 85.415v30.056l24.359-20v-10.056c0-47.655-38.632-86.287-86.287-86.287z" fill="#e49542"/><path d="m359.863 504.5h-207.727c-5.817 0-10.533-4.716-10.533-10.533v-145.762c0-36.868 29.887-66.755 66.755-66.755h95.282c36.868 0 66.755 29.887 66.755 66.755v145.762c.001 5.817-4.715 10.533-10.532 10.533z" fill="#eab14d"/><path d="m270.931 281.45c40.48 0 73.296 32.816 73.296 73.296v149.754h15.636c5.817 0 10.533-4.716 10.533-10.533v-145.762c0-36.868-29.887-66.755-66.755-66.755z" fill="#e49542"/><path d="m256 392.975 30.979-120.201h-61.958z" fill="#365e7d"/><g><path d="m256 293.965c-44.898 0-81.295-36.397-81.295-81.295v-80.098h162.591v80.098c-.001 44.897-36.398 81.295-81.296 81.295z" fill="#f1d0a5"/><path d="m174.704 132.571v37.035h117.044c12.228 0 22.141 9.913 22.141 22.141v20.921c0 40.923-30.241 74.769-69.593 80.445 3.823.551 7.727.851 11.702.851 44.898 0 81.295-36.397 81.295-81.295v-80.098z" fill="#f1b986"/></g><path d="m357.104 152.571h-202.208c-5.424 0-9.821-4.397-9.821-9.821v-14.429c0-5.424 4.397-9.821 9.821-9.821h202.208c5.424 0 9.821 4.397 9.821 9.821v14.429c0 5.424-4.397 9.821-9.821 9.821z" fill="#df6b57"/><path d="m356.816 118.5h-24.797c5.583 0 10.109 4.272 10.109 9.541v14.988c0 5.27-4.526 9.541-10.109 9.541h24.797c5.583 0 10.109-4.272 10.109-9.541v-14.988c0-5.269-4.526-9.541-10.109-9.541z" fill="#dd544f"/><g><path d="m256 42.201c-4.142 0-7.5-3.357-7.5-7.5v-27.201c0-4.143 3.358-7.5 7.5-7.5 4.143 0 7.5 3.357 7.5 7.5v27.201c0 4.143-3.358 7.5-7.5 7.5z" fill="#df6b57"/></g><g><g><path d="m222.958 42.534c-2.525 0-4.991-1.275-6.405-3.587l-7.877-12.876c-2.162-3.533-1.049-8.15 2.484-10.312 3.535-2.165 8.15-1.05 10.312 2.483l7.877 12.876c2.162 3.533 1.049 8.15-2.484 10.312-1.222.749-2.573 1.104-3.907 1.104z" fill="#df6b57"/></g><g><path d="m289.042 42.534c-1.335 0-2.686-.355-3.907-1.104-3.533-2.161-4.646-6.778-2.483-10.312l7.877-12.876c2.162-3.534 6.78-4.645 10.312-2.483 3.533 2.161 4.646 6.778 2.483 10.312l-7.877 12.876c-1.415 2.312-3.881 3.587-6.405 3.587z" fill="#df6b57"/></g></g><g><g><path d="m220.982 213.92c-4.142 0-7.5-3.357-7.5-7.5v-6.687c0-4.143 3.358-7.5 7.5-7.5s7.5 3.357 7.5 7.5v6.687c0 4.142-3.358 7.5-7.5 7.5z" fill="#2b4d66"/></g><g><path d="m291.017 213.92c-4.143 0-7.5-3.357-7.5-7.5v-6.687c0-4.143 3.357-7.5 7.5-7.5s7.5 3.357 7.5 7.5v6.687c0 4.142-3.357 7.5-7.5 7.5z" fill="#2b4d66"/></g></g><path d="m141.603 422.846h114.397v27.21h-114.397z" fill="#e7ecf6"/><path d="m256 422.846h114.397v27.21h-114.397z" fill="#e7ecf6"/><path d="m344.227 422.846h26.169v27.21h-26.169z" fill="#d8e2f1"/><path d="m229.831 422.846h26.169v27.21h-26.169z" fill="#d8e2f1"/><g><path d="m337.295 375.324h-33.811c-4.143 0-7.5-3.357-7.5-7.5s3.357-7.5 7.5-7.5h33.811c4.143 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#e7ecf6"/></g><g><path d="m256 254.552c-6.997 0-13.994-2.331-20.796-6.995-3.417-2.342-4.287-7.01-1.945-10.427 2.343-3.415 7.011-4.286 10.427-1.944 8.517 5.838 16.114 5.838 24.629 0 3.419-2.343 8.087-1.471 10.427 1.944 2.343 3.417 1.472 8.085-1.944 10.427-6.804 4.664-13.801 6.995-20.798 6.995z" fill="#dd544f"/></g><g><path d="m272.555 93.52h-33.111c-4.142 0-7.5-3.357-7.5-7.5s3.358-7.5 7.5-7.5h33.111c4.143 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5z" fill="#df6b57"/></g><g><path d="m256 512c-4.142 0-7.5-3.357-7.5-7.5v-160.88c0-4.143 3.358-7.5 7.5-7.5s7.5 3.357 7.5 7.5v160.88c.001 4.143-3.358 7.5-7.5 7.5z" fill="#365e7d"/></g></g></svg>
                                                    <div class="stat-panel-number h1 "></div>
                                                    <div class="stat-panel-title text-uppercase">Employees</div>
                                                </div>
                                            </div>
                                            <a href="employee.php" class="block-anchor panel-footer text-center">Full
                                                Detail <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-success text-light">
                                                <div class="stat-panel text-center">
                                                   <svg id="Capa_1" enable-background="new 0 0 512.019 512.019" height="512" viewBox="0 0 512.019 512.019" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><g><g><path d="m183.559 284.755c-1.258 0-2.534-.136-3.813-.42-82.08-18.241-117.193-70.438-132.196-111.015-15.973-43.201-12.741-81.993-12.595-83.624.805-9.026 8.368-15.945 17.431-15.945h86.56c10.457 0 18.904 8.567 18.026 18.988-.755 8.969-8.274 16.012-17.438 16.012h-62.243c-4.09 0-7.284 3.516-6.904 7.589 1.175 12.596 3.986 28.99 10.417 45.979 17.597 46.494 53.441 76.05 106.536 87.849 9.435 2.097 15.384 11.445 13.287 20.88-1.813 8.155-9.046 13.706-17.068 13.707z" fill="#fe9738"/></g></g><g><g><path d="m328.459 284.755c1.258 0 2.534-.136 3.813-.42 82.081-18.24 117.194-70.438 132.196-111.015 15.973-43.201 12.741-81.993 12.595-83.624-.805-9.026-8.368-15.945-17.431-15.945h-86.56c-10.457 0-18.904 8.567-18.026 18.988.755 8.969 8.274 16.012 17.438 16.012h62.243c4.09 0 7.284 3.516 6.904 7.589-1.175 12.596-3.986 28.99-10.417 45.979-17.597 46.494-53.441 76.05-106.536 87.849-9.435 2.097-15.384 11.445-13.287 20.88 1.814 8.155 9.047 13.706 17.068 13.707z" fill="#fe9738"/></g></g></g><g><path d="m370.648 504.519h-229.277c-3.573 0-6.47-2.897-6.47-6.47v-35.231c0-3.573 2.897-6.47 6.47-6.47h229.277c3.573 0 6.47 2.897 6.47 6.47v35.231c0 3.573-2.897 6.47-6.47 6.47z" fill="#5a5a5a"/></g><g><path d="m377.119 462.815v35.23c0 3.58-2.9 6.47-6.47 6.47h-20c3.57 0 6.47-2.89 6.47-6.47v-35.23c0-3.57-2.9-6.47-6.47-6.47h20c3.57 0 6.47 2.9 6.47 6.47z" fill="#444"/></g><g><path d="m335.852 456.348h-159.686v-23.211c0-13.785 11.175-24.96 24.96-24.96h109.766c13.785 0 24.96 11.175 24.96 24.96z" fill="#9c9c9c"/></g><g><path d="m335.849 433.135v23.21h-19.67v-23.21c0-13.78-11.18-24.96-24.96-24.96h19.67c13.79 0 24.96 11.18 24.96 24.96z" fill="#838383"/></g><g><path d="m288.486 315.242 11.172-18.443h-87.298l11.172 18.443c7.798 12.872 11.991 28.314 11.991 44.154 0 9.676-1.566 19.263-4.613 28.242l-6.969 20.539h64.134l-6.969-20.539c-3.047-8.979-4.613-18.566-4.613-28.242.002-15.84 4.195-31.282 11.993-44.154z" fill="#fe9738"/></g><g><path d="m279.569 336.205c-2.02 7.45-3.07 15.27-3.07 23.19 0 9.68 1.56 19.26 4.61 28.24l6.97 20.54h-20.34l-6.97-20.54c-3.04-8.98-4.61-18.56-4.61-28.24 0-7.92 1.05-15.74 3.07-23.19 2.03-7.45 5.02-14.52 8.92-20.96l11.18-18.45h20.33l-11.17 18.45c-3.9 6.44-6.9 13.51-8.92 20.96z" fill="#fe860a"/></g><g><path d="m256.009 312.107c-72.595 0-131.444-58.849-131.444-131.444v-131.444h262.888v131.444c0 72.594-58.849 131.444-131.444 131.444z" fill="#fac600"/></g><g><path d="m387.449 49.215v131.45c0 72.59-58.85 131.44-131.44 131.44-3.74 0-7.45-.16-11.11-.46 67.4-5.64 120.34-62.13 120.34-130.98v-131.45z" fill="#e8b800"/></g><g><path d="m396.212 49.219h-280.406c-5.108 0-9.249-4.141-9.249-9.249v-23.221c0-5.108 4.141-9.249 9.249-9.249h280.406c5.108 0 9.249 4.141 9.249 9.249v23.221c.001 5.108-4.14 9.249-9.249 9.249z" fill="#fe9738"/></g><g><path d="m405.459 16.745v23.22c0 5.11-4.14 9.25-9.25 9.25h-21.26c5.11 0 9.25-4.14 9.25-9.25v-23.22c0-5.1-4.14-9.25-9.25-9.25h21.26c5.11 0 9.25 4.15 9.25 9.25z" fill="#fe860a"/></g><g><g><path d="m265.313 124.796 9.618 19.488c1.511 3.062 4.433 5.185 7.812 5.676l21.507 3.125c8.51 1.237 11.908 11.694 5.75 17.697l-15.562 15.17c-2.445 2.384-3.561 5.818-2.984 9.183l3.674 21.42c1.454 8.476-7.442 14.939-15.054 10.937l-19.236-10.113c-3.023-1.589-6.633-1.589-9.656 0l-19.236 10.113c-7.612 4.002-16.508-2.462-15.054-10.937l3.674-21.42c.577-3.366-.539-6.8-2.984-9.183l-15.562-15.17c-6.158-6.002-2.76-16.46 5.75-17.697l21.507-3.125c3.379-.491 6.301-2.613 7.812-5.676l9.618-19.488c3.804-7.711 14.8-7.711 18.606 0z" fill="#f9f7f8"/></g><g><path d="m294.439 185.952c-2.45 2.38-3.56 5.82-2.99 9.18l3.68 21.42c1.45 8.48-7.44 14.94-15.06 10.94l-7.91-4.16c1.7-2.46 2.52-5.59 1.94-8.99l-4.34-25.31c-.68-3.97.64-8.03 3.53-10.85l18.39-17.92c2.48-2.42 3.65-5.46 3.71-8.47l8.86 1.29c8.51 1.24 11.91 11.7 5.75 17.7z" fill="#efedef"/></g><g><path d="m484.534 89.03c-1.158-12.986-11.863-22.779-24.901-22.779h-64.68v-9.532h1.259c9.236 0 16.75-7.514 16.75-16.749v-23.221c0-9.235-7.514-16.749-16.75-16.749h-190.37c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h190.37c.965 0 1.75.784 1.75 1.749v23.221c0 .965-.785 1.749-1.75 1.749h-280.406c-.965 0-1.75-.784-1.75-1.749v-23.221c0-.965.785-1.749 1.75-1.749h54.871c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-54.871c-9.236 0-16.75 7.514-16.75 16.749v23.221c0 9.235 7.514 16.749 16.75 16.749h1.259v9.532h-64.68c-13.038 0-23.743 9.793-24.901 22.779-.152 1.698-3.522 42.121 13.031 86.891 15.145 40.962 49.891 93.264 129.501 113.79 12.816 10.126 27.45 18.05 43.327 23.185l3.775 6.231c7.135 11.779 10.906 25.704 10.906 40.269 0 8.897-1.418 17.589-4.214 25.832l-5.242 15.448h-17.441c-17.898 0-32.46 14.562-32.46 32.461v15.711h-27.296c-7.703 0-13.97 6.268-13.97 13.971v35.23c0 7.703 6.267 13.97 13.97 13.97h229.277c7.703 0 13.97-6.267 13.97-13.97v-35.23c0-7.703-6.267-13.971-13.97-13.971h-27.296v-15.711c0-17.899-14.562-32.461-32.46-32.461h-17.441l-5.242-15.448c-2.797-8.242-4.215-16.934-4.215-25.832 0-14.564 3.771-28.489 10.906-40.269l3.775-6.231c15.877-5.135 30.51-13.058 43.327-23.185 79.61-20.526 114.356-72.828 129.501-113.79 16.553-44.77 13.183-85.192 13.031-86.891zm-364.692 119.324c-13.984-13.092-24.697-29.333-32.024-48.69-5.091-13.45-8.423-28.053-9.906-43.413h39.153v64.412c0 9.48.959 18.74 2.777 27.691zm-65.257-37.634c-15.395-41.638-12.299-78.796-12.16-80.357.463-5.194 4.745-9.111 9.96-9.111h64.68v20h-39.774c-4.052 0-7.94 1.717-10.668 4.711-2.731 2.998-4.081 7.034-3.704 11.074 1.579 16.923 5.236 33.052 10.87 47.938 11.127 29.398 29.138 52.353 53.792 68.695 4.851 11.708 11.258 22.614 18.964 32.459-54.338-22.523-79.929-62.871-91.96-95.409zm315.033 293.128v33.171h-227.218v-33.171zm-58.726-48.172c9.627 0 17.46 7.833 17.46 17.461v15.711h-144.685v-15.711c0-9.628 7.833-17.461 17.46-17.461zm-36.887-25.628 3.606 10.628h-43.205l3.607-10.629c3.324-9.799 5.01-20.111 5.01-30.651 0-14.753-3.297-28.996-9.567-41.629 7.343 1.204 14.874 1.84 22.553 1.84 7.678 0 15.21-.636 22.552-1.84-6.27 12.633-9.567 26.876-9.567 41.629.001 10.541 1.686 20.853 5.011 30.652zm-17.996-85.442c-68.343 0-123.944-55.601-123.944-123.943v-123.944h247.888v123.944c0 68.343-55.601 123.943-123.944 123.943zm201.425-133.886c-12.031 32.539-37.623 72.891-91.964 95.414 7.72-9.863 14.137-20.79 18.992-32.522 21.169-14.057 37.472-32.989 48.698-56.695 1.773-3.743.175-8.216-3.568-9.988-3.742-1.772-8.214-.176-9.988 3.568-6.95 14.677-16.116 27.322-27.434 37.903 1.824-8.965 2.785-18.24 2.785-27.736v-64.412h39.153c-.746 7.717-1.986 15.37-3.687 22.758-.929 4.037 1.59 8.063 5.627 8.991 4.033.934 8.062-1.589 8.991-5.626 1.894-8.229 3.26-16.754 4.062-25.338.377-4.04-.973-8.076-3.704-11.074-2.728-2.994-6.616-4.711-10.668-4.711h-39.774v-20h64.68c5.215 0 9.497 3.917 9.96 9.112.137 1.56 3.233 38.718-12.161 80.356z"/><path d="m305.328 145.663-21.506-3.125c-.937-.137-1.746-.725-2.165-1.573l-9.618-19.488c-3.033-6.146-9.175-9.964-16.029-9.964s-12.996 3.818-16.029 9.964l-9.618 19.488c-.419.849-1.228 1.437-2.165 1.573l-21.506 3.125c-6.783.985-12.312 5.646-14.43 12.165s-.385 13.54 4.523 18.325l15.562 15.168c.678.661.987 1.612.827 2.546l-3.674 21.42c-1.159 6.755 1.566 13.453 7.111 17.482 5.544 4.027 12.758 4.55 18.826 1.361l19.235-10.113c.838-.441 1.838-.441 2.676 0l19.236 10.113c2.639 1.387 5.494 2.072 8.334 2.072 3.691 0 7.358-1.157 10.491-3.434 5.545-4.029 8.27-10.728 7.111-17.482l-3.674-21.42c-.16-.934.149-1.885.827-2.545l15.563-15.17c4.908-4.784 6.641-11.806 4.523-18.324s-7.649-11.179-14.431-12.164zm-.563 19.748-15.563 15.17c-4.213 4.107-6.135 10.021-5.141 15.821l3.674 21.42c.263 1.533-.604 2.42-1.144 2.813-.539.393-1.651.945-3.028.219l-19.236-10.113c-2.604-1.369-5.461-2.054-8.318-2.054s-5.714.685-8.318 2.054l-19.235 10.113c-1.376.725-2.488.173-3.029-.219-.54-.393-1.406-1.279-1.144-2.813l3.674-21.42c.995-5.8-.927-11.714-5.141-15.822l-15.562-15.168c-1.114-1.086-.935-2.313-.728-2.948.206-.635.782-1.733 2.321-1.957l21.506-3.125c5.824-.847 10.855-4.502 13.459-9.778l9.618-19.488c.688-1.395 1.911-1.603 2.578-1.603s1.89.208 2.578 1.603l9.618 19.488c2.604 5.276 7.635 8.932 13.459 9.778l21.507 3.125c1.539.224 2.115 1.322 2.321 1.957.208.635.387 1.862-.726 2.947z"/></g></g></g></svg>
                                                    <div class="stat-panel-number h1 "><?php echo htmlentities($regbd); ?>
                                                    </div>
                                                    <div class="stat-panel-title text-uppercase">Employee Appraisal</div>
                                                </div>
                                            </div>
                                            <a href="employeeappraisal.php" class="block-anchor panel-footer text-center">Full
                                                Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-primary text-light">
                                                <div class="stat-panel text-center">
                                                 <?xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="barcode-scanning" x="0px" y="0px" viewBox="0 0 1010 1010" xml:space="preserve"><g id="barcode-scanning-barcode-scanning"><path id="barcode-scanning-label" fill="#3BAFDA" d="M1010 505c0 278.914-226.086 505-505 505C226.106 1010 0 783.914 0 505 0 226.096 226.106 0 505 0c278.914 0 505 226.096 505 505z"/><g id="barcode-scanning-barcode-scanning_1_"><path fill="#FFF" d="M232.3 276.182h545.4v457.636H232.3z"/><path fill="#454545" d="M271.32 685.41h-20.2V519.626h20.2v165.782z"/><path fill="#454545" d="M758.9 685.41h-20.199V519.626h20.2v165.782z"/><path fill="#454545" d="M310.318 607.4h-20.2v-87.773h20.2V607.4z"/><path fill="#454545" d="M339.573 607.4h-20.2v-87.773h20.2V607.4z"/><path fill="#454545" d="M388.317 607.4h-20.2v-87.773h20.2V607.4z"/><path fill="#454545" d="M417.592 607.4h-20.2v-87.773h20.2V607.4z"/><path fill="#454545" d="M446.846 607.4h-20.2v-87.773h20.2V607.4z"/><path fill="#454545" d="M505.356 607.4h-20.2v-87.773h20.2V607.4z"/><path fill="#454545" d="M554.12 607.4h-20.201v-87.773h20.2V607.4z"/><path fill="#454545" d="M583.374 607.4h-20.2v-87.773h20.2V607.4z"/><path fill="#454545" d="M632.118 607.4h-20.2v-87.773h20.2V607.4z"/><path fill="#454545" d="M661.373 607.4h-20.2v-87.773h20.2V607.4z"/><path fill="#454545" d="M719.882 607.4h-20.2v-87.773h20.2V607.4z"/><g><path fill="#454545" d="M271.32 461.118h-20.2V324.601h20.2v136.517z"/><path fill="#454545" d="M758.9 461.118h-20.199V324.601h20.2v136.517z"/><path fill="#454545" d="M310.318 461.118h-20.2V324.601h20.2v136.517z"/><path fill="#454545" d="M339.573 461.118h-20.2V324.601h20.2v136.517z"/><path fill="#454545" d="M388.317 461.118h-20.2V324.601h20.2v136.517z"/><path fill="#454545" d="M417.592 461.118h-20.2V324.601h20.2v136.517z"/><path fill="#454545" d="M446.846 461.118h-20.2V324.601h20.2v136.517z"/><path fill="#454545" d="M505.356 461.118h-20.2V324.601h20.2v136.517z"/><path fill="#454545" d="M554.12 461.118h-20.201V324.601h20.2v136.517z"/><path fill="#454545" d="M583.374 461.118h-20.2V324.601h20.2v136.517z"/><path fill="#454545" d="M632.118 461.118h-20.2V324.601h20.2v136.517z"/><path fill="#454545" d="M661.373 461.118h-20.2V324.601h20.2v136.517z"/><path fill="#454545" d="M719.882 461.118h-20.2V324.601h20.2v136.517z"/></g><g><path fill="#454545" d="M310.318 681.237h-20.2v-20.2h20.2v20.2z"/><path fill="#454545" d="M339.573 681.237h-20.2v-20.2h20.2v20.2z"/><path fill="#454545" d="M368.828 681.237h-20.2v-20.2h20.2v20.2z"/><path fill="#454545" d="M398.082 681.237h-20.2v-20.2h20.2v20.2z"/><path fill="#454545" d="M427.337 681.237h-20.2v-20.2h20.2v20.2z"/><path fill="#454545" d="M456.59 681.237h-20.199v-20.2h20.2v20.2z"/><path fill="#454545" d="M485.846 681.237h-20.2v-20.2h20.2v20.2z"/><path fill="#454545" d="M515.1 681.237h-20.2v-20.2h20.2v20.2z"/><path fill="#454545" d="M544.355 681.237h-20.2v-20.2h20.2v20.2z"/><path fill="#454545" d="M573.61 681.237h-20.2v-20.2h20.2v20.2z"/><path fill="#454545" d="M602.863 681.237h-20.199v-20.2h20.2v20.2z"/><path fill="#454545" d="M632.118 681.237h-20.2v-20.2h20.2v20.2z"/><path fill="#454545" d="M661.373 681.237h-20.2v-20.2h20.2v20.2z"/><path fill="#454545" d="M690.627 681.237h-20.2v-20.2h20.2v20.2z"/><path fill="#454545" d="M719.882 681.237h-20.2v-20.2h20.2v20.2z"/></g><g><path fill="#454545" d="M290.474 754.018H212.1v-68.609h20.2v48.41h58.174v20.199z"/><path fill="#454545" d="M797.9 754.018h-68.609v-20.2h48.41V685.41h20.2v68.609z"/><path fill="#454545" d="M797.9 324.6h-20.2v-48.418h-58.154v-20.2H797.9V324.6z"/><path fill="#454545" d="M232.3 324.6h-20.2v-68.619h68.609v20.2h-48.41v48.42z"/></g><g><path fill="#FC6E51" d="M767.6 500.473H242.4v-20.2h525.2v20.2z"/></g></g></g><metadata><rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xmlns:dc="http://purl.org/dc/elements/1.1/"><rdf:Description about="https://iconscout.com/legal#licenses" dc:title="barcode,scanning" dc:description="barcode,scanning" dc:publisher="Iconscout" dc:date="2017-09-22" dc:format="image/svg+xml" dc:language="en"><dc:creator><rdf:Bag><rdf:li>EcommDesign</rdf:li></rdf:Bag></dc:creator></rdf:Description></rdf:RDF></metadata></svg>
                                                    <div class="stat-panel-number h1 "></div>
                                                    <div class="stat-panel-title text-uppercase">Employees Access</div>
                                                </div>
                                            </div>
                                            <a href="employeeaccess.php" class="block-anchor panel-footer text-center">Full
                                                Detail <i class="fa fa-arrow-right"></i></a>
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