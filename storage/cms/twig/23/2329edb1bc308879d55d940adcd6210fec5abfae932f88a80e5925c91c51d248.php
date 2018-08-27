<?php

/* /var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/possibilities/climate-change.htm */
class __TwigTemplate_0961d51e3aa6742489306d9bd42c69832484fad1eb531a70488d91d16e941b24 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/possibilities/pic-climate-change-1.png");
        echo "\" alt=\"\">
        </div>
    </div>
    <div class=\"grid-half\" data-right-height-content>
        ";
        // line 8
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 9
            echo "            <h2>La lutte aux changements climatiques</h2>
            <ul>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Les arbres transformés en produits du bois génèrent des gains importants pour l’environnement, car ils continuent de séquestrer le carbone, principal composant des gaz à effet de serre (GES).</li>
                <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Chaque 1&nbsp;m<sup>3</sup> de forêt en croissance absorbe 1&nbsp;tonne de CO<sub>2</sub>. Les arbres emmagasinent le carbone (C) et libèrent l’oxygène (O<sub>2</sub>), ce qui purifie l’air. Le bois est donc constitué à 50 % de carbone.</li>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg> L’utilisation de 1&nbsp;m<sup>3</sup> de bois de construction permet de retirer 0,9&nbsp;tonne de CO<sub>2</sub> de l'atmosphère.</li>
            </ul>
        ";
        }
        // line 16
        echo "        ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 17
            echo "            <h2>The fight against climate change</h2>
            <ul>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Trees that are processed into wood products generate important benefits for the environment, since they continue to store carbon, which is the main constituent of greenhouse gas.</li>
                <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Every cubic metre of growing forest absorbs one metric ton of CO<sub>2</sub>.Trees store carbon (C) and release oxygen (O<sub>2</sub>), purifying the air. Wood is composed of 50% carbon.</li>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>One cubic metre of wood used in construction can remove 0.9 metric tons of  CO<sub>2</sub> from the atmosphere</li>
            </ul>
        ";
        }
        // line 24
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/possibilities/climate-change.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  45 => 17,  42 => 16,  33 => 9,  31 => 8,  24 => 4,  19 => 1,);
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
            <img data-animate=\"true\" src=\"{{ 'assets/public/images/possibilities/pic-climate-change-1.png'|theme }}\" alt=\"\">
        </div>
    </div>
    <div class=\"grid-half\" data-right-height-content>
        {% if locale == 'fr' %}
            <h2>La lutte aux changements climatiques</h2>
            <ul>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Les arbres transformés en produits du bois génèrent des gains importants pour l’environnement, car ils continuent de séquestrer le carbone, principal composant des gaz à effet de serre (GES).</li>
                <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Chaque 1&nbsp;m<sup>3</sup> de forêt en croissance absorbe 1&nbsp;tonne de CO<sub>2</sub>. Les arbres emmagasinent le carbone (C) et libèrent l’oxygène (O<sub>2</sub>), ce qui purifie l’air. Le bois est donc constitué à 50 % de carbone.</li>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg> L’utilisation de 1&nbsp;m<sup>3</sup> de bois de construction permet de retirer 0,9&nbsp;tonne de CO<sub>2</sub> de l'atmosphère.</li>
            </ul>
        {% endif %}
        {% if locale == 'en' %}
            <h2>The fight against climate change</h2>
            <ul>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Trees that are processed into wood products generate important benefits for the environment, since they continue to store carbon, which is the main constituent of greenhouse gas.</li>
                <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Every cubic metre of growing forest absorbs one metric ton of CO<sub>2</sub>.Trees store carbon (C) and release oxygen (O<sub>2</sub>), purifying the air. Wood is composed of 50% carbon.</li>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>One cubic metre of wood used in construction can remove 0.9 metric tons of  CO<sub>2</sub> from the atmosphere</li>
            </ul>
        {% endif %}
    </div>
</div>", "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/possibilities/climate-change.htm", "");
    }
}
