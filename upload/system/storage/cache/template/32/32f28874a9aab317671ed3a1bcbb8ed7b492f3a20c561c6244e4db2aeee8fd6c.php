<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* journal3/template/journal3/checkout/confirm.twig */
class __TwigTemplate_5d5deea1167882e2199ddc7929c8fee651b8705364426d67973d5905484eda79 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"checkout-section confirm-section\">
  <div class=\"title section-title\">";
        // line 2
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => "sectionTitleConfirm"], "method", false, false, false, 2);
        echo "</div>

  <div class=\"section-body\">
    <div class=\"section-comments\" v-bind:class=\"{ 'has-error': error && error.comments }\">
      <textarea class=\"form-control\" v-model=\"order_data.comment\" placeholder=\"";
        // line 6
        echo ($context["text_comments"] ?? null);
        echo "\"></textarea>
    </div>

    ";
        // line 9
        if (($context["newsletter"] ?? null)) {
            // line 10
            echo "      <div class=\"checkbox\">
        <label><input v-model=\"newsletter\" type=\"checkbox\"/>";
            // line 11
            echo ($context["newsletter"] ?? null);
            echo "</label>
      </div>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (($context["privacy"] ?? null)) {
            // line 16
            echo "      <div class=\"checkbox\">
        <label><input v-model=\"privacy\" type=\"checkbox\"/>";
            // line 17
            echo ($context["privacy"] ?? null);
            echo "</label>
        <span class=\"text-danger\" v-if=\"error && error.privacy\" v-html=\"error.privacy\"></span>
      </div>
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if (($context["agree"] ?? null)) {
            // line 23
            echo "      <div class=\"checkbox\">
        <label><input v-model=\"agree\" type=\"checkbox\"/>";
            // line 24
            echo ($context["agree"] ?? null);
            echo "</label>
        <span class=\"text-danger\" v-if=\"error && error.agree\" v-html=\"error.agree\"></span>
      </div>
    ";
        }
        // line 28
        echo "
    <div class=\"buttons confirm-buttons\">
      <div class=\"pull-right\">
        <button type=\"button\" v-on:click=\"save(true)\" data-loading-text=\"<span>";
        // line 31
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 31), "get", [0 => "confirmOrderLoadingText"], "method", false, false, false, 31)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 31), "get", [0 => "confirmOrderLoadingText"], "method", false, false, false, 31)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 31), "get", [0 => "confirmOrderLanguage"], "method", false, false, false, 31)));
        echo "</span>\" class=\"btn btn-primary\" id=\"quick-checkout-button-confirm\"><span>";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 31), "get", [0 => "confirmOrderLanguage"], "method", false, false, false, 31);
        echo "</span></button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 31,  94 => 28,  87 => 24,  84 => 23,  82 => 22,  79 => 21,  72 => 17,  69 => 16,  67 => 15,  64 => 14,  58 => 11,  55 => 10,  53 => 9,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/confirm.twig", "");
    }
}
