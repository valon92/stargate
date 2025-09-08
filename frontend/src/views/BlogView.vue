<template>
  <div>
    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-stargate-dark via-gray-900 to-stargate-dark">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
          <h1 class="text-5xl md:text-6xl font-bold mb-6">
            <span class="gradient-text">Blog & Insights</span>
          </h1>
          <p class="text-xl text-gray-300 mb-8 leading-relaxed">
            Stay Updated with Technology Trends
          </p>
          <p class="text-lg text-gray-400 max-w-3xl mx-auto">
            Explore our latest articles, insights, and analysis on AI, Cloud Computing, 
            Big Data Analytics, and Advanced Computing technologies.
          </p>
        </div>
      </div>
    </section>

    <!-- Blog Posts -->
    <section class="py-20">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Blog Post 1 -->
          <article class="card group">
            <div class="aspect-video bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg mb-4"></div>
            <div class="flex items-center space-x-2 text-sm text-gray-400 mb-3">
              <span class="px-2 py-1 bg-blue-500/20 text-blue-400 rounded-full">AI Technology</span>
              <span>•</span>
              <span>Dec 15, 2024</span>
            </div>
            <h3 class="text-xl font-semibold mb-3 group-hover:text-stargate-purple transition-colors">
              Understanding Artificial Intelligence: A Beginner's Guide
            </h3>
            <p class="text-gray-400 mb-4">
              Explore the fundamentals of AI technology and its impact on modern businesses. 
              Learn about machine learning, neural networks, and practical applications.
            </p>
            <div class="flex items-center justify-between">
              <span class="text-sm text-gray-500">By Stargate Team</span>
              <RouterLink to="/blog/understanding-artificial-intelligence" class="text-stargate-purple hover:text-stargate-blue transition-colors font-medium">
                Read More →
              </RouterLink>
            </div>
          </article>

          <!-- Blog Post 2 -->
          <article class="card group">
            <div class="aspect-video bg-gradient-to-r from-green-600 to-blue-600 rounded-lg mb-4"></div>
            <div class="flex items-center space-x-2 text-sm text-gray-400 mb-3">
              <span class="px-2 py-1 bg-green-500/20 text-green-400 rounded-full">Cloud Computing</span>
              <span>•</span>
              <span>Dec 10, 2024</span>
            </div>
            <h3 class="text-xl font-semibold mb-3 group-hover:text-stargate-purple transition-colors">
              Cloud Computing: The Foundation of Modern Digital Infrastructure
            </h3>
            <p class="text-gray-400 mb-4">
              Discover how cloud computing is revolutionizing the way businesses operate and scale. 
              Learn about IaaS, PaaS, SaaS, and best practices for cloud migration.
            </p>
            <div class="flex items-center justify-between">
              <span class="text-sm text-gray-500">By Stargate Team</span>
              <RouterLink to="/blog/cloud-computing-foundation" class="text-stargate-purple hover:text-stargate-blue transition-colors font-medium">
                Read More →
              </RouterLink>
            </div>
          </article>

          <!-- Blog Post 3 -->
          <article class="card group">
            <div class="aspect-video bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg mb-4"></div>
            <div class="flex items-center space-x-2 text-sm text-gray-400 mb-3">
              <span class="px-2 py-1 bg-purple-500/20 text-purple-400 rounded-full">Big Data</span>
              <span>•</span>
              <span>Dec 5, 2024</span>
            </div>
            <h3 class="text-xl font-semibold mb-3 group-hover:text-stargate-purple transition-colors">
              Big Data Analytics: Turning Information into Insights
            </h3>
            <p class="text-gray-400 mb-4">
              Learn how big data analytics is helping organizations make data-driven decisions. 
              Explore tools, techniques, and real-world applications across industries.
            </p>
            <div class="flex items-center justify-between">
              <span class="text-sm text-gray-500">By Stargate Team</span>
              <RouterLink to="/blog/big-data-analytics-insights" class="text-stargate-purple hover:text-stargate-blue transition-colors font-medium">
                Read More →
              </RouterLink>
            </div>
          </article>

          <!-- Blog Post 4 -->
          <article class="card group">
            <div class="aspect-video bg-gradient-to-r from-orange-600 to-red-600 rounded-lg mb-4"></div>
            <div class="flex items-center space-x-2 text-sm text-gray-400 mb-3">
              <span class="px-2 py-1 bg-orange-500/20 text-orange-400 rounded-full">Advanced Computing</span>
              <span>•</span>
              <span>Nov 28, 2024</span>
            </div>
            <h3 class="text-xl font-semibold mb-3 group-hover:text-stargate-purple transition-colors">
              The Future of Computing: Quantum and Edge Technologies
            </h3>
            <p class="text-gray-400 mb-4">
              Explore the cutting-edge world of quantum computing and edge computing. 
              Understand how these technologies are shaping the future of computation.
            </p>
            <div class="flex items-center justify-between">
              <span class="text-sm text-gray-500">By Stargate Team</span>
              <RouterLink to="/blog/future-computing-quantum-edge" class="text-stargate-purple hover:text-stargate-blue transition-colors font-medium">
                Read More →
              </RouterLink>
            </div>
          </article>

          <!-- Blog Post 5 -->
          <article class="card group">
            <div class="aspect-video bg-gradient-to-r from-indigo-600 to-purple-600 rounded-lg mb-4"></div>
            <div class="flex items-center space-x-2 text-sm text-gray-400 mb-3">
              <span class="px-2 py-1 bg-indigo-500/20 text-indigo-400 rounded-full">AI Ethics</span>
              <span>•</span>
              <span>Nov 20, 2024</span>
            </div>
            <h3 class="text-xl font-semibold mb-3 group-hover:text-stargate-purple transition-colors">
              Responsible AI: Ethics and Governance in the Age of Automation
            </h3>
            <p class="text-gray-400 mb-4">
              Delve into the ethical considerations of AI development and deployment. 
              Learn about bias, fairness, transparency, and responsible AI practices.
            </p>
            <div class="flex items-center justify-between">
              <span class="text-sm text-gray-500">By Stargate Team</span>
              <RouterLink to="/blog/responsible-ai-ethics-governance" class="text-stargate-purple hover:text-stargate-blue transition-colors font-medium">
                Read More →
              </RouterLink>
            </div>
          </article>

          <!-- Blog Post 6 -->
          <article class="card group">
            <div class="aspect-video bg-gradient-to-r from-teal-600 to-blue-600 rounded-lg mb-4"></div>
            <div class="flex items-center space-x-2 text-sm text-gray-400 mb-3">
              <span class="px-2 py-1 bg-teal-500/20 text-teal-400 rounded-full">Cloud Security</span>
              <span>•</span>
              <span>Nov 15, 2024</span>
            </div>
            <h3 class="text-xl font-semibold mb-3 group-hover:text-stargate-purple transition-colors">
              Securing the Cloud: Best Practices for Cloud Security
            </h3>
            <p class="text-gray-400 mb-4">
              Learn essential cloud security practices and strategies. 
              Understand how to protect your data and infrastructure in the cloud.
            </p>
            <div class="flex items-center justify-between">
              <span class="text-sm text-gray-500">By Stargate Team</span>
              <RouterLink to="/blog/securing-cloud-best-practices" class="text-stargate-purple hover:text-stargate-blue transition-colors font-medium">
                Read More →
              </RouterLink>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 bg-gray-900/50">
      <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto text-center">
          <h2 class="text-3xl font-bold mb-4">
            <span class="gradient-text">Stay Updated</span>
          </h2>
          <p class="text-lg text-gray-400 mb-8">
            Subscribe to our newsletter and never miss the latest insights on technology trends and innovations.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
            <input 
              type="email" 
              placeholder="Enter your email"
              class="flex-1 px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-stargate-purple"
            >
            <button class="btn-primary whitespace-nowrap">
              Subscribe
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20">
      <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6">
          Have Questions?
        </h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
          Can't find what you're looking for? Check our FAQ section or get in touch with our team.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <RouterLink to="/faq" class="btn-primary">
            View FAQ
          </RouterLink>
          <RouterLink to="/contact" class="btn-outline">
            Contact Us
          </RouterLink>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import { RouterLink } from 'vue-router'
</script>
