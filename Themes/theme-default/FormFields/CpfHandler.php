<?php

namespace Themes\ThemeDefault\FormFields;

use Versatile\Core\Components\Fields\AbstractHandler;

class CpfHandler extends AbstractHandler
{
    protected $codename = 'cpf';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('v-theme::fields.form.cpf', [
            'row'             => $row,
            'options'         => $options,
            'dataType'        => $dataType,
            'dataTypeContent' => $dataTypeContent,
        ]);
    }
}
