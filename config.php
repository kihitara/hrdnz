<?php

// Name of the theme's folder

$THEME->name = 'hrdnz';

// Parent style sheets

$THEME->parents = array('base');

// Style sheets used

$THEME->sheets = array('core','course','modules','blocks','navbar','custommenu','dock','contentslider');

// Editor sheets

$THEME->editor_sheets = array('editor');

// Dock enabled

$THEME->enable_dock = true;

// CSS Post Process

$THEME->csspostprocess = 'hrdnz_process_css';

// Custom renderer factory

$THEME->rendererfactory = 'theme_overridden_renderer_factory';

// Layouts used

$THEME->layouts = array(
    // Most backwards compatible layout without the blocks - this is the layout used by default
    'base' => array(
        'file' => 'general.php',
        'regions' => array(),
    ),
    // Standard layout with blocks, this is recommended for most pages with general information
    'standard' => array(
        'file' => 'general.php',
        'regions' => array('side-pre','block-top-left','block-top-midlt','block-top-midrt','block-top-right','block-btm-left','block-btm-midlt','block-btm-midrt','block-btm-right'),
        'defaultregion' => 'side-pre',
    ),
    // Main course page
    'course' => array(
        'file' => 'general.php',
        'regions' => array('side-pre','block-top-left','block-top-midlt','block-top-midrt','block-top-right','block-btm-left','block-btm-midlt','block-btm-midrt','block-btm-right'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>true),
    ),
    // Grades page
    'report' => array(
        'file' => 'general.php',
        'regions' => array('side-pre','block-top-left','block-top-midlt','block-top-midrt','block-top-right','block-btm-left','block-btm-midlt','block-btm-midrt','block-btm-right'),
        'defaultregion' => 'side-pre',
        'options' => array('nocustommenu'=>true),
    ),
    'coursecategory' => array(
        'file' => 'general.php',
        'regions' => array('side-pre','block-top-left','block-top-midlt','block-top-midrt','block-top-right','block-btm-left','block-btm-midlt','block-btm-midrt','block-btm-right'),
        'defaultregion' => 'side-pre',
    ),
    // part of course, typical for modules - default page layout if $cm specified in require_login()
    'incourse' => array(
        'file' => 'general.php',
        'regions' => array('side-pre','block-top-left','block-top-midlt','block-top-midrt','block-top-right','block-btm-left','block-btm-midlt','block-btm-midrt','block-btm-right'),
        'defaultregion' => 'side-pre',
    ),
    // The site home page.
    'frontpage' => array(
        'file' => 'frontpage.php',
        'regions' => array('side-pre','block-top-left','block-top-midlt','block-top-midrt','block-top-right','block-btm-left','block-btm-midlt','block-btm-midrt','block-btm-right'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar'=>true, 'langmenu'=>true),
    ),
    // Server administration scripts.
    'admin' => array(
        'file' => 'general.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    // My dashboard page
    'mydashboard' => array(
        'file' => 'general.php',
        'regions' => array('side-pre','side-post','block-top-left','block-top-midlt','block-top-midrt','block-top-right','block-btm-left','block-btm-midlt','block-btm-midrt','block-btm-right'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>true),
    ),
    // My public page
    'mypublic' => array(
        'file' => 'general.php',
        'regions' => array('side-pre','side-post','block-top-left','block-top-midlt','block-top-midrt','block-top-right','block-btm-left','block-btm-midlt','block-btm-midrt','block-btm-right'),
        'defaultregion' => 'side-pre',
    ),
    'login' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('langmenu'=>true),
    ),
 
    // Pages that appear in pop-up windows - no navigation, no blocks, no header.
    'popup' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true),
    ),
    // No blocks and minimal footer - used for legacy frame layouts only!
    'frametop' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true),
    ),
    // Embeded pages, like iframe/object embeded in moodleform - it needs as much space as possible
    'embedded' => array(
        'file' => 'embedded.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true),
    ),
    // Used during upgrade and install, and for the 'This site is undergoing maintenance' message.
    // This must not have any blocks, and it is good idea if it does not have links to
    // other places - for example there should not be a home link in the footer...
    'maintenance' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('noblocks'=>true, 'nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true),
    ),
);