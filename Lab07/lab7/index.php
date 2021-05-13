<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7</title>
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<?php
require_once('./access.php');
$listrow = showlist();
$re = "";
foreach ($listrow as $value) {
    $re = $re . sprintf("<tr>
                    <th scope='row'>%s</th>
                    <td>%s</td>
                    <td>%s</td>
                    <td>                        
                        <a href='delete.php?id=%s'>Delete </a>
                        &nbsp;
                        <a href='edit.php?id=%s'>Edit </a>
                    </td>
                </tr>", $value[0], $value[1], $value[2], $value[0], $value[0]);
}
?>

<body>

    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Year</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php
                echo $re;
                ?>
            </tbody>
        </table>
        <a href="add.php"><button> Add </button></a>
    </div>
</body>

</html>