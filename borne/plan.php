<?php
if(isset($_POST['supprimer']) && isset($_POST['texte'])){
    unset($POST_['texte']);
}
if(isset($_POST['texte']) && $_POST['texte']==''){
    unset($_POST['texte']);
}
?>
<!DOCTYPE html>
<html lang="fr">
    
  <head>

    <title>Plan</title>
      
    <!-- Définition des meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Chargement du CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico" >
    
  </head>
    
  <body>
    <div class="text-center"> <!-- Création du corps de la page -->
        <div class="row menu">
            <div class="col-xl-3 col-md-3 "><a href="index.html"><img src="image/Convention-BLANC.png" class="logo" alt="logo"></a></div>
            <div class="col-xl-3 col-md-3 d-flex align-items-center justify-content-center"><button onclick="location.href='index.html'" type="button" class="btn btn-primary bouton">ACTUS</button></div>
            <div class="col-xl-3 col-md-3 d-flex align-items-center justify-content-center"><button onclick="location.href='#'" type="button" class="btn btn-primary bouton boutonplan">PLAN</button></div>
            <div class="col-xl-3 col-md-3 heure d-flex align-items-center"><p id="div_horloge"></p></div>
            
        
        
        
        
        </div>
        <div class="row liste">
            <div class="col-xl-7 col-xs-7 col-md-7">
               <svg id="Carte" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 595.28 841.89">
                <defs>
                    <style>.cls-1,.cls-3{fill:#161313;}.cls-1{stroke:#161313;}.cls-1,.cls-2,.cls-3{stroke-miterlimit:10;}.cls-2{fill:none;}.cls-2,.cls-3{stroke:#224191; stroke-width:4px;}.cls-4{font-size:19.13px;fill:#fff;font-family:Roboto-Medium, Roboto;}.cls-5{letter-spacing:-0.01em;}.cls-6{fill:#febc35;}
                    </style>
                    <image id="image" width="50" height="50" xlink:href="image/icons8-escalator-50.png"/>
                    <image id="image-2" width="50" height="50" xlink:href="image/icons8-toilettes-50.png"/>
                    <image id="image-3" width="50" height="50" xlink:href="image/icons8-flèche-haut-50.png"/>
                    <image id="image-4" width="50" height="50" xlink:href="image/icons8-montée-d&apos;escaliers-50.png"/>
                    <image id="image-5" width="50" height="50" xlink:href="image/icons8-nourriture-filled-50.png"/>
                    <image id="image-6" width="970" height="1000" xlink:href="image/pacman2.png"/>
                    <image id="image-7" width="240" height="240" xlink:href="image/fantomes_pacman.png"/>
                </defs>
                <rect id="Fond" class="cls-1" x="-2.5" y="-0.5" width="598" height="849"/>
                <g id="Contour2">
                    <polygon class="cls-2" points="515.5 178.5 515.5 110.5 480.5 110.5 480.5 8.5 203.5 8.5 203.5 110.5 152.5 110.5 152.5 136.5 76.5 136.5 76.5 223.5 3.5 224.5 3.5 760.5 193.5 760.5 193.5 836.5 537.5 836.5 537.5 760.5 591.5 760.5 592.5 178.5 515.5 178.5"/>
                </g>
                <polygon id="Contour" class="cls-2" points="587 183.07 510.31 183.07 510.83 114.95 476.96 114.95 476.21 113.42 476.21 12 207.21 12.51 207.21 113.93 157.14 113.93 157.14 140.05 79.91 140.05 79.91 227.12 8 227.63 8 756.22 198.69 756.22 198.69 831 531.07 831 530.54 755.71 587 755.71 587 183.07"/>
                <g id="Stands">
                    <rect id="s1" data-name="1" class="cls-3" x="37.5" y="574.5" width="174" height="91" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s2" data-name="2" class="cls-3" x="180.5" y="672.5" width="63" height="64" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s3" data-name="3" class="cls-3" x="285.5" y="574.5" width="57" height="41" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s4" data-name="4" class="cls-3" x="352.5" y="574.5" width="35" height="41" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s5" data-name="5" class="cls-3" x="285.5" y="623.5" width="57" height="57" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s6" data-name="6" class="cls-3" x="352.5" y="623.5" width="35" height="57" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s7" data-name="7" class="cls-3" x="285.5" y="688.5" width="101" height="47" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s8" data-name="8" class="cls-3" x="430.5" y="574.5" width="48" height="25" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s8" data-name="8" class="cls-3" x="487.5" y="574.5" width="71" height="25" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s9" data-name="9" class="cls-3" x="430.5" y="606.5" width="48" height="72" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s10" data-name="10" class="cls-3" x="486.5" y="606.5" width="72" height="71" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s11" data-name="11" class="cls-3" x="430.5" y="688.5" width="48" height="21" rx="10.5" ry="10.5" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s12" data-name="12" class="cls-3" x="487.5" y="683.5" width="32" height="52" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s13" data-name="13" class="cls-3" x="526.5" y="683.5" width="32" height="52" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s14" data-name="14" class="cls-3" x="430.5" y="715.5" width="48" height="21" rx="10.5" ry="10.5" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s15" data-name="15" class="cls-3" x="37.5" y="445.5" width="42" height="92" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s16" data-name="16" class="cls-3" x="86.5" y="445.5" width="75" height="92" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s17" data-name="17" class="cls-3" x="169.5" y="445.5" width="73" height="92" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s18" data-name="18" class="cls-3" x="285.5" y="444.5" width="102" height="16" rx="8" ry="8" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s19" data-name="19" class="cls-3" x="284.5" y="466.5" width="48" height="50" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s20" data-name="20" class="cls-3" x="338.5" y="466.5" width="48" height="50" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s21" data-name="21" class="cls-3" x="285.5" y="521.5" width="102" height="16" rx="8" ry="8" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s22" data-name="22" class="cls-3" x="430.5" y="445.5" width="76" height="92" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s23" data-name="23" class="cls-3" x="515.5" y="445.5" width="42" height="92" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s24" data-name="24" class="cls-3" x="37.5" y="343.5" width="91" height="65" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s25" data-name="25" class="cls-3" x="136.5" y="343.5" width="36" height="65" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s100" data-name="100" class="cls-3" x="179.5" y="343.5" width="63" height="65" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s27" data-name="27" class="cls-3" x="285.5" y="370.5" width="102" height="37" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s26" data-name="26" class="cls-3" x="285.5" y="343.5" width="102" height="20" rx="10" ry="10" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s101" dataname="101" class="cls-3" x="429.5" y="343.5" width="63" height="64" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s28" data-name="28" class="cls-3" x="502.5" y="343.5" width="55" height="64" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <path id="s29" data-name="29" class="cls-3" d="M230.5,132.5h-39a12,12,0,0,0-12,12v13h-60a12,12,0,0,0-12,12v41a12,12,0,0,0,12,12h70c.34,0,.67,0,1-.05s.66.05,1,.05h39a12,12,0,0,0,12-12v-66A12,12,0,0,0,230.5,132.5Z" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s30" data-name="30" class="cls-3" x="36.5" y="237.5" width="206" height="69" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s31" data-name="31" class="cls-3" x="284.5" y="131.5" width="103" height="97" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s32" data-name="32" class="cls-3" x="284.5" y="237.5" width="63" height="69" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s33" data-name="33" class="cls-3" x="356.5" y="237.5" width="31" height="68" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s34" data-name="34" class="cls-3" x="429.5" y="132.5" width="61" height="54" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s35" data-name="35" class="cls-3" x="456.5" y="197.5" width="102" height="75" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s36" data-name="36" class="cls-3" x="429.5" y="280.5" width="129" height="26" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="Escalator" class="cls-3" x="435.5" y="23.5" width="27" height="99" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="s37" data-name="37" class="cls-3" x="258.5" y="23.5" width="155" height="94" rx="12" ry="12" onClick="animation(this.id);affichagecarte(this.id);"/>
                    <rect id="Escalator2" data-name="Escalator" class="cls-3" x="215.5" y="23.5" width="27" height="99" rx="12" ry="12" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <use id="Logo_Escalator" transform="translate(219 61) scale(0.42)" xlink:href="#image"/>
                    <use id="Logo_Escalator2" data-name="Logo_Escalator" transform="translate(439 61) scale(0.42)" xlink:href="#image" onclick="animation(this.id);affichagecarte(this.id);"/>
                    <use id="Logo_Escalator3" data-name="Logo_Escalator" transform="translate(264 794) scale(0.42)" xlink:href="#image"/>
                    <use id="Logo_Escalator4" data-name="Logo_Escalator" transform="translate(413 794) scale(0.42)" xlink:href="#image"/>
                    <image id="Logo_Infirmerie" width="50" height="50" transform="translate(505 625) scale(0.7)" xlink:href="image/icons8-hôpital-50.png"/>
                    <image id="Logo_Information" width="50" height="50" transform="translate(491 696) scale(0.54)" xlink:href="image/icons8-information-50.png"/>
                    <use id="Logo_Toilettes" transform="translate(215 351) scale(0.42)" xlink:href="#image-2"/>
                    <use id="Logo_Escalator-5" data-name="Logo_Escalator" transform="translate(442 366) scale(0.38)" xlink:href="#image"/>
                    <use id="Logo_Escalator-6" data-name="Logo_Escalator" transform="translate(189 372) scale(0.38)" xlink:href="#image"/>
                    <use id="Logo_Toilettes-2" data-name="Logo_Toilettes" transform="translate(465 351) scale(0.4)" xlink:href="#image-2"/>
                    <use id="Logo_Flèche" transform="translate(398 736) scale(0.6)" xlink:href="#image-3"/>
                    <use id="Logo_Flèche-2" data-name="Logo_Flèche" transform="translate(249 736) scale(0.6)" xlink:href="#image-3"/>
                    <use id="Logo_Escaliers" transform="translate(244 793) scale(0.4)" xlink:href="#image-4"/>
                    <use id="Logo_Escaliers-2" data-name="Logo_Escaliers" transform="translate(393 793) scale(0.4)" xlink:href="#image-4"/>
                    <text class="cls-4" transform="translate(309 777.84)">Ent<tspan class="cls-5" x="27.98" y="0">r</tspan><tspan x="34.51" y="0">ée</tspan></text>
                    <use id="Logo_Restauration" transform="translate(318 51) scale(0.7)" xlink:href="#image-5"/>
                    <use id="Logo_Restauration-2" data-name="Logo_Restauration" transform="translate(466 382) scale(0.36)" xlink:href="#image-5"/>
                </g>
                <g id="Effet_clique">
                    <animate xlink:href="#image-6" attributeName="x" from="250" to="1110" begin="0s" dur="1.5s" repeatCount="indefinite"></animate>  
                    <animate xlink:href="#image-7" attributeName="width" from="140" to="380" dur="1.5s" repeatCount="indefinite"></animate>
                    <g id="Stand_1">
                        <g id="Anim_stand_1-1"><circle class="cls-6" cx="220" cy="621" r="3"/></g>
                        <g id="Anim_stand_1-2" data-name="Rond_31"><circle class="cls-6" cx="212" cy="621" r="3"/> </g>
                        <g id="Anim_stand_1-3" data-name="Rond_31"><circle class="cls-6" cx="204" cy="621" r="3"/></g>
                        <use id="Anim_stand_1-4" transform="matrix(-0.03, 0, 0, 0.03, 255, 607)" xlink:href="#image-6"/>
                        <use id="Anim_stand_1-5" data-name="Anim_stand_1" transform="translate(99 595) scale(0.21)" xlink:href="#image-7"/>
                        
                    </g>
                    <g id="Stand_2">
                        <g id="Anim_stand_2-1" data-name="Rond_31"><circle class="cls-6" cx="252" cy="703" r="3"/></g>
                        <g id="Anim_stand_2-2" data-name="Rond_31"><circle class="cls-6" cx="244" cy="703" r="3"/></g>
                        <g id="Anim_stand_2-3" data-name="Rond_31"><circle class="cls-6" cx="236" cy="703" r="3"/></g>
                        <use id="Anim_stand_2-4" transform="matrix(-0.03, 0, 0, 0.03, 290, 688)" xlink:href="#image-6"/>
                        <use id="Anim_stand_2-5" transform="translate(196 689) scale(0.13)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_3">
                        <g id="Anim_stand_3-1"><circle class="cls-6" cx="293" cy="595" r="3"/></g>
                        <g id="Anim_stand_3-2" data-name="Rond_5"><circle class="cls-6" cx="285" cy="595" r="3"/></g>
                        <g id="Anim_stand_3-3" data-name="Rond_5"><circle class="cls-6" cx="277" cy="595" r="3"/></g>
                        <use id="Anim_stand_3-4" transform="translate(240 580) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_3-5" transform="translate(303 582) scale(0.11)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_4">
                        <use id="Anim_stand_4-1" transform="translate(353 583) scale(0.1)" xlink:href="#image-7"/>
                        <g id="Anim_stand_4-2"><circle class="cls-6" cx="395" cy="594" r="3"/></g>
                        <g id="Anim_stand_4-3" data-name="Rond_6"><circle class="cls-6" cx="387" cy="594" r="3"/></g>
                        <g id="Anim_stand_4-4" data-name="Rond_6"><circle class="cls-6" cx="379" cy="594" r="3"/></g>
                        <use id="Anim_stand_4-5" transform="matrix(-0.03, 0, 0, 0.03, 430, 579)" xlink:href="#image-6"/>
                    </g>
                    <g id="Stand_5">
                        <g id="Anim_stand_5-1"><circle class="cls-6" cx="293" cy="652" r="3"/></g>
                        <g id="Anim_stand_5-2" data-name="Rond_35"><circle class="cls-6" cx="285" cy="652" r="3"/></g>
                        <g id="Anim_stand_5-3" data-name="Rond_35"><circle class="cls-6" cx="277" cy="652" r="3"/></g>
                        <use id="Anim_stand_5-4" transform="translate(240 638) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_5-5" transform="translate(301 637) scale(0.13)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_6">
                        <use id="Anim_stand_6-1" transform="translate(354 638) scale(0.1)" xlink:href="#image-7"/>
                        <g id="Anim_stand_6-2" data-name="Rond_31"><circle class="cls-6" cx="395" cy="652" r="3"/></g>
                        <g id="Anim_stand_6-3" data-name="Rond_31"><circle class="cls-6" cx="387" cy="652" r="3"/></g>
                        <g id="Anim_stand_6-4" data-name="Rond_31"><circle class="cls-6" cx="379" cy="652" r="3"/></g>
                        <use id="Anim_stand_6-5" transform="matrix(-0.03, 0, 0, 0.03, 432, 637)" xlink:href="#image-6"/>
                    </g>
                    <g id="Stand_7">
                        <use id="Anim_stand_7-1" transform="translate(321 697) scale(0.13)" xlink:href="#image-7"/>
                        <g id="Anim_stand_7-2"><circle class="cls-6" cx="395" cy="712" r="3"/></g>
                        <g id="Anim_stand_7-3" data-name="Rond_7"><circle class="cls-6" cx="387" cy="712" r="3"/></g>
                        <g id="Anim_stand_7-4" data-name="Rond_7"><circle class="cls-6" cx="379" cy="712" r="3"/></g>
                        <use id="Anim_stand_7-5" transform="matrix(-0.03, 0, 0, 0.03, 433, 697)" xlink:href="#image-6"/>
                    </g>
                    <g id="Stand_8">
                        <g id="Anim_stand_8-1"><circle class="cls-6" cx="438" cy="587" r="3"/></g>
                        <g id="Anim_stand_8-2" data-name="Rond_3"><circle class="cls-6" cx="430" cy="587" r="3"/></g>
                        <g id="Anim_stand_8-3" data-name="Rond_3"><circle class="cls-6" cx="422" cy="587" r="3"/></g>
                        <use id="Anim_stand_8-4" transform="translate(386 572) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_8-5" transform="translate(447 578) scale(0.07)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_8" data-name="Stand_8">
                        <use id="Anim_stand_8-6" data-name="Fantomes_8" transform="translate(513 578) scale(0.08)" xlink:href="#image-7"/>
                        <g id="Anim_stand_8-7" data-name="Rond_7"><circle class="cls-6" cx="566" cy="587" r="3"/></g>
                        <g id="Anim_stand_8-8" data-name="Rond_7"><circle class="cls-6" cx="558" cy="587" r="3"/></g>
                        <g id="Anim_stand_8-9" data-name="Rond_7"><circle class="cls-6" cx="550" cy="587" r="3"/></g>
                        <use id="Anim_stand_8-10" data-name="Pacman_8" transform="matrix(-0.03, 0, 0, 0.03, 602, 572)" xlink:href="#image-6"/>
                    </g>
                    <g id="Stand_9">
                        <g id="Anim_stand_9-1"><circle class="cls-6" cx="438" cy="642" r="3"/></g>
                        <g id="Anim_stand_9-2" data-name="Rond_8"><circle class="cls-6" cx="430" cy="642" r="3"/></g>
                        <g id="Anim_stand_9-3" data-name="Rond_8"><circle class="cls-6" cx="422" cy="642" r="3"/></g>
                        <use id="Anim_stand_9-4" transform="translate(385 627) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_9-5" transform="translate(442 630) scale(0.1)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_10">
                        <g id="Anim_stand_10-1" data-name="Rond_8"><circle class="cls-6" cx="566" cy="642" r="3"/></g>
                        <g id="Anim_stand_10-2" data-name="Rond_8"><circle class="cls-6" cx="558" cy="642" r="3"/></g>
                        <g id="Anim_stand_10-3" data-name="Rond_8"><circle class="cls-6" cx="550" cy="642" r="3"/></g>
                        <use id="Anim_stand_10-4" transform="matrix(-0.03, 0, 0, 0.03, 605, 627)" xlink:href="#image-6"/>
                    </g>
                    <g id="Stand_11">
                        <g id="Anim_stand_11-1"><circle class="cls-6" cx="438" cy="699" r="3"/></g>
                        <g id="Anim_stand_11-2" data-name="Rond_9"><circle class="cls-6" cx="430" cy="699" r="3"/></g>
                        <g id="Anim_stand_11-3" data-name="Rond_9"><circle class="cls-6" cx="422" cy="699" r="3"/></g>
                        <use id="Anim_stand_11-4" transform="translate(386 685) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_11-5" transform="translate(447 691) scale(0.07)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_12">
                        <g id="Anim_stand_12-1"><circle class="cls-6" cx="503.9" cy="744.87" r="3"/></g>
                        <g id="Anim_stand_12-2" data-name="Rond_10"><circle class="cls-6" cx="503.75" cy="736.87" r="3"/></g>
                        <g id="Anim_stand_12-3" data-name="Rond_10"><circle class="cls-6" cx="503.6" cy="728.87" r="3"/></g>
                        <use id="Anim_stand_12-4" transform="matrix(0, -0.03, -0.03, 0, 518, 780)" xlink:href="#image-6"/>
                    </g>
                    <g id="Stand_13">
                        <use id="Anim_stand_13-1" transform="translate(528 701) scale(0.07)" xlink:href="#image-7"/>
                        <g id="Anim_stand_13-2" data-name="Rond_8"><circle class="cls-6" cx="566" cy="709" r="3"/></g>
                        <g id="Anim_stand_13-3" data-name="Rond_8"><circle class="cls-6" cx="558" cy="709" r="3"/></g>
                        <g id="Anim_stand_13-4" data-name="Rond_8"><circle class="cls-6" cx="550" cy="709" r="3"/></g>
                        <use id="Anim_stand_13-5" transform="matrix(-0.03, 0, 0, 0.03, 605, 694)" xlink:href="#image-6"/>
                    </g>
                    <g id="Stand_14">
                        <g id="Anim_stand_14-1"><circle class="cls-6" cx="438" cy="726" r="3"/></g>
                        <g id="Anim_stand_14-2" data-name="Rond_11"><circle class="cls-6" cx="430" cy="726" r="3"/></g>
                        <g id="Anim_stand_14-3" data-name="Rond_11"><circle class="cls-6" cx="422" cy="726" r="3"/></g>
                        <use id="Anim_stand_14-4" transform="translate(386 712) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_14-5" transform="translate(447 718) scale(0.07)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_15">
                        <g id="Anim_stand_15-1" data-name="Rond_5"><circle class="cls-6" cx="45" cy="491" r="3"/></g>
                        <g id="Anim_stand_15-2" data-name="Rond_5"><circle class="cls-6" cx="37" cy="491" r="3"/></g>
                        <g id="Anim_stand_15-3" data-name="Rond_5"><circle class="cls-6" cx="29" cy="491" r="3"/></g>
                        <use id="Anim_stand_15-4" transform="translate(-8 476) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_15-5" transform="translate(50 479) scale(0.11)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_16">
                        <g id="Anim_stand_16-1"><circle class="cls-6" cx="123.9" cy="545.87" r="3"/></g>
                        <g id="Anim_stand_16-2" data-name="Rond_12"><circle class="cls-6" cx="123.75" cy="537.87" r="3"/></g>
                        <g id="Anim_stand_16-3" data-name="Rond_12"><circle class="cls-6" cx="123.6" cy="529.87" r="3"/></g>
                        <use id="Anim_stand_16-4" transform="matrix(0, -0.03, -0.03, 0, 138, 582)" xlink:href="#image-6"/>
                        <use id="Anim_stand_16-5" transform="translate(109 474) scale(0.14)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_17">
                        <g id="Anim_stand_17-1"><circle class="cls-6" cx="205.9" cy="545.87" r="3"/></g>
                        <g id="Anim_stand_17-2" data-name="Rond_16"><circle class="cls-6" cx="205.75" cy="537.87" r="3"/></g>
                        <g id="Anim_stand_17-3" data-name="Rond_16"><circle class="cls-6" cx="205.6" cy="529.87" r="3"/></g>
                        <use id="Anim_stand_17-4" transform="matrix(0, -0.03, -0.03, 0, 220, 582)" xlink:href="#image-6"/>
                        <use id="Anim_stand_17-5" transform="translate(191 474) scale(0.14)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_18">
                        <g id="Anim_stand_18-1"><circle class="cls-6" cx="380" cy="453" r="3"/></g>
                        <g id="Anim_stand_18-2" data-name="Rond_18"><circle class="cls-6" cx="388" cy="453" r="3"/></g>
                        <g id="Anim_stand_18-3" data-name="Rond_18"><circle class="cls-6" cx="396" cy="453" r="3"/></g>
                        <use id="Anim_stand_18-4" transform="matrix(-0.03, 0, 0, 0.03, 435, 438)" xlink:href="#image-6"/>
                        <use id="Anim_stand_18-5" transform="translate(329 446) scale(0.06)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_19">
                        <g id="Anim_stand_19-1" data-name="Rond_5"><circle class="cls-6" cx="293" cy="491" r="3"/></g>
                        <g id="Anim_stand_19-2" data-name="Rond_5"><circle class="cls-6" cx="285" cy="491" r="3"/></g>
                        <g id="Anim_stand_19-3" data-name="Rond_5"><circle class="cls-6" cx="277" cy="491" r="3"/></g>
                        <use id="Anim_stand_19-4" transform="translate(238 476) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_19-5" transform="translate(299 478) scale(0.11)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_20">
                        <g id="Anim_stand_20-1"><circle class="cls-6" cx="379" cy="491" r="3"/></g>
                        <g id="Anim_stand_20-2" data-name="Rond_19"><circle class="cls-6" cx="387" cy="491" r="3"/></g>
                        <g id="Anim_stand_20-3" data-name="Rond_19"><circle class="cls-6" cx="395" cy="491" r="3"/>
                        </g><use id="Anim_stand_20-4" data-name="Pacman_19" transform="matrix(-0.03, 0, 0, 0.03, 434, 476)" xlink:href="#image-6"/>
                        <use id="Anim_stand_20-5" data-name="Fantomes_19" transform="matrix(-0.11, 0, 0, 0.11, 373, 478)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_21">
                        <g id="Anim_stand_21-1" data-name="Rond_18"><circle class="cls-6" cx="294" cy="530" r="3"/></g>
                        <g id="Anim_stand_21-2" data-name="Rond_18"><circle class="cls-6" cx="286" cy="530" r="3"/></g>
                        <g id="Anim_stand_21-3" data-name="Rond_18"><circle class="cls-6" cx="278" cy="530" r="3"/></g>
                        <use id="Anim_stand_21-4" transform="translate(239 516) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_21-5" transform="translate(329 523) scale(0.06)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_22">
                        <g id="Anim_stand_22-1" data-name="Rond_5"><circle class="cls-6" cx="439" cy="491" r="3"/></g>
                        <g id="Anim_stand_22-2" data-name="Rond_5"><circle class="cls-6" cx="431" cy="491" r="3"/></g>
                        <g id="Anim_stand_22-3" data-name="Rond_5"><circle class="cls-6" cx="423" cy="491" r="3"/></g>
                        <use id="Anim_stand_22-4" transform="translate(387 476) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_22-5" transform="translate(450 472) scale(0.16)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_23">
                        <use id="Anim_stand_23-1" transform="translate(519 473) scale(0.13)" xlink:href="#image-7"/>
                        <g id="Anim_stand_23-2"><circle class="cls-6" cx="566" cy="491" r="3"/></g>
                        <g id="Anim_stand_23-3" data-name="Rond_13"><circle class="cls-6" cx="558" cy="491" r="3"/></g>
                        <g id="Anim_stand_23-4" data-name="Rond_13"><circle class="cls-6" cx="550" cy="491" r="3"/></g>
                        <use id="Anim_stand_23-5" transform="matrix(-0.03, 0, 0, 0.03, 602, 476)" xlink:href="#image-6"/>
                    </g>
                    <g id="Stand_24">
                        <g id="Anim_stand_24-1"><circle class="cls-6" cx="45" cy="376" r="3"/></g>
                        <g id="Anim_stand_24-2" data-name="Rond_15"><circle class="cls-6" cx="37" cy="376" r="3"/></g>
                        <g id="Anim_stand_24-3" data-name="Rond_15"><circle class="cls-6" cx="29" cy="376" r="3"/></g>
                        <use id="Anim_stand_24-4" transform="translate(-8 361) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_24-5" transform="translate(67 359) scale(0.14)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_25">
                        <g id="Anim_stand_25-1" data-name="Rond_16"><circle class="cls-6" cx="154.9" cy="416.87" r="3"/></g>
                        <g id="Anim_stand_25-2" data-name="Rond_16"><circle class="cls-6" cx="154.75" cy="408.87" r="3"/></g>
                        <g id="Anim_stand_25-3" data-name="Rond_16"><circle class="cls-6" cx="154.6" cy="400.87" r="3"/></g>
                        <use id="Anim_stand_25-4" transform="matrix(0, -0.03, -0.03, 0, 169, 452)" xlink:href="#image-6"/>
                        <use id="Anim_stand_25-5" transform="translate(141 362) scale(0.12)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_100" data-name="Toilettes">
                        <g id="Anim_stand_100-1"><circle class="cls-6" cx="210.9" cy="416.87" r="3"/></g>
                        <g id="Anim_stand_100-2" data-name="Rond_25"><circle class="cls-6" cx="210.75" cy="408.87" r="3"/></g>
                        <g id="Anim_stand_100-3" data-name="Rond_25"><circle class="cls-6" cx="210.6" cy="400.87" r="3"/></g>
                        <use id="Anim_stand_100-4" transform="matrix(0, -0.03, -0.03, 0, 218.19, 435.73)" xlink:href="#image-6"/>
                    </g>
                    <g id="Stand_26">
                        <g id="Anim_stand_26-1" data-name="Rond_19"><circle class="cls-6" cx="379" cy="354" r="3"/></g>
                        <g id="Anim_stand_26-2" data-name="Rond_19"><circle class="cls-6" cx="387" cy="354" r="3"/></g>
                        <g id="Anim_stand_26-3" data-name="Rond_19"><circle class="cls-6" cx="395" cy="354" r="3"/></g>
                        <use id="Anim_stand_26-4" transform="matrix(-0.03, 0, 0, 0.03, 430, 340)" xlink:href="#image-6"/>
                        <use id="Anim_stand_26-5" transform="matrix(-0.07, 0, 0, 0.07, 346, 346)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_27">
                        <g id="Anim_stand_27-1" data-name="Rond_19"><circle class="cls-6" cx="293" cy="389" r="3"/></g>
                        <g id="Anim_stand_27-2" data-name="Rond_19"><circle class="cls-6" cx="285" cy="389" r="3"/></g>
                        <g id="Anim_stand_27-3" data-name="Rond_19"><circle class="cls-6" cx="277" cy="389" r="3"/></g>
                        <use id="Anim_stand_27-4" transform="translate(240 375) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_27-5" transform="translate(324 375) scale(0.12)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_101" data-name="Toilettes">
                        <g id="Anim_stand_101-1"><circle class="cls-6" cx="437" cy="375" r="3"/></g>
                        <g id="Anim_stand_101-2" data-name="Rond_22"><circle class="cls-6" cx="429" cy="375" r="3"/></g>
                        <g id="Anim_stand_101-3" data-name="Rond_22"><circle class="cls-6" cx="421" cy="375" r="3"/></g>
                        <use id="Anim_stand_101-4" data-name="Pacman_toilettes" transform="translate(402 368) scale(0.03)" xlink:href="#image-6"/>
                    </g>
                    <g id="Stand_28">
                        <g id="Anim_stand_28-1"><circle class="cls-6" cx="529.9" cy="415.87" r="3"/></g>
                        <g id="Anim_stand_28-2" data-name="Rond_28"><circle class="cls-6" cx="529.75" cy="407.87" r="3"/></g>
                        <g id="Anim_stand_28-3" data-name="Rond_28"><circle class="cls-6" cx="529.6" cy="399.87" r="3"/></g>
                        <use id="Anim_stand_28-4" transform="matrix(0, -0.03, -0.03, 0, 544, 454)" xlink:href="#image-6"/>
                        <use id="Anim_stand_28-5" transform="translate(514 358) scale(0.14)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_29">
                        <use id="Anim_stand_29-1" transform="translate(156 170) scale(0.18)" xlink:href="#image-7"/>
                        <g id="Anim_stand_29-2"><circle class="cls-6" cx="251" cy="194" r="3"/></g>
                        <g id="Anim_stand_29-3" data-name="Rond_23"><circle class="cls-6" cx="243" cy="194" r="3"/></g>
                        <g id="Anim_stand_29-4" data-name="Rond_23"><circle class="cls-6" cx="235" cy="194" r="3"/></g>
                        <use id="Anim_stand_29-5" transform="matrix(-0.03, 0, 0, 0.03, 290, 178)" xlink:href="#image-6"/>
                    </g>
                    <g id="Stand_30">
                        <g id="Anim_stand_30-1" data-name="Rond_25"><circle class="cls-6" cx="139.9" cy="314.87" r="3"/></g>
                        <g id="Anim_stand_30-2" data-name="Rond_25"><circle class="cls-6" cx="139.75" cy="306.87" r="3"/></g>
                        <g id="Anim_stand_30-3" data-name="Rond_25"><circle class="cls-6" cx="139.6" cy="298.87" r="3"/></g>
                        <use id="Anim_stand_30-4" transform="matrix(0, -0.03, -0.03, 0, 155, 352)" xlink:href="#image-6"/>
                        <use id="Anim_stand_30-5" transform="translate(116 248) scale(0.2)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_31">
                        <g id="Anim_stand_31-1"><circle class="cls-6" cx="293" cy="181" r="3"/></g>
                        <g id="Anim_stand_31-2" data-name="Rond_32"><circle class="cls-6" cx="285" cy="181" r="3"/></g>
                        <g id="Anim_stand_31-3" data-name="Rond_32"><circle class="cls-6" cx="277" cy="181" r="3"/></g>
                        <use id="Anim_stand_31-4" transform="translate(240 166) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_31-5" transform="translate(312 157) scale(0.2)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_32">
                        <g id="Anim_stand_32-1"><circle class="cls-6" cx="292" cy="272" r="3"/></g>
                        <g id="Anim_stand_32-2" data-name="Rond_27"><circle class="cls-6" cx="284" cy="272" r="3"/></g>
                        <g id="Anim_stand_32-3" data-name="Rond_27"><circle class="cls-6" cx="276" cy="272" r="3"/></g>
                        <use id="Anim_stand_32-4" transform="translate(240 256) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_32-5" transform="translate(299 253) scale(0.15)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_33">
                        <use id="Anim_stand_33-1" transform="translate(358 261) scale(0.08)" xlink:href="#image-7"/>
                        <g id="Anim_stand_33-2" data-name="Rond_23"><circle class="cls-6" cx="396" cy="272" r="3"/></g>
                        <g id="Anim_stand_33-3" data-name="Rond_23"><circle class="cls-6" cx="388" cy="272" r="3"/></g>
                        <g id="Anim_stand_33-4" data-name="Rond_23"><circle class="cls-6" cx="380" cy="272" r="3"/></g>
                        <use id="Anim_stand_33-5" transform="matrix(-0.03, 0, 0, 0.03, 435, 256)" xlink:href="#image-6"/>
                    </g>
                    <g id="Stand_34">
                        <g id="Anim_stand_34-1" data-name="Rond_32"><circle class="cls-6" cx="437" cy="160" r="3"/></g>
                        <g id="Anim_stand_34-2" data-name="Rond_32"><circle class="cls-6" cx="429" cy="160" r="3"/></g>
                        <g id="Anim_stand_34-3" data-name="Rond_32"><circle class="cls-6" cx="421" cy="160" r="3"/></g>
                        <use id="Anim_stand_34-4" transform="translate(385 145) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_34-5" transform="translate(446 145) scale(0.13)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_35">
                        <g id="Anim_stand_35-1" data-name="Rond_31"><circle class="cls-6" cx="464" cy="234" r="3"/></g>
                        <g id="Anim_stand_35-2" data-name="Rond_31"><circle class="cls-6" cx="456" cy="234" r="3"/></g>
                        <g id="Anim_stand_35-3" data-name="Rond_31"><circle class="cls-6" cx="448" cy="234" r="3"/></g>
                        <use id="Anim_stand_35-4" transform="translate(410 218) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_35-5" transform="translate(488 214) scale(0.17)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_36">
                        <g id="Anim_stand_36-1" data-name="Rond_32"><circle class="cls-6" cx="437" cy="294" r="3"/></g>
                        <g id="Anim_stand_36-2" data-name="Rond_32"><circle class="cls-6" cx="429" cy="294" r="3"/></g>
                        <g id="Anim_stand_36-3" data-name="Rond_32"><circle class="cls-6" cx="421" cy="294" r="3"/></g>
                        <use id="Anim_stand_36-4" transform="translate(385 278) scale(0.03)" xlink:href="#image-6"/>
                        <use id="Anim_stand_36-5" transform="translate(483 282) scale(0.1)" xlink:href="#image-7"/>
                    </g>
                    <g id="Stand_37">
                        <g id="Anim_stand_37-1" data-name="Rond_12"><circle class="cls-6" cx="273.9" cy="126.87" r="3"/></g>
                        <g id="Anim_stand_37-2" data-name="Rond_12"><circle class="cls-6" cx="273.75" cy="118.87" r="3"/></g>
                        <g id="Anim_stand_37-3" data-name="Rond_12"><circle class="cls-6" cx="273.6" cy="110.87" r="3"/></g>
                        <use id="Anim_stand_37-4" transform="matrix(0, -0.03, -0.03, 0, 288, 165)" xlink:href="#image-6"/>
                        <g id="Anim_stand_37-5" data-name="Rond_12"><circle class="cls-6" cx="397.9" cy="125.87" r="3"/></g>
                        <g id="Anim_stand_37-6" data-name="Rond_12"><circle class="cls-6" cx="397.75" cy="117.87" r="3"/></g>
                        <g id="Anim_stand_37-7" data-name="Rond_12"><circle class="cls-6" cx="397.6" cy="109.87" r="3"/></g>
                        <use id="Anim_stand_37-8" transform="matrix(0, -0.03, -0.03, 0, 412, 165)" xlink:href="#image-6"/>
                    </g>
                </g>
            </svg>
                
            </div>
            
            <div class="col-xl-5 col-xs-5 col-md-5 conteneurcartes">
                <form id="recherche" action="plan.php" method="post">
                  <input type="text" class="inputrecherche" placeholder="Rechercher" value="<?php if(isset($_POST['texte'])){echo $_POST['texte']; };?>" name="texte">
                  <button type="submit" class="btn boutonliste btn-sm boutonrecherche" value="Submit" form="recherche"><i class="fa fa-search"></i></button>
                  <?php if(isset($_POST['texte'])){
                            echo'<button type="submit" class="btn boutonliste btn-sm boutonsupprimer" value="Submit" form="supprimer"><i class="fa fa-times"></i></button>';
                        }else{
                            echo'<button id="recherchebtn" type="submit" class="btn boutonliste btn-sm boutonsupprimerd" value="Submit" form="supprimer" disabled><i class="fa fa-times"></i></button>';
                        }  
                  ?>
                </form>
                <form id="supprimer" action="plan.php" method="post">
                <input type="hidden" name="supprimer">
                </form>
                
                        <div id="tab" class="btn-group" data-toggle="buttons-radio">
                            <a id="bouton-1" class="selection filter-button  btn-large boutonliste btn active" data-filter="tout" data-toggle="tab" onclick="filtrage(this.id);toutcacher();">Tout</a>
                            <a id="bouton-2" class="selection filter-button  btn-large boutonliste btn" data-filter="vente" data-toggle="tab" onclick="filtrage(this.id);toutcacher();;">Ventes</a>
                            <a id="bouton-3" class="selection filter-button  btn-large boutonliste btn" data-filter="console" data-toggle="tab" onclick="filtrage(this.id);toutcacher();">Consoles</a>
                            <a id="bouton-4" class="selection filter-button btn-large boutonliste btn" data-filter="services" data-toggle="tab" onclick="filtrage(this.id);toutcacher();">Services</a>
                            <a id="bouton-5" class="selection filter-button btn-large boutonliste btn" data-filter="partenaire" data-toggle="tab" onclick="filtrage(this.id);toutcacher();">Partenaires</a>
                        </div>
                <div class="carte" id="accordion">
                    <?php 
                        if(!isset($_POST['texte']) || $_POST['texte']=='' ){
    
                            echo'<h3 id="msgrecherche" class="msgrecherche card-title">Aucune recherche</h3>';
                            $exposants = file_get_contents('exposants.json');
                            $exposants = json_decode($exposants, true); 
                            for($i=0;$i<count($exposants['exposants']);$i++){
                                echo '<div class="card '. $exposants['exposants'][$i]['filtre'] .' filter carte'.$exposants['exposants'][$i]['id'].'" id="m'.$exposants['exposants'][$i]['numero'].'" onclick="supprimer();">';
                                echo '<div class="card-header" id="heading'.$exposants['exposants'][$i]['id'].'">';
                                echo '<h5 class="card-title"><button class="btn btnliste" data-toggle="collapse" data-target="#desc'.$exposants['exposants'][$i]['id'].'" aria-expanded="false" id="m'.$exposants['exposants'][$i]['numero'].'" aria-controls="desc'.$exposants['exposants'][$i]['id'].'" onclick="refermer(this);">'. $exposants['exposants'][$i]['nom'] . '</button></h5>';
                                echo '</div>';
                                echo '<div id="desc'.$exposants['exposants'][$i]['id'].'" class="collapse collapse'.$exposants['exposants'][$i]['id'].'" aria-labelledby="heading'.$exposants['exposants'][$i]['id'].'" data-parent="#accordion">';
                                echo '<div class="card-body">'. $exposants['exposants'][$i]['description'];
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
    
                          }else{
                             $motrecherche=$_POST['texte'];
                             echo '<h3 class="msgrecherche card-title">Résultats pour : '.$motrecherche . '</h3>';
                             $motrecherche=strtolower($_POST['texte']);
                             $exposants = file_get_contents('exposants.json');
                             $exposants = json_decode($exposants, true);
    
                             $compteur=0;
                             for($i=0;$i<count($exposants['exposants']);$i++){
                                 $titre=strtolower($exposants['exposants'][$i]['nom']);
                                 $description=strtolower($exposants['exposants'][$i]['description']);
                                 if(strlen(strpos($titre,$motrecherche))>0 || strlen(strpos($description,$motrecherche)) ){
                                     echo '<div class="card '. $exposants['exposants'][$i]['filtre'] .' filter carte'.$exposants['exposants'][$i]['id'].'" id="m'.$exposants['exposants'][$i]['numero'].'" onclick="supprimer();">';
                                     echo '<div class="card-header" id="heading'.$exposants['exposants'][$i]['id'].'">';
                                     echo '<h5 class="card-title"><button class="btn btnliste" data-toggle="collapse" data-target="#desc'.$exposants['exposants'][$i]['id'].'" aria-expanded="false" id="m'.$exposants['exposants'][$i]['numero'].'" aria-controls="desc'.$exposants['exposants'][$i]['id'].'" onclick="refermer(this);">'. $exposants['exposants'][$i]['nom'] . '</button></h5>';
                                     echo '</div>';
                                     echo '<div id="desc'.$exposants['exposants'][$i]['id'].'" class="collapse collapse'.$exposants['exposants'][$i]['id'].'" aria-labelledby="heading'.$exposants['exposants'][$i]['id'].'" data-parent="#accordion">';
                                     echo '<div class="card-body">'. $exposants['exposants'][$i]['description'];
                                     echo '</div>';
                                     echo '</div>';
                                     echo '</div>';
                                     $compteur=$compteur+1;
                                 }
                             }
                            if($compteur==0){
                                echo '<h1 class="txtblanc card-title">GAME OVER !! <br>Retente ta chance</h1>';
                                echo '<img class="img404" src="image/404.png">';
                            }
    
                          }  
                    
                    
                    
                    ?>
                </div>
            </div>
        
        
        
        </div>
    </div> 
    
      
    <!-- Javascript optionnel -->
      <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>

    <!-- jQuery, puis Popper.js, puis Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
    
</html>