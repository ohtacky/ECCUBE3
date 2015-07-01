<?php

/* block.twig */
class __TwigTemplate_10e8b17195bc0fb305527bd75dccf0362fd78735db4014b76068dc4c1690f2b9 extends Twig_Template
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
        if (isset($context["Blocks"])) { $_Blocks_ = $context["Blocks"]; } else { $_Blocks_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_Blocks_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["Block"]) {
            // line 23
            echo "    <!-- ▼";
            if (isset($context["Block"])) { $_Block_ = $context["Block"]; } else { $_Block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Block_, "name", array()), "html", null, true);
            echo " -->
    ";
            // line 24
            if (isset($context["Block"])) { $_Block_ = $context["Block"]; } else { $_Block_ = null; }
            if ($this->getAttribute($_Block_, "logic_flg", array())) {
                // line 25
                echo "        ";
                if (isset($context["Block"])) { $_Block_ = $context["Block"]; } else { $_Block_ = null; }
                echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath(("block_" . $this->getAttribute($_Block_, "file_name", array()))));
                echo "
    ";
            } else {
                // line 27
                echo "        ";
                if (isset($context["Block"])) { $_Block_ = $context["Block"]; } else { $_Block_ = null; }
                echo twig_include($this->env, $context, (("Block/" . $this->getAttribute($_Block_, "file_name", array())) . ".twig"));
                echo "
    ";
            }
            // line 29
            echo "    <!-- ▲";
            if (isset($context["Block"])) { $_Block_ = $context["Block"]; } else { $_Block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Block_, "name", array()), "html", null, true);
            echo " -->
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 29,  53 => 27,  46 => 25,  43 => 24,  37 => 23,  19 => 22,);
    }
}
