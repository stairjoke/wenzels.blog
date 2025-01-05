# What?
Kirby CMS does not support relative paths for `![]()` images. It renders the `<img />` tag with an incomplete URL and does not copy the media to the media folder.

# Why?
I want to use standard markdown for blog posts, which I cannot without solving this problem.

# How?
Instead of writing a plugin to render the `text` field in notes manually into HTML, I add a `<base href=…>` to the `<head></head>` if the template name is "note".

## Affected files
- All content of type `note.txt`
- The `note.php` template
- The `head.php` snippet.
