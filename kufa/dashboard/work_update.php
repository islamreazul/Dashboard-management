<?php
require_once('./inclueds/header.php');
?>
                                    <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title ">Work update</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="./work_update_data.php" method="POST" enctype="multipart/form-data">
                                        <div class="example-container">
                                        <?php
                                        
                                        $id=$_SESSION['auth_id'];
                                        $work_query="SELECT * FROM work WHERE id=$id";
                                        $work_query_db= mysqli_query($db_connect,$work_query);
                                        $work=mysqli_fetch_assoc($work_query_db);

                                        ?>
                                            <div class="example-content">
                                            <input type="number" hidden  value="<?=$id?>"
                                            name="update_id">
                                                <label for="service_add"class="active">work_title</label>
                                                <input hidden type="number" name="id" value="<?=$work['id']?>">
                                                <input type="text" class="form-control form-control-rounded m-b-sm" aria-describedby="roundedInputExample" placeholder="work_title " name="work_title" value="<?=$work['work_title']?>">
                                            </div>
                                            <div class="example-content">
                                                <label for="service_add"class="active">work_heading</label>
                                                <input hidden type="number" name="id" value="<?=$work['id']?>">
                                                <input type="text" class="form-control form-control-rounded m-b-sm" aria-describedby="roundedInputExample" placeholder="service tittle" name="work_heading" value="<?=$work['work_heading']?>">
                                            </div>
                             

                                        <div class="example-content">
                                        <label for=""class="active">work_description</label>
                                        <textarea cols="30" rows="10" class="form-control form-control-rounded m-b-sm" aria-describedby="roundedInputExample" placeholder="work_descaription" name="work_descaription"><?=$work['work_descaription']?>
                                         </textarea>
                                    </div> 

                                    <div class="example-content">
                                        <label for=""class="active">work_image</label>
                                        <input readonly type="file" class="form-control form-control-rounded m-b-sm" aria-describedby="roundedInputExample"  name="work_image" id="image_value">
                                       </div>


                                        <div class="example-content">
                                        <label for=""class="active">work_status</label>
                                        <select name="work_status" class="form-control form-control-rounded m-b-sm">
                                            <option value="active" <?=($work['work_status'] === 'active')?'selected':''?>>active</option>
                                            <option value="inactive" <?=($work['work_status']==='inactive')?'selected':''?>>inactive</option>

                                        </select>
                                        <div class="example-content">
                                        <button class="btn btn-primary" name="update" >Update work</button>
                                        
                                        </form> 
                                        
                                    </div>
                                </div>

<?php
require_once('./inclueds/footer.php')
?>

