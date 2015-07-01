<?php

/* Form/form_layout.twig */
class __TwigTemplate_191d9f4e26e7060fb500f08d82aa19691d887994cc54ed4864caf0b333e9c888 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("bootstrap_3_layout.html.twig", "Form/form_layout.twig", 22);
        $this->blocks = array(
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'name_widget' => array($this, 'block_name_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'fax_widget' => array($this, 'block_fax_widget'),
            'zip_widget' => array($this, 'block_zip_widget'),
            'address_widget' => array($this, 'block_address_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_3_layout.html.twig";
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
            echo "<div class=\"dl_table\" ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 27
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ((twig_test_empty($this->getAttribute($_form_, "parent", array())) && (twig_length_filter($this->env, $_errors_) > 0))) {
                // line 28
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            }
            // line 30
            $this->displayBlock("form_rows", $context, $blocks);
            // line 31
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
            // line 32
            echo "</div>";
        } else {
            // line 34
            $this->displayBlock("form_rows", $context, $blocks);
            // line 35
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        }
    }

    // line 39
    public function block_form_row($context, array $blocks = array())
    {
        // line 40
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ($this->getAttribute($this->getAttribute($_form_, "vars", array()), "freeze_display_text", array())) {
            // line 41
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => (($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : (""))));
            // line 42
            echo "    <dl>
        <dt>";
            // line 43
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label');
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if ($_required_) {
                echo " <span class=\"required\">必須</span>";
            }
            echo "</dt>
        <dd class=\"form-group";
            // line 44
            if (isset($context["valid"])) { $_valid_ = $context["valid"]; } else { $_valid_ = null; }
            if ( !$_valid_) {
                echo " has-error";
            }
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (twig_in_filter("middle", $this->getAttribute($_attr_, "class", array()))) {
                echo " input_name";
            }
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (twig_in_filter("short", $this->getAttribute($_attr_, "class", array()))) {
                echo " input_tel";
            }
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            if (twig_in_filter("zip", $this->getAttribute($_attr_, "class", array()))) {
                echo " input_zip";
            }
            echo "\">
            ";
            // line 45
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
            echo "
            ";
            // line 46
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            echo "
        </dd>
    </dl>";
        } else {
            // line 50
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            // line 51
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        }
    }

    // line 55
    public function block_form_errors($context, array $blocks = array())
    {
        // line 56
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 57
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ($this->getAttribute($_form_, "parent", array())) {
                // line 58
                if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_errors_);
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 59
                    echo "<p class=\"errormsg text-danger\">";
                    if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_error_, "message", array())), "html", null, true);
                    echo "</p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
    }

    // line 67
    public function block_form_widget($context, array $blocks = array())
    {
        // line 68
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 69
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if (($_freeze_ == false)) {
            // line 70
            if (isset($context["help"])) { $_help_ = $context["help"]; } else { $_help_ = null; }
            if ((array_key_exists("help", $context) &&  !twig_test_empty($_help_))) {
                // line 71
                echo "<p class=\"mini\"><span class=\"attention\">";
                if (isset($context["help"])) { $_help_ = $context["help"]; } else { $_help_ = null; }
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_help_, array(), $_translation_domain_), "html", null, true);
                echo "</span></p>";
            }
        }
    }

    // line 76
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 77
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 78
            $context["type"] = "hidden";
            // line 79
            if (isset($context["freeze_display_text"])) { $_freeze_display_text_ = $context["freeze_display_text"]; } else { $_freeze_display_text_ = null; }
            if ($_freeze_display_text_) {
                // line 80
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo nl2br(twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter($_value_, "")) : ("")), "html", null, true));
            }
        }
        // line 83
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 86
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 87
        if (isset($context["freeze_display_text"])) { $_freeze_display_text_ = $context["freeze_display_text"]; } else { $_freeze_display_text_ = null; }
        if ($_freeze_display_text_) {
            // line 88
            echo "<div style=\"display: none\">";
            // line 89
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
            // line 90
            echo "</div>";
        } else {
            // line 92
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        }
    }

    // line 96
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 97
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 98
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 100
            $this->displayParentBlock("textarea_widget", $context, $blocks);
            // line 101
            if (isset($context["help"])) { $_help_ = $context["help"]; } else { $_help_ = null; }
            if ((array_key_exists("help", $context) &&  !twig_test_empty($_help_))) {
                // line 102
                echo "<p class=\"mini\"><span class=\"attention\">";
                if (isset($context["help"])) { $_help_ = $context["help"]; } else { $_help_ = null; }
                if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_help_, array(), $_translation_domain_), "html", null, true);
                echo "</span></p>";
            }
        }
    }

    // line 107
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 108
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 109
            echo "        ";
            $context["flag"] = false;
            // line 110
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
                // line 111
                echo "            ";
                if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if ($this->env->getExtension('form')->isSelectedChoice($_choice_, $_value_)) {
                    // line 112
                    if (isset($context["freeze_display_text"])) { $_freeze_display_text_ = $context["freeze_display_text"]; } else { $_freeze_display_text_ = null; }
                    if ($_freeze_display_text_) {
                        // line 113
                        if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
                        if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_choice_, "label", array()), array(), $_translation_domain_), "html", null, true);
                        echo "
                ";
                    }
                    // line 115
                    echo "                <input type=\"hidden\" value=\"";
                    if (isset($context["choice"])) { $_choice_ = $context["choice"]; } else { $_choice_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_choice_, "value", array()), "html", null, true);
                    echo "\" ";
                    $this->displayBlock("widget_attributes", $context, $blocks);
                    echo ">
                ";
                    // line 116
                    $context["flag"] = true;
                    // line 117
                    echo "            ";
                }
                // line 118
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
            // line 119
            echo "        ";
            if (isset($context["flag"])) { $_flag_ = $context["flag"]; } else { $_flag_ = null; }
            if (($_flag_ == false)) {
                echo "<input type=\"hidden\" value=\"\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">";
            }
        } else {
            // line 121
            $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        }
    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 127
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 128
            if (isset($context["freeze_display_text"])) { $_freeze_display_text_ = $context["freeze_display_text"]; } else { $_freeze_display_text_ = null; }
            if ($_freeze_display_text_) {
                // line 129
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "vars", array(), "any", false, true), "data", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "vars", array(), "any", false, true), "data", array(), "any", false, true), "name", array()), $this->getAttribute($this->getAttribute($_form_, "vars", array()), "data", array()))) : ($this->getAttribute($this->getAttribute($_form_, "vars", array()), "data", array()))), "html", null, true);
            }
            // line 131
            echo "<input type=\"hidden\" value=\"";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "vars", array(), "any", false, true), "data", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_form_, "vars", array(), "any", false, true), "data", array(), "any", false, true), "id", array()), $this->getAttribute($this->getAttribute($_form_, "vars", array()), "data", array()))) : ($this->getAttribute($this->getAttribute($_form_, "vars", array()), "data", array()))), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo ">";
        } else {
            // line 133
            $this->displayParentBlock("choice_widget_expanded", $context, $blocks);
        }
    }

    // line 138
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 139
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 140
            if (isset($context["checked"])) { $_checked_ = $context["checked"]; } else { $_checked_ = null; }
            if ($_checked_) {
                // line 141
                if (isset($context["freeze_display_text"])) { $_freeze_display_text_ = $context["freeze_display_text"]; } else { $_freeze_display_text_ = null; }
                if ($_freeze_display_text_) {
                    // line 142
                    $this->displayBlock("form_label", $context, $blocks);
                }
                // line 144
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
            // line 147
            $this->displayParentBlock("checkbox_widget", $context, $blocks);
        }
    }

    // line 151
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 152
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 153
            if (isset($context["checked"])) { $_checked_ = $context["checked"]; } else { $_checked_ = null; }
            if ($_checked_) {
                // line 154
                if (isset($context["freeze_display_text"])) { $_freeze_display_text_ = $context["freeze_display_text"]; } else { $_freeze_display_text_ = null; }
                if ($_freeze_display_text_) {
                    // line 155
                    $this->displayBlock("form_label", $context, $blocks);
                }
                // line 157
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
            // line 160
            $this->displayParentBlock("radio_widget", $context, $blocks);
        }
    }

    // line 165
    public function block_password_widget($context, array $blocks = array())
    {
        // line 166
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 167
            echo "<input type=\"hidden\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " value=\"";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "data", array()), "html", null, true);
            echo "\" />";
        } else {
            // line 169
            $this->displayParentBlock("password_widget", $context, $blocks);
        }
    }

    // line 174
    public function block_date_widget($context, array $blocks = array())
    {
        // line 175
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 176
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
                // line 177
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($_child_, "vars", array()), "value", array()))) {
                    // line 178
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget');
                    // line 179
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (($this->getAttribute($_loop_, "last", array()) == false)) {
                        echo "/";
                    }
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
        } else {
            // line 183
            $this->displayParentBlock("date_widget", $context, $blocks);
        }
    }

    // line 192
    public function block_name_widget($context, array $blocks = array())
    {
        // line 193
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 194
            if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
            if ($_freeze_) {
                // line 195
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget');
            } else {
                // line 197
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 201
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 205
    public function block_tel_widget($context, array $blocks = array())
    {
        // line 206
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
            // line 207
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget', array("style" => "ime-mode: disabled;"));
            // line 208
            if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
            if ($_freeze_) {
                // line 209
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($_child_, "vars", array()), "value", array()))) {
                    // line 210
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (($this->getAttribute($_loop_, "last", array()) == false)) {
                        echo "&nbsp;-&nbsp;";
                    }
                }
            } else {
                // line 213
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (($this->getAttribute($_loop_, "last", array()) == false)) {
                    echo "&nbsp;-&nbsp;";
                }
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
        // line 216
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 217
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 221
    public function block_fax_widget($context, array $blocks = array())
    {
        // line 222
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
            // line 223
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget', array("attr" => array("style" => "ime-mode: disabled;")));
            // line 224
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
        // line 226
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_form_);
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 227
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 231
    public function block_zip_widget($context, array $blocks = array())
    {
        // line 232
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 233
            echo "〒&nbsp;";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "zip01_name", array()), array(), "array"), 'widget');
            echo "&nbsp;-&nbsp;";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "zip02_name", array()), array(), "array"), 'widget');
        } else {
            // line 235
            echo "〒";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "zip01_name", array()), array(), "array"), 'widget', array("id" => "zip01", "attr" => array("class" => "form-control", "style" => "ime-mode: disabled;")));
            echo "-";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "zip02_name", array()), array(), "array"), 'widget', array("id" => "zip02", "attr" => array("class" => "form-control", "style" => "ime-mode: disabled;")));
            echo " <span class=\"question-circle\"><svg class=\"cb cb-question\"><use xlink:href=\"#cb-question\" /></svg></span> <a href=\"http://www.post.japanpost.jp/zipcode/\" target=\"_blank\">郵便番号検索</a>";
            // line 236
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_form_);
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 237
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'errors');
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "<div class=\"zip-search\"><button type=\"button\" id=\"zip-search\" class=\"btn btn-default btn-sm\">郵便番号から自動入力</button></div>";
        }
    }

    // line 243
    public function block_address_widget($context, array $blocks = array())
    {
        // line 244
        echo "<div class=\"form-inline form-group input_zip\">";
        // line 245
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "pref_name", array()), array(), "array"), 'widget', array("id" => "pref"));
        // line 246
        echo "</div>";
        // line 247
        if (isset($context["freeze"])) { $_freeze_ = $context["freeze"]; } else { $_freeze_ = null; }
        if ($_freeze_) {
            // line 248
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "addr01_name", array()), array(), "array"), 'widget');
            // line 249
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "addr02_name", array()), array(), "array"), 'widget');
        } else {
            // line 251
            echo "<div class=\"form-group\">";
            // line 252
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "addr01_name", array()), array(), "array"), 'widget', array("id" => "addr01", "attr" => array("style" => "ime-mode: active;", "placeholder" => $this->getAttribute($this->getAttribute($_app_, "config", array()), "sample_address1", array()))));
            echo "<br />
        </div>
        <div class=\"form-group\">";
            // line 255
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, $this->getAttribute($this->getAttribute($_form_, "vars", array()), "addr02_name", array()), array(), "array"), 'widget', array("id" => "addr02", "attr" => array("style" => "ime-mode: active;", "placeholder" => $this->getAttribute($this->getAttribute($_app_, "config", array()), "sample_address2", array()))));
            echo "<br />
        </div>";
            // line 257
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_form_);
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 258
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'errors');
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  739 => 258,  734 => 257,  728 => 255,  721 => 252,  719 => 251,  715 => 249,  712 => 248,  709 => 247,  707 => 246,  704 => 245,  702 => 244,  699 => 243,  694 => 239,  687 => 237,  682 => 236,  674 => 235,  666 => 233,  663 => 232,  660 => 231,  651 => 227,  646 => 226,  629 => 224,  626 => 223,  608 => 222,  605 => 221,  596 => 217,  591 => 216,  573 => 213,  566 => 210,  563 => 209,  560 => 208,  557 => 207,  539 => 206,  536 => 205,  527 => 201,  522 => 200,  514 => 197,  510 => 195,  507 => 194,  502 => 193,  499 => 192,  494 => 183,  475 => 179,  472 => 178,  469 => 177,  451 => 176,  448 => 175,  445 => 174,  440 => 169,  432 => 167,  429 => 166,  426 => 165,  421 => 160,  409 => 157,  406 => 155,  403 => 154,  400 => 153,  397 => 152,  394 => 151,  389 => 147,  377 => 144,  374 => 142,  371 => 141,  368 => 140,  365 => 139,  362 => 138,  357 => 133,  349 => 131,  345 => 129,  342 => 128,  339 => 127,  336 => 126,  331 => 121,  322 => 119,  308 => 118,  305 => 117,  303 => 116,  295 => 115,  288 => 113,  285 => 112,  280 => 111,  261 => 110,  258 => 109,  255 => 108,  252 => 107,  242 => 102,  239 => 101,  237 => 100,  234 => 98,  231 => 97,  228 => 96,  222 => 92,  219 => 90,  216 => 89,  214 => 88,  211 => 87,  208 => 86,  204 => 83,  199 => 80,  196 => 79,  194 => 78,  191 => 77,  188 => 76,  178 => 71,  175 => 70,  172 => 69,  170 => 68,  167 => 67,  154 => 59,  149 => 58,  146 => 57,  143 => 56,  140 => 55,  134 => 51,  131 => 50,  124 => 46,  119 => 45,  100 => 44,  91 => 43,  88 => 42,  85 => 41,  82 => 40,  79 => 39,  73 => 35,  71 => 34,  68 => 32,  65 => 31,  63 => 30,  59 => 28,  55 => 27,  51 => 26,  48 => 25,  45 => 24,  11 => 22,);
    }
}
