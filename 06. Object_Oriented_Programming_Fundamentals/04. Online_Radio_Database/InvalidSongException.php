<?php

class InvalidSongException extends Exception
{
    public function __construct(string $message = "Invalid song.", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}

class InvalidArtistNameException extends InvalidSongException
{
    public function __construct(
        string $message = "Artist name should be between 3 and 20 symbols.",
        int $code = 0,
        Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

class InvalidSongNameException extends InvalidSongException
{
    public function __construct(
        string $message = "Song name should be between 3 and 30 symbols.",
        int $code = 0,
        Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

class InvalidSongLengthException extends InvalidSongException
{
    public function __construct(string $message = "Invalid song length.", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

class InvalidSongMinutesException extends InvalidSongLengthException
{
    public function __construct(
        string $message = "Song minutes should be between 0 and 14.",
        int $code = 0,
        Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

class InvalidSongSecondsException extends InvalidSongLengthException
{
    public function __construct(
        string $message = "Song seconds should be between 0 and 59.",
        int $code = 0,
        Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}