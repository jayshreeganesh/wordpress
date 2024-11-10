<?php
/**
 * Plugin Name: Custom Contact Widget
 * Description: A widget to display contact information.
 * Version: 1.0
 * Author: Your Name
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Register the widget
function register_custom_contact_widget() {
    register_widget( 'Custom_Contact_Widget' );
}
add_action( 'widgets_init', 'register_custom_contact_widget' );

// Define the widget class
class Custom_Contact_Widget extends WP_Widget {

    // Setup the widget name, description, etc.
    public function __construct() {
        parent::__construct(
            'custom_contact_widget',  // Base ID
            __('Custom Contact Widget', 'text_domain'),  // Name
            array( 'description' => __( 'A widget to display contact information.', 'text_domain' ) )
        );
    }

    // Output the widget content on the front end
    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        // Display the widget title if defined
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }

        // Display contact info
        echo '<p>' . esc_html( $instance['contact_name'] ) . '</p>';
        echo '<p>' . esc_html( $instance['contact_email'] ) . '</p>';
        echo '<p>' . esc_html( $instance['contact_phone'] ) . '</p>';

        echo $args['after_widget'];
    }

    // Widget backend form for the admin area
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Contact Us', 'text_domain' );
        $contact_name = ! empty( $instance['contact_name'] ) ? $instance['contact_name'] : '';
        $contact_email = ! empty( $instance['contact_email'] ) ? $instance['contact_email'] : '';
        $contact_phone = ! empty( $instance['contact_phone'] ) ? $instance['contact_phone'] : '';
        ?>

        <!-- Title Field -->
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>

        <!-- Contact Name Field -->
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'contact_name' ) ); ?>"><?php _e( 'Contact Name:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'contact_name' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'contact_name' ) ); ?>" type="text" value="<?php echo esc_attr( $contact_name ); ?>">
        </p>

        <!-- Contact Email Field -->
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'contact_email' ) ); ?>"><?php _e( 'Contact Email:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'contact_email' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'contact_email' ) ); ?>" type="email" value="<?php echo esc_attr( $contact_email ); ?>">
        </p>

        <!-- Contact Phone Field -->
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'contact_phone' ) ); ?>"><?php _e( 'Contact Phone:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'contact_phone' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'contact_phone' ) ); ?>" type="text" value="<?php echo esc_attr( $contact_phone ); ?>">
        </p>

        <?php
    }

    // Update widget settings
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = sanitize_text_field( $new_instance['title'] );
        $instance['contact_name'] = sanitize_text_field( $new_instance['contact_name'] );
        $instance['contact_email'] = sanitize_email( $new_instance['contact_email'] );
        $instance['contact_phone'] = sanitize_text_field( $new_instance['contact_phone'] );

        return $instance;
    }
}
