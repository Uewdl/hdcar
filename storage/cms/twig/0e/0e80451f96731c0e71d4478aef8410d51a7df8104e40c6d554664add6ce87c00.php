<?php

/* E:\workspace\shawen\install-master/themes/hd/pages/news.htm */
class __TwigTemplate_305461b78e14b2fb19f4d9ceb0347d2068ceb6d457a24544ebb694bae28737f5 extends Twig_Template
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
        echo "<div class='banner' style='background:url(/themes/hd/assets/images/gears-1236578_1920.gif) no-repeat;background-size:cover'>
    <div class='inner'>
        <h2>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h2>
    </div>
</div>
<div class='am-container'>
<ol class=\"am-breadcrumb\">
  <li><a href=\"/\">首页</a></li>
  <li class=\"am-active\">新闻</li>
</ol>
<div class=\"am-article\">
    <div class='article-content'>
    ";
        // line 13
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("news"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\workspace\\shawen\\install-master/themes/hd/pages/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  36 => 13,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class='banner' style='background:url(/themes/hd/assets/images/gears-1236578_1920.gif) no-repeat;background-size:cover'>
    <div class='inner'>
        <h2>{{ post.title }}</h2>
    </div>
</div>
<div class='am-container'>
<ol class=\"am-breadcrumb\">
  <li><a href=\"/\">首页</a></li>
  <li class=\"am-active\">新闻</li>
</ol>
<div class=\"am-article\">
    <div class='article-content'>
    {% component 'news' %}
    </div>
</div>
</div>", "E:\\workspace\\shawen\\install-master/themes/hd/pages/news.htm", "");
    }
}
