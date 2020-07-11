<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Parser Enabled
|--------------------------------------------------------------------------
|
| Should the Parser library be used for the entire page?
|
| Can be overridden with $this->template->enable_parser(TRUE/FALSE);
|
|   Default: TRUE
|
*/

$config['parser_enabled'] = TRUE;

/*
|--------------------------------------------------------------------------
| Parser Enabled for Body
|--------------------------------------------------------------------------
|
| If the parser is enabled, do you want it to parse the body or not?
|
| Can be overridden with $this->template->enable_parser(TRUE/FALSE);
|
|   Default: FALSE
|
*/

$config['parser_body_enabled'] = FALSE;

/*
|--------------------------------------------------------------------------
| Title Separator
|--------------------------------------------------------------------------
|
| What string should be used to separate title segments sent via $this->template->title('Foo', 'Bar');
|
|   Default: ' | '
|
*/

$config['title_separator'] = ' | ';

/*
|--------------------------------------------------------------------------
| Layout
|--------------------------------------------------------------------------
|
| Which layout file should be used? When combined with theme it will be a layout file in that theme
|
| Change to 'main' to get /application/views/layouts/main.php
|
|   Default: 'default'
|
*/

$config['layout'] = 'default';

/*
|--------------------------------------------------------------------------
| Theme
|--------------------------------------------------------------------------
|
| Which theme to use by default?
|
| Can be overriden with $this->template->set_theme('foo');
|
|   Default: ''
|
*/

$config['theme'] = '';

/*
|--------------------------------------------------------------------------
| Theme Locations
|--------------------------------------------------------------------------
|
| Where should we expect to see themes?
|
| Default: array(APPPATH.'themes/' => '../themes/')
|
*/

$config['theme_locations'] = array(
  APPPATH.'themes/'
);


$template['active_template'] = 'backbone';

$template['bootstrap']['template'] = 'template/bootstrap.php';
$template['bootstrap']['regions'] = array(
   'header',
   'content',
   'footer' => array(
        'content' => array('<p>Copyright &copy;ypra</p>'),
    ),
);

$template['bootstrap']['parser'] = 'parser';
$template['bootstrap']['parser_method'] = 'parse';
$template['bootstrap']['parse_template'] = FALSE;

$template['default']['template'] = 'template/simple.php';
$template['default']['regions'] = array(
   'title' => array('content' => array('Ypra Template')),
   'header',
   'content',
   'navs',
   'footer' => array(
        'content' => array('<p>Ypra &copy;2020</p>'),
    ),
);

$template['default']['parser'] = 'parser';
$template['default']['parser_method'] = 'parse';
$template['default']['parse_template'] = FALSE;

$template['backbone']['template'] = 'template/backbone.php';
$template['backbone']['regions'] = array(
   'title' => array('content' => array('Process Dashboard')),
   'header',
   'navs',
   'sidenavs',
   'content',
   'footer' => array(
        'content' => array('Process Dashboard &copy;2020'),
    ),
);

$template['backbone']['parser'] = 'parser';
$template['backbone']['parser_method'] = 'parse';
$template['backbone']['parse_template'] = FALSE;


$template['login']['parser'] = 'parser';
$template['login']['parser_method'] = 'parser';
$template['login']['parse_template'] = FALSE;
$template['login']['template'] = 'template/login.php';
$template['login']['regions'] = array(
   'title' => array('content' => array('')),
   'header',
   'content',
   'footer' => array(
        'content' => array(''),
    ),
);