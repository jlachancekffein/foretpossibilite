<?php

/* /home/vagrant/code/themes/cifq/pages/home.htm */
class __TwigTemplate_d1e556e88e0f3ac4f963499cfeb4c2cd73acb8c40f272b393fb36f9a32639fa8 extends Twig_Template
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
            echo "<div class=\"video-wrap\">
    <video autoplay loop id=\"vid-faq-loop\">
        <source src=\"";
            // line 4
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/question_loop2.mp4");
            echo "\" type=\"video/mp4\">
    </video>
    <video autoplay id=\"vid-faq\">
        <source src=\"";
            // line 7
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/question2.mp4");
            echo "\" type=\"video/mp4\">
    </video>
    
    <video autoplay loop id=\"vid-possibilities-loop\">
        <source src=\"";
            // line 11
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/home-possibilities-loop.mp4");
            echo "\" type=\"video/mp4\">
    </video>
    <video autoplay id=\"vid-possibilities\">
        <source src=\"";
            // line 14
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/home-possibilities-intro.mp4");
            echo "\" type=\"video/mp4\">
    </video>

    <video autoplay loop id=\"vid-cycle-loop\">
        <source src=\"";
            // line 18
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/site_CIFQ_cycles_loop2.mp4");
            echo "\" type=\"video/mp4\">
    </video>
    <video autoplay id=\"vid-cycle\">
        <source src=\"";
            // line 21
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/site_CIFQ_cycles2.mp4");
            echo "\" type=\"video/mp4\">
    </video>
</div>
";
        }
        // line 25
        echo "
";
        // line 26
        if ((($context["locale"] ?? null) == "en")) {
            // line 27
            echo "<div class=\"video-wrap\">
    <video autoplay loop id=\"vid-faq-loop\">
        <source src=\"";
            // line 29
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/question_loop2-en.mp4");
            echo "\" type=\"video/mp4\">
    </video>
    <video autoplay id=\"vid-faq\">
        <source src=\"";
            // line 32
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/question2-en.mp4");
            echo "\" type=\"video/mp4\">
    </video>
    
    <video autoplay loop id=\"vid-possibilities-loop\">
        <source src=\"";
            // line 36
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/home-possibilities-loop-en.mp4");
            echo "\" type=\"video/mp4\">
    </video>
    <video autoplay id=\"vid-possibilities\">
        <source src=\"";
            // line 39
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/home-possibilities-intro-en.mp4");
            echo "\" type=\"video/mp4\">
    </video>

    <video autoplay loop id=\"vid-cycle-loop\">
        <source src=\"";
            // line 43
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/site_CIFQ_cycles_loop2-en.mp4");
            echo "\" type=\"video/mp4\">
    </video>
    <video autoplay id=\"vid-cycle\">
        <source src=\"";
            // line 46
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/site_CIFQ_cycles2-en.mp4");
            echo "\" type=\"video/mp4\">
    </video>
</div>
";
        }
        // line 50
        echo "
<div class=\"content\">
    ";
        // line 52
        if ((($context["locale"] ?? null) == "fr")) {
            // line 53
            echo "        <img class=\"cifq-logo\" src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/foret-de-possibilites.svg");
            echo "\" alt=\"Une forêt de possibilités\">
    ";
        }
        // line 55
        echo "
    ";
        // line 56
        if ((($context["locale"] ?? null) == "en")) {
            // line 57
            echo "        <img class=\"cifq-logo\" src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/foret-de-possibilites-en.png");
            echo "\" alt=\"A forest of possibilities\">
    ";
        }
        // line 59
        echo "
    <div class=\"home__introduction\">
      <p>
            ";
        // line 62
        if ((($context["locale"] ?? null) == "fr")) {
            // line 63
            echo "                En adoptant une approche unique de concevoir et d’aménager la forêt au bénéfice de tous, le Québec a choisi de rendre
                accessible son territoire forestier. Réunir et marier les nombreuses possibilités qui la façonnent est tout un art.
                Cette marque distinctive propre aux forêts québécoises permet ainsi à ceux qui en vivent de continuer à le faire et à
                ceux qui l’utilisent, de continuer à y avoir accès, le tout, de façon responsable et durable pour tous. Bienvenue
                dans une forêt de possibilités.
            ";
        }
        // line 69
        echo "
            ";
        // line 70
        if ((($context["locale"] ?? null) == "en")) {
            // line 71
            echo "                Quebec has chosen to make its forests more accessible by adopting a unique approach to forest management and development that will benefit everyone. The task of uniting and aligning the many possibilities that shape the forest is an art. This distinctive approach to Quebec’s forest allows those who make a living from it to continue to do so, while granting continued access to the people who use it. ¬–All this is done in a way that is responsible and sustainable for everyone. Welcome to a forest of possibilities.
            ";
        }
        // line 73
        echo "      </p>
      <a class=\"btn btn--cta\" href=\"#\">
        <span>";
        // line 75
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Entrer"));
        echo "</span>
        <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#arrow-next\" /></use></svg>
      </a>
    </div>
    <div class=\"home__main-menu\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"grid-third\">
                    <a class=\"home-cta\" id=\"faq\" href=\"";
        // line 83
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("faq");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("<span>Grands espaces</span><br class=\"ohhh\"><span>Grandes questions</span>"));
        echo "</a>
                </div>
                <div class=\"grid-third\">
                    <a class=\"home-cta\" id=\"possibilities\" href=\"";
        // line 86
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("possibilities");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("<span>Regard sur</span><br><span>la forêt</span>"));
        echo "</a>
                </div>
                <div class=\"grid-third\">
                    <a class=\"home-cta\" id=\"cycle\" href=\"";
        // line 89
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("cycle");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("<span>Le parcours</span><br><span>de l’arbre</span>"));
        echo "</a>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"grid-full\">
                    <p class=\"footer-text\">
                        ";
        // line 95
        if ((($context["locale"] ?? null) == "fr")) {
            // line 96
            echo "                           Le <a target=\"_blank\" href=\"http://partenaires.uneforetdepossibilites.com/fr/partenaires\">Collectif pour une forêt durable</a>, c’est donner vie à une forêt de possibilités.
                        ";
        }
        // line 98
        echo "                        ";
        if ((($context["locale"] ?? null) == "en")) {
            // line 99
            echo "                           The <a target=\"_blank\" href=\"http://partenaires.uneforetdepossibilites.com/en/partners\">Collectif pour une forêt durable</a>, Giving life to a forest of possibilities.
                        ";
        }
        // line 101
        echo "                    </p>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/themes/cifq/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 101,  210 => 99,  207 => 98,  203 => 96,  201 => 95,  190 => 89,  182 => 86,  174 => 83,  163 => 75,  159 => 73,  155 => 71,  153 => 70,  150 => 69,  142 => 63,  140 => 62,  135 => 59,  129 => 57,  127 => 56,  124 => 55,  118 => 53,  116 => 52,  112 => 50,  105 => 46,  99 => 43,  92 => 39,  86 => 36,  79 => 32,  73 => 29,  69 => 27,  67 => 26,  64 => 25,  57 => 21,  51 => 18,  44 => 14,  38 => 11,  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/code/themes/cifq/pages/home.htm", "");
    }
}
