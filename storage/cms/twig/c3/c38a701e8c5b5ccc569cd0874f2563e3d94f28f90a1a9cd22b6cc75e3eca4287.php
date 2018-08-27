<?php

/* /var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/possibilities/wood-second-life.htm */
class __TwigTemplate_101e925c41bb972ecac624e372ea6ee3815fdad847827f6b45b3a9f74ea6e873 extends Twig_Template
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
            <img data-animate=\"true\" src=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/possibilities/pic-wood-second-life-1.png");
        echo "\" alt=\"\">
            <!-- <img data-animate=\"true\" src=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/possibilities/pic-wood-second-life-2.png");
        echo "\" alt=\"\"> -->
        </div>
    </div>
    <div class=\"grid-half\" data-right-height-content>
        ";
        // line 9
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 10
            echo "            <h2>Les multiples vies du bois</h2>
            <ul>
                <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg><strong>Le bois et le papier sont recyclables</strong>. Le papier est la matière la plus recyclée au monde.</li>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg><strong>Le bois est récupérable et réutilisable</strong>. Les résidus du sciage sont récupérés dans la fabrication de pâtes, de papiers, de cartons et de panneaux de bois, ainsi que dans la production d’énergie</li>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg><strong>Le bois est écologique</strong>. La transformation du bois de construction est beaucoup moins polluante et requiert moins d’énergie que celle d’autres matériaux.</li>
            </ul>
        ";
        }
        // line 17
        echo "        ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 18
            echo "            <h2>The many lives of wood</h2>
            <ul>
                <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg><strong>Wood and paper are recyclable</strong>. Paper is the most recycled material on earth.</li>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg><strong>Wood can be salvaged and reused</strong>. Sawmill by-products are salvaged to produce pulp, paper, cardboard, boards and energy.</li>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg><strong><strong>Wood is an ecological material</strong>. The use of wood in construction pollutes much less and requires less energy than other materials.</li>
            </ul>
        ";
        }
        // line 25
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/possibilities/wood-second-life.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 25,  49 => 18,  46 => 17,  37 => 10,  35 => 9,  28 => 5,  24 => 4,  19 => 1,);
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
            <img data-animate=\"true\" src=\"{{ 'assets/public/images/possibilities/pic-wood-second-life-1.png'|theme }}\" alt=\"\">
            <!-- <img data-animate=\"true\" src=\"{{ 'assets/public/images/possibilities/pic-wood-second-life-2.png'|theme }}\" alt=\"\"> -->
        </div>
    </div>
    <div class=\"grid-half\" data-right-height-content>
        {% if locale == 'fr' %}
            <h2>Les multiples vies du bois</h2>
            <ul>
                <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg><strong>Le bois et le papier sont recyclables</strong>. Le papier est la matière la plus recyclée au monde.</li>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg><strong>Le bois est récupérable et réutilisable</strong>. Les résidus du sciage sont récupérés dans la fabrication de pâtes, de papiers, de cartons et de panneaux de bois, ainsi que dans la production d’énergie</li>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg><strong>Le bois est écologique</strong>. La transformation du bois de construction est beaucoup moins polluante et requiert moins d’énergie que celle d’autres matériaux.</li>
            </ul>
        {% endif %}
        {% if locale == 'en' %}
            <h2>The many lives of wood</h2>
            <ul>
                <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg><strong>Wood and paper are recyclable</strong>. Paper is the most recycled material on earth.</li>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg><strong>Wood can be salvaged and reused</strong>. Sawmill by-products are salvaged to produce pulp, paper, cardboard, boards and energy.</li>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg><strong><strong>Wood is an ecological material</strong>. The use of wood in construction pollutes much less and requires less energy than other materials.</li>
            </ul>
        {% endif %}

    </div>
</div>", "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/possibilities/wood-second-life.htm", "");
    }
}
