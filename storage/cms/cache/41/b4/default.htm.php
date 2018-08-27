<?php 
use RainLab\Translate\Classes\Translator;
class Cms5b634b9e1b219128784926_faec63aac7c470dc698e4c2959efcd5dClass extends \Cms\Classes\LayoutCode
{
public function onStart()
{
    $this['is_prod'] = preg_match('/uneforetdepossibilites\.com/', $_SERVER['SERVER_NAME']);
    $this['is_staging'] = preg_match('/lesevades\.com/', $_SERVER['SERVER_NAME']);
    $this['is_dev'] = !($this['is_prod'] || $this['is_staging']);

    $this->translator = Translator::instance();
    $this['locale'] = $this->translator->getLocale();

    $this['url_partenaires'] = "http://partenaires.uneforetdepossibilites.com/fr";
    $this['url_collectif'] = "http://partenaires.uneforetdepossibilites.com/fr/partenaires";

    // We can set $this['pageTitle'] from page templates or partials to
    // override the default page titles
    //if ( ! isset($this['pageTitle']) ) {
    //    $this['pageTitle'] = $this->page->title;
    //}
}
}
