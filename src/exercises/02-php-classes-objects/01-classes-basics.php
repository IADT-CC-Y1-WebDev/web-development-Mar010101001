<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes Basics Exercises - PHP Classes & Objects</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to Classes & Objects</a>
        <a href="/examples/02-php-classes-objects/01-classes-basics.php">View Example &rarr;</a>
    </div>

    <h1>Classes Basics Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Create a Student Class File</h2>
    <p>
        <strong>Task:</strong>
        Create a new file called <code>Student.php</code> in the <code>classes/</code> folder.
        In this file, define a class called <code>Student</code> with two public properties:
        <code>$name</code> and <code>$number</code>.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        require_once __DIR__ . '/classes/Student.php';

        $student = new Student("Mar", "777");

        echo $student->getName() . " - " . $student->getNumber();
        ?>
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: Add a Constructor</h2>
    <p>
        <strong>Task:</strong>
        Modify your <code>Student</code> class to include a constructor.
        Then create two Student objects with different values.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        require_once __DIR__ . '/classes/Student.php';

        $student1 = new Student("Mar", "777");
        $student2 = new Student("Jakub", "2323");

        echo $student1->getName() . " - " . $student1->getNumber() . "<br>";
        echo $student2->getName() . " - " . $student2->getNumber();
        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: Add Getter Methods</h2>
    <p>
        <strong>Task:</strong>
        Use getter methods to display student info in a formatted string.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        require_once __DIR__ . '/classes/Student.php';

        $student = new Student("Mar", "777");

        echo "Student " . $student->getName() .
             " has number " . $student->getNumber();
        ?>
    </div>

</body>
</html>