<?php
    /*template name: Categories*/
?>
<?php
get_header();
?>
<div class="main">

    <?php
    get_sidebar();
    ?>
    <main>
        <?php if (get_the_ID()== 36) : ?>
            <h2 id="competence">Competence</h2>
            <?php
            $args = array('category_name' => "Competence" );
            $posts = get_posts($args);
            get_template_part( 'template-parts/content_loop_post');
        ?>
        <?php elseif (get_the_ID()== 38 ): ?>
            <h2 id="formation">Formation</h2>
            <?php
            $args = array('category_name' => "Formation" );
            $posts = get_posts($args);
            get_template_part( 'template-parts/content_loop_post');
        ?>
        <?php elseif (get_the_ID()== 40 ): ?>
            <h2>Loisirs</h2>
            <?php
            $args = array('category_name' => "Loisirs" );
            $posts = get_posts($args);
            get_template_part( 'template-parts/content_loop_post');
        ?>
        <?php endif; ?>
    </main>

</div>
<?php
    get_footer();
?>
