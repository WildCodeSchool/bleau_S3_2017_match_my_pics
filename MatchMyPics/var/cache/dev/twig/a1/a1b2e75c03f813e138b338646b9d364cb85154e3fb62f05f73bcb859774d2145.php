<?php

/* @MatchMyPics/user/header_return.html.twig */
class __TwigTemplate_64f046b2cd1964611b54b4f9afdc08f53618abb1de09d9bbacaf4a86d0c082cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@MatchMyPics/user/header_return.html.twig", 1);
        $this->blocks = array(
            'return' => array($this, 'block_return'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_192a6d926642f721e081f972d4b812c9f2b35e3b6b71f27502b08850ea7f1d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192a6d926642f721e081f972d4b812c9f2b35e3b6b71f27502b08850ea7f1d96->enter($__internal_192a6d926642f721e081f972d4b812c9f2b35e3b6b71f27502b08850ea7f1d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MatchMyPics/user/header_return.html.twig"));

        $__internal_d3ab4bc3c00a657d563016f197be629bb453551f18e04c40656aefd76a8d30ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ab4bc3c00a657d563016f197be629bb453551f18e04c40656aefd76a8d30ca->enter($__internal_d3ab4bc3c00a657d563016f197be629bb453551f18e04c40656aefd76a8d30ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MatchMyPics/user/header_return.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_192a6d926642f721e081f972d4b812c9f2b35e3b6b71f27502b08850ea7f1d96->leave($__internal_192a6d926642f721e081f972d4b812c9f2b35e3b6b71f27502b08850ea7f1d96_prof);

        
        $__internal_d3ab4bc3c00a657d563016f197be629bb453551f18e04c40656aefd76a8d30ca->leave($__internal_d3ab4bc3c00a657d563016f197be629bb453551f18e04c40656aefd76a8d30ca_prof);

    }

    // line 3
    public function block_return($context, array $blocks = array())
    {
        $__internal_be11e73e3fc384a419e95300313adf880913110b960fc995904821fe886cecd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be11e73e3fc384a419e95300313adf880913110b960fc995904821fe886cecd0->enter($__internal_be11e73e3fc384a419e95300313adf880913110b960fc995904821fe886cecd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "return"));

        $__internal_009782f9716866112b11aa4b69e52a9c35197c1c8e499bada12070a786f6eb70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009782f9716866112b11aa4b69e52a9c35197c1c8e499bada12070a786f6eb70->enter($__internal_009782f9716866112b11aa4b69e52a9c35197c1c8e499bada12070a786f6eb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "return"));

        // line 4
        echo "
    <div class=\"container header_return\">
        <div class=\"row\">
            <div class=\"col-xs-2 header_pad\">
                <a href=\"javascript:history.back()\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/MatchMyPicsBundle/img/flèche_retour.png"), "html", null, true);
        echo "\" class=\"return\" alt=\"fleche_retour\"></a>
            </div>
            <div class=\"col-xs-8 header_pad\">
                <h2>Match My Pics</h2>
            </div>
            <div class=\"col-xs-2 header_pad\">
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/MatchMyPicsBundle/img/logo_blanc_pastille.png"), "html", null, true);
        echo "\" class=\"logowcs_header\" alt=\"fleche_retour\">
            </div>
        </div>
    </div>

";
        
        $__internal_009782f9716866112b11aa4b69e52a9c35197c1c8e499bada12070a786f6eb70->leave($__internal_009782f9716866112b11aa4b69e52a9c35197c1c8e499bada12070a786f6eb70_prof);

        
        $__internal_be11e73e3fc384a419e95300313adf880913110b960fc995904821fe886cecd0->leave($__internal_be11e73e3fc384a419e95300313adf880913110b960fc995904821fe886cecd0_prof);

    }

    public function getTemplateName()
    {
        return "@MatchMyPics/user/header_return.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block return %}

    <div class=\"container header_return\">
        <div class=\"row\">
            <div class=\"col-xs-2 header_pad\">
                <a href=\"javascript:history.back()\"><img src=\"{{ asset('bundles/MatchMyPicsBundle/img/flèche_retour.png') }}\" class=\"return\" alt=\"fleche_retour\"></a>
            </div>
            <div class=\"col-xs-8 header_pad\">
                <h2>Match My Pics</h2>
            </div>
            <div class=\"col-xs-2 header_pad\">
                <img src=\"{{ asset('bundles/MatchMyPicsBundle/img/logo_blanc_pastille.png') }}\" class=\"logowcs_header\" alt=\"fleche_retour\">
            </div>
        </div>
    </div>

{% endblock %}

", "@MatchMyPics/user/header_return.html.twig", "/var/www/html/bleau_S3_2017_match_my_pics/MatchMyPics/src/MatchMyPicsBundle/Resources/views/user/header_return.html.twig");
    }
}
