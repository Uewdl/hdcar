<?php

/* E:\workspace\shawen\install-master/themes/hd/layouts/main.htm */
class __TwigTemplate_c09fbce44639235b6dd0eb1c3ddb898c06d19595896a97d8bafb8b8cbbeb416d extends Twig_Template
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
        echo "<!doctype html>
<html class=\"no-js\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>和德 ";
        // line 10
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()))), "html", null, true);
        echo "</title>
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />

    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/amazeui.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/app.css");
        echo "\">
    <link rel='stylesheet' href='";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/swiper-4.2.2.min.css");
        echo "'>
    ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 18
        echo "        <!--[if (gte IE 9)|!(IE)]><!-->
    <script src=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery-1.12.4.min.js");
        echo "\"></script>
    <!--<![endif]-->
</head>

<body>
    <div class=\"am-container\">
        <header class=\"am-topbar bg-white i-am-topbar\">
            <h1 class=\"am-topbar-brand i-am-topbar-brand\">
                <a href=\"/\" class='logo'>
                    <img src=\"";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/LOGO.png");
        echo "\" alt=\"\">
                    <span class=\"logo-text\"> 和德</span>
                </a>
            </h1>

            <button class=\"am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-default am-show-sm-only\" data-am-collapse=\"{target: '#doc-topbar-collapse'}\">
                <span class=\"am-sr-only\">导航切换</span>
                <span class=\"am-icon-bars\"></span>
            </button>

            <div class=\"am-collapse am-topbar-collapse nav\" id=\"doc-topbar-collapse\">
                ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "               <!--  <div class=\"nav-right\">
                   <div class=\"am-topbar-right\">
                       <button type=\"button\" class=\"am-btn am-btn-danger am-topbar-btn am-btn-xs\">EN</button>
                   </div>
                   <div class=\"am-topbar-right\">
                       <form class=\"am-topbar-form am-topbar-left am-form-inline\" role=\"search\">
                           <div class=\"am-form-group am-form-icon\">
                               <i class=\"am-icon-search\"></i>
                               <input type=\"text\" class=\"am-form-field am-input-sm am-round\" placeholder=\"搜索\">
                           </div>
                       </form>
                   </div>
               </div> -->
            </div>
        </header>
    </div>
   <div class=\"container\">
       ";
        // line 57
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 58
        echo "   </div>
    <div class=\"footer\">
        ";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "    </div>

    <!--[if lte IE 8 ]>
<script src=\"http://libs.baidu.com/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js\"></script>
<script src=\"";
        // line 66
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/amazeui.ie8polyfill.min.js");
        echo "\"></script>
<![endif]-->
    <script src='";
        // line 68
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/swiper-4.2.2.min.js");
        echo "'></script>
    <script src=\"";
        // line 69
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/amazeui.min.js");
        echo "\"></script>
    <script src='";
        // line 70
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/app.js");
        echo "'></script>  
    ";
        // line 71
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 72
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 73
        echo "        
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "E:\\workspace\\shawen\\install-master/themes/hd/layouts/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 73,  148 => 72,  141 => 71,  137 => 70,  133 => 69,  129 => 68,  124 => 66,  117 => 61,  113 => 60,  109 => 58,  107 => 57,  88 => 40,  84 => 39,  70 => 28,  58 => 19,  55 => 18,  52 => 17,  48 => 16,  44 => 15,  40 => 14,  33 => 10,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html class=\"no-js\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>和德 {{ this.page.meta_title ? this.page.meta_title : post.title }}</title>
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />

    <link rel=\"stylesheet\" href=\"{{ 'assets/css/amazeui.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/app.css'|theme}}\">
    <link rel='stylesheet' href='{{ 'assets/css/swiper-4.2.2.min.css'|theme}}'>
    {% styles %}
        <!--[if (gte IE 9)|!(IE)]><!-->
    <script src=\"{{ 'assets/js/jquery-1.12.4.min.js'|theme}}\"></script>
    <!--<![endif]-->
</head>

<body>
    <div class=\"am-container\">
        <header class=\"am-topbar bg-white i-am-topbar\">
            <h1 class=\"am-topbar-brand i-am-topbar-brand\">
                <a href=\"/\" class='logo'>
                    <img src=\"{{ 'assets/images/LOGO.png'|theme}}\" alt=\"\">
                    <span class=\"logo-text\"> 和德</span>
                </a>
            </h1>

            <button class=\"am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-default am-show-sm-only\" data-am-collapse=\"{target: '#doc-topbar-collapse'}\">
                <span class=\"am-sr-only\">导航切换</span>
                <span class=\"am-icon-bars\"></span>
            </button>

            <div class=\"am-collapse am-topbar-collapse nav\" id=\"doc-topbar-collapse\">
                {% partial 'nav' %}
               <!--  <div class=\"nav-right\">
                   <div class=\"am-topbar-right\">
                       <button type=\"button\" class=\"am-btn am-btn-danger am-topbar-btn am-btn-xs\">EN</button>
                   </div>
                   <div class=\"am-topbar-right\">
                       <form class=\"am-topbar-form am-topbar-left am-form-inline\" role=\"search\">
                           <div class=\"am-form-group am-form-icon\">
                               <i class=\"am-icon-search\"></i>
                               <input type=\"text\" class=\"am-form-field am-input-sm am-round\" placeholder=\"搜索\">
                           </div>
                       </form>
                   </div>
               </div> -->
            </div>
        </header>
    </div>
   <div class=\"container\">
       {% page %}
   </div>
    <div class=\"footer\">
        {% partial 'footer' %}
    </div>

    <!--[if lte IE 8 ]>
<script src=\"http://libs.baidu.com/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js\"></script>
<script src=\"{{ 'assets/js/amazeui.ie8polyfill.min.js'|theme}}\"></script>
<![endif]-->
    <script src='{{ 'assets/js/swiper-4.2.2.min.js'|theme}}'></script>
    <script src=\"{{ 'assets/js/amazeui.min.js'|theme}}\"></script>
    <script src='{{ 'assets/js/app.js'|theme }}'></script>  
    {% framework extras %}
        {% scripts %}
        
</body>

</html>", "E:\\workspace\\shawen\\install-master/themes/hd/layouts/main.htm", "");
    }
}
