<?php

/* module.html.twig */
class __TwigTemplate_163135f84ea928dc71064063cbbea21d97bfb44a52d9c7c9cbbe6a18d36cdcc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "module.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'moduleContent' => array($this, 'block_moduleContent'),
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

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    
    ";
        // line 7
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "css/style.css", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "js/script.js", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"> SGA.module = \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()), "html", null, true);
        echo "\";</script>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    
    <div class=\"module-content\">
        ";
        // line 16
        $this->displayBlock("module_page_header", $context, $blocks);
        echo "
        
        ";
        // line 18
        $this->displayBlock('moduleContent', $context, $blocks);
        // line 20
        echo "    </div>
";
    }

    // line 18
    public function block_moduleContent($context, array $blocks = array())
    {
        // line 19
        echo "        ";
    }

    public function getTemplateName()
    {
        return "module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  76 => 18,  71 => 20,  69 => 18,  64 => 16,  57 => 13,  54 => 12,  48 => 9,  44 => 8,  39 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
