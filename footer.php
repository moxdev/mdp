<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MD_Partitions
 */

?>

	</div><!-- #content -->

  <?php if ( is_page_template('front-page.php') && function_exists( 'md_partitions_frontpage_sidebar' ) ) {
    md_partitions_frontpage_sidebar();
  } ?>

  <?php if ( is_page_template('front-page.php') && function_exists( 'md_partitions_frontpage_highlights' ) ) {
    md_partitions_frontpage_highlights();
  } ?>

  <?php if ( is_page_template('page-drill-page-sidebar.php') && function_exists( 'md_partitions_product_section' ) ) {
      md_partitions_product_section();
  } ?>

  <?php if ( is_page_template('page-projects.php') && function_exists( 'md_partitions_project_listing' ) ) {
      md_partitions_project_listing();
  } ?>

  <?php if ( is_page_template('page-projects.php') && function_exists( 'md_partitions_projects_other_section' ) ) {
      md_partitions_projects_other_section();
  } ?>

  <?php if ( is_page_template('page-about.php') && function_exists( 'md_partitions_certifications_section' ) ) {
      md_partitions_certifications_section();
  } ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
      <div class="footer-message">

        <?php if ( function_exists( 'get_field' ) ) {
          $ft_msg = get_field( 'footer_message', 'option' );

            echo $ft_msg;

        } ?>

      </div><!-- footer-message -->

      <?php if ( function_exists( 'get_field' ) ) {

        $name    = get_field( 'company_name', 'option' );
        $address = get_field( 'address', 'option' );
        $city    = get_field( 'city', 'option' );
        $state   = get_field( 'state', 'option' );
        $zip     = get_field( 'zip', 'option' );
        $phone   = get_field( 'phone', 'option' );
        $fax     = get_field( 'fax', 'option' ); ?>

        <div class="contact-information">
          <div itemscope itemtype="http://schema.org/Organization">
            <span itemprop="name" class="company-name"><?php echo esc_html( $name ); ?></span>
            <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="streetAddress"><?php echo esc_html( $address ); ?>, </span>
                <span itemprop="addressLocality"><?php echo esc_html( $city ); ?>, </span>
                <span itemprop="addressRegion"><?php echo esc_html( $state ); ?></span>
                <span itemprop="postalCode"><?php echo esc_html( $zip ); ?></span>
            </div>
              P: <span itemprop="telephone"><a href="tel:<?php echo esc_html( $phone ); ?>"><?php echo esc_html( $phone ); ?></a></span>&nbsp;
              F: <span itemprop="faxNumber"><?php echo esc_html( $fax ); ?></span>
          </div>
        </div>

      <?php } ?>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
