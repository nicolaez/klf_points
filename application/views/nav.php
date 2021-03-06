<?php


?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">KLF Media Inc</a>
  </div>
  <!-- Top Menu Items -->
  <ul class="nav navbar-right top-nav">
    <!--li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b
            class="caret"></b></a>
      <ul class="dropdown-menu message-dropdown">
        <li class="message-preview">
          <a href="#">
            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>

              <div class="media-body">
                <h5 class="media-heading"><strong>John Smith</strong>
                </h5>

                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>

                <p>Lorem ipsum dolor sit amet, consectetur...</p>
              </div>
            </div>
          </a>
        </li>
        <li class="message-preview">
          <a href="#">
            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>

              <div class="media-body">
                <h5 class="media-heading"><strong>John Smith</strong>
                </h5>

                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>

                <p>Lorem ipsum dolor sit amet, consectetur...</p>
              </div>
            </div>
          </a>
        </li>
        <li class="message-preview">
          <a href="#">
            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>

              <div class="media-body">
                <h5 class="media-heading"><strong>John Smith</strong>
                </h5>

                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>

                <p>Lorem ipsum dolor sit amet, consectetur...</p>
              </div>
            </div>
          </a>
        </li>
        <li class="message-footer">
          <a href="#">Read All New Messages</a>
        </li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
      <ul class="dropdown-menu alert-dropdown">
        <li>
          <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
        </li>
        <li>
          <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
        </li>
        <li>
          <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
        </li>
        <li>
          <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
        </li>
        <li>
          <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
        </li>
        <li>
          <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#">View All</a>
        </li>
      </ul>
    </li-->
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo
        $_SESSION['logged_in']['firstname'].' '.$_SESSION['logged_in']['lastname'] ?> <b
            class="caret"></b></a>
      <ul class="dropdown-menu">
        <li>
          <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
        </li>
        <!--li>
          <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
        </li-->
        <li class="divider"></li>
        <li>
          <a href="<?php echo site_url("admin/logout/");?>"><i class="fa fa-fw
          fa-power-off"></i> Log Out</a>
        </li>
      </ul>
    </li>
  </ul>
  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      <li class="<?php echo $nav_state['manageemployees']; ?>">
        <a href="<?php echo site_url("admin/manageemployees/");?>"><i class="fa fa-fw fa-dashboard"></i> Manage
          Employees</a>
        <ul id="demo" class="">
          <li class="<?php echo $nav_state['addemployee']; ?>">
            <a href="<?php echo site_url("admin/addemployee/");?>"><i class="fa fa-fw fa-dashboard"></i>Add employee</a>
          </li>
          <li class="<?php echo $nav_state['removeemployee']; ?>">
            <a href="<?php echo site_url("admin/removeemployee/");?>"><i class="fa fa-fw fa-dashboard"></i>Remove
              Employee</a>
          </li>
        </ul>
      </li>
      <li class="<?php echo $nav_state['managepoints']; ?>">
        <a href="<?php echo site_url("admin/managepoints/");?>"><i class="fa fa-fw fa-table"></i> Manage points</a>
          <ul id="demo" class="">
              <li class="<?php echo $nav_state['addpoints']; ?>">
                  <a href="<?php echo site_url("admin/addpoints/");?>"><i class="fa fa-fw fa-dashboard"></i> Add
                    points</a>
              </li>
              <li class="<?php echo $nav_state['removepoints']; ?>">
                  <a href="<?php echo site_url("admin/removepoints/");?>"><i class="fa fa-fw fa-dashboard"></i> Remove
                    points</a>
              </li>
              <li class="<?php echo $nav_state['logpoints']; ?>">
                <a href="<?php echo site_url("admin/logpoints/");?>"><i class="fa fa-fw fa-dashboard"></i> Log of
                  points</a>
              </li>
          </ul>
      </li>
      <li class="<?php echo $nav_state['settings']; ?>">
        <a href="<?php echo site_url("admin/settings/");?>"><i class="fa fa-fw fa-wrench"></i> Settings</a>
      </li>
    </ul>
  </div>
  <!-- /.navbar-collapse -->
</nav>