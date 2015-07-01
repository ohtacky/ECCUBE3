<?php

/* Content/subnavi.twig */
class __TwigTemplate_e13b108d4c18b6e298d9d890f4c35a5c421265145e7eeecfa70755a1cc3937da extends Twig_Template
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
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 0, array(), "array") == "content")) {
            echo "active";
        }
        echo "\">
                <a class=\"toggle\"><svg class=\"cb cb-file-text\"> <use xlink:href=\"#cb-file-text\" /></svg>コンテンツ管理<svg class=\"cb cb-angle-down\"> <use xlink:href=\"#cb-angle-down\" /></svg></a>
                <ul ";
        // line 24
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 0, array(), "array") == "content")) {
            echo "class=\"active\" style=\"display: block;\"";
        }
        echo ">
                    <li id=\"navi-contents-index\" class=\"";
        // line 25
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "news")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_content");
        echo "\">新着情報管理</a></li>
                    <li id=\"navi-contents-file\" class=\"";
        // line 26
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "file")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_content_file");
        echo "\">ファイル管理</a></li>
                    <li id=\"navi-contents-page\" class=\"";
        // line 27
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "page")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_content_page");
        echo "\">ページ管理</a></li>
                    <li id=\"navi-contents-block\" class=\"";
        // line 28
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "block")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_content_block");
        echo "\">ブロック管理</a></li>
                </ul>
            </li>";
    }

    public function getTemplateName()
    {
        return "Content/subnavi.twig";
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
