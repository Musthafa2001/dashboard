<?php 

if(isset($_POST['username'])&&isset($_POST['password'])){
    // print($_POST['username']);
    $result=Usersession::authenticate($_POST['username'],$_POST['password']);

    if($result){
       header('Location: index.php');
       die();

    }


}



?>  
  
  
  
  
  
  <main class="flex-grow-1 d-flex align-items-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-6 col-lg-5">
                    
                    <!-- Login Card -->
                    <div class="card login-card shadow-sm rounded-4 p-3 p-sm-4">
                        <div class="card-body">
                            
                            <!-- Card Header -->
                            <div class="text-center mb-4">
                                <h1 class="h3 fw-bold text-body-emphasis mb-1">Welcome back</h1>
                                <p class="text-body-secondary small mb-0">Sign in to your account to continue</p>
                            </div>

                            <!-- Alert Container for Login Feedback -->
                            <div id="alertPlaceholder"></div>

                            <!-- Login Form with Bootstrap Validation -->
                            <form id="loginForm" class="needs-validation" action="login.php" method="post">
                                
                                <!-- Floating Email Input -->
                                <div class="form-floating mb-3">
                                    <input 
                                        type="text" 
                                        name="username"
                                        class="form-control rounded-3" 
                                        id="emailInput" 
                                        placeholder="name@example.com" 
                                        required
                                    >
                                    <label for="emailInput">
                                        <i class="bi bi-envelope me-1 text-body-secondary"></i> Username
                                    </label>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>

                                <!-- Floating Password Input with Show/Hide Toggle -->
                                <div class="mb-3 position-relative">
                                    <div class="form-floating">
                                        <input 
                                            type="password" 
                                            name="password"
                                            class="form-control rounded-3 pe-5" 
                                            id="passwordInput" 
                                            placeholder="Password" 
                                            minlength="6"
                                            required
                                        >
                                        <label for="passwordInput">
                                            <i class="bi bi-lock me-1 text-body-secondary"></i> Password
                                        </label>
                                        <div class="invalid-feedback">
                                            Please enter your password (minimum 6 characters).
                                        </div>
                                    </div>
                                    <!-- Toggle Password Visibility Button -->
                                    <button 
                                        type="button" 
                                        id="togglePasswordBtn" 
                                        class="btn password-toggle-btn position-absolute top-0 end-0 mt-2 me-2 py-2 px-2"
                                        aria-label="Toggle password visibility"
                                        title="Show/Hide Password"
                                    >
                                        <i class="bi bi-eye fs-5" id="togglePasswordIcon"></i>
                                    </button>
                                </div>

                                <!-- Remember Me & Forgot Password Row -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberMeCheck">
                                        <label class="form-check-label small text-body-secondary user-select-none" for="rememberMeCheck">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="#forgot-password" id="forgotPasswordLink" class="small text-decoration-none fw-medium">
                                        Forgot password?
                                    </a>
                                </div>

                                <!-- Primary Submit Button -->
                                <button type="submit" id="submitBtn" class="btn btn-primary w-100 py-2.5 fw-semibold rounded-3 shadow-sm">
                                    <span id="submitBtnText">Sign In</span>
                                    <span id="submitSpinner" class="spinner-border spinner-border-sm ms-2 d-none" role="status" aria-hidden="true"></span>
                                </button>
                            </form>

                            <!-- Divider -->
                            <div class="divider-text my-4">or continue with</div>

                            <!-- Social Login Buttons -->
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
                            <div class="text-center mt-4 pt-2 border-top">
                                <p class="small text-body-secondary mb-0">
                                    Don't have an account? 
                                    <a href="#create-account" id="createAccountLink" class="text-decoration-none fw-semibold">
                                        Create an account
                                    </a>
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>