<?php include ('inc/header.php') ?>
        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Media
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Media </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid bulk-cate">
                <div class="card ">
                    <div class="card-header">
                        <h5>Dropzone Media</h5>
                    </div>
                    <div class="card-body">
                        <form class="dropzone digits" id="singleFileUpload" action="http://themes.pixelstrap.com/upload.php">
                            <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                                <h4 class="mb-0 f-w-600">Drop files here or click to upload.</h4>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5>Media File List</h5>
                    </div>
                    <div class="card-body">
                        <div id="batchDelete" class="category-table media-table"></div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
        <?php include ('inc/footer.php') ?>