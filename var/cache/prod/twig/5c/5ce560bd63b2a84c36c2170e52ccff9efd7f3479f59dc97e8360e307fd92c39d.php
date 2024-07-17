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

/* @PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_state.html.twig */
class __TwigTemplate_aaac395e83153b979e32d5db4ddfa70d3b944d868ab7196c096a15366851fcec extends Template
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
        // line 25
        echo "
<div id=\"combinations-empty-state\" class=\"d-none\">
  <div class=\"text-center showcase-list-card\">
    <img alt=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate product combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate product combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\" class=\"img-responsive mt-3 img-rtl\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/img/empty_state/combinations.svg"), "html", null, true);
        echo "\">

    <p class=\"mt-4 showcase-list-card__header\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate product combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>

    <p class=\"mx-auto showcase-list-card__message\">
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combinations are the different variations of a product, with attributes like its size, weight or color taking different values.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      ";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To add combinations, you first need to create proper attributes and values in [1]%attributes_and_features_label%[/1].", ["%attributes_and_features_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attributes & Features", [], "Admin.Navigation.Menu"), "[1]" => (("<a class=\"alert-link\" href=" . $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminAttributesGroups")) . " target=\"_blank\">"), "[/1]" => "</a>"], "Admin.Catalog.Help");
        echo "
    </p>

    <div class=\"mt-4\">
      <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getFunction('documentation_link')->getCallable()("combinations"), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-outline-secondary mr-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Learn more", [], "Admin.Actions"), "html", null, true);
        echo "</a>
      <button type=\"button\" class=\"btn btn-primary generate-combinations-button\" disabled=\"disabled\">
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </button>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_state.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 40,  68 => 38,  61 => 34,  57 => 33,  51 => 30,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_state.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\Combination\\empty_state.html.twig");
    }
}
