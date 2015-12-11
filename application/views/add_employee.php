
    <div id="wrapper">

        <!-- Navigation -->
        <?php require 'nav.php';
       // echo form_open('Employee/add_emp');
        ?>

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


                </div>

                <br/>

                <div class="row">
                    <div class="col-md-5 col-md-offset-1">
                        <?php
/* AVATAR*/
                        echo '
                         <div class="col-md-5 col-md-offset-1">
                        <img id="image2" src="'.base_url().'assets/img/avatar.png" alt="somesource"
                             class="img-responsive" width="100"
                             height="100"/>
                        <!-- NOTE: you can use php to input the users current image in the source attribute -->
                        <br/>
                        <br/>

                        <!-- position and style these however you like -->

                        <input type="file" id="fileBrowser" style="display: none"> <!-- this is display none in css -->

                        <button id="activateFile">Choose Avatar Picture</button>

                    </div>


                        ';


                        echo form_open('Employee/add_emp');
                   //     echo form_open_multipart('Employee/add_emp');
                     /*   echo '<form action="http://localhost/klf_points/index.php/Employee/add_emp" method="POST"
                        enctype="multipart/form-data" >';
                     */
                        echo form_label('First Name: ');
                        echo form_input(array('id'=>'fname', 'name'=>'fname', 'class'=>'form-control'),set_value ('name'),'autpfocus');
                        echo '<div class="error_control">'.form_error('name').'</div>';
                        echo form_label('Last Name: ');
                        echo form_input(array('id'=>'lname', 'name'=>'lname', 'class'=>'form-control'),set_value('lname'));
                        echo '<div class="error_control">'.form_error('lname').'</div>';
                        echo form_label('Position: ');
                        echo form_input(array('id'=>'emp_position', 'name'=>'emp_position', 'class'=>'form-control'), set_value ('emp_position'));
                        echo '<div class="error_control">'.form_error('emp_position').'</div>';
                        echo form_label('Email: ');
                        echo form_input(array('id'=>'email', 'name'=>'email', 'class'=>'form-control'), set_value('email'));
                        echo '<div class="error_control">'.form_error('email').'</div>';
                        echo form_label('Birthday: ');
                        echo '<input type=date name="birthday" id="birthday" class="form-control" >';
                        //echo form_input(array('id'=>'birthday', 'name'=>'birthday', 'class'=>'form-control'),
                        //    set_value ('birthday'));
                        echo '<div class="error_control">'.form_error('birthday').'</div>';
                        echo form_label('Hire date: ');
                        //echo form_input(array('id'=>'hire_date', 'name'=>'hire_date', 'class'=>'datepicker
                       // form-control'), set_value ('hire_date'));
                        echo '<input type=date name="hire_date" id="hire_date" class="form-control" >';
                        echo '<div class="error_control">'.form_error('hire_date').'</div>';
                        echo form_label('Points: ');
                        echo form_input(array('id'=>'points', 'name'=>'points', 'class'=>'form-control'),set_value ('points'));
                        echo '<div class="error_control">'.form_error('points').'</div>';
                        echo form_label('Employee type: ');
                        echo '<select name="emp_type" id="emp_type" class="form-control">';
                        echo '<option value="worker">Worker</option>option>';
                        echo '<option value="admin">Admin</option>option>';
                        echo '</select>';
                        echo '<br />';
                        echo form_label('Avatar: ');
                        echo '<input type="file" name="userfile" id="userfile" class="btn btn-primary"/>';
                        echo '<br /><br />';
                        echo '<input type="hidden" id="avatar_url" name="avatar_url" value="avatar.png">';
                        echo form_submit(array('id'=>'btnAdd', 'name'=>'btnAdd','class'=>'btn btn-primary'),'Submit');
                        echo form_reset(array('id'=>'btnClr', 'name'=>'btnClr','class'=>'btn btn-primary'),'Reset');
/*
                        echo '
                        <img id="image_blob" name = "image_blob" style="display:block;" src=""
                        alt="somesource" />
                             ';

                        echo form_input(array('id'=>'image_path', 'name'=>'image_path', 'class'=>'form-control',
                        'style'=>'display:block;'), set_value ('image_path'));
*/
                 //       echo form_close();
                        echo '</form>';
                        ?>


                    </div>

                </div>
                <!-- /.row -->

                <div class="row">
                </div>
                <!-- /.row -->


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

