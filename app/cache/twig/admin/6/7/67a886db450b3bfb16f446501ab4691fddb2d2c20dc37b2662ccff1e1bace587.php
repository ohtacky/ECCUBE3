<?php

/* Product/subnavi.twig */
class __TwigTemplate_67a886db450b3bfb16f446501ab4691fddb2d2c20dc37b2662ccff1e1bace587 extends Twig_Template
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
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 0, array(), "array") == "product")) {
            echo "active";
        }
        echo "\">
                <a class=\"toggle\"><svg class=\"cb cb-tag\"> <use xlink:href=\"#cb-tag\" /></svg>商品管理<svg class=\"cb cb-angle-down\"> <use xlink:href=\"#cb-angle-down\" /></svg></a>
                <ul ";
        // line 24
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 0, array(), "array") == "product")) {
            echo "class=\"active\" style=\"display: block;\"";
        }
        echo ">
                    <li id=\"navi-products-index\" class=\"";
        // line 25
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "product_master")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_product");
        echo "\">商品マスター</a></li>
                    <li id=\"navi-products-product\" class=\"";
        // line 26
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "product_edit")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_product_product_new");
        echo "\">商品登録</a></li>
                    <li id=\"navi-products-class\" class=\"";
        // line 27
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "class_name")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_product_class_name");
        echo "\">規格管理</a></li>
                    <li id=\"navi-products-category\" class=\"";
        // line 28
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "class_category")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_product_category");
        echo "\">カテゴリ登録</a></li>
                </ul>
            </li>";
    }

    public function getTemplateName()
    {
        return "Product/subnavi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 28,  53 => 27,  44 => 26,  35 => 25,  28 => 24,  19 => 22,);
    }
}
