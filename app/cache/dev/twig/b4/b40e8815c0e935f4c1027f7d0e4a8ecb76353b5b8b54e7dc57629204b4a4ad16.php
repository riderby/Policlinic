<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ef65a217ef7cca329a5fa85aa27eb988e09971709b9cdaf07a4fdd44805a0a11 extends Twig_Template
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
        $__internal_6d21e73b1d40015fb8e8998fd7f901acb9cb4a7f5b37bd71bc389588faefe901 = $this->env->getExtension("native_profiler");
        $__internal_6d21e73b1d40015fb8e8998fd7f901acb9cb4a7f5b37bd71bc389588faefe901->enter($__internal_6d21e73b1d40015fb8e8998fd7f901acb9cb4a7f5b37bd71bc389588faefe901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d21e73b1d40015fb8e8998fd7f901acb9cb4a7f5b37bd71bc389588faefe901->leave($__internal_6d21e73b1d40015fb8e8998fd7f901acb9cb4a7f5b37bd71bc389588faefe901_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56ef87115786914e32a327862f2ad4abafd708d6d27b281e0ab2dfb3c9102387 = $this->env->getExtension("native_profiler");
        $__internal_56ef87115786914e32a327862f2ad4abafd708d6d27b281e0ab2dfb3c9102387->enter($__internal_56ef87115786914e32a327862f2ad4abafd708d6d27b281e0ab2dfb3c9102387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_56ef87115786914e32a327862f2ad4abafd708d6d27b281e0ab2dfb3c9102387->leave($__internal_56ef87115786914e32a327862f2ad4abafd708d6d27b281e0ab2dfb3c9102387_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d16e3fd2f83f0e1e0183812d4eaab6ae04612f05c654c398741c27232715587 = $this->env->getExtension("native_profiler");
        $__internal_9d16e3fd2f83f0e1e0183812d4eaab6ae04612f05c654c398741c27232715587->enter($__internal_9d16e3fd2f83f0e1e0183812d4eaab6ae04612f05c654c398741c27232715587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9d16e3fd2f83f0e1e0183812d4eaab6ae04612f05c654c398741c27232715587->leave($__internal_9d16e3fd2f83f0e1e0183812d4eaab6ae04612f05c654c398741c27232715587_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f48a7b9e2debde7a23792b849e902c6fc717d0f803ec1c98a64c5c92cbceffd4 = $this->env->getExtension("native_profiler");
        $__internal_f48a7b9e2debde7a23792b849e902c6fc717d0f803ec1c98a64c5c92cbceffd4->enter($__internal_f48a7b9e2debde7a23792b849e902c6fc717d0f803ec1c98a64c5c92cbceffd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f48a7b9e2debde7a23792b849e902c6fc717d0f803ec1c98a64c5c92cbceffd4->leave($__internal_f48a7b9e2debde7a23792b849e902c6fc717d0f803ec1c98a64c5c92cbceffd4_prof);

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
