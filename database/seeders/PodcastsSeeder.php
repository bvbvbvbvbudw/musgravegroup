<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Podcast;
use App\Models\Media;

class PodcastsSeeder extends Seeder
{
    public function run()
    {
        Podcast::create([
            'title' => 'Episode 1 – The Future of Tech',
            'url' => 'episode-1-the-future-of-tech',
            'content' => 'In this episode, we discuss the future of technology and its impact on various industries.',
            'spotify' => 'https://open.spotify.com/episode/1',
            'apple' => 'https://podcasts.apple.com/episode/1',
            'buzz' => 'https://buzzsprout.com/episode/1',
            'small_description' => 'Discussing the future of technology.',
            'status' => 'approved',
            'media_id' => 1,
        ]);

        Podcast::create([
            'title' => 'Episode 2 – Innovations in AI',
            'url' => 'episode-2-innovations-in-ai',
            'content' => 'Exploring the latest innovations in artificial intelligence and how they are changing the world.',
            'spotify' => 'https://open.spotify.com/episode/2',
            'apple' => 'https://podcasts.apple.com/episode/2',
            'buzz' => 'https://buzzsprout.com/episode/2',
            'small_description' => 'Latest innovations in AI.',
            'status' => 'approved',
            'media_id' => 1,
        ]);

        Podcast::create([
            'title' => 'Episode 3 – The Rise of Cryptocurrency',
            'url' => 'episode-3-the-rise-of-cryptocurrency',
            'content' => 'A deep dive into the world of cryptocurrency and its impact on the global economy.',
            'spotify' => 'https://open.spotify.com/episode/3',
            'apple' => 'https://podcasts.apple.com/episode/3',
            'buzz' => 'https://buzzsprout.com/episode/3',
            'small_description' => 'Exploring the rise of cryptocurrency.',
            'status' => 'approved',
            'media_id' => 1,
        ]);

        Podcast::create([
            'title' => 'Episode 4 – Sustainable Living',
            'url' => 'episode-4-sustainable-living',
            'content' => 'Discussing strategies and practices for living sustainably and reducing your carbon footprint.',
            'spotify' => 'https://open.spotify.com/episode/4',
            'apple' => 'https://podcasts.apple.com/episode/4',
            'buzz' => 'https://buzzsprout.com/episode/4',
            'small_description' => 'Strategies for sustainable living.',
            'status' => 'approved',
            'media_id' => 1,
        ]);

        Podcast::create([
            'title' => 'Episode 5 – The Art of Digital Marketing',
            'url' => 'episode-5-the-art-of-digital-marketing',
            'content' => 'An overview of the latest trends and techniques in digital marketing.',
            'spotify' => 'https://open.spotify.com/episode/5',
            'apple' => 'https://podcasts.apple.com/episode/5',
            'buzz' => 'https://buzzsprout.com/episode/5',
            'small_description' => 'Trends and techniques in digital marketing.',
            'status' => 'approved',
            'media_id' => 1,
        ]);
    }
}
