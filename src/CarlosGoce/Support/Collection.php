<?php

namespace CarlosGoce\Support;

use CarlosGoce\Support\Exception\NoItemsException;

class Collection implements \Countable
{
    private $items = array();

    /**
     * @return int
     */
    public function count()
    {
        return count($this->items);
    }

    public function add($element)
    {
        $this->items[] = $element;
    }

    public function addMultiple()
    {
        $elements = func_get_args();

        if (count($elements) === 0) {
            throw new NoItemsException();
        }


        foreach ($elements as $element) {
            $this->items[] = $element;
        }
    }
}
