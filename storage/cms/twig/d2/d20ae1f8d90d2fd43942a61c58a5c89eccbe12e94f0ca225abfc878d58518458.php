<?php

/* /home/vagrant/code/themes/cifq/partials/site/svg-sprite.htm */
class __TwigTemplate_e0bd8d8becd3f04f3c717f21c6106b687e863c475d79f566e729f41e6800f218 extends Twig_Template
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
        echo ($context["SVG_SPRITE"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/themes/cifq/partials/site/svg-sprite.htm";
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
</div>", "/home/vagrant/code/themes/cifq/partials/site/svg-sprite.htm", "");
    }
}
