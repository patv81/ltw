<?php
require_once('./access.php');
$listrow = showlist();
echo json_encode($listrow);

?>