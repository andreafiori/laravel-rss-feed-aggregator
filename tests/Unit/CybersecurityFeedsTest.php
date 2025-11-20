<?php

namespace Tests\Unit;

use App\Models\CybersecurityFeeds;
use App\Models\FeedsListInterface;

class CybersecurityFeedsTest extends BaseFeedsTest
{
    protected function createFeedsModel(): FeedsListInterface
    {
        return new CybersecurityFeeds();
    }

    public function test_websites_category_exists(): void
    {
        $feeds = $this->feedsModel->getFeeds();
        $websitesCategory = $feeds[0]; // First category

        $this->assertEquals('Threat Post', $websitesCategory['label']);
        $this->assertEquals('threat-post', $websitesCategory['slug']);
    }

    public function test_specific_feeds_exist(): void
    {
        $feeds = $this->feedsModel->getFeeds();
        $category = $this->findCategoryByLabel($feeds, 'Websites');

        $this->assertNotNull($category, "Category 'Websites' not found");

        // $this->assertFeedsExistInCategory($category, []);
    }
}
