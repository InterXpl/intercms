<?php

/* article/index.html.twig */
class __TwigTemplate_796f8e0b6049fccaf76aedac4f766d18f75f578b5037702aad520cf7d9cbbe38 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        // line 1
        echo "Test artykułu z twig, url: ";
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new Twig_Error_Runtime('Variable "slug" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "


";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artykuly"]) || array_key_exists("artykuly", $context) ? $context["artykuly"] : (function () { throw new Twig_Error_Runtime('Variable "artykuly" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["artykul"]) {
            // line 5
            echo "<h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artykul"], "title", []), "html", null, true);
            echo "</h3>
<p>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artykul"], "content", []), "html", null, true);
            echo "</p>

<hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artykul'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  40 => 5,  36 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Test artykułu z twig, url: {{ slug }}


{% for artykul in artykuly %}
<h3>{{ artykul.title }}</h3>
<p>{{ artykul.content }}</p>

<hr>
{% endfor %}
", "article/index.html.twig", "/var/www/html/symphony/intercms/templates/article/index.html.twig");
    }
}
