<?php

/* index.html.twig */
class __TwigTemplate_3de3d3b3aba24eefbb3c91c6e74b3314950657c900db4e808e41b9b836647bf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("module.html.twig", "index.html.twig", 1);
        $this->blocks = array(
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

    // line 2
    public function block_moduleContent($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"monitor\">
    <form class=\"form-inline\" role=\"search\" onsubmit=\"return false\">
        <div class=\"form-group\">
            <input type=\"text\" id=\"buscar-senha\" class=\"form-search form-control\" placeholder=\"";
        // line 6
        echo gettext("buscar senha");
        echo "\" />
        </div>
        <button id=\"btn-open-consulta\" class=\"btn btn-primary\" onclick=\"SGA.Monitor.Senha.consulta()\">
            <span class=\"glyphicon glyphicon-search\"></span>&nbsp;
            ";
        // line 10
        echo gettext("Consultar");
        // line 11
        echo "        </button>
    </form>
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicos"]) ? $context["servicos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
            // line 14
            echo "    <div id=\"servico-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo "\" class=\"servico empty\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo "\">
        <span class=\"title\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["su"], "sigla", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "nome", array()), "html", null, true);
            echo "</span>
        <ul class=\"fila\">
        </ul>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div>

";
        // line 23
        echo "<div id=\"dialog-busca\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 28
        echo gettext("Busca");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <form class=\"form-inline\" role=\"form\" onsubmit=\"return false\">
                    <div class=\"form-group\">
                        <input id=\"numero_busca\" type=\"text\" maxlength=\"5\" class=\"form-search form-control\" placeholder=\"";
        // line 33
        echo gettext("Número");
        echo "\" />
                    </div>
                    <button id=\"btn-consultar\" class=\"btn btn-primary\" onclick=\"SGA.Monitor.Senha.consultar()\">";
        // line 35
        echo gettext("Consultar");
        echo "</button>
                </form>
                <div class=\"result\">
                    <table id=\"result_table\" class=\"table\">
                        <thead>
                            <tr>
                                <th>";
        // line 41
        echo gettext("Número");
        echo "</th>
                                <th>";
        // line 42
        echo gettext("Serviço");
        echo "</th>
                                <th>";
        // line 43
        echo gettext("Data chegada");
        echo "</th>
                                <th>";
        // line 44
        echo gettext("Data início");
        echo "</th>
                                <th>";
        // line 45
        echo gettext("Data fim");
        echo "</th>
                                <th>";
        // line 46
        echo gettext("Triagem");
        echo "</th>
                                <th>";
        // line 47
        echo gettext("Atendente");
        echo "</th>
                                <th>";
        // line 48
        echo gettext("Situação");
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 61
        echo "<div id=\"dialog-view\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 66
        echo gettext("Atendimento");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <input id=\"senha_id\" type=\"hidden\" />
                <fieldset>
                    <legend>";
        // line 71
        echo gettext("Senha|Bilhete");
        echo "</legend>
                    <div>
                        <label>";
        // line 73
        echo gettext("Número");
        echo "</label>
                        <span id=\"senha_numero\"></span>
                    </div>
                    <div>
                        <label>";
        // line 77
        echo gettext("Prioridade");
        echo "</label>
                        <span id=\"senha_prioridade\"></span>
                    </div>
                    <div>
                        <label>";
        // line 81
        echo gettext("Serviço");
        echo "</label>
                        <span id=\"senha_servico\"></span>
                    </div>
                    <div>
                        <label>";
        // line 85
        echo gettext("Data chegada");
        echo "</label>
                        <span id=\"senha_chegada\"></span>
                    </div>
                    <div>
                        <label>";
        // line 89
        echo gettext("Tempo de espera");
        echo "</label>
                        <span id=\"senha_espera\"></span>
                    </div>
                    <div>
                        <label>";
        // line 93
        echo gettext("Data início");
        echo "</label>
                        <span id=\"senha_inicio\"></span>
                    </div>
                    <div>
                        <label>";
        // line 97
        echo gettext("Data fim");
        echo "</label>
                        <span id=\"senha_fim\"></span>
                    </div>
                    <div>
                        <label>";
        // line 101
        echo gettext("Situação");
        echo "</label>
                        <span id=\"senha_status\"></span>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>";
        // line 106
        echo gettext("Cliente");
        echo "</legend>
                    <div>
                        <label>";
        // line 108
        echo gettext("Nome");
        echo "</label>
                        <span id=\"cliente_nome\"></span>
                    </div>
                    <div>
                        <label>";
        // line 112
        echo gettext("Documento");
        echo "</label>
                        <span id=\"cliente_documento\"></span>
                    </div>
                </fieldset>
            </div>
            <div class=\"modal-footer\">
                <button id=\"btn-reativar\"
                        class=\"btn btn-primary\"
                        onclick=\"SGA.Monitor.Senha.reativar(\$('#senha_id').val())\">
                    ";
        // line 121
        echo gettext("Reativar senha");
        // line 122
        echo "                </button>
                <button id=\"btn-transferir\"
                        class=\"btn btn-default\"
                        onclick=\"SGA.Monitor.Senha.transfere(\$('#senha_id').val(), \$('#senha_numero').text())\">
                    ";
        // line 126
        echo gettext("Transferir / Alterar senha");
        // line 127
        echo "                </button>
                <button id=\"btn-cancelar\"
                        class=\"btn btn-danger\"
                        onclick=\"SGA.Monitor.Senha.cancelar(\$('#senha_id').val())\">
                    ";
        // line 131
        echo gettext("Cancelar senha");
        // line 132
        echo "                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 139
        echo "<div id=\"dialog-transfere\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 144
        echo gettext("Tranferir Senha");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <input id=\"transfere_id\" type=\"hidden\" />
                <div class=\"form-group\">
                    <label>";
        // line 149
        echo gettext("Senha|Bilhete");
        echo "</label>
                    <span id=\"transfere_numero\"></span>
                </div>
                <div class=\"form-group\">
                    <label for=\"transfere_servico\">";
        // line 153
        echo gettext("Novo serviço");
        echo "</label>
                    <select id=\"transfere_servico\" class=\"form-control\">
                        ";
        // line 155
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicos"]) ? $context["servicos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
            // line 156
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "nome", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                    </select>
                </div>
                <div class=\"form-group\">
                    <label>";
        // line 161
        echo gettext("Nova prioridade");
        echo "</label>
                    <select id=\"transfere_prioridade\" class=\"form-control\">
                        ";
        // line 163
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prioridades"]) ? $context["prioridades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["prioridade"]) {
            // line 164
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prioridade"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prioridade"], "nome", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prioridade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "                    </select>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button id=\"btn-transferir\"
                        class=\"btn btn-primary\"
                        onclick=\"SGA.Monitor.Senha.transferir()\">
                    ";
        // line 173
        echo gettext("Transferir");
        // line 174
        echo "                </button>
            </div>
        </div>
    </div>
</div>


<div id=\"sga-clock\" title=\"";
        // line 181
        echo gettext("Data e hora no servidor");
        echo "}\"></div>
<script type=\"text/javascript\">
    \$('.servico').each(function(i,v) {
        var servico = \$(v);
        SGA.Monitor.ids.push(servico.data('id'));
    });
    SGA.Clock.init(\"sga-clock\", ";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["milis"]) ? $context["milis"] : null), "html", null, true);
        echo ");
    SGA.Monitor.alertCancelar = '";
        // line 188
        echo gettext("Deseja realmente cancelar essa senha?");
        echo "';
    SGA.Monitor.alertReativar = '";
        // line 189
        echo gettext("Deseja realmente reativar essa senha?");
        echo "';
    SGA.Monitor.init();
</script>
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
        return array (  380 => 189,  376 => 188,  372 => 187,  363 => 181,  354 => 174,  352 => 173,  343 => 166,  332 => 164,  328 => 163,  323 => 161,  318 => 158,  307 => 156,  303 => 155,  298 => 153,  291 => 149,  283 => 144,  276 => 139,  268 => 132,  266 => 131,  260 => 127,  258 => 126,  252 => 122,  250 => 121,  238 => 112,  231 => 108,  226 => 106,  218 => 101,  211 => 97,  204 => 93,  197 => 89,  190 => 85,  183 => 81,  176 => 77,  169 => 73,  164 => 71,  156 => 66,  149 => 61,  134 => 48,  130 => 47,  126 => 46,  122 => 45,  118 => 44,  114 => 43,  110 => 42,  106 => 41,  97 => 35,  92 => 33,  84 => 28,  77 => 23,  73 => 20,  60 => 15,  53 => 14,  49 => 13,  45 => 11,  43 => 10,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
