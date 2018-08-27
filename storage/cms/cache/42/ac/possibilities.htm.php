<?php 
use RainLab\Translate\Classes\Translator;
class Cms5a341f70b4720705683052_069a0692982ce36ace84be55e5451c9fClass extends \Cms\Classes\PageCode
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
