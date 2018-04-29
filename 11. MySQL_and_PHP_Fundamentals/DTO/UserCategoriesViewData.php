<?php

namespace DTO;


class UserCategoriesViewData
{

    /**
     * @var \DTO\Category[]|\Generator
     */
    private $categories;

    /**
     * @return \DTO\Category[]|\Generator
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param callable $categories
     */
    public function setCategories(callable $categories)
    {
        $this->categories = $categories();
    }
}