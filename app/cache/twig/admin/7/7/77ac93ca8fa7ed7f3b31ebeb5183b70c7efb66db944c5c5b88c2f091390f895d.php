<?php

/* Customer/subnavi.twig */
class __TwigTemplate_77ac93ca8fa7ed7f3b31ebeb5183b70c7efb66db944c5c5b88c2f091390f895d extends Twig_Template
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
        echo "
            <li class=\"";
        // line 23
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 0, array(), "array") == "customer")) {
            echo "active";
        }
        echo "\">
                <a class=\"toggle\"><svg class=\"cb cb-users\"> <use xlink:href=\"#cb-users\" /></svg>会員管理<svg class=\"cb cb-angle-down\"> <use xlink:href=\"#cb-angle-down\" /></svg></a>
                <ul ";
        // line 25
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 0, array(), "array") == "customer")) {
            echo "class=\"active\" style=\"display: block;\"";
        }
        echo ">
                    <li  id=\"navi-customer-index\" class=\"";
        // line 26
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "customer_master")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_customer");
        echo "\">会員マスター</a></li>
                    <li  id=\"navi-customer-customer\" class=\"";
        // line 27
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "customer_edit")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_customer_new");
        echo "\">会員登録</a></li>
                </ul>
            </li>";
    }

    public function getTemplateName()
    {
        return "Customer/subnavi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 27,  37 => 26,  30 => 25,  22 => 23,  19 => 22,);
    }
}
