Title: Wie Du KI Firmen davon abhältst Deinen Inhalt zu klauen

----

Date: 2023-10-06 18:45+2

----

Text:

## Was ist das Problem?
In letzter Zeit habe ich mir eine Frage immer wieder gestellt: Macht es mir etwas aus, wenn KI mit dem Text, den ich schreibe, trainiert wird? Meine Antwort darauf ist: Nein, es macht mir nichts aus. Ich hätte mir aber eine andere Frage stellen sollen: Stört es mich, wenn KI-Firmen meine Daten verwenden, um ihre Modelle zu trainieren, davon zu profitieren und mir nichts dafür bezahlen? Ja, das stört mich.

Unternehmen wie OpenAI, Meta (Facebook), Alphabet (Google) und andere nutzen die kostenlos, online verfügbaren Daten, um ihre KI-Modelle zu trainieren. Dabei bezahlen sie den Autoren und Urheberrechtsinhabern dieser Texte nichts. Oft ist die Frage wer welche Rechte über diese Texte hat sogar unklar. KIs durchkämmen mithilfe sogenannter „crawler”[^crawler] das Internet nach Informationen, die sie sich aneignen und ihren Nutzern präsentieren, oft ohne eine Quelle zu nennen oder das Recht über den Text zu besitzen.

[^crawler]: Ein Crawler ist eine Anwendung die auf einem Server ausgeführt wird und Websites liest. Sie klickt auf alle Links der Seite, um weitere Websites zum Lesen zu finden. Erfunden wurde das Prinzip um Suchmaschinen wie Google mit Daten auszustatten.

Ich möchte KI-Unternehmen daran hindern, meine Texte zu ihrem Vorteil zu nutzen, ohne mich dafür zu bezahlen. Wie ich das mache, erkläre ich in diesem Post und es ist relativ simpel. Ja, diesen Blog kann jedey kostenlos lesen, aber ich betrachte die Nutzung dieses Blogs als Trainingsmaterial für KI als eine Form des Raubkopierens.

## Die Lösung
Vielleicht denkst Du, wenn Du einfach die User-Agents[^userAgent] der Crawler von KI-Unternehmen in Deine `robots.txt`[^robotsTXT] einträgst, ist das Problem gelöst. Ja, wenn Du den KI-Unternehmen vertrauen willst, ist das die Lösung. Ich vertraue diesen Unternehmen allerdings nicht mehr. Was fehlt, ist also eine Lösung, die kein vertrauen voraussetzt.

[^robotsTXT]: Die Robots-Datei kann verwendet werden, um einem Crawler wie Google oder OpenAI mitzuteilen, dass es ihm verboten ist, eine bestimmte Seite einer Website zu lesen. Es handelt sich um eine Textdatei, die ein Webseiten-Administrator auf dem Server der Seite speichern kann. Die Einhaltung ist nicht garantiert oder durchsetzbar.

[^userAgent]: Der Begriff User-Agent steht für die Art des Computers, der gerade auf eine Website zugreift. Beispiel: Wenn Sie diese Website mit Google Chrome öffnen, zeigt der User-Agent dieser Website an, dass Sie Chrome verwenden. Wenn OpenAI auf diese Website zugreift, lautet der User-Agent entweder "GPTBot" oder "ChatGPT-User".

Eine solche Lösung ist eine durchsetzbare Technik, eine, deren Einhaltung Du unter Kontrolle hast: `.htaccess`. Htaccess ist ein Mechanismus, der vom Apache-Webserver verwendet wird — der wahrscheinlich am weitesten verbreiteten Serversoftware der Welt. Mit `.htaccess`-Dateien kann man das Verhalten des Servers anpassen.

Statt Crawler zu bitten wegzubleiben, verwehrst du ihnen den Zugang. Oder im Fall des Codes unten, sendest Du ihnen einfach eine leere Seite. Wenn Du von `.htaccess` noch nie gehört hast, ließ Dir bitte zuerst die (link: https://httpd.apache.org/docs/2.4/howto/htaccess.html text: Dokumentation auf der Apache Seite target: _blank) durch, bevor Du den Code unten blind nutzt.

### Die .htaccess-Datei

	<IfModule mod_rewrite.c>
	RewriteEngine on
	
	# Block AI scrapers
	RewriteCond %{HTTP_USER_AGENT} ^.*(CCBot|ChatGPT-User|FacebookBot|Google-Extended|GPTBot|Omgilibot).*$ [NC]
	RewriteRule .* - [F,L]
	
	</IfModule>

## Wie die .htaccess-Datei funktioniert
Wenn Apache so konfiguriert ist, dass es Nutzeranfragen umleiten kann, aktivieren wir das dafür nötige Modul:

	<IfModule mod_rewrite.c>
	RewriteEngine on

Danach legen wir fest, unter welchen Voraussetzungen wir die Anfragen umleiten wollen:

	RewriteCond %{HTTP_USER_AGENT} ^.*(CCBot|ChatGPT-User|FacebookBot|Google-Extended|GPTBot|Omgilibot).*$ [NC]

Wir nutzen `RewriteCond` und mit der Variable `HTTP_USER_AGENT`. Diese Variable testen wir auf diese Stichworte: CCBot, ChatGPT-User, FacebookBot, Google-Extended, GPTBot und Omgilibot. Wenn einer der Tests anschlägt, ändern wir das Verhalten des Servers und senden als ersatz für alle (`.*`) Adressen eine leere Seite (`-`).

	RewriteRule .* - [F,L]
	</IfModule>

## Ist diese Lösung effektiv?
Wahrscheinlich, aber es kann umgangen werden. Würde ein KI-Unternehmen seinen Crawler tarnen wollen, könnte es einfach einen gefälschten User-Agent senden. Einen, der unschuldig aussieht. Beispielsweise könnte ein Crawler vorgeben der Google Chrome browser oder Firefox zu sein, und die Website würde ihn unbehelligt hineinlassen. Für diesen Blog werde ich dieses Risiko vorerst eingehen.

## Was könnte man noch blockieren?
Der Blogger "Fox" veröffentlichte (Link: https://3xn.nl/projects/2023/10/06/bot-block-party/ text: eine lange Liste von User-Agenten target: _blank), die er blockiert. Nutze diese Liste, falls Du weiter gehen willst als ich. Ich habe mich entschieden, diese Liste nicht zu übernehmen, da ich noch nicht weiß, um welche Dienste es sich bei diesen User-Agents handelt.