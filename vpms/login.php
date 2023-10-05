<?php
include('header.php');
?>

<div class="login-page position-absolute top-0 bottom-0 start-0 end-0 d-flex justify-content-center align-items-center">
    <form class="login form-bg">
        <div class="login-body">
            <div class="title pt-3 pe-3 ps-3 d-flex justify-content-between align-items-center">
                <h5 class="login-title text-uppercase">Login Form</h5>
                <button type="button" class="btn-close login-close" aria-label="Close"></button>
            </div>
            <hr>
            <div class="pe-3 ps-3 mb-3 input-box position-relative">
                <input type="text" name="Username" id="username" class="form-control" placeholder="Enter Username">
                <span class="icon-box position-absolute top-0 bottom-0 d-flex align-items-center"><i
                        class="fa-solid fa-user icon"></i></span>
            </div>
            <div class="pe-3 ps-3 input-box position-relative">
                <input type="text" name="password" id="password" class="form-control" placeholder="Enter Password">
                <span class="icon-box position-absolute top-0 bottom-0 d-flex align-items-center"><i
                        class="fa-solid fa-lock icon"></i></span>
            </div>
            <hr>
            <div class="login-bottom pb-3 pe-3 ps-3 d-flex align-items-center justify-content-between">
                <a href="#" class="btn btn-primary">Login</a>
                <p>Not a member? <a href="register.php">Register</a></p>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>