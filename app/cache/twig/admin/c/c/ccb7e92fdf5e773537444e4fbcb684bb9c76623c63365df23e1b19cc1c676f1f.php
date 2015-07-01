<?php

/* login_frame.twig */
class __TwigTemplate_ccb7e92fdf5e773537444e4fbcb684bb9c76623c63365df23e1b19cc1c676f1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
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
        // line 28
        if (isset($context["BaseInfo"])) { $_BaseInfo_ = $context["BaseInfo"]; } else { $_BaseInfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_BaseInfo_, "shop_name", array()), "html", null, true);
        echo " - EC-CUBE管理画面</title>
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"robots\" content=\"noindex,nofollow\" />
<link rel=\"icon\" href=\"";
        // line 33
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/img/favicon.ico\">
<link rel=\"stylesheet\" href=\"";
        // line 34
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"";
        // line 35
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/css/dashboard.css\">
<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
</head>
<body id=\"login-page\">
<!--{\$GLOBAL_ERR}-->
<noscript>
    <p>JavaScript を有効にしてご利用下さい.</p>
</noscript>
<div id=\"wrapper\">
    ";
        // line 47
        $this->displayBlock('main', $context, $blocks);
        // line 48
        echo "</div>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 52
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery-1.11.3.min.js\"><\\/script>')</script>
<script src=\"";
        // line 53
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/bootstrap.min.js\"></script>
<script src=\"";
        // line 54
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/ie10-viewport-bug-workaround.js\"></script>
<script src=\"";
        // line 55
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/function.js\"></script>
<script>
\$(function () {
    \$.ajax({
        url: '";
        // line 59
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
        // line 68
        $this->displayBlock('javascript', $context, $blocks);
        // line 69
        echo "</body>
</html>
";
    }

    // line 47
    public function block_main($context, array $blocks = array())
    {
    }

    // line 68
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "login_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 68,  118 => 47,  112 => 69,  110 => 68,  97 => 59,  89 => 55,  84 => 54,  79 => 53,  74 => 52,  68 => 48,  66 => 47,  50 => 35,  45 => 34,  40 => 33,  31 => 28,  24 => 23,  21 => 1,);
    }
}
