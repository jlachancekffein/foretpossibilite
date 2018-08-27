<?php

/* /home/vagrant/code/themes/cifq/partials/possibilities/responsabilities.htm */
class __TwigTemplate_377b896396a1458949199b783456e56104b350ed4d5d53e857d017a0127ca13a extends Twig_Template
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
        if ((($context["locale"] ?? null) == "fr")) {
            // line 5
            echo "                <img data-animate=\"true\" src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/possibilities/pic-responsabilities-1.png");
            echo "\" alt=\"\">
            ";
        }
        // line 7
        echo "            ";
        if ((($context["locale"] ?? null) == "en")) {
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
        if ((($context["locale"] ?? null) == "fr")) {
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
        if ((($context["locale"] ?? null) == "en")) {
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
        return "/home/vagrant/code/themes/cifq/partials/possibilities/responsabilities.htm";
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
        return new Twig_Source("", "/home/vagrant/code/themes/cifq/partials/possibilities/responsabilities.htm", "");
    }
}
