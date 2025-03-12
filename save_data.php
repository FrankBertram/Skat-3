<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $json = file_get_contents("php://input");
        $data = json_decode($json, true);

        if ($data && isset($data['data'])) {
            $content = json_encode($data['data'], JSON_PRETTY_PRINT);
            file_put_contents("data.txt", $content);
            echo "Daten erfolgreich gespeichert!";
        } else {
            echo "Fehler: Ungültige Daten empfangen.";
        }
    } else {
        echo "Nur POST-Anfragen sind erlaubt.";
    }
?>