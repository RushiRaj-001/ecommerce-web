<?= $this->extend('private_layout') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-9" >
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="card-title mb-5 p-2 mx-auto text-center text-bg-info w-50 rounded">Update the Product Information</h5>
            
                <div class="card-body">
         <form action="<?=base_url('product/update/'.$product['id']) ?>" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"
                                    id="floatingLastnameInput"
                                    placeholder="Enter Your Last Name"
                                    name="prod_id"
                                    value="<?= $product['prod_id'] ?>">
                                <label for="floatingLastnameInput" for="prod_id">Product ID</label>
                            </div>
                        </div>
                   
                    
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" value="<?= $product['prod_name'] ?>"
                                id="floatingLastnameInput" placeholder="Enter Your Last Name" name="prod_name">
                                <label for="floatingLastnameInput" for="prod_name">Product Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-3">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelectGrid" value="<?= $product['category'] ?>"
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
                                <input type="text" class="form-control" value="<?= $product['prod_price'] ?>"
                                id="floatingLastnameInput" placeholder="Enter Your Last Name" name="prod_price">
                                <label for="floatingLastnameInput" for="prod_price">Product Price</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3  w-25">
                        <label for="formFile" class="form-label">Product image</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                    <div class="m-5 text-center">
                            <input type="submit" name="admin_dashboard" value="update" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </div>
        <div class="col-md-3">
            <img src="<?=base_url('./public/uploads/'.$product['image'])?>" class="w-100" alt="product image">
        </div>
   
</div>

<?=$this->endsection() ?>