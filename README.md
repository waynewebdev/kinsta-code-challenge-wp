# Activating shortcodes in the post title & creating the Kinsta language shortcode
First, I added a filter to allow shortcodes to properly function in a post title.

Second, I created a shortcode that checks the current language settings of the WordPress install and returns the language name through the shortcode. If this would be for a real production scenario, I would suggest building out a more detailed list of language codes and pair them with their language name. In this example, I only included English, French, and Spanish.
