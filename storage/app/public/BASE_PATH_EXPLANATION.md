# Image Storage & Base Paths Explanation

## 📁 **Directory Structure:**

```
laravel-project/
├── storage/
│   └── app/
│       └── public/           ← Base storage directory
│           ├── projects/     ← Project images folder
│           └── technologies/ ← Technology images folder
└── public/
    └── storage/              ← Symbolic link to storage/app/public/
```

## 🔗 **How Image Paths Work:**

### **Physical File Location:**
- Images are stored in: `/storage/app/public/projects/dottie.jpeg`
- Images are stored in: `/storage/app/public/technologies/react.png`

### **Database Storage:**
- Database stores: `projects/dottie.jpeg`
- Database stores: `technologies/react.png`

### **Web Access:**
- Browser URL: `http://your-domain.com/storage/projects/dottie.jpeg`
- Browser URL: `http://your-domain.com/storage/technologies/react.png`

## ⚙️ **How Laravel Generates URLs:**

```php
// In Project Model:
public function getLogoImageUrlAttribute()
{
    return $this->logo_image ? asset('storage/' . $this->logo_image) : null;
    //                         ↑               ↑
    //                   Laravel helper   Database value
    //                   adds 'storage/'   'projects/dottie.jpeg'
    //                   
    //                   Result: '/storage/projects/dottie.jpeg'
}
```

## 🎯 **Why This Structure:**

1. **Database stores relative path:** `projects/dottie.jpeg`
2. **Laravel prepends `storage/`:** `storage/projects/dottie.jpeg`
3. **Symbolic link makes it accessible:** `public/storage/` → `storage/app/public/`
4. **Final URL:** `http://domain.com/storage/projects/dottie.jpeg`

## 📝 **Seeder Path Mapping:**

### **ProjectSeeder:**
```php
'logo_image' => 'projects/dottie.jpeg',        // Database value
// File location: storage/app/public/projects/dottie.jpeg
// Web URL: http://domain.com/storage/projects/dottie.jpeg
```

### **TechnologySeeder:**
```php
'image' => 'technologies/react.png',           // Database value
// File location: storage/app/public/technologies/react.png  
// Web URL: http://domain.com/storage/technologies/react.png
```

## ✅ **Summary:**
- **Physical files:** `/storage/app/public/{folder}/{filename}`
- **Database value:** `{folder}/{filename}` (relative to storage/app/public/)
- **Web access:** `/storage/{folder}/{filename}` (via symbolic link)
- **Laravel generates:** `asset('storage/' . $database_value)`
