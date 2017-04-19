<?php

/* base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'return' => array($this, 'block_return'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8849aa9d643fc60d8779651845e7347ec42b448ed3ff607badc64a520a71759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8849aa9d643fc60d8779651845e7347ec42b448ed3ff607badc64a520a71759->enter($__internal_a8849aa9d643fc60d8779651845e7347ec42b448ed3ff607badc64a520a71759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_588d06b4c57a1c08b70741d5c2ff8499d8fbf8d4c97309f65ffae5950c7c1ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588d06b4c57a1c08b70741d5c2ff8499d8fbf8d4c97309f65ffae5950c7c1ddd->enter($__internal_588d06b4c57a1c08b70741d5c2ff8499d8fbf8d4c97309f65ffae5950c7c1ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"author\" content=\"Lucie Colon, Auzanet Charly, Lemarinier Jérémy, Hery, Guillaume\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <!-- Bootstrap -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <!-- Call CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/MatchMyPicsBundle/css/add_your_pics.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/MatchMyPicsBundle/css/challenge_x.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/MatchMyPicsBundle/css/challenges.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/MatchMyPicsBundle/css/global.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/MatchMyPicsBundle/css/home.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/MatchMyPicsBundle/css/index.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/MatchMyPicsBundle/css/indice.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/MatchMyPicsBundle/css/rules_of_game.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/MatchMyPicsBundle/css/sommaire_Admin.css"), "html", null, true);
        echo "\"/>

        <!-- Call Font Awesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/MatchMyPicsBundle/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('return', $context, $blocks);
        // line 30
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "        <!-- Jquery -->
        <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Boostrap Js -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

    </body>
</html>
";
        
        $__internal_a8849aa9d643fc60d8779651845e7347ec42b448ed3ff607badc64a520a71759->leave($__internal_a8849aa9d643fc60d8779651845e7347ec42b448ed3ff607badc64a520a71759_prof);

        
        $__internal_588d06b4c57a1c08b70741d5c2ff8499d8fbf8d4c97309f65ffae5950c7c1ddd->leave($__internal_588d06b4c57a1c08b70741d5c2ff8499d8fbf8d4c97309f65ffae5950c7c1ddd_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a2482adce32dabaff089baef5df46470ea81ce810be6455969e4633f3ca1a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2482adce32dabaff089baef5df46470ea81ce810be6455969e4633f3ca1a3c->enter($__internal_7a2482adce32dabaff089baef5df46470ea81ce810be6455969e4633f3ca1a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a30317099879a7ae356fd7359cfe72425a794ec08f8c872848843e1e407330bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30317099879a7ae356fd7359cfe72425a794ec08f8c872848843e1e407330bb->enter($__internal_a30317099879a7ae356fd7359cfe72425a794ec08f8c872848843e1e407330bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MatchMyPics - WCS";
        
        $__internal_a30317099879a7ae356fd7359cfe72425a794ec08f8c872848843e1e407330bb->leave($__internal_a30317099879a7ae356fd7359cfe72425a794ec08f8c872848843e1e407330bb_prof);

        
        $__internal_7a2482adce32dabaff089baef5df46470ea81ce810be6455969e4633f3ca1a3c->leave($__internal_7a2482adce32dabaff089baef5df46470ea81ce810be6455969e4633f3ca1a3c_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7091689d4755c6cee2d5a9623c0dcae9ae4fa19c29d085d60b459a9096947d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7091689d4755c6cee2d5a9623c0dcae9ae4fa19c29d085d60b459a9096947d1e->enter($__internal_7091689d4755c6cee2d5a9623c0dcae9ae4fa19c29d085d60b459a9096947d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9085b96d6547919c55a0c0c63115d5a3732fb5a7950705d140df6924d6d72d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9085b96d6547919c55a0c0c63115d5a3732fb5a7950705d140df6924d6d72d33->enter($__internal_9085b96d6547919c55a0c0c63115d5a3732fb5a7950705d140df6924d6d72d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9085b96d6547919c55a0c0c63115d5a3732fb5a7950705d140df6924d6d72d33->leave($__internal_9085b96d6547919c55a0c0c63115d5a3732fb5a7950705d140df6924d6d72d33_prof);

        
        $__internal_7091689d4755c6cee2d5a9623c0dcae9ae4fa19c29d085d60b459a9096947d1e->leave($__internal_7091689d4755c6cee2d5a9623c0dcae9ae4fa19c29d085d60b459a9096947d1e_prof);

    }

    // line 29
    public function block_return($context, array $blocks = array())
    {
        $__internal_97f4ff952d4a5c8a4d474e5b8c93e593dacc22bb29659b20c5d9811fa838b9c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f4ff952d4a5c8a4d474e5b8c93e593dacc22bb29659b20c5d9811fa838b9c0->enter($__internal_97f4ff952d4a5c8a4d474e5b8c93e593dacc22bb29659b20c5d9811fa838b9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "return"));

        $__internal_16fa84a5db3aa7a94e04eb46e4347eb93ba3865ea1e84222a7f39613641dd69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16fa84a5db3aa7a94e04eb46e4347eb93ba3865ea1e84222a7f39613641dd69b->enter($__internal_16fa84a5db3aa7a94e04eb46e4347eb93ba3865ea1e84222a7f39613641dd69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "return"));

        
        $__internal_16fa84a5db3aa7a94e04eb46e4347eb93ba3865ea1e84222a7f39613641dd69b->leave($__internal_16fa84a5db3aa7a94e04eb46e4347eb93ba3865ea1e84222a7f39613641dd69b_prof);

        
        $__internal_97f4ff952d4a5c8a4d474e5b8c93e593dacc22bb29659b20c5d9811fa838b9c0->leave($__internal_97f4ff952d4a5c8a4d474e5b8c93e593dacc22bb29659b20c5d9811fa838b9c0_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_87a540f953918aecd8d96ceae9b38e1600ffba4eb511e6a0642443eb0b9c1a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a540f953918aecd8d96ceae9b38e1600ffba4eb511e6a0642443eb0b9c1a2a->enter($__internal_87a540f953918aecd8d96ceae9b38e1600ffba4eb511e6a0642443eb0b9c1a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3f2f7834c711632d8084d0d6fb314f00620f44eb895bd2e956cf183aea9df98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f2f7834c711632d8084d0d6fb314f00620f44eb895bd2e956cf183aea9df98->enter($__internal_c3f2f7834c711632d8084d0d6fb314f00620f44eb895bd2e956cf183aea9df98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c3f2f7834c711632d8084d0d6fb314f00620f44eb895bd2e956cf183aea9df98->leave($__internal_c3f2f7834c711632d8084d0d6fb314f00620f44eb895bd2e956cf183aea9df98_prof);

        
        $__internal_87a540f953918aecd8d96ceae9b38e1600ffba4eb511e6a0642443eb0b9c1a2a->leave($__internal_87a540f953918aecd8d96ceae9b38e1600ffba4eb511e6a0642443eb0b9c1a2a_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f72b444571bf4ff37fa01eb8d4a6c1673f7087db2b04096f0f328ce8abd71fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72b444571bf4ff37fa01eb8d4a6c1673f7087db2b04096f0f328ce8abd71fe0->enter($__internal_f72b444571bf4ff37fa01eb8d4a6c1673f7087db2b04096f0f328ce8abd71fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f4bd2376c59b8ea1f2464be04c490820f1a859d3797fdfc1d81478040147f1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bd2376c59b8ea1f2464be04c490820f1a859d3797fdfc1d81478040147f1d2->enter($__internal_f4bd2376c59b8ea1f2464be04c490820f1a859d3797fdfc1d81478040147f1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f4bd2376c59b8ea1f2464be04c490820f1a859d3797fdfc1d81478040147f1d2->leave($__internal_f4bd2376c59b8ea1f2464be04c490820f1a859d3797fdfc1d81478040147f1d2_prof);

        
        $__internal_f72b444571bf4ff37fa01eb8d4a6c1673f7087db2b04096f0f328ce8abd71fe0->leave($__internal_f72b444571bf4ff37fa01eb8d4a6c1673f7087db2b04096f0f328ce8abd71fe0_prof);

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
        return array (  193 => 31,  176 => 30,  159 => 29,  142 => 9,  124 => 8,  106 => 32,  103 => 31,  100 => 30,  98 => 29,  92 => 26,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  45 => 10,  43 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"author\" content=\"Lucie Colon, Auzanet Charly, Lemarinier Jérémy, Hery, Guillaume\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>{% block title %}MatchMyPics - WCS{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        <!-- Bootstrap -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <!-- Call CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/MatchMyPicsBundle/css/add_your_pics.css') }}\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/MatchMyPicsBundle/css/challenge_x.css') }}\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/MatchMyPicsBundle/css/challenges.css') }}\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/MatchMyPicsBundle/css/global.css') }}\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/MatchMyPicsBundle/css/home.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/MatchMyPicsBundle/css/index.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/MatchMyPicsBundle/css/indice.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/MatchMyPicsBundle/css/rules_of_game.css') }}\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/MatchMyPicsBundle/css/sommaire_Admin.css') }}\"/>

        <!-- Call Font Awesome -->
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/MatchMyPicsBundle/font-awesome/css/font-awesome.min.css') }}\"/>
    </head>
    <body>
        {% block return %}{% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <!-- Jquery -->
        <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Boostrap Js -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

    </body>
</html>
", "base.html.twig", "/var/www/html/bleau_S3_2017_match_my_pics/MatchMyPics/app/Resources/views/base.html.twig");
    }
}
