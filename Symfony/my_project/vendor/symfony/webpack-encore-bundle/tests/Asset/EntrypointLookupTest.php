<?php

namespace Symfony\WebpackEncoreBundle\Tests\Asset;

use Symfony\WebpackEncoreBundle\Asset\EntrypointLookup;
use PHPUnit\Framework\TestCase;
use Symfony\WebpackEncoreBundle\Exception\EntrypointNotFoundException;

class EntrypointLookupTest extends TestCase
{
    private $entrypointLookup;

    private static $testJson = <<<EOF
{
  "entrypoints": {
    "my_entry": {
        "js": [
          "file1.js",
          "file2.js"
        ],
        "css": [
          "styles.css",
          "styles2.css"
        ]
    },
    "other_entry": {
      "js": [
        "file1.js",
        "file3.js"
      ],
      "css": []
    }
  }
}
EOF;

    public function setUp()
    {
        $filename = tempnam(sys_get_temp_dir(), 'WebpackEncoreBundle');
        file_put_contents($filename, self::$testJson);

        $this->entrypointLookup = new EntrypointLookup($filename);
    }

    public function testGetJavaScriptFiles()
    {
        $this->assertEquals(
            ['file1.js', 'file2.js'],
            $this->entrypointLookup->getJavaScriptFiles('my_entry')
        );
    }

    public function testGetJavaScriptFilesReturnsUniqueFilesOnly()
    {
        $this->assertEquals(
            ['file1.js', 'file2.js'],
            $this->entrypointLookup->getJavaScriptFiles('my_entry')
        );

        $this->assertEquals(
            // file1.js is not returned - it was already returned above
            ['file3.js'],
            $this->entrypointLookup->getJavaScriptFiles('other_entry')
        );
    }

    public function testGetCssFiles()
    {
        $this->assertEquals(
            ['styles.css', 'styles2.css'],
            $this->entrypointLookup->getCssFiles('my_entry')
        );
    }

    public function testEmptyReturnOnValidEntryNoJsOrCssFile()
    {
        $this->assertEmpty(
            $this->entrypointLookup->getCssFiles('other_entry')
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Could not find the entrypoints file
     */
    public function testExceptionOnBadFilename()
    {
        $entrypointLookup = new EntrypointLookup('fake_file');
        $entrypointLookup->getCssFiles('anything');
    }

    /**
     * @expectedException Symfony\WebpackEncoreBundle\Exception\EntrypointNotFoundException
     * @expectedExceptionMessage Could not find the entry
     */
    public function testExceptionOnMissingEntry()
    {
        $this->entrypointLookup->getCssFiles('fake_entry');
    }

    /**
     * @expectedException Symfony\WebpackEncoreBundle\Exception\EntrypointNotFoundException
     * @expectedExceptionMessage Try "my_entry" instead
     */
    public function testExceptionOnEntryWithExtension()
    {
        $this->entrypointLookup->getJavaScriptFiles('my_entry.js');
    }
}
