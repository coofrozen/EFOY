
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18"><?php echo $title; ?></h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">home/<?php echo $title; ?></li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Overview</h4>

                                    <div>
                                        <div class="pb-3 border-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <p class="mb-2">All Subscribers</p>
                                                    <h4 class="mb-0"><?php echo $sub_count;?></h4>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <div>
                                                            2.06 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                                        </div>
                                                        <div class="progress progress-sm mt-3">
                                                            <div class="progress-bar" role="progressbar" style="width: 62%"
                                                                aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-3 border-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <p class="mb-2">Total Unsubscribers</p>
                                                    <h4 class="mb-0">4</h4>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <div>
                                                            0.37 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                                        </div>
                                                        <div class="progress progress-sm mt-3">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 48%" aria-valuenow="48" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <p class="mb-2">Revenue</p>
                                                    <h4 class="mb-0">72 Birr</h4>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <div>
                                                            2.18 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                                        </div>
                                                        <div class="progress progress-sm mt-3">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 78%" aria-valuenow="78" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Daily Report</h4>

                                    <div id="line-chart" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Revenue Analytics</h4>

                                    <div id="column-chart" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- <div class="row">
                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Sales Analytics</h4>

                                    <div class="row align-items-center">
                                        <div class="col-sm-6">
                                            <div id="donut-chart" class="apex-charts"></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="py-3">
                                                            <p class="mb-1 text-truncate"><i
                                                                    class="mdi mdi-circle text-primary me-1"></i> Online
                                                            </p>
                                                            <h5>$ 2,652</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="py-3">
                                                            <p class="mb-1 text-truncate"><i
                                                                    class="mdi mdi-circle text-success me-1"></i>
                                                                Offline</p>
                                                            <h5>$ 2,284</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="py-3">
                                                            <p class="mb-1 text-truncate"><i
                                                                    class="mdi mdi-circle text-warning me-1"></i>
                                                                Marketing</p>
                                                            <h5>$ 1,753</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Monthly Sales</h4>

                                    <div id="scatter-chart" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <div class="text-white-50">
                                        <h5 class="text-white">2400 + New Users</h5>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                                        <div>
                                            <a href="#" class="btn btn-outline-success btn-sm">View more</a>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-8">
                                            <div class="mt-4">
                                                <img src="assets/images/widget-img.png" alt=""
                                                    class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- end row -->
<!-- 
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Overview</h4>

                                    <div>
                                        <div class="pb-3 border-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <p class="mb-2">New Visitors</p>
                                                    <h4 class="mb-0">3,524</h4>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <div>
                                                            2.06 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                                        </div>
                                                        <div class="progress progress-sm mt-3">
                                                            <div class="progress-bar" role="progressbar" style="width: 62%"
                                                                aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-3 border-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <p class="mb-2">Product Views</p>
                                                    <h4 class="mb-0">2,465</h4>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <div>
                                                            0.37 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                                        </div>
                                                        <div class="progress progress-sm mt-3">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 48%" aria-valuenow="48" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <p class="mb-2">Revenue</p>
                                                    <h4 class="mb-0">$ 4,653</h4>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-end">
                                                        <div>
                                                            2.18 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                                        </div>
                                                        <div class="progress progress-sm mt-3">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 78%" aria-valuenow="78" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        
                        <!-- <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Revenue by location</h4>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div id="usa-vectormap" style="height: 230px"></div>
                                        </div>

                                        <div class="col-sm-5 ms-auto">
                                            <div class="mt-4 mt-sm-0">
                                                <p>Last month Revenue</p>

                                                <div class="d-flex align-items-start py-3">
                                                    <div class="flex-1">
                                                        <p class="mb-2">California</p>
                                                        <h5 class="mb-0">$ 2,256</h5>
                                                    </div>
                                                    <div class="ms-auto">
                                                        2.52 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start py-3 border-top">
                                                    <div class="flex-1">
                                                        <p class="mb-2">Nevada</p>
                                                        <h5 class="mb-0">$ 1,853</h5>
                                                    </div>
                                                    <div class="ms-auto">
                                                        1.26 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>-->
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Assignmnets</h4>

                                    <ul class="inbox-wid list-unstyled">
                                        <li class="inbox-list-item">
                                            <a href="#">
                                                <div class="d-flex align-items-start">
                                                    <div class="me-3 align-self-center">
                                                        <img src="<?php echo base_url("/upload/tewe.jpg");?>" alt=""
                                                            class="avatar-sm rounded-circle">
                                                    </div>
                                                    <div class="flex-1 overflow-hidden">
                                                        <h5 class="font-size-16 mb-1">Tewolde</h5>
                                                        <p class="text-truncate mb-0">Meeting Called for Tuesday</p>
                                                    </div>
                                                    <div class="font-size-12 ms-auto">
                                                        30 min ago
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="inbox-list-item">
                                            <a href="#">
                                                <div class="d-flex align-items-start">
                                                    <div class="me-3 align-self-center">
                                                        <img src="<?php echo base_url("/upload/jo.jpg");?>" alt=""
                                                            class="avatar-sm rounded-circle">
                                                    </div>
                                                    <div class="flex-1 overflow-hidden">
                                                        <h5 class="font-size-16 mb-1">John</h5>
                                                        <p class="text-truncate mb-0">This meeting was good!</p>
                                                    </div>
                                                    <div class="font-size-12 ms-auto">
                                                        50min ago
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="inbox-list-item">
                                            <a href="#">
                                                <div class="d-flex align-items-start">
                                                    <div class="me-3 align-self-center">
                                                        <img src="<?php echo base_url("/upload/1679490320914.jpg");?>" alt=""
                                                            class="avatar-sm rounded-circle">
                                                    </div>
                                                    <div class="flex-1 overflow-hidden">
                                                        <h5 class="font-size-16 mb-1">Tona</h5>
                                                        <p class="text-truncate mb-0">Nice to meet you</p>
                                                    </div>
                                                    <div class="font-size-12 ms-auto">
                                                        1hr ago
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="inbox-list-item">
                                            <a href="#">
                                                <div class="d-flex align-items-start">
                                                    <div class="me-3 align-self-center">
                                                        <img src="<?php echo base_url("/upload/tewe.jpg");?>" alt=""
                                                            class="avatar-sm rounded-circle">
                                                    </div>
                                                    <div class="flex-1 overflow-hidden">
                                                        <h5 class="font-size-16 mb-1">Tewolde</h5>
                                                        <p class="text-truncate mb-0">I've finished it! See you soon</p>
                                                    </div>
                                                    <div class="font-size-12 ms-auto">
                                                        2hr ago
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="text-center">
                                        <a href="#" class="btn btn-primary btn-sm">Load more</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Report</h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Charged Subscribers</th>
                                                    <th scope="col">Revenue Collected(Br)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($record as $value) {?>
                                                    <tr>
                                                        <td class='text-center'>
                                                            <?php echo $value->cur_date; ?>
                                                        </td>
                                                        <td class='text-center'>
                                                            <?php echo ($value->revenue); ?>
                                                        </td>
                                                        <td class='text-center'>
                                                            <?php echo ($value->revenue)*2; ?> birr
                                                        </td>
                                                    </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="mt-3">
                                        <ul class="pagination pagination-rounded justify-content-center mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="#">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- End Page-content -->