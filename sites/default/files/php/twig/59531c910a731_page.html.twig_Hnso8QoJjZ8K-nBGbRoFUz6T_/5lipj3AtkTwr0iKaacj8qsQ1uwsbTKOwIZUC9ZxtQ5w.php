<?php

/* themes/nexus/templates/layout/page.html.twig */
class __TwigTemplate_98e773cd718d071ceff8caabc87fd5b635e111ee1d2ac73a0cc3aea6bbdb1f48 extends Twig_Template
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
        $tags = array("if" => 55, "set" => 159);
        $filters = array("striptags" => 81, "t" => 85);
        $functions = array("attach_library" => 73);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
                array('striptags', 't'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 51
        echo "
<div id=\"page\">
  <header id=\"masthead\" class=\"site-header container\" role=\"banner\">
    <div class=\"row\">
      ";
        // line 55
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 56
            echo "        <div id=\"logo\" class=\"site-branding col-sm-6\">
          ";
            // line 57
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 60
        echo "      <div class=\"col-sm-6 mainmenu\">
        <div class=\"mobilenavi\"></div>
        <nav id=\"navigation\" role=\"navigation\">
          <div id=\"main-menu\">
            ";
        // line 64
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_navigation", array())) {
            // line 65
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_navigation", array()), "html", null, true));
            echo "
            ";
        }
        // line 67
        echo "          </div>
        </nav>
      </div>
    </div>
  </header>
  ";
        // line 72
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 73
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("nexus/slider-js"), "html", null, true));
            echo "
    ";
            // line 74
            if ((isset($context["slideshow_display"]) ? $context["slideshow_display"] : null)) {
                // line 75
                echo "      <div id=\"slidebox\" class=\"flexslider\">
        <ul class=\"slides\">
          <li>
            <img src=\"";
                // line 78
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . "themes/nexus/assets/images/slide-image-1.jpg"), "html", null, true));
                echo "\"/>
            ";
                // line 79
                if (((isset($context["slide1_head"]) ? $context["slide1_head"] : null) || (isset($context["slide1_desc"]) ? $context["slide1_desc"] : null))) {
                    // line 80
                    echo "              ";
                    if ((isset($context["slide1_head"]) ? $context["slide1_head"] : null)) {
                        // line 81
                        echo "                ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide1_head"]) ? $context["slide1_head"] : null)), "html", null, true));
                        echo "
              ";
                    }
                    // line 83
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 84
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide1_head"]) ? $context["slide1_head"] : null)), "html", null, true));
                    echo "</h2>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide1_desc"]) ? $context["slide1_desc"] : null)), "html", null, true));
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 85
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide1_url"]) ? $context["slide1_url"] : null)), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Read More")));
                    echo "</a>
              </div>
            ";
                }
                // line 88
                echo "          </li>
          <li>
            <img src=\"";
                // line 90
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . "themes/nexus/assets/images/slide-image-2.jpg"), "html", null, true));
                echo "\"/>
            ";
                // line 91
                if (((isset($context["slide2_head"]) ? $context["slide2_head"] : null) || (isset($context["slide2_desc"]) ? $context["slide2_desc"] : null))) {
                    // line 92
                    echo "              ";
                    if ((isset($context["slide2_head"]) ? $context["slide2_head"] : null)) {
                        // line 93
                        echo "                ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide2_head"]) ? $context["slide2_head"] : null)), "html", null, true));
                        echo "
              ";
                    }
                    // line 95
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 96
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide2_head"]) ? $context["slide2_head"] : null)), "html", null, true));
                    echo "</h2>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide2_desc"]) ? $context["slide2_desc"] : null)), "html", null, true));
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 97
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide2_url"]) ? $context["slide2_url"] : null)), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Read More")));
                    echo "</a>
              </div>
            ";
                }
                // line 100
                echo "          </li>
          <li>
            <img src=\"";
                // line 102
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . "themes/nexus/assets/images/slide-image-3.jpg"), "html", null, true));
                echo "\"/>
            ";
                // line 103
                if (((isset($context["slide3_head"]) ? $context["slide3_head"] : null) || (isset($context["slide3_desc"]) ? $context["slide3_desc"] : null))) {
                    // line 104
                    echo "              ";
                    if ((isset($context["slide3_head"]) ? $context["slide3_head"] : null)) {
                        // line 105
                        echo "                ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide3_head"]) ? $context["slide3_head"] : null)), "html", null, true));
                        echo "
              ";
                    }
                    // line 107
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 108
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide3_head"]) ? $context["slide3_head"] : null)), "html", null, true));
                    echo "</h2>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide3_desc"]) ? $context["slide3_desc"] : null)), "html", null, true));
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 109
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide3_url"]) ? $context["slide3_url"] : null)), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Read More")));
                    echo "</a>
              </div>
            ";
                }
                // line 112
                echo "          </li>
        </ul><!-- /slides -->
        <div class=\"doverlay\"></div>
      </div>
    ";
            }
            // line 117
            echo "  ";
        }
        // line 118
        echo "
  ";
        // line 119
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_third", array()))) {
            // line 120
            echo "    <div id=\"preface-area\">
      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 123
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array())) {
                // line 124
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("preface-block col-sm-" . (isset($context["preface_col"]) ? $context["preface_col"] : null)), "html", null, true));
                echo "\">
              ";
                // line 125
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 128
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_second", array())) {
                // line 129
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("preface-block col-sm-" . (isset($context["preface_col"]) ? $context["preface_col"] : null)), "html", null, true));
                echo "\">
              ";
                // line 130
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 133
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_third", array())) {
                // line 134
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("preface-block col-sm-" . (isset($context["preface_col"]) ? $context["preface_col"] : null)), "html", null, true));
                echo "\">
              ";
                // line 135
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 138
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 142
        echo "
  ";
        // line 143
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 144
            echo "    <div id=\"highlighted-block\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            ";
            // line 148
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 154
        echo "
  <div id=\"main-content\">
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 158
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 159
            echo "          ";
            $context["primary_col"] = 8;
            // line 160
            echo "        ";
        } else {
            // line 161
            echo "          ";
            $context["primary_col"] = 12;
            // line 162
            echo "        ";
        }
        // line 163
        echo "        <div id=\"primary\" class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("content-area col-sm-" . (isset($context["primary_col"]) ? $context["primary_col"] : null)), "html", null, true));
        echo "\">
          <section id=\"content\" role=\"main\" class=\"clearfix\">
            ";
        // line 165
        if ((isset($context["show_breadcrumbs"]) ? $context["show_breadcrumbs"] : null)) {
            // line 166
            echo "              ";
            if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
                // line 167
                echo "                <div id=\"breadcrumbs\">
                  ";
                // line 168
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
                echo "
                </div>
              ";
            }
            // line 171
            echo "            ";
        }
        // line 172
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
        echo "
            ";
        // line 173
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 174
            echo "              <div id=\"content_top\">
                ";
            // line 175
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
              </div>
            ";
        }
        // line 178
        echo "            <div id=\"content-wrap\">
              ";
        // line 179
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
              ";
        // line 180
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
            </div>
          </section>
        </div>
        ";
        // line 184
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 185
            echo "          <aside id=\"sidebar\" class=\"col-sm-4\" role=\"complementary\">
           ";
            // line 186
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 189
        echo "      </div>
    </div>
  </div>

  ";
        // line 193
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 194
            echo "    <div id=\"footer-block\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            ";
            // line 198
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 204
        echo "
  ";
        // line 205
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 206
            echo "    <div id=\"bottom\">
      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 209
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 210
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("footer-block col-sm-" . (isset($context["footer_col"]) ? $context["footer_col"] : null)), "html", null, true));
                echo "\">
              ";
                // line 211
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 214
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 215
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("footer-block col-sm-" . (isset($context["footer_col"]) ? $context["footer_col"] : null)), "html", null, true));
                echo "\">
              ";
                // line 216
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 219
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 220
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("footer-block col-sm-" . (isset($context["footer_col"]) ? $context["footer_col"] : null)), "html", null, true));
                echo "\">
              ";
                // line 221
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 224
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array())) {
                // line 225
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("footer-block col-sm-" . (isset($context["footer_col"]) ? $context["footer_col"] : null)), "html", null, true));
                echo "\">
              ";
                // line 226
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 229
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 233
        echo "
  <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"fcred col-sm-12\">
           Copyright 2017 (add logic for auto year)
        </div>
      </div>
    </div>
  </footer>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/nexus/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 233,  458 => 229,  452 => 226,  447 => 225,  444 => 224,  438 => 221,  433 => 220,  430 => 219,  424 => 216,  419 => 215,  416 => 214,  410 => 211,  405 => 210,  403 => 209,  398 => 206,  396 => 205,  393 => 204,  384 => 198,  378 => 194,  376 => 193,  370 => 189,  364 => 186,  361 => 185,  359 => 184,  352 => 180,  348 => 179,  345 => 178,  339 => 175,  336 => 174,  334 => 173,  329 => 172,  326 => 171,  320 => 168,  317 => 167,  314 => 166,  312 => 165,  306 => 163,  303 => 162,  300 => 161,  297 => 160,  294 => 159,  292 => 158,  286 => 154,  277 => 148,  271 => 144,  269 => 143,  266 => 142,  260 => 138,  254 => 135,  249 => 134,  246 => 133,  240 => 130,  235 => 129,  232 => 128,  226 => 125,  221 => 124,  219 => 123,  214 => 120,  212 => 119,  209 => 118,  206 => 117,  199 => 112,  191 => 109,  185 => 108,  182 => 107,  176 => 105,  173 => 104,  171 => 103,  167 => 102,  163 => 100,  155 => 97,  149 => 96,  146 => 95,  140 => 93,  137 => 92,  135 => 91,  131 => 90,  127 => 88,  119 => 85,  113 => 84,  110 => 83,  104 => 81,  101 => 80,  99 => 79,  95 => 78,  90 => 75,  88 => 74,  83 => 73,  81 => 72,  74 => 67,  68 => 65,  66 => 64,  60 => 60,  54 => 57,  51 => 56,  49 => 55,  43 => 51,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Bartik's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the Header region.
 * - page.main_navigation: Items for the Main Navigation region.
 * - page.preface_first: Items for the Preface First region.
 * - page.preface_second: Items for the Preface Second region.
 * - page.preface_third: Items for the Preface Third region.
 * - page.highlighted: Items for the Highlighted region.
 * - sidebar_first: Items for the First Sidebar region.
 * - content_top: Items for the Content Top region.
 * - help: Items for the Help region.
 * - content: Items for the Content region.
 * - footer: Items for the Footer region.
 * - footer_first: Items for the First Bottom region.
 * - footer_second: Items for the Second Bottom region.
 * - footer_third: Items for the Third Bottom region.
 * - footer_fourth: Items for the Fourth Bottom region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

<div id=\"page\">
  <header id=\"masthead\" class=\"site-header container\" role=\"banner\">
    <div class=\"row\">
      {% if page.header %}
        <div id=\"logo\" class=\"site-branding col-sm-6\">
          {{ page.header }}
        </div>
      {% endif %}
      <div class=\"col-sm-6 mainmenu\">
        <div class=\"mobilenavi\"></div>
        <nav id=\"navigation\" role=\"navigation\">
          <div id=\"main-menu\">
            {% if page.main_navigation %}
                {{ page.main_navigation }}
            {% endif %}
          </div>
        </nav>
      </div>
    </div>
  </header>
  {% if is_front %}
    {{ attach_library('nexus/slider-js') }}
    {% if slideshow_display %}
      <div id=\"slidebox\" class=\"flexslider\">
        <ul class=\"slides\">
          <li>
            <img src=\"{{ base_path ~ 'themes/nexus/assets/images/slide-image-1.jpg' }}\"/>
            {% if slide1_head or slide1_desc %}
              {% if slide1_head %}
                {{ slide1_head|striptags }}
              {% endif %}
              <div class=\"flex-caption\">
                <h2>{{ slide1_head|striptags }}</h2>{{ slide1_desc|striptags }}
                <a class=\"frmore\" href=\"{{ slide1_url|striptags }}\">{{ 'Read More'|t }}</a>
              </div>
            {% endif %}
          </li>
          <li>
            <img src=\"{{ base_path ~ 'themes/nexus/assets/images/slide-image-2.jpg' }}\"/>
            {% if slide2_head or slide2_desc %}
              {% if slide2_head %}
                {{ slide2_head|striptags }}
              {% endif %}
              <div class=\"flex-caption\">
                <h2>{{ slide2_head|striptags }}</h2>{{ slide2_desc|striptags }}
                <a class=\"frmore\" href=\"{{ slide2_url|striptags }}\">{{ 'Read More'|t }}</a>
              </div>
            {% endif %}
          </li>
          <li>
            <img src=\"{{ base_path ~ 'themes/nexus/assets/images/slide-image-3.jpg' }}\"/>
            {% if slide3_head or slide3_desc %}
              {% if slide3_head %}
                {{ slide3_head|striptags }}
              {% endif %}
              <div class=\"flex-caption\">
                <h2>{{ slide3_head|striptags }}</h2>{{ slide3_desc|striptags }}
                <a class=\"frmore\" href=\"{{ slide3_url|striptags }}\">{{ 'Read More'|t }}</a>
              </div>
            {% endif %}
          </li>
        </ul><!-- /slides -->
        <div class=\"doverlay\"></div>
      </div>
    {% endif %}
  {% endif %}

  {% if page.preface_first or page.preface_second or page.preface_third %}
    <div id=\"preface-area\">
      <div class=\"container\">
        <div class=\"row\">
          {% if page.preface_first %}
            <div class=\"{{ 'preface-block col-sm-' ~ preface_col }}\">
              {{ page.preface_first }}
            </div>
          {% endif %}
          {% if page.preface_second %}
            <div class=\"{{ 'preface-block col-sm-' ~ preface_col }}\">
              {{ page.preface_second }}
            </div>
          {% endif %}
          {% if page.preface_third %}
            <div class=\"{{ 'preface-block col-sm-' ~ preface_col }}\">
              {{ page.preface_third }}
            </div>
          {% endif %}
        </div>
      </div>
    </div>
  {% endif %}

  {% if page.highlighted %}
    <div id=\"highlighted-block\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            {{ page.highlighted }}
          </div>
        </div>
      </div>
    </div>
  {% endif %}

  <div id=\"main-content\">
    <div class=\"container\">
      <div class=\"row\">
        {% if page.sidebar_first %}
          {% set primary_col = 8 %}
        {% else %}
          {% set primary_col = 12 %}
        {% endif %}
        <div id=\"primary\" class=\"{{ 'content-area col-sm-' ~ primary_col }}\">
          <section id=\"content\" role=\"main\" class=\"clearfix\">
            {% if show_breadcrumbs %}
              {% if breadcrumb %}
                <div id=\"breadcrumbs\">
                  {{ breadcrumb }}
                </div>
              {% endif %}
            {% endif %}
            {{ messages }}
            {% if page.content_top %}
              <div id=\"content_top\">
                {{ page.content_top }}
              </div>
            {% endif %}
            <div id=\"content-wrap\">
              {{ page.help }}
              {{ page.content }}
            </div>
          </section>
        </div>
        {% if page.sidebar_first %}
          <aside id=\"sidebar\" class=\"col-sm-4\" role=\"complementary\">
           {{ page.sidebar_first }}
          </aside>
        {% endif %}
      </div>
    </div>
  </div>

  {% if page.footer %}
    <div id=\"footer-block\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            {{ page.footer }}
          </div>
        </div>
      </div>
    </div>
  {% endif %}

  {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
    <div id=\"bottom\">
      <div class=\"container\">
        <div class=\"row\">
          {% if page.footer_first %}
            <div class=\"{{ 'footer-block col-sm-' ~ footer_col }}\">
              {{ page.footer_first }}
            </div>
          {% endif %}
          {% if page.footer_second %}
            <div class=\"{{ 'footer-block col-sm-' ~ footer_col }}\">
              {{ page.footer_second }}
            </div>
          {% endif %}
          {% if page.footer_third %}
            <div class=\"{{ 'footer-block col-sm-' ~ footer_col }}\">
              {{ page.footer_third }}
            </div>
          {% endif %}
          {% if page.footer_fourth %}
            <div class=\"{{ 'footer-block col-sm-' ~ footer_col }}\">
              {{ page.footer_fourth }}
            </div>
          {% endif %}
        </div>
      </div>
    </div>
  {% endif %}

  <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"fcred col-sm-12\">
           Copyright 2017 (add logic for auto year)
        </div>
      </div>
    </div>
  </footer>
</div>
";
    }
}
