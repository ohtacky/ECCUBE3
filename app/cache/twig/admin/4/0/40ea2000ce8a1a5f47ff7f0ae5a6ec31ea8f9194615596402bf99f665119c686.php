<?php

/* default_frame.twig */
class __TwigTemplate_40ea2000ce8a1a5f47ff7f0ae5a6ec31ea8f9194615596402bf99f665119c686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'main' => array($this, 'block_main'),
            'modal' => array($this, 'block_modal'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
";
        // line 23
        echo "<html lang=\"ja\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 27
        if (isset($context["BaseInfo"])) { $_BaseInfo_ = $context["BaseInfo"]; } else { $_BaseInfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_BaseInfo_, "shop_name", array()), "html", null, true);
        echo " - EC-CUBE管理画面</title>
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"icon\" href=\"";
        // line 31
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/img/favicon.ico\">
<link rel=\"stylesheet\" href=\"";
        // line 32
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"";
        // line 33
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/dashboard.css\">
";
        // line 34
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 35
        echo "<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
</head>
<body>
<div id=\"wrapper\" class=\"sidebar-open\">
    <!-- ▼ #header ▼ -->
    <header id=\"header\" role=\"navigation\">
        <div class=\"navbar navbar-static-top\">
            <div class=\"logo\" href=\"./\"><img src=\"";
        // line 45
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/img/logo.png\" width=\"172\"></div>
            <!-- Sidebar toggle button-->

            <div class=\"bt_toggle\">
                <a role=\"button\" data-toggle=\"offcanvas\" class=\"bt_drawermenu\" href=\"#\"> <span class=\"sr-only\">Toggle navigation</span>
                    <svg class=\"cb cb-bars\">
                        <use xlink:href=\"#cb-bars\"/>
                    </svg>
                </a>
            </div>
            <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\" id=\"sitename\" target=\"_blank\">";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "shop_name", array()), "html", null, true);
        echo "<span class=\"cb cb-external-link\"></span></a>
            <!-- Navbar Right Menu -->
            <div class=\"navbar-menu\">
                <dl class=\"dropdown\">
                    ";
        // line 59
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 60
            echo "                        <dt class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <svg class=\"cb cb-user-circle\">
                                <use xlink:href=\"#cb-user-circle\" />
                            </svg>
                            <span class=\"hidden-xs\">";
            // line 64
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user", array()), "name", array()), "html", null, true);
            echo " 様</span>
                            <svg class=\"cb cb-angle-down icon_down\">
                                <use xlink:href=\"#cb-angle-down\" />
                            </svg>
                        </dt>
                        <dd class=\"dropdown-menu\">
                            最終ログイン<br>
                            ";
            // line 71
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "user", array(), "any", false, true), "login_date", array(), "any", false, true), "format", array(0 => "Y/m/d H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "user", array(), "any", false, true), "login_date", array(), "any", false, true), "format", array(0 => "Y/m/d H:i"), "method"), "")) : ("")), "html", null, true);
            echo " <a class=\"btn btn-primary btn-xs\" href=\"";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo $this->env->getExtension('routing')->getUrl(($this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_route", array()) . "_logout"));
            echo "\">ログアウト</a>
                        </dd>
                    ";
        }
        // line 74
        echo "                </dl>
            </div>
        </div>
    </header>
    <!-- ▲ #header ▲ -->
    <!-- ▼ #side ▼ -->
    <aside id=\"side\">
        <ul class=\"nav nav-sidebar\">
            <li>
                <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getUrl("admin_homepage");
        echo "\">
                    <svg class=\"cb cb-home\"><use xlink:href=\"#cb-home\" /></svg>ホーム<svg class=\"cb cb-angle-down\"><use xlink:href=\"#cb-angle-down\" /></svg>
                </a>
            </li>
            ";
        // line 87
        echo twig_include($this->env, $context, "Product/subnavi.twig");
        echo "
            ";
        // line 88
        echo twig_include($this->env, $context, "Order/subnavi.twig");
        echo "
            ";
        // line 89
        echo twig_include($this->env, $context, "Customer/subnavi.twig");
        echo "
            ";
        // line 90
        echo twig_include($this->env, $context, "Content/subnavi.twig");
        echo "
            ";
        // line 91
        echo twig_include($this->env, $context, "Setting/subnavi.twig");
        echo "
        </ul>
    </aside>
    <!-- ▲ #side ▲ -->
    <!-- ▼ #main ▼ -->
    <div id=\"main\">
        <h1 class=\"page-header\">";
        // line 97
        $this->displayBlock("title", $context, $blocks);
        echo "<span>";
        $this->displayBlock("sub_title", $context, $blocks);
        echo "</span></h1>

        <div class=\"container-fluid\">

            ";
        // line 101
        echo twig_include($this->env, $context, "alert.twig");
        echo "

            ";
        // line 103
        $this->displayBlock('main', $context, $blocks);
        // line 104
        echo "
        </div>
    </div>
    <!-- ▲ #main ▲ -->

    <!-- ▼ #modal ▼ -->
    ";
        // line 110
        $this->displayBlock('modal', $context, $blocks);
        // line 111
        echo "    <!-- ▲ #modal ▲ -->

</div>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 116
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery-1.11.3.min.js\"><\\/script>')</script>
<script src=\"";
        // line 117
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/bootstrap.min.js\"></script>
<script src=\"";
        // line 118
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/ie10-viewport-bug-workaround.js\"></script>
<script src=\"";
        // line 119
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/function.js\"></script>
<script>
\$(function () {
    \$.ajax({
        url: '";
        // line 123
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/img/svg.html',
        type: 'GET',
        dataType: 'html',
    }).done(function(data){
        \$('body').prepend(data);
    }).fail(function(data){
    });
});
</script>
";
        // line 132
        $this->displayBlock('javascript', $context, $blocks);
        // line 133
        echo "</body>
</html>
";
    }

    // line 34
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 103
    public function block_main($context, array $blocks = array())
    {
    }

    // line 110
    public function block_modal($context, array $blocks = array())
    {
    }

    // line 132
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "default_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 132,  252 => 110,  247 => 103,  242 => 34,  236 => 133,  234 => 132,  221 => 123,  213 => 119,  208 => 118,  203 => 117,  198 => 116,  191 => 111,  189 => 110,  181 => 104,  179 => 103,  174 => 101,  165 => 97,  156 => 91,  152 => 90,  148 => 89,  144 => 88,  140 => 87,  133 => 83,  122 => 74,  112 => 71,  101 => 64,  95 => 60,  93 => 59,  83 => 55,  69 => 45,  57 => 35,  55 => 34,  50 => 33,  45 => 32,  40 => 31,  32 => 27,  26 => 23,  23 => 1,);
    }
}
