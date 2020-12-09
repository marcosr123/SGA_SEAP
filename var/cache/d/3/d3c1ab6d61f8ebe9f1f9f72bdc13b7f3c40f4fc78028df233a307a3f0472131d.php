<?php

/* index.html.twig */
class __TwigTemplate_d3c1ab6d61f8ebe9f1f9f72bdc13b7f3c40f4fc78028df233a307a3f0472131d extends Twig_Template
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
        echo "
<div id=\"infobar\" class=\"row\">
    <div class=\"col-md-10 col-xs-9\">
        <form role=\"form\" onsubmit=\"return false\">
            <div class=\"col-xs-6\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"basic-addon1\">
                        <span class=\"glyphicon glyphicon-user\"></span>
                    </span>
                    <label for=\"cli_nome\" class=\"sr-only\">";
        // line 12
        echo gettext("Nome");
        echo "</label>
                    <input type=\"text\" id=\"cli_nome\" class=\"form-control\" maxlength=\"100\" placeholder=\"";
        // line 13
        echo gettext("Nome");
        echo "\" />
                </div>
            </div>
            <div class=\"col-xs-6\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"basic-addon1\">
                        <span class=\"glyphicon glyphicon-user\"></span>
                    </span>
                    <label for=\"cli_doc\" class=\"sr-only\">";
        // line 21
        echo gettext("Documento");
        echo "</label>
                    <input type=\"text\" id=\"cli_doc\" class=\"form-control\" maxlength=\"11\" placeholder=\"";
        // line 22
        echo gettext("Documento");
        echo "\" />
                </div>
            </div>
        </form>
    </div>
    <div class=\"col-md-2 col-xs-3\">
        <div class=\"ultima-senha\" title=\"";
        // line 28
        echo gettext("Última senha");
        echo "\">
            <span class=\"label label-default\"></span>
        </div>
    </div>
</div>

<div id=\"triagem-servicos\" class=\"row\">
    ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicos"]) ? $context["servicos"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["servicoUnidade"]) {
            // line 36
            echo "    <div id=\"triagem-servico-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", array()), "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", array()), "id", array()), "html", null, true);
            echo "\" class=\"triagem-servico col-md-6\">
        <div>
            <span class=\"text\">
                <a href=\"javascript:void(0)\"
                   title=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicoUnidade"], "sigla", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", array()), "nome", array()), "html", null, true);
            echo "\"
                   onclick=\"SGA.Triagem.servicoInfo(";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", array()), "id", array()), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", array()), "nome", array()), "html", null, true);
            echo "')\">
                    ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicoUnidade"], "sigla", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", array()), "nome", array()), "html", null, true);
            echo "
                </a>
                <span class=\"servico\">
                    <span class=\"fila\">
                        <span class=\"badge\">
                            <abbr id=\"total-aguardando-";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", array()), "id", array()), "html", null, true);
            echo "\" class=\"total\" title=\"";
            echo gettext("Aguardando atendimento");
            echo "\">-</abbr>
                            &nbsp;/&nbsp;
                            <abbr id=\"total-senhas-";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", array()), "id", array()), "html", null, true);
            echo "\" class=\"total\" title=\"";
            echo gettext("Total de senhas do serviço");
            echo "\">-</abbr>
                        </span>
                    </span>
                </span>
            </span>
            <span class=\"buttons\">
                <button class=\"btn btn-primary\"
                        data-id=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", array()), "id", array()), "html", null, true);
            echo "\"
                        title=\"";
            // line 57
            echo gettext("Distribuir senha normal");
            echo "\"
                        onclick=\"SGA.Triagem.senhaNormal(this)\">
                    ";
            // line 59
            echo gettext("Normal");
            // line 60
            echo "                </button>
                ";
            // line 61
            if (twig_length_filter($this->env, (isset($context["prioridades"]) ? $context["prioridades"] : null))) {
                // line 62
                echo "                    <button class=\"btn btn-danger\"
                            data-id=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", array()), "id", array()), "html", null, true);
                echo "\"
                            title=\"";
                // line 64
                echo gettext("Distribuir senha com prioridade");
                echo "\"
                            onclick=\"SGA.Triagem.prioridade(this)\">
                        ";
                // line 66
                echo gettext("Prioridade");
                // line 67
                echo "                    </button>
                ";
            }
            // line 69
            echo "            </span>
        </div>
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 73
            echo "        <p>";
            echo gettext("Nenhum serviço habilitado para a unidade atual");
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicoUnidade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "</div>
<p class=\"links\">
    <a href=\"#dialog-busca\" class=\"btn btn-default\" data-toggle=\"modal\">
        <span class=\"glyphicon glyphicon-search\"></span>&nbsp;
        ";
        // line 79
        echo gettext("Consultar senha");
        // line 80
        echo "    </a>
    <a href=\"#dialog-triagem-config\" class=\"btn btn-default\" data-toggle=\"modal\">
        <span class=\"glyphicon glyphicon-cog\"></span>&nbsp;
        ";
        // line 83
        echo gettext("Configuração");
        // line 84
        echo "    </a>
</p>

";
        // line 88
        echo "<iframe id=\"frame-impressao\" width=\"300\" height=\"150\" style=\"display:none\"></iframe>

";
        // line 91
        echo "<div id=\"dialog-senha\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 96
        echo gettext("Senha|Bilhete");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"field\">
                    <h4>";
        // line 100
        echo gettext("Número");
        echo "</h4>
                    <p class=\"numero\"></p>
                </div>
                <div class=\"field\">
                    <h4>";
        // line 104
        echo gettext("Serviço");
        echo "</h4>
                    <p class=\"servico\"></p>
                </div>
                <div class=\"field\">
                    <h4>";
        // line 108
        echo gettext("Prioridade");
        echo "</h4>
                    <p class=\"nome-prioridade\"></p>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 117
        echo "<div id=\"dialog-triagem-config\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 122
        echo gettext("Configuração");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <h4>";
        // line 125
        echo gettext("Exibir serviços");
        echo "</h4>
                <div class=\"row exibir-servicos\">
                    ";
        // line 127
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicos"]) ? $context["servicos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["servicoUnidade"]) {
            // line 128
            echo "                        <div class=\"col-sm-6\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" class=\"servico-";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", array()), "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", array()), "id", array()), "html", null, true);
            echo "\" checked> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicoUnidade"], "sigla", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicoUnidade"], "servico", array()), "nome", array()), "html", null, true);
            echo "
                                </label>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicoUnidade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 143
        echo "<div id=\"dialog-servico\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 148
        echo gettext("Serviço");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <div>
                    <h4>";
        // line 152
        echo gettext("Última senha");
        echo "</h4>
                    <p class=\"ultima-senha\">
                        <span></span>
                        <a href=\"#\" class=\"glyphicon glyphicon-print\" title=\"";
        // line 155
        echo gettext("Reimprimir");
        echo "\"></a>
                    </p>
                </div>
                <div>
                    <h4>";
        // line 159
        echo gettext("Nome original do serviço");
        echo "</h4>
                    <p class=\"nome\"></p>
                </div>
                <div>
                    <h4>";
        // line 163
        echo gettext("Descrição");
        echo "</h4>
                    <p class=\"descricao\"></p>
                </div>
                <div>
                    <h4>";
        // line 167
        echo gettext("Subserviços");
        echo "</h4>
                    <ul class=\"subservicos notempty\"></ul>
                    <ul class=\"subservicos empty\"><li>";
        // line 169
        echo gettext("Não há subserviços");
        echo "</li></ul>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 177
        echo "<div id=\"dialog-prioridade\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 182
        echo gettext("Prioridade");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <ul>
                    ";
        // line 186
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prioridades"]) ? $context["prioridades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["prioridade"]) {
            // line 187
            echo "                    <li>
                        <input id=\"prioridade-";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($context["prioridade"], "id", array()), "html", null, true);
            echo "\" type=\"radio\" name=\"prioridade\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prioridade"], "id", array()), "html", null, true);
            echo "\" />
                        <label for=\"prioridade-";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($context["prioridade"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prioridade"], "nome", array()), "html", null, true);
            echo "</label>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prioridade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                </ul>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\"
                        onclick=\"SGA.Triagem.senhaPrioridade(this, function() { \$('#dialog-prioridade').modal('hide'); });\">
                    ";
        // line 197
        echo gettext("Gerar prioridade");
        // line 198
        echo "                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 205
        echo "<div id=\"dialog-busca\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 210
        echo gettext("Busca");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <form class=\"form-inline\" role=\"form\" onsubmit=\"return false\">
                    <div class=\"form-group\">
                        <input id=\"numero_busca\" type=\"text\" maxlength=\"5\" class=\"form-search form-control\" placeholder=\"";
        // line 215
        echo gettext("Número");
        echo "\" />
                    </div>
                    <button id=\"btn-consultar\" class=\"btn btn-primary\" onclick=\"SGA.Triagem.consultar()\">";
        // line 217
        echo gettext("Consultar");
        echo "</button>
                </form>
                <div class=\"result\">
                    <table id=\"result_table\" class=\"table\">
                        <thead>
                            <tr>
                                <th>";
        // line 223
        echo gettext("Número");
        echo "</th>
                                <th>";
        // line 224
        echo gettext("Serviço");
        echo "</th>
                                <th>";
        // line 225
        echo gettext("Data chegada");
        echo "</th>
                                <th>";
        // line 226
        echo gettext("Data início");
        echo "</th>
                                <th>";
        // line 227
        echo gettext("Data fim");
        echo "</th>
                                <th>";
        // line 228
        echo gettext("Triagem");
        echo "</th>
                                <th>";
        // line 229
        echo gettext("Atendente");
        echo "</th>
                                <th>";
        // line 230
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

<script type=\"text/javascript\">
    \$('.triagem-servico').each(function(i,v) {
        var servico = \$(v);
        SGA.Triagem.ids.push(servico.data('id'));
    });
    SGA.Triagem.ajaxUpdate();
    SGA.Triagem.prioridades = [";
        // line 248
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prioridades"]) ? $context["prioridades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "];
    SGA.Triagem.imprimir = ";
        // line 249
        if ($this->getAttribute((isset($context["unidade"]) ? $context["unidade"] : null), "statusImpressao", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
    SGA.Triagem.init();
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
        return array (  503 => 249,  491 => 248,  470 => 230,  466 => 229,  462 => 228,  458 => 227,  454 => 226,  450 => 225,  446 => 224,  442 => 223,  433 => 217,  428 => 215,  420 => 210,  413 => 205,  405 => 198,  403 => 197,  396 => 192,  385 => 189,  379 => 188,  376 => 187,  372 => 186,  365 => 182,  358 => 177,  348 => 169,  343 => 167,  336 => 163,  329 => 159,  322 => 155,  316 => 152,  309 => 148,  302 => 143,  294 => 136,  277 => 131,  272 => 128,  268 => 127,  263 => 125,  257 => 122,  250 => 117,  239 => 108,  232 => 104,  225 => 100,  218 => 96,  211 => 91,  207 => 88,  202 => 84,  200 => 83,  195 => 80,  193 => 79,  187 => 75,  178 => 73,  170 => 69,  166 => 67,  164 => 66,  159 => 64,  155 => 63,  152 => 62,  150 => 61,  147 => 60,  145 => 59,  140 => 57,  136 => 56,  124 => 49,  117 => 47,  107 => 42,  101 => 41,  95 => 40,  85 => 36,  80 => 35,  70 => 28,  61 => 22,  57 => 21,  46 => 13,  42 => 12,  31 => 3,  28 => 2,  11 => 1,);
    }
}
