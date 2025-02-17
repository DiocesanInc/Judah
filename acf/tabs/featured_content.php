<?php

function acf_featured_content()
{

    return array(
        array(
            'key' => 'field_6182f613311cf',
            'label' => 'Featured Content',
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
            'key' => 'field_646789941347b',
            'label' => 'Heading',
            'name' => 'featured_content_heading',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '*Max 30 characters',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '20',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'maxlength' => 30,
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_63f3a6b08b9fc',
            'label' => 'Background Color',
            'name' => 'featured_content_items_background_color',
            'aria-label' => '',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '20',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'var(--clr-primary)' => 'Primary',
                'var(--clr-secondary)' => 'Secondary',
                'var(--clr-tertiary)' => 'Tertiary',
                'var(--clr-quaternary)' => 'Quaternary',
                'white' => 'White',
                'black' => 'Black',
                'transparent' => 'Transparent',
            ),
            'default_value' => false,
            'return_format' => 'value',
            'multiple' => 0,
            'allow_null' => 0,
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
        ),
        array(
            'key' => 'field_6182f61f311d0',
            'label' => 'Featured Content Items',
            'name' => 'featured_content_items',
            'aria-label' => '',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => 'field_6182f642311d1',
            'min' => 0,
            'max' => 6,
            'layout' => 'block',
            'button_label' => 'Add Row',
            'sub_fields' => array(
                array(
                    'key' => 'field_6182f6b9311d3',
                    'label' => 'Image',
                    'name' => 'image',
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
                    'parent_repeater' => 'field_6182f61f311d0',
                ),
                array(
                    'key' => 'field_6196abe21f65f',
                    'label' => 'Link',
                    'name' => 'link',
                    'aria-label' => '',
                    'type' => 'link',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '25',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                    'parent_repeater' => 'field_6182f61f311d0',
                ),
            ),
            'rows_per_page' => 20,
        ),

    );
}