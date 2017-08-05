<?php

/**
 * Interface Command is used to execute commands.
 * Child/Concrete class is responsible for the behaviour
 * of the execute feature.
 */
interface Command
{
    public function execute();
}