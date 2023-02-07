<?php
function responsible_gambling_shortcode() {
  $country = $_SERVER["HTTP_CF_IPCOUNTRY"];

/* #################### NORTH AMERICA #################### */
// United States = US
if ($country == "US") {
  return "21+ | Bet with your head, not over it! Please play responsibly. | Gambling Problem? Call 1-800-GAMBLER or visit <a href=\"https://800gambler.org\" rel=\"nofollow\" target=\"_blank\">800gambler.org</a> | <a href=\"https://www.ncpgambling.org\" rel=\"nofollow\" target=\"_blank\">ncpgambling.org</a>";}

// Canada = CA
elseif ($country == "CA") {
  return "19+ | 18+ in AB, MB, & QC | Gambling can be addictive, please play responsibly. | <a href=\"https://responsiblegambling.org\" rel=\"nofollow\" target=\"_blank\">Responsiblegambling.org</a>";}
  
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
  return "18+ | Chances are you’re about to lose. Please play responsibly | Gambling Problem? Call 1800 858 858 or visit <a href=\"https://www.gamblinghelponline.org.au\" rel=\"nofollow\" target=\"_blank\">Gamblinghelponline.org.au</a>";}
  
// New Zealand = NZ
elseif ($country == "NZ") {
  return "18+ | Gambling can be addictive, please play responsibly | <a href=\"https://www.gamblingtherapy.org\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

/* #################### LATAM #################### */
// Brazil = BR
elseif ($country == "BR") {
  return "18+ | Os jogos de azar podem ser viciantes. Por favor, jogue de forma responsável. | <a href=\"https://www.gamblingtherapy.org/pt-br/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Chile = CL
elseif ($country == "CL") {
  return "18+ | Por favor, juega con responsabilidad. | <a href=\"https://www.gamblingtherapy.org/es/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Colombia = CO
elseif ($country == "CO") {
  return "18+ | Juega responsablemente | <a href=\"https://www.gamblingtherapy.org/es/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Argentina = AR
elseif ($country == "AR") {
  return "18+ | Jugá con responsabilidad | <a href=\"https://www.gamblingtherapy.org/es/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Mexico = MX
elseif ($country == "MX") {
  return "18+ | Por favor, juega con responsabilidad. | <a href=\"https://www.jugadoresanonimos.org\" rel=\"nofollow\" target=\"_blank\">Jugadoresanonimos.org</a> | <a href=\"https://www.gamblingtherapy.org/es/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Peru = PE
elseif ($country == "PE") {
  return "18+ | El juego puede ser adictivo. Por favor, juega con responsabilidad. | <a href=\"https://www.gamblingtherapy.org/es/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
   
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
  return "21+ | Play Responsibly | <a href=\"https://responsiblegambling.org.za\" rel=\"nofollow\" target=\"_blank\">responsiblegambling.org.za</a> | <a href=\"https://www.gamblingtherapy.org/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Kenya = KE
elseif ($country == "KE") {
  return "18+ | Gambling can be addictive, please play Responsibly. | <a href=\"https://gamhelpkenya.com\" rel=\"nofollow\" target=\"_blank\">Gamhelpkenya.com</a> | <a href=\"https://www.gamblingtherapy.org/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Ghana = GH
elseif ($country == "GH") {
  return "18+ | Gambling can be addictive, please play Responsibly. | <a href=\"https://www.gamblingtherapy.org/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Nigeria = NG
elseif ($country == "NG") {
  return "18+ | Gambling can be addictive, please play Responsibly. | <a href=\"https://www.gamblingtherapy.org/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Uganda = NG
elseif ($country == "NG") {
  return "18+ | Gambling can be addictive and psychologically harmful. Please play Responsibly. | <a href=\"https://www.gamblingtherapy.org/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
/* #################### EUROPE – NORDIC COUNTRIES #################### */
// Denmark = DK 
// T&C's Apply: Regler og vilkår gælder
elseif ($country == "DK") {
  return "18+ | Spil ansvarligt! | Kontakt Spillemyndighedens hjælpelinje på <a href=\"https://www.stopspillet.dk\" rel=\"nofollow\" target=\"_blank\">StopSpillet.dk</a> – Ring til +45 70 22 28 25 | Udeluk dig via <a href=\"https://www.rofus.nu\" rel=\"nofollow\" target=\"_blank\">ROFUS.nu</a> | <a href=\"https://ludomani.dk\" rel=\"nofollow\" target=\"_blank\">Ludomani.dk</a> | <a href=\"https://www.gamblingtherapy.org/da/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}  
  
// Finland = FI
// T&C's Apply: Säännöt ja ehdot voimassa
// Commercial content: Kaupallinen sisältö
elseif ($country == "FI") {
  return "18+ | Pelaa vastuullisesti | <a href=\"https://www.peluuri.fi\" rel=\"nofollow\" target=\"_blank\">Peluuri.fi</a> | <a href=\"https://www.gamblingtherapy.org/fi/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Norway = NO
elseif ($country == "NO") {
  return "18+ | Spill ansvarlig | <a href=\"https://hjelpelinjen.no\" rel=\"nofollow\" target=\"_blank\">Hjelpelinjen.no</a> | <a href=\"https://www.gamblingtherapy.org/no/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}  
  
// Sweden = SE
// Commercial content: Kommersiellt innehåll
// T&C's Apply: Regler & villkor gäller
// New Customers Only: Endast nya kunder
elseif ($country == "SE") {
  return "18+ | Spela ansvarsfullt | <a href=\"https://stodlinjen.se\" rel=\"nofollow\" target=\"_blank\">Stodlinjen.se</a> | <a href=\"https://spelpaus.se\" rel=\"nofollow\" target=\"_blank\">Spelpaus.se</a> | <a href=\"https://www.gamblingtherapy.org/sv/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Iceland = IS
elseif ($country == "IS") {
  return "18+ | Vertu ábyrg(ur) | <a href=\"https://www.abyrgspilun.is\" rel=\"nofollow\" target=\"_blank\">Abyrgspilun.is</a>";}
  
/* #################### EUROPE – BALTICS #################### */
// Lithuania = LT
elseif ($country == "LT") {
  return "21+ Kazino | 18+ Sportas | Lošimo atsakomybė | <a href=\"https://www.gamblingtherapy.org/lt/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Latvia = LV
elseif ($country == "LV") {
  return "18+ | Azartspēļu spēlēšana var izraisīt atkarību. Lūdzu, spēlē atbildīgi. | <a href=\"https://www.as.org.lv\" rel=\"nofollow\" target=\"_blank\">www.as.org.lv</a> | <a href=\"https://www.gamblingtherapy.org/lv/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Estonia = EE
// Gambling Ad disclaimer: Tähelepanu! Tegemist on hasartmängu reklaamiga. Hasartmäng pole sobiv viis rahaliste probleemide lahendamiseks. Tutvuge reeglitega ja käituge vastutustundlikult!
elseif ($country == "EE") {
  return "21+ Kasiino | 18+ Sport | Hasartmängud võivad tekitada sõltuvust. Mängi vastutustundlikult. | <a href=\"https://15410.ee\" rel=\"nofollow\" target=\"_blank\">15410.ee</a> | <a href=\"https://www.gamblingtherapy.org/et/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}  
  
/* #################### EUROPE – DACH & BENELUX #################### */
// Austria = AT
// T&C's Apply: AGB gelten
elseif ($country == "AT") {
  return "18+ | Spielen Sie verantwortungsvoll | <a href=\"https://www.gamblingtherapy.org/de/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";} 

// Switzerland = CH
elseif ($country == "CH") {
  return "18+ | Glücksspiel kann süchtig machen. Spielen Sie verantwortungsvoll. | <a href=\"https://sos-jeu.ch\" rel=\"nofollow\" target=\"_blank\">sos-jeu.ch</a> | <a href=\"https://www.sos-spielsucht.ch\" rel=\"nofollow\" target=\"_blank\">sos-spielsucht.ch</a> | <a href=\"https://www.gamblingtherapy.org/de/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Liechtenstein = LI
elseif ($country == "LI") {
  return "18+ | Glücksspiel kann süchtig machen. Spiele verantwortungsvoll. | <a href=\"https://www.gamblingtherapy.org/de/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Germany = DE
// T&C's Apply: AGB gelten
elseif ($country == "DE") {
  return "18+ | Glücksspiel kann süchtig machen. Spiele verantwortungsvoll. | Hilfe finden Sie auf <a href=\"https://www.bzga.de\" rel=\"nofollow\" target=\"_blank\">www.bzga.de</a> | <a href=\"https://www.gamblingtherapy.org/de/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Belgium = BE
// Alternative text: Le jeu peut être addictif. Jouez de manière responsable.
elseif ($country == "BE") {
  return "21+ | Speel Verantwoord | <a href=\"https://gokhulp.be\" rel=\"nofollow\" target=\"_blank\">Gokhulp.be</a>";}

// Netherlands = NL
elseif ($country == "NL") {
  return "18+ | Speel Bewust | <a href=\"https://speelbewust.nl\" rel=\"nofollow\" target=\"_blank\">Speelbewust.nl</a> | <a href=\"https://www.gamblingtherapy.org/nl/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
/* #################### EUROPE #################### */
// Czechia = CZ
elseif ($country == "CZ") {
  return "18+ | Hraj s uvážením | <a href=\"https://www.hazardni-hrani.cz\" rel=\"nofollow\" target=\"_blank\">Hazardni-hrani.cz</a> | <a href=\"https://www.gamblingtherapy.org/cs/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Spain = ES
// T&C's Apply: Aplican Términos y Condiciones
// Commercial content: Publicidad
elseif ($country == "ES") {
  return "18+ | Juega responsablemente | <a href=\"https://jugarbien.es\" rel=\"nofollow\" target=\"_blank\">Jugarbien.es</a> | <a href=\"https://www.gamblingtherapy.org/es/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// France = FR
// Commercial content: Ce site contient un contenu commercial
elseif ($country == "FR") {
  return "18+ | El juego puede ser adictivo. Jouez responsablement. | <a href=\"https://www.evalujeu.fr\" rel=\"nofollow\" target=\"_blank\">Evalujeu.fr</a> | <a href=\"https://www.gamblingtherapy.org/fr/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
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
  return "18+ | Gamble responsibly | <a href=\"https://gamblingcare.ie\" rel=\"nofollow\" target=\"_blank\">GamblingCare.ie</a> | <a href=\"https://www.gamblersanonymous.ie\" rel=\"nofollow\" target=\"_blank\">GamblersAnonymous.ie</a>";}

// Italy = IT
// Commercial content: Questo sito contiene contenuto commerciale
elseif ($country == "IT") {
  return "18+ | Il gioco può creare dipendenza patologica. Gioca responsabilmente. | <a href=\"https://www.gioca-responsabile.it\" rel=\"nofollow\" target=\"_blank\">Gioca-responsabile.it</a> | <a href=\"https://www.gamblingtherapy.org/it/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Malta = MT
// https://www.mga.org.mt/wp-content/uploads/Commercial-Communications-Committee-Guidelines.pdf
elseif ($country == "MT") {
  return "18+ | Play responsibly | <a href=\"https://www.rgf.org.mt\" rel=\"nofollow\" target=\"_blank\">rgf.org.mt</a> | <a href=\"https://www.gamblingtherapy.org\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Poland = PL
// Commercial content: Strona zawiera treści reklamowe
elseif ($country == "PL") {
  return "18+ | Hazard może uzależniać. Graj odpowiedzialnie. | <a href=\"https://www.gamblingtherapy.org/pl/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Portugal = PT
// T&C's Apply: Aplicam-se Termos & condições
// Alternative text: Jogar pode ser viciante. Jogue com responsabilidade.
elseif ($country == "PT") {
  return "18+ | Jogue responsavelmente | <a href=\"https://jogoresponsavel.pt\" rel=\"nofollow\" target=\"_blank\">Jogoresponsavel.pt</a> | <a href=\"https://www.gamblingtherapy.org/pt-pt/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}

// Romania = RO
elseif ($country == "RO") {
  return "18+ | Jocurile de noroc pot crea dependență. Joacă Responsabil. | <a href=\"https://jocresponsabil.ro\" rel=\"nofollow\" target=\"_blank\">Jocresponsabil.ro</a> | <a href=\"https://www.gamblingtherapy.org/ro/\" rel=\"nofollow\" target=\"_blank\">Gamblingtherapy.org</a>";}
  
// Slovenia = SI
elseif ($country == "SI") {
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
