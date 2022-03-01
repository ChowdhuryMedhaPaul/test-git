<?php 

require_once '../db/DatabaseClass.php';

if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email'])) {
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$mysqliConn = new DatabaseClass();
$mysqliConn->insertStudentDetails($name,$phone,$email);

}
// if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email'])) {
//         $name = $_POST['name'];
//         $phone = $_POST['phone'];
//         $email = $_POST['email'];


//         $mysqliConn = new DatabaseClass();
//         $mysqliConn =  $mysqliConn->getDB();
        
//         $query = 'INSERT INTO `studentdetails` ( `name`, `phone`, `email` ) VALUES (?, ?, ?)';
//         $stmt = $mysqliConn->prepare($query);
 
//         $stmt->execute([$name, $phone, $email]);
 
//     }
?>