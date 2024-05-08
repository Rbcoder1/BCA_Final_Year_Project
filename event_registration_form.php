<?php

    include "connect.php";

    

    if(isset($_POST['register'])){
        $eid = $_POST['eid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        $sql = "insert into event_registration(event_id,name,email,mobile) value($eid,'$name','$email','$mobile')";
        $result = mysqli_query($conn,$sql);

        if($result){
            echo "<script> alert('Successfully Register For Event') </script>";
        }
        else{
            echo "<script> alert('Registration Failed : Enter Valid Details') </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/colors.css" />
    <link rel="stylesheet" href="css/bootstrap-select.css" />
    <link rel="stylesheet" href="css/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/custom.css" />
</head>

<body>
    <?php
        if(isset($_GET['id'])){
            $eventid = $_GET['id'];

            $sql = "select * from event";
            $result = mysqli_query($conn, $sql);

            if($result){
                while($row = $result->fetch_assoc()){
        ?>
    <div class="container">
        <div>
        <h1>Event Registration Form </h1>
        <form method="post" action="" style="" >
            <div>
                <div class="row my-3">
                    <div class="col-6 d-flex flex-column">
                        <input type="text" name="eid" class="form-control" placeholder="<?php echo $row['event_id'] ?>" value="<?php echo $row['event_id'] ?>"
                            >
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-6">
                        <label for="inputPassword4" class="form-label">Participant Name</label>
                        <input type="text" name="name" class="form-control" placeholder="enter your name"
                            required>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-6">
                        <label for="inputPassword4" class="form-label">Participant Email</label>
                        <input type="text" name="email" class="form-control" placeholder="enter your email"
                            required>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-6">
                        <label for="inputPassword4" class="form-label">Participant Mobile Number</label>
                        <input type="text" name="mobile" class="form-control" placeholder="enter Mobile No"
                            required>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                        <button type="register" class="btn btn-primary" name="register">Register</button>
                    </div>
                </div>
            </div>
        </form>इ
        </div>

    </div>
    <?php
                }
            }
        }
        else{
            ?>
    <h1>No Event Found</h1>
    <?php
        }

    ?>



    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
</body>

</html>