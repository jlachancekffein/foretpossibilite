<?php 
use RainLab\Translate\Classes\Translator;
class Cms5a33f3d226e03831098809_a4cb707fd81c5c1a49718653245d6e63Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['pageClass'] = 'page-home';
    //$this['pageKeywords'] = 'forêt québec, parc quebec, industrie forestière quebec, arbres du québec';

    $this->translator = Translator::instance();
    $locale = $this->translator->getLocale();

    if ($locale == "fr") {
        $this["pageTitle"] = "Regroupement forestier du Québec";
        $this["pageDescription"] = "Si la conservation de la nature et du territoire forestier du Québec vous tient à coeur, le Collectif pour une forêt durable vous offre une panoplie d'informations sur les forêts du Québec.";
        $this["pageKeywords"] = "";
    } else if ($locale == "en") {
        $this["pageTitle"] = "Quebec's forest organization";
        $this["pageDescription"] = "If you care about Quebec's nature and forest territory conservation, the Collectif pour une forêt durable gives you a wide array of informations about Quebec's forests.";
        $this["pageKeywords"] = "";
    }


}
}
