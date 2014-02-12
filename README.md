<h1>CrZ - Ett PHP-baserat CMF</h1>

Detta ramverk är inspirerat av Lydia och skapat som projekt av Carl Sebastian Malm.

Krav:
<pre>
Webbserver som stödjer: 
- PHP 
- SQLite (chmod 666)

Site/data behöver filrättigheter (chmod 777) för att fungera korrekt.
</pre>
<h2>Ett steg i taget</h2>


1. Börja med att klona ramverket CrZ. Antingen laddar du hem zip-filen direkt från denna sida eller använder dig av Git Bash genom kommandot:
<br>
<pre>git clone https://github.com/csm93/CrZ</pre>

2. När du laddat hem ramverket börjar du med att ändra filen ".htaccess" som du finner bland filerna i mappen CrZ. 
<br>Ändra den fetmarkerade texten till din egna sökväg:

<pre>RewriteBase <b> /~camc13/phpmvc/projekt/CrZ/ </b></pre>

3. För att ramverket ska fungera korrekt behöver du ändra kataloger och filers rättigheter.
<br>Dessa behöver du ändra:

<pre>
Ändra mapp "site/data" till chmod 777</li>
Inuti mappen "data" finner du filen ht.sqlite. Ändra till chmod 666.</li>
Ändra mapp "themes/grid" till chmod 777.</li>
</pre>

4. Gå in på din webbsida: <pre>(ex: www.dindomän.se/CrZ)</pre> 
Gå därefter in på länken module/install som du finner på huvudsidan för att slutföra installationen.

Därefter ska din webbsida vara fullt fungerande!

<h2>Att använda CrZ</h2>

<p>CrZ är väldigt simpelt och fungerar på en enkel nivå. Dessvärre finns inget admin-gränssnitt men du kan ändå logga in med användarnamn: 
<b>doe</b> och lösenord: <b>doe</b>. Du kan även skapa din egna användare. Du får mer än gärna vidareutveckla CrZ och skapa en mer avancerad 
användarhantering. Det här projektet är öppet för alla.</p>

För att ändra webbsidan till DIN egna personliga webbsida så har du självklart möjligheter att ändra logotyp, slogan och namn.  
Allt detta gör du inuti site/config.php.
<br>
Det är helt enkelt bara byta ut informationen du ser här. Vill du byta bild är min rekommendation att du byter bilderna som redan finns. Men du kan även byta namn till dina bilder direkt i config.php om så önskas.
<pre>
// Add static entries for use in the template file.
  'menu_to_region' => array('my-navbar'=>'navbar'),
  'data' => array(
	'header' => 'CrZ',
	'slogan' => 'A PHP-based MVC-inspired CMF',
	'favicon' => 'logo_80x80.png',
	'logo' => 'logo_80x80.png',
	'logo_width' => 80,
	'logo_height' => 80,
	'footer' => 'CrZ &copy; by Carl Sebastian Malm</p>',
	),
</pre>






 