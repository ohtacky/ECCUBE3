<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_ff3cbe54ecf7f26c473da8499b8ce0be69fa4960533ef4d53d86ced1e3ca3c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'form_label' => array($this, 'block_form_label'),
            'form_label_class' => array($this, 'block_form_label_class'),
            'form_row' => array($this, 'block_form_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
            'submit_row' => array($this, 'block_submit_row'),
            'form_group_class' => array($this, 'block_form_group_class'),
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

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        // line 4
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context["attr"] = twig_array_merge($_attr_, array("class" => trim(((($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        if (($_label_ === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            if (isset($context["label_attr"])) { $_label_attr_ = $context["label_attr"]; } else { $_label_attr_ = null; }
            $context["label_attr"] = twig_array_merge($_label_attr_, array("class" => trim((((($this->getAttribute($_label_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_label_attr_, "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        // line 22
        echo "col-sm-2";
    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        // line 28
        ob_start();
        // line 29
        echo "    <div class=\"form-group";
        if (isset($context["compound"])) { $_compound_ = $context["compound"]; } else { $_compound_ = null; }
        if (isset($context["force_error"])) { $_force_error_ = $context["force_error"]; } else { $_force_error_ = null; }
        if (isset($context["valid"])) { $_valid_ = $context["valid"]; } else { $_valid_ = null; }
        if ((( !$_compound_ || ((array_key_exists("force_error", $context)) ? (_twig_default_filter($_force_error_, false)) : (false))) &&  !$_valid_)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 30
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label');
        echo "
        <div class=\"";
        // line 31
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 32
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        echo "
            ";
        // line 33
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 39
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 40
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
    }

    // line 43
    public function block_radio_row($context, array $blocks = array())
    {
        // line 44
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
    }

    // line 47
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        // line 48
        ob_start();
        // line 49
        echo "    <div class=\"form-group";
        if (isset($context["valid"])) { $_valid_ = $context["valid"]; } else { $_valid_ = null; }
        if ( !$_valid_) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 50
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 51
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 52
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        echo "
            ";
        // line 53
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 59
    public function block_submit_row($context, array $blocks = array())
    {
        // line 60
        ob_start();
        // line 61
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 62
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 63
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 64
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 70
    public function block_form_group_class($context, array $blocks = array())
    {
        // line 71
        echo "col-sm-10";
    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 71,  193 => 70,  183 => 64,  179 => 63,  175 => 62,  172 => 61,  170 => 60,  167 => 59,  157 => 53,  152 => 52,  148 => 51,  144 => 50,  136 => 49,  134 => 48,  131 => 47,  127 => 44,  124 => 43,  120 => 40,  117 => 39,  107 => 33,  102 => 32,  98 => 31,  93 => 30,  83 => 29,  81 => 28,  78 => 27,  74 => 22,  71 => 21,  65 => 16,  61 => 15,  55 => 13,  51 => 12,  49 => 11,  46 => 10,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
