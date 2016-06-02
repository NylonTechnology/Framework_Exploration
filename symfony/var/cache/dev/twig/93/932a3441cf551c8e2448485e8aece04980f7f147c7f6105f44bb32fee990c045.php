<?php

/* base.html.twig */
class __TwigTemplate_b798352745d15d0429fb355d1500ae057ca33839de2b21b4936158c5afb89709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fcdf44294365fe894e5c0d8e7c792538cbbf2112a0127604a33750e93ef1c94 = $this->env->getExtension("native_profiler");
        $__internal_0fcdf44294365fe894e5c0d8e7c792538cbbf2112a0127604a33750e93ef1c94->enter($__internal_0fcdf44294365fe894e5c0d8e7c792538cbbf2112a0127604a33750e93ef1c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0fcdf44294365fe894e5c0d8e7c792538cbbf2112a0127604a33750e93ef1c94->leave($__internal_0fcdf44294365fe894e5c0d8e7c792538cbbf2112a0127604a33750e93ef1c94_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a807b4574f1dc007b3128600a32704f78042e6e54f9cbeb079eada31122cfc9 = $this->env->getExtension("native_profiler");
        $__internal_1a807b4574f1dc007b3128600a32704f78042e6e54f9cbeb079eada31122cfc9->enter($__internal_1a807b4574f1dc007b3128600a32704f78042e6e54f9cbeb079eada31122cfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1a807b4574f1dc007b3128600a32704f78042e6e54f9cbeb079eada31122cfc9->leave($__internal_1a807b4574f1dc007b3128600a32704f78042e6e54f9cbeb079eada31122cfc9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fea4139e3be8fa1a09f8c48c8e3446a08c1bfc8c7574a1c241041237d1e7d99e = $this->env->getExtension("native_profiler");
        $__internal_fea4139e3be8fa1a09f8c48c8e3446a08c1bfc8c7574a1c241041237d1e7d99e->enter($__internal_fea4139e3be8fa1a09f8c48c8e3446a08c1bfc8c7574a1c241041237d1e7d99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fea4139e3be8fa1a09f8c48c8e3446a08c1bfc8c7574a1c241041237d1e7d99e->leave($__internal_fea4139e3be8fa1a09f8c48c8e3446a08c1bfc8c7574a1c241041237d1e7d99e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7bb64e15b64cc335ee2bed46b25753e1fb0ccc132cbd32dfd153653f45edaec = $this->env->getExtension("native_profiler");
        $__internal_d7bb64e15b64cc335ee2bed46b25753e1fb0ccc132cbd32dfd153653f45edaec->enter($__internal_d7bb64e15b64cc335ee2bed46b25753e1fb0ccc132cbd32dfd153653f45edaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7bb64e15b64cc335ee2bed46b25753e1fb0ccc132cbd32dfd153653f45edaec->leave($__internal_d7bb64e15b64cc335ee2bed46b25753e1fb0ccc132cbd32dfd153653f45edaec_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_47cf812743b32ecd3312f48713d961dfbb2a4bfc1d1eb8ebbd0bd486e7a19049 = $this->env->getExtension("native_profiler");
        $__internal_47cf812743b32ecd3312f48713d961dfbb2a4bfc1d1eb8ebbd0bd486e7a19049->enter($__internal_47cf812743b32ecd3312f48713d961dfbb2a4bfc1d1eb8ebbd0bd486e7a19049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_47cf812743b32ecd3312f48713d961dfbb2a4bfc1d1eb8ebbd0bd486e7a19049->leave($__internal_47cf812743b32ecd3312f48713d961dfbb2a4bfc1d1eb8ebbd0bd486e7a19049_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
