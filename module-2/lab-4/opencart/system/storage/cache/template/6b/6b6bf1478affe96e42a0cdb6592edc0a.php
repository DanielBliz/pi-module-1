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

/* admin/view/template/setting/setting.twig */
class __TwigTemplate_fa5b3e0af4ed4f14eabdcba84869641a extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-setting\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 19
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-setting\" action=\"";
        // line 21
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 23
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-store\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 25
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                <label for=\"input-meta-title\" class=\"col-sm-2 col-form-label\">";
        // line 34
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 36
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\"/>
                  <div id=\"error-meta-title\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-meta-description\" class=\"col-sm-2 col-form-label\">";
        // line 41
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 43
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-meta-keyword\" class=\"col-sm-2 col-form-label\">";
        // line 47
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 49
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">";
        // line 53
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 56
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_logo\" value=\"";
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 58
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 59
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">";
        // line 65
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-select\">
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 69
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 69);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 69) == ($context["config_theme"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 69);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme-thumb\" class=\"img-thumbnail\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">";
        // line 77
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-select\">
                    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 81
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 81);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 81) == ($context["config_layout_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 81);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-store\" class=\"tab-pane\">
              <div class=\"row mb-3 required\">
                <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 89
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 91
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  <div id=\"error-name\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">";
        // line 96
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 98
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\"/>
                  <div id=\"error-owner\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-address\" class=\"col-sm-2 col-form-label\">";
        // line 103
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" rows=\"5\" placeholder=\"";
        // line 105
        echo ($context["entry_address"] ?? null);
        echo "\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">";
        // line 109
        echo ($context["entry_geocode"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 111
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 112
        echo ($context["help_geocode"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 116
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 118
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                  <div id=\"error-email\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 123
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 125
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                  <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 130
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 133
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_image\" value=\"";
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 135
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 136
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-open\" class=\"col-sm-2 col-form-label\">";
        // line 142
        echo ($context["entry_open"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 144
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                  <div class=\"form-text\">";
        // line 145
        echo ($context["help_open"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 149
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 151
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                  <div class=\"form-text\">";
        // line 152
        echo ($context["help_comment"] ?? null);
        echo "</div>
                </div>
              </div>
              ";
        // line 155
        if (($context["locations"] ?? null)) {
            // line 156
            echo "                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
            // line 157
            echo ($context["entry_location"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 161
                echo "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 162);
                echo "\" id=\"input-location-";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 162);
                echo "\" class=\"form-check-input\"";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 162), ($context["config_location"] ?? null))) {
                    echo " checked";
                }
                echo "/> <label for=\"input-location-";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 162);
                echo "\" class=\"form-check-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 162);
                echo "</label>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                    </div>
                    <div class=\"form-text\">";
            // line 166
            echo ($context["help_location"] ?? null);
            echo "</div>
                  </div>
                </div>
              ";
        }
        // line 170
        echo "            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 173
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-select\">
                    ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 177
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 177);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 177) == ($context["config_country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 177);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">";
        // line 183
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-select\"></select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">";
        // line 189
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-select\">
                    ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 193
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 193);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 193) == ($context["config_timezone"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 193);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-language\" class=\"col-sm-2 col-form-label\">";
        // line 199
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-select\">
                    ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 203
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 203);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 203) == ($context["config_language"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 203);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-language-admin\" class=\"col-sm-2 col-form-label\">";
        // line 209
        echo ($context["entry_language_admin"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language_admin\" id=\"input-language-admin\" class=\"form-select\">
                    ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 213
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 213);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 213) == ($context["config_language_admin"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 213);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">";
        // line 219
        echo ($context["entry_currency"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-select\">
                    ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 223
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 223);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 223) == ($context["config_currency"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 223);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                  </select>
                  <div class=\"form-text\">";
        // line 226
        echo ($context["help_currency"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">";
        // line 230
        echo ($context["entry_currency_engine"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-select\">
                    ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 234
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 234);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 234) == ($context["config_currency_engine"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 234);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-currency-auto\" class=\"col-sm-2 col-form-label\">";
        // line 240
        echo ($context["entry_currency_auto"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"config_currency_auto\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"config_currency_auto\" value=\"1\" id=\"input-currency-auto\" class=\"form-check-input\"";
        // line 244
        if (($context["config_currency_auto"] ?? null)) {
            echo " checked";
        }
        echo "/>
                  </div>
                  <div class=\"form-text\">";
        // line 246
        echo ($context["help_currency_auto"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 250
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-select\">
                    ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 254
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 254);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 254) == ($context["config_length_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 254);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 260
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                    ";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 264
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 264);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 264) == ($context["config_weight_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 264);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "                  </select>
                </div>
              </div>
            </div>

            <div id=\"tab-option\" class=\"tab-pane\">

              <div class=\"accordion\" id=\"accordion-option\">

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-product\">";
        // line 276
        echo ($context["text_product"] ?? null);
        echo "</button></h2>

                  <div id=\"collapse-product\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mt-2 mb-3 required\">
                        <label for=\"input-product-description-length\" class=\"col-sm-2 col-form-label\">";
        // line 282
        echo ($context["entry_product_description_length"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_product_description_length\" value=\"";
        // line 284
        echo ($context["config_product_description_length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_description_length"] ?? null);
        echo "\" id=\"input-product-description-length\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 285
        echo ($context["help_product_description_length"] ?? null);
        echo "</div>
                          <div id=\"error-product-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-pagination\" class=\"col-sm-2 col-form-label\">";
        // line 290
        echo ($context["entry_pagination"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination\" value=\"";
        // line 292
        echo ($context["config_pagination"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_pagination"] ?? null);
        echo "\" id=\"input-pagination\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 293
        echo ($context["help_pagination"] ?? null);
        echo "</div>
                          <div id=\"error-pagination\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 298
        echo ($context["entry_product_count"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_product_count\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_product_count\" value=\"1\" id=\"input-product-count\" class=\"form-check-input\"";
        // line 302
        if (($context["config_product_count"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 304
        echo ($context["help_product_count"] ?? null);
        echo "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3 required\">
                        <label for=\"input-pagination-admin\" class=\"col-sm-2 col-form-label\">";
        // line 309
        echo ($context["entry_pagination_admin"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination_admin\" value=\"";
        // line 311
        echo ($context["config_pagination_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_pagination_admin"] ?? null);
        echo "\" id=\"input-pagination-admin\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 312
        echo ($context["help_pagination"] ?? null);
        echo "</div>
                          <div id=\"error-pagination-admin\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>

                      <div class=\"row mb-3 required\">
                        <label for=\"input-product-report\" class=\"col-sm-2 col-form-label\">";
        // line 318
        echo ($context["entry_product_report"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_product_report_status\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_product_report_status\" value=\"1\" id=\"input-product-report\" class=\"form-check-input\"";
        // line 322
        if (($context["config_product_report_status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 324
        echo ($context["help_product_report"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-review\">";
        // line 332
        echo ($context["text_review"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-review\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 336
        echo ($context["entry_review_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_review_status\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_review_status\" value=\"1\" id=\"input-review-status\" class=\"form-check-input\"";
        // line 340
        if (($context["config_review_status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 342
        echo ($context["help_review"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 346
        echo ($context["entry_review_purchased"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_review_purchased\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_review_purchased\" value=\"1\" id=\"input-review-purchased\" class=\"form-check-input\"";
        // line 350
        if (($context["config_review_purchased"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 352
        echo ($context["help_review_purchased"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 356
        echo ($context["entry_review_guest"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_review_guest\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_review_guest\" value=\"1\" id=\"input-review-guest\" class=\"form-check-input\"";
        // line 360
        if (($context["config_review_guest"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 362
        echo ($context["help_review_guest"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-voucher\">";
        // line 369
        echo ($context["text_voucher"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-voucher\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3 required\">
                        <label for=\"input-voucher-min\" class=\"col-sm-2 col-form-label\">";
        // line 373
        echo ($context["entry_voucher_min"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 375
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 376
        echo ($context["help_voucher_min"] ?? null);
        echo "</div>
                          <div id=\"error-voucher-min\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-voucher-max\" class=\"col-sm-2 col-form-label\">";
        // line 381
        echo ($context["entry_voucher_max"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 383
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 384
        echo ($context["help_voucher_max"] ?? null);
        echo "</div>
                          <div id=\"error-voucher-max\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-legal\">";
        // line 393
        echo ($context["text_legal"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-legal\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">";
        // line 397
        echo ($context["entry_cookie"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-select\">
                            <option value=\"0\">";
        // line 400
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 401
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 402
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 402);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 402) == ($context["config_cookie_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 402);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 404
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 405
        echo ($context["help_cookie"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">";
        // line 409
        echo ($context["entry_gdpr"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-select\">
                            <option value=\"0\">";
        // line 412
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 413
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 414
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 414);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 414) == ($context["config_gdpr_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 414);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 416
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 417
        echo ($context["help_gdpr"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">";
        // line 421
        echo ($context["entry_gdpr_limit"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_gdpr_limit\" value=\"";
        // line 423
        echo ($context["config_gdpr_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_gdpr_limit"] ?? null);
        echo "\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 424
        echo ($context["help_gdpr_limit"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-tax\">";
        // line 432
        echo ($context["text_tax"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-tax\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 436
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_tax\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_tax\" value=\"1\" id=\"input-tax\" class=\"form-check-input\"";
        // line 440
        if (($context["config_tax"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">";
        // line 445
        echo ($context["entry_tax_default"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-select\">
                            <option value=\"\">";
        // line 448
        echo ($context["text_none"] ?? null);
        echo "</option>
                            <option value=\"shipping\"";
        // line 449
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_shipping"] ?? null);
        echo "</option>
                            <option value=\"payment\"";
        // line 450
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_payment"] ?? null);
        echo "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 452
        echo ($context["help_tax_default"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">";
        // line 456
        echo ($context["entry_tax_customer"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-select\">
                            <option value=\"\">";
        // line 459
        echo ($context["text_none"] ?? null);
        echo "</option>
                            <option value=\"shipping\"";
        // line 460
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_shipping"] ?? null);
        echo "</option>
                            <option value=\"payment\"";
        // line 461
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_payment"] ?? null);
        echo "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 463
        echo ($context["help_tax_customer"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-account\">";
        // line 471
        echo ($context["text_account"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-account\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 475
        echo ($context["entry_customer_online"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_online\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_customer_online\" value=\"1\" id=\"input-customer-online\" class=\"form-check-input\"";
        // line 479
        if (($context["config_customer_online"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 481
        echo ($context["help_customer_online"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-online-expire\" class=\"col-sm-2 col-form-label\">";
        // line 485
        echo ($context["entry_customer_online_expire"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"config_customer_online_expire\" value=\"";
        // line 488
        echo ($context["config_customer_online_expire"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer_online_expire"] ?? null);
        echo "\" id=\"input-customer-online-expire\" class=\"form-control\"/> <span class=\"input-group-text\" id=\"basic-addon2\">";
        echo ($context["text_hour"] ?? null);
        echo "</span>
                          </div>
                          <div class=\"form-text\">";
        // line 490
        echo ($context["help_customer_online_expire"] ?? null);
        echo "</div>
                          <div id=\"error-customer-online-expire\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 495
        echo ($context["entry_customer_activity"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_activity\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_customer_activity\" value=\"1\" id=\"input-customer-activity\" class=\"form-check-input\"";
        // line 499
        if (($context["config_customer_activity"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 501
        echo ($context["help_customer_activity"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 505
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_search\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_customer_search\" value=\"1\" id=\"input-customer-search\" class=\"form-check-input\"";
        // line 509
        if (($context["config_customer_search"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 514
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                            ";
        // line 517
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 518
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 518);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 518) == ($context["config_customer_group_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 518);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 520
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 521
        echo ($context["help_customer_group"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 525
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-customer-group-display\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 528
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 529
            echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
            // line 530
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 530);
            echo "\" id=\"input-customer-group-";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 530);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 530), ($context["config_customer_group_display"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-customer-group-";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 530);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 530);
            echo "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 533
        echo "                          </div>
                          <div class=\"form-text\">";
        // line 534
        echo ($context["help_customer_group_display"] ?? null);
        echo "</div>
                          <div id=\"error-customer-group-display\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 539
        echo ($context["entry_customer_price"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_price\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_customer_price\" value=\"1\" id=\"input-customer-price\" class=\"form-check-input\"";
        // line 543
        if (($context["config_customer_price"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 545
        echo ($context["help_customer_price"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 549
        echo ($context["entry_telephone_display"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_telephone_display\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_telephone_display\" value=\"1\" id=\"input-telephone-display\" class=\"form-check-input\"";
        // line 553
        if (($context["config_telephone_display"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 558
        echo ($context["entry_telephone_required"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_telephone_required\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_telephone_required\" value=\"1\" id=\"input-telephone-required\" class=\"form-check-input\"";
        // line 562
        if (($context["config_telephone_required"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">";
        // line 567
        echo ($context["entry_login_attempts"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 569
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 570
        echo ($context["help_login_attempts"] ?? null);
        echo "</div>
                          <div id=\"error-login-attempts\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-account\" class=\"col-sm-2 col-form-label\">";
        // line 575
        echo ($context["entry_account"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_account_id\" id=\"input-account\" class=\"form-select\">
                            <option value=\"0\">";
        // line 578
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 579
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 580
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 580);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 580) == ($context["config_account_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 580);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 582
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 583
        echo ($context["help_account"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-checkout\">";
        // line 591
        echo ($context["text_checkout"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-checkout\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">";
        // line 595
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 597
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 598
        echo ($context["help_invoice_prefix"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 602
        echo ($context["entry_cart_weight"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_cart_weight\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_cart_weight\" value=\"1\" id=\"input-cart-weight\" class=\"form-check-input\"";
        // line 606
        if (($context["config_cart_weight"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 608
        echo ($context["help_cart_weight"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 612
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_checkout_guest\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_checkout_guest\" value=\"1\" id=\"input-checkout-guest\" class=\"form-check-input\"";
        // line 616
        if (($context["config_checkout_guest"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 618
        echo ($context["help_checkout_guest"] ?? null);
        echo "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 623
        echo ($context["entry_checkout_payment_address"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_checkout_payment_address\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_checkout_payment_address\" value=\"1\" id=\"input-checkout-payment-address\" class=\"form-check-input\"";
        // line 627
        if (($context["config_checkout_payment_address"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 629
        echo ($context["help_checkout_payment_address"] ?? null);
        echo "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 634
        echo ($context["entry_checkout_shipping_address"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_checkout_shipping_address\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_checkout_shipping_address\" value=\"1\" id=\"input-checkout-shipping-address\" class=\"form-check-input\"";
        // line 638
        if (($context["config_checkout_shipping_address"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 640
        echo ($context["help_checkout_shipping_address"] ?? null);
        echo "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">";
        // line 645
        echo ($context["entry_checkout"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-select\">
                            <option value=\"0\">";
        // line 648
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 649
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 650
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 650);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 650) == ($context["config_checkout_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 650);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 652
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 653
        echo ($context["help_checkout"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 657
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                            ";
        // line 660
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 661
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 661);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 661) == ($context["config_order_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 661);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 663
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 664
        echo ($context["help_order_status"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 668
        echo ($context["entry_processing_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-processing-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 671
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 672
            echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
            // line 673
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 673);
            echo "\" id=\"input-processing-status-";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 673);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 673), ($context["config_processing_status"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-processing-status-";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 673);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 673);
            echo "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 676
        echo "                          </div>
                          <div class=\"form-text\">";
        // line 677
        echo ($context["help_processing_status"] ?? null);
        echo "</div>
                          <div id=\"error-processing-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 682
        echo ($context["entry_complete_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-complete-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 685
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 686
            echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
            // line 687
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 687);
            echo "\" id=\"input-complete-status-";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 687);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 687), ($context["config_complete_status"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-complete-status-";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 687);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 687);
            echo "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 690
        echo "                          </div>
                          <div class=\"form-text\">";
        // line 691
        echo ($context["help_complete_status"] ?? null);
        echo "</div>
                          <div id=\"error-complete-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">";
        // line 696
        echo ($context["entry_fraud_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-select\">
                            ";
        // line 699
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 700
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 700);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 700) == ($context["config_fraud_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 700);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 702
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 703
        echo ($context["help_fraud_status"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-api\" class=\"col-sm-2 col-form-label\">";
        // line 707
        echo ($context["entry_api"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_api_id\" id=\"input-api\" class=\"form-select\">
                            <option value=\"0\">";
        // line 710
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 711
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 712
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 712);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 712) == ($context["config_api_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 712);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 714
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 715
        echo ($context["help_api"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-subscription\">";
        // line 722
        echo ($context["text_subscription"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-subscription\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-status\" class=\"col-sm-2 col-form-label\">";
        // line 727
        echo ($context["entry_subscription_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_status_id\" id=\"input-subscription-status\" class=\"form-select\">
                            ";
        // line 730
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 731
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 731);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 731) == ($context["config_subscription_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 731);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 733
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 734
        echo ($context["help_subscription"] ?? null);
        echo "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-active-status\" class=\"col-sm-2 col-form-label\">";
        // line 739
        echo ($context["entry_subscription_active_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_active_status_id\" id=\"input-subscription-active-status\" class=\"form-select\">
                            ";
        // line 742
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 743
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 743);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 743) == ($context["config_subscription_active_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 743);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 745
        echo "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-expired-status\" class=\"col-sm-2 col-form-label\">";
        // line 750
        echo ($context["entry_subscription_expired_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_expired_status_id\" id=\"input-subscription-expired-status\" class=\"form-select\">
                            ";
        // line 753
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 754
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 754);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 754) == ($context["config_subscription_expired_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 754);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 756
        echo "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-suspended-status\" class=\"col-sm-2 col-form-label\">";
        // line 761
        echo ($context["entry_subscription_suspended_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_suspended_status_id\" id=\"input-subscription-suspended-status\" class=\"form-select\">
                            ";
        // line 764
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 765
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 765);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 765) == ($context["config_subscription_suspended_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 765);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 767
        echo "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-canceled-status\" class=\"col-sm-2 col-form-label\">";
        // line 772
        echo ($context["entry_subscription_canceled_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_canceled_status_id\" id=\"input-subscription-canceled-status\" class=\"form-select\">
                            ";
        // line 775
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 776
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 776);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 776) == ($context["config_subscription_canceled_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 776);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 778
        echo "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-failed-status\" class=\"col-sm-2 col-form-label\">";
        // line 783
        echo ($context["entry_subscription_failed_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_failed_status_id\" id=\"input-subscription-failed-status\" class=\"form-select\">
                            ";
        // line 786
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 787
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 787);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 787) == ($context["config_subscription_failed_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 787);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 789
        echo "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-denied-status\" class=\"col-sm-2 col-form-label\">";
        // line 794
        echo ($context["entry_subscription_denied_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_denied_status_id\" id=\"input-subscription-denied-status\" class=\"form-select\">
                            ";
        // line 797
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 798
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 798);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 798) == ($context["config_subscription_denied_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 798);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 800
        echo "                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-stock\">";
        // line 808
        echo ($context["text_stock"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-stock\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 812
        echo ($context["entry_stock_display"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_stock_display\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_stock_display\" value=\"1\" id=\"input-stock-display\" class=\"form-check-input\"";
        // line 816
        if (($context["config_stock_display"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 818
        echo ($context["help_stock_display"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 822
        echo ($context["entry_stock_warning"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_stock_warning\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_stock_warning\" value=\"1\" id=\"input-stock-warning\" class=\"form-check-input\"";
        // line 826
        if (($context["config_stock_warning"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 828
        echo ($context["help_stock_warning"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 832
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_stock_checkout\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_stock_checkout\" value=\"1\" id=\"input-stock-checkout\" class=\"form-check-input\"";
        // line 836
        if (($context["config_stock_checkout"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 838
        echo ($context["help_stock_checkout"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-affiliate\">";
        // line 845
        echo ($context["text_affiliate"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-affiliate\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 849
        echo ($context["entry_affiliate_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_affiliate_status\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_affiliate_status\" value=\"1\" id=\"input-affiliate-status\" class=\"form-check-input\"";
        // line 853
        if (($context["config_affiliate_status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 855
        echo ($context["help_affiliate_status"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">";
        // line 859
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-select\">
                            ";
        // line 862
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 863
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 863);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 863) == ($context["config_affiliate_group_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 863);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 865
        echo "                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 869
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_affiliate_approval\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_affiliate_approval\" value=\"1\" id=\"input-affiliate-approval\" class=\"form-check-input\"";
        // line 873
        if (($context["config_affiliate_approval"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 875
        echo ($context["help_affiliate_approval"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 879
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_affiliate_auto\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"config_affiliate_auto\" value=\"1\" id=\"input-affiliate-auto\" class=\"form-check-input\"";
        // line 883
        if (($context["config_affiliate_auto"] ?? null)) {
            echo " checked";
        }
        echo "/>
                          </div>
                          <div class=\"form-text\">";
        // line 885
        echo ($context["help_affiliate_auto"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">";
        // line 889
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 891
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 892
        echo ($context["help_affiliate_commission"] ?? null);
        echo "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-expire\" class=\"col-sm-2 col-form-label\">";
        // line 897
        echo ($context["entry_affiliate_expire"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_expire\" value=\"";
        // line 899
        echo ($context["config_affiliate_expire"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_expire"] ?? null);
        echo "\" id=\"input-affiliate-expire\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 900
        echo ($context["help_affiliate_expire"] ?? null);
        echo "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">";
        // line 905
        echo ($context["entry_affiliate"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-select\">
                            <option value=\"0\">";
        // line 908
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 909
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 910
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 910);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 910) == ($context["config_affiliate_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 910);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 912
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 913
        echo ($context["help_affiliate"] ?? null);
        echo "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-return\">";
        // line 921
        echo ($context["text_return"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-return\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">";
        // line 926
        echo ($context["entry_return_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-select\">
                            ";
        // line 929
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 930
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 930);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 930) == ($context["config_return_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 930);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 932
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 933
        echo ($context["help_return_status"] ?? null);
        echo "</div>
                        </div>
                      </div>

                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-return\" class=\"col-sm-2 col-form-label\">";
        // line 938
        echo ($context["entry_return"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_id\" id=\"input-return\" class=\"form-select\">
                            <option value=\"0\">";
        // line 941
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 942
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 943
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 943);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 943) == ($context["config_return_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 943);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 945
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 946
        echo ($context["help_return"] ?? null);
        echo "</div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-captcha\">";
        // line 955
        echo ($context["text_captcha"] ?? null);
        echo "</button></h2>
                  <div id=\"collapse-captcha\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">";
        // line 959
        echo ($context["entry_captcha"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-select\">
                            <option value=\"\">";
        // line 962
        echo ($context["text_none"] ?? null);
        echo "</option>
                            ";
        // line 963
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 964
            echo "                              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 964);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 964) == ($context["config_captcha"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 964);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 966
        echo "                          </select>
                          <div class=\"form-text\">";
        // line 967
        echo ($context["help_captcha"] ?? null);
        echo "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 971
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 974
        $context["captcha_page_row"] = 0;
        // line 975
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 976
            echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
            // line 977
            echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 977);
            echo "\" id=\"input-captcha-";
            echo ($context["captcha_page_row"] ?? null);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 977), ($context["config_captcha_page"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-captcha-";
            echo ($context["captcha_page_row"] ?? null);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 977);
            echo "</label>
                              </div>
                              ";
            // line 979
            $context["captcha_page_row"] = (($context["captcha_page_row"] ?? null) + 1);
            // line 980
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 981
        echo "                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 992
        echo ($context["text_image_size"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-category-width\" class=\"col-sm-2 col-form-label\">";
        // line 994
        echo ($context["entry_image_category"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-category\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_width\" value=\"";
        // line 998
        echo ($context["config_image_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_height\" value=\"";
        // line 1001
        echo ($context["config_image_category_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-category-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-category\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-thumb-width\" class=\"col-sm-2 col-form-label\">";
        // line 1008
        echo ($context["entry_image_thumb"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-thumb\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_width\" value=\"";
        // line 1012
        echo ($context["config_image_thumb_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_height\" value=\"";
        // line 1015
        echo ($context["config_image_thumb_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-thumb-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-thumb\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-popup-width\" class=\"col-sm-2 col-form-label\">";
        // line 1022
        echo ($context["entry_image_popup"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-popup\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_width\" value=\"";
        // line 1026
        echo ($context["config_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_height\" value=\"";
        // line 1029
        echo ($context["config_image_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-popup-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-popup\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-product-width\" class=\"col-sm-2 col-form-label\">";
        // line 1036
        echo ($context["entry_image_product"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-product\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_width\" value=\"";
        // line 1040
        echo ($context["config_image_product_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_height\" value=\"";
        // line 1043
        echo ($context["config_image_product_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-product-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-product\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-additional-width\" class=\"col-sm-2 col-form-label\">";
        // line 1050
        echo ($context["entry_image_additional"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-additional\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_width\" value=\"";
        // line 1054
        echo ($context["config_image_additional_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_height\" value=\"";
        // line 1057
        echo ($context["config_image_additional_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-additional-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-additional\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-related-width\" class=\"col-sm-2 col-form-label\">";
        // line 1064
        echo ($context["entry_image_related"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-related\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_width\" value=\"";
        // line 1068
        echo ($context["config_image_related_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-related-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_height\" value=\"";
        // line 1071
        echo ($context["config_image_related_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-related-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-related\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-compare-width\" class=\"col-sm-2 col-form-label\">";
        // line 1078
        echo ($context["entry_image_compare"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-compare\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_width\" value=\"";
        // line 1082
        echo ($context["config_image_compare_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-compare-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_height\" value=\"";
        // line 1085
        echo ($context["config_image_compare_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-compare-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-compare\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-wishlist-width\" class=\"col-sm-2 col-form-label\">";
        // line 1092
        echo ($context["entry_image_wishlist"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-wishlist\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_width\" value=\"";
        // line 1096
        echo ($context["config_image_wishlist_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-wishlist-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_height\" value=\"";
        // line 1099
        echo ($context["config_image_wishlist_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-wishlist-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-wishlist\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-cart-width\" class=\"col-sm-2 col-form-label\">";
        // line 1106
        echo ($context["entry_image_cart"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-cart\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_width\" value=\"";
        // line 1110
        echo ($context["config_image_cart_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-cart-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_height\" value=\"";
        // line 1113
        echo ($context["config_image_cart_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-cart-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-cart\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-location-width\" class=\"col-sm-2 col-form-label\">";
        // line 1120
        echo ($context["entry_image_location"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-location\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_width\" value=\"";
        // line 1124
        echo ($context["config_image_location_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-location-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_height\" value=\"";
        // line 1127
        echo ($context["config_image_location_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-location-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-location\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1137
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">";
        // line 1139
        echo ($context["entry_mail_engine"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-select\">
                      <option value=\"\">";
        // line 1142
        echo ($context["text_none"] ?? null);
        echo "</option>
                      <option value=\"mail\"";
        // line 1143
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_mail"] ?? null);
        echo "</option>
                      <option value=\"smtp\"";
        // line 1144
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_smtp"] ?? null);
        echo "</option>
                    </select>
                    <div class=\"form-text\">";
        // line 1146
        echo ($context["help_mail_engine"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">";
        // line 1150
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1152
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1153
        echo ($context["help_mail_parameter"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1158
        echo ($context["text_smtp"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">";
        // line 1160
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1162
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1163
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">";
        // line 1167
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1169
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">";
        // line 1173
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1175
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1176
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">";
        // line 1180
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1182
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">";
        // line 1186
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1188
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1193
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1195
        echo ($context["entry_mail_alert"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 1198
        $context["mail_alert_row"] = 0;
        // line 1199
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1200
            echo "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
            // line 1201
            echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1201);
            echo "\" id=\"input-mail-alert-";
            echo ($context["mail_alert_row"] ?? null);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1201), ($context["config_mail_alert"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-mail-alert-";
            echo ($context["mail_alert_row"] ?? null);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1201);
            echo "</label>
                        </div>
                        ";
            // line 1203
            $context["mail_alert_row"] = (($context["mail_alert_row"] ?? null) + 1);
            // line 1204
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1205
        echo "                    </div>
                    <div class=\"form-text\">";
        // line 1206
        echo ($context["help_mail_alert"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">";
        // line 1210
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1212
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-mail-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                    <div class=\"form-text\">";
        // line 1213
        echo ($context["help_mail_alert_email"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1220
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1222
        echo ($context["entry_maintenance"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_maintenance\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_maintenance\" value=\"1\" id=\"input-maintenance\" class=\"form-check-input\"";
        // line 1226
        if (($context["config_maintenance"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                    <div class=\"form-text\">";
        // line 1228
        echo ($context["help_maintenance"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-expire\" class=\"col-sm-2 col-form-label\">";
        // line 1232
        echo ($context["entry_session_expire"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_session_expire\" value=\"";
        // line 1234
        echo ($context["config_session_expire"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_session_expire"] ?? null);
        echo "\" id=\"input-session-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1235
        echo ($context["help_session_expire"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-samesite\" class=\"col-sm-2 col-form-label\">";
        // line 1239
        echo ($context["entry_session_samesite"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_session_samesite\" id=\"input-session-samesite\" class=\"form-select\">
                      <option value=\"None\"";
        // line 1242
        if ((($context["config_session_samesite"] ?? null) == "None")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_none"] ?? null);
        echo "</option>
                      <option value=\"Lax\"";
        // line 1243
        if ((($context["config_session_samesite"] ?? null) == "Lax")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_lax"] ?? null);
        echo "</option>
                      <option value=\"Strict\"";
        // line 1244
        if ((($context["config_session_samesite"] ?? null) == "Strict")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_strict"] ?? null);
        echo "</option>
                    </select>
                    <div class=\"form-text\">";
        // line 1246
        echo ($context["help_session_samesite"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1250
        echo ($context["entry_seo_url"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_seo_url\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_seo_url\" value=\"1\" id=\"input-seo-url\" class=\"form-check-input\"";
        // line 1254
        if (($context["config_seo_url"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                    <div class=\"form-text\">";
        // line 1256
        echo ($context["help_seo_url"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-robots\" class=\"col-sm-2 col-form-label\">";
        // line 1260
        echo ($context["entry_robots"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1262
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                    <div class=\"form-text\">";
        // line 1263
        echo ($context["help_robots"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-compression\" class=\"col-sm-2 col-form-label\">";
        // line 1267
        echo ($context["entry_compression"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1269
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1270
        echo ($context["help_compression"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1275
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1277
        echo ($context["entry_security"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_security\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_security\" value=\"1\" id=\"input-security\" class=\"form-check-input\"";
        // line 1281
        if (($context["config_security"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                    <div class=\"form-text\">";
        // line 1283
        echo ($context["help_security"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1287
        echo ($context["entry_shared"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_shared\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_shared\" value=\"1\" id=\"input-shared\" class=\"form-check-input\"";
        // line 1291
        if (($context["config_shared"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                    <div class=\"form-text\">";
        // line 1293
        echo ($context["help_shared"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-encryption\" class=\"col-sm-2 col-form-label\">";
        // line 1297
        echo ($context["entry_encryption"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1299
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    <div class=\"form-text\">";
        // line 1300
        echo ($context["help_encryption"] ?? null);
        echo "</div>
                    <div id=\"error-encryption\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1306
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-file-max-size\" class=\"col-sm-2 col-form-label\">";
        // line 1308
        echo ($context["entry_file_max_size"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1310
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1311
        echo ($context["help_file_max_size"] ?? null);
        echo "</div>
                    <div id=\"error-file-max-size\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-ext-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1316
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1318
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                    <div class=\"form-text\">";
        // line 1319
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "</div>
                    <div id=\"error-file-ext-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-mime-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1324
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1326
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                    <div class=\"form-text\">";
        // line 1327
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "</div>
                    <div id=\"error-file-mime-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1333
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1335
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_error_display\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_error_display\" value=\"1\" id=\"input-error-display\" class=\"form-check-input\"";
        // line 1339
        if (($context["config_error_display"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1344
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_error_log\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_error_log\" value=\"1\" id=\"input-error-log\" class=\"form-check-input\"";
        // line 1348
        if (($context["config_error_log"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-error-filename\" class=\"col-sm-2 col-form-label\">";
        // line 1353
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1355
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\"/>
                    <div id=\"error-error-filename\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-theme').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=setting/setting.theme&user_token=";
        // line 1372
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
        dataType: 'html',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (html) {
            \$('#theme-thumb').attr('src', html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-theme').trigger('change');

\$('#input-country').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token=";
        // line 1395
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true);
            \$('#input-zone').prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
            \$('#input-zone').prop('disabled', false);
        },
        success: function (json) {
            html = '<option value=\"\">";
        // line 1406
        echo ($context["text_select"] ?? null);
        echo "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '";
        // line 1412
        echo ($context["config_zone_id"] ?? null);
        echo "') {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>";
        // line 1419
        echo ($context["text_none"] ?? null);
        echo "</option>';
            }

            \$('#input-zone').html(html);

            \$('#button-save').prop('disabled', false);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-country').trigger('change');
//--></script>
";
        // line 1434
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3418 => 1434,  3400 => 1419,  3390 => 1412,  3381 => 1406,  3367 => 1395,  3341 => 1372,  3319 => 1355,  3314 => 1353,  3304 => 1348,  3297 => 1344,  3287 => 1339,  3280 => 1335,  3275 => 1333,  3266 => 1327,  3260 => 1326,  3255 => 1324,  3247 => 1319,  3241 => 1318,  3236 => 1316,  3228 => 1311,  3222 => 1310,  3217 => 1308,  3212 => 1306,  3203 => 1300,  3197 => 1299,  3192 => 1297,  3185 => 1293,  3178 => 1291,  3171 => 1287,  3164 => 1283,  3157 => 1281,  3150 => 1277,  3145 => 1275,  3137 => 1270,  3131 => 1269,  3126 => 1267,  3119 => 1263,  3113 => 1262,  3108 => 1260,  3101 => 1256,  3094 => 1254,  3087 => 1250,  3080 => 1246,  3071 => 1244,  3063 => 1243,  3055 => 1242,  3049 => 1239,  3042 => 1235,  3036 => 1234,  3031 => 1232,  3024 => 1228,  3017 => 1226,  3010 => 1222,  3005 => 1220,  2995 => 1213,  2989 => 1212,  2984 => 1210,  2977 => 1206,  2974 => 1205,  2968 => 1204,  2966 => 1203,  2951 => 1201,  2948 => 1200,  2943 => 1199,  2941 => 1198,  2935 => 1195,  2930 => 1193,  2920 => 1188,  2915 => 1186,  2906 => 1182,  2901 => 1180,  2894 => 1176,  2888 => 1175,  2883 => 1173,  2874 => 1169,  2869 => 1167,  2862 => 1163,  2856 => 1162,  2851 => 1160,  2846 => 1158,  2838 => 1153,  2832 => 1152,  2827 => 1150,  2820 => 1146,  2811 => 1144,  2803 => 1143,  2799 => 1142,  2793 => 1139,  2788 => 1137,  2773 => 1127,  2765 => 1124,  2758 => 1120,  2746 => 1113,  2738 => 1110,  2731 => 1106,  2719 => 1099,  2711 => 1096,  2704 => 1092,  2692 => 1085,  2684 => 1082,  2677 => 1078,  2665 => 1071,  2657 => 1068,  2650 => 1064,  2638 => 1057,  2630 => 1054,  2623 => 1050,  2611 => 1043,  2603 => 1040,  2596 => 1036,  2584 => 1029,  2576 => 1026,  2569 => 1022,  2557 => 1015,  2549 => 1012,  2542 => 1008,  2530 => 1001,  2522 => 998,  2515 => 994,  2510 => 992,  2497 => 981,  2491 => 980,  2489 => 979,  2474 => 977,  2471 => 976,  2466 => 975,  2464 => 974,  2458 => 971,  2451 => 967,  2448 => 966,  2433 => 964,  2429 => 963,  2425 => 962,  2419 => 959,  2412 => 955,  2400 => 946,  2397 => 945,  2382 => 943,  2378 => 942,  2374 => 941,  2368 => 938,  2360 => 933,  2357 => 932,  2342 => 930,  2338 => 929,  2332 => 926,  2324 => 921,  2313 => 913,  2310 => 912,  2295 => 910,  2291 => 909,  2287 => 908,  2281 => 905,  2273 => 900,  2267 => 899,  2262 => 897,  2254 => 892,  2248 => 891,  2243 => 889,  2236 => 885,  2229 => 883,  2222 => 879,  2215 => 875,  2208 => 873,  2201 => 869,  2195 => 865,  2180 => 863,  2176 => 862,  2170 => 859,  2163 => 855,  2156 => 853,  2149 => 849,  2142 => 845,  2132 => 838,  2125 => 836,  2118 => 832,  2111 => 828,  2104 => 826,  2097 => 822,  2090 => 818,  2083 => 816,  2076 => 812,  2069 => 808,  2059 => 800,  2044 => 798,  2040 => 797,  2034 => 794,  2027 => 789,  2012 => 787,  2008 => 786,  2002 => 783,  1995 => 778,  1980 => 776,  1976 => 775,  1970 => 772,  1963 => 767,  1948 => 765,  1944 => 764,  1938 => 761,  1931 => 756,  1916 => 754,  1912 => 753,  1906 => 750,  1899 => 745,  1884 => 743,  1880 => 742,  1874 => 739,  1866 => 734,  1863 => 733,  1848 => 731,  1844 => 730,  1838 => 727,  1830 => 722,  1820 => 715,  1817 => 714,  1802 => 712,  1798 => 711,  1794 => 710,  1788 => 707,  1781 => 703,  1778 => 702,  1763 => 700,  1759 => 699,  1753 => 696,  1745 => 691,  1742 => 690,  1723 => 687,  1720 => 686,  1716 => 685,  1710 => 682,  1702 => 677,  1699 => 676,  1680 => 673,  1677 => 672,  1673 => 671,  1667 => 668,  1660 => 664,  1657 => 663,  1642 => 661,  1638 => 660,  1632 => 657,  1625 => 653,  1622 => 652,  1607 => 650,  1603 => 649,  1599 => 648,  1593 => 645,  1585 => 640,  1578 => 638,  1571 => 634,  1563 => 629,  1556 => 627,  1549 => 623,  1541 => 618,  1534 => 616,  1527 => 612,  1520 => 608,  1513 => 606,  1506 => 602,  1499 => 598,  1493 => 597,  1488 => 595,  1481 => 591,  1470 => 583,  1467 => 582,  1452 => 580,  1448 => 579,  1444 => 578,  1438 => 575,  1430 => 570,  1424 => 569,  1419 => 567,  1409 => 562,  1402 => 558,  1392 => 553,  1385 => 549,  1378 => 545,  1371 => 543,  1364 => 539,  1356 => 534,  1353 => 533,  1334 => 530,  1331 => 529,  1327 => 528,  1321 => 525,  1314 => 521,  1311 => 520,  1296 => 518,  1292 => 517,  1286 => 514,  1276 => 509,  1269 => 505,  1262 => 501,  1255 => 499,  1248 => 495,  1240 => 490,  1231 => 488,  1225 => 485,  1218 => 481,  1211 => 479,  1204 => 475,  1197 => 471,  1186 => 463,  1177 => 461,  1169 => 460,  1165 => 459,  1159 => 456,  1152 => 452,  1143 => 450,  1135 => 449,  1131 => 448,  1125 => 445,  1115 => 440,  1108 => 436,  1101 => 432,  1090 => 424,  1084 => 423,  1079 => 421,  1072 => 417,  1069 => 416,  1054 => 414,  1050 => 413,  1046 => 412,  1040 => 409,  1033 => 405,  1030 => 404,  1015 => 402,  1011 => 401,  1007 => 400,  1001 => 397,  994 => 393,  982 => 384,  976 => 383,  971 => 381,  963 => 376,  957 => 375,  952 => 373,  945 => 369,  935 => 362,  928 => 360,  921 => 356,  914 => 352,  907 => 350,  900 => 346,  893 => 342,  886 => 340,  879 => 336,  872 => 332,  861 => 324,  854 => 322,  847 => 318,  838 => 312,  832 => 311,  827 => 309,  819 => 304,  812 => 302,  805 => 298,  797 => 293,  791 => 292,  786 => 290,  778 => 285,  772 => 284,  767 => 282,  758 => 276,  746 => 266,  731 => 264,  727 => 263,  721 => 260,  715 => 256,  700 => 254,  696 => 253,  690 => 250,  683 => 246,  676 => 244,  669 => 240,  663 => 236,  648 => 234,  644 => 233,  638 => 230,  631 => 226,  628 => 225,  613 => 223,  609 => 222,  603 => 219,  597 => 215,  582 => 213,  578 => 212,  572 => 209,  566 => 205,  551 => 203,  547 => 202,  541 => 199,  535 => 195,  520 => 193,  516 => 192,  510 => 189,  501 => 183,  495 => 179,  480 => 177,  476 => 176,  470 => 173,  465 => 170,  458 => 166,  455 => 165,  436 => 162,  433 => 161,  429 => 160,  423 => 157,  420 => 156,  418 => 155,  412 => 152,  406 => 151,  401 => 149,  394 => 145,  388 => 144,  383 => 142,  374 => 136,  370 => 135,  361 => 133,  355 => 130,  345 => 125,  340 => 123,  330 => 118,  325 => 116,  318 => 112,  312 => 111,  307 => 109,  298 => 105,  293 => 103,  283 => 98,  278 => 96,  268 => 91,  263 => 89,  255 => 83,  240 => 81,  236 => 80,  230 => 77,  222 => 71,  207 => 69,  203 => 68,  197 => 65,  188 => 59,  184 => 58,  175 => 56,  169 => 53,  160 => 49,  155 => 47,  146 => 43,  141 => 41,  131 => 36,  126 => 34,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  89 => 21,  84 => 19,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/setting/setting.twig", "E:\\University\\PI\\module-2\\xampp\\htdocs\\opencart\\admin\\view\\template\\setting\\setting.twig");
    }
}
