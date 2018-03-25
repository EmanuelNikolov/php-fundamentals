<?php

namespace InhabitantsModels;


interface Buyer
{

    public function BuyFood(): void;

    public function getFood(): int;
}