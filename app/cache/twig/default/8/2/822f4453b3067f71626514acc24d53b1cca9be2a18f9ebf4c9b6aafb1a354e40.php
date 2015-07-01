<?php

/* Block/search_product.twig */
class __TwigTemplate_822f4453b3067f71626514acc24d53b1cca9be2a18f9ebf4c9b6aafb1a354e40 extends Twig_Template
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
        // line 22
        echo "\t\t\t<div class=\"drawer_block pc header_bottom_area\">
                <div id=\"search\" class=\"search\">
                    <form method=\"get\" id=\"searchform\" action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("product_list");
        echo "\">
                        <div class=\"search_inner\">
                            ";
        // line 26
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "category_id", array()), 'widget');
        echo "
                            <div class=\"input_search clearfix\">
                                ";
        // line 28
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "name", array()), 'widget', array("attr" => array("placeholder" => "キーワードを入力")));
        echo "
                                <button type=\"submit\" class=\"bt_search\"><svg class=\"cb cb-search\"><use xlink:href=\"#cb-search\" /></svg></button>
                            </div>
                        </div>
                    </form>
                </div>
\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "Block/search_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 28,  28 => 26,  23 => 24,  19 => 22,);
    }
}
