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

F�r att �ndra webbsidan till DIN egna personliga webbsida s� har du sj�lvklart m�jligheter att �ndra logotyp, slogan och namn.  
Allt detta g�r du inuti site/config.php.
<br>
Det �r helt enkelt bara byta ut informationen du ser h�r. Vill du byta bild �r min rekommendation att du byter bilderna som redan finns. Men du kan �ven byta namn till dina bilder direkt i config.php om s� �nskas.
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






 