<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $sliders = [
            [
                'image' => 'images/slider/slider1.jpg',
                'category' => 'Lifestyle',
                'title' => 'Tips for Taking a Long-term Trip',
                'date' => 'January 2, 2019',
            ],
            [
                'image' => 'images/slider/slider2.jpg',
                'category' => 'Travel',
                'title' => 'Trip to California',
                'date' => 'September 15, 2019',
            ],
        ];
        $posts = [
            [
                'image' => 'images/news/f1.jpg',
                'category' => 'Explore',
                'title' => 'The best place to explore to enjoy',
                'date' => 'June 15, 2019',
            ],
            [
                'image' => 'images/news/f2.jpg',
                'category' => 'Lifestyle',
                'title' => 'How to Make list for travelling alone',
                'date' => 'September 15, 2019',
            ],
        ];

        return view('home', compact('sliders', 'posts'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function create_contact(Request $request)
    {
        dd($request->email);
    }

    public function singleBlog()
    {
        return view('single_blog');
    }
}
