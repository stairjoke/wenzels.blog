---
title: |
  Improving Apple’s UX: Subscription Edition
date: 2023-03-20
teaser: |
  Subscribing to Apple TV+ via the macOS TV App unexpectedly resulted in a subscription to AppleOne instead. This confused me until I realized Apple had selected the cheaper option without asking.
---
Last night we decided to watch the latest season of Ted Lasso. It’s the first AppleTV+ show we watched in a long time, so we had to subscribe to AppleTV+ again. The TV App on macOS asked if we wanted to subscribe to AppleOne or only add the TV+ subscription to the existing family plan we’re using, and because we have no interest in Fitness+ or Arcade, we went with adding TV+ to the plan.

I was surprised when the subscription confirmation said we had successfully subscribed to AppleOne—not TV+. Still, I figured it was one of the countless bugs in Apple’s products these days, and I decided not to worry about it. This morning, I found a subscription confirmation in my inbox saying we’d subscribed to AppleOne—not Apple TV+.

As you might imagine, I was a bit annoyed. Surely Apple wouldn’t mess things like this up, right? Well, long story short: Apple did subscribe us to AppleOne, instead of AppleTV+. They did that because it was 2.02€ cheaper per month than just adding TV+ to our family subscription. Thanks, Apple!

So, why am I complaining again? Because the interaction I experienced was bad UX. Imagine clicking on a button that says you have to pay 6,99€/month and getting an invoice for 31,95€—how would you respond?

In this process, Apple broke with two of the ten heuristics for good UX by Jakob Nielsen.

> 1: Visibility of system status
> The design should always keep users informed about what is going on, through appropriate feedback within a reasonable amount of time.
> 
> […]
> 
> 9: Help users recognize, diagnose, and recover from errors
> Error messages should be expressed in plain language (no error codes), precisely indicate the problem, and constructively suggest a solution.
> — Jakob Nielsen[^nngroup]

[^nngroup]: <cite>(link: https://www.nngroup.com/articles/ten-usability-heuristics/ text: 10 Usability Heuristics for User Interface Design target: _blank)</cite> published April 24, 1994 by Jakob Nielsen, available on nngroup.com.

To recover from this error, I had to consult Apple’s documentation, which told me to cancel my subscription. I had to navigate the refund pages linked in the confirmation e-mail. And only in the very last step of the process of canceling my subscription did the UI tell me that subscribing to AppleTV+ alone would be more expensive than using AppleOne because I am using Apple Music and pay for 2TB on iCloud.

Improving the user experience here would be easy: Show a dialog that looks somewhat like this:

![The image shows a fictional macOS system dialog.](assets/2023-03-20%20Improving%20Apples%20UX%20Subscription%20Edition.md/apple-vs-ux-1@2x.png)

The dialog gives the option to subscribe to AppleTV+ or AppleOne and contains the info text as follows:

> You are already subscribed to Apple Music and 2TB of iCloud storage. Adding AppleTV+ will bring your monthly total to 33,97€.
> 
> AppleOne includes Apple Music, 2TB of iCloud storage, AppleTV+, Apple Arcade, and Apple Fitness+ for 31,95€ per month.