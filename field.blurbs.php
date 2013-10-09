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
        $ci = get_instance();

        $ci->type->add_js('blurbs', 'entry.js');
    }

    public function form_output($data)
    {
        return (!$data['value'])
            ? $this->getCleanForm($data['form_slug'])
            : $this->getUsedForm($data);
    }

    protected function getCleanForm($formSlug)
    {
        ob_start();
        require __DIR__ . '/views/form.php';
        return ob_get_clean();
    }

    protected function getUsedForm(array &$data)
    {
        $formSlug = $data['form_slug'];
        $items = unserialize($data['value']);

        ob_start();
        require __DIR__ . '/views/form.php';
        return ob_get_clean();
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