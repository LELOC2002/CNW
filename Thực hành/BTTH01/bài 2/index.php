<?php
$content = file_get_contents("Quiz.txt");

$blocks = array_filter(array_map('trim', preg_split("/\R{2,}/", $content)));
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Câu hỏi trắc nghiệm </title>
    <style>
        body { font-family: Arial; max-width: 900px; margin: auto; }
        .question { padding: 15px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 10px; }
        .question h3 { margin-top: 0; }
        .answer { margin: 5px 0 5px 20px; }
    </style>
</head>
<body>

<h2> Câu hỏi trắc nghiệm </h2>

<form>

<?php
$index = 1;

foreach ($blocks as $block) {

    $lines = explode("\n", $block);
    $question = array_shift($lines);   
    
    echo "<div class='question'>";
    echo "<h3>$index. $question</h3>";

    $answer_line = end($lines);
    $is_multi = (strpos($answer_line, ",") !== false); 

    $input_type = $is_multi ? "checkbox" : "radio";

    foreach ($lines as $line) {
        if (strpos($line, "ANSWER") !== false) continue;

        $name = "q" . $index . ($is_multi ? "[]" : "");

        echo "<div class='answer'>
                <label>
                    <input type='$input_type' name='$name'> $line
                </label>
              </div>";
    }

    echo "</div>";
    $index++;
}
?>

</form>

</body>
</html>
