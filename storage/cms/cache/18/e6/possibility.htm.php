<?php 
use RainLab\Translate\Classes\Translator;
class Cms5b634da415508010170191_3a7a464bf69cb57fd9a1ca960fdd4346Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['pageClass'] = 'page-possibility';

    $this->translator = Translator::instance();
    $locale = $this->translator->getLocale();

    if ($locale == "fr") {
        $this["pageTitle"] = "Regroupement forestier du Québec";
        $this["pageDescription"] = "Si la conservation de la nature et du territoire forestier du Québec vous tient à coeur, le Collectif pour une forêt durable vous offre une panoplie d'informations sur les forêts du Québec.";
        $this["pageKeywords"] = "";
    } else if ($locale == "en") {
        $this["pageTitle"] = "Quebec's forest biodiversity";
        $this["pageDescription"] = "Discover Quebec's natural forest, its biodiversity and the forest management plan implemented to preserve our renewable resources and so on.";
        $this["pageKeywords"] = "";
    }
    
    $this['slug'] = $this->param('slug');

    /**
     * Mapping fr/en slugs with class to add in wrapper tag (layout/default.htm)
     */
    $this['backgrounds'] = array(
        'healthy-resource' => array (
           'fr' => 'foret-naturelle-du-quebec',
           'en' => 'quebec-forest-biodiversity',
        ),

        'practices-evolution' => array (
           'fr' => 'amenagement-forestier-au-quebec',
           'en' => 'quebec-forestry-practices',
        ),

        'share-territory' => array (
           'fr' => 'biodiversite-des-territoires-forestiers',
           'en' => 'biodiversity-of-forest-territories',
        ),

        'wood-second-life' => array (
           'fr' => 'developpement-durable-de-la-foret',
           'en' => 'sustainable-development-of-the-forest',
        ),

        'responsabilities' => array (
           'fr' => 'foret-certifiee-au-quebec',
           'en' => 'quebec-certified-forest',
        ),

        'climate-change' => array (
           'fr' => 'forets-anti-pollution-du-quebec',
           'en' => 'quebec-anti-pollution-forests',
        )
    );

    // Search which key fit the optional slug
    $keys = array_keys($this['backgrounds']);
    // Slugs for indexes navigation
    $slugs = [];
    for($i = 0; $i < count($this['backgrounds']); $i++)
    {
        $background = $keys[$i];
        foreach($this['backgrounds'][$keys[$i]] as $key => $value)
        {
            if($value == $this['slug']) {
                $this['previousSlug'] = ($i > 0) ? $this['backgrounds'][$keys[$i-1]][$this['locale']] : '#';
                $this['nextSlug'] = ($i < count($this['backgrounds'])-1) ? $this['backgrounds'][$keys[$i+1]][$this['locale']] : '#';

                $this['possibility'] = $keys[$i];
            }
        }

        array_push($slugs, $this['backgrounds'][$keys[$i]][$this['locale']]);
        $this['slugList'] = $slugs;
    }

    /**
     * Set meta title
     */
    if ($locale == "fr") {
        $possibility_titles = array(
            'healthy-resource' => "Forêt naturelle du Québec",
            'practices-evolution' => "Aménagement forestier au Québec",
            'share-territory' => "Biodiversité des territoires forestiers",
            'wood-second-life' => "Développement durable de la forêt",
            'responsabilities' => "Forêts certifiées au Québec",
            'climate-change' => "Forêts anti-pollution du Québec"
        );
    } else if ($locale == "en") {
        $possibility_titles = array(
            'healthy-resource' => "Quebec's forest biodiversity",
            'practices-evolution' => "Quebec's forestry practices",
            'share-territory' => "Biodiversity of forest territories",
            'wood-second-life' => "Sustainable development of the forest",
            'responsabilities' => "Quebec's certified forest",
            'climate-change' => "Quebec's anti-pollution forests"
        );
    };
    $this['pageTitle'] = $possibility_titles[ $this['possibility'] ];



    /**
     * Set meta description
     */
    if ($locale == "fr") {
        $possibility_descriptions = array(
            'healthy-resource' => "Découvrez la forêt naturelle du Québec, sa biodiversité et l'aménagement forestier mis en place pour la préservation de nos ressources renouvelables.",
            'practices-evolution' => "Grâce à la mise en place du plan d'aménagement forestier, il n'y a pas de déforestation dans les forêts publiques du Québec.",
            'share-territory' => "Les forêts publiques québécoises répresentent 90 % du total de la forêt.  Ce sont des territoires partagés où la biodiversité de l'écosystème est surprenant.",
            'wood-second-life' => "La transformation des arbres nous procure de multiples produits du bois, entre autres les copeaux de bois, le papier cartonné, la biomasse et le bois de grange.",
            'responsabilities' => "Les forêts publiques sont certifiées au Québec. Cette reconnaissance supplémentaire à la Loi sur l'aménagement durable du territoire forestier assure leur préservation.",
            'climate-change' => "Découvrez comment l'immense capacité d'absorption du CO2 des arbres aide dans notre lutte contre le réchauffement climatique et l'effet de serre de notre planète."
        );
    } else if ($locale == "en") {
        $possibility_descriptions = array(
            'healthy-resource' => "Discover Quebec's natural forest, its biodiversity and the forest management plan implemented to preserve our renewable resources and so on.",
            'practices-evolution' => "Thanks to the implementation of the forest management plan, there is no deforestation in Quebec's public forests.",
            'share-territory' => "Quebec's public forests represent 90% of the forest territory. They are shared territories of amazing ecosystem biodiversity.",
            'wood-second-life' => "Tree processing provides us with multiple wood products such as wood chips, cardboard, biomass and barn wood.",
            'responsabilities' => "Quebec's public forests are certified. This recognition adds to the Sustainable Forest Development Act and guarantees their preservation.",
            'climate-change' => "Discover how the trees' huge carbon storage helps to fight global warming and greenhouse effect of our planet."
        );
    };
    $this['pageDescription'] = $possibility_descriptions[ $this['possibility'] ];




    /**
     * Set page title
     */
    $possibility_keywords = array(
        'healthy-resource' => "forêt naturelle, territoire forestier, biodiversité",
        'practices-evolution' => "déforestation, plantation arbres",
        'share-territory' => "territoire forestier, régénération naturelle, foret privée, faune",
        'wood-second-life' => "recyclage bois, bois recyclé, maison en bois, construction bois",
        'responsabilities' => "gestion des ressources, gestion forestière, parcs nationaux québec",
        'climate-change' => "la protection de l environnement, arbre co2, arbre oxygène, gaz à effets de serre, changements climatiques, les avantages de la foret"
    );
    //$this['pageKeywords'] = $possibility_keywords[ $this['possibility'] ];
}
}
