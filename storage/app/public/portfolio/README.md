# Portfolio Images Storage

This folder contains the portfolio project images that are stored in the database and displayed on the portfolio page.

## Folder Structure:
```
storage/app/public/portfolio/
```

## Required Images:

### Project Banner Images (1200x600px recommended):
- dottie-banner.jpg
- ecommerce-banner.jpg  
- saas-banner.jpg
- banking-banner.jpg
- fitness-banner.jpg
- realestate-banner.jpg

### Project Logo Images (200x200px recommended):
- dottie-logo.png
- shop-logo.png
- analytics-logo.png
- bank-logo.png
- fitness-logo.png
- property-logo.png

## How to Add Images:

1. **Place your images in this folder** (`storage/app/public/portfolio/`)
2. **Make sure filenames match exactly** what's in the database seeder
3. **Optimize images for web** (compress for faster loading)
4. **Use appropriate formats**: 
   - JPG for banner images (photos)
   - PNG for logos (with transparency if needed)

## Access via Browser:
Images will be accessible at: `http://your-domain.com/storage/portfolio/filename.jpg`

## Database References:
The image paths are stored in the `projects` table:
- `banner_image` column: stores "portfolio/filename.jpg"
- `logo_image` column: stores "portfolio/filename.png"

## Important Notes:
- The `php artisan storage:link` command has already been run to create the symbolic link
- Images are served from `public/storage/portfolio/` (which links to this folder)
- Update the database if you change image filenames
