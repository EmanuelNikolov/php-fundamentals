<?php

namespace chovek;


interface Identifiable
{

    public function setId(string $id);

    public function getId(): string;
}