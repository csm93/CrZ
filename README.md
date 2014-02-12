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
git clone https://github.com/csm93/CrZ

2. N�r du laddat hem ramverket b�rjar du med att �ndra filen ".htaccess" som du finner bland filerna i mappen CrZ. 
<br>�ndra fetmarkerade till din egna s�kv�g:

<pre> 
RewriteBase <b> /~camc13/phpmvc/projekt/CrZ/ </b>
</pre>

3. F�r att ramverket ska fungera korrekt beh�ver du �ndra kataloger och filers r�ttigheter.
<br>Dessa beh�ver du �ndra:

<pre>
<ul>
<li>�ndra mapp "site/data" till chmod 777</li>
<li>Inuti mappen "data" finner du filen ht.sqlite. �ndra chmod till 666.</li>
<li>�ndra mapp "themes/grid" till chmod 777.</li>
</ul>
</pre>

4. G� in p� din webbsida: <pre>(ex: www.dindom�n.se/CrZ)</pre> 
G� d�refter in p� l�nken module/install som du finner p� huvudsidan f�r att slutf�ra installationen.

D�refter ska din webbsida vara fullt fungerande!

<h2>Att anv�nda CrZ</h2>






 