<?php
    /*template name: competence*/
?>
<?php
get_header();
?>
<div class="main">

    <?php
    get_sidebar();
    ?>
    <main>

        <h2 id="competence">Competence</h2>
        <?php
        $args = array('category_name' => "Competence" );
        $posts = get_posts($args);
        get_template_part( 'template-parts/content_loop_post');

        ?>
    </main>

</div>
<?php
    get_footer();
?>
