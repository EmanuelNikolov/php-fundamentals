<?php

class Playlist
{
    const DATA_DELIMITER = ";";

    /**
     * @var Song1[]
     */
    private $songs = [];
    private $playlistLen = 0;

    public function __construct()
    {
        $countSongs = (int)trim(fgets(STDIN));

        while ($countSongs--) {
            $songData = explode(self::DATA_DELIMITER, trim(fgets(STDIN)));

            try {
                $song = new Song1(...$songData);
                $this->playlistLen += $song->getLenght();
                echo $song . PHP_EOL;
                $this->songs[] = $song;
            } catch (InvalidSongException $e) {
                echo $e->getMessage() . PHP_EOL;
            }
        }
    }

    private function formatPlaylistLen(int $playlistLen): string
    {
        return gmdate("H\h i\m s\s", $playlistLen);
    }

    public function __toString()
    {
        return "Songs added: " . count($this->songs) . PHP_EOL
            . "Playlist length: " . $this->formatPlaylistLen($this->playlistLen);
    }
}