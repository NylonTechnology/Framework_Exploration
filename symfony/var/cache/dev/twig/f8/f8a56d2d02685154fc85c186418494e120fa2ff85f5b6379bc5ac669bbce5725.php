<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ea21acde36cadbf9b928f5adf133a35cf02439bf3f3ca3e79fca6c18064180a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6cf47e6784d08dd26d8e6d4d6ab5cacc3a781367151aa86ccb2375d479b06ff = $this->env->getExtension("native_profiler");
        $__internal_f6cf47e6784d08dd26d8e6d4d6ab5cacc3a781367151aa86ccb2375d479b06ff->enter($__internal_f6cf47e6784d08dd26d8e6d4d6ab5cacc3a781367151aa86ccb2375d479b06ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6cf47e6784d08dd26d8e6d4d6ab5cacc3a781367151aa86ccb2375d479b06ff->leave($__internal_f6cf47e6784d08dd26d8e6d4d6ab5cacc3a781367151aa86ccb2375d479b06ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1693851532e675a976f8f23d7215437cbd2f4cb6b030969c72542940846d0c57 = $this->env->getExtension("native_profiler");
        $__internal_1693851532e675a976f8f23d7215437cbd2f4cb6b030969c72542940846d0c57->enter($__internal_1693851532e675a976f8f23d7215437cbd2f4cb6b030969c72542940846d0c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1693851532e675a976f8f23d7215437cbd2f4cb6b030969c72542940846d0c57->leave($__internal_1693851532e675a976f8f23d7215437cbd2f4cb6b030969c72542940846d0c57_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bdf333dd4a957663ec364948062ff9807e6e75c50132529d8ac046eaa6603cf = $this->env->getExtension("native_profiler");
        $__internal_2bdf333dd4a957663ec364948062ff9807e6e75c50132529d8ac046eaa6603cf->enter($__internal_2bdf333dd4a957663ec364948062ff9807e6e75c50132529d8ac046eaa6603cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2bdf333dd4a957663ec364948062ff9807e6e75c50132529d8ac046eaa6603cf->leave($__internal_2bdf333dd4a957663ec364948062ff9807e6e75c50132529d8ac046eaa6603cf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab4fc56d5ce3d1f73a91046103bce0cd7b79d4d7de2d4b73782a839a48edd545 = $this->env->getExtension("native_profiler");
        $__internal_ab4fc56d5ce3d1f73a91046103bce0cd7b79d4d7de2d4b73782a839a48edd545->enter($__internal_ab4fc56d5ce3d1f73a91046103bce0cd7b79d4d7de2d4b73782a839a48edd545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ab4fc56d5ce3d1f73a91046103bce0cd7b79d4d7de2d4b73782a839a48edd545->leave($__internal_ab4fc56d5ce3d1f73a91046103bce0cd7b79d4d7de2d4b73782a839a48edd545_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
