<template>
  <div>
    <!-- Hero Section -->
    <section class="hero-section">
      <div class="hero-bg"></div>
      <div class="hero-content">
        <div class="hero-text">
          <h1 class="hero-title">
            <span class="gradient-text">Insights & Blog</span>
          </h1>
          <p class="hero-subtitle">
            Exploring the Future of Technology
          </p>
          <p class="hero-description">
            Stay informed with our latest insights on AI, cloud computing, 
            big data, and the technologies shaping tomorrow's digital landscape.
          </p>
        </div>
      </div>
    </section>

    <!-- Featured Article -->
    <section class="featured-section">
      <div class="container">
        <div class="featured-article">
          <div class="featured-image">
            <div class="image-placeholder">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
              </svg>
            </div>
          </div>
          <div class="featured-content">
            <div class="article-meta">
              <span class="category">Featured</span>
              <span class="date">December 15, 2024</span>
            </div>
            <h2 class="article-title">
              The Future of Artificial Intelligence: Trends and Predictions for 2025
            </h2>
            <p class="article-excerpt">
              Explore the latest developments in AI technology, from advanced language models 
              to autonomous systems, and discover how these innovations will reshape industries 
              and create new opportunities for businesses worldwide.
            </p>
            <div class="article-tags">
              <span class="tag">Artificial Intelligence</span>
              <span class="tag">Machine Learning</span>
              <span class="tag">Future Tech</span>
            </div>
            <RouterLink to="/blog/ai-future-2025" class="read-more">
              Read Full Article →
            </RouterLink>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog Categories -->
    <section class="categories-section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">
            <span class="gradient-text">Explore by Category</span>
          </h2>
        </div>
        
        <div class="categories-grid">
          <div class="category-card">
            <div class="category-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
              </svg>
            </div>
            <h3 class="category-title">Artificial Intelligence</h3>
            <p class="category-count">12 Articles</p>
          </div>

          <div class="category-card">
            <div class="category-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
              </svg>
            </div>
            <h3 class="category-title">Cloud Computing</h3>
            <p class="category-count">8 Articles</p>
          </div>

          <div class="category-card">
            <div class="category-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
              </svg>
            </div>
            <h3 class="category-title">Big Data</h3>
            <p class="category-count">6 Articles</p>
          </div>

          <div class="category-card">
            <div class="category-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
              </svg>
            </div>
            <h3 class="category-title">Advanced Computing</h3>
            <p class="category-count">4 Articles</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Recent Articles -->
    <section class="articles-section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">
            <span class="gradient-text">Recent Articles</span>
          </h2>
          <p class="section-description">
            Latest insights and analysis from our technology experts
          </p>
        </div>

        <div class="articles-grid">
          <article class="article-card">
            <div class="article-image">
              <div class="image-placeholder">
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
              </div>
            </div>
            <div class="article-content">
              <div class="article-meta">
                <span class="category">Cloud Computing</span>
                <span class="date">Dec 12, 2024</span>
              </div>
              <h3 class="article-title">
                Multi-Cloud Strategy: Best Practices for Enterprise
              </h3>
              <p class="article-excerpt">
                Learn how to implement a successful multi-cloud strategy that maximizes 
                flexibility, reduces vendor lock-in, and optimizes costs.
              </p>
              <div class="article-tags">
                <span class="tag">Cloud</span>
                <span class="tag">Strategy</span>
              </div>
            </div>
          </article>

          <article class="article-card">
            <div class="article-image">
              <div class="image-placeholder">
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
              </div>
            </div>
            <div class="article-content">
              <div class="article-meta">
                <span class="category">Big Data</span>
                <span class="date">Dec 10, 2024</span>
              </div>
              <h3 class="article-title">
                Real-Time Analytics: Processing Data at Scale
              </h3>
              <p class="article-excerpt">
                Discover the technologies and architectures that enable real-time 
                data processing and analytics for modern applications.
              </p>
              <div class="article-tags">
                <span class="tag">Analytics</span>
                <span class="tag">Real-time</span>
              </div>
            </div>
          </article>

          <article class="article-card">
            <div class="article-image">
              <div class="image-placeholder">
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
              </div>
            </div>
            <div class="article-content">
              <div class="article-meta">
                <span class="category">AI Ethics</span>
                <span class="date">Dec 8, 2024</span>
              </div>
              <h3 class="article-title">
                Ethical AI: Building Responsible Technology
              </h3>
              <p class="article-excerpt">
                Explore the principles and practices for developing AI systems that 
                are fair, transparent, and beneficial to society.
              </p>
              <div class="article-tags">
                <span class="tag">Ethics</span>
                <span class="tag">Responsibility</span>
              </div>
            </div>
          </article>

          <article class="article-card">
            <div class="article-image">
              <div class="image-placeholder">
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                </svg>
              </div>
            </div>
            <div class="article-content">
              <div class="article-meta">
                <span class="category">Advanced Computing</span>
                <span class="date">Dec 5, 2024</span>
              </div>
              <h3 class="article-title">
                Quantum Computing: The Next Frontier
              </h3>
              <p class="article-excerpt">
                Understanding quantum computing principles and their potential 
                applications in solving complex computational problems.
              </p>
              <div class="article-tags">
                <span class="tag">Quantum</span>
                <span class="tag">Computing</span>
              </div>
            </div>
          </article>

          <article class="article-card">
            <div class="article-image">
              <div class="image-placeholder">
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                </svg>
              </div>
            </div>
            <div class="article-content">
              <div class="article-meta">
                <span class="category">Cloud Security</span>
                <span class="date">Dec 3, 2024</span>
              </div>
              <h3 class="article-title">
                Zero Trust Architecture in Cloud Environments
              </h3>
              <p class="article-excerpt">
                Implementing zero trust security principles to protect cloud 
                infrastructure and applications from modern threats.
              </p>
              <div class="article-tags">
                <span class="tag">Security</span>
                <span class="tag">Zero Trust</span>
              </div>
            </div>
          </article>

          <article class="article-card">
            <div class="article-image">
              <div class="image-placeholder">
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>
              </div>
            </div>
            <div class="article-content">
              <div class="article-meta">
                <span class="category">Machine Learning</span>
                <span class="date">Dec 1, 2024</span>
              </div>
              <h3 class="article-title">
                MLOps: Streamlining Machine Learning Workflows
              </h3>
              <p class="article-excerpt">
                Best practices for managing machine learning models in production, 
                from development to deployment and monitoring.
              </p>
              <div class="article-tags">
                <span class="tag">MLOps</span>
                <span class="tag">Workflow</span>
              </div>
            </div>
          </article>
        </div>

        <div class="load-more">
          <button class="btn-outline">Load More Articles</button>
        </div>
      </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
      <div class="container">
        <div class="newsletter-content">
          <h2 class="newsletter-title">
            Stay Updated
          </h2>
          <p class="newsletter-description">
            Subscribe to our newsletter for the latest insights and technology updates.
          </p>
          <form class="newsletter-form">
            <input 
              type="email" 
              placeholder="Enter your email address" 
              class="newsletter-input"
              required
            >
            <button type="submit" class="btn-primary">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
// Component logic here
</script>

<style scoped>
/* Hero Section */
.hero-section {
  position: relative;
  padding: 120px 0;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.hero-bg {
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, #0a0a0a 0%, #1f2937 50%, #0a0a0a 100%);
}

.hero-content {
  position: relative;
  z-index: 10;
  text-align: center;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 16px;
}

.hero-text {
  max-width: 800px;
  margin: 0 auto;
}

.hero-title {
  font-size: 4rem;
  font-weight: 700;
  margin-bottom: 24px;
  line-height: 1.1;
}

.hero-subtitle {
  font-size: 1.5rem;
  color: #d1d5db;
  margin-bottom: 32px;
  line-height: 1.6;
}

.hero-description {
  font-size: 1.125rem;
  color: #9ca3af;
  line-height: 1.7;
  max-width: 600px;
  margin: 0 auto;
}

/* Featured Section */
.featured-section {
  padding: 80px 0;
  background: rgba(17, 24, 39, 0.5);
}

.featured-article {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 48px;
  align-items: center;
  background: rgba(31, 41, 55, 0.5);
  backdrop-filter: blur(10px);
  border: 1px solid #374151;
  border-radius: 16px;
  padding: 48px;
  position: relative;
  overflow: hidden;
}

.featured-article::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
}

.featured-image {
  position: relative;
}

.image-placeholder {
  width: 100%;
  height: 300px;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon {
  width: 80px;
  height: 80px;
  color: white;
}

.featured-content {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.article-meta {
  display: flex;
  gap: 16px;
  align-items: center;
}

.category {
  background: rgba(124, 58, 237, 0.1);
  color: #7c3aed;
  padding: 4px 12px;
  border-radius: 20px;
  font-size: 0.75rem;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.date {
  color: #9ca3af;
  font-size: 0.875rem;
}

.article-title {
  font-size: 2rem;
  font-weight: 700;
  line-height: 1.2;
  color: white;
}

.article-excerpt {
  color: #d1d5db;
  line-height: 1.6;
  font-size: 1.125rem;
}

.article-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}

.tag {
  background: rgba(124, 58, 237, 0.1);
  color: #7c3aed;
  padding: 4px 12px;
  border-radius: 20px;
  font-size: 0.75rem;
  font-weight: 500;
  border: 1px solid rgba(124, 58, 237, 0.2);
}

.read-more {
  color: #7c3aed;
  font-weight: 600;
  text-decoration: none;
  align-self: flex-start;
  transition: color 0.3s ease;
}

.read-more:hover {
  color: #1e3a8a;
}

/* Categories Section */
.categories-section {
  padding: 80px 0;
}

.section-header {
  text-align: center;
  margin-bottom: 64px;
}

.section-title {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 16px;
}

.section-description {
  font-size: 1.25rem;
  color: #9ca3af;
  max-width: 600px;
  margin: 0 auto;
}

.categories-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 32px;
}

.category-card {
  background: rgba(31, 41, 55, 0.5);
  backdrop-filter: blur(10px);
  border: 1px solid #374151;
  border-radius: 12px;
  padding: 32px;
  text-align: center;
  transition: all 0.3s ease;
  cursor: pointer;
}

.category-card:hover {
  border-color: rgba(124, 58, 237, 0.5);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
  transform: translateY(-4px);
}

.category-icon {
  width: 64px;
  height: 64px;
  margin: 0 auto 24px;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.category-title {
  font-size: 1.25rem;
  font-weight: 600;
  margin-bottom: 8px;
  color: white;
}

.category-count {
  color: #9ca3af;
  font-size: 0.875rem;
}

/* Articles Section */
.articles-section {
  padding: 80px 0;
  background: rgba(17, 24, 39, 0.5);
}

.articles-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 32px;
  margin-bottom: 48px;
}

.article-card {
  background: rgba(31, 41, 55, 0.5);
  backdrop-filter: blur(10px);
  border: 1px solid #374151;
  border-radius: 12px;
  overflow: hidden;
  transition: all 0.3s ease;
}

.article-card:hover {
  border-color: rgba(124, 58, 237, 0.5);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
  transform: translateY(-4px);
}

.article-image {
  height: 200px;
  overflow: hidden;
}

.article-image .image-placeholder {
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  display: flex;
  align-items: center;
  justify-content: center;
}

.article-image .icon {
  width: 48px;
  height: 48px;
  color: white;
}

.article-content {
  padding: 24px;
}

.article-content .article-meta {
  margin-bottom: 16px;
}

.article-content .article-title {
  font-size: 1.25rem;
  font-weight: 600;
  margin-bottom: 12px;
  color: white;
  line-height: 1.3;
}

.article-content .article-excerpt {
  color: #9ca3af;
  line-height: 1.6;
  margin-bottom: 16px;
  font-size: 0.875rem;
}

.load-more {
  text-align: center;
}

/* Newsletter Section */
.newsletter-section {
  padding: 80px 0;
  background: linear-gradient(135deg, rgba(30, 58, 138, 0.2) 0%, rgba(124, 58, 237, 0.2) 100%);
}

.newsletter-content {
  text-align: center;
  max-width: 600px;
  margin: 0 auto;
}

.newsletter-title {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 16px;
}

.newsletter-description {
  font-size: 1.25rem;
  color: #d1d5db;
  margin-bottom: 32px;
  line-height: 1.6;
}

.newsletter-form {
  display: flex;
  gap: 16px;
  max-width: 400px;
  margin: 0 auto;
}

.newsletter-input {
  flex: 1;
  padding: 12px 16px;
  background: rgba(31, 41, 55, 0.5);
  border: 1px solid #374151;
  border-radius: 8px;
  color: white;
  font-size: 1rem;
}

.newsletter-input::placeholder {
  color: #9ca3af;
}

.newsletter-input:focus {
  outline: none;
  border-color: #7c3aed;
  box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1);
}

/* Responsive Design */
@media (max-width: 1024px) {
  .featured-article {
    grid-template-columns: 1fr;
    gap: 32px;
  }
  
  .articles-grid {
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  }
}

@media (max-width: 768px) {
  .hero-title {
    font-size: 3rem;
  }
  
  .section-title {
    font-size: 2.5rem;
  }
  
  .newsletter-title {
    font-size: 2rem;
  }
  
  .featured-article {
    padding: 32px;
  }
  
  .article-title {
    font-size: 1.5rem;
  }
  
  .newsletter-form {
    flex-direction: column;
  }
}

@media (max-width: 640px) {
  .hero-title {
    font-size: 2.5rem;
  }
  
  .hero-subtitle {
    font-size: 1.25rem;
  }
  
  .section-title {
    font-size: 2rem;
  }
  
  .articles-grid {
    grid-template-columns: 1fr;
  }
  
  .categories-grid {
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  }
}

@media (max-width: 480px) {
  .hero-section {
    padding: 80px 0;
  }
  
  .featured-section,
  .categories-section,
  .articles-section,
  .newsletter-section {
    padding: 60px 0;
  }
  
  .featured-article {
    padding: 24px;
  }
  
  .category-card,
  .article-content {
    padding: 20px;
  }
}
</style>