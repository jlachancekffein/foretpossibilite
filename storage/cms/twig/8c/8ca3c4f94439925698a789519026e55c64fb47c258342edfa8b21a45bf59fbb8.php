<?php

/* /home/vagrant/code/themes/cifq/partials/site/nav.htm */
class __TwigTemplate_f37353f9ca95e9c4ed28a6134cd67b654a2ce841dc69f5cd85081e8292ce6a5b extends Twig_Template
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
        echo "<nav class=\"nav\">
    <div class=\"nav__content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"grid-full\">
                    <div class=\"nav__content--menu\">
                        <ul class=\"nav__content--menu-main\">
                            <li>
                                <a href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("faq");
        echo "\">
                                    <span>";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Grands espaces, grandes questions"));
        echo " <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/icons.svg#arrow-next");
        echo "\" /></use></svg></span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("possibilities");
        echo "\">
                                    <span>";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Regard sur la forêt"));
        echo " <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/icons.svg#arrow-next");
        echo "\" /></use></svg></span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("cycle");
        echo "\">
                                    <span>";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Le parcours de l’arbre"));
        echo " <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/icons.svg#arrow-next");
        echo "\" /></use></svg></span>
                                </a>
                            </li>
                        </ul>
                        ";
        // line 24
        if ((($context["locale"] ?? null) == "fr")) {
            // line 25
            echo "                           <a class=\"btn partners-btn\" target=\"_blank\" href=\"http://partenaires.uneforetdepossibilites.com/fr\">
                        ";
        }
        // line 27
        echo "                        ";
        if ((($context["locale"] ?? null) == "en")) {
            // line 28
            echo "                           <a class=\"btn partners-btn\" target=\"_blank\" href=\"http://partenaires.uneforetdepossibilites.com/en\">
                        ";
        }
        // line 30
        echo "                        
                            <span>";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Espace partenaires"));
        echo "</span>
                            <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/icons.svg#arrow-next");
        echo "\" /></use></svg>
                        </a>
                        <small class=\"nav__copy\">&copy; ";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Collectif pour une forêt durable. Tous droits réservés."));
        echo "
                            ";
        // line 35
        if ((($context["locale"] ?? null) == "fr")) {
            // line 36
            echo "                                <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/documents/confidentiality_policy_CIFQ.pdf");
            echo "\" target=\"_blank\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Politiques de confidentialité"));
            echo "</a>.
                            ";
        }
        // line 38
        echo "                            ";
        if ((($context["locale"] ?? null) == "en")) {
            // line 39
            echo "                                <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/documents/confidentiality_policy_CIFQ.pdf");
            echo "\" target=\"_blank\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Politiques de confidentialité"));
            echo "</a>.
                            ";
        }
        // line 41
        echo "                            </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"nav__overlay\"></div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/themes/cifq/partials/site/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 41,  110 => 39,  107 => 38,  99 => 36,  97 => 35,  93 => 34,  88 => 32,  84 => 31,  81 => 30,  77 => 28,  74 => 27,  70 => 25,  68 => 24,  59 => 20,  55 => 19,  46 => 15,  42 => 14,  33 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/code/themes/cifq/partials/site/nav.htm", "");
    }
}
