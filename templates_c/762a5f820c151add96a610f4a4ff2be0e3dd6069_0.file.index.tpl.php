<?php
/* Smarty version 3.1.38, created on 2021-02-16 06:39:00
  from '/var/www/html/Swordfish/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_602b6884d5b668_94517129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '762a5f820c151add96a610f4a4ff2be0e3dd6069' => 
    array (
      0 => '/var/www/html/Swordfish/templates/index.tpl',
      1 => 1613457512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./layout/header.tpl' => 1,
    'file:./layout/navbar.tpl' => 1,
    'file:./layout/footer.tpl' => 1,
  ),
),false)) {
function content_602b6884d5b668_94517129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./layout/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main role="main" class="container">
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form" class="needs-validation">
                        <div class="form-group">
                            <label for="inputTitle">Title</label>
                            <input required name="title" type="text" class="form-control" id="inputTitle" placeholder="Enter Title">
                            <div class="invalid-feedback">
                                Please provide a valid title.
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="formControl">Description</label>
                            <textarea required name="description" class="form-control" id="formControl" rows="3"></textarea>
                            <div class="invalid-feedback">
                                Please provide a valid description.
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputClient">Client</label>
                                <select required name="client" id="inputClient" class="form-control">
                                    <option value="null" selected>Choose...</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid client.
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputType">Type</label>
                                <select required name="type" id="inputType" class="form-control">
                                    <option value="null" selected>Choose...</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid type.
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPriority">Priority</label>
                                <select required name="priority" id="inputPriority" class="form-control">
                                    <option value="null" selected>Choose...</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid priority.
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="save" type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-5 mt-5">

        <div style="display: none" id="alert" class="alert alert-success" role="alert">

        </div>

        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
            Create Issue
        </button>
        <div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Client</th>
                    <th>Priority</th>
                    <th>Type</th>
                    <th>Assigned To</th>
                    <th>Status</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:./layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
