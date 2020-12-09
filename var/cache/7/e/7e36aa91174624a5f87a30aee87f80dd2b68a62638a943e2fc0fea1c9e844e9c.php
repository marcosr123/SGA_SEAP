<?php

/* crud/list.html.twig */
class __TwigTemplate_7e36aa91174624a5f87a30aee87f80dd2b68a62638a943e2fc0fea1c9e844e9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("module.html.twig", "crud/list.html.twig", 1);
        $this->blocks = array(
            'moduleContent' => array($this, 'block_moduleContent'),
            'thead' => array($this, 'block_thead'),
            'tbody' => array($this, 'block_tbody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "module.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_moduleContent($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"search\">
    <form method=\"get\" action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/modules/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()), "html", null, true);
        echo "\" class=\"form-inline\" role=\"search\">
        <div class=\"form-group\">
            <input id=\"search-box\" 
                   type=\"search\" 
                   name=\"s\" 
                   value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
        echo "\" 
                   class=\"form-search form-control\"
                   placeholder=\"";
        // line 11
        echo gettext("buscar");
        echo "\" />
            <script type=\"text/javascript\">SGA.Form.searchBox(\"search-box\")</script>
        </div>
        <button type=\"submit\" class=\"btn btn-default\">
            <span class=\"glyphicon glyphicon-search\"></span>&nbsp;
            ";
        // line 16
        echo gettext("Buscar");
        // line 17
        echo "        </button>
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/modules/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()), "html", null, true);
        echo "/edit\" class=\"btn btn-primary btn-add\">
            <span class=\"glyphicon glyphicon-plus-sign\"></span>&nbsp;
            ";
        // line 20
        echo gettext("Novo");
        // line 21
        echo "        </a>
    </form>
</div>
";
        // line 24
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success", array(), "array")) {
            // line 25
            echo "<div class=\"alert alert-success\">
    ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success", array(), "array"), "html", null, true);
            echo "
</div>
";
        }
        // line 29
        echo "
";
        // line 30
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array(), "array")) {
            // line 31
            echo "<div class=\"alert alert-danger\">
    ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array(), "array"), "html", null, true);
            echo "
</div>
";
        }
        // line 35
        echo "<table class=\"table table-responsive table-hover table-striped table-responsive\">
    <thead>
        <tr>
            <th>#</th>
            ";
        // line 39
        $this->displayBlock('thead', $context, $blocks);
        // line 41
        echo "            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "        <tr>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
            ";
            // line 48
            $this->displayBlock('tbody', $context, $blocks);
            // line 50
            echo "            <td class=\"buttons\">
                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()), "html", null, true);
            echo "/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\" title=\"";
            echo gettext("Editar");
            echo "\">
                    <span class=\"glyphicon glyphicon-edit\"></span>
                </a>
                <button class=\"btn btn-danger\" title=\"";
            // line 54
            echo gettext("Excluir");
            echo "\"
                        onclick=\"SGA.Form.confirm('";
            // line 55
            echo gettext("Realmente deseja excluir?");
            echo "', function() { \$('#delete-form').prop('action', '";
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/modules/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()), "html", null, true);
            echo "/delete/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "').submit(); })\">
                    <span class=\"glyphicon glyphicon-remove\"></span>
                </button>
            </td>
        </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </tbody>
</table>
<form id=\"delete-form\" action=\"\" method=\"post\">
</form>
";
        // line 65
        if (((isset($context["pages"]) ? $context["pages"] : null) > 1)) {
            // line 66
            echo "<div class=\"crud-pagination\">
    <ul class=\"pagination\">
        <li ";
            // line 68
            if (((isset($context["page"]) ? $context["page"] : null) == 0)) {
                echo "class=\"disabled\"";
            }
            echo ">
            <a href=\"?p=0\">&laquo;</a>
        </li>
        ";
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 72
                echo "        <li ";
                if ((($context["i"] - 1) == (isset($context["page"]) ? $context["page"] : null))) {
                    echo "class=\"active\"";
                }
                echo ">
            <a href=\"?p=";
                // line 73
                echo twig_escape_filter($this->env, ($context["i"] - 1), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "        <li ";
            if (((isset($context["page"]) ? $context["page"] : null) == ((isset($context["pages"]) ? $context["pages"] : null) - 1))) {
                echo "class=\"disabled\"";
            }
            echo ">
            <a href=\"?p=";
            // line 77
            echo twig_escape_filter($this->env, ((isset($context["pages"]) ? $context["pages"] : null) - 1), "html", null, true);
            echo "\">&raquo;</a>
        </li>
    </ul>
</div>
";
        }
    }

    // line 39
    public function block_thead($context, array $blocks = array())
    {
        // line 40
        echo "            ";
    }

    // line 48
    public function block_tbody($context, array $blocks = array())
    {
        // line 49
        echo "            ";
    }

    public function getTemplateName()
    {
        return "crud/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 49,  252 => 48,  248 => 40,  245 => 39,  235 => 77,  228 => 76,  217 => 73,  210 => 72,  206 => 71,  198 => 68,  194 => 66,  192 => 65,  186 => 61,  160 => 55,  156 => 54,  146 => 51,  143 => 50,  141 => 48,  137 => 47,  134 => 46,  117 => 45,  111 => 41,  109 => 39,  103 => 35,  97 => 32,  94 => 31,  92 => 30,  89 => 29,  83 => 26,  80 => 25,  78 => 24,  73 => 21,  71 => 20,  64 => 18,  61 => 17,  59 => 16,  51 => 11,  46 => 9,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
