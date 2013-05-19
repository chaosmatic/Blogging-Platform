<?php
//TODO: COMMENT THINGS, AND MAKE EVERYTHING VALID HTML ALL THE TIME
//Fix hardcoded things, make 5 stores, fix css, (nostly done)
//Change display to portable, and fix so it can work in move too 
session_start();
require_once("head.php");
require_once("display.php");
echo "<div id='UI'>";
require_once("UI.php");
echo "</div>";
echo "</body></html>";
/*
The Task (45 + 15 = 60 marks)

Apply stages of the problem-solving methodology to produce a solution for use on a mobile device,
 which takes into account technical and legal requirements.

Task 1 (7 marks) – Design of the software solution.

Identify the factors related to the use of the mobile device that are relevant to the design
of the solution.

Draw a pseudo-code algorithm to represent the function of the software solution. 
Algorithm must contain comments to explain each section.

Draw annotated screen designs that show how the user interface will be organized and
how it will function.

Task 2 (34 marks) – Creation of the software solution.

Create a software solution that meets the design specifications given, ensuring that the program:
validates all input data.
contains efficient and effective programming techniques and appropriate data structures.
has intuitive and consistent navigation.
contains clear and appropriate internal documentation, and utilizes standard naming and 
coding conventions.
has a logical and attractive user interface.
produces the correct output and is error free.

Task 3 (4 marks) – Testing the software solution.

Create a testing table that contains a number of tests, the expected outcome of each test
and the actual results of the tests.  The tests should cover validation, navigation and
the solution itself.

Task 4 (15 marks) – User documentation, security and legal issues.

Create an on-screen user’s guide for the purpose designed software that is:
logically sequenced.
accurate.
easy to follow.
explains how to navigate the program.
explains how to produce the required functions.

Propose and discuss methods for addressing security concerns.

Discuss any legal issues with reference to relevant legislation.
*/
?>