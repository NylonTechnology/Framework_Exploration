<?php

/* TechSuitePublicBundle:Office:index.html.twig */
class __TwigTemplate_ed7ed30f59e92d16871ddda396124ffed0816c15d906dcd76d08ef3d3b7cf345 extends Twig_Template
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
        $__internal_91fb8b9292d14984c7bb521e68a80c8b9035fe9da35969a58c706eeb49650dfc = $this->env->getExtension("native_profiler");
        $__internal_91fb8b9292d14984c7bb521e68a80c8b9035fe9da35969a58c706eeb49650dfc->enter($__internal_91fb8b9292d14984c7bb521e68a80c8b9035fe9da35969a58c706eeb49650dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TechSuitePublicBundle:Office:index.html.twig"));

        // line 1
        echo "Offices

";
        // line 3
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["offices"]) ? $context["offices"] : $this->getContext($context, "offices")));
        echo "

";
        
        $__internal_91fb8b9292d14984c7bb521e68a80c8b9035fe9da35969a58c706eeb49650dfc->leave($__internal_91fb8b9292d14984c7bb521e68a80c8b9035fe9da35969a58c706eeb49650dfc_prof);

    }

    public function getTemplateName()
    {
        return "TechSuitePublicBundle:Office:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* Offices*/
/* */
/* {{ dump(offices) }}*/
/* */
/* */
