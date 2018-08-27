<?php

/* /var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/quiz/foret-quebecoise.htm */
class __TwigTemplate_6e3a6f3b507fc0795654f7c78d3701ba67f114699d461cd652122cd0ffc75c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 2
            echo "<div class=\"content\">
    <div class=\"content__overlay\"></div>

    <div id=\"question1\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 01</h3>
        <p class=\"question__label staggerAnimate\">Quelle portion du territoire québécois est recouverte de forêt?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>30 %</span></a></li>
            <li><a href=\"#\"><span>40 %</span></a></li>
            <li><a href=\"#\" data-answer><span>50 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Près de la moitié du territoire québécois est recouvert de forêt dense qui représente 760 000 km<sup>2</sup>. Cette superficie est plus grande que le territoire de la France!</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Prochaine question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"";
            // line 17
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/icons.svg#arrow-next");
            echo "\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question2\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 02</h3>
        <p class=\"question__label staggerAnimate\">Quelle portion du territoire forestier québécois est publique?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>20 %</span></a></li>
            <li><a href=\"#\"><span>50 %</span></a></li>
            <li><a href=\"#\" data-answer><span>90 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Au Québec, 90 % du territoire forestier est public, ce qui implique que les diverses utilisations de la forêt sont harmonisées afin que tout le monde puisse en bénéficier. Ainsi, au moins une dizaine de types d’utilisateurs interagissent sur un même territoire (chasseurs, villégiateurs, randonneurs, travailleurs forestiers, etc.).</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Prochaine question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"";
            // line 33
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/icons.svg#arrow-next");
            echo "\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question3\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 03</h3>
        <p class=\"question__label staggerAnimate\">Quelle portion des forêts publiques du Québec est certifiée?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>25 %</span></a></li>
            <li><a href=\"#\"><span>40 %</span></a></li>
            <li><a href=\"#\" data-answer><span>85 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Au Québec, 85 % des forêts publiques sont certifiées, ce qui représente la plus grande superficie certifiée au monde. Cette reconnaissance supplémentaire aux lois et règlements en vigueur garantit que les pratiques forestières respectent les normes établies afin d’assurer la durabilité de la forêt.</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Prochaine question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"";
            // line 49
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/icons.svg#arrow-next");
            echo "\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question4\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 04</h3>
        <p class=\"question__label staggerAnimate\">Y a-t-il de la déforestation en forêt publique au Québec?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>OUI</span></a></li>
            <li><a href=\"#\" data-answer><span>NON</span></a></li>
            <li></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Il n’y a pas de déforestation dans les forêts publiques au Québec. Cela va à l’encontre du régime forestier québécois, ses lois et règlements. La déforestation implique un déboisement permanent et la conversion des forêts à d’autres fins, telles que l’agriculture, l’urbanisation, etc.</p>
            <a class=\"btn result-btn staggerAnimate\" href=\"#\">
                <span>Résultat</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"";
            // line 65
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/icons.svg#arrow-next");
            echo "\" /></use></svg>
            </a>
        </div>
    </div>

    <img class=\"mini-quiz\" src=\"";
            // line 70
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/mini-quiz.svg");
            echo "\" alt=\"\">
</div>

<div class=\"result\">
    <h1 class=\"title staggerAnimate\"></h1>
    <div class=\"result__score staggerAnimate\">
        <span>3/4</span>
        <img class=\"good-img\" src=\"";
            // line 77
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/quiz-result-bravo.svg");
            echo "\" alt=\"\">
        <img class=\"medium-img\" src=\"";
            // line 78
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/quiz-result-pas-mal.svg");
            echo "\" alt=\"\">
        <img class=\"bad-img\" src=\"";
            // line 79
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/quiz-result-lache-pas.svg");
            echo "\" alt=\"\">
    </div>
    <p class=\"good-text staggerAnimate\">Vous êtes un bûcheron dans l’âme.<br>Allez-vous relever le défi du prochain quiz ?</p>
    <p class=\"medium-text staggerAnimate\">Vous êtes un forestier en devenir.<br>Tentez votre chance en répondant aux autres quiz!</p>
    <p class=\"bad-text staggerAnimate\">Vous êtes un forestier de salon.<br>Rassurez-vous, vous pouvez en apprendre plus sur la forêt avec nos autres quiz.</p>
    <a class=\"btn next-quiz-btn staggerAnimate\" href=\"";
            // line 84
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("quiz", array("slug" => "foresterie"));
            echo "\">
        <span>Quiz suivant</span>
        <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"";
            // line 86
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/icons.svg#arrow-next");
            echo "\" /></use></svg>
    </a>
</div>
";
        }
        // line 90
        echo "
";
        // line 91
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 92
            echo "<div class=\"content\">
    <div class=\"content__overlay\"></div>

    <div id=\"question1\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 01</h3>
        <p class=\"question__label staggerAnimate\">What percentage of Québec’s total area is covered by forest?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>30 %</span></a></li>
            <li><a href=\"#\"><span>40 %</span></a></li>
            <li><a href=\"#\" data-answer><span>50 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Nearly half of Québec’s territory – 760,000 km<sup>2</sup> – is covered by a dense forest. This area is bigger in size than the whole of France!</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Next question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"";
            // line 107
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/icons.svg#arrow-next");
            echo "\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question2\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 02</h3>
        <p class=\"question__label staggerAnimate\">What percentage of Québec’s forest is publicly owned?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>20 %</span></a></li>
            <li><a href=\"#\"><span>50 %</span></a></li>
            <li><a href=\"#\" data-answer><span>90 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">In Québec, 90 % of the forest is publicly owned. As a result, the various forest uses are harmonized to ensure that everyone can benefit from it. At least ten different types of users will interact in any given area (hunters, vacationers, hikers, forestry workers, etc.).</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Next question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"";
            // line 123
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/icons.svg#arrow-next");
            echo "\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question3\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 03</h3>
        <p class=\"question__label staggerAnimate\">What percentage of Québec’s public forest is certified?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>25 %</span></a></li>
            <li><a href=\"#\"><span>40 %</span></a></li>
            <li><a href=\"#\" data-answer><span>85 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">In Québec, 85 % of the public forest is certified. This is the largest area of certified forest anywhere in the world. Certification provides additional recognition, over and above current legislation and regulations, to guarantee that forestry practices comply with the established standards to ensure forest sustainability.</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Next question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"";
            // line 139
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/icons.svg#arrow-next");
            echo "\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question4\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 04</h3>
        <p class=\"question__label staggerAnimate\">Does deforestation take place in Québec’s public forests?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>YES</span></a></li>
            <li><a href=\"#\" data-answer><span>NO</span></a></li>
            <li></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">There is no deforestation in Québec’s public forests because it is contrary to Québec’s forest regime, legislation and regulations. Deforestation involves permanent removal of trees and conversion of the forest for other purposes such as farming or urban development.</p>
            <a class=\"btn result-btn staggerAnimate\" href=\"#\">
                <span>Result</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"";
            // line 155
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/icons.svg#arrow-next");
            echo "\" /></use></svg>
            </a>
        </div>
    </div>

    <img class=\"mini-quiz\" src=\"";
            // line 160
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/mini-quiz.svg");
            echo "\" alt=\"\">
</div>

<div class=\"result\">
    <h1 class=\"title staggerAnimate\"></h1>
    <div class=\"result__score staggerAnimate\">
        <span>3/4</span>
        <img class=\"good-img\" src=\"";
            // line 167
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/quiz-result-bravo.svg");
            echo "\" alt=\"\">
        <img class=\"medium-img\" src=\"";
            // line 168
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/quiz-result-pas-mal.svg");
            echo "\" alt=\"\">
        <img class=\"bad-img\" src=\"";
            // line 169
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/quiz-result-lache-pas.svg");
            echo "\" alt=\"\">
    </div>
    <p class=\"good-text staggerAnimate\">You’re a born lumberjack.<br>Are you up to the challenge of another quiz?</p>
    <p class=\"medium-text staggerAnimate\">You’re a would-be forester.<br>Try your hand at other quizzes!</p>
    <p class=\"bad-text staggerAnimate\">You’re an armchair forester.<br>Don’t worry, you can learn more about the forest in our other quizzes.</p>
    <a class=\"btn next-quiz-btn staggerAnimate\" href=\"";
            // line 174
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("quiz", array("slug" => "forestery"));
            echo "\">
        <span>Next Quiz</span>
        <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"";
            // line 176
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/icons.svg#arrow-next");
            echo "\" /></use></svg>
    </a>
</div>
";
        }
        // line 180
        echo "
<form data-request=\"onHandleForm\" action=\"\" method=\"post\" class=\"quizform\" >
<form data-request=\"onHandleForm\" action=\"\" method=\"post\">
    <input type=\"hidden\" name=\"quiz\" value=\"foret-quebecoise\">
    <input type=\"hidden\" name=\"result\" value=\"\">
    <input type=\"hidden\" name=\"score\" value=\"\">
</form>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/quiz/foret-quebecoise.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 180,  259 => 176,  254 => 174,  246 => 169,  242 => 168,  238 => 167,  228 => 160,  220 => 155,  201 => 139,  182 => 123,  163 => 107,  146 => 92,  144 => 91,  141 => 90,  134 => 86,  129 => 84,  121 => 79,  117 => 78,  113 => 77,  103 => 70,  95 => 65,  76 => 49,  57 => 33,  38 => 17,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if locale == 'fr' %}
<div class=\"content\">
    <div class=\"content__overlay\"></div>

    <div id=\"question1\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 01</h3>
        <p class=\"question__label staggerAnimate\">Quelle portion du territoire québécois est recouverte de forêt?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>30 %</span></a></li>
            <li><a href=\"#\"><span>40 %</span></a></li>
            <li><a href=\"#\" data-answer><span>50 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Près de la moitié du territoire québécois est recouvert de forêt dense qui représente 760 000 km<sup>2</sup>. Cette superficie est plus grande que le territoire de la France!</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Prochaine question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question2\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 02</h3>
        <p class=\"question__label staggerAnimate\">Quelle portion du territoire forestier québécois est publique?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>20 %</span></a></li>
            <li><a href=\"#\"><span>50 %</span></a></li>
            <li><a href=\"#\" data-answer><span>90 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Au Québec, 90 % du territoire forestier est public, ce qui implique que les diverses utilisations de la forêt sont harmonisées afin que tout le monde puisse en bénéficier. Ainsi, au moins une dizaine de types d’utilisateurs interagissent sur un même territoire (chasseurs, villégiateurs, randonneurs, travailleurs forestiers, etc.).</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Prochaine question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question3\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 03</h3>
        <p class=\"question__label staggerAnimate\">Quelle portion des forêts publiques du Québec est certifiée?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>25 %</span></a></li>
            <li><a href=\"#\"><span>40 %</span></a></li>
            <li><a href=\"#\" data-answer><span>85 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Au Québec, 85 % des forêts publiques sont certifiées, ce qui représente la plus grande superficie certifiée au monde. Cette reconnaissance supplémentaire aux lois et règlements en vigueur garantit que les pratiques forestières respectent les normes établies afin d’assurer la durabilité de la forêt.</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Prochaine question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question4\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 04</h3>
        <p class=\"question__label staggerAnimate\">Y a-t-il de la déforestation en forêt publique au Québec?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>OUI</span></a></li>
            <li><a href=\"#\" data-answer><span>NON</span></a></li>
            <li></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Il n’y a pas de déforestation dans les forêts publiques au Québec. Cela va à l’encontre du régime forestier québécois, ses lois et règlements. La déforestation implique un déboisement permanent et la conversion des forêts à d’autres fins, telles que l’agriculture, l’urbanisation, etc.</p>
            <a class=\"btn result-btn staggerAnimate\" href=\"#\">
                <span>Résultat</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
            </a>
        </div>
    </div>

    <img class=\"mini-quiz\" src=\"{{ 'assets/public/images/mini-quiz.svg' | theme }}\" alt=\"\">
</div>

<div class=\"result\">
    <h1 class=\"title staggerAnimate\"></h1>
    <div class=\"result__score staggerAnimate\">
        <span>3/4</span>
        <img class=\"good-img\" src=\"{{ 'assets/public/images/quiz-result-bravo.svg' | theme }}\" alt=\"\">
        <img class=\"medium-img\" src=\"{{ 'assets/public/images/quiz-result-pas-mal.svg' | theme }}\" alt=\"\">
        <img class=\"bad-img\" src=\"{{ 'assets/public/images/quiz-result-lache-pas.svg' | theme }}\" alt=\"\">
    </div>
    <p class=\"good-text staggerAnimate\">Vous êtes un bûcheron dans l’âme.<br>Allez-vous relever le défi du prochain quiz ?</p>
    <p class=\"medium-text staggerAnimate\">Vous êtes un forestier en devenir.<br>Tentez votre chance en répondant aux autres quiz!</p>
    <p class=\"bad-text staggerAnimate\">Vous êtes un forestier de salon.<br>Rassurez-vous, vous pouvez en apprendre plus sur la forêt avec nos autres quiz.</p>
    <a class=\"btn next-quiz-btn staggerAnimate\" href=\"{{ 'quiz'|page({ slug: 'foresterie' }) }}\">
        <span>Quiz suivant</span>
        <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
    </a>
</div>
{% endif %}

{% if locale == 'en' %}
<div class=\"content\">
    <div class=\"content__overlay\"></div>

    <div id=\"question1\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 01</h3>
        <p class=\"question__label staggerAnimate\">What percentage of Québec’s total area is covered by forest?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>30 %</span></a></li>
            <li><a href=\"#\"><span>40 %</span></a></li>
            <li><a href=\"#\" data-answer><span>50 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Nearly half of Québec’s territory – 760,000 km<sup>2</sup> – is covered by a dense forest. This area is bigger in size than the whole of France!</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Next question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question2\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 02</h3>
        <p class=\"question__label staggerAnimate\">What percentage of Québec’s forest is publicly owned?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>20 %</span></a></li>
            <li><a href=\"#\"><span>50 %</span></a></li>
            <li><a href=\"#\" data-answer><span>90 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">In Québec, 90 % of the forest is publicly owned. As a result, the various forest uses are harmonized to ensure that everyone can benefit from it. At least ten different types of users will interact in any given area (hunters, vacationers, hikers, forestry workers, etc.).</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Next question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question3\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 03</h3>
        <p class=\"question__label staggerAnimate\">What percentage of Québec’s public forest is certified?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>25 %</span></a></li>
            <li><a href=\"#\"><span>40 %</span></a></li>
            <li><a href=\"#\" data-answer><span>85 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">In Québec, 85 % of the public forest is certified. This is the largest area of certified forest anywhere in the world. Certification provides additional recognition, over and above current legislation and regulations, to guarantee that forestry practices comply with the established standards to ensure forest sustainability.</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Next question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question4\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 04</h3>
        <p class=\"question__label staggerAnimate\">Does deforestation take place in Québec’s public forests?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>YES</span></a></li>
            <li><a href=\"#\" data-answer><span>NO</span></a></li>
            <li></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">There is no deforestation in Québec’s public forests because it is contrary to Québec’s forest regime, legislation and regulations. Deforestation involves permanent removal of trees and conversion of the forest for other purposes such as farming or urban development.</p>
            <a class=\"btn result-btn staggerAnimate\" href=\"#\">
                <span>Result</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
            </a>
        </div>
    </div>

    <img class=\"mini-quiz\" src=\"{{ 'assets/public/images/mini-quiz.svg' | theme }}\" alt=\"\">
</div>

<div class=\"result\">
    <h1 class=\"title staggerAnimate\"></h1>
    <div class=\"result__score staggerAnimate\">
        <span>3/4</span>
        <img class=\"good-img\" src=\"{{ 'assets/public/images/quiz-result-bravo.svg' | theme }}\" alt=\"\">
        <img class=\"medium-img\" src=\"{{ 'assets/public/images/quiz-result-pas-mal.svg' | theme }}\" alt=\"\">
        <img class=\"bad-img\" src=\"{{ 'assets/public/images/quiz-result-lache-pas.svg' | theme }}\" alt=\"\">
    </div>
    <p class=\"good-text staggerAnimate\">You’re a born lumberjack.<br>Are you up to the challenge of another quiz?</p>
    <p class=\"medium-text staggerAnimate\">You’re a would-be forester.<br>Try your hand at other quizzes!</p>
    <p class=\"bad-text staggerAnimate\">You’re an armchair forester.<br>Don’t worry, you can learn more about the forest in our other quizzes.</p>
    <a class=\"btn next-quiz-btn staggerAnimate\" href=\"{{ 'quiz'|page({ slug: 'forestery' }) }}\">
        <span>Next Quiz</span>
        <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
    </a>
</div>
{% endif %}

<form data-request=\"onHandleForm\" action=\"\" method=\"post\" class=\"quizform\" >
<form data-request=\"onHandleForm\" action=\"\" method=\"post\">
    <input type=\"hidden\" name=\"quiz\" value=\"foret-quebecoise\">
    <input type=\"hidden\" name=\"result\" value=\"\">
    <input type=\"hidden\" name=\"score\" value=\"\">
</form>", "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/quiz/foret-quebecoise.htm", "");
    }
}
