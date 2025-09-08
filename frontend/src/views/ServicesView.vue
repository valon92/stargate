<template>
  <div>
    <!-- Hero Section -->
    <section class="hero-section">
      <div class="hero-bg"></div>
      <div class="hero-content">
        <div class="hero-text">
          <h1 class="hero-title">
            <span class="gradient-text">Our Services</span>
          </h1>
          <p class="hero-subtitle">
            Comprehensive Technology Solutions for the Digital Age
          </p>
          <p class="hero-description">
            We provide cutting-edge solutions in AI, Cloud Computing, Big Data Analytics, 
            and Advanced Computing to help your business thrive in the digital landscape.
          </p>
        </div>
      </div>
    </section>

    <!-- Services Overview -->
    <section class="services-overview">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">
            <span class="gradient-text">What We Offer</span>
          </h2>
          <p class="section-description">
            Transform your business with our comprehensive suite of technology services
          </p>
        </div>

        <div class="services-grid">
          <div class="service-card featured">
            <div class="service-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
              </svg>
            </div>
            <h3 class="service-title">Artificial Intelligence</h3>
            <p class="service-description">
              Harness the power of AI with our machine learning solutions, natural language processing, 
              computer vision, and intelligent automation systems.
            </p>
            <ul class="service-features">
              <li>Machine Learning Models</li>
              <li>Natural Language Processing</li>
              <li>Computer Vision</li>
              <li>Intelligent Automation</li>
              <li>Predictive Analytics</li>
            </ul>
            <div class="service-cta">
              <RouterLink to="/contact" class="btn-primary">Get Started</RouterLink>
            </div>
          </div>

          <div class="service-card">
            <div class="service-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
              </svg>
            </div>
            <h3 class="service-title">Cloud Computing</h3>
            <p class="service-description">
              Scale your infrastructure with our cloud solutions, from migration to optimization, 
              ensuring reliability and cost-effectiveness.
            </p>
            <ul class="service-features">
              <li>Cloud Migration</li>
              <li>Infrastructure as Code</li>
              <li>DevOps & CI/CD</li>
              <li>Cloud Security</li>
              <li>Cost Optimization</li>
            </ul>
            <div class="service-cta">
              <RouterLink to="/contact" class="btn-outline">Learn More</RouterLink>
            </div>
          </div>

          <div class="service-card">
            <div class="service-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
              </svg>
            </div>
            <h3 class="service-title">Big Data Analytics</h3>
            <p class="service-description">
              Unlock insights from your data with our advanced analytics solutions, 
              real-time processing, and business intelligence platforms.
            </p>
            <ul class="service-features">
              <li>Data Warehousing</li>
              <li>Real-time Analytics</li>
              <li>Business Intelligence</li>
              <li>Data Visualization</li>
              <li>Data Governance</li>
            </ul>
            <div class="service-cta">
              <RouterLink to="/contact" class="btn-outline">Learn More</RouterLink>
            </div>
          </div>

          <div class="service-card">
            <div class="service-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
              </svg>
            </div>
            <h3 class="service-title">Advanced Computing</h3>
            <p class="service-description">
              Leverage high-performance computing for complex simulations, 
              scientific computing, and resource-intensive applications.
            </p>
            <ul class="service-features">
              <li>High-Performance Computing</li>
              <li>Parallel Processing</li>
              <li>Scientific Computing</li>
              <li>GPU Acceleration</li>
              <li>Distributed Systems</li>
            </ul>
            <div class="service-cta">
              <RouterLink to="/contact" class="btn-outline">Learn More</RouterLink>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">
            <span class="gradient-text">Our Process</span>
          </h2>
          <p class="section-description">
            How we deliver exceptional results for your business
          </p>
        </div>

        <div class="process-timeline">
          <div class="process-step">
            <div class="step-number">01</div>
            <div class="step-content">
              <h3 class="step-title">Discovery & Analysis</h3>
              <p class="step-description">
                We begin by understanding your business goals, current challenges, 
                and technology requirements through comprehensive analysis.
              </p>
            </div>
          </div>

          <div class="process-step">
            <div class="step-number">02</div>
            <div class="step-content">
              <h3 class="step-title">Strategy & Planning</h3>
              <p class="step-description">
                Our experts develop a customized strategy and implementation plan 
                tailored to your specific needs and objectives.
              </p>
            </div>
          </div>

          <div class="process-step">
            <div class="step-number">03</div>
            <div class="step-content">
              <h3 class="step-title">Implementation</h3>
              <p class="step-description">
                We execute the solution with precision, ensuring minimal disruption 
                to your operations while maximizing efficiency.
              </p>
            </div>
          </div>

          <div class="process-step">
            <div class="step-number">04</div>
            <div class="step-content">
              <h3 class="step-title">Optimization & Support</h3>
              <p class="step-description">
                Continuous monitoring, optimization, and support ensure your 
                technology solutions deliver maximum value over time.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Industries Section -->
    <section class="industries-section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">
            <span class="gradient-text">Industries We Serve</span>
          </h2>
          <p class="section-description">
            Our solutions are designed to meet the unique needs of various industries
          </p>
        </div>

        <div class="industries-grid">
          <div class="industry-card">
            <div class="industry-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
              </svg>
            </div>
            <h3 class="industry-title">Healthcare</h3>
            <p class="industry-description">
              AI-powered diagnostics, patient data analytics, and telemedicine solutions.
            </p>
          </div>

          <div class="industry-card">
            <div class="industry-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
              </svg>
            </div>
            <h3 class="industry-title">Finance</h3>
            <p class="industry-description">
              Fraud detection, risk assessment, and algorithmic trading solutions.
            </p>
          </div>

          <div class="industry-card">
            <div class="industry-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
              </svg>
            </div>
            <h3 class="industry-title">Manufacturing</h3>
            <p class="industry-description">
              Predictive maintenance, quality control, and supply chain optimization.
            </p>
          </div>

          <div class="industry-card">
            <div class="industry-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
              </svg>
            </div>
            <h3 class="industry-title">E-commerce</h3>
            <p class="industry-description">
              Recommendation engines, inventory management, and customer analytics.
            </p>
          </div>

          <div class="industry-card">
            <div class="industry-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
              </svg>
            </div>
            <h3 class="industry-title">Education</h3>
            <p class="industry-description">
              Personalized learning, student analytics, and educational content delivery.
            </p>
          </div>

          <div class="industry-card">
            <div class="industry-icon">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
              </svg>
            </div>
            <h3 class="industry-title">Government</h3>
            <p class="industry-description">
              Citizen services, data governance, and public sector digital transformation.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
      <div class="container">
        <div class="cta-content">
          <h2 class="cta-title">
            Ready to Transform Your Business?
          </h2>
          <p class="cta-description">
            Let's discuss how our technology solutions can drive innovation and growth for your organization.
          </p>
          <div class="cta-buttons">
            <RouterLink to="/contact" class="btn-primary">
              Start Your Project
            </RouterLink>
            <RouterLink to="/about" class="btn-outline">
              Learn About Us
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

/* Services Overview */
.services-overview {
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

.services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 32px;
}

.service-card {
  background: rgba(31, 41, 55, 0.5);
  backdrop-filter: blur(10px);
  border: 1px solid #374151;
  border-radius: 16px;
  padding: 40px;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.service-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  transform: scaleX(0);
  transition: transform 0.3s ease;
}

.service-card:hover::before {
  transform: scaleX(1);
}

.service-card:hover {
  border-color: rgba(124, 58, 237, 0.5);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
  transform: translateY(-8px);
}

.service-card.featured {
  border-color: rgba(124, 58, 237, 0.3);
  background: rgba(124, 58, 237, 0.05);
}

.service-card.featured::before {
  transform: scaleX(1);
}

.service-icon {
  width: 80px;
  height: 80px;
  margin-bottom: 24px;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  border-radius: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon {
  width: 40px;
  height: 40px;
  color: white;
}

.service-title {
  font-size: 1.5rem;
  font-weight: 600;
  margin-bottom: 16px;
  color: white;
}

.service-description {
  color: #d1d5db;
  line-height: 1.6;
  margin-bottom: 24px;
}

.service-features {
  list-style: none;
  padding: 0;
  margin: 0 0 32px 0;
}

.service-features li {
  color: #9ca3af;
  padding: 8px 0;
  position: relative;
  padding-left: 24px;
}

.service-features li::before {
  content: '✓';
  position: absolute;
  left: 0;
  color: #7c3aed;
  font-weight: bold;
}

.service-cta {
  margin-top: auto;
}

/* Process Section */
.process-section {
  padding: 80px 0;
}

.process-timeline {
  max-width: 800px;
  margin: 0 auto;
}

.process-step {
  display: flex;
  align-items: flex-start;
  gap: 32px;
  margin-bottom: 48px;
  position: relative;
}

.process-step:not(:last-child)::after {
  content: '';
  position: absolute;
  left: 24px;
  top: 80px;
  bottom: -48px;
  width: 2px;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
}

.step-number {
  width: 48px;
  height: 48px;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  font-size: 1.125rem;
  color: white;
  flex-shrink: 0;
}

.step-content {
  flex: 1;
}

.step-title {
  font-size: 1.5rem;
  font-weight: 600;
  margin-bottom: 12px;
  color: white;
}

.step-description {
  color: #9ca3af;
  line-height: 1.6;
}

/* Industries Section */
.industries-section {
  padding: 80px 0;
  background: rgba(17, 24, 39, 0.5);
}

.industries-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 32px;
}

.industry-card {
  background: rgba(31, 41, 55, 0.5);
  backdrop-filter: blur(10px);
  border: 1px solid #374151;
  border-radius: 12px;
  padding: 32px;
  text-align: center;
  transition: all 0.3s ease;
}

.industry-card:hover {
  border-color: rgba(124, 58, 237, 0.5);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
  transform: translateY(-4px);
}

.industry-icon {
  width: 64px;
  height: 64px;
  margin: 0 auto 24px;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.industry-title {
  font-size: 1.25rem;
  font-weight: 600;
  margin-bottom: 16px;
  color: white;
}

.industry-description {
  color: #9ca3af;
  line-height: 1.6;
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
@media (max-width: 1024px) {
  .services-grid {
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  }
  
  .process-step {
    gap: 24px;
  }
}

@media (max-width: 768px) {
  .hero-title {
    font-size: 3rem;
  }
  
  .section-title {
    font-size: 2.5rem;
  }
  
  .cta-title {
    font-size: 2rem;
  }
  
  .services-grid {
    grid-template-columns: 1fr;
  }
  
  .process-step {
    flex-direction: column;
    text-align: center;
    gap: 16px;
  }
  
  .process-step:not(:last-child)::after {
    display: none;
  }
  
  .cta-buttons {
    flex-direction: row;
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
  
  .service-card,
  .industry-card {
    padding: 24px;
  }
  
  .cta-buttons {
    flex-direction: column;
  }
}

@media (max-width: 480px) {
  .hero-section {
    padding: 80px 0;
  }
  
  .services-overview,
  .process-section,
  .industries-section,
  .cta-section {
    padding: 60px 0;
  }
  
  .service-card {
    padding: 20px;
  }
  
  .service-icon {
    width: 64px;
    height: 64px;
  }
  
  .icon {
    width: 32px;
    height: 32px;
  }
}
</style>