# Projects Images

This folder should contain project-related images.

## File Naming Convention:

For each project, add two images:

### Logo Images:
- `{project-name}.jpeg` (e.g., `dottie.jpeg`)
- Recommended size: 200x200px
- Formats: JPEG (preferred), PNG, JPG, SVG
- Should be square/circular logos

### Banner Images:
- `{project-name}_banner.jpeg` (e.g., `dottie_banner.jpeg`)
- Recommended size: 1200x600px (2:1 ratio)
- Formats: JPEG (preferred), PNG, JPG, WEBP
- Should showcase the project/app

## Required Image Files:
```
projects/
├── dottie.jpeg
├── dottie_banner.jpeg
├── shopflow.jpeg
├── shopflow_banner.jpeg
├── dataviz-pro.jpeg
├── dataviz-pro_banner.jpeg
├── securebank.jpeg
├── securebank_banner.jpeg
├── fittracker.jpeg
├── fittracker_banner.jpeg
├── propertyhub.jpeg
└── propertyhub_banner.jpeg
```

## How to Add Images:
1. Place your images in this folder with exact filenames as listed above
2. Run the seeder: `php artisan db:seed --class=ProjectSeeder`
3. Images will be automatically linked to projects

## Notes:
- Image paths are directly specified in the ProjectSeeder
- Make sure filenames match exactly (case-sensitive)
- Images will be accessible at: `http://your-domain.com/storage/projects/filename.jpeg`
