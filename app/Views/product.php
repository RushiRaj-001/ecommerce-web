<?= $this->extend('public_layout') ?>
<?= $this->section('content') ?>


    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    if(session()->getFlashdata('status'))
                    {
                        echo "<h5>".session()->getFlashdata('status')."</h5>";
                    }
                ?>
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Products
                            <a href="<?= base_url('admin_dashboard')?>" class="btn btn-danger btn-sm float-end">Back</a>
                        </h5>
                    </div>
                    <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Product Category</th>
                                    <th>Product Image</th>
                                    <th>Product Price</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($products as $item) : ?>

                                    <tr>
                                        <td><?= $item['prod_id']?></td>
                                        <td><?= $item['prod_name']?></td>
                                        <td><?= $item['category']?></td>
                                        <td>
                                            <img src="<?=base_url()?>/public/uploads/<?=$item['image']?>" height="100px" width="100px" alt="">
                                        </td>
                                        <td><?= $item['prod_price']?></td>
                                        <td>
                                            <a href="<?= base_url('product/edit/'. $item['id'])?>" class="btn btn-success btn-sm">Edit</a>
                                            <a href="<?= base_url('product/delete/'. $item['id'])?>" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endsection()?>