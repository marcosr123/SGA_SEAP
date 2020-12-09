<?php

/* crud/edit.html.twig */
class __TwigTemplate_46ee6b78f5753b8a651da6014d3253ff99ed0a6b1801942e6331a08a0b5c6f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("module.html.twig", "crud/edit.html.twig", 1);
        $this->blocks = array(
            'moduleContent' => array($this, 'block_moduleContent'),
            'formContent' => array($this, 'block_formContent'),
            'dialogs' => array($this, 'block_dialogs'),
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
        echo "    <form id=\"crud-form\" method=\"post\" action=\"#\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()), "html", null, true);
        echo "\" />
        
        ";
        // line 6
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success", array(), "array")) {
            // line 7
            echo "        <div class=\"alert alert-success\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success", array(), "array"), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 11
        echo "        
        ";
        // line 12
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array(), "array")) {
            // line 13
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array(), "array"), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 17
        echo "        
        ";
        // line 18
        $this->displayBlock('formContent', $context, $blocks);
        // line 20
        echo "        <div class=\"buttons\">
            <span class=\"btns\">
                <button type=\"submit\"
                        class=\"btn btn-primary\">
                    <span class=\"glyphicon glyphicon-save\"></span>&nbsp;
                    ";
        // line 25
        echo gettext("Salvar");
        // line 26
        echo "                </button>
                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/modules/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()), "html", null, true);
        echo "\"
                        class=\"btn btn-default\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>&nbsp;
                    ";
        // line 30
        echo gettext("Voltar");
        // line 31
        echo "                </a>
            </span>
            <p class=\"required-desc\">";
        // line 33
        echo gettext("Campos obrigatórios");
        echo "</p>
            ";
        // line 34
        if (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()) > 0)) {
            // line 35
            echo "            <button id=\"btn-delete\"
                    class=\"btn btn-danger\"
                    onclick=\"SGA.Form.confirm('";
            // line 37
            echo gettext("Realmente deseja excluir?");
            echo "', function() { \$('#form-delete').submit() }); return false;\">
                <span class=\"glyphicon glyphicon-remove\"></span>&nbsp;
                ";
            // line 39
            echo gettext("Excluir");
            // line 40
            echo "            </button>
            ";
        }
        // line 42
        echo "        </div>
    </form>
    ";
        // line 44
        if (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()) > 0)) {
            // line 45
            echo "    <form id=\"form-delete\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/modules/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()), "html", null, true);
            echo "/delete/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()), "html", null, true);
            echo "\" method=\"post\">
    </form>
    ";
        }
        // line 48
        echo "    ";
        $this->displayBlock('dialogs', $context, $blocks);
        // line 50
        echo "    <script type=\"text/javascript\">
        SGA.Form.labels.required = '";
        // line 51
        echo gettext("Campo obrigatório");
        echo "';
        SGA.Form.validate('crud-form');
    </script>
    
";
    }

    // line 18
    public function block_formContent($context, array $blocks = array())
    {
        // line 19
        echo "        ";
    }

    // line 48
    public function block_dialogs($context, array $blocks = array())
    {
        // line 49
        echo "    ";
    }

    public function getTemplateName()
    {
        return "crud/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 49,  157 => 48,  153 => 19,  150 => 18,  141 => 51,  138 => 50,  135 => 48,  124 => 45,  122 => 44,  118 => 42,  114 => 40,  112 => 39,  107 => 37,  103 => 35,  101 => 34,  97 => 33,  93 => 31,  91 => 30,  83 => 27,  80 => 26,  78 => 25,  71 => 20,  69 => 18,  66 => 17,  60 => 14,  57 => 13,  55 => 12,  52 => 11,  46 => 8,  43 => 7,  41 => 6,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
