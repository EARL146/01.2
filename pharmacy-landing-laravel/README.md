# Pharmacy Landing — Laravel scaffold

This folder contains a minimal Blade/Tailwind scaffold extracted from the Next.js project so you can start porting templates into a Laravel app.

How to build CSS:

```powershell
cd "pharmacy-landing-laravel"
npm install
npm run build:css
```

Notes:
- This is not a full Laravel app (Composer/Laravel not installed here). To use real Blade rendering you should run `composer create-project laravel/laravel .` in this folder or integrate these files into an existing Laravel project.
- Copy `public/` assets (images, videos) from the original project into `pharmacy-landing-laravel/public/` so the templates can reference them.
- To preview without Laravel, you can open `public/index.html` (not provided) or set up a small PHP file that includes compiled HTML.
