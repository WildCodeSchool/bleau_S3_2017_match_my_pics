<?php

/* @MatchMyPics/user/home.html.twig */
class __TwigTemplate_a0bdfddcf8d2c8e4d71c646f62f0432875b9971d602e52c761923f19ab5b8a7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@MatchMyPics/user/home.html.twig", 1);
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
        $__internal_b18fa22fd1d5eef5410fefafd1eb2007e44b93f7543d85c9ab7d6b260ffa7021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18fa22fd1d5eef5410fefafd1eb2007e44b93f7543d85c9ab7d6b260ffa7021->enter($__internal_b18fa22fd1d5eef5410fefafd1eb2007e44b93f7543d85c9ab7d6b260ffa7021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MatchMyPics/user/home.html.twig"));

        $__internal_b09e625b1e4b453f2cc5acc4586a55e8f8e82fe1d514538a9727f2d04574fdcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09e625b1e4b453f2cc5acc4586a55e8f8e82fe1d514538a9727f2d04574fdcd->enter($__internal_b09e625b1e4b453f2cc5acc4586a55e8f8e82fe1d514538a9727f2d04574fdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MatchMyPics/user/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b18fa22fd1d5eef5410fefafd1eb2007e44b93f7543d85c9ab7d6b260ffa7021->leave($__internal_b18fa22fd1d5eef5410fefafd1eb2007e44b93f7543d85c9ab7d6b260ffa7021_prof);

        
        $__internal_b09e625b1e4b453f2cc5acc4586a55e8f8e82fe1d514538a9727f2d04574fdcd->leave($__internal_b09e625b1e4b453f2cc5acc4586a55e8f8e82fe1d514538a9727f2d04574fdcd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c600298bcdfd36b206fa8608f9d59bdec8ae57d3f1e991a4bf431bb9d47bec70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c600298bcdfd36b206fa8608f9d59bdec8ae57d3f1e991a4bf431bb9d47bec70->enter($__internal_c600298bcdfd36b206fa8608f9d59bdec8ae57d3f1e991a4bf431bb9d47bec70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b71455f3cd6c6820ae8b30b69606b49a2dc8f777deffd1da9bafb59981d11467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71455f3cd6c6820ae8b30b69606b49a2dc8f777deffd1da9bafb59981d11467->enter($__internal_b71455f3cd6c6820ae8b30b69606b49a2dc8f777deffd1da9bafb59981d11467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<!--Header page Home-->
<div class=\"container home\">

    <div class=\"row header_home\">
        <div class=\"col-xs-3 logoteam\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/MatchMyPicsBundle/img/cerfdrole.jpg"), "html", null, true);
        echo "\" alt=\"logo team\"/>
        </div>
        <div class=\"col-xs-9 titleteam\">
            <h2>TEAM DEER</h2>
        </div>
    </div>


    <!--Tab members Team-->
    <div class=\"container-fluid\">
        <div class=\"row tab_team\">
            <div class=\"col-xs-6 box\">
                <h3>Guillaume</h3>
            </div>
            <div class=\"col-xs-6 box\">
                <h3>Jeremy</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-6 box\">
                <h3>Charly</h3>
            </div>
            <div class=\"col-xs-6 box\">
                <h3>Null</h3>
            </div>
        </div>
    </div>
    <br/>


    <!--Btn Challenges-->
    <div class=\"row btn_challenges\">
        <div class=\"col-xs-8 col-xs-offset-2\">
            <a href=\"#\"><input id=\"btn_challenges\" type=\"submit\" name=\"challenges\" value=\"CHALLENGES\"/></a>
        </div>
    </div>

    <!--Results. Tab-->
    <table class=\"table table-scores\">
        <h2 id=\"title_tab\"> Classement par Equipes</h2>
        <thead>
        <tr>
            <th>Positions</th>
            <th>Teams</th>
            <th>Scores</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope=\"row\">1</th>
            <td>Team Chaussettes</td>
            <td>11000</td>
        </tr>
        <tr>
            <th scope=\"row\">2</th>
            <td>Team Cerf</td>
            <td>9500</td>
        </tr>
        <tr>
            <th scope=\"row\">3</th>
            <td>Team Licorne</td>
            <td>9000</td>
        </tr>
        <tr>
            <th scope=\"row\">4</th>
            <td>Team Licorne</td>
            <td>9000</td>
        </tr>
        </tbody>
    </table>
    <!--Btn Rules-->
    <div class=\"row btn_team\">
        <div class=\"col-xs-6 col-xs-offset-3\">
            <a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("match_my_pics_rules");
        echo "\"><input id=\"btn_rules\" type=\"submit\" name=\"btn_rules\" value=\"Règles du Jeu\"/></a>
        </div>
    </div>
    <!-- Btn deconnexion -->
    <div class=\"row btn_footer\">
        <div class=\"col-xs-1\">
            <a href=\"https://www.facebook.com/Wild-Code-School-1571738596452522/?fref=ts\" target=\"blank\"><i class=\"fa fa-facebook-official fa-2x\" aria-hidden=\"true\"></i>
            </a>
        </div>
        <div class=\"col-xs-offset-9 col-xs-1 logout\">
            <a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("match_my_pics_index");
        echo "\">
                <i class=\"fa fa-power-off fa-2x\" aria-hidden=\"true\">
                </i>
            </a>
        </div>

    </div>
</div>

";
        
        $__internal_b71455f3cd6c6820ae8b30b69606b49a2dc8f777deffd1da9bafb59981d11467->leave($__internal_b71455f3cd6c6820ae8b30b69606b49a2dc8f777deffd1da9bafb59981d11467_prof);

        
        $__internal_c600298bcdfd36b206fa8608f9d59bdec8ae57d3f1e991a4bf431bb9d47bec70->leave($__internal_c600298bcdfd36b206fa8608f9d59bdec8ae57d3f1e991a4bf431bb9d47bec70_prof);

    }

    public function getTemplateName()
    {
        return "@MatchMyPics/user/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 93,  133 => 83,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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

<!--Header page Home-->
<div class=\"container home\">

    <div class=\"row header_home\">
        <div class=\"col-xs-3 logoteam\">
            <img src=\"{{ asset('bundles/MatchMyPicsBundle/img/cerfdrole.jpg') }}\" alt=\"logo team\"/>
        </div>
        <div class=\"col-xs-9 titleteam\">
            <h2>TEAM DEER</h2>
        </div>
    </div>


    <!--Tab members Team-->
    <div class=\"container-fluid\">
        <div class=\"row tab_team\">
            <div class=\"col-xs-6 box\">
                <h3>Guillaume</h3>
            </div>
            <div class=\"col-xs-6 box\">
                <h3>Jeremy</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-6 box\">
                <h3>Charly</h3>
            </div>
            <div class=\"col-xs-6 box\">
                <h3>Null</h3>
            </div>
        </div>
    </div>
    <br/>


    <!--Btn Challenges-->
    <div class=\"row btn_challenges\">
        <div class=\"col-xs-8 col-xs-offset-2\">
            <a href=\"#\"><input id=\"btn_challenges\" type=\"submit\" name=\"challenges\" value=\"CHALLENGES\"/></a>
        </div>
    </div>

    <!--Results. Tab-->
    <table class=\"table table-scores\">
        <h2 id=\"title_tab\"> Classement par Equipes</h2>
        <thead>
        <tr>
            <th>Positions</th>
            <th>Teams</th>
            <th>Scores</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope=\"row\">1</th>
            <td>Team Chaussettes</td>
            <td>11000</td>
        </tr>
        <tr>
            <th scope=\"row\">2</th>
            <td>Team Cerf</td>
            <td>9500</td>
        </tr>
        <tr>
            <th scope=\"row\">3</th>
            <td>Team Licorne</td>
            <td>9000</td>
        </tr>
        <tr>
            <th scope=\"row\">4</th>
            <td>Team Licorne</td>
            <td>9000</td>
        </tr>
        </tbody>
    </table>
    <!--Btn Rules-->
    <div class=\"row btn_team\">
        <div class=\"col-xs-6 col-xs-offset-3\">
            <a href=\"{{ path('match_my_pics_rules') }}\"><input id=\"btn_rules\" type=\"submit\" name=\"btn_rules\" value=\"Règles du Jeu\"/></a>
        </div>
    </div>
    <!-- Btn deconnexion -->
    <div class=\"row btn_footer\">
        <div class=\"col-xs-1\">
            <a href=\"https://www.facebook.com/Wild-Code-School-1571738596452522/?fref=ts\" target=\"blank\"><i class=\"fa fa-facebook-official fa-2x\" aria-hidden=\"true\"></i>
            </a>
        </div>
        <div class=\"col-xs-offset-9 col-xs-1 logout\">
            <a href=\"{{ path('match_my_pics_index') }}\">
                <i class=\"fa fa-power-off fa-2x\" aria-hidden=\"true\">
                </i>
            </a>
        </div>

    </div>
</div>

{%  endblock %}", "@MatchMyPics/user/home.html.twig", "/var/www/html/bleau_S3_2017_match_my_pics/MatchMyPics/src/MatchMyPicsBundle/Resources/views/user/home.html.twig");
    }
}
