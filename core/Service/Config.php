<?php

namespace Core\Service;

/**
 * Class Static Config
 * @package Core\Service
 */
class Config
{
    /**
     * @var string $directory
     * Directory
     */
    private static $directory = 'config';

    /**
     * @var  $settings
     * All config in array
     */
    private static $settings;

    /**
     * @param string|null $key
     * @return string
     * Get value from config directory
     */
    public static function getConfig(string $key = null): string
    {
        if (!is_null($key)) {
            if (is_null(self::$settings)) {
                self::$settings = self::merge_config();
            }
            return self::$settings[$key];
        }
        return false;
    }

    /**
     * @return array $result
     * merge all php files
     */
    private static function merge_config()
    {
        $configs = glob(ROOT . DIRECTORY_SEPARATOR . self::$directory . DIRECTORY_SEPARATOR . '*.php');
        $result  = [];
        foreach ($configs as $conf) {
            $c = include $conf;
            array_walk($c, function ($v, $k) use (&$result) {
                $result[$k] = $v;
            });
        }
        return $result;
    }
}
