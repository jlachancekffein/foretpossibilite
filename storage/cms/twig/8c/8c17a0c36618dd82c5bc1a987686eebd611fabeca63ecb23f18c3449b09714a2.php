<?php

/* /var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/possibilities/responsabilities.htm */
class __TwigTemplate_a33897fc257db8205ec6e6f36c9177432b231dec173b27516c25bfa6ec882506 extends Twig_Template
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
        echo "<div class=\"row\" data-right-height>
    <div class=\"grid-half\" data-right-height-content>
        <div class=\"wrap-pics\">
            ";
        // line 4
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 5
            echo "                <img data-animate=\"true\" src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/possibilities/pic-responsabilities-1.png");
            echo "\" alt=\"\">
            ";
        }
        // line 7
        echo "            ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 8
            echo "                <img data-animate=\"true\" src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/possibilities/pic-responsabilities-1-en.png");
            echo "\" alt=\"\">
            ";
        }
        // line 10
        echo "
        </div>
    </div>
    <div class=\"grid-half\" data-right-height-content>
        ";
        // line 14
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 15
            echo "            <h2>Responsabilités et certifications</h2>
            <ul>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Il est du devoir du Gouvernement du Québec de gérer les ressources de façon responsable, mais tous les Québécois ont un rôle à jouer en ce qui concerne le développement du territoire forestier.</li>
                <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Au Québec, 85 % des forêts publiques sont certifiées, ce qui représente la plus grande superficie certifiée au monde. Cette reconnaissance supplémentaire aux lois et règlements en vigueur garantit que les pratiques forestières respectent les normes établies afin d’assurer la durabilité de la forêt.</li>
            </ul>
        ";
        }
        // line 21
        echo "        ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 22
            echo "            <h2>Responsibilities and certifications</h2>
            <ul>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>It is the Quebec Government’s responsibility to manage the resources responsibly, but all Quebecers have a role to play in forest development.</li>
                <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Roughly 85% of Québec’s public forests are certified, and make up the largest certified area of forest in the world. This additional recognition, over and above current legislation and regulations, guarantees that forest practices comply with the standards introduced to ensure that the forest is sustainable.</li>
            </ul>
        ";
        }
        // line 28
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/possibilities/responsabilities.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 28,  60 => 22,  57 => 21,  49 => 15,  47 => 14,  41 => 10,  35 => 8,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\" data-right-height>
    <div class=\"grid-half\" data-right-height-content>
        <div class=\"wrap-pics\">
            {% if locale == 'fr' %}
                <img data-animate=\"true\" src=\"{{ 'assets/public/images/possibilities/pic-responsabilities-1.png'|theme }}\" alt=\"\">
            {% endif %}
            {% if locale == 'en' %}
                <img data-animate=\"true\" src=\"{{ 'assets/public/images/possibilities/pic-responsabilities-1-en.png'|theme }}\" alt=\"\">
            {% endif %}

        </div>
    </div>
    <div class=\"grid-half\" data-right-height-content>
        {% if locale == 'fr' %}
            <h2>Responsabilités et certifications</h2>
            <ul>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Il est du devoir du Gouvernement du Québec de gérer les ressources de façon responsable, mais tous les Québécois ont un rôle à jouer en ce qui concerne le développement du territoire forestier.</li>
                <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Au Québec, 85 % des forêts publiques sont certifiées, ce qui représente la plus grande superficie certifiée au monde. Cette reconnaissance supplémentaire aux lois et règlements en vigueur garantit que les pratiques forestières respectent les normes établies afin d’assurer la durabilité de la forêt.</li>
            </ul>
        {% endif %}
        {% if locale == 'en' %}
            <h2>Responsibilities and certifications</h2>
            <ul>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>It is the Quebec Government’s responsibility to manage the resources responsibly, but all Quebecers have a role to play in forest development.</li>
                <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Roughly 85% of Québec’s public forests are certified, and make up the largest certified area of forest in the world. This additional recognition, over and above current legislation and regulations, guarantees that forest practices comply with the standards introduced to ensure that the forest is sustainable.</li>
            </ul>
        {% endif %}
    </div>
</div>", "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/possibilities/responsabilities.htm", "");
    }
}
