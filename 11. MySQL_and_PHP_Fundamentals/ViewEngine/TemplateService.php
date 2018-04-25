<?php

namespace ViewEngine;


class TemplateService
{

    const TEMPLATE_FOLDER = 'frontend';

    public function render($templateName, $data = null)
    {
        include self::TEMPLATE_FOLDER
          . DIRECTORY_SEPARATOR
          . $templateName
          . '.php';
    }
}