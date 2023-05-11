<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signup-heading">Sign-Up with PGLife</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form id="signup-form" class="form" role="form" method="post" action="api/signup_submit.php">
                        <div class="input-group form-group mb-3">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" name="full_name" placeholder="Full Name"
                                maxlength="30" required>
                        </div>

                        <div class="input-group form-group mb-3">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number (+91)"
                                maxlength="10" minlength="10" required>
                        </div>

                        <div class="input-group form-group mb-3">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="input-group form-group mb-3">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                minlength="6" required>
                        </div>

                        <div class="input-group form-group mb-3">
                            <span class="input-group-text"><i class="fas fa-university"></i></span>
                            <input type="text" class="form-control" name="college_name" placeholder="College Name"
                                maxlength="150" required>
                        </div>

                        <div class="input-group form-group mb-3">
                            <label class="input-group-text" for="gender-selector"><i
                                    class="fa-solid fa-person-half-dress"></i></label>
                            <select class="form-select" name="gender" id="gender-selector" required>
                                <!-- <option selected>Choose Gender...</option> -->
                                <option selected value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-block btn-primary">Create Account</button>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="modal-footer">
                    <span>Already have an account?
                        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Sign In</a>
                    </span>
                </div>
            </div>
        </div>
    </div>