
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
                            Log of points
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
                            <th>From</th>
                            <th>To</th>
                            <th>Subject</th>
                            <th>Points</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php

                        foreach ($rows as $row){
                        echo '
                        <tr>
                            <td>'.$row->id_emp.'</td>
                            <td>'.$row->points.'</td>
                            <td>'.$row->subject.'</td>
                            <td>'.$row->description.'</td>
                            <td>'.$row->points.'</td>
                            <td> date log </td>
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