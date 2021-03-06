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
    <meta name="description" content="This web page will display basic PHP implemetation spanning arrithmitec, assignment operators, and arrays.">
    <meta name="keywords" content="PHP, Javascript, HTML, CSS, Arrays, variables">
    <meta name="author" content="Joshua Allen">
    <title>PhP Basics</title>
    <script src="phpBasics.js"></script>
    <link rel="stylesheet" href="phpBasic.css">
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
                    <li><a href="phpBasic.scss">SCSS</a></li>
                </ul>
            </aside>
            <main>
                <p>Create a PHP page for this assignment. Use a combination of PHP, HTML and Javascript to perform the following processes.</p>
                <ol>
                    <li>Create a variable called yourName. Assign it a value of your name. <?php $yourName = "Joshua Allen"; ?></li>
                       
                    <li>Display the assignment name in an h1 element on the page. Include the elements in your output.<?php $assignmentName = "PHP BASICS"; echo "<h1>&lt;h1&gt;".$assignmentName."&lt;h1&gt;</h1>"; ?></li>
                      
                    <li>Use HTML to put an h2 element on the page. Use PHP to display your name inside the element using the variable. <?php echo '<h2>'.$yourName.'</h2>' ?></li>
                    
                    <li>Create the following variables:  number1, number2 and total.  Assign a value to them.<?php $number1 = 1; $number2 = 2; $total = $number1 + $number2; ?></li>
                       
                    <li>Display the value of each variable and the total variable when you add them together. <?php echo $number1. " + ". $number2. " = " .$total; ?></li>
                       
                    <li>Use PHP to create a Javascript array with the following values: PHP,HTML,Javascript.  Output this array using PHP.  Create a script that will display the values of this array on your page.<?php $phpArray = ['PHP', 'HTML', 'JAVASCRIPT'];?> <script> 
                    var javaScriptArray = <?php echo json_encode($phpArray);?>; var text=""; javaScriptArray.forEach(makeNice);document.write(text);
                     </script> </li>
                       
                </ol>
            </main>
        </div><!--end of flex Box-->
    </div><!--end of container-->
</body>
</html>