<?php

/* Setting/subnavi.twig */
class __TwigTemplate_67a4fd7be16d2c5ae0cc3ccbec358ed306db7e5980339446ca8f5db347cedb61 extends Twig_Template
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
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 0, array(), "array") == "setting")) {
            echo "active";
        }
        echo "\">
                <a class=\"toggle\"><svg class=\"cb cb-cog\"> <use xlink:href=\"#cb-cog\" /></svg>設定<svg class=\"cb cb-angle-down\"> <use xlink:href=\"#cb-angle-down\" /></svg></a>
                <ul ";
        // line 25
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 0, array(), "array") == "setting")) {
            echo "class=\"active\" style=\"display: block;\"";
        }
        echo ">
                    <li class=\"";
        // line 26
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "shop")) {
            echo "active";
        }
        echo "\">
                        <a class=\"toggle\">基本情報設定<svg class=\"cb cb-angle-down\"> <use xlink:href=\"#cb-angle-down\" /></svg></a>
                        <ul ";
        // line 28
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "shop")) {
            echo "class=\"active\" style=\"display: block;\"";
        }
        echo ">
                            <li id=\"navi-basis-index\" class=\"";
        // line 29
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 2, array(), "array") == "shop_index")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_setting_shop");
        echo "\">SHOPマスター</a></li>
                            <li id=\"navi-basis-tradelaw\" class=\"";
        // line 30
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 2, array(), "array") == "tradelaw")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_setting_shop_tradelaw");
        echo "\">特定商取引法</a></li>
                            <li id=\"navi-basis-customer-agreement\" class=\"";
        // line 31
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 2, array(), "array") == "customer_agreement")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_setting_shop_customer_agreement");
        echo "\">会員規約設定</a></li>
                            <li id=\"navi-basis-payment\" class=\"";
        // line 32
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 2, array(), "array") == "shop_payment")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_setting_shop_payment");
        echo "\">支払方法設定</a></li>
                            <li id=\"navi-basis-delivery\" class=\"";
        // line 33
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 2, array(), "array") == "shop_delivery")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_setting_shop_delivery");
        echo "\">配送方法設定</a></li>
                            <li id=\"navi-basis-tax\" class=\"";
        // line 34
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 2, array(), "array") == "shop_tax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_setting_shop_tax");
        echo "\">税率設定</a></li>
                            <li id=\"navi-basis-mail\" class=\"";
        // line 35
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 2, array(), "array") == "shop_mail")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_setting_shop_mail");
        echo "\">メール設定</a></li>
                        </ul>
                    </li>
                    <li class=\"";
        // line 38
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "ownersstore")) {
            echo "active";
        }
        echo "\">
                        <a class=\"toggle\">オーナーズストア<svg class=\"cb cb-angle-down\"> <use xlink:href=\"#cb-angle-down\" /></svg></a>
                        <ul ";
        // line 40
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "ownersstore")) {
            echo "class=\"active\" style=\"display: block;\"";
        }
        echo ">

                            <li id=\"navi-ownersstore-plugininstall\" class=\"";
        // line 42
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 2, array(), "array") == "plugin")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_setting_system_plugin_index");
        echo "\">プラグイン一覧</a></li>
                            <li id=\"navi-ownersstore-plugininstall\" class=\"";
        // line 43
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 2, array(), "array") == "plugininstall")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_setting_system_plugin_install");
        echo "\">プラグインインストール</a></li>
                            <li id=\"navi-ownersstore-pluginhandler\" class=\"";
        // line 44
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 2, array(), "array") == "pluginhandler")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_setting_system_plugin_handler");
        echo "\">プラグインハンドラ設定</a></li>

                            <li id=\"navi-ownersstore-template\" class=\"";
        // line 46
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 2, array(), "array") == "template")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_content_template");
        echo "\">テンプレート</a></li>

                        </ul>
                    </li>
                    <li class=\"";
        // line 50
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "system")) {
            echo "active";
        }
        echo "\">
                        <a class=\"toggle\">システム設定<svg class=\"cb cb-angle-down\"> <use xlink:href=\"#cb-angle-down\" /></svg></a>
                        <ul ";
        // line 52
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 1, array(), "array") == "system")) {
            echo "class=\"active\" style=\"display: block;\"";
        }
        echo ">
                            <li id=\"navi-system-system\" class=\"";
        // line 53
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 2, array(), "array") == "system_index")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_setting_system_system");
        echo "\">システム情報</a></li>
                            <li id=\"navi-system-index\" class=\"";
        // line 54
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 2, array(), "array") == "member")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_setting_system_member");
        echo "\">メンバー管理</a></li>
                            ";
        // line 56
        echo "                            ";
        // line 57
        echo "                            <li id=\"navi-system-security\" class=\"";
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        if (($this->getAttribute($this->env->getExtension('eccube')->getActiveMenus($_menus_), 2, array(), "array") == "security")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_setting_system_security");
        echo "\">セキュリティ管理</a></li>
                            ";
        // line 59
        echo "                        </ul>
                    </li>
                </ul>
            </li>
";
    }

    public function getTemplateName()
    {
        return "Setting/subnavi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 59,  208 => 57,  206 => 56,  197 => 54,  188 => 53,  181 => 52,  173 => 50,  161 => 46,  151 => 44,  142 => 43,  133 => 42,  125 => 40,  117 => 38,  106 => 35,  97 => 34,  88 => 33,  79 => 32,  70 => 31,  61 => 30,  52 => 29,  45 => 28,  37 => 26,  30 => 25,  22 => 23,  19 => 22,);
    }
}
