<?= $this->extend('public_layout') ?>
<?= $this->section('content') ?>
  
<div class="container bg">
    <div class="row">
        <div class="col-sm-4 mx-auto">
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center">Login</h2>

                    <?php $session=session(); ?>
                    <?php if(! is_null($session->getFlashdata('failed_message'))): ?>
                        <div class="alert alert-danger">
                            <?=$session->getFlashdata('failed_message');?>
                        </div>
                    <?php endif?>
                    
                    <?php $validation=\Config\Services::validation(); ?>
                    <form action="<?=base_url('login')?>" method="post">
                        <div class="mb-2">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email">
                            <div class="text-danger">
                                <?= $validation->getError("email") ?>
                                </div>
                        </div>
                        <div class="mb-2">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" name="password">
                        </div>

                        <div class="mb-2 text-center">
                            <input type="submit" name="login" value="Login" class="btn btn-primary">
                        </div>


                    </form>

                    <a href="./register">Don't have an account</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection() ?>