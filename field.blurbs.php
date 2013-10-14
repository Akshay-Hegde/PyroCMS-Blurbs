<?php

/**
 * Blurbs field type
 *
 * A custom field type for PyroCMS that provides a list of title and body blurbs
 *
 * @package Addons\Field Types
 * @author  Adam Boxall
 * @license MIT License
 * @link http://github.com/AdamBoxall/BlurbFieldType
 */
class Field_blurbs
{
    public $field_type_slug = 'blurbs';
    public $db_col_type = 'text';
    public $version = '1.0.0';
    public $author = array(
        'name' => 'Adam Boxall',
        'url' => 'http://adamboxall.com'
    );

    public function event()
    {
        $this->CI->type->add_js('blurbs', 'entry.js');
        $this->CI->type->add_css('blurbs', 'entry.css');
    }

    public function form_output($data)
    {
        $viewData = array(
            'formSlug' => $data['form_slug'],
            'items' => (!empty($data['value']))
                ? unserialize($data['value'])
                : null
        );

        return $this->CI->type->load_view($this->field_type_slug, 'form', $viewData, true);
    }

    public function pre_save($input)
    {
        return serialize($input);
    }

    public function pre_output($data)
    {
        return unserialize($data);
    }
}
