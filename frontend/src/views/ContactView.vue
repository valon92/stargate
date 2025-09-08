<template>
  <div>
    <!-- Hero Section -->
    <section class="hero-section">
      <div class="hero-bg"></div>
      <div class="hero-content">
        <div class="hero-text">
          <h1 class="hero-title">
            <span class="gradient-text">Contact Us</span>
          </h1>
          <p class="hero-subtitle">
            Get in Touch with Our Team
          </p>
          <p class="hero-description">
            Ready to start your next project or have questions about our services? 
            We're here to help and would love to hear from you.
          </p>
        </div>
      </div>
    </section>

    <!-- Contact Form & Info -->
    <section class="contact-section">
      <div class="container">
        <div class="contact-grid">
          <!-- Contact Form -->
          <div class="contact-form-container">
            <div class="form-header">
              <h2 class="form-title">Send us a Message</h2>
              <p class="form-description">
                Fill out the form below and we'll get back to you as soon as possible.
              </p>
            </div>
            
            <form class="contact-form" @submit.prevent="submitForm">
              <div class="form-group">
                <label for="name" class="form-label">Full Name *</label>
                <input 
                  type="text" 
                  id="name" 
                  v-model="form.name"
                  class="form-input"
                  required
                >
              </div>

              <div class="form-group">
                <label for="email" class="form-label">Email Address *</label>
                <input 
                  type="email" 
                  id="email" 
                  v-model="form.email"
                  class="form-input"
                  required
                >
              </div>

              <div class="form-group">
                <label for="company" class="form-label">Company</label>
                <input 
                  type="text" 
                  id="company" 
                  v-model="form.company"
                  class="form-input"
                >
              </div>

              <div class="form-group">
                <label for="phone" class="form-label">Phone Number</label>
                <input 
                  type="tel" 
                  id="phone" 
                  v-model="form.phone"
                  class="form-input"
                >
              </div>

              <div class="form-group">
                <label for="subject" class="form-label">Subject *</label>
                <select 
                  id="subject" 
                  v-model="form.subject"
                  class="form-select"
                  required
                >
                  <option value="">Select a subject</option>
                  <option value="general">General Inquiry</option>
                  <option value="services">Services Information</option>
                  <option value="partnership">Partnership Opportunity</option>
                  <option value="support">Technical Support</option>
                  <option value="media">Media & Press</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <div class="form-group">
                <label for="message" class="form-label">Message *</label>
                <textarea 
                  id="message" 
                  v-model="form.message"
                  class="form-textarea"
                  rows="6"
                  required
                ></textarea>
              </div>

              <div class="form-group checkbox-group">
                <label class="checkbox-label">
                  <input 
                    type="checkbox" 
                    v-model="form.newsletter"
                    class="checkbox-input"
                  >
                  <span class="checkbox-text">
                    I would like to receive updates and newsletters from Stargate
                  </span>
                </label>
              </div>

              <button 
                type="submit" 
                class="submit-button"
                :disabled="isSubmitting"
              >
                <span v-if="!isSubmitting">Send Message</span>
                <span v-else>Sending...</span>
              </button>
            </form>
          </div>

          <!-- Contact Information -->
          <div class="contact-info-container">
            <div class="contact-info">
              <h2 class="info-title">Get in Touch</h2>
              <p class="info-description">
                We're here to help you with your technology needs. 
                Reach out to us through any of the channels below.
              </p>

              <div class="contact-methods">
                <div class="contact-method">
                  <div class="method-icon">
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                  </div>
                  <div class="method-content">
                    <h3 class="method-title">Email</h3>
                    <p class="method-value">contact@stargate.ci</p>
                    <p class="method-description">We'll respond within 24 hours</p>
                  </div>
                </div>

                <div class="contact-method">
                  <div class="method-icon">
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                  </div>
                  <div class="method-content">
                    <h3 class="method-title">Phone</h3>
                    <p class="method-value">+1 (555) 123-4567</p>
                    <p class="method-description">Mon-Fri 9AM-6PM EST</p>
                  </div>
                </div>

                <div class="contact-method">
                  <div class="method-icon">
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                  </div>
                  <div class="method-content">
                    <h3 class="method-title">Office</h3>
                    <p class="method-value">123 Innovation Drive<br>Tech City, TC 12345</p>
                    <p class="method-description">Visit us by appointment</p>
                  </div>
                </div>
              </div>

              <div class="social-links">
                <h3 class="social-title">Follow Us</h3>
                <div class="social-icons">
                  <a href="#" class="social-link">
                    <svg class="icon" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                    </svg>
                  </a>
                  <a href="#" class="social-link">
                    <svg class="icon" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                    </svg>
                  </a>
                  <a href="#" class="social-link">
                    <svg class="icon" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                  </a>
                  <a href="#" class="social-link">
                    <svg class="icon" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Success Message -->
    <div v-if="showSuccess" class="success-message">
      <div class="success-content">
        <svg class="success-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        <h3 class="success-title">Message Sent Successfully!</h3>
        <p class="success-description">
          Thank you for contacting us. We'll get back to you within 24 hours.
        </p>
        <button @click="showSuccess = false" class="success-close">Close</button>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, reactive } from 'vue'

// Reactive data
const isSubmitting = ref(false)
const showSuccess = ref(false)

const form = reactive({
  name: '',
  email: '',
  company: '',
  phone: '',
  subject: '',
  message: '',
  newsletter: false
})

// Methods
const submitForm = async () => {
  isSubmitting.value = true
  
  try {
    // Simulate API call
    await new Promise(resolve => setTimeout(resolve, 2000))
    
    // Reset form
    Object.assign(form, {
      name: '',
      email: '',
      company: '',
      phone: '',
      subject: '',
      message: '',
      newsletter: false
    })
    
    showSuccess.value = true
    
    // Hide success message after 5 seconds
    setTimeout(() => {
      showSuccess.value = false
    }, 5000)
    
  } catch (error) {
    console.error('Error submitting form:', error)
  } finally {
    isSubmitting.value = false
  }
}
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

/* Contact Section */
.contact-section {
  padding: 80px 0;
  background: rgba(17, 24, 39, 0.5);
}

.contact-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 64px;
  align-items: start;
}

/* Contact Form */
.contact-form-container {
  background: rgba(31, 41, 55, 0.5);
  backdrop-filter: blur(10px);
  border: 1px solid #374151;
  border-radius: 16px;
  padding: 48px;
}

.form-header {
  margin-bottom: 32px;
}

.form-title {
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 16px;
  color: white;
}

.form-description {
  color: #9ca3af;
  line-height: 1.6;
}

.contact-form {
  display: flex;
  flex-direction: column;
  gap: 24px;
}

.form-group {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.form-label {
  font-weight: 500;
  color: white;
  font-size: 0.875rem;
}

.form-input,
.form-select,
.form-textarea {
  padding: 12px 16px;
  background: rgba(17, 24, 39, 0.5);
  border: 1px solid #374151;
  border-radius: 8px;
  color: white;
  font-size: 1rem;
  transition: all 0.3s ease;
}

.form-input:focus,
.form-select:focus,
.form-textarea:focus {
  outline: none;
  border-color: #7c3aed;
  box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1);
}

.form-input::placeholder,
.form-textarea::placeholder {
  color: #9ca3af;
}

.form-textarea {
  resize: vertical;
  min-height: 120px;
}

.checkbox-group {
  flex-direction: row;
  align-items: flex-start;
  gap: 12px;
}

.checkbox-label {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  cursor: pointer;
}

.checkbox-input {
  margin: 0;
  width: 18px;
  height: 18px;
  accent-color: #7c3aed;
}

.checkbox-text {
  color: #d1d5db;
  font-size: 0.875rem;
  line-height: 1.5;
}

.submit-button {
  padding: 16px 32px;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  border: none;
  border-radius: 8px;
  color: white;
  font-size: 1.125rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  margin-top: 16px;
}

.submit-button:hover:not(:disabled) {
  transform: scale(1.02);
  box-shadow: 0 10px 25px rgba(124, 58, 237, 0.3);
}

.submit-button:disabled {
  opacity: 0.6;
  cursor: not-allowed;
}

/* Contact Info */
.contact-info-container {
  background: rgba(31, 41, 55, 0.5);
  backdrop-filter: blur(10px);
  border: 1px solid #374151;
  border-radius: 16px;
  padding: 48px;
  height: fit-content;
}

.contact-info {
  display: flex;
  flex-direction: column;
  gap: 32px;
}

.info-title {
  font-size: 2rem;
  font-weight: 700;
  color: white;
}

.info-description {
  color: #9ca3af;
  line-height: 1.6;
}

.contact-methods {
  display: flex;
  flex-direction: column;
  gap: 24px;
}

.contact-method {
  display: flex;
  gap: 16px;
  align-items: flex-start;
}

.method-icon {
  width: 48px;
  height: 48px;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.method-icon .icon {
  width: 24px;
  height: 24px;
  color: white;
}

.method-content {
  flex: 1;
}

.method-title {
  font-size: 1.125rem;
  font-weight: 600;
  color: white;
  margin-bottom: 4px;
}

.method-value {
  color: #d1d5db;
  font-weight: 500;
  margin-bottom: 4px;
}

.method-description {
  color: #9ca3af;
  font-size: 0.875rem;
}

.social-links {
  border-top: 1px solid #374151;
  padding-top: 32px;
}

.social-title {
  font-size: 1.25rem;
  font-weight: 600;
  color: white;
  margin-bottom: 16px;
}

.social-icons {
  display: flex;
  gap: 16px;
}

.social-link {
  width: 44px;
  height: 44px;
  background: rgba(17, 24, 39, 0.5);
  border: 1px solid #374151;
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #9ca3af;
  transition: all 0.3s ease;
}

.social-link:hover {
  border-color: #7c3aed;
  color: #7c3aed;
  transform: translateY(-2px);
}

.social-link .icon {
  width: 20px;
  height: 20px;
}

/* Success Message */
.success-message {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.8);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1000;
}

.success-content {
  background: rgba(31, 41, 55, 0.95);
  backdrop-filter: blur(10px);
  border: 1px solid #374151;
  border-radius: 16px;
  padding: 48px;
  text-align: center;
  max-width: 400px;
  margin: 0 16px;
}

.success-icon {
  width: 64px;
  height: 64px;
  color: #10b981;
  margin: 0 auto 24px;
}

.success-title {
  font-size: 1.5rem;
  font-weight: 700;
  color: white;
  margin-bottom: 16px;
}

.success-description {
  color: #d1d5db;
  line-height: 1.6;
  margin-bottom: 24px;
}

.success-close {
  padding: 12px 24px;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  border: none;
  border-radius: 8px;
  color: white;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}

.success-close:hover {
  transform: scale(1.05);
  box-shadow: 0 10px 25px rgba(124, 58, 237, 0.3);
}

/* Responsive Design */
@media (max-width: 1024px) {
  .contact-grid {
    gap: 48px;
  }
  
  .contact-form-container,
  .contact-info-container {
    padding: 32px;
  }
}

@media (max-width: 768px) {
  .hero-title {
    font-size: 3rem;
  }
  
  .contact-grid {
    grid-template-columns: 1fr;
    gap: 32px;
  }
  
  .contact-form-container,
  .contact-info-container {
    padding: 24px;
  }
  
  .form-title,
  .info-title {
    font-size: 1.5rem;
  }
}

@media (max-width: 640px) {
  .hero-title {
    font-size: 2.5rem;
  }
  
  .hero-subtitle {
    font-size: 1.25rem;
  }
  
  .contact-form-container,
  .contact-info-container {
    padding: 20px;
  }
  
  .contact-method {
    flex-direction: column;
    text-align: center;
    gap: 12px;
  }
  
  .social-icons {
    justify-content: center;
  }
}

@media (max-width: 480px) {
  .hero-section {
    padding: 80px 0;
  }
  
  .contact-section {
    padding: 60px 0;
  }
  
  .contact-form-container,
  .contact-info-container {
    padding: 16px;
  }
  
  .success-content {
    padding: 32px 24px;
  }
}
</style>