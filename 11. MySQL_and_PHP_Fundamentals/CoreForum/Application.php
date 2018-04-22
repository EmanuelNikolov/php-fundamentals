<?php

namespace CoreForum;


class Application
{

    const FRONTEND_FOLDER = 'frontend';

    public function loadTemplate($templateName, $data = null)
    {
        include self::FRONTEND_FOLDER
          . DIRECTORY_SEPARATOR
          . $templateName
          . '.php';
    }
}