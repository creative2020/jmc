  <!--Footer-->
  <div id="footer">
    <div class="copyright">
      <?php _e('&copy;','flexx'); echo ' '.date('Y').' '; _e('','flexx'); ?> JMC Incorporated., ALL RIGHTS RESERVED.
    </div>
    <?php wp_page_menu('title_li=&sort_column=menu_order&sort_order=desc&show_home=1&exclude=323') ?>
  </div>
  <div class="clear"></div>
</div>
<?php wp_footer(); ?>
</body>
</html>
