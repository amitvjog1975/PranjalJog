# Faculty Profile Website - PHP Templated Version

## Overview
This is a professional faculty profile website built with PHP templating system. It provides a clean, maintainable structure with excellent SEO performance and native contact form handling.

## Features
- **PHP Templating**: Clean separation of common elements (header, footer, navigation)
- **SEO Optimized**: Server-side rendering with proper meta tags and structured data
- **Responsive Design**: Bootstrap 5 with custom CSS for professional appearance
- **Contact Form**: Native PHP form handling with email functionality
- **Maintainable**: Easy to update content and styling from centralized files

## File Structure
```
/
├── includes/
│   ├── config.php          # Site configuration and navigation
│   ├── template.php        # Template functions (header, footer, navigation)
│   └── contact_handler.php # Contact form processing
├── assets/
│   ├── css/
│   │   └── style.css       # All custom styles
│   └── js/
│       └── main.js         # JavaScript functionality
├── index.php               # Home page
├── academics.php           # Academic qualifications
├── research-profile.php    # Research and publications
├── responsibilities.php    # Roles and responsibilities
├── resources.php           # Student resources
├── contact.php             # Contact page with form
├── main.png               # Faculty photo
└── README.md              # This file
```

## Setup Instructions

### 1. Server Requirements
- PHP 7.4 or higher
- Web server (Apache/Nginx)
- Mail function enabled for contact form

### 2. Configuration
1. Edit `includes/config.php` to update:
   - Faculty name and details
   - Department and institution
   - Contact information
   - Email settings

2. Replace placeholder content in all PHP files with actual information

3. Replace `main.png` with the actual faculty photo

### 3. Contact Form Setup
The contact form uses PHP's built-in `mail()` function. For production:
1. Ensure your server has mail function enabled
2. Consider using SMTP for better deliverability
3. Add spam protection if needed

### 4. Customization

#### Update Site Information
Edit `includes/config.php`:
```php
$site_config = [
    'faculty_name' => 'Your Actual Name',
    'department' => 'Your Department',
    'institution' => 'Your Institution',
    'email' => 'your.email@institution.edu',
    // ... other settings
];
```

#### Add/Remove Navigation Items
Edit the `$navigation` array in `includes/config.php`

#### Customize Styling
Edit `assets/css/style.css` for design changes

#### Add JavaScript Functionality
Edit `assets/js/main.js` for additional interactive features

## Content Management

### Adding Content
1. **Academic Information**: Edit `academics.php`
2. **Research Details**: Edit `research-profile.php`
3. **Responsibilities**: Edit `responsibilities.php`
4. **Student Resources**: Edit `resources.php`
5. **Contact Details**: Edit `contact.php` and `includes/config.php`

### SEO Optimization
- Each page has proper meta tags
- Structured data markup
- Clean URLs (.php extension can be hidden with .htaccess)
- Fast loading with optimized assets

## Hosting Options

### Shared Hosting
- Most shared hosting providers support PHP
- Upload files via FTP/cPanel
- Ensure mail function is enabled

### VPS/Dedicated Server
- Install LAMP/LEMP stack
- Configure virtual hosts
- Set up SSL certificate

### Platforms That Support PHP
- **Traditional Hosting**: GoDaddy, Bluehost, SiteGround
- **Cloud Hosting**: AWS, DigitalOcean, Linode
- **Managed PHP**: Platform.sh, Cloudways

## Advantages of PHP Templating

1. **SEO Friendly**: Server-side rendering, perfect for search engines
2. **Fast Loading**: No JavaScript required for basic functionality
3. **Easy Maintenance**: Common elements in one place
4. **Native Features**: Contact forms, data processing
5. **Widely Supported**: Available on most hosting providers
6. **Professional**: Server-side approach preferred for academic websites

## Browser Compatibility
- Chrome (all modern versions)
- Firefox (all modern versions)
- Safari (all modern versions)
- Edge (all modern versions)
- Internet Explorer 11+

## Security Considerations
- Input validation on contact form
- XSS protection with htmlspecialchars()
- Regular updates to PHP version
- HTTPS recommended for production

## Migration from HTML
This PHP version maintains all the visual design and functionality of the original HTML version while adding:
- Template structure for easier maintenance
- Server-side contact form processing
- Better SEO optimization
- Centralized configuration

## Support
For technical issues or customization help, refer to:
- PHP documentation: https://www.php.net/docs.php
- Bootstrap documentation: https://getbootstrap.com/docs/
- Font Awesome icons: https://fontawesome.com/

## License
This template is designed for academic use. Customize as needed for your institution and requirements.
