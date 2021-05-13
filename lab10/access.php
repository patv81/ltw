<?php 


class Databasei{
    private static $servername="localhost";
    private static $username="root";
    private static $password="";
    private static $dbname="examples";
    private static $conn = FALSE;
    public static function connect(){
        $conn = new mysqli(self::$servername, self::$username, self::$password, self::$dbname);
        if ($conn->connect_errno) {
            die("Connect fail :" . $conn->connect_errno);
        }
        self::$conn = $conn;
        return $conn;
    }
    public static function disconnect(){
        if (self::$conn){
            self::$conn->close();
        }
        else{
            die("the are no connect");
        }
    }
}
function showlist(){
    $conn =  Databasei::connect();
    
    $selectall = "SELECT * FROM cars";
    $resultquery = $conn->query($selectall);
    $listrow = [];
    if ($resultquery->num_rows > 0) {
        while ($row = $resultquery->fetch_assoc()) {
            $listrow[] = [$row['id'], $row['name'], $row['year']];
            
        }
    }
    Databasei::disconnect();
    return $listrow;
}
function deleterow($id){
    $conn = Databasei::connect();
    $sqldelete = "DELETE FROM cars where `id`= $id";
    $result = $conn->query($sqldelete);
    if ($result === TRUE) {
        echo "delete success";
    } else {
        echo "de unsuccess";
    }
    Databasei::disconnect();

}
function addrow($id,$name,$year){
    $conn = Databasei::connect();
    // check valid $name,$year
    // null
    $sqladd = "INSERT INTO cars (id,name,year) VALUES ('$id','$name','$year')";
    $result = $conn->query($sqladd);
    if ($result === TRUE) {
        echo "success";
    } else {
        echo "unsuccess";
    }
    Databasei::disconnect();
}
function updaterow($id,$name,$year){
    $conn = Databasei::connect();
    $sqlupdate = "UPDATE `cars` SET `name`='$name',`year`='$year' WHERE `id`=$id";
    $result = $conn->query($sqlupdate);
    if ($result === TRUE) {
        echo "update success";
    } else {
        echo "update unsuccess";
    }

    Databasei::disconnect();
}
function selectrow($id){
    $conn =  Databasei::connect();

    $selectall = "SELECT * FROM cars WHERE `id` = $id";
    $resultquery = $conn->query($selectall);
    $listrow = [];
    if ($resultquery->num_rows > 0) {
        while ($row = $resultquery->fetch_assoc()) {
            return $row;
        }
    }
    Databasei::disconnect();
    return $listrow;
}
?>
