<?php

/* E:\workspace\shawen\install-master/themes/hd/partials/productContent.htm */
class __TwigTemplate_dad026a2e64918a8df22eaa3017ea20a81938696bdb863a637002584302ab5e3 extends Twig_Template
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
        echo "<div class=\"am-u-sm-12 am-u-lg-7\">
                        <h1>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
                        ";
        // line 3
        echo call_user_func_array($this->env->getFilter('md')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "content", array())));
        echo "
                    </div>
                    <div class=\"am-u-sm-12 am-u-lg-4 am-u-lg-offset-1 product-img\">
                        ";
        // line 6
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "thumb", array()), "count", array()) > 0)) {
            // line 7
            echo "                            <img src='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "thumb", array()), 0, array(), "array"), "path", array()), "html", null, true);
            echo "'/>
                        ";
        } else {
            // line 9
            echo "                            <img src='/themes/hd/assets/images/placeholder.gif'/>
                        ";
        }
        // line 11
        echo "                    </div>";
    }

    public function getTemplateName()
    {
        return "E:\\workspace\\shawen\\install-master/themes/hd/partials/productContent.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  40 => 9,  34 => 7,  32 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"am-u-sm-12 am-u-lg-7\">
                        <h1>{{ data.title }}</h1>
                        {{ data.content|md }}
                    </div>
                    <div class=\"am-u-sm-12 am-u-lg-4 am-u-lg-offset-1 product-img\">
                        {% if data.thumb.count > 0 %}
                            <img src='{{ data.thumb[0].path }}'/>
                        {% else %}
                            <img src='/themes/hd/assets/images/placeholder.gif'/>
                        {% endif %}
                    </div>", "E:\\workspace\\shawen\\install-master/themes/hd/partials/productContent.htm", "");
    }
}
