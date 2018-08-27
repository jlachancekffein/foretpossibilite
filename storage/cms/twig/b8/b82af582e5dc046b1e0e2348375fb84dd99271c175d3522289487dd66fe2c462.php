<?php

/* /home/vagrant/code/themes/cifq/pages/faq.htm */
class __TwigTemplate_1e6b7e458eef6b5b70a914ecbc7698ffc02297ed110f10b337cb06bffd33e58a extends Twig_Template
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
        if ((($context["locale"] ?? null) == "fr")) {
            // line 2
            echo "    <div class=\"content\">

        <div class=\"page__title\">
            <div class=\"container\">
                <h1 class=\"page__title-text\"><span>Grands espaces, </span><span>grandes questions<span></h1>
                <picture class=\"page__title-img\">
                    <img src=\"";
            // line 8
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/faq-title-fr.svg");
            echo "\" alt=\"Grands espaces, grandes questions\">
                </picture>
            </div>
        </div>

        <div class=\"page__menu\">
            <div class=\"container\">
                <ul>
                    <li>
                        <a href=\"#\" data-show-faq-lightbox=\"faq-lightbox--form\">
                            <div class=\"circle-button circle-button--question\">
                                <div class=\"circle-button__icon\">
                                    <svg class=\"question-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#question\"></use></svg>
                                </div>
                            </div><!--
                            --><span class=\"page__menu-text\">Posez votre question</span>
                        </a>
                    </li>
                    <li class=\"page__menu-separator\"></li>
                    <li>
                        <a href=\"";
            // line 28
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("voxpop");
            echo "\">
                            <div class=\"circle-button circle-button--play\">
                                <div class=\"circle-button__icon\">
                                    <svg class=\"play-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#play\"></use></svg>
                                </div>
                            </div><!--
                            --><span class=\"page__menu-text\">Visionnez les capsules</span>
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

                    <!-- CTA slide with video -->
                    <div class=\"slide slide--cta slide--cta-video\">
                        <a class=\"cta\" href=\"";
            // line 62
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("voxpop");
            echo "#jouer\">
                            <div class=\"cta__image\"
                                 style=\"background-image: url(";
            // line 64
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/voxpop-avenir.jpg");
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
                                             <span>Visionnez les capsules</span>
                                         </div>
                                     </div>
                                 </div>
                            </div>
                        </a>
                    </div>

                    <!-- text slides -->
                    ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 84
                echo "                        <div class=\"slide slide--text\">
                            <div class=\"slide__number\">";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "number", array()), "html", null, true);
                echo "</div>
                            <div class=\"slide__tool\">
                                <div class=\"slide__name\">";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "name", array()), "html", null, true);
                echo "</div>
                                <div class=\"slide__tip\"></div>
                            </div>
                            <h2 class=\"slide__title\">";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true);
                echo "</h2>
                            <div class=\"slide__text\">
                                ";
                // line 92
                echo $this->getAttribute($context["slide"], "excerpt", array());
                echo "
                                ";
                // line 93
                if ($this->getAttribute($context["slide"], "more", array())) {
                    echo "<a href=\"#\" data-read-more=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "number", array()), "html", null, true);
                    echo "\">Lire la suite</a>";
                }
                // line 94
                echo "                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "
                    <!-- CTA slide with button -->
                    <div class=\"slide slide--last slide--cta\">
                        <div class=\"cta\">
                            <div class=\"slide__title\">Mieux on connait notre forêt, plus on est en mesure de l’apprécier et la protéger.</div>
                            <div class=\"cta-button\">
                                <a href=\"#\" data-show-faq-lightbox=\"faq-lightbox--form\">
                                    Posez votre question
                                    <div class=\"cta-button__icon\">
                                        <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#arrow-next\"></use></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- .page__content -->

        <div class=\"faq-lightbox faq-lightbox--form\" style=\"display:none\" data-hide-faq-lightbox>
            <div id=\"question-form-container\" class=\"container\" data-nop>
                <div class=\"faq-lightbox__close circle-button circle-button--close\" data-hide-faq-lightbox>
                    <div class=\"circle-button__icon\">
                        <svg class=\"close-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#close\" /></use></svg>
                    </div>
                </div>

                ";
            // line 125
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("faq/question_form"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 126
            echo "            </div>
        </div>

        <div class=\"faq-lightbox faq-lightbox--answers\" style=\"display:none\" data-hide-faq-lightbox>
            <div class=\"container\" data-nop>
                <div class=\"faq-lightbox__close circle-button circle-button--close\" data-hide-faq-lightbox>
                    <div class=\"circle-button__icon\">
                        <svg class=\"close-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#close\" /></use></svg>
                    </div>
                </div>

                <div id=\"faq-answers-content\">
                    <!-- text slides (full) -->
                    ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 140
                echo "                        <div class=\"slide slide--lightbox\" data-slide-number=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "number", array()), "html", null, true);
                echo "\">
                            <div class=\"slide__title\">";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true);
                echo "</div>
                            <div class=\"slide__name\">";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "name", array()), "html", null, true);
                echo "</div>
                            <div class=\"slide__text\">
                                ";
                // line 144
                echo $this->getAttribute($context["slide"], "full", array());
                echo "
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "                </div>
            </div>
        </div>

    </div>
";
        }
        // line 154
        echo "
";
        // line 155
        if ((($context["locale"] ?? null) == "en")) {
            // line 156
            echo "    <div class=\"content\">

        <div class=\"page__title\">
            <div class=\"container\">
                <h1 class=\"page__title-text\"><span>Big spaces, </span><span>big questions<span></h1>
                <picture class=\"page__title-img\">
                    <img src=\"";
            // line 162
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/faq-title-en.png");
            echo "\" alt=\"Grands espaces, big questions\">
                </picture>
            </div>
        </div>

        <div class=\"page__menu\">
            <div class=\"container\">
                <ul>
                    <li>
                        <a href=\"#\" data-show-faq-lightbox=\"faq-lightbox--form\">
                            <div class=\"circle-button circle-button--question\">
                                <div class=\"circle-button__icon\">
                                    <svg class=\"question-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#question\"></use></svg>
                                </div>
                            </div><!--
                            --><span class=\"page__menu-text\">";
            // line 177
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Posez votre question"));
            echo "</span>
                        </a>
                    </li>
                    <li class=\"page__menu-separator\"></li>
                    <li>
                        <a href=\"";
            // line 182
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("voxpop");
            echo "\">
                            <div class=\"circle-button circle-button--play\">
                                <div class=\"circle-button__icon\">
                                    <svg class=\"play-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#play\"></use></svg>
                                </div>
                            </div><!--
                            --><span class=\"page__menu-text\">Watch the videos</span>
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

                    <!-- CTA slide with video -->
                    <div class=\"slide slide--cta slide--cta-video\">
                        <a class=\"cta\" href=\"";
            // line 216
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("voxpop");
            echo "#jouer\">
                            <div class=\"cta__image\"
                                 style=\"background-image: url(";
            // line 218
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/voxpop-avenir.jpg");
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
                                             <span>Watch the videos</span>
                                         </div>
                                     </div>
                                 </div>
                            </div>
                        </a>
                    </div>

                    <!-- text slides -->
                    ";
            // line 237
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slidesEN"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 238
                echo "                        <div class=\"slide slide--text\">
                            <div class=\"slide__number\">";
                // line 239
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "number", array()), "html", null, true);
                echo "</div>
                            <div class=\"slide__tool\">
                                <div class=\"slide__name\">";
                // line 241
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "name", array()), "html", null, true);
                echo "</div>
                                <div class=\"slide__tip\"></div>
                            </div>
                            <h2 class=\"slide__title\">";
                // line 244
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true);
                echo "</h2>
                            <div class=\"slide__text\">
                                ";
                // line 246
                echo $this->getAttribute($context["slide"], "excerpt", array());
                echo "
                                ";
                // line 247
                if ($this->getAttribute($context["slide"], "more", array())) {
                    echo "<a href=\"#\" data-read-more=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "number", array()), "html", null, true);
                    echo "\">Read more</a>";
                }
                // line 248
                echo "                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "
                    <!-- CTA slide with button -->
                    <div class=\"slide slide--last slide--cta\">
                        <div class=\"cta\">
                            <div class=\"slide__title\">";
            // line 255
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Mieux on connait notre forêt, plus on est en mesure de l’apprécier et la protéger."));
            echo "</div>
                            <div class=\"cta-button\">
                                <a href=\"#\" data-show-faq-lightbox=\"faq-lightbox--form\">
                                    ";
            // line 258
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Posez votre question"));
            echo "
                                    <div class=\"cta-button__icon\">
                                        <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#arrow-next\"></use></svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- .page__content -->

        <div class=\"faq-lightbox faq-lightbox--form\" style=\"display:none\" data-hide-faq-lightbox>
            <div id=\"question-form-container\" class=\"container\" data-nop>
                <div class=\"faq-lightbox__close circle-button circle-button--close\" data-hide-faq-lightbox>
                    <div class=\"circle-button__icon\">
                        <svg class=\"close-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#close\" /></use></svg>
                    </div>
                </div>

                ";
            // line 279
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("faq/question_form"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 280
            echo "            </div>
        </div>

        <div class=\"faq-lightbox faq-lightbox--answers\" style=\"display:none\" data-hide-faq-lightbox>
            <div class=\"container\" data-nop>
                <div class=\"faq-lightbox__close circle-button circle-button--close\" data-hide-faq-lightbox>
                    <div class=\"circle-button__icon\">
                        <svg class=\"close-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#close\" /></use></svg>
                    </div>
                </div>

                <div id=\"faq-answers-content\">
                    <!-- text slides (full) -->
                    ";
            // line 293
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slidesEN"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 294
                echo "                        <div class=\"slide slide--lightbox\" data-slide-number=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "number", array()), "html", null, true);
                echo "\">
                            <div class=\"slide__title\">";
                // line 295
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true);
                echo "</div>
                            <div class=\"slide__name\">";
                // line 296
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "name", array()), "html", null, true);
                echo "</div>
                            <div class=\"slide__text\">
                                ";
                // line 298
                echo $this->getAttribute($context["slide"], "full", array());
                echo "
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 302
            echo "                </div>
            </div>
        </div>

    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/themes/cifq/pages/faq.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 302,  459 => 298,  454 => 296,  450 => 295,  445 => 294,  441 => 293,  426 => 280,  422 => 279,  398 => 258,  392 => 255,  386 => 251,  378 => 248,  372 => 247,  368 => 246,  363 => 244,  357 => 241,  352 => 239,  349 => 238,  345 => 237,  323 => 218,  318 => 216,  281 => 182,  273 => 177,  255 => 162,  247 => 156,  245 => 155,  242 => 154,  234 => 148,  224 => 144,  219 => 142,  215 => 141,  210 => 140,  206 => 139,  191 => 126,  187 => 125,  157 => 97,  149 => 94,  143 => 93,  139 => 92,  134 => 90,  128 => 87,  123 => 85,  120 => 84,  116 => 83,  94 => 64,  89 => 62,  52 => 28,  29 => 8,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/code/themes/cifq/pages/faq.htm", "");
    }
}
