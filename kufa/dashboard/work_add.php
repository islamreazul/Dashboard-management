<?php
require_once('./inclueds/header.php');

?>
                        <div class="row justify-content-center">
                            <div class="col-10">

                            <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Add work</h5>
                                    </div>
                                   <?php
                                   if (isset($_SESSION['success'])) :?>
                                    <div class="alert alert-success" role="alert">
                                      <h4 class="alert-heading"><?=$_SESSION['success']?></h4>
                                    </div>
                                    <?php
                                   endif;
                                   unset($_SESSION['success']);
                                   ?>
                                    <div class="card-body">
                                        <form action="dashboard/../work_data.php" method="post" enctype="multipart/form-data"><div class="example-container">
                                            <div class="example-content">
                                                <label for="">work title</label>
                                                <input type="text" class="form-control form-control-rounded m-b-sm"  placeholder="work title" name="work_title">
                                                <div class="example-content">
                                                <label for="">work heading</label>
                                                <input type="text" class="form-control form-control-rounded m-b-sm"  placeholder="work head" name="work_heading">
                                            <div class="example-content">
                                            <label for="">work descaription</label>
                                               <textarea cols="30" rows="5"class="form-control form-control-rounded m-b-sm" name="work_descaription"></textarea> 
                                            </div>
                                            <div class="example-content">
                                                <label for="">work image</label>
                                                <input type="file" class="form-control form-control-rounded m-b-sm"  placeholder="image title" name="work_image">
                                            <div class="example-content">
                                            <label for="">work_status</label>
                                               <select name="work_status" class="form-control form-control-rounded m-b-sm">
                                                <option value="active">active</option>
                                                <option value="inactive">inactive</option>
                                               </select>
                                            </div>
                                            <div class="example-content">
                                       <button class="btn btn-primary">Add work</button>
                                            </div>
                                   </div>
                                </form>
                                    </div>
                                </div>
                            </div>
                        </div>           
<?php
require_once('./inclueds/footer.php');

?>               