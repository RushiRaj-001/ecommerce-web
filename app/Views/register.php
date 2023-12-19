<?= $this->extend('public_layout') ?>
<?= $this->section('content') ?>
  
<div class="container bg-gray">
    <div class="row">
        <div class="col-sm-4 mx-auto">
            <div class="card mt-5">
                <div class="card-body">
                    <h2>create new account</h2>
                    <?php $validation=\Config\Services::validation(); ?>
                    <form action="<?=base_url('register')?>" method="post">
                        <div class="mb-2">
                            <label for="username">username</label>
                            <input type="text" class="form-control" name="username" >
                           

                        </div>
                        <div class="mb-2">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="mb-2">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <div class="mb-2">
                            <label for="confirm password">Confirm Password</label>
                            <input type="text" class="form-control" name="confirm password">
                        </div>
                        <div class="mb-2 text-center">
                            <input type="submit" name="register" value="Register" class="btn btn-primary">
                        </div>


                    </form>

                    <a href="./login">Already have an account</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection() ?>