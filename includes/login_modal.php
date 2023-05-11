<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login-heading">Sign-In with PGLife</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form id="login-form" class="form" role="form" method="post" action="api/login_submit.php">
                        <div class="input-group form-group mb-3">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="input-group form-group mb-3">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                minlength="6" required>
                        </div>

                        <div class="form-group mb-3">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-block btn-primary">Sign In</button>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="modal-footer">
                    <span>
                        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click here</a>
                        to register a new account
                    </span>
                </div>
            </div>
        </div>
    </div>