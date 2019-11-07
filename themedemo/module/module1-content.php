<div class="type-module1">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory'); ?> /images/logo.png" alt="Logo" class="img-responsive"></a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <?php
                wp_nav_menu(array(
                'menu_class' => 'nav navbar-nav',
                'menu_id' => 'main-menu',
                ));
                ?>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </div>