<?php
require_once('./inclueds/header.php');
require_once('./db_connect.php');
?>
<div class="row">
    <div class="col-15">
    <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">work list</h5>
                                    </div>
                                    <div class="card-body">
                                        
                                        <div class="example-container">
                                            <div class="example-content">
                                                <table class="table">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th> serial </th>
                                                            <th> work_title </th>
                                                            <th> work_heading</th>
                                                            <th> work_description </th>
                                                            <th> work_image </th>
                                                            <th> work_status </th>
                                                            <th> Action </th>

                                                            
                                                        </tr>
                                                    </thead>
                                                    <?php
                                                    $work_query= "SELECT * FROM work";
                                                    $work_query_db= mysqli_query($db_connect, $work_query);
                                                    $serial= 1;
                                                    foreach($work_query_db as $work):
                                                    $work_active="SELECT * FROM `work` ";
                                                    $work_active_db= mysqli_query($db_connect,$work_active);

                                                    ?>
                                                    <tbody>
                                                        <tr>
                                                            <th><?=$serial++?></th>
                                                            <td><?= $work['work_title']?></td>
                                                            <td><?= $work['work_heading']?></td>
                                                           <td><?= $work['work_descaription']?></td>
                                                        <td><img src="./work image/<?= $work['work_image']?>" alt="" width="100" height="100" ></td>
                                                           
                                                           
                                                           <td><span class="btn <?=($work['work_status']=='active') ? 'btn-success':'btn-danger'?>"><?=$work['work_status']?></span></td>
                                                            <td><a href="./work_update.php?id=<?= $work['id']?>" class="btn btn-warning">edit</a>
                                                                <a href="./work_delete.php?id=<?= $work['id']?>" class="btn btn-danger">Delete</a>
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