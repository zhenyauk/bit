<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /themes/bit/footer.html */
class __TwigTemplate_99c0c42d5533f3a8ce799e9e85e477c0078fc4bafbb5447d73b0f41562d199c8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "  
      <footer class=\"footer\">
        <div class=\"container footer__container\">
          <div class=\"footer__col\"><a class=\"logo footer__logo\" href=\"/\"><img class=\"logo__img\" src=\"/themes/bit/images/general/logo-light.svg\" alt=\"bitFlyer Logo\"></a>
            <div class=\"footer__wrap\"><a class=\"footer__logo-link\" href=\"#\"><img src=\"/themes/bit/images/general/logos/jba-logo.png\" alt=\"JBA\"></a><a class=\"footer__logo-link\" href=\"#\"><img src=\"/themes/bit/images/general/logos/digicert-logo.png\" alt=\"Digicert\"></a></div>
          </div>


          <div class=\"footer__col\">
            <h4 class=\"footer__title js-accordBtn\">Service</h4>
            <div class=\"footer__accord\"><a class=\"footer__link\" href=\"#\">Bitcoin Market<a class=\"footer__link\" href=\"#\">AltCoin Market</a><a class=\"footer__link\" href=\"#\">Ethereum Market</a><a class=\"footer__link\" href=\"#\">Ethereum Classic Market</a><a class=\"footer__link\" href=\"#\">Litecoin Market</a><a class=\"footer__link\" href=\"#\">Bitcoin Cash Market</a></a></div>
          </div>
          

          <div class=\"footer__col\">
            <h4 class=\"footer__title js-accordBtn\">Information</h4>
            <div class=\"footer__accord\"><a class=\"footer__link\" href=\"#\">What is Bitcoin?<a class=\"footer__link\" href=\"#\">What is Ethereum?</a><a class=\"footer__link\" href=\"#\">What is blockchain?</a><a class=\"footer__link\" href=\"#\">What is virtual currency?</a><a class=\"footer__link\" href=\"#\">Glossary</a><a class=\"footer__link\" href=\"#\">Bitcoin Price Chart</a></a></div>
          </div>
          <div class=\"footer__col\">
            <h4 class=\"footer__title js-accordBtn\">Support</h4>
            <div class=\"footer__accord\"><a class=\"footer__link\" href=\"#\">Bug History<a class=\"footer__link\" href=\"#\">FAQ/Contact</a><a class=\"footer__link\" href=\"#\">Fees and Taxes</a><a class=\"footer__link\" href=\"#\">Closing Prices and SQ</a><a class=\"footer__link\" href=\"#\">Account Class</a><a class=\"footer__link\" href=\"#\">bitFlyer Europe</a><a class=\"footer__link\" href=\"#\">bitFlyer USA</a></a></div>
          </div>
          <div class=\"footer__col\">
            <h4 class=\"footer__title js-accordBtn\">About Us</h4>
            <div class=\"footer__accord\"><a class=\"footer__link\" href=\"#\">Company Summary</a><a class=\"footer__link\" href=\"#\">Director Profiles</a><a class=\"footer__link\" href=\"#\">Terms of Use</a><a class=\"footer__link\" href=\"#\">Commercial Information</a><a class=\"footer__link\" href=\"#\">Privacy Policy</a><a class=\"footer__link\" href=\"#\">Basic Information Security Policy</a><a class=\"footer__link\" href=\"#\">Risks of Using Virtual Currency</a></div>
          </div>
        </div>
      </footer>

";
    }

    public function getTemplateName()
    {
        return "/themes/bit/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("  
      <footer class=\"footer\">
        <div class=\"container footer__container\">
          <div class=\"footer__col\"><a class=\"logo footer__logo\" href=\"/\"><img class=\"logo__img\" src=\"/themes/bit/images/general/logo-light.svg\" alt=\"bitFlyer Logo\"></a>
            <div class=\"footer__wrap\"><a class=\"footer__logo-link\" href=\"#\"><img src=\"/themes/bit/images/general/logos/jba-logo.png\" alt=\"JBA\"></a><a class=\"footer__logo-link\" href=\"#\"><img src=\"/themes/bit/images/general/logos/digicert-logo.png\" alt=\"Digicert\"></a></div>
          </div>


          <div class=\"footer__col\">
            <h4 class=\"footer__title js-accordBtn\">Service</h4>
            <div class=\"footer__accord\"><a class=\"footer__link\" href=\"#\">Bitcoin Market<a class=\"footer__link\" href=\"#\">AltCoin Market</a><a class=\"footer__link\" href=\"#\">Ethereum Market</a><a class=\"footer__link\" href=\"#\">Ethereum Classic Market</a><a class=\"footer__link\" href=\"#\">Litecoin Market</a><a class=\"footer__link\" href=\"#\">Bitcoin Cash Market</a></a></div>
          </div>
          

          <div class=\"footer__col\">
            <h4 class=\"footer__title js-accordBtn\">Information</h4>
            <div class=\"footer__accord\"><a class=\"footer__link\" href=\"#\">What is Bitcoin?<a class=\"footer__link\" href=\"#\">What is Ethereum?</a><a class=\"footer__link\" href=\"#\">What is blockchain?</a><a class=\"footer__link\" href=\"#\">What is virtual currency?</a><a class=\"footer__link\" href=\"#\">Glossary</a><a class=\"footer__link\" href=\"#\">Bitcoin Price Chart</a></a></div>
          </div>
          <div class=\"footer__col\">
            <h4 class=\"footer__title js-accordBtn\">Support</h4>
            <div class=\"footer__accord\"><a class=\"footer__link\" href=\"#\">Bug History<a class=\"footer__link\" href=\"#\">FAQ/Contact</a><a class=\"footer__link\" href=\"#\">Fees and Taxes</a><a class=\"footer__link\" href=\"#\">Closing Prices and SQ</a><a class=\"footer__link\" href=\"#\">Account Class</a><a class=\"footer__link\" href=\"#\">bitFlyer Europe</a><a class=\"footer__link\" href=\"#\">bitFlyer USA</a></a></div>
          </div>
          <div class=\"footer__col\">
            <h4 class=\"footer__title js-accordBtn\">About Us</h4>
            <div class=\"footer__accord\"><a class=\"footer__link\" href=\"#\">Company Summary</a><a class=\"footer__link\" href=\"#\">Director Profiles</a><a class=\"footer__link\" href=\"#\">Terms of Use</a><a class=\"footer__link\" href=\"#\">Commercial Information</a><a class=\"footer__link\" href=\"#\">Privacy Policy</a><a class=\"footer__link\" href=\"#\">Basic Information Security Policy</a><a class=\"footer__link\" href=\"#\">Risks of Using Virtual Currency</a></div>
          </div>
        </div>
      </footer>

", "/themes/bit/footer.html", "C:\\Server\\OSPanel\\domains\\bitcoin\\themes\\bit\\footer.html");
    }
}
