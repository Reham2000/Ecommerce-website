<?php
require_once "init.php";

/*
==========================
  insert new user
==========================
*/

function insert_user ($username,$email,$sup_hased,$gender){
    global $con;
    $stmt = $con->prepare("INSERT INTO users(username,email,password,gender,type) Value(:username,:email,:password,:gender,:type)");
    $stmt->execute(
    array(
        ":username"     => $username,
        ":email"    => $email,
        ":password" => $sup_hased,
        ":gender" => $gender,
        ":type" => 2,
    ));
    echo "
    <script>
        toastr.success('Great ,You Signed UP Successfully .')
    </script>";
    header("Refresh:3;url=siggin.php");
}


/*
==========================  
  check if user exist
==========================
*/

function check_user ( $email , $pass){
    global $con;
    $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute(array($email));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $count = $stmt->rowCount();
    if ($count){
        if( $rows['password'] == $pass ){
            $_SESSION['user_id']        = $rows['id'];
            $_SESSION['user_name']      = $rows['username'];
            $_SESSION['user_email']     = $rows['email'];
            $_SESSION['user_gender']    = $rows['gender'];
            $_SESSION['type']      = $rows['type'];
            $_SESSION['user_adress']    = $rows['adress'];
            
                echo "
                <script>
                    toastr.success('WELCOME BACK " . $_SESSION['user_name'] . "')
                </script>";
                if($rows['type'] == 2 ){
                header("Refresh:3;url=index.php");
                }elseif($rows['type'] == 1 || $rows['type'] == 3){
                    header("Refresh:3;url=admin_dash.php");
                }

            // }

        }
        else{
                echo "
                <script>
                    toastr.error('Sorry The Email or Password is incorrect......!')
                </script>";
        }   
    }
    else{

                echo "
                <script>
                    toastr.error('Sorry The Email or Password is incorrect......!')
                </script>";
        }
}



/*
==========================  
  insert new user
==========================
*/


function insert_admin ($username,$email,$sup_hased,$gender){
    global $con;
    $stmt = $con->prepare("INSERT INTO users(username,email,password,gender,type) Value(:username,:email,:password,:gender,:type)");
    $stmt->execute(
    array(
        ":username"     => $username,
        ":email"    => $email,
        ":password" => $sup_hased,
        ":gender" => $gender,
        ":type" => 1,
    ));
    echo "
    <script>
        toastr.success('Great ,Admin has added successfully  .')
    </script>";
    header("Refresh:3;url=all_admins.php");
}

/*
==========================
  insert new Category
==========================
*/

function insert_cat ($cat_name){
    global $con;
    $stmt = $con->prepare("INSERT INTO categories(cat_name) Value(:cat_name)");
    $stmt->execute(
    array(
        ":cat_name"     => $cat_name,
    ));
    echo "
    <script>
        toastr.success('Great ,You Signed UP Successfully .')
    </script>";
    header("Refresh:3;url=all_category.php");
}

/*
==========================
  insert new Blog
==========================
*/

function insert_blog($adress,$desc,$avatar){
    global $con;
    $stmt = $con->prepare("INSERT INTO blog(adress,description,img,time) Value(:adress,:descr,:img,:time)");
    date_default_timezone_set('Africa/Cairo');
    $time = date("Y/m/d . H:i:s");
    $stmt->execute(
    array(
        ":adress"     => $adress,
        ":descr"     => $desc,
        ":img"     => $avatar,
        ":time"     => $time,
    ));
    echo "
    <script>
        toastr.success('Great ,Artical Added Successfully .')
    </script>";
    header("Refresh:3;url=all_artical.php");
}

/*
==========================
  insert new Message
==========================
*/

function addmsg($name,$email,$phone,$msg){
    global $con;
    $stmt=$con->prepare("INSERT INTO messages(name,email,phone,msg,time) Value(:name,:email,:phone,:msg,:time)");
    date_default_timezone_set('Africa/Cairo');
    $time = date("Y/m/d . H:i:s");
    $stmt->execute(array(
        ":name"=>$name,
        ":email"=>$email,
        ":phone"=>$phone,
        ":msg"=>$msg,
        ":time"=>$time
        ));
        echo "
        <script>
        toastr.success('Great , Your Message has been successfully Deliverd .')
        </script>";
}



/*
==========================
  insert new Product
==========================
*/

function insert_product($cat_id,$p_name,$price,$quantity,$discount,$avatar){
    global $con;
    $stmt = $con->prepare("INSERT INTO products(cat_id,product_name,price,quantity,discount,img) Value(:cat_id,:product_name,:price,:quantity,:discount,:avatar)");
    $stmt->execute(
    array(
        ":cat_id"           => $cat_id,
        ":product_name"     => $p_name,
        ":price"            => $price,
        ":quantity"         => $quantity,
        ":discount"         => $discount,
        ":avatar"           => $avatar,
    ));
    echo "
    <script>
        toastr.success('Great ,The Product Added Successfully .')
    </script>";
    header("Refresh:3;url=all_Products.php");
}

/*
==========================
    get all data
==========================
*/

function getAllData($table){
    global $con;
    $stmt = $con->prepare("SELECT * FROM $table");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

/*
==========================
  get all data with id
==========================
*/

function getData_with_id($table,$id){
    global $con;
    $stmt = $con->prepare("SELECT * FROM $table WHERE id = ?");
    $stmt->execute(array($id));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    return $rows;
}

/*
==========================
  get all admins with id
==========================
*/

function get_admins(){
    global $con;
    $stmt = $con->prepare("SELECT * FROM users WHERE type = '1'");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


/*
==========================
  get all Users with id
==========================
*/

function get_Users(){
    global $con;
    $stmt = $con->prepare("SELECT * FROM users WHERE type = '2'");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}