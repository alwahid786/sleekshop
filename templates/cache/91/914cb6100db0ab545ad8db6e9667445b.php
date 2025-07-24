<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* register.twig */
class __TwigTemplate_5217435ef1ebc5ed81f4e2a193dcab4c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "page.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("page.twig", "register.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<section class=\"register-section py-5\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6 col-md-8 col-12\">
                <div class=\"register-wrapper bg-white shadow rounded p-5\">
                    <div class=\"text-center mb-4\">
                        <h2 class=\"crimson-semibold font-40 text-dark mb-2\">";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Join Helena", [], "messages");
        echo "</h2>
                        <p class=\"hind-regular font-16 text-muted\">";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create your account to get started", [], "messages");
        echo "</p>
                    </div>

                    ";
        // line 13
        if ((($context["error"] ?? null) == 1)) {
            // line 14
            echo "                    <div class=\"alert alert-danger border-0 mb-4\" role=\"alert\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        ";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The following error occurred", [], "messages");
            echo ": ";
            echo twig_escape_filter($this->env, ($context["error_msg"] ?? null), "html", null, true);
            echo "
                    </div>
                    ";
        }
        // line 19
        echo "
                    <form method=\"POST\" action=\"register\" class=\"register-form\">
                        <div class=\"form-group mb-4\">
                            <label class=\"form-label hind-medium font-14 text-dark mb-2\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email Address", [], "messages");
        echo "</label>
                            <input type=\"email\" 
                                   class=\"form-control form-control-lg border-2 rounded-3 py-3 px-4\" 
                                   name=\"email\" 
                                   value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\"
                                   placeholder=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enter your email address", [], "messages");
        echo "\"
                                   required>
                        </div>
                        
                        <div class=\"form-group mb-4\">
                            <label class=\"form-label hind-medium font-14 text-dark mb-2\">";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", [], "messages");
        echo "</label>
                            <input type=\"password\" 
                                   class=\"form-control form-control-lg border-2 rounded-3 py-3 px-4\" 
                                   name=\"password\" 
                                   placeholder=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a strong password", [], "messages");
        echo "\"
                                   required>
                            <small class=\"form-text text-muted hind-regular font-12 mt-1\">
                                ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password must be at least 8 characters long", [], "messages");
        // line 40
        echo "                            </small>
                        </div>

                        <div class=\"form-group mb-4\">
                            <label class=\"form-label hind-medium font-14 text-dark mb-2\">";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm Password", [], "messages");
        echo "</label>
                            <input type=\"password\" 
                                   class=\"form-control form-control-lg border-2 rounded-3 py-3 px-4\" 
                                   name=\"password2\" 
                                   placeholder=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm your password", [], "messages");
        echo "\"
                                   required>
                        </div>

                        <div class=\"form-check mb-4\">
                            <input class=\"form-check-input\" type=\"checkbox\" id=\"agreeTerms\" required>
                            <label class=\"form-check-label hind-regular font-14 text-muted\" for=\"agreeTerms\">
                                ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("I agree to the", [], "messages");
        echo " 
                                <a href=\"#\" class=\"text-dark text-decoration-none hind-medium\">";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Terms & Conditions", [], "messages");
        echo "</a> 
                                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("and", [], "messages");
        echo " 
                                <a href=\"#\" class=\"text-dark text-decoration-none hind-medium\">";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Privacy Policy", [], "messages");
        echo "</a>
                            </label>
                        </div>

                        <div class=\"form-group mb-4\">
                            <input type=\"hidden\" name=\"already_sent\" value=\"1\">
                            <button type=\"submit\" class=\"btn btn-dark btn-lg w-100 py-3 hind-bold font-16 text-uppercase\">
                                ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Account", [], "messages");
        // line 66
        echo "                            </button>
                        </div>

                        <div class=\"text-center\">
                            <p class=\"hind-regular font-14 text-muted mb-0\">
                                ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Already have an account?", [], "messages");
        echo " 
                                <a href=\"/login\" class=\"text-dark text-decoration-none hind-medium\">";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign In", [], "messages");
        echo "</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.register-section {
    min-height: 80vh;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
}

.register-wrapper {
    border: none;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
}

.form-control:focus {
    border-color: #212529;
    box-shadow: 0 0 0 0.2rem rgba(33, 37, 41, 0.25);
}

.btn-dark:hover {
    background-color: #000;
    transform: translateY(-2px);
    transition: all 0.3s ease;
}

.form-check-input:checked {
    background-color: #212529;
    border-color: #212529;
}

.form-check-input:focus {
    box-shadow: 0 0 0 0.2rem rgba(33, 37, 41, 0.25);
}
</style>
";
    }

    public function getTemplateName()
    {
        return "register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 72,  175 => 71,  168 => 66,  166 => 65,  156 => 58,  152 => 57,  148 => 56,  144 => 55,  134 => 48,  127 => 44,  121 => 40,  119 => 39,  113 => 36,  106 => 32,  98 => 27,  94 => 26,  87 => 22,  82 => 19,  74 => 16,  70 => 14,  68 => 13,  62 => 10,  58 => 9,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "register.twig", "/var/www/html/excalibur/templates/register.twig");
    }
}
