<?php

/* /var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/quiz/foresterie.htm */
class __TwigTemplate_0962d8abccdbc54afe0c8e3df9b946e8bade28615be125a838464a32ace5fc50 extends Twig_Template
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
        <p class=\"question__label staggerAnimate\">Quel pourcentage de la forêt québécoise se régénère naturellement?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>20 %</span></a></li>
            <li><a href=\"#\"><span>50 %</span></a></li>
            <li><a href=\"#\" data-answer><span>80 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Au Québec, pendant la récolte, la régénération naturelle est préservée. De cette façon, 80 % des forêts sont régénérées naturellement et un bon coup de pouce est donné par reboisement lorsque nécessaire, soit dans 20 % des cas.</p>
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
        <p class=\"question__label staggerAnimate\">Quelle portion du territoire forestier est récoltée chaque année?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li class=\"large\"><a href=\"#\" data-answer><span>Moins <br>de 1 %</span></a></li>
            <li class=\"large\"><a href=\"#\"><span style=\"white-space:nowrap;\">De 10<br>à 20 %</span></a></li>
            <li class=\"large\"><a href=\"#\"><span style=\"white-space:nowrap;\">Plus de<br>20 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Au Québec, moins de 1 % du territoire forestier est récolté chaque année. À elle seule, la nature, par les épidémies d’insectes, les feux et les chablis, le perturbe deux fois plus que les activités forestières.</p>
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
        <p class=\"question__label staggerAnimate\">Combien de plants sont mis en terre annuellement dans les forêts publiques québécoises?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span style=\"white-space:nowrap\">500 000</span></a></li>
            <li><a href=\"#\"><span>8 millions</span></a></li>
            <li><a href=\"#\" data-answer><span>130 millions</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Comme la régénération naturelle est protégée durant la récolte forestière, le reboisement devient nécessaire dans les cas où celle-ci est absente ou déficiente sur le terrain, ou alors à la suite d’un feu ou d’une épidémie d’insectes, soit dans 20 % des cas.</p>
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
        <p class=\"question__label staggerAnimate\">Y a-t-il encore des coupes à blanc dans les forêts publiques du Québec?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li class=\"large\"><a href=\"#\"><span>OUI</span></a></li>
            <li class=\"large\"><a href=\"#\"><span>Oui, mais très peu</span></a></li>
            <li class=\"large\"><a href=\"#\" data-answer><span>NON</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">La controversée coupe à blanc a laissé place à la coupe avec protection de la régénération et des sols en 1995. La grande différence réside dans la technique de récolte, qui limite les déplacements de la machinerie afin de protéger les jeunes arbres déjà installés et le sol forestier.</p>
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
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("quiz", array("slug" => "bois-ecolo"));
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
        <p class=\"question__label staggerAnimate\">What percentage of Québec’s forest regenerates naturally?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>20 %</span></a></li>
            <li><a href=\"#\"><span>50 %</span></a></li>
            <li><a href=\"#\" data-answer><span>80 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">In Québec, natural regeneration is preserved during logging, meaning that 80% of the forest is regenerated naturally. Where necessary, in the remaining 20% of cases, reforestation is used to supplement natural regeneration.</p>
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
        <p class=\"question__label staggerAnimate\">What percentage of the forest is harvested each year?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li class=\"large\"><a href=\"#\" data-answer><span>Less <br>than 1 %</span></a></li>
            <li class=\"large\"><a href=\"#\"><span style=\"white-space:nowrap;\">Between 10<br>and 20 %</span></a></li>
            <li class=\"large\"><a href=\"#\"><span style=\"white-space:nowrap;\">More than<br>20 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">In Québec, less than 1% of the forest is harvested each year. Natural events such as insect epidemics, fires and windfall are responsible for twice as many disturbances as forestry activities. </p>
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
        <p class=\"question__label staggerAnimate\">How many plants are sown each year in Québec’s public forests?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span style=\"white-space:nowrap\">500 000</span></a></li>
            <li><a href=\"#\"><span>8 million</span></a></li>
            <li><a href=\"#\" data-answer><span>130 million</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Because natural regeneration is protected during logging, reforestation is necessary only in cases where natural regeneration is inexistent or deficient, or after fires or insect epidemics – in other words, in 20% of cases.</p>
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
        <p class=\"question__label staggerAnimate\">Does clear-cutting still take place in Québec’s public forests?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li class=\"large\"><a href=\"#\"><span>Yes</span></a></li>
            <li class=\"large\"><a href=\"#\"><span>Yes, but not much</span></a></li>
            <li class=\"large\"><a href=\"#\" data-answer><span>NO</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">The controversial clear-cut was replaced by cutting with protection of regeneration and soils in 1995. The main difference between the two lies in the use of a harvesting technique that limits machinery movements in order to protect soils and young established trees.</p>
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
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("quiz", array("slug" => "wood-ecological"));
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
<form data-request=\"onHandleForm\" action=\"\" method=\"post\" class=\"quizform\">
    <input type=\"hidden\" name=\"quiz\" value=\"foresterie\">
    <input type=\"hidden\" name=\"result\" value=\"\">
    <input type=\"hidden\" name=\"score\" value=\"\">
</form>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/quiz/foresterie.htm";
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
        <p class=\"question__label staggerAnimate\">Quel pourcentage de la forêt québécoise se régénère naturellement?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>20 %</span></a></li>
            <li><a href=\"#\"><span>50 %</span></a></li>
            <li><a href=\"#\" data-answer><span>80 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Au Québec, pendant la récolte, la régénération naturelle est préservée. De cette façon, 80 % des forêts sont régénérées naturellement et un bon coup de pouce est donné par reboisement lorsque nécessaire, soit dans 20 % des cas.</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Prochaine question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question2\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 02</h3>
        <p class=\"question__label staggerAnimate\">Quelle portion du territoire forestier est récoltée chaque année?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li class=\"large\"><a href=\"#\" data-answer><span>Moins <br>de 1 %</span></a></li>
            <li class=\"large\"><a href=\"#\"><span style=\"white-space:nowrap;\">De 10<br>à 20 %</span></a></li>
            <li class=\"large\"><a href=\"#\"><span style=\"white-space:nowrap;\">Plus de<br>20 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Au Québec, moins de 1 % du territoire forestier est récolté chaque année. À elle seule, la nature, par les épidémies d’insectes, les feux et les chablis, le perturbe deux fois plus que les activités forestières.</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Prochaine question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question3\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 03</h3>
        <p class=\"question__label staggerAnimate\">Combien de plants sont mis en terre annuellement dans les forêts publiques québécoises?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span style=\"white-space:nowrap\">500 000</span></a></li>
            <li><a href=\"#\"><span>8 millions</span></a></li>
            <li><a href=\"#\" data-answer><span>130 millions</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Comme la régénération naturelle est protégée durant la récolte forestière, le reboisement devient nécessaire dans les cas où celle-ci est absente ou déficiente sur le terrain, ou alors à la suite d’un feu ou d’une épidémie d’insectes, soit dans 20 % des cas.</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Prochaine question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question4\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 04</h3>
        <p class=\"question__label staggerAnimate\">Y a-t-il encore des coupes à blanc dans les forêts publiques du Québec?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li class=\"large\"><a href=\"#\"><span>OUI</span></a></li>
            <li class=\"large\"><a href=\"#\"><span>Oui, mais très peu</span></a></li>
            <li class=\"large\"><a href=\"#\" data-answer><span>NON</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">La controversée coupe à blanc a laissé place à la coupe avec protection de la régénération et des sols en 1995. La grande différence réside dans la technique de récolte, qui limite les déplacements de la machinerie afin de protéger les jeunes arbres déjà installés et le sol forestier.</p>
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
    <a class=\"btn next-quiz-btn staggerAnimate\" href=\"{{ 'quiz'|page({ slug: 'bois-ecolo' }) }}\">
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
        <p class=\"question__label staggerAnimate\">What percentage of Québec’s forest regenerates naturally?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span>20 %</span></a></li>
            <li><a href=\"#\"><span>50 %</span></a></li>
            <li><a href=\"#\" data-answer><span>80 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">In Québec, natural regeneration is preserved during logging, meaning that 80% of the forest is regenerated naturally. Where necessary, in the remaining 20% of cases, reforestation is used to supplement natural regeneration.</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Next question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question2\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 02</h3>
        <p class=\"question__label staggerAnimate\">What percentage of the forest is harvested each year?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li class=\"large\"><a href=\"#\" data-answer><span>Less <br>than 1 %</span></a></li>
            <li class=\"large\"><a href=\"#\"><span style=\"white-space:nowrap;\">Between 10<br>and 20 %</span></a></li>
            <li class=\"large\"><a href=\"#\"><span style=\"white-space:nowrap;\">More than<br>20 %</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">In Québec, less than 1% of the forest is harvested each year. Natural events such as insect epidemics, fires and windfall are responsible for twice as many disturbances as forestry activities. </p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Next question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question3\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 03</h3>
        <p class=\"question__label staggerAnimate\">How many plants are sown each year in Québec’s public forests?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li><a href=\"#\"><span style=\"white-space:nowrap\">500 000</span></a></li>
            <li><a href=\"#\"><span>8 million</span></a></li>
            <li><a href=\"#\" data-answer><span>130 million</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">Because natural regeneration is protected during logging, reforestation is necessary only in cases where natural regeneration is inexistent or deficient, or after fires or insect epidemics – in other words, in 20% of cases.</p>
            <a class=\"btn next-btn staggerAnimate\" href=\"#\">
                <span>Next question</span>
                <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
            </a>
        </div>
    </div>
    <div id=\"question4\" class=\"question\">
        <h3 class=\"question__title staggerAnimate\">Question 04</h3>
        <p class=\"question__label staggerAnimate\">Does clear-cutting still take place in Québec’s public forests?</p>
        <ul class=\"question__choices staggerAnimate\">
            <li class=\"large\"><a href=\"#\"><span>Yes</span></a></li>
            <li class=\"large\"><a href=\"#\"><span>Yes, but not much</span></a></li>
            <li class=\"large\"><a href=\"#\" data-answer><span>NO</span></a></li>
        </ul>
        <div class=\"question__answer\">
            <p class=\"staggerAnimate\">The controversial clear-cut was replaced by cutting with protection of regeneration and soils in 1995. The main difference between the two lies in the use of a harvesting technique that limits machinery movements in order to protect soils and young established trees.</p>
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
    <a class=\"btn next-quiz-btn staggerAnimate\" href=\"{{ 'quiz'|page({ slug: 'wood-ecological' }) }}\">
        <span>Next Quiz</span>
        <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
    </a>
</div>
{% endif %}

<form data-request=\"onHandleForm\" action=\"\" method=\"post\" class=\"quizform\">
    <input type=\"hidden\" name=\"quiz\" value=\"foresterie\">
    <input type=\"hidden\" name=\"result\" value=\"\">
    <input type=\"hidden\" name=\"score\" value=\"\">
</form>", "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/quiz/foresterie.htm", "");
    }
}
