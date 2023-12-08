<?php

declare(strict_types=1);
namespace DesignPattern\Behavior\Command;
class HelperActionCommand{
    const ACTION_COMMAND_NO_ACTION = 0;
    const ACTION_COMMAND_PRINT = 1;
    const ACTION_COMMAND_DATA_PROCESS = 2;
    const ACTION_COMMAND_SEND_MAIL = 3;
}