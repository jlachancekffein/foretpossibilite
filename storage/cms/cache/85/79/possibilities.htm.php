<?php 
use RainLab\Translate\Classes\Translator;
class Cms5b634d977e16f048636374_59be8560e4d25cfc38b38c3f522dd6acClass extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['pageClass'] = 'page-possibilities';

    $this->translator = Translator::instance();
    $locale = $this->translator->getLocale();

    if ($locale == "fr") {
        $this["pageTitle"] = "Conservation des forêts et de la nature";
        $this["pageDescription"] = "Trouvez toute l'information que vous cherchez sur notre écosystème forestier, la Loi sur l’aménagement durable du territoire forestier, la transformation des arbres de nos forêts et plus.";
        $this["pageKeywords"] = "";
    } else if ($locale == "en") {
        $this["pageTitle"] = "Forest and nature conservation in Quebec";
        $this["pageDescription"] = "All the information you are looking for about our forest ecosystem, the Sustainable Forest Development Act, forest management and more.";
        $this["pageKeywords"] = "";
    }
}
}
