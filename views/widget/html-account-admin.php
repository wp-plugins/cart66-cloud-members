<p>
  <label for="<?php echo $widget->get_field_id('title'); ?>"><?php _e('Title', 'cart66'); ?>:
    <input class="widefat" 
           id="<?php echo $widget->get_field_id('title'); ?>" 
           name="<?php echo $widget->get_field_name('title'); ?>" 
           type="text" 
           value="<?php echo $title; ?>" />
  </label>
</p>

<p>
  <label for="<?php echo $widget->get_field_id('logged_out_message'); ?>"><?php _e('Logged out message', 'cart66'); ?>:
    <input class="widefat" 
           id="<?php echo $widget->get_field_id('logged_out_message'); ?>" 
           name="<?php echo $widget->get_field_name('logged_out_message'); ?>" 
           type="text" 
           value="<?php echo $logged_out_message; ?>" />
  </label>
</p>

<p>
  <label for="<?php echo $widget->get_field_id('logged_in_message'); ?>"><?php _e('Logged in message', 'cart66'); ?>:
    <input class="widefat" 
           id="<?php echo $widget->get_field_id('logged_in_message'); ?>" 
           name="<?php echo $widget->get_field_name('logged_in_message'); ?>" 
           type="text" 
           value="<?php echo $logged_in_message; ?>" />
  </label>
</p>

<p>
  <label for="<?php echo $widget->get_field_id('show_links'); ?>"><?php _e('Show links to', 'cart66'); ?>:</label>
  <ul>
    <li>
      <input id="<?php echo $widget->get_field_id('show_link_history'); ?>" 
             name="<?php echo $widget->get_field_name('show_link_history'); ?>" 
             type="checkbox" 
             value="1" <?php echo $history; ?> /> <?php _e('Order History', 'cart66'); ?>
    </li>
    <li>
      <input id="<?php echo $widget->get_field_id('show_link_profile'); ?>"
             name="<?php echo $widget->get_field_name('show_link_profile'); ?>" 
             type="checkbox" 
             value="1" <?php echo $profile; ?> /> <?php _e('Profile', 'cart66'); ?>
    </li>
  </ul>
</p>

