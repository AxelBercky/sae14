<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* site_porterlefolio/home.html.twig */
class __TwigTemplate_c135aa383d47d4cfcc4037b216425956 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site_porterlefolio/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site_porterlefolio/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Berckmoes Axel</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cyborg/bootstrap.min.css\">
</head>
<body>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">Berckmoes Axel</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"https://www.instagram.com/axel.brck/\" target=\"_blank\">Instagram</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"cv.html.twig\" target=\"_blank\">Télécharger mon CV</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"partfolio.html.twig\" target=\"_blank\">Voir mon Portfolio</a>
            </li>
        </ul>
    </div>
</nav>

<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-6 offset-md-3\">
            <div class=\"card bg-dark text-white\">
                <div class=\"card-body\">
                    <img src=\"IMG_20231216_232015_912.png\" alt=\"Photo Moi\" class=\"img-fluid rounded-circle mb-3\">
                    <p class=\"lead\">Bienvenue sur ma page de présentation.</p>
                </div>
                <div class=\"card-footer\">
                    <p>Je suis Berckmoes Axel, étudiant en première année de BUT réseau et télécommunication. J'ai une passion pour l'informatique en générale et les nouvelles technologies.</p>
                    <p>Je possède donc une expérience dans la programmation, avec des compétences particulières dans les languages C/python et html/css.</p>
                    <p>Je suis actuellement à la recherche d'opportunités professionnelles passionnantes où je peux appliquer mes compétences et contribuer au succès de l'entreprise.</p>
                    <p>Contactez-moi à axel.berckmoes@etu.univ-st-etienne.fr ou au 07.50.67.61.91.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "site_porterlefolio/home.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Berckmoes Axel</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cyborg/bootstrap.min.css\">
</head>
<body>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">Berckmoes Axel</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"https://www.instagram.com/axel.brck/\" target=\"_blank\">Instagram</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"cv.html.twig\" target=\"_blank\">Télécharger mon CV</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"partfolio.html.twig\" target=\"_blank\">Voir mon Portfolio</a>
            </li>
        </ul>
    </div>
</nav>

<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-6 offset-md-3\">
            <div class=\"card bg-dark text-white\">
                <div class=\"card-body\">
                    <img src=\"IMG_20231216_232015_912.png\" alt=\"Photo Moi\" class=\"img-fluid rounded-circle mb-3\">
                    <p class=\"lead\">Bienvenue sur ma page de présentation.</p>
                </div>
                <div class=\"card-footer\">
                    <p>Je suis Berckmoes Axel, étudiant en première année de BUT réseau et télécommunication. J'ai une passion pour l'informatique en générale et les nouvelles technologies.</p>
                    <p>Je possède donc une expérience dans la programmation, avec des compétences particulières dans les languages C/python et html/css.</p>
                    <p>Je suis actuellement à la recherche d'opportunités professionnelles passionnantes où je peux appliquer mes compétences et contribuer au succès de l'entreprise.</p>
                    <p>Contactez-moi à axel.berckmoes@etu.univ-st-etienne.fr ou au 07.50.67.61.91.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

</body>
</html>
", "site_porterlefolio/home.html.twig", "C:\\Users\\axeld\\Desktop\\Saé 1.04\\site_portfolio\\templates\\site_porterlefolio\\home.html.twig");
    }
}
