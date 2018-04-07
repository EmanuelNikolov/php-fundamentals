<style>
    <?php include_once "style.css"; ?>
</style>
<div class="main">
    <form method="post">
        <fieldset>
            <legend>Personal Information</legend>

            <div>
                <input type="text" name="firstName" title="First Name" placeholder="First Name" required>
            </div>

            <div>
                <input type="text" name="lastName" title="Last Name" placeholder="Last Name" required>
            </div>

            <div>
                <input type="email" name="email" title="Email" placeholder="Email" required>
            </div>

            <div>
                <input type="tel" name="phoneNumber" title="Phone Number" placeholder="Phone Number" required>
            </div>

            <div>
                <label>
                    <span>Female</span>
                    <input type="radio" name="sex" id="female" value="female">
                </label>
                <label>
                    <span>Male</span>
                    <input type="radio" name="sex" id="male" value="male">
                </label>
            </div>

            <div>
                <label>
                    <span class="blockLabels">Birth Date</span>
                    <input type="text" id="birthDate" name="birthDate" placeholder="dd/mm/yyyy" required>
                </label>
            </div>

            <div>
                <label>
                    <span class="blockLabels">Nationality</span>
                    <select name="nationality" required>
                        <option selected disabled></option>
                        <?= $generateDropdown($validNationalities); ?>
                    </select>
                </label>
            </div>
        </fieldset>

        <fieldset>
            <legend>Last Work Position</legend>

            <div>
                <label>
                    <span>Company Name</span>
                    <input type="text" name="companyName" required>
                </label>
            </div>

            <div>
                <label>
                    <span>From</span>
                    <input type="text" name="companyFrom" placeholder="dd/mm/yyyy" required>
                </label>
            </div>

            <div>
                <label>
                    <span>To</span>
                    <input type="text" id="companyTo" name="companyTo" placeholder="dd/mm/yyyy" required>
                </label>
            </div>
        </fieldset>

        <fieldset>
            <legend>Computer Skills</legend>

            <div>
                <label>
                    <span class="blockLabels">Programming Languages</span>
                    <input type="text" name="language[]" required>
                    <select name="languageLevel[]" required>
                        <option selected disabled>-Skill Level-</option>
                        <?= $generateDropdown($validProgrammingLevels); ?>
                    </select>
                </label>
            </div>
        </fieldset>

        <fieldset>
            <legend>Other Skills</legend>

            <div>
                <label>
                    <span class="blockLabels">Languages</span>
                    <input type="text" name="otherLang[]" required>

                    <select name="comprehension[]">
                        <option selected disabled>-Comprehension-</option>
                        <?= $generateDropdown($validLanguageLevels); ?>
                    </select>

                    <select name="reading[]">
                        <option selected disabled>-Reading-</option>
                        <?= $generateDropdown($validLanguageLevels); ?>
                    </select>

                    <select name="writing[]">
                        <option selected disabled>-Writing-</option>
                        <?= $generateDropdown($validLanguageLevels); ?>
                    </select>
                </label>
            </div>

            <div>
                <label>
                    <span class="blockLabels">Driver's License</span>
                    B <input type="checkbox" name="drivingLicense[]" value="B">
                    A <input type="checkbox" name="drivingLicense[]" value="A">
                    C <input type="checkbox" name="drivingLicense[]" value="C">
                </label>
            </div>
        </fieldset>

        <input type="submit" value="Generate CV" name="submit">
    </form>
</div>
