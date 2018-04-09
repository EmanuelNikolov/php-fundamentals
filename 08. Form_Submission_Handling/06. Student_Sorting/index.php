<?php require_once "core/dropdown_options.php"; ?>
<form action="core/backend.php" method="post">
    <div>
        <table>
            <thead>
            <tr>
                <th>First Name:</th>
                <th>Second Name:</th>
                <th>Email:</th>
                <th>Exam Score:</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text" name="firstName1" required/></td>
                <td><input type="text" name="lastName1" required/></td>
                <td><input type="email" name="email1" required/></td>
                <td><input type="number" name="examScore1" required/></td>
            </tr>
            <tr>
                <td><input type="text" name="firstName2" required/></td>
                <td><input type="text" name="lastName2" required/></td>
                <td><input type="email" name="email2" required/></td>
                <td><input type="number" name="examScore2" required/></td>
            </tr>
            <tr>
                <td><input type="text" name="firstName3" required/></td>
                <td><input type="text" name="lastName3" required/></td>
                <td><input type="email" name="email3" required/></td>
                <td><input type="number" name="examScore3" required/></td>
            </tr>
            </tbody>
        </table>
    </div>

    <label>
        Sort by:
        <select name="sortCriteria" required>
            <?php foreach ($validCriteria as $key => $criteria): ?>
                <option value="<?= $key ?>"><?= $criteria ?></option>
            <?php endforeach; ?>
        </select>
    </label>

    <label>
        Order:
        <select name="order" required>
            <?php foreach ($validOrder as $key => $order): ?>
                <option value="<?= $key ?>"><?= $order ?></option>
            <?php endforeach; ?>
        </select>
    </label>

    <input type="submit" name="submit" value="SUBMIT"/>
</form>