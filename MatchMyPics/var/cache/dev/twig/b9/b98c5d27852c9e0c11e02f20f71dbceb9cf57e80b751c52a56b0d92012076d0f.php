<?php

/* @MatchMyPics/user/index.html.twig */
class __TwigTemplate_bd3e02de6c5e55dd31ea506680a5bd31eb5d367b68a2f9680f295bbdf3e2fe11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@MatchMyPics/user/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fa0ec9e52368f308c78c6160c6ac90bd7a7a3d26a2d2146e201af46edeb80e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa0ec9e52368f308c78c6160c6ac90bd7a7a3d26a2d2146e201af46edeb80e3->enter($__internal_6fa0ec9e52368f308c78c6160c6ac90bd7a7a3d26a2d2146e201af46edeb80e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MatchMyPics/user/index.html.twig"));

        $__internal_6a51557008ea52ddec52589e3d3ebe6e0ec1e4713ab921a2ac74340ee420dc71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a51557008ea52ddec52589e3d3ebe6e0ec1e4713ab921a2ac74340ee420dc71->enter($__internal_6a51557008ea52ddec52589e3d3ebe6e0ec1e4713ab921a2ac74340ee420dc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MatchMyPics/user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fa0ec9e52368f308c78c6160c6ac90bd7a7a3d26a2d2146e201af46edeb80e3->leave($__internal_6fa0ec9e52368f308c78c6160c6ac90bd7a7a3d26a2d2146e201af46edeb80e3_prof);

        
        $__internal_6a51557008ea52ddec52589e3d3ebe6e0ec1e4713ab921a2ac74340ee420dc71->leave($__internal_6a51557008ea52ddec52589e3d3ebe6e0ec1e4713ab921a2ac74340ee420dc71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b691153d9ba1a093c1821da0eac7b7b8a3dd941f7d9b5a5c899b68c065a3e260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b691153d9ba1a093c1821da0eac7b7b8a3dd941f7d9b5a5c899b68c065a3e260->enter($__internal_b691153d9ba1a093c1821da0eac7b7b8a3dd941f7d9b5a5c899b68c065a3e260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6725593c762cde9e6c52f91175f36711bffb88fb208a3538305941725e89a941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6725593c762cde9e6c52f91175f36711bffb88fb208a3538305941725e89a941->enter($__internal_6725593c762cde9e6c52f91175f36711bffb88fb208a3538305941725e89a941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container index\">
    <div class=\"row\">
        <div class=\"col-xs-offset-2 col-xs-8\">
            <div>
                <img class=\"logo_index\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/MatchMyPicsBundle/img/logo_small_blue.png"), "html", null, true);
        echo "\" alt=\"logowcs\">
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-offset-2 col-xs-8\">
            <h2>Identifiant :</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-offset-2 col-xs-8\">
            <input type=\"text\" placeholder=\"Team cacahuette\" name=\"identifiant\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-offset-2 col-xs-8\">
            <h2>Mot de passe :</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-offset-2 col-xs-8\">
            <input type=\"password\" name=\"mdp\">
        </div>
    </div>
    <div class=\"connexion\">
        <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("match_my_pics_rules");
        echo "\">
            <i class=\"fa fa-power-off bouton_connect fa-5x\" aria-hidden=\"true\">
            </i>
            <span class=\"sr-only\">Loading...</span>
        </a>
    </div>
</div>

";
        
        $__internal_6725593c762cde9e6c52f91175f36711bffb88fb208a3538305941725e89a941->leave($__internal_6725593c762cde9e6c52f91175f36711bffb88fb208a3538305941725e89a941_prof);

        
        $__internal_b691153d9ba1a093c1821da0eac7b7b8a3dd941f7d9b5a5c899b68c065a3e260->leave($__internal_b691153d9ba1a093c1821da0eac7b7b8a3dd941f7d9b5a5c899b68c065a3e260_prof);

    }

    public function getTemplateName()
    {
        return "@MatchMyPics/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 34,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}

<div class=\"container index\">
    <div class=\"row\">
        <div class=\"col-xs-offset-2 col-xs-8\">
            <div>
                <img class=\"logo_index\" src=\"{{  asset('bundles/MatchMyPicsBundle/img/logo_small_blue.png') }}\" alt=\"logowcs\">
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-offset-2 col-xs-8\">
            <h2>Identifiant :</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-offset-2 col-xs-8\">
            <input type=\"text\" placeholder=\"Team cacahuette\" name=\"identifiant\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-offset-2 col-xs-8\">
            <h2>Mot de passe :</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-offset-2 col-xs-8\">
            <input type=\"password\" name=\"mdp\">
        </div>
    </div>
    <div class=\"connexion\">
        <a href=\"{{ path('match_my_pics_rules') }}\">
            <i class=\"fa fa-power-off bouton_connect fa-5x\" aria-hidden=\"true\">
            </i>
            <span class=\"sr-only\">Loading...</span>
        </a>
    </div>
</div>

{% endblock %}

", "@MatchMyPics/user/index.html.twig", "/var/www/html/bleau_S3_2017_match_my_pics/MatchMyPics/src/MatchMyPicsBundle/Resources/views/user/index.html.twig");
    }
}
