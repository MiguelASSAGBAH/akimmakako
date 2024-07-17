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

/* @PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list.html.twig */
class __TwigTemplate_2b410891c9c0daf637674c629007282f6634433bd6a82224459bd87e95975622 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'combinations_paginated_list' => [$this, 'block_combinations_paginated_list'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('combinations_paginated_list', $context, $blocks);
    }

    public function block_combinations_paginated_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "  <div id=\"combinations-paginated-list\" class=\"d-none\">

    ";
        // line 29
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list_header.html.twig", ["productId" =>         // line 30
($context["productId"] ?? null), "isMultistoreActive" =>         // line 31
($context["isMultistoreActive"] ?? null), "shopName" =>         // line 32
($context["shopName"] ?? null), "shopId" =>         // line 33
($context["shopId"] ?? null)]);
        // line 34
        echo "

    <div class=\"justify-content-center\" id=\"combinations-list\">
      <div class=\"spinner-product-combinations-container\" id=\"productCombinationsLoading\">
        <div class=\"spinner spinner-primary\"></div>
      </div>

      ";
        // line 45
        echo "      <div id=\"combinations-list-form-container\">
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["combinationsForm"] ?? null), 'row');
        echo "
      </div>

      ";
        // line 50
        echo "      ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_filters_state.html.twig");
        echo "

      <div id=\"combinations-list-footer\">
        <span>
          ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edition mode", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </span>
        <div id=\"combinations-list-footer-buttons\">
          <button type=\"button\" id=\"cancel-combinations-edition\" class=\"btn btn-secondary\">
            ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
          <button type=\"button\" id=\"save-combinations-edition\" class=\"btn btn-primary\">
            ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save list", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>

    <div class=\"row justify-content-center\" id=\"combinations-pagination\">
      ";
        // line 68
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/javascript_pagination.html.twig", ["limit" =>         // line 69
($context["combinationsLimit"] ?? null), "limitChoices" =>         // line 70
($context["combinationLimitChoices"] ?? null)]);
        // line 71
        echo "
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 71,  109 => 70,  108 => 69,  107 => 68,  97 => 61,  91 => 58,  84 => 54,  76 => 50,  70 => 46,  67 => 45,  58 => 34,  56 => 33,  55 => 32,  54 => 31,  53 => 30,  52 => 29,  48 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\Combination\\paginated_list.html.twig");
    }
}
