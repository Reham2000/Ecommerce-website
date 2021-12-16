<?php 
ob_start();
session_start();
$page="dash";
require "init.php";
// if(isset($_SESSION['role'])){
$users=get_users();
require './layout/topNav.php';

// $all_users = getAllData("members")
?>
    
    <div id="layoutSidenav">
           
 <?php 
    require './layout/sidNav.php';

 ?>
          
          
            <div id="layoutSidenav_content">
              
            
            
                  <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Egypt International Lab</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Add Admin</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo "./add_admin.php";?>">Go To Add Admin</a>
                                        <div class="small text-white"><i class="far fa-hand-point-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">All Admins</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo "./all_admins.php";?>">Go To All Admin</a>
                                        <div class="small text-white"><i class="far fa-hand-point-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Add Patient</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo "./add_patient.php";?>">Go To Add Patient</a>
                                        <div class="small text-white"><i class="far fa-hand-point-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">All Patient</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="./all_patients.php">Go To All Patient</a>
                                        <div class="small text-white"><i class="far fa-hand-point-right"></i></div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-6 col-12">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Add Patient</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo "./add_patient.php";?>">Go To Add Patient</a>
                                        <div class="small text-white"><i class="far fa-hand-point-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">All Patient</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="./all_patients.php">Go To All Patient</a>
                                        <div class="small text-white"><i class="far fa-hand-point-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                    Branch Members
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                            <tr>
                                            <th>Name</th>
                                              <th>Email</th>
                                              <th>Gender</th>
                                              <th>Type</th>
                                              <th>Adress</th>
                                              <th>Update</th>                          
                                              <th>Delete</th> 
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              <th>Name</th>
                                              <th>Email</th>
                                              <th>Gender</th>
                                              <th>Type</th>
                                              <th>Adress</th>
                                              <th>Update</th>                          
                                              <th>Delete</th> 
                                              </tr>            
                                        </tfoot>
                                        <tbody>
                                        <?php foreach($users as $users_data){
                                            echo"<tr>";
                                                    echo "<td>".  $users_data['username']  	."</td>";
                                                    echo "<td>".  $users_data['email']      	."</td>";
                                                    echo "<td>".  $users_data['gender']     		."</td>";
                                                    
                                                    if($users_data['type'] == "2"){
                                                        echo "<td>". "User" ."</td>";
                                                    }
                                                    
                                                    if($users_data['adress'] == "0"){
                                                        echo "<td>". "Adress Not Set" ."</td>";
                                                    }

                                        ?>
                                                                
                                                <?php  
                                                    echo "<td>
                                                    <a href='update_user.php?id=".$users_data['id']."'
                                                    class='btn editbtn btn-primary m-2'><i class='bx bxs-edit m-1 '></i> Update</a> " . "</td>";
                                                    echo "<td>
                                                    <a href='delete.php?from=admin&id=".$users_data['id']."&from=admins'
                                                    class='btn deletebtn btn-danger m-2'><i class='bx bxs-user-minus m-1'></i> Delete</a> " . "</td>";
                                                ?>

                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                

<?php
require_once "./includes/template/footer.php";
// }else{
//     header("Location:siggin.php");
// }
ob_end_flush();