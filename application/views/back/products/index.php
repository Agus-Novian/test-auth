<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
    <div class="col-lg">
        <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
        <?php endif; ?>
        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= $this->session->flashdata('message'); ?>
        <a href="" class="btn btn-sm btn-primary mb-3 btnAddProduct" data-toggle="modal" data-target="#newProductModal"><i class="fas fa-edit"></i> Product</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">image</th>
                    <th scope="col">name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($products as $p) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $p['image']; ?></td>
                    <td><?= $p['title']; ?></td>
                    <td><?= $p['price']; ?></td>
                    <td><?= $p['qty']; ?></td>
                    <td><?= $p['is_active']; ?></td>
                    <td>
                        <a href="<?= base_url(''); ?>" data-id="<?= $p['id']; ?>" class="btn btn-sm btn-success btnEditSubMenu" data-toggle="modal" data-target="#newProductModal"><i class="fas fa-edit"></i></a>
                        <a href="<?= base_url('') . $p['id']; ?>" onclick="return confirm('Are you sure delete?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="newProductModal" tabindex="-1" role="dialog" aria-labelledby="newProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleSubMenuModalLabel">Add New Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body body-submenu">
                <form action="<?= base_url(''); ?>" method="post">
                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu Title">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu Url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu Icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" value="1" name="is_active" id="is_active" checked>
                            <label for="is_active" class="form-check-label">
                                Active?
                            </label>
                        </div>
                    </div>


                    <div class="modal-footer footer-submenu">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 