# WordPress AJAX Search Functionality for Custom Post Types

This repository provides an example of implementing AJAX search functionality for all custom post types in WordPress.

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

## Description

This project demonstrates how to create an AJAX search functionality that allows users to search for content across all custom post types in a WordPress website. The search functionality is performed without page refresh, providing a seamless user experience.

The project includes the necessary PHP and JavaScript code snippets that you can integrate into your WordPress theme to enable the AJAX search functionality.

## Features

- AJAX-based search functionality for custom post types
- Retrieves search results without page refresh
- Customizable search form and search result display
- Supports searching across all custom post types

## Usage

To use this AJAX search functionality in your WordPress theme, follow these steps:

1. Clone or download the repository.

2. Copy the code from `ajax-search.php` file to your WordPress theme's `functions.php` file.

3. Copy the `ajax-search.js` file to your WordPress theme's JavaScript directory.

4. Integrate the AJAX search functionality into your WordPress theme by following these steps:

   - Open your theme's `search.php` file or create one if it doesn't exist.

   - Replace the default search form code with the provided AJAX search form code.

   - Modify the HTML structure and CSS styling of the search form as per your theme's design.

   - Update the JavaScript file path in the `<script>` tag to point to the correct location of `ajax-search.js` in your theme.

   - Customize the search result display in the `ajax-search.php` file based on your requirements.

5. Customize the HTML markup and CSS styling of the search form and search result display to match your theme's design.

6. Test the AJAX search functionality by entering search queries and verifying the search results are displayed without page refresh.

7. Customize the search functionality further by modifying the PHP and JavaScript code snippets as needed.

## Requirements

- WordPress version 5.x or higher
- A custom theme or a child theme of a compatible theme

## License

This project is licensed under the [MIT License](LICENSE).

## Contribution

Contributions to this project are welcome. Feel free to open issues and submit pull requests to suggest improvements or fix any bugs.

## Support

If you encounter any issues or have any questions, please feel free to [open an issue](https://github.com/dina-the-developer/ajax-search-for-wordpress-custom-post-types/issues) on GitHub.

---

Happy searching!

