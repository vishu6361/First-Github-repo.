 <body>
    <!-- /////////////////////////////////////////////////////////////////////////////////////// -->
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CC MNNIT</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav"> 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CC Classes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Competitive Coding</a></li>
            <li><a href="#">Machine Learning</a></li>
            <li><a href="#">Web-Devlopment</a></li>
            <!-- <li role="separator" class="divider"></li> -->
            <!-- <li><a href="#">Separated link</a></li> -->
            <!-- <li role="separator" class="divider"></li> -->
            <!-- <li><a href="#">One more separated link</a></li> -->
          </ul>
          <li><a href="#">Upcoming Classes</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <?php
        if(isset($_SESSION['u_id']))
        {
          echo '<form class="form-group" action="users/include/logout_inc.php" method="POST">
        <button class="btn btn-default" type="submit" name="submit">Logout</button>
      </form>';
        }
        elseif(isset($_SESSION['a_name'])){
          echo '<ul class="nav navbar-nav navbar-right">
        <li><a href="admin/include/logout_inc.php">Logout</a></li>
        </ul>';
        }
        else{
          echo '<ul class="nav navbar-nav navbar-right">
        <li><a href="users/login.php">Login</a></li>
        <li><a href="users/signup.php">Signup</a></li>
        <li><a href="admin/admin_login.php">Admin Login</a></li>
        </ul>';

        }

      ?>
      

        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>


 </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
</body>