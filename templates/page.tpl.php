<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<div class="fluid-container wrapper">
  <?php /*
  <?php if ($is_front): ?>
    <section class="main-page-landing full-single-page clearfix">
      <a href="<?php print $base_path;?>" class="logo">
        <?php if ($logo): ?>
          <img src="<?php print $logo; ?>"/>
        <?php endif; ?>
      </a>
      <?php if ($site_slogan): ?>
        <div class="slogan"><?php print $site_slogan; ?></div>
      <?php endif; ?>
      <div class="social-links">
        <div class="link-wrapper clearfix"> 
          <div class="twitter">
            <a href="<?php print theme_get_setting('social-twitter') ;?>"><i class="fa fa-twitter"></i></a>
          </div>
          <div class="facebook">
            <a href="<?php print theme_get_setting('social-facebook') ;?>"><i class="fa fa-facebook"></i></a>
          </div>
          <div class="google">
            <a href="<?php print theme_get_setting('social-google') ;?>"><i class="fa fa-google-plus"></i></a>
          </div>
        </div>
      </div>
        <a href="#nav" class="read-more btn btn-outline-inverse btn-lg"><?php print t("Read More") ;?></a> 
    </section>
  <?php else: ?>
  */ ?>
    <header class="header container">
      <div class="logo col-md-4">
        <a href="<?php print $front_page;?>">
          <?php if ($logo): ?>
            <img src="<?php print $logo; ?>"/>
          <?php endif; ?>
          <?php if ($site_name): ?>
            <span class="site-name"><?php print $site_name; ?></span>
          <?php endif; ?>
        </a>
      </div> 
      <div class="search-box-header col-md-4">
        <?php print render($search_box);?>
      </div>
        <div class="social-links col-md-4">
          <div class="link-wrapper clearfix"> 
            <div class="twitter">
              <a href="<?php print theme_get_setting('social-twitter') ;?>"><i class="fa fa-twitter"></i></a>
            </div>
            <div class="facebook">
              <a href="<?php print theme_get_setting('social-facebook') ;?>"><i class="fa fa-facebook"></i></a>
            </div>
            <div class="google">
              <a href="<?php print theme_get_setting('social-google') ;?>"><i class="fa fa-google-plus"></i></a>
            </div>
          </div>
      </div>
    </header>
  <?php //endif;?>
    <section id="nav" class="main-menu clearfix">
      <nav class="nav-bar container clearfix">
        <div class="site-name">
          <?php if ($site_name): ?>
            <?php print $site_name; ?>
          <?php endif; ?>
        </div>
        <div class="main-menu">
          <?php if ($main_menu_tree): ?>
            <?php print drupal_render($main_menu_tree); ?>
          <?php endif; ?>
        </div>
      </nav>
    </section>
    <section id="mobile-nav" class="container clearfix">
      <nav class="mobile-nav clearfix">
        <div class="mobile-main-menu">
          <div class="navbar-header">
              <a class="navbar-brand" href="#" data-toggle="collapse"><?php print t('Navigation');?></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
          </div>
          <?php if ($main_menu_tree): ?>
            <?php print render($main_menu_tree); ?>
          <?php endif; ?>
        </div>
      </nav>
    </section>
    <section class="container">
      <?php if ($is_front) : ?>
        <div class="slideshow" style="position:relative">
        <div id='front-slider' class='swipe'>
            <div class='swipe-wrap'>
              <div>
                <a href="<?php print $slideshow['first']['link'] ?>">
                  <img style='max-width:100%' src="<?php print $slideshow['first']['src'] ;?>" />
                </a>
              </div>
              <div>
                <a href="<?php print $slideshow['second']['link'] ?>">
                  <img style='max-width:100%' src="<?php print $slideshow['second']['src'] ;?>" />
                </a>
              </div>
              <div>
                <a href="<?php print $slideshow['third']['link'] ?>">
                  <img style='max-width:100%' src="<?php print $slideshow['third']['src'] ;?>" />
                </a>
              </div>
            </div>
        </div>
        <div class="slide-controller">
              <span>1</span>
              <span>2</span>
              <span>3</span>
        </div>
        </div>
        <div class="tri clearfix">
          <div class="col-sm-4 speed guranttee">
            <span></span>
            <p>All orders are processed and shipped in a timely fashion</p>
          </div>
          <div class="col-sm-4 quality guranttee">
            <span></span>
            <p>High quality manufacturing and full inspection during production</p>
          </div>
          <div class="col-sm-4 service guranttee">
            <span></span>
            <p>Professional sales and service team ready for your every question and inquiry</p>
          </div>
        </div>
      <?php endif; ?>
      <?php if ($page['sidebar_first']||$page['sidebar_second']) {
          $page_column_number=3;
        } else {
          $page_column_number=0;
        } ?>
        <section class="content content-wrapper col-md-<?php print 12-$page_column_number;?> col-md-push-<?php print $page_column_number;?>">
          <?php if ($messages): ?>
            <div class="alert alert-warning" role="alert">
              <?php print render($messages); ?>
            </div>
          <?php endif; ?>

          <?php if(!$is_front) : ?>
              <?php print render($breadcrumb); ?>
          <?php endif; ?>
          <?php print render($page['hightlighted']); ?>
          <?php if ($title): ?>
            <?php print render($title_prefix); ?>
            <h1 class="content-title"><?php print $title;?></h1>
            <?php print render($title_suffix); ?>
          <?php endif ; ?>
          <?php print render($page['content']); ?>
        </section>
        <?php if ($page['sidebar_first']): ?>
          <aside role="complementary" class="col-md-<?php print $page_column_number;?> col-md-pull-<?php print 12-$page_column_number;?> left-sidebar">
            <?php print render($page['sidebar_first']); ?>
            <?php print render($page['sidebar_second']); ?>
          </aside>
        <?php endif ;?>
      </section>
      <footer class="footer">
        <div class="foot container">
          <?php $footer_column_count=(int) $page['footer_first']+(int) $page['footer_second']+(int) $page['footer_third'];
            $footer_column_count==0?$footer_column_count=0:$footer_column_count=12/$footer_column_count;
          ?>
          <?php if ($page['footer_first']): ?>
            <div class="col-sm-<?php print $footer_column_count ; ?>">
              <?php print render($page['footer_first']); ?>
            </div>
          <?php endif ;?>
          <?php if ($page['footer_second']): ?>
            <div class="col-sm-<?php print $footer_column_count ; ?>">
              <?php print render($page['footer_second']); ?>
            </div>
          <?php endif ;?>
          <?php if ($page['footer_third']): ?>
            <div class="col-sm-<?php print $footer_column_count ; ?>">
              <?php print render($page['footer_third']); ?>
            </div>
          <?php endif ;?>
        </div>
      </footer>
      <footer class="foot message clearfix">
        <div class="container">
          <?php if($page['footer']):?>
            <?php print render($page['footer']); ?>
          <?php else: ?>
            <div class="col-sm-6 float-left drupal">Powered By <a href="http://www.drupal.org">Drupal</a></div>
            <div style="text-align:right" class="col-sm-6 float-right themer">Themed By <a href="http://www.frankdai.com">Frank Dai</a></div>
          <?php endif; ?>
        </div>
      </footer>     
</div>
