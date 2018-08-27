<?php

/* /var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/quiz-home.htm */
class __TwigTemplate_f695320efd45642ba9b87e474a51c51ab773701ef9634435d931c72dd85aaca6 extends Twig_Template
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
        echo "<div class=\"video-wrap\">
    <div id=\"vid-quiz-forest\"><img src=\"";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/quiz-foret-quebecoise-bg.jpg");
        echo "\" alt=\"\"></div>
    <div id=\"vid-quiz-foresterie\"><img src=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/quiz-foresterie-bg.jpg");
        echo "\" alt=\"\"></div>
    <div id=\"vid-quiz-ecolo\"><img src=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/quiz-bois-ecolo-bg.jpg");
        echo "\" alt=\"\"></div>
</div>

";
        // line 7
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 8
            echo "<div class=\"content\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"grid-full\">
                <h1 class=\"title\">Mini Quiz</h1>
                <p>Êtes-vous un bûcheron dans l’âme ou plutôt un forestier de salon? Testez votre niveau de connaissance de la forêt québécoise avec ces miniquiz!</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"grid-third\">
                <a id=\"quiz-forest\" class=\"quiz-link\" href=\"";
            // line 18
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("quiz", array("slug" => "foret-quebecoise"));
            echo "\"><span>Connaissez-vous<br>la forêt québécoise?</span></a>
            </div>
            <div class=\"grid-third\">
                <a id=\"quiz-foresterie\" class=\"quiz-link\" href=\"";
            // line 21
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("quiz", array("slug" => "foresterie"));
            echo "\"><span>La foresterie : <br>Testez vos connaissances!</span></a>
            </div>
            <div class=\"grid-third\">
                <a id=\"quiz-ecolo\" class=\"quiz-link\" href=\"";
            // line 24
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("quiz", array("slug" => "bois-ecolo"));
            echo "\"><span>Écolo, le bois?</span></a>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 30
        echo "
";
        // line 31
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 32
            echo "<div class=\"content\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"grid-full\">
                <h1 class=\"title\">Mini Quiz</h1>
                <p>Are you a born lumberjack or an armchair forester? Take our mini-quiz to test your knowledge of Québec’s forests!</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"grid-third\">
                <a id=\"quiz-forest\" class=\"quiz-link\" href=\"";
            // line 42
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("quiz", array("slug" => "quebec-forests"));
            echo "\"><span>How much do you know<br>about Québec’s forests?</span></a>
            </div>
            <div class=\"grid-third\">
                <a id=\"quiz-foresterie\" class=\"quiz-link\" href=\"";
            // line 45
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("quiz", array("slug" => "forestery"));
            echo "\"><span>Forestry : <br>Test your knowledge!</span></a>
            </div>
            <div class=\"grid-third\">
                <a id=\"quiz-ecolo\" class=\"quiz-link\" href=\"";
            // line 48
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("quiz", array("slug" => "wood-ecological"));
            echo "\"><span>Is wood an ecological material?</span></a>
            </div>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/quiz-home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 48,  94 => 45,  88 => 42,  76 => 32,  74 => 31,  71 => 30,  62 => 24,  56 => 21,  50 => 18,  38 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"video-wrap\">
    <div id=\"vid-quiz-forest\"><img src=\"{{ 'assets/public/images/quiz-foret-quebecoise-bg.jpg'|theme }}\" alt=\"\"></div>
    <div id=\"vid-quiz-foresterie\"><img src=\"{{ 'assets/public/images/quiz-foresterie-bg.jpg'|theme }}\" alt=\"\"></div>
    <div id=\"vid-quiz-ecolo\"><img src=\"{{ 'assets/public/images/quiz-bois-ecolo-bg.jpg'|theme }}\" alt=\"\"></div>
</div>

{% if locale == 'fr' %}
<div class=\"content\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"grid-full\">
                <h1 class=\"title\">Mini Quiz</h1>
                <p>Êtes-vous un bûcheron dans l’âme ou plutôt un forestier de salon? Testez votre niveau de connaissance de la forêt québécoise avec ces miniquiz!</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"grid-third\">
                <a id=\"quiz-forest\" class=\"quiz-link\" href=\"{{ 'quiz'|page({ slug: 'foret-quebecoise' }) }}\"><span>Connaissez-vous<br>la forêt québécoise?</span></a>
            </div>
            <div class=\"grid-third\">
                <a id=\"quiz-foresterie\" class=\"quiz-link\" href=\"{{ 'quiz'|page({ slug: 'foresterie' }) }}\"><span>La foresterie : <br>Testez vos connaissances!</span></a>
            </div>
            <div class=\"grid-third\">
                <a id=\"quiz-ecolo\" class=\"quiz-link\" href=\"{{ 'quiz'|page({ slug: 'bois-ecolo' }) }}\"><span>Écolo, le bois?</span></a>
            </div>
        </div>
    </div>
</div>
{% endif %}

{% if locale == 'en' %}
<div class=\"content\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"grid-full\">
                <h1 class=\"title\">Mini Quiz</h1>
                <p>Are you a born lumberjack or an armchair forester? Take our mini-quiz to test your knowledge of Québec’s forests!</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"grid-third\">
                <a id=\"quiz-forest\" class=\"quiz-link\" href=\"{{ 'quiz'|page({ slug: 'quebec-forests' }) }}\"><span>How much do you know<br>about Québec’s forests?</span></a>
            </div>
            <div class=\"grid-third\">
                <a id=\"quiz-foresterie\" class=\"quiz-link\" href=\"{{ 'quiz'|page({ slug: 'forestery' }) }}\"><span>Forestry : <br>Test your knowledge!</span></a>
            </div>
            <div class=\"grid-third\">
                <a id=\"quiz-ecolo\" class=\"quiz-link\" href=\"{{ 'quiz'|page({ slug: 'wood-ecological' }) }}\"><span>Is wood an ecological material?</span></a>
            </div>
        </div>
    </div>
</div>
{% endif %}", "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/quiz-home.htm", "");
    }
}
