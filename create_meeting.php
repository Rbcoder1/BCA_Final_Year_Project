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

   $isEmail = $_POST['isEmail'];


   $sql="insert into meetings(meet_name,meet_type,meet_duration,meet_location,meet_org,meet_agenda,meet_notes,meet_link,start_date,start_time,end_date,end_time)values('$topic','$type','$Dur',' $location','$organizer','$agenda','$NDM','$mlink','$sdate','$stime','$edate','$etime')";
   $result=mysqli_query($conn,$sql);

   $sql1 = "select email from event_registration";
   $result1 = mysqli_query($conn,$sql1);

   if($result)
   {
        if($isEmail){
            while($row = $result1->fetch_assoc()){
                $to = $row['email'];
                $subject = $topic;
                $message = "Hello This mail is send by event management system meet link :- $mlink";

                 // Send email
                if (mail($to, $subject, $message)) {
                    echo "<script>alert('Email Send Successfully');</script>";
                } else {
                    echo "<script>alert('Email sending failed to $to');</script>";
                }
            }
        }
       echo"<script>alert('Meeting register Successfully');</script>";
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
    <title>EMS : Create Meetings</title>
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
                                    <h2>Add Meeting Form</h2>
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
                                        <input type="text" name="topic" class="form-control" id="inputEmail4" required>
                                    </div>
                                    <div class="col-4 d-flex flex-column">
                                        <label for="inputState" class="form-label">Meeting Type</label>
                                        <select id="inputState" class="form-control" name="type" required>
                                            <option selected>Staff Meeting</option>
                                            <option>Student Meeting</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label for="inputPassword4" class="form-label">Duration (hr)</label>
                                        <input type="text" name="duration" class="form-control" id="inputPassword4" required>
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
                                        <label for="exampleFormControlTextarea1"
                                            class="form-label">Agenda/Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            name="agenda"></textarea>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">Note During
                                            Meeting</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            name="NDM"></textarea>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">
                                            Meeting Link</label>
                                        <input type="text" name="mlink" class="form-control" placeholder="Meeting Link" required>
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
                                <div class="row my-3">
                                    <div class="col">
                                        <input type="checkbox" name="isEmail" id="isEmail">
                                        <label for="isEmail">Send Reminder Past Registration</label>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                    </div>x
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