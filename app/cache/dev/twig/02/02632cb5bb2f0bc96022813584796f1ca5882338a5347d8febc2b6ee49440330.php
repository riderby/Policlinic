<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_334d91adf73ac8cbb5a15dfe97c6ccfe79066b557def7aad03ef9a8a61b78684 extends Twig_Template
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
        $__internal_d548ad628336e0fa992f4b79efbf7df556bff4efc7fc4b3e555b7a8c25db58ba = $this->env->getExtension("native_profiler");
        $__internal_d548ad628336e0fa992f4b79efbf7df556bff4efc7fc4b3e555b7a8c25db58ba->enter($__internal_d548ad628336e0fa992f4b79efbf7df556bff4efc7fc4b3e555b7a8c25db58ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d548ad628336e0fa992f4b79efbf7df556bff4efc7fc4b3e555b7a8c25db58ba->leave($__internal_d548ad628336e0fa992f4b79efbf7df556bff4efc7fc4b3e555b7a8c25db58ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8df78b09d70bd27d6406da08d5d9744d7af81452175b1d30f18a03e91557bf8c = $this->env->getExtension("native_profiler");
        $__internal_8df78b09d70bd27d6406da08d5d9744d7af81452175b1d30f18a03e91557bf8c->enter($__internal_8df78b09d70bd27d6406da08d5d9744d7af81452175b1d30f18a03e91557bf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8df78b09d70bd27d6406da08d5d9744d7af81452175b1d30f18a03e91557bf8c->leave($__internal_8df78b09d70bd27d6406da08d5d9744d7af81452175b1d30f18a03e91557bf8c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9215de1d33566da55f374700919c7ecc319a2d735bf9d5b0e25ee5ae8f7d6c0f = $this->env->getExtension("native_profiler");
        $__internal_9215de1d33566da55f374700919c7ecc319a2d735bf9d5b0e25ee5ae8f7d6c0f->enter($__internal_9215de1d33566da55f374700919c7ecc319a2d735bf9d5b0e25ee5ae8f7d6c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9215de1d33566da55f374700919c7ecc319a2d735bf9d5b0e25ee5ae8f7d6c0f->leave($__internal_9215de1d33566da55f374700919c7ecc319a2d735bf9d5b0e25ee5ae8f7d6c0f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d46a21b8b3d05a47f86488aa7bf3e62f821e38d3bb933ad9b82200522ae1da73 = $this->env->getExtension("native_profiler");
        $__internal_d46a21b8b3d05a47f86488aa7bf3e62f821e38d3bb933ad9b82200522ae1da73->enter($__internal_d46a21b8b3d05a47f86488aa7bf3e62f821e38d3bb933ad9b82200522ae1da73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d46a21b8b3d05a47f86488aa7bf3e62f821e38d3bb933ad9b82200522ae1da73->leave($__internal_d46a21b8b3d05a47f86488aa7bf3e62f821e38d3bb933ad9b82200522ae1da73_prof);

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
