Title: Wie Du KI Firmen davon abhältst Deinen Inhalt zu klauen

----

Date: 2023-10-06 11:00+2

----

Text:

## Was ist das Problem?
In letzter Zeit habe ich mir diese Frage immer wieder gestellt: "Macht es mir etwas aus, wenn KI mit dem Text, den ich schreibe, trainiert wird?" Und meine Antwort lautet: Nein, es macht mir nichts aus. Aber es ist eine andere Frage, die ich mir stellen sollte. Die Frage sollte lauten: Wer trainiert die KI und zu welchem Zweck? Ich sollte mir die Frage stellen: "Stört es mich, wenn KI-Firmen meine Daten verwenden, um ihre Modelle zu trainieren, davon zu profitieren und mir nichts dafür bezahlen?" Ja, das stört mich.

Unternehmen wie OpenAI, Meta (Facebook), Alphabet (Google) und andere haben die kostenlos online verfügbaren Daten genutzt, um ihre KI-Modelle zu trainieren, ohne den Autoren und Urheberrechtsinhabern dieser Texte etwas zu bezahlen. Und KI durchkämmen mithilfe sogenannter „crawler”[^crawler] das Internet nach Informationen, die sie sich dann aneignen und ihren Nutzern präsentieren, oft ohne die Quelle zu nennen.

[^crawler]: Ein Crawler ist eine Anwendung, die auf einem internetverbundenen Gerät, beispielsweise einem Server, ausgeführt wird und Websites liest und auf Links klickt, um weitere Websites zum Lesen zu finden. Im Prinzip ist dies der Grund, warum Google weiß, was es Dir in den Suchergebnissen zeigen soll.

Ich möchte Unternehmen daran hindern, meine Texte zu ihrem Vorteil zu nutzen, ohne mich dafür zu bezahlen. Ja, diesen Blog kann jeder kostenlos lesen, aber ich betrachte die Nutzung als Trainingsmaterial für eine KI als eine Form des Kopierens und Remixens. Und das zu tun, ohne mich zu erwähnen und/oder zu bezahlen, ist in meinen Augen Diebstahl.

## Die Lösung
Du könntest denken, dass die `robots.txt`[^robotsTXT] die Lösung für dieses Problem ist. Und ja, wenn man den KI-Unternehmen vertrauen könnte, dass sie die in dieser Datei festgelegten Regeln einhalten, wäre die Lösung, dieser Datei einige User-Agents[^userAgent] hinzuzufügen und das Problem wäre gelöst. Aber vertraust Du wirklich darauf, dass die KI-Crawler das respektieren? Ich nicht.

[^robotsTXT]: Die Robots-Datei kann verwendet werden, um einem Crawler wie Google oder OpenAI mitzuteilen, dass es ihm verboten ist, eine bestimmte Seite einer Website zu lesen. Es handelt sich um eine Textdatei, die ein Webseiten-Administrator auf seinen Servern speichern kann. Die Einhaltung ist nicht garantiert oder durchsetzbar.

[^userAgent]: Der Begriff User-Agent steht für die Art des Computers, der gerade auf eine Website zugreift. Beispiel: Wenn Sie diese Website mit Google Chrome öffnen, zeigt der User-Agent dieser Website an, dass Sie Chrome verwenden. Wenn OpenAI auf diese Website zugreift, lautet der User-Agent entweder "GPTBot" oder "ChatGPT-User".

Also, was kannst Du tun? Du nutzt eine durchsetzbare Technik, um AI-Crawler zu verbieten: `.htaccess`. Anstatt Crawler zu bitten, wegzubleiben, verwehrst du ihnen den Zugang. Der folgende Codeausschnitt tut genau das für die bekanntesten Bots, und weiter unten erkläre ich, wie es funktioniert und welche anderen Bots Du vielleicht zusätzlich blockieren willst.

	<IfModule mod_rewrite.c>
	RewriteEngine on
	
	# Block AI scrapers
	RewriteCond %{HTTP_USER_AGENT} ^.*(CCBot|ChatGPT-User|FacebookBot|Google-Extended|GPTBot|Omgilibot).*$ [NC]
	RewriteRule .* - [F,L]
	
	</IfModule>

## Ist das effektiv?
Wahrscheinlich, aber es ist leicht zu umgehen. Wenn ein Unternehmen seinen Crawler tarnen wollte, könnte es einen gefälschten User-Agent-String verwenden, der unschuldig aussieht. Der Crawler könnte vorgeben, Google Chrome oder Firefox zu sein, und Deine Website würde ihn unbehelligt hineinlassen. Für diesen Blog werde ich dieses Risiko eingehen. Ich bin mir ziemlich sicher, dass es ein ziemlicher Skandal wäre, wenn das passieren würde, und die Tech-Community würde ausrasten.

## Wie die .htaccess-Datei funktioniert
Htaccess ist ein Mechanismus, der vom Apache-Webserver verwendet wird — der wahrscheinlich am weitesten verbreiteten Serversoftware der Welt. Mit `.htaccess`-Dateien kann man viel machen, und diese hier tut dies:

**1 — Wenn Apache so konfiguriert ist, dass es Nutzeranfragen umleiten kann, aktivieren wir das dafür nötige Modul:**

	<IfModule mod_rewrite.c>
	RewriteEngine on

**2 — Danach legen wir fest, unter welchen Voraussetzungen wir die Anfragen umleiten wollen:**

	RewriteCond %{HTTP_USER_AGENT} ^.*(CCBot|ChatGPT-User|FacebookBot|Google-Extended|GPTBot|Omgilibot).*$ [NC]

Diese Zeile ließt den User-Agent und vergleicht ihn mit vorgegebenen Diensten: CCBot, ChatGPT-User, FacebookBot, Google-Extended, GPTBot, or Omgilibot.

**3 — Umleitung ins Leere:**

	RewriteRule .* - [F,L]
	</IfModule>

Wenn die letzte Zeile einen bekannten Bot erkennt, leitet diese Zeile jede Anfrage (`.*`) ins Leere (`-`). Zum Ende wird noch die if-Verzweigung geschlossen, die in der ersten Zeile geöffnet wurde.

## Was könnte man noch blockieren?
Der Blogger "Fox" veröffentlichte (Link: https://3xn.nl/projects/2023/10/06/bot-block-party/ text: eine lange Liste von User-Agenten target: _blank), die er blockiert. Nutze diese Liste, falls Du weiter gehen willst als ich. Ich habe mich entschieden, diese Liste nicht zu übernehmen, da ich noch nicht weiß, um welche Dienste es sich bei diesen User-Agents handelt, und ich nicht versehentlich die falschen blockieren möchte.