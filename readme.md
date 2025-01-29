# Week 2 Assignment: Wordpress Themes

<!-- Table of content -->

- [Week Recap](#week-2-recap)
  - [Wordpress Themes](#wordpress-themes)
  - [Child Themes](#child-themes)

## Week 2 Recap

During this week, we discussed Wordpress Themes and Child themes.

### Wordpress Themes

Similar to css stylesheets, a **Wordpress Theme** is responsible for layout and visual style of a wordpress website. Wordpress Themes are made up of templete parts and stylesheets. The **core files** that make a theme are:

- `index.php`
- `functions.php`
- `style.css`

In the `style.css` file for your theme, there should be header that contains the theme's metadata and styles of course.
Here's a example of how my Theme header looks in my `style.css` file:

```css
/*
Theme Name: Green Machine
Author: Pierce Issah
Description: This theme is perfect for people who love the color green.
Version: 0.1
*/
```

### Child Themes

**Child themes** are themes that inherit styling from parent themes. Meaning that child theme can have the same styling from the base but you can make changes without affect the base parent theme.

To create a child themes you need two files: the `style.css` file and the `functions.php` file.

The `style.css` file holds your style and your theme data. For your child theme, all you need in your header is the **Theme name** and the **parent template name**.

```css
/*
Theme Name: Forest Green
Template: green-machine
*/
```
