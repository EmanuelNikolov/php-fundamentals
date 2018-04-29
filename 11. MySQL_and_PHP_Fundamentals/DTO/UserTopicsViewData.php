<?php

namespace DTO;


class UserTopicsViewData
{

    /**
     * @var \DTO\Topic[]|\Generator
     */
    private $topics;

    /**
     * @var \DTO\Category
     */
    private $fromCategory;

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

    public function setFromCategory(Category $category): void
    {
        $this->fromCategory = $category;
    }

    public function getFromCategory(): Category
    {
        return $this->fromCategory;
    }
}