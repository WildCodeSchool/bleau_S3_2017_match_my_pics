<?php

/* @MatchMyPics/user/rules.html.twig */
class __TwigTemplate_dd08726af04cc7137b08d0dda292e4379ef37f04caa58f4830bc70cc4c4b03e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MatchMyPics/user/header_return.html.twig", "@MatchMyPics/user/rules.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@MatchMyPics/user/header_return.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6f523c5320787b5f8bc00931c2dd72bd0b1647c7766c51519dd58e75fd56aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f523c5320787b5f8bc00931c2dd72bd0b1647c7766c51519dd58e75fd56aeb->enter($__internal_f6f523c5320787b5f8bc00931c2dd72bd0b1647c7766c51519dd58e75fd56aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MatchMyPics/user/rules.html.twig"));

        $__internal_a126a159bc9bfad7de76838aa9f49ddd54ed06f0977e42919970673349040b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a126a159bc9bfad7de76838aa9f49ddd54ed06f0977e42919970673349040b4d->enter($__internal_a126a159bc9bfad7de76838aa9f49ddd54ed06f0977e42919970673349040b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MatchMyPics/user/rules.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6f523c5320787b5f8bc00931c2dd72bd0b1647c7766c51519dd58e75fd56aeb->leave($__internal_f6f523c5320787b5f8bc00931c2dd72bd0b1647c7766c51519dd58e75fd56aeb_prof);

        
        $__internal_a126a159bc9bfad7de76838aa9f49ddd54ed06f0977e42919970673349040b4d->leave($__internal_a126a159bc9bfad7de76838aa9f49ddd54ed06f0977e42919970673349040b4d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c271e3fc1ecacfd67f22700ea2025bdd620a185c822627bba4b79376e89a0b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c271e3fc1ecacfd67f22700ea2025bdd620a185c822627bba4b79376e89a0b7a->enter($__internal_c271e3fc1ecacfd67f22700ea2025bdd620a185c822627bba4b79376e89a0b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e85ff0c48be2aff69e0c06daf446958e37f9f95110803459928f18cf63b4f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e85ff0c48be2aff69e0c06daf446958e37f9f95110803459928f18cf63b4f13->enter($__internal_8e85ff0c48be2aff69e0c06daf446958e37f9f95110803459928f18cf63b4f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container contrules\">

    <div class=\"row rowtitlerules\">

        <div class=\"col-xs-12 \">
            <h2>Règles du jeu :</h2>
        </div>

    </div>

    <div class=\"row rowrules\">

        <div class=\"col-xs-12 rulesgame\">

            <p><b><ins>1:</ins></b> La 1ère règle du jeu c’est de lire les règles du jeux!</p>

            <p><b><ins>2:</ins></b> La 2ème règle du jeu c’est de comprendre les règles du jeux!</p>

            <p><b><ins>3:</ins></b> Le but du jeu est de réaliser des challenges, qui sont de retrouver l’endroit où la photo a été prise, de prendre une photo du lieu et de la faire valider par le maître du jeu. Vous remporter des points selon la difficulté  du challenge (Easy, Medium, Hard).</p>

            <p><b><ins>4:</ins></b> Au début de la partie, un “gimmick” et un macaron, unique par Team, vous seront remis. Un gimmick est l'objet symbol de votre Team.</p>

            <p><b><ins>5:</ins></b> Vous pouvez choisir n’importe quel challenges, cependant, on ne peut se lancer que dans un challenge à la fois et il doit être réalisé en équipe!</p>

            <p><b><ins>6:</ins></b> Pour chaque challenge un indice vous ai proposé, si vous réalisez le challenge sans voir l’indice vous gagnez la totalité des points du challenge, sinon vous en perdez un peu!:) easy= -250pts medium= -666pts hard= -1590pts </p>

            <p><b><ins>7:</ins></b> Pour les photos “plan large”, votre gimmick doit obligatoirement être présent sur la photo.</p>

            <p><b><ins>8:</ins></b> Pour les photos “plan serré”, le macaron de la team doit être présent sur la photo.</p>

            <p><b><ins>9:</ins></b> L'équipe qui a le plus de point a la fin de la journée est déclaré vainqueur! Pour les perdants… Kahooooooooot!</p>

            <p><b><h3 id=\"playnow\">A vous de jouez !</h3></b></p>

        </div>

        <div class=\"col-xs-12 btn_jaicompris\">
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("match_my_pics_home");
        echo "\"><input id=\"jai_compris\" type=\"submit\" name=\"understandrules\" value=\"J'ai compris !\"/></a>
        </div>

    </div>
</div>

";
        
        $__internal_8e85ff0c48be2aff69e0c06daf446958e37f9f95110803459928f18cf63b4f13->leave($__internal_8e85ff0c48be2aff69e0c06daf446958e37f9f95110803459928f18cf63b4f13_prof);

        
        $__internal_c271e3fc1ecacfd67f22700ea2025bdd620a185c822627bba4b79376e89a0b7a->leave($__internal_c271e3fc1ecacfd67f22700ea2025bdd620a185c822627bba4b79376e89a0b7a_prof);

    }

    public function getTemplateName()
    {
        return "@MatchMyPics/user/rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 42,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@MatchMyPics/user/header_return.html.twig' %}

{% block body %}

<div class=\"container contrules\">

    <div class=\"row rowtitlerules\">

        <div class=\"col-xs-12 \">
            <h2>Règles du jeu :</h2>
        </div>

    </div>

    <div class=\"row rowrules\">

        <div class=\"col-xs-12 rulesgame\">

            <p><b><ins>1:</ins></b> La 1ère règle du jeu c’est de lire les règles du jeux!</p>

            <p><b><ins>2:</ins></b> La 2ème règle du jeu c’est de comprendre les règles du jeux!</p>

            <p><b><ins>3:</ins></b> Le but du jeu est de réaliser des challenges, qui sont de retrouver l’endroit où la photo a été prise, de prendre une photo du lieu et de la faire valider par le maître du jeu. Vous remporter des points selon la difficulté  du challenge (Easy, Medium, Hard).</p>

            <p><b><ins>4:</ins></b> Au début de la partie, un “gimmick” et un macaron, unique par Team, vous seront remis. Un gimmick est l'objet symbol de votre Team.</p>

            <p><b><ins>5:</ins></b> Vous pouvez choisir n’importe quel challenges, cependant, on ne peut se lancer que dans un challenge à la fois et il doit être réalisé en équipe!</p>

            <p><b><ins>6:</ins></b> Pour chaque challenge un indice vous ai proposé, si vous réalisez le challenge sans voir l’indice vous gagnez la totalité des points du challenge, sinon vous en perdez un peu!:) easy= -250pts medium= -666pts hard= -1590pts </p>

            <p><b><ins>7:</ins></b> Pour les photos “plan large”, votre gimmick doit obligatoirement être présent sur la photo.</p>

            <p><b><ins>8:</ins></b> Pour les photos “plan serré”, le macaron de la team doit être présent sur la photo.</p>

            <p><b><ins>9:</ins></b> L'équipe qui a le plus de point a la fin de la journée est déclaré vainqueur! Pour les perdants… Kahooooooooot!</p>

            <p><b><h3 id=\"playnow\">A vous de jouez !</h3></b></p>

        </div>

        <div class=\"col-xs-12 btn_jaicompris\">
            <a href=\"{{ path('match_my_pics_home') }}\"><input id=\"jai_compris\" type=\"submit\" name=\"understandrules\" value=\"J'ai compris !\"/></a>
        </div>

    </div>
</div>

{% endblock %}", "@MatchMyPics/user/rules.html.twig", "/var/www/html/bleau_S3_2017_match_my_pics/MatchMyPics/src/MatchMyPicsBundle/Resources/views/user/rules.html.twig");
    }
}
