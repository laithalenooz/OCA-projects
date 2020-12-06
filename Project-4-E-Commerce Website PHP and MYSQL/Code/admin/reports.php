<?php include ('inc/header.php') ?>
        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <div class="page-header-left">
                                <h3>Reports
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Reports</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Sales Summary</h5>
                            </div>
                            <div class="card-body sell-graph">
                                <canvas id="myGraph"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card report-employee">
                            <div class="card-header">
                                <h2>75%</h2>
                                <h6 class="mb-0">Employees Satisfied</h6>
                            </div>
                            <div class="card-body p-0">
                                <div class="ct-4 flot-chart-container"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Transfer Report</h5>
                            </div>
                            <div class="card-body">
                                <div id="basicScenario" class="report-table"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Expenses</h5>
                            </div>
                            <div class="card-body expense-chart">
                                <div class="chart-overflow" id="area-chart1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5> Sales / Purchase</h5>
                            </div>
                            <div class="card-body">
                                <div class="sales-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5> Sales / Purchase Return</h5>
                            </div>
                            <div class="card-body sell-graph">
                                <canvas id="myLineCharts"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
        <?php include ('inc/footer.php') ?>