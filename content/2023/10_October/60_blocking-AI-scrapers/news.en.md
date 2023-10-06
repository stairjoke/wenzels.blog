Title: Some AI companies steal. Here is how you can stop them.

----

Date: 2023-10-06 11:00+2

----

Text:

## What’s the problem?
Recently I’ve been pondering this question: “Do I mind if AI is trained using the text I write?” And my answer is no, I don’t mind, but it is the wrong question to ask. The question should include who trains the AI and to what end? I should be asking myself: “Do I mind if AI companies use my data to train their models, profit from it, and not pay me anything in return?” Yes, I do mind.

Companies like OpenAI, Meta (Facebook), Alphabet (Google), and others have been using data available online for free to train their AI models without paying the authors and copyright holders of those texts. And AIs crawl[^crawler] the internet for information they then appropriate and present to their users, often without crediting the source.

[^crawler]: A crawler is an application running on an internet connected device, such as a server, that reads websites and clicks on links to find more websites to read. Its basically how Google knows what to show you in search results.

I want to stop companies from using my writing to their benefit without paying me. Yes, this blog is free for anybody to read, but I consider its use as training data for an AI as a form of copying and remixing. And doing so without crediting me and/or paying me is theft in my eyes.

## The solution
You might think that the `robots.txt`[^robotsTXT] is the solution to this problem. And yes, if AI companies could be trusted to respect the rules set in this file, the solution would be to add some user-agents[^userAgent] to the file and call it a day. But really, do you trust the AI crawlers to respect that? I don’t.

[^robotsTXT]: The Robots-file can be used to tell a crawler, like Google or OpenAI, that it is forbidden from reading some specified page of a website. It is a text-file a website administrator can store on their servers. Compliance is not guaranteed or enforceable.

[^userAgent]: The term user-agent stands for the kind of computer currently accessing a website. Example: If you open this website using Google Chrome, the user-agent visible to this website will reveal you’re using Chrome. If OpenAI accesses this website, the user-agent will be either “GPTBot” or “ChatGPT-User”.

So, what do you do? You use an enforceable way to ban AI crawlers: `.htaccess`. Instead of asking crawlers to stay away, you deny them access. The following snippet does just that for the most prominent bots, and below I explain how it works and what else you might want to block.

	<IfModule mod_rewrite.c>
	RewriteEngine on
	
	# Block AI scrapers
	RewriteCond %{HTTP_USER_AGENT} ^.*(CCBot|ChatGPT-User|FacebookBot|Google-Extended|GPTBot|Omgilibot).*$ [NC]
	RewriteRule .* - [F,L]
	
	</IfModule>

## Is this effective?
Probably, but it is easy to circumvent. If a company wanted to disguise their crawler, they could use a dishonest user-agent string that looks innocent. The crawler could pretend to be Google Chrome or Firefox, and your website would let them in without noticing. For this blog, I’ll take that risk. I’m pretty sure it would be quite the scandal if this happened and the tech community would be up in arms about it.

## How the .htaccess-file works
Htaccess is a mechanism used by the Apache web-server — probably the most widely used server software in the world. You can do a lot with `.htaccess`-files, and this one does this:

**1 — If Apache is configured to allow editing user-requests, turn the `RewriteEngine` on:**

	<IfModule mod_rewrite.c>
	RewriteEngine on

**2 — Set the conditions under which we want to block access:**

	RewriteCond %{HTTP_USER_AGENT} ^.*(CCBot|ChatGPT-User|FacebookBot|Google-Extended|GPTBot|Omgilibot).*$ [NC]

This line looks for the user-agent and tests if it is either CCBot, ChatGPT-User, FacebookBot, Google-Extended, GPTBot, or Omgilibot.

**3 — Block access:**

	RewriteRule .* - [F,L]
	</IfModule>

This last rule redirects any (`.*`) of their requests to nowhere (`-`), then ends the "if Apache is configured to allow editing user-requests"-section of the `.htaccess`-file.

## What else to block?
The blogger “Fox” published (link: https://3xn.nl/projects/2023/10/06/bot-block-party/ text: a long list of user-agents target: _blank) they’re blocking. Use it in case you want to go further than me. I decided not to copy this list, because I don’t yet know what services all of those user-agents are, and I don’t want to accidentally block the wrong ones.

----

Uuid: Nxw4YdBFi3BEJlCd