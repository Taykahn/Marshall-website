<?php
/**
 * Custom post types
 */

//Instantiate new class object
$fp_port = new MBC_Theme( 'frontpage-portfolio' );

$fp_port->mbc_build_cpt( 'frontpage-portfolio', 'Frontpage Portfolio', 'Frontpage Portfolio', $supports = array(), $settings = array(), $has_arch = true, $hier = true);