<?php

/* E:\workspace\shawen\install-master/themes/hd/partials/breadcrumb.htm */
class __TwigTemplate_c02fd1f4f715fd5b6e6f8c1ba5b589a254b60c7913a7a89322d1a56861aabf83 extends Twig_Template
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
        if (($context["breadcrumbs"] ?? null)) {
            // line 2
            echo "    <ul class='am-breadcrumb am-breadcrumb-slash'>
        <li><a href='/'>首页</a></li>
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 5
                echo "            <li class=\"";
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["breadcrumb"], "isActive", array())) ? ("active") : (""));
                echo "\">
                <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["breadcrumb"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["breadcrumb"], "title", array()), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\workspace\\shawen\\install-master/themes/hd/partials/breadcrumb.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  34 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if breadcrumbs %}
    <ul class='am-breadcrumb am-breadcrumb-slash'>
        <li><a href='/'>首页</a></li>
        {% for breadcrumb in breadcrumbs %}
            <li class=\"{{ breadcrumb.isActive ? 'active' : '' }}\">
                <a href=\"{{ breadcrumb.url }}\">{{ breadcrumb.title }}</a>
            </li>
        {% endfor %}
    </ul>
{% endif %}", "E:\\workspace\\shawen\\install-master/themes/hd/partials/breadcrumb.htm", "");
    }
}
