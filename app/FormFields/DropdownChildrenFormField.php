<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class DropdownChildrenFormField extends AbstractHandler
{
    protected $codename = 'dropdown-children';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('formfields.dropdown-children', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}