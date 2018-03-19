<?php

namespace SmartphoneModels;


interface CallingInterface
{

    public function call(string $phoneNumber): string;
}