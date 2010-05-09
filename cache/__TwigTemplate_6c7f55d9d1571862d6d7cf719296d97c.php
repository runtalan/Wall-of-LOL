<?php

/* main.html */
class __TwigTemplate_6c7f55d9d1571862d6d7cf719296d97c extends Twig_Template
{
  public function display(array $context)
  {
    // line 1
    echo "<html>
\t<head>
\t\t<script src=\"lib/jquery/js/jquery-1.4.2.min.js\" language=\"javascript\" type=\"text/javascript\">
\t\t</script>
\t\t<title>";
    // line 5
    echo (isset($context['page']) ? $context['page'] : null);
    echo "</title>
\t</head>
\t<body>
\t\t
\t</body>
</html>";
  }

  public function getName()
  {
    return "main.html";
  }

}
