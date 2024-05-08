<?php
    session_start();
    if(isset($_SESSION['login']))
    {
        
    }else{
        header('location:login.php');
    }
 $conn=mysqli_connect("localhost","root","","finalyear");

 if(isset($_POST['submit']))
 {
    $title=$_POST['title'];
    $type=$_POST['type'];
    $tag=$_POST['tag'];
    $location=$_POST['location'];
    $organizer=$_POST['organizer'];
    $desc=$_POST['Desc'];
    $sdate=$_POST['sdate'];
    $stime=$_POST['stime'];
    $edate=$_POST['edate'];
    $etime=$_POST['etime'];
    $from=$_POST['from'];
    $before=$_POST['before'];
    $enddate=$_POST['enddate'];
    $endtime=$_POST['endtime'];

    $sql="insert into event(event_title,event_type,event_tag,description,location,organizer,start_date,start_time,end_date,end_time,register_from,register_before,register_end_date,register_end_time)values('$title','$type','$tag','$desc','$location','$organizer','$sdate','$stime','$edate','$etime',' $from',' $before','$enddate',' $endtime')";

    $result=mysqli_query($conn,$sql);

    if($result)
    {
        echo"<script>alert('Event register Successfully');</script>";
    }
    else{
        echo "not";
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
    <title>EMS : Create Events</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/colors.css" />
    <link rel="stylesheet" href="css/bootstrap-select.css" />
    <link rel="stylesheet" href="css/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="js/semantic.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="inner_page contact_page">
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
                                    <h2>Add Event Form</h2>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <form class="" action="" method="post">
                                <hr>
                                <span class="badge text-bg-secondary">Basic Information</span>
                                <hr>
                                <div class="row my-3">
                                    <div class="col-4">
                                        <label for="inputEmail4" class="form-label">Event Title</label>
                                        <input type="text" name="title" class="form-control" id="inputEmail4" required>
                                    </div>
                                    <div class="col-4 d-flex flex-column">
                                        <label for="inputState" class="form-label">Event Type</label>
                                        <select id="inputState" class="form-control" name="type" required>
                                            <option selected>Hackathon</option>
                                            <option>Conference</option>
                                            <option>Management</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label for="inputPassword4" class="form-label">Event Tag</label>
                                        <input type="text" name="tag" class="form-control" id="inputPassword4" required>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-6">
                                        <label for="inputPassword4" class="form-label">Location</label>
                                        <input type="text" name="location" class="form-control" id="inputPassword4" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="inputPassword4" class="form-label">Organizer</label>
                                        <input type="text" name="organizer" class="form-control" id="inputPassword4" required>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">Described The
                                            Event</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3" name="Desc" required></textarea>
                                    </div>
                                </div>
                                <hr>
                                <span class="badge text-bg-secondary">Where and When</span>
                                <hr>
                                <div class="row my-3">
                                    <div class="col-3">
                                        <label for="inputEmail4" class="form-label">Start Date</label>
                                        <input type="date" name="sdate" class="form-control" id="inputEmail4" required>
                                    </div>
                                    <div class="col-3">
                                        <label for="inputEmail4" class="form-label">Start Time</label>
                                        <input type="time" name="stime" class="form-control" id="inputEmail4" required>
                                    </div>
                                    <div class="col-3">
                                        <label for="inputEmail4" class="form-label">End Date</label>
                                        <input type="date" name="edate" class="form-control" id="inputEmail4" required>
                                    </div>
                                    <div class="col-3">
                                        <label for="inputEmail4" class="form-label">End Time</label>
                                        <input type="time" name="etime" class="form-control" id="inputEmail4" required>
                                    </div>
                                </div>

                                <hr>
                                <span class="badge text-bg-secondary">Registration</span>
                                <hr>
                                <div class="row">
                                    <div class="col-3">
                                        <label for="inputEmail4" class="form-label">From</label>
                                        <input type="date" name="from" class="form-control" id="inputEmail4" required>
                                    </div>
                                    <div class="col-3">
                                        <label for="inputEmail4" class="form-label">Before</label>
                                        <input type="date" name="before" class="form-control" id="inputEmail4" required>
                                    </div>
                                    <div class="col-3">
                                        <label for="inputEmail4" class="form-label">End Date</label>
                                        <input type="date" name="enddate" class="form-control" id="inputEmail4" required>
                                    </div>
                                    <div class="col-3">
                                        <label for="inputEmail4" class="form-label">End Time</label>
                                        <input type="time" name="endtime" class="form-control" id="inputEmail4" required>
                                    </div>
                                </div>
                                <div class="row my-3">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
                                </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/custom.js"></script>
    <script></script>
</body>

</html>