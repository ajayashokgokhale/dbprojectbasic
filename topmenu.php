<?php @session_start(); ?>
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo PROJECT_NAME; ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php echo ($page_menu == 'home' ? 'class="active"' : ''); ?> ><a href="index.php">Home</a></li>
                <li <?php echo ($page_menu == 'list' ? 'class="active"' : ''); ?> ><a href="list_reg.php">List</a></li>
                <li <?php echo ($page_menu == 'delete' ? 'class="active"' : ''); ?> ><a href="delete.php">Delete</a></li>
                <li <?php echo ($page_menu == 'edit' ? 'class="active"' : ''); ?> ><a href="edit.php">Edit</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->