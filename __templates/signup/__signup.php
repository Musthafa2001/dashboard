<?php

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = Usersession::signup($username, $password, $email);
}

if ($result) {
?>
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Signup Successfull</h1>
            <p>Login from here <a href="login.php">Login</p>
        </div>
    </main>
<?php
} else {

?>
    <main class="flex-grow-1 d-flex align-items-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-7 col-lg-5">

                    <!-- Sign Up Card -->
                    <div class="card signup-card shadow-lg border-0 rounded-4 p-3 p-sm-4">
                        <div class="card-body">

                            <!-- Card Header -->
                            <div class="text-center mb-4">
                                <h1 class="h3 fw-bold text-body-emphasis mb-1">Create an account</h1>
                                <p class="text-body-secondary small mb-0">Start your 14-day free trial — no credit card required</p>
                            </div>

                            <!-- Alert Container for Sign Up Feedback -->
                            <div id="alertPlaceholder"></div>

                            <!-- Sign Up Form with Bootstrap Validation -->
                            <form id="signupForm" class="needs-validation" action="signup.php" method="post">

                                <!-- Floating Full Name Input -->
                                <div class="form-floating mb-3">
                                    <input
                                        type="text"
                                        name="username"
                                        class="form-control rounded-3"
                                        id="fullNameInput"
                                        placeholder="Alex Morgan"
                                        minlength="2"
                                        required>
                                    <label for="fullNameInput">
                                        <i class="bi bi-person me-1 text-body-secondary"></i> Full Name
                                    </label>
                                    <div class="invalid-feedback">
                                        Please enter your full name (at least 2 characters).
                                    </div>
                                </div>

                                <!-- Floating Email Input -->
                                <div class="form-floating mb-3">
                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control rounded-3"
                                        id="emailInput"
                                        placeholder="name@example.com"
                                        required>
                                    <label for="emailInput">
                                        <i class="bi bi-envelope me-1 text-body-secondary"></i> Email address
                                    </label>
                                    <div class="invalid-feedback">
                                        Please enter a valid work or personal email address.
                                    </div>
                                </div>

                                <!-- Floating Password Input with Show/Hide Toggle & Strength Meter -->
                                <div class="mb-3 position-relative">
                                    <div class="form-floating">
                                        <input
                                            type="password"
                                            name="password"
                                            class="form-control rounded-3 pe-5"
                                            id="passwordInput"
                                            placeholder="Password"
                                            minlength="8"
                                            required>
                                        <label for="passwordInput">
                                            <i class="bi bi-lock me-1 text-body-secondary"></i> Password
                                        </label>
                                        <div class="invalid-feedback">
                                            Password must be at least 8 characters long.
                                        </div>
                                    </div>
                                    <!-- Toggle Password Visibility Button -->
                                    <button
                                        type="button"
                                        id="togglePasswordBtn"
                                        class="btn password-toggle-btn position-absolute top-0 end-0 mt-2 me-2 py-2 px-2"
                                        aria-label="Toggle password visibility"
                                        title="Show/Hide Password">
                                        <i class="bi bi-eye fs-5" id="togglePasswordIcon"></i>
                                    </button>

                                    <!-- Live Password Strength Meter -->
                                    <div class="mt-2 px-1">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <span class="small text-body-secondary" style="font-size: 0.75rem;">Password strength</span>
                                            <span id="strengthLabel" class="small fw-medium text-body-secondary" style="font-size: 0.75rem;">Too short</span>
                                        </div>
                                        <div class="strength-meter">
                                            <div id="strengthMeterFill" class="strength-meter-fill"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Floating Confirm Password Input -->
                                <div class="mb-3 position-relative">
                                    <div class="form-floating">
                                        <input
                                            type="password"
                                            class="form-control rounded-3 pe-5"
                                            id="confirmPasswordInput"
                                            placeholder="Confirm Password"
                                            required>
                                        <label for="confirmPasswordInput">
                                            <i class="bi bi-shield-check me-1 text-body-secondary"></i> Confirm Password
                                        </label>
                                        <div class="invalid-feedback" id="confirmPasswordFeedback">
                                            Passwords do not match.
                                        </div>
                                    </div>
                                    <button
                                        type="button"
                                        id="toggleConfirmPasswordBtn"
                                        class="btn password-toggle-btn position-absolute top-0 end-0 mt-2 me-2 py-2 px-2"
                                        aria-label="Toggle confirm password visibility"
                                        title="Show/Hide Confirm Password">
                                        <i class="bi bi-eye fs-5" id="toggleConfirmPasswordIcon"></i>
                                    </button>
                                </div>

                                <!-- Terms of Service & Privacy Policy Agreement -->
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="termsCheck" required>
                                    <label class="form-check-label small text-body-secondary user-select-none" for="termsCheck">
                                        I agree to the <a href="#terms" class="text-decoration-none fw-medium policy-link" data-doc="Terms of Service">Terms of Service</a> and <a href="#privacy" class="text-decoration-none fw-medium policy-link" data-doc="Privacy Policy">Privacy Policy</a>.
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree to the Terms of Service and Privacy Policy to continue.
                                    </div>
                                </div>

                                <!-- Primary Submit Button -->
                                <button type="submit" id="submitBtn" class="btn btn-primary w-100 py-2.5 fw-semibold rounded-3 shadow-sm">
                                    <span id="submitBtnText">Create Account</span>
                                    <span id="submitSpinner" class="spinner-border spinner-border-sm ms-2 d-none" role="status" aria-hidden="true"></span>
                                </button>
                            </form>

                            <!-- Divider -->
                            <div class="divider-text my-4">Or continue with</div>

                            <!-- Social Sign Up Buttons -->
                            <div class="row g-2">
                                <div class="col-6">
                                    <button type="button" class="btn btn-outline-secondary w-100 rounded-3 py-2 d-flex align-items-center justify-content-center gap-2 fw-medium social-btn" data-provider="Google">
                                        <i class="bi bi-google text-danger"></i>
                                        <span>Google</span>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-outline-secondary w-100 rounded-3 py-2 d-flex align-items-center justify-content-center gap-2 fw-medium social-btn" data-provider="GitHub">
                                        <i class="bi bi-github"></i>
                                        <span>GitHub</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Card Footer Link -->
                            <div class="text-center mt-4 pt-3 border-top">
                                <p class="small text-body-secondary mb-0">
                                    Already have an account?
                                    <a href="#login" id="loginAccountLink" class="text-decoration-none fw-semibold">
                                        Log in
                                    </a>
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

<?php } ?>