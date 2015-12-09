
    <div id="wrapper">

        <!-- Navigation -->
        <?php require 'nav.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add employee
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

                        echo form_open('Employee/add_emp');

                        echo form_label('First Name: ');
                        echo form_input(array('id'=>'fname', 'name'=>'fname', 'class'=>'form-control'),set_value ('name'),'autpfocus');
                        echo '<div class="error_control">'.form_error('name').'</div>';
                        echo form_label('Last Name: ');
                        echo form_input(array('id'=>'lname', 'name'=>'lname', 'class'=>'form-control'),set_value('lname'));
                        echo '<div class="error_control">'.form_error('lname').'</div>';
                        echo form_label('Email: ');
                        echo form_input(array('id'=>'email', 'name'=>'email', 'class'=>'form-control'), set_value('email'));
                        echo '<div class="error_control">'.form_error('email').'</div>';
                        echo form_label('Password: ');
                        echo form_input(array('id'=>'passwd', 'name'=>'passwd', 'class'=>'form-control'),set_value ('passwd'));
                        echo '<div class="error_control">'.form_error('passwd').'</div>';
                        echo form_label('Birthday: ');
                        echo form_input(array('id'=>'birthday', 'name'=>'birthday', 'class'=>'form-control'),set_value ('birthday'));
                        echo '<div class="error_control">'.form_error('birthday').'</div>';
                        echo form_label('Hire date: ');
                        echo form_input(array('id'=>'hire_date', 'name'=>'hire_date', 'class'=>'form-control'),set_value ('hire_date'));
                        echo '<div class="error_control">'.form_error('hire_date').'</div>';
                        echo form_label('Points: ');
                        echo form_input(array('id'=>'points', 'name'=>'points', 'class'=>'form-control'),set_value ('points'));
                        echo '<div class="error_control">'.form_error('points').'</div>';

                        $options = array(
                            'admin' => 'admin',
                            'worker' => 'worker'
                        );
                        echo '<br />';
                        echo form_label('Employee type: &nbsp; &nbsp;');
                        echo form_dropdown('emp_type', $options, 'admin');
                        echo '<br /><br />';
                        echo form_label('Avatar: ');
                        echo '<input type="file" name="userfoto" class="btn btn-primary"/>';
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


