# Stargate.ci Deployment Guide

## 🚀 Deployment Options

### Option 1: Vercel (Frontend) + Railway/Heroku (Backend)

#### Frontend Deployment (Vercel)
1. **Push to GitHub** (already done)
2. **Connect to Vercel**:
   - Go to [vercel.com](https://vercel.com)
   - Import project from GitHub
   - Select `stargate` repository
   - Set build command: `cd frontend && npm run build`
   - Set output directory: `frontend/dist`
   - Deploy

#### Backend Deployment (Railway/Heroku)
1. **Prepare backend**:
   ```bash
   cd backend
   composer install --optimize-autoloader --no-dev
   ```

2. **Deploy to Railway**:
   - Go to [railway.app](https://railway.app)
   - Connect GitHub repository
   - Select backend folder
   - Set environment variables
   - Deploy

### Option 2: Netlify (Frontend) + DigitalOcean (Backend)

#### Frontend Deployment (Netlify)
1. **Build locally**:
   ```bash
   cd frontend
   npm run build
   ```

2. **Deploy to Netlify**:
   - Go to [netlify.com](https://netlify.com)
   - Drag and drop `frontend/dist` folder
   - Or connect GitHub repository

#### Backend Deployment (DigitalOcean)
1. **Create Droplet**:
   - Ubuntu 22.04 LTS
   - 2GB RAM minimum
   - Install LAMP stack

2. **Deploy Laravel**:
   ```bash
   git clone https://github.com/valon92/stargate.git
   cd stargate/backend
   composer install
   php artisan migrate
   php artisan serve --host=0.0.0.0 --port=8000
   ```

### Option 3: Shared Hosting (cPanel)

#### Frontend
1. **Upload dist folder** to public_html
2. **Configure .htaccess** for Vue Router

#### Backend
1. **Upload backend files** to subdomain
2. **Configure database** in cPanel
3. **Set environment variables**

## 🌐 Domain Configuration

### DNS Settings for stargate.ci
```
Type: A
Name: @
Value: [Your Server IP]

Type: CNAME
Name: www
Value: stargate.ci

Type: A
Name: api
Value: [Your Backend Server IP]
```

### SSL Certificate
- Use Let's Encrypt (free)
- Or Cloudflare SSL (free)

## 📁 File Structure for Deployment

```
stargate.ci/
├── frontend/dist/          # Built frontend files
├── backend/                # Laravel backend
│   ├── public/            # Web root
│   ├── .env               # Environment config
│   └── storage/           # File storage
└── DEPLOYMENT.md          # This file
```

## 🔧 Environment Variables

### Frontend (.env)
```
VITE_API_URL=https://api.stargate.ci
VITE_APP_NAME=Stargate.ci
```

### Backend (.env)
```
APP_NAME=Stargate
APP_ENV=production
APP_KEY=base64:...
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

## 🚀 Quick Deploy Commands

### Build for Production
```bash
# Frontend
cd frontend
npm run build

# Backend
cd backend
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Test Production Build
```bash
# Test frontend
cd frontend
npx serve dist

# Test backend
cd backend
php artisan serve --env=production
```

## 📊 Performance Optimization

### Frontend
- ✅ Code splitting
- ✅ Image optimization
- ✅ CSS/JS minification
- ✅ Gzip compression

### Backend
- ✅ Route caching
- ✅ Config caching
- ✅ View caching
- ✅ Database optimization

## 🔒 Security Checklist

- ✅ Environment variables secured
- ✅ Debug mode disabled
- ✅ HTTPS enabled
- ✅ CORS configured
- ✅ Rate limiting enabled
- ✅ Input validation
- ✅ SQL injection protection

## 📈 Monitoring

### Recommended Tools
- **Uptime**: UptimeRobot
- **Analytics**: Google Analytics
- **Errors**: Sentry
- **Performance**: Lighthouse

## 🆘 Troubleshooting

### Common Issues
1. **404 on refresh**: Configure .htaccess for SPA
2. **CORS errors**: Update CORS settings
3. **Database connection**: Check credentials
4. **File permissions**: Set correct permissions

### Support
- Check Laravel logs: `storage/logs/laravel.log`
- Check server logs
- Test API endpoints
- Verify environment variables

---

## 🎯 Recommended Deployment Path

**For stargate.ci domain:**

1. **Frontend**: Deploy to Vercel/Netlify
2. **Backend**: Deploy to Railway/DigitalOcean
3. **Domain**: Point to frontend hosting
4. **API**: Use subdomain (api.stargate.ci)
5. **SSL**: Enable HTTPS everywhere

This setup provides:
- ✅ Fast global CDN
- ✅ Automatic SSL
- ✅ Easy scaling
- ✅ Professional appearance
- ✅ Cost-effective
