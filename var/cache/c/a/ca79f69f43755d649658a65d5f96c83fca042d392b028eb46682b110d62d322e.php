<?php

/* edit.html.twig */
class __TwigTemplate_ca79f69f43755d649658a65d5f96c83fca042d392b028eb46682b110d62d322e extends Twig_Template
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
        <label for=\"nome\" class=\"control-label\">";
        // line 4
        echo gettext("Nome");
        echo "</label>
        <input id=\"nome\" type=\"text\" name=\"nome\" class=\"form-control\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "nome", array()), "html", null, true);
        echo "\" maxlength=\"50\" />
    </div>
    <div class=\"form-group required\">
        <label for=\"descricao\" class=\"control-label\">";
        // line 8
        echo gettext("Descrição");
        echo "</label>
        <textarea id=\"descricao\" name=\"descricao\" class=\"form-control\" rows=\"5\" maxlength=\"100\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "descricao", array()), "html", null, true);
        echo "</textarea>
    </div>
    <div class=\"form-group required\">
        <label for=\"status\" class=\"control-label\">";
        // line 12
        echo gettext("Status");
        echo "</label>
        <select id=\"status\" name=\"status\" class=\"form-control\">
            <option value=\"\">";
        // line 14
        echo gettext("Selecione");
        echo "</option>
            <option value=\"1\" ";
        // line 15
        if (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "status", array()) == 1)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo gettext("Ativo");
        echo "</option>
            <option value=\"0\" ";
        // line 16
        if (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "status", array()) == "0")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo gettext("Inativo");
        echo "</option>
        </select>
    </div>
    ";
        // line 19
        if (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()) && twig_length_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "subServicos", array())))) {
            // line 20
            echo "    <fieldset>
        <legend>";
            // line 21
            echo gettext("Subserviços");
            echo "</legend>
        <ul>
            ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "subServicos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 24
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "nome", array()), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </ul>
    </fieldset>
    ";
        } else {
            // line 29
            echo "    <div class=\"form-group\">
        <label for=\"macro\" class=\"control-label\">";
            // line 30
            echo gettext("Macro");
            echo "</label>
        <select id=\"macro\" name=\"id_macro\" class=\"form-control\">
            <option value=\"\">";
            // line 32
            echo gettext("Selecione");
            echo "</option>
            ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["macros"]) ? $context["macros"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 34
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["item"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "mestre", array()), "id", array()))) {
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
            // line 36
            echo "        </select>
    </div>
    ";
        }
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
        return array (  140 => 36,  125 => 34,  121 => 33,  117 => 32,  112 => 30,  109 => 29,  104 => 26,  95 => 24,  91 => 23,  86 => 21,  83 => 20,  81 => 19,  71 => 16,  63 => 15,  59 => 14,  54 => 12,  48 => 9,  44 => 8,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
