<!DOCTYPE html>
<html lang="en">
<head>
    <!--
				Unit 2 Assignment
				Author: Joshua Allen
				Date: September 6, 2021
	-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhP Basics</title>
    <link rel="stylesheet" type="css" href="phpBasic.css">
</head>
<body>
    <div class="container">
        <header><h1>PhP Basics </h1></header>
        <div class="flexBox" id="flexBox-id">
            <aside>
                <ul>
                    <li><a href="../../index.html">Home</a></li>
                    <li><a href="../wdv341homework.html">Homework Page</a></li>
                    <li><a href="http://joshuaallen.info/WDV240/project1/blog/">My Blog</a></li>
                    <li><a href="../../sassFiles/phpBasic.scss">SCSS</a></li>
                </ul>
            </aside>
            <main>
                <p>Create a PHP page for this assignment. Use a combination of PHP, HTML and Javascript to perform the following processes.</p>
                <ol>
                    <li>Create a variable called yourName. Assign it a value of your name.</li>
                        <?php 
                            $yourName = "Joshua Allen";
                        ?>
                    <li>Display the assignment name in an h1 element on the page. Include the elements in your output.</li>
                       <?php
                            echo "<h1>&lt;h1&gt;".$yourName."&lt;/h1&gt;</h1>";
                        ?>
                    <li>Use HTML to put an h2 element on the page. Use PHP to display your name inside the element using the variable.</li>
                    <h2><?php echo $yourName ?></h2>
                    <li>Create the following variables:  number1, number2 and total.  Assign a value to them.</li>
                        <?php
                            $number1 = 1;
                            $number2 = 2;
                            $total = $number1 + $number2;
                        ?>
                    <li>Display the value of each variable and the total variable when you add them together. </li>
                        <?php
                            echo "$number1 + $number2 = $total";
                        ?>
                    <li>Use PHP to create a Javascript array with the following values: PHP,HTML,Javascript.  Output this array using PHP.  Create a script that will display the values of this array on your page.</li>
                        <?php
                            echo "<span id=\"output\"></span>";
                            echo "<script>";
                            echo "var orderedListTag = \"<ol>\";";
                            echo "var languages = [\"PHP\",\"HTML\",\"Javascript\"];";
                            echo "languages.forEach(outPutArray);";
                            echo "orderedListTag += \"</ol>\";";
                            echo "document.getElementById(\"output\").innerHTML = orderedListTag;";
                            echo "function outPutArray(item){ ";
                            echo "orderedListTag += \"<li>\" + item + \"</li>\";";
                            echo "}";    
                            echo "</script>";
                         ?>
                </ol>
            </main>
        </div><!--end of flex Box-->
    </div><!--end of container-->
</body>
</html>