<?php

class Playlist
{
    const DATA_DELIMITER = ";";

    /**
     * @var Song1[]
     */
    private $songs = [];

    public function __construct()
    {
        $countSongs = (int)trim(fgets(STDIN));

        while ($countSongs--) {
            $songData = explode(self::DATA_DELIMITER, trim(fgets(STDIN)));

            try {
                $song = new Song1(...$songData);
                $this->songs[] = $song;
                echo $song . PHP_EOL;
            } catch (InvalidSongException $e) {
                echo $e->getMessage() . PHP_EOL;
            }
        }
    }

    private function playlistLenght(): string {
        $seconds = 0;

        foreach ($this->songs as $song) {
                $seconds += $song->getLenght();
        }

        return gmdate("H\h i\m s\s", $seconds);
    }

    public function __toString()
    {
        return "Songs added: " . count($this->songs) . PHP_EOL
            . "Playlist length: " . $this->playlistLenght();
    }
}