<?php

/* /var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/faq/question_form.htm */
class __TwigTemplate_c951d625d7583bf90db2a3be8c848bb64c53d9f522ceb6c08869113854b810d4 extends Twig_Template
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
        echo "<form class=\"question-form\"
      data-request=\"onHandleForm\"
      data-request-update=\"'faq/ajax_result': '#question-form__result'\">

    <div class=\"question-form__title\">
        ";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Mieux on connait notre forêt, plus on est en mesure de l’apprécier et la protéger."));
        echo "
    </div>
    <div class=\"question-form__note\">* ";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("champs obligatoires"));
        echo "</div>

    <div class=\"question-form__row\">
        <div class=\"question-form__field question-form__field--left\">
            <span class=\"required-indicator\">*</span>
            <input name=\"lastname\" placeholder=\"";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("NOM"));
        echo "\">
        </div>
        <div class=\"question-form__field question-form__field--right\">
            <span class=\"required-indicator\">*</span>
            <input name=\"firstname\" placeholder=\"";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("PRÉNOM"));
        echo "\">
        </div>
    </div>

    <div class=\"question-form__row\">
        <div class=\"question-form__field question-form__field--left\">
            <span class=\"required-indicator\">*</span>
            <input name=\"email\" placeholder=\"";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("COURRIEL"));
        echo "\">
        </div>
        <div class=\"question-form__field question-form__field--right\">
            <span class=\"required-indicator\">*</span>
            <input name=\"city\" placeholder=\"";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("VILLE"));
        echo "\">
        </div>
    </div>

    <div class=\"question-form__row\">
        <div class=\"question-form__field question-form__field--full\">
            <span class=\"required-indicator\">*</span>
            <textarea name=\"question\" placeholder=\"";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("VOTRE QUESTION"));
        echo "\" rows=\"4\"></textarea>
        </div>
    </div>

    <div class=\"g-recaptcha\" data-sitekey=\"6Lczfx8UAAAAAKW9RDFAhAuA634M2rEQ7pU5Lff-\"></div>

    <div id=\"question-form__result\">
        ";
        // line 42
        echo (isset($context["result"]) ? $context["result"] : null);
        echo "
    </div>
</form>

<div class=\"cta-button\">
    <a href=\"#\" data-submit-question-form>
        ";
        // line 48
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Posez votre question"));
        echo "
        <div class=\"cta-button__icon\">
            <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#arrow-next\" /></use></svg>
        </div>
    </a>
</div>

";
        // line 55
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 56
        echo "    <script src='https://www.google.com/recaptcha/api.js'></script>
";
        // line 55
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/faq/question_form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 55,  104 => 56,  102 => 55,  92 => 48,  83 => 42,  73 => 35,  63 => 28,  56 => 24,  46 => 17,  39 => 13,  31 => 8,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"question-form\"
      data-request=\"onHandleForm\"
      data-request-update=\"'faq/ajax_result': '#question-form__result'\">

    <div class=\"question-form__title\">
        {{ 'Mieux on connait notre forêt, plus on est en mesure de l’apprécier et la protéger.'|_ }}
    </div>
    <div class=\"question-form__note\">* {{ 'champs obligatoires'|_ }}</div>

    <div class=\"question-form__row\">
        <div class=\"question-form__field question-form__field--left\">
            <span class=\"required-indicator\">*</span>
            <input name=\"lastname\" placeholder=\"{{ 'NOM'|_ }}\">
        </div>
        <div class=\"question-form__field question-form__field--right\">
            <span class=\"required-indicator\">*</span>
            <input name=\"firstname\" placeholder=\"{{ 'PRÉNOM'|_ }}\">
        </div>
    </div>

    <div class=\"question-form__row\">
        <div class=\"question-form__field question-form__field--left\">
            <span class=\"required-indicator\">*</span>
            <input name=\"email\" placeholder=\"{{ 'COURRIEL'|_ }}\">
        </div>
        <div class=\"question-form__field question-form__field--right\">
            <span class=\"required-indicator\">*</span>
            <input name=\"city\" placeholder=\"{{ 'VILLE'|_ }}\">
        </div>
    </div>

    <div class=\"question-form__row\">
        <div class=\"question-form__field question-form__field--full\">
            <span class=\"required-indicator\">*</span>
            <textarea name=\"question\" placeholder=\"{{ 'VOTRE QUESTION'|_ }}\" rows=\"4\"></textarea>
        </div>
    </div>

    <div class=\"g-recaptcha\" data-sitekey=\"6Lczfx8UAAAAAKW9RDFAhAuA634M2rEQ7pU5Lff-\"></div>

    <div id=\"question-form__result\">
        {{ result | raw }}
    </div>
</form>

<div class=\"cta-button\">
    <a href=\"#\" data-submit-question-form>
        {{ 'Posez votre question'|_ }}
        <div class=\"cta-button__icon\">
            <svg class=\"arrow-next-icon\" viewBox=\"0 0 1 1\"><use xlink:href=\"#arrow-next\" /></use></svg>
        </div>
    </a>
</div>

{% put scripts %}
    <script src='https://www.google.com/recaptcha/api.js'></script>
{% endput %}", "/var/www/vhosts/gp2m-fnyk.accessdomain.com/uneforetdepossibilites.com/themes/cifq/partials/faq/question_form.htm", "");
    }
}
