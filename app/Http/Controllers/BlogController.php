<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected array $posts = [
        'laravel-12-whats-new' => [
            'title' => "Laravel 12: What's New and Why It Matters in 2025",
            'category' => 'Web Development',
            'subtitle' => 'Explore the latest features, improvements, and performance updates in Laravel 12, and how it can help you build modern, scalable, and secure web applications faster.',
            'author' => 'Abhishek Kapoor',
            'authorRole' => 'Full Stack Developer',
            'date' => 'Aug 25, 2025',
            'readTime' => '8 min read',
            'views' => '1.2K views',
            'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1200&q=85',
            'heroTitle' => 'Laravel 12',
            'heroSubtitle' => 'Faster. Smarter. Better.',
            'sections' => [
                [
                    'heading' => '1. Improved Performance',
                    'content' => 'Laravel 12 introduces several under-the-hood optimizations that make your applications faster and more efficient. From better request handling to optimized caching mechanisms, you will notice a significant improvement in overall performance.',
                ],
                [
                    'heading' => '2. Modern PHP Support',
                    'content' => 'With full support for the latest PHP 8.3+ features, Laravel 12 allows you to write cleaner, more expressive code. This includes improvements in type safety, readonly classes, and enhanced enums.',
                ],
                [
                    'heading' => '3. Enhanced Developer Experience',
                    'content' => 'Laravel 12 comes with new Artisan commands, better error reporting, and improved debugging tools. These enhancements make development smoother and more enjoyable.',
                ],
                [
                    'heading' => '4. Security Improvements',
                    'content' => 'Security remains a top priority. Laravel 12 includes stronger authentication features, improved protection against common vulnerabilities, and better session handling.',
                ],
                [
                    'heading' => '5. Why It Matters',
                    'content' => 'Whether you are building a startup MVP or a large-scale enterprise application, Laravel 12 gives you the tools and flexibility to build modern, scalable, and secure solutions. It is not just an update — it is a step towards a more powerful and developer-friendly ecosystem.',
                ],
            ],
            'quote' => '"Laravel 12 is not just about new features, it is about giving developers the right tools to build the next generation of web applications."',
            'quoteAuthor' => 'Abhishek Kapoor',
            'tags' => ['Laravel 12', 'PHP', 'Web Development', 'Backend Development', 'Framework', '2025'],
        ],
        'google-ads-vs-meta-ads' => [
            'title' => 'Google Ads vs Meta Ads: Which is Better for Your Business?',
            'category' => 'Digital Marketing',
            'subtitle' => 'Compare Google Ads and Meta Ads to find the best platform for your business goals, budget, and target audience.',
            'author' => 'Rahul Verma',
            'authorRole' => 'Digital Marketing Lead',
            'date' => 'Aug 20, 2025',
            'readTime' => '6 min read',
            'views' => '950 views',
            'image' => 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=1200&q=85',
            'heroTitle' => 'Google Ads',
            'heroSubtitle' => 'Meta Ads vs Search',
            'sections' => [
                [
                    'heading' => '1. Where people are already searching',
                    'content' => 'Google Ads is highly effective when your audience is actively searching for a solution. If a customer is already typing a keyword like “best website developer in India” or “SEO agency near me,” Google helps you reach them at the exact moment they need help.',
                ],
                [
                    'heading' => '2. Where people are browsing and discovering',
                    'content' => 'Meta Ads work better when your goal is awareness, interest, and brand recognition. It is also powerful for social discovery, remarketing, and visual campaigns where your message should feel more lifestyle-driven and less intent-based.',
                ],
                [
                    'heading' => '3. Cost and audience quality',
                    'content' => 'Google usually gives stronger intent-based traffic, while Meta can give broader reach and lower CPCs. The best option depends on your offer, funnel, and whether the campaign is built to capture demand or build demand.',
                ],
                [
                    'heading' => '4. Which should you choose?',
                    'content' => 'If your business needs instant leads and direct action, Google Ads is often stronger. If you want to build recognition, warm up leads, and re-engage visitors, Meta Ads are highly effective. In many real campaigns, both platforms work better together.',
                ],
                [
                    'heading' => '5. Final takeaway',
                    'content' => 'There is no universal winner. The best platform depends on your business model, customer journey, and whether you want short-term conversions or long-term brand growth. Smart businesses often use Google for demand capture and Meta for demand creation.',
                ],
            ],
            'quote' => '"The best advertising strategy is not about choosing one platform forever — it is about choosing the right platform for the right phase of the customer journey."',
            'quoteAuthor' => 'Rahul Verma',
            'tags' => ['Google Ads', 'Meta Ads', 'Marketing', 'Lead Generation', 'Paid Media'],
        ],
        'seo-strategies-2025' => [
            'title' => '10 Proven SEO Strategies to Rank Higher in 2025',
            'category' => 'SEO',
            'subtitle' => 'Learn the latest SEO strategies to improve your website ranking, get more organic traffic, and generate quality leads.',
            'author' => 'Rahul Verma',
            'authorRole' => 'SEO Specialist',
            'date' => 'Aug 18, 2025',
            'readTime' => '7 min read',
            'views' => '1.5K views',
            'image' => 'https://images.unsplash.com/photo-1571721795195-a2ca2d3370a9?auto=format&fit=crop&w=1200&q=85',
            'heroTitle' => 'SEO',
            'heroSubtitle' => 'Rank Higher in 2025',
            'sections' => [
                ['heading' => '1. Focus on search intent', 'content' => 'Good SEO starts with matching content to what users are actively searching for. Search intent has become more important than simple keyword matching.'],
                ['heading' => '2. Improve core web vitals', 'content' => 'Technical performance still matters a lot. Faster pages, better mobile UX, and stronger crawlability all improve rankings and results.'],
                ['heading' => '3. Create topical authority', 'content' => 'It is better to build clusters of high-quality content than to publish disconnected blog posts. This helps your website become more relevant and trustworthy.'],
            ],
            'quote' => '"SEO compounds over time. The work you do today can keep delivering lead generation for months or years."',
            'quoteAuthor' => 'Rahul Verma',
            'tags' => ['SEO', 'Search Engine Optimization', 'Traffic', 'Content Strategy'],
        ],
        'modern-business-website-features' => [
            'title' => 'Top 10 Features Every Modern Business Website Must Have',
            'category' => 'Web Development',
            'subtitle' => 'Make your website more effective with these essential features that improve user experience and conversions.',
            'author' => 'Abhishek Kapoor',
            'authorRole' => 'Full Stack Developer',
            'date' => 'Aug 12, 2025',
            'readTime' => '5 min read',
            'views' => '1.1K views',
            'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200&q=85',
            'heroTitle' => 'Modern Websites',
            'heroSubtitle' => 'Essential Features',
            'sections' => [
                ['heading' => '1. Clear value proposition', 'content' => 'People should understand what you do and why it matters within seconds. Clarity improves trust and conversion.'],
                ['heading' => '2. Mobile friendly experience', 'content' => 'Your website needs to work beautifully on phones, tablets, and desktops because most traffic starts on mobile.'],
                ['heading' => '3. Strong call-to-action', 'content' => 'Each page should guide visitors toward a next step, such as inquiry, contact, or booking a meeting.'],
            ],
            'quote' => '"The best business websites do not just look good — they guide decisions and move visitors toward action."',
            'quoteAuthor' => 'Abhishek Kapoor',
            'tags' => ['Web Design', 'Business Website', 'UX', 'Conversions'],
        ],
        'ai-transforming-it-industry' => [
            'title' => 'How AI is Transforming the IT Industry',
            'category' => 'Technology',
            'subtitle' => 'Explore how artificial intelligence is changing the way businesses build software, operate, and grow.',
            'author' => 'Abhishek Kapoor',
            'authorRole' => 'Technical Lead',
            'date' => 'Aug 05, 2025',
            'readTime' => '8 min read',
            'views' => '2.1K views',
            'image' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1200&q=85',
            'heroTitle' => 'AI & IT',
            'heroSubtitle' => 'The Next Shift',
            'sections' => [
                ['heading' => '1. Faster software delivery', 'content' => 'AI is compressing development cycles by helping teams with code generation, testing, and automation.'],
                ['heading' => '2. Better customer experiences', 'content' => 'Businesses can create smarter support, recommendations, and personalization without increasing overhead.'],
                ['heading' => '3. Human-led strategy still matters', 'content' => 'AI tools are valuable, but long-term business outcomes still depend on good strategy, product thinking, and execution.'],
            ],
            'quote' => '"AI is not replacing good strategy — it is accelerating teams that already have a clear direction."',
            'quoteAuthor' => 'Abhishek Kapoor',
            'tags' => ['AI', 'IT Industry', 'Technology', 'Business Growth'],
        ],
    ];

    public function index(string $post = 'laravel-12-whats-new')
    {
        $postData = $this->posts[$post] ?? $this->posts['laravel-12-whats-new'];

        return view('blog-detail', [
            'post' => $postData,
            'slug' => $post,
        ]);
    }

    public function show(string $post)
    {
        return $this->index($post);
    }
}
