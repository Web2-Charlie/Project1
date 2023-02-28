    <section>
        <div class="container">
            <div class="d-flex justify-content-center flex-wrap">
                <div class="card shadow-lg" style="width: 18rem;">
                <!-- </?php echo '<pre>';
                print_r(base_url());
                exit;?> -->
                <img src="<?= base_url() ?>assets/images/EmployeeApp/employee.png" alt="Image Icon">
                    <h4 class="lead m-1 p-2">Login</h4>
                    <div class="card-body">
                        <form action="login" method="post">
                            <div class="form-row md-12">
                                <div class="col md-6 lg-6 mt-2 p-2">
                                    <input type="text" class="form-control" name="username" placeholder="username">
                                </div>
                                <div class="col col md-6 lg-6 mt-2 p-2">
                                    <input type="password" class="form-control" name="password" placeholder="password">
                                </div>
                                <div class="col col md-6 lg-6 mt-2 p-2">
                                    <input type="submit" class="form-control btn btn-primary" name="login" value="Login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>