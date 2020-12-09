<?php

/* index.html.twig */
class __TwigTemplate_af6b9c855e881dc4816acc1a9c26380dfe91e584f871fb142f043eb779c90f9e extends Twig_Template
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

    // line 3
    public function block_moduleContent($context, array $blocks = array())
    {
        // line 4
        echo "<div>
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab-geral\" data-toggle=\"tab\">";
        // line 6
        echo gettext("Sistema");
        echo "</a></li>
        <li><a href=\"#tab-triagem\" data-toggle=\"tab\">";
        // line 7
        echo gettext("Triagem");
        echo "</a></li>
        <li><a href=\"#tab-api\" data-toggle=\"tab\">API</a></li>
        <li><a href=\"#tab-sobre\" data-toggle=\"tab\">";
        // line 9
        echo gettext("Sobre");
        echo "</a></li>
    </ul>
    <div class=\"tab-content\">
        <div id=\"tab-geral\" class=\"tab-pane active\">
            <fieldset>
                <legend>";
        // line 14
        echo gettext("Banco de Dados");
        echo "</legend>
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>";
        // line 18
        echo gettext("Chave");
        echo "</th>
                            <th>";
        // line 19
        echo gettext("Valor");
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dbValues"]) ? $context["dbValues"] : null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 24
            echo "                        <tr>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 27
            if (($context["k"] == "password")) {
                // line 28
                echo "                                    ***
                                ";
            } else {
                // line 30
                echo "                                    ";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "
                                ";
            }
            // line 32
            echo "                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </tbody>
                </table>
            </fieldset>
            <fieldset>
                <legend>";
        // line 39
        echo gettext("Autenticação");
        echo "</legend>
                <div id=\"auth_message\" style=\"display:none\">
                    <div class=\"alert alert-success\">
                        ";
        // line 42
        echo gettext("Configuração salva com sucesso");
        // line 43
        echo "                    </div>
                </div>
                <div class=\"form-group auth-type\">
                    <label for=\"auth_type\">";
        // line 46
        echo gettext("Tipo");
        echo "</label>
                    <select id=\"auth_type\" class=\"form-control\">
                        <option value=\"db\" ";
        // line 48
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "type", array()) == "db")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo gettext("Banco de Dados");
        echo "</option>
                        <option value=\"ldap\" ";
        // line 49
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "type", array()) == "ldap")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo gettext("LDAP e Banco de Dados");
        echo "</option>
                    </select>
                </div>
                <div id=\"auth-ldap\" class=\"auth-config\" ";
        // line 52
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "type", array()) != "ldap")) {
            echo "style=\"display:none\"";
        }
        echo ">
                    <div class=\"form-group required\">
                        <label for=\"auth_ldap_host\" class=\"form-label\">";
        // line 54
        echo gettext("Servidor");
        echo "</label>
                        <input id=\"auth_ldap_host\" name=\"host\" type=\"text\" class=\"form-control\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "ldap", array()), "host", array()), "html", null, true);
        echo "\" />
                    </div>
                    <div class=\"form-group required\">
                        <label for=\"auth_ldap_port\">";
        // line 58
        echo gettext("Porta");
        echo "</label>
                        <input id=\"auth_ldap_port\" class=\"form-control\" name=\"port\" type=\"text\" maxlength=\"6\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "ldap", array()), "port", array()), "html", null, true);
        echo "\" />
                        <span class=\"help-block\">ex: 389</span>
                    </div>
                    <div class=\"form-group required\">
                        <label for=\"auth_ldap_host\">";
        // line 63
        echo gettext("Base DN");
        echo "</label>
                        <input id=\"auth_ldap_baseDn\" name=\"baseDn\" class=\"form-control\" type=\"text\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "ldap", array()), "baseDn", array()), "html", null, true);
        echo "\" />
                        <span class=\"help-block\">ex: DC=novosga,DC=org</span>
                    </div>
                    <div class=\"form-group required\">
                        <label for=\"auth_ldap_loginAttribute\" class=\"form-label\">";
        // line 68
        echo gettext("Login Attribute");
        echo "</label>
                        <input id=\"auth_ldap_loginAttribute\" name=\"loginAttribute\" class=\"form-control\" type=\"text\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "ldap", array()), "loginAttribute", array()), "html", null, true);
        echo "\" />
                        <span class=\"help-block\">ex: sAMAccountName</span>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"auth_ldap_user\" class=\"form-label\">";
        // line 73
        echo gettext("Usuário");
        echo "</label>
                        <input id=\"auth_ldap_user\" name=\"username\" class=\"form-control\" type=\"text\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "ldap", array()), "username", array()), "html", null, true);
        echo "\" />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"auth_ldap_pass\" class=\"form-label\">";
        // line 77
        echo gettext("Senha");
        echo "</label>
                        <input id=\"auth_ldap_pass\" name=\"password\" class=\"form-control\" type=\"password\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "ldap", array()), "password", array()), "html", null, true);
        echo "\" />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"auth_ldap_filter\" class=\"form-label\">";
        // line 81
        echo gettext("Filtro");
        echo "</label>
                        <input id=\"auth_ldap_filter\" name=\"filter\" class=\"form-control\" type=\"text\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "ldap", array()), "filter", array()), "html", null, true);
        echo "\" />
                        <span class=\"help-block\">ex: objectClass=user</span>
                    </div>
                </div>
                <div class=\"buttons\">
                    <button id=\"auth_save\" class=\"btn btn-primary\" onclick=\"SGA.Admin.Auth.save()\">
                        ";
        // line 88
        echo gettext("Salvar");
        // line 89
        echo "                    </button>
                </div>
            </fieldset>
        </div>
        <div id=\"tab-triagem\" class=\"tab-pane\">
            <div class=\"form-group\">
                <label for=\"numeracao\" class=\"form-label\">";
        // line 95
        echo gettext("Tipo de numeração");
        echo "</label>
                <select id=\"numeracao\" class=\"form-control\" onchange=\"SGA.Admin.changeNumeracao()\">
                    ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["numeracoes"]) ? $context["numeracoes"] : null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 98
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\" ";
            if (($context["k"] == (isset($context["numeracao"]) ? $context["numeracao"] : null))) {
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
        // line 100
        echo "                </select>
            </div>
            <div class=\"form-group\">
                <label class=\"form-label\">";
        // line 103
        echo gettext("Reiniciar senhas");
        echo "</label>
                <button class=\"btn btn-danger\"
                        onclick=\"return SGA.Admin.reiniciarSenhas('";
        // line 105
        echo gettext("Deseja realmente reiniciar as senhas de todas unidades?");
        echo "')\">
                    ";
        // line 106
        echo gettext("Reiniciar");
        // line 107
        echo "                </button>
            </div>
        </div>
        <div id=\"tab-api\" class=\"tab-pane\">
            <fieldset>
                <legend>Web API</legend>
                <p>As URLs abaixo são usadas para integrar o Novo SGA com outros projetos, como por exemplo o <strong>Painel Web</strong> e a <strong>Triagem Touch</strong>.</p>
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>Method</th>
                            <th>URI</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class=\"label label-danger\">POST</span>
                            </td>
                            <td>
                                /api/token
                            </td>
                            <td>
                                Autentica o usuário retornando o token de acesso.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"label label-success\">GET</span>
                            </td>
                            <td>
                                /api/unidades
                            </td>
                            <td>
                                Retorna todas as unidades disponíveis
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"label label-success\">GET</span>
                            </td>
                            <td>
                                /api/prioridades
                            </td>
                            <td>
                                Retorna todas as prioridades disponíveis
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"label label-success\">GET</span>
                            </td>
                            <td>
                                /api/servicos
                            </td>
                            <td>
                                Retorna os serviços globais
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"label label-success\">GET</span>
                            </td>
                            <td>
                                /api/servicos/:unidade
                            </td>
                            <td>
                                Retorna os serviços habilitados para a unidade informada
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class=\"label label-danger\">POST</span>
                            </td>
                            <td>
                                /api/distribui
                            </td>
                            <td>
                                Distribui uma nova senha para atendimento. Requer autenticação, um access_token válido e ativo.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
            <fieldset>
                <legend>";
        // line 193
        echo gettext("Clientes");
        echo "</legend>
                <p>Para acessar algumas URLs é necessário possuir um token de acesso, e para isso é necessário primeiro cadastrar a aplicação cliente.</p>
                <table id=\"oauth_clients\" class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>Client Id</th>
                            <th>Client Secret</th>
                            <th>Redirect URI</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class=\"buttons\">
                                <a href=\"#dialog-clientid\" data-toggle=\"modal\" class=\"btn btn-default\" onclick=\"\$('#dialog-clientid :input').val('');\">
                                    <span class=\"glyphicon glyphicon-plus\"></span>
                                    ";
        // line 214
        echo gettext("Adicionar");
        // line 215
        echo "                                </a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </fieldset>
        </div>
        <div id=\"tab-sobre\" class=\"tab-pane\">
            <div class=\"jumbotron\">
                <h1>Novo SGA v";
        // line 224
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "</h1>
                <p>Sistema de Gerenciamento de Atendimento</p>
                <p>
                    <button id=\"btn-checkversion\" class=\"btn btn-default btn-lg\" role=\"button\" onclick=\"return SGA.Admin.checkVersion();\">
                        <span class=\"glyphicon glyphicon-refresh\"></span>
                        ";
        // line 229
        echo gettext("Verificar nova versão");
        // line 230
        echo "                    </button>
                    <a id=\"btn-downloader\" href=\"#\" class=\"btn btn-success btn-lg\" role=\"button\" style=\"display:none\">
                        <span class=\"glyphicon glyphicon-download\"></span>
                        Download <span class=\"version\"></span>
                    </a>
                    <span id=\"update-alert\" class=\"label label-success\" style=\"display:none\">
                        <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
        // line 237
        echo gettext("Parabéns, você possui a versão mais recente");
        // line 238
        echo "                    </span>
                </p>
            </div>
            <h2>Comunidade</h2>
            <p>Procurando ajuda? Acesse um dos canais do projeto através dos links abaixo:</p>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Blog
                        </div>
                        <div class=\"panel-body\">
                            <p>Notícias relacionadas aos projetos do Novo SGA e lançamento de novas versões</p>
                            <p>
                                <a href=\"http://novosga.org/blog\" class=\"btn btn-primary\" target=\"_blank\">
                                    <span class=\"glyphicon glyphicon-eye-open\"></span>&nbsp;
                                    ";
        // line 254
        echo gettext("Acessar");
        // line 255
        echo "                                </a>
                            </p>
                        </div>
                   </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Fórum
                        </div>
                        <div class=\"panel-body\">
                            <p>Canal para tirar dúvidas sobre o uso ou instalação dos projetos.</p>
                            <p>
                                <a href=\"http://novosga.org/forum\" class=\"btn btn-primary\" target=\"_blank\">
                                    <span class=\"glyphicon glyphicon-eye-open\"></span>&nbsp;
                                    ";
        // line 270
        echo gettext("Acessar");
        // line 271
        echo "                                </a>
                            </p>
                        </div>
                   </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Github
                        </div>
                        <div class=\"panel-body\">
                            <p>Participe diretamente do desenvolvimento relatando problemas (issues).</p>
                            <p>
                                <a href=\"https://github.com/novosga/novosga\" class=\"btn btn-primary\" target=\"_blank\">
                                    <span class=\"glyphicon glyphicon-eye-open\"></span>&nbsp;
                                    ";
        // line 286
        echo gettext("Acessar");
        // line 287
        echo "                                </a>
                            </p>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        SGA.Admin.Auth.init();
        SGA.Admin.WebApi.loadClients();
    </script>
</div>

";
        // line 302
        echo "<div id=\"dialog-reiniciar\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">";
        // line 307
        echo gettext("Configuração");
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <p>";
        // line 310
        echo gettext("Senhas reiniciadas com sucesso");
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 313
        echo gettext("Fechar");
        echo "</button>
            </div>
        </div>
    </div>
</div>

";
        // line 320
        echo "<div id=\"dialog-clientid\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">OAuth2 client</h4>
            </div>
            <div class=\"modal-body\">
                <form action=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/modules/sga.admin/add_oauth_client\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"client_id\">Client Id</label>
                        <input type=\"text\" id=\"client_id\" name=\"client_id\" class=\"form-control\" required=\"true\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"client_secret\">Client Secret</label>
                        <input type=\"password\" id=\"client_secret\" name=\"client_secret\" class=\"form-control\" required=\"true\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"redirect_uri\">Redirect URL</label>
                        <input type=\"text\" id=\"client_redirect_uri\" name=\"redirect_uri\" class=\"form-control\" placeholder=\"http://\">
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"SGA.Admin.WebApi.addClient(this)\">";
        // line 344
        echo gettext("Adicionar");
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
        return array (  554 => 344,  535 => 328,  525 => 320,  516 => 313,  510 => 310,  504 => 307,  497 => 302,  481 => 287,  479 => 286,  462 => 271,  460 => 270,  443 => 255,  441 => 254,  423 => 238,  421 => 237,  412 => 230,  410 => 229,  402 => 224,  391 => 215,  389 => 214,  365 => 193,  277 => 107,  275 => 106,  271 => 105,  266 => 103,  261 => 100,  246 => 98,  242 => 97,  237 => 95,  229 => 89,  227 => 88,  218 => 82,  214 => 81,  208 => 78,  204 => 77,  198 => 74,  194 => 73,  187 => 69,  183 => 68,  176 => 64,  172 => 63,  165 => 59,  161 => 58,  155 => 55,  151 => 54,  144 => 52,  134 => 49,  126 => 48,  121 => 46,  116 => 43,  114 => 42,  108 => 39,  102 => 35,  94 => 32,  88 => 30,  84 => 28,  82 => 27,  77 => 25,  74 => 24,  70 => 23,  63 => 19,  59 => 18,  52 => 14,  44 => 9,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
