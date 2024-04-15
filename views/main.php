<!-- Header Section -->
<?php session_start(); ?>
<?php include 'includes/header.php'; ?>

<!-- Main Content Section -->
<main>
    <section>
        <div class="limiter">
            <div class="container-login100">

                <div class="wrap-login100">
                    <div class="textlogin">
                        <p>Bine ati venit pe platforma de testare universitatii din Oradea</p>
                    </div>
                    <div class="login100-pic js-tilt" data-tilt="data-tilt">
                        <img src="assets/images/img-01.png" alt="IMG">
                    </div>

                    <form
                        class="login100-form validate-form"
                        action="views/login.php"
                        method="POST">
                        <span class="login100-form-title">
                            Logare
                        </span>

                        <div
                            class="wrap-input100 validate-input"
                            data-validate="Valid login is required">
                            <input class="input100" type="text" name="login" placeholder="Login">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        <?php if(isset($_SESSION['error1'])): ?>
                        <div style="color: red; text-align: center;">
                            <?php 
									echo $_SESSION['error1']; 
									unset($_SESSION['error1']); // clear the error message after displaying it
								?>
                        </div>
                        <?php endif; ?>
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <?php if(isset($_SESSION['error'])): ?>
                        <div style="color: red; text-align: center;">
                            <?php 
									echo $_SESSION['error']; 
									unset($_SESSION['error']); // clear the error message after displaying it
								?>
                        </div>
                        <?php endif; ?>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>

                        <div class="text-center p-t-12">
                            <span class="txt1">
                                Ai uitat
                            </span>
                            <a class="txt2" href="#">
                                Parola / Username?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer Section -->
<?php include 'includes/footer.php'; ?>

<div id="forgotModal" class="modal">
    <div class="modal-content">
        <div class="mod">
            <span class="close">&times;</span>
        </div>
        <p>Contacteaza administratorul
            <a href="mailto:antonmaxim95@gmail.com">antonmaxim95@gmail.com</a>
        </p>
    </div>
</div>