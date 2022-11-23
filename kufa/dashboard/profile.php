<?php
require_once('./inclueds/header.php');

?>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1 class="text-success">PROFILE</h1>
                                    <h3 class="text-center text-success"><?=isset($_SESSION['confirm_password_success'])? $_SESSION['confirm_password_success']:''; unset($_SESSION['confirm_password_success'])?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="row"> 
                            <form action="./profile_data.php" method="post" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">Name</span>
                        <input type="text" class="form-control" name="name" value="<?=$_SESSION['auth_name']?>">
                              </div>
                              <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">Address</span>
                        <input type="text" class="form-control" name="Address">
                              </div>
                              <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">Phone number</span>
                        <input type="tel" class="form-control" name="number">
                              </div>
                              <?php
                        if (isset($_SESSION['name_error'])) {?>
                
                            <p class="text-danger"><?=$_SESSION['name_error'];?></p>
                                    <?php
                                } unset($_SESSION['name_error']);
                        ?>
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">Old password</span>
                        <input type="password" class="form-control" name="old_password">
                              </div>
                              <?php
                        if (isset($_SESSION['old_password_error'])) {?>
                
                            <p class="text-danger"><?=$_SESSION['old_password_error'];?></p>
                                    <?php
                                } unset($_SESSION['old_password_error']);
                        ?>  
                              <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">new password</span>
                        <input type="password" class="form-control" name="new_password">
                              </div>
                              <?php
                        if (isset($_SESSION['new_password_error'])) {?>
                
                            <p class="text-danger"><?=$_SESSION['new_password_error'];?></p>
                                    <?php
                                } unset($_SESSION['new_password_error']);
                        ?>
                              <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">confirm password</span>
                        <input type="password" class="form-control" name="confirm_password">
                        
                              </div>
                              
                              <?php
                        if (isset($_SESSION['confirm_password_error'])) {?>
                
                            <p class="text-danger"><?=$_SESSION['confirm_password_error'];?></p>
                                    <?php
                                } unset($_SESSION['confirm_password_error']);
                        ?>
                          <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">upload profile</span>
                        <input type="file" class="form-control" name="profile_pic">
                              </div>
                              <button class="btn btn-info" type="submit"name="Update">Update</button>
                              <button class="btn btn-info" type="submit"name="change_password">change Password</button>
                         </form>
                        </div>    
                    </div>
                    <?php
require_once('./inclueds/footer.php');

?>                