<?php

/* /var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/quiz.htm */
class __TwigTemplate_67bb29378f70da3de5a3136110d807aa2a87a518e10a91bdead7dedb8710e791 extends Twig_Template
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
        echo "<div class=\"steps\">
    <span class=\"steps__numbers\">01 / 04</span>
    <ul class=\"steps__dots\">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

";
        // line 11
        if (((isset($context["slug"]) ? $context["slug"] : null) == "foret-quebecoise")) {
            // line 12
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("quiz/foret-quebecoise"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        } elseif ((        // line 13
(isset($context["slug"]) ? $context["slug"] : null) == "quebec-forests")) {
            // line 14
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("quiz/foret-quebecoise"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 15
            echo "
";
        } elseif ((        // line 16
(isset($context["slug"]) ? $context["slug"] : null) == "foresterie")) {
            // line 17
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("quiz/foresterie"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        } elseif ((        // line 18
(isset($context["slug"]) ? $context["slug"] : null) == "forestery")) {
            // line 19
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("quiz/foresterie"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 20
            echo "
";
        } elseif ((        // line 21
(isset($context["slug"]) ? $context["slug"] : null) == "bois-ecolo")) {
            // line 22
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("quiz/bois-ecolo"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 23
            echo "
";
        } elseif ((        // line 24
(isset($context["slug"]) ? $context["slug"] : null) == "wood-ecological")) {
            // line 25
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("quiz/bois-ecolo"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
        // line 27
        echo "
<div id=\"responses__copy\">
    <span class=\"responses__copy--true\">CORRECT</span>
    <span class=\"responses__copy--false\">INCORRECT</span>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/quiz.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  77 => 25,  75 => 24,  72 => 23,  67 => 22,  65 => 21,  62 => 20,  57 => 19,  55 => 18,  50 => 17,  48 => 16,  45 => 15,  40 => 14,  38 => 13,  33 => 12,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"steps\">
    <span class=\"steps__numbers\">01 / 04</span>
    <ul class=\"steps__dots\">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

{% if slug == 'foret-quebecoise' %}
    {% partial 'quiz/foret-quebecoise' %}
{% elseif slug == 'quebec-forests' %}
    {% partial 'quiz/foret-quebecoise' %}

{% elseif slug == 'foresterie' %}
    {% partial 'quiz/foresterie' %}
{% elseif slug == 'forestery' %}
    {% partial 'quiz/foresterie' %}

{% elseif slug == 'bois-ecolo' %}
    {% partial 'quiz/bois-ecolo' %}

{% elseif slug == 'wood-ecological' %}
    {% partial 'quiz/bois-ecolo' %}
{% endif %}

<div id=\"responses__copy\">
    <span class=\"responses__copy--true\">CORRECT</span>
    <span class=\"responses__copy--false\">INCORRECT</span>
</div>", "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/quiz.htm", "");
    }
}
