<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>sign-up page</title>
        <!-- font-awesome cdn -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        />
        <!-- bootstrap cdn -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        />
        <!-- css link -->
        <link rel="stylesheet" href="../assets/css/style.css" />
    </head>
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
                        <form method="post">
                            <h2 class="text-center display-5 fw-bold mb-5 ">
                                Hi, Get Started Now
                            </h2>

                            <a class="page_btn mb-4 " href="./signup-rejoan.php"> Create Account</a>

                            <img class=" w-100 " src="../assets/images/credential barrier.png" alt="">

                            <!-- Sign form  -->
                            <div class="mb-3">
                                <input
                                    type="email"
                                    placeholder="Email"
                                    aria-describedby="email"
                                />
                                <input
                                    type="password"
                                    placeholder="Password"
                                    aria-describedby="password"
                                />
                            </div>
                            <div class="mb-5 d-flex justify-content-between  ">
                                <div class=" d-flex align-items-center ">
                                    <input
                                    type="checkbox"
                                    placeholder="Email"
                                    aria-describedby="email"
                                    class="form-check-input me-2 mb-0 "
                                    />
                                    <p class=" mb-0 ">Remember me</p>
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
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
