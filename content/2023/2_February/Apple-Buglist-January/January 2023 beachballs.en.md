Title: January 2023 beachballs

----

Date: 2023-02-01 00:00

----

Teaser:

**Unlisted —** this article was unlisted. It is no longer visible in the list of articles, but it can still be accessed if you click a link to it. As I keep evolving this blog, I found this article no longer fits what I want to publish, and I ask that you do not share it.

----

Text:

**Unlisted —** this article was unlisted. It is no longer visible in the list of articles, but it can still be accessed if you click a link to it. As I keep evolving this blog, I found this article no longer fits what I want to publish, and I ask that you do not share it.

---

You may have noticed an increase in voices criticizing Apple in recent years. More and more Apple enthusiasts are confused by Apple's product choices[^examples] or disappointed by the lack of care for quality and user experience in some areas, while other areas are producing astonishingly awesome things. I don't work at Apple, nor do I have any insights into what is going on behind the scenes (yet 🙃). So I avoid commenting on those (for now) — there are enough other people doing that already.

[^examples]:
	Some examples:
	
	- (link: https://www.youtube.com/watch?v=gvqZCMGjh3s text: “Apple HomePod 2 Review: I'm Confused” by MKBHD on YouTube target: _blank)
	- (link: https://www.youtube.com/watch?v=03cezdF7J5I text: ”The Apple Studio Display is hard to justify“ by Mac Address on YouTube target: _blank)
	- (link: https://www.youtube.com/watch?v=C6Ni9rH6VmA text: ”The New iPad is Weird!“ by MKBHD on YouTube target: _blank)

What I do have are some developer friends telling me things and a keen eye to spot oddities, so I decided additionally to writing bug reports on (link: https://Apple.com/feedback text: Apple.com/feedback target: _blank) a few times a month, I'd collect some on my blog and check from time to time if they've been fixed. Why? I'm curious to see what happens. And already, this first time around, I have quite a few that seem to be fixed. Maybe this exercise will turn out to be an illustration of how quickly Apple fixes some bugs?

## iOS
1. Version 16.2 — If you pause an Audible audiobook using Control Center and then listen to a voice memo in iMessage, the audiobook will resume playing after the voice memo finishes.
2. Version 16.1 — ~~If you have Apple Music playing and you listen to a voice memo in iMessage, the music stops, but does not resume after the voice memo finishes.~~ → Seems fixed in 16.2
3. Version 16.1 — ~~If you press the Voice Memo icon in iMessage and then tap the record-button to start recording a new memo, sometimes the recording starts, but does not show up in the text field. You can tap stop, and it still does not appear. You can even record a second, third, or fourth memo, none of them will show up in the text field.~~ → Seems fixed in 16.2
4. Version 16.1 — ~~Sometimes, while recording a voice memo, the end-recording-button disappears and you can see the recording continue in the text field. To stop the recording you have to close iMessage, and sometimes when you re-open iMessage, the recording will be available to send, other times it will have disappeared.~~ → Seems fixed in 16.2

## macOS
1. Notifications with quick-actions don't work. If you hover over the notification to click the button to open the menu of quick actions, the button often disappears right under your mouse cursor. If you click, you act on the notification, instead of opening the menu. This has been an issue for at least one year.
2. From an outside source: If you use apps that enable or disable fonts in macOS, the macOS font management gets confused and starts producing random, but syntactically valid data. The only way to reset this is to reboot your Mac. And as a user you would not notice this until an app shows a font as “missing” that you know is actually installed. — I have no way of testing this thoroughly myself, but I suspect I saw the symptoms of this issue just yesterday, when Figma said that I do not have SF Pro (the macOS system font) installed.
3. If you use the native screen reader to have your Mac read websites in Safari to you, it sometimes reads things out loud that it should not. Example: Triple click a numbered list item. Then press the key combination to have your Mac read the selection. You Mac will read the list item number for each line of text.
**Example:<br>**
<audio controls>
  <source src="/blog/2023/February/Apple-Buglist-January/reading-lists.mp3" type="audio/mpeg">
</audio>
4. Sometimes the voice over voice skips part of a sentence. Example: If I select this specific section of text in the intro to this article: <q>What I do have are some developer friends telling me things and a keen eye to spot oddities, so I decided additionally to writing bug reports on Apple.com/feedback a few times a month, I'd collect some on my blog and check from time to time if they've been fixed.</q> and press the key combination to have it read to me, it reads: <q>What I do have are some developer friends, I'd collect some on my blog and check from time to time if they've been fixed.</q> reliably. Also, what it reads is particularly unfortunate in this case. Interestingly, if you select the section of text in quoted here in this paragraph, it also happens.
**Example:<br>**
<audio controls>
  <source src="/blog/2023/February/Apple-Buglist-January/skipped-text.mp3" type="audio/mpeg">
</audio>
5. If your Mac is set up to read text in more than one language, it sometimes switches languages in the middle of a sentence for no apparent reason.
6. An honorable mention Ale posted on Mastodon today: (link: https://mastodon.online/@bomberstudios/109788914449576754 text: ”I found something both interesting and terrifying: [Safari] mangles custom cursors beyond recognition in all scaled screen resolutions.“ target: _blank)

## Update Feb 16, 2023
I tried compiling a new list for this month and decided not to. If I did, I'd want it to include all the bugs I found, but there are simply too many for me to document on my own.