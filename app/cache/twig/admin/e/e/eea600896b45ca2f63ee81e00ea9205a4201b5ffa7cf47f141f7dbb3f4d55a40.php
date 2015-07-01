<?php

/* form_table_layout.html.twig */
class __TwigTemplate_eea600896b45ca2f63ee81e00ea9205a4201b5ffa7cf47f141f7dbb3f4d55a40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        echo "<tr>
        <td>";
        // line 6
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        // line 10
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        // line 11
        echo "</td>
    </tr>";
    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        // line 20
        echo "</td>
    </tr>";
    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'widget');
        // line 28
        echo "</td>
    </tr>";
    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_test_empty($this->getAttribute($_form_, "parent", array())) && (twig_length_filter($this->env, $_errors_) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        // line 43
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 43,  120 => 42,  118 => 41,  114 => 38,  111 => 37,  108 => 35,  104 => 34,  100 => 33,  97 => 32,  92 => 28,  89 => 27,  86 => 25,  83 => 24,  78 => 20,  75 => 19,  71 => 16,  68 => 15,  63 => 11,  60 => 10,  57 => 9,  54 => 7,  51 => 6,  48 => 4,  45 => 3,  41 => 32,  39 => 24,  37 => 15,  35 => 3,  14 => 1,);
    }
}
