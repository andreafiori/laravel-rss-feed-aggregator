<?php

namespace Tests\Unit;

use App\Models\FeedsListInterface;
use PHPUnit\Framework\TestCase;

abstract class BaseFeedsTest extends TestCase
{
    protected FeedsListInterface $feedsModel;

    abstract protected function createFeedsModel(): FeedsListInterface;

    protected function setUp(): void
    {
        parent::setUp();
        $this->feedsModel = $this->createFeedsModel();
    }

    public function test_implements_feeds_list_interface(): void
    {
        $this->assertInstanceOf(FeedsListInterface::class, $this->feedsModel);
    }

    public function test_get_feeds_returns_array(): void
    {
        $feeds = $this->feedsModel->getFeeds();

        $this->assertIsArray($feeds);
        $this->assertNotEmpty($feeds);
    }

    public function test_get_feeds_has_correct_structure(): void
    {
        $feeds = $this->feedsModel->getFeeds();

        // Should have at least one category
        $this->assertGreaterThan(0, count($feeds));

        // Each category should have required keys
        foreach ($feeds as $category) {
            $this->assertArrayHasKey('label', $category);
            $this->assertArrayHasKey('slug', $category);
            $this->assertArrayHasKey('feeds', $category);

            // Feeds should be an array
            $this->assertIsArray($category['feeds']);
        }
    }

    public function test_feeds_have_required_structure(): void
    {
        $feeds = $this->feedsModel->getFeeds();

        foreach ($feeds as $category) {
            $this->assertNotEmpty($category['feeds']);

            foreach ($category['feeds'] as $feed) {
                // Check required keys exist
                $this->assertArrayHasKey('label', $feed);
                $this->assertArrayHasKey('slug', $feed);
                $this->assertArrayHasKey('url', $feed);

                // Check that essential fields are not empty
                $this->assertNotEmpty($feed['label']);
                $this->assertNotEmpty($feed['slug']);
                $this->assertNotEmpty($feed['url']);
            }
        }
    }

    public function test_feeds_have_valid_urls(): void
    {
        $feeds = $this->feedsModel->getFeeds();

        foreach ($feeds as $category) {
            foreach ($category['feeds'] as $feed) {
                // Check that URL is valid
                $this->assertTrue(filter_var($feed['url'], FILTER_VALIDATE_URL) !== false,
                    "Invalid URL found: {$feed['url']} for feed: {$feed['label']} in category: {$category['label']}");

                // Check that website URL is valid if present and not empty
                if (isset($feed['website']) && !empty($feed['website'])) {
                    $this->assertTrue(filter_var($feed['website'], FILTER_VALIDATE_URL) !== false,
                        "Invalid website URL found: {$feed['website']} for feed: {$feed['label']}");
                }
            }
        }
    }

    public function test_feed_slugs_are_unique_within_categories(): void
    {
        $feeds = $this->feedsModel->getFeeds();

        foreach ($feeds as $category) {
            $slugs = array_column($category['feeds'], 'slug');
            $uniqueSlugs = array_unique($slugs);

            $this->assertEquals(count($slugs), count($uniqueSlugs),
                "Feed slugs should be unique within category: {$category['label']}");
        }
    }

    public function test_social_media_urls_are_valid_when_present(): void
    {
        $feeds = $this->feedsModel->getFeeds();
        $socialFields = ['facebook', 'twitter', 'linkedin', 'youtube', 'github', 'instagram'];

        foreach ($feeds as $category) {
            // Check category-level social media URLs
            foreach ($socialFields as $field) {
                if (isset($category[$field]) && !empty($category[$field])) {
                    $this->assertTrue(filter_var($category[$field], FILTER_VALIDATE_URL) !== false,
                        "Invalid {$field} URL found in category: {$category['label']}");
                }
            }

            // Check feed-level social media URLs
            foreach ($category['feeds'] as $feed) {
                foreach ($socialFields as $field) {
                    if (isset($feed[$field]) && !empty($feed[$field])) {
                        $this->assertTrue(filter_var($feed[$field], FILTER_VALIDATE_URL) !== false,
                            "Invalid {$field} URL found: {$feed[$field]} for feed: {$feed['label']}");
                    }
                }
            }
        }
    }

    public function test_get_feeds_returns_consistent_data(): void
    {
        $feeds1 = $this->feedsModel->getFeeds();
        $feeds2 = $this->feedsModel->getFeeds();

        $this->assertEquals($feeds1, $feeds2,
            'getFeeds() should return consistent data on multiple calls');
    }

    public function test_feeds_contain_rss_xml_or_feed_indicators(): void
    {
        $feeds = $this->feedsModel->getFeeds();

        foreach ($feeds as $category) {
            foreach ($category['feeds'] as $feed) {
                $url = strtolower($feed['url']);
                $hasRssIndicator = strpos($url, 'rss') !== false ||
                                 strpos($url, 'xml') !== false ||
                                 strpos($url, 'feed') !== false ||
                                 strpos($url, 'atom') !== false;

                $this->assertTrue($hasRssIndicator,
                    "Feed URL should contain RSS/XML/feed/atom indicator: {$feed['url']} for {$feed['label']} in {$category['label']}");
            }
        }
    }

    public function test_category_slugs_are_unique(): void
    {
        $feeds = $this->feedsModel->getFeeds();
        $categorySlugs = array_column($feeds, 'slug');
        $uniqueCategorySlugs = array_unique($categorySlugs);

        $this->assertEquals(count($categorySlugs), count($uniqueCategorySlugs),
            'Category slugs should be unique');
    }

    public function test_feeds_have_descriptions_when_available(): void
    {
        $feeds = $this->feedsModel->getFeeds();

        foreach ($feeds as $category) {
            foreach ($category['feeds'] as $feed) {
                // Description should be a string (can be empty)
                if (isset($feed['description'])) {
                    $this->assertIsString($feed['description']);
                }
            }
        }
    }

    /**
     * Helper method to find a category by label
     */
    protected function findCategoryByLabel(array $feeds, string $label): ?array
    {
        foreach ($feeds as $category) {
            if ($category['label'] === $label) {
                return $category;
            }
        }
        return null;
    }

    /**
     * Helper method to get all feed labels from a category
     */
    protected function getFeedLabelsFromCategory(array $category): array
    {
        return array_column($category['feeds'], 'label');
    }

    /**
     * Helper method to assert that specific feeds exist in a category
     */
    protected function assertFeedsExistInCategory(array $category, array $expectedFeeds): void
    {
        $feedLabels = $this->getFeedLabelsFromCategory($category);

        foreach ($expectedFeeds as $expectedFeed) {
            $this->assertContains($expectedFeed, $feedLabels,
                "Expected feed '{$expectedFeed}' not found in category '{$category['label']}'");
        }
    }
}
