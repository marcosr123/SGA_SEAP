<?php

/* index.html.twig */
class __TwigTemplate_1213e677564d04b3317fdbbe22ba50dda14aa4ce64cdadee5354c91dcc652265 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("module.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'moduleContent' => array($this, 'block_moduleContent'),
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

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "css/bootstrap-switch.min.css", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
        echo "\">
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "js/bootstrap-switch.min.js", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
        echo "\"></script>
";
    }

    // line 9
    public function block_moduleContent($context, array $blocks = array())
    {
        // line 10
        echo "<div>
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab-servicos\" data-toggle=\"tab\">";
        // line 12
        echo gettext("Serviços");
        echo "</a></li>
        <li><a href=\"#tab-triagem\" data-toggle=\"tab\">";
        // line 13
        echo gettext("Triagem");
        echo "</a></li>
    </ul>
    <div class=\"tab-content\">
        <div id=\"tab-servicos\" class=\"tab-pane active\">
            <div class=\"well well-sm\">
                ";
        // line 18
        echo gettext("As modificações na sigla do serviço são salvas automaticamente ao sair do campo.");
        // line 19
        echo "            </div>
            <table class=\"table\" id=\"servicos\">
                <thead>
                    <tr>
                        <th>";
        // line 23
        echo gettext("Sigla");
        echo "</th>
                        <th>";
        // line 24
        echo gettext("Serviço");
        echo "</th>
                        <th class=\"col-md-2\">";
        // line 25
        echo gettext("Local");
        echo "</th>
                        <th class=\"col-md-1\">";
        // line 26
        echo gettext("Peso");
        echo "</th>
                        <th class=\"col-md-1\">";
        // line 27
        echo gettext("Status");
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicos"]) ? $context["servicos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
            // line 32
            echo "                    <tr>
                        <td class=\"sigla\">
                            <input id=\"sigla-";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo "\"
                                   type=\"text\"
                                   class=\"servico-";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo " center form-control\"
                                   value=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["su"], "sigla", array()), "html", null, true);
            echo "\"
                                   data-id=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo "\"
                                   onclick=\"this.select()\"
                                   onkeyup=\"this.value = this.value.toUpperCase()\"
                                   onblur=\"SGA.Unidade.Servicos.change(";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo ")\"
                                   size=\"1\"
                                   maxlength=\"1\"
                                   ";
            // line 44
            if (($this->getAttribute($context["su"], "status", array()) != 1)) {
                echo "disabled=\"disabled\"";
            }
            echo " />
                        </td>
                        <td class=\"nome\">
                            ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "nome", array()), "html", null, true);
            echo "
                        </td>
                        <td class=\"local\">
                            <select id=\"local-";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo "\"
                                    class=\"servico-";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo " form-control\"
                                    onchange=\"SGA.Unidade.Servicos.change(";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo ")\"
                                    ";
            // line 53
            if (($this->getAttribute($context["su"], "status", array()) != 1)) {
                echo "disabled=\"disabled\"";
            }
            echo ">
                                ";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locais"]) ? $context["locais"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
                // line 55
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getAttribute($context["su"], "local", array()), "id", array()) == $this->getAttribute($context["local"], "id", array()))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "nome", array()), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                            </select>
                        </td>
                        <td>
                            <input
                                type=\"number\"
                                id=\"peso-";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo "\"
                                class=\"servico-";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo " form-control\"
                                value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["su"], "peso", array()), "html", null, true);
            echo "\"
                                onblur=\"SGA.Unidade.Servicos.change(";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo ")\"
                                ";
            // line 66
            if (($this->getAttribute($context["su"], "status", array()) != 1)) {
                echo "disabled=\"disabled\"";
            }
            // line 67
            echo "                                >
                        </td>
                        <td>
                            <input
                                id=\"btn-enable-";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo "\"
                                type=\"checkbox\"
                                data-on-color=\"success\"
                                data-off-color=\"default\"
                                data-on-text=\"On\"
                                data-off-text=\"Off\"
                                data-id=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo "\"
                                ";
            // line 78
            if (($this->getAttribute($context["su"], "status", array()) == 1)) {
                echo "checked";
            }
            echo ">
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                </tbody>
            </table>
        </div>
        <div id=\"tab-triagem\" class=\"tab-pane\">
            <form id=\"form-triagem\" role=\"form\" onsubmit=\"return false\">
                <fieldset>
                    <legend>";
        // line 88
        echo gettext("Impressão");
        echo "</legend>
                    <div class=\"checkbox\">
                        <label for=\"impressao\">
                            <input id=\"impressao\" name=\"impressao\" type=\"checkbox\" value=\"1\" ";
        // line 91
        if ($this->getAttribute((isset($context["unidade"]) ? $context["unidade"] : null), "statusImpressao", array())) {
            echo "checked=\"checked\"";
        }
        // line 92
        echo "                                   onclick=\"setTimeout(SGA.Unidade.Triagem.salvar, 100)\" />
                            ";
        // line 93
        echo gettext("Ativar impressão de senha");
        // line 94
        echo "                        </label>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"mensagem\" class=\"form-label\">";
        // line 97
        echo gettext("Mensagem");
        echo "</label>
                        <input type=\"text\" id=\"mensagem\" name=\"mensagem\" class=\"form-control\" maxlength=\"100\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unidade"]) ? $context["unidade"] : null), "mensagemImpressao", array()), "html", null, true);
        echo "\"
                               onchange=\"SGA.Unidade.Triagem.salvar()\" />
                    </div>
                    <div class=\"form-group\">
                        <label>";
        // line 102
        echo gettext("Reiniciar senhas");
        echo "</label>
                        <button class=\"btn btn-danger\" onclick=\"return SGA.Unidade.Triagem.reiniciarSenhas('";
        // line 103
        echo gettext("Deseja realmente reiniciar as senhas?");
        echo "')\">
                            ";
        // line 104
        echo gettext("Reiniciar");
        // line 105
        echo "                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

";
        // line 114
        echo "<div id=\"dialog-reiniciar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 119
        echo gettext("Configuração");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <p>";
        // line 122
        echo gettext("Senhas reiniciadas com sucesso");
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 125
        echo gettext("Fechar");
        echo "</button>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 125,  311 => 122,  305 => 119,  298 => 114,  288 => 105,  286 => 104,  282 => 103,  278 => 102,  271 => 98,  267 => 97,  262 => 94,  260 => 93,  257 => 92,  253 => 91,  247 => 88,  239 => 82,  227 => 78,  223 => 77,  214 => 71,  208 => 67,  204 => 66,  200 => 65,  196 => 64,  192 => 63,  188 => 62,  181 => 57,  166 => 55,  162 => 54,  156 => 53,  152 => 52,  148 => 51,  144 => 50,  138 => 47,  130 => 44,  124 => 41,  118 => 38,  114 => 37,  110 => 36,  105 => 34,  101 => 32,  97 => 31,  90 => 27,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  68 => 19,  66 => 18,  58 => 13,  54 => 12,  50 => 10,  47 => 9,  41 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
