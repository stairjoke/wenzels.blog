---
title: Some AI companies steal. Here is how you can stop them.
date: 2023-10-06
teaser: AI companies like OpenAI, Meta, and Alphabet use data available online to train their AI/LLM models without compensation or permission. In this post I propose using `.htaccess` to lock them out.
---
## What is the problem?
Lately, I've been asking myself one question repeatedly: Do I mind if AI is trained with the text I write? My answer to that is: No, I don't mind. I should have asked myself a different question, though: Do I mind when AI companies use my data to train their models, profit from it, and pay me nothing in return? Yes, it bothers me.

Companies like OpenAI, Meta (Facebook), Alphabet (Google) and others are using the freely online available data to train their AI models. Yet they pay nothing to the authors and copyright holders of these texts. Often, the question of who has what rights over these texts is also unclear. AIs, with the help of so-called "crawlers"[^crawler], scour the Internet for information that they appropriate and present to their users, often without citing a source or holding the right over the text.

[^crawler]: A crawler is an application that runs on a server and reads websites. It clicks on all the links on the page to find more websites to read. They were invented to provide data to search engines like Google.

I want to stop AI companies from using my writing to their advantage without paying me. In this post I explain how I do that, and it's relatively simple. Yes, this blog is free for anyone to read, but I consider using this blog as training material for AI a form of piracy.

## The solution
Maybe you think that if you just put the AI companies' crawlers' user agents[^userAgent] into your `robots.txt`[^robotsTXT], the problem is solved. Indeed, if you want to trust the AI companies, that's the solution. However, I don't trust these companies anymore. So what we need is a solution that doesn't require trust.

[^robotsTXT]: The robots file can be used to tell a crawler such as Google or OpenAI that it is forbidden to read a particular page of a website. It is a text file that a website administrator can store on the site's server. Compliance is not guaranteed or enforceable.

[^userAgent]: The term user agent represents the type of computer that is currently accessing a website. Example: If you open this website using Google Chrome, the server will see your user agent indicate that you are using Chrome. When OpenAI accesses this website, the user agent is either "GPTBot" or "ChatGPT-User".

Such a solution is an enforceable technique, one whose compliance you have under control: `.htaccess`. Htaccess is a mechanism used by the Apache web server — probably the most widely used server software in the world. With `.htaccess` files you can customize the behavior of the server.

Instead of asking crawlers to stay away, you deny them access. Or in the case of the code below, you simply send them an empty page. If you have never heard of `.htaccess`, please read the [documentation on the Apache website](link: https://httpd.apache.org/docs/2.4/howto/htaccess.html) before blindly using the code below.

### The .htaccess-file

```apache
<IfModule mod_rewrite.c>
    RewriteEngine on

    # Block AI scrapers
    RewriteCond %{HTTP_USER_AGENT} ^.*(CCBot|ChatGPT-User|FacebookBot|Google-Extended|GPTBot|Omgilibot).*$ [NC]
    RewriteRule .* - [F,L]

</IfModule>
```

## How this .htaccess-Datei works
If Apache is configured to allow redirecting user requests, we enable the necessary module:
```apache
<IfModule mod_rewrite.c>
	RewriteEngine on
```
Then, we specify the conditions under which we want to redirect requests:
```apache
    RewriteCond %{HTTP_USER_AGENT} ^.*(CCBot|ChatGPT-User|FacebookBot|Google-Extended|GPTBot|Omgilibot).*$ [NC]
```
We use `RewriteCond` and with the variable `HTTP_USER_AGENT`. We test this variable for these keywords: CCBot, ChatGPT-User, FacebookBot, Google-Extended, GPTBot and Omgilibot. If one of the tests is successful, we change the behavior of the server and send an empty page (`-`) as a replacement for all (`.*`) addresses.
```apache
    RewriteRule .* - [F,L]
</IfModule>
```

## Is this solution effective?
Probably, but it can be circumvented. If an AI company wanted to cloak its crawler, it could simply send a spoofed user agent. One that looks innocent. For example, a crawler could pretend to be the Google Chrome browser or Firefox, and the site would let it in merrily. For this blog, I'll take that risk for now.

## What else could be blocked?
The blogger "Fox" published [a long list of user agents](https://3xn.nl/projects/2023/10/06/bot-block-party/) which he blocks. Use this list if you want to go further than me. I decided not to include this list because I don't yet know what services these user agents represent.
