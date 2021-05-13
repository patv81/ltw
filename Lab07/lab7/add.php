<div style="text-align:center;">
    <a href="index.php">Home</a>
    <form action="#" method="post">
        <input type="text" name="id" id="" placeholder="id">
        <input type="text" name="name" id="" placeholder="name">
        <input type="text" name="year" id="" placeholder="year">
        <input type="submit" value="submit">
    </form>


    <?php
    if (isset($_POST['name']) && isset($_POST['year']) && isset($_POST['year'])) {
        $name = trim($_POST['name']);
        $year = trim($_POST['year']);
        $id = trim($_POST['id']);

        require_once('validate.php');
        if (Validate::checkInt($id) && Validate::checkIntft($year, 1990, 2015) && Validate::checklen($name, 5, 40)) {
            require_once('access.php');
            addrow($id, $name, $year);
            header("Location: index.php");
        }
        echo "<br> invalid input";
    }
    ?>


</div>