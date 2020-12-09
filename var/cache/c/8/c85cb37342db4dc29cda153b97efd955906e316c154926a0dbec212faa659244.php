<?php

/* edit.html.twig */
class __TwigTemplate_c85cb37342db4dc29cda153b97efd955906e316c154926a0dbec212faa659244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("module.html.twig", "edit.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
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
    ";
        // line 5
        if (((isset($context["modulo"]) ? $context["modulo"] : null) && $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "id", array()))) {
            // line 6
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "css/bootstrap-switch.min.css", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
            echo "\">
    <script type=\"text/javascript\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "js/bootstrap-switch.min.js", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // line 9
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "js/SimpleAjaxUploader.min.js", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
            echo "\"></script>
    ";
        }
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"module-content\">
        <div class=\"header\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "images/icon.png", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
        echo "\" />
            <h2>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "nome", array()), "html", null, true);
        echo "</h2>
            <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "descricao", array()), "html", null, true);
        echo "</p>
        </div>
        ";
        // line 20
        if (((isset($context["modulo"]) ? $context["modulo"] : null) && $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "id", array()))) {
            // line 21
            echo "            <input id=\"modulo_id\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "id", array()), "html", null, true);
            echo "\" />
            <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#tab-sobre\" data-toggle=\"tab\">";
            // line 23
            echo gettext("Sobre");
            echo "</a></li>
                <li><a href=\"#tab-css\" data-toggle=\"tab\">CSS</a></li>
                <li><a href=\"#tab-javascript\" data-toggle=\"tab\">Javascript</a></li>
            </ul>
            <div class=\"tab-content\">
                <div id=\"tab-sobre\" class=\"tab-pane active\">
                    <div class=\"info\">
                        <div class=\"icon\">
                            <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "images/icon.png", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
            echo "\" />
                        </div>
                        <div class=\"text nome\">
                            <label>";
            // line 34
            echo gettext("Nome");
            echo "</label>
                            <span>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "nome", array()), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"text chave\">
                            <label>";
            // line 38
            echo gettext("Chave");
            echo "</label>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/modules/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "chave", array()), "html", null, true);
            echo "\">
                                <span>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "chave", array()), "html", null, true);
            echo "</span>
                            </a>
                        </div>
                        <div class=\"text descricao\">
                            <label>";
            // line 44
            echo gettext("Descrição");
            echo "</label>
                            <p>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "descricao", array()), "html", null, true);
            echo "</p>
                        </div>
                        <div>
                            <input
                                type=\"checkbox\"
                                data-on-color=\"success\"
                                data-off-color=\"default\"
                                data-on-text=\"On\"
                                data-off-text=\"Off\"
                                ";
            // line 54
            if ($this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "status", array())) {
                echo "checked";
            }
            echo ">
                        </div>
                    </div>
                </div>
                <div id=\"tab-css\" class=\"tab-pane\">
                    <div class=\"resource-buttons\">
                        <h4 class=\"css\">CSS</h4>
                        <button onclick=\"SGA.Modulos.Resource.save('css')\"
                                class=\"btn btn-primary\">
                            <span class=\"glyphicon glyphicon-save\"></span>
                            ";
            // line 64
            echo gettext("Salvar");
            // line 65
            echo "                        </button>
                        <button onclick=\"SGA.Modulos.Resource.load('css')\"
                                class=\"btn btn-default\">
                            <span class=\"glyphicon glyphicon-refresh\"></span>
                            ";
            // line 69
            echo gettext("Recarregar");
            // line 70
            echo "                        </button>
                    </div>
                    <textarea id=\"css\" class=\"form-control\" rows=\"20\">";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["css"]) ? $context["css"] : null), "html", null, true);
            echo "</textarea>
                </div>
                <div id=\"tab-javascript\" class=\"tab-pane\">
                    <div class=\"resource-buttons\">
                        <h4 class=\"js\">Javascript</h4>
                        <button onclick=\"SGA.Modulos.Resource.save('js')\"
                                class=\"btn btn-primary\">
                            <span class=\"glyphicon glyphicon-save\"></span>
                            ";
            // line 80
            echo gettext("Salvar");
            // line 81
            echo "                        </button>
                        <button onclick=\"SGA.Modulos.Resource.load('js')\"
                                class=\"btn btn-default\">
                            <span class=\"glyphicon glyphicon-refresh\"></span>
                            ";
            // line 85
            echo gettext("Recarregar");
            // line 86
            echo "                        </button>
                    </div>
                    <textarea id=\"js\" class=\"form-control\" rows=\"20\">";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["javascript"]) ? $context["javascript"] : null), "html", null, true);
            echo "</textarea>
                </div>
            </div>
            <div class=\"buttons\">
                <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/modules/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()), "html", null, true);
            echo "\" class=\"btn btn-default\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>&nbsp;
                    ";
            // line 94
            echo gettext("Voltar");
            // line 95
            echo "                </a>
                <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/modules/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()), "html", null, true);
            echo "/edit\" class=\"btn btn-default\">
                    <span class=\"glyphicon glyphicon-plus-sign\"></span>&nbsp;
                    ";
            // line 98
            echo gettext("Novo");
            // line 99
            echo "                </a>
                <form action=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/modules/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()), "html", null, true);
            echo "/delete/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "id", array()), "html", null, true);
            echo "\" method=\"post\" onsubmit=\"return confirm('";
            echo gettext("Deseja realmente desinstalar esse módulo?");
            echo "')\" class=\"pull-right\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <span class=\"glyphicon glyphicon-trash\"></span>
                        ";
            // line 103
            echo gettext("Desinstalar");
            // line 104
            echo "                    </button>
                </form>
            </div>
            <script>
                \$('input:checkbox').bootstrapSwitch().on('switchChange.bootstrapSwitch', function(event, state) {
                    SGA.ajax({
                        type: 'post',
                        url: \"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/modules/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()), "html", null, true);
            echo "/toggle\",
                        data: {
                            id: ";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modulo"]) ? $context["modulo"] : null), "id", array()), "html", null, true);
            echo "
                        }
                    });
                });
            </script>
        ";
        } else {
            // line 119
            echo "            <div class=\"row\">
                <button id=\"btn-upload\" type=\"button\" class=\"btn btn-primary\">
                    <span class=\"glyphicon glyphicon-file\"></span>&nbsp;
                    ";
            // line 122
            echo gettext("Escolha o arquivo");
            // line 123
            echo "                </button>
                <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/modules/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()), "html", null, true);
            echo "\"
                        class=\"btn btn-default\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>&nbsp;
                    ";
            // line 127
            echo gettext("Voltar");
            // line 128
            echo "                </a>
                <div id=\"pic-progress-wrap\" class=\"progress-wrap\">
                </div>
                <p class=\"help-block\">Selecione o arquivo ZIP de instalação módulo.</p>
                <div id=\"errormsg\" class=\"alert alert-danger\" style=\"display: none\">
                </div>
                <div id=\"picbox\" class=\"alert alert-success\" style=\"display: none\">
                </div>
            </div>
            <script>
                ;(function() {
                    \"use strict\";

                    var btn = document.getElementById('btn-upload'),
                        wrap = document.getElementById('pic-progress-wrap');

                    new ss.SimpleUpload({
                        button: btn,
                        url: '";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
            echo "/modules/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()), "html", null, true);
            echo "/install',
                        name: 'uploadfile',
                        responseType: 'json',
                        allowedExtensions: ['zip'],
                        onSubmit: function(filename, extension) {
                            var prog = document.createElement('div'),
                                outer = document.createElement('div'),
                                bar = document.createElement('div'),
                                size = document.createElement('div');

                            prog.className = 'prog';
                            size.className = 'size';
                            outer.className = 'progress progress-striped active';
                            bar.className = 'progress-bar progress-bar-success';

                            outer.appendChild(bar);
                            prog.innerHTML = '<span style=\"vertical-align:middle;\">'+ filename + ' - </span>';
                            prog.appendChild(size);
                            prog.appendChild(outer);
                            wrap.appendChild(prog); // 'wrap' is an element on the page

                            this.setProgressBar(bar);
                            this.setProgressContainer(prog);
                            this.setFileSizeBox(size);
                        },
                        startXHR: function() {
                            \$('#picbox').text('').hide();
                            \$('#errormsg').text('').hide();
                        },
                        onComplete: function(filename, response) {
                            if (response.success === true) {
                                \$('#picbox').text(response.message).show();
                            } else {
                                \$('#errormsg').text(response.message).show();
                            }
                        }
                    });
                })();
            </script>
        ";
        }
        // line 186
        echo "    </div>
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
        return array (  354 => 186,  309 => 146,  289 => 128,  287 => 127,  279 => 124,  276 => 123,  274 => 122,  269 => 119,  260 => 113,  253 => 111,  244 => 104,  242 => 103,  230 => 100,  227 => 99,  225 => 98,  218 => 96,  215 => 95,  213 => 94,  206 => 92,  199 => 88,  195 => 86,  193 => 85,  187 => 81,  185 => 80,  174 => 72,  170 => 70,  168 => 69,  162 => 65,  160 => 64,  145 => 54,  133 => 45,  129 => 44,  122 => 40,  116 => 39,  112 => 38,  106 => 35,  102 => 34,  96 => 31,  85 => 23,  79 => 21,  77 => 20,  72 => 18,  68 => 17,  64 => 16,  60 => 14,  57 => 13,  49 => 9,  44 => 7,  39 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
