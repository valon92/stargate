<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What is the Stargate project?',
                'answer' => 'Stargate is an innovative digital platform focused on advancing AI, Cloud Computing, and Big Data technologies. Our mission is to provide transparent information about cutting-edge technologies and build a community around digital innovation.',
                'category' => 'general',
                'order' => 1,
                'published' => true
            ],
            [
                'question' => 'What technologies does Stargate focus on?',
                'answer' => 'Stargate focuses on four main technology areas: Artificial Intelligence (AI), Cloud Computing, Big Data Analytics, and Advanced Computing. We provide educational content and insights about these technologies and their applications.',
                'category' => 'technology',
                'order' => 1,
                'published' => true
            ],
            [
                'question' => 'Who are the main partners in the Stargate project?',
                'answer' => 'Stargate collaborates with leading technology companies including OpenAI, SoftBank, ARM, and Crystal Intelligence. These partnerships help us stay at the forefront of technological innovation and provide accurate, up-to-date information.',
                'category' => 'partnerships',
                'order' => 1,
                'published' => true
            ],
            [
                'question' => 'Is Stargate an official project of these companies?',
                'answer' => 'No, Stargate is an independent educational platform. While we reference publicly available information about these companies and their technologies, we are not an official representative or subsidiary of any of these organizations.',
                'category' => 'general',
                'order' => 2,
                'published' => true
            ],
            [
                'question' => 'How can I learn more about AI technology?',
                'answer' => 'Our blog section contains comprehensive articles about AI fundamentals, applications, and future trends. We cover topics from basic concepts to advanced implementations, all written in an accessible way for both beginners and professionals.',
                'category' => 'education',
                'order' => 1,
                'published' => true
            ],
            [
                'question' => 'What is cloud computing and why is it important?',
                'answer' => 'Cloud computing is the delivery of computing services over the internet, including storage, processing power, and software. It\'s important because it provides scalability, cost-effectiveness, and flexibility for businesses of all sizes.',
                'category' => 'technology',
                'order' => 2,
                'published' => true
            ],
            [
                'question' => 'How does big data analytics work?',
                'answer' => 'Big data analytics involves processing large volumes of data to uncover patterns, trends, and insights. It uses various tools and techniques including machine learning, statistical analysis, and data visualization to help organizations make data-driven decisions.',
                'category' => 'technology',
                'order' => 3,
                'published' => true
            ],
            [
                'question' => 'Can I contribute content to Stargate?',
                'answer' => 'We welcome community contributions! You can contact us through our contact form to discuss potential collaborations, article submissions, or other ways to contribute to our educational mission.',
                'category' => 'community',
                'order' => 1,
                'published' => true
            ],
            [
                'question' => 'Is the information on Stargate reliable?',
                'answer' => 'Yes, all our content is based on publicly available information and verified sources. We focus on educational content and avoid speculation or unverified claims. Our goal is to provide accurate, helpful information about technology trends.',
                'category' => 'general',
                'order' => 3,
                'published' => true
            ],
            [
                'question' => 'How often is the content updated?',
                'answer' => 'We regularly update our blog with new articles and insights about technology trends. Our FAQ section is updated as we receive new questions from our community. Follow us on social media for the latest updates.',
                'category' => 'general',
                'order' => 4,
                'published' => true
            ]
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
