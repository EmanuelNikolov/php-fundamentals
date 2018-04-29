<?php

namespace DTO;


class Topic
{

    private $id;

    private $name;

    private $category_name;

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

    public function getCategoryName()
    {
        return $this->category_name;
    }
}