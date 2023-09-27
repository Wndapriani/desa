<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('foto/cv.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>

    </style>
</head>

<body>

    <div class="container" style="
    padding-top :80px;">

        <div class="row justify-content-center">
            <!-- <?= base_url('foto/512.png') ?> -->
            <div class="col-md-4">

                <div class="card">
                    <div class="card-body">
                        <img src="<?= base_url('foto/gr.jpg') ?>" style="
                        margin-top: auto;
                        margin-left: 20px;
                        margin-right: 20px;
                        
                        
                        ">

                        <h4 class="card-title">Login</h4>
                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                        <?php endif; ?>
                        <form action="<?= site_url('login') ?>" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>