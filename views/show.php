<section class="vh-100" style="background-color: #4B515D;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card" style="color: #4B515D; border-radius: 35px;">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <h6 class="flex-grow-1"><?= $data['location'] ?></h6>
                            <h6><?= $data['date'] ?></h6>
                        </div>
                        <div class="d-flex flex-column text-center mt-5 mb-4">
                            <h6 class="display-4 mb-0 font-weight-bold"
                                style="color: #1C2331;"><?= $data['temperature'] ?> C</h6>
                            <span class="small" style="color: #868B94"><?= $data['description'] ?></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1" style="font-size: 1rem;">
                                <div>
                                    <span class="ms-1"> wind  <?= $data['wind'] ?> km/h</span>
                                </div>
                                <div>
                                    <span class="ms-1">humidity  <?= $data['humidity'] ?> %</span>
                                </div>
                                <div>
                                    <span class="ms-1">pressure  <?= $data['pressure'] ?> hPa</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>