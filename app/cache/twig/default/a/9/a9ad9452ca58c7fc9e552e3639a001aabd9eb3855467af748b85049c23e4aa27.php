<?php

/* Block/category.twig */
class __TwigTemplate_a9ad9452ca58c7fc9e552e3639a001aabd9eb3855467af748b85049c23e4aa27 extends Twig_Template
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
        // line 36
        echo "
<nav id=\"category\" class=\"drawer_block pc\">
    <ul class=\"category-nav\">
    ";
        // line 39
        if (isset($context["Categories"])) { $_Categories_ = $context["Categories"]; } else { $_Categories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_Categories_);
        foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
            // line 40
            echo "        ";
            if (isset($context["Category"])) { $_Category_ = $context["Category"]; } else { $_Category_ = null; }
            echo $this->getAttribute($this, "tree", array(0 => $_Category_), "method");
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </ul> <!-- category-nav -->
</nav>
";
    }

    // line 22
    public function gettree($__Category__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "Category" => $__Category__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "    <li>
        <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getUrl("product_list");
            echo "?category_id=";
            if (isset($context["Category"])) { $_Category_ = $context["Category"]; } else { $_Category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Category_, "id", array()), "html", null, true);
            echo "\">
            ";
            // line 25
            if (isset($context["Category"])) { $_Category_ = $context["Category"]; } else { $_Category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Category_, "name", array()), "html", null, true);
            echo "
        </a>
        ";
            // line 27
            if (isset($context["Category"])) { $_Category_ = $context["Category"]; } else { $_Category_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_Category_, "children", array())) > 0)) {
                // line 28
                echo "            <ul>
            ";
                // line 29
                if (isset($context["Category"])) { $_Category_ = $context["Category"]; } else { $_Category_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_Category_, "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 30
                    echo "                    ";
                    if (isset($context["ChildCategory"])) { $_ChildCategory_ = $context["ChildCategory"]; } else { $_ChildCategory_ = null; }
                    echo $this->getAttribute($this, "tree", array(0 => $_ChildCategory_), "method");
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            </ul>
        ";
            }
            // line 34
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "Block/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 34,  93 => 32,  83 => 30,  78 => 29,  75 => 28,  72 => 27,  66 => 25,  59 => 24,  56 => 23,  45 => 22,  39 => 42,  29 => 40,  24 => 39,  19 => 36,);
    }
}
