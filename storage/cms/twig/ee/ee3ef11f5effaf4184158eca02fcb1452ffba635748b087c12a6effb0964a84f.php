<?php

/* /var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/voxpop.htm */
class __TwigTemplate_9db6d192b3620e626a6b74187ef04cad6c433932e98071ccd57d58fbb51d77d4 extends Twig_Template
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

    <div class=\"page__title\">
        <div class=\"container\">
            <h1 class=\"page__title-text\">";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("<span>Grands espaces, </span><span>grandes questions<span>"));
        echo "</h1>
                ";
        // line 6
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 7
            echo "                    <picture class=\"page__title-img\">
                        <img src=\"";
            // line 8
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/faq-title-fr.svg");
            echo "\" alt=\"Grands espaces, grandes questions\">
                    </picture>
                ";
        }
        // line 11
        echo "                ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 12
            echo "                    <picture class=\"page__title-img\">
                        <img src=\"";
            // line 13
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/faq-title-en.png");
            echo "\" alt=\"Big Spaces, Big Questions\">
                    </picture>
                ";
        }
        // line 16
        echo "        </div>
    </div>

    <div class=\"page__menu\">
        <div class=\"container\">
            <ul>
                <li>
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("faq");
        echo "#question\">
                        <div class=\"circle-button circle-button--question\">
                            <div class=\"circle-button__icon\">
                                <svg class=\"question-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#question\"></use></svg>
                            </div>
                        </div><!--
                        --><span class=\"page__menu-text\">";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Posez votre question"));
        echo "</span>
                    </a>
                </li>
                <li class=\"page__menu-separator\"></li>
                <li>
                    <a href=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("faq");
        echo "\">
                        <div class=\"circle-button circle-button--eye\">
                            <div class=\"circle-button__icon\">
                                <svg class=\"eye-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#eye\"></use></svg>
                            </div>
                        </div><!--
                        --><span class=\"page__menu-text\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Voir toutes les questions"));
        echo "</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"page__content\" data-fade-in-element>
        <div class=\"container\">
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
        </div>

        <div class=\"container\">
            <div class=\"carousel\">
                ";
        // line 65
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 66
            echo "                    <!-- video slides -->
                    ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 68
                echo "                        <div class=\"slide slide--cta slide--cta-video\">
                            <div class=\"cta-wrap\">
                                <a class=\"cta\" href=\"#\"
                                   data-play-video=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "video", array()), "html", null, true);
                echo "\"
                                   data-slug=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "slug", array()), "html", null, true);
                echo "\"
                                >
                                    <div class=\"cta__image\" style=\"background-image: url(";
                // line 74
                echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter($this->getAttribute($context["slide"], "image", array()));
                echo ")\">
                                         <div class=\"cta__overlay\">
                                             <div class=\"cta__content\">
                                                 <div class=\"circle-button circle-button--play\">
                                                     <div class=\"circle-button__icon\">
                                                         <svg class=\"play-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#play\"></use></svg>
                                                     </div>
                                                 </div>
                                                 <br>
                                                 <div class=\"cta__content-text\">
                                                     <span>";
                // line 84
                echo $this->getAttribute($context["slide"], "title", array());
                echo "</span>
                                                 </div>
                                             </div>
                                         </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                ";
        }
        // line 94
        echo "
                ";
        // line 95
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 96
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slidesEN"]) ? $context["slidesEN"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 97
                echo "                        <div class=\"slide slide--cta slide--cta-video\">
                            <div class=\"cta-wrap\">
                                <a class=\"cta\" href=\"#\"
                                   data-play-video=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "video", array()), "html", null, true);
                echo "\"
                                   data-slug=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "slug", array()), "html", null, true);
                echo "\"
                                >
                                    <div class=\"cta__image\" style=\"background-image: url(";
                // line 103
                echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter($this->getAttribute($context["slide"], "image", array()));
                echo ")\">
                                         <div class=\"cta__overlay\">
                                             <div class=\"cta__content\">
                                                 <div class=\"circle-button circle-button--play\">
                                                     <div class=\"circle-button__icon\">
                                                         <svg class=\"play-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#play\"></use></svg>
                                                     </div>
                                                 </div>
                                                 <br>
                                                 <div class=\"cta__content-text\">
                                                     <span>";
                // line 113
                echo $this->getAttribute($context["slide"], "title", array());
                echo "</span>
                                                 </div>
                                             </div>
                                         </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                ";
        }
        // line 123
        echo "
            </div>
        </div>
    </div><!-- .page__content -->

    <div class=\"faq-lightbox faq-lightbox--video\" style=\"display:none\" data-hide-faq-lightbox>
        <div class=\"container\" data-nop>
            <div class=\"faq-lightbox__close circle-button circle-button--close\" data-hide-faq-lightbox>
                <div class=\"circle-button__icon\">
                    <svg class=\"close-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#close\"></use></svg>
                </div>
            </div>

            <div id=\"voxpop-video\">
                <style>
                    .embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; }
                    .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
                </style>
                <div class=\"embed-container\"></div>
            </div>
        </div>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/voxpop.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 123,  221 => 122,  206 => 113,  193 => 103,  188 => 101,  184 => 100,  179 => 97,  174 => 96,  172 => 95,  169 => 94,  166 => 93,  151 => 84,  138 => 74,  133 => 72,  129 => 71,  124 => 68,  120 => 67,  117 => 66,  115 => 65,  87 => 40,  78 => 34,  70 => 29,  61 => 23,  52 => 16,  46 => 13,  43 => 12,  40 => 11,  34 => 8,  31 => 7,  29 => 6,  25 => 5,  19 => 1,);
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

    <div class=\"page__title\">
        <div class=\"container\">
            <h1 class=\"page__title-text\">{{ '<span>Grands espaces, </span><span>grandes questions<span>'|_ }}</h1>
                {% if locale == 'fr' %}
                    <picture class=\"page__title-img\">
                        <img src=\"{{ 'assets/public/images/faq-title-fr.svg' | theme }}\" alt=\"Grands espaces, grandes questions\">
                    </picture>
                {% endif %}
                {% if locale == 'en' %}
                    <picture class=\"page__title-img\">
                        <img src=\"{{ 'assets/public/images/faq-title-en.png' | theme }}\" alt=\"Big Spaces, Big Questions\">
                    </picture>
                {% endif %}
        </div>
    </div>

    <div class=\"page__menu\">
        <div class=\"container\">
            <ul>
                <li>
                    <a href=\"{{ 'faq' | page }}#question\">
                        <div class=\"circle-button circle-button--question\">
                            <div class=\"circle-button__icon\">
                                <svg class=\"question-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#question\"></use></svg>
                            </div>
                        </div><!--
                        --><span class=\"page__menu-text\">{{ 'Posez votre question'|_ }}</span>
                    </a>
                </li>
                <li class=\"page__menu-separator\"></li>
                <li>
                    <a href=\"{{ 'faq' | page }}\">
                        <div class=\"circle-button circle-button--eye\">
                            <div class=\"circle-button__icon\">
                                <svg class=\"eye-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#eye\"></use></svg>
                            </div>
                        </div><!--
                        --><span class=\"page__menu-text\">{{ 'Voir toutes les questions'|_ }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"page__content\" data-fade-in-element>
        <div class=\"container\">
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
        </div>

        <div class=\"container\">
            <div class=\"carousel\">
                {% if locale == 'fr' %}
                    <!-- video slides -->
                    {% for slide in slides %}
                        <div class=\"slide slide--cta slide--cta-video\">
                            <div class=\"cta-wrap\">
                                <a class=\"cta\" href=\"#\"
                                   data-play-video=\"{{ slide.video }}\"
                                   data-slug=\"{{ slide.slug }}\"
                                >
                                    <div class=\"cta__image\" style=\"background-image: url({{ slide.image | theme }})\">
                                         <div class=\"cta__overlay\">
                                             <div class=\"cta__content\">
                                                 <div class=\"circle-button circle-button--play\">
                                                     <div class=\"circle-button__icon\">
                                                         <svg class=\"play-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#play\"></use></svg>
                                                     </div>
                                                 </div>
                                                 <br>
                                                 <div class=\"cta__content-text\">
                                                     <span>{{ slide.title | raw }}</span>
                                                 </div>
                                             </div>
                                         </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    {% endfor %}
                {% endif %}

                {% if locale == 'en' %}
                     {% for slide in slidesEN %}
                        <div class=\"slide slide--cta slide--cta-video\">
                            <div class=\"cta-wrap\">
                                <a class=\"cta\" href=\"#\"
                                   data-play-video=\"{{ slide.video }}\"
                                   data-slug=\"{{ slide.slug }}\"
                                >
                                    <div class=\"cta__image\" style=\"background-image: url({{ slide.image | theme }})\">
                                         <div class=\"cta__overlay\">
                                             <div class=\"cta__content\">
                                                 <div class=\"circle-button circle-button--play\">
                                                     <div class=\"circle-button__icon\">
                                                         <svg class=\"play-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#play\"></use></svg>
                                                     </div>
                                                 </div>
                                                 <br>
                                                 <div class=\"cta__content-text\">
                                                     <span>{{ slide.title | raw }}</span>
                                                 </div>
                                             </div>
                                         </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    {% endfor %}
                {% endif %}

            </div>
        </div>
    </div><!-- .page__content -->

    <div class=\"faq-lightbox faq-lightbox--video\" style=\"display:none\" data-hide-faq-lightbox>
        <div class=\"container\" data-nop>
            <div class=\"faq-lightbox__close circle-button circle-button--close\" data-hide-faq-lightbox>
                <div class=\"circle-button__icon\">
                    <svg class=\"close-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#close\"></use></svg>
                </div>
            </div>

            <div id=\"voxpop-video\">
                <style>
                    .embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; }
                    .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
                </style>
                <div class=\"embed-container\"></div>
            </div>
        </div>
    </div>

</div>", "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/pages/voxpop.htm", "");
    }
}
