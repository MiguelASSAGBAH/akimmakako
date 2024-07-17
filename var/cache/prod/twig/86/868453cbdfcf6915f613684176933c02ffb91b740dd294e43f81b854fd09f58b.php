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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination_listing.html.twig */
class __TwigTemplate_c29c000bd44aef79fe566898ed1550ec0c2eae16fe44fb09f3fc749b49abe7ea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'combination_item_row' => [$this, 'block_combination_item_row'],
            'combination_list_row' => [$this, 'block_combination_list_row'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination_listing.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_combination_item_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "<tr id=\"combination-list-row-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
        echo "\" class=\"combination combination-list-row\">
    ";
        // line 30
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 31
            echo "      <td>
        ";
            // line 33
            echo "        ";
            if ((null === ($context["value"] ?? null))) {
                // line 34
                echo "          ";
                $context["widgetAttr"] = ["value" => (($__internal_compile_0 = ($context["placeholder_data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34)] ?? null) : null), "label" => false];
                // line 35
                echo "        ";
            } else {
                // line 36
                echo "          ";
                $context["widgetAttr"] = ["label" => false];
                // line 37
                echo "        ";
            }
            // line 38
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ($context["widgetAttr"] ?? null));
            echo "
        ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
            echo "
      </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "  </tr>";
    }

    // line 45
    public function block_combination_list_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        $macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination_listing.html.twig", 46)->unwrap();
        // line 47
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47)]);
        // line 48
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 48), "")) : ("")) . " combinations-table grid-table table grid-ordering-column"))]);
        // line 49
        echo "<table ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 51
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 51)) {
            // line 52
            echo "      ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 52), 'widget');
            echo "
    ";
        }
        // line 54
        echo "    <thead class=\"thead-default\">
    <tr class=\"column-headers\">
      <th scope=\"col\" id=\"combination-bulk-cell\">
        <div class=\"dropdown\" id=\"bulk-all-selection-dropdown\">
          <button
            id=\"bulk-all-selection-dropdown-button\"
            type=\"button\"
            class=\"md-checkbox dropdown-toggle\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
          >
            <label for=\"bulk-all-preview\" data-label=\"(%combinations_number% / %total_combinations%)\"><span></span></label>
            <input type=\"checkbox\" id=\"bulk-all-preview\" class=\"bulk-select-all\">
            <i class=\"md-checkbox-control\"></i>
          </button>

          <div class=\"dropdown-menu\">
            <label
              class=\"md-checkbox dropdown-item\"
              for=\"bulk-select-all-in-page\"
              data-label=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select results on this page (%combinations_number%)", [], "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <span></span>
              <input type=\"checkbox\" id=\"bulk-select-all-in-page\" class=\"bulk-select-all\">
              <i class=\"md-checkbox-control\"></i>
            </label>

            <label
              class=\"md-checkbox dropdown-item\"
              for=\"bulk-select-all\"
              data-label=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all results (%combinations_number%)", [], "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <span></span>
              <input type=\"checkbox\" id=\"bulk-select-all\" class=\"bulk-select-all\">
              <i class=\"md-checkbox-control\"></i>
            </label>
          </div>
        </div>
      </th>

      ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "children", [], "any", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 96
            echo "        ";
            // line 97
            echo "        ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 97), "name", [], "any", false, false, false, 97), "is_selected"))) {
                // line 98
                echo "          <th scope=\"col\" class=\"combination-column-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 98), "name", [], "any", false, false, false, 98), "html", null, true);
                echo "\">
            ";
                // line 99
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 99), "attr", [], "any", false, true, false, 99), "data-order-by", [], "array", true, true, false, 99)) {
                    // line 100
                    echo "              ";
                    echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 100), "label", [], "any", false, false, false, 100), (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 100), "attr", [], "any", false, false, false, 100)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["data-order-by"] ?? null) : null)], 100, $context, $this->getSourceContext());
                    echo "
            ";
                } else {
                    // line 102
                    echo "              ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 102), "label", [], "any", false, false, false, 102), "html", null, true);
                    echo "
            ";
                }
                // line 104
                echo "          </th>
        ";
            }
            // line 106
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "    </tr>
    </thead>
    <tbody>";
        // line 110
        $this->displayBlock("form_rows", $context, $blocks);
        // line 111
        echo "</tbody>
  </table>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination_listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 111,  212 => 110,  208 => 107,  202 => 106,  198 => 104,  192 => 102,  186 => 100,  184 => 99,  179 => 98,  176 => 97,  174 => 96,  170 => 95,  157 => 85,  144 => 75,  121 => 54,  115 => 52,  112 => 51,  107 => 49,  105 => 48,  103 => 47,  101 => 46,  97 => 45,  93 => 42,  84 => 39,  79 => 38,  76 => 37,  73 => 36,  70 => 35,  67 => 34,  64 => 33,  61 => 31,  56 => 30,  51 => 28,  47 => 27,  36 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination_listing.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\combination_listing.html.twig");
    }
}
