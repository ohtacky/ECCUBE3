<?php

/* default_frame.twig */
class __TwigTemplate_a8d4c6734a1c5bf30238c35869331e6214a4ac8a503d57789a14736121cbccd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
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
        // line 27
        if (isset($context["BaseInfo"])) { $_BaseInfo_ = $context["BaseInfo"]; } else { $_BaseInfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_BaseInfo_, "shop_name", array()), "html", null, true);
        if (isset($context["subtitle"])) { $_subtitle_ = $context["subtitle"]; } else { $_subtitle_ = null; }
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if ((array_key_exists("subtitle", $context) &&  !twig_test_empty($_subtitle_))) {
            echo " / ";
            if (isset($context["subtitle"])) { $_subtitle_ = $context["subtitle"]; } else { $_subtitle_ = null; }
            echo twig_escape_filter($this->env, $_subtitle_, "html", null, true);
        } elseif ((array_key_exists("title", $context) &&  !twig_test_empty($_title_))) {
            echo " / ";
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo twig_escape_filter($this->env, $_title_, "html", null, true);
        }
        echo "</title>
";
        // line 28
        if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
        if ( !twig_test_empty($this->getAttribute($_PageLayout_, "author", array()))) {
            // line 29
            echo "    <meta name=\"author\" content=\"";
            if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_PageLayout_, "author", array()), "html", null, true);
            echo "\">
";
        }
        // line 31
        if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
        if ( !twig_test_empty($this->getAttribute($_PageLayout_, "description", array()))) {
            // line 32
            echo "    <meta name=\"description\" content=\"";
            if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_PageLayout_, "description", array()), "html", null, true);
            echo "\">
";
        }
        // line 34
        if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
        if ( !twig_test_empty($this->getAttribute($_PageLayout_, "keyword", array()))) {
            // line 35
            echo "    <meta name=\"keywords\" content=\"";
            if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_PageLayout_, "keyword", array()), "html", null, true);
            echo "\">
";
        }
        // line 37
        if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
        if ( !twig_test_empty($this->getAttribute($_PageLayout_, "meta_robots", array()))) {
            // line 38
            echo "    <meta name=\"robots\" content=\"";
            if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_PageLayout_, "meta_robots", array()), "html", null, true);
            echo "\">
";
        }
        // line 40
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"icon\" href=\"";
        // line 41
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/favicon.ico\">
<link rel=\"stylesheet\" href=\"";
        // line 42
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/style.css\">
<link rel=\"stylesheet\" href=\"";
        // line 43
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/slick.css\">
<link rel=\"stylesheet\" href=\"";
        // line 44
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/default.css\">
<!-- for original theme CSS -->
";
        // line 46
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 47
        echo "
";
        // line 49
        if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
        if ($this->getAttribute($_PageLayout_, "Head", array())) {
            // line 50
            echo "    ";
            // line 51
            echo "    ";
            if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute($_PageLayout_, "Head", array())));
            echo "
    ";
        }
        // line 55
        echo "</head>
<body class=\"";
        // line 56
        if (isset($context["body_class"])) { $_body_class_ = $context["body_class"]; } else { $_body_class_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("body_class", $context)) ? (_twig_default_filter($_body_class_, "other_page")) : ("other_page")), "html", null, true);
        echo "\">
<div id=\"wrapper\">
    <header id=\"header\">
        <div class=\"container-fluid inner\">
            ";
        // line 61
        echo "            ";
        if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
        if ($this->getAttribute($_PageLayout_, "Header", array())) {
            // line 62
            echo "                ";
            // line 63
            echo "                ";
            if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute($_PageLayout_, "Header", array())));
            echo "
                ";
            // line 65
            echo "            ";
        }
        // line 66
        echo "            ";
        // line 67
        echo "            <p id=\"btn_menu\"><a class=\"nav-trigger\" href=\"#nav\">Menu<span></span></a></p>
        </div>
    </header>

    <div id=\"contents\" class=\"";
        // line 71
        if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_PageLayout_, "theme", array()), "html", null, true);
        echo "\">

        <div id=\"contents_top\">
            ";
        // line 75
        echo "            ";
        if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
        if ($this->getAttribute($_PageLayout_, "ContentsTop", array())) {
            // line 76
            echo "                ";
            // line 77
            echo "                ";
            if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute($_PageLayout_, "ContentsTop", array())));
            echo "
                ";
            // line 79
            echo "            ";
        }
        // line 80
        echo "            ";
        // line 81
        echo "        </div>

        <div class=\"container-fluid inner\">
            ";
        // line 85
        echo "            ";
        if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
        if ($this->getAttribute($_PageLayout_, "SideLeft", array())) {
            // line 86
            echo "                <div id=\"side_left\" class=\"side\">
                    ";
            // line 88
            echo "                    ";
            if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute($_PageLayout_, "SideLeft", array())));
            echo "
                    ";
            // line 90
            echo "                </div>
            ";
        }
        // line 92
        echo "            ";
        // line 93
        echo "
            <div id=\"main\">
                ";
        // line 96
        echo "                ";
        if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
        if ($this->getAttribute($_PageLayout_, "MainTop", array())) {
            // line 97
            echo "                    <div id=\"main_top\">
                        ";
            // line 98
            if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute($_PageLayout_, "MainTop", array())));
            echo "
                    </div>
                ";
        }
        // line 101
        echo "                ";
        // line 102
        echo "
                <div id=\"main_middle\">
                    ";
        // line 104
        $this->displayBlock('main', $context, $blocks);
        // line 105
        echo "                </div>

                ";
        // line 108
        echo "                ";
        if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
        if ($this->getAttribute($_PageLayout_, "MainBottom", array())) {
            // line 109
            echo "                    <div id=\"main_bottom\">
                        ";
            // line 110
            if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute($_PageLayout_, "MainBottom", array())));
            echo "
                    </div>
                ";
        }
        // line 113
        echo "                ";
        // line 114
        echo "            </div>

            ";
        // line 117
        echo "            ";
        if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
        if ($this->getAttribute($_PageLayout_, "SideRight", array())) {
            // line 118
            echo "                <div id=\"side_right\" class=\"side\">
                    ";
            // line 120
            echo "                    ";
            if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute($_PageLayout_, "SideRight", array())));
            echo "
                    ";
            // line 122
            echo "                </div>
            ";
        }
        // line 124
        echo "            ";
        // line 125
        echo "
            ";
        // line 127
        echo "            ";
        if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
        if ($this->getAttribute($_PageLayout_, "ContentsBottom", array())) {
            // line 128
            echo "                <div id=\"contents_bottom\">
                    ";
            // line 130
            echo "                    ";
            if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute($_PageLayout_, "ContentsBottom", array())));
            echo "
                    ";
            // line 132
            echo "                </div>
            ";
        }
        // line 134
        echo "            ";
        // line 135
        echo "
        </div>

        <footer id=\"footer\">
            ";
        // line 140
        echo "            ";
        if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
        if ($this->getAttribute($_PageLayout_, "Footer", array())) {
            // line 141
            echo "                ";
            // line 142
            echo "                ";
            if (isset($context["PageLayout"])) { $_PageLayout_ = $context["PageLayout"]; } else { $_PageLayout_ = null; }
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute($_PageLayout_, "Footer", array())));
            echo "
                ";
            // line 144
            echo "            ";
        }
        // line 145
        echo "            ";
        // line 146
        echo "
        </footer>

    </div>

    <div id=\"drawer\" class=\"drawer sp\">
    </div>

</div>

<div class=\"overlay\"></div>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 159
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/jquery-1.11.3.min.js\"><\\/script>')</script>
<script src=\"";
        // line 160
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/bootstrap.custom.min.js\"></script>
<script src=\"";
        // line 161
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/slick.min.js\"></script>
<script src=\"";
        // line 162
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/function.js\"></script>
<script src=\"";
        // line 163
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/eccube.js\"></script>
<script>
\$(function () {
    \$('#drawer').append(\$('.drawer_block').clone(true).children());
    \$.ajax({
        url: '";
        // line 168
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/svg.html',
        type: 'GET',
        dataType: 'html',
    }).done(function(data){
        \$('body').prepend(data);
    }).fail(function(data){
    });
});
</script>
";
        // line 177
        $this->displayBlock('javascript', $context, $blocks);
        // line 178
        echo "</body>
</html>
";
    }

    // line 46
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 104
    public function block_main($context, array $blocks = array())
    {
    }

    // line 177
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
        return array (  399 => 177,  394 => 104,  389 => 46,  383 => 178,  381 => 177,  368 => 168,  359 => 163,  354 => 162,  349 => 161,  344 => 160,  339 => 159,  324 => 146,  322 => 145,  319 => 144,  313 => 142,  311 => 141,  307 => 140,  301 => 135,  299 => 134,  295 => 132,  289 => 130,  286 => 128,  282 => 127,  279 => 125,  277 => 124,  273 => 122,  267 => 120,  264 => 118,  260 => 117,  256 => 114,  254 => 113,  247 => 110,  244 => 109,  240 => 108,  236 => 105,  234 => 104,  230 => 102,  228 => 101,  221 => 98,  218 => 97,  214 => 96,  210 => 93,  208 => 92,  204 => 90,  198 => 88,  195 => 86,  191 => 85,  186 => 81,  184 => 80,  181 => 79,  175 => 77,  173 => 76,  169 => 75,  162 => 71,  156 => 67,  154 => 66,  151 => 65,  145 => 63,  143 => 62,  139 => 61,  131 => 56,  128 => 55,  121 => 51,  119 => 50,  116 => 49,  113 => 47,  111 => 46,  105 => 44,  100 => 43,  95 => 42,  90 => 41,  87 => 40,  80 => 38,  77 => 37,  70 => 35,  67 => 34,  60 => 32,  57 => 31,  50 => 29,  47 => 28,  31 => 27,  25 => 23,  22 => 1,);
    }
}
