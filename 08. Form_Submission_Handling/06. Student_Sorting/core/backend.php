<?php
require_once "classes/Student.php";
require_once "classes/StudentSorter.php";
require_once "dropdown_options.php";

session_start();

$studentData1 = [
    $studentFirstName1 = $_POST['firstName1'],
    $studentLastName1 = $_POST['lastName1'],
    $studentEmail1 = $_POST['email1'],
    $studentExamScore1 = $_POST['examScore1'],
];

$studentData2 = [
    $studentFirstName2 = $_POST['firstName2'],
    $studentLastName2 = $_POST['lastName2'],
    $studentEmail2 = $_POST['email2'],
    $studentExamScore2 = $_POST['examScore2'],
];

$studentData3 = [
    $studentFirstName3 = $_POST['firstName3'],
    $studentLastName3 = $_POST['lastName3'],
    $studentEmail3 = $_POST['email3'],
    $studentExamScore3 = $_POST['examScore3'],
];


try {
    if (!array_key_exists($_POST['sortCriteria'], $validCriteria)) {
        throw new Exception("Invalid sort criteria.");
    }

    $sortCriteria = $_POST['sortCriteria'];

    if (!array_key_exists($_POST['order'], $validOrder)) {
        throw new Exception("Invalid order criteria.");
    }

    $order = $_POST['order'];

    $_SESSION['students'] = $_SESSION['students'] ?? new StudentSorter();
    $studentSorter = &$_SESSION['students'];

    $student1 = new Student(...$studentData1);
    $student2 = new Student(...$studentData2);
    $student3 = new Student(...$studentData3);

    $studentSorter->addStudent($student1);
    $studentSorter->addStudent($student2);
    $studentSorter->addStudent($student3);
} catch (Exception $e) {
    $error = $e->getMessage();
}

$studentSorter->$sortCriteria();
$studentSorter->$order();

require_once "../views/view_table.php";