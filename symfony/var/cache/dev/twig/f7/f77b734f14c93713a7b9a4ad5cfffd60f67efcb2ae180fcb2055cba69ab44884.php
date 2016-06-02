<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8a8a5b2873f6ef52a3c02e3c61e189441e66283d397c2ba15735095a8aa767bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_324389c262dc565fa19d9d3464d32d35e7c0225208e176c91860f67ec134a83a = $this->env->getExtension("native_profiler");
        $__internal_324389c262dc565fa19d9d3464d32d35e7c0225208e176c91860f67ec134a83a->enter($__internal_324389c262dc565fa19d9d3464d32d35e7c0225208e176c91860f67ec134a83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_324389c262dc565fa19d9d3464d32d35e7c0225208e176c91860f67ec134a83a->leave($__internal_324389c262dc565fa19d9d3464d32d35e7c0225208e176c91860f67ec134a83a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c340c9c063720ccfc5c7b331c45ff9bc45c502c0f20301ca8cd3251f7e64888 = $this->env->getExtension("native_profiler");
        $__internal_5c340c9c063720ccfc5c7b331c45ff9bc45c502c0f20301ca8cd3251f7e64888->enter($__internal_5c340c9c063720ccfc5c7b331c45ff9bc45c502c0f20301ca8cd3251f7e64888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5c340c9c063720ccfc5c7b331c45ff9bc45c502c0f20301ca8cd3251f7e64888->leave($__internal_5c340c9c063720ccfc5c7b331c45ff9bc45c502c0f20301ca8cd3251f7e64888_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94f8bbaaff174b1b420c39577a521817399d509e7bf6584668e9dbfdd6a94a5e = $this->env->getExtension("native_profiler");
        $__internal_94f8bbaaff174b1b420c39577a521817399d509e7bf6584668e9dbfdd6a94a5e->enter($__internal_94f8bbaaff174b1b420c39577a521817399d509e7bf6584668e9dbfdd6a94a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_94f8bbaaff174b1b420c39577a521817399d509e7bf6584668e9dbfdd6a94a5e->leave($__internal_94f8bbaaff174b1b420c39577a521817399d509e7bf6584668e9dbfdd6a94a5e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_549963cdf7591aa00a3c200a12a9ed02a9dd454e2fff4688c012b08097d35b76 = $this->env->getExtension("native_profiler");
        $__internal_549963cdf7591aa00a3c200a12a9ed02a9dd454e2fff4688c012b08097d35b76->enter($__internal_549963cdf7591aa00a3c200a12a9ed02a9dd454e2fff4688c012b08097d35b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_549963cdf7591aa00a3c200a12a9ed02a9dd454e2fff4688c012b08097d35b76->leave($__internal_549963cdf7591aa00a3c200a12a9ed02a9dd454e2fff4688c012b08097d35b76_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
