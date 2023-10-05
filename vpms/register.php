<?php
include('header.php');
?>
<div class="wrapper d-flex justify-content-center align-items-center">
    <div class="inner">
        <form action="">
            <div class="title pt-3 pe-3 ps-3 d-flex justify-content-between align-items-center">
                <h5 class="register-title text-uppercase">Registration Form</h5>
                <button type="button" class="btn-close register-close" aria-label="Close"></button>
            </div>
            <div>
                <hr>
                <div class="row">
                    <div class="col-md-4 col-sm-12 pe-md-0">
                        <div class="pe-3 ps-3 mb-4 input-box position-relative">
                            <input type="text" name="firstname" id="firstname" class="form-control"
                                placeholder="First Name">
                            <span class="icon-box position-absolute top-0 bottom-0 d-flex align-items-center"><i
                                    class="fa-solid fa-user icon"></i></span>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-12 ps-md-0 pe-md-0">
                        <div class="pe-3 ps-3 mb-4 input-box position-relative">
                            <input type="text" name="middlename" id="middlename" class="form-control"
                                placeholder="Middle Name">
                            <span class="icon-box position-absolute top-0 bottom-0 d-flex align-items-center"><i
                                    class="fa-solid fa-user icon"></i></span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 ps-md-0">
                        <div class="pe-3 ps-3 mb-4 input-box position-relative">
                            <input type="text" name="lastname" id="lastname" class="form-control"
                                placeholder="Last Name">
                            <span class="icon-box position-absolute top-0 bottom-0 d-flex align-items-center"><i
                                    class="fa-solid fa-user icon"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 pe-md-0">
                        <div class="pe-3 ps-3 mb-4 input-box position-relative">
                            <input type="text" name="completeaddress" id="completeaddress" class="form-control"
                                placeholder="Complete Address">
                            <span class="icon-box position-absolute top-0 bottom-0 d-flex align-items-center"><i
                                    class="fa-solid fa-address-card icon"></i></span>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12 ps-md-0">
                        <div class="pe-3 ps-3 mb-4 input-box position-relative">
                            <input type="text" name="emailaddress" id="emailaddress" class="form-control"
                                placeholder="Email Address">
                            <span class="icon-box position-absolute top-0 bottom-0 d-flex align-items-center"><i
                                    class="fa-solid fa-envelope icon"></i></span>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12 pe-md-0">
                        <div class="pe-3 ps-3 mb-4 input-box position-relative">
                            <input type="text" name="contact" id="contact" class="form-control"
                                placeholder="Contact Number">
                            <span class="icon-box position-absolute top-0 bottom-0 d-flex align-items-center"><i
                                    class="fa-solid fa-phone-flip icon"></i></span>
                        </div>

                    </div>

                    <div class="col-md-4 col-sm-12 pe-md-0 ps-md-0">
                        <div class="pe-3 ps-3 mb-4 input-box position-relative">
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 ps-md-0">
                        <div class="pe-3 ps-3 mb-4 input-box position-relative">
                            <input type="number" name="age" id="age" class="form-control" placeholder="Age">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12 pe-md-0">
                        <div class="pe-3 ps-3 mb-4 input-box position-relative">
                            <input type="date" name="birthdate" id="birthdate" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 pe-md-0 ps-md-0">
                        <div class="pe-3 ps-3 mb-4 input-box position-relative">
                            <input type="text" name="Username" id="username" class="form-control"
                                placeholder="Enter Username">
                            <span class="icon-box position-absolute top-0 bottom-0 d-flex align-items-center"><i
                                    class="fa-solid fa-user icon"></i></span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 ps-md-0">
                        <div class="pe-3 ps-3 mb-4 input-box position-relative">
                            <input type="text" name="password" id="password" class="form-control"
                                placeholder="Enter Password">
                            <span class="icon-box position-absolute top-0 bottom-0 d-flex align-items-center"><i
                                    class="fa-solid fa-lock icon"></i></span>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 pe-md-0">
                        <div class="pe-3 ps-3 mb-2 input-box position-relative">
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">Select Account Status</option>
                                <option value="2">Active</option>
                                <option value="3">InActive</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12 ps-md-0">
                        <div class="pe-3 ps-3 input-box position-relative">
                            <input type="file" name="profile" id="profile" class="form-control"
                                placeholder="Profile Picture">

                        </div>
                    </div>

                </div>
                <hr>
                <div class="register-bottom pb-3 pe-3 ps-3 d-flex align-items-center justify-content-between">
                    <a href="#" class="btn btn-primary">Register</a>
                    <p>Already a member? <a href="login.php">Login</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include('footer.php');
?>