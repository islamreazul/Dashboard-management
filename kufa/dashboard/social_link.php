<?php
require_once('./inclueds/header.php');

?>
                        <div class="row justify-content-center">
                            <div class="col-10">

                            <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">social links</h5>
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
                                        <form action="./social_link_update.php" method="post"><div class="example-container">
                                            <div class="example-content">
                                                <label for="">facebook</label>
                                                <input type="url" class="form-control form-control-rounded m-b-sm"  placeholder="facebook link" name="facebook">
                                               </div>
                                               <div class="example-content">
                                                <label for="">twitter</label>
                                                <input type="url" class="form-control form-control-rounded m-b-sm"  placeholder="twitter link" name="twitter">
                                               </div>
                                               <div class="example-content">
                                                <label for="">instagram</label>
                                                <input type="url" class="form-control form-control-rounded m-b-sm"  placeholder="instagram link" name="instagram">
                                               </div>
                                               <div class="example-content">
                                                <label for="">linkedin</label>
                                                <input type="url" class="form-control form-control-rounded m-b-sm"  placeholder="linkedin link" name="linkedin">
                                               </div>
                                            <div class="example-content">
                                           <button class="btn btn-primary">update social links</button> 
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
