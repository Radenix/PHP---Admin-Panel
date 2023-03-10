<!-- Header -->

<!-- Aside -->
<?php  require_once "header.php";require_once "aside.php";
require_once "../settings/code/port-kat-add.php" ?>


<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <!-- Navbar -->
    <?php  require_once "nav.php"?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12 position-relative z-index-2">

                <div class="card mb-4 ">

                    <div class="card-body">
                        <div class="col-12">
                            <div class="card my-4">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                        <h6 class="text-white text-capitalize ps-3">Portfolio Category List</h6>
                                    </div>
                                </div>
                                <div class="card-body px-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Title</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Status</th>
                                                <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Operations</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php for($i=0;$i<count($kat_list);$i++){ ?>
                                            <tr>

                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0"><?= $kat_list[$i]["title"]?></p>
                                                </td>
                                                <td class="align-middle text-sm">

                                                        <div class="form-check form-switch d-flex align-items-center mb-3 is-filled">
                                                        <input class="form-check-input" type="checkbox" id="rememberMe">
                                                        <label class="form-check-label mb-0 ms-2" for="rememberMe"></label>
                                                        </div>

                                                </td>
                                                <td class="align-middle ">
                                                    <button  class="btn btn-success " type="button" data-original-title="" title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                    <button type="button" class="btn btn-danger" data-original-title="" title="">
                                                        <i class="material-icons">close</i>
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                </td>

                                            </tr>
                                            <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <?php  require_once "footer.php"?>
 