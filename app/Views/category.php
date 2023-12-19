<?= $this->extend('public_layout') ?>
<?= $this->section('content') ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0 align-items-center d-flex pb-0">
                        <h4 class="cacrd-title mb-0 flex-grow-1">Category</h4>
                        </div>
                        <div class="card-body">

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Floating labels</h5>
                                                <p class="card-title-desc">Create beautifully simple form labels that
                                                    float over your input fields.</p>
                                         <form action="<?=base_url('category')?>" method="post">
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                            <div class="form-floating mb-3">
                                                                <select class="form-select" id="floatingSelectGrid"
                                                                    aria-label="Floating label select example">
                                                                    <option selected>Category</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <label for="floatingSelectGrid">Works with
                                                                    selects</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control"
                                                                    id="floatingLastnameInput"
                                                                    placeholder="Enter Your Last Name">
                                                                <label for="floatingLastnameInput">Category Name</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-6">
                                                            <div class="form-floating mb-3">
                                                                <select class="form-select" id="floatingSelectGrid"
                                                                    aria-label="Floating label select example">
                                                                    <option selected>Select</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <label for="floatingSelectGrid">Status</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="floatingCheck">
                                                            <label class="form-check-label" for="floatingCheck">
                                                                Check me out
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="submit"
                                                            class="btn btn-primary w-md">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection() ?>