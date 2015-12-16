<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b5521badec3972eea293cdc3d86a57f83b8f9051b624fb517a45542b64ca5c7c extends Twig_Template
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
        $__internal_88a29196579780a76ddca8704a044ac0c0cdb315a1dd942edae5e03ed12ec931 = $this->env->getExtension("native_profiler");
        $__internal_88a29196579780a76ddca8704a044ac0c0cdb315a1dd942edae5e03ed12ec931->enter($__internal_88a29196579780a76ddca8704a044ac0c0cdb315a1dd942edae5e03ed12ec931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88a29196579780a76ddca8704a044ac0c0cdb315a1dd942edae5e03ed12ec931->leave($__internal_88a29196579780a76ddca8704a044ac0c0cdb315a1dd942edae5e03ed12ec931_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63836a47cf13f39143ac647d0bf68994552906491e4b48a4cb860ba599dc4c14 = $this->env->getExtension("native_profiler");
        $__internal_63836a47cf13f39143ac647d0bf68994552906491e4b48a4cb860ba599dc4c14->enter($__internal_63836a47cf13f39143ac647d0bf68994552906491e4b48a4cb860ba599dc4c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_63836a47cf13f39143ac647d0bf68994552906491e4b48a4cb860ba599dc4c14->leave($__internal_63836a47cf13f39143ac647d0bf68994552906491e4b48a4cb860ba599dc4c14_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e71ec0d67ff10ace54c5309ce3dc29c2143cd202e963ce58f68a3ae9f2f9f55e = $this->env->getExtension("native_profiler");
        $__internal_e71ec0d67ff10ace54c5309ce3dc29c2143cd202e963ce58f68a3ae9f2f9f55e->enter($__internal_e71ec0d67ff10ace54c5309ce3dc29c2143cd202e963ce58f68a3ae9f2f9f55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e71ec0d67ff10ace54c5309ce3dc29c2143cd202e963ce58f68a3ae9f2f9f55e->leave($__internal_e71ec0d67ff10ace54c5309ce3dc29c2143cd202e963ce58f68a3ae9f2f9f55e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7118c583fa6e26e943680c86657b4d158c7a8acc70f54b55fc846802b8fc4dd1 = $this->env->getExtension("native_profiler");
        $__internal_7118c583fa6e26e943680c86657b4d158c7a8acc70f54b55fc846802b8fc4dd1->enter($__internal_7118c583fa6e26e943680c86657b4d158c7a8acc70f54b55fc846802b8fc4dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7118c583fa6e26e943680c86657b4d158c7a8acc70f54b55fc846802b8fc4dd1->leave($__internal_7118c583fa6e26e943680c86657b4d158c7a8acc70f54b55fc846802b8fc4dd1_prof);

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
