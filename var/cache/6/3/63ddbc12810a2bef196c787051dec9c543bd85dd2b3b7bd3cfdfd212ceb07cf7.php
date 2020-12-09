<?php

/* edit.html.twig */
class __TwigTemplate_63ddbc12810a2bef196c787051dec9c543bd85dd2b3b7bd3cfdfd212ceb07cf7 extends Twig_Template
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
        echo "    <div class=\"form-group required\">
        <label for=\"codigo\">";
        // line 4
        echo gettext("Código");
        echo "</label>
        <input id=\"codigo\" type=\"text\" name=\"codigo\" class=\"form-control\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "codigo", array()), "html", null, true);
        echo "\" maxlength=\"10\" />
    </div>
    <div class=\"form-group required\">
        <label for=\"nome\">";
        // line 8
        echo gettext("Nome");
        echo "</label>
        <input id=\"nome\" type=\"text\" name=\"nome\" class=\"form-control\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "nome", array()), "html", null, true);
        echo "\" maxlength=\"50\" />
    </div>
    <div class=\"form-group required\">
        <label for=\"grupo\">";
        // line 12
        echo gettext("Grupo");
        echo "</label>
        <select id=\"grupo\" name=\"grupo_id\" class=\"form-control\">
            <option value=\"\">";
        // line 14
        echo gettext("Selecione");
        echo "</option>
            ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grupos"]) ? $context["grupos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["item"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "grupo", array()), "id", array()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </select>
    </div>
    <div class=\"form-group required\">
        <label for=\"status\">Status</label>
        <select id=\"status\" name=\"status\" class=\"form-control\">
            <option value=\"\">";
        // line 23
        echo gettext("Selecione");
        echo "</option>
            <option value=\"1\" ";
        // line 24
        if (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "status", array()) == 1)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo gettext("Ativo");
        echo "</option>
            <option value=\"0\" ";
        // line 25
        if (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "status", array()) == "0")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo gettext("Inativo");
        echo "</option>
        </select>
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
        return array (  101 => 25,  93 => 24,  89 => 23,  82 => 18,  67 => 16,  63 => 15,  59 => 14,  54 => 12,  48 => 9,  44 => 8,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
