<?php

namespace MilitaryModels\Interfaces;


interface IMission
{

    public function getCodeName(): string;

    public function setState(string $state): void;

    public function getState(): string;

    public function completeMission(): void;
}