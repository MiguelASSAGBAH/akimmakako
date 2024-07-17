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

/* @PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list_header.html.twig */
class __TwigTemplate_58f419ee9056633bbba33d2456c86782a5356f8db037b144e73529b6d9634e63 extends Template
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
<div id=\"combination-list-actions\">
  <div class=\"btn-group\">
    ";
        // line 29
        echo "    <button class=\"btn btn-outline-secondary dropdown-toggle\"
      id=\"combination-bulk-actions-btn\"
      data-toggle=\"dropdown\"
      aria-expanded=\"false\"
      disabled
    >
      ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bulk actions", [], "Admin.Global"), "html", null, true);
        echo "
      <i class=\"icon-caret-up\"></i>
    </button>
    <div class=\"dropdown-menu\" style=\"\">
      <button
        id=\"combination-bulk-form-btn\" class=\"dropdown-item bulk-action-btn\" type=\"button\"
        data-btn-label=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit %combinations_number% combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-form-url=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_products_combinations_bulk_combination_form", ["productId" => ($context["productId"] ?? null)]), "html", null, true);
        echo "\"
        data-modal-confirm-label=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Apply to %combinations_number% combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-modal-cancel-label=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "\"
      >
        ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit %combinations_number% combinations", ["%s" => ""], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </button>
      ";
        // line 48
        if (($context["isMultistoreActive"] ?? null)) {
            // line 49
            echo "        ";
            $context["deleteLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete %combinations_number% combinations from store \"%store_name%\"", ["%store_name%" => ($context["shopName"] ?? null)], "Admin.Catalog.Feature");
            // line 50
            echo "        ";
            $context["modalMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete selected combinations from store \"%store_name%\"?", ["%store_name%" => ($context["shopName"] ?? null)], "Admin.Catalog.Notification");
            // line 51
            echo "      ";
        } else {
            // line 52
            echo "        ";
            $context["deleteLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete %combinations_number% combinations", [], "Admin.Catalog.Feature");
            // line 53
            echo "        ";
            $context["modalMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete selected combinations?", [], "Admin.Catalog.Notification");
            // line 54
            echo "      ";
        }
        // line 55
        echo "      <button
        id=\"combination-bulk-delete-btn\" class=\"dropdown-item bulk-action-btn bulk-delete-btn\" type=\"button\"
        data-btn-label=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["deleteLabel"] ?? null), "html", null, true);
        echo "\"
        data-form-url=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_products_combinations_bulk_delete", ["productId" => ($context["productId"] ?? null)]), "html", null, true);
        echo "\"
        data-modal-message=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["modalMessage"] ?? null), "html", null, true);
        echo "\"
        data-modal-confirm-label=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete %combinations_number% combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-modal-cancel-label=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "\"
        data-bulk-chunk-size=\"10\"
        data-progress-title=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleting %total% combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-progress-message=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleting %done%/%total% combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-close-label=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-stop-processing=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stop processing", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-errors-message=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%error_count% errors occurred. You can download the logs for future reference.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-back-to-processing=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to processing", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-download-error-log=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download error log", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-view-error-log=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View %error_count% error logs", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-view-error-title=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error log", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-shop-id=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["shopId"] ?? null), "html", null, true);
        echo "\"
      >
        ";
        // line 74
        echo twig_escape_filter($this->env, ($context["deleteLabel"] ?? null), "html", null, true);
        echo "
      </button>
      ";
        // line 76
        if (($context["isMultistoreActive"] ?? null)) {
            // line 77
            echo "        <button
          id=\"combination-bulk-delete-btn-all-shops\" class=\"dropdown-item bulk-action-btn bulk-delete-btn\" type=\"button\"
          data-btn-label=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete %combinations_number% combinations from all stores", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-form-url=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_products_combinations_bulk_delete", ["productId" => ($context["productId"] ?? null)]), "html", null, true);
            echo "\"
          data-modal-message=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete selected combinations from all stores?", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "\"
          data-modal-confirm-label=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete %combinations_number% combinations", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-modal-cancel-label=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
            echo "\"
          data-bulk-chunk-size=\"10\"
          data-progress-title=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleting %total% combinations", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-progress-message=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleting %done%/%total% combinations", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-close-label=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-stop-processing=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stop processing", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-errors-message=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%error_count% errors occurred. You can download the logs for future reference.", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-back-to-processing=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to processing", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-download-error-log=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download error log", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-view-error-log=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View %error_count% error logs", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-view-error-title=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error log", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
        >
          ";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete %combinations_number% combinations from all stores", ["%s" => ""], "Admin.Catalog.Feature"), "html", null, true);
            echo "
        </button>
      ";
        }
        // line 98
        echo "    </div>
  </div>

  <button type=\"button\" class=\"btn btn-primary generate-combinations-button\" disabled=\"disabled\">
    ";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </button>
</div>

";
        // line 107
        echo "<div id=\"combinations_filters\"
  data-translations=\"";
        // line 108
        echo twig_escape_filter($this->env, json_encode(["filters.label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter by:", [], "Admin.Actions"), "filters.clear" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clear filter|Clear {filtersNb} filters", [], "Admin.Actions")]), "html", null, true);
        // line 111
        echo "\"
></div>
<div id=\"combination-edit-modal\"
     data-empty-image=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/img/empty_state/combinations_history.png"), "html", null, true);
        echo "\"
     data-translations=\"";
        // line 115
        echo twig_escape_filter($this->env, json_encode(["modal.save" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "modal.close" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"), "modal.previous" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Previous combination", [], "Admin.Catalog.Feature"), "modal.next" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next combination", [], "Admin.Catalog.Feature"), "modal.history.editedCombination" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edited combinations ({editedNb})", [], "Admin.Catalog.Feature"), "modal.history.confirmTitle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discard changes?", [], "Admin.Catalog.Notification"), "modal.history.confirmBody" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All unsaved modifications made on the combination [1]{combinationName}[/1] will be lost.", ["[1]" => "<span class=\"font-weight-bold\">", "[/1]" => "</span>"], "Admin.Catalog.Notification"), "modal.cancel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "modal.confirm" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discard", [], "Admin.Actions"), "modal.history.empty" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Here, you can have a look at the combinations you have edited. The list will reset when you close the editing window.", [], "Admin.Catalog.Feature"), "modal.history.open" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open history", [], "Admin.Catalog.Feature"), "modal.history.close" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close history", [], "Admin.Catalog.Feature")]), "html", null, true);
        // line 128
        echo "\"
></div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 128,  269 => 115,  265 => 114,  260 => 111,  258 => 108,  255 => 107,  248 => 102,  242 => 98,  236 => 95,  231 => 93,  227 => 92,  223 => 91,  219 => 90,  215 => 89,  211 => 88,  207 => 87,  203 => 86,  199 => 85,  194 => 83,  190 => 82,  186 => 81,  182 => 80,  178 => 79,  174 => 77,  172 => 76,  167 => 74,  162 => 72,  158 => 71,  154 => 70,  150 => 69,  146 => 68,  142 => 67,  138 => 66,  134 => 65,  130 => 64,  126 => 63,  121 => 61,  117 => 60,  113 => 59,  109 => 58,  105 => 57,  101 => 55,  98 => 54,  95 => 53,  92 => 52,  89 => 51,  86 => 50,  83 => 49,  81 => 48,  76 => 46,  71 => 44,  67 => 43,  63 => 42,  59 => 41,  50 => 35,  42 => 29,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list_header.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\Combination\\paginated_list_header.html.twig");
    }
}
