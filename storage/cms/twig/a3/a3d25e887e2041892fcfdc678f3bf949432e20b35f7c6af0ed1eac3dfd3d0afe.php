<?php

/* E:\workspace\shawen\install-master/themes/hd/partials/nav.htm */
class __TwigTemplate_b2ae2fd4c945df97ed39e4a8884b65cccba740026da9f60404c115c4ec66d1d3 extends Twig_Template
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
        echo "<ul class=\"am-nav am-nav-pills am-topbar-nav i-nav\">
                    <li class=\"am-dropdown\">
                        <a href=\"#\" class='am-dropdown-toggle'>关于和德</a>
                         <ul class=\"am-dropdown-content\">
                            <li>
                                <a href=\"";
        // line 6
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("about/intro");
        echo "\" class=\"";
        echo (((($context["active"] ?? null) == "/about/intro")) ? ("active") : (""));
        echo "\">公司简介</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 9
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("about/structure");
        echo "\">管理架构</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 12
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("about/partner");
        echo "\">合作客户</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 15
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("about/future");
        echo "\">发展战略</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 18
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("about/responsibility");
        echo "\">和德责任</a>
                            </li>
                        </ul>
                    </li>
                    <li class='am-dropdown'>
                        <a href=\"javascript:;\" class='am-dropdown-toggle'>技术研发</a>
                        <ul class='am-dropdown-content'>
                            <li>
                                <a href=\"";
        // line 26
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("core/skill");
        echo "\">核心技术</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 29
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("core/capability");
        echo "\">研发能力</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 32
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("core/quality");
        echo "\">品质保证</a>
                            </li>
                             <li>
                                <a href=\"";
        // line 35
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("core/plans");
        echo "\">技术规划</a>
                            </li>
                        </ul>
                    </li>
                    <li class='am-dropdown'>
                        <a  href=\"javascript:;\" class='am-dropdown-toggle'>
                            主要产品
                        </a>
                        <ul class=\"am-dropdown-content\">
                            <li>
                                <a href=\"";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("products", array("slug" => "road"));
        echo "\">公路</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("products", array("slug" => "track"));
        echo "\">轨道</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("products", array("slug" => "health"));
        echo "\">健康</a>
                            </li>
                             <li>
                                <a href=\"";
        // line 54
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("products", array("slug" => "communication"));
        echo "\">通信</a>
                            </li>
                             <li>
                                <a href=\"";
        // line 57
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("products", array("slug" => "machine"));
        echo "\">机械</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 60
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("products", array("slug" => "product-other"));
        echo "\">其他</a>
                            </li>
                        </ul>
                    </li>
                    <li class='am-dropdown'>
                        <a  href=\"javascript:;\" class='am-dropdown-toggle'>
                            人力资源
                        </a>
                        <ul class='am-dropdown-content'>
                            <li>
                                <a href='";
        // line 70
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("resource/life");
        echo "'>和德生活</a>
                            </li>
                            <li>
                                <a href='";
        // line 73
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("resource/trust");
        echo "'>选择和德</a>
                            </li>
                            <li>
                                <a href='";
        // line 76
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("resource/join");
        echo "'>加入和德</a>
                            </li>
                        </ul>
                    </li>                    
                    <li>
                        <a  href=\"";
        // line 81
        echo $this->env->getExtension('System\Twig\Extension')->appFilter("support");
        echo "\">
                            联系我们
                        </a>
                    </li>
                </ul>";
    }

    public function getTemplateName()
    {
        return "E:\\workspace\\shawen\\install-master/themes/hd/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 81,  149 => 76,  143 => 73,  137 => 70,  124 => 60,  118 => 57,  112 => 54,  106 => 51,  100 => 48,  94 => 45,  81 => 35,  75 => 32,  69 => 29,  63 => 26,  52 => 18,  46 => 15,  40 => 12,  34 => 9,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"am-nav am-nav-pills am-topbar-nav i-nav\">
                    <li class=\"am-dropdown\">
                        <a href=\"#\" class='am-dropdown-toggle'>关于和德</a>
                         <ul class=\"am-dropdown-content\">
                            <li>
                                <a href=\"{{ 'about/intro'|app }}\" class=\"{{ active == '/about/intro' ? 'active' : ''}}\">公司简介</a>
                            </li>
                            <li>
                                <a href=\"{{ 'about/structure'|app }}\">管理架构</a>
                            </li>
                            <li>
                                <a href=\"{{ 'about/partner'|app }}\">合作客户</a>
                            </li>
                            <li>
                                <a href=\"{{ 'about/future'|app }}\">发展战略</a>
                            </li>
                            <li>
                                <a href=\"{{ 'about/responsibility'|app }}\">和德责任</a>
                            </li>
                        </ul>
                    </li>
                    <li class='am-dropdown'>
                        <a href=\"javascript:;\" class='am-dropdown-toggle'>技术研发</a>
                        <ul class='am-dropdown-content'>
                            <li>
                                <a href=\"{{ 'core/skill'|app }}\">核心技术</a>
                            </li>
                            <li>
                                <a href=\"{{ 'core/capability'|app }}\">研发能力</a>
                            </li>
                            <li>
                                <a href=\"{{ 'core/quality'|app }}\">品质保证</a>
                            </li>
                             <li>
                                <a href=\"{{ 'core/plans'|app }}\">技术规划</a>
                            </li>
                        </ul>
                    </li>
                    <li class='am-dropdown'>
                        <a  href=\"javascript:;\" class='am-dropdown-toggle'>
                            主要产品
                        </a>
                        <ul class=\"am-dropdown-content\">
                            <li>
                                <a href=\"{{'products'|page({slug:'road'})}}\">公路</a>
                            </li>
                            <li>
                                <a href=\"{{'products'|page({slug:'track'})}}\">轨道</a>
                            </li>
                            <li>
                                <a href=\"{{'products'|page({slug:'health'})}}\">健康</a>
                            </li>
                             <li>
                                <a href=\"{{'products'|page({slug:'communication'})}}\">通信</a>
                            </li>
                             <li>
                                <a href=\"{{'products'|page({slug:'machine'})}}\">机械</a>
                            </li>
                            <li>
                                <a href=\"{{'products'|page({slug:'product-other'})}}\">其他</a>
                            </li>
                        </ul>
                    </li>
                    <li class='am-dropdown'>
                        <a  href=\"javascript:;\" class='am-dropdown-toggle'>
                            人力资源
                        </a>
                        <ul class='am-dropdown-content'>
                            <li>
                                <a href='{{ 'resource/life'|app }}'>和德生活</a>
                            </li>
                            <li>
                                <a href='{{ 'resource/trust'|app }}'>选择和德</a>
                            </li>
                            <li>
                                <a href='{{ 'resource/join'|app }}'>加入和德</a>
                            </li>
                        </ul>
                    </li>                    
                    <li>
                        <a  href=\"{{ 'support'|app }}\">
                            联系我们
                        </a>
                    </li>
                </ul>", "E:\\workspace\\shawen\\install-master/themes/hd/partials/nav.htm", "");
    }
}
