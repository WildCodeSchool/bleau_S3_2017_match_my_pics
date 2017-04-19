<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f5a4e4e47a61dbc596b8a5cf6c4251cf9809cbaa7fe0192c935bf3aa4bd7f2e4 extends Twig_Template
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
        $__internal_e558848767666d5a529992aae37f0cbbb95f0e8945459cd5f6fa61417cf9288f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e558848767666d5a529992aae37f0cbbb95f0e8945459cd5f6fa61417cf9288f->enter($__internal_e558848767666d5a529992aae37f0cbbb95f0e8945459cd5f6fa61417cf9288f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f84e2696a6f105990b1d8ce344bb0a77b0f2180ffbf5bdb297ab639b3adb40b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84e2696a6f105990b1d8ce344bb0a77b0f2180ffbf5bdb297ab639b3adb40b1->enter($__internal_f84e2696a6f105990b1d8ce344bb0a77b0f2180ffbf5bdb297ab639b3adb40b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e558848767666d5a529992aae37f0cbbb95f0e8945459cd5f6fa61417cf9288f->leave($__internal_e558848767666d5a529992aae37f0cbbb95f0e8945459cd5f6fa61417cf9288f_prof);

        
        $__internal_f84e2696a6f105990b1d8ce344bb0a77b0f2180ffbf5bdb297ab639b3adb40b1->leave($__internal_f84e2696a6f105990b1d8ce344bb0a77b0f2180ffbf5bdb297ab639b3adb40b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8724c0127f894392649a48ad445a73d90304dd2c5963cf990472379e7f6fff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8724c0127f894392649a48ad445a73d90304dd2c5963cf990472379e7f6fff9->enter($__internal_f8724c0127f894392649a48ad445a73d90304dd2c5963cf990472379e7f6fff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac78f37f2fba8e98f351522875d4778036440a852f8661c7c44e4ba05dc1676d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac78f37f2fba8e98f351522875d4778036440a852f8661c7c44e4ba05dc1676d->enter($__internal_ac78f37f2fba8e98f351522875d4778036440a852f8661c7c44e4ba05dc1676d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ac78f37f2fba8e98f351522875d4778036440a852f8661c7c44e4ba05dc1676d->leave($__internal_ac78f37f2fba8e98f351522875d4778036440a852f8661c7c44e4ba05dc1676d_prof);

        
        $__internal_f8724c0127f894392649a48ad445a73d90304dd2c5963cf990472379e7f6fff9->leave($__internal_f8724c0127f894392649a48ad445a73d90304dd2c5963cf990472379e7f6fff9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cbe6b41df727799fec260ff2347e5b0943be9e1b48792acb9c54d3e125bfbec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cbe6b41df727799fec260ff2347e5b0943be9e1b48792acb9c54d3e125bfbec->enter($__internal_8cbe6b41df727799fec260ff2347e5b0943be9e1b48792acb9c54d3e125bfbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12fe0c0b3435c670d346094616ac32fc9a5e6623ef538f70ac0560f494f6dbb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12fe0c0b3435c670d346094616ac32fc9a5e6623ef538f70ac0560f494f6dbb4->enter($__internal_12fe0c0b3435c670d346094616ac32fc9a5e6623ef538f70ac0560f494f6dbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_12fe0c0b3435c670d346094616ac32fc9a5e6623ef538f70ac0560f494f6dbb4->leave($__internal_12fe0c0b3435c670d346094616ac32fc9a5e6623ef538f70ac0560f494f6dbb4_prof);

        
        $__internal_8cbe6b41df727799fec260ff2347e5b0943be9e1b48792acb9c54d3e125bfbec->leave($__internal_8cbe6b41df727799fec260ff2347e5b0943be9e1b48792acb9c54d3e125bfbec_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2995c870a8be3d371794e9ca5d49d399b128e7bda4451691f039ed4727c209b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2995c870a8be3d371794e9ca5d49d399b128e7bda4451691f039ed4727c209b8->enter($__internal_2995c870a8be3d371794e9ca5d49d399b128e7bda4451691f039ed4727c209b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92a75d2e7e239f253cb433eb565a3245acaf852f9b5b6471257a0562d8b28749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a75d2e7e239f253cb433eb565a3245acaf852f9b5b6471257a0562d8b28749->enter($__internal_92a75d2e7e239f253cb433eb565a3245acaf852f9b5b6471257a0562d8b28749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_92a75d2e7e239f253cb433eb565a3245acaf852f9b5b6471257a0562d8b28749->leave($__internal_92a75d2e7e239f253cb433eb565a3245acaf852f9b5b6471257a0562d8b28749_prof);

        
        $__internal_2995c870a8be3d371794e9ca5d49d399b128e7bda4451691f039ed4727c209b8->leave($__internal_2995c870a8be3d371794e9ca5d49d399b128e7bda4451691f039ed4727c209b8_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/bleau_S3_2017_match_my_pics/MatchMyPics/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
