<?php
/**
    template name: constructor-page
*/

	get_header();

	$sections = get_field('sections');

 	if ($sections):
        foreach($sections as $section):
            ?>

            <?php include "sections/".$section['acf_fc_layout'].".php" ?>

            <?php

        endforeach;
    endif;

	get_footer();

?>