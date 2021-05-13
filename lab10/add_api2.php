    <?php
    if (isset($_POST['name']) && isset($_POST['year']) && isset($_POST['year'])) {
        $name = trim($_POST['name']);
        $year = trim($_POST['year']);
        $id = trim($_POST['id']);

        require_once('validate.php');
        if (Validate::checkInt($id) && Validate::checkIntft($year, 1990, 2015) && Validate::checklen($name, 5, 40)) {
            require_once('access.php');
            addrow($id, $name, $year);
            header("Location: index2.php");
        }
        echo "<br> invalid input";
    }
    ?>