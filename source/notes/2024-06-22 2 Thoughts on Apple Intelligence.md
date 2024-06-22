---
title: Thoughts on Apple Intelligence
date: 2024-06-22
teaser: In this article I compare Apple Intelligence to Notion AI. I explain how Apple Intelligence is different from others like ChatGPT, and attempt to highlight how it faces similar, but reduced privacy risks.
---
If you’re wondering what Apple Intelligence is, I recommend [MKBHD’s,](https://youtu.be/qkYoBNdcXBU?si=Nnwr-5VwsnLrLiwc&t=630) [iJustine’s,](https://youtu.be/8gt0Lw2ZUqY?si=xoCrEjXsw88Q0D5-) and [Snazzy Labs’](https://youtu.be/C0Yu-hkk1c8?si=iQsE9coYiBlqT253&t=1052) videos. Ok, now that we’re all caught up, here are some thoughts.

---
## The Name: Apple Intelligence
You’ve probably heard of AI (Artificial Intelligence) before. In a very Apple move, Apple has branded its AI platform “Apple Intelligence”, which can also be abbreviated to AI. But to be able to distinguish between AI (Artificial Intelligence) and AI (Apple Intelligence) I will be using AI for Artificial Intelligence and AAI for “Apple AI“ as in Apple Intelligence.
## How it’s different: Privacy & Context
Apple’s flavor of AI (AAI) is different from what we’ve come to think of as AI in recent years—for example: like chatGPT—and Apple clearly communicated how AAI is different: Privacy and context.
### Privacy
Apple Intelligence (AAI) is a flavor of artificial intelligence (AI) that exists within your personal context and is privacy-focused. Privacy in this context means that Apple doesn’t store, analyze, or train on your data. Apple will upload your data for some tasks to a specially secured cloud, if necessary; A technology it calls "Private Cloud Compute",[^appleppc] more on that later.

I wonder if the uploading of some data in some cases might become a problem for Apple’s privacy promise in the future. In the US, at least, there is the “Third Party Doctrine”:

> The third-party doctrine is a United States legal doctrine that holds that people who voluntarily give information to third parties […] have "no reasonable expectation of privacy"[…][^thirdPartyDoctrineWiki]

[^thirdPartyDoctrineWiki]: [Third-party doctrine on Wikipedia.](https://en.wikipedia.org/wiki/Third-party_doctrine)

In my understanding, as soon as Apple’s AI uploads data to the internet, US Citizens can no longer consider that data private. This is also a conflict between the EU and the US, as the GDPR prohibits uploading EU users’ data to servers outside the EU unless it is encrypted before transmission and in such a way that it cannot be decrypted on the server.
### Context
Let’s move on from the privacy claims and problems to the functionality of AAI. Basing AAI in the user’s context means AAI follows a fundamentally different philosophy from other AIs, such as ChatGPT, Perplexity, and Gemini. If you ask one of those about an email or text message you received, they will not have the data to answer the question—but they will probably make something up and pretend they know everything. If you ask AAI about an email or text message, it has access to your inboxes, and it will be able to reference that data to compose an accurate reply—or take action.

Basing AAI in the user’s context is not entirely original. It looks to me like the idea behind Apple Intelligence is similar to that of Notion AI. Notion is—extremely simplified—a notes app. In Notion, you can use AI to analyze data within your personal or your company’s Notion. Notion AI can compose text or gather information from all of the data you put into Notion. AAI works similarly, but across the Apple platform, instead of the Notion platform. Notion AI and Apple AI use your personal context, instead of world context, to help you. Apple uses the context from your device (Mac, iPhone, etc), whereas Notion AI uses what you’ve uploaded into Notion.

On a technical level, the two AIs differ more strongly: For one Notion AI runs in the cloud and is, as far as I know, ChatGPT in disguise. Apple AI runs on your device and only sometimes uses Apple’s “Private Cloud Compute”.[^appleppc] Still, it feels like Apple AI and Notion AI are competitors now.

[^appleppc]: [Private Cloud Compute: A new frontier for AI privacy in the cloud](https://security.apple.com/blog/private-cloud-compute/)
## Hardware requirements
There is one more thing about Apple Intelligence worth mentioning. AAI requires an M1 or later Mac or iPad, or an iPhone 15 Pro. A reasonable suspicion by Ben Thompson for that hardware limitation is that AAI requires at least 8GB of RAM to function. The hardware limitations, I think, will cause quite some stir with users once they realize their device isn’t compatible, or be utterly irrelevant. I suspect that by the time AAI becomes available in English, the iPhone 16 will have been released, and by the time Apple adds more languages to AAI, the iPhone 17 is probably already available for pre-order and many more people will already own a compatible device.