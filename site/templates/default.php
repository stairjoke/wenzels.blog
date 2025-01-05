<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ title | safe }} — {{ site.title | safe }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/hljs-vs2015.min.css" />
    <link rel="alternate" type="application/rss+xml" 
      title="RSS Feed" 
      href="/feed.xml" />
    {% if base|length %}<base href="{{ base }}" />{% endif %}
  </head>
  <body>
    <header>
      <div class="container">
        <h1 id="pageTitle"><a href="/" title="Home"><span role="img" aria-label="Home">🏡</span> <span class="viewport-hideOnXS">Wenzels.Blog</span></a></h1>
        <ol>
          <li><a href="/about">About</a></li>
          <li><a href="https://wenzels.design" target="_blank">Work</a></li>
          <li><a href="/feed.xml" target="_blank">RSS</a></li>
        </ol>
      </div>
    </header>
    
    DEFAULT
    <main>
      <h1>{{ title | safe }}</h1>
      {{ content | safe }}
      <p id="permalink"><a href="{{ page.url | safe }}">⌞w⌝</a></p>
    </main>
    
    HOME
    <main>
      <ol class="list-of-posts">
        {% for note in collections.note | reverse %}
        <li{% if page.url == note.url %} aria-current=page{% endif %}>
          <div class="postHead">
            <h2><a href="{{ note.url }}"{% if note.data.title == "Note" %} class="note" {% endif %}>{{ note.data.title }}</a></h2>
            <time datetime="{{ note.date | dateToRfc822 }}">{{ note.date | friendlyDate }}</time>
          </div>
          <p>{{ note.data.teaser }}</p>
        </li>{% endfor %}
      </ol>
    </main>
    
    NOTE
    <main>
      <div class="postHead">
        <h1>{{ title | safe }}</h1>
        <time datetime="{{ date | dateToRfc822 }}">{{ date | friendlyDate }}</time>
      </div>
      {{ content | safe }}
      <p id="permalink"><a href="{{ page.url | safe }}">⌞w⌝</a></p>
    </main>
    
    <footer>
      <p>I’m on <a rel="me" href="https://indieweb.social/@stairjoke">Mastodon</a> <button onclick="navigator.clipboard.writeText('@stairjoke@indieweb.social'); alert('Mastodon ID copied to clipboard!')">click to copy "@stairjoke@indieweb.social"</button> and <a href="https://posts.cv/wenzel">Posts.</a></p>
      <p class="copy">© Copyright {{ page.date | friendlyDate }}, Wenzel Massag. German copyright law applies, redistribution with attribution highly encouraged.</p>
    </footer>
  </body>
</html>