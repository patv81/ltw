<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require_once('access.php');
    $row = selectrow($id);
} else {
    header("Location: index2.php");
}

?>
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
    <script>
        $(document).ready(function() {
            $('#theForm').submit(function(e) {
                e.preventDefault(); // avoid to execute the actual submit of the form.

                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data, textStatus) {
                        window.location.href = "index2.php";
                    }
                });

            });
        })
    </script>
</head>
<div style="text-align:center;" id="myDiv">
    <a href="index2.php">Home</a>
    <form action="edit_api2.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="" placeholder="name" value="<?php echo $row['name'] ?>">
        <label for="year">Year:</label>
        <input type="text" name="year" id="" placeholder="year" value="<?php echo $row['year'] ?>">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="submit">
    </form>
    <p id="demo"></p>


</div>

</html>