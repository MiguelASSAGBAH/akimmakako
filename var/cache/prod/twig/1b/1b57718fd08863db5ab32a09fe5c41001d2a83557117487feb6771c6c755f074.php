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

/* __string_template__d0c094c05d41b741ffdca4ee4bc4bf4e25535cb83206c23e23bae1199346d9b0 */
class __TwigTemplate_ece89ad7e22f9921e7af28f9b285cd3b1db7450ebc1cd8c3c575fbf56134ca2e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Gestionnaire de modules • AKIMMAKAKO</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr-fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'TG';
    var _PS_VERSION_ = '8.1.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'a7b9b3836ac2eedbae613afa35c2327a';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '573adede156f9d8885ffbcb1b79c4ebd';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/adminmiguel/index.php/improve/modules/manage?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84';
    var admin_notification_get_link = '/prestashop/adminmiguel/index.php/common/notifications?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/adminmiguel/index.php/common/notifications/ack?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzl";
        // line 40
        echo "YH84';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/adminmiguel/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/adminmiguel/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/adminmiguel/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/adminmiguel/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.f8a9f5f9.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/connection-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript";
        // line 69
        echo "\">
var baseAdminDir = \"\\/prestashop\\/adminmiguel\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/adminmiguel\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/adminmiguel/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/adminmiguel/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestas";
        // line 88
        echo "hop/js/tools.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/adminmiguel/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/adminmiguel/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=4.11.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/connection-toolbar.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.11.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/adminmiguel\\/index.php?controller=AdminGamification&token=07b1e4705419573cfdec3d2115ac9b37\";
            var current_id_tab = 40;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/adminmiguel/index.php/common/notifications?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84',
      CHECKBOX_ORDER: 1,
      CHECK";
        // line 113
        echo "BOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = 'fr';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script type=\"module\" src=\"/prestashop/modules/psxdesign/views/js/upgrade-notification.js\"></script>


";
        // line 126
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminmodulesmanage\"
  data-base-url=\"/prestashop/adminmiguel/index.php\"  data-token=\"mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/adminmiguel/index.php/modules/pseditionbasic/homepage?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"></a>
      <span id=\"shop_version\">8.1.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/adminmiguel/index.php/sell/orders?token=e8fa18326b6094ebbef94e23e9f2cb08\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=386b70ef49a15a94ef0015ac25b5c491\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link  active\"
         href=\"http://localhost/prestashop/adminmiguel/index.php/improve/modules/manage?token=e8fa18326b6094ebbef94e23e9f2cb08\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5352e7de9b223cddcd66c3cfde79da14\"
                 data-item=\"Nouveau bon de réduction\"
      >Nou";
        // line 162
        echo "veau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/adminmiguel/index.php/sell/catalog/products-v2/create?token=e8fa18326b6094ebbef94e23e9f2cb08\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/adminmiguel/index.php/sell/catalog/categories/new?token=e8fa18326b6094ebbef94e23e9f2cb08\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"93\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminQuickAccesses&token=1aee75c9e13250dc30afeb4bb9cc3e75\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Modules - Liste\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Supprimer de l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminQuickAccesses&token=1aee75c9e13250dc30afeb4bb9cc3e75\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/adminmiguel/index.php?controller=AdminSearch&amp;token=1abc4edb609d33675f5acc65fa08311d\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_sea";
        // line 202
        echo "rch_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart";
        // line 217
        echo "</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/adminmiguel/index.php/sell/orders?token=e8fa18326b6094ebbef94e23e9f2cb08\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=386b70ef49a15a94ef0015ac25b5c491\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link active\"
       href=\"http://localhost/prestashop/adminmiguel/index.php/improve/modules/manage?token=e8fa18326b6094ebbef94e23e9f2cb08\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5352e7de9b223cddcd66c3cfde79da14\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/adminmiguel/index.php/sell/catalog/products-v2/create?token=e8fa18326b6094ebbef94e23e9f2cb08\"
            ";
        // line 255
        echo " data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/adminmiguel/index.php/sell/catalog/categories/new?token=e8fa18326b6094ebbef94e23e9f2cb08\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-remove-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-method=\"remove\"
      data-quicklink-id=\"5\"
      data-rand=\"164\"
      data-icon=\"icon-AdminModulesSf\"
      data-url=\"index.php/improve/modules/manage\"
      data-post-link=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminQuickAccesses&token=1aee75c9e13250dc30afeb4bb9cc3e75\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Modules - Liste\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      Supprimer de l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminQuickAccesses&token=1aee75c9e13250dc30afeb4bb9cc3e75\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Votre boutique est en mode maintenance.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Vos visiteurs et clients ne peuvent pas accéder à votre boutique lorsque le mode maintenance est activé.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&g";
        // line 300
        echo "t;
              Pour gérer les paramètres de maintenance, rendez-vous sur la page Paramètres de la boutique &amp;gt; Paramètres généraux &amp;gt; Maintenance.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Les administrateurs peuvent accéder au front-office de la boutique sans que leur adresse IP ne soit enregistrée.
            &lt;/p&gt;
                  \"
             href=\"/prestashop/adminmiguel/index.php/configure/shop/maintenance/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>";
        // line 343
        echo "
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=71d9b41d43230dc4b503cd306aca9245\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
          ";
        // line 390
        echo "    Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" alt=\"Miguel\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Miguel</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/adminmiguel/index.php/configure/advanced/employees/1/edit?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span";
        // line 438
        echo ">
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminLogin&amp;logout=1&amp;token=c2c6079d907010f71cfcfe117317811d\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/adminmiguel/index.php/configure/advanced/employees/toggle-navigation?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/adminmiguel/index.php/modules/pseditionbasic/homepage?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.0</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"134\" id=\"tab-HOME\">
                <span class=\"title\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"135\" id";
        // line 485
        echo "=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/adminmiguel/index.php/modules/pseditionbasic/homepage?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Accueil
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminDashboard&amp;token=2c62d29c75851facdd08ae029bdc91c8\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Tableau de bord
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      ";
        // line 523
        echo "
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/adminmiguel/index.php/sell/orders/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/adminmiguel/index.php/sell/orders/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/adminmiguel/index.php/sell/orders/invoices/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                            ";
        // line 554
        echo "                
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/adminmiguel/index.php/sell/orders/credit-slips/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/adminmiguel/index.php/sell/orders/delivery-slips/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminCarts&amp;token=71d9b41d43230dc4b503cd306aca9245\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/adminmiguel/index.php/sell/catalog/products?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\">
                      <i class=\"material-icons mi-stor";
        // line 584
        echo "e\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/adminmiguel/index.php/sell/catalog/products?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/adminmiguel/index.php/sell/catalog/categories?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/adminmiguel/index.php/sell/catalog/monitoring/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Suivi
                               ";
        // line 614
        echo " </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminAttributesGroups&amp;token=65e5ae58cdfc78c95e67dd2920b0118b\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/adminmiguel/index.php/sell/catalog/brands/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/adminmiguel/index.php/sell/attachments/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                          ";
        // line 645
        echo "      <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminCartRules&amp;token=5352e7de9b223cddcd66c3cfde79da14\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/adminmiguel/index.php/sell/stocks/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/adminmiguel/index.php/sell/customers/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
          ";
        // line 677
        echo "                    <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/adminmiguel/index.php/sell/customers/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/adminmiguel/index.php/sell/addresses/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminCustomerThreads&amp;token=c50774acc9c6c2f9d9484486dfc27c61\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
";
        // line 707
        echo "                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminCustomerThreads&amp;token=c50774acc9c6c2f9d9484486dfc27c61\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/adminmiguel/index.php/sell/customer-service/order-messages/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminReturn&amp;token=ca956e1d8a8699ac5e36e70f5f3bf1bd\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a hre";
        // line 738
        echo "f=\"/prestashop/adminmiguel/index.php/modules/metrics/legacy/stats?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/adminmiguel/index.php/modules/metrics/legacy/stats?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/adminmiguel/index.php/modules/metrics?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
  ";
        // line 770
        echo "                  
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/adminmiguel/index.php/modules/mbo/modules/catalog/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"215\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/adminmiguel/index.php/modules/mbo/modules/catalog/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                           ";
        // line 801
        echo " 
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/adminmiguel/index.php/improve/modules/manage?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/adminmiguel/index.php/modules/improve/design/themes?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/adminmiguel/index.php/modules/improve/design/themes?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Personnalisation
                     ";
        // line 829
        echo "           </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"219\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/adminmiguel/index.php/modules/mbo/themes/catalog/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=e164bb91837b6a8c3d5fd1b29b80acf4\" class=\"link\"> Modules du thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/adminmiguel/index.php/improve/design/mail_theme/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                ";
        // line 860
        echo "                <a href=\"/prestashop/adminmiguel/index.php/improve/design/cms-pages/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/adminmiguel/index.php/improve/design/modules/positions/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminImages&amp;token=f798627ae9cb9ea14747851f1a4860f3\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/adminmiguel/index.php/modules/link-widget/list?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                   ";
        // line 890
        echo "           
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminCarriers&amp;token=b18ddea2733b5c3ebf049ed3af8aa345\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminCarriers&amp;token=b18ddea2733b5c3ebf049ed3af8aa345\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/adminmiguel/index.php/improve/shipping/preferences/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Préférences
                                </a>
                              </li>

          ";
        // line 921
        echo "                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/adminmiguel/index.php/improve/payment/payment_methods?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/adminmiguel/index.php/improve/payment/payment_methods?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/adminmiguel/index.php/improve/payment/preferences?_token=mF8M45NH";
        // line 950
        echo "tovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/adminmiguel/index.php/improve/international/localization/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/adminmiguel/index.php/improve/international/localization/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data";
        // line 982
        echo "-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/adminmiguel/index.php/improve/international/zones/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/adminmiguel/index.php/improve/international/taxes/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/adminmiguel/index.php/improve/international/translations/settings?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"149\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=a28089fb8a5c0be05f5780bf4858ff6c\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">ca";
        // line 1011
        echo "mpaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-149\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=a28089fb8a5c0be05f5780bf4858ff6c\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminPsfacebookModule&amp;token=9d7614b16471338b8ffd6817fc456daa\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
 ";
        // line 1046
        echo "           </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"136\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/adminmiguel/index.php/modules/pseditionbasic/settings?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/adminmiguel/index.php/configure/shop/preferences/preferences?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
   ";
        // line 1080
        echo "                                                         
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/shop/preferences/preferences?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/shop/order-preferences/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/shop/product-preferences/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/shop/customer-preferences/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"li";
        // line 1106
        echo "nk\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/shop/contacts/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/shop/seo-urls/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminSearchConf&amp;token=6699e20fc78a9495b618e3f45202991f\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-leve";
        // line 1140
        echo "lone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/adminmiguel/index.php/configure/advanced/system-information/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/advanced/system-information/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/advanced/performance/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                       ";
        // line 1168
        echo "       
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/advanced/administration/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/advanced/emails/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/advanced/import/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/advanced/employees/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Équipe
                                </a>
          ";
        // line 1197
        echo "                    </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/advanced/sql-requests/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/advanced/logs/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/advanced/webservice-keys/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                           ";
        // line 1226
        echo "   <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/advanced/feature-flags/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/adminmiguel/index.php/configure/advanced/security/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"126\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminPsAssistantSettings&amp;token=671d0115e5d89f082ff7362db793d080\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                      ";
        // line 1256
        echo "                        
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"154\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/prestashop/adminmiguel/index.php?controller=AdminKlaviyoPsConfig&amp;token=7625af690e28d5b9bf281506f869c5a5\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gestionnaire de modules </li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/adminmiguel/index.php/improve/modules/manage?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestionnaire de modules          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Installer un module\"                  data-toggle=\"psto";
        // line 1307
        echo "oltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Installer un module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/adminmiguel/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.1.0%2526country%253Dfr/Aide?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/prestashop/adminmiguel/index.php/improve/modules/manage?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active curre";
        // line 1333
        echo "nt\" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/adminmiguel/index.php/improve/modules/alerts?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alertes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/adminmiguel/index.php/improve/modules/updates?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Mises à jour
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ";
        // line 1356
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Installer un module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Installer un module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/adminmiguel/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D8.1.0%2526country%253Dfr/Aide?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        <script>
  if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
    const ";
        // line 1393
        echo "renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

    const context = {\"currency\":\"EUR\",\"iso_lang\":\"fr\",\"iso_code\":\"tg\",\"shop_version\":\"8.1.0\",\"shop_url\":\"http:\\/\\/localhost\\/prestashop\\/\",\"shop_uuid\":\"a6e1fb92-fa7c-4121-82fa-81ae78f7aefb\",\"mbo_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzaG9wX3VybCI6Imh0dHA6Ly9sb2NhbGhvc3QvcHJlc3Rhc2hvcC8iLCJzaG9wX3V1aWQiOiJhNmUxZmI5Mi1mYTdjLTQxMjEtODJmYS04MWFlNzhmN2FlZmIifQ.qoLSlvWUhfKYROvhKuSfZq2FNxavNssBWg5Qu68kwvQ\",\"mbo_version\":\"4.11.3\",\"mbo_reset_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/reset\\/ps_mbo?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\",\"user_id\":\"1\",\"admin_token\":\"e8fa18326b6094ebbef94e23e9f2cb08\",\"refresh_url\":\"http:\\/\\/localhost\\/prestashop\\/adminmiguel\\/index.php?controller=apiSecurityPsMbo&token=289c470e500b1885f62d8e8479c5b9ec\",\"installed_modules\":[{\"id\":0,\"name\":\"blockreassurance\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.1.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockreassurance?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"blockwishlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockwishlist?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"contactform\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/contactform?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"dashactivity\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"dashgoals\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"dashproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.4\",\"config_url\":";
        // line 1395
        echo "null},{\"id\":0,\"name\":\"dashtrends\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"gamification\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"graphnvd3\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"gridhtml\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"gsitemap\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/gsitemap?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"klaviyopsautomation\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.6.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/klaviyopsautomation?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"mbeshipping\",\"status\":\"uninstalled\",\"version\":\"2.1.8\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/mbeshipping?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"pagesnotfound\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"productcomments\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/productcomments?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"psassistant\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psassistant?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"psgdpr\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.4.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/act";
        echo "ion\\/configure\\/psgdpr?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"psxdesign\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.6.7\",\"config_url\":null},{\"id\":0,\"name\":\"psxmarketingwithgoogle\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.73.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psxmarketingwithgoogle?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_accounts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"7.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_accounts?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_banner\",\"status\":\"enabled__mobile_disabled\",\"version\":\"2.1.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_banner?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_bestsellers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_bestsellers?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_brandlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_brandlist?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_cashondelivery\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_categoryproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.7\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categoryproducts?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_categorytree\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":\"ht";
        echo "tp:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categorytree?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_checkout\",\"status\":\"enabled__mobile_enabled\",\"version\":\"8.4.0.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkout?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_checkpayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkpayment?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_contactinfo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.3.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_contactinfo?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_crossselling\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_crossselling?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_currencyselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customeraccountlinks\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customersignin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.5\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customtext\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_customtext?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_dataprivacy\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/m";
        echo "odules\\/manage\\/action\\/configure\\/ps_dataprivacy?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_distributionapiclient\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_edition_basic\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.15\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_edition_basic?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_emailalerts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.4.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailalerts?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_emailsubscription\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.8.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailsubscription?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_eventbus\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.12\",\"config_url\":null},{\"id\":0,\"name\":\"ps_facebook\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.37.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facebook?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_facetedsearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.16.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facetedsearch?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_faviconnotificationbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_faviconnotificationbo?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_featuredproducts\"";
        echo ",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.5\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_featuredproducts?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_googleanalytics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_googleanalytics?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_imageslider\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.1.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_imageslider?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_languageselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_linklist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.7\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_linklist?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_mainmenu\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_mainmenu?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_mbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.11.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_metrics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.0.5\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_metrics?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_newproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_newproducts?_token=mF";
        echo "8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_searchbar\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_sharebuttons\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_sharebuttons?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_shoppingcart\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.7\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_shoppingcart?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_socialfollow\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_socialfollow?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_specials\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_specials?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_supplierlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_supplierlist?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_themecusto\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_viewedproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_viewedproduct?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"ps_wirepayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.2.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminm";
        echo "iguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_wirepayment?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"statsbestcategories\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestcustomers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestmanufacturers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestsuppliers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestvouchers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statscarrier\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statscatalog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statscheckup\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsdata\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsdata?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"statsforecast\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsforecast?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"},{\"id\":0,\"name\":\"statsnewsletter\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statspersonalinfos\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statsproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsregistrations\",\"status\":\"enabled__mobile_enabled\",\"v";
        echo "ersion\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statssales\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":0,\"name\":\"statssearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsstock\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null}],\"upgradable_modules\":[],\"accounts_user_id\":null,\"accounts_shop_id\":null,\"accounts_token\":\"\",\"accounts_component_loaded\":false,\"module_manager_updates_tab_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/improve\\/modules\\/updates?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\",\"module_catalog_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/modules\\/mbo\\/modules\\/catalog\\/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\",\"theme_catalog_url\":\"http:\\/\\/localhost\\\\prestashop\\/adminmiguel\\/index.php\\/modules\\/mbo\\/themes\\/catalog\\/?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\",\"php_version\":\"7.4.33\",\"shop_creation_date\":\"2024-07-08\",\"shop_business_sector_id\":null,\"shop_business_sector\":null,\"prestaShop_controller_class_name\":\"AdminModulesManage\"};

    renderModulesManagerMessage(context, '#module-manager-message-cdc-container')
  }
</script>
<div class=\"module-manager-message-wrapper cdc-container\" id=\"module-manager-message-cdc-container\" data-error-path=\"/prestashop/adminmiguel/index.php/modules/mbo/modules/catalog/cdc_error?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\"></div>


                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1408
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"/prestashop/adminmiguel/index.php/modules/pseditionbasic/homepage?_token=mF8M45NHtovZleFh_EEBH-KtSJwm7XofUu7akzlYH84\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1442
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 126
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1408
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1442
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__d0c094c05d41b741ffdca4ee4bc4bf4e25535cb83206c23e23bae1199346d9b0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1634 => 1442,  1613 => 1408,  1602 => 126,  1593 => 1442,  1553 => 1408,  1531 => 1395,  1527 => 1393,  1488 => 1356,  1463 => 1333,  1435 => 1307,  1382 => 1256,  1350 => 1226,  1319 => 1197,  1288 => 1168,  1258 => 1140,  1222 => 1106,  1194 => 1080,  1158 => 1046,  1121 => 1011,  1090 => 982,  1056 => 950,  1025 => 921,  992 => 890,  960 => 860,  927 => 829,  897 => 801,  864 => 770,  830 => 738,  797 => 707,  765 => 677,  731 => 645,  698 => 614,  666 => 584,  634 => 554,  601 => 523,  561 => 485,  512 => 438,  462 => 390,  413 => 343,  368 => 300,  321 => 255,  281 => 217,  264 => 202,  222 => 162,  181 => 126,  166 => 113,  139 => 88,  118 => 69,  87 => 40,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d0c094c05d41b741ffdca4ee4bc4bf4e25535cb83206c23e23bae1199346d9b0", "");
    }
}
