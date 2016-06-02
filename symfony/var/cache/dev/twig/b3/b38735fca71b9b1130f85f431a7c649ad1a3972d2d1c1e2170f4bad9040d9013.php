<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2e89e1deb49fe235ca202b958545a1a2c1083aeb2a5485dc1d42f4f669711cbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2c9edd6f644082c5e2452066fe92330e21417aef29e364066b0609d8c013307 = $this->env->getExtension("native_profiler");
        $__internal_f2c9edd6f644082c5e2452066fe92330e21417aef29e364066b0609d8c013307->enter($__internal_f2c9edd6f644082c5e2452066fe92330e21417aef29e364066b0609d8c013307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2c9edd6f644082c5e2452066fe92330e21417aef29e364066b0609d8c013307->leave($__internal_f2c9edd6f644082c5e2452066fe92330e21417aef29e364066b0609d8c013307_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a33d76954b670c6a59af50b1061516552b53d1b73a8f1e4cdb1b059567a07f07 = $this->env->getExtension("native_profiler");
        $__internal_a33d76954b670c6a59af50b1061516552b53d1b73a8f1e4cdb1b059567a07f07->enter($__internal_a33d76954b670c6a59af50b1061516552b53d1b73a8f1e4cdb1b059567a07f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a33d76954b670c6a59af50b1061516552b53d1b73a8f1e4cdb1b059567a07f07->leave($__internal_a33d76954b670c6a59af50b1061516552b53d1b73a8f1e4cdb1b059567a07f07_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1bb5585a3445389c4b50f094602005d73f12c289894c69e1ce76dcacf371df60 = $this->env->getExtension("native_profiler");
        $__internal_1bb5585a3445389c4b50f094602005d73f12c289894c69e1ce76dcacf371df60->enter($__internal_1bb5585a3445389c4b50f094602005d73f12c289894c69e1ce76dcacf371df60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1bb5585a3445389c4b50f094602005d73f12c289894c69e1ce76dcacf371df60->leave($__internal_1bb5585a3445389c4b50f094602005d73f12c289894c69e1ce76dcacf371df60_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a5d3c6fed0277d7fd0c9c2b6600aa4d8816376c2925a6d4a1874c751f954c46 = $this->env->getExtension("native_profiler");
        $__internal_5a5d3c6fed0277d7fd0c9c2b6600aa4d8816376c2925a6d4a1874c751f954c46->enter($__internal_5a5d3c6fed0277d7fd0c9c2b6600aa4d8816376c2925a6d4a1874c751f954c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5a5d3c6fed0277d7fd0c9c2b6600aa4d8816376c2925a6d4a1874c751f954c46->leave($__internal_5a5d3c6fed0277d7fd0c9c2b6600aa4d8816376c2925a6d4a1874c751f954c46_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
