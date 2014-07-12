<?
define (FORMULAR_DE_COMANDA, "Bestellformular Konzertkarten");
define (SUBTITLU, "");
define (NUME, "Name");
define (PRENUME, "Vorname");
define (ADRESA, "Adresse");
define (ORAS, "PLZ/Ort");
define (TELEFON, "Telefon");
define (EMAIL, "E-mail");
define (NUMARUL_DE_TICHETE, "Gew&uuml;nschte Anzahl Karten");
define (ADULTI, "Erwachsene");
define (COPII, "Kinder*");
define (COPII2, "Kinder (unter 16 Jahren)");
define (CONCERT, "Konzertdatum");
define (COMANDA, "Best&auml;tigen");
define (RESETARE, "Abbrechen");
define (DENUMIRE_EVENIMENT, "J.S. Bach - Die Thurgau Konzerte 2010<br/>aus den Sonaten und Partiten f&uuml;r Violine Solo");
define (TOTAL_LEI, "TOTAL CHF");
define (RESET, "Felder l&ouml;schen");
define (FORMAT_DATA, "DD.MM.YY");
define (REVERIFICATI, "Ihre Best&auml;tigung und Konzertkarte erscheint im n&auml;chsten Fenster.<br/>
                       Diese bitte ausdrucken und am Konzerttag an der Kasse vorweisen und bezahlen.<br/>
                       ACHTUNG! Diese ist keine Kaufquittung. Sie werden ohne Kassenstempel nicht in den Konzertsaal eingelassen.");
define (VA_RUGAM, "Bitte Formular vollst&auml;ndig ausf&uuml;llen");
define (NELAMURIRE, "* unter 16 Jahren<br/><br/>
                     Bestellungen f&uuml;r mehr als 6 Konzerte - bitte an E-mail: <a href='mailto:office.siam@gmx.ch'>office.siam (at) gmx.ch
</a><br/><br/>
                     Der Vorverkauf in der jeweiligen Gemeinde beginnt jeweils 1 Monat vor dem Konzert (wenn nicht vorher im Internet ausverkauft)
                     Internet-Bestellungen: (nicht sp&auml;ter als eine Woche vor dem Konzert)<br/><br/>
                     Reservation erw&uuml;nscht (beschr&auml;nkte, unnummerierte Platzanzahl)<br/><br/>
                     Die reservierten Konzertkarten m&uuml;ssen bis 19 Uhr am Tag des Konzertes abgeholt werden!<br/>
                     Nicht abgeholte Tickets werden nach 19 Uhr verkauft.<br/><br/>
                     Abendkasse jeweils am Tag des Konzertes ab 18.00 Uhr<br/>");
define (REZERVATION, "Reservation erwünscht");
define (PRETURI, "Preise Einzelkarten:<br/>
Erwachsene CHF 40.-<br/>
Kinder CHF 20.-");
define (CONCERTE, "<span style='float:left;'>
03.Juni - Frauenfeld 20.00 Uhr<br/>
05.Juni - Erlen 19.30 Uhr<br/>
10.Juni - Gottlieben 19.30 Uhr<br/>
12.Juni - Arbon 19.30 Uhr<br/>
15.Juni - Bischofszell 19.30 Uhr<br/>
17.Juni - Amriswil 19.30 Uhr<br/>
19.Juni - Weinfelden 19.30 Uhr<br/>
20.Juni - Romanshorn 15.00 Uhr<br/>
24.Juni - Sulgen 19.30 Uhr<br/>
</span>
<span style='float:left;margin-left:35px;'>
Rathaus Frauenfeld<br/>
Kirche Erlen<br/>
Kirche Gottlieben<br/>
Schloss Arbon<br/>
Kath. Kirche St. Pelagius<br/>
Kirchgemeindehaus Amriswil<br/>
Rathaus Weinfelden<br/>
Alte Kirche Romanshorn<br/>
Ev. Kirche Sulgen
</span>");
define (COMPANIE, "SIAM | Am Gihl 6 | 9220 Bischofszell | Tel: +41 (0)79 417 5734 </br></br></br>Copyright by Cazan Georgian Ovidiu &#169; 2010. All rights reserved.");

//bill please

define (TITLU_FACTURA, "BESTELLUNG");
define (LEI, "CHF");
define (VALOARE_TVA, "0.076");     //cu . in loc de virgula. valoarea ce va fi folosita la calculul sumei
define (CONDITII, "LIEFERANT");
define (VALOARE_CONDITII, "NONE");   //right sidebar
define (SERVICIU, "VERSAND PER");
define (VALOARE_SERVICIU, "Schweizerische Post");  //ce va aparea in dreapta
define (VALOARE_TRANSPORT, "0");
define (TOTAL_DE_PLATA, "SUMME");
define (NR_BILETE, "MENGE");
define (CATEGORIE, "KATEGORIE");
define (DENUMIRE, "BESCHREIBUNG");
define (PRET_UNITATE, "ST&Uuml;CKPREIS");
define (SUBTOTAL, "ZWISCHENSUMME");
define (TVA, "MWST 7.6");
define (TOTAL, "SUMME");
define (SUMA, "SUMME");
define (SUBIECT_EMAIL, "Bestellformular Konzertkarten");
define (DATA, "AUFTRAGSDATUM");
define (TRANSPORT, "VERSAND");
define (ABENDKARTE, "Abendkarte(n) ");
define (ATENTIE, "Wichtige Informationen! <br/>1.Ihre Bestellung ist auch die Eintristtskarte. Bitte an der Abendkasse vorzeigen und Summe bezahlen. <br/>2.Nur fur den/die oben angegebenen Termin(e) gultig <br/>3.Nur fur den/die oben angegebenen Person(en) gultig <br/>4.Informieren Sie uns umgehend, wenn die Lieferung nicht vereinbarungsgemaB erfolgen kann");
$concerte[0]['data'] = "03.06.10";
$concerte[0]['text'] = "Frauenfeld/20.00 Uhr/Rathaus Frauenfeld";
$concerte[1]['data'] = "05.06.10";
$concerte[1]['text'] = "Erlen/19.30 Uhr/Kirche Erlen";
$concerte[2]['data'] = "10.06.10";
$concerte[2]['text'] = "Gottlieben/19.30 Uhr/Kirche Gottlieben";
$concerte[3]['data'] = "12.06.10";
$concerte[3]['text'] = "Arbon/19.30 Uhr/Schloss Arbon";
$concerte[4]['data'] = "15.06.10";
$concerte[4]['text'] = "Bischofszell/19.30 Uhr/Kath. Kirche St.Pelagius";
$concerte[5]['data'] = "17.06.10";
$concerte[5]['text'] = "Amriswil/19.30 Uhr/Kirchgemeindehaus Amriswil";
$concerte[6]['data'] = "19.06.10";
$concerte[6]['text'] = "Weinfelden/19.30 Uhr/Rathaus Weinfelden";
$concerte[7]['data'] = "20.06.10";
$concerte[7]['text'] = "Romanshorn/15.00 Uhr/Alte Kirche Romanshorn";
$concerte[8]['data'] = "24.06.10";
$concerte[8]['text'] = "Sulgen/19.30 Uhr/Ev. Kirche Sulgen";
?>
