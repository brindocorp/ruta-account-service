<?php namespace App\Bootstrap;

/**
 * GoogleApp.php
 *
 * @author  michaelcurry
 */
use Laravel\Lumen\Application;
use Monolog\Handler\SyslogHandler;
use Monolog\Logger;

/**
 * Class GoogleApp
 *
 * @package App
 */
class GoogleApp extends Application
{
    /**
     * Get the Monolog handler for the application.
     *
     * @return \Monolog\Handler\AbstractHandler
     */
    protected function getMonologHandler()
    {
        return new SyslogHandler('intranet', 'user', Logger::DEBUG, false, LOG_PID);
    }
}