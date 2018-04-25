<?php

namespace DTO;


class Category
{

    private $id;

    private $name;

    /**
     * @var \DTO\Topic[]
     */
    private $topics = [];

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return \DTO\Topic[]
     */
    public function getTopics(): array
    {
        return $this->topics;
    }
}