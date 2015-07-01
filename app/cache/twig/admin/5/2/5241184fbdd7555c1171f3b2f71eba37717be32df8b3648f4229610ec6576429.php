<?php

/* Order/subnavi.twig */
class __TwigTemplate_5241184fbdd7555c1171f3b2f71eba37717be32df8b3648f4229610ec6576429 extends Twig_Template
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
        echo "            <li class=\"";
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 0, array(), "array") == "order")) {
            echo "active";
        }
        echo "\">
                <a class=\"toggle\"><svg class=\"cb cb-shopping-cart\"> <use xlink:href=\"#cb-shopping-cart\" /></svg>受注管理<svg class=\"cb cb-angle-down\"> <use xlink:href=\"#cb-angle-down\" /></svg></a>
                <ul ";
        // line 24
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 0, array(), "array") == "order")) {
            echo "class=\"active\" style=\"display: block;\"";
        }
        echo ">
                    <li id=\"navi-order-index\" class=\"";
        // line 25
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "order_master")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_order");
        echo "\">受注マスター</a></li>
                    <li id=\"navi-order-add\" class=\"";
        // line 26
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "order_edit")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_order_new");
        echo "\">受注登録</a></li>
                </ul>
            </li>";
    }

    public function getTemplateName()
    {
        return "Order/subnavi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 26,  35 => 25,  28 => 24,  19 => 22,);
    }
}
