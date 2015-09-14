<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Active template
|--------------------------------------------------------------------------
|
| The $template['active_template'] setting lets you choose which template
| group to make active.  By default there is only one group (the
| "default" group).
|
*/
$template['active_template'] = 'intro';

/*
|--------------------------------------------------------------------------
| Explaination of template group variables
|--------------------------------------------------------------------------
|
| ['template'] The filename of your master template file in the Views folder.
|   Typically this file will contain a full XHTML skeleton that outputs your
|   full template or region per region. Include the file extension if other
|   than ".php"
| ['regions'] Places within the template where your content may land.
|   You may also include default markup, wrappers and attributes here
|   (though not recommended). Region keys must be translatable into variables
|   (no spaces or dashes, etc)
| ['parser'] The parser class/library to use for the parse_view() method
|   NOTE: See http://codeigniter.com/forums/viewthread/60050/P0/ for a good
|   Smarty Parser that works perfectly with Template
| ['parse_template'] FALSE (default) to treat master template as a View. TRUE
|   to user parser (see above) on the master template
|
| Region information can be extended by setting the following variables:
| ['content'] Must be an array! Use to set default region content
| ['name'] A string to identify the region beyond what it is defined by its key.
| ['wrapper'] An HTML element to wrap the region contents in. (We
|   recommend doing this in your template file.)
| ['attributes'] Multidimensional array defining HTML attributes of the
|   wrapper. (We recommend doing this in your template file.)
|
| Example:
| $template['default']['regions'] = array(
|    'header' => array(
|       'content' => array('<h1>Welcome</h1>','<p>Hello World</p>'),
|       'name' => 'Page Header',
|       'wrapper' => '<div>',
|       'attributes' => array('id' => 'header', 'class' => 'clearfix')
|    )
| );
|
*/

/*
|--------------------------------------------------------------------------
| Default Template Configuration (adjust this or create your own)
|--------------------------------------------------------------------------
*/

// Template for intro:
$template['intro']['template'] = 'template/template_controller';
$template['intro']['template_dir'] = 'template';
$template['intro']['template_module'] = 'intro';
$template['intro']['template_name'] = 'coleo';
$template['intro']['template_file'] = 'intro_template';
$template['intro']['regions'] = array(
   'logo',
   'breadcrumb',
   'header',
   'entry',
   'sub_entry',
   'search_form',
   'rand_entry',
   'archives',
   'category',
   'gallery',
   'contribute',
   'footer',
);
$template['intro']['parser'] = 'parser';
$template['intro']['parser_method'] = 'parse';
$template['intro']['parse_template'] = FALSE;

// Template for master:
$template['blog']['template'] = 'template/template_controller';
$template['blog']['template_dir'] = 'template';
$template['blog']['template_module'] = 'blog';
$template['blog']['template_name'] = 'newscast';
$template['blog']['template_file'] = 'master_template';
$template['blog']['regions'] = array(
   'logo',
   'breadcrumb',
   'header',
   'slideshow',
   'entry',
   'sub_entry',
   'search_form',
   'rand_entry',
   'archives',
   'category',
   'gallery',
   'contribute',
   'footer',
);
$template['blog']['parser'] = 'parser';
$template['blog']['parser_method'] = 'parse';
$template['blog']['parse_template'] = FALSE;

// Template for single page
$template['single']['template'] = 'template/template_controller';
$template['single']['template_dir'] = 'template';
$template['single']['template_module'] = 'blog';
$template['single']['template_name'] = 'newscast';
$template['single']['template_file'] = 'single_template';
$template['single']['regions'] = array(
   'logo',
   'breadcrumb',
   'slideshow',
   'header',   
   'content', 
   'search_form',
   'rand_entry',
   'archives',
   'category',
   'gallery',
   'comment_list',
   'comment_form',
   'contribute',
);
$template['single']['parser'] = 'parser';
$template['single']['parser_method'] = 'parse';
$template['single']['parse_template'] = FALSE;



// Template for admin:
$template['admin']['template'] = 'template/template_controller';
$template['admin']['template_dir'] = 'template';
$template['admin']['template_module'] = 'admin';
$template['admin']['template_name'] = 'acp';
$template['admin']['template_file'] = 'admin_template';
$template['admin']['regions'] = array(
   'logo',
   'breadcrumb',
   'header',   
   'content',            
);
$template['admin']['parser'] = 'parser';
$template['admin']['parser_method'] = 'parse';
$template['admin']['parse_template'] = FALSE;


// Template for login:
$template['login']['template'] = 'template/template_controller';
$template['login']['template_dir'] = 'template';
$template['login']['template_module'] = 'login';
$template['login']['template_name'] = 'constellation';
$template['login']['template_file'] = 'login_template';
$template['login']['regions'] = array(
   'content',
);
$template['login']['parser'] = 'parser';
$template['login']['parser_method'] = 'parse';
$template['login']['parse_template'] = FALSE;

//template ajax
$template['ajax']['template'] = 'template/ajax_template';
$template['ajax']['regions'] = array(
   'content',
);
$template['ajax']['parser'] = 'parser';
$template['ajax']['parser_method'] = 'parse';
$template['ajax']['parse_template'] = FALSE;
/* End of file template.php */
/* Location: ./system/application/config/template.php */