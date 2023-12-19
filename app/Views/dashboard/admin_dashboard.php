<?= $this->extend('private_layout') ?>
<?= $this->section('content') ?>
<div class="container m-0 p-0">
    <div class="row flex-nowrap"><div class="col-sm-3 bg-info bg-success" style="height:600px;">  
        <h2 class="pb-3 border-bottom  text-center mt-3">Admin Dashboard</h2>
        <ul>
            <li class="badge text-light bg-white text-xl-end mt-3 p-2 fs-4"><a href="<?= base_url('admin_dashboard')?>" class="text-decoration-none">Add Products</a></li>
            <li class="badge text-light bg-white text-xl-end mt-3 p-2 fs-4"><a href="<?=base_url('product')?>" class="text-decoration-none">All Products</a></li>
        </ul>
    </div>
    <!-- <div class="col-sm-9 bg-primary-subtle" style="height:600px;"> 
    <div class="card-body"> -->


    <div class="col-xl-10">
        <div class="card shadow">
            <div class="card-body p-5">
                <h5 class="card-title mb-5 p-2 mx-auto text-center text-bg-info w-50 rounded">Add Product onto the Home Page</h5>
            
         <form action="<?=base_url('product-store')?>" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"
                                    id="floatingLastnameInput"
                                    placeholder="Enter Your Last Name"
                                    name="prod_id">
                                <label for="floatingLastnameInput" for="prod_id">Product ID</label>
                            </div>
                        </div>
                   
                    
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"
                                id="floatingLastnameInput" placeholder="Enter Your Last Name" name="prod_name">
                                <label for="floatingLastnameInput" for="prod_name">Product Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-3">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelectGrid"
                                    aria-label="Floating label select example" name="category">
                                    <option selected name="category">Category</option>
                                    <option value="sport">Sport</option>
                                    <option value="Fancy">Fancy</option>
                                    <option value="Casual">Casual</option>
                                </select>
                                <label for="category" >Select The Category</label>
                            </div>
                        </div>
                 
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"
                                id="floatingLastnameInput" placeholder="Enter Your Last Name" name="prod_price">
                                <label for="floatingLastnameInput" for="prod_price">Product Price</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3  w-25">
                        <label for="formFile" class="form-label">Product image</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                    <div class="mb-2 text-center">
                            <input type="submit" name="admin_dashboard" value="Add" class="btn btn-primary">
                        </div>
                </form>
            </div>
    </div>

    
</div>

<?=$this->endsection() ?>