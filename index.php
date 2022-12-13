<?php
include __DIR__ . '/Models/Movies.php';
$avatar = new Movie('Avatar', " <br>Nel 2154 una compagnia interplanetaria terrestre, la RDA, è da alcuni anni all'opera su Pandora, un mondo primordiale ricoperto da foreste pluviali, le cui flora e fauna sono di dimensioni superiori rispetto a quelle terrestri. Tra le specie del pianeta ve n'è una di umanoidi chiamati Na'vi. Essendo l'atmosfera tossica per gli umani, sono stati sviluppati gli avatar, cioè ibridi creati in laboratorio con geni umani e geni Na'vi; ogni avatar può essere utilizzato e controllato solo dall'essere umano il cui DNA è stato impiegato per comporlo. Il collegamento viene effettuato grazie a una speciale capsula tecnologica, dove il soggetto trasferisce coscienza e anima nell'avatar.

La RDA è interessata ai ricchi giacimenti di unobtainium, un cristallo ferroso che sarebbe la risposta ai gravi problemi energetici della Terra. Un abbondante giacimento è situato sotto l'insediamento del clan Na'vi degli Omaticaya, l'Albero Casa, che la RDA ha tentato di far allontanare attivando il programma avatar, guidato dalla dottoressa Grace Augustine, che è riuscita a insegnare la lingua umana ai Na'vi e ad apprendere la loro cultura, ma i rapporti si sono guastati dopo alcuni incidenti e la via diplomatica viene criticata dal dirigente Parker Selfridge e dal colonnello Miles Quaritch. Intanto approda su Pandora l'ex marine invalido Jake Sully, che ha accettato di rimpiazzare il fratello gemello Tommy, uno scienziato a lungo addestratosi per pilotare un avatar ma che, poco prima di partire, è stato ucciso. Jake, lautamente pagato per sostituire Tommy, accetta l'offerta del colonnello Quaritch: in cambio di informazioni utili per un attacco militare, potrà sottoporsi a una costosa operazione chirurgica sulla Terra e riavere l'uso delle gambe.

Jake impara velocemente a controllare il proprio avatar e viene aggregato a una spedizione nella foresta con Grace, lo scienziato Norm Spellman e l'elicotterista Trudy Chacón. Il gruppo si imbatte in un Thanator, un feroce animale predatore, che attacca Jake, che si salva tuffandosi in un fiume, ma non riesce a ritrovare gli altri. Rimasto solo nella notte, Jake rischia di soccombere a un branco di Lupivipera, quando lo salva una guerriera Na'vi che lo stava spiando: è la principessa Neytiri degli Omaticaya, la quale si rivela capace di parlare la lingua umana, e dopo un segno di Eywa, la divinità panica venerata dagli indigeni, conduce Jake all'Albero Casa. Qui Jake dichiara al capoclan Eytucan e alla compagna sciamana Mo'at, genitori di Neytiri, di voler conoscere usi e costumi Na'vi e, nonostante la diffidenza del guerriero Tsu'tey, il promesso compagno di Neytiri, gli viene concesso di rimanere. Sotto la guida di Neytiri, comincia ad apprendere nozioni sul popolo dei Na'vi.

Il gruppo si trasferisce al sito 26, un campo avanzato dotato di capsule. In tre mesi Jake impara la lingua e le usanze Na'vi, diventando infine cacciatore dopo aver domato un Ikran; è così accolto dagli Omaticaya e corona anche il suo amore con Neytiri. A questo punto la sua determinazione nella missione per conto di Quaritch vacilla, tanto che arriva a mettere fuori uso uno dei bulldozer della RDA impegnato a radere al suolo alcuni alberi sacri. Scoperto dal colonnello e da Selfridge e riportato alla base RDA, Jake li convince a tentare un'estrema trattativa con gli Omaticaya mentre Quaritch parte alla volta dell'Albero Casa per distruggerlo. Jake, affiancato da Grace, rivela al clan il vero motivo della sua presenza, provando a convincere gli Omaticaya a lasciare il villaggio: considerato un traditore, viene ripudiato con Grace. Subito dopo Quaritch, giunto con la propria nave comando Dragon e un gruppo di elicotteri, abbatte l'Albero Casa e provoca la morte di Eytucan. Intanto, nella base, il marine viene scollegato dall'avatar e incarcerato con Grace e Norm.

Con l'aiuto di Trudy e dello scienziato Max Patel, i tre fuggono a bordo dell'elicottero, ma Grace rimane gravemente ferita. Giunti al sito 26, prelevano il modulo con le capsule spostandolo vicino all'Albero delle anime', il luogo più sacro agli Omaticaya. Jake decide di ritrovare il loro consenso compiendo un'impresa leggendaria: domare il Toruk/Leonopteryx, la più grande creatura volante su Pandora. Dopo esserci riuscito, Jake è riaccettato da Neytiri e dal clan e chiede aiuto per salvare Grace, la quale però muore nel corso del rituale. Jake raduna in un solo giorno quindici clan per combattere l'RDA. Nella battaglia finale, i Na'vi, dopo un iniziale successo, soccombono alla tecnologia nemica; Norm perde il suo avatar, Trudy viene abbattuta e Tsu'tey viene ucciso. Le creature di Pandora, però, influenzate dalla divinità Eywa, assaltano e sconfiggono gli umani; intanto, Jake distrugge il bombardiere sul punto di colpire l'Albero, per poi abbattere la Dragon. Quaritch combatte contro Jake con un esoscheletro da combattimento; inizialmente ha la meglio, ma, appena prima di ucciderlo, viene trafitto dalle frecce di Neytiri. I Na'vi raggiungono la base terrestre e impongono agli umani di lasciare Pandora; ad alcuni, tra cui Norm e Max, è concesso di rimanere. Jake, durante una cerimonia sacra con tutta la tribù sotto l'Albero delle Anime, lascia il suo corpo umano ed entra per sempre nel suo avatar.

", ' 2009', ['fantascienza', 'azione', 'avventura']);

echo 'Titolo :' . ' ' . $avatar->titolo;
echo ' <br> Descrizione del film :' . ' ' . $avatar->descrizione . '<br>';
echo '<br>Anno di Pubblicazione :' . ' ' . $avatar->uscita . '<br>';
echo '<br>Genere :' . ' ' . implode(' , ', $avatar->genere) . '<br>';
echo '<br>' . Movie::Mycinema() . '<br>';
echo '<br><br><br>';



$up = new Movie('UP', " <br>1939, Carl Fredricksen è un bambino che sogna di vivere mille avventure come il suo idolo, l'esploratore Charles Muntz, accompagnato da dei cani che lui stesso ha addestrato, viaggia per il mondo alla ricerca di animali rari. Mentre corre per la strada con il suo palloncino blu, Carl sente una voce provenire da una vecchia casa abbandonata: in quello che dovrebbe essere il soggiorno incontra Ellie, una bambina anch'essa appassionata delle storie dell'esploratore Muntz. Ellie desidera raggiungere le Cascate Paradiso, il luogo in cui l'esploratore sosteneva di aver recuperato lo scheletro di un uccello gigante, rivelatosi poi un falso. Quella sera Ellie fa giurare a Carl di portarla con tutta la casa alle Cascate Paradiso.

Passano gli anni, Carl e Ellie si sposano, trasferendosi nella casa in cui andavano a giocare quando erano bambini e trovando lavoro allo zoo della città. I due desiderano avere un figlio, ma sfortunatamente il ginecologo spiega loro che Ellie non può fare bambini perché ha subito un aborto spontaneo ed è sterile. Carl ed Ellie cercano di mettere da parte i soldi per il viaggio in Sud America, purtroppo però la coppia deve continuamente annullare il viaggio per colpa delle bollette, delle riparazioni, delle spese mediche e degli acciacchi dell'età, ma senza mai perdere la felicità. Quando ormai lui e la moglie sono anziani, Carl riesce finalmente a comprare i biglietti per il Sud America con i soldi della pensione, ma mentre sta per mostrare i biglietti ad Ellie, quest'ultima si ammala gravemente e muore in ospedale.

Alcuni anni dopo, Carl vive da solo nella stessa casa, che ora si trova all'interno di un cantiere edile. Un giorno, Carl riceve la visita di Russell, un bambino scout che desidera aiutarlo per ottenere il distintivo-scout di assistenza agli anziani che gli permetterebbe di completare il suo medagliere e di ricevere le attenzioni di suo padre, che è sempre in viaggio per motivi di lavoro; ma Carl lo allontana con una scusa. Poco dopo però, un bulldozer urta involontariamente la cassetta della posta di Carl; un operaio cerca di ripararla, ma il furibondo Carl lo colpisce alla testa con una bastonata. A causa di ciò, Carl viene portato in tribunale e il giudice lo obbliga al ricovero in casa di riposo. Il giorno dopo, due infermieri vengono a prendere Carl, ma il vecchio riesce a fuggire collegando milioni di palloncini al camino che fanno volare via la casa.

Durante il volo, bussa alla sua porta Russell, che era rimasto bloccato sulla veranda e non aveva fatto in tempo a scendere. Così Carl è costretto a farlo entrare ed insieme a lui arriva in Sudamerica in prossimità delle cascate. Arrivati a destinazione, Carl e Russell incontrano un gigantesco uccello colorato, simile ad uno struzzo e incapace di volare, che Russell chiama Kevin, e Dug, un cane dotato di un collare che gli consente di parlare, che si affeziona a Carl e a Russell.

Dug si mette in viaggio insieme ai due, pensando così di prendere Kevin come prigioniero. Dopo aver fatto un po' di strada, Kevin scappa via, tornando dai suoi piccoli. Improvvisamente, Carl e Russell vengono attaccati da Alfa, Beta e Gamma, tre cani che come Dug possiedono dei collari parlanti, che portano i due umani dal loro padrone. Carl scopre così che i cani appartengono a Charles Muntz, il suo idolo ormai novantaduenne, che grazie a quei collari è riuscito a far evolvere i propri cani. Muntz li invita a cena nel suo dirigibile e racconta di essere sempre rimasto in quel luogo per cercare di catturare l'uccello misterioso, la cui casa è situata dentro a un labirinto di rocce avvolte da una fitta nebbia, da cui è impossibile uscire e lì Muntz ci ha perso alcuni dei suoi cani.

Mentre sono nella sala da pranzo, Carl scopre con orrore e sgomento che Muntz sta dando la caccia proprio alla specie a cui appartiene Kevin e che a causa di questa sua ossessione, ha ucciso molti altri esploratori pensando che volessero appropriarsi della sua preda. Purtroppo Muntz si accorge che Kevin è sul tetto della casa di Carl e ordina ai suoi cani di inseguire Carl e Russell per ucciderli e avere finalmente l'uccello. Con l'aiuto di Kevin e Dug, Carl e Russell riescono a scappare e a salvarsi. Ma nell'inseguimento Kevin viene morsa da Alfa, così Russell le fascia la zampa destra per poi aiutarla a tornare a casa dai suoi piccoli. Nel frattempo, Muntz ne approfitta per usare Carl in modo da arrivare a Kevin: infatti, mentre Kevin apparentemente libera si dirige verso la sua tana, arriva Muntz a bordo del suo dirigibile, che intrappola l'uccello e dà fuoco alla casa di Carl, costringendolo a scegliere tra la sua abitazione e Kevin. Il vecchio salva la casa mentre Muntz cattura Kevin e se la porta via. Carl riparte per le cascate, seguito da Russell, che è triste e deluso con Carl perché non è riuscito a salvare Kevin.

I due arrivano con la casa in cima alle cascate, invece Russell che è ancora arrabbiato, rimane fuori con Dug. Mentre entra in casa depresso, Carl prende il libro delle avventure lasciatole da Ellie e inizia a sfogliarlo sconsolato, perché non è riuscito a condividere l'esperienza con Ellie. Una volta arrivato all'ultima pagina dell'album, Carl legge una dedica che Ellie gli ha lasciato pochi giorni prima di morire: Grazie per l'avventura. Ora va', e vivine un'altra. Sollevato, Carl ne approfitta per andare a salvare Kevin, ma quando sta per dirlo a Russell, il bambino stacca molti palloncini dalla casa e li usa per raggiungere il dirigibile di Muntz. Carl, svuotando la casa per renderla più leggera, lo segue subito dopo, insieme a Dug, che si era nascosto sotto il portico. Russell nel frattempo raggiunge le nuvole ed entra nel dirigibile, ma viene catturato e fatto prigioniero da Alfa,Beta e Gamma.

Dopo aver salvato Russell, Carl e Dug liberano Kevin. In quel momento, Carl e Muntz si incontrano e si affrontano in un duello, mentre Dug combatte contro i cani e Russell cerca di pilotare la casa di Carl per aiutarlo. Durante la lotta, Muntz spara ai palloncini facendo cadere la casa con il bambino, l'uccello e il cane, che però riescono a salvarsi, mentre la casa sparisce tra le nuvole. Ma allo stesso tempo Carl è sereno, perché i ricordi di Ellie gli rimangono nel cuore e non in quella casa. Anche i cani sono diventati amici di Carl grazie al fatto che Dug è divenuto il loro capo. Invece Muntz nel tentativo di uccidere Russell e afferrare Kevin alla fune, si impiglia negli ultimi palloncini rimasti in cielo. Essi, poco dopo, si staccano e Muntz precipita nel vuoto, perdendo la vita. Così Carl, Russell e Dug riportano Kevin dai suoi piccoli, dopodiché prendono il dirigibile di Muntz e tornano nel New Hampshire con Dug e gli altri cani.

Grazie a Carl, Russell riesce poi a ottenere il distintivo che desiderava, e anche una spilla che Carl gli dona è quella che lui ed Ellie usavano da bambini. Da quel giorno, Carl vive nel dirigibile insieme a Russell e Dug, godendosi una nuova fase della sua vita. Inoltre la casa di Carl è atterrata a sua insaputa proprio a fianco della cascata, come desiderava Ellie da bambina.

", '2009', ['commedia', 'animazione', 'drammatico', 'avventura']);

echo ' <br>Titolo :' . ' ' . $up->titolo . '<br>';
echo ' <br> Descrizione del film :' . ' ' . $up->descrizione . '<br>';
echo '<br>Anno di Pubblicazione :' . ' ' . $up->uscita . '<br>';
echo '<br>Genere :' . ' ' . implode(' , ', $up->genere) . '<br>';
echo '<br>' . Movie::Mycinema() . '<br>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <h2>
                <?php echo 'Titolo :' . ' ' . $avatar->titolo; ?>
            </h2>
            <p>
                <?php echo ' <br> Descrizione del film :' . ' ' . $up->descrizione . '<br>'; ?>
            </p>
            <p>
                <?php echo '<br>Anno di Pubblicazione :' . ' ' . $up->uscita . '<br>'; ?>
            </p>

            <p>
                <?php echo '<br>Genere :' . ' ' . implode(' , ', $up->genere) . '<br>'; ?>
            </p>
            <p>
                <?php echo '<br>' . Movie::Mycinema() . '<br>'; ?>
            </p>


        </div>
    </div>
</body>

</html>