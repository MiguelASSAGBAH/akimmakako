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

/* @PrestaShop/Admin/Security/compromised.html.twig */
class __TwigTemplate_ca4b98ac4f0e53c7a01e1b47afba77f02d5e42a84ac28fe42237a09ade0f3c8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/base.html.twig", "@PrestaShop/Admin/Security/compromised.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/theme" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\" />
";
    }

    // line 32
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid token", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
";
    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "  <div class=\"fluid-container\" id=\"security-compromised-page\" >
      <div id=\"csrf-white-container\" class=\"row justify-content-md-center\">
        <div class=\"col-md-8\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <p class=\"alert-text\">
              ";
        // line 41
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1]Invalid token[/1]: direct access to this link may lead to a potential security breach.", [], "Admin.Catalog.Help"), ["[1]" => "<b>", "[/1]" => "</b>"]);
        echo "
            </p>
          </div>

          <h1 class=\"text-md-center\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Do you want to display this page?", [], "Admin.Catalog.Help"), "html", null, true);
        echo "</h1>
          <div class=\"text-md-center\">
            <a class=\"btn btn-lg btn-outline-danger mr-3\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["requestUri"] ?? null), "html", null, true);
        echo "\">
              ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, I understand the risks", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
            </a>
            <a class=\"btn btn-lg btn-primary ml-3\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminDashboard"), "html", null, true);
        echo "\">
              ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Take me out of there!", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
            </a>
          </div>
        </div>
      </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Security/compromised.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 51,  106 => 50,  101 => 48,  97 => 47,  92 => 45,  85 => 41,  78 => 36,  74 => 35,  67 => 33,  63 => 32,  57 => 29,  52 => 28,  48 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Security/compromised.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Security\\compromised.html.twig");
    }
}
