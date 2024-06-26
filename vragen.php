<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>
    <link rel="stylesheet" type="text/css" href="css/vragen.css">
</head>

<body>
    <div id="bg-container">
        <img src="img/ditism.jpg" alt="">
        <img src="img/schoolp123.jpg" alt="">
        <img src="img/martjiachte1.jpg" alt="">
    </div>
    <h1 id="nav-title">questionnaire</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Symptomen.php">Information</a></li>
            <li><a href="login.php">user page</a></li>
        </ul>
    </nav>

    <form id="questionnaire">
        <label for="q1">Have you ever experienced anxious or panic-like feelings when entering open spaces, such as
            squares, parks, or large shopping centers?</label><br>
        <select id="q1" name="q1">
            <option value=""></option>
            <option value="option1">Always</option>
            <option value="option2">Sometimes</option>
            <option value="option3">Never</option>
        </select><br>

        <label for="q2">Do you feel uncomfortable or anxious when leaving your home or a familiar
            environment?</label><br>
        <select id="q2" name="q2">
            <option value=""></option>
            <option value="option1">Yes</option>
            <option value="option2">No</option>
            <option value="option3">Sometimes</option>
        </select><br>

        <label for="q3">Are there specific situations or circumstances in open spaces that you avoid due to feelings of
            anxiety?</label><br>
        <select id="q3" name="q3">
            <option value=""></option>
            <option value="option1">Yes, very often</option>
            <option value="option2">No, never</option>
            <option value="option3">Sometimes</option>
        </select><br>

        <label for="q4">Do you experience physical symptoms such as palpitations, sweating, or breathing problems when
            you are in an open space?</label><br>
        <select id="q4" name="q4">
            <option value=""></option>
            <option value="option1">Yes, I recognize all symptoms</option>
            <option value="option2">I recognize only a few symptoms</option>
            <option value="option3">No, I don't recognize any symptoms</option>
        </select><br>

        <label for="q5">Does it make a difference whether you are alone or accompanied by others in open
            spaces?</label><br>
        <select id="q5" name="q5">
            <option value=""></option>
            <option value="option1">Yes</option>
            <option value="option2">No</option>
        </select><br>

        <label for="q6">Do you have memories of traumatic events in open spaces that may increase your
            anxiety?</label><br>
        <select id="q6" name="q6">
            <option value=""></option>
            <option value="option1">Yes</option>
            <option value="option2">No</option>
            <option value="option3">Yes, but the memories are vague</option>
        </select>

        <label for="q7">Have you ever experienced panicky feelings in situations where you think escape is impossible
            and no one could help?</label><br>
        <select id="q7" name="q7">
            <option value=""></option>
            <option value="option1">Very often</option>
            <option value="option2">Sometimes</option>
            <option value="option3">Never</option>
        </select><br>

        <label for="q8">Do you often feel uncomfortable or anxious in crowded public places such as shopping malls,
            train stations, or busy streets?</label><br>
        <select id="q8" name="q8">
            <option value=""></option>
            <option value="option1">Always</option>
            <option value="option2">Never</option>
            <option value="option3">Sometimes</option>
        </select><br>

        <label for="q9">Do you avoid certain situations or places due to fear of a panic attack or feeling of losing
            control?</label><br>
        <select id="q9" name="q9">
            <option value=""></option>
            <option value="option1">Yes, very often</option>
            <option value="option2">No, never</option>
            <option value="option3">Sometimes</option>
        </select><br>

        <label for="q10">Does agoraphobia affect your daily activities, such as work, social interactions, or leisure
            activities?</label><br>
        <select id="q10" name="q10">
            <option value=""></option>
            <option value="option1">Yes, it greatly affects my life</option>
            <option value="option2">I struggle with it a lot but try to ignore it</option>
            <option value="option3">No, it doesn't affect me</option>
        </select><br>

        <label for="q11">Have you ever avoided situations that you know are safe, but still feel anxious because of the
            environment?</label><br>
        <select id="q11" name="q11">
            <option value=""></option>
            <option value="option1">Yes</option>
            <option value="option2">No</option>
        </select><br>

        <label for="q12">Do you experience physical symptoms such as palpitations, trembling, or dizziness in situations
            that could trigger them?</label><br>
        <select id="q12" name="q12">
            <option value=""></option>
            <option value="option1">Yes, very much</option>
            <option value="option2">No, hardly</option>
            <option value="option3">Yes, but very lightly</option>
        </select>

        <button onclick="donePage()" type="button" id="button">Finished</button>
    </form>
    </select>
    </form>
    <script src="JS/bg-fade.js"></script>
</body>

</html>