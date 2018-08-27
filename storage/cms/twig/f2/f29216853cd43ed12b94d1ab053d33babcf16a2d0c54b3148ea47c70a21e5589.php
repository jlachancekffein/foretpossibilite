<?php

/* /var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/possibilities/healthy-resource.htm */
class __TwigTemplate_4225f148063ca7c2862e6b7ddff0a797b2ba764f11d7b217aeb4930ea741ed8f extends Twig_Template
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
            echo "    <div class=\"row\" data-right-height>
    <div class=\"grid-half\" data-right-height-content>
        <div class=\"wrap-pics\">
            <img data-animate=\"true\" src=\"";
            // line 5
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/possibilities/pic-healthy-resource-2.png");
            echo "\" alt=\"\">
        </div>
    </div>
    <div class=\"grid-half\" data-right-height-content>
        <h2>Une forêt naturelle</h2>
        <ul>
            <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Il n’y a pas de monoculture au Québec. Contrairement à la forêt naturelle, la monoculture désigne la plantation d’une seule sorte d’arbre améliorée sur d’immenses superficies, à des fins uniques de production de bois.</li>
            <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>La forêt québécoise est aménagée depuis plusieurs décennies. Au fil du temps, sa dynamique naturelle et sa biodiversité ont été préservées.</li>
            <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Près de 50 % du territoire québécois est recouvert de forêt, ce qui représente 760 000 km<sup>2</sup>.</li>
        </ul>
    </div>
</div>
";
        }
        // line 18
        echo "
";
        // line 19
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 20
            echo "    <div class=\"row\" data-right-height>
    <div class=\"grid-half\" data-right-height-content>
        <div class=\"wrap-pics\">
            <img data-animate=\"true\" src=\"";
            // line 23
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/possibilities/pic-healthy-resource-2-en.png");
            echo "\" alt=\"\">
        </div>
    </div>
    <div class=\"grid-half\" data-right-height-content>
        <h2>A natural forest</h2>
        <ul>
            <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Monoculture does not exist in Quebec. The term “monoculture” refers to the planting of one type of enhanced tree over huge areas, for the sole purpose of wood production. Natural forests are composed of many different types.</li>
            <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Quebec’s forest has been under management for several decades. Its natural dynamic and biodiversity have been preserved over time.</li>
            <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Nearly 50% of Quebec’s territory, or 760 000 km<sup>2</sup>, is covered in forest.</li>
        </ul>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/possibilities/healthy-resource.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 23,  47 => 20,  45 => 19,  42 => 18,  26 => 5,  21 => 2,  19 => 1,);
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
    <div class=\"row\" data-right-height>
    <div class=\"grid-half\" data-right-height-content>
        <div class=\"wrap-pics\">
            <img data-animate=\"true\" src=\"{{ 'assets/public/images/possibilities/pic-healthy-resource-2.png'|theme }}\" alt=\"\">
        </div>
    </div>
    <div class=\"grid-half\" data-right-height-content>
        <h2>Une forêt naturelle</h2>
        <ul>
            <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Il n’y a pas de monoculture au Québec. Contrairement à la forêt naturelle, la monoculture désigne la plantation d’une seule sorte d’arbre améliorée sur d’immenses superficies, à des fins uniques de production de bois.</li>
            <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>La forêt québécoise est aménagée depuis plusieurs décennies. Au fil du temps, sa dynamique naturelle et sa biodiversité ont été préservées.</li>
            <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Près de 50 % du territoire québécois est recouvert de forêt, ce qui représente 760 000 km<sup>2</sup>.</li>
        </ul>
    </div>
</div>
{% endif %}

{% if locale == 'en' %}
    <div class=\"row\" data-right-height>
    <div class=\"grid-half\" data-right-height-content>
        <div class=\"wrap-pics\">
            <img data-animate=\"true\" src=\"{{ 'assets/public/images/possibilities/pic-healthy-resource-2-en.png'|theme }}\" alt=\"\">
        </div>
    </div>
    <div class=\"grid-half\" data-right-height-content>
        <h2>A natural forest</h2>
        <ul>
            <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Monoculture does not exist in Quebec. The term “monoculture” refers to the planting of one type of enhanced tree over huge areas, for the sole purpose of wood production. Natural forests are composed of many different types.</li>
            <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Quebec’s forest has been under management for several decades. Its natural dynamic and biodiversity have been preserved over time.</li>
            <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Nearly 50% of Quebec’s territory, or 760 000 km<sup>2</sup>, is covered in forest.</li>
        </ul>
    </div>
</div>
{% endif %}", "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/possibilities/healthy-resource.htm", "");
    }
}
