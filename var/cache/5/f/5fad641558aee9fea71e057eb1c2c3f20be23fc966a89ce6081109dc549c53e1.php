<?php

/* blocks.html.twig */
class __TwigTemplate_5fad641558aee9fea71e057eb1c2c3f20be23fc966a89ce6081109dc549c53e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'module_page_header' => array($this, 'block_module_page_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('module_page_header', $context, $blocks);
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
    }

    // line 5
    public function block_module_page_header($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"header\">
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "images/icon.png", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
        echo "\" />
        <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "nome", array()), "html", null, true);
        echo "</h2>
        <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "descricao", array()), "html", null, true);
        echo "</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  48 => 8,  44 => 7,  41 => 6,  38 => 5,  33 => 2,  29 => 5,  26 => 4,  24 => 2,  21 => 1,);
    }
}
