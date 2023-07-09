 <!-- html header  -->
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
                        <form method="post">
                          <div>
                            <h2 class="text-center display-5 fw-bold mb-5 ">
                              Verification Code
                            </h2>
                          </div>

                            <!-- Sign form  -->
                            <div class="mb-5 verification-inputs d-flex justify-content-around ">
                                <input type="text" class=" form-control mb-0 ">
                                <input type="text" class=" form-control mb-0 ">
                                <input type="text" class=" form-control mb-0 ">
                                <input type="text" class=" form-control mb-0 ">
                            </div>
                            <div class="form-group">
                                <button
                                    class=" submit-btn mb-3 "
                                    type="submit"
                                >
                                    Verify
                                </button>
                                <button
                                    class=" submit-btn-nofill d-flex align-items-center justify-content-center "
                                    type="submit"
                                >
                                Resend Code
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
