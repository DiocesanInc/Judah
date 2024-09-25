<?php

function acf_news()
{
    return array(
        array(
            'key' => 'field_619e4b8e20523',
            'label' => 'News',
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
			'key' => 'field_6386748903f9b',
			'label' => 'Heading',
			'name' => 'news_heading',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '*Max 25 characters',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => 25,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
        array(
            'key' => 'field_61ead174d187a',
            'label' => 'News Category',
            'name' => 'news_category',
            'type' => 'taxonomy',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'taxonomy' => 'category',
            'field_type' => 'select',
            'allow_null' => 1,
            'add_term' => 0,
            'save_terms' => 0,
            'load_terms' => 0,
            'return_format' => 'id',
            'multiple' => 0,
        ),
    );
}