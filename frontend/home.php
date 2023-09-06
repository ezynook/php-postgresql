<?php require 'include/api.php'; ?>
<content>
    <table class="table table-sm table-stripped table-responsive table-hover table-bordered" width="100%" id="myTable">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Email</td>
                <td>Option</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 0;
                foreach(fetchAll() as $val){
                    $i = $i+1;
                    echo "
                        <tr>
                            <td>$i</td>
                            <td>$val[name]</td>
                            <td>$val[email]</td>
                            <td>
                                <a href='#'
                                   class='btn btn-primary btnedit'
                                   data-bs-toggle='modal'
                                   data-id='$val[id]'
                                   data-name='$val[name]'
                                   data-email='$val[email]'
                                   data-bs-target='#editModal'>Edit
                                </a>
                                <a href='#'
                                   data-id='$val[id]'
                                   class='btn btn-danger btndelete'>Delete
                                </a>
                            </td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</content>
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" id="formedit">
                <label for="">Name</label>
                <input type="text" name="txtname" class="form-control" id="txtname">
                <label for="">Email</label>
                <input type="text" name="txtemail" class="form-control" id="txtemail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
  </div>
</div>
<script src="js/home.js"></script>