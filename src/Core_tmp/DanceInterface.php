<?php

namespace Goldqiwi\Core;

interface DanceInterface
{
    /**
     * @param string $name
     * @param string $motion
     */
    public function __construct(string $name, string $motion);

    /**
     * Возвращает название танца
     * @return string
     */
    public function getName() : string;

    /**
     * Возвращает движения в танце
     * @return string
     */
    public function getMotion() : string;
}