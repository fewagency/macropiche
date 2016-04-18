# `macropiche`
PHP tool for display of view-templates in HTML.

If you're building a pattern/component library, this simple tool will display its parts to designers, developers, and clients!
It's basically one helper function that you can place anywhere within your PHP:

```php
<?= macropiche('path/to/template') ?>
```

This will render an HTML `<div>` containing simple markup of:

- the file path
- the original file contents
- the processed file output as code (unless equal to original file content)
- the processed file output as HTML

## Background
Some reading on display patterns and atomic design - thinking that `macropiche` is designed to support:

- http://danielmall.com/articles/content-display-patterns/
- http://alistapart.com/article/from-pages-to-patterns-an-exercise-for-everyone
- http://bradfrost.com/blog/post/atomic-web-design/

## Usage
The helper function can be used within any PHP file or PHP-based template using
`echo macropiche()` or `<?= macropiche() ?>`.

```php
/**
* @param $path string Relative or absolute path to template/view file
* @param $context mixed Optional data for the template parser
* @return string HTML
*/
function macropiche($path, $context = null)
```

## Styling and scripting
The HTML generated by `macropiche` has CSS classes following a BEM-syntax so you may style elements anyway you want. 

You may also add your own scripts, for example toggling display of different sections of templates.
The path display element is a good candidate for catching click events for toggling.

## Usage with Blade and Twig templates
`macropiche` currently supports HTML and PHP template files.
We have support for Blade first in the feature pipeline, then Twig too!

## Alternatives
http://patternlab.io is another way of building your HTML component library for display.
It generates a full website, whereas this package aims to provide a simpler toolset
for usage within your existing project.

## Authors
I, Björn Nilsved, work at the largest communication agency in southern Sweden.
We call ourselves [FEW](http://fewagency.se) (oh, the irony).
From time to time we have positions open for web developers and programmers in the Malmö/Copenhagen area,
so please get in touch!

## License
FEW Agency's `macropiche` is open-sourced software licensed under the
[MIT license](http://opensource.org/licenses/MIT)