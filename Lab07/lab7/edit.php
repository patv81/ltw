<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require_once('access.php');
    $row = selectrow($id);
} else {
    header("Location: index.php");
}

?>
<div style="text-align:center;">
    <a href="index.php">Home</a>
    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="" placeholder="name" value="<?php echo $row['name'] ?>">
        <label for="year">Year:</label>
        <input type="text" name="year" id="" placeholder="year" value="<?php echo $row['year'] ?>">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="submit">
    </form>

    <?php
    if (isset($_POST['name']) && isset($_POST['year'])) {
        $name = trim($_POST['name']);
        $year = trim($_POST['year']);
        require_once('validate.php');
        if (Validate::checkInt($id) && Validate::checkIntft($year, 1990, 2015) && Validate::checklen($name, 5, 40)) {
            require_once('access.php');
            updaterow($id, $name, $year);

            header("Location: index.php");
        }
        echo exit("error");
    }
    ?>
</div>