<?php

interface CheckInterface
{
    /**
     * Run the check.
     */
    public function run();

    /**
     * Get check id.
     */
    public function id();
}
