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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination.html.twig */
class __TwigTemplate_35356aeb9dbf19fd08c1d9344f4f9d272a4f1793b00887c9faea8c272d5bdade extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'combination_images_choice_widget' => [$this, 'block_combination_images_choice_widget'],
            'combination_manager_widget' => [$this, 'block_combination_manager_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_combination_images_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 28), "")) : ("")) . " combination-images-selector"))]);
        // line 29
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 31
            echo "      <label class=\"combination-image-choice";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 31), "checked", [], "any", false, false, false, 31)) {
                echo " selected";
            }
            echo "\">
        <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 32), "attr", [], "any", false, false, false, 32)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["data-image-url"] ?? null) : null), "html", null, true);
            echo "\" />";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,             // line 34
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 34), "")) : ("")), "translation_domain" =>             // line 35
($context["choice_translation_domain"] ?? null)]);
            // line 37
            echo "</label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</div>
";
    }

    // line 42
    public function block_combination_manager_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 45
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Combination/loading_state.html.twig");
        echo "

    ";
        // line 48
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_state.html.twig");
        echo "

    ";
        // line 51
        echo "    <div id=\"product_combinations_generator\"
         data-is-multi-store-active=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["isMultiStoreActive"] ?? null), "html", null, true);
        echo "\"
         data-translations=\"";
        // line 53
        echo twig_escape_filter($this->env, json_encode(["generator.open" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open combinations generator", [], "Admin.Catalog.Feature"), "generator.success" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Successfully generated {combinationsNb} combinations.", [], "Admin.Catalog.Feature"), "generator.action" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate combinations|Generate combination|Generate {combinationsNb} combinations", [], "Admin.Catalog.Feature"), "generator.select-all" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all values ({valuesNb})", [], "Admin.Catalog.Feature"), "search.placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for attributes...", [], "Admin.Catalog.Feature"), "modal.title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate combinations", [], "Admin.Catalog.Feature"), "modal.close" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "label.apply-to-all-shops" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate combinations for all stores", [], "Admin.Global")]), "html", null, true);
        // line 62
        echo "\"
    ></div>

    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Sell\\Catalog\\Product\\Combination:paginatedList", ["productId" =>         // line 66
($context["productId"] ?? null)]));
        // line 67
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 67,  123 => 66,  122 => 65,  117 => 62,  115 => 53,  111 => 52,  108 => 51,  102 => 48,  96 => 45,  91 => 43,  87 => 42,  82 => 39,  75 => 37,  73 => 35,  72 => 34,  71 => 33,  68 => 32,  61 => 31,  57 => 30,  53 => 29,  51 => 28,  47 => 27,  36 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\combination.html.twig");
    }
}
