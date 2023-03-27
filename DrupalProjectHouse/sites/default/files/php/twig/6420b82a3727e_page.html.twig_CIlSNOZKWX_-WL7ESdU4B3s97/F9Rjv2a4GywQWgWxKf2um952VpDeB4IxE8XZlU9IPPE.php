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

/* themes/minimal_lite/templates/page.html.twig */
class __TwigTemplate_9718489deecad063747000e3b3ca3613 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'reading_progress_indicator' => [$this, 'block_reading_progress_indicator'],
            'main_content' => [$this, 'block_main_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 78)) {
            // line 79
            echo "  ";
            // line 80
            echo "  <div class=\"clearfix slideout ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideout_background_color"] ?? null), 80, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
    ";
            // line 82
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "
      </div>
    </div>
    ";
            // line 88
            echo "  </div>
  ";
            // line 90
            echo "
  ";
            // line 92
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"></button>
  ";
        }
        // line 95
        echo "
";
        // line 97
        echo "<div class=\"page-container\">

  ";
        // line 99
        if ((((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 99) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 99)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 99)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 99)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 99)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 99)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 99)) || ($context["post_progress"] ?? null))) {
            // line 100
            echo "    ";
            // line 101
            echo "    <div class=\"header-container\">

      ";
            // line 103
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 103) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 103))) {
                // line 104
                echo "        ";
                // line 105
                echo "        <div class=\"clearfix header-top-highlighted ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null), 105, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 106
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null), 106, $this->source), "html", null, true);
                echo "\">
            ";
                // line 108
                echo "            <div class=\"clearfix header-top-highlighted__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 109
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 110
                    echo "                data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null), 110, $this->source), "html", null, true);
                    echo "\"
              ";
                }
                // line 111
                echo ">
              <div class=\"row\">
                ";
                // line 113
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 113)) {
                    // line 114
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null), 114, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 116
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 117
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 120
                    echo "                  </div>
                ";
                }
                // line 122
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 122)) {
                    // line 123
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null), 123, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 125
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 126
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 129
                    echo "                  </div>
                ";
                }
                // line 131
                echo "              </div>
            </div>
            ";
                // line 134
                echo "          </div>
        </div>
        ";
                // line 137
                echo "      ";
            }
            // line 138
            echo "
      ";
            // line 139
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 139) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 139))) {
                // line 140
                echo "        ";
                // line 141
                echo "        <div class=\"clearfix header-top ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null), 141, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 142
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null), 142, $this->source), "html", null, true);
                echo "\">
            ";
                // line 144
                echo "            <div class=\"clearfix header-top__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 145
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 146
                    echo "                data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null), 146, $this->source), "html", null, true);
                    echo "\"
              ";
                }
                // line 147
                echo ">
              <div class=\"row\">
                ";
                // line 149
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 149)) {
                    // line 150
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null), 150, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 152
                    echo "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 153
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 156
                    echo "                  </div>
                ";
                }
                // line 158
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 158)) {
                    // line 159
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null), 159, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 161
                    echo "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 162
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 165
                    echo "                  </div>
                ";
                }
                // line 167
                echo "              </div>
            </div>
            ";
                // line 170
                echo "          </div>
        </div>
        ";
                // line 173
                echo "      ";
            }
            // line 174
            echo "
      ";
            // line 175
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 175) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 175)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 175))) {
                // line 176
                echo "        ";
                // line 177
                echo "        ";
                $this->displayBlock('reading_progress_indicator', $context, $blocks);
                // line 179
                echo "        <header role=\"banner\" class=\"clearfix header ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null), 179, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null), 179, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null), 179, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 180
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null), 180, $this->source), "html", null, true);
                echo "\">
            ";
                // line 182
                echo "            <div class=\"clearfix header__container\">
              <div class=\"row align-items-center\">
                ";
                // line 184
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 184)) {
                    // line 185
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null), 185, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 187
                    echo "                    <div class=\"clearfix header__section header-first\">
                      ";
                    // line 188
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 191
                    echo "                  </div>
                ";
                }
                // line 193
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 193)) {
                    // line 194
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null), 194, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 196
                    echo "                    <div class=\"clearfix header__section header-second";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_mobile_menu_display"] ?? null)) ? (" d-none d-md-block") : ("")));
                    echo "\">
                      ";
                    // line 197
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 200
                    echo "                  </div>
                ";
                }
                // line 202
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 202)) {
                    // line 203
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null), 203, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 205
                    echo "                    <div class=\"clearfix header__section header-third\">
                      ";
                    // line 206
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 209
                    echo "                  </div>
                ";
                }
                // line 211
                echo "              </div>
            </div>
            ";
                // line 214
                echo "          </div>
        </header>
        ";
                // line 217
                echo "      ";
            }
            // line 218
            echo "
    </div>
    ";
            // line 221
            echo "  ";
        }
        // line 222
        echo "
  ";
        // line 223
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 223)) {
            // line 224
            echo "    ";
            // line 225
            echo "    <div ";
            if (($context["banner_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_id"] ?? null), 225, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix banner ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_background_color"] ?? null), 225, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 226
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null), 226, $this->source), "html", null, true);
            echo "\">
        ";
            // line 228
            echo "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"banner__section\">
                ";
            // line 232
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 232), 232, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 238
            echo "      </div>
    </div>
    ";
            // line 241
            echo "  ";
        }
        // line 242
        echo "
  ";
        // line 243
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 243)) {
            // line 244
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            ";
            // line 248
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 248), 248, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 254
        echo "
  ";
        // line 255
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 255)) {
            // line 256
            echo "    ";
            // line 257
            echo "    <div ";
            if (($context["content_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_id"] ?? null), 257, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_background_color"] ?? null), 257, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 258
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_layout_container"] ?? null), 258, $this->source), "html", null, true);
            echo "\">
        ";
            // line 260
            echo "        <div class=\"clearfix content-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 261
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 262
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_animation_effect"] ?? null), 262, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 263
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top__section\">
                ";
            // line 267
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 267), 267, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 273
            echo "      </div>
    </div>
    ";
            // line 276
            echo "  ";
        }
        // line 277
        echo "
  ";
        // line 278
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 278)) {
            // line 279
            echo "    ";
            // line 280
            echo "    <div ";
            if (($context["content_top_highlighted_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_id"] ?? null), 280, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-top-highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_background_color"] ?? null), 280, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_separator"] ?? null), 280, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 281
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_layout_container"] ?? null), 281, $this->source), "html", null, true);
            echo "\">
        ";
            // line 283
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 284
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 285
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_animation_effect"] ?? null), 285, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 286
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 290
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 290), 290, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 296
            echo "      </div>
    </div>
    ";
            // line 299
            echo "  ";
        }
        // line 300
        echo "
  ";
        // line 302
        echo "  ";
        $this->displayBlock('main_content', $context, $blocks);
        // line 348
        echo "  ";
        // line 349
        echo "
  ";
        // line 350
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 350) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 350))) {
            // line 351
            echo "    ";
            // line 352
            echo "    <div ";
            if (($context["content_bottom_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_id"] ?? null), 352, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null), 352, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_separator"] ?? null), 352, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 353
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_layout_container"] ?? null), 353, $this->source), "html", null, true);
            echo "\">
        ";
            // line 355
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 356
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 357
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null), 357, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 358
            echo ">
          <div class=\"row\">
            ";
            // line 360
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 360)) {
                // line 361
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null), 361, $this->source), "html", null, true);
                echo "\">
                ";
                // line 363
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 364
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 364), 364, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 367
                echo "              </div>
            ";
            }
            // line 369
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 369)) {
                // line 370
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null), 370, $this->source), "html", null, true);
                echo "\">
                ";
                // line 372
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 373
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 373), 373, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 376
                echo "              </div>
            ";
            }
            // line 378
            echo "          </div>
        </div>
        ";
            // line 381
            echo "      </div>
    </div>
    ";
            // line 384
            echo "  ";
        }
        // line 385
        echo "
  ";
        // line 386
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 386)) {
            // line 387
            echo "    ";
            // line 388
            echo "    <div ";
            if (($context["featured_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_id"] ?? null), 388, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null), 388, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_separator"] ?? null), 388, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 389
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null), 389, $this->source), "html", null, true);
            echo "\">
        ";
            // line 391
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 392
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 393
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null), 393, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 394
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 398
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 398), 398, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 404
            echo "      </div>
    </div>
    ";
            // line 407
            echo "  ";
        }
        // line 408
        echo "
  ";
        // line 409
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 409)) {
            // line 410
            echo "    ";
            // line 411
            echo "    <div ";
            if (($context["featured_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_id"] ?? null), 411, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null), 411, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_separator"] ?? null), 411, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 412
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null), 412, $this->source), "html", null, true);
            echo "\">
        ";
            // line 414
            echo "        <div class=\"clearfix featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 415
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 416
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null), 416, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 417
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 421
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 421), 421, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 427
            echo "      </div>
    </div>
    ";
            // line 430
            echo "  ";
        }
        // line 431
        echo "
  ";
        // line 432
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 432)) {
            // line 433
            echo "    ";
            // line 434
            echo "    <div ";
            if (($context["featured_bottom_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_id"] ?? null), 434, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null), 434, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_separator"] ?? null), 434, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 435
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null), 435, $this->source), "html", null, true);
            echo "\">
        ";
            // line 437
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 438
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 439
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null), 439, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 440
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 444
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 444), 444, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 450
            echo "      </div>
    </div>
    ";
            // line 453
            echo "  ";
        }
        // line 454
        echo "
  ";
        // line 455
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 455)) {
            // line 456
            echo "    ";
            // line 457
            echo "    <div ";
            if (($context["sub_featured_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_id"] ?? null), 457, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix sub-featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_background_color"] ?? null), 457, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_separator"] ?? null), 457, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 458
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_layout_container"] ?? null), 458, $this->source), "html", null, true);
            echo "\">
        ";
            // line 460
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 461
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 462
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_animation_effect"] ?? null), 462, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 463
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 467
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 467), 467, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 473
            echo "      </div>
    </div>
    ";
            // line 476
            echo "  ";
        }
        // line 477
        echo "
  ";
        // line 478
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 478)) {
            // line 479
            echo "    ";
            // line 480
            echo "    <div ";
            if (($context["highlighted_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_id"] ?? null), 480, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix highlighted-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_background_color"] ?? null), 480, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_separator"] ?? null), 480, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 481
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_layout_container"] ?? null), 481, $this->source), "html", null, true);
            echo "\">
        ";
            // line 483
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 484
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 485
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_animation_effect"] ?? null), 485, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 486
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 490
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 490), 490, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 496
            echo "      </div>
    </div>
    ";
            // line 499
            echo "  ";
        }
        // line 500
        echo "
  ";
        // line 501
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 501)) {
            // line 502
            echo "    ";
            // line 503
            echo "    <div ";
            if (($context["highlighted_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_id"] ?? null), 503, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null), 503, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_separator"] ?? null), 503, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 504
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null), 504, $this->source), "html", null, true);
            echo "\">
        ";
            // line 506
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 507
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 508
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null), 508, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 509
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 513
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 513), 513, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 519
            echo "      </div>
    </div>
    ";
            // line 522
            echo "  ";
        }
        // line 523
        echo "
  ";
        // line 524
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sticky_footer", [], "any", false, false, true, 524)) {
            // line 525
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("minimal_lite/sticky-footer-init"), "html", null, true);
            echo "
    ";
            // line 527
            echo "    <div class=\"sticky-footer-container\">
      <div class=\"";
            // line 528
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_footer_layout_container"] ?? null), 528, $this->source), "html", null, true);
            echo "\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"collapsible-sticky-footer-trigger text-right\">
              <a class=\"";
            // line 532
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_footer_background_color"] ?? null), 532, $this->source), "html", null, true);
            echo " button m-0\" data-toggle=\"collapse\" href=\"#collapsible-sticky-footer\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapsible-sticky-footer\">
                ";
            // line 533
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_footer_trigger_text"] ?? null), 533, $this->source), "html", null, true);
            echo "
                <span class=\"ml-2 text-center collapsible-sticky-footer-icon collapsible-sticky-footer__expand-icon\"><i class=\"fas fa-angle-down m-0\"></i></span>
                <span class=\"ml-2 text-center collapsible-sticky-footer-icon collapsible-sticky-footer__collapse-icon\"><i class=\"fas fa-angle-up m-0\"></i></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class=\"clearfix sticky-footer ";
            // line 541
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_footer_background_color"] ?? null), 541, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sticky_footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sticky_footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
        <div class=\"";
            // line 542
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_footer_layout_container"] ?? null), 542, $this->source), "html", null, true);
            echo "\">
          ";
            // line 544
            echo "          <div class=\"clearfix sticky-footer__container\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"collapse show\" id=\"collapsible-sticky-footer\">
                  ";
            // line 549
            echo "                  <div class=\"clearfix sticky-footer__section\">
                    ";
            // line 550
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sticky_footer", [], "any", false, false, true, 550), 550, $this->source), "html", null, true);
            echo "
                  </div>
                  ";
            // line 553
            echo "                </div>
              </div>
            </div>
          </div>
          ";
            // line 558
            echo "        </div>
      </div>
    </div>
    ";
            // line 562
            echo "    <div class=\"sticky-footer-placeholder\"></div>
  ";
        }
        // line 564
        echo "
  ";
        // line 565
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 565) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 565))) {
            // line 566
            echo "    ";
            // line 567
            echo "    <div ";
            if (($context["footer_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_id"] ?? null), 567, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix footer-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null), 567, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null), 567, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_separator"] ?? null), 567, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 568
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_layout_container"] ?? null), 568, $this->source), "html", null, true);
            echo "\">
        ";
            // line 570
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 571
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 572
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null), 572, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 573
            echo ">
          <div class=\"row\">
            ";
            // line 575
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 575)) {
                // line 576
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null), 576, $this->source), "html", null, true);
                echo "\">
                ";
                // line 578
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 579
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 579), 579, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 582
                echo "              </div>
            ";
            }
            // line 584
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 584)) {
                // line 585
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null), 585, $this->source), "html", null, true);
                echo "\">
                ";
                // line 587
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 588
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 588), 588, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 591
                echo "              </div>
            ";
            }
            // line 593
            echo "          </div>
        </div>
        ";
            // line 596
            echo "      </div>
    </div>
    ";
            // line 599
            echo "  ";
        }
        // line 600
        echo "
  ";
        // line 601
        if (((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 601) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 601)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 601)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 601)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 601))) {
            // line 602
            echo "    ";
            // line 603
            echo "    <footer ";
            if (($context["footer_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_id"] ?? null), 603, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix footer ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null), 603, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_separator"] ?? null), 603, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 604
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_layout_container"] ?? null), 604, $this->source), "html", null, true);
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 607
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 607)) {
                // line 608
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_grid_class"] ?? null), 608, $this->source), "html", null, true);
                echo "\">
                ";
                // line 610
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 611
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 612
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 612, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 613
                echo ">
                  ";
                // line 614
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 614), 614, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 617
                echo "              </div>
            ";
            }
            // line 619
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 619)) {
                // line 620
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_grid_class"] ?? null), 620, $this->source), "html", null, true);
                echo "\">
                ";
                // line 622
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 623
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 624
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 624, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 625
                echo ">
                  ";
                // line 626
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 626), 626, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 629
                echo "              </div>
            ";
            }
            // line 631
            echo "            <div class=\"clearfix ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_first"] ?? null), 631, $this->source), "html", null, true);
            echo "\"></div>
            ";
            // line 632
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 632)) {
                // line 633
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_grid_class"] ?? null), 633, $this->source), "html", null, true);
                echo "\">
                ";
                // line 635
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 636
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 637
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 637, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 638
                echo ">
                  ";
                // line 639
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 639), 639, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 642
                echo "              </div>
            ";
            }
            // line 644
            echo "            <div class=\"clearfix ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_second"] ?? null), 644, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_5_columns_clearfix"] ?? null), 644, $this->source), "html", null, true);
            echo "\"></div>
            ";
            // line 645
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 645)) {
                // line 646
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fourth_grid_class"] ?? null), 646, $this->source), "html", null, true);
                echo "\">
                ";
                // line 648
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 649
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 650
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 650, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 651
                echo ">
                  ";
                // line 652
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 652), 652, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 655
                echo "              </div>
            ";
            }
            // line 657
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 657)) {
                // line 658
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_grid_class"] ?? null), 658, $this->source), "html", null, true);
                echo "\">
                ";
                // line 660
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 661
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 662
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 662, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 663
                echo ">
                  ";
                // line 664
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 664), 664, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 667
                echo "              </div>
            ";
            }
            // line 669
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 674
            echo "  ";
        }
        // line 675
        echo "
  ";
        // line 676
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 676)) {
            // line 677
            echo "    ";
            // line 678
            echo "    <div ";
            if (($context["footer_bottom_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_id"] ?? null), 678, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix footer-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_background_color"] ?? null), 678, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_separator"] ?? null), 678, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 679
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_layout_container"] ?? null), 679, $this->source), "html", null, true);
            echo "\">
        ";
            // line 681
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix footer-bottom__section\">
                ";
            // line 685
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 685), 685, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 691
            echo "      </div>
    </div>
    ";
            // line 694
            echo "  ";
        }
        // line 695
        echo "
  ";
        // line 696
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 696) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 696)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 696))) {
            // line 697
            echo "    ";
            // line 698
            echo "    <div ";
            if (($context["subfooter_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_id"] ?? null), 698, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix subfooter-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_background_color"] ?? null), 698, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_separator"] ?? null), 698, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 699
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_layout_container"] ?? null), 699, $this->source), "html", null, true);
            echo "\">
        ";
            // line 701
            echo "        <div class=\"clearfix subfooter-top__container\">
          <div class=\"row\">
            ";
            // line 703
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 703)) {
                // line 704
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_first_grid_class"] ?? null), 704, $this->source), "html", null, true);
                echo "\">
                <div class=\"clearfix subfooter-top__section\">
                  ";
                // line 706
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 706), 706, $this->source), "html", null, true);
                echo "
                </div>
              </div>
            ";
            }
            // line 710
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 710)) {
                // line 711
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_second_grid_class"] ?? null), 711, $this->source), "html", null, true);
                echo "\">
                <div class=\"clearfix subfooter-top__section\">
                  ";
                // line 713
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 713), 713, $this->source), "html", null, true);
                echo "
                </div>
              </div>
            ";
            }
            // line 717
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 717)) {
                // line 718
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_third_grid_class"] ?? null), 718, $this->source), "html", null, true);
                echo "\">
                <div class=\"clearfix subfooter-top__section\">
                  ";
                // line 720
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 720), 720, $this->source), "html", null, true);
                echo "
                </div>
              </div>
            ";
            }
            // line 724
            echo "          </div>
        </div>
        ";
            // line 727
            echo "      </div>
    </div>
    ";
            // line 730
            echo "  ";
        }
        // line 731
        echo "
  ";
        // line 732
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 732) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 732))) {
            // line 733
            echo "    ";
            // line 734
            echo "    <div ";
            if (($context["subfooter_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_id"] ?? null), 734, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix subfooter ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null), 734, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_separator"] ?? null), 734, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 735
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null), 735, $this->source), "html", null, true);
            echo "\">
        ";
            // line 737
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 739
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 739)) {
                // line 740
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null), 740, $this->source), "html", null, true);
                echo "\">
                ";
                // line 742
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 743
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 743), 743, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 746
                echo "              </div>
            ";
            }
            // line 748
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 748)) {
                // line 749
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null), 749, $this->source), "html", null, true);
                echo "\">
                ";
                // line 751
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 752
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 752), 752, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 755
                echo "              </div>
            ";
            }
            // line 757
            echo "          </div>
        </div>
        ";
            // line 760
            echo "      </div>
    </div>
    ";
            // line 763
            echo "  ";
        }
        // line 764
        echo "
  ";
        // line 765
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 766
            echo "  ";
            // line 767
            echo "    <div class=\"to-top\"><i class=\"fas ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null), 767, $this->source), "html", null, true);
            echo "\"></i></div>
  ";
            // line 769
            echo "  ";
        }
        // line 770
        echo "
  ";
        // line 771
        if ((($context["mobile_menu_widget_display"] ?? null) && ($context["mobile_search_enabled"] ?? null))) {
            // line 772
            echo "    ";
            // line 773
            echo "    <div class=\"clearfix mt-mobile-menu-widget-wrapper\">
      <div class=\"mt-mobile-menu-overlay\" style=\"display:none\">
        ";
            // line 775
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu_widget", [], "any", false, false, true, 775)) {
                // line 776
                echo "          <div class=\"mt-mobile-menu-overlay-content region--light-typography container-fluid\">
            <div class=\"row\">
              <div class=\"col-12\">
                ";
                // line 779
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu_widget", [], "any", false, false, true, 779), 779, $this->source), "html", null, true);
                echo "
              </div>
            </div>
          </div>
        ";
            }
            // line 784
            echo "        <button type=\"button\" class=\"mt-dismiss-button mt-button region--light-typography ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["mobile_menu_widget_sticky"] ?? null)) ? ("mt-dismiss-button--sticky") : ("")));
            echo "\">
          <span class=\"sr-only\">";
            // line 785
            echo t("Dismiss mobile overlay area", array());
            echo "</span><i class=\"fas fa-times\"></i>
        </button>
      </div>

      <form method=\"get\" action=\"";
            // line 789
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("search.view_node_search"));
            echo "\">
        <div class=\"clearfix mt-mobile-menu-widget mt-container ";
            // line 790
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["mobile_menu_widget_sticky"] ?? null)) ? ("mt-sticky") : ("")));
            echo "\">
          <div class=\"mt-search-icon\">
            <i class=\"fas fa-search\"></i>
          </div>
          <input type=\"text\" name=\"keys\" class=\"mt-input\" placeholder=\"Search...\">
          <div class=\"mt-clear-icon\">
            <span class=\"sr-only\">";
            // line 796
            echo t("Clear keys input element", array());
            echo "</span><i class=\"fas fa-times-circle\"></i>
          </div>
          <button type=\"submit\" class=\"mt-submit-button mt-button\">
            <span class=\"sr-only\">";
            // line 799
            echo t("Submit search", array());
            echo "</span><i class=\"fas fa-arrow-right\"></i>
          </button>
          <button type=\"button\" class=\"mt-menu-button mt-button\">
            <span class=\"sr-only\">";
            // line 802
            echo t("Open mobile overlay area", array());
            echo "</span><i class=\"fas fa-bars\"></i>
          </button>
        </div>
      </form>
    </div>
  ";
        }
        // line 808
        echo "  ";
        // line 809
        echo "
</div>
";
    }

    // line 177
    public function block_reading_progress_indicator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        echo "        ";
    }

    // line 302
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 303
        echo "    <div ";
        if (($context["main_content_id"] ?? null)) {
            echo "id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_id"] ?? null), 303, $this->source), "html", null, true);
            echo "\"";
        }
        echo " class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_separator"] ?? null), 303, $this->source), "html", null, true);
        echo "\">
      <div class=\"";
        // line 304
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_layout_container"] ?? null), 304, $this->source), "html", null, true);
        echo "\">
        <div class=\"clearfix main-content__container\">
          <div class=\"row\">
            <section class=\"";
        // line 307
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null), 307, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_paddings"] ?? null), 307, $this->source), "html", null, true);
        echo "\">
              ";
        // line 309
        echo "              <div class=\"clearfix main-content__section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
                ";
        // line 310
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 311
            echo "                  data-animate-effect=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null), 311, $this->source), "html", null, true);
            echo "\"
                ";
        }
        // line 312
        echo ">
                ";
        // line 313
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 313)) {
            // line 314
            echo "                  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 314), 314, $this->source), "html", null, true);
            echo "
                ";
        }
        // line 316
        echo "              </div>
              ";
        // line 318
        echo "            </section>
            ";
        // line 319
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 319)) {
            // line 320
            echo "              <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null), 320, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_paddings"] ?? null), 320, $this->source), "html", null, true);
            echo "\">
                ";
            // line 322
            echo "                <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                  ";
            // line 323
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 324
                echo "                    data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null), 324, $this->source), "html", null, true);
                echo "\"
                  ";
            }
            // line 325
            echo ">
                  ";
            // line 326
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 326), 326, $this->source), "html", null, true);
            echo "
                </section>
                ";
            // line 329
            echo "              </aside>
            ";
        }
        // line 331
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 331)) {
            // line 332
            echo "              <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null), 332, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_paddings"] ?? null), 332, $this->source), "html", null, true);
            echo "\">
                ";
            // line 334
            echo "                <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                  ";
            // line 335
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 336
                echo "                    data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null), 336, $this->source), "html", null, true);
                echo "\"
                  ";
            }
            // line 337
            echo ">
                  ";
            // line 338
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 338), 338, $this->source), "html", null, true);
            echo "
                </section>
                ";
            // line 341
            echo "              </aside>
            ";
        }
        // line 343
        echo "          </div>
        </div>
      </div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/minimal_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1841 => 343,  1837 => 341,  1832 => 338,  1829 => 337,  1823 => 336,  1821 => 335,  1814 => 334,  1807 => 332,  1804 => 331,  1800 => 329,  1795 => 326,  1792 => 325,  1786 => 324,  1784 => 323,  1777 => 322,  1770 => 320,  1768 => 319,  1765 => 318,  1762 => 316,  1756 => 314,  1754 => 313,  1751 => 312,  1745 => 311,  1743 => 310,  1736 => 309,  1730 => 307,  1724 => 304,  1713 => 303,  1709 => 302,  1705 => 178,  1701 => 177,  1695 => 809,  1693 => 808,  1684 => 802,  1678 => 799,  1672 => 796,  1663 => 790,  1659 => 789,  1652 => 785,  1647 => 784,  1639 => 779,  1634 => 776,  1632 => 775,  1628 => 773,  1626 => 772,  1624 => 771,  1621 => 770,  1618 => 769,  1613 => 767,  1611 => 766,  1609 => 765,  1606 => 764,  1603 => 763,  1599 => 760,  1595 => 757,  1591 => 755,  1586 => 752,  1583 => 751,  1578 => 749,  1575 => 748,  1571 => 746,  1566 => 743,  1563 => 742,  1558 => 740,  1556 => 739,  1552 => 737,  1548 => 735,  1532 => 734,  1530 => 733,  1528 => 732,  1525 => 731,  1522 => 730,  1518 => 727,  1514 => 724,  1507 => 720,  1501 => 718,  1498 => 717,  1491 => 713,  1485 => 711,  1482 => 710,  1475 => 706,  1469 => 704,  1467 => 703,  1463 => 701,  1459 => 699,  1443 => 698,  1441 => 697,  1439 => 696,  1436 => 695,  1433 => 694,  1429 => 691,  1421 => 685,  1415 => 681,  1411 => 679,  1395 => 678,  1393 => 677,  1391 => 676,  1388 => 675,  1385 => 674,  1379 => 669,  1375 => 667,  1370 => 664,  1367 => 663,  1361 => 662,  1359 => 661,  1354 => 660,  1349 => 658,  1346 => 657,  1342 => 655,  1337 => 652,  1334 => 651,  1328 => 650,  1326 => 649,  1321 => 648,  1316 => 646,  1314 => 645,  1307 => 644,  1303 => 642,  1298 => 639,  1295 => 638,  1289 => 637,  1287 => 636,  1282 => 635,  1277 => 633,  1275 => 632,  1270 => 631,  1266 => 629,  1261 => 626,  1258 => 625,  1252 => 624,  1250 => 623,  1245 => 622,  1240 => 620,  1237 => 619,  1233 => 617,  1228 => 614,  1225 => 613,  1219 => 612,  1217 => 611,  1212 => 610,  1207 => 608,  1205 => 607,  1199 => 604,  1183 => 603,  1181 => 602,  1179 => 601,  1176 => 600,  1173 => 599,  1169 => 596,  1165 => 593,  1161 => 591,  1156 => 588,  1153 => 587,  1148 => 585,  1145 => 584,  1141 => 582,  1136 => 579,  1133 => 578,  1128 => 576,  1126 => 575,  1122 => 573,  1116 => 572,  1114 => 571,  1109 => 570,  1105 => 568,  1088 => 567,  1086 => 566,  1084 => 565,  1081 => 564,  1077 => 562,  1072 => 558,  1066 => 553,  1061 => 550,  1058 => 549,  1052 => 544,  1048 => 542,  1041 => 541,  1030 => 533,  1026 => 532,  1019 => 528,  1016 => 527,  1011 => 525,  1009 => 524,  1006 => 523,  1003 => 522,  999 => 519,  991 => 513,  985 => 509,  979 => 508,  977 => 507,  972 => 506,  968 => 504,  953 => 503,  951 => 502,  949 => 501,  946 => 500,  943 => 499,  939 => 496,  931 => 490,  925 => 486,  919 => 485,  917 => 484,  912 => 483,  908 => 481,  893 => 480,  891 => 479,  889 => 478,  886 => 477,  883 => 476,  879 => 473,  871 => 467,  865 => 463,  859 => 462,  857 => 461,  852 => 460,  848 => 458,  833 => 457,  831 => 456,  829 => 455,  826 => 454,  823 => 453,  819 => 450,  811 => 444,  805 => 440,  799 => 439,  797 => 438,  792 => 437,  788 => 435,  773 => 434,  771 => 433,  769 => 432,  766 => 431,  763 => 430,  759 => 427,  751 => 421,  745 => 417,  739 => 416,  737 => 415,  732 => 414,  728 => 412,  713 => 411,  711 => 410,  709 => 409,  706 => 408,  703 => 407,  699 => 404,  691 => 398,  685 => 394,  679 => 393,  677 => 392,  672 => 391,  668 => 389,  653 => 388,  651 => 387,  649 => 386,  646 => 385,  643 => 384,  639 => 381,  635 => 378,  631 => 376,  626 => 373,  623 => 372,  618 => 370,  615 => 369,  611 => 367,  606 => 364,  603 => 363,  598 => 361,  596 => 360,  592 => 358,  586 => 357,  584 => 356,  579 => 355,  575 => 353,  560 => 352,  558 => 351,  556 => 350,  553 => 349,  551 => 348,  548 => 302,  545 => 300,  542 => 299,  538 => 296,  530 => 290,  524 => 286,  518 => 285,  516 => 284,  511 => 283,  507 => 281,  492 => 280,  490 => 279,  488 => 278,  485 => 277,  482 => 276,  478 => 273,  470 => 267,  464 => 263,  458 => 262,  456 => 261,  451 => 260,  447 => 258,  434 => 257,  432 => 256,  430 => 255,  427 => 254,  418 => 248,  412 => 244,  410 => 243,  407 => 242,  404 => 241,  400 => 238,  392 => 232,  386 => 228,  382 => 226,  369 => 225,  367 => 224,  365 => 223,  362 => 222,  359 => 221,  355 => 218,  352 => 217,  348 => 214,  344 => 211,  340 => 209,  335 => 206,  332 => 205,  327 => 203,  324 => 202,  320 => 200,  315 => 197,  310 => 196,  305 => 194,  302 => 193,  298 => 191,  293 => 188,  290 => 187,  285 => 185,  283 => 184,  279 => 182,  275 => 180,  264 => 179,  261 => 177,  259 => 176,  257 => 175,  254 => 174,  251 => 173,  247 => 170,  243 => 167,  239 => 165,  234 => 162,  231 => 161,  226 => 159,  223 => 158,  219 => 156,  214 => 153,  211 => 152,  206 => 150,  204 => 149,  200 => 147,  194 => 146,  192 => 145,  187 => 144,  183 => 142,  176 => 141,  174 => 140,  172 => 139,  169 => 138,  166 => 137,  162 => 134,  158 => 131,  154 => 129,  149 => 126,  146 => 125,  141 => 123,  138 => 122,  134 => 120,  129 => 117,  126 => 116,  121 => 114,  119 => 113,  115 => 111,  109 => 110,  107 => 109,  102 => 108,  98 => 106,  91 => 105,  89 => 104,  87 => 103,  83 => 101,  81 => 100,  79 => 99,  75 => 97,  72 => 95,  68 => 92,  65 => 90,  62 => 88,  56 => 84,  52 => 82,  45 => 80,  43 => 79,  41 => 78,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/minimal_lite/templates/page.html.twig", "C:\\xampp\\htdocs\\DrupalProjectHouse\\themes\\minimal_lite\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 78, "block" => 177, "trans" => 785);
        static $filters = array("escape" => 80);
        static $functions = array("attach_library" => 525, "url" => 789);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'trans'],
                ['escape'],
                ['attach_library', 'url']
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
