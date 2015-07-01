<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_0bc6597b880a97de9e3a27ad72ad0734dedf6b6f80eac2531fb2acdf553aeda0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 136
        echo "
";
        // line 138
        echo "
";
        // line 139
        $this->displayBlock('form_label', $context, $blocks);
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('choice_label', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('radio_label', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 176
        echo "
";
        // line 178
        echo "
";
        // line 179
        $this->displayBlock('form_row', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('button_row', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('choice_row', $context, $blocks);
        // line 197
        echo "
";
        // line 198
        $this->displayBlock('date_row', $context, $blocks);
        // line 202
        echo "
";
        // line 203
        $this->displayBlock('time_row', $context, $blocks);
        // line 207
        echo "
";
        // line 208
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 212
        echo "
";
        // line 213
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('radio_row', $context, $blocks);
        // line 226
        echo "
";
        // line 228
        echo "
";
        // line 229
        $this->displayBlock('form_errors', $context, $blocks);
    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 6
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (( !array_key_exists("type", $context) || ("file" != $_type_))) {
            // line 7
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => trim(((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 13
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context["attr"] = twig_array_merge($_attr_, array("class" => trim(((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        // line 18
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context["attr"] = twig_array_merge($_attr_, array("class" => trim(((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        if (isset($context["money_pattern"])) { $_money_pattern_ = $context["money_pattern"]; } else { $_money_pattern_ = null; }
        $context["prepend"] = ("{{" == twig_slice($this->env, $_money_pattern_, 0, 2));
        // line 25
        echo "        ";
        if (isset($context["prepend"])) { $_prepend_ = $context["prepend"]; } else { $_prepend_ = null; }
        if ( !$_prepend_) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            if (isset($context["money_pattern"])) { $_money_pattern_ = $context["money_pattern"]; } else { $_money_pattern_ = null; }
            echo twig_escape_filter($this->env, strtr($_money_pattern_, array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (isset($context["prepend"])) { $_prepend_ = $context["prepend"]; } else { $_prepend_ = null; }
        if ($_prepend_) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            if (isset($context["money_pattern"])) { $_money_pattern_ = $context["money_pattern"]; } else { $_money_pattern_ = null; }
            echo twig_escape_filter($this->env, strtr($_money_pattern_, array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 43
        if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
        if (($_widget_ == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => trim(((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "date", array()), 'errors');
            // line 49
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "time", array()), 'errors');
            // line 50
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "date", array()), 'widget', array("datetime" => true));
            // line 51
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        // line 57
        if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
        if (($_widget_ == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => trim(((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (isset($context["datetime"])) { $_datetime_ = $context["datetime"]; } else { $_datetime_ = null; }
            if (( !array_key_exists("datetime", $context) ||  !$_datetime_)) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            if (isset($context["date_pattern"])) { $_date_pattern_ = $context["date_pattern"]; } else { $_date_pattern_ = null; }
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo strtr($_date_pattern_, array("{{ year }}" =>             // line 65
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "day", array()), 'widget')));
            // line 69
            if (isset($context["datetime"])) { $_datetime_ = $context["datetime"]; } else { $_datetime_ = null; }
            if (( !array_key_exists("datetime", $context) ||  !$_datetime_)) {
                // line 70
                echo "</div>";
            }
        }
    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        // line 76
        if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
        if (($_widget_ == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            $context["attr"] = twig_array_merge($_attr_, array("class" => trim(((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (isset($context["datetime"])) { $_datetime_ = $context["datetime"]; } else { $_datetime_ = null; }
            if (( !array_key_exists("datetime", $context) || (false == $_datetime_))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "hour", array()), 'widget');
            echo ":";
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "minute", array()), 'widget');
            if (isset($context["with_seconds"])) { $_with_seconds_ = $context["with_seconds"]; } else { $_with_seconds_ = null; }
            if ($_with_seconds_) {
                echo ":";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (isset($context["datetime"])) { $_datetime_ = $context["datetime"]; } else { $_datetime_ = null; }
            if (( !array_key_exists("datetime", $context) || (false == $_datetime_))) {
                // line 85
                echo "</div>";
            }
        }
    }

    // line 90
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 91
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context["attr"] = twig_array_merge($_attr_, array("class" => trim(((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : ("")) . " form-control"))));
        // line 92
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 95
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 96
        if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
        if (twig_in_filter("-inline", (($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class", array()), "")) : ("")))) {
            // line 97
            echo "<div class=\"control-group\">";
            // line 98
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_form_);
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget', array("parent_label_class" => (($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "</div>";
        } else {
            // line 105
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 106
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_form_);
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 107
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget', array("parent_label_class" => (($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "</div>";
        }
    }

    // line 115
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 116
        if (isset($context["parent_label_class"])) { $_parent_label_class_ = $context["parent_label_class"]; } else { $_parent_label_class_ = null; }
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter($_parent_label_class_, "")) : (""));
        // line 117
        if (isset($context["parent_label_class"])) { $_parent_label_class_ = $context["parent_label_class"]; } else { $_parent_label_class_ = null; }
        if (twig_in_filter("checkbox-inline", $_parent_label_class_)) {
            // line 118
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 120
            echo "<div class=\"checkbox\">";
            // line 121
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 122
            echo "</div>";
        }
    }

    // line 126
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 127
        if (isset($context["parent_label_class"])) { $_parent_label_class_ = $context["parent_label_class"]; } else { $_parent_label_class_ = null; }
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter($_parent_label_class_, "")) : (""));
        // line 128
        if (isset($context["parent_label_class"])) { $_parent_label_class_ = $context["parent_label_class"]; } else { $_parent_label_class_ = null; }
        if (twig_in_filter("radio-inline", $_parent_label_class_)) {
            // line 129
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 131
            echo "<div class=\"radio\">";
            // line 132
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 133
            echo "</div>";
        }
    }

    // line 139
    public function block_form_label($context, array $blocks = array())
    {
        // line 140
        if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
        $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => trim(((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class", array()), "")) : ("")) . " control-label"))));
        // line 141
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 144
    public function block_choice_label($context, array $blocks = array())
    {
        // line 146
        if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
        $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => trim(strtr((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 147
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 150
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 151
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 154
    public function block_radio_label($context, array $blocks = array())
    {
        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 158
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 159
        echo "    ";
        // line 160
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 161
            echo "        ";
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if ($_required_) {
                // line 162
                echo "            ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => trim(((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class", array()), "")) : ("")) . " required"))));
                // line 163
                echo "        ";
            }
            // line 164
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 165
                echo "            ";
                if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
                if (isset($context["parent_label_class"])) { $_parent_label_class_ = $context["parent_label_class"]; } else { $_parent_label_class_ = null; }
                $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => trim((((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class", array()), "")) : ("")) . " ") . $_parent_label_class_))));
                // line 166
                echo "        ";
            }
            // line 167
            echo "        ";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (( !($_label_ === false) && twig_test_empty($_label_))) {
                // line 168
                echo "            ";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                $context["label"] = $this->env->getExtension('form')->humanize($_name_);
                // line 169
                echo "        ";
            }
            // line 170
            echo "        <label";
            if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_label_attr_);
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                if (isset($context["attrname"])) { $_attrname_ = $context["attrname"]; } else { $_attrname_ = null; }
                echo twig_escape_filter($this->env, $_attrname_, "html", null, true);
                echo "=\"";
                if (isset($context["attrvalue"])) { $_attrvalue_ = $context["attrvalue"]; } else { $_attrvalue_ = null; }
                echo twig_escape_filter($this->env, $_attrvalue_, "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 171
            if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
            echo $_widget_;
            // line 172
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            if (isset($context["translation_domain"])) { $_translation_domain_ = $context["translation_domain"]; } else { $_translation_domain_ = null; }
            echo twig_escape_filter($this->env, (( !($_label_ === false)) ? ($this->env->getExtension('translator')->trans($_label_, array(), $_translation_domain_)) : ("")), "html", null, true);
            // line 173
            echo "</label>
    ";
        }
    }

    // line 179
    public function block_form_row($context, array $blocks = array())
    {
        // line 180
        echo "<div class=\"form-group";
        if (isset($context["compound"])) { $_compound_ = $context["compound"]; } else { $_compound_ = null; }
        if (isset($context["force_error"])) { $_force_error_ = $context["force_error"]; } else { $_force_error_ = null; }
        if (isset($context["valid"])) { $_valid_ = $context["valid"]; } else { $_valid_ = null; }
        if ((( !$_compound_ || ((array_key_exists("force_error", $context)) ? (_twig_default_filter($_force_error_, false)) : (false))) &&  !$_valid_)) {
            echo " has-error";
        }
        echo "\">";
        // line 181
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label');
        // line 182
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        // line 183
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        // line 184
        echo "</div>";
    }

    // line 187
    public function block_button_row($context, array $blocks = array())
    {
        // line 188
        echo "<div class=\"form-group\">";
        // line 189
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        // line 190
        echo "</div>";
    }

    // line 193
    public function block_choice_row($context, array $blocks = array())
    {
        // line 194
        $context["force_error"] = true;
        // line 195
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 198
    public function block_date_row($context, array $blocks = array())
    {
        // line 199
        $context["force_error"] = true;
        // line 200
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 203
    public function block_time_row($context, array $blocks = array())
    {
        // line 204
        $context["force_error"] = true;
        // line 205
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 208
    public function block_datetime_row($context, array $blocks = array())
    {
        // line 209
        $context["force_error"] = true;
        // line 210
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 213
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 214
        echo "<div class=\"form-group";
        if (isset($context["valid"])) { $_valid_ = $context["valid"]; } else { $_valid_ = null; }
        if ( !$_valid_) {
            echo " has-error";
        }
        echo "\">";
        // line 215
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        // line 216
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        // line 217
        echo "</div>";
    }

    // line 220
    public function block_radio_row($context, array $blocks = array())
    {
        // line 221
        echo "<div class=\"form-group";
        if (isset($context["valid"])) { $_valid_ = $context["valid"]; } else { $_valid_ = null; }
        if ( !$_valid_) {
            echo " has-error";
        }
        echo "\">";
        // line 222
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        // line 223
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        // line 224
        echo "</div>";
    }

    // line 229
    public function block_form_errors($context, array $blocks = array())
    {
        // line 230
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 231
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ($this->getAttribute($_form_, "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 232
            echo "    <ul class=\"list-unstyled\">";
            // line 233
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_errors_);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 234
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_error_, "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            echo "</ul>
    ";
            // line 237
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ($this->getAttribute($_form_, "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  747 => 237,  744 => 236,  735 => 234,  730 => 233,  728 => 232,  721 => 231,  718 => 230,  715 => 229,  711 => 224,  708 => 223,  705 => 222,  698 => 221,  695 => 220,  691 => 217,  688 => 216,  685 => 215,  678 => 214,  675 => 213,  671 => 210,  669 => 209,  666 => 208,  662 => 205,  660 => 204,  657 => 203,  653 => 200,  651 => 199,  648 => 198,  644 => 195,  642 => 194,  639 => 193,  635 => 190,  632 => 189,  630 => 188,  627 => 187,  623 => 184,  620 => 183,  617 => 182,  614 => 181,  605 => 180,  602 => 179,  596 => 173,  592 => 172,  589 => 171,  571 => 170,  568 => 169,  564 => 168,  560 => 167,  557 => 166,  552 => 165,  549 => 164,  546 => 163,  542 => 162,  538 => 161,  535 => 160,  533 => 159,  530 => 158,  526 => 155,  523 => 154,  519 => 151,  516 => 150,  512 => 147,  509 => 146,  506 => 144,  502 => 141,  499 => 140,  496 => 139,  491 => 133,  488 => 132,  486 => 131,  482 => 129,  479 => 128,  476 => 127,  473 => 126,  468 => 122,  465 => 121,  463 => 120,  459 => 118,  456 => 117,  453 => 116,  450 => 115,  445 => 111,  437 => 107,  432 => 106,  428 => 105,  425 => 103,  417 => 99,  412 => 98,  410 => 97,  407 => 96,  404 => 95,  400 => 92,  397 => 91,  394 => 90,  388 => 85,  384 => 84,  372 => 83,  367 => 81,  364 => 80,  361 => 79,  358 => 77,  355 => 76,  352 => 75,  346 => 70,  343 => 69,  341 => 67,  340 => 66,  339 => 65,  336 => 64,  331 => 62,  328 => 61,  325 => 60,  322 => 58,  319 => 57,  316 => 56,  311 => 52,  308 => 51,  305 => 50,  302 => 49,  299 => 48,  295 => 47,  292 => 46,  289 => 44,  286 => 43,  283 => 42,  278 => 38,  276 => 37,  274 => 36,  271 => 35,  267 => 32,  260 => 30,  257 => 29,  255 => 28,  248 => 26,  244 => 25,  241 => 24,  238 => 23,  235 => 22,  231 => 19,  228 => 18,  225 => 17,  221 => 14,  218 => 13,  215 => 12,  211 => 9,  207 => 7,  204 => 6,  201 => 5,  197 => 229,  194 => 228,  191 => 226,  189 => 220,  186 => 219,  184 => 213,  181 => 212,  179 => 208,  176 => 207,  174 => 203,  171 => 202,  169 => 198,  166 => 197,  164 => 193,  161 => 192,  159 => 187,  156 => 186,  154 => 179,  151 => 178,  148 => 176,  146 => 158,  143 => 157,  141 => 154,  138 => 153,  136 => 150,  133 => 149,  131 => 144,  128 => 143,  126 => 139,  123 => 138,  120 => 136,  118 => 126,  115 => 125,  113 => 115,  110 => 114,  108 => 95,  105 => 94,  103 => 90,  100 => 89,  98 => 75,  95 => 74,  93 => 56,  90 => 55,  88 => 42,  85 => 41,  83 => 35,  80 => 34,  78 => 22,  75 => 21,  73 => 17,  70 => 16,  68 => 12,  65 => 11,  63 => 5,  60 => 4,  57 => 2,  14 => 1,);
    }
}
