<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="./js.js"></script>
</head>
<?php 
$flag = 0;
$error=[];
if (isset($_POST["gender"])){
    require_once("check.php");
    $flag=1;
}
?>
<body>
    <div class="container">
        <h2>Vertical (basic) form</h2>
        <div class="row">
            <div class="col-lg-8">
                <small class="text-danger">
                    <?php 
                    if ($flag =1){
                        foreach ($error as $value){
                            echo $value;
                            echo "<br>";
                        }
                    }

                    ?>
                </small>
                <h3 class="text-info">
                    <?php 
                    if(empty($error)){
                        echo"complete !!!";
                    }
                    ?>
                </h3>
            </div>
        </div>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="email">Full name:</label>
                <div class="row">
                    <div class="col">
                        <input id="firstname" type="text" class="form-control" placeholder="First name" name="fname">
                    </div>
                    <div class="col">
                        <input id="lastname" type="text" class="form-control" placeholder="Last name" name="lname">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
            <div class="form-group">
                <label for="date">Starts on:</label>
                <input type="date" id="date" />
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="rmale" name="gender" value="male" class="custom-control-input">
                <label class="custom-control-label" for="rmale">Male</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="rfemale" name="gender" value="female" class="custom-control-input">
                <label class="custom-control-label" for="rfemale">Female</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="runknow" name="gender" class="custom-control-input" value="unknow">
                <label class="custom-control-label" for="runknow">Unknown</label>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Country</label>
                <select class="form-control" id="exampleFormControlSelect1" name="country">
                    <option value="1">Việt Nam</option>
                    <option value="2">Australia</option>
                    <option value="3">United States</option>
                    <option value="4">India</option>
                    <option value="5">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">About</label>
                <textarea class="form-control" id="about" rows="3" name="about"></textarea>
            </div>
            <div class="form-group">
                <label>birthday <span>*</span></label>
                <SELECT id="year" name="yyyy" onchange="change_calender()">

                </SELECT>
                <SELECT id="month" name="mm" onchange="change_calender()">
                </SELECT>
                <SELECT id="day" name="dd">
                </SELECT>
            </div>

            <button type="submit" class="btn btn-default btn-primary">Submit</button>
            <button class="btn btn-danger" type="reset">Reset</button>
        </form>
    </div>
</body>

</html>