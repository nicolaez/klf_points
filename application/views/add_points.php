
    <div id="wrapper">

        <!-- Navigation -->
        <?php require 'nav.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add points
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

                        echo form_open('Points/addPoints');
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
                                    .$emp->lastname
                                    .'</option>';
                            echo '<option value="'.$emp->id_emp.'">'.$emp->firstname.' '.$emp->lastname.'</option>';
                        }
                        echo '</select>';
                        echo form_label('Add number of points: ');
                        echo form_input(array('id'=>'points', 'name'=>'points', 'class'=>'form-control'),set_value ('points'),'autpfocus');
                        echo '<div class="error_control">'.form_error('points').'</div>';
                        echo form_label('Subject: ');
                        echo form_input(array('id'=>'subject', 'name'=>'subject', 'class'=>'form-control'),set_value ('subject'));
                        echo '<div class="error_control">'.form_error('subject').'</div>';
                        echo form_label('Description: ');
                        echo form_textarea(array('id'=>'description', 'name'=>'description', 'rows'=> 7, 'class'=>'form-control'), set_value('description'));
                        echo '<div class="error_control">'.form_error('lname').'</div>';



                        echo '<br /><br />';
                        echo form_submit(array('id'=>'btnAdd', 'name'=>'btnAdd','class'=>'btn btn-primary'),'Submit');
                        echo form_reset(array('id'=>'btnClr', 'name'=>'btnClr','class'=>'btn btn-primary'),'Reset');

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


