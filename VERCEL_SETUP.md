# Vercel Deployment Setup for Stargate.ci

## 🚀 Quick Setup Steps

### 1. Delete Old Project (if exists)
1. Go to [vercel.com/dashboard](https://vercel.com/dashboard)
2. Find your old project
3. Click on it → Settings → Delete Project

### 2. Import New Project
1. Go to [vercel.com/new](https://vercel.com/new)
2. Click "Import Git Repository"
3. Select `valon92/stargate` from GitHub
4. Click "Import"

### 3. Configure Project Settings
```
Project Name: stargate-ci
Framework Preset: Vite
Root Directory: frontend
Build Command: npm run build
Output Directory: dist
Install Command: npm install
```

### 4. Environment Variables (Optional)
Add these in Vercel dashboard → Settings → Environment Variables:
```
VITE_API_URL=https://api.stargate.ci
VITE_APP_NAME=Stargate.ci
VITE_CONTACT_EMAIL=contact@stargate.ci
```

### 5. Domain Configuration
1. Go to Project → Settings → Domains
2. Add custom domain: `stargate.ci`
3. Configure DNS:
   ```
   Type: CNAME
   Name: www
   Value: cname.vercel-dns.com
   
   Type: A
   Name: @
   Value: 76.76.19.61
   ```

## 🔧 Alternative: Manual Upload

If GitHub import doesn't work:

### 1. Build Locally
```bash
cd frontend
npm run build
```

### 2. Upload to Vercel
1. Go to [vercel.com/new](https://vercel.com/new)
2. Click "Browse all templates"
3. Select "Other" → "Static Site"
4. Upload the `frontend/dist` folder
5. Deploy

## 📁 Project Structure for Vercel

```
stargate/
├── frontend/
│   ├── dist/              # Built files (upload this)
│   ├── vercel.json        # Vercel config
│   ├── package.json
│   └── src/
├── backend/               # Not needed for frontend
└── vercel.json           # Root config
```

## 🎯 Recommended Vercel Settings

### Build Settings
- **Framework**: Vite
- **Root Directory**: `frontend`
- **Build Command**: `npm run build`
- **Output Directory**: `dist`
- **Install Command**: `npm install`

### Environment Variables
```env
VITE_API_URL=https://api.stargate.ci
VITE_APP_NAME=Stargate.ci
VITE_APP_DESCRIPTION=Educational platform for technology insights
VITE_CONTACT_EMAIL=contact@stargate.ci
```

### Headers & Security
- ✅ Security headers configured
- ✅ Cache optimization
- ✅ SPA routing support
- ✅ HTTPS enabled

## 🔄 Redeploy Instructions

### If you need to redeploy:
1. Push changes to GitHub
2. Vercel will auto-deploy
3. Or manually trigger in dashboard

### If auto-deploy doesn't work:
1. Go to Vercel dashboard
2. Click on project
3. Go to "Deployments" tab
4. Click "Redeploy"

## 🆘 Troubleshooting

### Common Issues:
1. **404 on refresh**: Check vercel.json rewrites
2. **Build fails**: Check build command and output directory
3. **Assets not loading**: Check asset paths in vercel.json
4. **Old content showing**: Clear browser cache or force redeploy

### Debug Steps:
1. Check build logs in Vercel dashboard
2. Verify file structure in deployment
3. Test locally with `npm run build && npx serve dist`
4. Check network tab in browser dev tools

## 📊 Performance Optimization

### Vercel Features Used:
- ✅ Edge Network (global CDN)
- ✅ Automatic HTTPS
- ✅ Image optimization
- ✅ Compression
- ✅ Browser caching
- ✅ Security headers

### Expected Performance:
- **Lighthouse Score**: 90+ (Performance)
- **First Contentful Paint**: < 1.5s
- **Largest Contentful Paint**: < 2.5s
- **Cumulative Layout Shift**: < 0.1

---

## 🎯 Final Checklist

- [ ] Old project deleted from Vercel
- [ ] New project imported from GitHub
- [ ] Build settings configured correctly
- [ ] Environment variables set (if needed)
- [ ] Custom domain added (stargate.ci)
- [ ] DNS configured
- [ ] SSL certificate active
- [ ] Site loads correctly
- [ ] All pages working
- [ ] Mobile responsive
- [ ] Performance optimized

After completing these steps, your Stargate.ci website should be live and accessible!
