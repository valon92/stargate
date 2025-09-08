# Production Configuration for Stargate.ci

## 🌐 Domain Setup

### DNS Configuration
```
Type: A
Name: @
Value: [Your Server IP Address]

Type: CNAME  
Name: www
Value: stargate.ci

Type: A
Name: api
Value: [Your Backend Server IP]
```

## 📁 Frontend Deployment

### Option 1: Vercel (Recommended)
1. Go to [vercel.com](https://vercel.com)
2. Import project from GitHub: `valon92/stargate`
3. Configure:
   - **Framework Preset**: Vite
   - **Root Directory**: `frontend`
   - **Build Command**: `npm run build`
   - **Output Directory**: `dist`
   - **Install Command**: `npm install`

### Option 2: Netlify
1. Go to [netlify.com](https://netlify.com)
2. Connect GitHub repository
3. Configure:
   - **Base Directory**: `frontend`
   - **Build Command**: `npm run build`
   - **Publish Directory**: `frontend/dist`

### Option 3: Shared Hosting
1. Upload `frontend/dist` contents to `public_html`
2. Ensure `.htaccess` is uploaded
3. Configure domain to point to hosting

## 🖥️ Backend Deployment

### Option 1: Railway (Recommended)
1. Go to [railway.app](https://railway.app)
2. Connect GitHub repository
3. Select `backend` folder
4. Set environment variables
5. Deploy

### Option 2: DigitalOcean Droplet
1. Create Ubuntu 22.04 LTS droplet
2. Install LAMP stack
3. Clone repository
4. Configure Laravel

### Option 3: Shared Hosting
1. Upload backend files to subdomain
2. Configure database
3. Set environment variables

## 🔧 Environment Variables

### Frontend (.env.production)
```env
VITE_API_URL=https://api.stargate.ci
VITE_APP_NAME=Stargate.ci
VITE_APP_DESCRIPTION=Educational platform for technology insights
VITE_CONTACT_EMAIL=contact@stargate.ci
```

### Backend (.env)
```env
APP_NAME=Stargate
APP_ENV=production
APP_KEY=base64:your_generated_key
APP_DEBUG=false
APP_URL=https://stargate.ci

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=stargate_db
DB_USERNAME=your_username
DB_PASSWORD=your_password

MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_password
```

## 🚀 Quick Deploy Steps

### 1. Prepare Files
```bash
# Build frontend
cd frontend
npm run build

# Prepare backend
cd ../backend
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
```

### 2. Deploy Frontend
- Upload `frontend/dist` to your hosting
- Configure domain DNS
- Test website

### 3. Deploy Backend
- Upload backend files
- Configure database
- Set environment variables
- Run migrations

### 4. Configure Domain
- Point domain to frontend hosting
- Set up API subdomain
- Enable SSL certificate

## 🔒 Security Checklist

- ✅ HTTPS enabled
- ✅ Environment variables secured
- ✅ Debug mode disabled
- ✅ CORS configured
- ✅ Rate limiting enabled
- ✅ Input validation
- ✅ SQL injection protection

## 📊 Performance Optimization

### Frontend
- ✅ Code splitting enabled
- ✅ Images optimized
- ✅ CSS/JS minified
- ✅ Gzip compression
- ✅ Browser caching

### Backend
- ✅ Route caching
- ✅ Config caching
- ✅ View caching
- ✅ Database indexing
- ✅ Query optimization

## 🆘 Troubleshooting

### Common Issues
1. **404 on page refresh**: Check .htaccess configuration
2. **CORS errors**: Update CORS settings in backend
3. **Database connection**: Verify credentials
4. **File permissions**: Set correct permissions (755/644)

### Testing
```bash
# Test frontend
curl -I https://stargate.ci

# Test API
curl -I https://api.stargate.ci/api/health

# Check SSL
openssl s_client -connect stargate.ci:443
```

## 📈 Monitoring Setup

### Recommended Tools
- **Uptime**: UptimeRobot (free)
- **Analytics**: Google Analytics
- **Errors**: Sentry (free tier)
- **Performance**: Lighthouse CI

### Log Monitoring
- Laravel logs: `storage/logs/laravel.log`
- Server logs: `/var/log/apache2/` or `/var/log/nginx/`
- Error logs: Check hosting control panel

---

## 🎯 Recommended Architecture

```
stargate.ci (Frontend - Vercel/Netlify)
    ↓
api.stargate.ci (Backend - Railway/DigitalOcean)
    ↓
Database (MySQL/PostgreSQL)
```

This setup provides:
- ✅ Fast global CDN
- ✅ Automatic SSL
- ✅ Easy scaling
- ✅ Professional appearance
- ✅ Cost-effective hosting
