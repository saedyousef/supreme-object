<?php

namespace Saedyousef\SupremeObject\Contracts;

interface Arrayable
{

    /**
     * Converts the objet into an Array.
     *
     * @return array
     */
    public function toArray(): array;
}