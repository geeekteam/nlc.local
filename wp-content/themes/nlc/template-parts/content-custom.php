<?php
the_content( sprintf(
    wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'nlc' ), array( 'span' => array( 'class' => array() ) ) ),
    the_title( '<span class="screen-reader-text">"', '"</span>', false )
) );
