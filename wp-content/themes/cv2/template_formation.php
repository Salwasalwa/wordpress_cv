<?php
    /*template name: formation_temp*/
?>
<?php
get_header();
?>
<div class="main">

    <?php
    get_sidebar();
    ?>
    <main>
        
        <h2 id="formation">Formation</h2>
        <?php
        $args = array('category_name' => "Formation" );
        $posts = get_posts($args);
        get_template_part( 'template-parts/content_loop_post');
        ?>
    </main>
</div>
<?php
    get_footer();
?>
