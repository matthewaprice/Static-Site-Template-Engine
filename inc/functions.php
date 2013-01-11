<?php
/**
 * set up some globals
 */
$PAGE_ARRAY = array(
	'home','about','contact'
);

$URI = $_SERVER['REQUEST_URI'];
$PAGE_TO_SERVE = preg_replace( '/\//', '', $URI );
define( 'PAGE_TO_SERVE', $PAGE_TO_SERVE ); // Get current page slug
 
function display_header() {

	global $PAGE_ARRAY;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Static Website Template Engine | Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php load_css(); ?>

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="/img/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="/img/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Static Template Engine Demo</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
				<?php foreach ( $PAGE_ARRAY as $page ) : ?>
				<li<?php echo ( PAGE_TO_SERVE == $page ) ? ' class="active"' : ''; ?>><a href="<?php echo ( $page == 'home' ) ? '/' : '/' . $page . '/'; ?>"><?php echo ucfirst( $page ); ?></a></li>
				<?php endforeach; ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<?php
}

function display_footer() {
	
	load_javascript();
	?>
      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->
	</body>
</html>
<?php
}

function load_css() {

	$css = array(
		'/css/bootstrap.css',
		'/css/bootstrap-responsive.css',
	);
	?>
	<link id="template-styles" rel="stylesheet" media="all" href="/inc/min/index.php?f=<?php echo implode( ',', $css ); ?>">
	<?php
	
}

function load_javascript() {
	
	$javascript = array( 
		'/js/jquery.js',
		'/js/bootstrap.js',
	);
	?><script id="template-scripts" src="/inc/min/index.php?f=<?php echo implode( ',', $javascript ); ?>"></script>
	<?php
}
?>