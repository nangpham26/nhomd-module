<?php get_header(); ?>
<div class="aaa" style="background:#eee;">
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="background:#eee;">
                    <?php get_template_part('module/9', 'content');?>
                </div>
                <div class="col-md-4">
                <?php get_template_part('module/10', 'content');?>
                <?php get_template_part('module/14','content')?>
                </div>
            </div>
        </div>
        </div>
<?php get_footer();?>