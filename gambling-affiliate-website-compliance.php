<?php

function responsible_gambling_shortcode() {
  $country = $_SERVER["HTTP_CF_IPCOUNTRY"];

/* #################### NORTH AMERICA #################### */
// United States = US
if ($country == "US") {
  return "21+ | Bet with your head, not over it! Please play responsibly. | Gambling Problem? Call 1-800-GAMBLER or visit 800gambler.org | ncpgambling.org | gamblersanonymous.org | gam-anon.org";}

// Canada = CA
elseif ($country == "CA") {
  return "19+ | 18+ in AB, MB, & QC | Gambling can be addictive, please play responsibly. | Responsiblegambling.org";}
  
/* #################### CIS COUNTRIES & UKRAINE & GEORGIA #################### */
// Ukraine = UA
elseif ($country == "UA") {
  return "21+ | Азартні ігри можуть викликати залежність. Будь ласка, грайте відповідально. | <a href=\"https://www.gamblingtherapy.org/uk/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Russia = RU
// T&C's Apply: Отыгрывание согласно правилам и условиям
// Commercial content: Рекламная статья
elseif ($country == "RU") {
  return "18+ | Азартные игры могут вызывать зависимость. Пожалуйста, играй ответственно. | <a href=\"https://www.gamblingtherapy.org/ru/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Kazakhstan = KZ (text in Russian language)
elseif ($country == "KZ") {
  return "18+ | Азартные игры могут вызывать зависимость. Пожалуйста, играй ответственно. | <a href=\"https://www.gamblingtherapy.org\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}  
  
// Georgia = GE
elseif ($country == "GE") {
  return "18+ | ითამაშე პასუხისმგებლობით. | <a href=\"https://www.gamblingtherapy.org\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
/* #################### AUSTRALIA & OCEANIA #################### */
// Australia = AU 
// “Chances are you’re about to lose”, “Imagine what you could be buying instead”, “You win some. You lose more”, “What’s gambling really costing you?”, “Think. Is this a bet you really want to place?”, “What are you prepared to lose? Set a deposit limit”, “What are you really gambling with?”
elseif ($country == "AU") {
  return "18+ | Chances are you’re about to lose. Please play responsibly | Gambling Problem? Call 1800 858 858 or visit Gamblinghelponline.org.au";}

// New Zealand = NZ
elseif ($country == "NZ") {
  return "18+ | Play Responsibly | Begambleaware.org";}

/* #################### LATAM #################### */
// Brazil = BR
elseif ($country == "BR") {
  return "18+ | Os jogos de azar podem ser viciantes. Por favor, jogue de forma responsável. | Jogadoresanonimos.org.br | <a href=\"https://www.gamblingtherapy.org/pt-br/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Chile = CL
elseif ($country == "CL") {
  return "18+ | Por favor, juega con responsabilidad. | Corporacionjuegoresponsable.cl | <a href=\"https://www.gamblingtherapy.org/es/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Colombia = CO
elseif ($country == "CO") {
  return "18+ | Juega responsablemente | Juegabien.co | <a href=\"https://www.gamblingtherapy.org/es/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Argentina = AR
elseif ($country == "AR") {
  return "18+ | Jugá con responsabilidad | Loteria.gba.gov.ar";}
  
// Mexico = MX
elseif ($country == "MX") {
  return "18+ | Por favor, juega con responsabilidad. | Jugadoresanonimos.org | <a href=\"https://www.gamblingtherapy.org/es/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Peru = PE
elseif ($country == "PE") {
  return "18+ | El juego puede ser adictivo. Por favor, juega con responsabilidad. | Juegoresponsable.pe | <a href=\"https://www.gamblingtherapy.org/es/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

/* #################### ASIA & MIDDLE EAST #################### */
// Japan = JP
elseif ($country == "JP") {
  return "18+ | ギャンブルには中毒性があります。責任を持ってプレイしてください。| <a href=\"https://www.gamblingtherapy.org/ja/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}  

// India = IN
elseif ($country == "IN") {
  return "18+ | Gambling can be addictive. Please play responsibly. | जुआ व्यसनी हो सकता है। जिम्मेदारी से खेलें। | <a href=\"https://www.gamblingtherapy.org\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Thailand = TH
elseif ($country == "TH") {
  return "18+ | การเดิมพันอาจก่อให้เกิดอาการเสพติด โปรดเล่นอย่างมีความรับผิดชอบ | <a href=\"https://www.gamblingtherapy.org\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}	

// Vietnam = VI
elseif ($country == "VI") {
  return "18+ | Cờ bạc có thể gây nghiện. Hãy chơi có trách nhiệm. | <a href=\"https://www.gamblingtherapy.org/vi/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Taiwan = TW
elseif ($country == "TW") {
  return "18+ | 博彩可能讓人上癮 | <a href=\"https://www.gamblingtherapy.org\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// China = CN
elseif ($country == "CN") {
  return "18+ | 博彩可能有成瘾性 | <a href=\"https://www.gamblingtherapy.org/zh-hant/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// South Korea = KR
elseif ($country == "KR") {
  return "18+ | 도박은 중독될 수 있습니다. | <a href=\"https://www.gamblingtherapy.org/ko/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Türkiye = TR
elseif ($country == "TR") {
  return "18+ | Şans oyunları bağımlılık yapabilir, lütfen bilinçli oynayınız. | <a href=\"https://www.gamblingtherapy.org/tr/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Indonesia https://www.gamblingtherapy.org/id/
// Malaysia
// Philippines
// United Arab Emirates

/* #################### AFRICA #################### */
// South Africa = ZA
elseif ($country == "ZA") {
  return "21+ | Play Responsibly | responsiblegambling.org.za | <a href=\"https://www.gamblingtherapy.org/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Kenya = KE
elseif ($country == "KE") {
  return "18+ | Play Responsibly | Gamhelpkenya.com | <a href=\"https://www.gamblingtherapy.org/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Ghana = GH
elseif ($country == "GH") {
  return "18+ | Play Responsibly | <a href=\"https://www.gamblingtherapy.org/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Nigeria = NG
elseif ($country == "NG") {
  return "18+ | Gambling can be addictive, please play Responsibly. | <a href=\"https://www.gamblingtherapy.org/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Uganda = NG
elseif ($country == "NG") {
  return "18+ | Gambling can be addictive and psychologically harmful. Please play Responsibly. | <a href=\"https://www.gamblingtherapy.org/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
/* #################### EUROPE – NORDIC COUNTRIES #################### */
// Denmark = DK 
// T&C's Apply: Regler og vilkår gælder
// https://www.spillemyndigheden.dk/uploads/2018-11/Guideline%20regarding%20compulsory%20disclosure%20of%20conditions%20when%20marketing%20a%20bonus%20offer_0.pdf
// https://www.spillemyndigheden.dk/en/gambling-advertising
// https://www.spillemyndigheden.dk/uploads/2020-01/The%20Danish%20Gambling%20Authority%E2%80%99s%20guide%20on%20sales%20promoting%20arrangements.pdf
// https://www.spillemyndigheden.dk/uploads/2020-07/The%20Danish%20Gambling%20Authority%E2%80%99s%20guide%20on%20duty%20of%20disclosure%20when%20marketing%20and%20advertising%20gambling.pdf
elseif ($country == "DK") {
  return "18+ | Spil ansvarligt! | Kontakt Spillemyndighedens hjælpelinje på StopSpillet.dk – Ring til +45 70 22 28 25 | Udeluk dig via ROFUS.nu | Ludomani.dk | <a href=\"https://www.gamblingtherapy.org/da/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}  

// Finland = FI
// T&C's Apply: Säännöt ja ehdot voimassa
// Commercial content: Kaupallinen sisältö
elseif ($country == "FI") {
  return "18+ | Pelaa vastuullisesti | Peluuri.fi | <a href=\"https://www.gamblingtherapy.org/fi/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Norway = NO
elseif ($country == "NO") {
  return "18+ | Spill ansvarlig | Hjelpelinjen.no | <a href=\"https://www.gamblingtherapy.org/no/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Sweden = SE https://www.stodlinjen.se/
// Commercial content: Kommersiellt innehåll
// T&C's Apply: Regler & villkor gäller
// New Customers Only: Endast nya kunder
elseif ($country == "SE") {
  return "18+ | Spela ansvarsfullt | Stodlinjen.se | Spelpaus.se | <a href=\"https://www.gamblingtherapy.org/sv/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Iceland = IS
elseif ($country == "IS") {
  return "18+ | Vertu ábyrg(ur) | Abyrgspilun.is";}
  
/* #################### EUROPE – BALTICS #################### */
// Lithuania = LT
elseif ($country == "LT") {
  return "21+ Kazino | 18+ Sportas | Lošimo atsakomybė | Anoniminiailosejai.lt | <a href=\"https://www.gamblingtherapy.org/lt/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Latvia = LV
elseif ($country == "LV") {
  return "18+ | Azartspēļu spēlēšana var izraisīt atkarību. Lūdzu, spēlē atbildīgi. | www.as.org.lv | <a href=\"https://www.gamblingtherapy.org/lv/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Estonia = EE
// Gambling Ad disclaimer: Tähelepanu! Tegemist on hasartmängu reklaamiga. Hasartmäng pole sobiv viis rahaliste probleemide lahendamiseks. Tutvuge reeglitega ja käituge vastutustundlikult!
elseif ($country == "EE") {
  return "21+ Kasiino | 18+ Sport | Hasartmängud võivad tekitada sõltuvust. Mängi vastutustundlikult. | 15410.ee | <a href=\"https://www.gamblingtherapy.org/et/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

/* #################### EUROPE – DACH & BENELUX #################### */
// Austria = AT
// T&C's Apply: AGB gelten
elseif ($country == "AT") {
  return "18+ | Spielen Sie verantwortungsvoll | <a href=\"https://www.gamblingtherapy.org/de/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";} 

// Switzerland = CH
elseif ($country == "CH") {
  return "18+ | Glücksspiel kann süchtig machen. Spielen Sie verantwortungsvoll. | www.sos-jeu.ch | www.sos-spielsucht.ch | <a href=\"https://www.gamblingtherapy.org/de/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Liechtenstein = LI
elseif ($country == "LI") {
  return "18+ | Glücksspiel kann süchtig machen. Spiele verantwortungsvoll. | <a href=\"https://www.gamblingtherapy.org/de/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Germany = DE
// T&C's Apply: AGB gelten
elseif ($country == "DE") {
  return "18+ | Glücksspiel kann süchtig machen. Spiele verantwortungsvoll. | Hilfe finden Sie auf www.bzga.de | <a href=\"https://www.gamblingtherapy.org/de/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Belgium = BE
// Alternative text: Le jeu peut être addictif. Jouez de manière responsable.
elseif ($country == "BE") {
  return "21+ | Speel Verantwoord | Gokhulp.be";}

// Netherlands = NL
elseif ($country == "NL") {
  return "18+ | Speel Bewust | Speelbewust.nl | <a href=\"https://www.gamblingtherapy.org/nl/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

/* #################### EUROPE #################### */
// Czechia = CZ
elseif ($country == "CZ") {
  return "18+ | Hraj s uvážením | <a href=\"https://www.hazardni-hrani.cz\" rel=\"nofollow\" target=\"_blank\">Hazardni-hrani.cz</a> | <a href=\"https://www.gamblingtherapy.org/cs/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Spain = ES
// T&C's Apply: Aplican Términos y Condiciones
// Commercial content: Publicidad
elseif ($country == "ES") {
  return "18+ | Juega responsablemente | Jugarbien.es | Juegoseguro.es | <a href=\"https://www.gamblingtherapy.org/es/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// France = FR
// Commercial content: Ce site contient un contenu commercial
elseif ($country == "FR") {
  return "18+ | El juego puede ser adictivo. Jouez responsablement. | Adictel.fr | Evalujeu.fr | <a href=\"https://www.gamblingtherapy.org/fr/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Greece = GR
elseif ($country == "GR") {
  return "21+ | Παίξε Υπεύθυνα | Γραμμή βοήθειας ΚΕΘΕΑ: 210 9237777 | <a href=\"https://www.gamblingtherapy.org/el/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Croatia = HR
elseif ($country == "HR") {
  return "18+ | Kockanje može izazvati ovisnost. Igrajte odgovorno. | <a href=\"https://www.gamblingtherapy.org/hr/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Hungary = HU
// Alternative text: Hazard może uzależniać, graj odpowiedzialnie.
elseif ($country == "HU") {
  return "18+ | A szerencsejáték függőséget okozhat. Kérjük, játsszon felelősségteljesen. | <a href=\"https://www.gamblingtherapy.org/hu/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Ireland = IE
elseif ($country == "IE") {
  return "18+ | Gamble responsibly | Gamblingcare.ie | Problemgambling.ie | GamblingAwarenessTrust.ie";}

// Italy = IT
// Commercial content: Questo sito contiene contenuto commerciale
elseif ($country == "IT") {
  return "18+ | Il gioco può creare dipendenza patologica. Gioca responsabilmente. | Gioca-responsabile.it | <a href=\"https://www.gamblingtherapy.org/it/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Malta = MT
// https://www.mga.org.mt/wp-content/uploads/Commercial-Communications-Committee-Guidelines.pdf
elseif ($country == "MT") {
  return "18+ | Play responsibly | rgf.org.mt | <a href=\"https://www.gamblingtherapy.org\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Poland = PL
// Commercial content: Strona zawiera treści reklamowe
elseif ($country == "PL") {
  return "18+ | Hazard może uzależniać. Graj odpowiedzialnie. | Anonimowihazardzisci.org | <a href=\"https://www.gamblingtherapy.org/pl/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Portugal = PT
// T&C's Apply: Aplicam-se Termos & condições
// Alternative text: Jogar pode ser viciante. Jogue com responsabilidade.
elseif ($country == "PT") {
  return "18+ | Jogue responsavelmente | Jogoresponsavel.pt | <a href=\"https://www.gamblingtherapy.org/pt-pt/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Romania = RO
elseif ($country == "RO") {
  return "18+ | Jocurile de noroc pot crea dependență. Joacă Responsabil. | Jocresponsabil.ro | <a href=\"https://www.gamblingtherapy.org/ro/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Slovenia = SL
elseif ($country == "SL") {
  return "18+ | Igranje iger na srečo lahko povzroči zasvojenost, prosimo, igrajte odgovorno. | <a href=\"https://www.gamblingtherapy.org\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Serbia = RS
// Commercial content: Komercijalni sadržaj
elseif ($country == "RS") {
  return "18+ | Klađenje može izazvati zavisnost. Igrajte odgovorno. | <a href=\"https://drajzerova.org.rs\" rel=\"nofollow\" target=\"_blank\">Drajzerova.org.rs</a>";}  
  
// Bulgaria = BG
elseif ($country == "BG") {
  return "18+ | Хазартните игри могат да са пристрастяващи. Играйте отговорно. | <a href=\"https://www.gamblingtherapy.org/bg/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// United Kingdom = GB & UK
// New UK players only
elseif ($country == "GB" || $country == "UK") {
  return "18+ | Play Responsibly | <a href=\"https://www.begambleaware.org\" rel=\"nofollow\" target=\"_blank\">BeGambleAware.org</a> | <a href=\"https://www.taketimetothink.co.uk\" rel=\"nofollow\" target=\"_blank\">taketimetothink.co.uk</a> | <a href=\"https://www.gamstop.co.uk\" rel=\"nofollow\" target=\"_blank\">gamstop.co.uk</a> | <a href=\"https://www.gamcare.org.uk\" rel=\"nofollow\" target=\"_blank\">gamcare.org.uk</a> | <a href=\"https://www.gamblersanonymous.org.uk\" rel=\"nofollow\" target=\"_blank\">gamblersanonymous.org.uk</a>";}

/* #################### REST OF WORLD #################### */
// Restricted countries, wagering requirements & full T&C's apply
// Bonuses may vary by country
// New players only
// #AD Commercial Content
else {
  return "18+ (or min. legal age, depending on the region) | Gambling can be addictive, please play responsibly | <a href=\"https://www.gamblingtherapy.org\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
}
add_shortcode('responsible_gambling', 'responsible_gambling_shortcode');
?>
