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
git clone https://github.com/csm93/CrZ

2. När du laddat hem ramverket börjar du med att ändra filen ".htaccess" som du finner bland filerna i mappen CrZ. 
<br>Ändra fetmarkerade till din egna sökväg:

<pre>RewriteBase <b> /~camc13/phpmvc/projekt/CrZ/ </b></pre>

3. För att ramverket ska fungera korrekt behöver du ändra kataloger och filers rättigheter.
<br>Dessa behöver du ändra:

<pre>
<ul>
<li>Ändra mapp "site/data" till chmod 777</li>
<li>Inuti mappen "data" finner du filen ht.sqlite. Ändra chmod till 666.</li>
<li>Ändra mapp "themes/grid" till chmod 777.</li>
</ul>
</pre>

4. Gå in på din webbsida: <pre>(ex: www.dindomän.se/CrZ)</pre> 
Gå därefter in på länken module/install som du finner på huvudsidan för att slutföra installationen.

Därefter ska din webbsida vara fullt fungerande!

<h2>Att använda CrZ</h2>






 