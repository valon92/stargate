<template>
  <div>
    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-stargate-dark via-gray-900 to-stargate-dark">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
          <h1 class="text-5xl md:text-6xl font-bold mb-6">
            <span class="gradient-text">Our Services</span>
          </h1>
          <p class="text-xl text-gray-300 mb-8 leading-relaxed">
            Comprehensive Technology Solutions for the Digital Age
          </p>
          <p class="text-lg text-gray-400 max-w-3xl mx-auto">
            We provide cutting-edge solutions in AI, Cloud Computing, Big Data Analytics, 
            and Advanced Computing to help your business thrive in the digital landscape.
          </p>
        </div>
      </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- AI Services -->
          <div class="card group">
            <div class="text-center">
              <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>
              </div>
              <h3 class="text-xl font-semibold mb-3">Artificial Intelligence</h3>
              <p class="text-gray-400 mb-4">
                Machine learning solutions, neural networks, and intelligent automation systems.
              </p>
              <ul class="text-sm text-gray-500 space-y-1 text-left">
                <li>• Machine Learning Models</li>
                <li>• Natural Language Processing</li>
                <li>• Computer Vision</li>
                <li>• AI Strategy Consulting</li>
              </ul>
            </div>
          </div>

          <!-- Cloud Services -->
          <div class="card group">
            <div class="text-center">
              <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                </svg>
              </div>
              <h3 class="text-xl font-semibold mb-3">Cloud Computing</h3>
              <p class="text-gray-400 mb-4">
                Scalable infrastructure, serverless computing, and cloud-native solutions.
              </p>
              <ul class="text-sm text-gray-500 space-y-1 text-left">
                <li>• Cloud Migration</li>
                <li>• Infrastructure as Code</li>
                <li>• Serverless Architecture</li>
                <li>• Cloud Security</li>
              </ul>
            </div>
          </div>

          <!-- Big Data Services -->
          <div class="card group">
            <div class="text-center">
              <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
              </div>
              <h3 class="text-xl font-semibold mb-3">Big Data Analytics</h3>
              <p class="text-gray-400 mb-4">
                Data processing, analytics, and insights for informed decision making.
              </p>
              <ul class="text-sm text-gray-500 space-y-1 text-left">
                <li>• Data Pipeline Development</li>
                <li>• Real-time Analytics</li>
                <li>• Data Visualization</li>
                <li>• Predictive Modeling</li>
              </ul>
            </div>
          </div>

          <!-- Advanced Computing -->
          <div class="card group">
            <div class="text-center">
              <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                </svg>
              </div>
              <h3 class="text-xl font-semibold mb-3">Advanced Computing</h3>
              <p class="text-gray-400 mb-4">
                High-performance computing, quantum computing, and edge computing solutions.
              </p>
              <ul class="text-sm text-gray-500 space-y-1 text-left">
                <li>• HPC Solutions</li>
                <li>• Quantum Computing</li>
                <li>• Edge Computing</li>
                <li>• Distributed Systems</li>
              </ul>
            </div>
          </div>

          <!-- Security Services -->
          <div class="card group">
            <div class="text-center">
              <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-pink-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
              </div>
              <h3 class="text-xl font-semibold mb-3">Cybersecurity</h3>
              <p class="text-gray-400 mb-4">
                Advanced security solutions to protect your digital assets and infrastructure.
              </p>
              <ul class="text-sm text-gray-500 space-y-1 text-left">
                <li>• Security Assessment</li>
                <li>• Threat Detection</li>
                <li>• Compliance Management</li>
                <li>• Incident Response</li>
              </ul>
            </div>
          </div>

          <!-- Consulting Services -->
          <div class="card group">
            <div class="text-center">
              <div class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
              </div>
              <h3 class="text-xl font-semibold mb-3">Technology Consulting</h3>
              <p class="text-gray-400 mb-4">
                Strategic guidance and expertise to help you navigate the digital transformation.
              </p>
              <ul class="text-sm text-gray-500 space-y-1 text-left">
                <li>• Digital Strategy</li>
                <li>• Technology Roadmap</li>
                <li>• Architecture Design</li>
                <li>• Implementation Support</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-gray-900/50">
      <div class="container mx-auto px-4">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold mb-4">
            <span class="gradient-text">Our Process</span>
          </h2>
          <p class="text-xl text-gray-400 max-w-2xl mx-auto">
            A systematic approach to delivering exceptional results
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
          <div class="text-center">
            <div class="w-16 h-16 bg-gradient-to-r from-stargate-blue to-stargate-purple rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-bold text-white">1</span>
            </div>
            <h3 class="text-xl font-semibold mb-3">Discovery</h3>
            <p class="text-gray-400">Understanding your needs and challenges</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 bg-gradient-to-r from-stargate-blue to-stargate-purple rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-bold text-white">2</span>
            </div>
            <h3 class="text-xl font-semibold mb-3">Strategy</h3>
            <p class="text-gray-400">Developing a comprehensive solution plan</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 bg-gradient-to-r from-stargate-blue to-stargate-purple rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-bold text-white">3</span>
            </div>
            <h3 class="text-xl font-semibold mb-3">Implementation</h3>
            <p class="text-gray-400">Building and deploying your solution</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 bg-gradient-to-r from-stargate-blue to-stargate-purple rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-bold text-white">4</span>
            </div>
            <h3 class="text-xl font-semibold mb-3">Optimization</h3>
            <p class="text-gray-400">Continuous improvement and support</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20">
      <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6">
          Ready to Transform Your Business?
        </h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
          Let's discuss how our technology solutions can help you achieve your goals 
          and stay ahead of the competition.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <RouterLink to="/contact" class="btn-primary">
            Get Started
          </RouterLink>
          <RouterLink to="/about" class="btn-outline">
            Learn More
          </RouterLink>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import { RouterLink } from 'vue-router'
</script>
