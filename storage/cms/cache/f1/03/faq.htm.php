<?php 
use Cifq\Faq\Models\FaqQuestion;
use RainLab\Translate\Classes\Translator;
class Cms5a33f3ec75abe685949785_61c881654258499bfc1f5144ffce4275Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['pageClass'] = 'page-faq';
    
    $this->translator = Translator::instance();
    $locale = $this->translator->getLocale();

    if ($locale == "fr") {
        $this["pageTitle"] = "FAQ sur les forêts et les arbres du Québec";
        $this["pageDescription"] = "Posez toutes les questions qui vous inquiètent par rapport à la manière de protéger nos forêts, les bienfaits de la forêt, leur développement durable, l'effet de serre, etc.";
        $this["pageKeywords"] = "";
    } else if ($locale == "en") {
        $this["pageTitle"] = "FAQ on Quebec's forests and trees";
        $this["pageDescription"] = "Ask any question regarding how to protect our forests, their benefits, their sustainable development, greenhouse effect, etc.";
        $this["pageKeywords"] = "";
    }

    $this['slides'] = [
        [
            'number' => '01',
            'name' => 'Claudette, Sainte-Flavie',
            'title' => 'Qu’en est-il de la survie du caribou face à la coupe forestière et au devoir de conservation de la biodiversité ?',
            'excerpt' => '
                Le caribou forestier est une espèce vulnérable en vertu de la Loi sur les espèces menacées ou vulnérables.
                Les connaissances sur le caribou forestier ont considérablement évolué au cours des dernières années.
            ',
            'more' => true,
            'full' => '
                    Le caribou forestier est une espèce vulnérable en vertu de la Loi sur les espèces menacées ou vulnérables.
                    Les connaissances sur le caribou forestier ont considérablement évolué au cours des dernières années.
                    Ainsi, nous connaissons mieux l’impact que le développement du territoire engendre sur son habitat, notamment celui
                    de l’aménagement forestier. Ces connaissances nous permettent aussi de proposer des adaptations à nos pratiques d’aménagement forestier
                    afin de minimiser l’impact sur le caribou forestier.  C’est ainsi que le Québec s’est doté, en avril 2016, du Plan d’action pour l’aménagement
                    de l’habitat du caribou forestier dans le but de mettre en œuvre une stratégie à long terme pour aménager son habitat. Pour relever ce défi, le
                    plan d’action propose de mettre en œuvre une approche pondérée qui doit  permettre de concentrer la majeure partie des efforts de protection sur les
                    éléments clés de l’habitat, là où les chances de succès sont les meilleures. Des gestes concrets importants ont déjà été posés, tels que la modification de la limite
                    nordique des forêts exploitables et la création de grandes aires protégées pour le caribou. D’autres mesures sont en cours d’implantation, comme la mise en œuvre d’un
                    aménagement forestier adapté à l’habitat du caribou forestier et une stratégie de suivi de sa population.
            ',
        ],

        [
            'number' => '02',
            'name' => 'Céline, La Macaza',
            'title' => '
                Notre forêt est une richesse naturelle et aussi un moteur économique pour nos régions.
                Nous vendons notre bois aux américains et au Québec dans nos Rona, on nous vend des produits chinois de qualité seconde.
                Comment expliquer cette situation?
            ',
            'excerpt' => '
            ',
            'more' => true,
            'full' => '
                Le Québec est un très gros exportateur net de bois d’œuvre. Près de 45 % de sa production prend effectivement
                la direction des États-Unis, 33 % se dirige vers l’Ontario et les Maritimes et 12 % demeure sur le marché domestique (ou local).
                Il n’y a donc pas de place pour les produits étrangers de première transformation comme le 2x4, qu’ils proviennent de la Chine, de l’Europe
                ou même des États-Unis. Le Québec dispose d’une autosuffisance complète pour le bois d’œuvre résineux.

                Ça ne veut pas dire que les produits étrangers sont absents de nos tablettes. Par exemple, les Chinois sont très efficaces
                dans la fabrication de meubles en bois d’essences feuillues (érable, bouleau, chêne, etc.). Comme ils ne possèdent pas la ressource naturelle,
                les entreprises chinoises achètent le bois non transformé et réussissent à fabriquer des meubles et à les réexpédier à très bas prix
                partout dans le monde, notamment en Amérique du Nord et au Québec. Cette situation s’explique essentiellement par les très bas coûts
                de fabrication, notamment les salaires des travailleurs. Ils font donc une concurrence très vive à nos industriels impliqués dans
                la transformation de bois feuillus.

                Le protectionnisme américain constitue donc la plus grande menace au développement économique des communautés qui se sont
                développées autour des ressources forestières. Les produits de 2e et de 3e transformation fabriqués à partir de bois québécois et le
                développement de produits à valeur ajoutée sont une source de diversification qui permet d’envisager une certaine autonomie envers le marché américain.

            ',
        ],
        [
            'number' => '03',
            'name' => 'Stéphanie, Laval',
            'title' => 'Est-ce qu’il y a un problème de déforestation au Québec?',
            'excerpt' => '
                Il n’y a pas de déforestation en forêt publique au Québec. Cela va à l’encontre du régime forestier québécois qui met de l’avant l’aménagement durable. Il ne faut pas confondre la récolte de bois en forêt publique et la déforestation puisque, dans le cas de la récolte, le changement du couvert forestier est temporaire et la forêt repoussera rapidement car la vocation...
            ',
            'more' => true,
            'full' => '
                Il n’y a pas de déforestation en forêt publique au Québec. Cela va à l’encontre du régime forestier québécois qui met de l’avant l’aménagement durable. Il ne faut pas confondre la récolte de bois en forêt publique et la déforestation puisque, dans le cas de la récolte, le changement du couvert forestier est temporaire et la forêt repoussera rapidement car la vocation forestière du territoire est préservée et protégée. Toutes les superficies qui font l’objet de coupes doivent obligatoirement être régénérées. Au Québec, la déforestation se retrouve en milieu urbain, où les boisés forestiers sont transformés en développements domiciliaires ou en parcs industriels. La forêt n’y repoussera pas.
            ',
        ],

        [
            'number' => '04',
            'name' => 'Catherine, Lévis',
            'title' => 'Qu’arrive-t-il au CO2 absorbé par l’arbre lors de sa récolte?',
            'excerpt' => '
                Tant que le carbone reste emmagasiné dans le bois, il n’est pas dans l’atmosphère. C’est un gain pour l’environnement.
                À la fin de sa vie, l’arbre meurt et se décompose. Il libère alors dans l’atmosphère tout le carbone emmagasiné en lui.
                Il devient une source d’émission de carbone...
            ',
            'more' => true,
            'full' => '
                Tant que le carbone reste emmagasiné dans le bois, il n’est pas dans l’atmosphère. C’est un gain pour l’environnement.
                À la fin de sa vie, l’arbre meurt et se décompose. Il libère alors dans l’atmosphère tout le carbone emmagasiné en lui.
                Il devient une source d’émission de carbone et non plus un puits, donc le gain s’annule. Par contre, un arbre mature
                transformé en matériau durable gardera emprisonné en lui le carbone pour longtemps. Dans ce cas, le gain pour
                l’environnement se poursuit.
            ',
        ],
        [
            'number' => '05',
            'name' => 'Pierre, Alma',
            'title' => 'Comment se positionne la forêt québécoise par rapport à la forêt mondiale?',
            'excerpt' => '
                La forêt québécoise se positionne souvent avantageusement par rapport aux forêts du monde à bien des égards.
                Elle est publique, donc accessible à une panoplie d’utilisations sociales; elle a gardé sa biodiversité grâce
                aux règles d’interventions prescrites; elle a conservé son étendue et occupe toujours la moitié de la superficie
                du territoire...
            ',
            'more' => true,
            'full' => '
                La forêt québécoise se positionne souvent avantageusement par rapport aux forêts du monde à bien des égards.
                Elle est publique, donc accessible à une panoplie d’utilisations sociales; elle a gardé sa biodiversité grâce
                aux règles d’interventions prescrites; elle a conservé son étendue et occupe toujours la moitié de la superficie
                du territoire québécois; et encore aujourd’hui, elle permet aux communautés des régions de vivre de la forêt.
                Différentes publications présentent de façon vulgarisée le positionnement de la forêt québécoise à l’échelle mondiale :
                <ul>
                    <li>
                        <a target="_blank" href="http://www.mffp.gouv.qc.ca/publications/forets/chiffres-cles.pdf">Chiffres clés du Québec forestier 2015 (pdf)</a><br>
                        Ce document présente différentes statistiques permettant de comparer la forêt québécoise à travers le monde et les époques.
                    </li>
                    <li>
                        <a target="_blank" href="http://www.mffp.gouv.qc.ca/publications/forets/connaissances/portrait-statistique-2015.pdf">Ressources et industries forestières, portrait statistique édition 2015 (pdf)</a><br>
                        Ce document brosse un portrait statistique succinct de tout le secteur forestier québécois.
                    </li>
                    <li>
                        <a target="_blank" href="http://www.mffp.gouv.qc.ca/publications/forets/comprendre/forets-histoire.pdf">La forêt québécoise – source d’histoire, porteuse d’avenir (pdf)</a><br>
                        Quelques aspects de notre forêt abordés selon quatre grands thèmes : l’histoire, le quotidien, l’environnement et l’économie.
                    </li>
                    <li>
                        <a target="_blank" href="http://www.mffp.gouv.qc.ca/publications/forets/comprendre/gestion-forestiere.pdf">Une gestion forestière rigoureuse et adaptée - Principaux faits saillants (pdf)</a><br>
                        Principaux faits saillants concernant la forêt québécoise et sa gestion, l’aménagement durable des forêts, la forêt boréale, ainsi que les retombées liées aux forêts québécoises (2007).
                    </li>
                    <li>
                        <a target="_blank" href="http://evb.lacsq.org/outils/trousses-et-activites-pedagogiques/forets-du-monde/">Le coffret pédagogique Forêts du monde</a> propose un voyage à la découverte des grandes forêts du monde, dont celles du Canada. Ce coffret comprend 10 fiches thématiques, 6 activités pédagogiques et des outils complémentaires.
                    </li>
                </ul>
            ',
        ],
        [
            'number' => '06',
            'name' => 'Sonia, Pierrefonds',
            'title' => 'Y-a-t-il encore de la coupe à blanc dans les forêts publiques du Québec? ',
            'excerpt' => '
                Non, il n’y a plus de coupe à blanc au Québec depuis 1995. Ce type de coupe a été remplacé principalement par
                la coupe avec protection de la régénération et des sols (CPRS). Ces deux coupes ont en commun la récolte de
                tous les arbres adultes d’une forêt mature composée d’une seule essence. Toutefois, la différence importante...
            ',
            'more' => true,
            'full' => '
                Non, il n’y a plus de coupe à blanc au Québec depuis 1995. Ce type de coupe a été remplacé principalement par
                la coupe avec protection de la régénération et des sols (CPRS). Ces deux coupes ont en commun la récolte de
                tous les arbres adultes d’une forêt mature composée d’une seule essence. Toutefois, la différence importante
                est le changement des techniques de récolte, qui limitent et orientent les déplacements de la machinerie afin
                de protéger les jeunes arbres déjà installés et le sol forestier. Pour en savoir davantage à ce sujet, consultez
                La coupe avec protection de la régénération et des sols (CPRS).
            ',
        ],
        [
            'number' => '07',
            'name' => 'Marc-André, Longueuil',
            'title' => 'Les activités forestières ont-elles des effets sur l’environnement?',
            'excerpt' => '
            Oui, la nature de certaines activités forestières peut modifier l’environnement de façon substantielle. Ces
            activités sont étudiées dans le but de vérifier s’il y a des effets néfastes et, le cas échéant, de trouver
            des moyens pour y remédier. Pour avoir un aperçu de ces moyens, consultez le lien suivant :
            <a target="_blank" href="http://www.mffp.gouv.qc.ca/forets/connaissances/connaissances-activites.jsp">
                Les effets des activités forestières sur l’environnement
            </a>.
            ',
            'more' => false,
        ],
        [
            'number' => '08',
            'name' => 'Thierry, Saint-Donat',
            'title' => 'J’aimerais travailler en forêt au Québec. Où puis-je m’informer?',
            'excerpt' => '
                Plusieurs entreprises exécutent des travaux en forêt. Chacune est responsable de l’embauche de son personnel.
                Pour vous aider dans vos recherches, voici quelques suggestions de sites d’employeurs potentiels...
            ',
            'more' => true,
            'full' => '
                Plusieurs entreprises exécutent des travaux en forêt. Chacune est responsable de l’embauche de son personnel.
                Pour vous aider dans vos recherches, voici quelques suggestions de sites d’employeurs potentiels :
                <ul>
                    <li>
                        Association des entrepreneurs en travaux sylvicoles du Québec (AETSQ) :
                        <a target="_blank" href="http://www.aetsq.qc.ca/?content=membres">AETSQ liste entrepreneurs en travaux sylvicoles</a>
                    </li>
                    <li>
                        Regroupement des sociétés d’aménagement forestier (RESAM) :
                        <a target="_blank" href="http://www.resam.org/groupements-forestiers/">RESAM liste groupements forestiers</a>
                    </li>
                    <li>
                        Fédération québécoise des coopératives forestières :
                        <a target="_blank" href="http://www.fqcf.coop/carriereenforet/">FQCF Carrière et emplois</a>
                    </li>
                    <li>
                        Rexforêt :
                        <a target="_blank" href="http://rexforet.com/carrieres">Rexforêt Carrière et emplois</a>
                    </li>
                    <li>
                        Ordre des ingénieurs forestiers du Québec (OIFQ) :
                        <a target="_blank" href="http://www.oifq.com/pdf/pub/publicite-des-consultants-pratique-privee-2015.pdf">Liste de consultants forestiers</a>
                    </li>
                    <li>
                        Liste des conseillers forestiers disponibles via le site de chaque agence de mise en valeur des forêts privées :
                        <a target="_blank" href="http://www.mffp.gouv.qc.ca/forets/privees/privees-agences-liste-adresses.htm">Agences forêts privées</a>
                    </li>
                </ul>
            ',
        ],
        [
            'number' => '09',
            'name' => 'Marie-Pier, Québec',
            'title' => 'Les pratiques forestières ont-elles évolué?',
            'excerpt' => '
                Depuis le 1er avril 2013, la Loi sur l’aménagement durable du territoire forestier a apporté un lot important de
                changements, par exemple...
            ',
            'more' => true,
            'full' => '
                Depuis le 1er avril 2013, la Loi sur l’aménagement durable du territoire forestier a apporté un lot important de
                changements, par exemple :
                <ul>
                    <li>
                        le Ministère a maintenant la responsabilité de réaliser la
                        <a target="_blank" href="https://www.mffp.gouv.qc.ca/forets/amenagement/amenagement-planification.jsp"> planification des activités d’aménagement forestier</a>
                        sur le territoire de la forêt publique du Québec;
                    </li>
                    <li>
                        la loi prévoit une gestion participative grâce aux <a target="_blank" href="http://www.mffp.gouv.qc.ca/forets/amenagement/amenagement-planification-TLGIRT.jsp">tables locales de gestion intégrée des ressources et du territoire</a>, où les intérêts et les préoccupations des personnes et des organismes concernés par les activités d’aménagement forestier sont entendus et pris en compte;
                    </li>
                    <li>
                        toute personne ou tout organisme peut maintenant acheter des bois issus de la forêt publique en participant
                        aux ventes aux enchères du <a target="_blank" href="https://bmmb.gouv.qc.ca/">Bureau de mise en marché des bois</a>;
                    </li>
                    <li>
                        le Québec privilégie désormais
                        l’<a target="_blank" href="http://www.mffp.gouv.qc.ca/forets/amenagement/amenagement-ecosystemique.jsp">aménagement écosystémique</a>
                        en diminuant les écarts entre la forêt aménagée et la forêt naturelle.
                    </li>
                </ul>
            ',
        ],

    ];

    $this['slidesEN'] = [
        [
            'number' => '01',
            'name' => 'Claudette, Sainte-Flavie',
            'title' => 'How is caribou survival affected by logging and the duty to preserve biodiversity?',
            'excerpt' => '
                The woodland caribou is a vulnerable species under Québec’s Act respecting threatened or vulnerable species. Knowledge of the woodland caribou has developed significantly in recent years.
            ',
            'more' => true,
            'full' => '
                    The woodland caribou is a vulnerable species under Québec’s Act respecting threatened or vulnerable species. Knowledge of the woodland caribou has developed significantly in recent years. For example, we now know more about the impact of land development in general and forest management in particular on caribou habitats. This information also allows us to suggest adjustments to forest management practices in order to minimize their impacts on the woodland caribou. In April 2016, for example, Québec published its Action Plan for Woodland Caribou Habitat Management, with a view to implementing a long-term habitat management strategy. The Action Plan proposes a weighted approach in which most of the protection effort focuses on key habitat elements, where the chance of success is greatest. Significant steps have already been taken, including a change to the northern harvestable forest boundary and the creation of large protected areas for caribou. Other measures are currently being introduced, such as a caribou population monitoring program and the use of forest management methods adjusted to woodland caribou habitats.
            ',
        ],

        [
            'number' => '02',
            'name' => 'Céline, La Macaza',
            'title' => '
                Our forest is a natural asset and also an economic driving force for our regions. We sell our wood to the Americans, while in Québec, in our Rona stores, we are offered lower quality Chinese products.
                How do you explain that?
            ',
            'excerpt' => '
            ',
            'more' => true,
            'full' => '
                Québec is a very large net exporter of lumber. Nearly 45% of the lumber it produces is shipped to the United States, 33% to Ontario and the Maritimes, and 12% is sold on the domestic (or local) market.
                There is therefore no room for foreign primary processing products such as 2 x 4s, whether from China, Europe or even the United States. Québec is completely self-sufficient in softwood lumber.This does not mean that there are no foreign products on our shelves. The Chinese, for instance, are very efficient at manufacturing furniture from hardwoods (maple, birch, oak, etc.). Because they do not have their own natural resource, the Chinese companies buy unprocessed wood, then use it to make furniture and ship it back to countries throughout the world, including North America and Québec, at very low prices. They can do this mainly because of their very low manufacturing and salary costs, and they constitute strong competition for our own companies in the hardwood processing sector. American protectionism is the biggest threat to the economic development of communities that have developed around forest resources. Secondary and tertiary processing products made from Québec wood, and the development of value-added products, offer potential sources of diversification that may allow Québec to become more independent of the American market.
            ',
        ],
        [
            'number' => '03',
            'name' => 'Stéphanie, Laval',
            'title' => 'Is there a deforestation problem in Quebec?',
            'excerpt' => '
                There is no deforestation in Quebec’s public forests. Deforestation is contrary to Quebec’s forest regime. It is important not to confuse logging with deforestation: the change to the forest cover caused by logging is only temporary, and the forest will regrow quickly because the land’s forestry vocation...
            ',
            'more' => true,
            'full' => '
                There is no deforestation in Quebec’s public forests. Deforestation is contrary to Quebec’s forest regime. It is important not to confuse logging with deforestation: the change to the forest cover caused by logging is only temporary, and the forest will regrow quickly because the land’s forestry vocation is protected and maintained. All logged areas must be regenerated. In Quebec, deforestation occurs in some urban areas, where woodlands are converted into residential developments or industrial parks. In these cases, the forest will not regenerate.
            ',
        ],

        [
            'number' => '04',
            'name' => 'Catherine, Lévis',
            'title' => 'What happens to the CO2 absorbed by a tree when it is harvested?',
            'excerpt' => '
                As long as carbon is stored in wood, it is not in the atmosphere. This is positive for the environment. At the end of its life, the tree dies and decomposes, releasing all the carbon it has stored into the atmosphere. In doing so, it becomes a source of carbon emission and not a carbon sink, so the benefit is cancelled out. However, a mature tree that is processed into a durable material continues..
            ',
            'more' => true,
            'full' => '
                As long as carbon is stored in wood, it is not in the atmosphere. This is positive for the environment. At the end of its life, the tree dies and decomposes, releasing all the carbon it has stored into the atmosphere. In doing so, it becomes a source of carbon emission and not a carbon sink, so the benefit is cancelled out. However, a mature tree that is processed into a durable material continues to store carbon over time. In this case, the benefit to the environment is maintained.
            ',
        ],
        [
            'number' => '05',
            'name' => 'Pierre, Alma',
            'title' => 'How does Quebec’s forest compare to forests worldwide?',
            'excerpt' => '
                Quebec’s forest often compares favourably to the world’s forests in many respects. First, it is public and available for a wide variety of social uses; it retains its biodiversity thanks to government regulations; its scale has been preserved and it still covers half of Québec’s total area; and to this day, many regional communities earn a living from the forest. There are many publications that present the comparison in easy-to-understand terms :
            ',
            'more' => true,
            'full' => '
                Quebec’s forest often compares favourably to the world’s forests in many respects. First, it is public and available for a wide variety of social uses; it retains its biodiversity thanks to government regulations; its scale has been preserved and it still covers half of Québec’s total area; and to this day, many regional communities earn a living from the forest. There are many publications that present the comparison in easy-to-understand terms :
                <ul>
                    <li>
                        <a target="_blank" href="http://www.mffp.gouv.qc.ca/publications/forets/chiffres-cles.pdf">Key Figures from Québec’s Forest Sector (pdf)</a><br>
                        This document contains statistics that can be used to compare Quebec’s forest globally and over time.
                    </li>
                    <li>
                        <a target="_blank" href="http://www.mffp.gouv.qc.ca/publications/forets/connaissances/portrait-statistique-2015.pdf">Forestry Resources and Industries: Statistical Portrait, 2015 Edition (pdf)</a><br>
                       This document presents a brief statistical profile of Quebec’s forest sector.
                    </li>
                    <li>
                        <a target="_blank" href="http://www.mffp.gouv.qc.ca/publications/forets/comprendre/forets-histoire.pdf">Quebec’s Forest – Source of History, Hope for the Future (pdf)</a><br>
                        Four aspects of the forest: history, everyday life, environment and economy.
                    </li>
                    <li>
                        <a target="_blank" href="http://www.mffp.gouv.qc.ca/publications/forets/comprendre/gestion-forestiere.pdf">Rigorous and Adaptive Forest Management – Main Highlights (pdf)</a><br>
                       Facts about Quebec’s forest and how it is managed, sustainable forest development, the boreal forest, and the spin-offs it produces.
                    </li>
                    <li>
                        <a target="_blank" href="http://evb.lacsq.org/outils/trousses-et-activites-pedagogiques/forets-du-monde/">The Forêts du monde educational portal</a> (in French only) takes readers on a voyage to discover the world’s great forests, including those in Canada. The portal offers 10 theme-based documents, 6 educational activities and several helpful tools.
                    </li>
                </ul>
            ',
        ],
        [
            'number' => '06',
            'name' => 'Sonia, Pierrefonds',
            'title' => 'Does clear-cutting still take place in Quebec’s public forests?  ',
            'excerpt' => '
                No, there has been no clear-cutting in Quebec since 1995. It has been replaced by cutting with protection of regeneration and soils (CPRS). In both types of cutting, all adult trees are harvested in mature forests composed of a single species. However, there is a major difference...
            ',
            'more' => true,
            'full' => '
                No, there has been no clear-cutting in Quebec since 1995. It has been replaced by cutting with protection of regeneration and soils (CPRS). In both types of cutting, all adult trees are harvested in mature forests composed of a single species. However, there is a major difference in the harvesting techniques used; for example, in CPRS, machinery movements are restricted to protect established saplings. For additional information, see Cutting with protection of regeneration and soils (CPRS).
            ',
        ],
        [
            'number' => '07',
            'name' => 'Marc-André, Longueuil',
            'title' => 'Do forestry activities have an impact on the environment?',
            'excerpt' => '
            Yes, some forestry activities, because of their nature, can substantially change the environment. They are studied carefully to see whether they produce negative effects and, if so, to identify remedial actions. For a brief overview of these actions, see:
            <a target="_blank" href="http://www.mffp.gouv.qc.ca/forets/connaissances/connaissances-activites.jsp">
                Les effets des activités forestières sur l’environnement
            </a> (link available in French only).
            ',
            'more' => false,
        ],
        [
            'number' => '08',
            'name' => 'Thierry, Saint-Donat',
            'title' => 'I would like to work in the forest in Quebec. Where should I go for information?',
            'excerpt' => '
                Plusieurs entreprises exécutent des travaux en forêt. Chacune est responsable de l’embauche de son personnel.
                Pour vous aider dans vos recherches, voici quelques suggestions de sites d’employeurs potentiels...

                There are many companies that work in the forest, and they are all responsible for hiring their own personnel. Here are some websites that may help you in your search...
            ',
            'more' => true,
            'full' => '
                There are many companies that work in the forest, and they are all responsible for hiring their own personnel. Here are some websites that may help you in your search :
                <ul>
                    <li>
                        Association des entrepreneurs en travaux sylvicoles du Québec (AETSQ):
                        <a target="_blank" href="http://www.aetsq.qc.ca/?content=membres">AETSQ liste entrepreneurs en travaux sylvicoles</a>
                    </li>
                    <li>
                        Regroupement des sociétés d\'aménagement forestier (RESAM):
                        <a target="_blank" href="http://www.resam.org/groupements-forestiers/">RESAM liste groupements forestiers</a>
                    </li>
                    <li>
                        Fédération québécoise des coopératives forestières :
                        <a target="_blank" href="http://www.fqcf.coop/carriereenforet/">FQCF Carrière et emplois</a>
                    </li>
                    <li>
                        Rexforêt :
                        <a target="_blank" href="http://rexforet.com/carrieres">Rexforêt Carrière et emplois</a>
                    </li>
                    <li>
                        Ordre des ingénieurs forestiers du Québec (OIFQ) :
                        <a target="_blank" href="http://www.oifq.com/pdf/pub/publicite-des-consultants-pratique-privee-2015.pdf">Liste de consultants forestiers</a>
                    </li>
                    <li>
                        A list of forestry consultants is available on the website of each private forest development agency :
                        <a target="_blank" href="http://www.mffp.gouv.qc.ca/forets/privees/privees-agences-liste-adresses.htm">Agences forêts privées</a>
                    </li>
                </ul>
            ',
        ],
        [
            'number' => '09',
            'name' => 'Marie-Pier, Québec',
            'title' => 'Have forestry practices evolved over time?',
            'excerpt' => '
                The Sustainable Forest Development Act, which came into force on April 1 2013, introduced a number of important changes. For example...
            ',
            'more' => true,
            'full' => '
                The Sustainable Forest Development Act, which came into force on April 1 2013, introduced a number of important changes. For example:
                <ul>
                    <li>
                        The Department is now responsible for 
                        <a target="_blank" href="https://www.mffp.gouv.qc.ca/forets/amenagement/amenagement-planification.jsp"> planning forest management</a>
                        in Quebec’s public forests.
                    </li>
                    <li>
                        The Act provides for participatory management through local integrated land and resource management panels, where the interests and concerns of the individuals and organizations involved in forest management activities are heard and taken into account.
                    </li>
                    <li>
                        Individuals and organizations can now buy wood from the public forest through auctions conducted by the <a target="_blank" href="https://bmmb.gouv.qc.ca/">Bureau de mise en marché des bois</a>;
                    </li>
                    <li>
                        Québec has moved toward <a target="_blank" href="http://www.mffp.gouv.qc.ca/forets/amenagement/amenagement-ecosystemique.jsp">ecosystem-based management</a>
                        by reducing the differences between the forest under management and the natural forest.
                    </li>
                </ul>
            ',
        ],

    ];
}
public function onHandleForm()
{
    $data = [];
    $data['firstname'] = trim( input('firstname', '') );
    $data['lastname'] = trim( input('lastname', '') );
    $data['city'] = trim( input('city', '') );
    $data['email'] = trim( input('email', '') );
    $data['question'] = trim( input('question', '') );

    $data['captcha'] = trim( input('g-recaptcha-response', '') );

    $required_validator = Validator::make(
        [
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'city' => $data['city'],
            'email' => $data['email'],
            'question' => $data['question'],
            'captcha' => $data['captcha'],
        ],
        [
            'firstname' => 'required',
            'lastname' => 'required',
            'city' => 'required',
            'email' => 'required',
            'question' => 'required',
            'captcha' => 'required',
        ]
    );

    $email_validator = Validator::make(
        [ 'email' => $data['email'] ],
        [ 'email' => 'email' ]
    );

    if ( $required_validator->fails() ) {
        $this['result'] = '
            <div class="form-error">
                Erreur : Le formulaire contient des champs obligatoires.
            </div>
        ';
    }
    elseif ( $email_validator->fails() ) {
        $this['result'] = '
            <div class="form-error">
                Erreur : Votre adresse courriel ne semble pas valide.
            </div>
        ';
    }
    else {
        $question = new FaqQuestion;
        $question->firstname = $data['firstname'];
        $question->lastname = $data['lastname'];
        $question->email = $data['email'];
        $question->city = $data['city'];
        $question->question = $data['question'];
        $question->save();

        $this['result'] = '
            <div class="form-success">
                Votre question a été envoyée. Merci!

                <script>
                    $("#question-form-container .cta-button").remove();

                    // window.dataLayer.push({ "event" : "formulaire-question" });

                    window.dataLayer.push({
                        "eventCategory": "form",
                        "eventAction": "Form submitted",
                        "eventLabel": "true",
                        "event": "gtm_event"
                    });
                </script>
            </div>
        ';
    }
}
}
