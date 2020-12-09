<?php

/* edit.html.twig */
class __TwigTemplate_9610cff67cf52d24e0eabbed72938105d4d30a7ee3bee0253563fd6bfef3bef2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("crud/edit.html.twig", "edit.html.twig", 1);
        $this->blocks = array(
            'formContent' => array($this, 'block_formContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "crud/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_formContent($context, array $blocks = array())
    {
        // line 3
        echo "    <input type=\"hidden\" name=\"id\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()), "html", null, true);
        echo "\" />
    <div class=\"form-group required\">
        <label for=\"nome\" class=\"control-label\">";
        // line 5
        echo gettext("Nome");
        echo "</label>
        <input id=\"nome\" type=\"text\" name=\"nome\" class=\"form-control\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "nome", array()), "html", null, true);
        echo "\" maxlength=\"30\" />
    </div>
    <div class=\"form-group required\">
        <label for=\"descricao\" class=\"control-label\">";
        // line 9
        echo gettext("Descrição");
        echo "</label>
        <textarea id=\"descricao\" name=\"descricao\" class=\"form-control\" rows=\"5\" maxlength=\"100\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "descricao", array()), "html", null, true);
        echo "</textarea>
    </div>
    ";
        // line 12
        if (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()) != 1)) {
            // line 13
            echo "    <div class=\"form-group required\">
        <label for=\"peso\" class=\"control-label\">";
            // line 14
            echo gettext("Peso");
            echo "</label>
        <select id=\"peso\" name=\"peso\" class=\"form-control\">
            ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pesos"]) ? $context["pesos"] : null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 17
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo "\" ";
                if (($context["k"] == $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "peso", array()))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </select>
    </div>
    ";
        } else {
            // line 22
            echo "        ";
            // line 23
            echo "        <input type=\"hidden\" name=\"peso\" value=\"0\">
    ";
        }
        // line 25
        echo "    <div class=\"form-group required\">
        <label for=\"status\" class=\"control-label\">";
        // line 26
        echo gettext("Status");
        echo "</label>
        <select id=\"status\" name=\"status\" class=\"form-control\">
            ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["status"]) ? $context["status"] : null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 29
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\" ";
            if (($context["k"] == $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "status", array()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </select>
    </div>
";
    }

    public function getTemplateName()
    {
        return "edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 31,  108 => 29,  104 => 28,  99 => 26,  96 => 25,  92 => 23,  90 => 22,  85 => 19,  70 => 17,  66 => 16,  61 => 14,  58 => 13,  56 => 12,  51 => 10,  47 => 9,  41 => 6,  37 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
