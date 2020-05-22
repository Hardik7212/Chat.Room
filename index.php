<?php
session_start();
include("connection.php");

if ($_SESSION['uname'] == '') {
    header("location:register.php");
}
if (isset($_POST['send'])) {
    $msg = $_POST['msg'];
    $name = $_SESSION['uname'];
    $q = "insert into message(msg_text,sender_name) values('$msg','$name') ";
    if ($result = mysqli_query($con, $q)) {
        
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Chat Room</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <style type="text/css">
        .main {
            height: 300px;
            overflow: scroll;
        }
    </style>

</head>

<body>
    <div class="container">

        <div class="card">

            <div class="card-header">

                <h3 style="float: left;">Chat Room</h3>

                <h4 style="float: right;"><?php echo "online - ";
                                            echo $_SESSION['uname']; ?></h4><br>

            </div>

            <div class="card-body">
                <div>
                    <form action="" method="post">
                        <div class="main" id="auto" style="color: red;">
                            
                        </div>

                        <div class="text-center">
                            <textarea class="form-control" placeholder="Type Message.." name="msg" required=""></textarea><br>
                            <button type="submit" class="btn btn-danger" id="send" name="send">Send</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card-footer text-center">

                <a href="logout.php" class="btn btn-primary text-center">Log Out</a>
            </div>

        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $('#auto').load('message.php');
            }, 1000);

            $('#auto').load("message.php");
        });
    </script>


</body>

</html>