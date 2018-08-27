<?php

/* /var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/site/svg-sprite.htm */
class __TwigTemplate_4f27acdf817b23abb3564fac8fc03979b4bc66da7c95de95de66efdd80d3bf82 extends Twig_Template
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
        echo "<div style=\"display: none;\">
    ";
        // line 2
        echo (isset($context["SVG_SPRITE"]) ? $context["SVG_SPRITE"] : null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/site/svg-sprite.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"display: none;\">
    {{ SVG_SPRITE | raw }}
</div>", "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/site/svg-sprite.htm", "");
    }
}
