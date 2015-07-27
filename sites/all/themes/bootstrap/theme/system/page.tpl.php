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
<header id="header" >
  <nav class="navbar navbar-default navbar-fixed-top"  id="tf-menu">
    <div class="container">
      <div class="row">
        <div class="navbar-header ">
          <button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php print $front_page; ?>"  target="_self" class="navbar-brand page-scroll">
            <?php if ($logo || !empty($site_name)): ?>
              <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" />
            <?php endif; ?>
          </a>
        </div> <!-- navabr-header -->

        <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
          <div class="collapse navbar-collapse clearfix" id="bs-example-navbar-collapse-1" role="navigation">
            <nav role="navigation">
              <?php if (!empty($primary_nav)): ?>
                <?php print render($primary_nav); ?>
              <?php endif; ?>
            </nav>
          </div>
        <?php endif; ?>
      </div> <!-- row end -->
    </div> <!-- container end -->
  </nav> <!-- nav end -->
</header>

<section id="about-us" class="contact-inner-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="header-desc text-center">
          <div class="header-content">
            <?php if (!empty($title)): ?>
              <h3 class="big-title"><?php print $title; ?></h3>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php print $messages; ?>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="col-md-12 padb40"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
    </div>
    <div class="row">
      <?php if (!empty($page['sidebar_first'])): ?>
        <div class="col-sm-5 text-left">
          <?php print render($page['sidebar_first']); ?>
        </div>  <!-- /#sidebar-first -->
      <?php endif; ?>
      <div class="col-md-12">
        <?php print render($page['content']);?>
      </div>
    </div>
    <?php if (!empty($page['content_bottom'])): ?>
      <?php print render($page['content_bottom']); ?>
    <?php endif; ?>
  </div>
</section>

<!-- Client section start -->
<?php if (!empty($page['footer_top'])): ?>
  <section id="client">
    <div class="container">
        <?php print render($page['footer_top']); ?>
    </div>
  </section>  
<?php endif; ?>

<footer id="footer">
  <div class="container">
    <div class="row">
      <?php print render($page['footer']); ?>
      </div>
  </div>
</footer>
