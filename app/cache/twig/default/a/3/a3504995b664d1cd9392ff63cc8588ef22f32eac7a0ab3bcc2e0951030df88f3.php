<?php

/* Block/footer.twig */
class __TwigTemplate_a3504995b664d1cd9392ff63cc8588ef22f32eac7a0ab3bcc2e0951030df88f3 extends Twig_Template
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
        echo "<div class=\"container-fluid inner\">
    <ul>
        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getUrl("help_about");
        echo "\">当サイトについて</a></li>
        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getUrl("help_privacy");
        echo "\">プライバシーポリシー</a></li>
        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getUrl("help_tradelaw");
        echo "\">特定商取引法に関する法律について</a></li>
        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getUrl("contact");
        echo "\">お問い合わせ</a></li>
    </ul>
    <div class=\"footer_logo_area\">
        <p class=\"logo\"><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\">";
        if (isset($context["BaseInfo"])) { $_BaseInfo_ = $context["BaseInfo"]; } else { $_BaseInfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_BaseInfo_, "shop_name", array()), "html", null, true);
        echo "</a></p>
        <p class=\"copyright\">
            <small>copyright (c) ";
        // line 32
        if (isset($context["BaseInfo"])) { $_BaseInfo_ = $context["BaseInfo"]; } else { $_BaseInfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_BaseInfo_, "shop_name", array()), "html", null, true);
        echo " all rights reserved.</small>
        </p>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "Block/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 32,  41 => 30,  35 => 27,  31 => 26,  27 => 25,  23 => 24,  19 => 22,);
    }
}
