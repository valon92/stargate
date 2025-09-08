<template>
  <div>
    <!-- Blog Post Content -->
    <article class="py-20">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          <!-- Back Button -->
          <RouterLink to="/blog" class="inline-flex items-center text-stargate-purple hover:text-stargate-blue transition-colors mb-8">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Back to Blog
          </RouterLink>

          <!-- Article Header -->
          <header class="mb-12">
            <div class="flex items-center space-x-2 text-sm text-gray-400 mb-4">
              <span class="px-2 py-1 bg-blue-500/20 text-blue-400 rounded-full">AI Technology</span>
              <span>•</span>
              <span>Dec 15, 2024</span>
              <span>•</span>
              <span>5 min read</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
              Understanding Artificial Intelligence: A Beginner's Guide
            </h1>
            <p class="text-xl text-gray-300 leading-relaxed">
              Explore the fundamentals of AI technology and its impact on modern businesses.
            </p>
            <div class="flex items-center mt-6">
              <div class="w-12 h-12 bg-gradient-to-r from-stargate-blue to-stargate-purple rounded-full flex items-center justify-center mr-4">
                <span class="text-white font-bold">S</span>
              </div>
              <div>
                <p class="font-semibold text-white">Stargate Team</p>
                <p class="text-sm text-gray-400">Technology Experts</p>
              </div>
            </div>
          </header>

          <!-- Featured Image -->
          <div class="aspect-video bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl mb-12"></div>

          <!-- Article Content -->
          <div class="prose prose-lg prose-invert max-w-none">
            <p class="text-lg text-gray-300 leading-relaxed mb-6">
              Artificial Intelligence (AI) has become one of the most transformative technologies of our time. 
              From machine learning algorithms to neural networks, AI is reshaping how we approach problem-solving 
              and decision-making in various industries.
            </p>

            <h2 class="text-2xl font-bold text-white mt-12 mb-6">What is Artificial Intelligence?</h2>
            <p class="text-gray-300 leading-relaxed mb-6">
              AI refers to the simulation of human intelligence in machines that are programmed to think and learn like humans. 
              These systems can perform tasks that typically require human intelligence, such as visual perception, 
              speech recognition, decision-making, and language translation.
            </p>

            <h2 class="text-2xl font-bold text-white mt-12 mb-6">Key Components of AI</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
              <div class="bg-gray-800/50 rounded-lg p-6">
                <h3 class="text-xl font-semibold text-white mb-3">Machine Learning</h3>
                <p class="text-gray-400">Algorithms that improve through experience and data analysis.</p>
              </div>
              <div class="bg-gray-800/50 rounded-lg p-6">
                <h3 class="text-xl font-semibold text-white mb-3">Deep Learning</h3>
                <p class="text-gray-400">Neural networks with multiple layers for complex pattern recognition.</p>
              </div>
              <div class="bg-gray-800/50 rounded-lg p-6">
                <h3 class="text-xl font-semibold text-white mb-3">Natural Language Processing</h3>
                <p class="text-gray-400">Understanding and generating human language.</p>
              </div>
              <div class="bg-gray-800/50 rounded-lg p-6">
                <h3 class="text-xl font-semibold text-white mb-3">Computer Vision</h3>
                <p class="text-gray-400">Interpreting and understanding visual information.</p>
              </div>
            </div>

            <h2 class="text-2xl font-bold text-white mt-12 mb-6">Applications in Business</h2>
            <p class="text-gray-300 leading-relaxed mb-6">
              AI is being used across various sectors to improve efficiency, accuracy, and decision-making:
            </p>
            <ul class="text-gray-300 space-y-2 mb-8">
              <li class="flex items-start">
                <span class="text-stargate-purple mr-2">•</span>
                <span><strong>Healthcare:</strong> Diagnostic imaging and drug discovery</span>
              </li>
              <li class="flex items-start">
                <span class="text-stargate-purple mr-2">•</span>
                <span><strong>Finance:</strong> Fraud detection and algorithmic trading</span>
              </li>
              <li class="flex items-start">
                <span class="text-stargate-purple mr-2">•</span>
                <span><strong>Transportation:</strong> Autonomous vehicles and route optimization</span>
              </li>
              <li class="flex items-start">
                <span class="text-stargate-purple mr-2">•</span>
                <span><strong>Customer Service:</strong> Chatbots and virtual assistants</span>
              </li>
            </ul>

            <h2 class="text-2xl font-bold text-white mt-12 mb-6">The Future of AI</h2>
            <p class="text-gray-300 leading-relaxed mb-6">
              As AI continues to evolve, we can expect to see even more sophisticated applications that will 
              further integrate into our daily lives and business operations. The key is to understand these 
              technologies and their potential impact on your industry.
            </p>

            <div class="bg-gradient-to-r from-stargate-blue/20 to-stargate-purple/20 rounded-lg p-8 mt-12">
              <h3 class="text-xl font-bold text-white mb-4">Key Takeaways</h3>
              <ul class="text-gray-300 space-y-2">
                <li>• AI is transforming industries through automation and intelligent decision-making</li>
                <li>• Understanding AI fundamentals is crucial for business leaders</li>
                <li>• The future of AI lies in responsible development and ethical implementation</li>
                <li>• Early adoption can provide competitive advantages</li>
              </ul>
            </div>
          </div>

          <!-- Article Footer -->
          <footer class="mt-16 pt-8 border-t border-gray-700">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
              <div class="mb-4 md:mb-0">
                <h3 class="text-lg font-semibold text-white mb-2">Share this article</h3>
                <div class="flex space-x-4">
                  <button class="text-gray-400 hover:text-stargate-purple transition-colors">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                    </svg>
                  </button>
                  <button class="text-gray-400 hover:text-stargate-purple transition-colors">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                    </svg>
                  </button>
                  <button class="text-gray-400 hover:text-stargate-purple transition-colors">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="text-right">
                <p class="text-sm text-gray-400">Published on Dec 15, 2024</p>
                <p class="text-sm text-gray-400">5 min read</p>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </article>

    <!-- Related Articles -->
    <section class="py-20 bg-gray-900/50">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">
          <span class="gradient-text">Related Articles</span>
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <article class="card group">
            <div class="aspect-video bg-gradient-to-r from-green-600 to-blue-600 rounded-lg mb-4"></div>
            <h3 class="text-lg font-semibold mb-2 group-hover:text-stargate-purple transition-colors">
              Cloud Computing: The Foundation of Modern Digital Infrastructure
            </h3>
            <p class="text-sm text-gray-400">Dec 10, 2024</p>
          </article>
          <article class="card group">
            <div class="aspect-video bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg mb-4"></div>
            <h3 class="text-lg font-semibold mb-2 group-hover:text-stargate-purple transition-colors">
              Big Data Analytics: Turning Information into Insights
            </h3>
            <p class="text-sm text-gray-400">Dec 5, 2024</p>
          </article>
          <article class="card group">
            <div class="aspect-video bg-gradient-to-r from-orange-600 to-red-600 rounded-lg mb-4"></div>
            <h3 class="text-lg font-semibold mb-2 group-hover:text-stargate-purple transition-colors">
              The Future of Computing: Quantum and Edge Technologies
            </h3>
            <p class="text-sm text-gray-400">Nov 28, 2024</p>
          </article>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import { RouterLink } from 'vue-router'
</script>
