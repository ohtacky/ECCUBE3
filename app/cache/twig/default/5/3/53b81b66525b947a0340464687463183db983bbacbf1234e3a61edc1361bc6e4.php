<?php

/* Block/logo.twig */
class __TwigTemplate_53b81b66525b947a0340464687463183db983bbacbf1234e3a61edc1361bc6e4 extends Twig_Template
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
        echo "             <div class=\"header_logo_area\">
                <p class=\"copy\">くらしを楽しむライフスタイルグッズ</p>
                <h1 class=\"header_logo\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\">";
        if (isset($context["BaseInfo"])) { $_BaseInfo_ = $context["BaseInfo"]; } else { $_BaseInfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_BaseInfo_, "shop_name", array()), "html", null, true);
        echo "</a></h1>
            </div>
";
    }

    public function getTemplateName()
    {
        return "Block/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 24,  19 => 22,);
    }
}
