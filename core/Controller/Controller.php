<?php

namespace Core\Controller;

class Controller
{
    /**
     * @var string $template
     * Layout used, rewrite when you want
     */
    public $template = 'layout';


    public function view($view, $variables = [])
    {
        ob_start();
        extract($variables);
        require_once($this->formatter($view, 'path_views'));
        $content = ob_get_clean();
        require_once($this->formatter($this->template, 'path_layouts'));
    }

    protected function formatter(string $view, string $conf): string
    {
        return \Core\Service\Config::getConfig($conf) . str_replace([
                '.',
                '\\',
                '/',
                '@',
            ], DIRECTORY_SEPARATOR, $view) . '.php';
    }
}
