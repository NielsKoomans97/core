<?php

namespace App\Core;

class ConfigTool
{
    public string $cssPath = $_SERVER['DOCUMENT_ROOT'] . '/../resources/config/css.json';

    public function SpoofCss()
    {
        $css = [];
        $css[] = 'css/app.css';
        $css[] = 'css/fonts.css';

        file_put_contents($this->cssPath, json_encode($css));
    }

    public static function HeaderCss()
    {
        $cssPath = $_SERVER['DOCUMENT_ROOT'] . '/../resources/config/css.json';
        $css = json_decode(file_get_contents($cssPath));
        $html = '';

        foreach ($css as $stylesheet) {
            $html .= '<link rel="stylesheet" href="' . $stylesheet . '">\n';
        }

        return $html;
    }
}
