<?php

/* index.html.twig */
class __TwigTemplate_d1c39661ecf4aafdb38765ed562de3e6fc3b5e9d230dcd9b0a67a43c7e0ce0ca extends Twig_Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "css/datepicker3.css", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_moduleContent($context, array $blocks = array())
    {
        // line 9
        echo "<div>
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab-hoje\" data-toggle=\"tab\">";
        // line 11
        echo gettext("Hoje");
        echo "</a></li>
        <li><a href=\"#tab-graficos\" data-toggle=\"tab\">";
        // line 12
        echo gettext("Gráficos");
        echo "</a></li>
        <li><a href=\"#tab-relatorios\" data-toggle=\"tab\">";
        // line 13
        echo gettext("Relatórios");
        echo "</a></li>
    </ul>
    <div id=\"tabs\" class=\"tab-content\">
        <div id=\"tab-hoje\" class=\"tab-pane active\">
            <h2 class=\"chart-title\">";
        // line 17
        echo strtr(gettext("Atendimentos realizados em %now%"), array("%now%" => (isset($context["now"]) ? $context["now"] : null), ));
        echo "</h2>
            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unidades"]) ? $context["unidades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["unidade"]) {
            // line 19
            echo "            <div class=\"chart-unidade\">
                <div class=\"wrap\">
                    <h3 class=\"title\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "nome", array()), "html", null, true);
            echo "</h3>
                    <div id=\"atendimentos-status-";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "id", array()), "html", null, true);
            echo "\" class=\"chart pie atendimentos status\">
                        <span class=\"loading\">";
            // line 23
            echo gettext("Atendimentos por situação");
            echo "</span>
                    </div>
                    <div id=\"atendimentos-servicos-";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "id", array()), "html", null, true);
            echo "\" class=\"chart pie atendimentos status\">
                        <span class=\"loading\">";
            // line 26
            echo gettext("Atendimentos por serviço");
            echo "</span>
                    </div>
                    <script type=\"text/javascript\">
                        SGA.Estatisticas.Grafico.today(";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "id", array()), "html", null, true);
            echo ", {
                            status: \"";
            // line 30
            echo gettext("Atendimentos por situação");
            echo "\",
                            servicos: \"";
            // line 31
            echo gettext("Atendimentos por serviço");
            echo "\"
                        });
                    </script>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unidade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
        <div id=\"tab-graficos\" class=\"tab-pane\">
            <form id=\"chart-form\" action=\"#\" onsubmit=\"return false\">
                <div class=\"form-group required\">
                    <label for=\"chart-id\">";
        // line 41
        echo gettext("Gráfico");
        echo "</label>
                    <select id=\"chart-id\" name=\"grafico\" class=\"form-control\">
                        <option value=\"\">";
        // line 43
        echo gettext("Selecione");
        echo "</option>
                        ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["graficos"]) ? $context["graficos"] : null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 45
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\" data-opcoes=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "opcoes", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "titulo", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </select>
                </div>
                <div class=\"form-group required option unidade\" style=\"display:none\">
                    <label for=\"chart-unidade\">";
        // line 50
        echo gettext("Unidade");
        echo "</label>
                    <select id=\"chart-unidade\" name=\"unidade\" class=\"form-control\">
                        <option value=\"0\">";
        // line 52
        echo gettext("Todas");
        echo "</option>
                        ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unidades"]) ? $context["unidades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["unidade"]) {
            // line 54
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "nome", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unidade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </select>
                </div>
                <div class=\"form-group required option date date-range\" style=\"display:none\">
                    <label for=\"chart-dataInicial\">";
        // line 59
        echo gettext("Data inicial");
        echo "</label>
                    <input id=\"chart-dataInicial\" name=\"inicial\" type=\"text\" class=\"form-control datepicker\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group required option date-range\" style=\"display:none\">
                    <label for=\"chart-dataFinal\">";
        // line 63
        echo gettext("Data final");
        echo "</label>
                    <input id=\"chart-dataFinal\" name=\"final\" type=\"text\" class=\"form-control datepicker\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-primary\" onclick=\"SGA.Estatisticas.Grafico.gerar()\">
                        ";
        // line 68
        echo gettext("Gerar gráfico");
        // line 69
        echo "                    </button>
                </div>
                <div id=\"chart-result\"></div>
            </form>
        </div>
        <div id=\"tab-relatorios\" class=\"tab-pane\">
            <form id=\"report-form\" action=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/modules/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()), "html", null, true);
        echo "/relatorio\" method=\"get\" target=\"_blank\" onsubmit=\"return SGA.Estatisticas.Relatorio.gerar()\">
                <input type=\"hidden\" id=\"report-hidden-inicial\" name=\"inicial\" />
                <input type=\"hidden\" id=\"report-hidden-final\" name=\"final\" />
                <div class=\"form-group required\">
                    <label for=\"report-id\">";
        // line 79
        echo gettext("Relatório");
        echo "</label>
                    <select id=\"report-id\" name=\"relatorio\" class=\"form-control\">
                        <option value=\"\">";
        // line 81
        echo gettext("Selecione");
        echo "</option>
                        ";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["relatorios"]) ? $context["relatorios"] : null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 83
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\" data-opcoes=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "opcoes", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "titulo", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                    </select>
                </div>
                <div class=\"form-group required option unidade\" style=\"display:none\">
                    <label for=\"report-unidade\">";
        // line 88
        echo gettext("Unidade");
        echo "</label>
                    <select id=\"report-unidade\" name=\"unidade\" class=\"form-control\">
                        <option value=\"0\">";
        // line 90
        echo gettext("Todas");
        echo "</option>
                        ";
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unidades"]) ? $context["unidades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["unidade"]) {
            // line 92
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidade"], "nome", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unidade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                    </select>
                </div>
                <div class=\"form-group required option date date-range\" style=\"display:none\">
                    <label for=\"report-dataInicial\">";
        // line 97
        echo gettext("Data inicial");
        echo "</label>
                    <input id=\"report-dataInicial\" type=\"text\" class=\"form-control datepicker\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group required option date-range\" style=\"display:none\">
                    <label for=\"report-dataFinal\">";
        // line 101
        echo gettext("Data final");
        echo "</label>
                    <input id=\"report-dataFinal\" type=\"text\" class=\"form-control datepicker\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "html", null, true);
        echo "\" />
                </div>
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 105
        echo gettext("Gerar relatório");
        echo "</button>
                </div>
            </form>
        </div>
    </div>
    <script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "js/highcharts.js", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "js/highcharts.exporting.js", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "js/bootstrap-datepicker.js", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "js/bootstrap-datepicker.pt-BR.js", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        // unidades
        SGA.Estatisticas.unidades = ";
        // line 116
        echo (isset($context["unidadesJson"]) ? $context["unidadesJson"] : null);
        echo ";
        // tab graficos
        \$(\"#chart-id\").on('change', function() {
            SGA.Estatisticas.Grafico.change(\$(this));
        });
        // tab relatorios
        \$(\"#report-id\").on('change', function() {
            SGA.Estatisticas.Relatorio.change(\$(this));
        });
        \$(\".datepicker\" ).datepicker({
            language: 'pt-BR',
            format: '";
        // line 127
        echo gettext("dd/mm/yyyy");
        echo "'
        });
        SGA.Form.validate('report-form');
    </script>
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
        return array (  346 => 127,  332 => 116,  326 => 113,  322 => 112,  318 => 111,  314 => 110,  306 => 105,  300 => 102,  296 => 101,  290 => 98,  286 => 97,  281 => 94,  270 => 92,  266 => 91,  262 => 90,  257 => 88,  252 => 85,  239 => 83,  235 => 82,  231 => 81,  226 => 79,  217 => 75,  209 => 69,  207 => 68,  200 => 64,  196 => 63,  190 => 60,  186 => 59,  181 => 56,  170 => 54,  166 => 53,  162 => 52,  157 => 50,  152 => 47,  139 => 45,  135 => 44,  131 => 43,  126 => 41,  120 => 37,  108 => 31,  104 => 30,  100 => 29,  94 => 26,  90 => 25,  85 => 23,  81 => 22,  77 => 21,  73 => 19,  69 => 18,  65 => 17,  58 => 13,  54 => 12,  50 => 11,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
