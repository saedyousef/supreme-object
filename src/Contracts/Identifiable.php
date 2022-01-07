<?php

namespace Saedyousef\SupremeObject\Contracts;

interface Identifiable
{

    /**
     * A unique identifier for the Object.
     *
     * @return string|int
     */
    public function getId();
}