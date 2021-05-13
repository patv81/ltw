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
        function loadXMLDoc() {
            $.ajax({
                // The link we are accessing.
                url: "index_api2.php",

                // The type of request.
                type: "get",

                // The type of data that is getting returned.
                dataType: "html",

                success: function(strData) {
                    strData = JSON.parse(strData);
                    strData.forEach((item, index) => {
                        
                        document.getElementById("myDiv").innerHTML += `<tr>
                    <th scope='row'>${item[0]}</th>
                    <td>${item[1]}</td>
                    <td>${item[2]}</td>
                    <td>                        
                        <a href='delete.php?id=${item[0]}'>Delete </a>
                        &nbsp;
                        <a href='edit2.php?id=${item[0]}'>Edit </a>
                    </td>
                </tr>`
                    })
                }
            });
        }
        $(document).ready(function() {

            let datas = loadXMLDoc();


        });
    </script>
</head>

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
            <tbody id="myDiv">


            </tbody>
        </table>
        <a href="add2.php"><button> Add </button></a>
    </div>
</body>

</html>