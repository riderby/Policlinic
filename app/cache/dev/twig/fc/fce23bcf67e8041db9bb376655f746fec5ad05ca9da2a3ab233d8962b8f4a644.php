<?php

/* base.html.twig */
class __TwigTemplate_35ee1afe23992e608ce22247ced3cb63029e6736fedfff98a1ef8717c4f8d81c extends Twig_Template
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
        $__internal_70c9051b9510aca65fbacabf4e707183078dc7f1b7625fe1978b3255e0e53504 = $this->env->getExtension("native_profiler");
        $__internal_70c9051b9510aca65fbacabf4e707183078dc7f1b7625fe1978b3255e0e53504->enter($__internal_70c9051b9510aca65fbacabf4e707183078dc7f1b7625fe1978b3255e0e53504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_70c9051b9510aca65fbacabf4e707183078dc7f1b7625fe1978b3255e0e53504->leave($__internal_70c9051b9510aca65fbacabf4e707183078dc7f1b7625fe1978b3255e0e53504_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3b9b26e557edd976e6b62f7f946d8c47e30bded43b157813556416b8242ef0c = $this->env->getExtension("native_profiler");
        $__internal_c3b9b26e557edd976e6b62f7f946d8c47e30bded43b157813556416b8242ef0c->enter($__internal_c3b9b26e557edd976e6b62f7f946d8c47e30bded43b157813556416b8242ef0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c3b9b26e557edd976e6b62f7f946d8c47e30bded43b157813556416b8242ef0c->leave($__internal_c3b9b26e557edd976e6b62f7f946d8c47e30bded43b157813556416b8242ef0c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f79eb4ec6ecb4ba8da97e398c1aee3eb7b3513087bcf901a83af517524006a0e = $this->env->getExtension("native_profiler");
        $__internal_f79eb4ec6ecb4ba8da97e398c1aee3eb7b3513087bcf901a83af517524006a0e->enter($__internal_f79eb4ec6ecb4ba8da97e398c1aee3eb7b3513087bcf901a83af517524006a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f79eb4ec6ecb4ba8da97e398c1aee3eb7b3513087bcf901a83af517524006a0e->leave($__internal_f79eb4ec6ecb4ba8da97e398c1aee3eb7b3513087bcf901a83af517524006a0e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_61c69c8f8c40497aeec70b548096242a4b04a24d6753424efb4d56317bee462f = $this->env->getExtension("native_profiler");
        $__internal_61c69c8f8c40497aeec70b548096242a4b04a24d6753424efb4d56317bee462f->enter($__internal_61c69c8f8c40497aeec70b548096242a4b04a24d6753424efb4d56317bee462f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_61c69c8f8c40497aeec70b548096242a4b04a24d6753424efb4d56317bee462f->leave($__internal_61c69c8f8c40497aeec70b548096242a4b04a24d6753424efb4d56317bee462f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5cfa99abed262a1db45b2cf9bf8434d92ec3fc9a1773ee8cab4681c07d77a712 = $this->env->getExtension("native_profiler");
        $__internal_5cfa99abed262a1db45b2cf9bf8434d92ec3fc9a1773ee8cab4681c07d77a712->enter($__internal_5cfa99abed262a1db45b2cf9bf8434d92ec3fc9a1773ee8cab4681c07d77a712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5cfa99abed262a1db45b2cf9bf8434d92ec3fc9a1773ee8cab4681c07d77a712->leave($__internal_5cfa99abed262a1db45b2cf9bf8434d92ec3fc9a1773ee8cab4681c07d77a712_prof);

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
