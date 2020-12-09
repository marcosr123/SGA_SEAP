<?php

/* home.html.twig */
class __TwigTemplate_759181c5118b7f0459110051fe6e8441b1f97ccd8a9b0d6c758cbc638bd86b45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"home\">
    <div class=\"welcome\">
        <h1>";
        // line 5
        echo strtr(gettext("Bem-vindo, %usuario%"), array("%usuario%" => (isset($context["usuario"]) ? $context["usuario"] : null), ));
        echo "</h1>
        <p>";
        // line 6
        echo gettext("CIAPIS, Sistema de Gerenciamento de Atendimento baseado em web, de código aberto e gratuito.");
        echo "</p>
    </div>
    <div id=\"modules\">
        <div id=\"modules-search\">
            <input id=\"search-input\" type=\"text\" placeholder=\"";
        // line 10
        echo gettext("buscar");
        echo "\" onkeyup=\"SGA.Home.filter()\" class=\"form-control\" />
            <script type=\"text/javascript\"> document.getElementById('search-input').focus() </script>
        </div>
        ";
        // line 13
        if (((isset($context["unidade"]) ? $context["unidade"] : null) && (isset($context["modulosUnidade"]) ? $context["modulosUnidade"] : null))) {
            // line 14
            echo "        <div class=\"list unidade\">
            <h2>";
            // line 15
            echo gettext("Unidade");
            echo "</h2>
            <p>";
            // line 16
            echo gettext("Visualize abaixo os módulos disponíveis para a sua unidade");
            echo "</p>
            <ul>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modulosUnidade"]) ? $context["modulosUnidade"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
                // line 19
                echo "                <li>
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
                echo "/modules/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "chave", array()), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 21
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "images/icon.png", $this->getAttribute($context["modulo"], "chave", array()))), "html", null, true);
                echo "\" />
                        <span class=\"name\">";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "nome", array()), "html", null, true);
                echo "</span>
                    </a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </ul>
        </div>
        ";
        }
        // line 29
        echo "        ";
        if ((isset($context["modulosGlobal"]) ? $context["modulosGlobal"] : null)) {
            // line 30
            echo "        <div class=\"list global\">
            <h2>";
            // line 31
            echo gettext("Global");
            echo "</h2>
            <p>";
            // line 32
            echo gettext("Visualize abaixo os módulos globais disponíveis que você possui acesso");
            echo "</p>
            <ul>
                ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modulosGlobal"]) ? $context["modulosGlobal"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
                // line 35
                echo "                <li>
                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
                echo "/modules/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "chave", array()), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 37
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "images/icon.png", $this->getAttribute($context["modulo"], "chave", array()))), "html", null, true);
                echo "\" />
                        <span class=\"name\">";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "nome", array()), "html", null, true);
                echo "</span>
                    </a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            </ul>
        </div>
        ";
        }
        // line 45
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  140 => 42,  130 => 38,  126 => 37,  120 => 36,  117 => 35,  113 => 34,  108 => 32,  104 => 31,  101 => 30,  98 => 29,  93 => 26,  83 => 22,  79 => 21,  73 => 20,  70 => 19,  66 => 18,  61 => 16,  57 => 15,  54 => 14,  52 => 13,  46 => 10,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
