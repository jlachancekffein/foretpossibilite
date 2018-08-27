<?php

/* /var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/possibilities.htm */
class __TwigTemplate_4c5ed0068eb846b67599797980f33be46b960d5e8230be722c14185d40cf56f4 extends Twig_Template
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
        echo "<div class=\"content\">
    <div class=\"container\">
        <div class=\"grid-full\">
            <h1 class=\"title\">";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Regard sur la forêt"));
        echo "</h1>
        </div>
    </div>
    <div class=\"thumbs\">
        <div class=\"thumbs__possibilities\">
            ";
        // line 9
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 10
            echo "                <a class=\"thumb\" href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("possibility", array("slug" => "foret-naturelle-du-quebec"));
            echo "\">
            ";
        }
        // line 12
        echo "            ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 13
            echo "                 <a class=\"thumb\" href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("possibility", array("slug" => "quebec-forest-biodiversity"));
            echo "\">
            ";
        }
        // line 15
        echo "                <img src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/thumb-healthy-resource.jpg");
        echo "\" alt=\"\">
                <div class=\"thumb__inner\">
                    <p>
                        <span class=\"thumb__icon\">
                            <svg class=\"leaf-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#leaf\" /></use></svg>
                        </span>
                        <span class=\"thumb__title\">";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Une forêt naturelle"));
        echo "</span>
                    </p>
                </div>
            </a>

            ";
        // line 26
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 27
            echo "                <a class=\"thumb\" href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("possibility", array("slug" => "amenagement-forestier-au-quebec"));
            echo "\">
            ";
        }
        // line 29
        echo "            ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 30
            echo "                <a class=\"thumb\" href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("possibility", array("slug" => "quebec-forestry-practices"));
            echo "\">
            ";
        }
        // line 32
        echo "                <img src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/thumb-practices-evolution.jpg");
        echo "\" alt=\"\">
                <div class=\"thumb__inner\">
                    <p>
                        <span class=\"thumb__icon\">
                            <svg class=\"sprout-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#sprout\" /></use></svg>
                        </span>
                        <span class=\"thumb__title\">";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("L'évolution des <br>pratiques forestières"));
        echo "</span>
                    </p>
                </div>
            </a>

            ";
        // line 43
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 44
            echo "                <a class=\"thumb\" href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("possibility", array("slug" => "biodiversite-des-territoires-forestiers"));
            echo "\">
            ";
        }
        // line 46
        echo "            ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 47
            echo "                <a class=\"thumb\" href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("possibility", array("slug" => "biodiversity-of-forest-territories"));
            echo "\">
            ";
        }
        // line 49
        echo "                <img src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/thumb-share-territory.jpg");
        echo "\" alt=\"\">
                <div class=\"thumb__inner\">
                    <p>
                        <span class=\"thumb__icon\">
                            <svg class=\"team-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#team\" /></use></svg>
                        </span>
                        <span class=\"thumb__title\">";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Un territoire partagé"));
        echo "</span>
                    </p>
                </div>
            </a>

            ";
        // line 60
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 61
            echo "                <a class=\"thumb\" href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("possibility", array("slug" => "developpement-durable-de-la-foret"));
            echo "\">
            ";
        }
        // line 63
        echo "            ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 64
            echo "                <a class=\"thumb\" href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("possibility", array("slug" => "sustainable-development-of-the-forest"));
            echo "\">
            ";
        }
        // line 66
        echo "                <img src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/thumb-wood-second-life.jpg");
        echo "\" alt=\"\">
                <div class=\"thumb__inner\">
                    <p>
                        <span class=\"thumb__icon\">
                            <svg class=\"recyc-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#recyc\" /></use></svg>
                        </span>
                        <span class=\"thumb__title\">";
        // line 72
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Les multiples vies du bois"));
        echo "</span>
                    </p>
                </div>
            </a>

            ";
        // line 77
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 78
            echo "                <a class=\"thumb\" href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("possibility", array("slug" => "foret-certifiee-au-quebec"));
            echo "\">
            ";
        }
        // line 80
        echo "            ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 81
            echo "                <a class=\"thumb\" href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("possibility", array("slug" => "quebec-certified-forest"));
            echo "\">
            ";
        }
        // line 82
        echo "          
                <img src=\"";
        // line 83
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/thumb-responsabilities.jpg");
        echo "\" alt=\"\">
                <div class=\"thumb__inner\">
                    <p>
                        <span class=\"thumb__icon\">
                            <svg class=\"book-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#book\" /></use></svg>
                        </span>
                        <span class=\"thumb__title\">";
        // line 89
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Responsabilités et <br>certifications"));
        echo "</span>
                    </p>
                </div>
            </a>

            ";
        // line 94
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 95
            echo "                <a class=\"thumb\" href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("possibility", array("slug" => "forets-anti-pollution-du-quebec"));
            echo "\">
            ";
        }
        // line 97
        echo "            ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 98
            echo "                <a class=\"thumb\" href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("possibility", array("slug" => "quebec-anti-pollution-forests"));
            echo "\">
            ";
        }
        // line 100
        echo "                <img src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/thumb-climate-change.jpg");
        echo "\" alt=\"\">
                <div class=\"thumb__inner\">
                    <p>
                        <span class=\"thumb__icon\">
                            <svg class=\"o2-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#o2\" /></use></svg>
                        </span>
                        <span class=\"thumb__title\">";
        // line 106
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("La lutte aux <br>changements climatiques"));
        echo "</span>
                    </p>
                </div>
            </a>
        </div>
        <div class=\"thumbs__sidebar\">
            <div class=\"thumbs__sidebar--inner\">
                <div class=\"redirect-cta voxpop\">
                    <a class=\"play-btn\" href=\"";
        // line 114
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("voxpop");
        echo "\">
                        <img src=\"";
        // line 115
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/voxpop-cta.png");
        echo "\" alt=\"\">
                        <span>";
        // line 116
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Visionnez les capsules"));
        echo "</span>
                        <svg class=\"play-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#play\" /></use></svg>
                    </a>
                </div>
                <div class=\"redirect-cta quiz\">
                    <div class=\"quiz__content\">
                        ";
        // line 122
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 123
            echo "                            <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("quiz");
            echo "\"><img src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/miniquiz-icon.png");
            echo "\" alt=\"\"></a>
                        ";
        }
        // line 125
        echo "                        ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 126
            echo "                            <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("quiz");
            echo "\"><img src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/miniquiz-icon.png");
            echo "\" alt=\"\"></a>
                        ";
        }
        // line 128
        echo "                        <a class=\"btn\" href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("quiz");
        echo "\">
                            <span style=\"white-space:nowrap\">";
        // line 129
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Faites le test !"));
        echo "</span>
                            <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"";
        // line 130
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/icons.svg#arrow-next");
        echo "\" /></use></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/possibilities.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 130,  290 => 129,  285 => 128,  277 => 126,  274 => 125,  266 => 123,  264 => 122,  255 => 116,  251 => 115,  247 => 114,  236 => 106,  226 => 100,  220 => 98,  217 => 97,  211 => 95,  209 => 94,  201 => 89,  192 => 83,  189 => 82,  183 => 81,  180 => 80,  174 => 78,  172 => 77,  164 => 72,  154 => 66,  148 => 64,  145 => 63,  139 => 61,  137 => 60,  129 => 55,  119 => 49,  113 => 47,  110 => 46,  104 => 44,  102 => 43,  94 => 38,  84 => 32,  78 => 30,  75 => 29,  69 => 27,  67 => 26,  59 => 21,  49 => 15,  43 => 13,  40 => 12,  34 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content\">
    <div class=\"container\">
        <div class=\"grid-full\">
            <h1 class=\"title\">{{ 'Regard sur la forêt'|_ }}</h1>
        </div>
    </div>
    <div class=\"thumbs\">
        <div class=\"thumbs__possibilities\">
            {% if locale == 'fr' %}
                <a class=\"thumb\" href=\"{{ 'possibility'|page({ slug: 'foret-naturelle-du-quebec' }) }}\">
            {% endif %}
            {% if locale == 'en' %}
                 <a class=\"thumb\" href=\"{{ 'possibility'|page({ slug: 'quebec-forest-biodiversity' }) }}\">
            {% endif %}
                <img src=\"{{ 'assets/public/images/thumb-healthy-resource.jpg'|theme }}\" alt=\"\">
                <div class=\"thumb__inner\">
                    <p>
                        <span class=\"thumb__icon\">
                            <svg class=\"leaf-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#leaf\" /></use></svg>
                        </span>
                        <span class=\"thumb__title\">{{ 'Une forêt naturelle'|_ }}</span>
                    </p>
                </div>
            </a>

            {% if locale == 'fr' %}
                <a class=\"thumb\" href=\"{{ 'possibility'|page({ slug: 'amenagement-forestier-au-quebec' }) }}\">
            {% endif %}
            {% if locale == 'en' %}
                <a class=\"thumb\" href=\"{{ 'possibility'|page({ slug: 'quebec-forestry-practices' }) }}\">
            {% endif %}
                <img src=\"{{ 'assets/public/images/thumb-practices-evolution.jpg'|theme }}\" alt=\"\">
                <div class=\"thumb__inner\">
                    <p>
                        <span class=\"thumb__icon\">
                            <svg class=\"sprout-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#sprout\" /></use></svg>
                        </span>
                        <span class=\"thumb__title\">{{ 'L\\'évolution des <br>pratiques forestières'|_ }}</span>
                    </p>
                </div>
            </a>

            {% if locale == 'fr' %}
                <a class=\"thumb\" href=\"{{ 'possibility'|page({ slug: 'biodiversite-des-territoires-forestiers' }) }}\">
            {% endif %}
            {% if locale == 'en' %}
                <a class=\"thumb\" href=\"{{ 'possibility'|page({ slug: 'biodiversity-of-forest-territories' }) }}\">
            {% endif %}
                <img src=\"{{ 'assets/public/images/thumb-share-territory.jpg'|theme }}\" alt=\"\">
                <div class=\"thumb__inner\">
                    <p>
                        <span class=\"thumb__icon\">
                            <svg class=\"team-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#team\" /></use></svg>
                        </span>
                        <span class=\"thumb__title\">{{ 'Un territoire partagé'|_ }}</span>
                    </p>
                </div>
            </a>

            {% if locale == 'fr' %}
                <a class=\"thumb\" href=\"{{ 'possibility'|page({ slug: 'developpement-durable-de-la-foret' }) }}\">
            {% endif %}
            {% if locale == 'en' %}
                <a class=\"thumb\" href=\"{{ 'possibility'|page({ slug: 'sustainable-development-of-the-forest' }) }}\">
            {% endif %}
                <img src=\"{{ 'assets/public/images/thumb-wood-second-life.jpg'|theme }}\" alt=\"\">
                <div class=\"thumb__inner\">
                    <p>
                        <span class=\"thumb__icon\">
                            <svg class=\"recyc-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#recyc\" /></use></svg>
                        </span>
                        <span class=\"thumb__title\">{{ 'Les multiples vies du bois'|_ }}</span>
                    </p>
                </div>
            </a>

            {% if locale == 'fr' %}
                <a class=\"thumb\" href=\"{{ 'possibility'|page({ slug: 'foret-certifiee-au-quebec' }) }}\">
            {% endif %}
            {% if locale == 'en' %}
                <a class=\"thumb\" href=\"{{ 'possibility'|page({ slug: 'quebec-certified-forest' }) }}\">
            {% endif %}          
                <img src=\"{{ 'assets/public/images/thumb-responsabilities.jpg'|theme }}\" alt=\"\">
                <div class=\"thumb__inner\">
                    <p>
                        <span class=\"thumb__icon\">
                            <svg class=\"book-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#book\" /></use></svg>
                        </span>
                        <span class=\"thumb__title\">{{ 'Responsabilités et <br>certifications'|_ }}</span>
                    </p>
                </div>
            </a>

            {% if locale == 'fr' %}
                <a class=\"thumb\" href=\"{{ 'possibility'|page({ slug: 'forets-anti-pollution-du-quebec' }) }}\">
            {% endif %}
            {% if locale == 'en' %}
                <a class=\"thumb\" href=\"{{ 'possibility'|page({ slug: 'quebec-anti-pollution-forests' }) }}\">
            {% endif %}
                <img src=\"{{ 'assets/public/images/thumb-climate-change.jpg'|theme }}\" alt=\"\">
                <div class=\"thumb__inner\">
                    <p>
                        <span class=\"thumb__icon\">
                            <svg class=\"o2-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#o2\" /></use></svg>
                        </span>
                        <span class=\"thumb__title\">{{ 'La lutte aux <br>changements climatiques'|_ }}</span>
                    </p>
                </div>
            </a>
        </div>
        <div class=\"thumbs__sidebar\">
            <div class=\"thumbs__sidebar--inner\">
                <div class=\"redirect-cta voxpop\">
                    <a class=\"play-btn\" href=\"{{ 'voxpop'|page }}\">
                        <img src=\"{{ 'assets/public/images/voxpop-cta.png'|theme }}\" alt=\"\">
                        <span>{{ 'Visionnez les capsules'|_ }}</span>
                        <svg class=\"play-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#play\" /></use></svg>
                    </a>
                </div>
                <div class=\"redirect-cta quiz\">
                    <div class=\"quiz__content\">
                        {% if locale == 'fr' %}
                            <a href=\"{{ 'quiz'|page }}\"><img src=\"{{ 'assets/public/images/miniquiz-icon.png'|theme }}\" alt=\"\"></a>
                        {% endif %}
                        {% if locale == 'en' %}
                            <a href=\"{{ 'quiz'|page }}\"><img src=\"{{ 'assets/public/images/miniquiz-icon.png'|theme }}\" alt=\"\"></a>
                        {% endif %}
                        <a class=\"btn\" href=\"{{ 'quiz' | page }}\">
                            <span style=\"white-space:nowrap\">{{ 'Faites le test !'|_ }}</span>
                            <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"{{ 'assets/public/images/icons.svg#arrow-next'|theme }}\" /></use></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/possibilities.htm", "");
    }
}
