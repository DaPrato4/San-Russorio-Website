<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class()  ?>>

    <?php if (!is_404()) { ?>
        <header class="bg-white shadow-md py-4 px-6 sticky top-0 z-50">
            <div class="container mx-auto flex items-center justify-between">
            <!-- Logo a sinistra -->
            <div class="flex items-center">
                <a href="/" class="text-primary font-bold text-2xl">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_San_Russorio.png" alt="San Russorio B&B"
                    class="h-14 w-auto rounded-lg shadow-md transition-transform duration-200 hover:scale-95 active:scale-90">
                </a>
            </div>

            <!-- Navigazione al centro -->
            <nav class="hidden md:block">
                <ul class="flex space-x-8">
                <li>
                    <a href="/"
                    class="text-gray-800 hover:text-primary font-semibold text-xl transition-colors duration-200 relative group">
                    Il B&B
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-200 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="/rooms"
                    class="text-gray-800 hover:text-primary font-semibold text-xl transition-colors duration-200 relative group">
                    Le Camere
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-200 group-hover:w-full"></span>
                    </a>
                </li>
                </ul>
            </nav>

            <!-- Contact button with smooth hover animation (hidden on mobile) -->
            <div class="hidden md:block">
                <a href="/contact" class="inline-block px-6 py-3 bg-primary text-white font-medium rounded-lg shadow-md transition-all duration-300 ease-in-out hover:bg-primary-dark hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 active:shadow-md focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50">
                Contattaci
                </a>
            </div>


            <!-- Pulsante menu mobile (nascosto su desktop) -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                </button>
            </div>
            </div>
            <!-- Mobile menu (hidden by default) -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 bg-white rounded-lg shadow-lg mx-4 transform transition-all duration-300 ease-in-out">
            <ul class="divide-y divide-gray-100">
                <li class="group">
                <a href="/" class="flex items-center text-gray-700 hover:text-primary hover:bg-gray-50 font-medium text-lg px-6 py-4 transition-all duration-200">
                    <span class="relative">
                    Il B&B
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-200 group-hover:w-full"></span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                </li>
                <li class="group">
                <a href="/rooms" class="flex items-center text-gray-700 hover:text-primary hover:bg-gray-50 font-medium text-lg px-6 py-4 transition-all duration-200">
                    <span class="relative">
                    Le Camere
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-200 group-hover:w-full"></span>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 opacity-0 group-hover:opacity-100 transform translate-x-0 group-hover:translate-x-1 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                </li>
                <li>
                <a href="/contact" class="flex items-center justify-center bg-primary text-white font-medium text-lg px-6 py-4 mt-2 mx-4 rounded-lg shadow-md transition-all duration-300 hover:bg-primary-dark hover:shadow-lg active:transform active:scale-95">
                    Contattaci
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </a>
                </li>
            </ul>
            </div>
        </header>

    <?php } ?>