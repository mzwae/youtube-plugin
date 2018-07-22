<?php

/**
 * Adds Youtube_Subs widget.
 */
class Youtube_subs_Widget extends WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'youtubesubs_widget', // Base ID
            esc_html__('YouTube Subs', 'yts_domain'), // Name
            array( 'description' => esc_html__('A Widget to display number of YouTube subscribers', 'yts_domain'), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if (! empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // Widget Content Output
        // echo esc_html__('Hello, World!', 'yts_domain');
        echo "Hellow from YTS widget";

        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance)
    {
        $title = ! empty($instance['title']) ? $instance['title'] : esc_html__('New title', 'yts_domain'); ?>
		<p>
  		<label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
        <?php esc_attr_e('Title:', 'yts_domain'); ?>
      </label>
  		<input
      class="widefat"
      id="<?=esc_attr($this->get_field_id('title'));?>"
      name="<?= esc_attr($this->get_field_name('title'));?>"
      type="text"
      value="<?=esc_attr($title);?>">
		</p>
		<?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (! empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';

        return $instance;
    }
} // class Foo_Widget