<?php

/* index.twig */
class __TwigTemplate_e04a46165862488da8b43e9ef84efff9ec7910d71103b67118eae994817b4217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "index.twig", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        echo "ホーム";
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "
        <div class=\"row\">
            <div class=\"col-md-6\">
                <form id=\"form1\" name=\"form1\" action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getUrl("admin_order");
        echo "\" method=\"post\">
                ";
        // line 31
        if (isset($context["searchOrderForm"])) { $_searchOrderForm_ = $context["searchOrderForm"]; } else { $_searchOrderForm_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_searchOrderForm_, "_token", array()), 'widget');
        echo "
                <input type=\"hidden\" id=\"admin_search_order_status\" name=\"admin_search_order[status]\" value=\"\">
                <div class=\"box\" id=\"order_info\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">受注状況<a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("admin_order");
        echo "\" class=\"icon_wrap\"><svg class=\"cb cb-angle-right\"> <use xlink:href=\"#cb-angle-right\" /></svg></a></h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body no-padding no-border\">
                        <div class=\"link_list\">
                            <div class=\"tableish\">
                                ";
        // line 40
        if (isset($context["OrderStatuses"])) { $_OrderStatuses_ = $context["OrderStatuses"]; } else { $_OrderStatuses_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_OrderStatuses_);
        foreach ($context['_seq'] as $context["_key"] => $context["OrderStatus"]) {
            // line 41
            echo "                                <a href=\"#\" class=\"item_box tr\" onclick=\"\$('#admin_search_order_status').val(";
            if (isset($context["OrderStatus"])) { $_OrderStatus_ = $context["OrderStatus"]; } else { $_OrderStatus_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_OrderStatus_, "id", array()), "html", null, true);
            echo ");document.form1.submit();\">
                                    <div class=\"td\">";
            // line 42
            if (isset($context["OrderStatus"])) { $_OrderStatus_ = $context["OrderStatus"]; } else { $_OrderStatus_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_OrderStatus_, "name", array()), "html", null, true);
            echo "</div>
                                    <div class=\"item_number text-right td\">";
            // line 43
            if (isset($context["Orders"])) { $_Orders_ = $context["Orders"]; } else { $_Orders_ = null; }
            if (isset($context["OrderStatus"])) { $_OrderStatus_ = $context["OrderStatus"]; } else { $_OrderStatus_ = null; }
            echo twig_escape_filter($this->env, ((( !twig_test_empty($_Orders_) && $this->getAttribute($_Orders_, $this->getAttribute($_OrderStatus_, "id", array()), array(), "array", true, true))) ? ($this->getAttribute($_Orders_, $this->getAttribute($_OrderStatus_, "id", array()), array(), "array")) : (0)), "html", null, true);
            echo "</div>
                                    <div class=\"icon_link td\">
                                        <svg class=\"cb cb-angle-right\"> <use xlink:href=\"#cb-angle-right\" /></svg>
                                    </div>
                                </a><!-- /.item_box -->
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderStatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                </form>
            </div><!-- /.col -->

            <div class=\"col-md-6\">
                <div class=\"box\" id=\"cube_news\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">お知らせ</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body no-padding no-border\">
                        <iframe class=\"link_list_wrap\" src=\"";
        // line 62
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "eccube_info_url", array()), "html", null, true);
        echo "\"></iframe>
                    </div><!-- /.box-body -->

                </div><!-- /.box -->
            </div><!-- /.col -->
        </div>

        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"box\" id=\"sale_info\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">売り上げ状況</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body no-padding no-border\">
                        <div class=\"sale_box clearfix\">
                            <div class=\"monthly_sale\">
                                <div class=\"item_number\">
                                    ";
        // line 79
        if (isset($context["salesThisMonth"])) { $_salesThisMonth_ = $context["salesThisMonth"]; } else { $_salesThisMonth_ = null; }
        echo twig_escape_filter($this->env, ((twig_test_empty($_salesThisMonth_)) ? ("¥ 0") : ($this->env->getExtension('eccube')->getPriceFilter($this->getAttribute($_salesThisMonth_, "order_amount", array())))), "html", null, true);
        echo " / ";
        if (isset($context["salesThisMonth"])) { $_salesThisMonth_ = $context["salesThisMonth"]; } else { $_salesThisMonth_ = null; }
        echo twig_escape_filter($this->env, ((twig_test_empty($_salesThisMonth_)) ? (0) : (twig_number_format_filter($this->env, $this->getAttribute($_salesThisMonth_, "order_count", array())))), "html", null, true);
        echo " <span>件</span>
                                    <div class=\"small\">今月の売上高 / 売上件数</div>
                                </div>
                            </div>
                            <div class=\"yesterday_sale\">
                                <div class=\"item_number\">
                                    ";
        // line 85
        if (isset($context["salesYesterday"])) { $_salesYesterday_ = $context["salesYesterday"]; } else { $_salesYesterday_ = null; }
        echo twig_escape_filter($this->env, ((twig_test_empty($_salesYesterday_)) ? ("¥ 0") : ($this->env->getExtension('eccube')->getPriceFilter($this->getAttribute($_salesYesterday_, "order_amount", array())))), "html", null, true);
        echo " / ";
        if (isset($context["salesYesterday"])) { $_salesYesterday_ = $context["salesYesterday"]; } else { $_salesYesterday_ = null; }
        echo twig_escape_filter($this->env, ((twig_test_empty($_salesYesterday_)) ? (0) : (twig_number_format_filter($this->env, $this->getAttribute($_salesYesterday_, "order_count", array())))), "html", null, true);
        echo " <span>件</span>
                                    <div class=\"small\">昨日の売上高 / 売上件数</div>
                                </div>
                            </div>
                            <div class=\"today_sale\">
                                <div class=\"item_number\">
                                    ";
        // line 91
        if (isset($context["salesToday"])) { $_salesToday_ = $context["salesToday"]; } else { $_salesToday_ = null; }
        echo twig_escape_filter($this->env, ((twig_test_empty($_salesToday_)) ? ("¥ 0") : ($this->env->getExtension('eccube')->getPriceFilter($this->getAttribute($_salesToday_, "order_amount", array())))), "html", null, true);
        echo " / ";
        if (isset($context["salesToday"])) { $_salesToday_ = $context["salesToday"]; } else { $_salesToday_ = null; }
        echo twig_escape_filter($this->env, ((twig_test_empty($_salesToday_)) ? (0) : (twig_number_format_filter($this->env, $this->getAttribute($_salesToday_, "order_count", array())))), "html", null, true);
        echo "  <span>件</span>
                                    <div class=\"small\">今日の売上高 / 売上件数</div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
            <div class=\"col-md-4\">
                <div class=\"box\" id=\"shop_info\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">ショップ状況</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body no-padding no-border\">
                        <form id=\"form2\" name=\"form2\" action=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_product_page", array("page_no" => 1, "status" => 3)), "html", null, true);
        echo "\" method=\"post\">
                            ";
        // line 106
        if (isset($context["searchProductForm"])) { $_searchProductForm_ = $context["searchProductForm"]; } else { $_searchProductForm_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_searchProductForm_, "_token", array()), 'widget');
        echo "
                        </form>
                        <form id=\"form3\" name=\"form3\" action=\"";
        // line 108
        echo $this->env->getExtension('routing')->getUrl("admin_customer");
        echo "\" method=\"post\">
                            ";
        // line 109
        if (isset($context["searchCustomerForm"])) { $_searchCustomerForm_ = $context["searchCustomerForm"]; } else { $_searchCustomerForm_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_searchCustomerForm_, "_token", array()), 'widget');
        echo "
                            <input type=\"hidden\" id=\"admin_search_customer_status_1\" name=\"admin_search_customer[customer_status]\" value=\"2\">
                        </form>
                        <div class=\"link_list\">
                            <div class=\"tableish\">
                                <a href=\"#\" class=\"item_box tr\" onclick=\"document.form2.submit();\">
                                    <div class=\"icon td\"><svg class=\"cb cb-tag-slash\"><use xlink:href=\"#cb-tag-slash\" /></svg></div>
                                    <div class=\"item_number td\">";
        // line 116
        if (isset($context["countNonStockProducts"])) { $_countNonStockProducts_ = $context["countNonStockProducts"]; } else { $_countNonStockProducts_ = null; }
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $_countNonStockProducts_), "html", null, true);
        echo "<div class=\"small\">在庫切れ商品</div></div>
                                    <div class=\"icon_link td\">
                                        <svg class=\"cb cb-angle-right\"> <use xlink:href=\"#cb-angle-right\" /></svg>
                                    </div>
                                </a><!-- /.item_box -->
                                <a href=\"#\" class=\"item_box tr\" onclick=\"document.form3.submit();\">
                                    <div class=\"icon td\"><svg class=\"cb cb-users\"><use xlink:href=\"#cb-users\" /></svg></div>
                                    <div class=\"item_number text-left td\">";
        // line 123
        if (isset($context["countCustomers"])) { $_countCustomers_ = $context["countCustomers"]; } else { $_countCustomers_ = null; }
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $_countCustomers_), "html", null, true);
        echo "<div class=\"small\">会員数</div></div>
                                    <div class=\"icon_link td\">
                                        <svg class=\"cb cb-angle-right\"> <use xlink:href=\"#cb-angle-right\" /></svg>
                                    </div>
                                </a><!-- /.item_box -->
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 123,  201 => 116,  190 => 109,  186 => 108,  180 => 106,  176 => 105,  155 => 91,  142 => 85,  129 => 79,  108 => 62,  93 => 49,  79 => 43,  74 => 42,  68 => 41,  63 => 40,  55 => 35,  47 => 31,  43 => 30,  38 => 27,  35 => 26,  29 => 24,  11 => 22,);
    }
}
