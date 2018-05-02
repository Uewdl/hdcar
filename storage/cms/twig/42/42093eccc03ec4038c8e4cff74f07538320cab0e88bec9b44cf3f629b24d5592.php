<?php

/* E:\workspace\shawen\install-master/themes/hd/pages/products.htm */
class __TwigTemplate_b30e727a55229ffac61d5f0e63e37dd5f9acdb09bdc362932be41221d579251b extends Twig_Template
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
        // line 1
        echo "<div class='banner' style=\"background-image: url('/themes/hd/assets/images/inside-product-header.png')\">
    <div class='inner'>
        <h2 class='main-title'>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h2>
        <h2 class='secondary-title'>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "name", array()), "html", null, true);
        echo "</h2>
    </div>
</div>

    <div class=\"am-container\">
        <ol class=\"am-breadcrumb am-breadcrumb-slash\">
            <li>
                <a href=\"/\">首页</a>
            </li>
            <li>
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "name", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</a>
            </li>
            <li class=\"am-active\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "name", array()), "html", null, true);
        echo "</li>
        </ol>
    </div>
    <div class=\"am-container scroll\">
        <ul class=\"am-avg-sm-2 am-avg-md-6 product-tab\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["children"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "            <li class=\"tab-item ";
            echo (((($context["slug"] ?? null) && (($context["slug"] ?? null) == twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "slug", array())))) ? ("active") : (""));
            echo "\">
                <div class=\"icon\"></div>
                <a href='";
            // line 24
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("products", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "slug", array())));
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "name", array()), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </ul>
    </div>
    <div class=\"am-container\">
        <div class=\"am-g\">
            <div class=\"am-u-sm-12 am-u-lg-2\">
                <ul class=\"am-list text-indent am-padding-top-lg product-list\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 34
            echo "                    <li>
                        <a href=\"javascript:;\" data-request='onGetArticle' data-request-update=\"productContent: '#product-update-area'\" data-request-data='id:";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "id", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "title", array()), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </ul>
            </div>
            <div class=\"am-u-sm-12 am-u-lg-10\">
                <div class=\"am-g am-padding-top-lg am-padding-left-lg product-padding\" id='product-update-area'>                    
                </div>
            </div>
            ";
        // line 44
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["productList"] ?? null), "count", array()) < 1)) {
            // line 45
            echo "                <div class='am-u-sm-12 am-u-md-12'><div class='am-alert am-alert-secondary'><i class='am-icon-warning'></i> 暂无</div></div>
            ";
        }
        // line 47
        echo "        </div>
    </div>
    
    <script>
    
    window.onload = function(){
        \$('.product-list a').click(function(){
            \$('.product-list li').removeClass('active')
            \$(this).parent().addClass('active')
            }).eq(0).click()
    }
    </script>";
    }

    public function getTemplateName()
    {
        return "E:\\workspace\\shawen\\install-master/themes/hd/pages/products.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 47,  112 => 45,  110 => 44,  102 => 38,  91 => 35,  88 => 34,  84 => 33,  76 => 27,  65 => 24,  59 => 22,  55 => 21,  47 => 16,  40 => 14,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class='banner' style=\"background-image: url('/themes/hd/assets/images/inside-product-header.png')\">
    <div class='inner'>
        <h2 class='main-title'>{{ this.page.title }}</h2>
        <h2 class='secondary-title'>{{ category.name }}</h2>
    </div>
</div>

    <div class=\"am-container\">
        <ol class=\"am-breadcrumb am-breadcrumb-slash\">
            <li>
                <a href=\"/\">首页</a>
            </li>
            <li>
                <a href=\"{{this.page.name}}\">{{this.page.title}}</a>
            </li>
            <li class=\"am-active\">{{ category.name }}</li>
        </ol>
    </div>
    <div class=\"am-container scroll\">
        <ul class=\"am-avg-sm-2 am-avg-md-6 product-tab\">
        {% for item in children %}
            <li class=\"tab-item {{ slug and slug == item.slug ? 'active' : '' }}\">
                <div class=\"icon\"></div>
                <a href='{{ 'products'|page({ slug:item.slug }) }}'>{{ item.name }}</a>
            </li>
        {% endfor %}
        </ul>
    </div>
    <div class=\"am-container\">
        <div class=\"am-g\">
            <div class=\"am-u-sm-12 am-u-lg-2\">
                <ul class=\"am-list text-indent am-padding-top-lg product-list\">
                {% for product in productList %}
                    <li>
                        <a href=\"javascript:;\" data-request='onGetArticle' data-request-update=\"productContent: '#product-update-area'\" data-request-data='id:{{ product.id }}'>{{ product.title }}</a>
                    </li>
                {% endfor %}
                </ul>
            </div>
            <div class=\"am-u-sm-12 am-u-lg-10\">
                <div class=\"am-g am-padding-top-lg am-padding-left-lg product-padding\" id='product-update-area'>                    
                </div>
            </div>
            {% if productList.count < 1%}
                <div class='am-u-sm-12 am-u-md-12'><div class='am-alert am-alert-secondary'><i class='am-icon-warning'></i> 暂无</div></div>
            {% endif %}
        </div>
    </div>
    
    <script>
    
    window.onload = function(){
        \$('.product-list a').click(function(){
            \$('.product-list li').removeClass('active')
            \$(this).parent().addClass('active')
            }).eq(0).click()
    }
    </script>", "E:\\workspace\\shawen\\install-master/themes/hd/pages/products.htm", "");
    }
}
