const markdownIt = require("markdown-it");
const markdownItAltFigure = require("@stairjoke/markdown-it-alt-figure");
const markdownItFootnote = require("markdown-it-footnote");
const markdownItExternalLinks = require("markdown-it-external-links");
const hljs = require("highlight.js");

module.exports = function(eleventyConfig){
	// Extend markdown-it
	let markdownItOptions = {
		html: true,
		highlight: function (str, lang) {
			if (lang && hljs.getLanguage(lang)) {
			  try {
				return '<pre><code class="hljs">' +
					   hljs.highlight(str, { language: lang, ignoreIllegals: true }).value +
					   '</code></pre>';
			  } catch (__) {}
			}
		
			return '<pre><code class="hljs">' + md.utils.escapeHtml(str) + '</code></pre>';
		  }
	}
	eleventyConfig.setLibrary(
		"md", markdownIt(markdownItOptions)
		.use(markdownItAltFigure)
		.use(markdownItFootnote)
		.use(markdownItExternalLinks, {
			internalDomains: ["wenzels.blog"],
			externalTarget: "_blank"
		})
	);
	
	// Pass through copy directories
	eleventyConfig.addPassthroughCopy("source/@"); //The @ directory contains .htaccess data with HTTP302 redirects to ensure permalinks form the previous Kirby installation continue to work.
	eleventyConfig.addPassthroughCopy("source/assets");
	
	// Pass through files
	eleventyConfig.addPassthroughCopy("source/**/*.jpg");
	eleventyConfig.addPassthroughCopy("source/**/*.jpeg");
	eleventyConfig.addPassthroughCopy("source/**/*.png");
	eleventyConfig.addPassthroughCopy("source/**/*.gif");
	eleventyConfig.addPassthroughCopy("source/**/*.svg");
	eleventyConfig.addPassthroughCopy("source/**/*.webp");
	
	eleventyConfig.addPassthroughCopy("source/**/*.webm");
	eleventyConfig.addPassthroughCopy("source/**/*.mp4");
	eleventyConfig.addPassthroughCopy("source/**/*.m4v");
	eleventyConfig.addPassthroughCopy("source/**/*.mov");
	
	// Layout shorthands
	eleventyConfig.addLayoutAlias('note', 'layouts/note.njk');
	eleventyConfig.addLayoutAlias('home', 'layouts/home.njk');
	eleventyConfig.addLayoutAlias('default', 'layouts/default.njk');
	eleventyConfig.setLayoutResolution(false);
	
	// Setup input/output folders
	return {
		dir: {
			input: "source",
			output: "docs"
		}
	}
}
