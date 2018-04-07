<?php
if (!isset($output)) {
    header("Location: /");
    exit;
}
?>
<table border="1px" cellspacing="2px" cellpadding="5px">
    <tr>
        <th colspan="2">
            Personal Information
        </th>
    </tr>
    <tr>
        <td>First Name</td>
        <td><?= $output["firstName"] ?></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?= $output["lastName"] ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?= $output["email"] ?></td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td><?= $output["phoneNumber"] ?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?= $output["sex"] ?></td>
    </tr>
    <tr>
        <td>Birth Date</td>
        <td><?= $output["birthDate"] ?></td>
    </tr>
    <tr>
        <td>Nationality</td>
        <td><?= $output["nationality"] ?></td>
    </tr>
</table>
<br>
<table border="1px" cellspacing="2px" cellpadding="5px">
    <tr>
        <th colspan="2">
            Last Work Position
        </th>
    </tr>
    <tr>
        <td>Company Name</td>
        <td><?= $output["companyName"] ?></td>
    </tr>
    <tr>
        <td>From</td>
        <td><?= $output["companyFrom"] ?></td>
    </tr>
    <tr>
        <td>To</td>
        <td><?= $output["companyTo"] ?></td>
    </tr>
</table>
<br>
<table border="1px" cellspacing="2px" cellpadding="5px">
    <tr>
        <th colspan="2">Computer Skills</th>
    </tr>
    <tr>
        <td>Programming Languages</td>
        <td>
            <table border="1px" cellspacing="2px" cellpadding="5px">
                <tr>
                    <th>Language</th>
                    <th>Skill Level</th>
                </tr>
                <?php foreach ($output["languages"] as $language => $level): ; ?>
                    <td><?= $language ?></td>
                    <td><?= $level ?></td>
                <?php endforeach; ?>
            </table>
        </td>
    </tr>
</table>
<br>
<table border="1px" cellspacing="2px" cellpadding="5px">
    <tr>
        <th colspan="2">Other Skills</th>
    </tr>
    <tr>
        <td>Languages</td>
        <td>
            <table border="1px" cellspacing="2px" cellpadding="5px">
                <tr>
                    <th>Language</th>
                    <th>Comprehension</th>
                    <th>Reading</th>
                    <th>Writing</th>
                </tr>
                <?php foreach ($output["speakingLanguages"] as $language => $data): ; ?>
                    <td><?= $language ?></td>
                    <td><?= $data["comprehension"] ?></td>
                    <td><?= $data["reading"] ?></td>
                    <td><?= $data["writing"] ?></td>
                <?php endforeach; ?>
            </table>
        </td>
    </tr>
    <tr>
        <td>Driver's License</td>
        <td><?= implode(", ", $output["drivingLicense"]) ?></td>
    </tr>
</table>