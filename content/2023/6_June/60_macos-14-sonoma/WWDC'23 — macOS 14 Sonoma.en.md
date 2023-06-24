Title: WWDC'23 — macOS 14: Sonoma

----

Date: 2023-6-6 20:45+2

----

Text:

Yesterday, Apple streamed its opening keynote for the annual World Wide Developers Conference 2023. They announced some truly groundbreaking new hardware I am looking forward to writing about, but before I do that in a future post, I want to focus on the Mac. Before Apple unveiled the VisionPro, they raced through an incredible number of updates for iOS, iPadOS, tvOS, and macOS — in fact, I think the updates to those platforms alone could have filled an entire keynote.

When Craig Federighi opened the Mac feature demo with the words: <q>many of the features we talked about earlier, on iPadOS and iOS, are going to be great on the Mac</q>,[^keynote] it was clear that they had something huge in store later in the keynote, and couldn’t afford the time to demo anything they had already shown on another platform up to this point. Despite that, the macOS portion took 13 minutes and was jam-packed with exciting announcements.

## An updated lock-screen and desktop experience
First seen on the iPhone, then on iPad, and now on Mac, the lock-screen now seamlessly transitions into the desktop. And in true Apple fashion, they didn’t just bring this behavior to macOS but re-imagined how it could work with screensavers. Apple will ship macOS Senoma with a set of new screensavers that seamlessly transition into the new lock-screen design and desktop.

(video: seamlessScreensavers.mp4 poster: seamlessScreensavers.jpg caption: Video excerpt taken from Apple’s WWDC 2023 keynote. preload: none)

## Widgets have evolved from gimmicks to utilities
It looks like Apple reworked the lock-screen and desktop for Mac from the ground up. Widgets are now first-class citizens on your Mac’s desktop, and they elegantly fade into the background while you’re using apps. I’m very impressed by the smart decisions the OS can make here to keep the content of widgets legible while also visually melting them into your wallpaper. Although the image provided by Apple doesn’t show it, this also works for the photos widget.

(image: Apple-WWDC23-macOS-Sonoma-Widgets-in-background-230605.jpg alt: The image shows a MacBook running macOS Senoma. There are faded widgets on the desktop, and the app “Darkroom” is running in the foreground. caption: Image provided by Apple.)

<p class=quotable>You can add widgets for iPhone apps to your desktop without installing them on your Mac.</p>

You can also add widgets for iPhone apps to your desktop without installing them on your Mac. And widgets are now interactive, allowing developers to add buttons and other simple interactions, like checking off to-do-items without opening an app. This allows you to easily and quickly interact with your iPhone apps on your Mac without picking up your phone. As our smartphones have become the home of addictive apps like Instagram and TikTok, making it easier to leave them in another room will help a lot of us be more in control.

Widgets on your Mac desktop can detect selected files on your desktop and perform simple one-click actions on them. This opens up a new world of opportunities for little helpers that streamline your workflow immensely. A use case I can think of right now is selecting a couple of images and one-click compressing and uploading them to Flickr. Or, Instagram could add an upload-button widget to the iPhone app; you could then add this widget to your Mac desktop and use it to single-click-publish a new carousel of images. I can see this being very helpful for people managing social media accounts or just publishing online.

## Apple wants you to look good on Zoom
With macOS 13 Ventura, Apple already introduced some great tools for video conferencing. Like continuity camera,[^continuitycamera] where you can use the wide-angle camera of your iPhone to show your desk as a presentation in Zoom while using the other cameras to appear in the call. This year Apple takes it a step further. Instead of disappearing from video calls while you show a presentation, you can now look like you’re sitting in front of a wall projection of your presentation, as shown in this video released by Apple.[^videoconferencing]

[^continuitycamera]: <cite>(link: https://support.apple.com/en-us/HT213244?cmdf=continuity+camera#deskview text: Continuity Camera: Use iPhone as a webcam for Mac > Desk View target: _blank)</cite> published by Apple Support, Apple Inc. on apple.com.

[^videoconferencing]: <cite>(link: https://www.apple.com/newsroom/2023/06/macos-sonoma-brings-new-capabilities-for-elevating-productivity-and-creativity/ text: macOS Sonoma brings all‑new capabilities for elevating productivity and creativity > Smarter Video Conferencing Experiences target: _blank)</cite> published June 5, 2023, by Apple Inc. on apple.com.

(video: Apple-WWDC23-macOS-Sonoma-Zoom-screen-sharing-230605.mp4 poster: Apple-WWDC23-macOS-Sonoma-Zoom-screen-sharing-230605.jpg caption: Video provided by Apple. preload: none)

Apple uses the depth-perception and AI to remove the background, then composites the image to look natural and appealing. You can use this feature in any video conferencing software if you’re using a compatible Apple device. Additionally, Apple added a reaction interface where gestures like forming a heart with your hands or giving a two-handed thumbs-up will trigger appropriate video effects. This is done by the system, meaning it will be available in all video-conferencing apps, not just FaceTime.

## Game Mode on your Mac
For a couple of years now, Macs have delivered a lot of performance — even the most affordable Macs. With macOS 14 Sonoma, Apple introduces “Game Mode”, a mode for macOS in which games get priority on the CPUs and GPUs of the Mac. Game Mode also increases the frequency with which macOS reads wirelessly connected game controllers to reduce latency even further. In my experience, the only reason why gaming on Mac is less enjoyable than on Windows is that most game developers don’t bother releasing their games for macOS. With the improvements and Apple’s very transparent cooperation with Unity, I hope this will change over time.

## Browse the internet more comfortably and faster

<p class=quotable>Safari will not just block tracking by sandboxing websites and refusing cookies. It will also strip tracking information from URLs.</p>

It has been a while since Apple last dedicated a significant time slot to Safari in the WWDC keynote, but this year they did. As a web designer, this made me very happy! <q cite=https://www.apple.com/apple-events/>Safari is the world’s fastest browser</q>[^keynote] and Apple improved it significantly this year. When you browse the web in a private window, Safari will not just block tracking by sandboxing websites and refusing cookies. It will also strip tracking information from URLs. What does that mean? You may have noticed some web addresses are *very* long and contain cryptic-looking strings of text like `?utm-source=newsletter`. These strings are usually a lot more complex and often illegible, but they allow websites to track you across devices and browser windows, and they can even be used to track who you share a website with. Now, in private browsing mode, Apple promises to remove some of these strings to protect you from the incessant snooping modern websites do to track and analyze you. Thanks, Apple!

[^keynote]:
    (link: https://www.apple.com/apple-events/ text: WWDC 2023 keynote target: _blank) published June 5, 2023, by Apple Inc. on apple.com.
    
    - At minute 44:30, Craig Federighi (SVP, Software Engineering) says <q>First: Many of the features we talked about earlier, on iPadOS and iOS, are going to be great on the Mac</q>
    - At minute 53:19, Beth Dakin (Senior Manager, Safari Software Engineering) says <q>Safari is the world’s fastest browser.</q>

Besides privacy improvements, Safari added two more big features that stood out: Profiles and web apps. Profiles allow you to create personas, like a work persona or a profile for your kid. Profiles contain tab groups and bookmarks, making it much easier to manage sharing your Mac — or, if you’re like me, to keep your work-life and your personal-life tab groups separate on the same Mac.

Web apps are a big one. It has been possible to add any website to your home screen on your iPhone since it was released in 2007. This made it possible to have a website that performed application-like tasks and was at home on your iPhone home screen alongside native apps. You could add web apps to your phone before there was an AppStore! This year, 16 years later, Apple brought this feature to the Mac. You can now add web applications to your dock and Applications folder on your Mac, and they will show up in Spotlight searches and all the other places you would expect them to be available to you.

## Some honorable mentions
Remember the <q>many of the features we talked about earlier, on iPadOS and iOS, are going to be great on the Mac</q> part? Well, here are two things I really look forward to digging into and writing about:

- Autocorrect now uses a transformer to make a lot better predictions, sentence-level autocorrect. In plain English: Apple is now running a ChatGPT-like AI on your Mac (and iPhone and iPad) to provide significantly improved autocorrect functionality.
- “Hey, Siri!” becomes just “Siri”. I wonder how well this will work. Will it lead to more accidental triggers? Will it cause more misses? A miss in this case is when you talk to a device that just isn’t responding to you.
