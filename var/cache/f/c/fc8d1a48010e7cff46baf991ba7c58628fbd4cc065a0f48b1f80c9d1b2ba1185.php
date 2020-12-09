<?php

/* edit.html.twig */
class __TwigTemplate_fc8d1a48010e7cff46baf991ba7c58628fbd4cc065a0f48b1f80c9d1b2ba1185 extends Twig_Template
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
        echo "    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab-geral\" data-toggle=\"tab\">";
        // line 4
        echo gettext("Geral");
        echo "</a></li>
        <li><a href=\"#tab-permissao\" data-toggle=\"tab\">";
        // line 5
        echo gettext("Permissões");
        echo "</a></li>
    </ul>
    <div class=\"tab-content\">
        <div id=\"tab-geral\" class=\"tab-pane active\">
            <div class=\"form-group required\">
                <label for=\"nome\">";
        // line 10
        echo gettext("Nome");
        echo "</label>
                <input id=\"nome\" type=\"text\" name=\"nome\" class=\"form-control\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "nome", array()), "html", null, true);
        echo "\" maxlength=\"50\" />
            </div>
            <div class=\"form-group required\">
                <label for=\"descricao\">";
        // line 14
        echo gettext("Descrição");
        echo "</label>
                <textarea id=\"descricao\" name=\"descricao\" class=\"form-control\" rows=\"5\" maxlength=\"150\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "descricao", array()), "html", null, true);
        echo "</textarea>
            </div>
            ";
        // line 17
        if ((($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()) == 0) || ($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "left", array()) != 1))) {
            // line 18
            echo "            <div class=\"form-group required\">
                <label for=\"pai\">";
            // line 19
            echo gettext("Pai");
            echo "</label>
                <select id=\"pai\" name=\"id_pai\" class=\"form-control\">
                    <option value=\"\">";
            // line 21
            echo gettext("Selecione");
            echo "</option>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pais"]) ? $context["pais"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 23
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["item"], "id", array()) == $this->getAttribute((isset($context["modelParent"]) ? $context["modelParent"] : null), "id", array()))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                </select>
            </div>
            ";
        }
        // line 28
        echo "        </div>
        <div id=\"tab-permissao\" class=\"tab-pane\">
            <h3>";
        // line 30
        echo gettext("Módulos");
        echo "</h3>
            <div class=\"permissoes\">
                ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipos"]) ? $context["tipos"] : null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 33
            echo "                <div class=\"modulos\">
                    <h4>";
            // line 34
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "</h4>
                    <ul>
                        ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["modulos"]) ? $context["modulos"] : null), $context["k"], array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
                // line 37
                echo "                        <li>
                            <input id=\"modulo-";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "id", array()), "html", null, true);
                echo "\" type=\"checkbox\"
                                   name=\"permissoes[]\" value=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "id", array()), "html", null, true);
                echo "\"
                                   ";
                // line 40
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["permissoes"]) ? $context["permissoes"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["permissao"]) {
                    // line 41
                    echo "                                        ";
                    if (($this->getAttribute($this->getAttribute($context["permissao"], "modulo", array()), "id", array()) == $this->getAttribute($context["modulo"], "id", array()))) {
                        // line 42
                        echo "                                            checked=\"checked\"
                                        ";
                    }
                    // line 44
                    echo "                                   ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permissao'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                            />
                            <label for=\"modulo-";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "nome", array()), "html", null, true);
                echo "</label>
                        </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                    </ul>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </div>
        </div>
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
        return array (  178 => 52,  170 => 49,  159 => 46,  156 => 45,  150 => 44,  146 => 42,  143 => 41,  139 => 40,  135 => 39,  131 => 38,  128 => 37,  124 => 36,  119 => 34,  116 => 33,  112 => 32,  107 => 30,  103 => 28,  98 => 25,  83 => 23,  79 => 22,  75 => 21,  70 => 19,  67 => 18,  65 => 17,  60 => 15,  56 => 14,  50 => 11,  46 => 10,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
