<?php

/* alert.twig */
class __TwigTemplate_d0f13de7d2ed3418e51d2a7c7299c5b03ab7b344aac9f4278c0de9e488d4fd14 extends Twig_Template
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
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashBag", array()), "has", array(0 => "eccube.admin.success"), "method")) {
            // line 23
            echo "    ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashBag", array()), "get", array(0 => "eccube.admin.success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "        <div class=\"row\">
            <div class=\"alert alert-success alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span class=\"alert-close\" aria-hidden=\"true\">&times;</span></button>
                <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> ";
                // line 27
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_message_), "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 32
        echo "
";
        // line 33
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashBag", array()), "has", array(0 => "eccube.admin.info"), "method")) {
            // line 34
            echo "    ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashBag", array()), "get", array(0 => "eccube.admin.info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 35
                echo "        <div class=\"row\">
            <div class=\"alert alert-info alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span class=\"alert-close\" aria-hidden=\"true\">&times;</span></button>
                <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> ";
                // line 38
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_message_), "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 43
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashBag", array()), "has", array(0 => "eccube.admin.warning"), "method")) {
            // line 44
            echo "    ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashBag", array()), "get", array(0 => "eccube.admin.warning"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 45
                echo "        <div class=\"row\">
            <div class=\"alert alert-warning alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span class=\"alert-close\" aria-hidden=\"true\">&times;</span></button>
                <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> ";
                // line 48
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_message_), "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 53
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashBag", array()), "has", array(0 => "eccube.admin.danger"), "method")) {
            // line 54
            echo "    ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashBag", array()), "get", array(0 => "eccube.admin.danger"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 55
                echo "        <div class=\"row\">
            <div class=\"alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span class=\"alert-close\" aria-hidden=\"true\">&times;</span></button>
                <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> ";
                // line 58
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_message_), "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 63
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashBag", array()), "has", array(0 => "eccube.admin.error"), "method")) {
            // line 64
            echo "    ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session", array()), "flashBag", array()), "get", array(0 => "eccube.admin.error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 65
                echo "        <div class=\"row\">
            <div class=\"alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span class=\"alert-close\" aria-hidden=\"true\">&times;</span></button>
                <svg class=\"cb cb-info-circle\"> <use xlink:href=\"#cb-info-circle\" /></svg> ";
                // line 68
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_message_), "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 68,  135 => 65,  129 => 64,  126 => 63,  114 => 58,  109 => 55,  103 => 54,  100 => 53,  88 => 48,  83 => 45,  77 => 44,  74 => 43,  62 => 38,  57 => 35,  51 => 34,  48 => 33,  45 => 32,  33 => 27,  28 => 24,  22 => 23,  19 => 22,);
    }
}
