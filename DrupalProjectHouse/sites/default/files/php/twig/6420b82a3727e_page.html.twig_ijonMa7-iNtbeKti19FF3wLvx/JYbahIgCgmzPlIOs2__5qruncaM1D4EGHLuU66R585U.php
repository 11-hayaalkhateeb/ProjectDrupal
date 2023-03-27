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

/* themes/notebook_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_06c076272c6776ede704fa15e5e4df77 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "
<!-- Start: Header -->
<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"navbar-header col-md-2\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 70)) {
            // line 71
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 73
        echo "      </div>

      ";
        // line 75
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 75) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 75)) || ($context["show_social_icon"] ?? null))) {
            // line 76
            echo "          <div class=\"col-md primary-menu-wrap\">
            ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 77)) {
                // line 78
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 80
            echo "            
            ";
            // line 81
            if (($context["show_social_icon"] ?? null)) {
                // line 82
                echo "              <p class=\"social-media\">
                ";
                // line 83
                if (($context["facebook_url"] ?? null)) {
                    // line 84
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 84, $this->source), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
                ";
                }
                // line 86
                echo "                ";
                if (($context["twitter_url"] ?? null)) {
                    // line 87
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 87, $this->source), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
                ";
                }
                // line 89
                echo "                ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 90
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 90, $this->source), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                ";
                }
                // line 92
                echo "                ";
                if (($context["instagram_url"] ?? null)) {
                    // line 93
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 93, $this->source), "html", null, true);
                    echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
                ";
                }
                // line 95
                echo "                ";
                if (($context["rss_url"] ?? null)) {
                    // line 96
                    echo "                  <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 96, $this->source), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
                ";
                }
                // line 98
                echo "              </p>
            ";
            }
            // line 100
            echo "            
            ";
            // line 101
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 101)) {
                // line 102
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 104
            echo "
          </div>
        ";
        }
        // line 107
        echo "
      </div>
    </div>
  </div>
</div>
<!--End: Widget -->


<!-- Start: Flexslider -->
";
        // line 116
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 117
            echo "  <div class=\"container\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 121
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 121, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 127
        echo "<!--End: Widget -->

    
<!--Start: Highlighted -->
";
        // line 131
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 131)) {
            // line 132
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 134
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 138
        echo "<!--End: Widget -->


<!--Start: Title -->
";
        // line 142
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 142) &&  !($context["is_front"] ?? null))) {
            // line 143
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 151
        echo "<!--End: Widget -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      ";
        // line 157
        if ( !($context["is_front"] ?? null)) {
            // line 158
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 159
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 162
        echo "
      <div class=\"row layout\">
        ";
        // line 164
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 164)) {
            // line 165
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 165, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 167
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 171
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 171)) {
            // line 172
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 172, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 174
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 178
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 178)) {
            // line 179
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 179, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 181
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 185
        echo "      </div>

    </div>
  </div>
</div>
<!--End: Widget -->


<!-- Start: Bottom widgets -->
";
        // line 194
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 194) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 194)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 194)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 194))) {
            // line 195
            echo "  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 198
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 198)) {
                // line 199
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 200
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 203
            echo "
      <div class=\"row\">
        ";
            // line 205
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 205)) {
                // line 206
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 206, $this->source), "html", null, true);
                echo ">
            ";
                // line 207
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 209
            echo "       
        ";
            // line 210
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 210)) {
                // line 211
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 211, $this->source), "html", null, true);
                echo ">
            ";
                // line 212
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 212), 212, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 215
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 215)) {
                // line 216
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 216, $this->source), "html", null, true);
                echo ">
            ";
                // line 217
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 217), 217, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 220
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 220)) {
                // line 221
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 221, $this->source), "html", null, true);
                echo ">
            ";
                // line 222
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 222), 222, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 225
            echo "      </div>

    </div>
  </div>
";
        }
        // line 230
        echo "<!--End: Widget -->


<!-- Start: Footer widgets -->
";
        // line 234
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 234) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 234)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 234))) {
            // line 235
            echo "  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 238
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 238)) {
                // line 239
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 240
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 240), 240, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 243
            echo "
      <div class=\"row\">
        ";
            // line 245
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 245)) {
                // line 246
                echo "          <div class=\"col-sm\">
            ";
                // line 247
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 247), 247, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 250
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 250)) {
                // line 251
                echo "          <div class=\"col-sm\">
            ";
                // line 252
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 252), 252, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 255
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 255)) {
                // line 256
                echo "          <div class=\"col-sm\">
            ";
                // line 257
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 257), 257, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 260
            echo "      </div>

    </div>
  </div>
";
        }
        // line 265
        echo "<!--End: Widget -->


<!-- Start: Copyright -->
<div class=\"copyright\">
    <div class=\"container\">
      <span>Copyright © ";
        // line 271
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
      ";
        // line 272
        if (($context["show_credit_link"] ?? null)) {
            // line 273
            echo "        <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 275
        echo "  </div>
</div>
<!--End: Widget -->


";
    }

    public function getTemplateName()
    {
        return "themes/notebook_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 275,  476 => 273,  474 => 272,  470 => 271,  462 => 265,  455 => 260,  449 => 257,  446 => 256,  443 => 255,  437 => 252,  434 => 251,  431 => 250,  425 => 247,  422 => 246,  420 => 245,  416 => 243,  410 => 240,  407 => 239,  405 => 238,  400 => 235,  398 => 234,  392 => 230,  385 => 225,  379 => 222,  374 => 221,  371 => 220,  365 => 217,  360 => 216,  357 => 215,  351 => 212,  346 => 211,  344 => 210,  341 => 209,  335 => 207,  330 => 206,  328 => 205,  324 => 203,  318 => 200,  315 => 199,  313 => 198,  308 => 195,  306 => 194,  295 => 185,  288 => 181,  282 => 179,  279 => 178,  272 => 174,  266 => 172,  263 => 171,  256 => 167,  250 => 165,  248 => 164,  244 => 162,  238 => 159,  235 => 158,  233 => 157,  225 => 151,  217 => 146,  212 => 143,  210 => 142,  204 => 138,  197 => 134,  193 => 132,  191 => 131,  185 => 127,  179 => 123,  170 => 121,  166 => 120,  161 => 117,  159 => 116,  148 => 107,  143 => 104,  137 => 102,  135 => 101,  132 => 100,  128 => 98,  122 => 96,  119 => 95,  113 => 93,  110 => 92,  104 => 90,  101 => 89,  95 => 87,  92 => 86,  86 => 84,  84 => 83,  81 => 82,  79 => 81,  76 => 80,  70 => 78,  68 => 77,  65 => 76,  63 => 75,  59 => 73,  53 => 71,  51 => 70,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/notebook_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\DrupalProjectHouse\\themes\\notebook_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 70, "for" => 120);
        static $filters = array("escape" => 71, "raw" => 121, "date" => 271);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
