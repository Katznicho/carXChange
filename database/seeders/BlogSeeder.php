<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'Sticker-Tape Parade: Mercedes Announces 2026 AMG CLE53 Manufaktur Editions',
                'excerpt' => 'Mercedes-Benz reveals its latest masterpiece - the 2026 AMG CLE53 Manufaktur Edition, combining luxury with unprecedented performance.',
                'content' => "Mercedes-Benz has unveiled its latest creation, the 2026 AMG CLE53 Manufaktur Edition, showcasing the pinnacle of automotive luxury and performance. This special edition model represents a perfect fusion of traditional craftsmanship and modern technology.

The AMG CLE53 Manufaktur Edition features a hand-crafted interior, exclusive paint options, and enhanced performance capabilities. The vehicle's exterior design maintains the elegant Mercedes-AMG styling while incorporating unique Manufaktur elements that set it apart from the standard models.

Key Features:
- Enhanced 3.0-liter inline-six engine
- AMG SPEEDSHIFT transmission
- Exclusive Manufaktur interior trim options
- Advanced driver assistance systems
- Limited production numbers

This special edition demonstrates Mercedes-Benz's commitment to pushing the boundaries of automotive excellence while maintaining its legacy of luxury and innovation.",
            ],
            [
                'title' => 'The Evolution of Electric Vehicles: A New Era in Automotive Industryyyy',
                'excerpt' => 'Exploring how electric vehicles are reshaping the automotive landscape and what the future holds for sustainable transportation.',
                'content' => "The automotive industry is undergoing a revolutionary transformation with the rise of electric vehicles (EVs). This shift represents more than just a change in powertrain technology; it's a complete reimagining of what mobility means in the modern world.

Current Trends:
- Increased range capabilities
- Faster charging technologies
- Enhanced battery longevity
- Improved performance metrics
- Greater affordability

The Future of EVs:
- Solid-state batteries
- Autonomous driving integration
- Solar charging capabilities
- Vehicle-to-grid technology
- Sustainable manufacturing processes

As we move forward, electric vehicles continue to prove that sustainable transportation doesn't mean compromising on performance or luxury.",
            ],
            [
                'title' => 'Maintenance Tips: Keeping Your Luxury Car in Prime Conditionnnn',
                'excerpt' => 'Essential maintenance tips and best practices for preserving the value and performance of your luxury vehicle.',
                'content' => "Maintaining a luxury vehicle requires attention to detail and regular care. Here's a comprehensive guide to keeping your premium car in excellent condition.

Essential Maintenance Tips:
1. Regular Oil Changes
- Use manufacturer-recommended oil
- Maintain proper change intervals
- Keep detailed service records

2. Tire Care
- Regular rotation and alignment
- Proper inflation
- Seasonal tire changes

3. Interior Care
- Use appropriate cleaning products
- Protect leather surfaces
- Regular detailing

4. Paint Protection
- Regular washing and waxing
- Ceramic coating consideration
- Garage storage when possible

Following these guidelines will help maintain your vehicle's value and ensure optimal performance throughout its lifetime.",
            ],
            [
                'title' => 'Sticker-Tape Parade: Mercedes Announces 2026 AMG CLE53 Manufaktur Editionss',
                'excerpt' => 'Mercedes-Benz reveals its latest masterpiece - the 2026 AMG CLE53 Manufaktur Edition, combining luxury with unprecedented performance.',
                'content' => "Mercedes-Benz has unveiled its latest creation, the 2026 AMG CLE53 Manufaktur Edition, showcasing the pinnacle of automotive luxury and performance. This special edition model represents a perfect fusion of traditional craftsmanship and modern technology.

The AMG CLE53 Manufaktur Edition features a hand-crafted interior, exclusive paint options, and enhanced performance capabilities. The vehicle's exterior design maintains the elegant Mercedes-AMG styling while incorporating unique Manufaktur elements that set it apart from the standard models.

Key Features:
- Enhanced 3.0-liter inline-six engine
- AMG SPEEDSHIFT transmission
- Exclusive Manufaktur interior trim options
- Advanced driver assistance systems
- Limited production numbers

This special edition demonstrates Mercedes-Benz's commitment to pushing the boundaries of automotive excellence while maintaining its legacy of luxury and innovation.",
            ],
            [
                'title' => 'The Evolution of Electric Vehicles: A New Era in Automotive Industryy',
                'excerpt' => 'Exploring how electric vehicles are reshaping the automotive landscape and what the future holds for sustainable transportation.',
                'content' => "The automotive industry is undergoing a revolutionary transformation with the rise of electric vehicles (EVs). This shift represents more than just a change in powertrain technology; it's a complete reimagining of what mobility means in the modern world.

Current Trends:
- Increased range capabilities
- Faster charging technologies
- Enhanced battery longevity
- Improved performance metrics
- Greater affordability

The Future of EVs:
- Solid-state batteries
- Autonomous driving integration
- Solar charging capabilities
- Vehicle-to-grid technology
- Sustainable manufacturing processes

As we move forward, electric vehicles continue to prove that sustainable transportation doesn't mean compromising on performance or luxury.",
            ],
            [
                'title' => 'Maintenance Tips: Keeping Your Luxury Car in Prime Conditionn',
                'excerpt' => 'Essential maintenance tips and best practices for preserving the value and performance of your luxury vehicle.',
                'content' => "Maintaining a luxury vehicle requires attention to detail and regular care. Here's a comprehensive guide to keeping your premium car in excellent condition.

Essential Maintenance Tips:
1. Regular Oil Changes
- Use manufacturer-recommended oil
- Maintain proper change intervals
- Keep detailed service records

2. Tire Care
- Regular rotation and alignment
- Proper inflation
- Seasonal tire changes

3. Interior Care
- Use appropriate cleaning products
- Protect leather surfaces
- Regular detailing

4. Paint Protection
- Regular washing and waxing
- Ceramic coating consideration
- Garage storage when possible

Following these guidelines will help maintain your vehicle's value and ensure optimal performance throughout its lifetime.",
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create([
                'title' => $blog['title'],
                'slug' => Str::slug($blog['title']),
                'excerpt' => $blog['excerpt'],
                'content' => $blog['content'],
                'category_id' => Category::inRandomOrder()->first()->id,
                'is_published' => true,
                'is_featured' => fake()->boolean(30),
                'published_at' => now(),
            ]);
        }
    }
}
