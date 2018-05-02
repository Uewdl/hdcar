<?php

/* E:\workspace\shawen\install-master/themes/hd/partials/newslist/default.htm */
class __TwigTemplate_1cfa701e22f01fdd11de350e8a4d0e477d114349476478e50adaefb5f3e7d32c extends Twig_Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "posts", array());
        // line 2
        echo "<div class=\"am-u-lg-7 am-u-sm-12\">
                <ul class=\"am-list i-am-list news-list\">
                    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "<li class=\"am-cf\">
                        <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\" title='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "
                            <span class='am-text-right am-fr date'>";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "Y/m/d"), "html", null, true);
            echo "</span>
                        </a>                        
                        <p class=\" text-indent\">";
            // line 9
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "summary", array());
            echo "</p>
                        <span class=\"border-2-dashed\"></span>
                    </li>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 13
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                </ul>
            </div>
            <div class=\"am-u-lg-4 am-u-sm-12\">
            ";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), 0, array(), "array"), "featured_images", array()), "count", array())) {
            // line 19
            echo "                <p>
                    <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), 0, array(), "array"), "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
            echo "\" style='max-width:100%'>
                </p>
            ";
        } else {
            // line 23
            echo "             <p>
                    <img src=\"/themes/hd/assets/images/placeholder.gif\" style='max-width:100%'>
                </p>
            ";
        }
        // line 27
        echo "            </div>";
    }

    public function getTemplateName()
    {
        return "E:\\workspace\\shawen\\install-master/themes/hd/partials/newslist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  80 => 23,  74 => 20,  71 => 19,  69 => 18,  64 => 15,  55 => 13,  46 => 9,  41 => 7,  33 => 6,  30 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = __SELF__.posts %}
<div class=\"am-u-lg-7 am-u-sm-12\">
                <ul class=\"am-list i-am-list news-list\">
                    {% for post in posts %}
<li class=\"am-cf\">
                        <a href=\"{{ post.url }}\" title='{{ post.title }}'>{{ post.title }}
                            <span class='am-text-right am-fr date'>{{ post.published_at|date('Y/m/d') }}</span>
                        </a>                        
                        <p class=\" text-indent\">{{ post.summary|raw }}</p>
                        <span class=\"border-2-dashed\"></span>
                    </li>
{% else %}
        <li class=\"no-data\">{{ noPostsMessage }}</li>
{% endfor %}
                </ul>
            </div>
            <div class=\"am-u-lg-4 am-u-sm-12\">
            {% if posts[0].featured_images.count %}
                <p>
                    <img src=\"{{ posts[0].featured_images[0].path }}\" style='max-width:100%'>
                </p>
            {% else %}
             <p>
                    <img src=\"/themes/hd/assets/images/placeholder.gif\" style='max-width:100%'>
                </p>
            {% endif %}
            </div>", "E:\\workspace\\shawen\\install-master/themes/hd/partials/newslist/default.htm", "");
    }
}
