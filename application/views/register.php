<div id="registerform-container">
    <div id="regform">
        <?php echo form_open(base_url() . 'index.php/Login/register'); ?>
            <h1> Registratie </h1>
            <h3> Accountgegevens</h3>
            <table>
                <tr>
                    <td> Voornaam: </td>
                    <td> <?php echo form_input('firstname', '' ,'placeholder="Voornaam" required'); ?> </td>
                </tr>
                <tr>
                    <td> Achternaam: </td>
                    <td> <?php echo form_input('lastname','',' placeholder="Achternaam" required'); ?> </td>
                </tr>
                <tr>
                    <td > Geboortedatum: </td>
                    <td>
                        <input id="date-input" type="date" min="1700-01-01" name="date" required>
                    </td>
                </tr>
                <tr>
                    <td> Gebruikersnaam: </td>
                    <td> <?php echo form_input('username','','placeholder="Gebruikersnaam" required'); ?> </td>
                </tr>
                <tr>
                    <td> Wachtwoord </td>
                    <td> <?php echo form_password('password','','placeholder="Wachtwoord" required'); ?> </td>
                </tr>
                <tr>
                    <td> Wachtwoord bevestigen </td>
                    <td> <?php echo form_password('passwordconfirm','','placeholder="Wachtwoord" required'); ?> </td>
                </tr>

                <tr>
                    <td> E-mailadres: </td>
                    <td> <?php echo form_input('email','','placeholder="E-mail" required'); ?> </td>
                </tr>
                <tr>
                    <td> Gender: </td>
                    <td><input id="malegen" type="radio" name="gender" value="male" required/> Man </td>
                    <td><input id="femalegen" type="radio" name="gender" value="female" required/>  Vrouw </td>
                </tr>
                <tr>
                    <td> Zoekt: </td>
                    <td><input id="malepref" type="radio" name="preference" value="male" required/> Een man </td>
                    <td><input id="femalepref" type="radio" name="preference" value="female" required/> Een vrouw </td>
                </tr>
                <tr>
                    <td> Beschrijving </td>
                    <td> <?php echo form_textarea('description','','rows="7" cols="60" placeholder="Beschrijving" required'); ?> </td>
                </tr>
            </table>
            <h3>Persoonlijke vragen</h3>
            <table>
                
                
                
                
            </table>


        <?php echo form_submit('submit', 'Registreren'); ?>
        <?php echo form_close(); ?>
    </div>
    </div>