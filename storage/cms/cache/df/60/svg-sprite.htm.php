<?php 
use Cms\Classes\Theme;
class Cms5b22872c1d792061788439_3f372d3aa5045c159d7923c52765e792Class extends \Cms\Classes\PartialCode
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
