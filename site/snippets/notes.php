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
