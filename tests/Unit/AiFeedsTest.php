<?php

namespace Tests\Unit;

use App\Models\AiFeeds;
use App\Models\FeedsListInterface;

class AiFeedsTest extends BaseFeedsTest
{
    protected function createFeedsModel(): FeedsListInterface
    {
        return new AiFeeds();
    }
    public function test_websites_category_exists(): void
    {
        $feeds = $this->feedsModel->getFeeds();
        $websitesCategory = $feeds[0];

        $this->assertEquals('Websites', $websitesCategory['label']);
        $this->assertEquals('websites', $websitesCategory['slug']);
    }

    public function test_specific_feeds_exist(): void
    {
        $feeds = $this->feedsModel->getFeeds();
        $category = $this->findCategoryByLabel($feeds, 'Websites');

        $this->assertNotNull($category, "Category 'Websites' not found");

        $this->assertFeedsExistInCategory($category, [
            'Machine learning mastery',
            'Open AI',
            'Google research',
        ]);
    }
}
