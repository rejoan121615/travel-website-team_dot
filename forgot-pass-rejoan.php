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
        <link rel="stylesheet" href="./css/style.css" />
    </head>
    <body class="form-body">
        <div class="bg-light form-wrap">
            <div class="row w-100">
                <!-- left side highlight image  -->
                <div class="col-sm-6">
                    <div class="form-img">
                        <img class="w-100" src="./images/sign in.jpeg" alt="" />
                    </div>
                </div>
                <!-- sign-up form  -->
                <div class="col-sm-6">
                    <div
                        class="form-container d-flex justify-content-center align-items-center h-100"
                    >
                        <form method="post">
                            <h2 class="text-center display-5 fw-bold mb-5 ">
                                Recover Password
                            </h2>

                            <!-- Sign form  -->
                            <div class="mb-3">
                                <input
                                    type="email"
                                    placeholder="Submit email to get recovery link"
                                    aria-describedby="email"
                                />
                            </div>
                            <div class="form-group">
                                <button
                                    class=" submit-btn mb-3 "
                                    type="submit"
                                >
                                    Submit Email
                                </button>
                                <button
                                    class=" submit-btn-nofill d-flex align-items-center justify-content-center "
                                    type="submit"
                                >
                                    <i class="fa-solid fa-arrow-left"></i>
                                    <a href="./login-rejoan.php" class=" mb-0 ms-3 " style=" text-decoration: none;" >Go back to Log-in Page</a>
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
