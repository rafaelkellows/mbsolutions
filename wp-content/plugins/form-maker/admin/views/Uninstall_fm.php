<?php

class FMViewUninstall_fm extends FMAdminView {
  /**
   * FMViewUninstall_fm constructor.
   */
  public function __construct() {
    wp_enqueue_style(WDFMInstance(self::PLUGIN)->handle_prefix . '-tables');
    wp_enqueue_script(WDFMInstance(self::PLUGIN)->handle_prefix . '-admin');
    if (WDFMInstance(self::PLUGIN)->is_free) {
      wp_enqueue_style(WDFMInstance(self::PLUGIN)->handle_prefix . '-deactivate-css');
      wp_enqueue_script(WDFMInstance(self::PLUGIN)->handle_prefix . '-deactivate-popup');
    }
  }

  /**
   * Display page.
   *
   * @param $params
   */
  public function display($params = array()) {
    ob_start();
    echo $this->body($params);
    // Pass the content to form.
    $form_attr = array(
      'id' => WDFMInstance(self::PLUGIN)->prefix . '_uninstall',
      'name' => WDFMInstance(self::PLUGIN)->prefix . '_uninstall',
      'class' => WDFMInstance(self::PLUGIN)->prefix . '_uninstall wd-form',
      'action' => add_query_arg(array( 'page' => 'uninstall' . WDFMInstance(self::PLUGIN)->menu_postfix ), 'admin.php'),
    );
    echo $this->form(ob_get_clean(), $form_attr);
  }

  /**
   * Generate page body.
   *
   * @param $params
   */
  public function body( $params = array() ) {
    $deactivate_url = add_query_arg(array(
                                      'action' => 'deactivate',
                                      'plugin' => WDFMInstance(self::PLUGIN)->main_file,
                                    ), admin_url('plugins.php'));
    $deactivate_url = wp_nonce_url($deactivate_url, 'deactivate-plugin_' . WDFMInstance(self::PLUGIN)->main_file);
    echo $this->title(array(
                        'title' => $params['page_title'],
                        'title_class' => 'wd-header',
                        'add_new_button' => FALSE,
                      ));

    if ( isset($params['deactivate']) && $params['deactivate'] == TRUE ) {
      ?>
      <p><strong><?php echo sprintf(__("%s to Finish the Uninstallation and %s will be Deactivated Automatically.", WDFMInstance(self::PLUGIN)->prefix), '<a href="' . $deactivate_url . '" class="bwg_deactivate_link" data-uninstall="1">' . __("Click Here", WDFMInstance(self::PLUGIN)->prefix) . '</a>', WDFMInstance(self::PLUGIN)->nicename); ?></strong></p>
      <?php

      return;
    }

    ?>
    <div class="goodbye-text">
      <?php
      $support_team = '<a href="https://web-dorado.com/support/contact-us.html" target="_blank">' . __('support team', WDFMInstance(self::PLUGIN)->prefix) . '</a>';
      $contact_us = '<a href="https://web-dorado.com/support/contact-us.html" target="_blank">' . __('Contact us', WDFMInstance(self::PLUGIN)->prefix) . '</a>';
      echo sprintf(__("Before uninstalling the plugin, please Contact our %s. We'll do our best to help you out with your issue. We value each and every user and value what's right for our users in everything we do.<br />
      However, if anyway you have made a decision to uninstall the plugin, please take a minute to %s and tell what you didn't like for our plugins further improvement and development. Thank you !!!", WDFMInstance(self::PLUGIN)->prefix), $support_team, $contact_us); ?>
    </div>
    <p>
      <?php echo sprintf(__("Deactivating %s plugin does not remove any data that may have been created. To completely remove this plugin, you can uninstall it here.", WDFMInstance(self::PLUGIN)->prefix), WDFMInstance(self::PLUGIN)->nicename); ?>
    </p>
    <p class="wd-red">
      <strong><?php _e("WARNING:", WDFMInstance(self::PLUGIN)->prefix); ?></strong>
      <?php _e("Once uninstalled, this can't be undone. You should use a Database Backup plugin of WordPress to back up all the data first.", WDFMInstance(self::PLUGIN)->prefix); ?>
    </p>
    <p class="wd-red">
      <strong><?php _e("The following Database Tables will be deleted:", WDFMInstance(self::PLUGIN)->prefix); ?></strong>
    </p>
    <table class="widefat">
      <thead>
      <tr>
        <th><?php _e("Database Tables", WDFMInstance(self::PLUGIN)->prefix); ?></th>
      </tr>
      </thead>
      <tr>
        <td>
          <?php
          foreach ( $params['tables'] as $table ) {
            ?>
            <p><?php echo $table; ?></p>
            <?php
          }
          foreach ( $params['addons'] as $addon => $addon_name ) {
            if ( defined($addon) && is_plugin_active(constant($addon)) ) {
              if ( is_array($addon_name) ) {
                foreach ( $addon_name as $ad_name ) {
                  echo '<p>' . WDFMInstance(self::PLUGIN)->prefix . 'formmaker_' . $ad_name . '</p>';
                }
              }
              else {
                echo '<p>' . WDFMInstance(self::PLUGIN)->prefix . 'formmaker_' . $addon_name . '</p>';
              }
            }
          }
          ?>
        </td>
      </tr>
    </table>
    <p class="wd-text-center">
      <?php echo sprintf(__("Do you really want to uninstall %s?", WDFMInstance(self::PLUGIN)->prefix), WDFMInstance(self::PLUGIN)->nicename); ?>
    </p>
    <p class="wd-text-center">
      <input type="checkbox" name="Form Maker" id="check_yes" value="yes" />
      <label for="check_yes"><?php _e("Yes", WDFMInstance(self::PLUGIN)->prefix); ?></label>
    </p>
    <p class="wd-text-center">
      <?php
      $buttons = array(
        'save' => array(
          'title' => __('UNINSTALL', WDFMInstance(self::PLUGIN)->prefix),
          'value' => 'uninstall',
          'onclick' => 'if (check_yes.checked && confirm(\'' . addslashes(sprintf(__("You are About to Uninstall %s from WordPress. This Action Is Not Reversible.", WDFMInstance(self::PLUGIN)->prefix), WDFMInstance(self::PLUGIN)->nicename)) . '\')) { fm_set_input_value(\'task\', \'uninstall\'); } else {return false;}',
          'class' => 'button-primary',
        ),
      );
      echo $this->buttons($buttons, TRUE);
      ?>
    </p>
    <?php
  }
}
