# Introduction

- This file gives a really short broad overview
- Specific information can be found in the dedicated instructions
- I wrote the instructions in markdown, to view them in a visually appealing way, use a markdown editor

### Base structure
- Use `instructions/template.php` as an template that you can copy/paste
- It also functions as an example to understand the basic structure

- The base structure of every page on the website is the same
- The `html_header.php` has to be imported in the `<head></head>` sections
- The `<div id="root_site_container">` has to be included
  - Inside this container include `header_and_navigation.php` at the beginning and `footer.php` at the end
  - In between include `<div id="content_main_container">`
- Write the code for the page inside the `content_main_container`

### Hints
- Apostrophes have to be written as `&apos;` to be interpreted correctly by all browsers
