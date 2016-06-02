<?php

/* TechSuitePublicBundle:Office:show.html.twig */
class __TwigTemplate_019a12b01c36a01570b9b9fe2738f42c038700c88443222c6cbbd1984c08ca83 extends Twig_Template
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
        $__internal_792d071126226c09160e95386d7286e10518e408da58cec9c312a51de4178fe7 = $this->env->getExtension("native_profiler");
        $__internal_792d071126226c09160e95386d7286e10518e408da58cec9c312a51de4178fe7->enter($__internal_792d071126226c09160e95386d7286e10518e408da58cec9c312a51de4178fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TechSuitePublicBundle:Office:show.html.twig"));

        // line 1
        echo "Office

";
        // line 3
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["office"]) ? $context["office"] : $this->getContext($context, "office")));
        echo "

";
        
        $__internal_792d071126226c09160e95386d7286e10518e408da58cec9c312a51de4178fe7->leave($__internal_792d071126226c09160e95386d7286e10518e408da58cec9c312a51de4178fe7_prof);

    }

    public function getTemplateName()
    {
        return "TechSuitePublicBundle:Office:show.html.twig";
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
/* Office*/
/* */
/* {{ dump(office) }}*/
/* */
/* */
