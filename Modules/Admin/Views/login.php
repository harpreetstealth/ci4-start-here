<div class="row mt-5">
    <div class="col-12 col-md-6 offset-md-3">
        <div class="card  border-primary shadow">
            <div class="card-header bg-primary text-light">
                <h4>Login Here</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url('admin/do-login') ?>" id="login-form"
                method="post" class="needs-validation" novalidate>
                    <div class="form-floating mb-3 has-validation">
                        <input type="text" class="form-control" id="username" name="username"
                        placeholder="tory" required minlength="8" maxlength="15" autocomplete="off">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating has-validation">
                        <input type="password" class="form-control" id="password" name="password"
                        placeholder="Password" required minlength="8" maxlength="100">
                        <label for="password">Password</label>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary float-end"
                        target>Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>