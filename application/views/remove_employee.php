
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
                            Remove employee
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-5 col-md-offset-1">
                        <?php

                        echo form_open('Employee/removeEmployee');
                        echo form_label('Select employee: ');
                        echo '<select name="emp_id" id="emp_id" class = form-control>';
                        if(isset($_GET['id_rem']))
                            $id_rem = $_GET['id_rem'];
                        $this->load->model('Employee_model');
                        $e1 = new Employee_model();
                        $employees = $e1->getAllEmployees();
                        foreach($employees as $emp){
                            if($emp->id_emp == $id_rem)
                                echo '<option value="'.$emp->id_emp.'" selected = "selected">'.$emp->firstname.' '
                                    .$emp->lastname.'</option>';
                            else
                                echo '<option value="'.$emp->id_emp.'">'.$emp->firstname.' '.$emp->lastname.'</option>';
                        }
                        echo '</select>';



                        echo '<br /><br />';
                        echo form_submit(array('id'=>'block', 'name'=>'block','class'=>'btn btn-danger'),'Block');
                        echo form_submit(array('id'=>'remove', 'name'=>'remove','class'=>'btn btn-danger'),'Remove');

                        echo form_close();
                        ?>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
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