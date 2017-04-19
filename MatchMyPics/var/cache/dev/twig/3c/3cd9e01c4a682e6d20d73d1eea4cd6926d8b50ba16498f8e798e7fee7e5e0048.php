<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
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
        $__internal_20970319ef6006eea03127c85bb3c5b4fe54102948a7762719aaca5bc6dd481f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20970319ef6006eea03127c85bb3c5b4fe54102948a7762719aaca5bc6dd481f->enter($__internal_20970319ef6006eea03127c85bb3c5b4fe54102948a7762719aaca5bc6dd481f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d3838abdf41d06bef69aef73bd6fa865509b7a54a609af73c3cb3eded44210a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3838abdf41d06bef69aef73bd6fa865509b7a54a609af73c3cb3eded44210a6->enter($__internal_d3838abdf41d06bef69aef73bd6fa865509b7a54a609af73c3cb3eded44210a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20970319ef6006eea03127c85bb3c5b4fe54102948a7762719aaca5bc6dd481f->leave($__internal_20970319ef6006eea03127c85bb3c5b4fe54102948a7762719aaca5bc6dd481f_prof);

        
        $__internal_d3838abdf41d06bef69aef73bd6fa865509b7a54a609af73c3cb3eded44210a6->leave($__internal_d3838abdf41d06bef69aef73bd6fa865509b7a54a609af73c3cb3eded44210a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1129769279cdf6a89502655bd316a0d629d4630ef1e8cc9673a654344eb6e37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1129769279cdf6a89502655bd316a0d629d4630ef1e8cc9673a654344eb6e37a->enter($__internal_1129769279cdf6a89502655bd316a0d629d4630ef1e8cc9673a654344eb6e37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_99a40c6ba9ea6d1e26027a5b59a855b7ac64f7a401acab810416a7ea9542de83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a40c6ba9ea6d1e26027a5b59a855b7ac64f7a401acab810416a7ea9542de83->enter($__internal_99a40c6ba9ea6d1e26027a5b59a855b7ac64f7a401acab810416a7ea9542de83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_99a40c6ba9ea6d1e26027a5b59a855b7ac64f7a401acab810416a7ea9542de83->leave($__internal_99a40c6ba9ea6d1e26027a5b59a855b7ac64f7a401acab810416a7ea9542de83_prof);

        
        $__internal_1129769279cdf6a89502655bd316a0d629d4630ef1e8cc9673a654344eb6e37a->leave($__internal_1129769279cdf6a89502655bd316a0d629d4630ef1e8cc9673a654344eb6e37a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81e564ec2140d7b95f2cff716ddcbb837aa53a04bde7825080a8f6b8157f58ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e564ec2140d7b95f2cff716ddcbb837aa53a04bde7825080a8f6b8157f58ca->enter($__internal_81e564ec2140d7b95f2cff716ddcbb837aa53a04bde7825080a8f6b8157f58ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4fdfa4b4613bc57e4f799411f9300990bc3da6f33f5c17d4f7be167640f72fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fdfa4b4613bc57e4f799411f9300990bc3da6f33f5c17d4f7be167640f72fb6->enter($__internal_4fdfa4b4613bc57e4f799411f9300990bc3da6f33f5c17d4f7be167640f72fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4fdfa4b4613bc57e4f799411f9300990bc3da6f33f5c17d4f7be167640f72fb6->leave($__internal_4fdfa4b4613bc57e4f799411f9300990bc3da6f33f5c17d4f7be167640f72fb6_prof);

        
        $__internal_81e564ec2140d7b95f2cff716ddcbb837aa53a04bde7825080a8f6b8157f58ca->leave($__internal_81e564ec2140d7b95f2cff716ddcbb837aa53a04bde7825080a8f6b8157f58ca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9794cf3cbd508938c00013f13aecb0fcbed2f84059281c54b3ca8cc1535646f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9794cf3cbd508938c00013f13aecb0fcbed2f84059281c54b3ca8cc1535646f->enter($__internal_d9794cf3cbd508938c00013f13aecb0fcbed2f84059281c54b3ca8cc1535646f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3cc0054309ca085aa8734be549c326658592f20db8279f396b2efc36679bc7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc0054309ca085aa8734be549c326658592f20db8279f396b2efc36679bc7d8->enter($__internal_3cc0054309ca085aa8734be549c326658592f20db8279f396b2efc36679bc7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3cc0054309ca085aa8734be549c326658592f20db8279f396b2efc36679bc7d8->leave($__internal_3cc0054309ca085aa8734be549c326658592f20db8279f396b2efc36679bc7d8_prof);

        
        $__internal_d9794cf3cbd508938c00013f13aecb0fcbed2f84059281c54b3ca8cc1535646f->leave($__internal_d9794cf3cbd508938c00013f13aecb0fcbed2f84059281c54b3ca8cc1535646f_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/bleau_S3_2017_match_my_pics/MatchMyPics/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
