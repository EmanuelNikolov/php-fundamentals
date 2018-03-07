<?php

class DateModifier
{
    private $dateStart;
    private $dateEnd;
    private $dateDiff;

    public function __construct(string $startDate, string $endDate)
    {
//      $this->dateStart = DateTime::createFromFormat("Y m d", $startDate);
//      $this->dateEnd = DateTime::createFromFormat("Y m d", $endDate);
        $this->dateStart = new DateTime(str_replace(" ", "", $startDate));
        $this->dateEnd = new DateTime(str_replace(" ", "", $endDate));
    }

    public function calculateDiff(): void
    {
        $this->dateDiff = $this->dateStart->diff($this->dateEnd);
    }

    public function __toString()
    {
        return strval($this->dateDiff->days);
    }
}

$dateMod = new DateModifier(trim(fgets(STDIN)), trim(fgets(STDIN)));
$dateMod->calculateDiff();
echo $dateMod;