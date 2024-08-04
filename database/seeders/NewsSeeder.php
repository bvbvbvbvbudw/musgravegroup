<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\Media;
use App\Models\NewsContent;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $media1 = Media::create(['path' => 'img/bg-contact.webp']);
        $media2 = Media::create(['path' => 'img/bg-contact.webp']);
        $media3 = Media::create(['path' => 'img/bg-contact.webp']);

        $news1 = News::create([
            'title' => 'Centra Run Together back in Ormeau Park for 2024',
            'url' => 'centra-run-together-back-in-ormeau-park-for-2024',
            'category' => 'Centra',
            'small_description' => 'Centra Run Together is back in Ormeau Park for 2024, bringing the community together for a great cause...',
            'is_popular' => false,
            'media_id' => $media1->id,
        ]);

        $news2 = News::create([
            'title' => 'New Store Opening in Downtown',
            'url' => 'new-store-opening-in-downtown',
            'category' => 'Business',
            'small_description' => 'We are excited to announce the opening of our new store in downtown...',
            'is_popular' => false,
            'media_id' => $media2->id,
        ]);

        $news3 = News::create([
            'title' => 'SuperValu expands high quality meals offering following acquisition of Clean Cut Meals',
            'url' => 'supervalu-expands-high-quality-meals-offering-following-acquisition-of-clean-cut-meals',
            'category' => 'News',
            'small_description' => 'SuperValu has today announced an expansion of its market-leading convenience meal offering...',
            'is_popular' => true,
            'media_id' => $media3->id,
        ]);

        NewsContent::create([
            'news_id' => $news1->id,
            'content' => 'Detailed content for Centra Run Together back in Ormeau Park for 2024...'
        ]);

        NewsContent::create([
            'news_id' => $news2->id,
            'content' => 'Detailed content for New Store Opening in Downtown...'
        ]);

        NewsContent::create([
            'news_id' => $news3->id,
            'content' => 'Detailed content for SuperValu expands high quality meals offering following acquisition of Clean Cut Meals...'
        ]);
    }
}
