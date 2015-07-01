<?php

/* Block/news.twig */
class __TwigTemplate_b369750207bb3740adb4071bcc71e49c7f5a83391157ddecf5aa6a814f3ec9bd extends Twig_Template
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
        echo "        <div class=\"col-sm-9 news_contents\">
            <!-- ▼news_area▼ -->
            <div id=\"news_area\">
                <h2 class=\"heading01\">新着情報</h2>
                <div class=\"accordion\">
                    <div class=\"newslist\">

                        ";
        // line 29
        if (isset($context["NewsList"])) { $_NewsList_ = $context["NewsList"]; } else { $_NewsList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_NewsList_);
        foreach ($context['_seq'] as $context["_key"] => $context["News"]) {
            // line 30
            echo "                        <dl>
                            <dt>
                                <span class=\"date\">";
            // line 32
            if (isset($context["News"])) { $_News_ = $context["News"]; } else { $_News_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_News_, "date", array()), "Y.m.d"), "html", null, true);
            echo "</span>
                                <span class=\"news_title\">
                                    ";
            // line 34
            if (isset($context["News"])) { $_News_ = $context["News"]; } else { $_News_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_News_, "title", array()), "html", null, true);
            echo "
                                </span>
                                <span class=\"angle-circle\"><svg class=\"cb cb-angle-down\"><use xlink:href=\"#cb-angle-down\" /></svg></span>
                            </dt>
                            <dd>";
            // line 38
            if (isset($context["News"])) { $_News_ = $context["News"]; } else { $_News_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_News_, "comment", array()), "html", null, true);
            echo "
                            ";
            // line 39
            if (isset($context["News"])) { $_News_ = $context["News"]; } else { $_News_ = null; }
            if ($this->getAttribute($_News_, "url", array())) {
                echo "<br><a href=\"";
                if (isset($context["News"])) { $_News_ = $context["News"]; } else { $_News_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_News_, "url", array()), "html", null, true);
                echo "\" ";
                if (isset($context["News"])) { $_News_ = $context["News"]; } else { $_News_ = null; }
                if (($this->getAttribute($_News_, "link_method", array()) == "1")) {
                    echo "target=\"_blank\"";
                }
                echo ">
                            詳しくはこちら
                            </a>";
            }
            // line 42
            echo "                            </dd>
                        </dl>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['News'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
                    </div>
                </div>
            </div>
            <!-- ▲news_area▲ -->
        </div>
";
    }

    public function getTemplateName()
    {
        return "Block/news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 45,  71 => 42,  56 => 39,  51 => 38,  43 => 34,  37 => 32,  33 => 30,  28 => 29,  19 => 22,);
    }
}
