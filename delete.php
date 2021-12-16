<?php 
ob_start();
session_start();
include 'init.php';
if(isset($_SESSION['type']) && $_SESSION["type"] == "1"){

if ($_GET['from'] == "admins" && isset($_GET['id']) && is_numeric($_GET['id'])){
    $admin_id = $_GET['id'];
    $stmt = $con->prepare("DELETE FROM users WHERE id = :admin_id");
    $stmt->bindParam(":admin_id" , $admin_id);
    $stmt->execute();
    $loc = $_SERVER['HTTP_REFERER'];
    header("Location:$loc");
}else if($_GET['from'] == "board" && isset($_GET['id']) && is_numeric($_GET['id'])){
    $board_id = $_GET['id'];
    $stmt = $con->prepare("DELETE FROM board WHERE id = :board_id");
    $stmt->bindParam(":board_id" , $board_id);
    $stmt->execute();
    header("Location:all_board.php");
}
else if($_GET['from'] == "messages" && isset($_GET['id']) && is_numeric($_GET['id'])){
    $messages_id = $_GET['id'];
    $stmt = $con->prepare("DELETE FROM contact_us WHERE id = :messages_id");
    $stmt->bindParam(":messages_id" , $messages_id);
    $stmt->execute();
    header("Location:all_messages.php");
}
else if($_GET['from'] == "events" && isset($_GET['id']) && is_numeric($_GET['id'])){
    $event_id = $_GET['id'];
    $stmt = $con->prepare("DELETE FROM events WHERE id = :event_id");
    $stmt->bindParam(":event_id" , $event_id);
    $stmt->execute();
    header("Location:all_events.php");
}
else if($_GET['from'] == "members" && isset($_GET['id']) && is_numeric($_GET['id'])){
    $member_id = $_GET['id'];
    $stmt = $con->prepare("DELETE FROM members WHERE id = :member_id");
    $stmt->bindParam(":member_id" , $member_id);
    $stmt->execute();
    header("Location:all_members.php");
}
else{
    header("location:admin_dash.php");
}
require_once "./includes/template/footer.php";

}else{
    header("Location:LogIn.php");
}

ob_end_flush();