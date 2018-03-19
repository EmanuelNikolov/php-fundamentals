<?php

namespace SmartphoneModels;


interface Browsable
{

    public function browse(string $URL): string;
}