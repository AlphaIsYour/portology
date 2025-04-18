@extends('layouts.app')

@section('content')
@php
    $coverPhoto = asset('avatars/default/default1.jpg');
    $avatar =asset('avatars/default/default.png');
    $xpProgress = 125;
    $level = 99;
    
    // Additional user data
    $skillsData = [
        'PHP' => 92,
        'JavaScript' => 85,
        'Laravel' => 90,
        'Next.js' => 78,
        'React' => 72,
        'Docker' => 65,
        'AWS' => 60,
        'TypeScript' => 75,
        'MySQL' => 88,
        'Git' => 95,
    ];
    
    $certifications = [
        ['name' => 'AWS Certified Developer', 'issuer' => 'Amazon Web Services', 'date' => '2024-01', 'icon' => 'aws'],
        ['name' => 'Laravel Certification', 'issuer' => 'Laravel', 'date' => '2023-09', 'icon' => 'laravel'],
        ['name' => 'Professional Web Developer', 'issuer' => 'W3Schools', 'date' => '2023-05', 'icon' => 'react'],
    ];
    
    $workExperience = [
        [
            'company' => 'Tech Innovators Inc.',
            'position' => 'Senior Full Stack Developer',
            'period' => 'Jan 2023 - Present',
            'description' => 'Leading development of enterprise applications using Laravel, Next.js, and AWS infrastructure.'
        ],
        [
            'company' => 'WebSolutions Co.',
            'position' => 'Backend Developer',
            'period' => 'Mar 2021 - Dec 2022',
            'description' => 'Developed and maintained RESTful APIs for multiple client projects using PHP and Laravel framework.'
        ],
        [
            'company' => 'Digital Creatives',
            'position' => 'Junior Web Developer',
            'period' => 'Jun 2019 - Feb 2021',
            'description' => 'Built responsive websites and implemented frontend designs using HTML, CSS, and JavaScript.'
        ],
    ];
    
    $education = [
        [
            'institution' => 'University of Technology',
            'degree' => 'Bachelor of Science in Computer Science',
            'period' => '2015 - 2019',
            'description' => 'Specialized in Software Engineering. Graduated with honors.'
        ],
        [
            'institution' => 'Online Learning Platform',
            'degree' => 'Full Stack Development Bootcamp',
            'period' => '2020',
            'description' => 'Intensive 12-week program focused on modern web development technologies.'
        ]
    ];
    
    $contributions = [
        ['month' => 'Jan', 'count' => rand(10, 50)],
        ['month' => 'Feb', 'count' => rand(20, 60)],
        ['month' => 'Mar', 'count' => rand(30, 70)],
        ['month' => 'Apr', 'count' => rand(20, 50)],
        ['month' => 'May', 'count' => rand(40, 80)],
        ['month' => 'Jun', 'count' => rand(30, 60)],
        ['month' => 'Jul', 'count' => rand(20, 40)],
        ['month' => 'Aug', 'count' => rand(30, 50)],
        ['month' => 'Sep', 'count' => rand(40, 70)],
        ['month' => 'Oct', 'count' => rand(30, 80)],
        ['month' => 'Nov', 'count' => rand(20, 60)],
        ['month' => 'Dec', 'count' => rand(10, 40)],
    ];
    
    $teamMembers = [
        ['name' => 'Sarah Johnson', 'role' => 'UI/UX Designer', 'avatar' => 'r4.jpg'],
        ['name' => 'Michael Chen', 'role' => 'Backend Developer', 'avatar' => 'r5.jpg'],
        ['name' => 'Emma Roberts', 'role' => 'Project Manager', 'avatar' => 'r7.jpg'],
        ['name' => 'David Kim', 'role' => 'DevOps Engineer', 'avatar' => 'r9.jpg'],
    ];
    
    $testimonials = [
        [
            'content' => 'Working with this developer was an excellent experience. They delivered high-quality code ahead of schedule and were very responsive to feedback.',
            'author' => 'John Smith',
            'position' => 'CTO at TechStart',
            'avatar' => 'image/r2.jpg'
        ],
        [
            'content' => 'An exceptional developer who consistently delivers clean, maintainable code. Their problem-solving skills and attention to detail are outstanding.',
            'author' => 'Amanda Peterson',
            'position' => 'Lead Developer at InnovateCorp',
            'avatar' => 'image/r6.jpg'
        ],
    ];
    
    $blogPosts = [
        [
            'title' => 'Building Scalable Laravel Applications',
            'excerpt' => 'Learn how to structure your Laravel applications for maximum scalability and performance.',
            'date' => '2024-03-15',
            'readTime' => '8 min read',
            'category' => 'Laravel',
            'image' => 'r10.jpg'
        ],
        [
            'title' => 'Modern JavaScript Techniques for 2024',
            'excerpt' => 'Explore the latest JavaScript patterns and techniques that will improve your frontend development.',
            'date' => '2024-02-20',
            'readTime' => '6 min read',
            'category' => 'JavaScript',
            'image' => 'r9.jpg'
        ],
        [
            'title' => 'Containerization with Docker: Best Practices',
            'excerpt' => 'A comprehensive guide to Docker containerization with real-world examples and tips.',
            'date' => '2024-01-10',
            'readTime' => '10 min read',
            'category' => 'DevOps',
            'image' => 'r8.jpg'
        ],
    ];
    
    $githubStats = [
        'repos' => rand(20, 50),
        'stars' => rand(100, 500),
        'followers' => rand(50, 200),
        'contributions' => rand(1000, 5000),
        'languages' => [
            ['name' => 'PHP', 'percentage' => 70, 'color' => 'blue-500'],
            ['name' => 'JavaScript', 'percentage' => 85, 'color' => 'yellow-500'],
            ['name' => 'HTML/CSS', 'percentage' => 90, 'color' => 'red-500'],
            ['name' => 'Python', 'percentage' => 48, 'color' => 'green-500'],
        ]
    ];
    
    $services = [
        [
            'title' => 'Web Application Development',
            'description' => 'Custom web applications built with modern frameworks and best practices.',
            'icon' => 'fas fa-laptop-code'
        ],
        [
            'title' => 'API Development',
            'description' => 'Robust and well-documented RESTful APIs for your applications.',
            'icon' => 'fas fa-exchange-alt'
        ],
        [
            'title' => 'Database Design',
            'description' => 'Efficient and scalable database architectures for your projects.',
            'icon' => 'fas fa-database'
        ],
        [
            'title' => 'Code Review & Optimization',
            'description' => 'Professional review and optimization of existing codebases.',
            'icon' => 'fas fa-code'
        ],
    ];
    
    $availabilitySchedule = [
        'Monday' => ['9:00 AM - 5:00 PM'],
        'Tuesday' => ['9:00 AM - 5:00 PM'],
        'Wednesday' => ['9:00 AM - 5:00 PM'],
        'Thursday' => ['9:00 AM - 5:00 PM'],
        'Friday' => ['9:00 AM - 3:00 PM'],
        'Saturday' => ['Available for urgent tasks only'],
        'Sunday' => ['Unavailable'],
    ];
@endphp

<div class="bg-gray-900 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Profile Header Section -->
        <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden">
            <!-- Cover Photo with Parallax Effect -->
            <div class="h-64 md:h-80 bg-gradient-to-r from-blue-900 to-gray-900 relative overflow-hidden" id="coverPhotoContainer">
                    <img src="{{ asset('image/r6.jpg') }}" alt="Cover" class="w-full h-full object-cover transform scale-110 cover-parallax">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 opacity-60"></div>
                
                <!-- Profile Status Indicator -->
                <div class="absolute top-4 right-4 flex items-center px-3 py-1 rounded-full bg-gray-800 bg-opacity-70">
                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2 pulse-animation"></span>
                    <span class="text-green-400 text-sm font-medium">Online</span>
                </div>
                
                <!-- Profile Actions Quick Buttons -->
                <div class="absolute top-4 left-4 flex space-x-2">
                    <button class="bg-gray-800 bg-opacity-70 p-2 rounded-full text-gray-300 hover:text-white transition">
                        <i class="fas fa-share-alt"></i>
                    </button>
                    <button class="bg-gray-800 bg-opacity-70 p-2 rounded-full text-gray-300 hover:text-white transition">
                        <i class="fas fa-bookmark"></i>
                    </button>
                    <button class="bg-gray-800 bg-opacity-70 p-2 rounded-full text-gray-300 hover:text-white transition">
                        <i class="fas fa-ellipsis-h"></i>
                    </button>
                </div>
            </div>
            
            <!-- Avatar & Basic Info -->
            <div class="relative px-6 pb-6">
                <!-- Avatar Container with Animation -->
                <div class="absolute -top-16 left-6 md:left-8">
                    <div class="rounded-full border-4 border-gray-800 bg-gray-800 shadow-xl overflow-hidden">
                        <div class="avatar-glow relative">
                            <img src="image/r10.jpg" alt="youralpha" class="w-32 h-32 object-cover">
                            <!-- Level Badge -->
                        </div>
                        <div class="absolute bottom-1 right-1 bg-red-600 text-white text-xs font-bold rounded-full w-8 h-8 flex items-center justify-center border-2 border-gray-800">
                            99
                        </div>
                    </div>
                </div>
                
                <!-- User Info & Stats -->
                <div class="flex flex-col md:flex-row gap-4 md:items-end justify-between pt-20 md:pt-4">
                    <!-- User Details -->
                    <div>
                        <div class="flex items-center gap-2">
                            <h1 class="text-3xl font-bold text-white mt-20">Youralpha</h1>
                            @if(true) <!-- Verified user condition -->
                            <span class="text-blue-400 verified-badge mt-21" title="Verified Developer">
                                <i class="fas fa-check-circle"></i>
                            </span>
                            @endif
                        </div>
                        <p class="text-blue-400 text-lg mb-2">@<span>eno4lph_</span></p>
                        
                        <p class="text-gray-300 mb-4 max-w-2xl">Welcome to my personal portfolio website. I am Alphareno Yanuar Syaputra, a passionate Information Technology student at Brawijaya University. This site showcases my projects, skills, and achievements in the field of technology and digital innovation. I am dedicated to creating solutions that make technology more accessible and impactful in everyday life.</p>
                        
                        <!-- Location & Contact Info -->
                        <div class="flex flex-wrap gap-4 mb-4">
                            <span class="flex items-center text-gray-300">
                                <i class="fas fa-map-marker-alt text-gray-400 mr-2"></i>
                                Kyoto, Japan
                            </span>
                            <span class="flex items-center text-gray-300">
                                <i class="fas fa-envelope text-gray-400 mr-2"></i>
                                <a href="mailto:alphrenoorz@gmail.com" class="hover:text-blue-400 transition">alphrenoorz@gmail.com</a>
                            </span>
                            <span class="flex items-center text-gray-300">
                                <i class="fas fa-calendar-alt text-gray-400 mr-2"></i>
                                Joined {{ date('M Y') }}
                            </span>
                        </div>
                        
                        <!-- Social Links -->
                        <div class="flex flex-wrap gap-4 mt-2">
                            <a href="https://github.com/AlphaIsYour" target="_blank" class="flex items-center text-gray-300 hover:text-blue-400 transition">
                                <i class="fab fa-github text-lg mr-2"></i>GitHub
                            </a>
                            
                            <a href="https://x.com/yrlpha" target="_blank" class="flex items-center text-gray-300 hover:text-blue-400 transition">
                                <i class="fab fa-twitter text-lg mr-2"></i>Twitter
                            </a>
                            
                            <a href="https://www.linkedin.com/in/alphareno-yanuar-syaputra/ target="_blank" class="flex items-center text-gray-300 hover:text-blue-400 transition">
                                <i class="fab fa-linkedin text-lg mr-2"></i>LinkedIn
                            </a>

                            <a href="https://tokoeno.vercel.app" target="_blank" class="flex items-center text-gray-300 hover:text-blue-400 transition">
                                <i class="fas fa-globe text-lg mr-2"></i>Website
                            </a>
                            
                            <span class="flex items-center text-gray-300">
                                <i class="fas fa-users text-lg mr-2"></i>
                                <span class="font-medium mr-1">4999</span> followers · 
                                <span class="font-medium ml-1 mr-1">245</span>following
                            </span>
                        </div>
                    </div>
                    
                    <!-- Right Side Action Buttons -->
                    <div class="flex flex-wrap gap-3 mt-4 md:mt-0">
                        <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition flex items-center gap-2 shadow-blue">
                            <i class="fas fa-user-plus"></i>
                            <span>Follow</span>
                        </button>
                        <button class="px-4 py-2 bg-gray-700 hover:bg-gray-600 text-white rounded-md transition flex items-center gap-2">
                            <i class="fas fa-message"></i>
                            <span>Message</span>
                        </button>
                        <div class="relative inline-block">
                            <button class="px-3 py-2 bg-gray-700 hover:bg-gray-600 text-white rounded-md transition">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                            <div class="hidden absolute right-0 mt-2 w-48 bg-gray-800 rounded-md shadow-lg z-20 py-1">
                                <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white">Report Profile</a>
                                <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white">Block User</a>
                                <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white">Share Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Global Statistics Bar -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
            <div class="bg-gray-800 rounded-lg p-4 text-center hover:bg-gray-750 transition duration-300">
                <div class="text-3xl font-bold text-white mb-1">20</div>
                <div class="text-gray-400 text-sm">Repositories</div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 text-center hover:bg-gray-750 transition duration-300">
                <div class="text-3xl font-bold text-white mb-1">199</div>
                <div class="text-gray-400 text-sm">Stars Received</div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 text-center hover:bg-gray-750 transition duration-300">
                <div class="text-3xl font-bold text-white mb-1">49</div>
                <div class="text-gray-400 text-sm">Contributions</div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 text-center hover:bg-gray-750 transition duration-300">
                <div class="text-3xl font-bold text-white mb-1">{{ rand(1, 5) }}/5</div>
                <div class="text-gray-400 text-sm">Average Rating</div>
            </div>
        </div>
        
        <!-- Interactive Tab Navigation -->
        <div class="bg-gray-800 mt-6 rounded-lg px-4 md:px-6 sticky top-0 z-10">
            <div class="flex overflow-x-auto hide-scrollbar whitespace-nowrap py-3 gap-8">
                <button id="tab-overview" class="tab-button text-white border-b-2 border-blue-500 px-1 py-3 font-medium">
                    <i class="fas fa-home mr-2"></i>Overview
                </button>
                <button  id="tab-projects" class="tab-button text-gray-400 hover:text-gray-200 px-1 py-3 font-medium transition">
                    <i class="fas fa-code-branch mr-2"></i>Projects
                </button>
                <button  id="tab-skills" class="tab-button text-gray-400 hover:text-gray-200 px-1 py-3 font-medium transition">
                    <i class="fas fa-code mr-2"></i>Skills
                </button>
                <button  id="tab-experience" class="tab-button text-gray-400 hover:text-gray-200 px-1 py-3 font-medium transition">
                    <i class="fas fa-briefcase mr-2"></i>Experience
                </button>
                <button  id="tab-achievements" class="tab-button text-gray-400 hover:text-gray-200 px-1 py-3 font-medium transition">
                    <i class="fas fa-award mr-2"></i>Achievements
                </button>
                <button id="tab-activity" class="tab-button text-gray-400 hover:text-gray-200 px-1 py-3 font-medium transition">
                    <i class="fas fa-chart-line mr-2"></i>Activity
                </button>
                <button id="tab-blog" class="tab-button text-gray-400 hover:text-gray-200 px-1 py-3 font-medium transition">
                    <i class="fas fa-rss mr-2"></i>Blog
                </button>
                <button  id="tab-testimonials" class="tab-button text-gray-400 hover:text-gray-200 px-1 py-3 font-medium transition">
                    <i class="fas fa-comment-dots mr-2"></i>Testimonials
                </button>
                <button  id="tab-contact" class="tab-button text-gray-400 hover:text-gray-200 px-1 py-3 font-medium transition">
                    <i class="fas fa-envelope mr-2"></i>Contact
                </button>
            </div>
        </div>
        
        <!-- Tab Content Sections -->
        <!-- 1. Overview Tab (Default) -->
        <div id="content-overview" class="tab-content mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Left Column -->
            <div class="md:col-span-1 space-y-6">
                <!-- Level & XP Card -->
                <div class="bg-gray-800 rounded-lg p-6 mb-6 transform hover:scale-[1.02] transition-transform duration-300">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-lg font-semibold text-white">Developer Level</h3>
                        <span class="bg-blue-900 text-blue-200 rounded-full px-3 py-1 text-xs font-medium">Level 99</span>
                    </div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm text-gray-400">999/1000 XP</span>
                        <span class="text-sm text-blue-400">345 total</span>
                    </div>
                    <div class="h-2 bg-gray-700 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-blue-600 to-indigo-500 progress-animation" style="width: 80%"></div>
                    </div>
                    
                    <!-- Level Benefits -->
                    <div class="mt-4 pt-4 border-t border-gray-700">
                        <h4 class="text-sm font-medium text-gray-300 mb-2">Level Benefits</h4>
                        <ul class="text-sm text-gray-400 space-y-1">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-400 mt-1 mr-2"></i>
                                <span>Custom profile customization</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-400 mt-1 mr-2"></i>
                                <span>Featured on developers page</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-lock text-gray-600 mt-1 mr-2"></i>
                                <span class="text-gray-500">Early access to beta features (Level {{ $level + 1 }})</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Mini Achievements Preview -->
                <div class="bg-gray-800 rounded-lg p-6 mb-6 transform hover:scale-[1.02] transition-transform duration-300">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold text-white">Achievements</h3>
                        <button onclick="switchTab('achievements')" class="text-xs text-blue-400 hover:text-blue-300">View all</button>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        @forelse($user->badges ?? [] as $index => $badge)
                            @if($index < 4)
                            <div class="bg-gray-750 rounded-lg p-3 flex flex-col items-center text-center hover:bg-gray-700 transition duration-300">
                                <div class="relative">
                                    <div class="absolute inset-0 badge-glow rounded-full"></div>
                                    <img src="{{ asset('badges/' . $badge->image) }}" alt="{{ $badge->name }}" class="w-12 h-12 mb-2 relative z-10">
                                </div>
                                <span class="text-white text-sm font-medium">{{ $badge->name }}</span>
                            </div>
                            @endif
                        @empty
                        <div class="col-span-2 py-4 text-center text-gray-400">
                            <i class="fas fa-award text-2xl mb-2"></i>
                            <p class="text-sm">No badges earned yet</p>
                        </div>
                        @endforelse
                    </div>
                </div>
                
                <!-- Languages Distribution -->
                <div class="bg-gray-800 rounded-lg p-6 mb-6 transform hover:scale-[1.02] transition-transform duration-300">
                    <h3 class="text-lg font-semibold text-white mb-4">Language Distribution</h3>
                    <div class="space-y-4">
                        @foreach($githubStats['languages'] as $language)
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm text-gray-300">{{ $language['name'] }}</span>
                                <span class="text-sm text-gray-400">{{ $language['percentage'] }}%</span>
                            </div>
                            <div class="h-2 bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-{{ $language['color'] }}" style="width: {{ $language['percentage'] }}%"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Community Roles -->
                <div class="bg-gray-800 rounded-lg p-6 transform hover:scale-[1.02] transition-transform duration-300">
                    <h3 class="text-lg font-semibold text-white mb-4">Community Roles</h3>
                    <div class="space-y-3">
                        <div class="px-3 py-2 rounded-md bg-gradient-to-r from-blue-800 to-blue-600 text-white text-sm font-medium flex items-center">
                            <span class="w-2 h-2 bg-blue-200 rounded-full mr-2"></span>
                            Core Developer
                        </div>
                        <div class="px-3 py-2 rounded-md bg-gradient-to-r from-green-800 to-green-600 text-white text-sm font-medium flex items-center">
                            <span class="w-2 h-2 bg-green-200 rounded-full mr-2"></span>
                            Open Source Contributor
                        </div>
                        <div class="px-3 py-2 rounded-md bg-gradient-to-r from-purple-800 to-purple-600 text-white text-sm font-medium flex items-center">
                            <span class="w-2 h-2 bg-purple-200 rounded-full mr-2"></span>
                            Community Mentor
                        </div>
                        <div class="px-3 py-2 rounded-md bg-gradient-to-r from-red-800 to-red-600 text-white text-sm font-medium flex items-center">
                            <span class="w-2 h-2 bg-amber-200 rounded-full mr-2"></span>
                            Technical Writer
                        </div>
                    </div>
                    
                    <!-- Community Stats -->
                    <div class="mt-4 pt-4 border-t border-gray-700">
                        <div class="grid grid-cols-2 gap-2 text-center">
                            <div>
                                <div class="text-xl font-bold text-white">{{ rand(10, 50) }}</div>
                                <div class="text-xs text-gray-400">Issues Resolved</div>
                            </div>
                            <div>
                                <div class="text-xl font-bold text-white">{{ rand(5, 30) }}</div>
                                <div class="text-xs text-gray-400">Pull Requests</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Availability Schedule -->
                <div class="bg-gray-800 rounded-lg p-6 transform hover:scale-[1.02] transition-transform duration-300">
                    <h3 class="text-lg font-semibold text-white mb-4">Availability</h3>
                    <div class="space-y-2">
                        @foreach($availabilitySchedule as $day => $hours)
                        <div class="flex justify-between items-center py-1.5 border-b border-gray-700 last:border-0">
                            <span class="font-medium text-gray-300">{{ $day }}</span>
                            <span class="text-sm @if(strpos($hours[0], 'Unavailable') !== false) text-red-400 @else text-green-400 @endif">
                                {{ $hours[0] }}
                            </span>
                        </div>
                        @endforeach
                    </div>
                    
                    <!-- Current Project Status -->
                    <div class="mt-4 bg-gray-750 rounded-md p-3">
                        <div class="flex items-center mb-2">
                            <span class="w-2 h-2 bg-amber-400 rounded-full mr-2 pulse-animation"></span>
                            <span class="text-amber-400 font-medium">Currently Working On</span>
                        </div>
                        <p class="text-sm text-gray-300">API Integration for e-commerce platform</p>
                        <div class="mt-2 w-full bg-gray-700 rounded-full h-1.5">
                        <div class="bg-green-700 h-full rounded-full" style="width: 86%"></div>
                        </div>
                        <p class="text-xs text-gray-400 mt-1">86% completed · Due in 7 days</p>
                    </div>
                </div>
            </div>
            
            <!-- Middle Column (Main Content) -->
            <div class="md:col-span-2 space-y-6">
                <!-- About Me -->
                <div class="bg-gray-800 rounded-lg p-6 transform hover:scale-[1.01] transition-transform duration-600">
                    <h2 class="text-xl font-semibold text-white mb-4 flex items-center">
                        <i class="fas fa-user-circle mr-2 text-blue-400"></i>About Me
                    </h2>
                    <div class="text-gray-300 space-y-4 text-justify">
                        <p>Passionate and experienced full-stack developer with a focus on building scalable web applications using Laravel, Next.js, Vue.js, and modern JavaScript frameworks. I have over 5 years of professional experience developing robust backend systems and intuitive user interfaces.</p>
                        
                        <p>I'm a strong advocate for clean code, test-driven development, and continuous integration/deployment practices. Currently working as a Senior Full Stack Developer at Tech Innovators Inc., where I lead development of enterprise-level applications and mentoring junior developers.</p>
                        
                        <p>When I'm not coding, I enjoy contributing to open-source projects, writing technical articles, and helping fellow developers in online communities. Always looking to collaborate on interesting projects that solve real-world problems.</p>
                    </div>
                </div>

                
                <!-- Featured Projects -->
                <div class="bg-gray-800 rounded-lg p-6 transform hover:scale-[1.01] transition-transform duration-600">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-semibold text-white flex items-center">
                            <i class="fas fa-star mr-2 text-yellow-400"></i>Featured Projects
                        </h2>
                        <button onclick="switchTab('projects')" class="text-sm text-blue-400 hover:text-blue-300 transition">View all projects</button>
                    </div>
                    
                    <!-- Projects Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Project Card 1 -->
                        <div class="bg-gray-750 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                            <div class="h-48 bg-gradient-to-r from-blue-800 to-indigo-900 relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-shopping-cart text-5xl text-white opacity-25"></i>
                                </div>
                                <!-- Project Type Badge -->
                                <div class="absolute top-4 right-4 px-2 py-1 rounded-md bg-blue-600 text-xs font-medium text-white">
                                    Full Stack
                                </div>
                                <!-- Stats -->
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900 p-3">
                                    <div class="flex items-center justify-between text-xs text-gray-300">
                                        <div class="flex items-center">
                                            <i class="fas fa-code-branch mr-1"></i>
                                            <span>{{ rand(5, 30) }}</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-star mr-1"></i>
                                            <span>{{ rand(10, 100) }}</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-eye mr-1"></i>
                                            <span>{{ rand(100, 500) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-5">
                                <h3 class="text-lg font-semibold text-white hover:text-blue-400 transition">
                                    <a href="https://tokoeno.vercel.app">Tokoeno E-Commerce</a>
                                </h3>
                                <p class="text-gray-400 text-sm mt-2">A comprehensive e-commerce solution built with Next.js, TailwindCss, and Stripe integration. Features include database management, product dashboard, and profil page.</p>
                                
                                <!-- Tech Stack -->
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <span class="px-2 py-1 bg-blue-900 bg-opacity-50 rounded text-blue-300 text-xs">Next.js</span>
                                    <span class="px-2 py-1 bg-green-900 bg-opacity-50 rounded text-green-300 text-xs">Prisma</span>
                                    <span class="px-2 py-1 bg-purple-900 bg-opacity-50 rounded text-purple-300 text-xs">Postgre</span>
                                    <span class="px-2 py-1 bg-yellow-900 bg-opacity-50 rounded text-yellow-300 text-xs">Lodash</span>
                                </div>
                                
                                <!-- Project Actions -->
                                <div class="mt-5 flex justify-between items-center">
                                    <a href="https://tokoeno.vercel.app" class="text-blue-400 hover:text-blue-300 text-sm font-medium transition">
                                        View Project <i class="fas fa-arrow-right ml-1"></i>
                                    </a>
                                    <div class="flex items-center">
                                        <a href="https://github.com/AlphaIsYour/tokoeno.git" class="text-gray-400 hover:text-blue-400 transition mx-2">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a href="https://tokoeno.vercel.app" class="text-gray-400 hover:text-blue-400 transition mx-2">
                                            <i class="fas fa-external-link-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Project Card 2 -->
                        <div class="bg-gray-750 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                            <div class="h-48 bg-gradient-to-r from-green-800 to-teal-900 relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-chart-line text-5xl text-white opacity-25"></i>
                                </div>
                                <!-- Project Type Badge -->
                                <div class="absolute top-4 right-4 px-2 py-1 rounded-md bg-green-600 text-xs font-medium text-white">
                                    API & Dashboard
                                </div>
                                <!-- Stats -->
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900 p-3">
                                    <div class="flex items-center justify-between text-xs text-gray-300">
                                        <div class="flex items-center">
                                            <i class="fas fa-code-branch mr-1"></i>
                                            <span>{{ rand(5, 30) }}</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-star mr-1"></i>
                                            <span>{{ rand(10, 100) }}</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-eye mr-1"></i>
                                            <span>{{ rand(100, 500) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-5">
                                <h3 class="text-lg font-semibold text-white hover:text-blue-400 transition">
                                    <a href="#">Analytics Dashboard</a>
                                </h3>
                                <p class="text-gray-400 text-sm mt-2">Real-time analytics dashboard with customizable widgets, data visualization, and reporting tools. Includes RESTful API for easy integration with other systems.</p>
                                
                                <!-- Tech Stack -->
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <span class="px-2 py-1 bg-red-900 bg-opacity-50 rounded text-red-300 text-xs">Laravel</span>
                                    <span class="px-2 py-1 bg-blue-900 bg-opacity-50 rounded text-blue-300 text-xs">React</span>
                                    <span class="px-2 py-1 bg-yellow-900 bg-opacity-50 rounded text-yellow-300 text-xs">D3.js</span>
                                    <span class="px-2 py-1 bg-green-900 bg-opacity-50 rounded text-green-300 text-xs">PostgreSQL</span>
                                </div>
                                
                                <!-- Project Actions -->
                                <div class="mt-5 flex justify-between items-center">
                                    <a href="#" class="text-blue-400 hover:text-blue-300 text-sm font-medium transition">
                                        View Project <i class="fas fa-arrow-right ml-1"></i>
                                    </a>
                                    <div class="flex items-center">
                                        <a href="#" class="text-gray-400 hover:text-blue-400 transition mx-2">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a href="#" class="text-gray-400 hover:text-blue-400 transition mx-2">
                                            <i class="fas fa-external-link-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Recent Activities on Projects -->
                    <div class="mt-6 pt-6 border-t border-gray-700">
                        <h3 class="text-lg font-medium text-white mb-4">Recent Activities</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center mr-3">
                                    <i class="fas fa-code-commit text-white"></i>
                                </div>
                                <div>
                                    <p class="text-gray-300">Pushed 5 commits to <a href="#" class="text-blue-400 hover:underline">E-Commerce Platform</a></p>
                                    <p class="text-sm text-gray-500 mt-1">2 hours ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-8 h-8 rounded-full bg-green-600 flex items-center justify-center mr-3">
                                    <i class="fas fa-code-branch text-white"></i>
                                </div>
                                <div>
                                    <p class="text-gray-300">Created new branch <span class="px-2 py-0.5 bg-gray-700 rounded-md text-xs font-mono">feature/user-dashboard</span></p>
                                    <p class="text-sm text-gray-500 mt-1">1 days ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-8 h-8 rounded-full bg-purple-600 flex items-center justify-center mr-3">
                                    <i class="fas fa-check-circle text-white"></i>
                                </div>
                                <div>
                                    <p class="text-gray-300">Merged pull request <a href="#" class="text-blue-400 hover:underline">#42</a>: Fix authentication issues</p>
                                    <p class="text-sm text-gray-500 mt-1">3 days ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Skills Preview -->
                <div class="bg-gray-800 rounded-lg p-6 transform hover:scale-[1.01] transition-transform duration-300">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-semibold text-white flex items-center">
                            <i class="fas fa-code mr-2 text-blue-400"></i>Technical Skills
                        </h2>
                        <button onclick="switchTab('skills')" class="text-sm text-blue-400 hover:text-blue-300 transition">View all skills</button>
                    </div>
                    
                    <!-- Skills Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                        @foreach(array_slice($skillsData, 0, 6) as $skill => $rating)
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-300 font-medium">{{ $skill }}</span>
                                <span class="text-gray-400 text-sm">{{ $rating }}%</span>
                            </div>
                            <div class="h-2 bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 skill-animate" style="width: {{ $rating }}%"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <!-- Featured Technologies -->
                    <div class="mt-6 pt-6 border-t border-gray-700">
                        <h3 class="text-lg font-medium text-white mb-3">Featured Technologies</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Laravel', 'Next.js', 'React', 'TypeScript', 'Docker', 'AWS', 'Git', 'MySQL', 'REST API', 'GraphQL', 'CI/CD', 'TDD'] as $tech)
                            <span class="px-3 py-1 bg-gray-700 hover:bg-gray-650 transition duration-300 rounded-full text-gray-300 text-sm">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial Preview -->
                <div class="bg-gray-800 rounded-lg p-6 transform hover:scale-[1.01] transition-transform duration-300">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-semibold text-white flex items-center">
                            <i class="fas fa-comment-dots mr-2 text-blue-400"></i>Featured Testimonial
                        </h2>
                        <button onclick="switchTab('testimonials')" class="text-sm text-blue-400 hover:text-blue-300 transition">View all</button>
                    </div>
                    
                    <!-- Featured Testimonial Card -->
                    <div class="bg-gray-750 rounded-lg p-5 relative">
                        <!-- Quote Icons -->
                        <div class="absolute top-4 left-4 text-gray-600 opacity-20">
                            <i class="fas fa-quote-left text-4xl"></i>
                        </div>
                        <div class="absolute bottom-4 right-4 text-gray-600 opacity-20">
                            <i class="fas fa-quote-right text-4xl"></i>
                        </div>
                        
                        <div class="relative z-10">
                            <p class="text-gray-300 italic mb-6">{{ $testimonials[0]['content'] }}</p>
                            
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full overflow-hidden bg-gray-600 mr-4">
                                    <img src="{{ asset( $testimonials[0]['avatar']) }}" alt="{{ $testimonials[0]['author'] }}"
                                         onerror="this.onerror=null; this.src='{{ asset('avatars/default/default.png') }}'" 
                                         class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="text-white font-medium">{{ $testimonials[0]['author'] }}</h4>
                                    <p class="text-gray-400 text-sm">{{ $testimonials[0]['position'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 2. Projects Tab -->
        <div id="content-projects" class="tab-content mt-6 hidden">
            <div class="bg-gray-800 rounded-lg p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-white">Projects</h2>
                    <div class="flex space-x-2">
                        <div class="relative">
                            <select class="bg-gray-700 text-white border-0 rounded-md pl-3 pr-8 py-2 appearance-none focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                <option>All Projects</option>
                                <option>Web Applications</option>
                                <option>Mobile Applications</option>
                                <option>API Services</option>
                                <option>Open Source</option>
                            </select>
                            <div class="absolute right-3 top-3 text-gray-400 pointer-events-none">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="relative">
                            <select class="bg-gray-700 text-white border-0 rounded-md pl-3 pr-8 py-2 appearance-none focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                <option>Recently Updated</option>
                                <option>Most Stars</option>
                                <option>Most Viewed</option>
                                <option>Alphabetical</option>
                            </select>
                            <div class="absolute right-3 top-3 text-gray-400 pointer-events-none">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Projects Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Additional Project Cards -->
                    @for($i = 0; $i < 6; $i++)
                    <div class="bg-gray-750 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                        @php
                            $colors = ['from-blue-800 to-indigo-900', 'from-green-800 to-teal-900', 'from-purple-800 to-indigo-900',
                                    'from-red-800 to-pink-900', 'from-yellow-800 to-amber-900', 'from-blue-800 to-red-900'];
                            $icons = ['fas fa-shopping-cart', 'fas fa-chart-line', 'fas fa-comments', 
                                    'fas fa-mobile-alt', 'fas fa-database', 'fas fa-cloud'];
                            $types = ['Full Stack', 'API & Dashboard', 'Frontend', 'Mobile App', 'Backend', 'Cloud Service'];
                            
                            $randomColor = $colors[$i % count($colors)];
                            $randomIcon = $icons[$i % count($icons)];
                            $randomType = $types[$i % count($types)];
                        @endphp
                        
                        <div class="h-48 bg-gradient-to-r {{ $randomColor }} relative overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <i class="{{ $randomIcon }} text-5xl text-white opacity-25"></i>
                            </div>
                            <!-- Project Type Badge -->
                            <div class="absolute top-4 right-4 px-2 py-1 rounded-md bg-gray-800 bg-opacity-70 text-xs font-medium text-white">
                                {{ $randomType }}
                            </div>
                            <!-- Stats -->
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900 p-3">
                                <div class="flex items-center justify-between text-xs text-gray-300">
                                    <div class="flex items-center">
                                        <i class="fas fa-code-branch mr-1"></i>
                                        <span>{{ rand(5, 30) }}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-star mr-1"></i>
                                        <span>{{ rand(10, 100) }}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-eye mr-1"></i>
                                        <span>{{ rand(100, 500) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-5">
                            @php
                                $projectNames = [
                                    'Invoice Manager', 
                                    'Social Network API', 
                                    'Task Management System', 
                                    'Content Management System', 
                                    'Real-time Chat Application', 
                                    'Job Board Platform'
                                ];
                                $projectDescriptions = [
                                    'An invoice generation and management system with PDF export and payment integration.',
                                    'RESTful API for a social network with authentication, profiles, posts, and comments.',
                                    'A comprehensive task management system with projects, teams, and kanban boards.',
                                    'A flexible CMS with custom fields, user roles, and content versioning.',
                                    'Real-time messaging application with channels, direct messages, and file sharing.',
                                    'A job posting and application platform with employer and candidate portals.'
                                ];
                            @endphp
                            
                            <h3 class="text-lg font-semibold text-white hover:text-blue-400 transition">
                                <a href="#">{{ $projectNames[$i % count($projectNames)] }}</a>
                            </h3>
                            <p class="text-gray-400 text-sm mt-2">{{ $projectDescriptions[$i % count($projectDescriptions)] }}</p>
                            
                            <!-- Tech Stack -->
                            <div class="mt-4 flex flex-wrap gap-2">
                                @php
                                    $techStacks = [
                                        ['Laravel', 'Next.js', 'MySQL', 'Stripe'],
                                        ['Express.js', 'MongoDB', 'JWT', 'Socket.io'],
                                        ['React', 'Redux', 'Node.js', 'PostgreSQL'],
                                        ['Laravel', 'Livewire', 'Alpine.js', 'MySQL'],
                                        ['Node.js', 'Socket.io', 'React', 'Redis'],
                                        ['Laravel', 'Inertia.js', 'Nexte.js', 'MySQL']
                                    ];
                                    
                                    $colors = ['blue', 'green', 'purple', 'yellow', 'red', 'indigo', 'pink', 'white'];
                                @endphp
                                
                                @foreach($techStacks[$i % count($techStacks)] as $index => $tech)
                                    @php $randomColor = $colors[$index % count($colors)]; @endphp
                                    <span class="px-2 py-1 bg-{{ $randomColor }}-900 bg-opacity-50 rounded text-{{ $randomColor }}-300 text-xs">{{ $tech }}</span>
                                @endforeach
                            </div>
                            
                            <!-- Project Actions -->
                            <div class="mt-5 flex justify-between items-center">
                                <a href="#" class="text-blue-400 hover:text-blue-300 text-sm font-medium transition">
                                    View Project <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                                <div class="flex items-center">
                                    <a href="#" class="text-gray-400 hover:text-blue-400 transition mx-2">
                                        <i class="fab fa-github"></i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-blue-400 transition mx-2">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
                
                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <nav class="flex items-center space-x-2">
                        <a href="#" class="px-3 py-2 rounded-md bg-gray-700 text-gray-300 hover:bg-gray-600 transition">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#" class="px-3 py-2 rounded-md bg-blue-600 text-white">1</a>
                        <a href="#" class="px-3 py-2 rounded-md bg-gray-700 text-gray-300 hover:bg-gray-600 transition">2</a>
                        <a href="#" class="px-3 py-2 rounded-md bg-gray-700 text-gray-300 hover:bg-gray-600 transition">3</a>
                        <span class="px-3 py-2 text-gray-500">...</span>
                        <a href="#" class="px-3 py-2 rounded-md bg-gray-700 text-gray-300 hover:bg-gray-600 transition">8</a>
                        <a href="#" class="px-3 py-2 rounded-md bg-gray-700 text-gray-300 hover:bg-gray-600 transition">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        
        <!-- 3. Skills Tab -->
        <div id="content-skills" class="tab-content mt-6 hidden">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Main Skills Panel -->
                <div class="md:col-span-2 bg-gray-800 rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-white mb-6">Technical Skills</h2>
                    
                    <!-- Skills Categories -->
                    <div class="flex flex-wrap mb-6 gap-2">
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-md">All Skills</button>
                        <button class="px-4 py-2 bg-gray-700 text-gray-300 hover:bg-gray-650 transition rounded-md">Frontend</button>
                        <button class="px-4 py-2 bg-gray-700 text-gray-300 hover:bg-gray-650 transition rounded-md">Backend</button>
                        <button class="px-4 py-2 bg-gray-700 text-gray-300 hover:bg-gray-650 transition rounded-md">DevOps</button>
                        <button class="px-4 py-2 bg-gray-700 text-gray-300 hover:bg-gray-650 transition rounded-md">Database</button>
                        <button class="px-4 py-2 bg-gray-700 text-gray-300 hover:bg-gray-650 transition rounded-md">Tools</button>
                    </div>
                    
                    <!-- Skills Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                        @foreach($skillsData as $skill => $rating)
                        <div class="transform hover:scale-[1.02] transition-transform">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-300 font-medium">{{ $skill }}</span>
                                <span class="text-gray-400 text-sm">{{ $rating }}%</span>
                            </div>
                            <div class="h-2 bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 skill-animate" style="width: {{ $rating }}%"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <!-- Learning Next -->
                    <div class="mt-8 pt-6 border-t border-gray-700">
                        <h3 class="text-lg font-medium text-white mb-4">Learning Next</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gray-750 rounded-lg p-4 flex items-center">
                                <img src="{{ asset('avatars/default/default1.jpg') }}" alt="Rust" class="w-10 h-10 mr-4">
                                <div>
                                    <h4 class="text-white font-medium">Rust</h4>
                                    <div class="mt-1 h-1.5 bg-gray-700 rounded-full overflow-hidden w-full">
                                        <div class="h-full bg-amber-500 rounded-full" style="width: 15%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-750 rounded-lg p-4 flex items-center">
                                <img src="{{ asset('avatars/default/default1.jpg') }}" alt="Go" class="w-10 h-10 mr-4">
                                <div>
                                    <h4 class="text-white font-medium">Go</h4>
                                    <div class="mt-1 h-1.5 bg-gray-700 rounded-full overflow-hidden w-full">
                                        <div class="h-full bg-cyan-500 rounded-full" style="width: 22%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-750 rounded-lg p-4 flex items-center">
                                <img src="{{ asset('avatars/default/default1.jpg') }}" alt="GraphQL" class="w-10 h-10 mr-4">
                                <div>
                                    <h4 class="text-white font-medium">GraphQL</h4>
                                    <div class="mt-1 h-1.5 bg-gray-700 rounded-full overflow-hidden w-full">
                                        <div class="h-full bg-pink-500 rounded-full" style="width: 40%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-750 rounded-lg p-4 flex items-center">
                                <img src="{{ asset('avatars/default/default1.jpg') }}" alt="Kubernetes" class="w-10 h-10 mr-4">
                                <div>
                                    <h4 class="text-white font-medium">Kubernetes</h4>
                                    <div class="mt-1 h-1.5 bg-gray-700 rounded-full overflow-hidden w-full">
                                        <div class="h-full bg-blue-500 rounded-full" style="width: 30%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Certifications Panel -->
                <div class="bg-gray-800 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-white mb-6">Certifications</h3>
                    
                    <!-- Certification Cards -->
                    <div class="space-y-4">
                        @foreach($certifications as $cert)
                        <div class="bg-gray-750 rounded-lg p-4 hover:bg-gray-700 transition duration-300">
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-lg bg-gray-700 flex items-center justify-center mr-4">
                                    <i class="fab fa-{{ $cert['icon'] }} text-2xl text-blue-400"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-medium">{{ $cert['name'] }}</h4>
                                    <p class="text-gray-400 text-sm">{{ $cert['issuer'] }} • {{ date('M Y', strtotime($cert['date'])) }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <!-- Tools & Technologies -->
                    <div class="mt-8 pt-6 border-t border-gray-700">
                        <h3 class="text-lg font-medium text-white mb-4">Tools & Technologies</h3>
                        <div class="flex flex-wrap gap-2">
                            @php
                            $tools = ['Visual Studio Code', 'PhpStorm', 'Git', 'GitHub', 'GitLab', 'Docker', 'AWS', 'Jira', 'Figma', 'Postman', 'NPM', 'Composer', 'Webpack', 'GitHub Actions', 'Travis CI', 'Jenkins'];
                            @endphp
                            
                            @foreach($tools as $tool)
                            <span class="px-3 py-1 bg-gray-750 hover:bg-gray-700 transition duration-300 rounded-full text-gray-300 text-sm">{{ $tool }}</span>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Soft Skills -->
                    <div class="mt-8 pt-6 border-t border-gray-700">
                        <h3 class="text-lg font-medium text-white mb-4">Soft Skills</h3>
                        <div class="space-y-2">
                            @php
                            $softSkills = [
                                ['name' => 'Problem Solving', 'rating' => 95],
                                ['name' => 'Team Collaboration', 'rating' => 90],
                                ['name' => 'Communication', 'rating' => 85],
                                ['name' => 'Leadership', 'rating' => 80],
                                ['name' => 'Time Management', 'rating' => 88]
                            ];
                            @endphp
                            
                            @foreach($softSkills as $skill)
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-gray-300">{{ $skill['name'] }}</span>
                                    <div class="flex">
                                        @for($i = 0; $i < 5; $i++)
                                            @if($i < round($skill['rating'] / 20))
                                                <i class="fas fa-star text-yellow-400 text-xs ml-1"></i>
                                            @else
                                                <i class="far fa-star text-gray-600 text-xs ml-1"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 4. Experience Tab -->
        <div id="content-experience" class="tab-content mt-6 hidden">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Work Experience -->
                <div class="md:col-span-2 bg-gray-800 rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-white mb-6">Professional Experience</h2>
                    
                    <!-- Experience Timeline -->
                    <div class="relative pl-8 space-y-8 before:absolute before:inset-0 before:ml-4 before:w-0.5 before:bg-gray-700">
                        @foreach($workExperience as $index => $job)
                        <div class="relative">
                            <!-- Timeline Dot -->
                            <div class="absolute -left-8 mt-1.5 w-4 h-4 rounded-full bg-blue-600 border-4 border-gray-800"></div>
                            
                            <!-- Job Card -->
                            <div class="bg-gray-750 rounded-lg p-5 hover:bg-gray-700 transition duration-300 transform hover:scale-[1.01]">
                                <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-4">
                                    <h3 class="text-lg font-semibold text-white">{{ $job['position'] }}</h3>
                                    <span class="text-blue-400 mt-1 md:mt-0">{{ $job['period'] }}</span>
                                </div>
                                
                                <div class="flex items-center mb-4">
                                    <i class="fas fa-building text-gray-500 mr-2"></i>
                                    <span class="text-gray-300">{{ $job['company'] }}</span>
                                </div>
                                
                                <p class="text-gray-400">{{ $job['description'] }}</p>
                                
                                <!-- Key Achievements -->
                                @if($index === 0)
                                <div class="mt-4 pt-4 border-t border-gray-700">
                                    <h4 class="text-white font-medium mb-2">Key Achievements</h4>
                                    <ul class="text-gray-400 space-y-1">
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                            <span>Improved application performance by 40% through code optimization and caching</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                            <span>Implemented CI/CD pipeline reducing deployment time by 65%</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                            <span>Led team of 5 developers for successful launch of major product features</span>
                                        </li>
                                    </ul>
                                </div>
                                @endif
                                
                                <!-- Technologies Used -->
                                <div class="mt-4 pt-4 border-t border-gray-700">
                                    <h4 class="text-white font-medium mb-2">Technologies Used</h4>
                                    <div class="flex flex-wrap gap-2">
                                        @php
                                        $techLists = [
                                            ['Laravel', 'Next.js', 'AWS', 'MySQL', 'Redis', 'Docker', 'CI/CD'],
                                            ['PHP', 'Laravel', 'JavaScript', 'MySQL', 'REST API', 'Git'],
                                            ['HTML', 'CSS', 'JavaScript', 'jQuery', 'PHP', 'Bootstrap']
                                        ];
                                        @endphp
                                        
                                        @foreach($techLists[$index] as $tech)
                                        <span class="px-2 py-1 bg-gray-700 rounded text-xs text-gray-300">{{ $tech }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Education & Certification Sidebar -->
                <div class="space-y-6">
                    <!-- Education -->
                    <div class="bg-gray-800 rounded-lg p-6">
                        <h3 class="text-xl font-semibold text-white mb-6">Education</h3>
                        
                        <div class="space-y-6">
                            @foreach($education as $edu)
                            <div class="bg-gray-750 p-5 rounded-lg hover:bg-gray-700 transition duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="w-10 h-10 rounded-full bg-blue-900 flex items-center justify-center mr-3">
                                        <i class="fas fa-graduation-cap text-blue-400"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-white font-medium">{{ $edu['institution'] }}</h4>
                                        <p class="text-gray-400 text-sm">{{ $edu['period'] }}</p>
                                    </div>
                                </div>
                                
                                <h5 class="text-blue-400 font-medium mb-2">{{ $edu['degree'] }}</h5>
                                <p class="text-gray-400 text-sm">{{ $edu['description'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Continuing Education -->
                    <div class="bg-gray-800 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-white mb-6">Continuing Education</h3>
                        
                        <div class="space-y-4">
                            @php
                            $courses = [
                                ['name' => 'Advanced Next.js Patterns', 'platform' => 'Udemy', 'completed' => '2023'],
                                ['name' => 'AWS Solutions Architect', 'platform' => 'A Cloud Guru', 'completed' => '2023'],
                                ['name' => 'Design Patterns in PHP', 'platform' => 'Laracasts', 'completed' => '2022'],
                                ['name' => 'Docker Mastery', 'platform' => 'Pluralsight', 'completed' => '2022'],
                            ];
                            @endphp
                            
                            @foreach($courses as $course)
                            <div class="bg-gray-750 p-4 rounded-lg flex justify-between items-center hover:bg-gray-700 transition duration-300">
                                <div>
                                    <h4 class="text-white font-medium">{{ $course['name'] }}</h4>
                                    <p class="text-gray-400 text-sm">{{ $course['platform'] }} • {{ $course['completed'] }}</p>
                                </div>
                                <div class="bg-blue-600 rounded-full w-6 h-6 flex items-center justify-center">
                                    <i class="fas fa-check text-white text-xs"></i>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Download Resume -->
                    <div class="bg-gray-800 rounded-lg p-6 flex flex-col items-center text-center">
                        <div class="w-16 h-16 rounded-full bg-blue-900 bg-opacity-50 flex items-center justify-center mb-4">
                            <i class="fas fa-file-pdf text-2xl text-blue-400"></i>
                        </div>
                        <h3 class="text-white font-medium mb-2">Download Resume</h3>
                        <p class="text-gray-400 text-sm mb-4">Get a complete overview of my experience and skills in PDF format</p>
                        <a href="#" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition flex items-center gap-2 shadow-blue">
                            <i class="fas fa-download"></i>
                            <span>Download PDF</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- <!-- 5. Achievements Tab --> --}}
        <div id="content-achievements" class="tab-content mt-6 hidden">
            <div class="bg-gray-800 rounded-lg p-6">
                <h2 class="text-xl font-semibold text-white mb-6">Achievements & Certifications</h2>
                <div class="space-y-6 mb-8">
                    <h3 class="text-lg font-semibold text-gray-300 mb-4">Certifications</h3>
                     @if(count($certifications) > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                         @foreach($certifications as $cert)
                         <div class="bg-gray-750 rounded-lg p-4 flex items-center hover:bg-gray-700 transition duration-300">
                            <div class="w-12 h-12 rounded-lg bg-gray-700 flex items-center justify-center mr-4">
                                 @if(isset($cert['icon']))
                                     @if($cert['icon'] === 'laravel') <i class="fab fa-laravel text-2xl text-red-400"></i>
                                     @elseif($cert['icon'] === 'aws') <i class="fab fa-aws text-2xl text-orange-400"></i>
                                     @elseif($cert['icon'] === 'web') <i class="fas fa-globe text-2xl text-blue-400"></i>
                                     @else <i class="fas fa-certificate text-2xl text-gray-400"></i>
                                     @endif
                                 @else
                                     <i class="fas fa-certificate text-2xl text-gray-400"></i>
                                 @endif
                            </div>
                            <div>
                                 <h4 class="text-white font-medium">{{ $cert['name'] }}</h4>
                                 <p class="text-gray-400 text-sm">{{ $cert['issuer'] }} • {{ date('M Y', strtotime($cert['date'])) }}</p>
                            </div>
                         </div>
                         @endforeach
                     </div>
                     @else
                         <p class="text-gray-400 text-center">No certifications added yet.</p>
                     @endif
                </div>
                
                {{-- // Placeholder for other Achievements / Badges --}}
                <div class="space-y-6">
                    <h3 class="text-lg font-semibold text-gray-300 mb-4">Badges & Awards</h3>
                     <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                         <div class="bg-gray-750 rounded-lg p-4 flex flex-col items-center text-center hover:bg-gray-700 transition duration-300">
                            <img src="{{ asset('badges/first-commit.png') }}" alt="First Commit" class="w-12 h-12 mb-2">
                            <span class="text-white text-sm font-medium">First Commit</span>
                         </div>
                          <div class="bg-gray-750 rounded-lg p-4 flex flex-col items-center text-center hover:bg-gray-700 transition duration-300">
                            <img src="{{ asset('badges/level-10.png') }}" alt="Level 10" class="w-12 h-12 mb-2">
                            <span class="text-white text-sm font-medium">Level 10</span>
                         </div>
                          <div class="bg-gray-750 rounded-lg p-4 flex flex-col items-center text-center hover:bg-gray-700 transition duration-300">
                            <img src="{{ asset('badges/popular-project.png') }}" alt="Popular Project" class="w-12 h-12 mb-2">
                            <span class="text-white text-sm font-medium">Popular Project</span>
                         </div>
                          <div class="bg-gray-750 rounded-lg p-4 flex flex-col items-center text-center hover:bg-gray-700 transition duration-300">
                            <img src="{{ asset('badges/community-helper.png') }}" alt="Community Helper" class="w-12 h-12 mb-2">
                            <span class="text-white text-sm font-medium">Community Helper</span>
                         </div>
                         @forelse($user->allBadges ?? [] as $badge)
                            <div class="bg-gray-750 rounded-lg p-3 flex flex-col items-center text-center hover:bg-gray-700 transition duration-300">
                                <img src="{{ asset('badges/' . $badge->image) }}" alt="{{ $badge->name }}" class="w-12 h-12 mb-2">
                                <span class="text-white text-sm font-medium">{{ $badge->name }}</span>
                            </div>
                         @empty
                             <div class="col-span-4 py-4 text-center text-gray-400">
                                <i class="fas fa-award text-2xl mb-2"></i>
                                <p class="text-sm">No additional badges or awards yet.</p>
                             </div>
                         @endforelse
                     </div>
                </div>
            </div>
        </div>

        {{-- // 6. Activity Tab --}}
        <div id="content-activity" class="tab-content mt-6 hidden">
             <div class="bg-gray-800 rounded-lg p-6">
                 <h2 class="text-xl font-semibold text-white mb-6">Activity Overview</h2>

                 <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                     <div class="bg-gray-750 rounded-lg p-4">
                         <h3 class="text-lg font-medium text-white mb-4">Annual Contributions</h3>
                         <div id="contributionCalendar" class="overflow-hidden pb-2 min-w-[580px]">
                         </div>
                     </div>

                     <div class="bg-gray-750 rounded-lg p-4">
                        <h3 class="text-lg font-medium text-white mb-4">Monthly Contributions</h3>
                        <div class="relative h-60"> 
                             <canvas id="activityChart"></canvas>
                        </div>
                     </div>
                 </div>

                {{-- // Recent Activity Feed --}}
                 <div class="mt-8 pt-6 border-t border-gray-700">
                     <h3 class="text-lg font-medium text-white mb-4">Recent Activity Feed</h3>
                     <div class="space-y-4 text-gray-300">
                         <div class="flex items-center">
                             <i class="fas fa-code-commit text-blue-400 mr-3"></i>
                             <span>Commited code to project <a href="#" class="text-blue-400 hover:underline">Backend API Refactor</a></span>
                             <span class="text-gray-500 text-sm ml-auto">2 hours ago</span>
                         </div>
                         <div class="flex items-center">
                             <i class="fas fa-star text-yellow-400 mr-3"></i>
                             <span>Starred project <a href="#" class="text-blue-400 hover:underline">Open Source UI Library</a></span>
                             <span class="text-gray-500 text-sm ml-auto">1 day ago</span>
                         </div>
                          <div class="flex items-center">
                             <i class="fas fa-code-branch text-green-400 mr-3"></i>
                             <span>Opened a new pull request in <a href="#" class="text-blue-400 hover:underline">Project Management Tool</a></span>
                             <span class="text-gray-500 text-sm ml-auto">3 days ago</span>
                         </div>
                          <div class="flex items-center">
                             <i class="fas fa-award text-purple-400 mr-3"></i>
                             <span>Earned the "Community Contributor" badge</span>
                             <span class="text-gray-500 text-sm ml-auto">1 week ago</span>
                         </div>
                     </div>
                 </div>

             </div>
        </div>

        {{-- // 7. Blog Tab --}}
        <div id="content-blog" class="tab-content mt-6 hidden">
             <div class="bg-gray-800 rounded-lg p-6">
                 <h2 class="text-xl font-semibold text-white mb-6">Blog Posts</h2>

                 <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
                     <div class="relative flex-grow w-full md:w-auto">
                         <input type="text" id="blogSearch" placeholder="Search blog posts..."
                                class="w-full pl-10 pr-4 py-2 rounded-md bg-gray-700 text-white border-gray-600 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                         <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                             <i class="fas fa-search text-gray-400"></i>
                         </div>
                     </div>
                     <div class="flex flex-wrap gap-2">
                         <button class="blog-tag-filter px-3 py-1 rounded-md bg-blue-600 text-white text-sm transition" data-tag="all">All</button>
                         <button class="blog-tag-filter px-3 py-1 rounded-md bg-gray-700 text-gray-300 hover:bg-gray-600 text-sm transition" data-tag="laravel">Laravel</button>
                         <button class="blog-tag-filter px-3 py-1 rounded-md bg-gray-700 text-gray-300 hover:bg-gray-600 text-sm transition" data-tag="javascript">JavaScript</button>
                         <button class="blog-tag-filter px-3 py-1 rounded-md bg-gray-700 text-gray-300 hover:bg-gray-600 text-sm transition" data-tag="devops">DevOps</button>
                     </div>
                 </div>


                {{-- //  Blog Posts Grid --}}
                 <div id="blogPosts" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                     {{-- Loop through $blogPosts variable --}}
                     @forelse($blogPosts as $post)
                     <div class="blog-post bg-gray-750 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                           data-categories="{{ strtolower($post['category']) }}"> 
                         @if(isset($post['image']))
                             <img src="{{ asset('image/' . $post['image']) }}" alt="{{ $post['title'] }}" class="w-full h-40 object-cover">
                         @endif
                         <div class="p-5">
                             <span class="blog-tag px-2 py-1 bg-blue-900 bg-opacity-50 rounded text-blue-300 text-xs font-medium mb-2">{{ $post['category'] }}</span>
                             <h3 class="blog-title text-lg font-semibold text-white hover:text-blue-400 transition mt-2">
                                 <a href="#">{{ $post['title'] }}</a> 
                             </h3>
                             <p class="blog-excerpt text-gray-400 text-sm mt-2">{{ $post['excerpt'] }}</p>
                             <div class="flex items-center text-gray-500 text-xs mt-4">
                                 <span><i class="fas fa-calendar-alt mr-1"></i> {{ date('M d, Y', strtotime($post['date'])) }}</span>
                                 <span class="mx-2">·</span>
                                 <span class="reading-time"><i class="fas fa-clock mr-1"></i> {{ $post['readTime'] }}</span>
                             </div>
                         </div>
                     </div>
                     @empty
                         <div class="col-span-full py-8 text-center text-gray-400">
                             <i class="fas fa-rss text-3xl mb-3"></i>
                             <p>No blog posts found yet.</p>
                         </div>
                     @endforelse
                 </div>
             </div>
        </div>

        {{-- // 8. Testimonials Tab --}}
        <div id="content-testimonials" class="tab-content mt-6 hidden">
             <div class="bg-gray-800 rounded-lg p-6">
                 <h2 class="text-xl font-semibold text-white mb-6">What People Say</h2>

                 <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                     @forelse($testimonials as $testimonial)
                     <div class="testimonial-item bg-gray-750 rounded-lg p-5 relative shadow hover:shadow-lg transition duration-300">
                         <div class="absolute top-4 left-4 text-gray-600 opacity-20">
                             <i class="fas fa-quote-left text-4xl"></i>
                         </div>
                         <div class="absolute bottom-4 right-4 text-gray-600 opacity-20">
                             <i class="fas fa-quote-right text-4xl"></i>
                         </div>

                         <div class="relative z-10">
                             <p class="text-gray-300 italic mb-6">{{ $testimonial['content'] }}</p>

                             <div class="flex items-center">
                                 <div class="w-12 h-12 rounded-full overflow-hidden bg-gray-600 mr-4">
                                     <img src="{{ $testimonial['avatar'] }}" alt="Hasan" class="w-full h-full object-cover">
                                 </div>
                                 <div>
                                     <h4 class="text-white font-medium">{{ $testimonial['author'] }}</h4>
                                     <p class="text-gray-400 text-sm">{{ $testimonial['position'] }}</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     @empty
                         <div class="col-span-full py-8 text-center text-gray-400">
                              <i class="fas fa-comment-dots text-3xl mb-3"></i>
                             <p>No testimonials available yet.</p>
                         </div>
                     @endforelse
                 </div>
             </div>
        </div>

        {{-- // 9. Contact Tab --}}
        <div id="content-contact" class="tab-content mt-6 hidden">
             <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                 <div class="bg-gray-800 rounded-lg p-6 space-y-6">
                     <h2 class="text-xl font-semibold text-white mb-4">Get In Touch</h2>

                     <p class="text-gray-300">Have a project in mind, a question about my work, or just want to connect? Feel free to reach out through the form or the channels below.</p>

                     <div class="space-y-4">
                         <div class="flex items-center text-gray-300">
                             <i class="fas fa-envelope text-blue-400 mr-3 text-lg"></i>
                             <span>alphrenoorz@gmail.com</span>
                         </div>
                          <div class="flex items-center text-gray-300">
                             <i class="fas fa-phone-alt text-blue-400 mr-3 text-lg"></i>
                             <span>081331296965</span>
                         </div>
                         <div class="flex items-center text-gray-300">
                             <i class="fas fa-map-marker-alt text-blue-400 mr-3 text-lg"></i>
                             <span>Kyoto, Japan.</span>
                         </div>
                     </div>

                     <div class="mt-6 pt-6 border-t border-gray-700">
                         <h3 class="text-lg font-medium text-white mb-3">Connect on Social Media</h3>
                          <div class="flex gap-4">
                             <a href="{{ $user->github_url ?? '#' }}" target="_blank" class="text-gray-400 hover:text-blue-400 transition">
                                 <i class="fab fa-github text-2xl"></i>
                             </a>
                              <a href="{{ $user->twitter_url ?? '#' }}" target="_blank" class="text-gray-400 hover:text-blue-400 transition">
                                 <i class="fab fa-twitter text-2xl"></i>
                             </a>
                              <a href="{{ $user->linkedin_url ?? '#' }}" target="_blank" class="text-gray-400 hover:text-blue-400 transition">
                                 <i class="fab fa-linkedin text-2xl"></i>
                             </a>
                             <a href="https://tokoeno.vercel.app" target="_blank" class="text-gray-400 hover:text-blue-400 transition">
                                 <i class="fas fa-globe text-2xl"></i>
                             </a>
                          </div>
                     </div>
                 </div>

                 <div class="bg-gray-800 rounded-lg p-6">
                     <h2 class="text-xl font-semibold text-white mb-6">Send Me a Message</h2>

                     <form id="contactForm" action="#" method="POST"> 
                         @csrf 
                         <div class="mb-4">
                             <label for="contactName" class="block text-gray-400 text-sm font-medium mb-2">Name</label>
                             <input type="text" id="contactName" name="name" required
                                    class="w-full px-4 py-2 rounded-md bg-gray-700 text-white border border-gray-600 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                         </div>
                          <div class="mb-4">
                             <label for="contactEmail" class="block text-gray-400 text-sm font-medium mb-2">Email</label>
                             <input type="email" id="contactEmail" name="email" required
                                    class="w-full px-4 py-2 rounded-md bg-gray-700 text-white border border-gray-600 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                         </div>
                          <div class="mb-4">
                             <label for="contactSubject" class="block text-gray-400 text-sm font-medium mb-2">Subject (Optional)</label>
                             <input type="text" id="contactSubject" name="subject"
                                    class="w-full px-4 py-2 rounded-md bg-gray-700 text-white border border-gray-600 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                         </div>
                         <div class="mb-6">
                             <label for="contactMessage" class="block text-gray-400 text-sm font-medium mb-2">Message</label>
                             <textarea id="contactMessage" name="message" rows="5" required
                                       class="w-full px-4 py-2 rounded-md bg-gray-700 text-white border border-gray-600 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></textarea>
                         </div>
                         <div>
                             <button type="submit"
                                     class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition flex items-center justify-center gap-2 w-full">
                                 <i class="fas fa-paper-plane"></i>
                                 <span>Send Message</span>
                             </button>
                         </div>
                     </form>
                 </div>
             </div>
        </div>
         <div class="mt-6 hidden"> 
              <div class="bg-gray-800 rounded-lg p-6 flex flex-col items-center text-center">
                 <div class="w-16 h-16 rounded-full bg-blue-900 bg-opacity-50 flex items-center justify-center mb-4">
                     <i class="fas fa-file-pdf text-2xl text-blue-400"></i>
                 </div>
                 <h3 class="text-white font-medium mb-2">Download / Print Resume</h3>
                 <p class="text-gray-400 text-sm mb-4">Get a complete overview of my experience and skills in PDF format or print this page.</p>
                 <button id="printResume" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition flex items-center gap-2 shadow-blue">
                     <i class="fas fa-print"></i>
                     <span>Print</span>
                 </button>
             </div>
         </div>


    </div> 
</div>
        
       
        <script>
            // Tab Switching Functionality
            function switchTab(tabId) {
                // Hide all tab content
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.add('hidden');
                });

                // Show selected tab content with animation
                const selectedTab = document.getElementById('content-' + tabId);
                if (selectedTab) {
                    selectedTab.classList.remove('hidden');
                    selectedTab.classList.add('fade-in-animation');
                    // Menghapus kelas animasi setelah selesai untuk memungkinkan animasi ulang
                    setTimeout(() => selectedTab.classList.remove('fade-in-animation'), 500);
                }

                // Update tab button styles
                document.querySelectorAll('.tab-button').forEach(button => {
                    button.classList.remove('text-white', 'border-b-2', 'border-blue-500');
                    button.classList.add('text-gray-400', 'hover:text-gray-200');
                });

                // Apply active styles to clicked tab
                const activeTabButton = document.getElementById('tab-' + tabId);
                if (activeTabButton) {
                    activeTabButton.classList.remove('text-gray-400', 'hover:text-gray-200');
                    activeTabButton.classList.add('text-white', 'border-b-2', 'border-blue-500');
                }

                localStorage.setItem('selectedProfileTab', tabId);
            }

            // Cover Photo Parallax Effect
            function handleParallax() {
                const coverPhoto = document.querySelector('.cover-parallax');
                if (coverPhoto) {
                    window.addEventListener('scroll', () => {
                        const scrollPosition = window.scrollY;
                        if (scrollPosition < 500) { 
                            const translateY = scrollPosition * 0.2;
                            coverPhoto.style.transform = `scale(1.1) translateY(${translateY}px)`;
                        } else {
                            coverPhoto.style.transform = `scale(1.1) translateY(0px)`;
                        }
                    });
                }
            }

            // Skills Animation on Scroll
            function initSkillsAnimation() {
                 const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('skill-animate-active');
                        } else {
                        }
                    });
                }, { threshold: 0.2 }); // threshold: persentase elemen yang terlihat untuk memicu

                document.querySelectorAll('.skill-animate').forEach(skill => {
                    observer.observe(skill);
                });
            }

            function initTestimonialCarousel() {
                const testimonials = document.querySelectorAll('.testimonial-item');
                if (testimonials.length > 1) {
                    let currentTestimonial = 0;
                    testimonials.forEach((item, index) => {
                        if (index !== 0) item.classList.add('hidden');
                    });

                    setInterval(() => {
                        testimonials[currentTestimonial].classList.add('hidden');
                        currentTestimonial = (currentTestimonial + 1) % testimonials.length;
                        testimonials[currentTestimonial].classList.remove('hidden');
                        testimonials[currentTestimonial].classList.add('fade-in-animation'); // Ensure fade-in-animation CSS exists
                        setTimeout(() => testimonials[currentTestimonial].classList.remove('fade-in-animation'), 500);
                    }, 5000); // Change testimonial every 5 seconds
                }
            }

            function initProjectFilter() {
                const filterButtons = document.querySelectorAll('.project-filter-btn');
                const projectCards = document.querySelectorAll('.project-card');

                filterButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const filter = button.getAttribute('data-filter');

                        filterButtons.forEach(btn => btn.classList.remove('bg-blue-600', 'text-white', 'bg-gray-700'));
                         button.classList.remove('text-gray-300', 'hover:bg-gray-650');
                        button.classList.add('bg-blue-600', 'text-white');
                         filterButtons.forEach(btn => {
                             if (!btn.classList.contains('bg-blue-600')) {
                                 btn.classList.add('bg-gray-700');
                             }
                         });

                        projectCards.forEach(card => {
                            const categories = card.getAttribute('data-categories') ? card.getAttribute('data-categories').split(',') : [];

                            if (filter === 'all' || categories.includes(filter)) {
                                card.style.display = 'block'; 
                                card.classList.remove('scale-out-animation', 'opacity-0');
                                card.classList.add('scale-in-animation', 'opacity-100');
                                setTimeout(() => card.classList.remove('scale-in-animation'), 300);
                            } else {
                                card.classList.remove('scale-in-animation', 'opacity-100');
                                card.classList.add('scale-out-animation', 'opacity-0');
                                setTimeout(() => {
                                    card.style.display = 'none'; 
                                    card.classList.remove('scale-out-animation'); 
                                }, 300);
                            }
                        });
                    });
                });

                const initialFilterButton = document.querySelector('.project-filter-btn[data-filter="all"]');
                 if(initialFilterButton) {
                     initialFilterButton.classList.remove('text-gray-300', 'hover:bg-gray-650', 'bg-gray-700');
                     initialFilterButton.classList.add('bg-blue-600', 'text-white');
                 }
                 projectCards.forEach(card => { card.style.display = 'block'; card.classList.add('opacity-100'); });
            }


            // Activity Chart Initialization (requires Chart.js library and #activityChart canvas)
            function initActivityChart() {
                 // Check if Chart is defined (library loaded)
                if (typeof Chart === 'undefined') {
                    console.error("Chart.js library not found. Cannot initialize activity chart.");
                    return; // Stop function execution if library is missing
                }
                const ctx = document.getElementById('activityChart');
                if (ctx) {
                    const contributionData = <?php echo json_encode($contributions); ?>; // Ensure this PHP variable is passed correctly
                    const labels = contributionData.map(item => item.month);
                    const data = contributionData.map(item => item.count);

                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Contributions',
                                data: data,
                                backgroundColor: 'rgba(59, 130, 246, 0.2)',
                                borderColor: 'rgba(59, 130, 246, 1)',
                                borderWidth: 2,
                                tension: 0.4,
                                fill: true,
                                pointBackgroundColor: 'rgba(59, 130, 246, 1)',
                                pointRadius: 4,
                                pointHoverRadius: 6,
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false, // Allow aspect ratio to be controlled by parent container
                            plugins: {
                                legend: {
                                    display: false
                                },
                                tooltip: {
                                    backgroundColor: 'rgba(17, 24, 39, 0.9)',
                                    titleColor: '#fff',
                                    bodyColor: '#e5e7eb',
                                    titleFont: {
                                        size: 14,
                                        weight: 'bold'
                                    },
                                    bodyFont: {
                                        size: 12
                                    },
                                    padding: 12,
                                    displayColors: false,
                                    callbacks: {
                                        title: function(context) {
                                            // Assuming contributions are for the current year
                                            const currentYear = new Date().getFullYear();
                                            return context[0].label + ' ' + currentYear;
                                        },
                                        label: function(context) {
                                            return context.raw + ' contributions';
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    grid: {
                                        display: false,
                                        drawBorder: false
                                    },
                                    ticks: {
                                        color: '#9ca3af'
                                    }
                                },
                                y: {
                                    beginAtZero: true,
                                     // Suggestive maximum based on data range, can be dynamic
                                    suggestedMax: Math.max(...data) + 10, 
                                    grid: {
                                        color: 'rgba(156, 163, 175, 0.1)',
                                        drawBorder: false
                                    },
                                    ticks: {
                                        color: '#9ca3af',
                                        padding: 10
                                    }
                                }
                            }
                        }
                    });
                }
                // else { console.log("Activity chart not initialized: #activityChart canvas not found."); }
            }

            // Dark Mode Toggle (requires #darkModeToggle button)
            function initDarkModeToggle() {
                const darkModeToggle = document.getElementById('darkModeToggle');
                if (darkModeToggle) {
                    // Check for existing click listener to avoid duplicates if called multiple times
                     if(darkModeToggle.dataset.listenerAdded) return;

                    darkModeToggle.addEventListener('click', () => {
                        document.documentElement.classList.toggle('dark-mode'); // Requires dark-mode CSS
                        const isDarkMode = document.documentElement.classList.contains('dark-mode');
                        localStorage.setItem('darkMode', isDarkMode ? 'enabled' : 'disabled');

                        // Update icon
                        darkModeToggle.innerHTML = isDarkMode ?
                            '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
                    });

                    // Mark listener as added
                    darkModeToggle.dataset.listenerAdded = 'true';

                    // Set initial state from localStorage on load
                    if (localStorage.getItem('darkMode') === 'enabled') {
                        document.documentElement.classList.add('dark-mode');
                        darkModeToggle.innerHTML = '<i class="fas fa-sun"></i>';
                    } else {
                         // Ensure sun icon is shown by default if not dark mode
                         darkModeToggle.innerHTML = '<i class="fas fa-moon"></i>';
                    }
                }
            }

            // Notifications Panel (requires #notificationBtn and #notificationPanel elements)
            function initNotifications() {
                const notificationBtn = document.getElementById('notificationBtn');
                const notificationPanel = document.getElementById('notificationPanel');

                if (notificationBtn && notificationPanel) {
                     // Check for existing click listener
                     if(notificationBtn.dataset.listenerAdded) return;

                    notificationBtn.addEventListener('click', (e) => {
                        e.stopPropagation(); // Prevent click from closing immediately
                        notificationPanel.classList.toggle('hidden');

                        if (!notificationPanel.classList.contains('hidden')) {
                            // Animate notifications in (requires slide-in-animation CSS)
                            const notifications = notificationPanel.querySelectorAll('.notification-item');
                            notifications.forEach((item, index) => {
                                 item.classList.remove('slide-in-animation', 'opacity-0'); // Remove any previous animation classes
                                 // Use a small delay to ensure animation triggers
                                setTimeout(() => {
                                    item.classList.add('slide-in-animation');
                                }, index * 50); // Stagger animation slightly
                            });
                        }
                    });

                     // Mark listener as added
                    notificationBtn.dataset.listenerAdded = 'true';

                    // Close panel when clicking outside
                    document.addEventListener('click', (e) => {
                        // Close if clicking anywhere EXCEPT the button or the panel itself
                        if (!notificationPanel.classList.contains('hidden') && !notificationPanel.contains(e.target) && e.target !== notificationBtn && !notificationBtn.contains(e.target)) {
                             notificationPanel.classList.add('hidden');
                         }
                    });
                }
                 // else { console.log("Notifications not initialized: missing #notificationBtn or #notificationPanel."); }
            }
            function initContactForm() {
                 // console.log("initContactForm called"); // Debugging line
                const contactForm = document.getElementById('contactForm');
                if (contactForm) {
                     // Check for existing submit listener
                    if(contactForm.dataset.listenerAdded) return;

                    contactForm.addEventListener('submit', (e) => {
                        e.preventDefault();

                        // Basic form validation
                        let isValid = true;
                        const name = document.getElementById('contactName');
                        const email = document.getElementById('contactEmail');
                        const message = document.getElementById('contactMessage');

                        // Reset errors
                        document.querySelectorAll('.error-message').forEach(el => el.remove());
                        // Remove error borders
                         document.querySelectorAll('#contactForm input, #contactForm textarea').forEach(field => {
                             field.classList.remove('border-red-500');
                         });


                        // Validate name
                        if (!name || !name.value.trim()) { // Check if element exists before accessing value
                            isValid = false;
                            if (name) showErrorMessage(name, 'Name is required');
                        }

                        // Validate email
                         const emailValue = email ? email.value.trim() : '';
                        if (!email || emailValue === '' || !isValidEmail(emailValue)) { // Check element existence
                            isValid = false;
                             if (email) showErrorMessage(email, 'Valid email is required');
                        }

                        // Validate message
                         if (!message || !message.value.trim()) { // Check element existence
                            isValid = false;
                             if (message) showErrorMessage(message, 'Message is required');
                        }

                        // If form is valid, show success message (this is a simulation)
                        if (isValid) {
                            const submitBtn = contactForm.querySelector('button[type="submit"]');
                             if (submitBtn) { // Check if submit button exists
                                const originalText = submitBtn.innerHTML;

                                // Show loading state
                                submitBtn.disabled = true;
                                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Sending...';

                                // Simulate form submission
                                setTimeout(() => {
                                    contactForm.reset();
                                    submitBtn.disabled = false;
                                    submitBtn.innerHTML = originalText;

                                    const successMessage = document.createElement('div');
                                    successMessage.className = 'mt-4 bg-green-900 bg-opacity-30 text-green-400 p-4 rounded-md text-center';
                                    successMessage.innerHTML = '<i class="fas fa-check-circle mr-2"></i>Your message has been sent successfully!';
                                    contactForm.appendChild(successMessage);

                                    setTimeout(() => {
                                        successMessage.classList.add('fade-out-animation'); // Requires fade-out-animation CSS
                                        setTimeout(() => successMessage.remove(), 500);
                                    }, 5000);
                                }, 1500);
                             }
                        }
                    });

                     // Mark listener as added
                    contactForm.dataset.listenerAdded = 'true';
                }

                function showErrorMessage(element, message) {
                    if (!element) return;
                    const errorDiv = document.createElement('div');
                    errorDiv.className = 'error-message text-red-500 text-sm mt-1'; 
                    errorDiv.innerHTML = `<i class="fas fa-exclamation-circle mr-1"></i>${message}`;
                    element.parentNode.appendChild(errorDiv);
                    element.classList.add('border-red-500'); 

                    element.addEventListener('input', () => {
                        const error = element.parentNode.querySelector('.error-message');
                        if (error) error.remove();
                        element.classList.remove('border-red-500');
                    }, { once: true });
                }

                function isValidEmail(email) {
                    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    return re.test(email);
                }
            }

            function loadInitialTab() {
                const hash = window.location.hash.substring(1);
                const savedTab = localStorage.getItem('selectedProfileTab');

                const tabToLoad = hash || savedTab || 'overview'; 
                 const defaultTabContent = document.getElementById('content-' + tabToLoad);
                 if (defaultTabContent) {
                     switchTab(tabToLoad);
                 } else {
                     switchTab('overview');
                 }
            }
            function renderContributionCalendar(data) {
                const calendarContainer = document.getElementById('contributionCalendar');
                if (!calendarContainer) return;

                 calendarContainer.innerHTML = '';

                const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                const monthLabels = document.createElement('div');
                monthLabels.className = 'grid grid-cols-12 text-xs text-gray-500 pl-6 mb-1';
                 const monthWidth = (100 / 12) + '%';
                 months.forEach(month => {
                     const label = document.createElement('span');
                     label.classList.add('text-center');
                     label.textContent = month;
                     label.style.minWidth = '30px'; 
                     label.style.textAlign = 'left';
                     monthLabels.appendChild(label);
                 });
                calendarContainer.appendChild(monthLabels);
                 const daysOfWeekLabels = document.createElement('div');
                 daysOfWeekLabels.className = 'grid grid-rows-7 gap-1 text-xs text-gray-500 pr-1';
                 daysOfWeekLabels.innerHTML = `
                     <div class="h-3 flex items-center justify-end"></div>
                     <div class="h-3 flex items-center justify-end">Mon</div>
                     <div class="h-3 flex items-center justify-end"></div>
                     <div class="h-3 flex items-center justify-end">Wed</div>
                     <div class="h-3 flex items-center justify-end"></div>
                     <div class="h-3 flex items-center justify-end">Fri</div>
                     <div class="h-3 flex items-center justify-end"></div>
                 `;


                const grid = document.createElement('div');
                grid.className = 'grid grid-flow-col grid-rows-7 gap-[2px]'; 
                 const totalDays = 365;
                 for (let i = 0; i < totalDays; i++) {
                     const cell = document.createElement('div');
                     cell.className = 'w-3.5 h-3.5 rounded-sm'; 

                     const activityCount = Math.floor(Math.random() * 10); 
                     if (activityCount === 0) {
                         cell.classList.add('bg-gray-700');
                     } else if (activityCount <= 2) { 
                         cell.classList.add('bg-green-900');
                     } else if (activityCount <= 4) {
                         cell.classList.add('bg-green-800');
                     } else if (activityCount <= 6) { 
                         cell.classList.add('bg-green-600'); 
                     } else if (activityCount <= 8) { 
                          cell.classList.add('bg-green-500'); 
                     } else { 
                         cell.classList.add('bg-green-400'); 
                     }
                     const date = new Date();
                     date.setDate(date.getDate() - (totalDays - 1 - i)); // Approximate date backwards
                     const dateString = date.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
                     cell.setAttribute('data-tooltip', `${activityCount} contributions on ${dateString}`);


                     grid.appendChild(cell);
                 }

                 const gridWrapper = document.createElement('div');
                 gridWrapper.className = 'flex pl-6'; // Flex container

                 gridWrapper.appendChild(daysOfWeekLabels); 
                 gridWrapper.appendChild(grid); 

                calendarContainer.appendChild(gridWrapper); 


                // Add legend
                const legend = document.createElement('div');
                legend.className = 'flex items-center justify-end mt-2 text-xs text-gray-400';
                legend.innerHTML = `
                    <span class="mr-2">Less</span>
                    <div class="w-3 h-3 rounded-sm bg-gray-700 mr-1"></div>
                    <div class="w-3 h-3 rounded-sm bg-green-900 mr-1"></div>
                    <div class="w-3 h-3 rounded-sm bg-green-800 mr-1"></div>
                    <div class="w-3 h-3 rounded-sm bg-green-600 mr-1"></div>
                    <div class="w-3 h-3 rounded-sm bg-green-500 mr-1"></div>
                    <span class="ml-1">More</span>
                `;
                calendarContainer.appendChild(legend);
            }
            function initLanguageChart() {
                 // Check if Chart is defined (library loaded)
                 if (typeof Chart === 'undefined') {
                    console.error("Chart.js library not found. Cannot initialize language chart.");
                    return; 
                 }
                const languageCtx = document.getElementById('languageChart');
                if (languageCtx) {
                    if (languageCtx.chart) {
                        languageCtx.chart.destroy();
                    }

                    const languageData = {
                        labels: ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'SQL', 'Other'],
                        datasets: [{
                            data: [45, 30, 12, 8, 3, 2], 
                            backgroundColor: [
                                'rgba(79, 70, 229, 0.8)', 
                                'rgba(245, 158, 11, 0.8)', 
                                'rgba(239, 68, 68, 0.8)',
                                'rgba(16, 185, 129, 0.8)', 
                                'rgba(107, 114, 128, 0.8)',
                                'rgba(59, 130, 246, 0.8)' 
                            ],
                            borderWidth: 0,
                            hoverOffset: 8 
                        }]
                    };

                    languageCtx.chart = new Chart(languageCtx, {
                        type: 'doughnut',
                        data: languageData,
                        options: {
                            responsive: true,
                             maintainAspectRatio: false, 
                            cutout: '70%',
                            plugins: {
                                legend: {
                                    position: 'right',
                                    labels: {
                                        color: '#9ca3af', // Tailwind gray-400
                                        padding: 15,
                                        usePointStyle: true,
                                        pointStyle: 'circle',
                                        font: {
                                            size: 12
                                        }
                                    }
                                },
                                tooltip: {
                                    backgroundColor: 'rgba(17, 24, 39, 0.9)', 
                                    titleColor: '#fff',
                                    bodyColor: '#e5e7eb', 
                                    titleFont: {
                                        size: 14,
                                        weight: 'bold'
                                    },
                                    bodyFont: {
                                        size: 12
                                    },
                                    padding: 12,
                                    callbacks: {
                                        label: function(context) {
                                            // context.raw gives the data value
                                            return context.label + ': ' + context.raw + '%';
                                        }
                                    }
                                }
                            },
                             hover: {
                                mode: 'nearest',
                                intersect: true
                             },
                            animation: {
                                animateScale: true,
                                animateRotate: true,
                                duration: 1500, 
                                easing: 'easeOutQuart' 
                            }
                        }
                    });
                }
            }
            function initMasonryLayout() {
                if (typeof Isotope === 'undefined') {
                    console.error("Isotope.js library not found. Cannot initialize masonry layout.");
                    return;
                 }
                const projectGrid = document.querySelector('.project-grid');
                if (projectGrid) {
                     imagesLoaded( projectGrid, function() {
                        const iso = new Isotope(projectGrid, {
                            itemSelector: '.project-card',
                            percentPosition: true,
                            layoutMode: 'masonry',
                            masonry: {
                                columnWidth: '.project-card'
                            },
                            animationOptions: {
                                duration: 750,
                                easing: 'linear', 
                                queue: false
                            }
                        });
                     });
                    const projectImages = document.querySelectorAll('.project-image');
                    if ('IntersectionObserver' in window) {
                        const imageObserver = new IntersectionObserver((entries) => {
                            entries.forEach(entry => {
                                if (entry.isIntersecting) {
                                    const img = entry.target;
                                    const src = img.getAttribute('data-src');
                                     if (src) { 
                                        img.setAttribute('src', src);
                                         img.addEventListener('load', () => {
                                             if (iso) iso.layout();
                                         });
                                        img.classList.add('opacity-100'); 
                                    }
                                    imageObserver.unobserve(img);
                                }
                            });
                        }, { threshold: 0.1 });

                        projectImages.forEach(img => {
                            imageObserver.observe(img);
                        });
                    } else {
                        projectImages.forEach(img => {
                            const src = img.getAttribute('data-src');
                             if (src) {
                                img.setAttribute('src', src);
                                img.classList.add('opacity-100');
                             }
                        });
                    }
                }
            }
            function initScrollAnimations() {
                const animatedElements = document.querySelectorAll('.animate-on-scroll');

                 if (animatedElements.length === 0) {
                     return;
                 }

                if ('IntersectionObserver' in window) {
                    const scrollObserver = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('animate-active'); 
                                 scrollObserver.unobserve(entry.target);
                            }
                        });
                    }, { threshold: 0.2 }); 

                    animatedElements.forEach(element => {
                        scrollObserver.observe(element);
                    });
                } else {
                    animatedElements.forEach(element => {
                        element.classList.add('animate-active');
                    });
                }
            }

            function initProjectModals() {
                const projectLinks = document.querySelectorAll('.project-modal-trigger');
                const modalOverlay = document.getElementById('modalOverlay');
                const modalContent = document.getElementById('modalContent');
                const closeModal = document.getElementById('closeModal');

                if (projectLinks.length && modalOverlay && modalContent && closeModal) {
                     if(modalOverlay.dataset.listenerAdded) return;

                    projectLinks.forEach(link => {
                        link.addEventListener('click', (e) => {
                            e.preventDefault();

                            const projectId = link.getAttribute('data-project-id');
                             const projectData = getProjectData(projectId);


                            if (projectData) {
                                populateModal(projectData); 
                                modalOverlay.classList.remove('hidden');
                                setTimeout(() => {
                                    modalOverlay.classList.add('opacity-100');
                                    modalContent.classList.add('scale-100', 'opacity-100');
                                }, 50); 
                            }
                        });
                    });

                    closeModal.addEventListener('click', hideModal);

                    modalOverlay.addEventListener('click', (e) => {
                        if (e.target === modalOverlay) {
                            hideModal();
                        }
                    });
                    document.addEventListener('keydown', (e) => {
                        if (e.key === 'Escape' && !modalOverlay.classList.contains('hidden')) {
                            hideModal();
                        }
                    });
                    modalOverlay.dataset.listenerAdded = 'true';

                }
                function hideModal() {
                     // Animate out
                    modalContent.classList.remove('scale-100', 'opacity-100');
                    modalContent.classList.add('scale-95', 'opacity-0'); 

                    modalOverlay.classList.remove('opacity-100');
                     modalOverlay.classList.add('opacity-0');
                    setTimeout(() => {
                         modalOverlay.classList.add('hidden');
                         modalContent.classList.remove('scale-95', 'opacity-0'); 
                    }, 300); 
                }

                function populateModal(project) {
                    const modalTitle = modalContent.querySelector('.modal-title');
                    const modalSubtitle = modalContent.querySelector('.modal-subtitle');
                    const modalDescription = modalContent.querySelector('.modal-description');
                    const modalImage = modalContent.querySelector('.modal-image'); 
                    const techContainer = modalContent.querySelector('.modal-technologies'); 
                    const demoLink = modalContent.querySelector('.demo-link'); 
                    const codeLink = modalContent.querySelector('.code-link'); 


                     if(modalTitle) modalTitle.textContent = project.title || 'N/A';
                     if(modalSubtitle) modalSubtitle.textContent = project.client || '';
                     if(modalDescription) modalDescription.textContent = project.description || 'No description available.';

                     if(modalImage) {
                        modalImage.src = project.image || ''; 
                        modalImage.alt = project.title || 'Project image';
                     }


                     if(techContainer) {
                         techContainer.innerHTML = '';
                         if(project.technologies && Array.isArray(project.technologies)) {
                             project.technologies.forEach(tech => {
                                 const techBadge = document.createElement('span');
                                 techBadge.className = 'px-3 py-1 bg-blue-900 bg-opacity-40 text-blue-400 rounded-full text-xs';
                                 techBadge.textContent = tech;
                                 techContainer.appendChild(techBadge);
                             });
                         }
                     }


                     if(demoLink) {
                         if (project.demoUrl) {
                             demoLink.href = project.demoUrl;
                             demoLink.classList.remove('hidden');
                         } else {
                             demoLink.classList.add('hidden');
                         }
                     }

                     if(codeLink) {
                         if (project.codeUrl) {
                             codeLink.href = project.codeUrl;
                             codeLink.classList.remove('hidden');
                         } else {
                             codeLink.classList.add('hidden');
                         }
                     }
                }

                function getProjectData(projectId) {
                    const mockProjects = {
                         '1': { title: 'E-commerce Platform', client: 'TechRetail Inc.', description: 'A full-featured e-commerce platform...', image: '/images/projects/project1.jpg', technologies: ['Laravel', 'Next.js'], demoUrl: '#', codeUrl: '#' },
                         '2': { title: 'Task Management System', client: 'ProductivePro', description: 'A collaborative task management...', image: '/images/projects/project2.jpg', technologies: ['Node.js', 'React'], demoUrl: '#', codeUrl: '#' },
                         // Add mock data for other projects if needed
                    };
                    return mockProjects[projectId];
                }
            }
            document.addEventListener('DOMContentLoaded', function() {
                console.log('DOM fully loaded and parsed. Initializing profile...');
                renderContributionCalendar();
                loadInitialTab();
                handleParallax(); 
                initSkillsAnimation(); 
                document.querySelectorAll('.tab-button').forEach(button => {
                    button.addEventListener('click', function(e) {
                        e.preventDefault(); 
                        const tabId = this.id.replace('tab-', ''); 
                        switchTab(tabId);

                        const tabContent = document.getElementById('content-' + tabId);
                        if (tabContent) {
                            const offsetTop = tabContent.offsetTop - (document.querySelector('.sticky.top-0')?.offsetHeight || 0);
                            window.scrollTo({
                                top: offsetTop,
                                behavior: 'smooth'
                            });
                        }
                    });
                });
                setTimeout(() => {
                     initActivityChart(); 
                     initLanguageChart();
                }, 500); 
                document.querySelectorAll('[data-tooltip]').forEach(element => {
                    if(element.dataset.tooltipListenerAdded) return;

                    const tooltipText = element.getAttribute('data-tooltip');
                    if (!tooltipText) return;

                    const tooltip = document.createElement('div');
                    tooltip.className = 'tooltip hidden absolute z-50 bg-gray-900 text-white text-xs rounded py-1 px-2 transform -translate-x-1/2 transition-opacity duration-300 opacity-0 pointer-events-none';
                    tooltip.textContent = tooltipText;
                    document.body.appendChild(tooltip); 


                    const showTooltip = () => {
                         const rect = element.getBoundingClientRect();
                         tooltip.style.left = rect.left + rect.width / 2 + 'px';
                         tooltip.style.top = rect.bottom + window.scrollY + 5 + 'px';
                        const tooltipRect = tooltip.getBoundingClientRect();
                        if (tooltipRect.left < 0) {
                            tooltip.style.left = rect.left + 'px'; 
                            tooltip.style.transform = 'translateX(0)'; 
                        } else if (tooltipRect.right > window.innerWidth) {
                             tooltip.style.left = rect.right + 'px';
                             tooltip.style.transform = 'translateX(-100%)'; 
                        } else {
                             tooltip.style.left = rect.left + rect.width / 2 + 'px';
                             tooltip.style.transform = 'translateX(-50%)';
                         }
                         tooltip.classList.remove('hidden');
                         setTimeout(() => {
                             tooltip.classList.add('opacity-100');
                             tooltip.classList.remove('opacity-0');
                         }, 10);
                     };
                    const hideTooltip = () => {
                        tooltip.classList.add('opacity-0');
                        tooltip.classList.remove('opacity-100');
                        setTimeout(() => tooltip.classList.add('hidden'), 300); 
                    };
                     element.addEventListener('mouseenter', showTooltip);
                    element.addEventListener('mouseleave', hideTooltip);
                    window.addEventListener('scroll', hideTooltip);
                    element.dataset.tooltipListenerAdded = 'true';
                });

                console.log('Developer profile scripts initialized.');
            });

        </script>
    @endsection