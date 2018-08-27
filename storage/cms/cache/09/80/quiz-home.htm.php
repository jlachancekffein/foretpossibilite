<?php 
use RainLab\Translate\Classes\Translator;
class Cms5a340116402dd701964356_766161132e378f15ea536be41d40f0e5Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['pageClass'] = 'page-quiz-home';

    $this->translator = Translator::instance();
    $locale = $this->translator->getLocale();

    if ($locale == "fr") {
        $this["pageTitle"] = "Quiz sur la sylviculture";
        $this["pageDescription"] = "Vérifiez votre niveau de connaissance de nos forêts : leurs bienfaits, leur exploitation, l'aménagement durable du territoire et les produits de la transformation des arbres.";
        $this["pageKeywords"] = "";
    } else if ($locale == "en") {
        $this["pageTitle"] = "Silviculture quiz";
        $this["pageDescription"] = "Test your knowledge about our forests : their benefits, their exploitation, the sustainable management of the territory and wood processing products.";
        $this["pageKeywords"] = "";
    }
}
}
