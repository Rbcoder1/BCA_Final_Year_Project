<?php
    $conn=mysqli_connect("localhost","root","","finalyear");

    session_start();
    if(isset($_SESSION['login']))
    {
        
    }else{
        header('location:login.php');
    }



    if(isset($_POST['updatevolunteer'])){
        $name = $_POST['vname'];
        $vclass = $_POST['vclass'];
        $mobile = $_POST['vmob'];
        $rno = $_POST['vrno'];

        if($name && $vclass && $mobile && $rno){
            $sql = "UPDATE INTO volunteers(name,mobile,class,rno) VALUES('$name','$mobile','$vclass','$rno')";
            $result = mysqli_query($conn, $sql);

            if($result){
                echo "Inserted Successfully";
            }
            else{
                echo "Not Inserted";
            }
        }
        else{
            echo "All Fields Are Required";
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
    <title>EMS : Add Image</title>
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
                    <div class="container-fluid d-flex flex-column justify-content-center">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Update Volunteer Information</h2>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <form class="" action="" method="post">
                                <div class="row my-3">
                                    <div class="col-6 d-flex flex-column">
                                        <label for="inputState" class="form-label">Volunteer Name</label>
                                        <input type="text" name="vname" class="form-control"
                                            placeholder="enter volunteer name" required>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-6">
                                        <label for="inputPassword4" class="form-label">Volunteer Class</label>
                                        <input type="text" name="vclass" class="form-control"
                                            placeholder="enter volunteer class" required>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-6">
                                        <label for="inputPassword4" class="form-label">Volunteer Mobile No.</label>
                                        <input type="text" name="vmob" class="form-control"
                                            placeholder="enter volunteer Mobile Number" required>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-6">
                                        <label for="inputPassword4" class="form-label">Volunteer Roll No</label>
                                        <input type="text" name="vrno" class="form-control"
                                            placeholder="enter volunteer Roll No" required>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary" name="addvolunteer">Add
                                            Volunteer</button>
                                    </div>
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