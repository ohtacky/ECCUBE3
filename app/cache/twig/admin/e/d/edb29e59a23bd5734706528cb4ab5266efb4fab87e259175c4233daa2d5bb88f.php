<?php

/* login.twig */
class __TwigTemplate_edb29e59a23bd5734706528cb4ab5266efb4fab87e259175c4233daa2d5bb88f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("login_frame.twig", "login.twig", 22);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "login_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $this->env->getExtension('form')->renderer->setTheme($_form_, array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_javascript($context, array $blocks = array())
    {
        // line 27
        echo "<script>
\$(function() {
    \$('#login_id').focus();
});
</script>
";
    }

    // line 34
    public function block_main($context, array $blocks = array())
    {
        // line 35
        echo "
    <div class=\"login-box\">
        ";
        // line 37
        echo twig_include($this->env, $context, "alert.twig");
        echo "
        <div class=\"login-box-body\">
            <p class=\"login-logo2\"><img src=\"";
        // line 39
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/img/logo2.png\" width=\"106\"></p>
            <form name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 40
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('routing')->getPath(($this->getAttribute($this->getAttribute($_app_, "config", array()), "admin_route", array()) . "_login_check"));
        echo "\">
                <div class=\"form-group has-feedback\">
                    ";
        // line 42
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "login_id", array()), 'widget', array("id" => "login_id", "attr" => array("size" => 20, "class" => "box25")));
        echo "
                </div>
                <div class=\"form-group has-feedback\">
                    ";
        // line 45
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "password", array()), 'widget', array("attr" => array("size" => 20, "class" => "box25")));
        echo "
                </div>
                ";
        // line 47
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ($_error_) {
            // line 48
            echo "                <div class=\"form-group\">
                    <span class=\"text-danger\">";
            // line 49
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_error_), "html", null, true);
            echo "</span>
                </div>
                ";
        }
        // line 52
        echo "                <p class=\"btn_area\"><button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">ログイン</button></p>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                ";
        // line 54
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
            </form>
        </div><!-- /.login-box-body -->
        <p class=\"text-center\"><small class=\"copyright\">Copyright &copy; 2000-";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " LOCKON CO.,LTD. All Rights Reserved.</small></p>
    </div><!-- /.login-box -->

";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 57,  101 => 54,  97 => 53,  94 => 52,  87 => 49,  84 => 48,  81 => 47,  75 => 45,  68 => 42,  62 => 40,  57 => 39,  52 => 37,  48 => 35,  45 => 34,  36 => 27,  33 => 26,  29 => 22,  26 => 24,  11 => 22,);
    }
}
