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

/* themes/ebook_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_ae10b0b193df8c20bb0ea6e013b4e746 extends \Twig\Template
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
<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Header -->

      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71)) {
            // line 72
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 74
        echo "      </div>

      <!-- End: Header -->

      ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 78) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 78))) {
            // line 79
            echo "        <div class=\"col-md-9\">

          ";
            // line 81
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 81)) {
                // line 82
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 84
            echo "
          ";
            // line 85
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 85)) {
                // line 86
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 88
            echo "          
          
        </div>
      ";
        }
        // line 92
        echo "
      </div>

    </div>
  </div>
</div>


";
        // line 100
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 101
            echo "  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 105
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 105, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 111
        echo "

<!-- Start: Top widget -->

";
        // line 115
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 115) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 115)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 115))) {
            // line 116
            echo "  <div class=\"topwidget\" id=\"topwidget\">

    <div class=\"container\">

      ";
            // line 120
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 120)) {
                // line 121
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 122
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 125
            echo "
        <div class=\"row topwidget-list clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 129
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 129)) {
                // line 130
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 130, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 131
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 135
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 135)) {
                // line 136
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 136, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 137
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 141
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 141)) {
                // line 142
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 142, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 143
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 150
        echo "
<!--End: widget -->

    
<!--Start: Highlighted -->

";
        // line 156
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 156)) {
            // line 157
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 159
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 163
        echo "
<!--End: Highlighted -->


<!--Start: Top Message -->

";
        // line 169
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 169)) {
            // line 170
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 172
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 176
        echo "
<!--End: widget -->


<!--Start: Title -->

";
        // line 182
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 182) &&  !($context["is_front"] ?? null))) {
            // line 183
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 186
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 191
        echo "
<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 200
        if ( !($context["is_front"] ?? null)) {
            // line 201
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 202
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 205
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 211
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 211)) {
            // line 212
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 212, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 214
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 218
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 221
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 221)) {
            // line 222
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 222, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 224
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 224), 224, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 228
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 231
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 231)) {
            // line 232
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 232, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 234
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 234), 234, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 238
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Features -->

";
        // line 251
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 251) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 251)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 251))) {
            // line 252
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 256
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 256)) {
                // line 257
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 258
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 258), 258, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 261
            echo "
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 265
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 265)) {
                // line 266
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 266, $this->source), "html", null, true);
                echo ">
            ";
                // line 267
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 267), 267, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 270
            echo "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 273
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 273)) {
                // line 274
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 274, $this->source), "html", null, true);
                echo ">
            ";
                // line 275
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 275), 275, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 278
            echo "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 281
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 281)) {
                // line 282
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 282, $this->source), "html", null, true);
                echo ">
            ";
                // line 283
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 283), 283, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 286
            echo "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 293
        echo "<!--End: Features -->


<!-- Start: Clients -->
";
        // line 297
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 297)) {
            echo " 

  <div class=\"clients\" id=\"clients\">

    ";
            // line 301
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 301)) {
                // line 302
                echo "      <div class=\"custom-block-title\" >
        ";
                // line 303
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 306
            echo "
    <div class=\"container\">
      ";
            // line 308
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 308), 308, $this->source), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 313
        echo "<!--End: Clients -->


<!-- Start: Updates widgets -->
";
        // line 317
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 317) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 317)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 317))) {
            // line 318
            echo "
  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      ";
            // line 322
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 322)) {
                // line 323
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 324
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 324), 324, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 327
            echo "
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 331
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 331)) {
                // line 332
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 332, $this->source), "html", null, true);
                echo ">
            ";
                // line 333
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 333), 333, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 335
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 339
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 339)) {
                // line 340
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 340, $this->source), "html", null, true);
                echo ">
            ";
                // line 341
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 341), 341, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 343
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 347
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 347)) {
                // line 348
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 348, $this->source), "html", null, true);
                echo ">
            ";
                // line 349
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 349), 349, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 351
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 355
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 355)) {
                // line 356
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 356, $this->source), "html", null, true);
                echo ">
            ";
                // line 357
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 357), 357, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 359
            echo "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 367
        echo "<!--End: widgets -->


<!-- Start: Services widgets -->
";
        // line 371
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 371) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 371)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 371)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 371))) {
            // line 372
            echo "
  <div class=\"services\" id=\"services\">    
    <div class=\"container\">

      ";
            // line 376
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_title", [], "any", false, false, true, 376)) {
                // line 377
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 378
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_title", [], "any", false, false, true, 378), 378, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 381
            echo "

      <div class=\"row team-list\">

        <!-- Start: Bottom First -->          
        ";
            // line 386
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 386)) {
                // line 387
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 387, $this->source), "html", null, true);
                echo ">
            ";
                // line 388
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 388), 388, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 390
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 394
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 394)) {
                // line 395
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 395, $this->source), "html", null, true);
                echo ">
            ";
                // line 396
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 396), 396, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 398
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 402
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 402)) {
                // line 403
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 403, $this->source), "html", null, true);
                echo ">
            ";
                // line 404
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 404), 404, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 406
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 410
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 410)) {
                // line 411
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 411, $this->source), "html", null, true);
                echo ">
            ";
                // line 412
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 412), 412, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 415
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 422
        echo "<!--End: widgets -->


<!-- Start: Bottom widgets -->
";
        // line 426
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 426) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 426)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 426)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 426))) {
            // line 427
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 431
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 431)) {
                // line 432
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 433
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 433), 433, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 436
            echo "
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 440
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 440)) {
                // line 441
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 441, $this->source), "html", null, true);
                echo ">
            ";
                // line 442
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 442), 442, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 444
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 448
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 448)) {
                // line 449
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 449, $this->source), "html", null, true);
                echo ">
            ";
                // line 450
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 450), 450, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 452
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 456
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 456)) {
                // line 457
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 457, $this->source), "html", null, true);
                echo ">
            ";
                // line 458
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 458), 458, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 460
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 464
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 464)) {
                // line 465
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 465, $this->source), "html", null, true);
                echo ">
            ";
                // line 466
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 466), 466, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 469
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 476
        echo "<!--End: widgets -->


<!-- Start: Footer widgets -->
";
        // line 480
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 480) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 480)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 480))) {
            // line 481
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 485
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 485)) {
                // line 486
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 487
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 487), 487, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 490
            echo "
      <div class=\"row\">

        <!-- Start: Footer First -->
        ";
            // line 494
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 494)) {
                // line 495
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 495, $this->source), "html", null, true);
                echo ">
            ";
                // line 496
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 496), 496, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 499
            echo "        <!-- End: Footer First -->

        <!-- Start :Footer Second -->
        ";
            // line 502
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 502)) {
                // line 503
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 503, $this->source), "html", null, true);
                echo ">
            ";
                // line 504
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 504), 504, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 507
            echo "        <!-- End: Footer Second -->

        <!-- Start: Footer third -->
        ";
            // line 510
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 510)) {
                // line 511
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 511, $this->source), "html", null, true);
                echo ">
            ";
                // line 512
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 512), 512, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 515
            echo "        <!-- End: Footer Third -->

      </div>
    </div>
  </div>

";
        }
        // line 522
        echo "<!--End: widgets -->


<!-- Start: Copyright -->
<div class=\"copyright\">

    <div class=\"container\">

      <span>Copyright © ";
        // line 530
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>

      ";
        // line 532
        if (($context["show_credit_link"] ?? null)) {
            // line 533
            echo "        <span class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 535
        echo "
      ";
        // line 536
        if (($context["show_social_icon"] ?? null)) {
            // line 537
            echo "        <p class=\"social-media\">
          ";
            // line 538
            if (($context["facebook_url"] ?? null)) {
                // line 539
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 539, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
          ";
            }
            // line 541
            echo "          ";
            if (($context["google_plus_url"] ?? null)) {
                // line 542
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 542, $this->source), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
          ";
            }
            // line 544
            echo "          ";
            if (($context["twitter_url"] ?? null)) {
                // line 545
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 545, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
          ";
            }
            // line 547
            echo "          ";
            if (($context["linkedin_url"] ?? null)) {
                // line 548
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 548, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
          ";
            }
            // line 550
            echo "          ";
            if (($context["pinterest_url"] ?? null)) {
                // line 551
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 551, $this->source), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
          ";
            }
            // line 553
            echo "          ";
            if (($context["rss_url"] ?? null)) {
                // line 554
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 554, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
          ";
            }
            // line 556
            echo "        </p>
      ";
        }
        // line 558
        echo "
  </div>
</div>
<!-- End: Copyright -->


";
    }

    public function getTemplateName()
    {
        return "themes/ebook_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1006 => 558,  1002 => 556,  996 => 554,  993 => 553,  987 => 551,  984 => 550,  978 => 548,  975 => 547,  969 => 545,  966 => 544,  960 => 542,  957 => 541,  951 => 539,  949 => 538,  946 => 537,  944 => 536,  941 => 535,  937 => 533,  935 => 532,  930 => 530,  920 => 522,  911 => 515,  905 => 512,  900 => 511,  898 => 510,  893 => 507,  887 => 504,  882 => 503,  880 => 502,  875 => 499,  869 => 496,  864 => 495,  862 => 494,  856 => 490,  850 => 487,  847 => 486,  845 => 485,  839 => 481,  837 => 480,  831 => 476,  822 => 469,  816 => 466,  811 => 465,  809 => 464,  803 => 460,  797 => 458,  792 => 457,  790 => 456,  784 => 452,  778 => 450,  773 => 449,  771 => 448,  765 => 444,  759 => 442,  754 => 441,  752 => 440,  746 => 436,  740 => 433,  737 => 432,  735 => 431,  729 => 427,  727 => 426,  721 => 422,  712 => 415,  706 => 412,  701 => 411,  699 => 410,  693 => 406,  687 => 404,  682 => 403,  680 => 402,  674 => 398,  668 => 396,  663 => 395,  661 => 394,  655 => 390,  649 => 388,  644 => 387,  642 => 386,  635 => 381,  629 => 378,  626 => 377,  624 => 376,  618 => 372,  616 => 371,  610 => 367,  600 => 359,  594 => 357,  589 => 356,  587 => 355,  581 => 351,  575 => 349,  570 => 348,  568 => 347,  562 => 343,  556 => 341,  551 => 340,  549 => 339,  543 => 335,  537 => 333,  532 => 332,  530 => 331,  524 => 327,  518 => 324,  515 => 323,  513 => 322,  507 => 318,  505 => 317,  499 => 313,  491 => 308,  487 => 306,  481 => 303,  478 => 302,  476 => 301,  469 => 297,  463 => 293,  454 => 286,  448 => 283,  443 => 282,  441 => 281,  436 => 278,  430 => 275,  425 => 274,  423 => 273,  418 => 270,  412 => 267,  407 => 266,  405 => 265,  399 => 261,  393 => 258,  390 => 257,  388 => 256,  382 => 252,  380 => 251,  365 => 238,  358 => 234,  352 => 232,  350 => 231,  345 => 228,  338 => 224,  332 => 222,  330 => 221,  325 => 218,  318 => 214,  312 => 212,  310 => 211,  302 => 205,  296 => 202,  293 => 201,  291 => 200,  280 => 191,  272 => 186,  267 => 183,  265 => 182,  257 => 176,  250 => 172,  246 => 170,  244 => 169,  236 => 163,  229 => 159,  225 => 157,  223 => 156,  215 => 150,  206 => 143,  198 => 142,  196 => 141,  190 => 137,  182 => 136,  180 => 135,  174 => 131,  166 => 130,  164 => 129,  158 => 125,  152 => 122,  149 => 121,  147 => 120,  141 => 116,  139 => 115,  133 => 111,  127 => 107,  118 => 105,  114 => 104,  109 => 101,  107 => 100,  97 => 92,  91 => 88,  85 => 86,  83 => 85,  80 => 84,  74 => 82,  72 => 81,  68 => 79,  66 => 78,  60 => 74,  54 => 72,  52 => 71,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ebook_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\DrupalProjectHouse\\themes\\ebook_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71, "for" => 104);
        static $filters = array("escape" => 72, "raw" => 105, "date" => 530);
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
