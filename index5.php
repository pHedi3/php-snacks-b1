<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $text = "La data di nascita secondo la carta d'identità ufficiale è il 3 giugno 1934 nel cortometraggio animato The Wise Little Hen (La gallinella saggia),[7] stato civile, celibe con a carico tre nipoti. È un papero bianco con becco e zampe arancioni. Solitamente indossa una blusa e un berretto da marinaio. Secondo l'albero genealogico ideato da Don Rosa in base alle indicazioni contenute nelle storie a fumetti di Carl Barks è figlio di Ortensia de' Paperoni (sorella di Paperon de' Paperoni) e Quackmore Duck (figlio di Nonna Papera). Ha una sorella gemella, Della Duck, madre di Qui, Quo, Qua[8]. La prima apparizione del personaggio risale al 1934 nel cortometraggio La gallinella saggia diretto da Wilfred Jackson nel quale Paperino è il vicepresidente del Circolo dei pigri che ha come presidente Meo Porcello. I due si riveleranno degli inguaribili scansafatiche[9].
    Paperino, già nei cortometraggi da protagonista, ma soprattutto nei fumetti, presenta un carattere complesso e sfaccettato, più di quello di Topolino, motivo per cui è agevolmente considerato lo specchio dell'uomo moderno[10]. Nasce come pigro scansafatiche, caratterizzato però fin dalla sua seconda apparizione in Una serata di beneficenza (1934) con l'essere irascibile, frustrato e perseguitato dalla sfortuna, infatti quasi ogni azione che intraprende finisce per causargli danni o problemi. Nonostante l'indole suscettibile e l'inettitudine, è però un personaggio positivo, perché ha buon cuore e raramente provoca qualcuno senza motivo. È amichevole, generoso e leale, e quando la situazione lo richiede è estremamente coraggioso fino a vestire i panni dell'eroe.
    Paperino vive a Paperopoli (Duckburg), in una villetta a due piani con giardino, che però è in affitto (generalmente di proprietà del ricchissimo zio Paperon de' Paperoni), e si occupa dei tre nipotini gemelli che vivono con lui; è fidanzato con Paperina, pur con alti e bassi, e possiede diversi cugini che lo assillano, ma soprattutto è gravato da orde di creditori, e persino con lo zio ha una lunga lista di debiti; privo di impiego fisso, si trova spesso in difficoltà economiche e, complice la sua congenita sfortuna aggravata dall'inettitudine, pur riuscendo per poco a superarle si ritrova in guai ancora peggiori da una storia all'altra. I suoi impieghi più costanti sono quelli di giornalista presso il quotidiano Papersera o lucidatore di monete sempre al servizio dello zio, ma ne ha svolti saltuariamente a centinaia, e inoltre conduce/ha condotto attività segrete come agente della P.I.A. o come DoubleDuck, oltre a celare l'identità segreta di Paperinik.";
    echo   $text;

    echo '<p>' . str_replace('. ', '.</p><p>', $text);
    
    ?>
</body>
</html>