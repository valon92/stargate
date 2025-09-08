<template>
  <div>
    <!-- Hero Section -->
    <section class="hero-section">
      <div class="hero-bg"></div>
      <div class="hero-content">
        <div class="hero-text">
          <h1 class="hero-title">
            <span class="gradient-text">Frequently Asked Questions</span>
          </h1>
          <p class="hero-subtitle">
            Get Answers to Common Questions
          </p>
          <p class="hero-description">
            Find answers to the most frequently asked questions about our services, 
            technologies, and the Stargate project.
          </p>
        </div>
      </div>
    </section>

    <!-- Search Section -->
    <section class="search-section">
      <div class="container">
        <div class="search-content">
          <h2 class="search-title">Can't find what you're looking for?</h2>
          <div class="search-form">
            <input 
              type="text" 
              placeholder="Search FAQ..." 
              class="search-input"
              v-model="searchQuery"
            >
            <button class="search-button">
              <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Categories -->
    <section class="categories-section">
      <div class="container">
        <div class="categories-nav">
          <button 
            v-for="category in categories" 
            :key="category.id"
            :class="['category-btn', { active: activeCategory === category.id }]"
            @click="setActiveCategory(category.id)"
          >
            {{ category.name }}
          </button>
        </div>
      </div>
    </section>

    <!-- FAQ Content -->
    <section class="faq-section">
      <div class="container">
        <div class="faq-content">
          <!-- General Questions -->
          <div v-if="activeCategory === 'general'" class="faq-category">
            <h2 class="category-title">General Questions</h2>
            <div class="faq-list">
              <div class="faq-item" v-for="faq in generalFaqs" :key="faq.id">
                <button 
                  class="faq-question"
                  @click="toggleFaq(faq.id)"
                  :class="{ active: openFaqs.includes(faq.id) }"
                >
                  <span class="question-text">{{ faq.question }}</span>
                  <svg 
                    class="icon" 
                    :class="{ rotated: openFaqs.includes(faq.id) }"
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>
                <div 
                  class="faq-answer"
                  :class="{ open: openFaqs.includes(faq.id) }"
                >
                  <div class="answer-content">
                    <p>{{ faq.answer }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Technology Questions -->
          <div v-if="activeCategory === 'technology'" class="faq-category">
            <h2 class="category-title">Technology Questions</h2>
            <div class="faq-list">
              <div class="faq-item" v-for="faq in technologyFaqs" :key="faq.id">
                <button 
                  class="faq-question"
                  @click="toggleFaq(faq.id)"
                  :class="{ active: openFaqs.includes(faq.id) }"
                >
                  <span class="question-text">{{ faq.question }}</span>
                  <svg 
                    class="icon" 
                    :class="{ rotated: openFaqs.includes(faq.id) }"
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>
                <div 
                  class="faq-answer"
                  :class="{ open: openFaqs.includes(faq.id) }"
                >
                  <div class="answer-content">
                    <p>{{ faq.answer }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Services Questions -->
          <div v-if="activeCategory === 'services'" class="faq-category">
            <h2 class="category-title">Services Questions</h2>
            <div class="faq-list">
              <div class="faq-item" v-for="faq in servicesFaqs" :key="faq.id">
                <button 
                  class="faq-question"
                  @click="toggleFaq(faq.id)"
                  :class="{ active: openFaqs.includes(faq.id) }"
                >
                  <span class="question-text">{{ faq.question }}</span>
                  <svg 
                    class="icon" 
                    :class="{ rotated: openFaqs.includes(faq.id) }"
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>
                <div 
                  class="faq-answer"
                  :class="{ open: openFaqs.includes(faq.id) }"
                >
                  <div class="answer-content">
                    <p>{{ faq.answer }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Partnership Questions -->
          <div v-if="activeCategory === 'partnership'" class="faq-category">
            <h2 class="category-title">Partnership Questions</h2>
            <div class="faq-list">
              <div class="faq-item" v-for="faq in partnershipFaqs" :key="faq.id">
                <button 
                  class="faq-question"
                  @click="toggleFaq(faq.id)"
                  :class="{ active: openFaqs.includes(faq.id) }"
                >
                  <span class="question-text">{{ faq.question }}</span>
                  <svg 
                    class="icon" 
                    :class="{ rotated: openFaqs.includes(faq.id) }"
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>
                <div 
                  class="faq-answer"
                  :class="{ open: openFaqs.includes(faq.id) }"
                >
                  <div class="answer-content">
                    <p>{{ faq.answer }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact CTA -->
    <section class="contact-cta">
      <div class="container">
        <div class="cta-content">
          <h2 class="cta-title">
            Still have questions?
          </h2>
          <p class="cta-description">
            Our team is here to help. Get in touch with us for personalized assistance.
          </p>
          <div class="cta-buttons">
            <RouterLink to="/contact" class="btn-primary">
              Contact Us
            </RouterLink>
            <RouterLink to="/about" class="btn-outline">
              Learn More
            </RouterLink>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import { ref, reactive } from 'vue'

// Reactive data
const searchQuery = ref('')
const activeCategory = ref('general')
const openFaqs = ref<number[]>([])

// Categories
const categories = [
  { id: 'general', name: 'General' },
  { id: 'technology', name: 'Technology' },
  { id: 'services', name: 'Services' },
  { id: 'partnership', name: 'Partnership' }
]

// FAQ Data
const generalFaqs = [
  {
    id: 1,
    question: "What is the Stargate project?",
    answer: "The Stargate project is a comprehensive initiative focused on advancing artificial intelligence, cloud computing, big data analytics, and advanced computing technologies. We aim to create innovative solutions that drive digital transformation across various industries."
  },
  {
    id: 2,
    question: "How can I get involved with Stargate?",
    answer: "There are several ways to get involved with Stargate. You can explore our services, become a partner, contribute to our open-source projects, or join our community discussions. Visit our Contact page to learn more about specific opportunities."
  },
  {
    id: 3,
    question: "Is Stargate open source?",
    answer: "While some components of our technology stack are open source, Stargate itself is a proprietary platform. However, we actively contribute to open-source projects and collaborate with the developer community on various initiatives."
  },
  {
    id: 4,
    question: "What makes Stargate different from other AI platforms?",
    answer: "Stargate distinguishes itself through its comprehensive approach to technology integration, ethical AI development, and focus on real-world applications. We combine cutting-edge research with practical implementation to deliver solutions that are both innovative and reliable."
  }
]

const technologyFaqs = [
  {
    id: 5,
    question: "What AI technologies does Stargate use?",
    answer: "Stargate leverages a wide range of AI technologies including machine learning, natural language processing, computer vision, and deep learning. We work with various frameworks and models to provide comprehensive AI solutions tailored to specific use cases."
  },
  {
    id: 6,
    question: "How does Stargate ensure AI safety and ethics?",
    answer: "AI safety and ethics are core principles of our development process. We implement rigorous testing protocols, bias detection mechanisms, and ethical guidelines throughout our AI systems. Our team includes dedicated AI safety researchers who continuously monitor and improve our practices."
  },
  {
    id: 7,
    question: "What cloud platforms does Stargate support?",
    answer: "Stargate is designed to be cloud-agnostic and supports major cloud platforms including AWS, Google Cloud, Microsoft Azure, and others. We provide flexible deployment options to meet different infrastructure requirements and preferences."
  },
  {
    id: 8,
    question: "How does Stargate handle data privacy and security?",
    answer: "Data privacy and security are paramount at Stargate. We implement industry-standard encryption, access controls, and compliance frameworks. Our systems are designed with privacy-by-design principles and we regularly undergo security audits and certifications."
  }
]

const servicesFaqs = [
  {
    id: 9,
    question: "What services does Stargate offer?",
    answer: "Stargate offers comprehensive technology services including AI development, cloud computing solutions, big data analytics, and advanced computing services. We provide end-to-end solutions from strategy and planning to implementation and ongoing support."
  },
  {
    id: 10,
    question: "How do I get started with Stargate services?",
    answer: "Getting started is easy. Simply contact us through our Contact page or reach out to our team directly. We'll schedule a consultation to understand your needs and provide a customized solution proposal."
  },
  {
    id: 11,
    question: "What industries does Stargate serve?",
    answer: "Stargate serves a wide range of industries including healthcare, finance, manufacturing, e-commerce, education, and government. Our solutions are designed to be adaptable across different sectors and use cases."
  },
  {
    id: 12,
    question: "Does Stargate provide training and support?",
    answer: "Yes, we provide comprehensive training and ongoing support for all our solutions. Our team offers technical training, documentation, and 24/7 support to ensure successful implementation and operation of our technologies."
  }
]

const partnershipFaqs = [
  {
    id: 13,
    question: "How can my company become a Stargate partner?",
    answer: "We welcome partnerships with companies that share our vision for technological innovation. To become a partner, please contact our partnership team through our Contact page. We'll evaluate potential partnerships based on alignment with our goals and complementary capabilities."
  },
  {
    id: 14,
    question: "What are the benefits of partnering with Stargate?",
    answer: "Partnership with Stargate provides access to cutting-edge technology, global market reach, collaborative innovation opportunities, and shared resources. Partners benefit from our expertise while contributing their own strengths to create mutually beneficial outcomes."
  },
  {
    id: 15,
    question: "Does Stargate work with startups?",
    answer: "Yes, we actively work with startups and emerging companies. We believe in fostering innovation at all levels and provide support, resources, and collaboration opportunities for promising startups in the technology space."
  },
  {
    id: 16,
    question: "What types of partnerships does Stargate offer?",
    answer: "Stargate offers various types of partnerships including technology partnerships, strategic alliances, reseller partnerships, and joint ventures. We tailor partnership agreements to meet the specific needs and goals of each partner."
  }
]

// Methods
const setActiveCategory = (categoryId: string) => {
  activeCategory.value = categoryId
  openFaqs.value = [] // Close all FAQs when switching categories
}

const toggleFaq = (faqId: number) => {
  const index = openFaqs.value.indexOf(faqId)
  if (index > -1) {
    openFaqs.value.splice(index, 1)
  } else {
    openFaqs.value.push(faqId)
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

/* Search Section */
.search-section {
  padding: 60px 0;
  background: rgba(17, 24, 39, 0.5);
}

.search-content {
  text-align: center;
  max-width: 600px;
  margin: 0 auto;
}

.search-title {
  font-size: 1.5rem;
  font-weight: 600;
  margin-bottom: 24px;
  color: white;
}

.search-form {
  display: flex;
  gap: 16px;
  max-width: 400px;
  margin: 0 auto;
}

.search-input {
  flex: 1;
  padding: 12px 16px;
  background: rgba(31, 41, 55, 0.5);
  border: 1px solid #374151;
  border-radius: 8px;
  color: white;
  font-size: 1rem;
}

.search-input::placeholder {
  color: #9ca3af;
}

.search-input:focus {
  outline: none;
  border-color: #7c3aed;
  box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1);
}

.search-button {
  padding: 12px 16px;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  border: none;
  border-radius: 8px;
  color: white;
  cursor: pointer;
  transition: all 0.3s ease;
}

.search-button:hover {
  transform: scale(1.05);
  box-shadow: 0 10px 25px rgba(124, 58, 237, 0.3);
}

.icon {
  width: 20px;
  height: 20px;
}

/* Categories Section */
.categories-section {
  padding: 40px 0;
  background: rgba(31, 41, 55, 0.3);
}

.categories-nav {
  display: flex;
  justify-content: center;
  gap: 16px;
  flex-wrap: wrap;
}

.category-btn {
  padding: 12px 24px;
  background: transparent;
  border: 1px solid #374151;
  border-radius: 8px;
  color: #9ca3af;
  font-weight: 500;
  cursor: pointer;
  transition: all 0.3s ease;
}

.category-btn:hover {
  border-color: #7c3aed;
  color: #7c3aed;
}

.category-btn.active {
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  border-color: transparent;
  color: white;
}

/* FAQ Section */
.faq-section {
  padding: 80px 0;
}

.faq-content {
  max-width: 800px;
  margin: 0 auto;
}

.faq-category {
  margin-bottom: 48px;
}

.category-title {
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 32px;
  text-align: center;
}

.faq-list {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.faq-item {
  background: rgba(31, 41, 55, 0.5);
  backdrop-filter: blur(10px);
  border: 1px solid #374151;
  border-radius: 12px;
  overflow: hidden;
  transition: all 0.3s ease;
}

.faq-item:hover {
  border-color: rgba(124, 58, 237, 0.3);
}

.faq-question {
  width: 100%;
  padding: 24px;
  background: transparent;
  border: none;
  color: white;
  font-size: 1.125rem;
  font-weight: 600;
  text-align: left;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: all 0.3s ease;
}

.faq-question:hover {
  background: rgba(124, 58, 237, 0.05);
}

.faq-question.active {
  background: rgba(124, 58, 237, 0.1);
}

.question-text {
  flex: 1;
  margin-right: 16px;
}

.faq-question .icon {
  width: 24px;
  height: 24px;
  transition: transform 0.3s ease;
  flex-shrink: 0;
}

.faq-question .icon.rotated {
  transform: rotate(180deg);
}

.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.3s ease;
}

.faq-answer.open {
  max-height: 200px;
}

.answer-content {
  padding: 0 24px 24px;
}

.answer-content p {
  color: #d1d5db;
  line-height: 1.6;
  margin: 0;
}

/* Contact CTA */
.contact-cta {
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
@media (max-width: 768px) {
  .hero-title {
    font-size: 3rem;
  }
  
  .category-title {
    font-size: 1.5rem;
  }
  
  .cta-title {
    font-size: 2rem;
  }
  
  .search-form {
    flex-direction: column;
  }
  
  .categories-nav {
    gap: 8px;
  }
  
  .category-btn {
    padding: 10px 16px;
    font-size: 0.875rem;
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
  
  .faq-question {
    padding: 20px;
    font-size: 1rem;
  }
  
  .answer-content {
    padding: 0 20px 20px;
  }
  
  .cta-buttons {
    flex-direction: column;
  }
}

@media (max-width: 480px) {
  .hero-section {
    padding: 80px 0;
  }
  
  .search-section,
  .categories-section,
  .faq-section,
  .contact-cta {
    padding: 60px 0;
  }
  
  .faq-question {
    padding: 16px;
  }
  
  .answer-content {
    padding: 0 16px 16px;
  }
}
</style>