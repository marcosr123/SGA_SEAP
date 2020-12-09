<?php

/* index.html.twig */
class __TwigTemplate_819324cd4b3aaf70c5c7e874cb4dde2357b2a8be86babf20816e35b2ae2b5042 extends Twig_Template
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
        echo "    <div id=\"dialog-local\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">";
        // line 8
        echo gettext("Guichê");
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <form id=\"local_form\" action=\"#\" method=\"post\" role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 15
        echo gettext("Número");
        echo "</label>
                                    <input type=\"text\" id=\"numero_local\" name=\"local\" maxlength=\"3\" class=\"form-control config-numero-local\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["local"]) ? $context["local"] : null), "html", null, true);
        echo "\" />
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\" title=\"";
        // line 21
        echo gettext("Tipo de Atendimento");
        echo "\">";
        echo gettext("Atendimento");
        echo "</label>
                                    <select id=\"tipo_atendimento\" name=\"tipo\" class=\"form-control config-tipo-atendimento\">
                                        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tiposAtendimento"]) ? $context["tiposAtendimento"] : null));
        foreach ($context['_seq'] as $context["v"] => $context["l"]) {
            // line 24
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\" ";
            if (((isset($context["tipoAtendimento"]) ? $context["tipoAtendimento"] : null) == $context["v"])) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["l"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['v'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <script type=\"text/javascript\">
                        \$('#local_form').on('submit', function() {
                            var numero = parseInt(\$('#numero_local').val());
                            if (isNaN(numero) || numero <= 0) {
                                \$('#numero_local').val('');
                            } else {
                                SGA.ajax({
                                    url: '";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/modules/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()), "html", null, true);
        echo "/set_local',
                                    type: 'post',
                                    data: \$(this).serialize(),
                                    success: function(response) {
                                        window.location.reload();
                                    }
                                });
                            }
                            return false;
                        });
                    </script>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"\$('#local_form').submit(); return false\">";
        // line 51
        echo gettext("Salvar");
        echo "</button>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 57
        echo "    ";
        if (((isset($context["local"]) ? $context["local"] : null) <= 0)) {
            // line 58
            echo "        <script type=\"text/javascript\">
            SGA.dialogs.modal('#dialog-local');
            \$('#local').focus();
        </script>
    ";
        } else {
            // line 63
            echo "        ";
            // line 64
            echo "        <div id=\"atendimento\">
            <div class=\"row\">
                <div class=\"col-sm-3 col-md-2\">
                    <div id=\"local\">
                        <span class=\"label-local\">";
            // line 68
            echo gettext("Guichê");
            echo "</span>
                        <span class=\"numero config-numero-local\">";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["local"]) ? $context["local"] : null), "html", null, true);
            echo "</span>
                        <a href=\"#dialog-local\" data-toggle=\"modal\">";
            // line 70
            echo gettext("Alterar");
            echo "</a>
                    </div>
                </div>
                <div class=\"col-sm-9 col-md-10\">
                    <div id=\"controls\">
                        <div id=\"chamar\" class=\"control\" style=\"display:none\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-md-4\">
                                    <button class=\"btn btn-default btn-block btn-control chamar\"
                                            onclick=\"SGA.Atendimento.chamar(this)\"
                                            title=\"";
            // line 80
            echo gettext("Chamar próximo");
            echo "\"
                                            disabled=\"disabled\">
                                        <span>";
            // line 82
            echo gettext("Chamar próximo");
            echo "</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id=\"iniciar\" class=\"control\" style=\"display:none\">
                            <div class=\"senha\">
                                <h3 class=\"title\">";
            // line 89
            echo gettext("Atendimento");
            echo "</h3>
                                <ul class=\"info ";
            // line 90
            if (((isset($context["atendimento"]) ? $context["atendimento"] : null) && $this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "senha", array()), "isPrioridade", array()))) {
                echo "prioridade";
            }
            echo "\">
                                    <li class=\"numero\">
                                        <span class=\"atend-label\">";
            // line 92
            echo gettext("Senha|Bilhete");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "senha", array()), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"servico\">
                                        <span class=\"atend-label\">";
            // line 96
            echo gettext("Serviço");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "servicoUnidade", array()), "nome", array()), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"nome-prioridade\">
                                        <span class=\"atend-label\">";
            // line 100
            echo gettext("Prioridade");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "senha", array()), "prioridade", array()), "nome", array()), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"nome\">
                                        <span class=\"atend-label\">";
            // line 104
            echo gettext("Nome");
            echo "</span>
                                        <span class=\"atend-value\">
                                            ";
            // line 106
            if ($this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "cliente", array()), "nome", array())) {
                // line 107
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "cliente", array()), "nome", array()), "html", null, true);
                echo "
                                            ";
            } else {
                // line 109
                echo "                                                -
                                            ";
            }
            // line 111
            echo "                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-4\">
                                    <button class=\"btn btn-default btn-block btn-control chamar_novamente\"
                                            onclick=\"SGA.Atendimento.chamar_novamente(this)\"
                                            title=\"";
            // line 119
            echo gettext("Chamar novamente");
            echo "\">
                                        <span>";
            // line 120
            echo gettext("Chamar novamente");
            echo "</span>
                                    </button>
                                </div>
                                <div class=\"col-xs-4\">
                                    <button class=\"btn btn-default btn-block btn-control iniciar\"
                                            onclick=\"SGA.Atendimento.iniciar(this)\"
                                            title=\"";
            // line 126
            echo gettext("Iniciar atendimento");
            echo "\">
                                        <span>";
            // line 127
            echo gettext("Iniciar atendimento");
            echo "</span>
                                    </button>
                                </div>
                                <div class=\"col-xs-4\">
                                    <button class=\"btn btn-default btn-block btn-control nao_compareceu\"
                                            onclick=\"SGA.Atendimento.nao_compareceu(this)\"
                                            title=\"";
            // line 133
            echo gettext("Não compareceu");
            echo "\">
                                        <span>";
            // line 134
            echo gettext("Não compareceu");
            echo "</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id=\"encerrar\" class=\"control\" style=\"display:none\">
                            <div class=\"senha\">
                                <h3 class=\"title\">";
            // line 141
            echo gettext("Atendimento");
            echo "</h3>
                                <ul class=\"info ";
            // line 142
            if (((isset($context["atendimento"]) ? $context["atendimento"] : null) && $this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "senha", array()), "isPrioridade", array()))) {
                echo "prioridade";
            }
            echo "\">
                                    <li class=\"numero\">
                                        <span class=\"atend-label\">";
            // line 144
            echo gettext("Senha|Bilhete");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "senha", array()), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"servico\">
                                        <span class=\"atend-label\">";
            // line 148
            echo gettext("Serviço");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "servicoUnidade", array()), "nome", array()), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"nome-prioridade\">
                                        <span class=\"atend-label\">";
            // line 152
            echo gettext("Prioridade");
            echo "</span>
                                        <span class=\"atend-value\">";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "senha", array()), "prioridade", array()), "nome", array()), "html", null, true);
            echo "</span>
                                    </li>
                                    <li class=\"nome\">
                                        <span class=\"atend-label\">";
            // line 156
            echo gettext("Nome");
            echo "</span>
                                        <span class=\"atend-value\">
                                            ";
            // line 158
            if ($this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "cliente", array()), "nome", array())) {
                // line 159
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "cliente", array()), "nome", array()), "html", null, true);
                echo "
                                            ";
            } else {
                // line 161
                echo "                                                -
                                            ";
            }
            // line 163
            echo "                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-4\">
                                    <button class=\"btn btn-default btn-block btn-control chamar_novamente\"
                                            onclick=\"SGA.Atendimento.chamar_novamente(this)\"
                                            title=\"";
            // line 171
            echo gettext("Chamar novamente");
            echo "\">
                                        <span>";
            // line 172
            echo gettext("Chamar novamente");
            echo "</span>
                                    </button>
                                </div>
                                <div class=\"col-xs-4\">
                                    <button class=\"btn btn-default btn-block btn-control encerrar\"
                                            onclick=\"SGA.Atendimento.encerrar(this)\"
                                            title=\"";
            // line 178
            echo gettext("Encerrar atendimento");
            echo "\">
                                        <span>";
            // line 179
            echo gettext("Encerrar atendimento");
            echo "</span>
                                    </button>
                                </div>
                                <div class=\"col-xs-4\">
                                    <button class=\"btn btn-default btn-block btn-control erro_triagem\"
                                            onclick=\"SGA.Atendimento.erro_triagem(this)\"
                                            title=\"";
            // line 185
            echo gettext("Erro de triagem");
            echo "\">
                                        <span>";
            // line 186
            echo gettext("Erro de triagem");
            echo "</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id=\"codificar\" class=\"control\" style=\"display:none\">
                            <div class=\"col-xs-6\">
                                <h3>";
            // line 193
            echo gettext("Serviços disponíveis");
            echo "</h3>
                                <ul id=\"macro-servicos\" class=\"items\">
                                    ";
            // line 195
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["servicos"]) ? $context["servicos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
                // line 196
                echo "                                        <li id=\"servico-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
                echo "\">
                                            ";
                // line 197
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "subServicos", array())) == 0)) {
                    // line 198
                    echo "                                                <a href=\"javascript:void(0)\"
                                                   onclick=\"SGA.Atendimento.addServico(this)\"
                                                   data-id=\"";
                    // line 200
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
                    echo "\"
                                                   title=\"";
                    // line 201
                    echo gettext("Adicionar");
                    echo "\">
                                                    ";
                    // line 202
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "nome", array()), "html", null, true);
                    echo "
                                                </a>
                                            ";
                } else {
                    // line 205
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "nome", array()), "html", null, true);
                    echo "
                                                <ul>
                                                ";
                    // line 207
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["su"], "servico", array()), "subServicos", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                        // line 208
                        echo "                                                    <li id=\"servico-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", array()), "html", null, true);
                        echo "\">
                                                        <a href=\"javascript:void(0)\"
                                                           onclick=\"SGA.Atendimento.addServico(this)\"
                                                           data-id=\"";
                        // line 211
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", array()), "html", null, true);
                        echo "\"
                                                           title=\"";
                        // line 212
                        echo gettext("Adicionar");
                        echo "\">
                                                            ";
                        // line 213
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "nome", array()), "html", null, true);
                        echo "
                                                        </a>
                                                    </li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 217
                    echo "                                                </ul>
                                            ";
                }
                // line 219
                echo "                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "                                </ul>
                            </div>
                            <div class=\"col-xs-6\">
                                <h3>";
            // line 224
            echo gettext("Serviços realizados");
            echo "</h3>
                                <ul id=\"servicos-realizados\" class=\"items\">
                                </ul>
                                <div class=\"redirecionar\">
                                    <input id=\"encerrar-redirecionar\" type=\"checkbox\" value=\"1\" />
                                    <label for=\"encerrar-redirecionar\"
                                           title=\"";
            // line 230
            echo gettext("Marque para codificar e redirecionar o atendimento atual");
            echo "\">
                                        <span>";
            // line 231
            echo gettext("Redirecionar atendimento ao encerrar");
            echo "</span>
                                    </label>
                                </div>
                                <button class=\"btn btn-default btn-block btn-control codificar\"
                                        onclick=\"SGA.Atendimento.codificar(this)\"
                                        title=\"";
            // line 236
            echo gettext("Encerrar atendimento");
            echo "\">
                                    <span>";
            // line 237
            echo gettext("Encerrar atendimento");
            echo "</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"fila\">
                <h4>";
            // line 245
            echo gettext("Minha fila");
            echo " (<span class=\"tipo-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "tipoAtendimento", array()), "html", null, true);
            echo " config-tipo-atendimento\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tiposAtendimento"]) ? $context["tiposAtendimento"] : null), (isset($context["tipoAtendimento"]) ? $context["tipoAtendimento"] : null), array(), "array"), "html", null, true);
            echo "</span>):</h4>
                <ul></ul>
            </div>
        </div>
        <p class=\"links\">
            <a href=\"#dialog-busca\" class=\"btn btn-default\" data-toggle=\"modal\">
                <span class=\"glyphicon glyphicon-search\"></span>&nbsp;
                ";
            // line 252
            echo gettext("Consultar senha");
            // line 253
            echo "            </a>
            <button id=\"notification\" type=\"button\" class=\"btn btn-warning\" onclick=\"SGA.Notification.request(this)\" style=\"display: none\">
                <span class=\"glyphicon glyphicon-exclamation-sign\"></span>&nbsp;
                ";
            // line 256
            echo gettext("Habilitar notificação");
            // line 257
            echo "            </button>
        </p>

        ";
            // line 261
            echo "        <div id=\"dialog-redirecionar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">";
            // line 266
            echo gettext("Redirecionar");
            echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"redirecionar_servico\">";
            // line 270
            echo gettext("Novo Serviço");
            echo "</label>
                            <select id=\"redirecionar_servico\" class=\"form-control\">
                                <option value=\"\">";
            // line 272
            echo gettext("Selecione");
            echo "</option>
                                ";
            // line 273
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["servicosIndisponiveis"]) ? $context["servicosIndisponiveis"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["su"]) {
                // line 274
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["su"], "servico", array()), "nome", array()), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['su'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "                            </select>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary btn-redirecionar\" onclick=\"SGA.Atendimento.redirecionar(this); return false;\">
                            ";
            // line 281
            echo gettext("Redirecionar");
            // line 282
            echo "                        </button>
                        <button type=\"button\" class=\"btn btn-primary btn-codificar\" onclick=\"SGA.Atendimento.codificar(this, true); return false;\">
                            ";
            // line 284
            echo gettext("Codificar e redirecionar");
            // line 285
            echo "                        </button>
                    </div>
                </div>
            </div>
        </div>

        ";
            // line 292
            echo "        <div id=\"dialog-busca\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">";
            // line 297
            echo gettext("Busca");
            echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                        <form class=\"form-inline\" role=\"form\" onsubmit=\"return false\">
                            <div class=\"form-group\">
                                <input id=\"numero_busca\" type=\"text\" maxlength=\"5\" class=\"form-search form-control\" placeholder=\"";
            // line 302
            echo gettext("Número");
            echo "\" />
                            </div>
                            <button id=\"btn-consultar\" class=\"btn btn-primary\" onclick=\"SGA.Atendimento.consultar()\">
                                ";
            // line 305
            echo gettext("Consultar");
            // line 306
            echo "                            </button>
                        </form>
                        <div class=\"result\">
                            <table id=\"result_table\" class=\"table\">
                                <thead>
                                    <tr>
                                        <th>";
            // line 312
            echo gettext("Número");
            echo "</th>
                                        <th>";
            // line 313
            echo gettext("Serviço");
            echo "</th>
                                        <th>";
            // line 314
            echo gettext("Data chegada");
            echo "</th>
                                        <th>";
            // line 315
            echo gettext("Data início");
            echo "</th>
                                        <th>";
            // line 316
            echo gettext("Data fim");
            echo "</th>
                                        <th>";
            // line 317
            echo gettext("Triagem");
            echo "</th>
                                        <th>";
            // line 318
            echo gettext("Atendente");
            echo "</th>
                                        <th>";
            // line 319
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
            // line 332
            echo "        <div id=\"dialog-senha\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">";
            // line 337
            echo gettext("Senha|Bilhete");
            echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"field\">
                            <h4>";
            // line 341
            echo gettext("Número");
            echo "</h4>
                            <p class=\"numero\"></p>
                        </div>
                        <div class=\"field\">
                            <h4>";
            // line 345
            echo gettext("Serviço");
            echo "</h4>
                            <p class=\"servico\"></p>
                        </div>
                        <div class=\"field\">
                            <h4>";
            // line 349
            echo gettext("Prioridade");
            echo "</h4>
                            <p class=\"nome-prioridade\"></p>
                        </div>
                        <div class=\"field\">
                            <h4>";
            // line 353
            echo gettext("Data de chegada");
            echo "</h4>
                            <p class=\"chegada\"></p>
                        </div>
                        <div class=\"field\">
                            <h4>";
            // line 357
            echo gettext("Tempo de espera");
            echo "</h4>
                            <p class=\"espera\"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id=\"sga-clock\" title=\"";
            // line 365
            echo gettext("Data e hora no servidor");
            echo "\"></div>

        ";
            // line 368
            echo "        <audio id=\"alert\" src=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "sounds/alert.wav", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
            echo "\" style=\"display:none\"></audio>

        <script type=\"text/javascript\">
            SGA.Clock.init(\"sga-clock\", ";
            // line 371
            echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : null), "html", null, true);
            echo ");
            SGA.Atendimento.filaVazia = '";
            // line 372
            echo gettext("Fila vazia");
            echo "';
            SGA.Atendimento.remover = '";
            // line 373
            echo gettext("Remover");
            echo "';
            SGA.Atendimento.marcarErroTriagem = '";
            // line 374
            echo gettext("Realmente deseja marcar como erro de triagem?");
            echo "';
            SGA.Atendimento.marcarNaoCompareceu = '";
            // line 375
            echo gettext("Realmente deseja marcar como não compareceu?");
            echo "';
            SGA.Atendimento.nenhumServicoSelecionado = '";
            // line 376
            echo gettext("Nenhum serviço selecionado");
            echo "';
            SGA.Atendimento.tiposAtendimento = ";
            // line 377
            echo twig_jsonencode_filter((isset($context["tiposAtendimento"]) ? $context["tiposAtendimento"] : null));
            echo ";
            SGA.Atendimento.init(";
            // line 378
            if ((isset($context["atendimento"]) ? $context["atendimento"] : null)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "status", array()), "html", null, true);
            } else {
                echo "1";
            }
            echo ");
        </script>
    ";
        }
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
        return array (  773 => 378,  769 => 377,  765 => 376,  761 => 375,  757 => 374,  753 => 373,  749 => 372,  745 => 371,  738 => 368,  733 => 365,  722 => 357,  715 => 353,  708 => 349,  701 => 345,  694 => 341,  687 => 337,  680 => 332,  665 => 319,  661 => 318,  657 => 317,  653 => 316,  649 => 315,  645 => 314,  641 => 313,  637 => 312,  629 => 306,  627 => 305,  621 => 302,  613 => 297,  606 => 292,  598 => 285,  596 => 284,  592 => 282,  590 => 281,  583 => 276,  572 => 274,  568 => 273,  564 => 272,  559 => 270,  552 => 266,  545 => 261,  540 => 257,  538 => 256,  533 => 253,  531 => 252,  517 => 245,  506 => 237,  502 => 236,  494 => 231,  490 => 230,  481 => 224,  476 => 221,  469 => 219,  465 => 217,  455 => 213,  451 => 212,  447 => 211,  440 => 208,  436 => 207,  430 => 205,  424 => 202,  420 => 201,  416 => 200,  412 => 198,  410 => 197,  405 => 196,  401 => 195,  396 => 193,  386 => 186,  382 => 185,  373 => 179,  369 => 178,  360 => 172,  356 => 171,  346 => 163,  342 => 161,  336 => 159,  334 => 158,  329 => 156,  323 => 153,  319 => 152,  313 => 149,  309 => 148,  303 => 145,  299 => 144,  292 => 142,  288 => 141,  278 => 134,  274 => 133,  265 => 127,  261 => 126,  252 => 120,  248 => 119,  238 => 111,  234 => 109,  228 => 107,  226 => 106,  221 => 104,  215 => 101,  211 => 100,  205 => 97,  201 => 96,  195 => 93,  191 => 92,  184 => 90,  180 => 89,  170 => 82,  165 => 80,  152 => 70,  148 => 69,  144 => 68,  138 => 64,  136 => 63,  129 => 58,  126 => 57,  118 => 51,  100 => 38,  86 => 26,  71 => 24,  67 => 23,  60 => 21,  52 => 16,  48 => 15,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
