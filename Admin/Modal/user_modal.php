
<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Add New User</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="code.php">
                    <div class="form-group mb-3">
                        <label for="">Full Name</label>
                        <input type="text" name="full-name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Phone Number</label>
                        <input type="number" name="phone" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Email Address</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">User Role</label>
                        <select name="role_as" class="form-control">
                        <option value="">-Select Role-</option>
                        <option value="admin">Admin</option>
                        <option value="gardener">Gardener</option>
                    </select>
                    </div>
                    <div class="form-group mb-5">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">
                    <i class="fa fa-close"></i> Close
                </button>
                <button type="submit" class="btn btn-success btn-flat" name="register-btn">
                    <i class="fa fa-save"></i> Save
                </button>
                </form>
            </div>
        </div>
    </div>
</div>
