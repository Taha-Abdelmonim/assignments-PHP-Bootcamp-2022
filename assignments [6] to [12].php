<?php
echo ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> == chaleng == <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<br />";
echo nl2br( <<<"Q"
<br />
===Q-1====
-----------------<br />
Q);

echo (int) ((15.2 + 14.7) + (10.5 + 10.5)); // 50
echo "<br />";
echo gettype((int) ((15.2 + 14.7) + (10.5 + 10.5))); // Integer

echo nl2br( <<<"Q"
<br />
===Q-2====
-----------------<br />
Q);
echo gettype(100);
echo "<br />";
var_dump(100);
echo "<br />";
echo get_debug_type(100);

echo nl2br( <<<"Q"
<br />
===Q-3====
-----------------<br />
Q);
echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";

echo nl2br( <<<"Q"
<br />
===Q-4====
-----------------<br />
Q);
echo nl2br("We \n Love \n Elzero \n Web \n School");

echo nl2br( <<<"Q"
<br />
===Q-5====
-----------------<br />
Q);

$Programming = "Programming";
echo nl2br(<<<"Here"
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
Here);

echo nl2br( <<<"Q"
<br />
===Q-6====
-----------------<br />
Q);

$something = "Programming";

echo <<<"code"
Hello \PHP\
We Love $something
code;

echo nl2br( <<<"Q"
<br />
===Q-7====
-----------------<br />
Q);

echo (bool) "Hello PHP";
echo '<br>';
echo gettype((int) ((bool) "Hello PHP"));

echo nl2br( <<<"Q"
<br />
===Q-8====
-----------------<br />
Q);
echo "<pre>";
print_r([
  "FrontEnd" => [
    "HTML",
    "CSS",
    "JS" => [
      "Vuejs" => [
        2 => "v2",
        3 => "v3",
      ],
      "Reactjs",
      "Svelte"
    ]
    ],
  "BackEnd" => [
    "PHP",
    "MySQL",
    "Security",
  ],
  "Git",
  "Github",
  "Testing" => [
    "Unit Testing",
    "End To End",
    "Integration"
  ],
  ]);
echo "</pre>";