<?php
    $conn=mysqli_connect("localhost","root","","finalyear");

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
    
    
    $sql1="delete from event where event_id='$id' ";
    $result=mysqli_query($conn,$sql1);

    if($result)
    {
        echo"<script>alert('Delete Succesfully');</script>";
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
    <title>EMS : Registrations</title>
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
                                    <h2>All Event Registration List</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row column4 graph">
                            <div class="col-md-12">
                                <div class="white_shd full margin_bottom_30">
                                    <div class="full graph_head">
                                        <div class="heading1 margin_0">
                                            <h2>List of Events</h2>
                                        </div>
                                    </div>
                                    <div class="full gallery_section_inner padding_infor_info">
                                        <div class="row">
                                            <?php
                                            $sql="select * from event";
                                            $result=mysqli_query($conn,$sql);

                                            if(mysqli_num_rows($result)>0){
                                            while($row=mysqli_fetch_assoc($result))
                                            {
                                        ?>
                                            <div
                                                class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                <div class="contact_blog">
                                                    <div class="contact_inner">
                                                        <div class="">
                                                            <h3><?php echo $row['event_title'];?></h3>
                                                            <p><strong>About: </strong><?php echo $row['description'];?>
                                                            </p>
                                                            <ul class="list-unstyled">
                                                                <li> location : <?php echo  $row['location'];?>
                                                                </li>
                                                                <li> organizer : <?php echo  $row['organizer'];?></li>
                                                            </ul>
                                                        </div>
                                                        <div class="bottom_list">
                                                            <div class="">
                                                                <button type="button" class="btn btn-warning btn-xs"> <a
                                                                        href="single_event_registration.php?id=<?php echo $row['event_id'];?>">View
                                                                        Registration</a>
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
                                                echo "<h3><center>No Event Found</center></h3>";

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