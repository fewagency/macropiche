# `macropiche`
PHP tool for display of view-templates in HTML.

If you're building a **pattern/component library**, this simple tool will display its parts to
designers, developers, and clients for collaboration!
It's basically one helper function that you can place anywhere within your PHP:

```php
<?= macropiche('path/to/template') ?>
```

This will render an HTML `<div>` containing simple markup of:

- the file path
- the original file contents
- the processed file output as code/markup (unless equal to original file content)
- the processed file output as HTML

## Installation
> composer require fewagency/macropiche

## Background
Some reading on *display patterns* and *atomic design* - thinking that `macropiche` is designed to support:

- http://danielmall.com/articles/content-display-patterns/
- http://alistapart.com/article/from-pages-to-patterns-an-exercise-for-everyone
- http://bradfrost.com/blog/post/atomic-web-design/

Reading on more advanced use of pattern libraries:
- http://bradfrost.com/blog/post/anatomy-of-a-pattern-in-a-pattern-library/
- https://www.smashingmagazine.com/taking-pattern-libraries-next-level/

## Usage
The helper function can be used within any PHP file or PHP-based template using
`echo` or `<?=`.

```php
/**
* @param $file    string Relative or absolute path to template/view file
* @param $context array|mixed Optional data for the template parser
* @return string HTML
*/
function macropiche($file, $context = null)
```

The `$context` is usually an array of variable names and values to populate the template.

## Examples
The [examples](/examples) contain a [quick test php file](examples/test.php) to get you started
and show the `macropiche()` helper method used in a PHP file.

## Styling and scripting
The HTML generated by `macropiche` has CSS classes following the
[BEM approach for CSS naming](http://getbem.com/naming/) so you may style elements anyway you want. 

You should import your project's styles (and scripts) to your document to showcase your templates.
But the [assets of this package](/assets) also include some simple stylesheets that you may import
(or draw inspiration from) to style the actual `macropiche` elements:

- [assets/css/code-toggle.css](assets/css/code-toggle.css) uses the (empty) "source"-anchor to toggle visibility of the code display sections.
- [assets/css/optional-style.css](assets/css/optional-style.css) is a discreet style that is only applied to the `macropiche` elements.
It's based on transparent midtone gray to suit dark and light backgrounds alike.

### Syntax highlighting
The `<code>` elements (wrapped in `<pre>`) have classes indicating the language of their contents that you can use
for syntax highlighting, e.g. `language-php` for PHP code.
This is useful with code syntax highlighters like [Prism](http://prismjs.com).
Why not use
[the same configuration the Laravel docs use](http://prismjs.com/download.html?themes=prism&languages=markup+twig+css+clike+javascript+php+php-extras+scss+bash+sql+apacheconf+git+handlebars&plugins=line-numbers)?
Generated Prism files can also be found among the [assets of this package](/assets) for quick use.

## Usage with [Laravel Blade](https://laravel.com/docs/views) templates
If `macropiche` is used within a Laravel environment that has a `view()` helper available, it will be used as rendering
engine for the templates it seems to support.

In other situations you may declare your own helper called `macropiche_blade_view()`
that should return an instance of `Illuminate\Contracts\View\Factory`
(or similar - it's relaxed to work with Blade-packages that don't explicitly implement the interface).
Examples of usage with [`duncan3dc/blade`](https://github.com/duncan3dc/blade) and
[`jenssegers/blade`](https://github.com/jenssegers/blade) can be found in
[examples/test-blade-duncan3dc.php](examples/test-blade-duncan3dc.php) and
[examples/test-blade-jenssegers.php](examples/test-blade-jenssegers.php) respectively.

With some Blade factories that implement the `getFinder()` method (like the one built into Laravel)
it's possible to reference templates with the Blade dot-syntax relative the Blade views folder
instead of supplying full or relative paths to `macropiche`.

## Usage with Twig templates
`macropiche` currently supports `HTML`, `PHP` and Blade template files.
We have support for Twig next in the feature pipeline!

## `<samp>`!
The `<samp>` element is used to display the processed output, within `<pre><code class="language-html">`.
It's not often one gets the opportunity to properly use `<samp>`,
this type of package must be one of the few useful applications for that poor tag!
For those of you that have not yet read
[the specification for the `<samp>` element](https://html.spec.whatwg.org/multipage/semantics.html#the-samp-element),
I highly recommend it!

```html
<p>The computer said <samp>Too much cheese in tray two</samp> but I didn't know what that meant.</p>
```

...and if someone knows who wrote that hilarious official usage example, or where it came from,
please get in touch and tell me!

## Alternatives
There are of course other ways of building your HTML component library for display, some examples:

- http://patternlab.io
- http://devbridge.github.io/Styleguide/
- https://fbrctr.github.io
- https://github.com/cloudfour/drizzle
- https://github.com/nickberens360/atomic-docs

They all generate a full website, whereas this package aims to provide a simpler toolset
for displaying templates within your existing project.

## Authors
I, Björn Nilsved, work at the largest communication agency in southern Sweden.
We call ourselves [FEW](http://fewagency.se) (oh, the irony).
From time to time we have positions open for web developers and programmers in the Malmö/Copenhagen area,
so please get in touch!

## License
FEW Agency's `macropiche` is open-sourced software licensed under the
[MIT license](http://opensource.org/licenses/MIT)
