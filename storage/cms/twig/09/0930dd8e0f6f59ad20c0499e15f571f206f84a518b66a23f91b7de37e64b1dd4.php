<?php

/* /var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/cycle.htm */
class __TwigTemplate_684b6cc2e698d238047f1caf22d34d8b25ef3bf4f7583846384bcba133a6dd83 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('wrapper_before'        );
        // line 2
        echo "    <div class=\"wrapper__inner\"></div>
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 4
        echo "
<div id=\"preload-images\" style=\"display:none\"></div>

<div class=\"content\">

    <div class=\"page__title\">
        <div class=\"container\">
            <h1 class=\"page__title-text\"><span>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Le parcours de l'arbre"));
        echo "<span></h1>
            <picture class=\"page__title-img\">
                ";
        // line 13
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 14
            echo "                    <img src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/cycle-title-fr.svg");
            echo "\" alt=\"Le cycle d'un arbre\">
                ";
        }
        // line 16
        echo "                ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 17
            echo "                <img src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/cycle-title-en.png");
            echo "\" alt=\"";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Le parcours de l'arbre"));
            echo "\">
                ";
        }
        // line 19
        echo "            </picture>
        </div>
    </div>

    <div class=\"page__content\" data-fade-in-element>
        <div class=\"container\">
            <div class=\"circles\">
                <div class=\"circle circle--left circle--is-hidden\" data-slider-back>
                    <img class=\"circle__image circle__image--co2 circle__image--is-visible\" src=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/cycle-circle-co2.png");
        echo "\">
                </div>
                <div class=\"circle circle--center\">
                    <img class=\"circle__image circle__image--co2 circle__image--is-visible\" src=\"";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/cycle-circle-co2.png");
        echo "\">
                </div>
                <div class=\"circle circle--right\" data-slider-forward>
                    <img class=\"circle__image circle__image--recolte circle__image--is-visible\" src=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/cycle-circle-recolte.png");
        echo "\">
                </div>
            </div>
            <div class=\"carousel-wrap\">
                <div class=\"switcher\">
                    <span class=\"switcher__arrow switcher__arrow--left\" data-slider-back>
                        <div class=\"switcher__icon\">
                            <svg class=\"arrow-prev-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#arrow-prev\"></use></svg>
                        </div>
                    </span>
                    <span class=\"switcher__arrow switcher__arrow--right\" data-slider-forward>
                        <div class=\"switcher__icon\">
                            <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#arrow-next\"></use></svg>
                        </div>
                    </span>
                </div>
                <div class=\"carousel\">
                    ";
        // line 50
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 51
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 52
                echo "                            <div class=\"slide\"
                                data-background-image=\"";
                // line 53
                echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter($this->getAttribute($context["slide"], "background_image", array()));
                echo "\"
                                data-circle-image=\"";
                // line 54
                echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter($this->getAttribute($context["slide"], "circle_image", array()));
                echo "\"
                                data-slug=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "slug", array()), "html", null, true);
                echo "\"
                            >
                                <div class=\"slide__header\">
                                    <div class=\"slide__number\">";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "number", array()), "html", null, true);
                echo ".</div>
                                    <div class=\"slide__title\">";
                // line 59
                echo $this->getAttribute($context["slide"], "title", array());
                echo "</div>
                                </div>
                                <div class=\"slide__body\">
                                    ";
                // line 62
                echo $this->getAttribute($context["slide"], "content", array());
                echo "
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                    ";
        }
        // line 67
        echo "                    ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 68
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slidesEN"]) ? $context["slidesEN"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 69
                echo "                            <div class=\"slide\"
                                data-background-image=\"";
                // line 70
                echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter($this->getAttribute($context["slide"], "background_image", array()));
                echo "\"
                                data-circle-image=\"";
                // line 71
                echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter($this->getAttribute($context["slide"], "circle_image", array()));
                echo "\"
                                data-slug=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "slug", array()), "html", null, true);
                echo "\"
                            >
                                <div class=\"slide__header\">
                                    <div class=\"slide__number\">";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "number", array()), "html", null, true);
                echo ".</div>
                                    <div class=\"slide__title\">";
                // line 76
                echo $this->getAttribute($context["slide"], "title", array());
                echo "</div>
                                </div>
                                <div class=\"slide__body\">
                                    ";
                // line 79
                echo $this->getAttribute($context["slide"], "content", array());
                echo "
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                    ";
        }
        // line 84
        echo "
                </div>
            </div>
        </div>
    </div><!-- .page__content -->

</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/cycle.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 84,  193 => 83,  183 => 79,  177 => 76,  173 => 75,  167 => 72,  163 => 71,  159 => 70,  156 => 69,  151 => 68,  148 => 67,  145 => 66,  135 => 62,  129 => 59,  125 => 58,  119 => 55,  115 => 54,  111 => 53,  108 => 52,  103 => 51,  101 => 50,  81 => 33,  75 => 30,  69 => 27,  59 => 19,  51 => 17,  48 => 16,  42 => 14,  40 => 13,  35 => 11,  26 => 4,  24 => 1,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put wrapper_before %}
    <div class=\"wrapper__inner\"></div>
{% endput %}

<div id=\"preload-images\" style=\"display:none\"></div>

<div class=\"content\">

    <div class=\"page__title\">
        <div class=\"container\">
            <h1 class=\"page__title-text\"><span>{{ 'Le parcours de l\\'arbre'|_ }}<span></h1>
            <picture class=\"page__title-img\">
                {% if locale == 'fr' %}
                    <img src=\"{{ 'assets/public/images/cycle-title-fr.svg' | theme }}\" alt=\"Le cycle d'un arbre\">
                {% endif %}
                {% if locale == 'en' %}
                <img src=\"{{ 'assets/public/images/cycle-title-en.png' | theme }}\" alt=\"{{ 'Le parcours de l\\'arbre'|_ }}\">
                {% endif %}
            </picture>
        </div>
    </div>

    <div class=\"page__content\" data-fade-in-element>
        <div class=\"container\">
            <div class=\"circles\">
                <div class=\"circle circle--left circle--is-hidden\" data-slider-back>
                    <img class=\"circle__image circle__image--co2 circle__image--is-visible\" src=\"{{ 'assets/public/images/cycle-circle-co2.png' | theme }}\">
                </div>
                <div class=\"circle circle--center\">
                    <img class=\"circle__image circle__image--co2 circle__image--is-visible\" src=\"{{ 'assets/public/images/cycle-circle-co2.png' | theme }}\">
                </div>
                <div class=\"circle circle--right\" data-slider-forward>
                    <img class=\"circle__image circle__image--recolte circle__image--is-visible\" src=\"{{ 'assets/public/images/cycle-circle-recolte.png' | theme }}\">
                </div>
            </div>
            <div class=\"carousel-wrap\">
                <div class=\"switcher\">
                    <span class=\"switcher__arrow switcher__arrow--left\" data-slider-back>
                        <div class=\"switcher__icon\">
                            <svg class=\"arrow-prev-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#arrow-prev\"></use></svg>
                        </div>
                    </span>
                    <span class=\"switcher__arrow switcher__arrow--right\" data-slider-forward>
                        <div class=\"switcher__icon\">
                            <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#arrow-next\"></use></svg>
                        </div>
                    </span>
                </div>
                <div class=\"carousel\">
                    {% if locale == 'fr' %}
                        {% for slide in slides %}
                            <div class=\"slide\"
                                data-background-image=\"{{ slide.background_image | theme }}\"
                                data-circle-image=\"{{ slide.circle_image | theme }}\"
                                data-slug=\"{{ slide.slug }}\"
                            >
                                <div class=\"slide__header\">
                                    <div class=\"slide__number\">{{ slide.number }}.</div>
                                    <div class=\"slide__title\">{{ slide.title | raw }}</div>
                                </div>
                                <div class=\"slide__body\">
                                    {{ slide.content | raw }}
                                </div>
                            </div>
                        {% endfor %}
                    {% endif %}
                    {% if locale == 'en' %}
                        {% for slide in slidesEN %}
                            <div class=\"slide\"
                                data-background-image=\"{{ slide.background_image | theme }}\"
                                data-circle-image=\"{{ slide.circle_image | theme }}\"
                                data-slug=\"{{ slide.slug }}\"
                            >
                                <div class=\"slide__header\">
                                    <div class=\"slide__number\">{{ slide.number }}.</div>
                                    <div class=\"slide__title\">{{ slide.title | raw }}</div>
                                </div>
                                <div class=\"slide__body\">
                                    {{ slide.content | raw }}
                                </div>
                            </div>
                        {% endfor %}
                    {% endif %}

                </div>
            </div>
        </div>
    </div><!-- .page__content -->

</div>", "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/cycle.htm", "");
    }
}
