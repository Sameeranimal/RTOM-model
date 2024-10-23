<?php

$mysqli = require __DIR__ . "/database.php";


$departments = get_departments($mysqli);

$capabilities=get_capabilities( $mysqli);




$scenarios = get_scenarios($mysqli);
?>



<head></head>
    <!-- <script src="RTOM.js"></script> -->
    <link rel="stylesheet" href="RTOM.css">
</head>
<body>
    
<section class="info">
    <article>
        <a href="index.php">
        <img src="morphe.png" class="blockLogo">
        </a>
        <?php foreach ($departments as $department): ?>
            <p class="blockRegie mid"><?php echo $department ['department_name']?></p>
        <?php endforeach ?>
        <!-- <p class="blockRegie mid"><strong>REGIE &<br>SUPPORT</strong></p>
        <p class="blockService mid"><strong>SERVICE INTEGRATIE & OPERATIONS</strong></p>
        <p class="blockHub mid"><strong>SERVICE INTEGRATION HUB</strong></p>
        <p class="blockInt mid"><strong>INTEGRATIE / KOPPELVLAKKEN</strong></p> -->
    </article>
    <article id="block1">
        <p class="blockBoven mid"><strong>Strategy to Portfolio<br>(Plan)</strong></p>
        <div class="blokTwee">
        <article>
            <p id="Beschrijving1" class="blockInfo  een">Relatie-<br>management</p>
            <p id="Beschrijving2" class="blockInfo een ">Demand<br>Management</p>
            <p id="Beschrijving3" class="blockInfo een  ">Service<br>Portfolio<br>management</p>
            <p class="blockGeen wit"></p>
            <p class="blockGeen wit"></p>
            <p class="blockGeen wit"></p>
            <p class="blockGeen wit"></p>
            <p class="blockGeen wit"></p>
            <p class="blockGeen wit"></p>
            <p class="blockGeen wit"></p>
            <p class="blockGeen wit"></p>
            <p class="blockGeen wit"></p>
        </article>
        <article>
            <p class="blockInfo  een">Strategie-<br>management</p>
            <p class="blockInfo een ">Portfolio Backlog<br>Management</p>
            <p class="blockInfo een ">Applicatie<br>portfolio<br>management</p>
            <p class="blockGeen wit"></p>
            <p class="blockGeen wit"></p>
            <p class="blockGeen wit"></p>
            <p class="blockGeen wit"></p>
            <p class="blockGeen wit"></p>
            <p class="blockGeen wit"></p>
            <p class="blockGeen wit"></p>
            <p class="blockInfo  vier">Portfolio Backlog<br>Management</p>
            <p class="blockGeen wit"></p>
        </article>
    </article>
</div>
    <article class="" id="block2">
        <p class="blockBoven mid "><strong>Requirement to<br>Deploy<br>(Develop)</strong></p>
        <div class="blokTwee">
            <article>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockInfo  twee">Business<br>Application</p>
                <p class="blockInfo twee oorzaakTwee2 oorzaakDrie">Infra. Platform</p>
                <p class="blockInfo drie  ">Backlog Management</p>
                <p class="blockInfo  drie">Design</p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockInfo vier ">Backlog<br>Management</p>
                <p class="blockInfo  vier ">Design</p>
                <p class="blockInfo vier ">Development</p>
            </article>
            <article>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockInfo twee ">Enablement</p>
                <p class="blockInfo  twee">Application<br>Platform</p>
                <p class="blockInfo drie ">Test<br>Management</p>
                <p class="blockInfo  drie">Development</p>
                <p class="blockInfo drie ">Release<br>Management</p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
            </article>
        </article>
    </div>
    <article class="" id="block3">
        <p class="blockBoven mid"><strong>Request to Fulfill<br>(Deliver)</strong></p>
        <div class="blokTwee">
            <article>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockInfo twee ">Service Transition</p>
                <p class="blockInfo drie ">Service catalolgus<br>management</p>
                <p class="blockInfo  drie">Change<br>Management</p>
                <p class="blockInfo drie ">Deployment</p>
                <p class="blockGeen wit"></p>
                <p class="blockInfo  vier">Identify &<br>Access intergratie</p>
                <p class="blockInfo vier ">Request<br>Fulfillment<br>integratie</p>
                <p class="blockInfo vier oorzaakDrie">Deployment<br>integratie</p>
            </article>
            <article>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockInfo drie ">Request<br>Fulfillment</p>
                <p class="blockInfo drie oorzaakEen des3">Identify &<br>Access<br>Management</p>
                <p class="blockInfo drie  ">Capaciteits- &<br>performance<br>management</p>
                <p class="blockGeen wit"></p>
                <p class="blockInfo vier ">Capaciteits- &<br>performance</p>
                <p class="blockInfo vier ">Change Integratie</p>
                <p class="blockGeen wit"></p>
            </article>
        </article>
    </div>
    <article class="" id="block4">
        <p class="blockBoven mid"><strong>Detect to Correct<br>(Run)</strong></p>
        <div class="blokTwee">
            <article>
                <p class="blockInfo een oorzaakVier">Service level<br>management</p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockInfo half twee oorzaakTwee">Master Control Room</p>
                <p class="blockInfo half twee ">Ketenregie</p>
                <p class="blockInfo half twee ">SRE</p>
                <p class="blockInfo drie ">Gebruikers-<br>ondersteuning</p>
                <p class="blockInfo drie oorzaakTwee">Probleem<br>management</p>
                <p class="blockInfo  drie">Configuratie-<br>management</p>
                <p class="blockInfo drie ">Software asset<br>management</p>
                <p class="blockInfo vier ">Configuratie-<br>management &<br>Discovery</p>
                <p class="blockInfo  vier">Backup / Data<br>Protection</p>
                <p class="blockInfo vier ">Security Operations<br>(bijv.<br>vulnerabilities)</p>
            </article>
            <article> 
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockInfo half twee oorzaakEen2 des2">Service Desk</p>
                <p class="blockInfo half twee ">DevOps &<br>Platform</p>
                <p class="blockInfo half twee ">SOC</p>
                <p class="blockInfo drie oorzaakTwee">Incident<br>management</p>
                <p class="blockInfo oorzaakEen drie des4">Monitoring &<br>Event Management</p>
                <p class="blockInfo drie ">Security<br>Operations</p>
                <p class="blockInfo drie ">Operations<br>Management</p>
                <p class="blockInfo vier oorzaakEen2 oorzaakDrie2 oorzaakVier2 des5">Problem Exchange</p>
                <p class="blockInfo vier oorzaakTwee2">Incident Exchange</p>
                <p class="blockInfo vier ">Monitoring &<br>Event</p>
            </article>
        </article>
    </div>
    <article class="" id="block5">
        <p class="blockBoven mid"><strong>Supporting</strong></p>
        <div class="blokTwee">
            <article>
                <p class="blockInfo een ">Risk & Compliance<br>management</p>
                <p class="blockInfo een ">Leveranciers-&<br>contract<br>management</p>
                <p class="blockInfo een oorzaakVier2">Meten &<br>Rapporteren</p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockInfo  drie ">Kennis-<br>management</p>
                <p class="blockInfo drie oorzaakDrie2">Continuiteits-<br>management</p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockInfo vier ">Consumptie &<br>Kosten</p>
                <p class="blockInfo vier ">Kennis-<br>uitwisseling</p>
                <p class="blockGeen wit"></p>
            </article>
            <article>
                <p class="blockInfo half2 een ">Financieel-<br>management</p>
                <p class="blockInfo half2 een ">Architectuur-<br>management</p>
                <p class="blockInfo half2 een ">Personeels-<br>management</p>
                <p class="blockInfo half2 een oorzaakEen des1">IT Proces<br>management</p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockInfo drie oorzaakDrie">Collaboration &<br>Communication</p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockGeen wit"></p>
                <p class="blockInfo  vier">Risk &<br>Compliance</p>
                <p class="blockInfo vier ">Service<br>Rapportage<br>Interface</p>
                <p class="blockGeen wit"></p>
            </article>
        </article>
    </div>
    <article>
        <p class="block mid"><strong>Problem Case</strong></p>
        <?php foreach ($scenarios as $scenario): ?>
            <p class="block probleem1 mid" style="color: black;"><?php echo $scenario ['scenario_name'] ?></p>
        <?php endforeach ?>
<!--        
        <p class="block probleem1 mid not-text" onclick="highlightBlocks()"><strong>Mobiele ticketscanners van conducteurs zijn offline.</strong></p>
        <p class="block probleem2 mid not-text" onclick="highlightBlocks2()"><strong>Aanrijding op het spoor</strong></p>
        <p class="block probleem3 mid not-text" onclick="highlightBlocks3()"><strong>Stoplicht defect</strong></p>
        <p class="block probleem4 mid not-text" onclick="highlightBlocks4()"><strong>Vertraging</strong></p> -->
    </article>
</section>

<button class="btn1" onclick="history.back()">Go Back</button>

<div class="sidenav">
  <a href="addcase.php">Add: <br>case</a>
  <a href="addcapability.php">Add: capability</a>
  <a href="adddepartment.php">Add: department</a>
</div>
 

</body>