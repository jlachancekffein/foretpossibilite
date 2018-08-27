<?php 
use Cms\Classes\Theme;
class Cms5b634bbb7cf32872122932_a6fde4b9f491d7e5243861a2ca2339d8Class extends \Cms\Classes\PartialCode
{
public function onStart()
{
    $this['SVG_SPRITE'] = '';

    $icons_path = Theme::getActiveTheme()->getPath() . '/assets/public/images/icons.svg';
    if ( file_exists($icons_path) ) {
        $this['SVG_SPRITE'] = file_get_contents($icons_path);
    }
}
}
