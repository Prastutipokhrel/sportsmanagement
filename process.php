<?php
/**
 * Created by PhpStorm.
 * User: Prastuti
 * Date: 10/12/2019
 * Time: 6:14 PM
 */
$mysqli= new mysqli('localhost','root','','dbsports') or die (mysqli_error($mysqli));
if(isset($_POST['submit'])){
    $match=$_POST['match'];
    $location=$_POST['location'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $mysqli->query("INSERT INTO user (Match_betn,Location,Date,Time ) VALUES ('$match','$location','$date','$time')") or die($mysqli->error);
}