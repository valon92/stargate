<template>
  <div>
    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
          <h1 class="text-5xl md:text-6xl font-bold mb-6">
            <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">FAQ</span>
          </h1>
          <p class="text-xl text-gray-300 mb-8 leading-relaxed">
            Frequently Asked Questions
          </p>
          <p class="text-lg text-gray-400 max-w-3xl mx-auto">
            Find answers to common questions about Stargate, our technologies, 
            and how we can help you with your digital transformation journey.
          </p>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          <!-- FAQ Categories -->
          <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button 
              v-for="category in categories" 
              :key="category"
              @click="selectedCategory = category"
              :class="[
                'px-6 py-2 rounded-full text-sm font-medium transition-colors',
                selectedCategory === category 
                  ? 'bg-gradient-to-r from-blue-600 to-purple-600 text-white' 
                  : 'bg-gray-800 text-gray-300 hover:bg-gray-700'
              ]"
            >
              {{ category }}
            </button>
          </div>

          <!-- FAQ Items -->
          <div class="space-y-4">
            <div 
              v-for="faq in filteredFaqs" 
              :key="faq.id"
              class="bg-gray-800/50 backdrop-blur-sm border border-gray-700 rounded-xl overflow-hidden"
            >
              <button
                @click="toggleFaq(faq.id)"
                class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-700/50 transition-colors"
              >
                <h3 class="text-lg font-semibold text-white">{{ faq.question }}</h3>
                <svg 
                  class="w-5 h-5 text-gray-400 transition-transform"
                  :class="{ 'rotate-180': openFaqs.includes(faq.id) }"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <div 
                v-if="openFaqs.includes(faq.id)"
                class="px-6 pb-4"
              >
                <p class="text-gray-300 leading-relaxed">{{ faq.answer }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-gray-900/50">
      <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto text-center">
          <h2 class="text-3xl font-bold mb-4">
            <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Still Have Questions?</span>
          </h2>
          <p class="text-lg text-gray-400 mb-8">
            Can't find the answer you're looking for? Our team is here to help.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <RouterLink to="/contact" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 hover:shadow-lg hover:scale-105">
              Contact Us
            </RouterLink>
            <RouterLink to="/blog" class="border-2 border-stargate-purple text-stargate-purple px-6 py-3 rounded-lg font-semibold transition-all duration-300 hover:bg-stargate-purple hover:text-white">
              Read Our Blog
            </RouterLink>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import { ref, computed } from 'vue'
import { RouterLink } from 'vue-router'

const selectedCategory = ref('All')
const openFaqs = ref<number[]>([])

const categories = ['All', 'General', 'Technology', 'Partnerships', 'Education', 'Community']

const faqs = [
  {
    id: 1,
    question: 'What is the Stargate project?',
    answer: 'Stargate is an innovative digital platform focused on advancing AI, Cloud Computing, and Big Data technologies. Our mission is to provide transparent information about cutting-edge technologies and build a community around digital innovation.',
    category: 'General'
  },
  {
    id: 2,
    question: 'What technologies does Stargate focus on?',
    answer: 'Stargate focuses on four main technology areas: Artificial Intelligence (AI), Cloud Computing, Big Data Analytics, and Advanced Computing. We provide educational content and insights about these technologies and their applications.',
    category: 'Technology'
  },
  {
    id: 3,
    question: 'Who are the main partners in the Stargate project?',
    answer: 'Stargate collaborates with leading technology companies including OpenAI, SoftBank, ARM, and Crystal Intelligence. These partnerships help us stay at the forefront of technological innovation and provide accurate, up-to-date information.',
    category: 'Partnerships'
  },
  {
    id: 4,
    question: 'Is Stargate an official project of these companies?',
    answer: 'No, Stargate is an independent educational platform. While we reference publicly available information about these companies and their technologies, we are not an official representative or subsidiary of any of these organizations.',
    category: 'General'
  },
  {
    id: 5,
    question: 'How can I learn more about AI technology?',
    answer: 'Our blog section contains comprehensive articles about AI fundamentals, applications, and future trends. We cover topics from basic concepts to advanced implementations, all written in an accessible way for both beginners and professionals.',
    category: 'Education'
  },
  {
    id: 6,
    question: 'What is cloud computing and why is it important?',
    answer: 'Cloud computing is the delivery of computing services over the internet, including storage, processing power, and software. It\'s important because it provides scalability, cost-effectiveness, and flexibility for businesses of all sizes.',
    category: 'Technology'
  },
  {
    id: 7,
    question: 'How does big data analytics work?',
    answer: 'Big data analytics involves processing large volumes of data to uncover patterns, trends, and insights. It uses various tools and techniques including machine learning, statistical analysis, and data visualization to help organizations make data-driven decisions.',
    category: 'Technology'
  },
  {
    id: 8,
    question: 'Can I contribute content to Stargate?',
    answer: 'We welcome community contributions! You can contact us through our contact form to discuss potential collaborations, article submissions, or other ways to contribute to our educational mission.',
    category: 'Community'
  },
  {
    id: 9,
    question: 'Is the information on Stargate reliable?',
    answer: 'Yes, all our content is based on publicly available information and verified sources. We focus on educational content and avoid speculation or unverified claims. Our goal is to provide accurate, helpful information about technology trends.',
    category: 'General'
  },
  {
    id: 10,
    question: 'How often is the content updated?',
    answer: 'We regularly update our blog with new articles and insights about technology trends. Our FAQ section is updated as we receive new questions from our community. Follow us on social media for the latest updates.',
    category: 'General'
  }
]

const filteredFaqs = computed(() => {
  if (selectedCategory.value === 'All') {
    return faqs
  }
  return faqs.filter(faq => faq.category === selectedCategory.value)
})

const toggleFaq = (id: number) => {
  const index = openFaqs.value.indexOf(id)
  if (index > -1) {
    openFaqs.value.splice(index, 1)
  } else {
    openFaqs.value.push(id)
  }
}
</script>
