
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
/* AVATAR
                        echo '
                         <div class="col-md-5 col-md-offset-1">
                        <img id="image" src="'.base_url().'assets/img/avatar.png" alt="somesource"
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

                        */
                    //    echo form_open('Employee/add_emp');
                        echo form_open('Employee/add_emp');
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
                        echo form_input(array('id'=>'birthday', 'name'=>'birthday', 'class'=>'form-control'),set_value ('birthday'));
                        echo '<div class="error_control">'.form_error('birthday').'</div>';
                        echo form_label('Hire date: ');
                        echo form_input(array('id'=>'hire_date', 'name'=>'hire_date', 'class'=>'form-control'), set_value ('hire_date'));
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
                        echo '<input type="file" name="userfoto" class="btn btn-primary"/>';
                        echo '<br /><br />';
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
                        echo form_close();
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

<script>


    $("#activateFile").on('click', function(){
        $("#fileBrowser").click();
        alert('changed');

    });

    //if you want a finish edit button then use this otherwise put this code in the fileBrowser change event handler below KEEP THE readURL(this) OR IT WON'T WORK!

    $("#finishEdit").on('click', function(){
        var imgData = document.getElementById('image').src;
        //imageData is the variable you use $_POST to get the data in php
    //    $.post('phpscriptname.php', {imageData:imgData}, function(data){
            //recieve information back from php through the echo function(not required)
   //     });
    });


    $("#fileBrowser").change(function(){
        alert('changed');
     //   readURL(this);
    });
/*
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image').attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    */
</script>
