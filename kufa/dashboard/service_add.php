<?php
require_once('./inclueds/header.php');

?>
                        <div class="row justify-content-center">
                            <div class="col-10">

                            <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Add service</h5>
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
                                        <form action="./service_data.php" method="post"><div class="example-container">
                                            <div class="example-content">
                                                <label for="">service title</label>
                                                <input type="text" class="form-control form-control-rounded m-b-sm"  placeholder="service title" name="service_title">

                                                <div class="example-content">
                                                <label for="">service icon</label>
                                                <input readonly type="text" class="form-control form-control-rounded m-b-sm"  placeholder="service icon" name="service_icon" id="icon_value">
                                               </div>

                                            <div class="card text-white bg-dark">
                                              <div class="card-body" style="overflow-Y:scroll; height:150px;"> 
                                            <?php
                                            require_once('./inclueds/icon.php');
                                             foreach($fonts as $font) : ?>                                    
                                                <span class="card-text m-1 badge badge-primary" style="cursor:pointer;">
                                              <i class="<?= $font ?> fs-5 icon-click" id="<?= $font ?> " aria-hidden="true"></i></span>
                                                <?php
                                            endforeach
                                            ?>
                                               </div>
                                            </div>
                                            <div class="example-content">
                                            <label for="">service description</label>
                                               <textarea cols="30" rows="5"class="form-control form-control-rounded m-b-sm" name="service description"></textarea> 
                                            </div>
                                            <div class="example-content">
                                            <label for="">service description</label>
                                               <select name="service_status" class="form-control form-control-rounded m-b-sm">
                                                <option value="active">active</option>
                                                <option value="inactive">inactive</option>
                                               </select>
                                            </div>
                                            <div class="example-content">
                                           <button class="btn btn-primary">Add service</button> 
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
<script>
  $(document).ready(function(){
  $('.icon-click').click(function(){
    $('#icon_value').val($(this).attr('id'));
  })
})
</script>            