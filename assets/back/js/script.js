// Edit Role
$(function () {
    $('.btnAddRole').on('click', function () {
        $('.body-role form')[0].reset();
        $('#titleModalLabel').html('Add New Role');
        $('.footer-role button[type=submit]').html('Add');
    });
    $('.btnEditRole').on('click', function () {

        $('#titleModalLabel').html('Edit Role');
        $('.footer-role button[type=submit]').html('Update');
        $('.body-role form').attr('action', urls.url + 'admin/updateRole/');

        const id = $(this).data('id');

        $.ajax({
            url: urls.url + 'admin/editrole/' + id,
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#role').val(data.role);
                $('#id').val(data.id);
            }
        });
    });
});

// Edit Menu
$(function () {
    $('.btnAddMenu').on('click', function () {
        $('.body-menu form')[0].reset();
        $('#titleModalMenu').html('Add New menu');
        $('.footer-menu button[type=submit]').html('Add');
    });
    $('.btnEditMenu').on('click', function () {

        $('#titleModalMenu').html('Edit menu');
        $('.footer-menu button[type=submit]').html('Update');
        $('.body-menu form').attr('action', urls.url + 'menu/updatemenu/');

        const id = $(this).data('id');

        $.ajax({
            url: urls.url + 'menu/editmenu/' + id,
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#menu').val(data.menu);
                $('#id').val(data.id);
            }
        });
    });
});

// Edit SubMenu
$(function () {
    $('.btnAddSubMenu').on('click', function () {
        $('.body-submenu form')[0].reset();
        $('#titleSubMenuModalLabel').html('Add New sub menu');
        $('.footer-submenu button[type=submit]').html('Add');
    });
    $('.btnEditSubMenu').on('click', function () {

        $('#titleSubMenuModalLabel').html('Edit sub menu');
        $('.footer-submenu button[type=submit]').html('Update');
        $('.body-submenu form').attr('action', urls.url + 'menu/updatesubmenu/');

        const id = $(this).data('id');

        $.ajax({
            url: urls.url + 'menu/editsubmenu/' + id,
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#title').val(data.title);
                $('#menu_id').val(data.menu_id);
                $('#url').val(data.url);
                $('#icon').val(data.icon);
                $('#is_active').val(data.is_active);
                $('#id').val(data.id);
            }
        });
    });
});