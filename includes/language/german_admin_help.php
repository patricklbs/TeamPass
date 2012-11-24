<?php
//GERMAN
if (!isset($_SESSION['settings']['cpassman_url'])) {
    $TeamPass_url = '';
} else {
    $TeamPass_url = $_SESSION['settings']['cpassman_url'];
}

$txt['help_on_folders'] = "<div class='ui-state-highlight ui-corner-all' style='padding:5px;font-weight:bold;'> Auf dieser Seite können Sie ORDNER anlegen und verwalten.<br /> Mit Hilfe von Ordnern können Sie Ihre Elemente strukturieren. Ein Ordner ist dem Dateiverzeichnis unter Windows ähnlich.<br /> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>Die unterste Ordner-Ebene heißt ROOT.<br /> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>Ordner und Unterordner bilden eine Baumstruktur.<br /> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>Jeder Ordner befindet sich auf bestimmter Ebene der Baumstruktur. </div> <div id='accordion'> <h3><a href='#'>Neuen ORDNER hinzufügen</a></h3> <div> Klicken Sie auf das Symbol <img src='includes/images/folder--plus.png' alt='' />. Es erscheint ein Dialogfenster, in dem Sie eingeben sollen:<br /> - Name des Ordners<br /> - den übergeordneten Ordner (jeder Ordner ist Unterordner eines anderen Ordners)<br /> - Komplexitätsstufe (Dies bezieht sich auf die Passwort-Stärke. Beim Anlegen eines neuen Elements darf das Passwort nicht schwächer sein als die festgelegte Komplexität)<br /> - Erneuerungsintervall in Monaten (erforderlich, falls Sie eine regelmäßige Erneuerung von Passwörtern erzwingen möchten). </div> <h3><a href='#'>Bestehenden Ordner anpassen</a></h3> <div> Um Namen, Komplexitätsstufe, übergeordneten Ordner oder Erneuerungsintervall zu ändern, klicken Sie auf entsprechende Zelle.<br /> Dadurch wird die Zelle editierbar. Ändern Sie den erwünschten Wert und klicken Sie zum Speichern auf Symbol <img src='includes/images/disk_black.png' alt='' /> oder zum Abbruch auf Symbol <img src='includes/images/cross.png' alt='' /> <br /> <p style='text-align:center;'> <img src='includes/images/help/folders_1.png' alt='' /> </p> <div style='margin:10px Opx 0px 20px;'> Hinweis: wenn Sie den übergeordneten Ordner verändern, werden alle Unterordner mitverschoben. </div> </div> <h3><a href='#'>Ordner löschen</a></h3> <div> Bestehende Ordner können gelöscht werden. Hierzu klicken Sie auf Symbol <img src='includes/images/folder--minus.png' alt='' />.<br /> Hiermit werden alle Elemente und Unterordner des Ordners gelöscht... Also Vorsicht!!!! <p style='text-align:center;'> <img src='includes/images/help/folders_2.png' alt='' /> </p> </div> <h3><a href='#'>Spezielle Einstellungen</a></h3> <div> Für Ordner gibt es zwei spezielle Einstellungen.<br /> Die Erste erlaubt das Anlegen von Elementen ungeachtet der erforderlichen Passwort-Komplexität.<br /> Die Zweite erlaubt das Ändern von Elementen ungeachtet der erforderlichen Passwort-Komplexität.<br /> Beide Einstellungen können kombiniert werden.<br /> Sie können auch nur zeitweise eingesetzt werden. <p style='text-align:center;'> <img src='includes/images/help/folders_3.png' alt='' /> </p> </div> </div>
";
$txt['help_on_roles'] = "<div class='ui-state-highlight ui-corner-all' style='padding:5px;font-weight:bold;'> Auf dieser Seite können Sie ROLLEN anlegen und verwalten.<br /> Eine Rolle ist einer Gruppe erlaubter (sichtbarer) und verbotener (unsichtbarer) Ordner zugeordnet.<br /> Sind einige Rollen definiert, können ihnen BENUTZER zugeordnet werden. </div> <div id='accordion'> <h3><a href='#'>Neue ROLLE hinzufügen</a></h3> <div> Klicken Sie auf das Symbol <img src='includes/images/users--plus.png' alt='' />. Es erscheint ein Dialogfenster, in dem Sie den Namen der neuen ROLLE eingeben sollen. </div> <h3><a href='#'>Ordner erlauben oder verbieten</a></h3> <div> Zur Festlegung von Zugriffsrechten können Sie die Matrix 'Rollen vs. Ordner' benutzen. Ist eine Zelle rot, kann die Rolle auf diesen Ordner nicht zugreifen. Ist eine Zelle grün, kann die Rolle auf diesen Ordner zugreifen.<br /> Um die Zugriffsrechte zu ändern, klicken Sie auf die erwünschte Matrixzelle.<br/> <p style='text-align:center;'> <span style='text-align:center;'><img src='includes/images/help/roles_1.png' alt='' /></span> </p> Im obigen Screenshot ist ersichtlich, dass der Ordner 'Cleaner' für die Rolle 'Dev' erlaubt, für die Rolle 'Commercial' jedoch verboten ist. </div> <h3><a href='#'>Matrix manuell aktualisieren</a></h3> <div> Klicken Sie auf das Symbol <img src='includes/images/arrow_refresh.png' alt='' />. </div> <h3><a href='#'>Rolle ändern</a></h3> <div> Sie können den Namen einer Rolle ändern ohne Auswirkungen auf bereits festgelegte Parameter.<br /> Wählen Sie die zu ändernde Rolle und klicken Sie auf das Symbol <img src='includes/images/ui-tab--pencil.png' alt='' />.<br /> Es erscheint ein Dialogfenster, in dem Sie den neuen Rollennamen eingeben sollen. </div> <h3><a href='#'>Rolle löschen</a></h3> <div> Sie können eine bestehende Rolle löschen.<br /> Wählen Sie die zu löschende Rolle und klicken Sie auf das Symbol <img src='includes/images/ui-tab--minus.png' alt='' />.<br /> Es erscheint ein Dialogfenster, in dem Sie das Löschen der Rolle bestätigen müssen. </div> </div>
";
$txt['help_on_users'] = "<div class='ui-state-highlight ui-corner-all' style='padding:5px;font-weight:bold;'> Auf dieser Seite können Sie BENUTZER anlegen und verwalten.<br /> Jede Person, die TeamPass nutzen will, braucht ein Benutzerkonto.<br /> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>1. Schritt ist festzulegen, welche ROLLEN der Benutzer hat.<br /> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>2. Schritt ist es, dem Benutzer zusätzlich den Zugriff auf bestimmte Ordner zu erlauben oder zu verwehren. </div> <div id='accordion'> <h3><a href='#'>Neuen BENUTZER hinzufügen.</a></h3> <div> Klicken Sie auf das Symbol <img src='includes/images/user--plus.png' alt='' />. Es erscheint ein Dialogfenster, in dem Sie eingeben sollen:<br /> - den Benutzernamen<br /> - das Benutzerpasswort (kann automatisch erstellt werden und wird anschließend vom Benutzer bei der 1. Anmeldung geändert)<br /> - eine gültige email-Adresse<br /> - ob der Benutzer Administrator ist (mit Vollzugriff auf alle Funktionren)<br /> - ob der Benutzer Manager ist (mit Vollzugriff auf alle Elemente)<br /> - ob der Benutzer Persönliche Ordner haben darf</div> <h3><a href='#'>Eine ROLLE dem BENUTZER zuordnen</a></h3> <div> Sie können einem BENUTZER beliebig viele ROLLEN zuordnen. Hierzu klickken Sie auf das Symbol <img src='includes/images/cog_edit.png' alt='' />.<br /> Es erscheint ein Dialogfenster, in dem Sie die erwünschten ROLLEN für den Benutzer ankreuzen könnene.<br /><br /> Ist dem BENUTZER eine ROLLE zugeordnet, darf der Benutzer auf die der Rolle erlaubten Ordner zugreifen, auf die der Rolle verbotenen Ordner jedoch nicht .<br /><br /> Des Weiteren können Sie die Zugriffsrechte des BENUTZERS mittels der Zellen  'Sichtbare Ordner' und 'Unsichtbare Ordner' verfeinern. Dadurch können Sie bestimmte Ordner sogar über die zugeordneten ROLLEN hinaus erlauben oder verbieten. <div style='margin:2px Opx 0px 20px;'> Zum Beispiel: <p style='margin-left:20px;margin-top: 2px;'> - Dem BENUTZER1 ist ROLLE1 und ROLLE2 zugeordnet. <br /> - ROLLE1 hat Zugriff auf Ordner F1 und F2. <br /> - Ordner F1 hat 4 Unterordner S1, S2, S3 und S4.<br /> - Folglich hat BENUTZER1 Zugriff auf F1, F2, S1, S2, S3 und S4.<br /> - Sie können die Zugriffsrechte von BENUTZER1 anpassen, z.B. indem Sie den Zugriff auf S4 auf dieser Seite verbieten. </p> </div> </div> <h3><a href='#'>Ist Administrator (ALLMÄCHTIG)</a></h3> <div> Einem Benutzer können Sie die ADMINISTRATOR-Rechte erteilen. Hierzu kreuzen Sie die Zelle an.<br /> ADMINISTRATOR darf in TeamPass alles ohne Einschränkung durchführen... also Vorsicht!!!! <p style='text-align:center;'> <img src='includes/images/help/users_1.png' alt='' /> </p> </div> <h3><a href='#'>Ist Manager</a></h3> <div> Einem Benutzer können Sie die MANAGER-Rechte erteilen. Hierzu kreuzen Sie die Zelle an.<br /> Manager darf Elemente und Ordner ändern und löschen - sogar diejenige, die er nicht erstellt hat.<br /> Manager hat Zugriff nur auf ihm erlaubte Ordner. Sie können mehrere Manager für unterscheidliche Bereiche anlegen. <p style='text-align:center;'> <img src='includes/images/help/users_2.png' alt='' /> </p> </div> <h3><a href='#'>BENUTZER löschen</a></h3> <div> Sie können einen bestehenden Benutzer löschen. Klicken Sie auf das Symbol <img src='includes/images/user--minus.png' alt='' />. <p style='text-align:center;'> <img src='includes/images/help/users_3.png' alt='' /> </p> </div> <h3><a href='#'>Benutzerpasswort ändern</a></h3> <div> Sie können ein Benutzerpasswort ändern. Klicken Sie auf das Symbol <img src='includes/images/lock__pencil.png' alt='' />.<br /> Der Benutzer wird bei der nächsten Anmeldung das Passwort ändern müssen. <p style='text-align:center;'> <img src='includes/images/help/users_4.png' alt='' /> </p> </div> <h3><a href='#'>Email-Adresse ändern</a></h3> <div> Sie können die Email-Adresse des Benutzers ändern. Klicken Sie auf das Symbol <img src='includes/images/mail--pencil.png' alt='' />.<br /> <p style='text-align:center;'> <img src='includes/images/help/users_5.png' alt='' /> </p> </div> </div>";
