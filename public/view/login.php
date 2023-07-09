<?php
    
    if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

    require_once __DIR__ . '../../../vendor/autoload.php';
    use App\model\DbModel;

    if (isset($_POST['email']) && isset($_POST['password'])) {

        $connection = new DbModel();

        // verify user 
        $queryDB = $connection->verifyUser($_POST['email'],  $_POST['password']);

        if (isset($queryDB['data'])) {
            $_SESSION['AUTH'] = true;
            $_SESSION['userId'] = $userData['data']['id'];
            header('Location: index-some.php');
        } else {
            $errorMsg = $queryDB['msg'];
        }
        
    }



?>




<!-- header  -->
<?php include('./partials/Header.php') ?>

    <body class="form-body">
        <div class="bg-light form-wrap">
            <div class="row w-100">
                <!-- left side highlight image  -->
                <div class="col-sm-6">
                    <div class="form-img">
                        <img class="w-100" src="../assets/images/sign in.jpeg" alt="" />
                    </div>
                </div>
                <!-- sign-up form  -->
                <div class="col-sm-6">
                    <div
                        class="form-container d-flex justify-content-center align-items-center h-100"
                    >
                        <form method="post" class="row g-3 needs-validation" novalidate>
                            <h3 class="text-center display-5 fw-bold mb-4 ">
                                Welcome, Authenticate yourself
                            </h3>

                            <a class="page_btn mb-4 " href="signup.php"> Create Account</a>

                            <img class=" w-100 " src="../assets/images/credential barrier.png" alt="">
                            
                            <!-- alert box  -->
                            <?php if (isset($errorMsg)): ?>
                                <p class=" text-center text-danger mb-0 "> <?= htmlspecialchars($errorMsg); ?></p>
                            <?php endif; ?>
                            <!-- Sign form  -->
                            <div class="">
                                <div class="input-group mb-3">
                                    <input
                                        type="email"
                                        placeholder="Email"
                                        aria-describedby="email"
                                        class=" form-control"
                                        name="email"
                                        value=" <?= isset($_POST['email']) ? $_POST['email'] : null ?> "
                                        required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter a valid email</div>
                                </div>
                                <div class="input-group mb-3 ">
                                    <input
                                        type="password"
                                        placeholder="Password"
                                        aria-describedby="password"
                                        class=" form-control"
                                        name="password"
                                        required
                                    />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Enter your password</div>
                                </div>
                            </div>
                            <div class="mb-3 mt-1 d-flex justify-content-between  ">
                                <div class="  ">
                                    <input
                                    type="checkbox"
                                    placeholder="Email"
                                    aria-describedby="email"
                                    class=" form-check-input me-2 mb-0 d-inline-block "
                                    />
                                    <p class=" mb-0 d-inline-block ">Remember me</p>
                                </div>
                                <a href="./forgot-pass-rejoan.php">Forgot Password</a>
                            </div>
                            
                            <div class="form-group">
                                <button
                                    class=" submit-btn"
                                    type="submit"
                                >
                                    Sign In
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- form script  -->
        <script defer src="../assets/js/user-form-validation.js"></script>
    </body>
</html>
