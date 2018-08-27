<?php

/* /home/vagrant/code/themes/cifq/partials/possibilities/share-territory.htm */
class __TwigTemplate_53fbe42f549448b9713b8ce43b6952c78ac7565dae30521a4e5a0f3f195f35f2 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/possibilities/pic-share-territory-2.png");
        echo "\" alt=\"\">
        </div>
    </div>
    <div class=\"grid-half\" data-right-height-content>
        ";
        // line 8
        if ((($context["locale"] ?? null) == "fr")) {
            // line 9
            echo "            <h2>Un territoire partagé</h2>
            <ul>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Dans les forêts publiques québécoises, il n’est pas rare de voir plus d’une dizaine de types d’utilisateurs interagir sur un même territoire. En effet, chasseurs, villégiateurs, randonneurs et travailleurs forestiers se côtoient quotidiennement, créant une dynamique unique au monde.</li>
                <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>Au Québec, 90 % du territoire forestier est public. L’harmonisation des usages est donc une condition essentielle au maintien de l’ensemble des activités en forêt.</li>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg> Les forêts privées représentent 8 % du territoire et appartiennent à plus de 130 000 propriétaires – des acteurs importants dans le paysage forestier.</li>
            </ul>
        ";
        }
        // line 16
        echo "        ";
        if ((($context["locale"] ?? null) == "en")) {
            // line 17
            echo "            <h2>A shared territory</h2>
            <ul>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>In Quebec’s public forests, it is common to see ten or more different users interacting in the same area. Hunters, tourists, hikers and forestry workers cross paths every day, creating a truly unique dynamic.</li>
                <li data-animate=\"true\"><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>In Quebec, 90% of the forest is publicly owned. Harmonization of use is therefore essential if activities are to be maintained in the forest.</li>
                <li><svg class=\"check-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#check\" /></use></svg>The private forests account for 8% of Québec’s forest land. They belong to more than 130,000 owners who are important stakeholders in the forest landscape.</li>
            </ul>
        ";
        }
        // line 24
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/themes/cifq/partials/possibilities/share-territory.htm";
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
        return new Twig_Source("", "/home/vagrant/code/themes/cifq/partials/possibilities/share-territory.htm", "");
    }
}
