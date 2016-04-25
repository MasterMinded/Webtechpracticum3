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


        <div id="vragenlijst">

            <h2>
                Vraag 	1
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question1" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Ik geef de voorkeur aan grote groepen mensen, met een grote diversiteit.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question1" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Ik geef de voorkeur aan intieme bijeenkomsten met uitsluitend goede vrienden.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question1" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 2
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question2" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Ik doe eerst, en dan denk ik.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question2" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Ik denk eerst, en dan doe ik.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question2" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 3
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question3" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Ik ben makkelijk afgeleid, met minder aandacht voor een enkele specifieke taak.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question3" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Ik kan me goed focussen, met minder aandacht voor het grote geheel.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question3" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 4
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question4" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Ik ben een makkelijke prater en ga graag uit.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question4" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Ik ben een goede luisteraar en meer een privé-persoon.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question4" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 5
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question5" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Als gastheer/-vrouw ben ik altijd het centrum van de belangstelling.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question5" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Als gastheer/-vrouw ben altijd achter de schermen bezig om te zorgen dat alles soepeltjes verloopt.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question5" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 6
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question6" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Ik geef de voorkeur aan concepten en het leren op basis van associaties.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question6" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Ik geef de voorkeur aan observaties en het leren op basis van feiten.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question6" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 7
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question7" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Ik heb een groot inbeeldingsvermogen en heb een globaal overzicht van een project.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question7" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Ik ben pragmatisch ingesteld en heb een gedetailleerd beeld van elke stap.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question7" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 8
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question8" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Ik kijk naar de toekomst.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question8" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Ik houd mijn blik op het heden gericht.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question8" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 9
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question9" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Ik houd van de veranderlijkheid in relaties en taken.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question9" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Ik houd van de voorspelbaarheid in relaties en taken.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question9" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 10
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question10" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Ik overdenk een beslissing helemaal.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question10" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Ik beslis met mijn gevoel.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question10" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 11
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question11" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Ik werk het beste met een lijst plussen en minnen.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question11" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Ik beslis op basis van de gevolgen voor mensen.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question11" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 12
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question12" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Ik ben van nature kritisch.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question12" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Ik maak het mensen graag naar de zin.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question12" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 13
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question13" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Ik ben eerder eerlijk dan tactisch.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question13" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Ik ben eerder tactisch dan eerlijk.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question13" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 14
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question14" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Ik houd van vertrouwde situaties.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question14" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Ik houd van flexibele situaties.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question14" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 15
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question15" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Ik plan alles, met een to-do lijstje in mijn hand.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question15" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Ik wacht tot er meerdere ideeën opborrelen en kies dan on-the-fly wat te doen.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question15" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 16
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question16" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Ik houd van het afronden van projecten.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question16" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Ik houd van het opstarten van projecten.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question16" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 17
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question17" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Ik ervaar stress door een gebrek aan planning en abrupte wijzigingen.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question17" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Ik ervaar gedetailleerde plannen als benauwend en kijk uit naar veranderingen.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question17" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 18
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question18" type="radio" value="2" required>
                    </td>
                    <td>
                        a) Het is waarschijnlijker dat ik een doel bereik.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question18" type="radio" value="1" required>
                    </td>
                    <td>
                        b) Het is waarschijnlijker dat ik een kans zie.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question18" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            <h2>
                Vraag 19
            </h2>
            <table>
                <tr>
                    <td>
                        <input class="antwoorda" name="question19" type="radio" value="2" required>
                    </td>
                    <td>
                        a) All play and no work maakt dat het project niet afkomt.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordb" name="question19" type="radio" value="1" required>
                    </td>
                    <td>
                        b) All work and no play maakt je maar een saaie pief.
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="antwoordc" name="question19" type="radio" value="0" required>
                    </td>
                    <td>
                        c) Ik zit er eigenlijk tussenin.
                    </td>
                </tr>
            </table>
            </div>

        <?php echo form_submit('submit', 'Registreren'); ?>
        <?php echo form_close(); ?>
    </div>
    </div>