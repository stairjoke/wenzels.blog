module.exports = function(eleventyConfig){
	// Pass through media
	eleventyConfig.addPassthroughCopy("**/*.jpg");
	eleventyConfig.addPassthroughCopy("**/*.jpeg");
	eleventyConfig.addPassthroughCopy("**/*.png");
	eleventyConfig.addPassthroughCopy("**/*.gif");
	eleventyConfig.addPassthroughCopy("**/*.svg");
	eleventyConfig.addPassthroughCopy("**/*.webp");
	
	eleventyConfig.addPassthroughCopy("**/*.webm");
	eleventyConfig.addPassthroughCopy("**/*.mp4");
	eleventyConfig.addPassthroughCopy("**/*.m4v");
	eleventyConfig.addPassthroughCopy("**/*.mov");
	
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
