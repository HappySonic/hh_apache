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

/* pages/CMS2.twig */
class __TwigTemplate_90e248b0bcafd2526599aa6a1929c89a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/CMS2.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/CMS2.twig"));

        // line 1
        echo "<html lang=\"en\"><head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">

\t<title>CMS</title>
\t
\t<link rel=\"stylesheet\" href=\"bootstrap/css/bootstrap.sp.css\">
\t<link rel=\"stylesheet\" href=\"css/CMS.css\">
\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
</head>

<body>
\t<nav class=\"navbar navbar-expand-lg main-navbar\">
\t\t<div class=\"container-fluid\">\t\t\t
\t\t  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\">
\t\t\t\t<i class=\"ion-navicon\">\t</i>
\t\t\t</span>
\t\t  </button>
\t\t  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t<a class=\"logomain\" href=\"#\">
\t\t\t\t<img src=\"assets/icon.png\" alt=\"Logo\">
\t\t\t</a>
\t\t\t  <div class=\"mr-auto\"></div>
\t\t\t\t<a class=\"navbar-brand\" href=\"#\">
\t\t\t\t\t<img src=\"assets/icon.png\" alt=\"Logo\">
\t\t\t\t</a>
\t\t\t  <a class=\"navbar-brand\" href=\"#\">
\t\t\t\t<img src=\"assets/icon.png\" alt=\"Logo\">
\t\t\t</a>
\t\t\t  <a class=\"navbar-brand\" href=\"#\">
\t\t\t\t<img src=\"assets/icon.png\" alt=\"Logo\">
\t\t\t</a>
\t\t\t  <a class=\"navbar-brand\" href=\"#\">
\t\t\t\t<img src=\"assets/icon.png\" alt=\"Logo\">
\t\t\t</a>
\t\t\t<a class=\"navbar-brand\" href=\"#\">
\t\t\t\t<img src=\"assets/icon.png\" alt=\"Logo\">
\t\t\t</a>
\t\t  </div>
\t  </div>
\t</nav>
\t<section class=\"hero bg-overlay\" id=\"home\" data-bg=\"assets/img1.jpg\" style=\"background-image: url(&quot;assets/img1.jpg&quot;); background-position: center center; background-attachment: fixed;\"><div class=\"overlay\"></div>
\t\t<div class=\"text py-5\">
\t\t\t<h1>";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["variables"]) || array_key_exists("variables", $context) ? $context["variables"] : (function () { throw new RuntimeError('Variable "variables" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "<\\h1>
\t\t\t<p class=\"lead\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["variables"]) || array_key_exists("variables", $context) ? $context["variables"] : (function () { throw new RuntimeError('Variable "variables" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "</p>
\t\t</div>
\t</section>


\t<section class=\"padding bg-grey\" id=\"films\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"section-title\">Maininfo</h2>
\t\t\t<p class=\"section-lead text-muted\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu dapibus magna. Aenean sed leo nibh. Nam ut est ac orci ornare iaculis ac nec dui. Fusce vel vestibulum libero, vel ullamcorper quam.</p>
\t\t\t<div class=\"section-body\">
\t\t\t\t<div class=\"row col-spacing\">
\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-4\">
\t\t\t\t\t\t<article class=\"card\">
\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"assets/img2.jpg\" alt=\"Infotable\">
\t\t\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t\t  <div class=\"card-subtitle mb-2 text-muted\"> <a href=\"#\"></a> </div>
\t\t\t\t\t\t\t<h4 class=\"card-title\"><a href=\"#\" data-toggle=\"read\" data-id=\"1\">Infotable</a></h4>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu dapibus magna. Aenean sed leo nibh. Nam ut est ac orci ornare iaculis ac nec dui. Fusce vel vestibulum libero, vel ullamcorper quam.</p>
\t\t\t\t\t\t   
\t\t\t\t\t\t</div>
\t\t\t\t\t  </article>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"col-12 col-md-6 col-lg-4\">
\t\t\t\t\t\t<article class=\"card\">
\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"assets/img3.jpg\" alt=\"Infotable\">
\t\t\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t\t  <div class=\"card-subtitle mb-2 text-muted\"> <a href=\"#\"></a></div>
\t\t\t\t\t\t\t<h4 class=\"card-title\"><a href=\"#\" data-toggle=\"read\" data-id=\"1\">Infotable</a></h4>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu dapibus magna. Aenean sed leo nibh. Nam ut est ac orci ornare iaculis ac nec dui. Fusce vel vestibulum libero, vel ullamcorper quam.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t   
\t\t\t\t\t\t</div>
\t\t\t\t\t  </article>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-4\">
\t\t\t\t\t\t<article class=\"card\">
\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"assets/img4.jpg\" alt=\"Infotable\">
\t\t\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t\t  <div class=\"card-subtitle mb-2 text-muted\"> <a href=\"#\"></a> </div>
\t\t\t\t\t\t\t<h4 class=\"card-title\"><a href=\"#\" data-toggle=\"read\" data-id=\"1\">Infotable3</a></h4>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu dapibus magna. Aenean sed leo nibh. Nam ut est ac orci ornare iaculis ac nec dui. Fusce vel vestibulum libero, vel ullamcorper quam.</p>
\t\t\t\t\t  </div></article>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t
\t\t
\t</section>

\t<section class=\"padding\" id=\"games\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-md-4 col-sm-12\">
\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"assets/img5.jpg\" alt=\"Img1\">
\t\t\t\t\t\t\t<h2> Info1 </h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu dapibus magna. Aenean sed leo nibh.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"more\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-4 col-sm-12\">
\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"assets/img6.jpg\" alt=\"Img2\">
\t\t\t\t\t\t\t<h2>Info2</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu dapibus magna. Aenean sed leo nibh. Nam ut est ac orci ornare iaculis ac nec dui. Fusce vel vestibulum libero, vel ullamcorper quam.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-4 col-sm-12\">
\t\t\t\t\t<div class=\"list-item no-spacing\">
\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"assets/img7.jpg\" alt=\"Img3\">
\t\t\t\t\t\t\t<h2>Info3</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu dapibus magna. Aenean sed leo nibh. Nam ut est ac orci ornare iaculis ac nec dui. Fusce vel vestibulum libero, vel ullamcorper quam.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"padding bg-grey\" id=\"contact\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"section-title text-center\">
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</h2></div>
\t\t\t
<div id=\"demo\" class=\"carousel slide\" data-bs-ride=\"carousel\">

\t
\t<div class=\"carousel-indicators\">
\t  <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"0\" class=\"active\"></button>
\t  <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"1\"></button>
\t  <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"2\"></button>
\t</div>
\t
\t
\t<div class=\"carousel-inner\">
\t  <div class=\"carousel-item active\">
\t\t<img src=\"assets/img1.jpg\" alt=\"Car1\" class=\"d-block\" style=\"width:100%\">
\t\t<div class=\"carousel-caption\">
\t\t  <h3></h3>
\t\t  <p></p>
\t\t</div> 
\t  </div>
\t  <div class=\"carousel-item\">
\t\t<img src=\"assets/img5.jpg\" alt=\"Car2\" class=\"d-block\" style=\"width:100%\">
\t\t<div class=\"carousel-caption\">
\t\t   <h3></h3>
\t\t  <p></p>
\t\t</div> 
\t  </div>
\t  <div class=\"carousel-item\">
\t\t<img src=\"assets/img7.jpg\" alt=\"Car3\" class=\"d-block\" style=\"width:100%\">
\t   <div class=\"carousel-caption\">
\t\t  <h3></h3>
\t\t  <p></p>
\t\t</div>  
\t  </div>
\t</div> 
\t

\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#demo\" data-bs-slide=\"prev\">
\t  <span class=\"carousel-control-prev-icon\"></span>
\t</button>
\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#demo\" data-bs-slide=\"next\">
\t  <span class=\"carousel-control-next-icon\"></span>
\t</button>
  </div>
\t\t\t\t\t\t\t<footer>
\t\t\t\t\t\t\t\t<p>Contacts<br>
\t\t\t\t\t\t\t\t<a href=\"\">Mail</a></p>
\t\t\t\t\t\t\t  </footer>
\t<script src=\"js/jquery.sp.js\"></script>
\t<script src=\"bootstrap/js/bootstrap.sp.js\"></script>
\t<script src=\"js/jquery.easeScroll.js\"></script>
\t<script src=\"js/slider.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>


</section></body></html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pages/CMS2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 46,  89 => 45,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\"><head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">

\t<title>CMS</title>
\t
\t<link rel=\"stylesheet\" href=\"bootstrap/css/bootstrap.sp.css\">
\t<link rel=\"stylesheet\" href=\"css/CMS.css\">
\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
</head>

<body>
\t<nav class=\"navbar navbar-expand-lg main-navbar\">
\t\t<div class=\"container-fluid\">\t\t\t
\t\t  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\">
\t\t\t\t<i class=\"ion-navicon\">\t</i>
\t\t\t</span>
\t\t  </button>
\t\t  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t<a class=\"logomain\" href=\"#\">
\t\t\t\t<img src=\"assets/icon.png\" alt=\"Logo\">
\t\t\t</a>
\t\t\t  <div class=\"mr-auto\"></div>
\t\t\t\t<a class=\"navbar-brand\" href=\"#\">
\t\t\t\t\t<img src=\"assets/icon.png\" alt=\"Logo\">
\t\t\t\t</a>
\t\t\t  <a class=\"navbar-brand\" href=\"#\">
\t\t\t\t<img src=\"assets/icon.png\" alt=\"Logo\">
\t\t\t</a>
\t\t\t  <a class=\"navbar-brand\" href=\"#\">
\t\t\t\t<img src=\"assets/icon.png\" alt=\"Logo\">
\t\t\t</a>
\t\t\t  <a class=\"navbar-brand\" href=\"#\">
\t\t\t\t<img src=\"assets/icon.png\" alt=\"Logo\">
\t\t\t</a>
\t\t\t<a class=\"navbar-brand\" href=\"#\">
\t\t\t\t<img src=\"assets/icon.png\" alt=\"Logo\">
\t\t\t</a>
\t\t  </div>
\t  </div>
\t</nav>
\t<section class=\"hero bg-overlay\" id=\"home\" data-bg=\"assets/img1.jpg\" style=\"background-image: url(&quot;assets/img1.jpg&quot;); background-position: center center; background-attachment: fixed;\"><div class=\"overlay\"></div>
\t\t<div class=\"text py-5\">
\t\t\t<h1>{{variables}}<\\h1>
\t\t\t<p class=\"lead\">{{variables}}</p>
\t\t</div>
\t</section>


\t<section class=\"padding bg-grey\" id=\"films\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"section-title\">Maininfo</h2>
\t\t\t<p class=\"section-lead text-muted\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu dapibus magna. Aenean sed leo nibh. Nam ut est ac orci ornare iaculis ac nec dui. Fusce vel vestibulum libero, vel ullamcorper quam.</p>
\t\t\t<div class=\"section-body\">
\t\t\t\t<div class=\"row col-spacing\">
\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-4\">
\t\t\t\t\t\t<article class=\"card\">
\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"assets/img2.jpg\" alt=\"Infotable\">
\t\t\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t\t  <div class=\"card-subtitle mb-2 text-muted\"> <a href=\"#\"></a> </div>
\t\t\t\t\t\t\t<h4 class=\"card-title\"><a href=\"#\" data-toggle=\"read\" data-id=\"1\">Infotable</a></h4>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu dapibus magna. Aenean sed leo nibh. Nam ut est ac orci ornare iaculis ac nec dui. Fusce vel vestibulum libero, vel ullamcorper quam.</p>
\t\t\t\t\t\t   
\t\t\t\t\t\t</div>
\t\t\t\t\t  </article>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"col-12 col-md-6 col-lg-4\">
\t\t\t\t\t\t<article class=\"card\">
\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"assets/img3.jpg\" alt=\"Infotable\">
\t\t\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t\t  <div class=\"card-subtitle mb-2 text-muted\"> <a href=\"#\"></a></div>
\t\t\t\t\t\t\t<h4 class=\"card-title\"><a href=\"#\" data-toggle=\"read\" data-id=\"1\">Infotable</a></h4>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu dapibus magna. Aenean sed leo nibh. Nam ut est ac orci ornare iaculis ac nec dui. Fusce vel vestibulum libero, vel ullamcorper quam.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t   
\t\t\t\t\t\t</div>
\t\t\t\t\t  </article>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-4\">
\t\t\t\t\t\t<article class=\"card\">
\t\t\t\t\t\t  <img class=\"card-img-top\" src=\"assets/img4.jpg\" alt=\"Infotable\">
\t\t\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t\t  <div class=\"card-subtitle mb-2 text-muted\"> <a href=\"#\"></a> </div>
\t\t\t\t\t\t\t<h4 class=\"card-title\"><a href=\"#\" data-toggle=\"read\" data-id=\"1\">Infotable3</a></h4>
\t\t\t\t\t\t\t<p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu dapibus magna. Aenean sed leo nibh. Nam ut est ac orci ornare iaculis ac nec dui. Fusce vel vestibulum libero, vel ullamcorper quam.</p>
\t\t\t\t\t  </div></article>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t
\t\t
\t</section>

\t<section class=\"padding\" id=\"games\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-md-4 col-sm-12\">
\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"assets/img5.jpg\" alt=\"Img1\">
\t\t\t\t\t\t\t<h2> Info1 </h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu dapibus magna. Aenean sed leo nibh.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"more\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-4 col-sm-12\">
\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"assets/img6.jpg\" alt=\"Img2\">
\t\t\t\t\t\t\t<h2>Info2</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu dapibus magna. Aenean sed leo nibh. Nam ut est ac orci ornare iaculis ac nec dui. Fusce vel vestibulum libero, vel ullamcorper quam.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-4 col-sm-12\">
\t\t\t\t\t<div class=\"list-item no-spacing\">
\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"assets/img7.jpg\" alt=\"Img3\">
\t\t\t\t\t\t\t<h2>Info3</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu dapibus magna. Aenean sed leo nibh. Nam ut est ac orci ornare iaculis ac nec dui. Fusce vel vestibulum libero, vel ullamcorper quam.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"padding bg-grey\" id=\"contact\">
\t\t<div class=\"container\">
\t\t\t<h2 class=\"section-title text-center\">
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</h2></div>
\t\t\t
<div id=\"demo\" class=\"carousel slide\" data-bs-ride=\"carousel\">

\t
\t<div class=\"carousel-indicators\">
\t  <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"0\" class=\"active\"></button>
\t  <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"1\"></button>
\t  <button type=\"button\" data-bs-target=\"#demo\" data-bs-slide-to=\"2\"></button>
\t</div>
\t
\t
\t<div class=\"carousel-inner\">
\t  <div class=\"carousel-item active\">
\t\t<img src=\"assets/img1.jpg\" alt=\"Car1\" class=\"d-block\" style=\"width:100%\">
\t\t<div class=\"carousel-caption\">
\t\t  <h3></h3>
\t\t  <p></p>
\t\t</div> 
\t  </div>
\t  <div class=\"carousel-item\">
\t\t<img src=\"assets/img5.jpg\" alt=\"Car2\" class=\"d-block\" style=\"width:100%\">
\t\t<div class=\"carousel-caption\">
\t\t   <h3></h3>
\t\t  <p></p>
\t\t</div> 
\t  </div>
\t  <div class=\"carousel-item\">
\t\t<img src=\"assets/img7.jpg\" alt=\"Car3\" class=\"d-block\" style=\"width:100%\">
\t   <div class=\"carousel-caption\">
\t\t  <h3></h3>
\t\t  <p></p>
\t\t</div>  
\t  </div>
\t</div> 
\t

\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#demo\" data-bs-slide=\"prev\">
\t  <span class=\"carousel-control-prev-icon\"></span>
\t</button>
\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#demo\" data-bs-slide=\"next\">
\t  <span class=\"carousel-control-next-icon\"></span>
\t</button>
  </div>
\t\t\t\t\t\t\t<footer>
\t\t\t\t\t\t\t\t<p>Contacts<br>
\t\t\t\t\t\t\t\t<a href=\"\">Mail</a></p>
\t\t\t\t\t\t\t  </footer>
\t<script src=\"js/jquery.sp.js\"></script>
\t<script src=\"bootstrap/js/bootstrap.sp.js\"></script>
\t<script src=\"js/jquery.easeScroll.js\"></script>
\t<script src=\"js/slider.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>


</section></body></html>", "pages/CMS2.twig", "/home/mrmidi/highhack/highhack2/templates/pages/CMS2.twig");
    }
}
