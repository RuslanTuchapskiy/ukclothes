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

/* journal3/template/common/header.twig */
class __TwigTemplate_993bdf65d27c57ff3b5a5a0f203159229be502ea3f7ff6ac47a0b8b00de977a6 extends \Twig\Template
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
        if ( !(isset($context["j3"]) || array_key_exists("j3", $context))) {
            // line 2
            echo "  <style>
    body {
      display: none !important;
    }
  </style>
  <script>
    window.location = 'index.php?route=journal3/startup/error';
  </script>
";
        }
        // line 11
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 12
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"";
        echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 12), "getClasses", [], "method", false, false, false, 12), " ");
        echo "\" data-jb=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "constant", [0 => "JOURNAL3_BUILD"], "method", false, false, false, 12);
        echo "\" data-jv=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "constant", [0 => "JOURNAL3_VERSION"], "method", false, false, false, 12);
        echo "\" data-ov=\"";
        echo twig_constant("VERSION");
        echo "\">
<head typeof=\"og:website\">
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 17
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 18
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 19
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 19), "hasFonts", [], "method", false, false, false, 19)) {
            // line 20
            echo "<link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\" crossorigin>
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
";
        }
        // line 23
        if (($context["description"] ?? null)) {
            // line 24
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 26
        if (($context["keywords"] ?? null)) {
            // line 27
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 29
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 29), "isPopup", [], "method", false, false, false, 29)) {
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/meta_tags"], "method", false, false, false, 30));
            foreach ($context['_seq'] as $context["key"] => $context["tag"]) {
                // line 31
                echo "<meta ";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 31);
                echo "=\"";
                echo $context["key"];
                echo "\" content=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "content", [], "any", false, false, false, 31);
                echo "\"/>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "constant", [0 => "SENTRY_JS_DSN"], "method", false, false, false, 34)) {
            // line 35
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "constant", [0 => "SENTRY_JS_DSN"], "method", false, false, false, 35);
            echo "
";
        }
        // line 37
        echo "<script>window['Journal'] = ";
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 37), "getJs", [], "method", false, false, false, 37));
        echo ";</script>
";
        // line 38
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 38), "isPopup", [], "method", false, false, false, 38)) {
            // line 39
            echo "<script>";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/mql"], "method", false, false, false, 39);
            echo "</script>
";
        }
        // line 41
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 41), "hasFonts", [], "method", false, false, false, 41)) {
            // line 42
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 42), "get", [0 => "performanceAsyncFontsStatus"], "method", false, false, false, 42)) {
                // line 43
                echo "<script>WebFontConfig = { google: { families: ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 43), "getFonts", [0 => true], "method", false, false, false, 43);
                echo " } };</script>
";
            } else {
                // line 45
                echo "<link href=\"https://fonts.googleapis.com/css?family=";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 45), "getFonts", [0 => false], "method", false, false, false, 45);
                echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
            }
        }
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 48), "getStyles", [0 => ($context["styles"] ?? null)], "method", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["style"], "content", [], "any", false, false, false, 49)) {
                // line 50
                echo "<style>";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "content", [], "any", false, false, false, 50);
                echo "</style>
";
            } else {
                // line 52
                echo "<link href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 52), "staticUrl", [0 => twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 52), 1 => false], "method", false, false, false, 52);
                echo "\" type=\"text/css\" rel=\"";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 52);
                echo "\" media=\"all\" />
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 56
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 56);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 56);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 59
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "<style>
";
        // line 62
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 62), "getCss", [], "method", false, false, false, 62);
        echo "
</style>
";
        // line 64
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 64), "get", [0 => "customCSS"], "method", false, false, false, 64)) {
            // line 65
            echo "<style>";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 65), "get", [0 => "customCSS"], "method", false, false, false, 65);
            echo "</style>
";
        }
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 67), "getScripts", [0 => "header", 1 => ($context["scripts"] ?? null)], "method", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 68
            echo "<script src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 68), "staticUrl", [0 => $context["script"], 1 => false], "method", false, false, false, 68);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 68), "get", [0 => "performanceJSDefer"], "method", false, false, false, 68)) {
                echo " defer ";
            }
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 70), "get", [0 => "customCodeHeader"], "method", false, false, false, 70)) {
            // line 71
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 71), "get", [0 => "customCodeHeader"], "method", false, false, false, 71);
            echo "
";
        }
        // line 73
        echo "</head>
<body class=\"";
        // line 74
        echo ($context["class"] ?? null);
        echo "\">

";
        // line 76
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 76), "get", [0 => "oldBrowserStatus"], "method", false, false, false, 76)) {
            // line 77
            echo "<div class=\"old-browser\">
  <div class=\"ob-content\">
    <h2 class=\"ob-title\">";
            // line 79
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 79), "get", [0 => "oldBrowserTitle"], "method", false, false, false, 79);
            echo "</h2>
    <span class=\"ob-text\">";
            // line 80
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 80), "get", [0 => "oldBrowserText"], "method", false, false, false, 80);
            echo "</span>
    <div class=\"ob-links\">
      <a href=\"https://www.google.com/chrome/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 83
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 83), "get", [0 => "oldBrowserChrome"], "method", false, false, false, 83);
            echo "\" alt=\"Chrome\" />
        <span class=\"ob-name\">Chrome</span>
      </a>
      <a href=\"https://www.mozilla.org/firefox/new/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 87
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 87), "get", [0 => "oldBrowserFirefox"], "method", false, false, false, 87);
            echo "\" alt=\"Firefox\" />
        <span class=\"ob-name\">Firefox</span>
      </a>
      <a href=\"https://www.microsoft.com/en-us/windows/microsoft-edge\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 91
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 91), "get", [0 => "oldBrowserEdge"], "method", false, false, false, 91);
            echo "\" alt=\"edge\" />
        <span class=\"ob-name\">Microsoft Edge</span>
      </a>
      <a href=\"https://www.opera.com/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 95
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 95), "get", [0 => "oldBrowserOpera"], "method", false, false, false, 95);
            echo "\" alt=\"opera\" />
        <span class=\"ob-name\">Opera</span>
      </a>
      <a href=\"https://www.apple.com/lae/safari/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 99
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 99), "get", [0 => "oldBrowserSafari"], "method", false, false, false, 99);
            echo "\" alt=\"safari\" />
        <span class=\"ob-name\">Safari on Mac</span>
      </a>
    </div>
  </div>
</div>
";
        }
        // line 106
        echo "
";
        // line 107
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 107), "isPopup", [], "method", false, false, false, 107)) {
            // line 108
            echo "<div class=\"mobile-container mobile-main-menu-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 110
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 110), "get", [0 => "headerMobileMenuTitle"], "method", false, false, false, 110);
            echo "</span>
    ";
            // line 111
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 111), "get", [0 => "mobileLangPosition"], "method", false, false, false, 111) == "menu")) {
                // line 112
                echo "      <div class=\"language-currency top-menu\">
        <div class=\"mobile-currency-wrapper\">
            ";
                // line 114
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 114), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 114)) ? (($context["currency"] ?? null)) : (""));
                echo "
        </div>
        <div class=\"mobile-language-wrapper\">
            ";
                // line 117
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 117), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 117)) ? (($context["language"] ?? null)) : (""));
                echo "
        </div>
      </div>
    ";
            }
            // line 121
            echo "    <a class=\"x\"></a>
  </div>
  <div class=\"mobile-main-menu-wrapper\">
    ";
            // line 124
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 124), "isPhone", [], "method", false, false, false, 124) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 124), "isTablet", [], "method", false, false, false, 124) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 124), "get", [0 => "mobileHeaderOn"], "method", false, false, false, 124) == "tablet")))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 124), "get", [0 => "mobile_main_menu"], "method", false, false, false, 124)) : (""));
            echo "
  </div>
</div>

<div class=\"mobile-container mobile-filter-container\">
  <div class=\"mobile-wrapper-header\"></div>
  <div class=\"mobile-filter-wrapper\"></div>
</div>

<div class=\"mobile-container mobile-cart-content-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 135
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 135), "get", [0 => "headerMobileCartTitle"], "method", false, false, false, 135);
            echo "</span>
    <a class=\"x\"></a>
  </div>
  <div class=\"mobile-cart-content-wrapper cart-content\"></div>
</div>
";
        }
        // line 141
        echo "
";
        // line 142
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "popup"], "method", false, false, false, 142);
        echo "

<div class=\"site-wrapper\">

  ";
        // line 146
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "header_notice"], "method", false, false, false, 146);
        echo "

  ";
        // line 148
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 148), "isPopup", [], "method", false, false, false, 148)) {
            // line 149
            echo "  <header class=\"header-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 149), "get", [0 => "headerType"], "method", false, false, false, 149);
            echo "\">
    ";
            // line 150
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 150), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 150) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 150), "get", [0 => "headerType"], "method", false, false, false, 150))) {
                // line 151
                echo "      ";
                $this->loadTemplate((("journal3/template/journal3/headers/desktop/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 151), "get", [0 => "headerType"], "method", false, false, false, 151)) . ".twig"), "journal3/template/common/header.twig", 151)->display($context);
                // line 152
                echo "    ";
            }
            // line 153
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 153), "get", [0 => "mobileHeaderType"], "method", false, false, false, 153)) {
                // line 154
                echo "      ";
                $this->loadTemplate((("journal3/template/journal3/headers/mobile/header_mobile_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 154), "get", [0 => "mobileHeaderType"], "method", false, false, false, 154)) . ".twig"), "journal3/template/common/header.twig", 154)->display($context);
                // line 155
                echo "    ";
            }
            // line 156
            echo "  </header>
  ";
        }
        // line 158
        echo "
  ";
        // line 159
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "fullscreen_slider"], "method", false, false, false, 159);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 159,  415 => 158,  411 => 156,  408 => 155,  405 => 154,  402 => 153,  399 => 152,  396 => 151,  394 => 150,  389 => 149,  387 => 148,  382 => 146,  375 => 142,  372 => 141,  363 => 135,  349 => 124,  344 => 121,  337 => 117,  331 => 114,  327 => 112,  325 => 111,  321 => 110,  317 => 108,  315 => 107,  312 => 106,  302 => 99,  295 => 95,  288 => 91,  281 => 87,  274 => 83,  268 => 80,  264 => 79,  260 => 77,  258 => 76,  253 => 74,  250 => 73,  245 => 71,  243 => 70,  230 => 68,  226 => 67,  220 => 65,  218 => 64,  213 => 62,  210 => 61,  202 => 59,  198 => 58,  187 => 56,  183 => 55,  171 => 52,  165 => 50,  163 => 49,  159 => 48,  152 => 45,  146 => 43,  144 => 42,  142 => 41,  136 => 39,  134 => 38,  129 => 37,  124 => 35,  122 => 34,  108 => 31,  104 => 30,  102 => 29,  96 => 27,  94 => 26,  88 => 24,  86 => 23,  81 => 20,  79 => 19,  75 => 18,  71 => 17,  53 => 12,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/header.twig", "");
    }
}
