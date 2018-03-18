<?php

namespace chovek;


interface Birthtable
{

    public function setBirthday(string $birthday);

    public function getBirthday(): string;
}