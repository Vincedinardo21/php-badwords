<?php
    $testo = "In fisica delle particelle, il quark è una particella elementare, costituente fondamentale della materia. A causa di un fenomeno conosciuto come confinamento, i quark non sono mai osservabili individualmente in natura a basse energie ma esistono solo come costituenti di particelle composte dette adroni, le cui forme più stabili, i protoni e i neutroni, sono i componenti dei nuclei atomici; per questo molto di quello che si conosce sui quark è dedotto da esperimenti che coinvolgono questo tipo di particelle. I quark hanno varie proprietà intrinseche, tra cui massa, carica elettrica, carica di colore e spin. Sono le uniche particelle elementari del modello standard a prendere parte a tutte e quattro le interazioni fondamentali (elettromagnetica, gravitazionale, forte e debole), nonché le uniche particelle la cui carica elettrica non è un multiplo intero della carica elementare. Ci sono sei tipi di quark, che hanno diversi sapori: up, down, strange, charm, bottom e top. I quark up e down, i più comuni nell'universo, hanno una massa minore rispetto agli altri e sono generalmente i più stabili; per questo i quark strange, charm, bottom e top decadono rapidamente in quark up e down e possono essere prodotti esclusivamente in reazioni e collisioni ad alta energia, come quelle negli acceleratori di particelle o che coinvolgono i raggi cosmici. Per ogni tipo di quark c'è un corrispondente tipo di antiparticella, detta antiquark, che differisce dal quark solo per alcune proprietà (come la carica elettrica) che hanno lo stesso modulo ma segno opposto. I quark furono introdotti come parte di uno schema di classificazione degli adroni, il modello a quark, che fu proposto indipendentemente dai fisici Murray Gell-Mann e George Zweig nel 1964. Inizialmente vi erano poche prove che confermassero la presenza di queste particelle, ma esperimenti di scattering anelastici profondi presso lo Stanford Linear Accelerator Center nel 1968 ne dimostrarono l'esistenza. Col tempo, vari esperimenti condotti in acceleratori di particelle hanno verificato i sei sapori di quark che oggi conosciamo; l'ultimo a essere scoperto è stato il quark top, osservato per la prima volta al Fermilab nel 1995.";

    $testoCensured = str_replace("quark", "***", $testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpProj</title>
</head>
<body>
    <h1>I quark (Testo incensurato)</h1>
    <p><?=$testo?></p>
    <div>Lunghezza paragrafo: <?=strlen($testo)?></div>

    <h2>Testo censurato</h2>
    <p><?=$testoCensured?></p>
    <div>Lunghezza paragrafo: <?=strlen($testoCensured)?></div>
</body>
</html>