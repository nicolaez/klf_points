
<?php
require 'header.php';
?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php require 'nav.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Manage employees
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


                <!-- /.row -->

                <div class="row">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Avatar</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Points</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php

                        foreach ($rows as $row){
                        echo '
                        <tr>
                            <td>'.$row->id_emp.'</td>
                            <td><img id="image2" src="'.$row->avatar_blob.'" alt="avatar"
                             class="img-responsive" width="40" height="40"/></td>
                            <td>'.$row->firstname.'</td>
                            <td>'.$row->lastname.'</td>
                            <td>'.$row->email.'</td>
                            <td>'.$row->points.'</td>
                            <td>
                            <a href="'. site_url("admin/removeemployee/").'?id_rem='.$row->id_emp.'">Remove </a> |
                            <a href="'. site_url("admin/addpoints/").'?id_rem='.$row->id_emp.'">Points + </a> |
                            <a href="'. site_url("admin/removepoints/").'?id_rem='.$row->id_emp.'">Points - </a>
                            </td>
                        </tr>';
                         }; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->

                <div class="row">

                </div>
                <!-- /.row -->

                <div class="row">



                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php
require 'footer.php';
?>