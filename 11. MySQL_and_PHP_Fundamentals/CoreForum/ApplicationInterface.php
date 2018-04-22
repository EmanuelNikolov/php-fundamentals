<?php

namespace CoreForum;


interface ApplicationInterface
{

    public function loadTemplate(string $name, $data = null);
}