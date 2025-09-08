<template>
  <div>
    <!-- Hero Section -->
    <section class="hero-section">
      <!-- Background Gradient -->
      <div class="hero-bg"></div>
      
      <!-- Animated Background Elements -->
      <div class="hero-elements">
        <div class="float-element float-1"></div>
        <div class="float-element float-2"></div>
        <div class="glow-element"></div>
      </div>

      <div class="hero-content">
        <div class="hero-text">
          <h1 class="hero-title">
            <span class="gradient-text">Stargate</span>
            <span class="domain-suffix">.ci</span>
          </h1>
          <p class="hero-subtitle">
            Powered by Crystal Intelligence
          </p>
          <p class="hero-description">
            The Stargate project represents a revolutionary collaboration between cutting-edge AI technology and advanced computing infrastructure. 
            Through Crystal Intelligence's innovative approach, we're building the gateway to the future of artificial intelligence and cloud computing.
          </p>
          <div class="project-highlight">
            <div class="highlight-card">
              <h3>Stargate Project</h3>
              <p>Advanced AI infrastructure and cloud computing platform</p>
            </div>
            <div class="highlight-card">
              <h3>Crystal Intelligence</h3>
              <p>Pioneering AI research and development company</p>
            </div>
          </div>
          <div class="hero-buttons">
            <RouterLink to="/about" class="btn-primary">
              About Stargate
            </RouterLink>
            <RouterLink to="/partners" class="btn-outline">
              Our Partners
            </RouterLink>
          </div>
        </div>
      </div>

      <!-- Scroll Indicator -->
      <div class="scroll-indicator">
        <svg class="scroll-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
      </div>
    </section>

    <!-- Technologies Section -->
    <section class="technologies-section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">
            <span class="gradient-text">Core Technologies</span>
          </h2>
          <p class="section-description">
            We leverage the most advanced technologies to deliver innovative solutions
          </p>
        </div>

        <div class="tech-grid">
          <div class="tech-card">
            <div class="tech-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
              </svg>
            </div>
            <h3 class="tech-title">Artificial Intelligence</h3>
            <p class="tech-description">
              Advanced AI solutions for automation, machine learning, and intelligent decision making.
            </p>
          </div>

          <div class="tech-card">
            <div class="tech-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
              </svg>
            </div>
            <h3 class="tech-title">Cloud Computing</h3>
            <p class="tech-description">
              Scalable cloud infrastructure and services for modern applications and data processing.
            </p>
          </div>

          <div class="tech-card">
            <div class="tech-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
              </svg>
            </div>
            <h3 class="tech-title">Big Data Analytics</h3>
            <p class="tech-description">
              Comprehensive data analysis and insights to drive informed business decisions.
            </p>
          </div>

          <div class="tech-card">
            <div class="tech-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
              </svg>
            </div>
            <h3 class="tech-title">Advanced Computing</h3>
            <p class="tech-description">
              High-performance computing solutions for complex computational challenges.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Blog Posts -->
    <section class="blog-section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">
            <span class="gradient-text">Latest Insights</span>
          </h2>
          <p class="section-description">
            Stay updated with our latest articles and technology insights
          </p>
        </div>

        <div class="blog-grid">
          <div class="blog-card">
            <div class="blog-image">
              <div class="blog-placeholder"></div>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <span class="blog-category">AI Technology</span>
                <span class="blog-date">Dec 15, 2024</span>
              </div>
              <h3 class="blog-title">The Future of Artificial Intelligence</h3>
              <p class="blog-excerpt">
                Exploring the latest developments in AI and how they're reshaping industries across the globe.
              </p>
              <RouterLink to="/blog/ai-future" class="blog-link">
                Read More
              </RouterLink>
            </div>
          </div>

          <div class="blog-card">
            <div class="blog-image">
              <div class="blog-placeholder"></div>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <span class="blog-category">Cloud Computing</span>
                <span class="blog-date">Dec 12, 2024</span>
              </div>
              <h3 class="blog-title">Cloud Security Best Practices</h3>
              <p class="blog-excerpt">
                Essential security measures every organization should implement in their cloud infrastructure.
              </p>
              <RouterLink to="/blog/cloud-security" class="blog-link">
                Read More
              </RouterLink>
            </div>
          </div>

          <div class="blog-card">
            <div class="blog-image">
              <div class="blog-placeholder"></div>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <span class="blog-category">Big Data</span>
                <span class="blog-date">Dec 10, 2024</span>
              </div>
              <h3 class="blog-title">Data-Driven Decision Making</h3>
              <p class="blog-excerpt">
                How businesses can leverage big data analytics to make more informed and strategic decisions.
              </p>
              <RouterLink to="/blog/data-driven" class="blog-link">
                Read More
              </RouterLink>
            </div>
          </div>
        </div>

        <div class="blog-cta">
          <RouterLink to="/blog" class="btn-outline">
            View All Articles
          </RouterLink>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
      <div class="container">
        <div class="cta-content">
          <h2 class="cta-title">
            Ready to Explore the Future?
          </h2>
          <p class="cta-description">
            Join us on a journey through innovation and discover how cutting-edge technology can transform your business.
          </p>
          <div class="cta-buttons">
            <RouterLink to="/contact" class="btn-primary">
              Get Started
            </RouterLink>
            <RouterLink to="/services" class="btn-outline">
              Our Services
            </RouterLink>
          </div>
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
  min-height: 100vh;
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

.hero-elements {
  position: absolute;
  inset: 0;
}

.float-element {
  position: absolute;
  border-radius: 50%;
  filter: blur(60px);
}

.float-1 {
  top: 25%;
  left: 25%;
  width: 256px;
  height: 256px;
  background: rgba(30, 58, 138, 0.2);
  animation: float 6s ease-in-out infinite;
}

.float-2 {
  bottom: 25%;
  right: 25%;
  width: 384px;
  height: 384px;
  background: rgba(124, 58, 237, 0.2);
  animation: float 6s ease-in-out infinite;
  animation-delay: 2s;
}

.glow-element {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 128px;
  height: 128px;
  background: rgba(59, 130, 246, 0.3);
  border-radius: 50%;
  filter: blur(32px);
  animation: glow 2s ease-in-out infinite alternate;
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
  max-width: 1024px;
  margin: 0 auto;
}

.hero-title {
  font-size: 4rem;
  font-weight: 700;
  margin-bottom: 24px;
  line-height: 1.1;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
}

.gradient-text {
  background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 50%, #06b6d4 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  animation: gradient-shift 3s ease-in-out infinite;
}

.domain-suffix {
  color: #8b5cf6;
  font-size: 3rem;
  font-weight: 600;
  opacity: 0.8;
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
  margin-bottom: 48px;
  max-width: 768px;
  margin-left: auto;
  margin-right: auto;
  line-height: 1.7;
}

.project-highlight {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 24px;
  margin: 48px 0;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
}

.highlight-card {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 16px;
  padding: 24px;
  text-align: center;
  backdrop-filter: blur(10px);
  transition: all 0.3s ease;
}

.highlight-card:hover {
  transform: translateY(-4px);
  border-color: rgba(139, 92, 246, 0.3);
  box-shadow: 0 20px 40px rgba(139, 92, 246, 0.1);
}

.highlight-card h3 {
  color: #8b5cf6;
  font-size: 1.25rem;
  font-weight: 600;
  margin-bottom: 12px;
}

.highlight-card p {
  color: #d1d5db;
  font-size: 0.875rem;
  line-height: 1.5;
  margin: 0;
}

.hero-buttons {
  display: flex;
  flex-direction: column;
  gap: 16px;
  justify-content: center;
  align-items: center;
}

.scroll-indicator {
  position: absolute;
  bottom: 32px;
  left: 50%;
  transform: translateX(-50%);
  animation: bounce 2s infinite;
}

.scroll-icon {
  width: 24px;
  height: 24px;
  color: #9ca3af;
}

/* Technologies Section */
.technologies-section {
  padding: 80px 0;
  background: rgba(17, 24, 39, 0.5);
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

.tech-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 32px;
  margin-top: 64px;
}

.tech-card {
  background: rgba(31, 41, 55, 0.5);
  backdrop-filter: blur(10px);
  border: 1px solid #374151;
  border-radius: 12px;
  padding: 32px;
  text-align: center;
  transition: all 0.3s ease;
}

.tech-card:hover {
  border-color: rgba(124, 58, 237, 0.5);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
  transform: translateY(-4px);
}

.tech-icon {
  width: 64px;
  height: 64px;
  margin: 0 auto 24px;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon {
  width: 32px;
  height: 32px;
  color: white;
}

.tech-title {
  font-size: 1.5rem;
  font-weight: 600;
  margin-bottom: 16px;
  color: white;
}

.tech-description {
  color: #9ca3af;
  line-height: 1.6;
}

/* Blog Section */
.blog-section {
  padding: 80px 0;
}

.blog-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 32px;
  margin-top: 64px;
}

.blog-card {
  background: rgba(31, 41, 55, 0.5);
  backdrop-filter: blur(10px);
  border: 1px solid #374151;
  border-radius: 12px;
  overflow: hidden;
  transition: all 0.3s ease;
}

.blog-card:hover {
  border-color: rgba(124, 58, 237, 0.5);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
  transform: translateY(-4px);
}

.blog-image {
  height: 200px;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  position: relative;
}

.blog-placeholder {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 60px;
  height: 60px;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 8px;
}

.blog-content {
  padding: 24px;
}

.blog-meta {
  display: flex;
  gap: 16px;
  margin-bottom: 16px;
  font-size: 0.875rem;
}

.blog-category {
  background: rgba(30, 58, 138, 0.2);
  color: #60a5fa;
  padding: 4px 12px;
  border-radius: 20px;
}

.blog-date {
  color: #9ca3af;
}

.blog-title {
  font-size: 1.25rem;
  font-weight: 600;
  margin-bottom: 12px;
  color: white;
}

.blog-excerpt {
  color: #9ca3af;
  line-height: 1.6;
  margin-bottom: 16px;
}

.blog-link {
  color: #7c3aed;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s ease;
}

.blog-link:hover {
  color: #1e3a8a;
}

.blog-cta {
  text-align: center;
  margin-top: 48px;
}

/* CTA Section */
.cta-section {
  padding: 80px 0;
  background: linear-gradient(135deg, rgba(30, 58, 138, 0.2) 0%, rgba(124, 58, 237, 0.2) 100%);
}

.cta-content {
  text-align: center;
  max-width: 800px;
  margin: 0 auto;
}

.cta-title {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 24px;
}

.cta-description {
  font-size: 1.25rem;
  color: #d1d5db;
  margin-bottom: 32px;
  line-height: 1.6;
}

.cta-buttons {
  display: flex;
  flex-direction: column;
  gap: 16px;
  justify-content: center;
  align-items: center;
}

/* Responsive Design */
@media (min-width: 640px) {
  .hero-title {
    font-size: 5rem;
  }
  
  .hero-subtitle {
    font-size: 2rem;
  }
  
  .hero-buttons {
    flex-direction: row;
  }
  
  .cta-buttons {
    flex-direction: row;
  }
}

@media (max-width: 768px) {
  .hero-title {
    font-size: 2.5rem;
    flex-direction: column;
    gap: 4px;
  }
  
  .domain-suffix {
    font-size: 2rem;
  }
  
  .project-highlight {
    grid-template-columns: 1fr;
    gap: 16px;
    margin: 32px 0;
  }
  
  .highlight-card {
    padding: 20px;
  }
}

@media (min-width: 768px) {
  .hero-title {
    font-size: 6rem;
  }
  
  .section-title {
    font-size: 3.5rem;
  }
}

@media (min-width: 1024px) {
  .hero-title {
    font-size: 7rem;
  }
}

/* Animations */
@keyframes bounce {
  0%, 20%, 53%, 80%, 100% {
    transform: translateX(-50%) translateY(0);
  }
  40%, 43% {
    transform: translateX(-50%) translateY(-8px);
  }
  70% {
    transform: translateX(-50%) translateY(-4px);
  }
  90% {
    transform: translateX(-50%) translateY(-2px);
  }
}

@keyframes gradient-shift {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
</style>