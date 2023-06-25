Title: It was too late, Twitter did it anyway

----

Date: 2023-1-20 11:30

----

OGImage: OGImage.png

----

OGImageALT: A graphic with the text “Blog Post: It was too late, Twitter did it anyway”

----

Teaser:
This week the APIs for third party clients, such as Twitterrific, just stopped working. I wasn't sure what headline to give this post. Twitter did something that was long overdue, but it did it in the worst possible way. Twitter killed third party clients this week, quietly, causing one hell of a stir in the community. Getting rid of these APIs was one of two valid choices that I could see. Let's talk about it!

----

Text:
### What happened
This week the APIs[^api] for third party clients, such as Twitterrific, just stopped working. I wasn't sure what headline to give this post. Twitter did something that was long overdue, but it did it in the worst possible way. Twitter killed third party clients this week, quietly, causing one hell of a stir in the community. Getting rid of these APIs was one of two valid choices that I could see. Let's talk about it!

[^api]: An API is essentially a point of contact between a service and apps. It is where apps go to get data or send data to. If you open the Twitter app, it calls the API to download your feed, if you tweet, it calls the API to send your tweet to Twitter. Some APIs are public, some are private. Public APIs are meant to be used by third parties, private APIs are usually reserved for apps made by the company itself.

### Some background on Twitter
Unlike other, more modern, social networks, Twitter didn't start with an app, it started as a website with an SMS interface.[^odeo] That is because Twitter is older than the iPhone, and first-class mobile internet was not a thing when Twitter launched. Much like many of the good things about Twitter, the idea of having an app to read and post tweets was not Twitter's, but came from the community. The now official Twitter client was originally a third party app[^tweetie] that was aquired by Twitter in 2010. This app also introduced the invention “pull to refresh”.[^pulltorefresh] A gesture so ubiquitous these days, you can even pull to refresh a website in Safari on iOS.

[^odeo]: Technically, Twitter started as part of Odeo, but the first iteration of Twitter as its own service was an SMS application. Source: <cite>(link: https://en.wikipedia.org/wiki/Twitter#History text: Twitter target: _blank)</cite> on Wikipedia.org.

[^tweetie]: Source: <cite>(link: https://en.wikipedia.org/wiki/Tweetie text: Tweetie target: _blank) on Wikipedia.org.

[^pulltorefresh]: <cite><q cite="https://en.wikipedia.org/wiki/Pull-to-refresh">The pull-to-refresh gesture first appeared in the Tweetie mobile application developed by Loren Brichter. Brichter developed Tweetie, an iOS application for Twitter, as a personal project in 2008 after he quit his job at Apple Inc. in 2007.</q> Quote: (link: https://en.wikipedia.org/wiki/Pull-to-refresh text: Pull-to-refresh target: _blank) on Wikipedia.org.

### Why these are belated growing pains
The time to pull third party APIs for Twitter would have been in April 2010—about 13 years ago. Back then Twitter did not stop supporting third party clients, and speculation about why could range from “too many users were using third party apps” to ”Twitter didn't yet have a business model that would suffer from having third party apps”. Twitter was run like a ship in the middle of the ocean caught in a thick fog and with very little wind in its sails for a long time. Profitability was not a priority. For example, third party clients never showed ads, making them arguably the better experience for Twitter.

### Twitter's inability to innovate
It was not a secret that Twitter needed to get its act together long before the Techno King of Tesla[^technoking] purchased it. Many users were annoyed by the ads in their timelines for long enough that they asked to be allowed to pay to use Twitter without ads. Take a second and let that sink in: Users asked to be allowed to pay. Just like @mentions, #tags, and quote tweets, Twitter Blue was introduced not as an innovation the company came up with, but in response to users suggesting it aggressively.

[^technoking]:
    > Elon is Technoking of Tesla and has served as our Chief Executive Officer since October 2008 and as a member of the Board since April 2004. […]
    
    <cite>(link: https://ir.tesla.com/corporate/elon-musk text: Elon Musk target: _blank)</cite> published by tesla.com.

### Forced to grow up
Fast forward to this week. Ever since he who shall not be named bought Twitter and took it private, many things have changed. In many regards he made Twitter worse, but there is one thing he got right: Twitter needs to become a profitable business or it will die. Pulling the plug on third party APIs is one way to go. Actually maintaining them and charging for their use would have been another. But quietly turning them off was the wrong move, alienating developers and users alike. The new Twitter CEO has a lot to learn in terms of communication. In my opinion, he is woefully inept in this regard.

### Update 20. Jan, 2023:
One — The alternative to shutting the APIs down was to maintain and monetize them.

Two — technically the APIs are still working, but Twitter updated the developer agreement <q>to make clear that app makers are no longer permitted to create their own clients.</q>[^engadget] They should have updated their terms and published that change with some lead time first and pulled the plug second. The way it was done and how Twitter talks about it now, makes it look like Twitter is attempting to re-write history to hide this embarrassing mismanagement.[^tweet]

[^engadget]: <cite>(link: https://www.engadget.com/twitter-new-developer-terms-ban-third-party-clients-211247096.html text: Twitter’s new developer terms ban third-party clients target: _blank)</cite> published January 19, 2023 by Karissa Bell on engadget.com.

[^tweet]: <q cite="https://twitter.com/TwitterDev/status/1615405842735714304">(link: https://twitter.com/TwitterDev/status/1615405842735714304 text: Twitter is enforcing its long-standing API rules. That may result in some apps not working. target: _blank)</q> published January 17, 2023 by @TwitterDev on Twitter.com.