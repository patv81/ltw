
    <?php
    require_once('access.php');
    if (isset($_POST['name']) && isset($_POST['year'])) {
        $id = trim($_POST['id']);
        $name = trim($_POST['name']);
        $year = trim($_POST['year']);
        require_once('validate.php');
        if (Validate::checkInt($id) && Validate::checkIntft($year, 1990, 2015) && Validate::checklen($name, 5, 40)) {
            require_once('access.php');
            updaterow($id, $name, $year);

            header("Location: index2.php");
        }
        echo "1990< year <2015".'<br>'.'5 < len(name) < 40'.'<br>'.'id is interger';

        echo '<pre>' ;
        print_r([$id,$year,$name]); 
        echo'<pre>';
        echo exit("error");
    }
    ?>
