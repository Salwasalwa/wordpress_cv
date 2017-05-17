<?php
    /*template name: loisirs_tem*/
?>
<?php
get_header();
?>
<div class="main">

    <?php
    get_sidebar();
    ?>
    <main>

        <h2>Loisirs</h2>
        <?php
        $args = array('category_name' => "Loisirs" );
        $posts = get_posts($args);
        get_template_part( 'template-parts/content_loop_post');
        ?>
    </main>
</div>
<?php
    get_footer();
?>
