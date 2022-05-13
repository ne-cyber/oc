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

/* default/template/extension/module/filter.twig */
class __TwigTemplate_4520ce37dd2634245af6c2c56b22c423af4981fb9caad36e77a6a2907f8edce9 extends \Twig\Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <div class=\"list-group\"> ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            echo " <a class=\"list-group-item\">";
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 3);
            echo "</a>
      ";
            // line 4
            if ((twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 4) == "Dimension")) {
                // line 5
                echo "
        <div class=\"list-group-item\">
          <div id=\"filter-group";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 7);
                echo "\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                    // line 8
                    echo "              <div class=\"checkbox\">
                <label>";
                    // line 9
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 9), ($context["and_filter_category"] ?? null))) {
                        // line 10
                        echo "                    <input type=\"checkbox\" name=\"and_filter[]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 10);
                        echo "\" checked=\"checked\" />
                    ";
                        // line 11
                        echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 11);
                        echo "
                  ";
                    } else {
                        // line 13
                        echo "                    <input type=\"checkbox\" name=\"and_filter[]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 13);
                        echo "\" />
                    ";
                        // line 14
                        echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 14);
                        echo "
                  ";
                    }
                    // line 15
                    echo "</label>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "</div>
        </div>

      ";
            } else {
                // line 21
                echo "    <div class=\"list-group-item\">
      <div id=\"filter-group";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 22);
                echo "\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                    // line 23
                    echo "        <div class=\"checkbox\">
          <label>";
                    // line 24
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 24), ($context["filter_category"] ?? null))) {
                        // line 25
                        echo "            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 25);
                        echo "\" checked=\"checked\" />
            ";
                        // line 26
                        echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 26);
                        echo "
            ";
                    } else {
                        // line 28
                        echo "            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 28);
                        echo "\" />
            ";
                        // line 29
                        echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 29);
                        echo "
            ";
                    }
                    // line 30
                    echo "</label>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "</div>
    </div>
      ";
            }
            // line 35
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
  <div class=\"panel-footer text-right\">
    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">";
        // line 37
        echo ($context["button_filter"] ?? null);
        echo "</button>
  </div>
</div>
<script type=\"text/javascript\"><!--

    document.addEventListener('DOMContentLoaded', function () {

        alert('";
        // line 44
        echo ($context["is_all_category"] ?? null);
        echo "');

        if('";
        // line 46
        echo ($context["is_all_category"] ?? null);
        echo "') {
            const all_product = document.getElementById('all_product');
            const url = new URL(window.url);
            url.searchParams.set('route', 'extension/module/ajax_all_product');
            window.url = url;

            let request = new XMLHttpRequest();
            request.onload = function () {
                all_product.innerHTML = this.responseText;

                var cols = \$('#column-right, #column-left').length;

                if (cols == 2) {
                    \$('#content .product-list').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
                } else if (cols == 1) {
                    \$('#content .product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
                } else {
                    \$('#content .product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
                }

                \$('#list-view').removeClass('active');
                \$('#grid-view').addClass('active');

                localStorage.setItem('display', 'grid');
            };

            request.open('GET', url.href);
            request.send();
        }
        else if('";
        // line 75
        echo ($context["is_category"] ?? null);
        echo "')
        {
            const product_category = document.getElementById('product-category');
            const url = new URL(window.url);
            url.searchParams.set('route', 'product/ajax_category');

            window.url = url;
            let request = new XMLHttpRequest();
            request.onload = function () {
                product_category.innerHTML = this.responseText;

                var cols = \$('#column-right, #column-left').length;

                if (cols == 2) {
                    \$('#content .product-list').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
                } else if (cols == 1) {
                    \$('#content .product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
                } else {
                    \$('#content .product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
                }

                \$('#list-view').removeClass('active');
                \$('#grid-view').addClass('active');

                localStorage.setItem('display', 'grid');


            };

            request.open('GET', url.href);
            request.send();
        }

    });




\$(\":input[name^=\\'filter\\'], :input[name^=\\'and_filter\\']\").on('click', function() {

\tfilter = [];
    and_filter = [];

\t\$('input[name^=\\'filter\\']:checked').each(function(element) {
\t\tfilter.push(this.value);
\t});

    \$('input[name^=\\'and_filter\\']:checked').each(function(element) {
      and_filter.push(this.value);
    });

\t//location = '";
        // line 126
        echo ($context["action"] ?? null);
        echo "&filter=' + filter.join(',') + '&and_filter=' + and_filter.join(',');

    if('";
        // line 128
        echo ($context["is_all_category"] ?? null);
        echo "') {

        const all_product = document.getElementById('all_product');
        const url = new URL(window.url);
        url.searchParams.set('route', 'extension/module/ajax_all_product');
        url.searchParams.set('filter', filter.join(','));
        url.searchParams.set('and_filter', and_filter.join(','));

        let request = new XMLHttpRequest();
        request.onload = function () {
            all_product.innerHTML = this.responseText;

            var cols = \$('#column-right, #column-left').length;

            if (cols == 2) {
                \$('#content .product-list').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
            } else if (cols == 1) {
                \$('#content .product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
            } else {
                \$('#content .product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
            }

            \$('#list-view').removeClass('active');
            \$('#grid-view').addClass('active');

            localStorage.setItem('display', 'grid');
        };

        request.open('GET', url.href);
        request.send();
    }
    else if('";
        // line 159
        echo ($context["is_category"] ?? null);
        echo "') {
        const product_category = document.getElementById('product-category');
        const url = new URL(location);
        url.searchParams.set('route', 'product/category');
        url.searchParams.set('filter', filter.join(','));
        url.searchParams.set('and_filter', and_filter.join(','));

        let request = new XMLHttpRequest();
        request.onload = function () {
            product_category.innerHTML = this.responseText;

            var cols = \$('#column-right, #column-left').length;

            if (cols == 2) {
                \$('#content .product-list').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
            } else if (cols == 1) {
                \$('#content .product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
            } else {
                \$('#content .product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
            }

            \$('#list-view').removeClass('active');
            \$('#grid-view').addClass('active');

            localStorage.setItem('display', 'grid');
        };

        request.open('GET', url.href);
        request.send();
    }


});



//--></script> 
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 159,  265 => 128,  260 => 126,  206 => 75,  174 => 46,  169 => 44,  159 => 37,  150 => 35,  145 => 32,  137 => 30,  132 => 29,  127 => 28,  122 => 26,  117 => 25,  115 => 24,  112 => 23,  106 => 22,  103 => 21,  97 => 17,  89 => 15,  84 => 14,  79 => 13,  74 => 11,  69 => 10,  67 => 9,  64 => 8,  58 => 7,  54 => 5,  52 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/filter.twig", "");
    }
}
