<?php

    include "connect.php";

    session_start();
    if(isset($_SESSION['login']))
    {
        
    }else{
        header('location:login.php');
    }

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $sql = "DELETE FROM volunteers WHERE id='$id'";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script>alert('Deleted Successfully');</script>";
        }
        else{
            echo "Something went Wrong";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>EMS : Volunteers</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/colors.css" />
    <link rel="stylesheet" href="css/bootstrap-select.css" />
    <link rel="stylesheet" href="css/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="js/semantic.min.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="inner_page media_gallery">
    <div class="full_container">
        <div class="inner_container">
            <?php include "./components/Sidebar.php" ?>
            <div id="content">
                <?php include "./components/Header.php" ?>
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title d-flex justify-content-between">
                                    <h2>Event List</h2>
                                    <button class="btn btn-primary"><a href="add_volunteer.php">Add
                                            Volunteer</a></button>
                                </div>

                            </div>
                        </div>
                        <div class="row column4 graph">
                            <!-- Gallery section -->
                            <div class="col-md-12">
                                <div class="white_shd full margin_bottom_30">
                                    <div class="full graph_head">
                                        <div class="heading1 margin_0">
                                            <h2>List of Volunteers</h2>
                                        </div>
                                    </div>
                                    <div class="full gallery_section_inner padding_infor_info">
                                        <div class="row">
                                            <?php

                                                $sql = "SELECT * FROM volunteers";
                                                $result = mysqli_query($conn, $sql);

                                                if($result){
                                                    while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                            <div
                                                class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                <div class="contact_blog">
                                                    <div class="contact_inner">
                                                        <div class="">
                                                            <h3>Name</h3>
                                                            <p><strong>About: </strong>about description</p>
                                                            <ul class="list-unstyled">
                                                                <li><i class="fa fa-envelope-o"></i> : test@gmail.com
                                                                </li>
                                                                <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                            </ul>
                                                        </div>
                                                        <div class="bottom_list">
                                                            <div class="">
                                                                <button type="button" class="btn btn-success btn-xs"> <a
                                                                        href="update_volunteer.php">Update</a>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-xs">
                                                                    <a href="volunteer.php?id=<?php echo $row['id'];?>">Delete</a>
                                                                </button>
                                                                <button type="button" class="btn btn-secondary btn-xs">
                                                                    <a href="">Allocate</a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                                }
                                                else{
                                                    echo "Something Went Wrong";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-select.js"></script>
        <script src="js/custom.js"></script>
</body>

</html>