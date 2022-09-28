<?php
/**
 *
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area . This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin .
 *
 * Plugin Name:       CNAlpsWeather
 * Description:       Minimalistic weather widget
 * Version:           1.0
 * Author:            cnalps
 */

/**
 * Minimalistic weather widget
 */
class CNAlpsWeather extends WP_Widget
{
    /**
     * Set up the widget name and description.
     */
    public function __construct()
    {
        $options = array(
            'classname' => 'CNAlpsWeather',
            'description' => 'Minimalistic weather widget'
        );
        parent::__construct('CNAlpsWeather', 'CNAlps Weather Widget', $options);
    }

    /**
     * The widget form (for the backend)
     */
    public function form($instance)
    {
        // print_r($instance);
        $city = $instance['city'] ?? 'Crest';
        $country = $instance['country'] ?? 'France';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('city'); ?>">Ville: </label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id('city'); ?>"
                   name="<?php echo $this->get_field_name('city'); ?>" value="<?php echo esc_attr($city); ?>"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('country'); ?>">Pays: </label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id('country'); ?>"
                   name="<?php echo $this->get_field_name('country'); ?>" value="<?php echo esc_attr($country); ?>"/>
        </p>
        <?php
    }

    /**
     * Update widget settings
     */
    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['city'] = isset($new_instance['city']) ? wp_strip_all_tags($new_instance['city']) : '';
        $instance['country'] = isset($new_instance['country']) ? wp_strip_all_tags($new_instance['country']) : '';
        return $instance;
    }

    /**
     * Display the widget
     */
    public function widget($args, $instance)
    {
        // WordPress core before_widget hook (always include)
        echo $args['before_widget'];
        $city = $instance['city'] ?? 'Crest';
        $country = $instance['country'] ?? 'France';
        echo '
        <div class="cnalps-weather-widget" data-city="'. $city .'" data-country="'. $country .'">
    		<div class="weather_title">Météo à '. $city .'</div>
    	</div>';
        echo $args['after_widget'];
    }
}

/**
 * Register the widget
 */
function cnalps_register_weather_widget() {
    register_widget( 'CNAlpsWeather' );
}
add_action( 'widgets_init', 'cnalps_register_weather_widget' );
