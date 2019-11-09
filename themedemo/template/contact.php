<?php
/* Template Name: Contact */
?>

<?php get_header();?>
    <div class="container"> 
        <div class="row">
            <div class="col-md-8" style="padding:0">
                <?php get_template_part('module/20', 'content');?>
            </div>
            <div class="col-md-4">
            <?php get_template_part('module/10', 'content');?>
                <?php get_template_part('module/14','content')?>
            </div>
        </div>
    </div>
<?php get_footer();?>