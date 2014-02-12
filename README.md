<h1>CrZ - Ett PHP-baserat CMF</h1>

Detta ramverk �r inspirerat av Lydia och skapat som projekt av Carl Sebastian Malm.

Krav:
<pre>
Webbserver som st�djer: 
- PHP 
- SQLite (chmod 666)

Site/data beh�ver filr�ttigheter (chmod 777) f�r att fungera korrekt.
</pre>
<h2>Ett steg i taget</h2>


1. B�rja med att klona ramverket CrZ. Antingen laddar du hem zip-filen direkt fr�n denna sida eller anv�nder dig av Git Bash genom kommandot:
<br>
<pre>git clone https://github.com/csm93/CrZ</pre>

2. N�r du laddat hem ramverket b�rjar du med att �ndra filen ".htaccess" som du finner bland filerna i mappen CrZ. 
<br>�ndra den fetmarkerade texten till din egna s�kv�g:

<pre>RewriteBase <b> /~camc13/phpmvc/projekt/CrZ/ </b></pre>

3. F�r att ramverket ska fungera korrekt beh�ver du �ndra kataloger och filers r�ttigheter.
<br>Dessa beh�ver du �ndra:

<pre>
�ndra mapp "site/data" till chmod 777</li>
Inuti mappen "data" finner du filen ht.sqlite. �ndra till chmod 666.</li>
�ndra mapp "themes/grid" till chmod 777.</li>
</pre>

4. G� in p� din webbsida: <pre>(ex: www.dindom�n.se/CrZ)</pre> 
G� d�refter in p� l�nken module/install som du finner p� huvudsidan f�r att slutf�ra installationen.

D�refter ska din webbsida vara fullt fungerande!

<h2>Att anv�nda CrZ</h2>

<p>CrZ �r v�ldigt simpelt och fungerar p� en enkel niv�. Dessv�rre finns inget admin-gr�nssnitt men du kan �nd� logga in med anv�ndarnamn: 
<b>doe</b> och l�senord: <b>doe</b>. Du kan �ven skapa din egna anv�ndare. Du f�r mer �n g�rna vidareutveckla CrZ och skapa en mer avancerad 
anv�ndarhantering. Det h�r projektet �r �ppet f�r alla.</p>

F�r att �ndra webbsidan till DIN egna personliga webbsida s� har du sj�lvklart m�jligheter att �ndra logotyp, slogan och namn. Allt detta g�r du inuti <pre> site/config.php. </pre>
<br>
Det �r helt enkelt bara att byta ut informationen du ser h�r nedanf�r. Vill du byta logotyp �r min rekommendation att du byter ut bilden som redan finns och beh�ller samma namn p� filen. Men du kan �ven byta namn till din logotyp direkt i <pre> site/config.php </pre> om s� �nskas.
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

<h2>�ndra utseende</h2>

F�rutom att �ndra f�rg och utseende kan du �ven l�gga till nya l�nkar om du vill. Allt detta g�rs i <pre> site/config.php </pre>

<p>H�r �ndrar du l�nkar i menyn:</p>


 