<?php

function acf_banner()
{
    return array(
        array(
			'key' => 'field_6182f6e2311d4',
			'label' => 'Banner',
			'name' => '',
			'aria-label' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_6182f6f9311d5',
			'label' => 'Heading',
			'name' => 'banner_heading',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '*Max 30 characters',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 30,
		),
		array(
			'key' => 'field_619e6495384ec',
			'label' => 'Background Image',
			'name' => 'stats_background_image',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_61a8f8226cbf0',
			'label' => 'Mass Times',
			'name' => '',
			'aria-label' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'message' => '*Mass Times can be set in <a href="/wp-admin/admin.php?page=theme-general-settings">Theme Settings > Theme Settings > Mass Times</a>',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_62434adb17370',
			'label' => 'Link',
			'name' => 'mass_times_link',
			'aria-label' => '',
			'type' => 'link',
			'instructions' => '*Link to the full schedule',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
		),
    );
}