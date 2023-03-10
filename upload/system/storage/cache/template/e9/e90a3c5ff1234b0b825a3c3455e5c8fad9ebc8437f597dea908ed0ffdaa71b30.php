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

/* journal3/template/journal3/checkout/checkout.twig */
class __TwigTemplate_4ff88027bc6ab2250c22d06528d64b3603896c7204d26fbe32650bca322c3804 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<ul class=\"breadcrumb\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 4);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 4);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 7), "get", [0 => "pageTitlePosition"], "method", false, false, false, 7) == "top")) {
            // line 8
            echo "  <h1 class=\"title page-title\"><span>";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 10);
        echo "
<div class=\"container\">
  ";
        // line 12
        if (($context["error_warning"] ?? null)) {
            // line 13
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 17
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\">
      ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 19), "get", [0 => "pageTitlePosition"], "method", false, false, false, 19) == "default")) {
            // line 20
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 22
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"quick-checkout-wrapper\">
        <div class=\"quick-checkout\">
          <div class=\"journal-loading\"><i class=\"fa fa-spinner fa-spin\"></i></div>
        </div>
      </div>
      ";
        // line 28
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 29
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/html\" id=\"quick-checkout\">
  <div v-bind:class=\"[(account === '') && !customer_id ? 'login-active' : '']\">
      <div class=\"left\">
        <form>
        ";
        // line 35
        echo ($context["login_block"] ?? null);
        echo "

        ";
        // line 37
        echo ($context["register_block"] ?? null);
        echo "

        ";
        // line 39
        echo ($context["payment_address_block"] ?? null);
        echo "

        ";
        // line 41
        echo ($context["shipping_address_block"] ?? null);
        echo "
        </form>
      </div>

      <div class=\"right\">

        <div class=\"checkout-section shipping-payment\">
          ";
        // line 48
        echo ($context["shipping_method_block"] ?? null);
        echo "

          ";
        // line 50
        echo ($context["payment_method_block"] ?? null);
        echo "
        </div>

        ";
        // line 53
        echo ($context["coupon_voucher_reward_block"] ?? null);
        echo "

        ";
        // line 55
        echo ($context["cart_block"] ?? null);
        echo "

        <div class=\"checkout-section checkout-payment-details\" v-bind:class=\"[order_data.payment_method ? 'payment-' + order_data.payment_code : '']\">
          <div class=\"title section-title\">";
        // line 58
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 58), "get", [0 => "sectionTitlePaymentDetails"], "method", false, false, false, 58);
        echo "</div>
          <div class=\"quick-checkout-payment\">
            <div class=\"journal-loading-overlay\">
              <div class=\"journal-loading\"><i class=\"fa fa-spinner fa-spin\"></i></div>
            </div>
          </div>
        </div>

        ";
        // line 66
        echo ($context["confirm_block"] ?? null);
        echo "
      </div>

  </div>
</script>
<script>window['_QuickCheckoutData'] = ";
        // line 71
        echo json_encode(($context["checkout_data"] ?? null));
        echo ";</script>
";
        // line 72
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 72,  186 => 71,  178 => 66,  167 => 58,  161 => 55,  156 => 53,  150 => 50,  145 => 48,  135 => 41,  130 => 39,  125 => 37,  120 => 35,  111 => 29,  107 => 28,  97 => 22,  91 => 20,  89 => 19,  83 => 17,  75 => 13,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/checkout.twig", "");
    }
}
