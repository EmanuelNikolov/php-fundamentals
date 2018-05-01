<?php

namespace DTO;


class Category
{

    protected $id;

    protected $name;

    /**
     * @var \DTO\Topic[]|\Generator
     */
    private $topics = [];

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @return \DTO\Topic[]|\Generator
     */
    public function getTopics()
    {
        return $this->topics;
    }

    public function setTopics(callable $topics)
    {
        $this->topics = $topics();
    }
}