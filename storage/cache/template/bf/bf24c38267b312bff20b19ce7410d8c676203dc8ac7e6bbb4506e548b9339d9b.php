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

/* default/template/extension/module/all_product.twig */
class __TwigTemplate_a0623c2baa19cf831a7c1a1b38a207bcd54180b88fdd73e66b990990f3b60fac extends \Twig\Template
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
        // line 1
        echo "<div>";
        if (($context["heading_title"] ?? null)) {
            // line 2
            echo "  <h2>";
            echo ($context["heading_title"] ?? null);
            echo "</h2>
  ";
        }
        // line 4
        echo "  ";
        echo ($context["html"] ?? null);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/all_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/all_product.twig", "");
    }
}