<?php 

include "connect.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>EMS : Event Gallery</title>
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
                                <div class="page_title">
                                    <h2>Media Gallery</h2>

                                </div>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row column4 graph">
                            <div class="col-md-12">
                                <div class="white_shd full margin_bottom_30">
                                    <div class="full graph_head d-flex justify-content-between">
                                        <div class="heading1 margin_0">
                                            <h2>Media Gallery Design Elements</h2>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary"><a href="add_image.php">Add
                                                    Image</a></button>
                                        </div>
                                    </div>
                                    <div class="full gallery_section_inner padding_infor_info">
                                        <div class="row">

                                            <?php
                                            $sql = "SELECT * FROM event_gallery";
                                            $result = mysqli_query($conn, $sql);

                                            if(mysqli_num_rows($result)>0){
                                                while($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                            <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                <div class="column">
                                                    <a data-fancybox="gallery"
                                                        href="img/<?php echo $row['image_url'];?>"><img
                                                            class="img-responsive"
                                                            src="img/<?php echo $row['image_url'];?>" alt="#" /></a>
                                                </div>
                                                <div class="heading_section">
                                                    <h4><?php echo $row['image_name'];?></h4>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            }
                                            else{
                                                echo "<h2>No Photo Available</h2>";
                                            }
                                        ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal Heading</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                Modal body..
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end model popup -->
            </div>
        </div>
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- wow animation -->
        <script src="js/animate.js"></script>
        <!-- select country -->
        <script src="js/bootstrap-select.js"></script>
        <!-- owl carousel -->
        <script src="js/owl.carousel.js"></script>
        <!-- chart js -->
        <script src="js/Chart.min.js"></script>
        <script src="js/Chart.bundle.min.js"></script>
        <script src="js/utils.js"></script>
        <script src="js/analyser.js"></script>
        <!-- nice scrollbar -->
        <script src="js/perfect-scrollbar.min.js"></script>
        <script>
        var ps = new PerfectScrollbar('#sidebar');
        </script>
        <!-- fancy box js -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <!-- custom js -->
        <script src="js/custom.js"></script>
        <!-- calendar file css -->
        <script src="js/semantic.min.js"></script>
</body>

</html>