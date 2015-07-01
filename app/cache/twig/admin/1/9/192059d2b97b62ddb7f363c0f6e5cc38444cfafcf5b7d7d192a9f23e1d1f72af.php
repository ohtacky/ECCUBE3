<?php

/* Form/form_layout.twig */
class __TwigTemplate_192059d2b97b62ddb7f363c0f6e5cc38444cfafcf5b7d7d192a9f23e1d1f72af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("form_table_layout.html.twig", "Form/form_layout.twig", 22);
        $this->blocks = array(
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'name_widget' => array($this, 'block_name_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'fax_widget' => array($this, 'block_fax_widget'),
            'zip_widget' => array($this, 'block_zip_widget'),
            'address_widget' => array($this, 'block_address_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_table_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 25
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ($this->getAttribute($this->getAttribute($_form_, "vars", array()), "freeze_display_text", array())) {
            // line 26
            echo "<table ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 27
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_test_empty($this->getAttribute($_form_, "parent", array())) && (twig_length_filter($this->env, $_errors_) > 0))) {
                // line 28
                echo "<tr>
                <td colspan=\"2\">";
                // line 30
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
                // line 31
                echo "</td>
            </tr>";
            }
            // line 34
            $this->displayBlock("form_rows", $context, $blocks);
            // line 35
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
            // line 36
            echo "</table>";
        } else {
            // line 38
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            // line 39
            $this->displayBlock("form_rows", $context, $blocks);
            // line 40
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        }
    }

    // line 44
    public function block_form_row($context, array $blocks = array())
    {
        // line 45
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ($this->getAttribute($this->getAttribute($_form_, "vars", array()), "freeze_display_text", array())) {
            // line 46
            echo "<tr>
            <th>";
            // line 48
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label');
            // line 49
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ($this->getAttribute($this->getAttribute($_form_, "vars", array()), "required", array())) {
                echo "<span class=\"attention\">※</span>";
            }
            // line 50
            echo "            </th>
            <td>";
            // line 52
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            // line 53
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
            // line 54
            echo "</td>
        </tr>";
        } else {
            // line 57
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            // line 58
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        }
    }

    // line 62
    public function block_form_errors($context, array $blocks = array())
    {
        // line 63
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 64
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_errors_);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 65
                echo "<span class=\"attention\">※ ";
                if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, strtr($this->env->getExtension('translator')->trans($this->getAttribute($_error_, "messageTemplate", array()), $this->getAttribute($_error_, "messageParameters", array()), "validators"), array("{{ field }}" => $_label_)), "html", null, true);
                echo "<br /></span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    // line 72
    public function block_form_widget($context, array $blocks = array())
    {
        // line 73
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 74
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if (($_freeze_ == false)) {
            // line 75
            if (isset($context["help"])) { $_help_ = $context["help"]; } else { $_help_ = null; }
            if ((array_key_exists("help", $context) &&  !twig_test_empty($_help_))) {
                // line 76
                echo "<p class=\"mini\"><span class=\"attention\">";
                if (isset($context["help"])) { $_help_ = $context["help"]; } else { $_help_ = null; }
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_help_, array(), $_translation_domain_), "html", null, true);
                echo "</span></p>";
            }
        }
    }

    // line 81
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 82
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 83
            $context["type"] = "hidden";
            // line 84
            if (isset($context["freeze_display_text"])) { $_freeze_display_text_ = $context["freeze_display_text"]; } else { $_freeze_display_text_ = null; }
            if ($_freeze_display_text_) {
                // line 85
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo nl2br(twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter($_value_, "")) : ("")), "html", null, true));
            }
        }
        // line 88
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 91
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 92
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 93
            $context["style"] = "background-color:#ffe8e8;";
            // line 94
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if ($_attr_) {
                // line 95
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                if (($this->getAttribute($_attr_, "style", array(), "array", true, true) && (twig_length_filter($this->env, $this->getAttribute($_attr_, "style", array(), "array")) > 0))) {
                    // line 96
                    if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
                    if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                    $context["style"] = (($_style_ . " ") . $this->getAttribute($_attr_, "style", array(), "array"));
                }
                // line 98
                if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
                if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
                $context["attr"] = twig_array_merge($_attr_, array("style" => $_style_));
            } else {
                // line 100
                if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
                $context["attr"] = array("style" => $_style_);
            }
        }
        // line 103
        echo "id=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" name=\"";
        if (isset($context["full_name"])) { $_full_name_ = $context["full_name"]; } else { $_full_name_ = null; }
        echo twig_escape_filter($this->env, $_full_name_, "html", null, true);
        echo "\"";
        if (isset($context["read_only"])) { $_read_only_ = $context["read_only"]; } else { $_read_only_ = null; }
        if ($_read_only_) {
            echo "disabled=\"disabled\"";
        }
        if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
        if ($_required_) {
            echo " required=\"required\"";
        }
        if (isset($context["pattern"])) { $_pattern_ = $context["pattern"]; } else { $_pattern_ = null; }
        if ($_pattern_) {
            echo " pattern=\"";
            if (isset($context["pattern"])) { $_pattern_ = $context["pattern"]; } else { $_pattern_ = null; }
            echo twig_escape_filter($this->env, $_pattern_, "html", null, true);
            echo "\"";
        }
        // line 104
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if (($_freeze_ == false)) {
            // line 105
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attr_);
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "=\"";
                if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    // line 109
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 110
        if (isset($context["freeze_display_text"])) { $_freeze_display_text_ = $context["freeze_display_text"]; } else { $_freeze_display_text_ = null; }
        if ($_freeze_display_text_) {
            // line 111
            echo "<tr style=\"display: none\">
            <td colspan=\"2\">";
            // line 113
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
            // line 114
            echo "</td>
        </tr>";
        } else {
            // line 117
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        }
    }

    // line 121
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 122
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 123
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 125
            $this->displayParentBlock("textarea_widget", $context, $blocks);
            // line 126
            if (isset($context["help"])) { $_help_ = $context["help"]; } else { $_help_ = null; }
            if ((array_key_exists("help", $context) &&  !twig_test_empty($_help_))) {
                // line 127
                echo "<p class=\"mini\"><span class=\"attention\">";
                if (isset($context["help"])) { $_help_ = $context["help"]; } else { $_help_ = null; }
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_help_, array(), $_translation_domain_), "html", null, true);
                echo "</span></p>";
            }
        }
    }

    // line 132
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 133
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 134
            echo "        ";
            $context["flag"] = false;
            // line 135
            echo "        ";
            if (isset($context["choices"])) { $_choices_ = $context["choices"]; } else { $_choices_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_choices_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 136
                echo "            ";
                if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if ($this->env->getExtension('form')->isSelectedChoice($_choice_, $_value_)) {
                    // line 137
                    if (isset($context["freeze_display_text"])) { $_freeze_display_text_ = $context["freeze_display_text"]; } else { $_freeze_display_text_ = null; }
                    if ($_freeze_display_text_) {
                        // line 138
                        if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
                        if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_choice_, "label", array()), array(), $_translation_domain_), "html", null, true);
                        echo "
                ";
                    }
                    // line 140
                    echo "                <input type=\"hidden\" value=\"";
                    if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_choice_, "value", array()), "html", null, true);
                    echo "\" ";
                    $this->displayBlock("widget_attributes", $context, $blocks);
                    echo ">
                ";
                    // line 141
                    $context["flag"] = true;
                    // line 142
                    echo "            ";
                }
                // line 143
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "        ";
            if (isset($context["flag"])) { $_flag_ = $context["flag"]; } else { $_flag_ = null; }
            if (($_flag_ == false)) {
                echo "<input type=\"hidden\" value=\"\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">";
            }
        } else {
            // line 146
            $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        }
    }

    // line 151
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 152
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 153
            if (isset($context["freeze_display_text"])) { $_freeze_display_text_ = $context["freeze_display_text"]; } else { $_freeze_display_text_ = null; }
            if ($_freeze_display_text_) {
                // line 154
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "vars", array(), "any", false, true), "data", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "vars", array(), "any", false, true), "data", array(), "any", false, true), "name", array()), $this->getAttribute($this->getAttribute($_form_, "vars", array()), "data", array()))) : ($this->getAttribute($this->getAttribute($_form_, "vars", array()), "data", array()))), "html", null, true);
            }
            // line 156
            echo "<input type=\"hidden\" value=\"";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "vars", array(), "any", false, true), "data", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "vars", array(), "any", false, true), "data", array(), "any", false, true), "id", array()), $this->getAttribute($this->getAttribute($_form_, "vars", array()), "data", array()))) : ($this->getAttribute($this->getAttribute($_form_, "vars", array()), "data", array()))), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo ">";
        } else {
            // line 158
            $this->displayParentBlock("choice_widget_expanded", $context, $blocks);
        }
    }

    // line 163
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 164
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 165
            if (isset($context["checked"])) { $_checked_ = $context["checked"]; } else { $_checked_ = null; }
            if ($_checked_) {
                // line 166
                if (isset($context["freeze_display_text"])) { $_freeze_display_text_ = $context["freeze_display_text"]; } else { $_freeze_display_text_ = null; }
                if ($_freeze_display_text_) {
                    // line 167
                    $this->displayBlock("form_label", $context, $blocks);
                }
                // line 169
                echo "<input type=\"hidden\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                if (array_key_exists("value", $context)) {
                    echo " value=\"";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "\"";
                }
                echo " />";
            }
        } else {
            // line 172
            $this->displayParentBlock("checkbox_widget", $context, $blocks);
        }
    }

    // line 176
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 177
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 178
            if (isset($context["checked"])) { $_checked_ = $context["checked"]; } else { $_checked_ = null; }
            if ($_checked_) {
                // line 179
                if (isset($context["freeze_display_text"])) { $_freeze_display_text_ = $context["freeze_display_text"]; } else { $_freeze_display_text_ = null; }
                if ($_freeze_display_text_) {
                    // line 180
                    $this->displayBlock("form_label", $context, $blocks);
                }
                // line 182
                echo "<input type=\"hidden\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                if (array_key_exists("value", $context)) {
                    echo " value=\"";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "\"";
                }
                echo " />";
            }
        } else {
            // line 185
            $this->displayParentBlock("radio_widget", $context, $blocks);
        }
    }

    // line 190
    public function block_password_widget($context, array $blocks = array())
    {
        // line 191
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 192
            echo "<input type=\"hidden\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " value=\"";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "data", array()), "html", null, true);
            echo "\" />";
        } else {
            // line 194
            $this->displayParentBlock("password_widget", $context, $blocks);
        }
    }

    // line 201
    public function block_name_widget($context, array $blocks = array())
    {
        // line 202
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 203
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 206
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "name01", array()), array(), "array"), 'widget');
            // line 207
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "name02", array()), array(), "array"), 'widget');
        } else {
            // line 209
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "name01", array()), array(), "array"), 'widget');
            // line 210
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "name02", array()), array(), "array"), 'widget');
        }
        // line 213
        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
        if (($this->getAttribute($_loop_, "last", array()) == false)) {
            echo "　";
        }
    }

    // line 216
    public function block_tel_widget($context, array $blocks = array())
    {
        // line 217
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 218
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 221
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget', array("attr" => array("style" => "ime-mode: disabled;")));
            // line 222
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (($this->getAttribute($_loop_, "last", array()) == false)) {
                echo "&nbsp;-&nbsp;";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 226
    public function block_fax_widget($context, array $blocks = array())
    {
        // line 227
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 228
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 231
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget', array("attr" => array("style" => "ime-mode: disabled;")));
            // line 232
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (($this->getAttribute($_loop_, "last", array()) == false)) {
                echo "&nbsp;-&nbsp;";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 236
    public function block_zip_widget($context, array $blocks = array())
    {
        // line 237
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 238
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 241
            echo "〒&nbsp;";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "zip01_name", array()), array(), "array"), 'widget');
            echo "&nbsp;-&nbsp;";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "zip02_name", array()), array(), "array"), 'widget');
        } else {
            // line 243
            echo "〒&nbsp;";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "zip01_name", array()), array(), "array"), 'widget', array("attr" => array("style" => "ime-mode: disabled;")));
            echo "&nbsp;-&nbsp;";
            // line 244
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "zip02_name", array()), array(), "array"), 'widget', array("attr" => array("style" => "ime-mode: disabled;")));
            echo "
        <a class=\"btn-normal\" href=\"javascript:;\" name=\"address_input\" onclick=\"eccube.getAddress('";
            // line 245
            echo $this->env->getExtension('routing')->getPath("input_zip");
            echo "', 'zip01', 'zip02', 'pref', 'addr01'); return false;\">住所入力</a>";
        }
    }

    // line 249
    public function block_address_widget($context, array $blocks = array())
    {
        // line 250
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 251
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 254
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "pref_name", array()), array(), "array"), 'widget');
            // line 255
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "addr01_name", array()), array(), "array"), 'widget');
            // line 256
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "addr02_name", array()), array(), "array"), 'widget');
        } else {
            // line 258
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "pref_name", array()), array(), "array"), 'widget');
            echo "<br />";
            // line 259
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "addr01_name", array()), array(), "array"), 'widget', array("attr" => array("style" => "ime-mode: active;")));
            echo "<br />";
            // line 260
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "addr02_name", array()), array(), "array"), 'widget', array("attr" => array("style" => "ime-mode: active;")));
            echo "<br />";
            // line 261
            if (isset($context["help"])) { $_help_ = $context["help"]; } else { $_help_ = null; }
            if ((array_key_exists("help", $context) &&  !twig_test_empty($_help_))) {
                // line 262
                echo "<span class=\"attention\">";
                if (isset($context["help"])) { $_help_ = $context["help"]; } else { $_help_ = null; }
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_help_, array(), $_translation_domain_), "html", null, true);
                echo "</span>";
            }
        }
    }

    public function getTemplateName()
    {
        return "Form/form_layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  739 => 262,  736 => 261,  732 => 260,  728 => 259,  724 => 258,  720 => 256,  717 => 255,  714 => 254,  711 => 253,  704 => 251,  699 => 250,  696 => 249,  690 => 245,  685 => 244,  680 => 243,  672 => 241,  669 => 240,  662 => 238,  657 => 237,  654 => 236,  635 => 232,  632 => 231,  614 => 230,  607 => 228,  602 => 227,  599 => 226,  580 => 222,  577 => 221,  559 => 220,  552 => 218,  547 => 217,  544 => 216,  537 => 213,  533 => 210,  530 => 209,  526 => 207,  523 => 206,  520 => 205,  513 => 203,  508 => 202,  505 => 201,  500 => 194,  492 => 192,  489 => 191,  486 => 190,  481 => 185,  469 => 182,  466 => 180,  463 => 179,  460 => 178,  457 => 177,  454 => 176,  449 => 172,  437 => 169,  434 => 167,  431 => 166,  428 => 165,  425 => 164,  422 => 163,  417 => 158,  409 => 156,  405 => 154,  402 => 153,  399 => 152,  396 => 151,  391 => 146,  382 => 144,  368 => 143,  365 => 142,  363 => 141,  355 => 140,  348 => 138,  345 => 137,  340 => 136,  321 => 135,  318 => 134,  315 => 133,  312 => 132,  302 => 127,  299 => 126,  297 => 125,  294 => 123,  291 => 122,  288 => 121,  282 => 117,  278 => 114,  275 => 113,  272 => 111,  269 => 110,  266 => 109,  247 => 105,  244 => 104,  221 => 103,  216 => 100,  211 => 98,  206 => 96,  203 => 95,  200 => 94,  198 => 93,  195 => 92,  192 => 91,  188 => 88,  183 => 85,  180 => 84,  178 => 83,  175 => 82,  172 => 81,  162 => 76,  159 => 75,  156 => 74,  154 => 73,  151 => 72,  138 => 65,  133 => 64,  130 => 63,  127 => 62,  121 => 58,  118 => 57,  114 => 54,  111 => 53,  108 => 52,  105 => 50,  100 => 49,  97 => 48,  94 => 46,  91 => 45,  88 => 44,  82 => 40,  80 => 39,  77 => 38,  74 => 36,  71 => 35,  69 => 34,  65 => 31,  62 => 30,  59 => 28,  55 => 27,  51 => 26,  48 => 25,  45 => 24,  11 => 22,);
    }
}
