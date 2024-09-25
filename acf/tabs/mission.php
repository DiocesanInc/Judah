<?php

function acf_mission()
{
    return  array(
        array(
            'key' => 'field_6182f5c8311cc',
            'label' => 'Mission',
            'name' => '',
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
            'key' => 'field_6182f5e7311cd',
            'label' => 'Mission Header',
            'name' => 'mission_header',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '33',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_623a1c6e4f924',
            'label' => 'Links',
            'name' => 'mission_links',
            'aria-label' => '',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '33',
                'class' => '',
                'id' => '',
            ),
            'layout' => 'table',
            'pagination' => 0,
            'min' => 0,
            'max' => 2,
            'collapsed' => '',
            'button_label' => 'Add Row',
            'rows_per_page' => 20,
            'sub_fields' => array(
                array(
                    'key' => 'field_63877cf0a7022',
                    'label' => 'link',
                    'name' => 'link',
                    'aria-label' => '',
                    'type' => 'link',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                    'parent_repeater' => 'field_623a1c6e4f924',
                ),
            ),
        ),
        array(
            'key' => 'field_6182f608311ce',
            'label' => 'Mission Content',
            'name' => 'mission_content',
            'aria-label' => '',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '33',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => 450,
            'rows' => '',
            'placeholder' => '',
            'new_lines' => '',
        ),
        array(
            'key' => 'field_623a114b91882',
            'label' => 'Image',
            'name' => 'mission_background_image',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
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
            'key' => 'field_6526ca5292c67',
            'label' => 'Image Overlay',
            'name' => 'mission_image_overlay',
            'aria-label' => '',
            'type' => 'select',
            'instructions' => '*add a dark overlay to the image to make text more readable on lighter images.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'none' => 'none',
                'very-light' => 'very light',
                'light' => 'light',
                'medium' => 'medium',
                'heavy' => 'heavy',
                'very-heavy' => 'very heavy',
            ),
            'default_value' => false,
            'return_format' => 'value',
            'multiple' => 0,
            'allow_null' => 0,
            'ui' => 1,
            'ajax' => 0,
            'placeholder' => '',
        ),
    );
}
