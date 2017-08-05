<?php

class ShellCommand implements Command
{
    protected $command;

    /**
     * ShellCommand constructor.
     * @param $command
     */
    public function __construct($command)
    {
        $this->command = $command;
    }

    /**
     * Execute specified command
     */
    public function execute()
    {
        $this->executeCommand($this->command);
    }

    /**
     * The core executable helper
     * @param $command
     * @throws CommandException
     */
    private function executeCommand($command)
    {
        $tmp = array();

        /*
         * Below command runs synchronously, but it can handle errors.
         * This approach is not ideal for batch processing.
         */
        exec($command.' 2>&1', $tmp, $return_code); // Execute the command

        /*
         * The below approach is usually helpful if you're trying to batch
         * process many files since it runs asynchronously, you don't want to
         * wait for them to finish processing and don't need confirmation
         * regarding each having been processed.
         */
        //exec($command.' > /dev/null 2>/dev/null &', $tmp, $return_code);
        if ($return_code !== 0) {
            throw new CommandException(trim(implode("\n", $tmp)) . "\n");
        }
    }
}