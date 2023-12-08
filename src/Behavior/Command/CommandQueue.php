<?php

namespace DesignPattern\Behavior\Command;

class CommandQueue {
    private $queue = [];

    public function addCommand(CommandInterface $command){
        $this->queue[] = $command;
    }

    public function processCommands(){
        while (! empty($this->queue)){
            $command = array_shift($this->queue);
            $command->execute();

            $this->writeLog($command);
        }
    }

    public function writeLog(CommandInterface $command){

        if ($command instanceof CommandLogInterface){
            $log = "tests/Behavior/Command/command_pattern_log.txt";
            $date = date("Y-m-d H:i:s") . ': ';
            $class = $date . 'Class: ' .   get_class($command) ."\n";
            $data = $date . json_encode($command->toLog()) ."\n";
            file_put_contents($log, $class, FILE_APPEND);
            file_put_contents($log, $data, FILE_APPEND);
        }
    }

}