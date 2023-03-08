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

/* journal3/template/journal3/checkout/register.twig */
class __TwigTemplate_04cc8faded53f51f8c94b8543507f301e4b7616711ec521bb498032063068796 extends \Twig\Template
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
        echo "<div class=\"checkout-section section-register\" v-if=\"!customer_id\">
  <div class=\"title section-title\">";
        // line 2
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 2), "get", [0 => "sectionTitlePersonal"], "method", false, false, false, 2);
        echo "</div>
  <div class=\"section-body\">
    <div class=\"form-group account-customer-group\" style=\"display: ";
        // line 4
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
      <label class=\"control-label\">";
        // line 5
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 7
            echo "        <div class=\"radio\">
          <label>
            <input v-model=\"order_data.customer_group_id\" type=\"radio\" name=\"customer_group_id\" value=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 9);
            echo "\" checked=\"checked\"/>
            ";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 10);
            echo "</label>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>

    ";
        // line 16
        echo "
    <div class=\"form-group required account-firstname\">
      <label class=\"control-label\" for=\"input-firstname\">";
        // line 18
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
      <input v-model=\"order_data.payment_firstname\" type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 19
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.payment_firstname\" v-html=\"error.payment_firstname\"></span>
    </div>

    ";
        // line 24
        echo "
    <div class=\"form-group required account-lastname\">
      <label class=\"control-label\" for=\"input-lastname\">";
        // line 26
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
      <input v-model=\"order_data.payment_lastname\" type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 27
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.payment_lastname\" v-html=\"error.payment_lastname\"></span>
    </div>

    ";
        // line 32
        echo "
    <div class=\"form-group required account-email\">
      <label class=\"control-label\" for=\"input-email\">";
        // line 34
        echo ($context["entry_email"] ?? null);
        echo "</label>
      <input v-model=\"order_data.email\" type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 35
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.email\" v-html=\"error.email\"></span>
    </div>

    ";
        // line 40
        echo "
    <div class=\"form-group required account-telephone\">
      <label class=\"control-label\" for=\"input-telephone\">";
        // line 42
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
      <input v-model=\"order_data.telephone\" type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 43
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.telephone\" v-html=\"error.telephone\"></span>
    </div>

    ";
        // line 48
        echo "
    <div v-if=\"account === 'register'\" class=\"form-group required account-pass\">
      <label class=\"control-label\" for=\"input-password\">";
        // line 50
        echo ($context["entry_password"] ?? null);
        echo "</label>
      <input v-model=\"password\" type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 51
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.password\" v-html=\"error.password\"></span>
    </div>

    <div v-if=\"account === 'register'\" class=\"form-group required account-pass2\">
      <label class=\"control-label\" for=\"input-confirm\">";
        // line 56
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
      <input v-model=\"password2\" type=\"password\" name=\"confirm\" value=\"\" placeholder=\"";
        // line 57
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.password2\" v-html=\"error.password2\"></span>
    </div>

    ";
        // line 62
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'select'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <select v-model=\"order_data.custom_field[custom_field.custom_field_id]\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\">
        <option value=\"\">";
        // line 66
        echo ($context["text_select"] ?? null);
        echo "</option>
        <option v-for=\"custom_field_value in custom_field.custom_field_value\" v-bind:value=\"custom_field_value.custom_field_value_id\" v-html=\"custom_field_value.name\"></option>
      </select>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 73
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'radio'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-html=\"custom_field.name\"></label>
      <div v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\">
        <div class=\"radio\" v-for=\"custom_field_value in custom_field.custom_field_value\">
          <label>
            <input type=\"radio\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" v-bind:value=\"custom_field_value.custom_field_value_id\"/>
            <span v-html=\"custom_field_value.name\"></span></label>
        </div>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 87
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'checkbox'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-html=\"custom_field.name\"></label>
      <div v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\"> ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_value", [], "any", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
            // line 91
            echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
            // line 93
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 93);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 93);
            echo "][]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 93);
            echo "\"/>
              ";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 94);
            echo "</label>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo " </div>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 101
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'text'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <input type=\"text\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" value=\"";
        // line 104
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 104);
        echo "\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 109
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'textarea'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <textarea v-model=\"order_data.custom_field[custom_field.custom_field_id]\" rows=\"5\" v-bind:placeholder=\"custom_field.name\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\">";
        // line 112
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 112);
        echo "</textarea>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 117
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'file'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <br/>
      <button type=\"button\" v-on:click=\"upload('custom_field', custom_field.custom_field_id, \$event)\" v-bind:id=\"'button-account-custom-field' + custom_field.custom_field_id\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
        // line 121
        echo ($context["button_upload"] ?? null);
        echo "</button>
      <input type=\"hidden\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" value=\"\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 127
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'date'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <div class=\"input-group date\">
        <input type=\"text\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        // line 131
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 131);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 140
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'time'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <div class=\"input-group time\">
        <input type=\"text\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        // line 144
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 144);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"HH:mm\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>

    ";
        // line 153
        echo "
    <div v-for=\"custom_field in custom_fields.custom_fields.account\" v-if=\"custom_field.type === 'time'\" v-bind:id=\"'account-custom-field' + custom_field.custom_field_id\" v-bind:class=\"'form-group custom-field' + (custom_field.required ? ' required' : '')\">
      <label class=\"control-label\" v-bind:for=\"'input-account-custom-field' + custom_field.custom_field_id\" v-html=\"custom_field.name\"></label>
      <div class=\"input-group datetime\">
        <input type=\"text\" v-model=\"order_data.custom_field[custom_field.custom_field_id]\" v-on:change=\"saveDateTime('custom_field', custom_field.custom_field_id, \$event)\" value=\"";
        // line 157
        echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 157);
        echo "\" v-bind:placeholder=\"custom_field.name\" data-date-format=\"YYYY-MM-DD HH:mm\" v-bind:id=\"'input-account-custom-field' + custom_field.custom_field_id\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span>
      </div>
      <span class=\"text-danger\" v-if=\"error && error.custom_field && error.custom_field[custom_field.custom_field_id]\" v-html=\"error.custom_field[custom_field.custom_field_id]\"></span>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 157,  307 => 153,  296 => 144,  290 => 140,  279 => 131,  273 => 127,  265 => 121,  259 => 117,  252 => 112,  247 => 109,  240 => 104,  235 => 101,  229 => 96,  220 => 94,  212 => 93,  208 => 91,  204 => 90,  199 => 87,  184 => 73,  175 => 66,  169 => 62,  162 => 57,  158 => 56,  150 => 51,  146 => 50,  142 => 48,  135 => 43,  131 => 42,  127 => 40,  120 => 35,  116 => 34,  112 => 32,  105 => 27,  101 => 26,  97 => 24,  90 => 19,  86 => 18,  82 => 16,  78 => 13,  69 => 10,  65 => 9,  61 => 7,  57 => 6,  53 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/checkout/register.twig", "");
    }
}
