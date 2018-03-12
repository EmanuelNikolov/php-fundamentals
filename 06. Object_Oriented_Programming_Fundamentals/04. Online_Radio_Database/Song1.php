<?php

class Song1
{
    const TIME_DELIMITER = ":";

    private $artist;
    private $name;
    private $lenght;

    public function __construct(string $artist, string $name, string $lenght)
    {
        $this->setArtist($artist);
        $this->setName($name);
        $this->setLenght($lenght);
    }

    public function getArtist(): string
    {
        return $this->artist;
    }

    private function setArtist(string $artist): void
    {
        if (!$this->rangeValidation($this->stringLenght($artist), 3, 20)) {
            throw new InvalidArtistNameException();
        }

        $this->artist = $artist;
    }

    public function getName(): string
    {
        return $this->name;
    }

    private function setName(string $name): void
    {
        if (!$this->rangeValidation($this->stringLenght($name), 3, 20)) {
            throw new InvalidSongNameException();
        }

        $this->name = $name;
    }

    public function getLenght(): int
    {
        return $this->lenght;
    }

    private function setLenght(string $lenght): void
    {
        $time = explode(self::TIME_DELIMITER, $lenght);
        $minutes = (int)$time[0];
        $seconds = (int)$time[1];



        if (!$this->rangeValidation($minutes, 0, 14)) {
            throw new InvalidSongMinutesException();
        }

        if (!$this->rangeValidation($seconds, 0, 59)) {
        throw new InvalidSongSecondsException();
    }

        $this->lenght = ($minutes * 60) + $seconds;
    }

    private function rangeValidation(int $input, int $start, int $end): bool
    {
        return $input >= $start && $input <= $end;
    }

    public function __toString()
    {
        return "Song added.";
    }

    private function stringLenght(string $string): int
    {
        return strlen(str_replace(" ", "", $string));
    }
}