<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab10</title>
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
                        console.log("yoyo");
                        window.location.href = "index2.php";
                    }
                });

            });
        })
    </script>
</head>
<div style="text-align:center;" id="myDiv">
    <a href="index2.php">Home</a>
    <form id="theForm" action="add_api2.php" method="POST">
        <input type="text" name="id" id="" placeholder="id">
        <input type="text" name="name" id="" placeholder="name">
        <input type="text" name="year" id="" placeholder="year">
        <button type="submit" id="foo">Send</button>
    </form>
    <p id="demo"></p>


</div>

</html>