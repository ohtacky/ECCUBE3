<?php

/* Form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_d848214cf212f65f874e867059d2ec004f5a91f241c3500219a770d758dc8ff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_3_horizontal_layout.html.twig", "Form/bootstrap_3_horizontal_layout.html.twig", 1);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'zip_widget' => array($this, 'block_zip_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'money_widget' => array($this, 'block_money_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_errors($context, array $blocks = array())
    {
        // line 4
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 5
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ($this->getAttribute($_form_, "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 6
            echo "    <ul class=\"list-unstyled\">";
            // line 7
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_errors_);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "<p class=\"errormsg text-danger\">";
                if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_error_, "message", array())), "html", null, true);
                echo "</p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "</ul>
    ";
            // line 11
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if ($this->getAttribute($_form_, "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
    }

    // line 15
    public function block_tel_widget($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"form-group range\">";
        // line 17
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
            // line 18
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget', array("attr" => array("style" => "ime-mode: disabled;")));
            // line 19
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
        // line 21
        echo "</div>";
    }

    // line 24
    public function block_zip_widget($context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"form-group range\">";
        // line 26
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
            // line 27
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_child_, 'widget', array("attr" => array("style" => "ime-mode: disabled;")));
            // line 28
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
        // line 30
        echo "</div>";
    }

    // line 33
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 34
        echo "<div class=\"radio-inline\">
        ";
        // line 35
        $this->displayParentBlock("radio_widget", $context, $blocks);
        echo "
    </div>";
    }

    // line 39
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 40
        echo "<div class=\"checkbox-inline\">
        ";
        // line 41
        $this->displayParentBlock("checkbox_widget", $context, $blocks);
        echo "
    </div>";
    }

    // line 45
    public function block_money_widget($context, array $blocks = array())
    {
        // line 46
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        $context["attr"] = twig_array_merge($_attr_, array("class" => (($this->getAttribute($_attr_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_attr_, "class", array()), "")) : (""))));
        // line 47
        echo "    ";
        if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
        if (($this->getAttribute($_attr_, "class", array()) == "notmoney")) {
            // line 48
            echo "    <div class=\"input-group\">";
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 50
            echo "</div>
    ";
        } else {
            // line 52
            echo "        ";
            $this->displayParentBlock("money_widget", $context, $blocks);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "Form/bootstrap_3_horizontal_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 52,  207 => 50,  205 => 49,  203 => 48,  199 => 47,  196 => 46,  193 => 45,  187 => 41,  184 => 40,  181 => 39,  175 => 35,  172 => 34,  169 => 33,  165 => 30,  148 => 28,  145 => 27,  127 => 26,  125 => 25,  122 => 24,  118 => 21,  101 => 19,  98 => 18,  80 => 17,  78 => 16,  75 => 15,  65 => 11,  62 => 10,  53 => 8,  48 => 7,  46 => 6,  39 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }
}
