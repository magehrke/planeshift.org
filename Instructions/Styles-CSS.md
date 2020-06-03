# Styles / CSS

- All `css` files are and shall be stored in the `styles` folder
- Every page loads the basic style sheets `base.css` and `navigation.css` by including the `html_header.php` at the top
- Additionally, each webpage shall include a second style sheet where detailed styles are stored

### Colors
- The colors are defined in `base.css` at the beginning
- The colors are saved into variables, so they can be change for the entire page by exchanging 1 variable
- Example use: `var(--color-link)` (look at `base.css`) for variable names

### Skill description
- A skill description shall go into a `<p class="skill_description"></p>` block
- If you want to change the skill description layout, you can do by adjusting the css in `base.css`

### Global table classes
- If a table shall be hovable, include the class `hovableTable`
- If a table shall be sortable (each column can be sorted ASC or DESC), include the class `sortable`
- Both classes are stored in `base.css` if any change is needed
