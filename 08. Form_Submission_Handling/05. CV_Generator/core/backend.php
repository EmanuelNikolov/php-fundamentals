<?php
/*if (!isset($_POST["submit"])) {
    require_once "core/dropdown-options.php";
    require_once "views/index.php";
}*/

if (isset($_POST['submit'])) {
    $firstName = trim($_POST["firstName"]);
    $lastName = trim($_POST["lastName"]);
    $email = trim($_POST["email"]);
    $phoneNumber = trim($_POST["phoneNumber"]);
    $sex = trim($_POST["sex"]);
    $birthDay = trim($_POST["birthDate"]);
    $nationality = trim($_POST["nationality"]);
    $companyName = trim($_POST["companyName"]);
    $companyFrom = trim($_POST["companyFrom"]);
    $companyTo = trim($_POST["companyTo"]);
    $drivingLicense = $_POST["drivingLicense"];
    $languages = [];
    for ($i = 0; $i < count($_POST["language"]); ++$i) {
        if (empty(trim($_POST["language"][$i])))
            continue;

        $languages[$_POST["language"][$i]] = $_POST["languageLevel"][$i];
    }
    $otherLang = [];
    for ($i = 0; $i < count($_POST["otherLang"]); ++$i) {
        if (empty(trim($_POST["otherLang"][$i])))
            continue;

        $otherLang[$_POST["otherLang"][$i]] = [
            "comprehension" => $_POST["comprehension"][$i],
            "reading" => $_POST["reading"][$i],
            "writing" => $_POST["writing"][$i]
        ];
    }
    $letterValidator = function (string $string) {
        return preg_match("~[a-zA-Z]{2,20}~", $string);
    };
    $letterNumberValidator = function (string $string) {
        return preg_match("~[a-zA-Z0-9]{2,20}~", $string);
    };
    $phoneValidator = function (string $string) {
        return preg_match("~[0-9\\+\\-\\s]+~", $string);
    };
    $emailValidator = function (string $string) {
        return preg_match("~[a-zA-Z0-9]+@[a-zA-Z0-9]+\\.[a-zA-Z0-9]+~", $string);
    };
    if ($letterValidator($firstName) &&
        $letterValidator($lastName) &&
        $letterNumberValidator($companyName) &&
        $phoneValidator($phoneNumber) &&
        $emailValidator($email)) {
        $output = [];

        $output["firstName"] = $firstName;
        $output["lastName"] = $lastName;
        $output["email"] = $email;
        $output["phoneNumber"] = $phoneNumber;
        $output["sex"] = $sex;
        $output["birthDate"] = $birthDay;
        $output["nationality"] = $nationality;
        $output["companyName"] = $companyName;
        $output["companyFrom"] = $companyFrom;
        $output["companyTo"] = $companyTo;
        $output["languages"] = $languages;
        $output["speakingLanguages"] = $otherLang;
        $output["drivingLicense"] = $drivingLicense;
    }

    require_once "../views/cv-gen.php";
}