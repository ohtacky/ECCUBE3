<?php

/* Block/new_product.twig */
class __TwigTemplate_dea4328fce5e75897458ab53fa6697aa2f32e1bd83eb4eb5ce9744d4ededb6e1 extends Twig_Template
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
        echo "<div id=\"contents_top\">
<div id=\"item_list\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-xs-12\">
            <div class=\"row no-padding\">
                <div class=\"col-xs-6\">
                    <div class=\"img img_right\"><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\"><img src=\"";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img01.jpg\"></a></div>
                </div>
                <div class=\"col-xs-6\">
                    <div class=\"img\"><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\"><img src=\"";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img02.jpg\"></a></div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-xs-12 comment_area\">
            <div class=\"txt_center\">
                <h4>新入荷商品特集</h4>
                <h5>この季節にぴったりな商品をご用意しました</h5>
                <p>さわやかな日差しが過ごしやすい季節。心地よいくらしのための、お部屋のアクセントになるおすすめのファブリックやグッズをご紹介します。</p>
                <p><a class=\"btn btn-success\" href=\"#\">一覧を見る<svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></a></p>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-4 col-xs-12\">
            <div class=\"pickup_item\">
                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\">
                    <div class=\"item_photo\"><img src=\"";
        // line 48
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img03.jpg\"></div>
                    <dl>
                        <dt class=\"item_name text-warning\">お気に入りのエスプレッソタイム</dt>
                        <dd class=\"item_comment\">コーヒータイムを上質な時間にしてくれる、口当たりのよさとデザイン性を兼ね備えたエスプレッソカップを集めました・・・</dd>
                        <dd class=\"more_link text-warning\">read more</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-4 col-xs-12\">
            <div class=\"pickup_item\">
                <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\">
                    <div class=\"item_photo\"><img src=\"";
        // line 60
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img04.jpg\"></div>
                    <dl>
                        <dt class=\"item_name text-warning\">アウトドアにおすすめのアイテム</dt>
                        <dd class=\"item_comment\">カジュアルすぎない感じがちょうどよい、大人のためのアウトドアマガジンから、バイヤーおすすめのアイテムをセレクト・・・</dd>
                        <dd class=\"more_link text-warning\">read more</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-4 col-xs-12\">
            <div class=\"pickup_item\">
                <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\">
                    <div class=\"item_photo\"><img src=\"";
        // line 72
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img05.jpg\"></div>
                    <dl>
                        <dt class=\"item_name text-warning\">フランス製のデッドストック</dt>
                        <dd class=\"item_comment\">60～70年代のフランス製のデッドストックの器を集めました。絶妙な色合いと、独特の優しい風合いをお楽しみいただけ・・・</dd>
                        <dd class=\"more_link text-warning\">read more</dd>
                    </dl>
                </a>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-3 col-xs-6\">
            <div class=\"pickup_item\">
                <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\">
                    <div class=\"item_photo\"><img src=\"";
        // line 86
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img06.jpg\"></div>
                    <p class=\"item_comment text-warning\">木彫りのぬくもりがあたたかいアニマルオブジェ</p>
                    <dl>
                        <dt class=\"item_name\">オブジェ（ふくろう）</dt>
                        <dd class=\"item_price\">\\ 1,785</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-3 col-xs-6\">
            <div class=\"pickup_item\">
                <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\">
                    <div class=\"item_photo\"><img src=\"";
        // line 98
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img07.jpg\"></div>
                    <p class=\"item_comment text-warning\">青色が美しい職人が仕上げた吹きガラス</p>
                    <dl>
                        <dt class=\"item_name\">ガラス瓶</dt>
                        <dd class=\"item_price special_price\">\\ 1,785</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-3 col-xs-6\">
            <div class=\"pickup_item\">
                <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\">
                    <div class=\"item_photo\"><img src=\"";
        // line 110
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img08.jpg\"></div>
                    <p class=\"item_comment text-warning\">いつかは持ちたい。一生モノの銀製カトラリー</p>
                    <dl>
                        <dt class=\"item_name\">シルバーカトラリー</dt>
                        <dd class=\"item_price\">\\ 1,785</dd>
                    </dl>
                </a>
            </div>
        </div>
        <div class=\"col-sm-3 col-xs-6\">
            <div class=\"pickup_item\">
                <a href=\"";
        // line 121
        echo $this->env->getExtension('routing')->getUrl("product_detail", array("id" => 2));
        echo "\">
                    <div class=\"item_photo\"><img src=\"";
        // line 122
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/img09.jpg\"></div>
                    <p class=\"item_comment text-warning\">こだわりのシルクスクリーンプリントがポイント</p>
                    <dl>
                        <dt class=\"item_name\">フォトクッションカバー</dt>
                        <dd class=\"item_price\">\\ 1,785</dd>
                    </dl>
                </a>
            </div>
        </div>
    </div>
    
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/new_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 122,  174 => 121,  159 => 110,  155 => 109,  140 => 98,  136 => 97,  121 => 86,  117 => 85,  100 => 72,  96 => 71,  81 => 60,  77 => 59,  62 => 48,  58 => 47,  36 => 31,  27 => 28,  19 => 22,);
    }
}
