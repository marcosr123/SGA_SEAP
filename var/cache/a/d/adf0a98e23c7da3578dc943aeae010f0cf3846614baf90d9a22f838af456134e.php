<?php

/* main.html.twig */
class __TwigTemplate_adf0a98e23c7da3578dc943aeae010f0cf3846614baf90d9a22f838af456134e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blocks.html.twig", "main.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'content' => array($this, 'block_content'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 7
        if ((isset($context["module"]) ? $context["module"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "nome", array()), "html", null, true);
            echo " | ";
        }
        echo "Atendimento CIAPIS</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/images/favicon.png\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/bootstrap.min.css?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/bootstrap-theme.min.css?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/style.css?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" />
        <!--[if lt IE 9]>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/html5shiv.js\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/respond.min.js\"></script>
        <![endif]-->
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/jquery.js?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/bootstrap.min.js?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/js/script.js?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"> 
            SGA.baseUrl = '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "'; 
            SGA.version = '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "';
            SGA.dialogs.error.title = '";
        // line 24
        echo gettext("Erro");
        echo "';
            SGA.dateFormat = '";
        // line 25
        echo gettext("d/m/Y");
        echo "';
            SGA.invalidSession = '";
        // line 26
        echo gettext("Sessão Inválida. Possivelmente o seu usuário está sendo utilizado em outra máquina.");
        echo "';
            SGA.inactiveSession = '";
        // line 27
        echo gettext("Sessão expirada. Favor efetuar o login novamente.");
        echo "';
        </script>
        ";
        // line 29
        $this->displayBlock("head", $context, $blocks);
        echo "
    </head>
    <body>
        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".novosga-navbar\">
                        <span class=\"sr-only\">Menu</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "\">Atendimento CIAPIS</a>
                </div>
                <div class=\"collapse navbar-collapse novosga-navbar\">
                    ";
        // line 44
        if ((isset($context["unidade"]) ? $context["unidade"] : null)) {
            // line 45
            echo "                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["unidade"]) ? $context["unidade"] : null), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modulosUnidade"]) ? $context["modulosUnidade"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
                // line 50
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
                echo "/modules/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "chave", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "nome", array()), "html", null, true);
                echo "</a></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                <li>
                                    <a href=\"#dialog-unidade\" data-toggle=\"modal\">
                                        ";
            // line 54
            echo gettext("Trocar unidade");
            // line 55
            echo "                                        &nbsp;<span class=\"glyphicon glyphicon-transfer\"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    ";
        } else {
            // line 62
            echo "                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown\">
                            <a href=\"#dialog-unidade\" class=\"dropdown-toggle\" data-toggle=\"modal\">";
            // line 64
            echo gettext("Escolher unidade");
            echo "</a>
                        </li>
                    </ul>
                    ";
        }
        // line 68
        echo "                    ";
        if (twig_length_filter($this->env, (isset($context["modulosGlobal"]) ? $context["modulosGlobal"] : null))) {
            // line 69
            echo "                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 71
            echo gettext("Global");
            echo " <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                ";
            // line 73
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modulosGlobal"]) ? $context["modulosGlobal"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
                // line 74
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
                echo "/modules/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "chave", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "nome", array()), "html", null, true);
                echo "</a></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                            </ul>
                        </li>
                    </ul>
                    ";
        }
        // line 80
        echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nome", array()), "html", null, true);
        echo " <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/profile\"><span class=\"glyphicon glyphicon-user\"></span> ";
        echo gettext("Perfil");
        echo "</a></li>
                                <li><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/logout\"><span class=\"glyphicon glyphicon-off\"></span> ";
        echo gettext("Sair");
        echo "</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class=\"container\">
            ";
        // line 93
        $this->displayBlock('content', $context, $blocks);
        // line 95
        echo "        </div>
        <div id=\"footer\">
            <p>Atendimento CIAPIS v";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "</p>
        </div>
        <div id=\"dialog-unidade\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">";
        // line 104
        echo gettext("Unidade");
        echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div>
                            <label>";
        // line 108
        echo gettext("Favor escolher a unidade");
        echo "</label>
                            <select id=\"unidade\" class=\"form-control\">
                                <option value=\"\">";
        // line 110
        echo gettext("Selecione");
        echo "</option>
                                ";
        // line 111
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unidades"]) ? $context["unidades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 112
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["item"], "id", array()) == $this->getAttribute((isset($context["unidade"]) ? $context["unidade"] : null), "id", array()))) {
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
        // line 114
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary\" onclick=\"SGA.Unidades.set()\">";
        // line 118
        echo gettext("Enviar");
        echo "</button>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 123
        if (( !(isset($context["unidade"]) ? $context["unidade"] : null) &&  !(isset($context["modulo"]) ? $context["modulo"] : null))) {
            // line 124
            echo "        <script type=\"text/javascript\"> SGA.Unidades.show(); </script>
        ";
        }
        // line 126
        echo "        <span id=\"ajax-loading\" class=\"mini-loading\" style=\"display:none\"></span>
    </body>
</html>";
    }

    // line 93
    public function block_content($context, array $blocks = array())
    {
        // line 94
        echo "            ";
    }

    public function getTemplateName()
    {
        return "main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 94,  342 => 93,  336 => 126,  332 => 124,  330 => 123,  322 => 118,  316 => 114,  301 => 112,  297 => 111,  293 => 110,  288 => 108,  281 => 104,  271 => 97,  267 => 95,  265 => 93,  252 => 85,  246 => 84,  241 => 82,  237 => 80,  231 => 76,  218 => 74,  214 => 73,  209 => 71,  205 => 69,  202 => 68,  195 => 64,  191 => 62,  182 => 55,  180 => 54,  176 => 52,  163 => 50,  159 => 49,  154 => 47,  150 => 45,  148 => 44,  142 => 41,  127 => 29,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  95 => 20,  89 => 19,  83 => 18,  78 => 16,  74 => 15,  67 => 13,  61 => 12,  55 => 11,  51 => 10,  42 => 7,  36 => 4,  32 => 2,  14 => 1,);
    }
}
