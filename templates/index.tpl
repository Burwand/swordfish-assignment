{include file="./layout/header.tpl"}
{include file="./layout/navbar.tpl"}

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

{include file="./layout/footer.tpl"}
