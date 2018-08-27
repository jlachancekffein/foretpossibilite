<?php

/* /var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/layouts/default.htm */
class __TwigTemplate_e56633bff73e290d8273929798fcb6c329e7a292cd65a377ce135702cfc49ca9 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html class=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["pageClass"]) ? $context["pageClass"] : null), "html", null, true);
        echo " \" lang=\"";
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
        echo "\">
    <head>
        ";
        // line 4
        if ((isset($context["is_prod"]) ? $context["is_prod"] : null)) {
            // line 5
            echo "        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T5CPGTR');</script>
        <!-- End Google Tag Manager -->
        ";
        } else {
            // line 13
            echo "            <!-- Google Tag Manager (testing) -->
            <script>dataLayer = [];</script>
            <!-- End Google Tag Manager -->
        ";
        }
        // line 17
        echo "        <meta charset=\"utf-8\">
        ";
        // line 18
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 19
            echo "            <title>Une forêt de possibilités | ";
            echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
            echo "</title>
        ";
        }
        // line 21
        echo "        ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 22
            echo "            <title>A forest of possibilities | ";
            echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
            echo "</title>
        ";
        }
        // line 24
        echo "        <meta name=\"description\" content=\"";
        echo twig_escape_filter($this->env, (isset($context["pageDescription"]) ? $context["pageDescription"] : null), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
        echo "\">
        <meta name=\"keywords\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["pageKeywords"]) ? $context["pageKeywords"] : null), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Les Évadés\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link href=\"";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/css/app.css?rev=fe4c17b7f6d9ff9b8a39");
        echo "\" rel=\"stylesheet\">
        ";
        // line 31
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 32
        echo "        ";
        if ((isset($context["is_staging"]) ? $context["is_staging"] : null)) {
            // line 33
            echo "            <script src=\"//cdn.trackduck.com/toolbar/prod/td.js\" async data-trackduck-id=\"5911f6004551ba9e7e888acb\"></script>
        ";
        }
        // line 35
        echo "        <!-- Favicons -->
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/favicons/apple-touch-icon.png");
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/favicons/favicon-32x32.png");
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/favicons/favicon-16x16.png");
        echo "\">
        <link rel=\"manifest\" href=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/favicons/manifest.json");
        echo "\">
        <link rel=\"mask-icon\" href=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/favicons/safari-pinned-tab.svg");
        echo "\" color=\"#2d5f2b\">
        <link rel=\"shortcut icon\" href=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/favicons/favicon.ico");
        echo "\">
        <meta name=\"msapplication-config\" content=\"";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/favicons/browserconfig.xml");
        echo "\">
        <meta name=\"theme-color\" content=\"#ffffff\">
        <!-- Open Graph -->
        <meta property=\"og:image\" content=\"";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/images/og-image.jpg");
        echo "\">
        <meta property=\"og:image:height\" content=\"496\">
        <meta property=\"og:image:width\" content=\"947\">
        ";
        // line 48
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 49
            echo "          <meta property=\"og:description\" content=\"Le Collectif pour une forêt durable regroupe des ambassadeurs enracinés dans leur milieu. Ils ont à coeur le développement durable des forêts québécoises. Ensemble, ils témoignent de l'importance, de ce matériau vert et renouvelable. Faire partie du Collectif pour une forêt durable, c'est donner vie à une forêt de possibilités.\">
        ";
        }
        // line 51
        echo "        ";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 52
            echo "           <meta property=\"og:description\" content=\"The Collectif pour une forêt durable is a group of ambassadors with strong ties to their communities – people for whom the sustainable development of Quebec’s forests is a core concern. Together, they work to make sure the importance of this renewable green material is recognized. By joining the Collectif pour une forêt durable, you will help give life to a forest of possibilities.\">
        ";
        }
        // line 54
        echo "        <meta property=\"og:title\" content=\"Collectif pour une forêt durable\">
        <meta property=\"og:url\" content=\"";
        // line 55
        echo url("/");
        echo "\">
    </head>
    <body>
        ";
        // line 58
        if ((isset($context["is_prod"]) ? $context["is_prod"] : null)) {
            // line 59
            echo "        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-T5CPGTR\"
        height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        ";
        }
        // line 64
        echo "
       

        <div class=\"wrapper";
        // line 67
        if (array_key_exists("possibility", $context)) {
            echo twig_escape_filter($this->env, (" " . (isset($context["possibility"]) ? $context["possibility"] : null)), "html", null, true);
        }
        echo "\">
            ";
        // line 68
        $context['__placeholder_wrapper_before_default_contents'] = null;        ob_start();        $context['__placeholder_wrapper_before_default_contents'] = ob_get_clean();        echo $this->env->getExtension('CMS')->displayBlock('wrapper_before', $context['__placeholder_wrapper_before_default_contents']);
        unset($context['__placeholder_wrapper_before_default_contents']);        // line 69
        echo "
            ";
        // line 70
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 71
        echo "            ";
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 72
        echo "            ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 73
        echo "        </div>

        <!-- Scripts -->
        ";
        // line 76
        if (((isset($context["is_staging"]) ? $context["is_staging"] : null) || (isset($context["is_prod"]) ? $context["is_prod"] : null))) {
            // line 77
            echo "            <script src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/js/app.js?rev=fe4c17b7f6d9ff9b8a39");
            echo "\"></script>
        ";
        } else {
            // line 79
            echo "            <script src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/public/js/app.js");
            echo "\"></script>
        ";
        }
        // line 81
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 82
        echo "        ";
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 83
        echo "
        ";
        // line 84
        if ((isset($context["is_staging"]) ? $context["is_staging"] : null)) {
            echo "<!-- is_staging -->";
        }
        // line 85
        echo "        ";
        if ((isset($context["is_dev"]) ? $context["is_dev"] : null)) {
            echo "<!-- is_dev -->";
        }
        // line 86
        echo "
         ";
        // line 87
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/svg-sprite"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 88
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 88,  239 => 87,  236 => 86,  231 => 85,  227 => 84,  224 => 83,  220 => 82,  216 => 81,  210 => 79,  204 => 77,  202 => 76,  197 => 73,  192 => 72,  189 => 71,  185 => 70,  182 => 69,  180 => 68,  174 => 67,  169 => 64,  162 => 59,  160 => 58,  154 => 55,  151 => 54,  147 => 52,  144 => 51,  140 => 49,  138 => 48,  132 => 45,  126 => 42,  122 => 41,  118 => 40,  114 => 39,  110 => 38,  106 => 37,  102 => 36,  99 => 35,  95 => 33,  92 => 32,  89 => 31,  85 => 30,  78 => 26,  74 => 25,  69 => 24,  63 => 22,  60 => 21,  54 => 19,  52 => 18,  49 => 17,  43 => 13,  33 => 5,  31 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html class=\"{{ locale }} {{ pageClass }} \" lang=\"{{ locale }}\">
    <head>
        {% if is_prod %}
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T5CPGTR');</script>
        <!-- End Google Tag Manager -->
        {% else %}
            <!-- Google Tag Manager (testing) -->
            <script>dataLayer = [];</script>
            <!-- End Google Tag Manager -->
        {% endif %}
        <meta charset=\"utf-8\">
        {% if locale == 'fr' %}
            <title>Une forêt de possibilités | {{ pageTitle }}</title>
        {% endif %}
        {% if locale == 'en' %}
            <title>A forest of possibilities | {{ pageTitle }}</title>
        {% endif %}
        <meta name=\"description\" content=\"{{ pageDescription }}\">
        <meta name=\"title\" content=\"{{ pageTitle }}\">
        <meta name=\"keywords\" content=\"{{ pageKeywords }}\">
        <meta name=\"author\" content=\"Les Évadés\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link href=\"{{ 'assets/public/css/app.css?rev=fe4c17b7f6d9ff9b8a39'|theme }}\" rel=\"stylesheet\">
        {% styles %}
        {% if is_staging %}
            <script src=\"//cdn.trackduck.com/toolbar/prod/td.js\" async data-trackduck-id=\"5911f6004551ba9e7e888acb\"></script>
        {% endif %}
        <!-- Favicons -->
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ 'assets/favicons/apple-touch-icon.png'|theme }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ 'assets/favicons/favicon-32x32.png'|theme }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ 'assets/favicons/favicon-16x16.png'|theme }}\">
        <link rel=\"manifest\" href=\"{{ 'assets/favicons/manifest.json'|theme }}\">
        <link rel=\"mask-icon\" href=\"{{ 'assets/favicons/safari-pinned-tab.svg'|theme }}\" color=\"#2d5f2b\">
        <link rel=\"shortcut icon\" href=\"{{ 'assets/favicons/favicon.ico'|theme }}\">
        <meta name=\"msapplication-config\" content=\"{{ 'assets/favicons/browserconfig.xml'|theme }}\">
        <meta name=\"theme-color\" content=\"#ffffff\">
        <!-- Open Graph -->
        <meta property=\"og:image\" content=\"{{ 'assets/public/images/og-image.jpg' | theme }}\">
        <meta property=\"og:image:height\" content=\"496\">
        <meta property=\"og:image:width\" content=\"947\">
        {% if locale == 'fr' %}
          <meta property=\"og:description\" content=\"Le Collectif pour une forêt durable regroupe des ambassadeurs enracinés dans leur milieu. Ils ont à coeur le développement durable des forêts québécoises. Ensemble, ils témoignent de l'importance, de ce matériau vert et renouvelable. Faire partie du Collectif pour une forêt durable, c'est donner vie à une forêt de possibilités.\">
        {% endif %}
        {% if locale == 'en' %}
           <meta property=\"og:description\" content=\"The Collectif pour une forêt durable is a group of ambassadors with strong ties to their communities – people for whom the sustainable development of Quebec’s forests is a core concern. Together, they work to make sure the importance of this renewable green material is recognized. By joining the Collectif pour une forêt durable, you will help give life to a forest of possibilities.\">
        {% endif %}
        <meta property=\"og:title\" content=\"Collectif pour une forêt durable\">
        <meta property=\"og:url\" content=\"{{ url('/') }}\">
    </head>
    <body>
        {% if is_prod %}
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-T5CPGTR\"
        height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        {% endif %}

       

        <div class=\"wrapper{% if possibility is defined %}{{ ' ' ~ possibility }}{% endif %}\">
            {% placeholder wrapper_before default %}{% endplaceholder %}

            {% partial 'site/header' %}
            {% page %}
            {% partial 'site/nav' %}
        </div>

        <!-- Scripts -->
        {% if (is_staging or is_prod) %}
            <script src=\"{{ 'assets/public/js/app.js?rev=fe4c17b7f6d9ff9b8a39'|theme }}\"></script>
        {% else %}
            <script src=\"{{ 'assets/public/js/app.js'|theme }}\"></script>
        {% endif %}
        {% scripts %}
        {% framework %}

        {% if is_staging %}<!-- is_staging -->{% endif %}
        {% if is_dev %}<!-- is_dev -->{% endif %}

         {% partial 'site/svg-sprite' %}

    </body>
</html>", "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/layouts/default.htm", "");
    }
}
