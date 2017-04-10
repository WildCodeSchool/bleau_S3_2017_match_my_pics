<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
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
        $__internal_0a761602b76792868bd07c75584aa078dd6ddaa5307f995c8f362e2dffb31cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a761602b76792868bd07c75584aa078dd6ddaa5307f995c8f362e2dffb31cbf->enter($__internal_0a761602b76792868bd07c75584aa078dd6ddaa5307f995c8f362e2dffb31cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_59fa5de2963685f0dbb0b4c6a341085cb848353e2ebb4eb13b7e110407060b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fa5de2963685f0dbb0b4c6a341085cb848353e2ebb4eb13b7e110407060b32->enter($__internal_59fa5de2963685f0dbb0b4c6a341085cb848353e2ebb4eb13b7e110407060b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a761602b76792868bd07c75584aa078dd6ddaa5307f995c8f362e2dffb31cbf->leave($__internal_0a761602b76792868bd07c75584aa078dd6ddaa5307f995c8f362e2dffb31cbf_prof);

        
        $__internal_59fa5de2963685f0dbb0b4c6a341085cb848353e2ebb4eb13b7e110407060b32->leave($__internal_59fa5de2963685f0dbb0b4c6a341085cb848353e2ebb4eb13b7e110407060b32_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb847401bc489f8a3710218863c82d6da0ca5776e81822b9dfcbb59dbd699f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb847401bc489f8a3710218863c82d6da0ca5776e81822b9dfcbb59dbd699f62->enter($__internal_eb847401bc489f8a3710218863c82d6da0ca5776e81822b9dfcbb59dbd699f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cceb370aa7844c6411592502445f69418d044a442bf70a356767d4ffe4f857ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cceb370aa7844c6411592502445f69418d044a442bf70a356767d4ffe4f857ec->enter($__internal_cceb370aa7844c6411592502445f69418d044a442bf70a356767d4ffe4f857ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cceb370aa7844c6411592502445f69418d044a442bf70a356767d4ffe4f857ec->leave($__internal_cceb370aa7844c6411592502445f69418d044a442bf70a356767d4ffe4f857ec_prof);

        
        $__internal_eb847401bc489f8a3710218863c82d6da0ca5776e81822b9dfcbb59dbd699f62->leave($__internal_eb847401bc489f8a3710218863c82d6da0ca5776e81822b9dfcbb59dbd699f62_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cbf650f42b6dbd433e0575c4228fdea8ade9b59bd8b797bebfa2280878561762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbf650f42b6dbd433e0575c4228fdea8ade9b59bd8b797bebfa2280878561762->enter($__internal_cbf650f42b6dbd433e0575c4228fdea8ade9b59bd8b797bebfa2280878561762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_812372057a58782c3b5620a54d2a8865858df241d923da4ae3cbb728af293d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812372057a58782c3b5620a54d2a8865858df241d923da4ae3cbb728af293d2f->enter($__internal_812372057a58782c3b5620a54d2a8865858df241d923da4ae3cbb728af293d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_812372057a58782c3b5620a54d2a8865858df241d923da4ae3cbb728af293d2f->leave($__internal_812372057a58782c3b5620a54d2a8865858df241d923da4ae3cbb728af293d2f_prof);

        
        $__internal_cbf650f42b6dbd433e0575c4228fdea8ade9b59bd8b797bebfa2280878561762->leave($__internal_cbf650f42b6dbd433e0575c4228fdea8ade9b59bd8b797bebfa2280878561762_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_da1bc4b899f5173749247ba9d8f8b64f85c03af13f647007ff66c4023918dbbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1bc4b899f5173749247ba9d8f8b64f85c03af13f647007ff66c4023918dbbc->enter($__internal_da1bc4b899f5173749247ba9d8f8b64f85c03af13f647007ff66c4023918dbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_077f993e104e4ea8d75cc65a5bf80a4c05cf04e63bc0b11011f25a885da346d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077f993e104e4ea8d75cc65a5bf80a4c05cf04e63bc0b11011f25a885da346d7->enter($__internal_077f993e104e4ea8d75cc65a5bf80a4c05cf04e63bc0b11011f25a885da346d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_077f993e104e4ea8d75cc65a5bf80a4c05cf04e63bc0b11011f25a885da346d7->leave($__internal_077f993e104e4ea8d75cc65a5bf80a4c05cf04e63bc0b11011f25a885da346d7_prof);

        
        $__internal_da1bc4b899f5173749247ba9d8f8b64f85c03af13f647007ff66c4023918dbbc->leave($__internal_da1bc4b899f5173749247ba9d8f8b64f85c03af13f647007ff66c4023918dbbc_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/bleau_S3_2017_match_my_pics/MatchMyPics/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
