<?php
require_once('./inclueds/header.php');
require_once('./db_connect.php');
?>
<div class="row">
    <div class="col-15">
    <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Service list</h5>
                                    </div>
                                    <div class="card-body">
                                        
                                        <div class="example-container">
                                            <div class="example-content">
                                                <table class="table">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th> serial </th>
                                                            <th> service_title </th>
                                                            <th> service_icon </th>
                                                            <th> service_description </th>
                                                            <th> service_status </th>
                                                            <th> Action </th>

                                                            
                                                        </tr>
                                                    </thead>
                                                    <?php
                                                    $service_query= "SELECT * FROM services";
                                                    $service_query_db= mysqli_query($db_connect,$service_query);
                                                    $serial= 1;
                                                    foreach($service_query_db as $services):
                                                    $service_active="SELECT * FROM `services` WHERE service_status='active'";
                                                    $service_active_db= mysqli_query($db_connect,$service_active);

                                                    ?>
                                                    <tbody>
                                                        <tr>
                                                            <th><?=$serial++?></th>
                                                            <td><?=$services['service_title']?></td>
                                                            <td> <span class="card-text m-1 badge badge-primary">
                                                            <i class="<?=$services['service_icon']?> fs-5" aria-hidden="true"></i></span></td>
                                                           <td><?=$services['service_description']?></td>
                                                            <td><span class="badge <?=$services['service_status']=='active'? 'badge-success': 'badge-danger'; ?>"><?=$services['service_status']?></span></td>
                                                            <td><a href="./service_update.php?id=<?=$services['id']?>" class="btn btn-warning">edit</a>
                                                                <a href="./service_delete.php?id=<?=$services['id']?>" class="btn btn-danger">Delete</a>
                                                            </td>

                                                        </tr>
                                                        
                                                    </tbody>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                    
                                                </table>
                                            </div>
                                            
                                    </div>
                                </div>
    </div>
</div>
<?php
require_once('./inclueds/footer.php');

?>                