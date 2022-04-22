<div class="loginColumns animated fadeInDown">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="ibox-content">
                <div class="d-block text-center mb-lg-5 mt-4">
                    <img src="<?= base_url("assets/img/logo.png") ?>" width="150px" />
                </div>
                <form id="form-login" class="m-t" role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="username" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required="">
                    </div>
                    <button id="btn-login" type="submit" class="btn btn-primary block full-width m-b">Login</button>
                </form>
                <p class="m-t text-center">
                    <small>&copy; Copyright 2022 | <?= $_ENV["app.name"] ?></small>
                </p>
            </div>
        </div>
    </div>
</div>