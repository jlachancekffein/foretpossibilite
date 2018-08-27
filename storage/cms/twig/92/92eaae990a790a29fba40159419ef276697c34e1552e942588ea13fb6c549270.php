<?php

/* /var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/site/header.htm */
class __TwigTemplate_9e03664ebc7761e9c2c5e5d91221522b0b9862472b6765cff2937878b01002b4 extends Twig_Template
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
        echo "<header class=\"header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"grid-three-fourths grid-flip grid-\" >
                <div class=\"header__wrap-links\">
                    <div class=\"header__secondary-links\">
                        ";
        // line 7
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 8
            echo "                           <a href=\"http://partenaires.uneforetdepossibilites.com/fr/partenaires\" target=\"_blank\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Le collectif"));
            echo "</a>
                        ";
        }
        // line 10
        echo "                        ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 11
            echo "                           <a href=\"http://partenaires.uneforetdepossibilites.com/en/partners\" target=\"_blank\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Le collectif"));
            echo "</a>
                        ";
        }
        // line 13
        echo "                    </div>
                    <div class=\"header__secondary-links\">
                        ";
        // line 15
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 16
            echo "                           <a target=\"_blank\" href=\"http://partenaires.uneforetdepossibilites.com/fr\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Partenaires"));
            echo "</a>
                        ";
        }
        // line 18
        echo "                        ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 19
            echo "                           <a target=\"_blank\" href=\"http://partenaires.uneforetdepossibilites.com/en\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Partenaires"));
            echo "</a>
                        ";
        }
        // line 21
        echo "                    </div>
                    <div class=\"header__social-menu\">
                        <a href=\"https://www.facebook.com/uneforetdepossibilites\" target=\"_blank\">
                            <svg class=\"fb-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#facebook\" /></use></svg>
                        </a>
                        <a href=\"https://www.instagram.com/uneforetdepossibilites\" target=\"_blank\">
                            <svg class=\"insta-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#instagram\" /></use></svg>
                        </a>
                        <a href=\"https://www.youtube.com/channel/UCF2sXehDojg9K6CSK8_VtrA/videos\" target=\"_blank\">
                            <svg class=\"youtube-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#youtube\" /></use></svg>
                        </a>
                    </div>
                    <div class=\"header__secondary-links lang-switcher\">
                        ";
        // line 34
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 35
        echo "                    </div>
                    <a class=\"header__menu\" href=\"#\"><span>Menu</span> <div class=\"burger-icon burger-icon--md\"><span></span></div></a>
                </div>
            </div>
            <div class=\"grid-fourth\">
                <a href=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" class=\"header__logo\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Une forêt de possibilités"));
        echo "</a>
            </div>
        </div>
    </div>
    <div class=\"isMobile\"></div>
</header>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 40,  84 => 35,  80 => 34,  65 => 21,  59 => 19,  56 => 18,  50 => 16,  48 => 15,  44 => 13,  38 => 11,  35 => 10,  29 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"grid-three-fourths grid-flip grid-\" >
                <div class=\"header__wrap-links\">
                    <div class=\"header__secondary-links\">
                        {% if locale == 'fr' %}
                           <a href=\"http://partenaires.uneforetdepossibilites.com/fr/partenaires\" target=\"_blank\">{{ 'Le collectif'|_ }}</a>
                        {% endif %}
                        {% if locale == 'en' %}
                           <a href=\"http://partenaires.uneforetdepossibilites.com/en/partners\" target=\"_blank\">{{ 'Le collectif'|_ }}</a>
                        {% endif %}
                    </div>
                    <div class=\"header__secondary-links\">
                        {% if locale == 'fr' %}
                           <a target=\"_blank\" href=\"http://partenaires.uneforetdepossibilites.com/fr\">{{ 'Partenaires'|_ }}</a>
                        {% endif %}
                        {% if locale == 'en' %}
                           <a target=\"_blank\" href=\"http://partenaires.uneforetdepossibilites.com/en\">{{ 'Partenaires'|_ }}</a>
                        {% endif %}
                    </div>
                    <div class=\"header__social-menu\">
                        <a href=\"https://www.facebook.com/uneforetdepossibilites\" target=\"_blank\">
                            <svg class=\"fb-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#facebook\" /></use></svg>
                        </a>
                        <a href=\"https://www.instagram.com/uneforetdepossibilites\" target=\"_blank\">
                            <svg class=\"insta-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#instagram\" /></use></svg>
                        </a>
                        <a href=\"https://www.youtube.com/channel/UCF2sXehDojg9K6CSK8_VtrA/videos\" target=\"_blank\">
                            <svg class=\"youtube-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#youtube\" /></use></svg>
                        </a>
                    </div>
                    <div class=\"header__secondary-links lang-switcher\">
                        {% component 'localePicker' %}
                    </div>
                    <a class=\"header__menu\" href=\"#\"><span>Menu</span> <div class=\"burger-icon burger-icon--md\"><span></span></div></a>
                </div>
            </div>
            <div class=\"grid-fourth\">
                <a href=\"{{ 'home'|page }}\" class=\"header__logo\">{{ 'Une forêt de possibilités'|_ }}</a>
            </div>
        </div>
    </div>
    <div class=\"isMobile\"></div>
</header>", "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/site/header.htm", "");
    }
}
