<?php

/* /var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/possibility.htm */
class __TwigTemplate_a67911102889260b40c5f266e69edbdd2546fafa6a01d4c83f47484d834755ce extends Twig_Template
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
        echo "<div class=\"content\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"grid-full\">
                <h1 class=\"title\">";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Regard sur la forêt"));
        echo "</h1>
            </div>
        </div>
        <div class=\"possibility__content\">
            <ul class=\"possibility__index-nav\">
                ";
        // line 10
        $context["i"] = 1;
        // line 11
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slugList"]) ? $context["slugList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
            // line 12
            echo "                    ";
            if (($context["route"] == (isset($context["slug"]) ? $context["slug"] : null))) {
                // line 13
                echo "                        <li class=\"possibility__index-nav--item\"><a class=\"active\" href=\"#\"><span>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</span></a></li>
                    ";
            } else {
                // line 15
                echo "                        <li class=\"possibility__index-nav--item\"><a href=\"";
                echo twig_escape_filter($this->env, $context["route"], "html", null, true);
                echo "\"><span>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</span></a></li>
                    ";
            }
            // line 17
            echo "                    ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 18
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </ul>
            <div class=\"row possibility__switcher\">
                <div class=\"grid-full\">
                    <div class=\"possibility__icon-nav\">
                        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["previousSlug"]) ? $context["previousSlug"] : null), "html", null, true);
        echo "\">
                            <svg class=\"arrow-prev-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#arrow-prev\" /></use></svg>
                        </a>
                        <a href=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("possibilities");
        echo "\">
                            <svg class=\"squares-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#squares\" /></use></svg>
                        </a>
                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["nextSlug"]) ? $context["nextSlug"] : null), "html", null, true);
        echo "\">
                            <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#arrow-next\" /></use></svg>
                        </a>
                    </div>

                </div>
            </div>
            <div class=\"possibility__main\">
                ";
        // line 37
        if (((isset($context["possibility"]) ? $context["possibility"] : null) == "healthy-resource")) {
            // line 38
            echo "                    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("possibilities/healthy-resource"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 39
            echo "                ";
        } elseif (((isset($context["possibility"]) ? $context["possibility"] : null) == "practices-evolution")) {
            // line 40
            echo "                    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("possibilities/practices-evolution"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 41
            echo "                ";
        } elseif (((isset($context["possibility"]) ? $context["possibility"] : null) == "share-territory")) {
            // line 42
            echo "                    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("possibilities/share-territory"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 43
            echo "                ";
        } elseif (((isset($context["possibility"]) ? $context["possibility"] : null) == "wood-second-life")) {
            // line 44
            echo "                    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("possibilities/wood-second-life"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 45
            echo "                ";
        } elseif (((isset($context["possibility"]) ? $context["possibility"] : null) == "responsabilities")) {
            // line 46
            echo "                    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("possibilities/responsabilities"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 47
            echo "                ";
        } elseif (((isset($context["possibility"]) ? $context["possibility"] : null) == "climate-change")) {
            // line 48
            echo "                    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("possibilities/climate-change"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 49
            echo "                ";
        }
        // line 50
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/possibility.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 50,  142 => 49,  137 => 48,  134 => 47,  129 => 46,  126 => 45,  121 => 44,  118 => 43,  113 => 42,  110 => 41,  105 => 40,  102 => 39,  97 => 38,  95 => 37,  84 => 29,  78 => 26,  72 => 23,  66 => 19,  60 => 18,  57 => 17,  49 => 15,  43 => 13,  40 => 12,  35 => 11,  33 => 10,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"grid-full\">
                <h1 class=\"title\">{{ 'Regard sur la forêt'|_ }}</h1>
            </div>
        </div>
        <div class=\"possibility__content\">
            <ul class=\"possibility__index-nav\">
                {% set i = 1 %}
                {% for route in slugList %}
                    {% if route == slug %}
                        <li class=\"possibility__index-nav--item\"><a class=\"active\" href=\"#\"><span>{{ i }}</span></a></li>
                    {% else %}
                        <li class=\"possibility__index-nav--item\"><a href=\"{{ route }}\"><span>{{ i }}</span></a></li>
                    {% endif %}
                    {% set i = i + 1 %}
                {% endfor %}
            </ul>
            <div class=\"row possibility__switcher\">
                <div class=\"grid-full\">
                    <div class=\"possibility__icon-nav\">
                        <a href=\"{{ previousSlug }}\">
                            <svg class=\"arrow-prev-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#arrow-prev\" /></use></svg>
                        </a>
                        <a href=\"{{ 'possibilities'|page }}\">
                            <svg class=\"squares-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#squares\" /></use></svg>
                        </a>
                        <a href=\"{{ nextSlug }}\">
                            <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#arrow-next\" /></use></svg>
                        </a>
                    </div>

                </div>
            </div>
            <div class=\"possibility__main\">
                {% if possibility == 'healthy-resource' %}
                    {% partial 'possibilities/healthy-resource' %}
                {% elseif possibility == 'practices-evolution' %}
                    {% partial 'possibilities/practices-evolution' %}
                {% elseif possibility == 'share-territory' %}
                    {% partial 'possibilities/share-territory' %}
                {% elseif possibility == 'wood-second-life' %}
                    {% partial 'possibilities/wood-second-life' %}
                {% elseif possibility == 'responsabilities' %}
                    {% partial 'possibilities/responsabilities' %}
                {% elseif possibility == 'climate-change' %}
                    {% partial 'possibilities/climate-change' %}
                {% endif %}
            </div>
        </div>
    </div>
</div>", "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/possibility.htm", "");
    }
}
