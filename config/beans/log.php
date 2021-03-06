<?php
/**
 * @contact huangzhwork@gmail.com
 * @license https://github.com/huangzhhui/github-bot/blob/master/LICENSE
 */

return [
    'noticeHandler' => [
        'class' => \Swoft\Log\FileHandler::class,
        'logFile' => '@runtime/logs/notice.log',
        'formatter' => '${lineFormatter}',
        'levels' => [
            \Swoft\Log\Logger::NOTICE,
            \Swoft\Log\Logger::INFO,
            \Swoft\Log\Logger::TRACE,
        ],
    ],
    'applicationHandler' => [
        'class' => \Swoft\Log\FileHandler::class,
        'logFile' => '@runtime/logs/error.log',
        'formatter' => '${lineFormatter}',
        'levels' => [
            \Swoft\Log\Logger::ERROR,
            \Swoft\Log\Logger::WARNING,
        ],
    ],
    'stdoutHandler' => [
        'class' => \App\Logger\StdoutHandler::class,
        'formatter' => '${lineFormatter}',
        'levels' => [
            \Swoft\Log\Logger::DEBUG,
        ],
    ],
    'logger' => [
        'name' => APP_NAME,
        'enable' => env('LOG_ENABLE', false),
        'flushInterval' => 100,
        'flushRequest' => true,
        'handlers' => [
            '${noticeHandler}',
            '${applicationHandler}',
            '${stdoutHandler}',
        ],
    ],
];
