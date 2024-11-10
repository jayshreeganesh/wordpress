<?php
/**
 * Plugin Name: Custom Greeting Widget
 * Description: A custom widget that displays a personalized greeting message.
 * Version: 1.0
 * Author: Your Name
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Register the widget
function register_custom_greeting_widget() {
    register_widget( 'Custom_Greeting_Widget' );
}
add_action( 'widgets_init', 'register_custom_greeting_widget' );

// Define the Custom Greeting Widget class
class Custom_Greeting_Widget extends WP_Widget {

    // Constructor method
    public function __construct() {
        parent::__construct(
            'custom_greeting_widget', // Base ID
            __('Custom Greeting Widget', 'text_domain'), // Name
            array( 'description' => __( 'A widget to display a custom greeting', 'text_domain' ), ) // Args
        );
    }

    // Front-end display of the widget
    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        // Check if the title is set
        $title = apply_filters( 'widget_title', $instance['title'] );
        $greeting = ! empty( $instance['greeting'] ) ? $instance['greeting'] : __('Hello, World!', 'text_domain');

        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        // Display the greeting message
        echo '<p>' . esc_html( $greeting ) . '</p>';

        echo $args['after_widget'];
    }

    // Widget back-end form (for the admin panel)
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __('Welcome', 'text_domain');
        $greeting = ! empty( $instance['greeting'] ) ? $instance['greeting'] : __('Hello, World!', 'text_domain');
        ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'greeting' ) ); ?>"><?php _e( 'Greeting:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'greeting' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'greeting' ) ); ?>" type="text" value="<?php echo esc_attr( $greeting ); ?>">
        </p>

        <?php
    }

    // Updating widget settings
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = sanitize_text_field( $new_instance['title'] );
        $instance['greeting'] = sanitize_text_field( $new_instance['greeting'] );

        return $instance;
    }
}
