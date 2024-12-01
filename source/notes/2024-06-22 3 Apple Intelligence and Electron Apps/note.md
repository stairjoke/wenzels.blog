---
title: Apple Intelligence and Electron Apps
date: 2024-06-22
teaser: Apple Intelligence enhances macOS apps built with native technologies like SwiftUI, while Electron apps, which are essentially web apps, will miss out on these improvements.
---
Apple Intelligence (AAI) is yet another blow to Electron apps—or should I say the users of apps built using Electron?
### What are Electron Apps
Electron apps are websites that pretend to be apps. “Electron embeds Chromium and Node.js to enable web developers to create desktop applications.”[^electronApps] In plain English: an Electron app is a website bundled with a stripped-down version of Google Chrome, so it can be installed and run on your Mac or Windows computer without opening Chrome, Safari, Edge, or Firefox.

[^electronApps]: Quoted from the official Electron website: [Electronjs.org](https://www.electronjs.org/)

An Electron app doesn’t require developers to develop a native Mac/Windows app, instead, it allows them to use web technologies instead of native technologies at the expense of performance and usability. Most Electron apps are slower and more memory-hungry than their macOS or Windows native counterparts. Electron apps usually lack features native to the operating system. On macOS, the list of missing features includes Quick Look and detecting text within images. Perhaps most notably, Electron apps often eat your laptop’s battery like there is no tomorrow while they are usually more difficult to use and slower than native apps.
### Apple Intelligence won’t work with Electron apps
Apple uses SwiftUI to automatically provide AAI to all Mac apps. Developers building apps for macOS using SwiftUI will not have to update their apps to bring AAI to their users, in many cases. Apps built using Apple’s UI components, instead of web technologies, will benefit from Apple’s deep integration. Web apps inside Safari will probably also benefit from AAI—but I doubt Apple can find a way to enable AAI within Electron Apps unless Google wants them to. In the end, users forced to use Electron apps will suffer even more from that technology.

_Hey EU, how about you fine Google for a change? How about you consider classifying Chromium as a platform Google is the gatekeeper of? Because it sure is one!_
