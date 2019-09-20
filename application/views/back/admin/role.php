<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
    <div class="col-lg-6">
        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= $this->session->flashdata('message'); ?>
        <a href="#" class="btn btn-sm btn-primary mb-3 btnAddRole" data-toggle="modal" data-target="#newRoleModal"><i class="fas fa-edit"></i> Role</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($role as $r) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $r['role']; ?></td>
                    <td>
                        <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <a href="<?= base_url('admin/editrole/'); ?>" class="btn btn-sm btn-success btnEditRole" data-toggle="modal" data-target="#newRoleModal" data-id="<?= $r['id']; ?>"><i class="fas fa-edit"></i></a>
                        <a href="<?= base_url('admin/deleteRole/') . $r['id']; ?>" onclick="return confirm('Are you sure delete?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal Add Role-->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleModalLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body body-role">
                <form action="<?= base_url('admin/role'); ?>" method="post">
                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
                    </div>

                    <div class="modal-footer footer-role">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 