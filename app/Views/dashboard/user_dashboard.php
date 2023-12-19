<?= $this->extend('private_layout') ?>
<?= $this->section('content') ?>
<h1 class="text-center mt-5">Register Usres</h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                username
                            </th>
                            <th>
                                email
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td><?= $user['username']?></td>
                                <td><?= $user['email']?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>

                        </table>
            </div>
        </div>
    </div>
<?= $this->endsection() ?>
