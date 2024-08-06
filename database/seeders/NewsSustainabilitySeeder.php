<?php

namespace Database\Seeders;

use App\Models\NewsSustainability;
use Illuminate\Database\Seeder;
use App\Models\NewsContent;

class NewsSustainabilitySeeder extends Seeder
{
    public function run()
    {
        $news1 = NewsSustainability::create([
            'title' => 'Centra Run Together back in Ormeau Park for 2024',
            'url' => 'centra-run-together-back-in-ormeau-park-for-2024',
            'small_description' => 'Centra Run Together is back in Ormeau Park for 2024, bringing the community together for a great cause...',
            'media_id' => 1,
        ]);

        $news2 = NewsSustainability::create([
            'title' => 'SuperValu and Centra champion environmental change in stores and communities',
            'url' => 'supervalu-and-centra-champion-environmental-change-in-stores-and-communities-as-sustainability-upgrades-lead-to-significant-energy-savings',
            'small_description' => 'We are excited to announce the opening of our new store in downtown...',
            'media_id' => 1,
        ]);

        $news3 = NewsSustainability::create([
            'title' => 'SuperValu expands high quality meals offering following acquisition of Clean Cut Meals',
            'url' => 'supervalu-expands-high-quality-meals-offering-following-acquisition-of-clean-cut-meals',
            'small_description' => 'SuperValu has today announced an expansion of its market-leading convenience meal offering...',
            'media_id' => 1,
        ]);

        NewsContent::create([
            'news_sustainability_id' => $news1->id,
            'is_standard' => false,
            'content' => 'Test cintet jfkdsjfklsdj jfkds jfklds jfsdklfj sdklfjsdkl fjsdfdkl fjsdlkfjksd jfkldf fklsdfjfkldf jgdf jgkldfj gkldfjg dfjgkdf jgdfkjgldf gldf'
        ]);

        NewsContent::create([
            'news_sustainability_id' => $news2->id,
            'is_standard' => false,
            'content' => 'fjdsk fjdsklf jdskf jdksf jdskl fjdkls gkjfdl; gjfkld gjfkld gjfkld gjkfdd hgkfj hgfjkd gkfl hkfgi ofos gjfdklgmfldgjfkld '
        ]);

        NewsContent::create([
            'news_sustainability_id' => $news3->id,
            'is_standard' => false,
            'content' => 'fgjkld gjfdk lggj fkldgj fdklgj fdklgj fkdgjdfklgjf dklgjfkdl gfjgdfklgjf kdlgjfklg jfdkl'
        ]);
    }
}
