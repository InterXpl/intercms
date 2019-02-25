<?php

/* lucky/number.html.twig */
class __TwigTemplate_bb08d72232fe49f1990129f7c5758cbd3b888c1d5dd970452e57dd4907bae751 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        // line 1
        echo "Szczęśliwy numer: ";
        echo twig_escape_filter($this->env, (isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new Twig_Error_Runtime('Variable "number" does not exist.', 1, $this->source); })()), "html", null, true);
        echo ", z zakresu ";
        echo twig_escape_filter($this->env, (isset($context["od"]) || array_key_exists("od", $context) ? $context["od"] : (function () { throw new Twig_Error_Runtime('Variable "od" does not exist.', 1, $this->source); })()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["do"]) || array_key_exists("do", $context) ? $context["do"] : (function () { throw new Twig_Error_Runtime('Variable "do" does not exist.', 1, $this->source); })()), "html", null, true);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Szczęśliwy numer: {{ number }}, z zakresu {{ od }} - {{do}}", "lucky/number.html.twig", "/var/www/html/symphony/pierwszy-projekt/templates/lucky/number.html.twig");
    }
}
