<?php
    require('connect.php');
    session_start();
    if(isset($_SESSION['login']))
    {
        
    }else{
        header('location:login.php');
    }

if(isset($_POST['submit']))
{
   $topic=$_POST['topic'];
   $type=$_POST['type'];
   $Dur=$_POST['duration'];
   $location=$_POST['location'];
   $organizer=$_POST['organizer'];
   $agenda=$_POST['agenda'];
   $NDM=$_POST['NDM'];  
   $mlink=$_POST['mlink'];
   $sdate=$_POST['sdate'];
   $stime=$_POST['stime'];
   $edate=$_POST['edate'];
   $etime=$_POST['etime'];

   $sql="update meetings set meet_name='$topic',
   meet_type='$type',meet_duration='$Dur',meet_location='$location',meet_org='$organizer',
   meet_agenda='$agenda',meet_notes='$NDM',meet_link='$mlink',start_date='$sdate',start_time='$stime',
   end_date='$edate',end_time='$etime' ";
   $result=mysqli_query($conn,$sql);

   if($result)
   {
       echo"<script>alert('Meeting Update Successfully');</script>";
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
    <title>EMS : Update Meetings</title>
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
                <?php
                    $id=$_GET['id'];

                    $sql="select * from meetings where meeting_id='$id'";
                    $result=mysqli_query($conn,$sql);

                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Update Meeting Form</h2>
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
                                        <label for="inputEmail4" class="form-label">Meeting Topic</label>
                                        <input type="text" name="topic" class="form-control" id="inputEmail4" value="<?php echo $row['meet_name'];?>">
                                    </div>
                                    <div class="col-4 d-flex flex-column">
                                        <label for="inputState" class="form-label">Meeting Type</label>
                                        <select id="inputState" class="form-control" name="type" >
                                            <option><?php echo $row['meet_type'];?></option>
                                            <option>Hackathon</option>
                                            <option>Conference</option>
                                            <option>Management</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label for="inputPassword4" class="form-label">Duration</label>
                                        <input type="text" name="duration" class="form-control" id="inputPassword4" value="<?php echo $row['meet_duration'];?>">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-6">
                                        <label for="inputPassword4" class="form-label">Location</label>
                                        <input type="text" name="location" class="form-control" id="inputPassword4" value="<?php echo $row['meet_location'];?>">
                                    </div>
                                    <div class="col-6">
                                        <label for="inputPassword4" class="form-label">Organizer</label>
                                        <input type="text" name="organizer" class="form-control" id="inputPassword4" value="<?php echo $row['meet_org'];?>">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-12">
                                        <label for="exampleFormControlTextarea1"
                                            class="form-label">Agenda/Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3" name="agenda"><?php echo $row['meet_agenda'];?></textarea>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">Note During
                                            Meeting</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3" name="NDM"><?php echo $row['meet_notes'];?></textarea>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">
                                            Meeting Link</label>
                                        <input type="text" name="mlink" class="form-control" placeholder="Meeting Link" value="<?php echo $row['meet_link'];?>">
                                    </div>
                                </div>
                                <hr>
                                <span class="badge text-bg-secondary">Where and When</span>
                                <hr>
                                <div class="row my-3">
                                    <div class="col-3">
                                        <label for="inputEmail4" class="form-label">Start Date</label>
                                        <input type="date" name="sdate" class="form-control" id="inputEmail4" value="<?php echo $row['start_date'];?>">
                                    </div>
                                    <div class="col-3">
                                        <label for="inputEmail4" class="form-label">Start Time</label>
                                        <input type="time" name="stime" class="form-control" id="inputEmail4" value="<?php echo $row['start_time'];?>">
                                    </div>
                                    <div class="col-3">
                                        <label for="inputEmail4" class="form-label">End Date</label>
                                        <input type="date" name="edate" class="form-control" id="inputEmail4" value="<?php echo $row['end_date'];?>">
                                    </div>
                                    <div class="col-3">
                                        <label for="inputEmail4" class="form-label">End Time</label>
                                        <input type="time" name="etime" class="form-control" id="inputEmail4" value="<?php echo $row['end_time'];?>">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary" name="submit" >Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <?php
                    }
                ?>
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